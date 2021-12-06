<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Domains;
use Illuminate\Http\Request;
use Facades\App\Repository\Domain;
use Spatie\SslCertificate\SslCertificate;

class CheckController extends Controller
{
    
    public function domain(Domains $domain)
    {
        Domain::check($domain);
        
        return redirect()->route('home');
    }

    public function all()
    {
        $domains = Domains::get();

        foreach($domains as $domain) {
            // duplicate, pull out
            Domain::check($domain);
        }

        return redirect()->route('home');
    }
}
