<?php

/**
 * This file is part of the Nette Framework (https://nette.org)
 * Copyright (c) 2004 David Grudl (https://davidgrudl.com)
 */

declare(strict_types=1);

namespace Nette\Bridges\MiddlewareDI;

use Nette;
use Nette\Schema\Expect;


/**
 * Middleware extension for Nette DI.
 */
class MiddlewareExtension extends Nette\DI\CompilerExtension
{
	public function getConfigSchema(): Nette\Schema\Schema
	{
		return Expect::structure([
		]);
	}


	public function loadConfiguration()
	{
		$builder = $this->getContainerBuilder();
		$config = $this->config;
	}
}
