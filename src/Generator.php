<?php

declare(strict_types=1);

namespace App;

final class Generator
{
    private static $proverbs = [
        'Absence makes the heart grow fonder.',
        'Actions speak louder than words.',
        'A journey of a thousand miles begins with a single step.',
        'All good things must come to an end.',
        'A picture is worth a thousand words.',
        'A watched pot never boils.',
        'Beggars can\'t be choosers.',
        'Better late than never.',
        'Birds of a feather flock together.',
        'Don\'t bite the hand that feeds you.',
        'Don\'t count your chickens before they hatch.',
        'Don\'t judge a book by its cover.',
        'Don\t put all of your eggs in one basket.',
        'Don\'t put off until tomorrow what you can do today.',
        'Don\'t put too many irons in the fire.',
        'Fortune favors the bold.',
        'God helps those who help themselves.',
        'Good things come to those who wait.',
        'Honesty is the best policy.',
        'Hope for the best, prepare for the worst.',
        'If it ain\'t broke, don\'t fix it.',
        'If you can\'t beat \'em, join \'em.',
        'If you play with fire, you\'ll get burned.',
        'If you want something done right, you have to do it yourself.',
        'Keep your friends close, and your enemies closer.',
        'Laughter is the best medicine.',
        'Like father, like son.',
        'People who live in glass houses should not throw stones.',
        'Practice makes perfect.',
        'The early bird gets the worm.',
        'The enemy of my enemy is my friend.',
        'The grass is always greener on the other side.',
        'The pen is mightier than the sword.',
        'There is no such thing as a free lunch.',
        'The squeaky wheel gets the grease.',
        'Two heads are better than one.',
        'Two wrongs don\'t make a right.',
        'When in Rome, do as the Romans do.',
        'Where there\'s smoke, there\'s fire.',
        'You can lead a horse to water, but you can\'t make him drink it.',
        ];

    public function proverb(): string
    {
        // select a random proverb in the array.
        $index = array_rand(static::$proverbs);

        return static::$proverbs[$index];
    }
}
