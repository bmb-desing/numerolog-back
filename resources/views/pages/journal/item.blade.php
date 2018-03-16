
@extends('layouts.layout')
@section('meta')
    <title>{{$journal->meta['title']}}</title>
    <meta property="og:title" content="{{$journal->meta['title']}}"/>
    <meta property="og:description" content="{{$journal->meta['description']}}"/>
    <meta name="description" content="{{$journal->meta['description']}}">
    <meta property="og:image" content="{{$journal->thumbnail}}">
@endsection
@section('content')
    <h1 class="content__title">{{$journal->meta['name']}}</h1>
    <div class="content">
        {!! $journal->text !!}
    </div>
@endsection