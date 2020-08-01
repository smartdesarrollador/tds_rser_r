@extends('layout.layout')

@section('titulo')
    Roles
@endsection

@section('scripts')
<script src="{{ asset('js/index.js') }}"></script>
@endsection

@section('contenido')

<div class="row">
    <div class="col-lg-12">
        <div class="box">
            <div class="box-title">Roles</div>
            <div class="box-tools pull-right">
                <a href="{{ route('crear_rol') }}" class="btn btn-success btn-info btn-sm">
                    <i class="fa fa-fw fa-reply-all"></i> Nuevo registro
                </a>
            </div>
            <div class="box-body">
                <table class="table table-striped table-bordered table-hover">
                    <thead>
                        <tr>
                            <th>Nombre</th>
                            <th class="width70"></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($datas as $data)
                            <tr>
                                <td>{{ $data->nombre }}</td>
                                <td>
                                    
                                    <a href="{{ route('editar_rol',['id' => $data->id]) }}" class="btn-accion-tabla tooltips" title="Editar este registro">
                                        <i class="fa fa-fw fa-pencil"></i>
                                    </a>
                                    <form action="{{ url("admin/rol/$data->id") }}" class="d-inline form-eliminar" method="POST">
                                        @csrf   @method("delete")
                                        <button type="submit" class="btn-accion-table eliminar tooltipst" title="Eliminar este registro">
                                                    <i class="fa fa-fw fa-trash text-danger"></i>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
    
@endsection