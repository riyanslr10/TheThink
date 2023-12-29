<?php

namespace App\Models;

use App\Models\Category;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;  
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Post extends Model
{
    use HasFactory, Sluggable;

    // protected $fillable = ['title','excerpt','body'];
    protected $guarded = ['id'];
    protected $with = ['category','postauthor'];    
    
    public function scopeFilter($query, array $filters)
    {
        $query->when(isset($filters['search']), function($query) use ($filters) {
            $search = $filters['search'];
            $query->where(function ($query) use ($search) {
                $query->where('title', 'like', '%' . $search . '%')
                    ->orWhere('body', 'like', '%' . $search . '%');
            });
        });
    
        $query->when(isset($filters['category']), function($query) use ($filters) {
            $query->whereHas('category', function($query) use ($filters) {
                $query->where('slug', $filters['category']);
            });
        });
    
        $query->when(isset($filters['postauthor']), function($query) use ($filters) {
            $query->whereHas('postauthor', function($query) use ($filters) {
                $query->where('username', $filters['postauthor']);
            });
        });
    }
    
    
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function postauthor()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }
    
}