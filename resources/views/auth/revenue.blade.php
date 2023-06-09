    @extends('layouts.auth')

    @section('content')
        <section class="section">
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
        </section>
        {{-- <section class="section dashboard">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Ghana Revenue Pie Chart</h5>

                            <!-- Pie Chart -->
                            <div id="pieChart" style="min-height: 400px" class="echart"></div>

                            <script>
                                document.addEventListener("DOMContentLoaded", () => {
                                    echarts
                                        .init(document.querySelector("#pieChart"))
                                        .setOption({
                                            title: {
                                                text: "Revenue For Ghana",
                                                subtext: "",
                                                left: "center",
                                            },
                                            tooltip: {
                                                trigger: "item",
                                            },
                                            legend: {
                                                orient: "vertical",
                                                left: "left",
                                            },
                                            series: [{
                                                name: "Access From",
                                                type: "pie",
                                                radius: "70%",
                                                data: [{
                                                        value: 1048,
                                                        name: "Accra - Kumasi",
                                                    },
                                                    {
                                                        value: 735,
                                                        name: "Upper East - West",
                                                    },
                                                    {
                                                        value: 580,
                                                        name: "Takoradi - Tema",
                                                    },
                                                    {
                                                        value: 484,
                                                        name: "Tamale - Wa",
                                                    },
                                                    {
                                                        value: 300,
                                                        name: "Winneba  - Cape Coast",
                                                    },
                                                ],
                                                emphasis: {
                                                    itemStyle: {
                                                        shadowBlur: 10,
                                                        shadowOffsetX: 0,
                                                        shadowColor: "rgba(0, 0, 0, 0.5)",
                                                    },
                                                },
                                            }, ],
                                        });
                                });
                            </script>
                            <!-- End Pie Chart -->
                        </div>
                    </div>
                </div>
            </div>
        </section> --}}
    @endsection
