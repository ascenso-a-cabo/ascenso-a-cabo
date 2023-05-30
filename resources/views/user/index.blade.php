<x-app-layout>
    @include('layouts.navigation')
    <div class="py-12">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="card bg-dark text-white shadow-sm">
                        <div class="card-body">
                            <h3 class="mb-4">Orden de los usuarios</h3>
                            <p>Esta tabla se actualiza cada 5 minutos.</p>
                            <p>El orden de los usuarios es de nota media mayor a nota media menor.</p>
                            <p>Si dos usuarios tienen la misma nota, se ordenará primero el que más exámenes haya
                                realizado.</p>
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-dark">
                                    <thead class="thead-dark">
                                    <tr>
                                        <th scope="col">Nº</th>
                                        <th scope="col">Nombre</th>
                                        <th scope="col" class="text-center">Nº de exámenes realizados</th>
                                        <th scope="col">Nota Media</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach ($users as $user)
                                        <tr>
                                            <td scope="row">{{ $loop->iteration }}</td>
                                            <td>
                                                <a href="{{ route('user.show', ['user' => $user->id]) }}"
                                                   class="text-white">{{ $user->name }}</a>
                                            </td>
                                            <td class="text-center">{{ $user->total_examenes }}</td>
                                            @if ($user->media_notas > 5)
                                                <td class="text-success">{{ $user->media_notas }}</td>
                                            @else
                                                <td class="text-danger">{{ $user->media_notas }}</td>
                                            @endif
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
<x-footer/>
