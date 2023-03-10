<?php

namespace App\Traits;

trait ApiResponse
{
    private $data;
    private $message;
    private $success;

    public function __construct($data = null)
    {
        $this->data     = $data;
    }

    public function sendSuccess($data = null, $message = null , $responseCode = null): \Illuminate\Http\JsonResponse 
    {
        $message = (empty($message)) ? 'success' : $message;

        $this->data = $data;
        $this->setMessage($message);
        $this->setResponseCode($responseCode);
        $this->success = true;

        return $this->responseWrapper();
    }

    public function sendError($message = null, $responseCode = null): \Illuminate\Http\JsonResponse 
    {
        $message = (empty($message)) ? 'error' : $message;
        
        $this->setMessage($message);
        $this->setResponseCode($responseCode);
        $this->success = false;

        return $this->responseWrapper();
    }

    private function responseWrapper(): array
    {
        $data = (empty($this->data)) ? null : $this->data;

        return [
            'code'      => http_response_code(),
            'success'   => $this->success,
            'message'   => $this->message,
            'data'      => $data
        ];
    }

    private function setMessage($message): void
    {
        if (is_array($message)) {
            $extract = array_values($message);
            $this->message = $extract[0];
        } else {
            $this->message = $message;
        }
    }

    private function setResponseCode($responseCode): void
    {
        if (!empty($responseCode) && is_numeric($responseCode)) {
            http_response_code($responseCode);
        }
    }
}
