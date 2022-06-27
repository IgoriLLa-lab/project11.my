<html lang="en">
<head>
    <title>Статьи</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>

<div class="container panel panel-default ">
    <h2 class="panel-heading">Напишите Ваш Пост</h2>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error . ' - Название поста уже занято' }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="/create" id="articleForm" method="post">
        @csrf
        <div class="form-group">
            <input type="text" name="post_title" class="form-control" placeholder="Введите название поста" id="post_title">
        </div>

        <div class="form-group">
            <textarea class="form-control" name="post_text" placeholder="Введите Ваш пост" id="post_text"></textarea>
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-success" id="submit">Отправить</button>
        </div>
    </form>
</div>
