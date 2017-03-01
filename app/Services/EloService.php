<?php

namespace App\Services;

use App\Entities\MatchEntity;

class EloService
{
    /**
     * Constant home string
     */
    const HOME = 'home';

    /**
     * Constant away string
     */
    const AWAY = 'away';

    /**
     * @var MatchEntity
     */
    protected $matchEntity;

    /**
     * Class constructor
     *
     * @param MatchEntity $matchEntity
     */
    public function __construct(MatchEntity $matchEntity)
    {
        $this->matchEntity = $matchEntity;
    }

    /**
     * Sets match elo ratings on to the matchEntity
     *
     * @return MatchEntity
     */
    public function setMatchEloRatings()
    {

    }

    /**
     * Computes match elo ratings
     */
    public function computeMatchEloRatings()
    {

    }

}
