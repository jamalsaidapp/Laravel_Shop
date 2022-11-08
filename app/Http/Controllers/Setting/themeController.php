<?php

namespace App\Http\Controllers\Setting;

use App\Http\Controllers\Controller;
use App\Models\Theme\Navbar;
use Illuminate\Http\Request;

class themeController extends Controller
{
    public function themConfig()
    {
        $navbarItems = Navbar::all();

        return $navbarItems;
    }
}
