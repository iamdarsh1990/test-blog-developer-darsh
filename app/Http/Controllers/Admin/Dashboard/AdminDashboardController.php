<?php

namespace App\Http\Controllers\Admin\Dashboard;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\CommentsModel;
use App\Models\ContactModel;
use App\Models\User;
use App\Models\PostsModel;
use App\Models\TagsModel;
use App\Models\CategoriesModel;

class AdminDashboardController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $usersData = User::all();
        $usersCount = User::count();
        $postsCount = PostsModel::count();
        $tagsCount = TagsModel::count();
        $postCategoryCount = CategoriesModel::count();

    	return view("admin.dashboard",compact('usersCount','postsCount','tagsCount','postCategoryCount','usersData'));
    }

    public function users()
    {
        $usersData = User::all();
        return view("admin.users",compact('usersData'));
    }

    public function viewUser($id){
        $user = User::find($id);

        return view("admin.viewuser",compact('user'));
    }

    public function posts()
    {
        $postData = PostsModel::all();
        return view('admin.posts', compact('postData'));
    }

    public function viewPost($id)
    {
        $post = PostsModel::find($id);
        $category = CategoriesModel::select('name')->where('id',$post['category_id'])->first();
        $user = User::select('name')->where('id',$post['user_id'])->first();
        return view('admin.viewpost', compact('post','category','user'));
    }
}
