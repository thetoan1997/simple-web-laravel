@extends('interface.index')

@section('content')
    <div class="formLogin">
        <h1> Login </h1>
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
        <form action="login" method="post"> <!-- action Gui du lieu len trang login -->
                <input type="hidden" name="_token" value="{{csrf_token()}}"> 
                <input type="email" name="email" placehoder="username"><br>
                <input type="password" name="password" placehoder="password"><br>
                <button type="submit" class="submitLogin">Dang Nhap</button>
        </form>
    </div>
@endsection