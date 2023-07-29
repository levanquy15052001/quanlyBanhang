@extends('layout.master')
@push('style')
    <style>
        .error{
            color: red
        }
    </style>
@endpush
@section('content')
    <div class="container">
        <div id="content">

            <form action="{{ route('register') }}" method="POST" class="beta-form-checkout">
                @csrf
                <div class="row">
                    <div class="col-sm-3"></div>
                    <div class="col-sm-6">
                        <h4>Đăng kí</h4>
                        <div class="space20">&nbsp;</div>


                        <div class="form-block">
                            <label for="email">Email</label>
                            <input type="text" id="email" name="email" value="{{ old('email') }}">
                            @if ($errors->has('email'))
                                <span class="error">{{ $errors->first('email') }}</span>
                            @endif
                        </div>

                        <div class="form-block">
                            <label for="name">Họ Và Tên</label>
                            <input type="text" id="name" name="name" value="{{ old('name') }}">
                            @if ($errors->has('email'))
                                <span class="error">{{ $errors->first('name') }}</span>
                            @endif
                        </div>
                        <div class="form-block">
                            <label for="username">User Name</label>
                            <input type="text" id="username" name="username" value="{{ old('username') }}">
                            @if ($errors->has('username'))
                                <span class="error">{{ $errors->first('username') }}</span>
                            @endif
                        </div>

                        <div class="form-block">
                            <label for="password">Tạo Mật Khẩu</label>
                            <input type="password" id="password" name="password">
                            @if ($errors->has('password'))
                                <span class="error">{{ $errors->first('password') }}</span>
                            @endif
                        </div>
                        <div class="form-block">
                            <label for="confirm_password">Xác Nhận Mật Khẩu</label>
                            <input type="password" id="confirm_password" name="confirm_password">
                            @if ($errors->has('confirm_password'))
                                <span class="error">{{ $errors->first('confirm_password') }}</span>
                            @endif
                        </div>
                        <div class="form-block">
                            <button type="submit" class="btn btn-primary">Đăng ký</button>
                        </div>
                    </div>
                    <div class="col-sm-3"></div>
                </div>
            </form>
        </div> <!-- #content -->
    </div> <!-- .container -->
@endsection
@push('script')
    <script>
        $('#email').on('change',function(){
            let name = this.value.split("@")[0];
            document.getElementById("username").value = name;
        });
    
    </script>
@endpush
