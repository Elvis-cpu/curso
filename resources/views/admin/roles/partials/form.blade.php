<div class="form-group">
    <h2 class="h5">Nombre:</h2>
    {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' =>'Ingrese el nombre del rol']) !!}

    @error('name')
        <span class="text-danger">{{ $message }}</span>
    @enderror
</div>
<h2 class="h5">Listado de permisos</h2>
@foreach ($permissions as $permission)

    <div>
        <label >
            {!! Form::checkbox('permissions[]', $permission->id, null, ['class' => 'mr-1']) !!}
            {{ $permission->description }}
        </label>
    </div>
    
@endforeach