<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Travel;
use Illuminate\Support\Str;
use Alert;

class TravelController extends Controller
{
    public function index()
    {
        $data = Travel::all();
        return view('be.travel.index', compact('data'));
    }

    public function create()
    {
        return view('be.travel.create');
    }

    public function store(Request $req)
    {
        // return $req;
        $req->validate([
            'title' => 'required',
            'location' => 'required',
            'about' => 'required|max:2000',
            'featured_event' => 'required',
            'language' => 'required',
            'foods' => 'required',
            'date' => 'required',
            'type' => 'required',
            'duration' => 'required',
            'price' => 'required'
        ]);

        $data = New Travel;
        $data->title = $req->title;
        $data->location = $req->location;
        $data->about = $req->about;
        $data->featured_event = $req->featured_event;
        $data->language = $req->language;
        $data->foods = $req->foods;
        $data->slug = Str::slug($req->title, '-');
        $data->date = $req->date;
        $data->type = $req->type;
        $data->duration = $req->duration;
        $data->price = $req->price;
        $data->save();
        
        toast('New Travel Success Added','success');
        return redirect('/admin/travel');

    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
