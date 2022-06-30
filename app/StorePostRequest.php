<?php

namespace App;


use Illuminate\Http\Request;

class StorePostRequest
{

    static public function validate(Request $request): void
    {
        $request->validate([
            'post_title' => 'required|unique:posts|max:255',
            'post_text' => 'max:5',
            'image' => 'required|mimes:jpeg,bmp,png',
        ]);
    }

}
