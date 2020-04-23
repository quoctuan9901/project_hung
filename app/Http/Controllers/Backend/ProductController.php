<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\Product\StoreRequest;
use App\Http\Requests\Product\UpdateRequest;
use Illuminate\Support\Facades\DB;
use DateTime;

class ProductController extends Controller
{
    private $view = 'backend.modules.product.';

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['product'] = DB::table('product')->get();
        return view($this->view.'index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = DB::table('category')->get();
        return view($this->view.'create',['idCate' => $data]);
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
        DB::table('product')->insert($data);
        return redirect()->route('admin.product.index')->with('success',__('message.create_success',['module' => 'sản phẩm']));
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
        $data['product'] = DB::table('product')->where('id',$id)->first();
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
        DB::table('product')->where('id',$id)->update($data);
        return redirect()->route('admin.product.index')->with('success',__('message.edit_product_success',['module' => 'sản phẩm']));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('product')->where('id',$id)->delete();
        return redirect()->route('admin.product.index')->with('success',__('message.delete_success',['module' => 'thể loại']));
    }
}
