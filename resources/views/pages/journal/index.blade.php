@extends('layouts.layout')
@section('meta')
    <title>{{$meta->title}}</title>
    <meta property="og:title" content="{{$meta->title}}"/>
    <meta property="og:description" content="{{$meta->description}}"/>
    <meta name="description" content="{{$meta->description}}">
    <meta property="og:image" content="{{$meta->thumbnail}}">
@endsection
@section('content')
    <div class="pricing">
        <h2 class="pricing__title">Журнал</h2>
        <h3 class="pricing__subtitle">Мысли в слух</h3>
        <div class="journal__wrapper wrapper_flex wrapper wrapper_wrap">
            @foreach($journal as $item)
                <div class="journal">
                    <div class="journal__left" style="padding-right: 20px"><a href="{{route('journal.item', ['item' => $item->alias])}}"><img src="{{$item->thumbnail}}" alt="{{$item->meta['name']}}"></a></div>
                    <div class="journal__right">
                        <h3 class="journal__title"><a href="{{route('journal.item', ['item' => $item->alias])}}">{{$item->meta['name']}}</a></h3>
                        <p class="journal__text">
                            {{$item->short_text}}
                        </p><a href="{{route('journal.item', ['item' => $item->alias])}}" class="journal__link">читать ></a>
                    </div>
                </div>
            @endforeach
        </div>
        {{$journal->links('paginate.paginate')}}
    </div>
@endsection