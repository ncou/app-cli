<?php

declare(strict_types=1);

namespace App;

/**
 * Class used to select a random quote from Terry Pratchett books.
 */
final class PratchettQuotes
{
    private const QUOTES = [
        'Do you not know that a man is not dead while his name is still spoken?',
        'Goodness is about what you do. Not who you pray to.',
        'It\'s still magic even if you know how it\'s done.',
        'Evil begins when you begin to treat people as things.',
        'Stories of imagination tend to upset those without one.',
        'In ancient times cats were worshipped as gods; they have not forgotten this.',
        'Time is a drug. Too much of it kills you.',
        'In the beginning there was nothing, which exploded.',
        'If you have enough book space, I don\'t want to talk to you.',
        'Five exclamation marks, the sure sign of an insane mind.',
        'Real stupidity beats artificial intelligence every time.',
        'Coming back to where you started is not the same as never leaving.',
        'I\'d rather be a rising ape than a falling angel.',
        'This book was written using 100% recycled words.',
        '...inside every old person is a young person wondering what happened.',
        'We who think we are about to die will laugh at anything.',
        'Did I do anything last night that suggested I was sane?',
        'Sometimes glass glitters more than diamonds because it has more to prove.',
        'Only in our dreams are we free. The rest of the time we need wages.',
        'Progress just means bad things happen faster.',
        'The trouble is you can shut your eyes but you can\'t shut your mind.',
        'Of course I\'m sane, when trees start talking to me, I don\'t talk back.',
        'Freedom without limits is just a word.',
        'Given enough coffee I could rule the world.',
        'I used to think that I was stupid, and then I met philosophers.',
        'We live and learn, or, perhaps more importantly we learn and live.',
        'I am a great fan of science, but I cannot do a quadratic equation.',
        'The truth may be out there, but the lies are inside your head.',
        'The worst thing you can do is nothing.',
        'Every step is a first step if it\'s a step in the right direction.',
        ];

    public function random(): string
    {
        // Select a random index in the quotes array.
        $index = array_rand(self::QUOTES);

        return self::QUOTES[$index];
    }
}
