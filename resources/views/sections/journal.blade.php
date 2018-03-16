@if(count($journal) > 0)
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
        @if(count($journal) == 3)
            <a href="{{route('journal.all')}}" class="all__link">Читать все записи</a>
        @endif
    </div>
@endif