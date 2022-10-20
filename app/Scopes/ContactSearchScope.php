<?php

namespace App\Scopes;

class ContactSearchScope extends SearchScope
{
    protected $searchColumns = ['first_name', 'last_name', 'person_phone', 'company.name'];
}
