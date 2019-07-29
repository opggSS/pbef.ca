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
        // $pageTypes = PageType::all();
        // $pageContents = PageContent::all();

        // $contents = array();
        // foreach($pageContents as $pageContent){
        //     $contents[$pageContent->varname] = $pageContent->value;
        // }

        // $unread_count = Message::getUnread();

        // View::share([
        //     'pageTypes'=> $pageTypes,
        //     'pc'=> $contents,
        //     'unread_count'=> $unread_count,
        // ]);
    }



}
