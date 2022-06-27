<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Posts;

class PostController extends Controller
{

    /**
     * Метод выводит представление create
     */
    public function create()
    {
        return view('create');
    }


    /**
     * Метод создания нового поста проверяет на уникальность значение title
     * @param Request $request
     * @return void
     */
    public function store(Request $request): void
    {

        $post = new Posts($request->all()); //добавил $request->all()!!!не совсем понятно почему стало добавлять записи в БД

        $validatedData = $request->validate([
            'post_title' => 'required|unique:posts|max:255',
        ]);

        $post->post_title = $request->input('post_title');

        $post->post_text = $request->input('post_text');

        $post->save();

    }
}
