
@extends('layouts.admin')

@section('css')
@endsection

@section('content')
<div class="content-header">
    <div class="container-fluid">
        <div class="mb-2 row">
            <div class="col-sm-6">
                <h3 class="m-0">
                    Nuevo de Cliente
                </h3>
            </div>
        </div>
    </div>
</div>
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        {{-- <form action="{{ route('clientes.store') }}" method="post" class="was-validated" autocomplete="off"> --}}
                        {{-- <form action="{{ route('clientes.store') }}" method="post" class="needs-validation" autocomplete="off" novalidate> --}}
                        <form action="{{ route('clientes.store') }}" method="post" class="needs-validation" autocomplete="off">
                            @csrf
                            <div class="form-group">
                                <label for="razonsocial" class="form-label">Razón Social</label>
                                <input type="text" id="razonsocial" name="razonsocial" class="form-control @error('razonsocial') is-invalid @enderror" tabindex="1" autofocus
                                    placeholder="Ingrese la Razón Social" value="{{ old('razonsocial','') }}" required>

                                    @error('razonsocial')
                                        <span class="invalid-feedback" role="alert">
                                            {{-- <span class="text-danger">{{ $errors->first('razonsocial') }}</span> --}}
                                            <span class="text-danger">{{ $message }}</span>
                                        </span>
                                    @enderror
                            </div>

                            <div class="mt-4 form-group">
                                <label for="contacto" class="form-label">Contacto</label>
                                <input type="text" id="contacto" name="contacto" class="form-control @error('contacto') is-invalid @enderror" tabindex="2"
                                    placeholder="Ingrese el Contacto" value="{{ old('contacto','') }}" required>

                                    @error('contacto')
                                        <span class="invalid-feedback" role="alert">
                                            {{-- <span class="text-danger">{{ $errors->first('correo') }}</span> --}}
                                            <span class="text-danger">{{ $message }}</span>
                                        </span>
                                    @enderror
                            </div>

                            <div class="mt-4 form-group">
                                <label for="correo" class="form-label">Correo electrónico</label>
                                <input type="email" id="correo" name="correo" class="form-control @error('correo') is-invalid @enderror" tabindex="3"
                                    placeholder="Ingrese el correo electronico" value="{{ old('correo','') }}">

                                    @error('correo')
                                        <span class="invalid-feedback" role="alert">
                                            {{-- <span class="text-danger">{{ $errors->first('correo') }}</span> --}}
                                            <span class="text-danger">{{ $message }}</span>
                                        </span>
                                    @enderror
                            </div>

                            <div class="mt-4 form-group">
                                <label for="telefono1" class="form-label">Teléfono</label>
                                <input type="text" id="telefono1" name="telefono1" class="form-control @error('telefono1') is-invalid @enderror" tabindex="4"
                                    value="{{ old('telefono1','') }}" maxlength="15">

                                @error('telefono1')
                                    <span class="invalid-feedback" role="alert">
                                        {{-- <span class="text-danger">{{ $errors->first('telefono') }}</span> --}}
                                        <span class="text-danger">{{ $message }}</span>
                                    </span>
                                @enderror
                            </div>

                            <div class="mt-4 form-group">
                                <label for="telefono2" class="form-label">Teléfono</label>
                                <input type="text" id="telefono2" name="telefono2" class="form-control @error('telefono2') is-invalid @enderror" tabindex="4"
                                    value="{{ old('telefono2','') }}" maxlength="15">

                                @error('telefono2')
                                    <span class="invalid-feedback" role="alert">
                                        {{-- <span class="text-danger">{{ $errors->first('telefono') }}</span> --}}
                                        <span class="text-danger">{{ $message }}</span>
                                    </span>
                                @enderror
                            </div>

                            <div class="mt-4 form-group">
                                <label for="cuit" class="form-label">CUIT</label>
                                <input type="text" id="" name="cuit" class="form-control @error('cuit') is-invalid @enderror" tabindex="4"
                                    value="{{ old('cuit','') }}" placeholder="Ingrese el CUIT sin guiones" maxlength="11">

                                @error('cuit')
                                    <span class="invalid-feedback" role="alert">
                                        {{-- <span class="text-danger">{{ $errors->first('cuit') }}</span> --}}
                                        <span class="text-danger">{{ $message }}</span>
                                    </span>
                                @enderror
                            </div>

                            <div class="mt-4 form-group">
                                <label for="" class="form-label">IVA</label>
                                <select name="iva_id" id="" class="form-select form-select-sm">
                                    {{-- <option value=1 selected>Sin Definir</option> --}}
                                    @foreach ($ivas as $iva)
                                        <option value="{{ $iva->id }}" @selected(old('iva_id') == $iva->id)>
                                            {{ $iva->descripcion }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="mt-4 form-group">
                                <label for="calle_nombre" class="form-label">Nombre Calle</label>
                                <input type="text" id="" name="calle_nombre" class="form-control @error('calle_nombre') is-invalid @enderror" tabindex="4"
                                    value="{{ old('calle_nombre','') }}" maxlength="100">

                                @error('calle_nombre')
                                    <span class="invalid-feedback" role="alert">
                                        {{-- <span class="calle_nombre">{{ $errors->first('calle_nombre') }}</span> --}}
                                        <span class="text-danger">{{ $message }}</span>
                                    </span>
                                @enderror
                            </div>

                            <div class="mt-4 form-group">
                                <label for="calle_numero" class="form-label">Número</label>
                                <input type="text" id="" name="calle_numero" class="form-control @error('calle_numero') is-invalid @enderror" tabindex="4"
                                    value="{{ old('calle_numero','') }}" maxlength="5">

                                @error('calle_numero')
                                    <span class="invalid-feedback" role="alert">
                                        {{-- <span class="text-danger">{{ $errors->first('calle_numero') }}</span> --}}
                                        <span class="text-danger">{{ $message }}</span>
                                    </span>
                                @enderror
                            </div>

                            <div class="mt-4 form-group">
                                <label for="codigo_postal" class="form-label">Código Postal</label>
                                <input type="text" id="" name="codigo_postal" class="form-control @error('codigo_postal') is-invalid @enderror" tabindex="4"
                                    value="{{ old('codigo_postal','') }}" minlength="4" maxlength="15">

                                @error('codigo_postal')
                                    <span class="invalid-feedback" role="alert">
                                        {{-- <span class="text-danger">{{ $errors->first('codigo_postal') }}</span> --}}
                                        <span class="text-danger">{{ $message }}</span>
                                    </span>
                                @enderror
                            </div>

                            <div class="mt-4 form-group">
                                <label for="fecha_alta" class="form-label">Fecha de alta</label>
                                <input type="date" id="fecha_alta" name="fecha_alta" class="form-control @error('fecha_alta') is-invalid @enderror" tabindex="4"
                                    value="{{ old('fecha_alta','') }}">

                                @error('fecha_alta')
                                    <span class="invalid-feedback" role="alert">
                                        {{-- <span class="text-danger">{{ $errors->first('fecha_alta') }}</span> --}}
                                        <span class="text-danger">{{ $message }}</span>
                                    </span>
                                @enderror
                            </div>

                            <div class="mt-4 form-group">
                                <label for="observaciones" class="form-label">Observaciones</label>
                                <textarea name="observaciones" id="" cols="30" rows="4" class="form-control @error('observaciones') is-invalid @enderror" tabindex="4"
                                        value="{{ old('observaciones','') }}"></textarea>

                                @error('observaciones')
                                    <span class="invalid-feedback" role="alert">
                                        {{-- <span class="text-danger">{{ $errors->first('observaciones') }}</span> --}}
                                        <span class="text-danger">{{ $message }}</span>
                                    </span>
                                @enderror
                            </div>

                            <div class="mt-4 row d-print-none">
                                <div class="text-right col-12">
                                    <a href="{{ route('clientes.index') }}" class="btn btn-secondary" tabindex="5">
                                        <i class="fa fa-fw fa-lg fa-arrow-left"></i>
                                        Cancelar
                                    </a>
                                    <button type="submit" class="btn btn-success" tabindex="6">
                                        <i class="fa fa-fw fa-lg fa-check-circle"></i>
                                        Grabar
                                    </button>
                                </div>
                            </div>
                        </form>

                        @if (count($errors) > 0)
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                                            {{-- @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@section('js')
@stop
