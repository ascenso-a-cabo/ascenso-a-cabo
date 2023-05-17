@php
    use App\Models\User;
@endphp

<x-app-layout>
    <div class="d-flex justify-content-center py-6">
        <div class="card" style="width: 18rem;">
            <div class="card-body text-center">
              <h5 class="card-title"> <b>Nombre:</b> {{ $users->name }}</h5>
            </div>
            <ul class="list-group list-group-flush">
                @if ($users->media_notas > 5)
                    <li class="list-group-item text-success"><b>Nota Media:</b> {{ $users->media_notas }}</li>
                @else
                    <li class="list-group-item text-danger"><b>Nota Media:</b> {{ $users->media_notas }}</li>
                @endif
                <li class="list-group-item"><b>Examenes Realizados: {{ $users->total_examenes }}</b></li>
                <li class="list-group-item"><b>Provincia a la que oposita:</b> {{ $users->provincia }} </li>
            </ul>
            <div class="card-body text-center">
              <a href="{{ route('user.index')}}" class="btn btn-outline-danger">Volver atrás</a>
            </div>
          </div>
    </div>
</x-app-layout>
