<?php declare(strict_types=1);

namespace Cryptocurrency\Task3;

use Cryptocurrency\Task1\CoinMarket;

class MarketHtmlPresenter
{
    public function present(CoinMarket $market): string
    {
        $currencies = $market->getCurrencies();
        foreach ($currencies as $currency){
            echo "<br>" . $currency->getName() . "current price: " . $currency->getDailyPrice(); 'img src="' . $currency->getLogoUrl() . '"';       }
    }
}