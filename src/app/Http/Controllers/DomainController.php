<?php

namespace App\Http\Controllers;

use App\Models\Domains;
use Illuminate\Http\Request;

class DomainController extends Controller
{
    
    public function create()
    {
        return view('domain.create');
    }

    public function store()
    {
        $rules = [
            'domain' => 'required',
        ];

        $data = $this->validate(request(), $rules);
        
        Domains::create($data);

        return redirect()->route('home');
    }

    public function destroy(Domains $domain)
    {
        $domain->delete();

        return redirect()->route('home');
    }

}
