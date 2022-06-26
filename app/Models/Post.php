<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Helper\Imageable;

class Post extends Model
{
    use HasFactory, Imageable;

    protected $fillable = [
        'title',
        'image',
        'text'
    ];

    public function storePost($request)
    {
        $this->title = $request->title;
        $this->text = $request->text;
        $this->save();

        return $this;
    }
}
