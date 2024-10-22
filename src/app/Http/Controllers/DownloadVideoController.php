<?php

namespace App\Http\Controllers;

use App\Jobs\DownloadVideoJob;
use Illuminate\Http\Request;

class DownloadVideoController extends Controller
{
    public function __invoke(Request $request)
    {
        DownloadVideoJob::dispatch($request->get('url'));
        return response()->json([
            'message'=>'successful'
        ]);
    }
}
