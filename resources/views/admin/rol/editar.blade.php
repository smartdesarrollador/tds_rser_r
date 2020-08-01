@extends('layout.layout')

@section('titulo')
        Roles
@endsection

@section('scripts')
    <script></script>
@endsection

@section('name')
<div class="row">
    @include('admin.includes.form-error')
    @include('admin.includes.mensaje')
    <div class="box box-danger">
        <div class="box-header with-border">
            <h3 class="box-title">Editar rol</h3>
            <div class="box-tools pull-right">
                <a href="{{ route('rol') }}" class="btn btn-block btn-info btn-sm">
                    <i class="fa fa-fw fa-reply-all"></i>Volver al listado
                </a>
            </div>
        </div>
        <form action="{{ route('actualizar_rol',['id' => $data->id]) }}" class="form-horizontal" id="form-general" method="POST" autocomplete="off">
            @csrf  @method("put")
            <div class="box-body">
                @include('admin.rol.form')
            </div>
            <div class="box-footer">
                <div class="col-lg-3"></div>
                <div class="col-lg-6">
                    @include('admin.includes.boton-form-editar')
                </div>
            </div>
            
        </form>
    </div>
</div>
    
@endsection