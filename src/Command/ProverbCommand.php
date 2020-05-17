<?php

declare(strict_types=1);

namespace App\Command;

use Chiron\Console\AbstractCommand;
use Chiron\Console\ExitCode;
use App\Generator;

final class ProverbCommand extends AbstractCommand
{
    protected static $defaultName = 'proverb';

    protected function configure()
    {
        $this->setDescription('Display a random proverb.');
    }

    public function perform(Generator $generator): int
    {
        $proverb = $generator->proverb();

        $this->info('Proverb of the day :');
        $this->newLine();
        $this->sprintf('    ~~~ %s ~~~', $proverb);

        return ExitCode::OK;
    }
}
