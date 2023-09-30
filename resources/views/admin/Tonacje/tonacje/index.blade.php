@extends('adminlte::page')

@section('title', 'Panel administracyjny')

@section('content')

            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Tonacje</div>
                    <div class="card-body">
                        <a href="{{ url('/admin/tonacje/create') }}" class="btn btn-success btn-sm" title="Dodaj nowy Tonacje">
                            <i class="fa fa-plus" aria-hidden="true"></i> Dodaj nowy
                        </a>

                        <form method="GET" action="{{ url('/admin/tonacje') }}" accept-charset="UTF-8" class="form-inline my-2 my-lg-0 float-right" role="search">
                            <div class="input-group">
                                <input type="text" class="form-control" name="search" placeholder="Szukaj..." value="{{ request('search') }}">
                                <span class="input-group-append">
                                    <button class="btn btn-secondary" type="submit">
                                        <i class="fa fa-search"></i>
                                    </button>
                                </span>
                            </div>
                        </form>

                        <br/>
                        <br/>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>#</th><th>NazwaTonacji</th><th>Stopien1</th><th>Stopien2</th><th>Stopien3</th><th>Akcje</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($tonacje as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->nazwaTonacji }}</td><td>{{ $item->stopien1 }}</td><td>{{ $item->stopien2 }}</td><td>{{ $item->stopien3 }}</td>
                                        <td>
                                            <a href="{{ url('/admin/tonacje/' . $item->id) }}" title="View Tonacje"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> Zobacz</button></a>
                                            <a href="{{ url('/admin/tonacje/' . $item->id . '/edit') }}" title="Edit Tonacje"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edytuj</button></a>

                                            <form method="POST" action="{{ url('/admin/tonacje' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger btn-sm" title="Delete Tonacje" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Usuń</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <div class="pagination-wrapper"> {!! $tonacje->appends(['search' => Request::get('search')])->render() !!} </div>
                        </div>

                    </div>
                </div>
            </div>

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

