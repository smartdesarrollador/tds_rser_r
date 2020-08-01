@extends('layout.layout')

@section('titulo')
    Roles
@endsection

@section('contenido')
    <div class="row">
        <div class="col-lg-12">
            @include('admin.includes.form-error') 
            @include('admin.includes.mensaje')
            <div class="box box-danger">
                <h3 class="box-header with-border">Crear Rol</h3>
                <div class="box-tools pull-right">
                <a href="{{ route('rol') }}" class="btn btn-block btn-info btn-sm">
                    <i class="fa fa-fw fa-reply-all"></i> Volver al listado
                </a>
                </div>
            </div>
            <form action="{{ route('guardar_rol') }}" id="form-general" method="POST" autocomplete="off" class="form-horizontal">
                @csrf
                <div class="box-body">
                    @include('admin.rol.form')
                </div>
                <div class="box-footer">
                    <div class="col-lg-3"></div>
                    <div class="col-lg-6">
                        @include('admin.includes.boton-form-crear')
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection