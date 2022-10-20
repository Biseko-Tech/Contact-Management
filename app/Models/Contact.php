<?php

namespace App\Models;

use App\Scopes\ContactSearchScope;
use App\Scopes\FilterScope;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Contact extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id', 'company_id', 'first_name', 'last_name', 'person_title', 'person_address', 'person_email', 'person_phone',
    ];

    public $filterColumns = ['company_id'];

    public function company()
    {
        return $this->belongsTo(Company::class)->withoutGlobalScopes();
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function scopeLatestFirst($query)
    {
        return $query->orderBy('id', 'desc');
    }

    protected static function booted()
    {
        static::addGlobalScope(new FilterScope);
        static::addGlobalScope(new ContactSearchScope);
    }
}
