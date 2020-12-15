<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-110986912-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-110986912-1');
</script>

    <!-- ########## All JS ########## -->
    <!-- jQuery js -->
    <script src="{{ asset('website/js/jquery.min.js') }}"></script>
    <!-- Popper js -->
    <script defer="defer" async="async" src="{{ asset('website/js/popper.min.js') }}"></script>
    <!-- Bootstrap js -->
    <script defer="defer" async="async" src="{{ asset('website/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('website/js/plugins.js') }}"></script>
    <script src="{{ asset('website/js/slick.min.js') }}"></script>
    <script src="{{ asset('website/js/caseslider.js') }}"></script>

    <!-- script js -->
    <script src="{{ asset('website/js/script.js') }}"></script>
    <!-- Load Facebook SDK for JavaScript -->
    <div id="fb-root"></div>
    <script>
        window.fbAsyncInit = function() {
            FB.init({
            xfbml            : true,
            version          : 'v3.3'
            });
        };

        (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = 'https://connect.facebook.net/ja_JP/sdk/xfbml.customerchat.js';
        fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));</script>

        <div class="fb-customerchat"
        attribution=setup_tool
        page_id="185234278694654"
        theme_color="#ffB701">
    </div>