<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Models\Topic;


class TopicController extends Controller
{
    public function index(Request $request)
    {

        $topic = Topic::all();
        return view('user_views/topics', ['topicList' => $topic]);
    }

    public function add_topic()
    {
        $topic = Topic::all()->toQuery()->simplePaginate(10);;
        return view('lecturer_views/add_topic', ['topicList' => $topic]);
    }

    public function table_topic()
    {
        $topic = Topic::all();
        return view('lecturer_views/table_topic', ['topicList' => $topic]);
    }

    public function store(Request $request)
    {
        // dd($request->all());
        // $topic = new Topic;
        // $topic->kbk = $request->kbk;
        // $topic->kajian = $request->kajian;
        // $topic->deskripsi_kajian = $request->deskripsi_kajian;
        // $topic->content = $request->content;
        // $topic->save();
        $topic = Topic::create($request->all());

        if ($topic) {
            Session::flash('status', 'add_success');
            Session::flash('message', 'Topic Added!');
        }

        return redirect('/add-topic');
    }

    public function update_topic(Request $request, $id)
    {
        // dd($request->all());
        $topic = Topic::findOrfail($id);
        $topic->kbk = $request->kbk;
        $topic->kajian = $request->kajian;
        $topic->deskripsi_kajian = $request->deskripsi_kajian;
        $topic->content = $request->content;
        $topic->save();

        if ($topic) {
            Session::flash('status', 'update_success');
            Session::flash('message', 'Topic Updated!');
        }

        return redirect('/add-topic');
    }

    public function destroy($id)
    {
        $topic = Topic::findOrfail($id);
        $topic->delete();

        if ($topic) {
            Session::flash('status', 'delete_success');
            Session::flash('message', 'Topic Deleted!');
        }

        return redirect('/add-topic');
    }

    public function search_topic(Request $request) {
        if($request->has('search')) {
            $topic = Topic::where('kajian', 'LIKE', '%'.$request->search. '%')->orWhere('deskripsi_kajian', 'LIKE', '%'.$request->search. '%')->get()->toQuery()->simplePaginate(10); 
        }
        else {
            $topic = Topic::all()->toQuery()->simplePaginate(10);;
        }

        return view('lecturer_views/add_topic', ['topicList' => $topic]);
    }
}
