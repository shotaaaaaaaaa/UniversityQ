<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <x-app-layout>
    <head>
        <meta charset="utf-8">
        <title>Question</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="{{ secure_asset('/css/question.css') }}" >
    </head>
    <body>
        <div class='questions'>
            <h1>{{ $university->name }}</h1>
            <h2>質問一覧</h2>
                <p class='make'><a href='/question/create/{{ $university->id }}'>質問を作成する</a></p>
                @foreach($questions as $question)
                    <div class='question'>
                        <p class='text'><a href="/question/{{ $question->id }}">{{ $question->text }}</a></p>
                    </div>
                @endforeach
        </div>
        <div class="footer">
            <p class='back'><a href="/category/{{ $university->category_id }}">戻る</a></p>
        </div>
    </body>
    </x-app-layout>
</html>