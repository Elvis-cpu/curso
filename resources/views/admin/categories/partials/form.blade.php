                <div class="form-group">
                    <h2 class="h5">Nombre:</h2>
                    {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' =>'Ingrese el nombre de la categoria']) !!}

                    @error('name')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-group">
                    <h2 class="h5">Slug:</h2>
                    {!! Form::text('slug', null, ['class' => 'form-control', 'placeholder' =>'Ingrese el Slug de la categoria', 'readonly']) !!}

                    @error('slug')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror

                </div>