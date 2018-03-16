@extends('layouts.admin')

@section('content')
    <div class="box box-primary">
        <div class="box-header with-border">
            <h3 class="box-title">Изменить социальные данные</h3>
        </div>
        {{Form::open(array('route' => array('social.post'), 'files' => true, 'method' => 'post'))}}
        <div class="box-body">
            @foreach($social as $item)
                <div class="form-group">
                    {{Form::label($item->name, $item->name_rus)}}
                    {{Form::text($item->name, $item->value , array('placeholder' => $item->name_rus, 'id' => $item->name, 'class' => 'form-control'))}}
                </div>
            @endforeach
        </div>
        <div class="box-footer">
            {{Form::submit('Обновить', array('class' => 'btn btn-primary')) }}
            {{Form::close()}}



        </div>
        <!-- /.box-body -->

        </form>
    </div>
@endsection