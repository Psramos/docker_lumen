<?php

namespace App\Controller;

use Illuminate\Http\JsonResponse;

class DefaultController extends Controller
{
    /**
     * @return JsonResponse
     */
    public function get(): JsonResponse
    {
        return new JsonResponse(['message' => 'ok']);
    }
}
