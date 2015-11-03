<?php


namespace SamIT\LimeSurvey\Interfaces;


interface LocaleAwareInterface
{
    /**
     * @return string The current language for the object.
     */
    public function getLanguage();

    /**
     * @param string $language
     * @return self A copy of the object localized to the current locale.
     */
    public function getLocalized($language);
}