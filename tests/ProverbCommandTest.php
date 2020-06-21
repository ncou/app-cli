<?php

declare(strict_types=1);

namespace Tests;

use App\Command\ProverbCommand;
use Chiron\Container\Container;
use PHPUnit\Framework\TestCase;
use Symfony\Component\Console\Application;
use Symfony\Component\Console\Tester\CommandTester;

class ListCommandTest extends TestCase
{
    public function testExecuteProverbCommand()
    {
        $command = new ProverbCommand();
        $command->setApplication(new Application());
        $command->setContainer(new Container());

        $commandTester = new CommandTester($command);
        $commandTester->execute(['command' => $command->getName()]);

        $this->assertStringContainsString('~~', $commandTester->getDisplay());
    }

    // TODO : ajouter un test en utilisant l'Application::class et parcontre il faudra créer une méthode pour récupérer la command.
    // TODO : Il faudra vérifier si cela fonctionne correctement (c'est à dire que le setApplication et setContainer est bien initialisé)
    /*
    public function testExecute()
    {
        $kernel = static::createKernel();
        $application = new Application($kernel);

        $command = $application->find('app:create-user');

        $commandTester = new CommandTester($command);
        $commandTester->execute([
            'command'  => $command->getName(),
            'firstName' => 'Gary',
            'lastName' => 'Houbre',
        ]);

        // the output of the command in the console
        $output = $commandTester->getDisplay();
        $this->assertContains('Successful you have created the user : Gary Houbre', $output);
    }*/
}
