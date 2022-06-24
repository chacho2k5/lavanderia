
@extends('layouts.admin')

@section('css')
@endsection

@section('content')
<div class="content-header">
    <div class="container-fluid">
        <div class="mb-2 row">
            <div class="col-sm-6">
                <h3 class="m-0">
                    Modificar de Cliente
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
                        <form action="{{ route('clientes.update', $cliente->id) }}" method="post" class="needs-validation" autocomplete="off">
                            @csrf
                            @method('PUT')

                            @php
                                $data = $cliente;
                            @endphp
                            {{-- <x-formInput name="razonsocial" label="Razón Social" placeholder='label' value="{{ old('razonsocial',$cliente->razonsocial) }}" /> --}}
                            <x-formInput name="razonsocial" label="Razón Social" placeholder='label' :value="$data" />
                            <x-formInput name="contacto" label="Contacto" placeholder='label' :value="$data"/>
                            <x-formInput name="correo" type="text" label="Correo Electrónico" placeholder='label' :value="$data"/>
                            <x-formInput name="telefono1" label="Telefono" placeholder='label' :value="$data"/>
                            <x-formInput name="telefono2" label="Telefono" placeholder='label' :value="$data"/>
                            <x-formInput name="cuit" label="CUIT" placeholder='label' maxlength="11" :value="$data"/>
                            <x-formSelect name="iva_id" label="IVA" :values="$ivas" :sel="$cliente->iva_id" />

                            {{-- {{ old('iva_id') . ' ' . $cliente->iva_id}} --}}

                                {{-- okokokokokokokokok
                                    <div class="mt-4 form-group">
                                    <label for="" class="form-label">IVA</label>
                                    <select name="iva_id" id="" class="form-select form-select-sm">
                                        @foreach ($ivas as $iva)
                                            <option value="{{ $iva->id }}" @selected(old('iva_id',$cliente->iva_id) == $iva->id)>
                                                {{ $iva->descripcion }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div> --}}

                            <x-formInput name="calle_nombre" label="Nombre calle" placeholder='label' :value="$data"/>
                            <x-formInput name="calle_numero" label="Número" placeholder='label' :value="$data" maxlength="5"/>
                            <x-formInput name="codigo_postal" label="Código Postal" placeholder='label' :value="$data"/>
                            <x-formInput name="fecha_alta" type="date" label="Fecha alta" placeholder='label' :value="$data"/>
                            <x-formArea name="observaciones" rows="4" cols="30" label="Observaciones" placeholder='label' :value="$data"/>

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
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@section('js')
@stop
