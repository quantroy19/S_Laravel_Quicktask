<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    public function getFullName()
    {
        $user = User::find(1);
        echo $user->fullName;
    }
    public function setUserName()
    {
        $user = new User();
        $user->userName = "Đỗ Minh Quân";
        dd($user->userName);
        // $user->save();
    }
    public function getUserisActive()
    {

        dd(User::all());
    }
    public function getUserisAdmin()
    {

        dd(User::withoutGlobalScopes()->isAdmin()->get());
    }
}
