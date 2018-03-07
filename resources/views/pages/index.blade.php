@extends('layouts.layout')
@section('meta')
    <title>123</title>
    <meta name="description" content="123">
@endsection
@section('content')
    <header class="header">
        <div class="wrapper header__wrapper">
            <div class="header__content">
                <h1 class="header__title">Вы попали в блог о нумерологии <br/> БЕЗ МАГИИ</h1>
                <p class="header__text">Здесь нет места экзотике, <br/> только проверенные факты и иследования</p>
            </div>
        </div>
    </header>
    <section class="section_me me">
        <div class="wrapper wrapper_full wrapper wrapper_flex wrapper_vertical-center me__wrapper">
            <div class="me__left"><img src="{{asset('img/me-img.jpg')}}" alt="Ольга Перцева" class="me__img"></div>
            <div class="me__right">
                <h2 class="me__title">Ольга <br/> Перцева</h2>
                <ul class="me__list">
                    <li>Нумеролог</li>
                    <li>Дипломированный психолог</li>
                    <li>Коуч, тренер личностного роста</li>
                    <li>Практический опыт 14 лет</li>
                    <li>Авторская интерпритация психоматрицы <br/> основанна исключительно на практическом <br/> опыте</li>
                </ul>
            </div>
        </div>
    </section>
    <div class="info">
        <div class="wrapper info__wrapper">
            <p class="info__text">
                Методика оценки личности позволяет за 2 минуты узнать о человеке 98% скрытой информации. Без
                эзотерики и магии . Диагностика позволяет сделать едва ли ни безошибочно  выбрать партнера для
                брака , сотрудника , партнёра для бизнеса , понять поведение ребёнка и обезопасить его будущее
            </p>
        </div>
    </div>
    @include('sections.matrix')
    @include('sections.inst')
    @include('sections.journal')

@endsection