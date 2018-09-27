<?php

namespace hackerESQ\Settings\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Settings;

class SettingController extends Controller
{
    public function update(Request $request) {

        /*
        |
        |   This is an example controller to update settings. You
        |   can expose this through a route file as necessary. 
        |
        */

        $this->validate($request, [
              'firm_name'=>'string',
        ]);

        
        Settings::set( $request->all() , env('APP_DEBUG') );

        return array("message"=>"success");

	}
}
