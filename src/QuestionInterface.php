<?php
namespace SamIT\LimeSurvey\Interfaces;

interface QuestionInterface {
    /**
     * @return int The unique ID for this survey.
     */
    public function getId();

    /**
     * Returns all subquestions
     * @return QuestionInterface[]
     */
    public function getQuestions();


    /**
     * @return string Question text
     */
    public function getText();

    /**
     * @return AnswerInterface
     */
    public function getAnswers();
}