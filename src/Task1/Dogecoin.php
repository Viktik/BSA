<?php

namespace Cryptocurrency\Task1;

/**
 * Class Dogecoin
 * @package Cryptocurrency\Task1
 */
class Dogecoin implements Currency
{
    /**
     * @var float
     */
    private $dailyPrice;

    /**
     * Dogecoin constructor.
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
        return "Dogecoin";
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
        return 'https://s2.coinmarketcap.com/static/img/coins/32x32/74.png';
    }
}