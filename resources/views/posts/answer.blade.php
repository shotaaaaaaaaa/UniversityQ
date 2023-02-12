<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Answer</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="public/styles.css" >
    </head>
    <body>
        <div class='questions'>
            <h1>回答一覧</h1>
                <a href='/question/make/{{ $question->id }}'>回答する</a>
                @foreach($answers as $answer)
                    <div class='answer'>
                        <p>{{ $answer->text }}</p>
                    </div>
                @endforeach
        </div>
    </body>
</html>