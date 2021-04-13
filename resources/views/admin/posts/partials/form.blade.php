<div class="form-group">
    {!! Form::label('name', 'Nombre:') !!}
    {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el nombre del post']) !!}
    @error('name')
        <span class="text-danger">{{ $message }}</span>
    @enderror
</div>

<div class="form-group">
    {!! Form::label('slug', 'Slug:') !!}
    {!! Form::text('slug', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el slug del post', 'readonly']) !!}
    @error('slug')
        <span class="text-danger">{{ $message }}</span>
    @enderror
</div>

<div class="form-group">
    <h2 class="h5">Categorias</h2>
    {!! Form::select('category_id', $categories, null, ['class' => 'form-control']) !!}

    @error('category_id')
    <span class="text-danger">{{ $message }}</span>
    @enderror

</div>

<div class="form-group">
    <h2 class="h5">Etiquetas</h2>

    @foreach ($tags as $tag)

        <label class="mr-2" >
            {!! Form::checkbox('tags[]', $tag->id, null) !!}
            {{ $tag->name }}
        </label>
        
    @endforeach

    @error('tags')
    <br>
    <span class="text-danger">{{ $message }}</span>
    @enderror
</div>

<div class="form-group">

    <h2 class="h5">Estado</h2>
    <label >
        {!! Form::radio('status', 1, true, ) !!}
        Borrador
    </label>   
    
    <label >
        {!! Form::radio('status', 2 ) !!}
        Publicado
    </label>

    @error('status')
    <br>
    <span class="text-danger">{{ $message }}</span>
    @enderror
</div>

<div class="form-group">
    <h2 class="h5">Imagen:</h2>
    <div class="row mb-3">
        <div class="col">
            <div class="image-wrapper">
                @isset ($post->image)
                <img class="rounded" id="image" src="{{ Storage::url($post->image->url) }}" alt="">
           
                @else
                <img class="rounded" id="image" src="https://cdn.pixabay.com/photo/2020/09/28/16/29/leaves-5610361_960_720.png" alt="">                    
                @endisset
            </div>
        </div>


        <div class="col">

            <div class="form-group">
                <h2 class="h5">Imagen que se mostrara en el post</h2>
                {!! Form::file('file', ['class' => 'form-control-file', 'accept' => 'image/*']) !!}           
                 @error('file')
                <span class="text-danger">{{ $message }}</span>
            @enderror
            </div>

            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita explicabo corrupti aspernatur aliquid quis vero officia ipsam quia pariatur! Eveniet voluptatibus nobis aspernatur error dolores unde dicta praesentium ex eaque?</p>
        </div>
    </div>
</div>

<div class="form-group">
    <h2 class="h5">Estracto:</h2>
    {!! Form::textarea('extract', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el extracto del post']) !!}
    @error('extract')
        <span class="text-danger">{{ $message }}</span>
    @enderror
</div>


<div class="form-group">
    
        <h2 class="h5">Cuerpo:</h2>
    {!! Form::textarea('body', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el Cuerpo del post']) !!}
    @error('body')
        <span class="text-danger">{{ $message }}</span>
    @enderror
</div>



