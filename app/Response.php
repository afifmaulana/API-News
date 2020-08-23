<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Response extends Model
{
    public static function transform($message, $status, $data, $statusCode)
    {
        return response()->json([
            'message' => $message,
            'status' => $status,
            'data' => $data
        ], $statusCode);
    }
}
