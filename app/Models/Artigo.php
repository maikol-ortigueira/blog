<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Artigo extends Model
{
    use HasFactory;

    protected $with = ['etiquetas', 'autor'];

    protected $fillable = ['titulo', 'texto'];

    protected $dates = ['created_at', 'updated_at', 'data_publicacion'];

    public function autor()
    {
        return $this->belongsTo(User::class);
    }

    public function etiquetas()
    {
        return $this->belongsToMany(Etiqueta::class);
    }
}
