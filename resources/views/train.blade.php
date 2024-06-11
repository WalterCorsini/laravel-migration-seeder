@extends('layouts.app')

@section('content')
    <div class="container pt-5">
        <table class="table text-center">
            <thead>
                <tr>
                    <th scope="col">Codice Treno</th>
                    <th scope="col">Azienda</th>
                    <th scope="col">Numero Carrozze</th>
                    <th scope="col">Partenza</th>
                    <th scope="col">Arrivo</th>
                    <th scope="col">Data di partenza</th>
                    <th scope="col">Data di Arrivo</th>
                    <th scope="col">In orario</th>
                    <th scope="col">Cancellato</th>
                </tr>
            </thead>
            @foreach ($trainList as $train)
                <tbody>
                    <tr class="fs-4">
                        <td>{{ $train->train_code }}</td>
                        <td>{{ $train->name }}</td>
                        <td>{{ $train->number_of_carriages }}</td>
                        <td>{{ $train->departure_station }}</td>
                        <td>{{ $train->arrival_station }}</td>
                        <td>{{ $train->departure_time }}</td>
                        <td>{{ $train->arrival_time }}</td>
                        <td>
                            @if ($train->in_time === 1)
                                <span class="text-success fw-bold">&check;</span>
                            @else
                                <span class="text-danger fw-bold">&cross;</span>
                            @endif
                        </td>
                        <td>
                            @if ($train->delete === 0)
                                <span class="text-success fw-bold">NO</span>
                            @else
                                <span class="text-danger fw-bold">SI</span>
                            @endif
                        </td>
                    </tr>
                </tbody>
            @endforeach
        </table>
    </div>
@endsection
