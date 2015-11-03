# ls-interfaces
Interfaces for Limesurvey entities: Survey, Group, Question, Answer

Abstracting from the Limesurvey questions, subquestions and answer scales is done in the following way.

# Abstraction from LimeSurvey.

--DRAFT

* Each Question has a number of dimensions (current: {0, 1, 2}).
* A single choice or text question has 0 dimensions, it has 1 data point.
* A question with 1 dimension has n data points, where n is the number of (sub)questions in the first dimension.
* A question with 2 dimensions has n * m data points, where n is the number of questions in the first dimension and m is the number of questions in the 2nd dimension.
* Each data point either has a fixed set of answers (LimeSurvey imposes the extra restriction that for each question this fixed set is the same for all subquestions.

## Examples:

        public function int getDimensions();
        
        /**
         * Returns the subquestions for the specified dimension. 
         **/
        public function QuestionInterface[] getQuestions(int $i);
        
If `getDimensions()` returns 2 for a question, then all questions returned from `getQuestions()` will have 1 dimension.
(Think of it like partial function application)

        if ($question->getDimensions() == 2) {
        
            foreach($question->getQuestions(0) as $i => $subQuestion) {
                assert($subQuestion->getDimensions() == 1);
                
                foreach($subQuestion->getQuestions(0) as $j => $subSubQuestion) {
                    assert($subSubQuestion->getDimensions() == 0);
                    assert(
                        $subSubQuestion->getId() 
                        == $question->getQuestions(1)[j]->getQuestions(0)[$i]->getId()
                        == $question->getQuestions($i, $j)->getId()
                    );
                    
                }
            }
        }
 
Intuitively in most cases you can think of dimension 0 as the Y axis, and dimension 1 as the X axis.
How much did you eat?

 ........  | Yesterday | Today  |
---------- | --------- | ------ |
Vegetables | [0, 0]    | [1, 0] |  
Meat       | [0, 1]    | [1, 1] |


* Note that unlike LimeSurvey in practice, these interfaces could support different answer options for each data point.

These interfaces require the implementer implements question objects even when LimeSurvey might not have corresponding questions,
consider dual scale questions:
  
 ...  | Scale 1   | Scale 2          |
----- | --------- | ---------------- |
SQ001 | {1, 2, 3} | {Yes, Maybe, No} |  
SQ002 | {1, 2, 3} | {Yes, Maybe, No} |

In this example (in LS) scale 1 has answer options 1, 2 and 3, scale 2 has options Yes, Maybe and No. These interfaces do not have the notion
of answer scales. Instead only questions with 0 dimensions may have answer options.
Further more our interfaces require this to be exposed as a question with 2 dimensions, with 2 questions each. 
Note that Scale 1 and Scale 2 in this must be exposed as Questions.

# Usage
The goal of these interfaces is to allow developers to program against interfaces without worrying about LimeSurvey internals.
An implementer can, for example, create a client that uses the JSON-RPC API available in LS2.x (https://github.com/SAM-IT/ls2-jsonrpc-client).
Alternatives, could be creating a LimeSurvey plugin that exposes the required data as JSON (this could be more performant since less round trips are requried).

When LimeSurvey internals change there is no need to adapt dependent code and the only thing that needs to be adapted are the implementations of these interfaces.

# Notes

Some random notes that will be moved to appropriate interfaces:

* QuestionInterface::getId() must be unique within a LimeSurvey installation, this must also hold for "dummy" objects like the Scale questions.


