<?php

namespace App\Http\Controllers;

use App\Models\Intern;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class InternController extends Controller
{
    public function index()
    {
        $intern = Intern::all();
        return view('user_views/interns', ['internList' => $intern]);
    }

    public function admin_dashboard()
    {
        return view('admin_views/welcome');
    }

    public function add_intern()
    {
        $intern = Intern::all();
        return view('admin_views/add_intern', ['internList' => $intern]);
    }

    public function store(Request $request)
    {
        $intern = Intern::create($request->all());

        if ($intern) {
            Session::flash('status', 'add_success');
            Session::flash('message', 'Internship Data Added!');
        }

        return redirect('/add-intern');
    }

    public function update_intern(Request $request, $id)
    {
        // dd($request->all());
        $intern = Intern::findOrfail($id);
        $intern->role = $request->role;
        $intern->company_name = $request->company_name;
        $intern->description = $request->description;
        $intern->company_address = $request->company_address;
        $intern->url_information = $request->url_information;
        $intern->internship_period = $request->internship_period;
        $intern->requirement = $request->requirement;

        $intern->save();

        if ($intern) {
            Session::flash('status', 'update_success');
            Session::flash('message', 'Internship Data Updated!');
        }

        return redirect('/add-intern');
    }

    public function destroy($id)
    {
        $intern = Intern::findOrfail($id);
        $intern->delete();

        if ($intern) {
            Session::flash('status', 'delete_success');
            Session::flash('message', 'Internship Data Deleted!');
        }

        return redirect('/add-intern');
    }
}
