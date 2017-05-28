@extends('backend.index')
@section('content')
@if (count($errors) > 0)
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
   <!-- Page Content -->
    <div class="container">

        <div class="row">
            <div class="col-xs-12 col-sm-8 col-md-8 col-sm-offset-2 col-md-offset-2">
                <form role="form" method="POST" action="">
                {{ csrf_field() }}
                    <h2>Đăng Bài</h2>
                    <hr class="colorgraph">
                    <div class="row">
                        <div class="col-xs-12 col-sm-1 col-md-12">
                            <div class="form-group">
                                <input type="text" name="txtFullName" id="txtFullName" class="form-control input-lg" placeholder="Vui lòng nhập họ tên đầy đủ hoặc nickname" tabindex="1" value="{{old('txtFullName',$data["name"])}}" >
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <input type="text" name="txtNameYoutube" id="txtVideoName" class="form-control input-lg" placeholder="Vui lòng nhập tên Video" tabindex="2" value="{{old('txtNameYoutube',$data["name_video"])}}" >
                    </div>
                    <div class="form-group">
                        <input type="text" name="txtLink" id="txtLink" class="form-control input-lg" placeholder="Vui lòng nhập link Youtube" tabindex="2" value="{{old('txtLink',$data["link_youtube"])}}" >
                    </div>
                    <div class="form-group">
                        <input type="email" name="email" id="email" class="form-control input-lg" placeholder="Vui lòng nhập địa chỉ Email" tabindex="3" value="{{old('email',$data["email"])}}" >
                    </div>
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <textarea name="txtIntro" class="form-control input-lg tinymce" rows="4" tabindex="4">{{old('txtIntro',$data["content"])}}</textarea>
                            </div>
                        </div>
                    </div>
                    
                    <hr class="colorgraph">
                    <div class="row">
                        <div class="col-xs-12 col-md-12"><input type="submit" value="Thêm" class="btn btn-primary btn-block btn-lg"></div>
                    </div>
                </form>
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
 
