@extends('layouts.auth')

@section('content')
    <section class="section">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Registerd Ghananian Racers</h5>

                        <!-- Table with hoverable rows -->
                        <table class="table table-hover datatable">
                            <thead>
                                <tr>
                                    {{-- <th scope="col">No#.</th> --}}
                                    <th scope="col">Fullname</th>
                                    <th scope="col">Msisdn</th>
                                    <th scope="col">Age</th>
                                    <th scope="col">Gender</th>
                                    <th scope="col">Nationality</th>
                                    <th scope="col">Racer ID</th>
                                    <th scope="col">Region</th>
                                    <th scope="col">Race Category</th>
                                    <th scope="col">Date Created</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($racers as $racer)
                                    <tr>
                                        {{-- <td>{{ $loop->iteration }}</td> --}}
                                        <td>{{ $racer->fullname }}</td>
                                        <td>{{ $racer->msisdn }}</td>
                                        <td>{{ $racer->age }}</td>
                                        <td>{{ $racer->gender }}</td>
                                        <td>{{ $racer->nationality }}</td>
                                        <td>{{ $racer->racerid }}</td>
                                        <td>{{ $racer->region }}</td>
                                        <td>{{ $racer->category }} km</td>
                                        <td>{{ $racer->created_at }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <!-- End Table with hoverable rows -->
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
