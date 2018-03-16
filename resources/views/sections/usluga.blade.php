<div class="pricing">
    <h2 class="pricing__title">Цены</h2>
    <h3 class="pricing__subtitle">Готовые предложения</h3>
    <div class="pricing__wrapper wrapper_flex wrapper wrapper_wrap wrapper_vertical-sctrech">
        @foreach($price as $item)
            <div class="price">
                <div class="price__header">
                    <h3 class="price__title">{{$item->name}}</h3>
                    @if(!empty($item->description))
                        <h4 class="price__subtitle">{{$item->description}}</h4>
                    @endif
                </div>
                <div class="price__text">
                    <div class="price__item">
                        <p>Описание</p><b>{{$item->price['ru']}} руб<br/>{{$item->price['dollar']}}$</b>
                    </div>
                    <div class="price__item">
                        <p>С консультацией</p><b>{{$item->price['ru_consul']}} руб<br/>{{$item->price['dollar_consul']}}$</b>
                    </div>
                    <button data-theme="{{$item->name}}" class="modal__open price__button">Получить</button>
                </div>
            </div>
        @endforeach
        <div class="price">
            <div class="price__header">
                <h3 class="price__title">Ваш вариант</h3>
            </div>
            <div class="price__text">
                <div class="price__item">
                    <p>Возможны<br/>любые варианты</p>
                </div>
                <div class="price__item">
                    <p>Обсуждаем<br/>индивидуально</p>
                </div>
            </div>
        </div>
    </div>
</div>