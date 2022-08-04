<?php

namespace App\Providers;

use App\Models\User;
use App\services\Newsletter;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\ServiceProvider;
use MailchimpMarketing\ApiClient;

class AppServiceProvider extends ServiceProvider
{


    public function boot()
    {
        //   Paginator::useBootstrap();
         Model::unguard();

         Gate::define('admin',function (User $user){
             return $user->username=='Ibram_lh';
         });
    }
}
