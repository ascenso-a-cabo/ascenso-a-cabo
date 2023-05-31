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
                                <div class="mb-3">
                                    <label for="provincia" class="form-label">Filtrar por provincia:</label>
                                    <select id="provincia" class="form-control">
                                        <option value="">Selecciona una provincia</option>
                                        @foreach ($provincias as $provincia)
                                            <option value="{{ $provincia->nombre }}">{{ $provincia->nombre }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <table class="table table-striped table-bordered table-dark">
                                    <thead class="thead-dark">
                                    <tr>
                                        <th scope="col">Nº</th>
                                        <th scope="col">Nombre</th>
                                        <th scope="col">Provincia Opos.</th>
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
                                            <td>{{ $user->provincia }}</td>
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
<script>
// Espera a que el documento esté listo
document.addEventListener("DOMContentLoaded", function () {
        // Obtén el desplegable de provincias y la tabla
        var selectProvincia = document.getElementById("provincia");
        var tablaUsuarios = document.querySelector(".table");

        // Agrega un evento de escucha al desplegable de provincias
        selectProvincia.addEventListener("change", function () {
            // Obtiene el valor seleccionado en el desplegable
            var filtro = selectProvincia.value.toLowerCase().trim();

            // Filtra las filas de la tabla según el valor seleccionado
            var filas = tablaUsuarios.querySelectorAll("tbody tr");
            filas.forEach(function (fila) {
                var provincia = fila.querySelector("td:nth-child(3)").textContent.toLowerCase().trim();
                if (provincia === filtro || filtro === "") {
                    fila.style.display = "";
                } else {
                    fila.style.display = "none";
                }
            });
        });
    });
</script>