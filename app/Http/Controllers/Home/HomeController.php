<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\PostsModel;
use App\Models\User;
use App\Models\CategoriesModel;
use App\Models\TagsModel;
use Auth;
use Illuminate\Foundation\Auth\AuthenticatesUsers;


class HomeController extends Controller
{

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/dashboard';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function index(){
        return view('auth/login');
    }
}
