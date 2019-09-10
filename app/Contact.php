<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
use Laravel\Scout\Searchable;

class Contact extends Model{

    use Searchable;

    protected $guarded = [];

    protected $dates = ['birthday'];

    public function path()
    {
        return '/contacts/'. $this->id;
    }

    public function scopeBirthdays($query)
    {
        return $query->whereRaw('birthday like "%-' . now()->format('m') . '-%"');
    }

    public function setBirthdayAttribute($birthday)
    {
        $this->attributes['birthday'] = Carbon::parse($birthday);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}