<?php

namespace Cryptocurrency\Task1;

/**
 * Class Ethereum
 * @package Cryptocurrency\Task1
 */
class Ethereum implements Currency
{
    /**
     * @var float
     */
    private $dailyPrice;

    /**
     * Ethereum constructor.
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
        return "Ethereum";
    }

    /**
     * @return float
     */
    public function getDailyPrice(): float
    {
        return $this->dailyPrice;
    }

    public function getLogoUrl(): string
    {
        return 'https://s2.coinmarketcap.com/static/img/coins/32x32/1027.png';
    }
}