<?php

namespace App\Console;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class TmpCommand extends Command
{
    protected function configure()
    {
        $this->setName('tmp')
            ->setDescription('My Tmp command');
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $output->writeln('My Tmp command');
        return 0;
    }
}
