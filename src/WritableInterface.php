<?php


namespace SamIT\LimeSurvey\Interfaces;


interface WritableInterface
{
    /**
     * @return bool Return true successful, false otherwise.
     */
    public function save();
}