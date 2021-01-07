<?php

declare(strict_types=1);

namespace App\Command;

use Chiron\Core\Console\AbstractCommand;
use App\PratchettQuotes;

final class QuoteCommand extends AbstractCommand
{
    protected static $defaultName = 'quote';

    protected function configure()
    {
        $this->setDescription('Display a random quote from Terry Pratchett books.');
    }

    public function perform(PratchettQuotes $quotes): int
    {
        $this->comment(sprintf("\n `%s`\n  - Terry Pratchett", $quotes->random()));

        return self::SUCCESS;
    }
}
