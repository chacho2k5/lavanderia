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

    <select name="{{ $name }}" id="{{ $name }}" {{ $attributes->merge(['class' => 'form-select']) }}>
        @foreach ($values as $value)
            <option value="{{ $value->id }}" @selected(old($name,$sel) == $value->id)>
                {{ $value->descripcion}}
            </option>
        @endforeach
    </select>

</div>
