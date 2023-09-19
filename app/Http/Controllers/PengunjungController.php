<?php

namespace App\Http\Controllers;

use App\Models\Agenda;
use App\Models\Announcement;
use App\Models\Berita;
use App\Models\Categories;
use App\Models\Galeri;
use App\Models\Layanan;
use App\Models\Partner;
use Illuminate\Http\Request;

class PengunjungController extends Controller
{
    //

    public function index()
    {
        $berita = Berita::orderBy('created_at', 'desc')->get();
        $pengumuman = Announcement::limit(6)->latest()->get();
        $agenda = Agenda::limit(3)->latest()->get();
        $about = Layanan::where('categories', 'About')->paginate(3);
        $profil = Layanan::where('categories', 'Profil')->paginate(3);
        $partner = Partner::paginate(8);

        // dd($berita);
        return view('welcome')->with([
            'berita' => $berita,
            'pengumuman' => $pengumuman,
            'agenda' => $agenda,
            'about' => $about,
            'profil' => $profil,
            'partner' => $partner
        ]);
    }

    public function frontGaleri()
    {
        $data = Galeri::orderBy('created_at', 'desc')->limit(9)->get();

        $agenda = Agenda::orderBy('created_at', 'desc')->limit(3)->get();

        return view('galeris.front')->with([
            'data' => $data,
            'agenda' => $agenda
        ]);
        
    }

    public function frontEvent()
    {
        $data = Agenda::orderBy('created_at', 'desc')->limit(6)->get();

        $agenda = Agenda::orderBy('created_at', 'desc')->limit(3)->get();

        return view('agendas.front')->with([
            'data' => $data,
            'agenda' => $agenda
        ]);
        
    }

    public function frontAbout()
    {
        $data = Layanan::orderBy('created_at', 'desc')->where('categories', 'About')->limit(3)->get();

        $agenda = Agenda::orderBy('created_at', 'desc')->limit(3)->get();

        return view('layanans.front_about')->with([
            'data' => $data,
            'agenda' => $agenda
        ]);
        
    }

    public function showBerita($slug)
    {
        //$menu = Categories::where('parent_id', 1)->get();

        $data = Berita::where('slug', $slug)->get();

        $kategori = ktBerita::select('nama')->groupBy('nama')->get();

        $berita = Berita::orderBy('created_at', 'desc')->limit(4)->get();
        // dd($data);

        $controller = new Controller;
        return $this->Navbar('/beritas/detail', $controller, '/beritas/detail', 'beritas.detail')->with([ 
            // 'menu' => $menu,
            'data' => $data,
            'kategori' => $kategori,
            'berita' => $berita
        ]);
    }

    public function showEvent($slug)
    {
        // $menu = Categories::where('parent_id', 1)->get();

        $data = Agenda::where('slug', $slug)->get();

        $agenda = Agenda::orderBy('created_at', 'desc')->limit(3)->get();

        return view('agendas.details')->with([
            'data' => $data,
            'agenda' => $agenda
        ]);
    }

    public function showAbout($slug)
    {
        // $menu = Categories::where('parent_id', 1)->get();

        $data = Layanan::where('slug', $slug)->where('categories', 'About')->get();

        $about = Layanan::where('categories', 'About')->paginate(3);

        $agenda = Agenda::orderBy('created_at', 'desc')->limit(3)->get();

        return view('layanans.details_about')->with([
            'data' => $data,
            'about' => $about,
            'agenda' => $agenda
        ]);
    }
}
