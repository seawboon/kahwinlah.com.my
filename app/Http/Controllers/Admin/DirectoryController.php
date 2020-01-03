<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Models\DirectoryCategory;
use App\Models\Directory;
use App\Models\DirectoryEmail;
use App\Models\DirectoryImage;
use App\Models\State;
use App\Models\Address;

class DirectoryController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function showListings()
    {
        $listings = Directory::all()->sortBy('name');
        $params['listings'] = $listings;

        return view('admin.directory.index', $params);
    }
}
