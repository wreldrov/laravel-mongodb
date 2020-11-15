<?php

namespace App\Providers;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Event;
use Illuminate\Support\ServiceProvider;

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
        if (env('APP_ENV') !== 'production') {
            DB::connection()->enableQueryLog();
            Event::listen('kernel.handled', function ($request, $response) {
                if ( $request->has('debug') ) {
                    $queries = DB::getQueryLog();
                    $formattedQueries = [];
                    foreach( $queries as $query ) :
                        $prep = $query['query'];
                        foreach( $query['bindings'] as $binding ) :
                            $prep = preg_replace("#\?#", is_numeric($binding) ? $binding : "'" . $binding . "'", $prep, 1);
                        endforeach;
                        $formattedQueries[] = $this->removeLineBreaks($prep);
                    endforeach;
                    dd($formattedQueries);
                }
            });
        }
    }

    function removeLineBreaks(string $item){
        return str_replace(["\r\n", "\r", "\n"], ' ', $item);
    }
}
