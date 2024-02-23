<?php

namespace Moduvel\HttpHealthChecker;

use Moduvel\HttpAbstracted\Request\RequestInterface as Request;
use Moduvel\HttpAbstracted\Response\ResponseInterface as Response;

class HealthController
{
    public function __construct(
        public Request $request,
        public Response $response,
    ) {
    }

    public function index()
    {
        $data = [
            'status' => true,
            'queries' => $this->request->allQueries(),
        ];

        return $this->response->setJson($data)
            ->setStatusCode(200)
            ->respond();
    }
}
