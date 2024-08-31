<?php

namespace App\Http\Controllers\Back;

use App\{
    Models\PremiumCategory,
    Repositories\Back\CategoryRepository,
    Repositories\Back\PremiumCategoryRepository,
    Http\Requests\CategoryRequest,
    Http\Requests\PremiumRequest,
    Http\Controllers\Controller
};
use App\Helpers\ImageHelper;
use Illuminate\Http\Request;

class PremiumCategoryController extends Controller
{
    /**
     * Constructor Method.
     *
     * Setting Authentication
     *
     * @param  \App\Repositories\Back\PremiumCategoryRepository $repository
     *
     */
    public function __construct(PremiumCategoryRepository $repository)
    {
        $this->middleware('auth:admin');
        $this->middleware('adminlocalize');
        $this->repository = $repository;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('back.premiumcategory.index',[
            'datas' => PremiumCategory::orderBy('id','desc')->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('back.premiumcategory.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PremiumRequest $request)
    {
        $request->validate([
            'serial' => 'required|numeric|max:150'
        ]);
        $this->repository->store($request);
        return redirect()->route('back.premiumcategory.index')->withSuccess(__('New Premium Category Added Successfully.'));
    }

    /**
     * Change the status for editing the specified resource.
     *
     * @param  int  $id
     * @param  int  $status
     * @return \Illuminate\Http\Response
     */
    public function feature($id,$status)
    {
        PremiumCategory::find($id)->update(['is_feature' => $status]);
        return redirect()->route('back.premiumcategory.index')->withSuccess(__('Status Updated of Premium Category is done Successfully.'));
    }

    /**
     * Change the status for editing the specified resource.
     *
     * @param  int  $id
     * @param  int  $status
     * @return \Illuminate\Http\Response
     */
    public function status($id,$status)
    {
        PremiumCategory::find($id)->update(['status' => $status]);
        return redirect()->route('back.premiumcategory.index')->withSuccess(__('Status Updated of Premium Category is done Successfully.'));
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {
        return view('back.premiumcategory.edit',compact('category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CategoryRequest $request, Category $category)
    {
        $request->validate([
            'serial' => 'required|numeric|max:150'
        ]);
        $this->repository->update($category, $request);
        return redirect()->route('back.category.index')->withSuccess(__('Category Updated Successfully.'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
       $mgs = $this->repository->delete($category);
       if($mgs['status'] == 1){
        return redirect()->route('back.premiumcategory.index')->withSuccess($mgs['message']);
       }else{
        return redirect()->route('back.premiumcategory.index')->withError($mgs['message']);
       }
        
    }


}
