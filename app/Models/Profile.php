<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $guarded = [];

    public function profileImage()
    {
        return ($this->image) ? '/storage/'.$this->image : ' /storage/profile/tlv9lmJCwTJ4HtCNWVd4QmUYj4CzbvUfXKh7bSxl.jpg';
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function followers()
    {
        return $this->belongsToMany(User::class);
    }
}
