<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Jenssegers\Agent\Agent;

class whoisController extends Controller
{
    public function first_visit(Request $req){
    	
    	$agent = new Agent();
    	$platform = $agent->platform();
    	
    	return view('whois')->with([
    		'platform' => $platform,
    	]);
    }

    public function whois_search(Request $req) {
    	
    	$agent = new Agent();
    	$platform = $agent->platform();
    	if ($platform == "Windows") {
    		if ($req->has('record_name')) {
			$cmd = 'nslookup ' . $req->input('domain_name');
			// . " " . $req->input('record_name');
			}
    	}
		else if ($platform == "Linux" || $platform == "OS X") {
			$cmd = 'whois ' . $req->input('domain_name');	
		}

		$result = shell_exec($cmd);
    	return view('whois')->with([
    		'platform' => $platform,
    		'result' => $result
    	]);
    }
}
