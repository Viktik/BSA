<?php declare(strict_types=1);

namespace Cryptocurrency\Task2;

class EmojiGenerator
{
    public function generate(): \Generator
    {
        $emojis = ['🚀', '🚃', '🚄', '🚅', '🚇'];
        foreach ($emojis as $emoji){
            yield $emoji;
        }
    }
    function getEmojis(){
        foreach ($this->generate() as $emoj){
            echo $emoj;
        }
    }
}
$gen = new EmojiGenerator();
$gen->getEmojis();