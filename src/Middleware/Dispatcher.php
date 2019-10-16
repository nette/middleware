<?php

/**
 * This file is part of the Nette Framework (https://nette.org)
 * Copyright (c) 2004 David Grudl (https://davidgrudl.com)
 */

declare(strict_types=1);

namespace Nette\Middleware;

use Nette;


class Dispatcher
{
	public function __construct(array $middlewares)
	{
		$this->middlewares = $middlewares;
	}


	public function dispatch(Request $request): Nette\Http\IResponse
	{
		$delegator = new class implements RequestHandler {
			public function handle(Request $request): Nette\Http\IResponse
			{
				return new Nette\Http\Response;
			}
		};

		foreach (array_reverse($this->middlewares) as $middleware) {
			$delegator = new Delegator($middleware, $delegator);
		}

		return $delegator->handle($request);
	}
}
