<?php

/**
 * This file is part of the Nette Framework (https://nette.org)
 * Copyright (c) 2004 David Grudl (https://davidgrudl.com)
 */

declare(strict_types=1);

namespace Nette\Middleware;

use Nette;


class ServerRequest implements Request
{
	private $httpRequest;


	public function __construct(Nette\Http\IRequest $httpRequest)
	{
		$this->httpRequest = $httpRequest;
	}


	public function getHttpRequest(): Nette\Http\IRequest
	{
		return $this->httpRequest;
	}
}
