<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <x-app-layout>
    <head>
        <meta charset="utf-8">
        <title>Create</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="{{ secure_asset('/css/create.css') }}" >
    </head>
    <body>
        <div class='create'>
            <h1>質問作成</h1>
                <form action="/university" method="POST">
                    @csrf
                    <div class="form-group">
                        <textarea name="question[text]" placeholder="質問"></textarea>
                    </div>
                    <input type="hidden" name="question[user_id]" value="{{ Auth::id() }}">
                    <input type="hidden" name="question[university_id]" value="{{ $university->id }}">
                    <input type="submit" value="作成">
                </form>
        </div>
        <div class="footer">
            <p class='back'><a href="/university/{{ $university->id }}">戻る</a></p>
        </div>
    </body>
    </x-app-layout>
</html>