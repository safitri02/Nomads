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

    public function detail($id)
    {
        $data = Travel::find($id);
        // return $data;
        return view('be.travel.detail', compact('data'));
    }

    public function edit($id)
    {
        // dd("Masuk");
        $data = Travel::find($id);
        return view('be.travel.update', compact('data'));
    }

    public function update(Request $req, $id)
    {
        // dump("MASUK SINIII");
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

        $data = Travel::find($id);
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
        $data->update();
        
        toast('New Travel Success Update','success');
        return redirect('/admin/travel');
    }

    public function destroy($id)
    {
        $data = Travel::find($id);
        $data->delete();

        toast('New Travel Success Delete','success');
        return redirect('/admin/travel');

    }
}
