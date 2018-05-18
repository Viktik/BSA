<?php

namespace Cryptocurrency\Task1;

/**
 * Class Bitcoin
 *
 * @package Cryptocurrency\Task1
 */
class Bitcoin implements Currency
{
    /**
     * @var int
     */
    private $dailyPrice;

    /**
     * Bitcoin constructor.
     *
     * @param float $dailyPrice
     */
    public function __construct(float $dailyPrice)
    {
        $this->dailyPrice = $dailyPrice;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return "Bitcoin";
    }

    /**
     * @return float
     */
    public function getDailyPrice(): float
    {
        return $this->dailyPrice;
    }

    /**
     * @return string
     */
    public function getLogoUrl(): string
    {
        return 'https://s2.coinmarketcap.com/static/img/coins/32x32/1.png';
    }
}