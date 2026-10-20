<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
class EcoProduct extends Model {
    protected $fillable = ['name','material','price','eco_rating','image','description'];
}