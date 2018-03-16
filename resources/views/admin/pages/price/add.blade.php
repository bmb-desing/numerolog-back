@extends('layouts.admin')

@section('content')
    <div class="box box-primary">
        <div class="box-header with-border">
            <h3 class="box-title">Добавить услугу</h3>
        </div>
        {{Form::open(array('route' => array('price.store'), 'files' => true, 'method' => 'post'))}}
        <div class="box-body">
            <div class="form-group">
                {{Form::label('name', 'Название')}}
                {{Form::text('name', '' , array('placeholder' => 'Название', 'id' => 'name', 'class' => 'form-control'))}}
            </div>
            <div class="form-group">
                {{Form::label('description', 'Описание')}}
                {{Form::text('description', '' , array('placeholder' => 'Описание', 'id' => 'description', 'class' => 'form-control'))}}
            </div>
            <div class="form-group">
                {{Form::label('price_ru', 'Цена в рублях без консультации')}}
                {{Form::text('price[ru]', '' , array('placeholder' => 'Цена в рублях без консультации', 'id' => 'price_ru', 'class' => 'form-control'))}}
            </div>
            <div class="form-group">
                {{Form::label('price_dollar', 'Цена в долларах без консультации')}}
                {{Form::text('price[dollar]', '' , array('placeholder' => 'Цена в долларах без консультации', 'id' => 'price_dollar', 'class' => 'form-control'))}}
            </div>
            <div class="form-group">
                {{Form::label('price_ru_consul', 'Цена в рублях с консультацией')}}
                {{Form::text('price[ru_consul]', '' , array('placeholder' => 'Цена в рублях с консультацией', 'id' => 'price_ru_consul', 'class' => 'form-control'))}}
            </div>
            <div class="form-group">
                {{Form::label('price_dollar_consul', 'Цена в долларах с консультацией')}}
                {{Form::text('price[dollar_consul]', '' , array('placeholder' => 'Цена в долларах с консультацией', 'id' => 'price_dollar_consul', 'class' => 'form-control'))}}
            </div>
        </div>
        <div class="box-footer">
            {{Form::submit('Добавить', array('class' => 'btn btn-primary')) }}
            {{Form::close()}}



        </div>
        <!-- /.box-body -->

        </form>
    </div>
@endsection