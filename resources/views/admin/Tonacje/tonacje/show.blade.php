@extends('adminlte::page')

@section('title', 'Panel administracyjny')

@section('content')
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Tonacje {{ $tonacje->id }}</div>
                    <div class="card-body">

                        <a href="{{ url('/admin/tonacje') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Wstecz</button></a>
                        <a href="{{ url('/admin/tonacje/' . $tonacje->id . '/edit') }}" title="Edit Tonacje"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edytuj</button></a>

                        <form method="POST" action="{{ url('admin/tonacje' . '/' . $tonacje->id) }}" accept-charset="UTF-8" style="display:inline">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-danger btn-sm" title="Usuń Tonacje" onclick="return confirm(&quot;Naprawdę chcesz usunąć?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Usuń</button>
                        </form>
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $tonacje->id }}</td>
                                    </tr>
                                    <tr><th> NazwaTonacji </th><td> {{ $tonacje->nazwaTonacji }} </td></tr><tr><th> Stopien1 </th><td> {{ $tonacje->stopien1 }} </td></tr><tr><th> Stopien2 </th><td> {{ $tonacje->stopien2 }} </td></tr><tr><th> Stopien3 </th><td> {{ $tonacje->stopien3 }} </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

