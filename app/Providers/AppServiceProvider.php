<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

use Illuminate\Support\Facades\Blade;

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
        //

        /**
         * create a new Blade directive to format the date
         * European format.
         *
         * @param   $dta  contains the values ​​to be formatted.
         */
        Blade::directive('dateFormat', function ($dta) {
            return "<?php
                            echo \Carbon\Carbon::parse({$dta}->birthdate)->format('d-m-Y')
                    ?>";
        });
    }
}
