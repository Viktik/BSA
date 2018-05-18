<?php

namespace Cryptocurrency\Task1;

class Bitcoin implements Currency{
    public function getName(): string
    {
        return "Bitcoin";
    }
    public function getDailyPrice(): float
    {
        $json = file_get_contents('https://api.coinmarketcap.com/v1/ticker/bitcoin/');
        $obj = json_decode($json,true);
        $btcRate = $obj[0]["price_usd"];
        return $btcRate;
    }
    public function getLogoUrl(): string
    {
        return 'https://s2.coinmarketcap.com/static/img/coins/32x32/1.png';
    }
}