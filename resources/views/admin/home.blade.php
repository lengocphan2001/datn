@extends('admin.main')
@section('link')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://unpkg.com/gijgo@1.9.14/js/gijgo.min.js" type="text/javascript"></script>
    <link href="https://unpkg.com/gijgo@1.9.14/css/gijgo.min.css" rel="stylesheet" type="text/css" />
@endsection
@section('content')
    <div class="container pt-5">
        <div class="row">
            <div class="col-lg-4 col-6">

                <div class="small-box bg-info">
                    <div class="inner">
                        <h3>{{ count($orders) }}</h3>
                        <p>Tổng đơn hàng</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-bag"></i>
                    </div>

                </div>
            </div>

            <div class="col-lg-4 col-6">

                <div class="small-box bg-success">
                    <div class="inner">
                        <h3>{{ $revenue }} VND</h3>
                        <p> Tổng doanh thu </p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-stats-bars"></i>
                    </div>

                </div>
            </div>

            <div class="col-lg-4 col-6">

                <div class="small-box bg-warning">
                    <div class="inner">
                        <h3>{{ count($users) }}</h3>
                        <p>Số người dùng</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-person-add"></i>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="card">
                <div class="card-body">
                    <h2>Thống kê tiền vốn</h2>
                    <form action="{{ route('admin.statis.store')}}" method="POST">
                        <div class="col-lg-2 col-3">
                            <div class="form-group mb-4">
                                <label for="datepicker1">Chon ngay</label>
                                <div class="datepicker date input-group">
                                    <input type="text" placeholder="Chọn ngày bắt đầu" class="form-control" id="datepicker1">
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-2 col-3">
                            <div class="form-group mb-4">
                                <label for="datepicker2">Chon ngay</label>
                                <div class="datepicker date input-group">
                                    <input type="text" placeholder="Ngày kết thúc" class="form-control" id="datepicker2">
                                </div>
                            </div>

                        </div>
                        <div class="col-lg-2 col-3">

                            <button class="btn btn-success" type="submit">Thống kê</button>
                        </div>


                    </form>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="card">
                <div class="card-body">
                    <h2>Thống kê doanh thu</h2>
                    <form action="{{ route('admin.statis.store')}}" method="POST">
                        <div class="col-lg-2 col-3">
                            <div class="form-group mb-4">
                                <label for="datepicker1">Chon ngay</label>
                                <div class="datepicker date input-group">
                                    <input type="text" placeholder="Chọn ngày bắt đầu" class="form-control" id="datepicker1">
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-2 col-3">
                            <div class="form-group mb-4">
                                <label for="datepicker2">Chon ngay</label>
                                <div class="datepicker date input-group">
                                    <input type="text" placeholder="Ngày kết thúc" class="form-control" id="datepicker2">
                                </div>
                            </div>

                        </div>
                        <div class="col-lg-2 col-3">

                            <button class="btn btn-success" type="submit">Thống kê</button>
                        </div>


                    </form>
                </div>
            </div>
        </div>
    </div>
    <script>
        $('#datepicker1').datepicker({
            uiLibrary: 'bootstrap4'
        });
        $('#datepicker2').datepicker({
            uiLibrary: 'bootstrap4'
        });
    </script>
@endsection
