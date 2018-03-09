@extends('layouts.admin')
@section('content')
    <a href="{{route('prediction.create', ['name' => $predictions->name])}}" class="btn btn-lg btn-success  btn-lg">Добавить значение для {{$predictions->name_rus}}</a>
    @if(isset($predictions))
        <section class="content">
            <div class="row">
                <div class="col-xs-12">
                    <div class="box">
                        <div class="box-header">
                            <h3 class="box-title">Список {{$predictions->name_rus}}</h3>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">
                            <table id="table-personal" class="table table-bordered table-striped">
                                <thead>
                                <tr>
                                    <th>Значение</th>
                                    <th>Текст</th>
                                    <th>Действия</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($predictions->numbers as $item)
                                    <tr>
                                        <td style="vertical-align: middle;">{{$item->number}}</td>
                                        <td style="vertical-align: middle;">{{empty($item->text) ? 'Не заполнено' : $item->text}}</td>
                                        <td style="vertical-align: middle; text-align: center;">
                                            <a href="{{route('prediction.edit',$item->id)}}" class="btn btn-warning btn-sm">Редактировать</a>
                                            <form action="{{route('prediction.destroy', $item->id)}}" method="post" style="display: inline-block;">
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