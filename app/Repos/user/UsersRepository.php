<?php
/**
 * Created by PhpStorm.
 * User: Karlos
 * Date: 16/07/2015
 * Time: 12:18
 */

namespace App\Repos\user;

use Illuminate\Support\Facades\Auth;

class UsersRepository {

	public static function getNavbar(){
		if(Auth::user()->account_type) {
			return "admin";
		}
	    elseif (Auth::user()){
		    return "authenticated";
	    } else {
			return "standard";
		}
	}
}