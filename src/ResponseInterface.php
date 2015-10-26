<?php
namespace SamIT\LimeSurvey\Interfaces;

interface ResponseInterface {

    /**
     * @return int
     */
    public function getSurveyId();

    /**
     * @return string
     */
    public function getId();


    /**
     * @return \DateTimeImmutable
     */
    public function getSubmitDate();

    /**
     * @return [] Array with all response data.
     */
    public function getData();

}