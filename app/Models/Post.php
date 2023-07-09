<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\User;

class Post extends Model
{
    use HasFactory;
    use SoftDeletes;
    
    protected $fillable=['title','body','image','category_id','user_id'];
    
    public function getByLimit(int $limit_count=10)
    {
        return $this->orderBy('updated_at','DESC')->limit($limit_count)->get();
    }
    
    public function getPaginationByLimit(int $limit_count=10)
    {
        return $this::with(['category','user'])->orderBy('updated_at','DESC')->paginate($limit_count);
    }
    
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
