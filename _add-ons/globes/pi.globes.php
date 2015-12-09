<?php

class Plugin_globes extends Plugin {

	public function index() {
		$name = $this->fetchParam("name");
		return ($this->tasks->getGlobal($name));
	}

	public function check()
	{
		$name 	= $this->fetchParam('name');
		$global = $this->tasks->getGlobal($name);
		if ($global) {
			return $this->content;
		}
	}

}
