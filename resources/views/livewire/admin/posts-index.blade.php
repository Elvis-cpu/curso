<div class="card">
    <div class="card-header">
        <input wire:model="search" class="form-control" placeholder="Buscar el nombre del post">
    </div>

    @if ($posts->count() )
        
        <div class="card-body">

            <table class="table table-striped table-bordered">
                <thead>
                    <tr>
                            <th>Id</th>
                            <th colspan="3">Nombre</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach ($posts as $post)
                        <tr>
                            <td>{{ $post->id }}</td>
                            <td>{{ $post->name }}</td>
                            <td width="10px">
                                <a class="btn btn-primary btn-sm" href="{{ route('admin.posts.edit', $post) }} ">Editar</a>
                            </td>
                            <td width="10px">
                                <form action="{{ route('admin.posts.destroy', $post) }}" method="POST">
                                    @csrf
                                    @method('delete')
                                    <button type="submit" class="btn btn-danger  btn-sm">Eliminar</button>
                                </form>    
                            </td>   
                        </tr>                        
                    @endforeach
                </tbody>

            </table>

        </div>

        <div class="card-footer">
            {{ $posts->links() }}
        </div>
    @else
        <div class="card-body">
            <strong>No se encontraron resultados</strong>
        </div>
    @endif
</div>