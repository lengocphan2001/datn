@extends('admin.main')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <a href="{{ route('admin.vouchers.index') }}" type="button" class="btn btn-secondary">
                <i class="fa-solid fa-circle-left"></i>
                Quay lại
            </a>
            <div class="col-md-12 text-center">
                <h1>{{ $title }}</h1>
            </div>
            <div class="col-md-8 m-auto">
                @if (session('msg'))
                <div class="alert alert-success text-center">{{ session('msg') }}</div>
                @endif

            @if ($errors->any())
                <div class="alert alert-danger text-center">
                    Thông tin điền vào chưa đúng. Vui lòng nhập lại.
                </div>
            @endif
                <form action="{{route('admin.brands.update',$brand->id)}}" method="POST">
                    @method("PUT")
                    <input type="hidden" name="id" value="{{$brand->id}}">
                    <div class="mb-3">
                        <label for="">Tên nhãn hàng: </label>
                        @error('name')
                        <span style="color:red">{{ $message }}</span>
                        @enderror
                        <input type="text" class="form-control" name="name" value="{{$brand->name}}">
                    </div>

                    <div class="mb-3">
                        <label for="">Ghi chú: </label>
                        @error('note')
                        <span style="color:red">{{ $message }}</span>
                        @enderror
                        <input type="text" class="form-control" name="note" value="{{$brand->note}}">
                    </div>
                    
                    <div class="mb-3 d-flex justify-content-evenly">
                        <div class="mb-3">
                            <label for="">Trạng thái</label>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="status" id="flexRadioDefault2"
                                    value="1" {{ $brand->status == 1 ? 'checked=""' : '' }}>
                                <label class="form-check-label" for="flexRadioDefault2">
                                    Kích hoạt
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="status" id="flexRadioDefault1"
                                    value="0" {{ $brand->status == 0 ? 'checked=""' : '' }}>
                                <label class="form-check-label" for="flexRadioDefault1">
                                    Vô hiệu hóa
                                </label>
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary mb-3">
                        <i class="fas fa-check-double"></i>
                        Cập nhật
                    </button>
                    @csrf
                </form>
            </div>
        </div>
    </div>
@endsection
