<div class="breadcumb-area clearfix auto-init mode-scroll animation-engine-js {{$class}}">
    <!-- breadcumb content -->
    <div class="breadcumb-content">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <nav aria-label="breadcrumb" class="breadcumb--con text-center">
                        <h2 class="w-text title wow fadeInUp" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">{{trans($breadcrumb->title)}}</h2>
                        <ol class="breadcrumb justify-content-center wow fadeInUp" data-wow-delay="0.4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInUp;">
                            <li class="breadcrumb-item"><a href="/">{{trans('messages.home')}}</a></li>
                            <li class="breadcrumb-item active" aria-current="page">{{trans($breadcrumb->name)}}</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>