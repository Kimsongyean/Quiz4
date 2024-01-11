<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Storage;

class DisplayController extends Controller
{
    public function __invoke($folder, $file)
    {
        $path = $folder.'/'.$file;

        return response()->file(
            Storage::disk('do_block_storage')->path($path)
        );
    }
}

