<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes; //add this line


class Book extends Model
{
    use HasFactory, SoftDeletes;

    public function publishers()
    {
        return $this->belongsTo(Publisher::class, 'publisher_id','id');
    }

    public function customer()
    {
    	return $this->belongsToMany(Customer::class, 'book_customers');
    }
}
