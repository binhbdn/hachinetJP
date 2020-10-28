@extends('Website.layouts.default')
@section('content')
<style type="text/css" media="screen">
	.text-capcha {
	    pointer-events: none;
	    text-transform: uppercase;
	    font-weight: bold;
	    letter-spacing: 1rem;
	    text-align: center;
	}
</style>
@include('Website.layouts.breadcrumb')
<section class="section-padding-100 contact_us_area pt-5" id="contact">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h5>{{trans('messages.contact_ul_title')}}</h5>
                <p><i class="fa fa-dot-circle-o"></i>&nbsp;{{trans('messages.contact_li_1')}}</p>
                <p><i class="fa fa-dot-circle-o"></i>&nbsp;{{trans('messages.contact_li_2')}}</p>
                <p><i class="fa fa-dot-circle-o"></i>&nbsp;{{trans('messages.contact_li_3')}}</p>
                <p><i class="fa fa-dot-circle-o"></i>&nbsp;{{trans('messages.contact_li_4')}}</p>
            </div>
            <div class="col-12 border-top pt-3">
                <p class="font-weight-bold"><i class="fa fa-map-marker"></i>&nbsp;2F - 21B6, 234 Pham Van Dong, Hanoi, Vietnam</p>
                <p class="font-weight-bold"><i class="fa fa-phone"></i>&nbsp;(+84) 24-6290-0388</p>
                <p class="font-weight-bold"><i class="fa fa-envelope-o"></i>&nbsp;contact@hachinet.com</p>
            </div>
        </div>
    </div>
    <div class="container pb-5">
        <div class="row">
            <div class="col-12">
                <div class="section-heading text-center">
                    <h2 class="wow fadeInUp" data-wow-delay="0.3s">{{trans('messages.contact_us')}}</h2>
                </div>
            </div>
        </div>
        <!-- Contact Form -->
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="contact_form">
                    <form action="{{route('send_contact')}}" method="POST" id="main_contact_form">
                        @csrf
                        <div class="row">
                            <div class="col-12">
                                <div id="success_fail_info" class="mb-3"></div>
                            </div>

                            <div class="col-12 col-md-6">
                                <div class="group wow fadeInUp" data-wow-delay="0.2s">
                                    <input type="text" name="name" id="name" required>
                                    <span class="highlight"></span>
                                    <span class="bar"></span>
                                    <label>{{trans('messages.contact_name')}}</label>
                                </div>
                            </div>
                            <div class="col-12 col-md-6">
                                <div class="group wow fadeInUp" data-wow-delay="0.3s">
                                    <input type="text" name="email" id="email" required>
                                    <span class="highlight"></span>
                                    <span class="bar"></span>
                                    <label>{{trans('messages.contact_email')}}</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="group wow fadeInUp" data-wow-delay="0.4s">
                                    <input type="text" name="subject" id="subject" required>
                                    <span class="highlight"></span>
                                    <span class="bar"></span>
                                    <label>{{trans('messages.contact_subject')}}</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="group wow fadeInUp" data-wow-delay="0.5s">
                                    <textarea name="message" id="message" required></textarea>
                                    <span class="highlight"></span>
                                    <span class="bar"></span>
                                    <label>{{trans('messages.contact_message')}}</label>
                                </div>
                            </div>
                            <div class="col-12">
                            	<div class="row">
                            		<div class="col-md-3 col-6">
                            			<div class="group wow fadeInUp" data-wow-delay="0.3s">
		                                    <input type="text" name="capcha" id="capcha" required>
		                                    <span class="highlight"></span>
		                                    <span class="bar"></span>
		                                    <label>{{trans('messages.capcha')}}</label>
		                                </div>
                            		</div>
                            		<div class="col-md-3 col-6">
                            			<div class="box_bg-capcha">
                            				<div class="group wow fadeInUp" data-wow-delay="0.3s">
			                                    <input name="textcapcha" id="textcapcha" readonly class="bg-warning border-bottom-0 text-capcha text-white">
			                                </div>
                            			</div>
                            		</div>
                            	</div>
                                
                            </div>
                            <div class="col-12 text-center mb-3" id="box_sending">
                                <i class="fa fa-spin fa-spinner"></i>&nbsp;{{trans('messages.sending')}}
                            </div>
                            <div class="col-12 text-center wow fadeInUp" data-wow-delay="0.6s" id="box_btn_send">
                                <button type="submit" class="btn dream-btn">{{trans('messages.send_message')}}</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3723.4946561722927!2d105.77781461541106!3d21.052896792328756!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135ab4b54698fad%3A0xdc6d73d2030fac0d!2sHachinet!5e0!3m2!1svi!2s!4v1562312402060!5m2!1svi!2s" width="100%" height="400px" frameborder="0" style="border-radius:6px;" allowfullscreen=""></iframe>
</section>
@endsection
@section('javascript-custom')
<script type="text/javascript">
	var capcha = Math.random().toString(36).replace(/[^A-Za-z0-9]+/g, '').substr(0, 5);
	$('#textcapcha').attr('value', capcha);
</script>
@endsection