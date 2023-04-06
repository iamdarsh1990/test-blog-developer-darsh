<?php

namespace App\Http\Controllers\Admin\Users;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Yajra\DataTables\DataTables;

class AdminUsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Request $request)
    {
        $users = User::paginate(20);
        $data['users'] = $users;

        if($request->ajax())
        {
            $model = User::query();
            return Datatables::of($model)
                ->addColumn('actions', function ($model) use ($request) {
                    $id = $model->id;
                    $link = $request->url().'/'.$id;
                    //Edit Button
                    $actionHtml = '<a href="'.$link.'/edit'.' " class="btn btn-primary btn-sm"><span class="glyphicon glyphicon-edit"></span></a>';
                    //Delete Button
                    $delete = '';
                    if (auth()->user()->id !== $id) {
                        //$delete = '<a href="#" class="btn btn-danger" data-toggle="modal" data-target="#deleteModal'.$id.'"><span class="glyphicon glyphicon-trash" ></span></a>';
                        $delete = '<a href="" data-delete-url="'.$link .'" class="btn btn-danger btn-sm delete-data" data-toggle="modal" data-target="#deleteModal"><span class="glyphicon glyphicon-trash"></span></a>';
                    }
                    $actionHtml .= $delete;

                    return $actionHtml;
                })->rawColumns(['actions'])
                ->make(true);
        }

        return view('admin.users.list',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.users.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'name'=>'required',
            'email'=>'required|email|unique:users,email',
            'mobile'=>'required',
            'state'=>'required',
            'city'=>'required',
            'zip'=>'required',
            'new_password'=>'required|min:6',
            'confirm_password'=>'required|min:6|same:new_password',
        ]);

        $inputs = $request->all();
        $user = new User();
        $user->name = $inputs['name'];
        $user->email = $inputs['email'];
        $user->mobile = $inputs['mobile'];
        $user->city = $inputs['city'];
        $user->state = $inputs['state'];
        $user->zip = $inputs['zip'];
        $user->password = Hash::make($inputs['new_password']);
        $user->save();
        $request->session()->flash('success','User Added successfully');
        return redirect(route('users.index'));
    }



    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data['user'] = User::findOrFail($id);

        return view('admin.users.edit',$data);
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
        $this->validate($request,[
            'name'=>'required',
            'email' => 'required|email|unique:users,email,'.$id,
            'mobile'=>'required',
            'state'=>'required',
            'city'=>'required',
            'zip'=>'required',
            'new_password'=>'min:6|nullable',
            'confirm_password'=>'min:6|nullable|same:new_password',
        ]);
        $inputs = $request->all();

        $user = User::findOrFail($id);
        $user->name = $inputs['name'];
        $user->email = $inputs['email'];
        $user->mobile = $inputs['mobile'];
        $user->city = $inputs['city'];
        $user->state = $inputs['state'];
        $user->zip = $inputs['zip'];
        if ($inputs['new_password'] && !empty($inputs['new_password'])){
            $user->password = Hash::make($inputs['new_password']);
        }
        $user->save();

        $request->session()->flash('info','User updated successfully');

        return redirect(route('users.index'));
    }

    /**
     * Delete User.
     *
     * @param Request $request
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Request $request,$id)
    {
        $user = User::find($id);
        $user->delete($id);
        $request->session()->flash('info','User deleted successfully');
        return redirect()->back();
    }
}
