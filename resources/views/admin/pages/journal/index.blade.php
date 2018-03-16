@extends('layouts.admin')
@section('content')
    <a href="{{route('journal.create')}}" class="btn btn-lg btn-success  btn-lg">Добавить статью</a>
    @if(isset($journal))
        <section class="content">
            <div class="row">
                <div class="col-xs-12">
                    <div class="box">
                        <div class="box-header">
                            <h3 class="box-title">Список статей</h3>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">
                            <table id="table-personal" class="table table-bordered table-striped">
                                <thead>
                                <tr>
                                    <th>Название</th>
                                    <th>Краткое описание</th>
                                    <th>Опубликованно</th>
                                    <th>Действия</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($journal as $item)
                                    <tr>
                                        <td style="vertical-align: middle;">{{$item->meta['name']}}</td>
                                        <td style="vertical-align: middle;">{{$item->short_text}}</td>
                                        <td>
                                            @if($item->publish == 1)
                                                Опубликованно
                                            @else
                                                Не опубликованно
                                            @endif
                                        </td>
                                        <td style="vertical-align: middle; text-align: center;">
                                            <a href="{{route('journal.edit',$item->id)}}" class="btn btn-warning btn-sm">Редактировать</a>
                                            <form action="{{route('journal.destroy', $item->id)}}" method="post" style="display: inline-block;">
                                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                                <input name="_method" type="hidden" value="DELETE">
                                                <input type="hidden" value="{{URL::current()}}" name="url">
                                                <button type="submit" class="btn btn-danger btn-sm">Удалить</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                                <tfoot>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    @else
        <h2>У вас на данный момент нет услуг</h2>
    @endif



@endsection