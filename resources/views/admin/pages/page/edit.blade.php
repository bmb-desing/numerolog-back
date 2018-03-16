@extends('layouts.admin')

@section('content')
    <div class="box box-primary">
        <div class="box-header with-border">
            <h3 class="box-title">Изменить мета данные страницы {{$page->alias}}</h3>
        </div>
        {{Form::open(array('route' => array('pages.update', $page->id), 'files' => true, 'method' => 'patch'))}}
        <div class="box-body">
            <div class="form-group">
                {{Form::label('title', 'Название')}}
                {{Form::text('title', $page->title , array('placeholder' => 'Название', 'id' => 'title', 'class' => 'form-control'))}}
            </div>
            <div class="form-group">
                {{Form::label('description', 'Описание')}}
                {{Form::text('description', $page->description , array('placeholder' => 'Описание', 'id' => 'description', 'class' => 'form-control'))}}
            </div>
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Изображение
                    </h3>
                    <!-- tools box -->
                    <div class="pull-right box-tools">
                        <button type="button" class="btn btn-default btn-sm" data-widget="collapse" data-toggle="tooltip" title="Collapse">
                            <i class="fa fa-minus"></i></button>

                    </div>
                    <!-- /. tools -->
                </div>
                <!-- /.box-header -->
                <div class="box-body pad">
                    <a class="file-manager btn btn-primary" data-input="thumbnail" data-preview="holder" class="btn btn-primary">
                        <i class="fa fa-picture-o"></i> Выбрать
                    </a>
                    <input id="thumbnail" class="form-control" type="hidden" name="thumbnail" value="{{$page->thumbnail}}">
                    <img id="holder" style="vertical-align: middle;" src="{{$page->thumbnail}}">
                </div>
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
@section('script')
    <script>
        var domain = "";
        $(document).on('click','.file-manager',function(e){
            $(this).filemanager('image', {prefix: domain});
        });
    </script>

@endsection