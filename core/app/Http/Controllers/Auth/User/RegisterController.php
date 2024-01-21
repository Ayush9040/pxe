<?php

namespace App\Http\Controllers\Auth\User;

use App\Mail\SendMail; 
use Illuminate\Support\Facades\Mail;

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
        //$this->repository = $repository;
    }


    public function showForm()
    {
      return view('user.auth.register');
    }


    public function register(UserRequest $request)
    {   
        $request->validate([
            'email' => 'required|email|unique:users,email'
        ]);
        // $this->repository->register($request);

            // Mail Working
            $to = $request->input('email');
            $name = $request->input('first_name') . " " . $request->input('last_name');
            $subject = "Test Email";
            $data =["name" => $name,"message"=>"Email Successful"];

            $email = new SendMail($subject,  $data);
            try{
                $mail_success = Mail::to($to)->send($email);
                if(empty(Mail::failures())){
                $adminto = 'admin@block55.in';
                $admindata =["name" => $name,"message"=>"Registration Successful","mail"=>$request->input('email'),"mail_type" => "Admin"];
                $adminemail = new SendMail($subject,  $admindata);
                $mail_success = Mail::to($adminto)->send($adminemail);
                }
            }
            catch(Exception $e){
                echo $e->message;
            }
            //

        // $to = $request->input('email');
        // $subject = "Test Email";
        // $message = "This is a test email message.";

        // Additional headers
        // $headers = "From: sender@example.com\r\n";
        // $headers .= "Reply-To: sender@example.com\r\n";
        // $headers .= "CC: cc@example.com\r\n";
        // $headers .= "BCC: bcc@example.com\r\n";

        // Mail function to send email

        // $mail_success = mail($to, $subject, $message);

        // if ($mail_success) {
        //     echo "Email sent successfully!";
        // } else {
        //     echo "Failed to send email.";
        // }

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
