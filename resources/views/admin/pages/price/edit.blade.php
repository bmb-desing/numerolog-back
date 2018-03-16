@extends('layouts.admin')

@section('content')
    <div class="box box-primary">
        <div class="box-header with-border">
            <h3 class="box-title">Изменить услугу {{$price->name}}</h3>
        </div>
        {{Form::open(array('route' => array('price.update', $price->id), 'files' => true, 'method' => 'patch'))}}
        <div class="box-body">
            <div class="form-group">
                {{Form::label('name', 'Название')}}
                {{Form::text('name', $price->name , array('placeholder' => 'Название', 'id' => 'name', 'class' => 'form-control'))}}
            </div>
            <div class="form-group">
                {{Form::label('description', 'Описание')}}
                {{Form::text('description', $price->description , array('placeholder' => 'Описание', 'id' => 'description', 'class' => 'form-control'))}}
            </div>
            <div class="form-group">
                {{Form::label('price_ru', 'Цена в рублях без консультации')}}
                {{Form::text('price[ru]', $price->price['ru'] , array('placeholder' => 'Цена в рублях без консультации', 'id' => 'price_ru', 'class' => 'form-control'))}}
            </div>
            <div class="form-group">
                {{Form::label('price_dollar', 'Цена в долларах без консультации')}}
                {{Form::text('price[dollar]', $price->price['dollar'] , array('placeholder' => 'Цена в долларах без консультации', 'id' => 'price_dollar', 'class' => 'form-control'))}}
            </div>
            <div class="form-group">
                {{Form::label('price_ru_consul', 'Цена в рублях с консультацией')}}
                {{Form::text('price[ru_consul]', $price->price['ru_consul'] , array('placeholder' => 'Цена в рублях с консультацией', 'id' => 'price_ru_consul', 'class' => 'form-control'))}}
            </div>
            <div class="form-group">
                {{Form::label('price_dollar_consul', 'Цена в долларах с консультацией')}}
                {{Form::text('price[dollar_consul]', $price->price['dollar_consul'] , array('placeholder' => 'Цена в долларах с консультацией', 'id' => 'price_dollar_consul', 'class' => 'form-control'))}}
            </div>
        </div>
        <div class="box-footer">
            {{Form::submit('Обновить', array('class' => 'btn btn-primary')) }}
            {{Form::close()}}



        </div>
        <!-- /.box-body -->

        </form>
    </div>
@endsection