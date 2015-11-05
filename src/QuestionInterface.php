<?php
namespace SamIT\LimeSurvey\Interfaces;

interface QuestionInterface
{
    /**
     * @return string The unique ID for this survey.
     */
    public function getId();

    /**
     * @return string Question text
     */
    public function getText();

    /**
     * @return string Question title
     */
    public function getTitle();


    /**
     * @return int The number of axes for this question.
     */
    public function getDimensions();

    /**
     * Returns the answers for this question.
     * Must return null in case this is an open question.
     * Must return
     * @
     * @return AnswerInterface[]
     */
    public function getAnswers();

}