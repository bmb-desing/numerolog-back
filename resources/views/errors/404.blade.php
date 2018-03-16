
@extends('layouts.layout')
@section('meta')
    <title>404</title>
    <meta property="og:title" content="404"/>
    <meta property="og:description" content="Страница не найдена"/>
    <meta name="description" content="Страница не найдена">
@endsection
@section('content')
    <div class="found">
        <div class="found__wrapper">
            <h1 class="found__title">404</h1>
            <h2 class="found__subtitle">Страница не найдена</h2><a href="/" class="all__link found__link">Перейти на главную</a>
        </div>
    </div>
@endsection