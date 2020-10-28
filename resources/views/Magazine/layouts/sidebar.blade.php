<aside class="left-sidebar">
    <!-- Sidebar scroll-->
    <div class="scroll-sidebar">
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav">
            <ul id="sidebarnav">
                <!-- <li class="nav-small-cap">MENU</li> -->
                <li class="border-bottom ml-2 mr-2">
                    <a href="{{route('news')}}" aria-expanded="false" class="font-weight-bolder">{{trans('messages.top_magazine')}}</a>
                </li>
                <li class="border-bottom ml-2 mr-2">
                    <a href="{{route('case_study')}}" aria-expanded="false" class="font-weight-bolder">{{trans('messages.case_study')}}</a>
                </li>
                <li class="border-bottom ml-2 mr-2">
                    <a href="{{route('about_us')}}" aria-expanded="false" class="font-weight-bolder">{{trans('messages.about_us')}}</a>
                </li>
                <li class="border-bottom ml-2 mr-2">
                    <a href="{{route('contact')}}" aria-expanded="false" class="font-weight-bolder">{{trans('messages.contact_us')}}</a>
                </li>
                <li class="border-bottom ml-2 mr-2">
                    <a href="{{route('faq')}}" aria-expanded="false" class="font-weight-bolder">FAQs</a>
                </li>
            </ul>
        </nav>
        <!-- End Sidebar navigation -->
    </div>
    <!-- End Sidebar scroll-->
    <!-- Bottom points-->
    <div class="sidebar-footer">
        <!-- item-->
        <p class="mb-0 pt-2 pb-2 pr-3 pl-3 text-body text-center font-13">All rights reserved <a href="{{route('home')}}" class="template-color"><strong> HACHINET</strong></a> Copyright © 2018 - {{date('Y')}}</p>
    </div>
    <!-- End Bottom points-->
</aside>