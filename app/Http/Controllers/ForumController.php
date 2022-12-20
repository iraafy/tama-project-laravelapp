<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Forum;
use App\Models\Comment;
use Illuminate\Support\Facades\Session;

class ForumController extends Controller
{
    public function index()
    {
        $forum = Forum::orderBy('created_at', 'desc')->paginate(10);
        return view('user_views/forums', compact(['forum']));
    }

    public function view(Forum $forum)
    {
        // dd($forum);
        $comment = Comment::all();
        return view('user_views/view_details', compact(['forum', 'comment']));
    }

    public function store(Request $request)
    {
        // $id = Session::getId();
        // dd($id);
        $forum = Forum::create($request->all());

        if ($forum) {
            Session::flash('status', 'add_success');
            Session::flash('message', 'Forum Added!');
        }
        return redirect('/forums');
    }

    public function add_comment(Request $request)
    {
        // $id = Session::getId();
        // dd($request->all());
        $comment = Comment::create($request->all());

        if ($comment) {
            Session::flash('status', 'add_success');
            Session::flash('message', 'Comment Added!');
        }
        return redirect()->back();
    }
}
