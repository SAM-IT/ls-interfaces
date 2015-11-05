<?php
namespace SamIT\LimeSurvey\Interfaces;

interface AnswerInterface {
    /**
     * @return string Answer text
     */
    public function getText();

    /**
     * @return string Answer code
     */
    public function getCode();
}