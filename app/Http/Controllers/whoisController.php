<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class whoisController extends Controller
{
    public function whois_search(Request $req) {
    	
		$cmd = 'whois ' . $req->input('domain_name');
		$result = shell_exec($cmd);
    	return view('whois')->with('result', $result);
    }
}
