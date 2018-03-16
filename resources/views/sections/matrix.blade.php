<?php $matrix = 0;?>
<div class="matrix">
    <h2 class="matrix__title">Узнай<span> прямо сейчас</span> свою психоматрицу</h2>
    <p class="matrix__text">Психоматрица по дате рождения (Квадрат Пифагора)</p>
    <div class="wrapper matrix__wrapper">
        <div class="matrix__form">
            <input placeholder="Выберите дату" class="matrix__input matrix_date">
        </div>
        <div class="result">
            <div class="result__loader">
                <div class="result__image"></div>
            </div>
            <div class="result__hidden">
                <p class="matrix__text">Отлично! Это Ваша психоматрица или инструкция к твоей жизни</p>
                <div class="result__wrap">
                    <div class="result__left">
                        <div class="result__big">
                            <div class="result__row result__flex">
                                <div class="result__info">Дата рождение</div>
                                <div data-answer="date" class="result__answer"></div>
                            </div>
                            <div class="result__row result__flex">
                                <div class="result__info">Доп. числа</div>
                                <div data-answer="second-number" class="result__answer"></div>
                            </div>
                            <div class="result__row result__flex">
                                <div class="result__info">Число судьбы</div>
                                <div data-answer="destiny-number" class="result__answer"></div>
                            </div>
                        </div>
                        <div class="result__cube">
                            <div class="result__row">
                                <div class="result__item">
                                    <div class="result__context">
                                        <h4>Характер</h4>
                                        <p data-index='0'></p>
                                    </div>
                                </div>
                                <div class="result__item">
                                    <div class="result__context">
                                        <h4>Здоровье</h4>
                                        <p data-index='3'></p>
                                    </div>
                                </div>
                                <div class="result__item">
                                    <div class="result__context">
                                        <h4>Удача</h4>
                                        <p data-index='6'></p>
                                    </div>
                                </div>
                            </div>
                            <div class="result__row">
                                <div class="result__item">
                                    <div class="result__context">
                                        <h4>Энергия</h4>
                                        <p data-index='1'></p>
                                    </div>
                                </div>
                                <div class="result__item">
                                    <div class="result__context">
                                        <h4>Логика</h4>
                                        <p data-index='4'></p>
                                    </div>
                                </div>
                                <div class="result__item">
                                    <div class="result__context">
                                        <h4>Долг</h4>
                                        <p data-index='7'></p>
                                    </div>
                                </div>
                            </div>
                            <div class="result__row">
                                <div class="result__item">
                                    <div class="result__context">
                                        <h4>Интерес</h4>
                                        <p data-index='2'></p>
                                    </div>
                                </div>
                                <div class="result__item">
                                    <div class="result__context">
                                        <h4>Труд</h4>
                                        <p data-index='5'></p>
                                    </div>
                                </div>
                                <div class="result__item">
                                    <div class="result__context">
                                        <h4>Память</h4>
                                        <p data-index='8'></p>
                                    </div>
                                </div>
                            </div>
                            <div class="result__row">
                                <div class="result__item">
                                    <div class="result__context">
                                        <h4>Быт</h4>
                                        <p data-index='9'></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="result__right">
                        <div class="result__item result__item_full">
                            <div class="result__context">
                                <h4>Темперамент</h4>
                                <p data-index='10'></p>
                            </div>
                        </div>
                        <div class="result__item result__item_full">
                            <div class="result__context">
                                <h4>Цель</h4>
                                <p data-index='11'></p>
                            </div>
                        </div>
                        <div class="result__item result__item_full">
                            <div class="result__context">
                                <h4>Семья</h4>
                                <p data-index='12'></p>
                            </div>
                        </div>
                        <div class="result__item result__item_full">
                            <div class="result__context">
                                <h4>Привычки</h4>
                                <p data-index='13'></p>
                            </div>
                        </div>
                    </div>
                </div>
                @if($matrix != 0)
                <form action="{{route('payment')}}" method="post">
                    <input type="hidden" name="matrix">
                    <input type="hidden" name="destiny">
                    <input type="hidden" name="dates">
                    <input type="email" name="mail" required placeholder="Укажите ваш E-mail" class="matrix__input input__mail">
                    <h3 class="matrix__subtitle">ПОЛУЧИТЕ МОМЕНТАЛЬНЫЙ РАССЧЕТ<br/>ПО ДАТЕ РОЖДЕНИЯ</h3>
                    <button class="matrix__button">Получить моментально</button>
                    <p class="matrix__small">Моментально на Ваш E-mail нумеролог пришлет заказанный Вами рассчет по дате</p>
                </form>
                @endif
            </div>
        </div>
    </div>
</div>