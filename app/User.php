<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Auth;
use Redirect;

/*
    if (!User::isAllowed([1])) {
      return User::block();
    }
*/

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'surname', 'userType'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function home() {
        switch ($this->userType) {
            case 1:
                return "/";
                break;
            case 2:
                return "/dashboard";
                break;
            default:
                return "/";
                break;
        }
    }

    public static function isAllowed(Array $roles) {
        $user = Auth::user();

        if (!$user) {
            return false;
        }

        if (!in_array($user->userType, $roles)) {
            return false;
        }

        return true;
    }

    public static function block() {
        $user = Auth::user();

        if (!$user) {
            return redirect("/");
        }

        return redirect($user->home());
    }
}
