<?php

namespace App\Http\Controllers\Back;
use App\Mail\SendMail; 
use App\{
    Models\User,
     Models\Setting,
    Http\Controllers\Controller,
    Helpers\EmailHelper
};
use App\Helpers\ImageHelper;
use App\Http\Requests\UserRequest;
use App\Models\Subscriber;
use App\Repositories\Front\UserRepository;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;

class UserController extends Controller
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
        
        return view('back.user.index',[
            'datas' => User::where('b2bstatus','=',0)->get()
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        return view('back.user.show',compact('user'));
    }
    public function b2bcustomer(User $user)
    {
        return view('back.b2b.index',[
            'datas' => User::where('b2bstatus','=',1)->get()
        ]);
    }
    public function vaultcustomer(User $user)
    {
        return view('back.vault.index',[
            'datas' => User::where('vault','=',1)->get()
        ]);
    }

    public function update(UserRequest $request)
    {
        $request->validate([
            'password' => 'min:6|max:16|nullable'
        ]);
         $input = $request->all();
        $this->repository->profileUpdate($request);
       
        $userid = $input['user_id'];
       

        $datas =User::where('id','=',$userid)->get()->first();
        if($datas->vault===1)
        {
        $setting = Setting::first();
        $name  = $input['first_name'].' '.$input['last_name'];
        $subject = "Registration";
        $to = $input['email'];
        $phone = $input['phone'];
        
        $msg = "Name: ".$name."<br/>Phone: ".$phone."<br/>Message:Your LogIn code ".$input['password'];

        $emailData = [
            'to' => $to,
            'subject' => $subject,
            'body' => $msg,
        ];

        $email = new EmailHelper();
        $email->sendCustomMail($emailData);
      }
      if($datas->b2bstatus===1)
      {
        $setting = Setting::first();
        $name  = $input['first_name'].' '.$input['last_name'];
        $subject = "Registration";
        $to = $input['email'];
        $phone = $input['phone'];
        
        $msg = "Name: ".$name."<br/>Phone: ".$phone."<br/>Message:Your Requst Accepted ";

        $emailData = [
            'to' => $to,
            'subject' => $subject,
            'body' => $msg,
        ];

        $email = new EmailHelper();
        $email->sendCustomMail($emailData);

      }

        return redirect()->back()->withSuccess(__('Profile Updated Successfully.'));
        
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        ImageHelper::handleDeletedImage($user,'photo','assets/images/');
        $user->delete();
        return redirect()->route('back.user.index')->withSuccess(__('Customer Deleted Successfully.'));
    }
}
