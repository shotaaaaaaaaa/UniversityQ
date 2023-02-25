<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <x-app-layout>
    <head>
        <meta charset="utf-8">
        <title>Make</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="{{ secure_asset('/css/make.css') }}" >
    </head>
    <body>
        <div class='make'>
            <h1>回答作成</h1>
                <form action="/question/{{ $question->id }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <textarea name="answer[text]" placeholder="回答"></textarea>
                    </div>
                    <input type="hidden" name="answer[user_id]" value="{{ Auth::id() }}">
                    <input type="hidden" name="answer[question_id]" value="{{ $question->id }}">
                    <input type="submit" value="作成">
                </form>
        </div>
        <div class="footer">
            <p class='back'><a href="/question/{{ $question->id }}">戻る</a></p>
        </div>
    </body>
    </x-app-layout>
</html>