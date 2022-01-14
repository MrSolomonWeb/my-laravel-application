<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Comment extends Model
{
    use HasFactory;
    protected $table = 'Comments';
    public $timestamps = true;

    use SoftDeletes;

    protected $dates = ['deleted_at'];
    protected $fillable = array('subject', 'body', 'article_id');

    public function article()
    {
        return $this->belongsTo(Article::class);
    }
    public function createdAtForHumans()
    {
        return $this->created_at->diffForHumans();
    }
}
