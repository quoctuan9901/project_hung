<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\Category\StoreRequest;
use App\Http\Requests\Category\UpdateRequest;
use DateTime;
use DB;
class CategoryController extends Controller
{
    private $view = 'backend.modules.category.';

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['category'] = DB::table('category')->get();

        return view($this->view.'index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['category_parent'] = DB::table('category')->get();
        return view($this->view.'create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreRequest $request)
    {
        $data = $request->except('_token');
        $data['status'] = $request->status == 'on' ? 'on' : 'off';
        $data['created_at'] = new DateTime();
        $data['updated_at'] = new DateTime();
        DB::table('category')->insert($data);
        
        return redirect()->route('admin.category.index')->with('success',__('message.create_success',['module' => 'thể loại']));
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
        $data['category_parent'] = DB::table('category')->where(
            [
                ['parent_id','!=',$id],
                ['id','!=',$id]
        ])->get();

        $data['category'] = DB::table('category')->where('id',$id)->first();
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
        $data = $request->except('_token');
        $data['status'] = $request->status == 'on' ? 'on' : 'off';
        $data['created_at'] = new DateTime();
        $data['updated_at'] = new DateTime();
        DB::table('category')->where('id',$id)->update($data);
        
        return redirect()->route('admin.category.index')->with('success',__('message.edit_success',['module' => 'thể loại']));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $parent_check = DB::table('category')->where('parent_id',$id)->count();
        if ($parent_check > 0) {
            return redirect()->route('admin.category.index')->with('error',__('message.dont_delete_cate'));
        }
        
        DB::table('category')->where('id',$id)->delete();
        return redirect()->route('admin.category.index')->with('success',__('message.delete_success',['module' => 'thể loại']));
    }
}
