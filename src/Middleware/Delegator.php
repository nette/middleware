<?php

/**
 * This file is part of the Nette Framework (https://nette.org)
 * Copyright (c) 2004 David Grudl (https://davidgrudl.com)
 */

declare(strict_types=1);

namespace Nette\Middleware;

use Nette;


class Delegator implements RequestHandler
{
	public function __construct(Middleware $middleware, RequestHandler $next)
	{
		$this->middleware = $middleware;
		$this->next = $next;
	}


	public function handle(Request $request): Nette\Http\IResponse
	{
		return $this->middleware->process($request, $this->next);
	}
}
