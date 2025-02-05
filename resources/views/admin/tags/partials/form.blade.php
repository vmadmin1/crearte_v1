<div class="form-group">
    {!! Form::label('name', 'Nombre') !!}
    {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el Nombre de la Etiqueta']) !!}

    @error('name')
        <span class="text-danger">*{{ $message }}</span>
    @enderror

</div>
<div class="form-group">
    {!! Form::label('slug', 'Slug') !!}
    {!! Form::text('slug', null, [
        'class' => 'form-control',
        'placeholder' => 'Ingrese el Slug de la Etiqueta',
        'readonly',
    ]) !!}

    @error('slug')
        <span class="text-danger">*{{ $message }}</span>
    @enderror
</div>

<div class="form-group">
    {{-- <label for="">Color</label>
    <select name="color" id="" class="form-control">
        <option value="red">Color rojo</option>
        <option value="green">Color verde</option>
        <option value="blue" selected>Color azul</option>
    </select> --}}
    {!! Form::label('color', 'Color') !!}
    {!! Form::select('color',$colors, null, ['class' => 'form-control']) !!}

    @error('color')
        <small class="text-danger">{{$message}}</small>
    @enderror
</div>