<?php

namespace Contao\Connector\Console;

use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;

class ConfigGetCommand extends AbstractCommand
{
	protected function configure()
	{
		parent::configure();

		$this
			->setName('config:get')
			->setDescription('Get a config entry.')
			->addArgument(
			'key',
			InputArgument::REQUIRED,
			'The config entry key name.'
		);
	}

	protected function execute(InputInterface $input, OutputInterface $output)
	{
		$key = $input->getArgument('key');

		$settings = $this->createSettings($input, $output);
		$endpoint = $this->createEndpoint($settings);

		$result = $endpoint->config->get($key);

		$this->outputErrors($result, $output);

		$output->write(
			sprintf(
				'<comment>%s</comment>',
				$key
			)
		);
		$output->write(': ');
		$output->writeln($this->formatValueForOutput($result->value));
	}
}
