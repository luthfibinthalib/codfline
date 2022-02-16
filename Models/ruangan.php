<?php
namespace App\Models;
 
use Illuminate\Database\Eloquent\Model;

class ruangan extends Model
{
    protected $table = "data_ruangan";
    protected $primaryKey = 'id';
    protected $fillable = ['ruangan','kapasitas_ruangan','gambar','fasilitas'];
}
