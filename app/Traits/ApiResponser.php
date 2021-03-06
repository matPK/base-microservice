<?php

namespace App\Traits;

use Illuminate\Http\Response;

trait ApiResponser
{

    /**
     * Build success response
     * @param  string|array $data
     * @param  int $code
     * @return Illuminate\Http\JsonResponse
     */
    public function successResponse($data, $code = Response::HTTP_OK)
    {
        return response()->json($data, $code);
    }

    /**
     * Build created response
     * @param  string|array $data
     * @return Illuminate\Http\JsonResponse
     */
    public function createdResponse($data)
    {
        return $this->successResponse($data, Response::HTTP_CREATED);
    }

    /**
     * Build deleed response
     * @return Illuminate\Http\JsonResponse
     */
    public function deletedResponse()
    {
        return $this->successResponse([], Response::HTTP_NO_CONTENT);
    }

    /**
     * Build error responses
     * @param  string|array $message
     * @param  int $code
     * @return Illuminate\Http\JsonResponse
     */
    public function errorResponse($message, $code)
    {
        $errors = is_array($message) ? $message : [$message];
        return response()->json(['errors' => $errors, 'code' => $code], $code);
    }
}
