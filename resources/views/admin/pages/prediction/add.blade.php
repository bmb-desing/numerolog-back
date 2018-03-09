@extends('layouts.admin')

@section('content')
    <div class="box box-primary">
        <div class="box-header with-border">
            <h3 class="box-title">Добавить новое значение для {{$predictions->name_rus}}</h3>
        </div>
        {{Form::open(array('route' => array('prediction.store'), 'files' => true, 'method' => 'post'))}}
        <div class="box-body">
            <div class="form-group">
                <input type="hidden" value="{{$predictions->name}}" name="name">
                {{Form::label('number', 'Значение')}}
                {{Form::text('number', '' , array('placeholder' => 'Значение', 'id' => 'number', 'class' => 'form-control'))}}
            </div>
            <div class="form-group">
                {{Form::label('text', 'Текст')}}
                {{Form::textarea('text', '' , array('id' => 'text', 'class' => 'form-control', 'rows' => '4'))}}
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