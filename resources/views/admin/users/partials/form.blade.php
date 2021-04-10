@foreach ($roles as $role)
@if ($role->id != 1)
<div>
    <label >
        {!! Form::checkbox('roles[]', $role->id, null, ['class' => 'mr-1']) !!}
        {{ $role->name }}
    </label>
</div>
@endif
@endforeach


<h2 class="h5">Correo Eletronico:</h2>
<div class="form-group mt-2">
    {!! Form::text('email', null, ['class' => 'form-control']) !!}
    @error('email')
        <span class="text-danger">{{ $message }}</span>                
    @enderror
    
</div>

<h2 class="h5">Contraseña</h2>
<div class="form-group mt-2">
    {!! Form::text('password', null, ['class' => 'form-control']) !!}
    @error('name')
        <span class="text-danger">{{ $message }}</span>                
    @enderror
</div>

<h2 class="h5">Cuenta creada:</h2>
<div class="form-group mt-2 ">
    {!! Form::text('created_at', null, ['class' => 'form-control', 'readonly']) !!}
    @error('created_at')
        <span class="text-danger">{{ $message }}</span>
    @enderror
</div>
