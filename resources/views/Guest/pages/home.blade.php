@extends('layouts.app')

@section('page-title', 'Homepage')

@section('main-content')
    <h1 class="p-3 fw-bold text-center">
        Trains
    </h1>

    <div class="container">
        <table class="table table-hover text-center">
            <thead class="table-success">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Company</th>
                    <th scope="col">Depart from</th>
                    <th scope="col">Arrive to</th>
                    <th scope="col">Depart at</th>
                    <th scope="col">Arrive at</th>
                    <th scope="col">Train code</th>
                    <th scope="col">Carriages</th>
                    <th scope="col">On time</th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($trains as $train)
                <tr>
                    <th scope="row"> {{$train->id}} </th>
                    <td scope="col">{{$train->company}}</td>
                    <td scope="col">{{$train->departure_station}}</td>
                    <td scope="col">{{$train->arrival_station}}</td>
                    <td scope="col">{{$train->departure_time}}</td>
                    <td scope="col">{{$train->arrival_time}}</td>
                    <td scope="col">{{$train->train_code}}</td>
                    <td scope="col">{{$train->no_carriages}}</td>
                    <td scope="col">{{$train->on_time ? 'Yes' : 'No'}}</td>
                    <td scope="col" class="fw-bold">{{$train->cancelled ? 'Cancelled' : ''}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
