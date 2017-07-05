<?php

namespace App\Modules\User\Controllers;

use App\Http\Controllers\Controller;
use App\Modules\User\Model\CountryMaster;
use App\Modules\User\Model\CityMaster;
use Illuminate\Http\Request;
use Config;
use Session;

class AuthController extends Controller
{

    public $loginPath = '/login';
    public $redirectPath = '/customer/profile';
    public $redirectAfterLogout = '/customer/login';

    /**
     * Show the application login form.
     *
     * @return \Illuminate\Http\Response
     */
    public function getLogin()
    {
        return view('User::login');
    }

    public function createAccount($userType)
    {
        $lspUser = Config::get('constants.user_type.lsp');
        $shipperUser = Config::get('constants.user_type.shipper');
        $registrationSession = ($userType == $lspUser) ? 'lsp' : 'shipper';
        if ((Session::has('createAccount')) && (key(Session::get('createAccount')) != $userType)) {
            Session::forget('createAccount');
            Session::put('createAccount.' . $registrationSession, array('user_role' => $userType));
            Session::save();
        }

        return redirect()->intended('/create-account-step-one');
    }

    public function createAccountStepOne()
    {
        $country = new CountryMaster;
        $allCountry = $country->getCountry();
        //echo "<pre>";print_r(Session::get('createAccount'));die;
        return view('User::create_account_step_1')->with(['allCountry' => $allCountry,'accountSession'=>Session::get('createAccount')]);
    }

    public function getCities(Request $request)
    {
        $countryId = $request->get('country_id');
        $cityObj = new CityMaster;
        $cities = $cityObj->getCities($countryId);
        //response()->json($cities)
        return response()->json($cities);
    }

}
