@extends('layouts.site')

@section('title', 'Tất cả sản phẩm')

@section('header')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="home.css">
@endsection

@section('maincontent')
    
<div class="container py-6">
    <div class="text-center mb-4">
        <h2 class="font-weight-bold">TẤT CẢ SẢN PHẨM</h2>
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