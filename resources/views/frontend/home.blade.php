@extends('layouts.site')
@section('title','Trang chu')
@section('maincontent')

<div class="slider">
<div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{asset('images/slider_1.webp')}}" class="d-block w-100" alt="Slide 1">
            </div>
            <div class="carousel-item">
                <img src="{{asset('images/slider_1.webp')}}" class="d-block w-100" alt="Slide 2">
            </div>
            <div class="carousel-item">
                <img src="{{asset('images/slider_1.webp')}}" class="d-block w-100" alt="Slide 3">
            </div>
        </div>
    </div>

</div>

<div class="container py-6 mt-4">
    <div class="row text-center mt-4">
        <div class="col-md-3 mb-4">
                <div class="d-flex flex-column align-items-center">
                    <img src="{{ asset('images/policy_1.webp') }}" class="w-25 mt-2" alt="Vận chuyển miễn phí">
                    <h4 class="font-weight-bold">Vận chuyển miễn phí</h4>
                    <p class="text-muted">Cho đơn hàng > 500.000đ</p>
                </div>
        </div>
        <div class="col-md-3 mb-4">
            <div class="d-flex flex-column align-items-center">
                <img src="{{ asset('images/policy_2.webp') }}" class="w-25 mt-2" alt="Vận chuyển miễn phí">
                <h4 class="font-weight-bold">Mua 2 được giảm giá</h4>
                <p class="text-muted">Lên đến 10% cho đơn hàng tiếp</p>
            </div>
        </div>

        <div class="col-md-3 mb-4">
            <div class="d-flex flex-column align-items-center">
                <img src="{{ asset('images/policy_3.webp') }}" class="w-25 mt-2" alt="Vận chuyển miễn phí">
                <h4 class="font-weight-bold">Chứng nhận chất lượng</h4>
                <p class="text-muted">Sản phẩm chất lượng kiểm định</p>
            </div>
        </div>

        <div class="col-md-3 mb-4">
            <div class="d-flex flex-column align-items-center">
                <img src="{{ asset('images/policy_4.webp') }}" class="w-25 mt-2" alt="Vận chuyển miễn phí">
                <h4 class="font-weight-bold">Hotline: 19001009</h4>
                <p class="text-muted">Hỗ trợ trực tiếp nhanh chóng</p>
            </div>
        </div>


        
    </div>
</div>



<div class="container py-6">
    <div class="text-center mb-4">
        <h2 class="font-weight-bold">SIÊU KHUYẾN MÃI</h2>
    </div>
    <div class="row">
        
        <div class="col-md-3 mb-4">
            <div class="card border-0">
                <img src="{{ asset('images/xam-cg09090-1-grande.webp') }}" class="card-img-top" alt="Giày cao gót mũi nhọn gót nhọn phối quai ngang">
                <div class="card-body text-center">
                    <h5 class="card-title">Giày cao gót mũi nhọn gót nhọn phối quai ngang</h5>
                    <p class="card-text text-muted">Liên hệ</p>
                </div>
            </div>
        </div>
        
       
        <div class="col-md-3 mb-4">
            <div class="card border-0">
                <div class="position-relative">
                    <img src="{{ asset('images/den-2-f27f0cd1-166e-47d3-b291-8609253606fe.webp') }}" class="card-img-top" alt="Giày búp bê mũi tròn đính nơ">
                    <span class="badge badge-danger position-absolute" style="top: 10px; left: 10px;">- 14%</span>
                </div>
                <div class="card-body text-center">
                    <h5 class="card-title">Giày búp bê mũi tròn đính nơ</h5>
                    <p class="card-text text-danger">259.000đ <del class="text-muted">300.000đ</del></p>
                </div>
            </div>
        </div>

       
        <div class="col-md-3 mb-4">
            <div class="card border-0">
                <div class="position-relative">
                    <img src="{{ asset('images/xam-2-86c62056-d94f-4d6b-42ee-8693e7de353c.webp') }}" class="card-img-top" alt="Giày búp bê mũi nhọn đính nơ thanh lịch">
                    <span class="badge badge-danger position-absolute" style="top: 10px; left: 10px;">- 16%</span>
                </div>
                <div class="card-body text-center">
                    <h5 class="card-title">Giày búp bê mũi nhọn đính nơ thanh lịch</h5>
                    <p class="card-text text-danger">295.000đ <del class="text-muted">350.000đ</del></p>
                </div>
            </div>
        </div>

        <div class="col-md-3 mb-4">
            <div class="card border-0">
                <div class="position-relative">
                    <img src="{{ asset('images/kem-4-35ea0cd9-f656-41c4-6d2a-d384dc3e9a5a.webp') }}" class="card-img-top" alt="Giày búp bê mũi nhọn cách điệu">
                    <span class="badge badge-danger position-absolute" style="top: 10px; left: 10px;">- 25%</span>
                </div>
                <div class="card-body text-center">
                    <h5 class="card-title">Giày búp bê mũi nhọn cách điệu</h5>
                    <p class="card-text text-danger">299.000đ <del class="text-muted">399.000đ</del></p>
                </div>
            </div>
        </div>
    </div>
    <div class="text-center mt-4">
        <a href="#" class="btn btn-danger">Xem tất cả</a>
    </div>
</div>




@endsection
