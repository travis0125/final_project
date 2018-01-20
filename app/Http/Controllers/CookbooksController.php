<?php

namespace App\Http\Controllers;

//use Illuminate\Http\Request;
use App\Http\Requests\CookbookRequest;
use App\Cookbook;
use App\Chef;

class CookbooksController extends Controller
{
    //所有食譜列表
    public function index()
    {
        return view('cookbooks.index')
            ->with('cookbooks', Cookbook::all());
    }
    //新增食譜資料
    public function create()
    {
        return view('cookbooks.create')
            ->with('chefs', Chef::oldest('id')->get());
    }
    //儲存資料
    public function store(CookbookRequest $request)
    {
        Cookbook::create($request->all());
        return redirect('cookbooks');
    }
    //修改食譜資料
    public function edit($id)
    {
        return view('cookbooks.edit')
            ->with(['cookbook' => Cookbook::findOrFail($id), 'chefs' => Chef::oldest('id')->get()]);
    }
    //更新食譜資料
    public function update($id,CookbookRequest $request)
    {
        $cookbook = Cookbook::findOrFail($id);
        $cookbook->update($request->all());
        return redirect('cookbooks');
    }
    //軟刪除
    public function destroy($id)
    {
        $cookbook = Cookbook::findOrFail($id);
        $cookbook->delete();
        return redirect('cookbooks');
    }
    //回復資料
    public function restore($id)
    {
        $cookbook = Cookbook::onlyTrashed()->where('id', '=', $id);
        $cookbook->restore();
        return redirect('cookbooks/deleted');
    }
    //所有已刪除食譜列表
    public function deleted()
    {
        return view('cookbooks.deleted')->with('cookbooks', Cookbook::onlyTrashed()->get());
    }
}
