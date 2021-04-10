@foreach ($roles as $role)

<div>
    <label >
        {!! Form::checkbox('roles[]', $role->id, null, ['class' => 'mr-1']) !!}
        {{ $role->name }}
    </label>
</div>

@endforeach


<h2 class="h5">Correo Eletronico:</h2>
<div class="form-group mt">
    {!! Form::text('email', null, ['class' => 'form-control']) !!}
    @error('email')
        <span class="text-danger">{{ $message }}</span>                
    @enderror
    
</div>

<h2 class="h5">Contraseña</h2>
<div class="form-group mt">
    {!! Form::text('password', null, ['class' => 'form-control']) !!}
    @error('name')
        <span class="text-danger">{{ $message }}</span>                
    @enderror
    
</div>
