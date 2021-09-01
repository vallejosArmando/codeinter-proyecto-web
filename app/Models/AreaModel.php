<?php 
namespace App\Models;

use CodeIgniter\Model;

class AreaModel extends Model{
    protected $table      = 'area';
    // Uncomment below if you want add primary key
     protected $primaryKey = 'id';
     protected $allowedFields = ['id_sistema','nombre','descripcion','usuario','estado'];
}