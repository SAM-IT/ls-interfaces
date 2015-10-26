<?php
namespace SamIT\LimeSurvey\Interfaces;

interface GroupInterface {
    /**
     * @return int The unique ID for this survey.
     */
    public function getId();

    /**
     * @return QuestionInterface[]
     */
    public function getQuestions();


    /**
     * @return string Description of the group
     */
    public function getDescription();

    /**
     * @return string Title of the group
     */
    public function getTitle();
}