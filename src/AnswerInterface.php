<?php
namespace SamIT\LimeSurvey\Interfaces;

interface AnswerInterface {
    /**
     * @return string Answer text
     */
    public function getText();

    public function getCode();
}