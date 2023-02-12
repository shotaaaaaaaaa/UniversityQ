<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Question</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="public/styles.css" >
    </head>
    <body>
        <div class='questions'>
            <h1>質問一覧</h1>
                <a href='/question/create/{{ $university->id }}'>質問を作成する</a>
                @foreach($questions as $question)
                    <div class='question'>
                        <a href="/question/{{ $question->id }}">{{ $question->text }}</a>
                    </div>
                @endforeach
        </div>
    </body>
</html>