<?php

namespace App\Entities;

class MatchEntity
{
    /**
     * @var integer
     */
    protected $homeUser;

    /**
     * @var integer
     */
    protected $awayUser;

    /**
     * @var integer
     */
    protected $homeScore;

    /**
     * @var integer
     */
    protected $awayScore;

    /**
     * @var boolean
     */
    protected $bullseyes;

    /**
     * @return int
     */
    public function getHomeUser()
    {
        return $this->homeUser;
    }

    /**
     * @param int $homeUser
     * @return $this
     */
    public function setHomeUser($homeUser)
    {
        $this->homeUser = (integer) $homeUser;
        return $this;
    }

    /**
     * @return int
     */
    public function getAwayUser()
    {
        return $this->awayUser;
    }

    /**
     * @param int $awayUser
     * @return $this
     */
    public function setAwayUser($awayUser)
    {
        $this->awayUser = (integer) $awayUser;
        return $this;
    }

    /**
     * @return int
     */
    public function getHomeScore()
    {
        return $this->homeScore;
    }

    /**
     * @param int $homeScore
     * @return $this
     */
    public function setHomeScore($homeScore)
    {
        $this->homeScore = (integer) $homeScore;
        return $this;
    }

    /**
     * @return int
     */
    public function getAwayScore()
    {
        return $this->awayScore;
    }

    /**
     * @param int $awayScore
     * @return $this
     */
    public function setAwayScore($awayScore)
    {
        $this->awayScore = (integer) $awayScore;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getBullseyes()
    {
        return $this->bullseyes;
    }

    /**
     * @param boolean $bullseyes
     * @return $this
     */
    public function setBullseyes($bullseyes)
    {
        $this->bullseyes = (boolean) $bullseyes;
        return $this;
    }
}