@extends('layouts.auth')

@section('content')
    <section class="section">
        {{-- @if (session()->has('success')) --}}
        {{-- @endif --}}
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Administrator List</h5>

                        <!-- Table with hoverable rows -->
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th scope="col">Email</th>
                                    <th scope="col">Fullname</th>
                                    <th scope="col">Phone Number</th>
                                    {{-- <th scope="col">Password</th> --}}
                                    <th scope="col">Created At</th>
                                    <th scope="col">Updated At</th>

                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($data as $client)
                                    <tr>
                                        <th scope="row">{{ $client['email'] }}</th>
                                        <td>{{ $client['full_name'] }}</td>
                                        <td>{{ $client['phone_number'] }}</td>
                                        {{-- <td>{{ $client['password'] }}</td> --}}
                                        <td>{{ $client['created_at'] }}</td>
                                        <td>{{ $client['updated_at'] }}</td>

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
