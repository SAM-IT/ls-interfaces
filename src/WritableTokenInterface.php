<?php


namespace SamIT\LimeSurvey\Interfaces;


interface WritableTokenInterface extends WritableInterface, TokenInterface
{
    /**
     * @param string $value
     * @return void
     */
    public function setFirstName($value);

    /**
     * @param string $value
     * @return void
     */
    public function setLastName($value);

    /**
     * @param string $value
     * @return void
     */
    public function setToken($value);

    /**
     * @param \DateTimeInterface $value The valid from datetime for this token, pass null to not use a valid from datetime.
     * @return void
     */
    public function setValidFrom(\DateTimeInterface $value = null);

    /**
     * @param \DateTimeInterface $value The valid until datetime for this token, pass null to not use a valid until datetime.
     * @return void
     */
    public function setValidUntil(\DateTimeInterface $value = null);

    /**
     * @param int $value The number of uses left for the token.
     * @return void
     */
    public function setUsesLeft($value);

    /**
     * @param string $value
     * @return void
     */
    public function setEmail($value);

    /**
     * @param \DateTimeInterface $value The completion datetime for this token, pass null to mark token as incomplete.
     * @return void
     */
    public function setCompleted(\DateTimeInterface $value = null);

    /**
     * @param \DateTimeInterface $value The datetime on which an invitation was sent to this token, set to null to mark as not invited.
     * @return void
     */
    public function setInvitationSent(\DateTimeInterface $value = null);


    /**
     * @param int $value The number of reminders that have been sent for the token.
     * @return void
     */
    public function setReminderCount($value);

    /**
     * @param \DateTimeInterface $value The datetime on which the last reminder was sent to this token, set to null to mark as no reminder sent.
     * @return void
     */
    public function setReminderSent(\DateTimeInterface $value = null);

    /**
     * @param string $value The language to use for this token.
     * @return void
     */
    public function setLanguage($value);

    /**
     * @param string $name The name of the attribute.
     * @param string $value The value of this attribute, it is always stored as a string.
     * @return void
     * @throws \InvalidArgumentException When $name is an unknown custom attribute.
     */
    public function setCustomAttribute($name, $value);

}