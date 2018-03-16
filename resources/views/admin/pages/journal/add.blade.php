@extends('layouts.admin')

@section('content')
    <div class="box box-primary">
        <div class="box-header with-border">
            <h3 class="box-title">Добавить статью</h3>
        </div>
        {{Form::open(array('route' => array('journal.store'), 'files' => true, 'method' => 'post'))}}
        <div class="box-body">
            <div class="form-group">
                {{Form::label('meta_name', 'Название статьи')}}
                {{Form::text('meta[name]', '' , array('placeholder' => 'Название статьи', 'id' => 'meta_name', 'class' => 'form-control'))}}
            </div>
            <div class="form-group">
                {{Form::label('alias', 'Alias статьи')}}
                {{Form::text('alias', '' , array('placeholder' => 'Alias статьи', 'id' => 'alias', 'class' => 'form-control translit'))}}
            </div>
            <div class="form-group">
                {{Form::label('meta_title', 'Title статьи')}}
                {{Form::text('meta[title]', '' , array('placeholder' => 'Title статьи', 'id' => 'meta_title', 'class' => 'form-control'))}}
            </div>
            <div class="form-group">
                {{Form::label('meta_description', 'Description статьи')}}
                {{Form::textarea('meta[description]', '' , array('placeholder' => 'Description статьи', 'id' => 'meta_description', 'class' => 'form-control'))}}
            </div>
            <div class="form-group">
                {{Form::label('short_text', 'Краткое описание')}}
                {{Form::textarea('short_text', '' , array('placeholder' => 'Краткое описание', 'id' => 'short_text', 'class' => 'form-control'))}}
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
                    <input id="thumbnail" class="form-control" type="hidden" name="thumbnail">
                    <img id="holder" style="vertical-align: middle;">
                </div>
            </div>
        </div>
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Текст
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
                {{Form::textarea('text', '' , array('id' => 'textarea', 'class' => 'textarea', 'style' => 'width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;'))}}
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
@section('script')
    <script>
        var domain = "";
        $(document).on('click','.file-manager',function(e){
            $(this).filemanager('image', {prefix: domain});
        });
    </script>

@endsection