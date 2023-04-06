<?php

namespace App\Http\Controllers\Admin\Posts;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Str;
use App\Models\PostsModel;
use App\Models\TagsModel;
use App\Models\CategoriesModel;
use Yajra\Datatables\Datatables;

class AdminPostsController extends Controller
{
    /**
     * AdminPostsController constructor.
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display the list of Posts. If Request is ajax, return json response for dataTables.
     *
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     * @throws \Exception
     */
    public function index(Request $request)
    {
        if($request->ajax())
        {
            $model = PostsModel::query();
            return Datatables::of($model)
                ->addColumn('status',function ($model) use ($request){
                    $statusHtml = ($model->active) ? '<span class="label label-success">Active</span>' :'<span class="label label-danger">Deactivated</span>';
                    return $statusHtml;
                })

                ->addColumn('actions', function ($model) use ($request) {
                    $id = $model->id;
                    $link = $request->url().'/'.$id;
                    //Edit Button
                    $actionHtml = '<a href="'.$link.'/edit'.' " class="btn btn-primary btn-sm"><span class="glyphicon glyphicon-edit"></span></a>';
                    //Delete Button
                    $actionHtml .='<a href="" data-delete-url="'.$link .'" class="btn btn-danger btn-sm delete-data" data-toggle="modal" data-target="#deleteModal"><span class="glyphicon glyphicon-trash"></span></a>';

                    return $actionHtml;
                })
                ->rawColumns(['actions','status'])
                ->make(true);
        }
        return view('admin.posts.list');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = array();
        //Get key value pair data from categories table for populating in dropdown:
        $categories = CategoriesModel::pluck("name","id");
        $new = TagsModel::pluck('name', 'id');
        $data['post_tags'] = $new;
        $data['categories'] = $categories;
        return view("admin.posts.create",$data);
    }

    /**
     * Store a newly created Post in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $this->validate($request, [
            'title' => 'required',
            'content' => 'required',
            'active' => 'required',
            'featured_image'=>'required'
        ]); 
        $inputs = $request->all();
        $inputs['tag_id'] = !empty($inputs['tags']) ? implode(', ', $inputs['tags']) : null;
        $inputs['user_id'] = Auth::user()->id;
        $inputs['slug'] = Str::slug($inputs['title'], '-');


        if($inputs['featured_image'])
        {
            $image_path = uploadWithThumb($inputs['featured_image'],'images/blog');
            $inputs['featured_image'] = $image_path;   
        }

        PostsModel::create($inputs);
        $request->session()->flash('success', 'Post Successfull!');

        return redirect("posts");

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = array();
        $post = PostsModel::find($id);
        $categories = CategoriesModel::pluck("name","id");
        
        // \DB::enableQueryLog();
        $post_tags = TagsModel::pluck("name","id");
        // dd(\DB::getQueryLog());
        return view("admin.posts.edit",compact('post','categories', 'post_tags'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $this->validate($request, [
            'title' => 'required',
            'content' => 'required',
            'active' => 'required',
        ]);
        
        $inputs = $request->all();

        $inputs['slug'] = Str::slug($inputs['title'], '-');
        if($request->hasFile('featured_image'))
        {
            $image_path = uploadWithThumb($inputs['featured_image'],'images/blog');
            $inputs['featured_image'] = $image_path;   
        }
        $post = PostsModel::findOrFail($id);
        $post->update($inputs);
        \Session::flash('success','Post Updated Successfully');
        return redirect(url('posts'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = PostsModel::find($id);
        $post->delete($id);
        \Session::flash('info','Post deleted Successfully');
        return redirect(url('posts'));
    }
}
