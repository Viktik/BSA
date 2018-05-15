<?php declare(strict_types=1);

namespace Cryptocurrency\Task1;

class CoinMarket
{
    /**
     * @var Currency[]
     */
    private $currencies= [];
    public function addCurrency(Currency $currency): void
    {
        $this->currencies[$currency->getName()] = $currency;
    }

    public function maxPrice(): float
    {
        $maxPrice =0;
        foreach ($this->currencies as $currency){
            $currentPrice = $currency->getDailyPrice();
            if ($currentPrice > $maxPrice){
                $maxPrice = $currentPrice;
            }
        }

        return $maxPrice;
    }

    /**
     * @return Currency[]
     */

    public function getCurrencies(): array
    {
        return $this->currencies;
    }
}