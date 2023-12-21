@extends('layouts.app')

@section('title', 'Home')

@section('content')
<main>
    <h1 class="text-center display-1 fw-bold py-5">Trenitalia</h1>

<div class="container py-5">
    <table class="table table-primary">
      <thead>
        <tr>
          <th scope="col">agency</th>
          <th scope="col">departure station</th>
          <th scope="col">arrival station</th>
          <th scope="col">departure time</th>
          <th scope="col">arrival time</th>
          <th scope="col">code</th>
          <th scope="col">wagons</th>
          <th scope="col">on time</th>
          <th scope="col">canceled</th>
        </tr>
      </thead>
      <tbody>
        @forelse ($trains as $train)
        <tr>
          <td>
            {{$train->agency}}
          </td>
          <td>
            {{$train->departure_station}}
          </td>
          <td>
            {{$train->arrival_station}}
          </td>
          <td>
            {{$train->departure_time}}
          </td>
          <td>
            {{$train->arrival_time}}
          </td>
          <td>
            {{$train->code}}
          </td>
          <td>
            {{$train->wagons}}
          </td>
          <td>
            {{($train->on_time) ? 'timely' : 'delay'}}
          </td>
          <td>
            {{($train->canceled ? 'set' : 'canceled')}}
          </td>
          
        </tr>
        @empty
            <h2>No records</h2>
        @endforelse
        
      </tbody>
    </table>
</div>
</main>

@endsection
