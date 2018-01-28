@if(Auth::check())
    <h2> Login Successful! </h2>
    @if(isset($user))
        {{"Name: ".$user->name}}
        <br>
        {{"Email: ".$user->email}}
        <br>
        <a href="{{url('logout')}}">LOG OUT</a>
    @endif
@else
    <h1>Ban chua dang nhap</h1>
@endif