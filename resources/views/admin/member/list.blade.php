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
                    <span> &nbsp; / &nbsp; Thành viên</span>
                </div>
            </div>
        </nav>
        <!-- End Nav Top -->

        <!-- Start Form Input -->
        <div class="table-content pl-4 pr-4">
            <div class="panel-heading border rounded p-2 bg-light">
                <p class="m-0">Danh sách thành viên</p>
            </div>

            <div class="table-list mt-2">
                <table class="table table-striped b-t b-light">
                    <thead class="thead-light">
                    <tr>
                        <th style="width:20px;">

                        </th>
                        <th>Họ tên</th>
                        <th>Năm sinh</th>
                        <th>Chức vụ</th>
                        <th>Mô tả ngắn</th>
                        <th>Hình ảnh</th>

                        <th>Hiển thị</th>
                        <th style="width:30px;"></th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr class="bg-light">
                        <td><label class="i-checks m-b-none"><input type="checkbox" name="post[]"><i></i></label></td>
                        <td>Lê Trường Giang</td>
                        <td>1978-19-02</td>
                        <td>Giám đốc</td>
                        <td>Giám đốc biên tập</td>
                        <td><img src="#" alt="hình ảnh" height="100" width="100"></td>
                        <td><span class="text-ellipsis">
                                         <a href="#"><span class="fa-thumb-styling fa fa-thumbs-up"></span></a>
                                    </span>
                        </td>

                        <td>
                            <a href="#" class="active styling-edit" ui-toggle-class="">
                                <i class="fas fa-edit fa-xs"></i></a>
                            <a onclick="return confirm('Bạn có chắc là muốn xóa danh mục này không')" href="#" class="active styling-edit" ui-toggle-class="">
                                <i class="fa fa-times text-danger text"></i>
                            </a>
                        </td>
                    </tr>

                    <tr class="bg-light">
                        <td><label class="i-checks m-b-none"><input type="checkbox" name="post[]"><i></i></label></td>
                        <td>Lê Trường Giang</td>
                        <td>1978-19-02</td>
                        <td>Giám đốc</td>
                        <td>Giám đốc biên tập</td>
                        <td><img src="#" alt="hình ảnh" height="100" width="100"></td>
                        <td><span class="text-ellipsis">
                                         <a href="#"><span class="fa-thumb-styling fa fa-thumbs-up"></span></a>
                                    </span>
                        </td>

                        <td>
                            <a href="#" class="active styling-edit" ui-toggle-class="">
                                <i class="fas fa-edit fa-xs"></i></a>
                            <a onclick="return confirm('Bạn có chắc là muốn xóa danh mục này không')" href="#" class="active styling-edit" ui-toggle-class="">
                                <i class="fa fa-times text-danger text"></i>
                            </a>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>

        </div>
        <!-- End Form Input -->
    </div>
    <!-- End Page Content -->
@endsection
