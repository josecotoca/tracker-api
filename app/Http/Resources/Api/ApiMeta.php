<?php

namespace App\Http\Resources\Api;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ApiMeta extends JsonResource
{
    public static function Success($message = []) {
        return [
            'success' => true,
            'errors' => is_array($message) ? $message : [$message],
        ];
    }

    public static function Error($message) {
        return [
            'success' => false,
            'errors' => is_array($message) ? $message : [$message],
        ];
    }
}
