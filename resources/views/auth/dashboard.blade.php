@extends('layouts.auth')

@section('content')
    <section class="section dashboard">
        <div class="row">
            <!-- Left side columns -->
            <div class="col-lg-12">
                <div class="row">
                    <!-- Card 1 -->
                    <div class="col-xxl-4 col-md-6">
                        <div class="card info-card sales-card">
                            <div class="card-body">
                                <h5 class="card-title">Users</h5>

                                <div class="d-flex align-items-center">
                                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                        <i class="bi bi-people-fill"></i>
                                    </div>
                                    <div class="ps-3">
                                        <h6>{{ $users }}</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End of Card 1 -->

                    <!-- Card 1 -->
                    <div class="col-xxl-4 col-md-6">
                        <div class="card info-card sales-card">
                            <div class="card-body">
                                <h5 class="card-title">Orders</h5>

                                <div class="d-flex align-items-center">
                                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                        <i class="bi bi-people"></i>
                                    </div>
                                    <div class="ps-3">
                                        <h6>{{ $orders }}</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End of Card 1 -->

                    <!-- Card 2 -->
                    <div class="col-xxl-4 col-md-6">
                        <div class="card info-card revenue-card">
                            <div class="card-body">
                                <h5 class="card-title">
                                    Revenue
                                </h5>

                                <div class="d-flex align-items-center">
                                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                        <i class="bi bi-cash"></i>
                                    </div>
                                    <div class="ps-3">
                                        <h6>GHS {{ $users }}</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End of Card 2 -->

                    <!-- Card 3 -->
                    <div class="col-xxl-4 col-md-6">
                        <div class="card info-card sales-card">
                            <div class="card-body">
                                <h5 class="card-title">Successful Payments</h5>
                                <div class="d-flex align-items-center">
                                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                        <i class="bi bi-wallet-fill"></i>
                                    </div>
                                    <div class="ps-3">
                                        <h6>{{ $users }}</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End of Card 3 -->

                    <!-- Card 5 -->

                    <div class="col-xxl-6 col-xl-12">
                        <div class="card info-card customers-card">
                            <div class="card-body">
                                <h5 class="card-title">
                                    Failed Payments
                                </h5>

                                <div class="d-flex align-items-center">
                                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                        <i class="bi bi-wallet-fill"></i>
                                    </div>
                                    <div class="ps-3">
                                        <h6 class="text-danger">{{ $users }}</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End of Card 5 -->
                </div>
            </div>
            <!-- End Left side columns -->

            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Orders List</h5>

                            <!-- Table with hoverable rows -->
                            <table class="table table-hover datatable">
                                <thead>
                                    <tr>
                                        <th scope="col">User ID</th>
                                        <th scope="col">Order</th>
                                        <th scope="col">Price</th>
                                        <th scope="col">Created At</th>
                                        <th scope="col">Updated At</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    @isset($data)
                                        @foreach ($data as $result)
                                            <tr>
                                                <td>{{ $result['user_id'] }}</td>
                                                <td>{{ $result['order'] }}</td>
                                                <td>{{ $result['price'] }}</td>
                                                <td>{{ $result['created_at'] }}</td>
                                                <td>{{ $result['updated_at'] }}</td>
                                            </tr>
                                        @endforeach
                                    @endisset
                                </tbody>
                            </table>
                            <!-- End Table with hoverable rows -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
