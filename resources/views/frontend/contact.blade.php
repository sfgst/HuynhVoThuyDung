@extends('layouts.site')
@section('title', 'Liên hệ')
@section('maincontent')

<div class="container py-6">
    <div class="row">
       
        <div class="col-md-8">
            <h3 class="font-weight-bold">Gửi tin nhắn cho chúng tôi</h3>
            <form>
                <div class="form-group">
                    <label for="name">Họ tên</label>
                    <input type="text" class="form-control" id="name" placeholder="Họ tên">
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" id="email" placeholder="Email">
                </div>
                <div class="form-group">
                    <label for="phone">Điện thoại</label>
                    <input type="tel" class="form-control" id="phone" placeholder="Điện thoại">
                </div>
                <div class="form-group">
                    <label for="message">Nhập nội dung</label>
                    <textarea class="form-control" id="message" rows="5" placeholder="Nhập nội dung"></textarea>
                </div>
                <button type="submit" class="btn btn-danger">Gửi liên hệ</button>
            </form>
        </div>

        <div class="col-md-4">
            <div class="mb-4">
                <div class="d-flex align-items-center">
                    <div class="icon-box bg-danger text-white p-3 mr-3">
                        <i class="fas fa-map-marker-alt fa-2x"></i>
                    </div>
                    <div>
                        <h5 class="font-weight-bold mb-1">Địa chỉ liên hệ</h5>
                        <p class="mb-0">Ladeco Building, 266 Doi Can, Hà Nội</p>
                    </div>
                </div>
            </div>
            <div class="mb-4">
                <div class="d-flex align-items-center">
                    <div class="icon-box bg-danger text-white p-3 mr-3">
                        <i class="fas fa-phone-alt fa-2x"></i>
                    </div>
                    <div>
                        <h5 class="font-weight-bold mb-1">Số điện thoại</h5>
                        <p class="mb-0">1900 6750</p>
                        <p class="mb-0">Thứ 2 - Chủ nhật: 9:00 - 18:00</p>
                    </div>
                </div>
            </div>
            <div>
                <div class="d-flex align-items-center">
                    <div class="icon-box bg-danger text-white p-3 mr-3">
                        <i class="fas fa-envelope fa-2x"></i>
                    </div>
                    <div>
                        <h5 class="font-weight-bold mb-1">Email</h5>
                        <p class="mb-0">support@sapo.vn</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
