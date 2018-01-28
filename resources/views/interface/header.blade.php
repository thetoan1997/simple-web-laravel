<div class="logo">
    <div class="row header-logo">
    <div class="col-sm-6 image-logo">
            {{--  <img src="img/logoBkuProduct.png" >  --}}
    </div>
    <div class="col-sm-6 two-button">
      @if(!Auth::user())
        <a href="dangki" class="buttonlogin">SIGN UP</a>
        <a href="login" class="buttonlogin">LOG IN</a>
      @else
        <button class="buttonlogin">{{Auth::user()->name}}</button>
        {{--  <a href="logout" class="btn">LOG OUT</a>  --}}
      @endif
    </div>
    </div>
</div>
<div class="header">
    <nav class="navbar navbar-fixed navbar-default">
        <img class="headerLogo" src="img/logoBkuProduct.png" >
    {{--  <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#myPage" onclick="window.location.reload()">Home</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav ">
        <li><a href="#about" onclick="window.location.reload()" class="active">NEWS</a></li>
        <li><a href="#services">HOT NEWS</a></li>
        <li><a href="#portfolio">REVIEWS</a></li>
        <li><a href="#pricing">THE BEST</a></li>
        <li class="dropdown">
            <a href="javascript:void(0)" class="dropbtn">MORE</a>
                <div class="dropdown-content">
              <a href="#">GAME</a>
              <a href="#">APP</a>
              <a href="#">NEWS</a>
                </div>
          </li>
      </ul>
    </div>  --}}
    </nav>
</div>