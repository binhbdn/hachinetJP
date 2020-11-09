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
                                <h1 class="title1">Thiết kế</h1>
                                <h2 class="title2">Website</h2>
                                <h2 class="title2" style="animation-delay: 2s;">Mobile App</h2>
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
                <div class="section-head text-center">
                    <h3>Cung cấp <span class="color">DỊCH VỤ</span></h3>
                </div>
                <p class="text-center"><em>Những dịch vụ mà <strong class="color">HACHINET</strong> cung cấp đã mang lại giá trị to lớn cho sự thành công của khách hàng trong hơn 3 năm qua.</em></p>
            </div>
            <div class="row equal-cols mb-5">
                <div class="col-md-4">
                    <div class="service_content">
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
                    <div class="service_content">
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
                    <div class="service_content">
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
            <div class="row">
                <div class="section-head text-center">
                    <h3>Sản phẩm <span class="color">ĐÃ LÀM</span></h3>
                </div>
                <p class="text-center"><em>Các sản phẩm đã làm gần đây của <strong class="color">HACHINET</strong>.</em></p>
            </div>
            <div class="row equal-cols mb-5">
                <div class="col-md-4">
                    <div class="service_content">
                        <a class="text-center" href="https://www.devwork.vn/" title="Devwork.vn">
                            <div class="mb-2">
                                <img class="w-100 shadow" src="upload/casestudy/devworkvn-202007240926_733422683.png" alt="Devwork.vn">
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
                    <div class="service_content">
                        <a class="text-center" href="https://netbee.vn/" title="Netbee.vn">
                            <div class="mb-2">
                                <img class="w-100 shadow" src="upload/casestudy/netbeevn-202007240927_1525397999.png" alt="Netbee.vn">
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
                    <div class="service_content">
                        <a class="text-center" href="https://www.devwork.vn/" title="Nhật ký giấc mơ">
                            <div class="mb-2">
                                <img class="w-100 shadow" src="upload/casestudy/-202003240616_314336044.png" alt="Nhật ký giấc mơ">
                            </div>
                            <h4>Nhật ký giấc mơ</h4>
                        </a>
                        <ul>
                            <li>Trò chơi đi vòng quanh thế giới trong giấc mơ u tối.</li>
                            <li><a href="case-study/nhat-ky-giac-mo" target="_blank">Xem mô tả...</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="section-head text-center">
                    <h3>Khách hàng nói gì về <span class="color">HACHINET</span></h3>
                </div>
                <p class="text-center"><em>Sự hài lòng của khách hàng là thành công và niềm tự hào của <strong class="color">HACHINET</strong>.</em></p>
            </div>
            <div class="row equal-cols">
                <div class="col-md-4">
                    <div class="comment mb-4">
                        <p><em>Các mẫu thiết kế rất độc đáo và ấn tượng. Dịch vụ chăm sóc khách hàng tuyệt vời, tận tâm. Mình sẽ còn hợp tác lâu dài.</em></p>
                    </div>
                    <h2 class="comment-client">Hoàng HM</h2>
                    <p class="comment-company">ALI Co.</p>
                    <div class="comment-avatar mb-4">
                        <img src="static/img/avatars/4.jpg">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="comment mb-4">
                        <p><em>Thực sự tôi thấy HACHINET là đơn vị chuyên nghiệp và uy tín trong lĩnh vực thiết kế website. Tôi rất hài lòng.</em></p>
                    </div>
                    <h2 class="comment-client">Thúy Ngọc</h2>
                    <p class="comment-company">GLC Co.</p>
                    <div class="comment-avatar mb-4">
                        <img src="static/img/avatars/6.jpg">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="comment mb-4">
                        <p><em>HACHINET có đội ngũ nhân sự trẻ những rất năng động. Đặc biệt tôi rất thích phong cách thiết kế của các bạn.</em></p>
                    </div>
                    <h2 class="comment-client">Hiền Nguyễn</h2>
                    <p class="comment-company">SPD Co.</p>
                    <div class="comment-avatar mb-4">
                        <img src="static/img/avatars/3.jpg">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="pt-4 pb-5">
        <div class="container">
            <div class="row">
                <div class="section-head text-center">
                    <h3>Đối tác của <span class="color">CHÚNG TÔI</span></h3>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-md-6 mb-4">
                    <div class="box-partner p-2">
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
                <div class="col-12 col-md-6 mb-4">
                    <div class="box-partner p-2">
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
                    <div class="box-partner p-2">
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
                    <div class="box-partner p-2">
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
                    <div class="box-partner p-2">
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
                    <div class="box-partner p-2">
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
                    <div class="box-partner p-2">
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
                    <div class="box-partner p-2">
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
                    <div class="box-partner p-2">
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
                    <div class="box-partner p-2">
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
                <div class="section-head text-center">
                    <h3>Liên hệ với <span class="color">CHÚNG TÔI</span></h3>
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
    </footer>
    <!-- End Footer Area -->

    <!-- all js here -->
    <script type="text/javascript">
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
    <!-- main js -->
    <script src="landing/vn-web-app-design/js/main.js"></script>
</body>

</html>