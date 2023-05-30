@php
    use App\Models\User;
@endphp

<x-app-layout>
    <div class="d-flex justify-content-center py-6">
        <div class="card" style="width: 18rem;">
            <div class="card-body text-center">
                <h5 class="card-title"><b>Nombre:</b> {{ $users->name }}</h5>
            </div>
            <div class="list-group">
                @if ($users->media_notas > 5)
                    <a href="#" class="list-group-item list-group-item-success"><b>Nota
                            Media:</b> {{ $users->media_notas }}</a>
                @else
                    <a href="#" class="list-group-item list-group-item-danger"><b>Nota
                            Media:</b> {{ $users->media_notas }}</a>
                @endif
                <a href="#" class="list-group-item"><b>Examenes Realizados:</b> {{ $users->total_examenes }}</a>
                <a href="#" class="list-group-item"><b>Provincia a la que oposita:</b> {{ $users->provincia }}</a>
            </div>
            <div class="card-body text-center">
                <a href="{{ route('user.index')}}" class="btn btn-outline-danger">Volver atrás</a>
            </div>
        </div>
    </div>

</x-app-layout>
