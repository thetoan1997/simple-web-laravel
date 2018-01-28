<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comment;
use Illuminate\Support\Facades\Auth;
class CommentController extends Controller
{
    //
    public function postComment($id,Request $request){
        $idTinTuc = $id;
        // $tintuc = TinTuc::find($id);
        $comment = new Comment;
        $comment->idTinTuc = $idTinTuc;
        $comment->idUser = Auth::user()->id;
        $comment->NoiDung= $request->NoiDung;
        $comment->save();

        return redirect('trangchu');
    }
}
