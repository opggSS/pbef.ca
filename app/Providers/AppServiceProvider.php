<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\PageType;
use App\PageContent;
use View;
use App\Message;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);
        // $pageTypes = PageType::all();

      

        // $unread_count = Message::getUnread();

        // View::share([
        //     'pageTypes'=> $pageTypes,
        //     'unread_count'=> $unread_count,
        // ]);
    }



}
