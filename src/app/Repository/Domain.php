<?php

namespace App\Repository;

use Carbon\Carbon;
use App\Models\Domains;
use Spatie\SslCertificate\SslCertificate;

class Domain
{
    public function check(Domains $domain)
    {
        $certificate = SslCertificate::createForHostName($domain->domain);
        
        $domain->last_checked_at = Carbon::now();
        $domain->is_valid = $certificate->isValid();
        $domain->save();
    }
}