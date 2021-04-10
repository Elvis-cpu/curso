<div>        
    <div class="card">


        <div class="card-header">
            <input wire:model="search" class="form-control" placeholder="Buscar el nombre del Usuario">
        </div>
        @if ($users->count())
            
            <div class="card-body">

                <table class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Nombre</th>
                            <th>email</th>
                            <th ></th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach ($users as $user)
                            <tr>
                                <td>{{ $user->id }}</td>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->email }}</td>
                                <td width="10px">
                                    @can('admin.users.edit') 
                                            <a class="btn btn-primary btn-sm" href="{{ route('admin.users.edit', $user) }} ">Editar</a>                               
                                    @endcan
                                 </td>
                            </tr>
                            
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="card-footer">
                {{ $users->links() }}
            </div>
        @else
            <div class="card-body">
                <strong>No se encontraron resultados</strong>
            </div>
            
        @endif
    </div>
</div>
