<?php

namespace App\Traits;

use App\Models\Contact;

trait Contactable
{
    public function contacts()
    {
        return $this->morphToMany(Contact::class, 'contactable');
    }
}
