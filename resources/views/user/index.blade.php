<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <h3>Orden de los usuarios</h3>
                    <p>Esta tabla se actualiza diariamente, a las 00:00 y a las 12:00</p>
                    <p>El orden de los usuarios es de nota media mayor a nota media menor</p>
                    <p>Si dos usuarios tienen la misma nota, se ordenará primero el que más examenes haya realizado</p>
                    <div class="d-flex align-items-center justify-content-around bg-dark">
                        <table class="table table-striped table-dark table-hover w-75 border border-light">
                            <thead>
                                <tr>
                                    <th scope="col">Nº</th>
                                    <th scope="col">Nombre</th>
                                    <th scope="col" class="text-center">Nº de examenes realizados</th>
                                    <th scope="col">Nota Media</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($users as $user)
                                    <tr>
                                        <td scope="row">{{ $loop->iteration }}</td>
                                        <td> <a href="{{ route('user.show', ['user' => $user->id])}}" class="text-white">{{ $user->name }}</a></td>
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
</x-app-layout>
<x-footer/>    