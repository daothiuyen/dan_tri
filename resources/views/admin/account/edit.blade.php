@extends('layouts.admin.main')
@section('content')
    <!-- Page Content  -->
    <div id="content">
        <!-- Start Nav Top -->
        <nav class="navbar navbar-expand-lg navbar-light bg-light shadow rounded">
            <div class="container-fluid pl-0">
                <div class="col-md-10 pl-0">
                    <button type="button" id="sidebarCollapse" class="btn btn-info">
                        <i class="fas fa-bars"></i>
                    </button>
                </div>
                <div class="col-md-2 p-0 active-page">
                    <a href="/dashboard/home.html">
                        <i class="fas fa-home active-icon"></i>
                    </a>
                    <span> &nbsp; / &nbsp; Tài khoản</span>
                </div>
            </div>
        </nav>
        <!-- End Nav Top -->

        <!-- Start Content Input -->
        <div class="table-content pl-4 pr-4">
            <div class="panel-heading border rounded p-2 bg-light">
                <p class="m-0">Thêm tài khoản</p>
            </div>
            <!-- Start Form Input -->
            <div class="form-input bg-light">
                <form>
                    <div class="form-group pt-3">
                        <label for="email">email</label>
                        <input type="email" class="form-control" id="email" placeholder="Nhập email">
                    </div>

                    <div class="form-group pt-3">
                        <label for="username">Username</label>
                        <input type="text" class="form-control" id="username" placeholder="Nhập username">
                    </div>

                    <div class="form-group pt-3">
                        <label for="password-form">Password</label>
                        <input type="text" class="form-control" id="password-form" placeholder="Nhập password">
                    </div>


                    <div class="form-group pt-3">
                        <label for="pub-date">Năm sinh</label>
                        <input type="text" class="form-control" id="pub-date" placeholder="VD: 2020-19-02">
                    </div>


                    <div class="form-group">
                        <label for="images-form">Hình ảnh</label>
                        <input type="file" name="product_image" class="form-control" id="images-form">
                    </div>

                    <div class="form-group">
                        <label for="select">Phân quyền</label>
                        <select class="form-control" id="select">
                            <option>Admin</option>
                            <option>User</option>
                        </select>
                    </div>

                    <button type="submit" class="btn btn-primary">Hoàn thành</button>
                </form>

            </div>
            <!-- End Form Input -->

        </div>
        <!-- End Content Input -->

    </div>
    <!-- End Page Content -->
@endsection
