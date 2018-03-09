@extends('layouts.admin')

@section('content')
    <div class="box box-primary">
        <div class="box-header with-border">
            <h3 class="box-title">Обновить {{$pred->number}}</h3>
        </div>
        {{Form::open(array('route' => array('prediction.update', $pred->id), 'files' => true, 'method' => 'patch'))}}
        <div class="box-body">
            <div class="form-group">
                {{Form::label('text', 'Текст')}}
                {{Form::textarea('text', $pred->text , array('id' => 'text', 'class' => 'form-control', 'rows' => '4'))}}
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
