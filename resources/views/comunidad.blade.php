<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <div class="d-flex align-items-center justify-content-around bg-dark">
                        <table class="table table-striped table-dark table-hover w-75 border border-light">
                            <thead>
                                <tr>
                                    <th scope="col">Nº</th>
                                    <th scope="col">Nombre</th>
                                    <th scope="col">Nº de examenes realizados</th>
                                    <th scope="col">Nota</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($users as $user)
                                    <tr>
                                        <td scope="row">{{ $user->id }}</td>
                                        <td>{{ $user->name }}</td>
                                        <td>{{ $user->numeroExamenes }}</td>
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