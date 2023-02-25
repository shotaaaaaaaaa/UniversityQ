<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <x-app-layout>
    <head>
        <meta charset="utf-8">
        <title>University</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="{{ secure_asset('/css/university.css') }}" >
    </head>
    <body>
        <div class='universities'>
            <h1>大学一覧</h1>
                @foreach($universities as $university)
                    <div class='university'>
                        <p><a href="/university/{{ $university->id }}">{{ $university->name }}</a></p>
                    </div>
                @endforeach
        </div>
        <div class="footer">
            <p class='back'><a href="/category">戻る</a></p>
        </div>
    </body>
    </x-app-layout>
</html>