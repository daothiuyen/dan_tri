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
                    <span> &nbsp; / &nbsp; Thể loại</span>
                </div>
            </div>
        </nav>
        <!-- End Nav Top -->

        <!-- Start Content Input -->
        <div class="table-content pl-4 pr-4">
            <div class="panel-heading border rounded p-2 bg-light">
                <p class="m-0">Thêm thể loại</p>
            </div>
            <!-- Start Form Input -->
            <div class="form-input bg-light">
                <form>
                    <div class="form-group pt-3">
                        <label for="title">Tên thể loại</label>
                        <input type="text" class="form-control" id="title" placeholder="Nhập tên thể loại">
                    </div>

                    <div class="form-group">
                        <label for="description">Mô tả ngắn</label>
                        <textarea class="form-control" id="description" rows="4" placeholder="Nhập mô tả thể loại"></textarea>
                    </div>

                    <div class="form-group">
                        <label for="select">Hiển thị</label>
                        <select class="form-control" id="select">
                            <option>Hiển thị</option>
                            <option>Không hiển thị</option>
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
