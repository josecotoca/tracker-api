<?php

namespace App\Http\Resources\Api;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Http\Resources\Json\ResourceResponse;

class ApiErrorResource extends JsonResource
{
    public $statusCode;
    public static $wrap = 'meta';
    
    public function __construct($resource, $statusCode = 401)
    {
        $resource = ApiMeta::Error($resource);
        parent::__construct($resource);
        $this->statusCode = $statusCode;
    }

    public function toResponse($request)
    {
        return (new ResourceResponse($this))->toResponse($request)->setStatusCode($this->statusCode);
    }
}
