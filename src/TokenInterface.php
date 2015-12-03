<?php
namespace SamIT\LimeSurvey\Interfaces;

interface TokenInterface {
    /**
     * @return int The unique ID for this token.
     */
    public function getId();

    /**
     * @return int The unique ID for the survey.
     */
    public function getSurveyId();

    /**
     * @return string
     */
    public function getToken();

    /**
     * @return string
     */
    public function getFirstName();

    /**
     * @return string
     */
    public function getLastName();

    /**
     * @return \DateTimeInterface
     */
    public function  getValidFrom();

    /**
     * @return \DateTimeInterface
     */
    public function getValidUntil();

    /**
     * @return int
     */
    public function getUsesLeft();

    /**
     * @return string
     */
    public function getEmail();

    /**
     * @return \DateTimeInterface|null Returns the timestamp of completion, or null if not completed.
     */
    public function getCompleted();

    /**
     * @return \DateTimeInterface|null Returns the timestamp of invitation, or null if not completed.
     */
    public function getInvitationSent();


    /**
     * @return int The number of reminders sent
     */
    public function getReminderCount();

    /**
     * @return \DateTimeInterface|null Returns the timestamp of reminder, or null if not completed.
     */
    public function getReminderSent();
    /**
     * @return string The default language of the survey.
     */
    public function getLanguage();
}