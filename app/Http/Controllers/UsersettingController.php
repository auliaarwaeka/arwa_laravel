<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsersettingController extends Controller
{
   public function form()
   {
   	return view('admin.pages.user.setting');
   }
}