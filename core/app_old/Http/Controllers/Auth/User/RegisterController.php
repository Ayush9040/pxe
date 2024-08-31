<?php

namespace App\Http\Controllers\Auth\User;

use App\Mail\SendMail; 
use Illuminate\Support\Facades\Mail;
use Illuminate\{
    Http\Request
   
};
use App\{
    Http\Requests\UserRequest,
    Http\Controllers\Controller,
    Repositories\Front\UserRepository
};
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class RegisterController extends Controller
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
       // $this->repository = $repository;
    }


    public function showForm()
    {
      return view('user.auth.register');
    }


    public function register(Request $request)
    {   
        $request->validate([
            'email' => 'required|email|unique:users,email'
        ]);
       // print_r($request);
        // $this->repository->register($request);

        // update user table

            $input = $request->all();

            $user = new User;
            $input['password'] = bcrypt($request['password']);
            $input['email'] = $input['email'];
            $input['first_name'] = $input['first_name'];
            $input['last_name'] = $input['last_name'];
            $input['phone'] = $input['phone'];
            $input['activestatus'] = 1;
            $input['b2bstatus'] = 0;
            $input['vault'] = 0;
            // $verify = Str::random(6);
            // $input['email_token'] = $verify;
            $user->fill($input)->save();
          

            // Mail Working
            $to = $request->input('email');
            $name = $request->input('first_name') . " " . $request->input('last_name');
            $subject = "Registration Email";
            $data =["name" => $name,"message"=>"Email Successful","mail_type" => "User"];
            $email = new SendMail($subject,  $data);
            try{
                $mail_success = Mail::to($to)->send($email);
                if(empty(Mail::failures())){
                $adminto = 'admin@block55.in';
                $admindata =["name" => $name,"message"=>"Registration Successful", "mail" => $request->input('email'),"mail_type"=> "Admin"];
                $adminemail = new SendMail($subject,  $admindata);
                $mail_success = Mail::to($adminto)->send($adminemail);
                }
            }
            catch(Exception $e){
                echo $e->message;
            }


            

       

        Session::flash('success',__('Account Register Successfully please login'));
        return redirect()->back();
        
    }
    


    public function verify($token)
    {
        $user = User::where('email_token',$token)->first();
       
        if($user){
            
            Auth::login($user);
            
            return redirect(route('user.dashboard'));
        }else{
            return redirect(route('user.login'));
        }
    }



}
