<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\User\StoreRequest;
use App\Http\Requests\User\UpdateRequest;
use Illuminate\Support\Facades\DB;
use DateTime;

class UserController extends Controller
{
    private $view = 'backend.modules.user.';

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = DB::table('users')->get();
        return view($this->view.'index',['listdata' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = DB::table('users')->get();
        return view($this->view.'create',['level_user' => $data]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreRequest $request)
    {
        $data = $request->except('_token', 'password_confirmation');
        $data['status'] = $request->status == 'on' ? 'on' : 'off';
        $data['created_at'] = new DateTime();
        $data['updated_at'] = new DateTime();

        DB::table('users')->insert($data);
        return redirect()->route('admin.user.index')->with('success',__('message.create_success',['module' => 'tài khoản']));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data['level_user'] = DB::table('users')->where(
            [
                ['level','!=',$id],
                ['id','!=',$id]
        ])->get();
        $data['data_user'] = DB::table('users')->where('id',$id)->first();
        return view($this->view.'edit',$data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateRequest $request, $id)
    {
        $data = $request->except('_token', 'password_confirmation');
        $data['status'] = $request->status == 'on' ? 'on' : 'off';
        $data['created_at'] = new DateTime();
        $data['updated_at'] = new DateTime();

        DB::table('users')->where('id',$id)->update($data);
        return redirect()->route('admin.user.index')->with('success',__('message.create_success',['module' => 'tài khoản']));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $parent_check = DB::table('users')->where('level',$id)->count();
        if ($parent_check > 0) {
            return redirect()->route('admin.user.index')->with('error',__('message.dont_delete_cate'));
        }
        
        DB::table('users')->where('id',$id)->delete();
        return redirect()->route('admin.user.index')->with('success',__('message.delete_success',['module' => 'user']));
   
    }
}
