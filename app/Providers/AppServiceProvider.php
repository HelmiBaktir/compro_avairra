<?php

namespace App\Providers;

use App\Models\Company;
use App\Models\SosialMedia;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;

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
        $company = Company::take(1)->get()[0];
        $address = explode('//', $company->address)[0];
        $phone_number = explode('//', $company->phone_number)[0];
        // dd($address);
        $sosial_media = SosialMedia::where('company_id', $company->id)->get();
        $company2 = Company::all();
        View::share(['sosial_media'=> $sosial_media,'company'=>$company,'phone_number'=>$phone_number,'address'=>$address,'company2']);
    }
}
