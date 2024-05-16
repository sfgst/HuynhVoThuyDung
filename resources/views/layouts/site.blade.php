<!DOCTYPE html>
<html lang="en">

<head>
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="{{asset('css/layoutsite.css')}}">
    <link rel="stylesheet" href="{{asset('fontawesome-free-6.5.2-web/css/all.min.css')}}">
    <link rel="stylesheet" href="{{asset('bootstrap-5.3.3-dist/css/bootstrap.min.css')}}">
    @yield('header')
   
</head>

<body>
    <!-- header -->
    <header>
        <section class="section_header bg-light">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">
                    <div class="row w-100">
                        <div class="col-sm-2 d-flex justify-content-center mt-4">
                            <img src="{{asset('images/logo.webp')}}" class="logo img-fluid w-70 h-50" alt="logo"/>
                        </div>
                        <div class="col-sm-8 py-4 d-flex align-items-center justify-content-between">
                            <nav class="navbar navbar-expand-lg bg-light">
                                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                    <span class="navbar-toggler-icon"></span>
                                </button>
                                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                    <ul class="navbar-nav me-auto mb-2 mb-lg-0 flex-grow-1">
                                        <li class="nav-item">
                                            <a class="nav-link" href="#">Trang chủ</a>
                                        </li>
                                        <li class="nav-item dropdown">
                                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                Sản phẩm
                                            </a>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="#">Giày cao gót</a></li>
                                                <li><a class="dropdown-item" href="#">Giày xăng đan</a></li>
                                                <li><a class="dropdown-item" href="#">Giày thể thao</a></li>
                                            </ul>
                                            
                                        </li>
                                        <li class="nav-item dropdown">
                                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                Tin tức
                                            </a>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="#">Tin mới</a></li>
                                                <li><a class="dropdown-item" href="#">Tin thời trang</a></li>
                                                <li><a class="dropdown-item" href="#">Tin hot</a></li>
                                            </ul>
                                            
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#">Liên hệ</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#">Chỉ đường</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#">Login</a>
                                        </li>
                                    </ul>
                                </div>
                            </nav>
                            <form class="search-form me-4">
                                    <div style="display: flex;">
                                        <input type="search" placeholder="Search" value=""
                                            onchange="handleChange(event)" class="search-input rounded me-2"
                                            aria-label="Search" style="flex: 1;" />
                                        <button type="submit" class="buta search-button rounded">
                                            <i class="fas fa-search"></i>
                                        </button>
                                    </div>
                                </form>
                                </div>
                            <div class="col-sm-2 d-flex justify-content-center">
                                <div class="d-flex align-items-center">
                                    <i class="fas fa-heart me-3"></i>
                                    <i class="fas fa-bell me-3"></i>
                                    <i class="fas fa-shopping-cart"></i>
                                </div>
                        </div>
                    </div>
                </div>
            </nav>
        </section>
    </header>

    

    <main>
        @yield('maincontent')
    </main>

    <!-- footer -->
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-sm-4">
                    <h4>ĐĂNG KÝ NHẮN TIN</h4>
                    <form>
                        <input type="email" placeholder="Your email" class="form-control mb-2" />
                        <button type="submit" class="btn btn-primary">Đăng Ký</button>
                    </form>
                    <h6 class="mt-3">KẾT NỐI VỚI CHÚNG TÔI</h6>
                    <a href="#"><i class="fab fa-facebook-square facebook-icon"></i></a>
                </div>
                <div class="col-sm-3">
                    <h5>Fashion - THƯƠNG HIỆU</h5>
                    <ul class="list-unstyled">
                        <li><a href="#">Giới Thiệu</a></li>
                        <li><a href="#">Tuyển Dụng</a></li>
                        <li><a href="#">Hướng Dẫn</a></li>
                    </ul>
</div>
<div class="col-sm-3">
                    <h5>WE HERE</h5>
                    <ul class="list-unstyled">
                        <li><a href="#">Hướng dẫn mua</a></li>
                        <li><a href="#">Tra cứu bảo hành</a></li>
                        <li><a href="#">Quy định phiếu quà</a></li>
                        <li><a href="#">Điều khoản sử dụng</a></li>
                    </ul>
                </div>
                <div class="col-sm-2">
                    <h5>CATEGORY</h5>
                    <ul class="list-unstyled">
                        <li><a href="#">Xu hướng</a></li>
                        <li><a href="#">Giải đáp</a></li>
                        <li><a href="#">Cẩm nang</a></li>
                        <li><a href="#">Tin tức</a></li>
                        <li><a href="#">Liên hệ</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
    
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{asset('js/main.js')}}"></script>
    @yield('footer')
</body>

</html>