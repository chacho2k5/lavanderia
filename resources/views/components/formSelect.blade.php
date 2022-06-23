{{--
placeholder -> ''
            -> label
            -> algun valor
. Definir valor OLD para la Edicion
. Definir algunos parametros de validacion
. Validacion Date (ver complementos)
 --}}

 @props([
    'label',
    'name',
    'values',
    'sel' => ''
])

<div class="mt-4 form-group">
    <label for="{{ $name }}" class="form-label">{{ $label }}</label>

    <select name="{{ $name }}" id="{{ $name }}" {{ $attributes->merge(['class' => 'form-select form-select-sm']) }}>
        @foreach ($values as $value)
            {{-- <option value="{{ $value->id }}" @selected(old($name) == $value->id)> --}}
            {{-- <option value="{{ $value->id }}" @selected(old($name, $sel == $value->id))> --}}
            {{-- <option value="{{ $value->id }}" @selected(old($value->id, $sel == $value->id))> --}}

            {{-- <option value="{{ $value->id }}" @selected(old($name, $sel == $value->id))>
                {{ $value->descripcion }}
            </option> --}}

            <option value="{{ $value->id }}" @if(old($name) == $value->id || $value->id == $sel->iva_id) selected @endif>
                {{ $value->descripcion . ' ' . $sel->iva_id}}
            </option>

            {{-- <option value="{{ $iva->id }}" @if(old('iva_id') == $iva->id || $iva->id == $cliente->iva_id) selected @endif> --}}


            @endforeach
    </select>

</div>
{{--
<div class="mt-4 form-group">
    <label for="" class="form-label">IVA</label>
    <select name="iva_id" id="" class="form-select form-select-sm">
        @foreach ($ivas as $iva)
            <option value="{{ $iva->id }}" @selected(old('iva_id') == $iva->id)>
                {{ $iva->descripcion }}
            </option>
        @endforeach
    </select>
</div>
 --}}
