<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

use Illuminate\Support\Facades\Blade;

use Illuminate\Support\Facades\Validator;

use Illuminate\Support\Facades\Hash;

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

        /**
         * create a new Blade directive to format the date
         * European format.
         *
         * @param   $dta  contains the values ​​to be formatted.
         */
        Blade::directive('dateFormatA', function ($dta) {
            return "<?php
                            echo \Carbon\Carbon::parse({$dta}->dateAdop)->format('d-m-Y')
                    ?>";
        });



        /**
         * create a new Blade directive to format the date
         * European format.
         *
         * @param   $dta  contains the values ​​to be formatted.
         */
        Blade::directive('dateFormatC', function ($dta) {
            return "<?php
                            echo \Carbon\Carbon::parse({$dta}->dateComment)->format('d-m-Y')
                    ?>";
        });




        /**
         * Validate if user's current password is correct
         * 
         * 
         */

        Validator::extend('isCurrentPassword',function ($attribute, $value, $parameters, $validator){
            $user = auth()->user();
            if(Hash::check($value, $user->password)){
                return true;
            }
            return false;
        });
    }
}
