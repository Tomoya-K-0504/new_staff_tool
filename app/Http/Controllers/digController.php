<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Jenssegers\Agent\Agent;

class digController extends Controller
{
    public function dig_search(Request $req) {
    	$agent = new Agent();
    	$platform = $agent->platform();
    	if ($platform == "Windows") {
    		if ($req->has('record_name')) {
			$cmd = 'nslookup ' . $req->input('search_word');
			// . " " . $req->input('record_name');
			}
    	}
		else if ($platform == "Linux" || $platform == "OS X") {
			if ($req->has('record_name')) {
				$cmd = 'dig ' . $req->input('search_word') . " " . $req->input('record_name');
			}
			else {
				$cmd = 'dig ' . $req->input('search_word');	
			}
    	}

		$result = shell_exec($cmd);
    	return view('dig')->with([
    		'platform' => $platform,
    		'result' => $result
    	]);
	}
}
