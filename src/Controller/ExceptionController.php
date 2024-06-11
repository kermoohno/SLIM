<?php

namespace App\Controller;

use Slim\Psr7\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;

class ExceptionController extends ExceptionController{

	public function notFound(Request $request){

		$response = new Response;
		return $this->render($response, 'notfound.html');
	}
}
