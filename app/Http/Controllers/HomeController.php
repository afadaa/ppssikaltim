<?php

namespace App\Http\Controllers;

use App\Models\Agenda;
use App\Models\Announcement;
use App\Models\Berita;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blog = Berita::count();
        $pengumuman = Announcement::count();
        $event = Agenda::count();

        return view('home')->with([
            'blog' => $blog,
            'pengumuman' => $pengumuman,
            'event' => $event
        ]);
    }
}
