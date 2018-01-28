<div class="divNews row">
    <div class="divNews-left col-sm-9">
        <form action="uptintuc" method="POST" enctype="multipart/form-data">
            <input type="hidden" name="_token" value="{{csrf_token()}}">
            <div>
                <label>Nội Dung</label>
                <textarea class="form-control" name="NoiDung" rows="2"></textarea>
            </div>
            <div>
                <label>Picture</label>
                <input type="file" name="picture" class="formControl">
            </div>
            <button type="submit" class="btn btn-default">Upload</button>
        </form>
        @foreach($tintuc->sortByDesc('id') as $tt)
            <div class="eachNew">
                <div class="avatar">
                    <img src="img/{{$tt->user->image}}" class="img-circle person" alt="Random Name" width="30" height="30">
                </div>
                <p class="nameUserTitle"><b>{{$tt->user->name}}</b></p>
                <a href="newsPage.php?$link" title="image" class="divNews-ava">
                    <img src="img/{{$tt->Image}}" width="100%">
                </a>
                <div class="formComment">
                    <p class="tieuDe"><strong class="nameUser">{{$tt->user->name}}</strong> : <span>{{$tt->NoiDung}}</span></p>
                        @foreach($tt->comment as $cm)
                            <div class="commentBox">
                                <span class="nameUser"><strong>{{$cm->user->name}}</strong></span> :
                                <span id="cmNoiDung">{{$cm->NoiDung}}</span>
                                <small id="timeComment">{{$cm->seconds2human($cm->created_at->diffInSeconds($cm->expired))}} ago</small>
                            </div>
                        @endforeach
                    <p id="timeNews">{{$tt->seconds2human($tt->created_at->diffInSeconds($tt->expired))}} ago</p>
                </div>
                <form action="comment/{{$tt->id}}" method="post" role="form" class="comment">
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <div class="commentArea row">
                        <div class="form-comment col-sm-11">
                            <input type="text" placeholder="Write comment.." class="formComment" name="NoiDung">
                        </div>
                        <div class="form-post-comment col-sm-1">
                            <button type="submit" class="btn postComment">Send</button>
                        </div>
                    </div>
                </form>
            </div>
        @endforeach
    </div>
    <div class="divNews-right col-sm-3">
        @if(Auth::user())
            <div class="infoUser">
                <p class="nameUser" style="text-align: center;">{{Auth::user()->name}} </p>
                <img class="avaInfo" src="img/{{Auth::user()->image}}" >
                <a href="logout" class="buttonLogout">LOG OUT</a>
            </div>
        @endif

    </div>
</div>