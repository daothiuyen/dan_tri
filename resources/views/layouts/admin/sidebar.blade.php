<!-- Sidebar  -->
<nav id="sidebar" class="shadow">
    <!-- Logo Header -->
    <div class="admin-login border-bottom">
        <div class="admin-login-images p-2 ml-3">
            <img src="{{ asset('assets/admin/images/author.jpg') }}" alt="admin images" class="rounded-circle border">
            <div class="float-right admin-name">
                <p class="mb-0 mt-2 mr-5">dantri.com</p>
                <div class="active-online">
                    <i class="fas fa-circle fa-xs"></i>
                    <span>Online</span>
                </div>
            </div>

        </div>

    </div>
    <!-- End Logo Header -->

    <!--Search Box -->
    <form role="search">
        <div class="form-group p-3 m-0 rounded">
            <input type="text" class="form-control" placeholder="Search">
        </div>
    </form>
    <!-- End Search Box -->

    <!-- Menu List -->
    <ul class="list-unstyled">
        <!-- Sub Menu Home -->
        <li class="active">
            <a href="{{route('admin')}}" class="pt-0">
                <i class="fas fa-home"></i> Trang chủ
            </a>
        </li>
        <!-- End Sub Menu Home -->

        <!-- Sub Menu User -->
        <li>
            <a href="#userSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                <i class="fas fa-user-friends"></i> Tài khoản
            </a>
            <ul class="collapse list-unstyled" id="userSubmenu">
                <li>
                    <a href="{{route('account.create')}}">
                        <i class="fas fa-plus-circle"></i> Thêm người dùng
                    </a>
                </li>
                <li>
                    <a href="{{route('account.index')}}">
                        <i class="fas fa-tasks"></i> Danh sách người dùng
                    </a>
                </li>
            </ul>
        </li>
        <!-- End Sub Menu User -->

        <!-- Sub Menu Categories -->
        <li>
            <a href="#categoriesSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                <i class="fab fa-elementor"></i> Thể loại
            </a>
            <ul class="collapse list-unstyled" id="categoriesSubmenu">
                <li>
                    <a href="{{ route('category.create') }}">
                        <i class="fas fa-plus-circle"></i> Thêm thể loại
                    </a>
                </li>
                <li>
                    <a href="{{route('category.index')}}">
                        <i class="fas fa-tasks"></i> Danh sách thể loại
                    </a>
                </li>
            </ul>
        </li>
        <!-- End Sub Catagories -->

        <!-- Sub Menu Library -->
        <li>
            <a href="#bookSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                <i class="fas fa-book"></i> Sách
            </a>
            <ul class="collapse list-unstyled" id="bookSubmenu">
                <li>
                    <a href="{{route('book.create')}}">
                        <i class="fas fa-book-medical"></i> Thêm sách
                    </a>
                </li>
                <li>
                    <a href="{{route('book.index')}}">
                        <i class="fas fa-tasks"></i> Danh mục sách
                    </a>
                </li>
            </ul>
        </li>
        <!-- End Sub Menu Library -->

        <!-- Sub Menu News -->
        <li>
            <a href="#newsSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                <i class="far fa-newspaper"></i> Tin tức
            </a>
            <ul class="collapse list-unstyled" id="newsSubmenu">
                <li>
                    <a href="{{route('blog.create')}}">
                        <i class="fas fa-book-medical"></i> Thêm tin tức
                    </a>
                </li>
                <li>
                    <a href="{{route('blog.index')}}">
                        <i class="fas fa-tasks"></i> Danh sách tin tức
                    </a>
                </li>
            </ul>
        </li>
        <!-- End Sub Menu News -->

        <!-- Sub Menu Slider -->
        <li>
            <a href="#sliderSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                <i class="fab fa-slideshare"></i> Slider
            </a>
            <ul class="collapse list-unstyled" id="sliderSubmenu">
                <li>
                    <a href="{{route('slider.create')}}">
                        <i class="fas fa-plus-circle"></i> Thêm Slider
                    </a>
                </li>
                <li>
                    <a href="{{route('slider.index')}}">
                        <i class="fas fa-tasks"></i> Danh sách Slider
                    </a>
                </li>
            </ul>
        </li>
        <!-- End Sub Menu Slider -->

        <!-- Sub Menu Media -->
{{--        <li>--}}
{{--            <a href="#mediaSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">--}}
{{--                <i class="fas fa-photo-video"></i></i> Media--}}
{{--            </a>--}}
{{--            <ul class="collapse list-unstyled" id="mediaSubmenu">--}}
{{--                <li>--}}
{{--                    <a href="/dashboard/media/media-add.html">--}}
{{--                        <i class="fas fa-plus-circle"></i> Thêm Media--}}
{{--                    </a>--}}
{{--                </li>--}}
{{--                <li>--}}
{{--                    <a href="/dashboard/media/media-list.html">--}}
{{--                        <i class="fas fa-tasks"></i> Danh sách Media--}}
{{--                    </a>--}}
{{--                </li>--}}
{{--            </ul>--}}
{{--        </li>--}}
        <!-- End Sub Menu Media -->

        <!-- Sub Menu Author -->
        <li>
            <a href="#authorSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                <i class="fas fa-user-edit"></i> Tác giả
            </a>
            <ul class="collapse list-unstyled" id="authorSubmenu">
                <li>
                    <a href="{{route('author.create')}}">
                        <i class="fas fa-plus-circle"></i> Thêm tác giả
                    </a>
                </li>
                <li>
                    <a href="{{route('author.index')}}">
                        <i class="fas fa-tasks"></i> Danh sách tác giả
                    </a>
                </li>
            </ul>
        </li>
        <!-- End Sub Menu Author -->

        <!-- Sub Menu Member -->
        <li>
            <a href="#memberSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                <i class="fas fa-users"></i> Thành viên
            </a>
            <ul class="collapse list-unstyled" id="memberSubmenu">
                <li>
                    <a href="{{route('member.create')}}">
                        <i class="fas fa-plus-circle"></i> Thêm thành viên
                    </a>
                </li>
                <li>
                    <a href="{{route('member.index')}}">
                        <i class="fas fa-tasks"></i> Danh sách thành viên
                    </a>
                </li>
            </ul>
        </li>
        <!-- End Sub Menu Menber -->

        <!-- Sub Menu Cooperate-->
        <li>
            <a href="#collASubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                <i class="fas fa-people-carry"></i> Hợp tác
            </a>
            <ul class="collapse list-unstyled" id="collASubmenu">
                <li>
                    <a href="{{route('cooperate.create')}}">
                        <i class="fas fa-plus-circle"></i> Thêm đơn vị
                    </a>
                </li>
                <li>
                    <a href="{{route('cooperate.index')}}">
                        <i class="fas fa-tasks"></i> Danh sách đơn vị
                    </a>
                </li>
            </ul>
        </li>
        <!-- End Sub Menu Cooperate -->

        <!-- Sub Menu Support -->
        <li>
            <a href="/dashboard/document.html">
                <i class="fas fa-question"></i> Hướng dẫn
            </a>
        </li>
        <!-- END Sub Menu Suport -->

        <!-- Start Logout -->
        <li>
            <a href="/dashboard/">
                <i class="fas fa-power-off"></i> Đăng xuất
            </a>
        </li>
        <!-- End Logout -->
    </ul>
    <!-- End Menu List -->
</nav>
<!-- End Sidebar  -->
