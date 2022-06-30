<?php

namespace App\Http\Controllers;

use App\StorePostRequest;
use Illuminate\Http\Request;
use App\Models\Posts;
use Nette\Utils\Image;

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

        StorePostRequest::validate($request);

        $post = new Posts($request->all()); //добавил $request->all()!!!не совсем понятно почему стало добавлять записи в БД

        $post->post_title = $request->input('post_title');

        $post->post_text = $request->input('post_text');

        $image = $request->file('image')->storePublicly('public/image');


//        $new_name = rand() . '.' . $image->getClientOriginalExtension();
//        $image->move(storage_path('images'), $new_name);
//
//        $post->image = $request->input((string) $_FILES['image']);
//
//        $image->store('images');

        $post->save();

    }
}
