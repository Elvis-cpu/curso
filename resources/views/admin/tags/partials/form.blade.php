
<div class="form-group">
    {!! Form::label('name', 'Nombre') !!}
    {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el nombre de la etiqueta']) !!}
    @error('name')
        <span class="text-danger">{{ $message }}</span>                
    @enderror
    
</div>



{!! Form::label('slug', 'Slug') !!}
    {!! Form::text('slug', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el slug de la etiqueta', 'readonly']) !!}
    @error('slug')
    <span class="text-danger">{{ $message }}</span>                
    @enderror
</div>

<h2 class="h5">Color:</h2>
<div class="form-group">
    {!! Form::select('color', $colors, null, ['class' => 'form-control']) !!}
</div>


