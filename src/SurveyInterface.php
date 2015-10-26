<?php
namespace SamIT\LimeSurvey\Interfaces;

interface SurveyInterface {
    /**
     * @return int The unique ID for this survey.
     */
    public function getId();

    /**
     * @return GroupInterface[]
     */
    public function getGroups();

    /**
     * @return string Description of the survey
     */
    public function getDescription();

    /**
     * @return string Title of the survey
     */
    public function getTitle();
}