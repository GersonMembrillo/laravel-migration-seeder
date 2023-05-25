@extends('layouts.app')

@section('maincontent')
    <main>
        <div class="container">
            <h1 class="text-center pb-4 pt-3">A lot of Trains</h1>
            <div class="row">
                @foreach ($trains as $train)
                    <div class="col-4 card-group mb-3">
                        <div class="card border-dark px-0" style="width: 18rem;">
                            <div class="card-header">
                                <h5 class="card-title">{{ $train->company }}</h5>
                            </div>
                            <div class="card-body">

                                <p>Train from: {{ $train->start_station }}</p>
                                <p>to: {{ $train->end_station }}</p>
                                <p>{{ $train->train_departure }} - {{ $train->train_arrival }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </main>
@endsection
