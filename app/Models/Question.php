<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
class Question extends Model
{
    use HasFactory;
    protected $fillable = ['text', 'order'];

    public function options()
    {
        return $this->hasMany(Option::class);
    }
}