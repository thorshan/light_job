<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Listing extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'title', 'city', 'tags', 'description', 'website', 'email', 'salary', 'img'];

    //Scope Filterings
    public function scopeFilter($query, array $filters){

        //From Tags
        if($filters['tag'] ?? false){
            $query->where('tags','LIKE','%'. request('tag') . '%');
        }

        // From Search
        if($filters['search'] ?? false){
            $query->where('name','LIKE','%'. request('search') . '%')
            ->orWhere('title','LIKE','%'. request('search') . '%')
            ->orWhere('description','LIKE','%'. request('search') . '%')
            ->orWhere('tags','LIKE','%'. request('search') . '%');
        }
    }

    // Relationship with user table
    public function user(){
        return $this->belongsTo(User::class, 'user_id');
    }
}
