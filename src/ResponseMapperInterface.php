<?php


namespace SamIT\LimeSurvey\Interfaces;

/**
 * Classes implementing this interface can be used to map data from a Response to the questions.
 * Interface Mapper
 * @package SamIT\LimeSurvey\Interfaces
 *
 * Implementations will probably have a dependency on ResponseInterface
 */

interface ResponseMapperInterface
{

    /**
     * In case of a closed / fixed choice question, the text of the Answer is used.
     * @param QuestionInterface $question
     * @return string[] The answer texts in the response for the given Question.
     */
    public function getTexts(QuestionInterface $question);


    /**
     * In case of a closed / fixed choice question, the text of the Answer is used.
     * @param QuestionInterface $question
     * @return string[] The first answer text in the response for the given Question.
     */
    public function getText(QuestionInterface $question);

    /**
     * In case of an open question an empty array is returned.
     * @param QuestionInterface $question
     * @return AnswerInterface[] The answers in the response for the given Question.
     */
    public function getAnswers(QuestionInterface $question);


    /**
     * In case of an open question null is returned.
     * @param QuestionInterface $question
     * @return AnswerInterface The first answer in the response for the given Question.
     */
    public function getAnswer(QuestionInterface $question);


}