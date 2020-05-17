<?php

declare(strict_types=1);

namespace App\Command;

use Chiron\Console\AbstractCommand;
use Chiron\Console\ExitCode;
use App\Sayings;

final class ProverbCommand extends AbstractCommand
{
    protected static $defaultName = 'proverb';

    protected function configure()
    {
        $this->setDescription('Display a random proverb.');
    }

    public function perform(Sayings $sayings): int
    {
        $proverb = $sayings->proverb();

        $this->newLine();
        $this->notice("    ~~ {$proverb} ~~");
        $this->newLine();

        return ExitCode::OK;
    }
}
