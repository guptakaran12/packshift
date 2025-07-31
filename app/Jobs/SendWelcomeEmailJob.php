<?php

namespace App\Jobs;
use App\Models\User;
use App\Mail\ForgetUserMail;
use App\Mail\WelcomeUserMail;
use App\Mail\GoogleUserMail;
use Illuminate\Bus\Queueable;
use App\Mail\PasswordUpdateUserMail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Queue\SerializesModels;
use App\Mail\UserLoginNotificationMail;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;

class SendWelcomeEmailJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;
    protected $user,$type,$resetLink ;

    public function __construct($user,$type = 'login', $resetLink  = null)
    {
        $this->user = $user;
        $this->type = $type;
        $this->resetLink  = $resetLink ;
    }
 
    public function handle(): void
    {
        //Register 
        if($this->type == 'register'){
            // 1. Mail to user
            Mail::to($this->user->email)->send(new WelcomeUserMail($this->user));

            // 2. Mail to admin
            Mail::to('packshiftcare@gmail.com')->send(new WelcomeUserMail($this->user,true));
        }else if($this->type == 'forget'){
            // 1. Mail to user
            Mail::to($this->user->email)->send(new ForgetUserMail($this->user,false,$this->resetLink));

            // 2. Mail to admin
            Mail::to('packshiftcare@gmail.com')->send(new ForgetUserMail($this->user,true, $this->resetLink));
        }else if($this->type == 'password_update'){
            // 1. Mail to user
            Mail::to($this->user->email)->send(new PasswordUpdateUserMail($this->user,false));

            // 2. Mail to admin
            Mail::to('packshiftcare@gmail.com')->send(new PasswordUpdateUserMail($this->user,true));
        }else if($this->type == 'google'){
            // 1. Mail to user
            Mail::to($this->user->email)->send(new GoogleUserMail($this->user,false));

            // 2. Mail to admin
            Mail::to('packshiftcare@gmail.com')->send(new GoogleUserMail($this->user,true));
        }
        else{
           // Mail to user
            Mail::to($this->user->email)->send(new UserLoginNotificationMail($this->user));

            // Mail to admin
            Mail::to('packshiftcare@gmail.com')->send(new UserLoginNotificationMail($this->user, true));
        }
    }
}
