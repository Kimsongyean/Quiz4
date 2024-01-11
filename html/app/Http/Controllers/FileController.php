<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class FileController extends Controller
{
    public function upload(Request $request)
    {

        $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'type' => 'required',
            'file' => 'required|mimes:jpg,png,jpeg|max:2048',
        ]);

        $file = $request->file('file');

        if ($request->type == 2) {
            $path = $file->store('images', 'spaces'); // 'uploads' is the folder in your Space
            $full_path = env("DO_SPACES_FULL_ENDPOINT")."/".$path;
        } else if ($request->type == 1) {
            $folder_name = "images";
            $file_name = $file->getClientOriginalName();
            $path = $file->storeAs($folder_name, $file_name, 'do_block_storage');
            $full_path = "/display/".$path;
        } else response()->json(['message' => 'error']);

        if (!empty($path)) {
            DB::table("images")->insert([
                "first_name" => $request->first_name,
                "last_name" => $request->last_name,
                "img_src" =>  $full_path,
                "type" =>  $request->type,
            ]);
        }


        return redirect("/list");
    }

     public function list() {
        $images = DB::table('images')->get();
        return view('list', ['images' => $images]);
    }
}

