<!doctype html>
<html lang="vi">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Thiết kế Website - Mobile App</title>
    <meta name="description" content="Hachinet, Thiết kế Website, Thiết kế Mobile App">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- favicon -->
    <link rel="shortcut icon" href="static/img/favicon.png">

    <!-- all css here -->
    <!-- bootstrap v3.3.6 css -->
    <link rel="stylesheet" href="landing/serminar/css/bootstrap.min.css">
    <!-- font-awesome css -->
    <link rel="stylesheet" href="website/css/font-awesome.min.css">
    <!-- style.css -->
    <link rel="stylesheet" href="landing/vn-web-app-design/css/style.css">
    <!-- animate.css -->
    <link rel="stylesheet" href="admin/css/animate.css">
</head>

<body class = "translator-vn" data-spy="scroll"></body>
    <div id="preloader"></div>
    <!-- header-area start -->
    <header>
        <section id="sticker" class="header-area default-header hidden-xs">
            <div class="container">
                <div class="center">
                    <!-- logo start -->
                    <div class="col-sm-3 col-sm-offset-6">
                        <div class="logo">
                            <!-- Brand -->
                            <a class="navbar-brand page-scroll" href="https://hachinet.com/">
                                <img src="landing/serminar/img/logo/hachinet.png" alt="hachinet logo">
                            </a>
                            <a class="navbar-brand page-scroll sticky-logo" href="https://hachinet.com/">
                                <img src="landing/serminar/img/logo/hachine.png" alt="hachinet sticky logo">
                            </a>
                        </div>
                    </div>
                    <!-- logo end -->
                    </div>
                </div>
            </section>
        </div>
    </header>
    <!-- header-area end -->

    <!-- Start Slider Area -->
    <section id="home" class="slide-area parallax-bg fix" data-stellar-background-ratio="0.5">
        <div class="display-table">
            <div class="display-table-cell">
                <div class="container">
                    <div class="row">
                        <!-- Start Slider content -->
                        <div class="text-center">
                            <div class="slide-content">
                                <h1 class="title1 wow rotateIn" data-wow-delay=".25s" data-wow-duration="2s">Thiết kế và&nbsp;Phát&nbsp;triển</h1>
                                <h2 class="title2">Website, Mobile&nbsp;app, Phần&nbsp;mềm</h2>
                                <h2 class="title2" style="animation-delay: 2s;">Chuyên nghiệp và&nbsp;Uy&nbsp;tín</h2>
                                <button type="button" class="slide-btn wow fadeInLeftBig" data-wow-delay=".5s" data-wow-duration="2s" data-toggle="modal"
                                    data-target="#exampleModal">
                                    Đăng kí tư vấn ngay
                                </button>
                            </div>
                        </div>
                        <!-- End Slider content -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Slider Area -->

    <!-- Start Service Area -->
    <section class="area-padding">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 section-head text-center">
                    <h3>Cung cấp <span class="color">DỊCH&nbsp;VỤ</span></h3>
                </div>
                <div class="col-xs-12">
                    <p class="text-center"><em>Những dịch vụ mà <strong class="color">HACHINET</strong> cung cấp đã mang lại giá trị to lớn cho sự thành công của khách hàng trong hơn 3 năm qua.</em></p>
                </div>
            </div>
            <div class="row equal-md-cols mb-5">
                <div class="col-md-4">
                    <div class="service_content wow fadeInLeftBig" data-wow-delay=".2s" data-wow-duration="1s">
                        <a class="text-center" href="#">
                            <div class="mb-2">
                                <img src="{{ asset('website/img/services/s5.png') }}" alt="Thiết kế Landing Page">
                            </div>
                            <h4>Thiết kế<br>Landing Page</h4>
                        </a>
                        <ul>
                            <li>Tiết kiệm chi phí</li>
                            <li>Thiết kế chuyên nghiệp</li>
                            <li>Tích hợp tracking (click-to-call, popup, chatbox)</li>
                            <li>Tối ưu SEO</li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="service_content wow fadeInDownBig" data-wow-delay=".5s" data-wow-duration="1.5s">
                        <a class="text-center" href="#">
                            <div class="mb-2">
                                <img src="{{ asset('website/img/services/s2.png') }}" alt="{{trans('service.cobol_development')}}">
                            </div>
                            <h4>Thiết kế<br>Web tin tức - bán hàng</h4>
                        </a>
                        <ul>
                            <li>Thiết kế website tin tức đa ngành nghề, đa lĩnh vực</li>
                            <li>Bảo hành trọn đời</li>
                            <li>Chuẩn SEO - Tối ưu tốc độ</li>
                            <li>Tặng tên miền theo gói</li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="service_content wow fadeInRightBig" data-wow-delay=".2s" data-wow-duration="1s">
                        <a class="text-center" href="#">
                            <div class="mb-2">
                                <img src="{{ asset('website/img/services/s4.png') }}" alt="{{trans('service.front_end_outsource')}}">
                            </div>
                            <h4>Thiết kế<br>Phần Mềm Web - App Mobile</h4>
                        </a>
                        <ul>
                            <li>Thiết kế tất cả các dạng phần mềm như: bán hàng, quản lý công ty, giáo dục, tài chính....</li>
                            <li>Thiết kế đa nền tảng</li>
                            <li>UI/ UX thân thiện với người dùng</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row equal-md-cols mb-5">
                <div class="col-md-3">
                    <div class="more-service_content text-center wow rollIn" data-wow-delay=".3s" data-wow-duration="2s">
                        <div class="box-circle">
                            <a href="#">
                                <span class="circle-item" style="background-image: url('landing/vn-web-app-design/img/1.png');"></span>
                            </a>
                        </div>
                        <h2>
                            <a href="#">Tên miền</a>
                        </h2>
                        <p>
                            Cung cấp tất cả các loại tên miền .com, .vn, .com.vn...
                        </p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="more-service_content text-center wow rollIn" data-wow-delay=".3s" data-wow-duration="2s">
                        <div class="box-circle">
                            <a href="#">
                                <span class="circle-item" style="background-image: url('landing/vn-web-app-design/img/2.png');"></span>
                            </a>
                        </div>
                        <h2>
                            <a href="#">Hosting - VPS</a>
                        </h2>
                        <p>
                            Chúng tôi sẵn sàng tư vấn cho khách hàng nhanh chóng và hiệu quả.
                        </p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="more-service_content text-center wow rollIn" data-wow-delay=".3s" data-wow-duration="2s">
                        <div class="box-circle">
                            <a href="#">
                                <span class="circle-item" style="background-image: url('landing/vn-web-app-design/img/3.png');"></span>
                            </a>
                        </div>
                        <h2>
                            <a href="#">Thiết kế Logo - Banner</a>
                        </h2>
                        <p>
                            Chúng tôi sở hữu những chuyên gia thiết kế đồ họa hàng đầu.
                        </p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="more-service_content text-center wow rollIn" data-wow-delay=".3s" data-wow-duration="2s">
                        <div class="box-circle">
                            <a href="#">
                                <span class="circle-item" style="background-image: url('landing/vn-web-app-design/img/4.png');"></span>
                            </a>
                        </div>
                        <h2>
                            <a href="#">Thiết kế chuẩn SEO</a>
                        </h2>
                        <p>
                            Khách hàng nhanh chóng tìm thấy website của mình trên các công cụ tìm kiếm.
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 section-head text-center">
                    <h3>Sản phẩm <span class="color">ĐÃ&nbsp;LÀM</span></h3>
                </div>
                <div class="col-xs-12">
                    <p class="text-center"><em>Các sản phẩm đã làm gần đây của <strong class="color">HACHINET</strong>.</em></p>
                </div>
            </div>
            <div class="row equal-md-cols mb-5">
                <div class="col-md-4">
                    <div class="service_content wow fadeInUp" data-wow-delay=".3s">
                        <a class="text-center" href="https://www.devwork.vn/" title="Devwork.vn" target="_blank">
                            <div class="product_thumbnail_box w-100 mb-2">
                                <div class="product_thumbnail w-100 h-100" style="background-image: url('upload/casestudy/devworkvn-202007240926_733422683.png')"></div>
                            </div>
                            <h4>Devwork.vn</h4>
                        </a>
                        <ul>
                            <li>Website tuyển dụng IT.</li>
                            <li><a href="case-study/devworkvn" target="_blank">Xem mô tả...</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="service_content wow fadeInUp" data-wow-delay=".3s">
                        <a class="text-center" href="https://netbee.vn/" title="Netbee.vn" target="_blank">
                            <div class="product_thumbnail_box w-100 mb-2">
                                <div class="product_thumbnail w-100 h-100" style="background-image: url('upload/casestudy/netbeevn-202007240927_1525397999.png')"></div>
                            </div>
                            <h4>Netbee.vn</h4>
                        </a>
                        <ul>
                            <li>Website tuyển sinh và xuất khẩu lao động.</li>
                            <li><a href="case-study/netbeevn" target="_blank">Xem mô tả...</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="service_content wow fadeInUp" data-wow-delay=".3s">
                        <a class="text-center" href="case-study/vi-tien-ao" title="Ví tiền ảo" target="_blank">
                            <div class="product_thumbnail_box w-100 mb-2">
                                <div class="product_thumbnail w-100 h-100" style="background-image: url('upload/casestudy/vi-tien-ao-202003211058_782819711.png')"></div>
                            </div>
                            <h4>Ví tiền ảo</h4>
                        </a>
                        <ul>
                            <li>Ví quản lý tiền ảo.</li>
                            <li><a href="case-study/vi-tien-ao" target="_blank">Xem mô tả...</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row equal-md-cols mb-5">
                <div class="col-md-4">
                    <div class="service_content wow fadeInUp" data-wow-delay=".3s">
                        <a class="text-center" href="https://varsan.jp/" title="Varsan.jp" target="_blank">
                            <div class="product_thumbnail_box w-100 mb-2">
                                <div class="product_thumbnail w-100 h-100" style="background-image: url('upload/casestudy/varsanjp-202003251114_1253155110.png')"></div>
                            </div>
                            <h4>Varsan.jp</h4>
                        </a>
                        <ul>
                            <li>Đặt lịch thông báo, nhắc nhở sản phẩm sắp hết hạn để có kế hoạch xử lý sản phẩm theo cấu hình thời gian và vị trí.</li>
                            <li><a href="case-study/varsanjp" target="_blank">Xem mô tả...</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="service_content wow fadeInUp" data-wow-delay=".3s">
                        <a class="text-center" href="case-study/he-thong-quan-ly-noi-bo-doanh-nghiep" title="Hệ thống quản lý nội bộ doanh nghiệp" target="_blank">
                            <div class="product_thumbnail_box w-100 mb-2">
                                <div class="product_thumbnail w-100 h-100" style="background-image: url('upload/casestudy/he-thong-quan-ly-noi-bo-doanh-nghiep-202003240715_1304506201.png')"></div>
                            </div>
                            <h4>Hệ thống quản lý nội bộ doanh nghiệp</h4>
                        </a>
                        <ul>
                            <li>Vận hành hệ thống quản lí từ khi PURCHASE ORDER hoàn thành lên kế hoạch nhập khẩu đến ước tính ,chi trả phí nhập khẩu.</li>
                            <li><a href="case-study/he-thong-quan-ly-noi-bo-doanh-nghiep" target="_blank">Xem mô tả...</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="service_content wow fadeInUp" data-wow-delay=".3s">
                        <a class="text-center" href="case-study/booking-platform" title="Booking platform" target="_blank">
                            <div class="product_thumbnail_box w-100 mb-2">
                                <div class="product_thumbnail w-100 h-100" style="background-image: url('upload/casestudy/booking-platform-202003240733_1051983253.jpeg')"></div>
                            </div>
                            <h4>Booking platform</h4>
                        </a>
                        <ul>
                            <li>Là một hệ thống quản lý đặt chỗ trực tuyến cho các nhà hàng, spa, hair salon,...</li>
                            <li><a href="case-study/booking-platform" target="_blank">Xem mô tả...</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row equal-md-cols mb-5">
                <div class="col-md-6">
                    <div class="service_content wow fadeInUp" data-wow-delay=".3s">
                        <a class="text-center" href="case-study/nhat-ky-giac-mo" title="Nhật ký giấc mơ" target="_blank">
                            <div class="product_thumbnail_box w-100 mb-2">
                                <div class="product_thumbnail w-100 h-100" style="background-image: url('upload/casestudy/-202003240616_314336044.png')"></div>
                            </div>
                            <h4>Nhật ký giấc mơ</h4>
                        </a>
                        <ul>
                            <li>Trò chơi đi vòng quanh thế giới trong giấc mơ u tối.</li>
                            <li><a href="case-study/nhat-ky-giac-mo" target="_blank">Xem mô tả...</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="service_content wow fadeInUp" data-wow-delay=".3s">
                        <a class="text-center" href="case-study/gametector" title="Gametector" target="_blank">
                            <div class="product_thumbnail_box w-100 mb-2">
                                <div class="product_thumbnail w-100 h-100" style="background-image: url('upload/casestudy/gametector-202003240450_438184987.jpeg')"></div>
                            </div>
                            <h4>Gametector</h4>
                        </a>
                        <ul>
                            <li>Nền tảng thi đấu thể thao điện tử</li>
                            <li><a href="case-study/gametector" target="_blank">Xem mô tả...</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 section-head text-center">
                    <h3>Tại sao lại chọn <span class="color">HACHINET</span></h3>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12">
                    <div class="why-choose-us wow swing" data-wow-delay=".3s" data-wow-duration="2s">
                        <em>
                            <p>
                                <strong>HACHINET</strong> là một trong những những công ty trẻ tuổi và tài năng tại Việt Nam chuyên giúp các doanh nghiệp thiết kế phần mềm, trang web, mobile app với giá cả phải chăng.
                            </p>
                            <p>
                                Đặc biệt <strong>HACHINET</strong> đã và đang được nhiều tổ chức có uy tín trong và ngoài nước đánh giá cao và lựa chọn làm đối tác lâu dài bởi chất lượng sản phẩm và phong cách làm việc chuyên nghiệp của đội ngũ nhân viên.
                            </p>
                            <p>
                                Vì thế, chúng tôi tự tin có thể mang lại các thành quả tốt đẹp cho đối tác của mình và mong mỏi, tự tin trở thành sự lựa chọn của quý khách hàng. Chắc chắn bạn sẽ hài lòng tuyệt đối.
                            </p>
                        </em>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="pt-4 pb-5">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 section-head text-center">
                    <h3>Đối tác của <span class="color">CHÚNG&nbsp;TÔI</span></h3>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 mb-4">
                    <div class="box-partner p-2 wow fadeInUp" data-wow-delay=".3s">
                        <div class="img_partner text-center">
                            <a href="#">
                                <img src="{{asset('images/partner/logo-deha.png')}}" class="colored-icon" alt="">
                            </a>
                        </div>
                        <div class="mt-3">
                            <h6 class="text-center">DEHA SOLUTIONS</h6>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 mb-4">
                    <div class="box-partner p-2 wow fadeInUp" data-wow-delay=".3s">
                        <div class="img_partner text-center">
                            <a href="#">
                                <img src="{{asset('images/partner/logo-omni.png')}}" class="colored-icon" alt="">
                            </a>
                        </div>
                        <div class="mt-3">
                            <h6 class="text-center">OMNI</h6>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-md-3 col-sm-6 mb-4">
                    <div class="box-partner p-2 wow fadeInUp" data-wow-delay=".3s">
                        <div class="img_partner text-center">
                            <a href="#">
                                <img src="{{asset('images/partner/logo_viettel2.png')}}" class="colored-icon" alt="">
                            </a>
                        </div>
                        <div class="mt-3">
                            <h6 class="text-center">VIETTEL</h6>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-3 col-sm-6 mb-4">
                    <div class="box-partner p-2 wow fadeInUp" data-wow-delay=".3s">
                        <div class="img_partner text-center">
                            <a href="#">
                                <img src="{{asset('images/partner/ttc-logo.png')}}" class="colored-icon" alt="">
                            </a>
                        </div>
                        <div class="mt-3">
                            <h6 class="text-center">TTC</h6>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-3 col-sm-6 mb-4">
                    <div class="box-partner p-2 wow fadeInUp" data-wow-delay=".3s">
                        <div class="img_partner text-center">
                            <a href="#">
                                <img src="{{asset('images/partner/beetsoft-logo.png')}}" class="colored-icon" alt="">
                            </a>
                        </div>
                        <div class="mt-3">
                            <h6 class="text-center">BEETSOFT</h6>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-3 col-sm-6 mb-4">
                    <div class="box-partner p-2 wow fadeInUp" data-wow-delay=".3s">
                        <div class="img_partner text-center">
                            <a href="#">
                                <img src="{{asset('images/partner/logo-gmoz.png')}}" class="colored-icon" alt="">
                            </a>
                        </div>
                        <div class="mt-3">
                            <h6 class="text-center">GMO RUNSYSTEM</h6>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-3 col-sm-6 mb-4">
                    <div class="box-partner p-2 wow fadeInUp" data-wow-delay=".3s">
                        <div class="img_partner text-center">
                            <a href="#">
                                <img src="{{asset('images/partner/itplink-logo.svg')}}" class="colored-icon" alt="">
                            </a>
                        </div>
                        <div class="mt-3">
                            <h6 class="text-center">IT PARTNERS LINK</h6>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-3 col-sm-6 mb-4">
                    <div class="box-partner p-2 wow fadeInUp" data-wow-delay=".3s">
                        <div class="img_partner text-center">
                            <a href="#">
                                <img src="{{asset('images/partner/nal-logo.png')}}" class="colored-icon" alt="">
                            </a>
                        </div>
                        <div class="mt-3">
                            <h6 class="text-center">NAL</h6>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-3 col-sm-6 mb-4">
                    <div class="box-partner p-2 wow fadeInUp" data-wow-delay=".3s">
                        <div class="img_partner text-center">
                            <a href="#">
                                <img src="{{asset('images/partner/logo-azet.png')}}" class="colored-icon" alt="">
                            </a>
                        </div>
                        <div class="mt-3">
                            <h6 class="text-center">AZET</h6>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-3 col-sm-6 mb-4">
                    <div class="box-partner p-2 wow fadeInUp" data-wow-delay=".3s">
                        <div class="img_partner text-center">
                            <a href="#">
                                <img src="{{asset('images/partner/logo-hachix.png')}}" class="colored-icon" alt="">
                            </a>
                        </div>
                        <div class="mt-3">
                            <h6 class="text-center">HACHI-X</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Service Area -->

    <!-- Start contact Area -->
    <section id="contact" class="contact-page area-padding img-contact">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 section-head text-center">
                    <h3>Liên hệ với <span class="color">CHÚNG&nbsp;TÔI</span></h3>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6">
                    <div class="contact-head">
                        <div class="contact-icon">
                            <div class="single-contact">
                                <br /><br />
                                <h5>Địa chỉ:</h5>
                                <a><i class="fa fa-map"></i><span>2F - 21B6, 234 Pham Van Dong, Hanoi,
                                    Vietnam</span></a>
                                <a><i class="fa fa-phone"></i><span>(+84) 24-6290-0388</span></a>
                                <a><i class="fa fa-envelope"></i><span>contact@hachinet.com</span></a>
                                <br />
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Start contact Form -->
                <div class="col-sm-6">
                        <div class="row">
                            <form id="contactForm" method="POST" class="contact-form">
                                <div class="col-sm-6">
                                    <input type="text" id="nameSuccess" class="form-control" placeholder="Name" required
                                        data-error="Please enter your name">
                                    <div class="help-block with-errors"></div>
                                </div>
                                <div class="col-sm-6">
                                    <input type="email" class="email form-control" id="emailSuccess" placeholder="Email"
                                        required data-error="Please enter your email">
                                    <div class="help-block with-errors"></div>
                                </div>
                                <div class="col-xs-12">
                                    <input type="text" id="msg_subject" class="form-control" placeholder="Subject"
                                        required data-error="Please enter your message subject">
                                    <div class="help-block with-errors"></div>
                                </div>
                                <div class="col-xs-12">
                                    <textarea id="message" rows="7" placeholder="Messages" class="form-control" required
                                        data-error="Write your message"></textarea>
                                    <div class="help-block with-errors"></div>
                                </div>
                                <div class="col-xs-12 text-center">
                                    <button type="button" id="submit" 
                                    data-loading-text="<i class='fa fa-spinner fa-spin '></i> Đang gửi"    
                                    class="contact-btn1" onclick="sendSuccess()">Gửi</button>
                                    <div id="msgSubmit" class="h3 text-center hidden"></div>
                                    <div class="clearfix"></div>
                                </div>
                            </form>
                        </div>
                </div>
                <!-- End contact Form -->
            </div>
        </div>
    </section>
    <!-- End contact Area -->

    <!-- Start Footer Area -->
    <footer>
        <div class="footer-top-area area-padding img-footer">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="footer-content text-center">
                            <div class="single-footer">
                                <div class="footer-logo text-center">
                                    <a>
                                        <img src="landing/serminar/img/logo/footer-logo.png" alt="hachinet footer logo">
                                    </a>
                                </div>
                            </div>
                            <div class="footer-social">
                                <ul class="social-link">
                                    <li><a href="https://www.facebook.com/hachinet.jsc/" target="_blank"><i
                                                class="fa fa-facebook"></i></a></li>
                                    <li><a href="https://www.linkedin.com/company/hachinet-software1/"
                                            target="_blank"><i class="fa fa-linkedin"></i></a></li>
                                    <li><a href="https://www.instagram.com/hachinet.software/" target="_blank"><i
                                                class="fa fa-instagram"></i></a></li>
                                    <li><a href="https://www.facebook.com/hachinet.jsc/" target="_blank"><i
                                                class="fa fa-youtube-play"></i></a></li>
                                </ul>
                            </div>
                            <div class="copyright">
                                <p>
                                    All rights reserved HACHINET Copyright © 2018 - 2020
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true" style="z-index: 9999999;">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form class="needs-validation" id="myForm" novalidate>
                            @csrf
                            <div class="form-group">
                                <label for="exampleInputEmail1">Tên của bạn*</label>
                                <input type="text" class="form-control" id="name" aria-describedby="emailHelp"
                                    placeholder="Name" required>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Email*</label>
                                <input type="email" class="form-control" id="email" aria-describedby="emailHelp"
                                    placeholder="Enter email" required>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Công ty*</label>
                                <input type="text" class="form-control" id="company" aria-describedby="emailHelp"
                                    placeholder="Company" required>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Địa chỉ*</label>
                                <input type="text" class="form-control" id="address" placeholder="Address" required>
                            </div>
                            <button type="button" onclick="sendEmail()"
                            data-loading-text="<i class='fa fa-spinner fa-spin '></i> Đang gửi"
                            value="Send An Email" class="slide-btn" id="slide-btn1">Gửi</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Modal -->
    </footer>
    <!-- End Footer Area -->

    <!-- all js here -->
    <script type="text/javascript">
        function sendEmail() {
            var name = $("#name");
            var email = $("#email");
            var address = $("#address");
            var company = $("#company");

            if (isNotEmpty(name) && isNotEmpty(email) && isNotEmpty(address) && isNotEmpty(company)) {
                $('.slide-btn').button('loading');
                $.ajax({
                    url: 'online-seminar',
                    method: 'POST',
                    dataType: 'json',
                    data: {
                        "_token": "{{ csrf_token() }}",
                        name: name.val(),
                        email: email.val(),
                        address: address.val(),
                        company: company.val()
                    }, success: function (response) {
                        swal("", "Cảm ơn bạn đã đăng ký, chúng tôi sẽ liên lạc với bạn trong thời gian sớm nhất", "success", { button: false });
                        $('#myForm')[0].reset();
                        $('.modal').hide();
                        $('.slide-btn').button('reset');
                    }
                });
            }
        }

        function sendSuccess() {
            alert('internal');
            var nameSuccess = $("#nameSuccess");
            var emailSuccess = $("#emailSuccess");
            var msg_subject = $("#msg_subject");
            var message = $("#message");
            if (isNotEmpty(nameSuccess) && isNotEmpty(emailSuccess) && isNotEmpty(msg_subject) && isNotEmpty(message)) {
                $('.contact-btn1').button('loading');
                $.ajax({
                    url: 'online-seminar-success',
                    method: 'POST',
                    dataType: 'json',
                    data: {
                        "_token": "{{ csrf_token() }}",
                        nameSuccess: nameSuccess.val(),
                        emailSuccess: emailSuccess.val(),
                        msg_subject: msg_subject.val(),
                        message: message.val()
                    }, success: function (response) {
                        swal("", "Thư của bạn đã được gửi thành công, cảm ơn bạn đã liên hệ với chúng tôi", "success");
                        $('#contactForm')[0].reset();
                        $('.contact-btn1').button('reset');
                        // $('.modal').modal('hide');
                    }
                });
            }
        }

        function isNotEmpty(caller) {
            if (caller.val() == "") {
                caller.css('border', '1px solid red');
                return false;
            } else
                caller.css('border', '');

            return true;
        }

    </script>
    <script src="landing/serminar/js/vendor/app.js"></script>
    <!-- jquery latest version -->
    <script src="landing/serminar/js/vendor/jquery-1.12.4.min.js"></script>
    <!-- bootstrap js -->
    <script src="landing/serminar/js/bootstrap.min.js"></script>
    <!-- stellar js -->
    <script src="landing/serminar/js/jquery.stellar.min.js"></script>
    <!-- plugins js -->
    <script src="landing/serminar/js/plugins.js"></script>
    <!-- wow.js -->
    <script src="landing/vn-web-app-design/js/wow.min.js"></script>
    <!-- main js -->
    <script src="landing/vn-web-app-design/js/main.js"></script>
</body>

</html>