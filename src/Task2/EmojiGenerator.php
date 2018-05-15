<?php declare(strict_types=1);

namespace Cryptocurrency\Task2;

class EmojiGenerator
{
    private function getEmojis(){
        $emojis = ['🚀', '🚃', '🚄', '🚅', '🚇'];
        foreach ($emojis as $emoji){
            yield $emoji;
        }
    }
    public function generate(): \Generator
    {
        foreach ($this->getEmojis() as $value){
            echo $value;
        }
    }
}