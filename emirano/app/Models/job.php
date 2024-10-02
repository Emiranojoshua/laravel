<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Arr;
use App\Models\Employer;



class Job extends Model{
    use HasFactory;

    protected $table = 'jobs_listings';

    // protected $fillable = ['title', 'salary', 'employer_id'];
    protected $guarded = [];

    public  function employer()
    {
        return $this->belongsTo(Employer::class);
    }

    public function tags()
    {
        return $this->belongsToMany(Tag::class, foreignPivotKey: 'jobs_listings_id');
    }
}
