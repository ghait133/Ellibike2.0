<?php
/**
 * Created by PhpStorm.
 * User: Ghait Elghouate
 * Date: 14.08.2018
 * Time: 08:46
 */

namespace App\Http\Controllers\Auth;


class BikesRegister
{

    public function showRegistrationForm()
    {
        return view('bikes.register');
    }
}