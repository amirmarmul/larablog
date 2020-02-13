<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class TrumbowygController extends Controller
{
    /**
     * 
     */
    public function upload(Request $request)
    {
        $data = Storage::url(
            $request->file('file')
                ->store('public')
        );

        return response(['success' => true, 'data' => $data]);
    }
}
