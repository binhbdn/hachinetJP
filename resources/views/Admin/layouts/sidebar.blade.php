<aside class="left-sidebar">
    <!-- Sidebar scroll-->
    <div class="scroll-sidebar">
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav">
            <ul id="sidebarnav">
                <!-- <li class="nav-small-cap">MENU</li> -->
                <li>
                    <a href="{{route('home__admin')}}" aria-expanded="false"><i class="mdi mdi-home"></i><span class="hide-menu">Home</span></a>
                </li>
                <!-- <li>
                    <a href="{{route('media.index')}}" aria-expanded="false"><i class="mdi mdi-camera"></i><span class="hide-menu">Media</span></a>
                </li> -->
                <li>
                    <a class="has-arrow " href="javascript:void(0);" aria-expanded="false"><i class="mdi mdi-book-open-variant"></i><span class="hide-menu">News Manager</span></a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a href="{{route('news.index')}}">List News</a></li>
                        <li><a href="{{route('news.create')}}">Add new News</a></li>
                    </ul>
                </li>
                <li>
                    <a class="has-arrow " href="javascript:void(0);" aria-expanded="false"><i class="mdi mdi-file-powerpoint"></i><span class="hide-menu">Pages Manager</span></a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a href="{{route('pages.index')}}">List Pages</a></li>
                        <li><a href="{{route('pages.create')}}">Add new Page</a></li>
                    </ul>
                </li>
                <li>
                    <a class="has-arrow " href="javascript:void(0);" aria-expanded="false"><i class="mdi mdi-widgets"></i><span class="hide-menu">Case Study</span></a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a href="{{route('case-study.index')}}">List Case Study</a></li>
                        <li><a href="{{route('case-study.create')}}">Add new Case</a></li>
                    </ul>
                </li>
                <li>
                    <a class="has-arrow " href="javascript:void(0);" aria-expanded="false"><i class="mdi mdi-tag-multiple"></i><span class="hide-menu">Tags Link Manager</span></a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a href="{{route('tagslink.index')}}">List Tags Link</a></li>
                        <li><a href="{{route('tagslink.create')}}">Add new Tag</a></li>
                    </ul>
                </li>
                <li>
                    <a class="has-arrow " href="javascript:void(0);" aria-expanded="false"><i class="mdi mdi-comment-question-outline"></i><span class="hide-menu">FAQs Manager</span></a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a href="{{route('faqs.index')}}">List FAQs</a></li>
                        <li><a href="{{route('faqs.create')}}">Add new FAQ</a></li>
                    </ul>
                </li>
                <li>
                    <a href="{{route('partner.index')}}" aria-expanded="false"><i class="mdi mdi-account-star-variant"></i><span class="hide-menu">Partner Manager</span></a>
                </li>
                <li>
                    <a href="{{route('contact.index')}}" aria-expanded="false"><i class="mdi mdi-email-outline"></i><span class="hide-menu">Contact Manager</span></a>
                </li>
                <li>
                    <a href="{{route('translate.index')}}" aria-expanded="false"><i class="mdi mdi-google-translate"></i><span class="hide-menu">Translate Manager</span></a>
                </li>
            </ul>
        </nav>
        <!-- End Sidebar navigation -->
    </div>
    <!-- End Sidebar scroll-->
    <!-- Bottom points-->
    <div class="sidebar-footer">
        <!-- item-->
        <a href="javascript:void(0);" class="link" data-toggle="tooltip">&nbsp;&nbsp;</a>
        <a href="{{route('settings.index')}}" class="link" data-toggle="tooltip" title="Settings"><i class="ti-settings"></i></a>
        <!-- item-->
        <a href="{{route('logout.index')}}" class="link" data-toggle="tooltip" title="Logout"><i class="mdi mdi-power"></i></a>
    </div>
    <!-- End Bottom points-->
</aside>