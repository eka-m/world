<?php

namespace Eka\World\Actions;

interface ActionInterface
{
	public function execute(array $args): self;
}
