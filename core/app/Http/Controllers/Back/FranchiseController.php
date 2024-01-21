<?php

namespace App\Http\Controllers\Back;

use App\{
    Models\Franchies,
    Models\User,
    Http\Controllers\Controller
};
use App\Helpers\ImageHelper;
use App\Http\Requests\UserRequest;
use App\Models\Subscriber;
use App\Repositories\Front\UserRepository;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;

class FranchiseController extends Controller
{

       /**
     * Constructor Method.
     *
     * Setting Authentication
     *
     * @param  \App\Repositories\Back\UserRepository $repository
     *
     */
    public function __construct(UserRepository $repository)
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
        
        return view('back.franchise.index',[
            'datas' => Franchies::where('is_delete',0)->get()
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = Franchies::find($id);

        return view('back.franchise.show',['user' => $user]);
    }


    public function update(UserRequest $request)
    {
        $request->validate([
            'password' => 'min:6|max:16|nullable'
        ]);
        $this->repository->profileUpdate($request);
        return redirect()->back()->withSuccess(__('Profile Updated Successfully.'));
        
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // ImageHelper::handleDeletedImage($user,'photo','assets/images/');
        $user = Franchies::find($id);
        // dd($user);
        $user->update(['is_delete' => 1]);
        // $user->save();
        return redirect()->route('back.franchise.index')->withSuccess(__('Franchise Deleted Successfully.'));
    }
}
