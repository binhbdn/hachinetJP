<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-110986912-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-110986912-1');
</script>

<script src="{{asset('assets/blogs/js/jquery.min.js')}}"></script>
<!-- Bootstrap tether Core JavaScript -->
<script src="{{asset('assets/blogs/js/popper.min.js')}}"></script>
<script src="{{asset('assets/blogs/js/bootstrap.min.js')}}"></script>
<!-- slimscrollbar scrollbar JavaScript -->
<script src="{{asset('assets/blogs/js/jquery.slimscroll.js')}}"></script>
<!-- <script src="{{asset('assets/blogs/js/waves.js')}}"></script> -->
<script src="{{asset('assets/blogs/js/sidebarmenu.js')}}"></script>
<script src="{{asset('assets/blogs/js/sticky-kit.min.js')}}"></script>
<script src="{{asset('assets/blogs/js/custom.min.js')}}"></script>
<script src="{{asset('admin/js/sweetalert2.all.min.js')}}"></script>
<script>
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
</script>