<?php

use Symfony\Component\Finder\Finder as Finder;

class Tasks_globes extends Tasks {

	public function getOverviewData() {

		$theme_settings = Config::getThemesPath() . '/' . Config::getTheme() . '/theme.yaml';

		$theme_yaml = File::get($theme_settings);

		$settings = YAML::parse($theme_yaml);

		if (array_key_exists('global', $settings)) {
			$globals = $settings['global'];
		} else {
			$globals = array(
				'error' => 'No global key was found in your theme.yaml file'
			);
		}

		return compact('theme_settings', 'theme_yaml', 'globals');
	}

}
