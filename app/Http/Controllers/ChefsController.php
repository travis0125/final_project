<?php

namespace App\Http\Controllers;

//use Illuminate\Http\Request;
use App\Http\Requests\ChefRequest;
use App\Chef;

class ChefsController extends Controller
{
    //所有在職廚師列表
    public function index()
    {
        return view('chefs.index')
            ->with('chefs', Chef::oldest('id')->get());
    }
    //新增廚師資料
    public function create()
    {
        return view('chefs.create');
    }
    //儲存資料
    public function store(ChefRequest $request)
    {
        Chef::create($request->all());
        return redirect('chefs');
    }
    //檢視某位廚師的所有食譜
    public function show($id)
    {
        $cookbooks = Chef::findOrFail($id)->cookbooks()->get();
        return view('chefs.show')
            ->with('cookbooks', $cookbooks);
    }
    //修改廚師資料
    public function edit($id)
    {
        return view('chefs.edit')->with('chef', Chef::findOrFail($id));
    }
    //更新廚師資料
    public function update($id, ChefRequest $request)
    {
        $chef = Chef::findOrFail($id);
        $chef->update($request->all());
        return redirect('chefs');
    }
    //軟刪除
    public function destroy($id)
    {
        $chef = Chef::findOrFail($id);
        $chef->delete();
        return redirect('chefs');
    }
    //回復資料
    public function restore($id)
    {
        $chef = Chef::onlyTrashed()->where('id', '=', $id);
        $chef->restore();
        return redirect('chefs/quit');
    }
    //所有離職廚師列表
    public function quit()
    {
        return view('chefs.quit')
            ->with('chefs', Chef::onlyTrashed()->get());
    }
}
