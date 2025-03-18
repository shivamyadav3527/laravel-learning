<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UploadController extends Controller
{
    //
    public function uploadFile(Request $request) {
        $path = $request->file('file')->store('', 'public');
        return view('fileData', ['data' => $path]);
    }
}
