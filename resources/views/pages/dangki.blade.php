@extends('interface.index')

@section('content')
    <div class="formLogin">
        <h1> Register </h1>
        @if(count($errors)>0)
            <div class="alert alert-danger">
                @foreach($errors->all() as $err)
                    {{$err}}<br>
                @endforeach
            </div>
        @endif
        @if(session('thongbao'))
            <div class="alert alert-danger">
                {{session('thongbao')}}
            </div>
        @endif
        <div class="signup">
            <form action="dangki" method="post" enctype="multipart/form-data"> <!-- action Gui du lieu len trang login -->
                    <input type="hidden" name="_token" value="{{csrf_token()}}"> 
                    <label>Name :</label> 
                    <input type="text" name="name" placehoder="name"><br>
                    <label>Email :</label> 
                    <input type="email" name="email" placehoder="username"><br>
                    <label>Password :</label> 
                    <input type="password" name="password" placehoder="password"><br>
                    <label>Confirm Password :</label> 
                    <input type="password" name="passwordConfirm" placehoder="confirm password"><br>
                    <div>
                        <label>Picture</label>
                        <input type="file" name="pictureAva" class="formControl">
                    </div>
                    <button type="submit" class="submitLogin">Dang Ki</button>
            </form>
        </div>
    </div>
@endsection