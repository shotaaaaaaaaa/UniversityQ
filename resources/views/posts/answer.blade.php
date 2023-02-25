<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <x-app-layout>
    <head>
        <meta charset="utf-8">
        <title>Answer</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="{{ secure_asset('/css/answer.css') }}" >
    </head>
    <body>
        <div class='answers'>
            <h1>回答</h1>
                <h2>Q. {{ $question->text }}</h2>
                <p class='make'><a href='/question/make/{{ $question->id }}'>回答する</a></p>
                @foreach($answers as $answer)
                    <div class='answer'>
                        <p class='text'>A. {{ $answer->text }}</p>
                    </div>
                @endforeach
        </div>
        <div class="footer">
            <p class='back'><a href="/university/{{ $question->university_id }}">戻る</a></p>
        </div>
    </body>
    </x-app-layout>
</html>