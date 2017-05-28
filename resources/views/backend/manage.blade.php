@extends('backend.index')
@section('content')
   <!-- Page Content -->
    <div class="container">
        <div class="row">
            <center><h1>Trang Quản Lý</h1></center>
            <div class="col-md-12">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th width="50px">ID</th>
                            <th width="150px">Video Clip</th>
                            <th>Tên Video</th>
                            <th width="200px">Người Đăng</th>
                            <th width="50px">Ẩn</th>
                            <th width="50px">Sửa</th>
                            <th width="50px">Xóa</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($data as $item)
                        <tr valign="middle">
                            <td>{{$loop->iteration}}</td>
                            <td>
                                <iframe width="150" height="100" src="{{$item["link_youtube"]}}" frameborder="0" allowfullscreen></iframe>
                            </td>
                            <td>{{$item["name_video"]}}</td>
                            <td>{{$item["name"]}}</td>
                            <td><a href="">Ẩn</a></td>
                            <td><a href="{{ route('getEdit',['id' => $item["id"]]) }}">Sửa</a></td>
                            <td><a href="{{ route('getDelete',['id' => $item["id"]]) }}">Xóa</a></td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <!-- /.row -->

        <hr>

        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <center>Copyright &copy; QuocTuan.Info 2017</center>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
        </footer>

    </div>
    <!-- /.container -->
@endsection