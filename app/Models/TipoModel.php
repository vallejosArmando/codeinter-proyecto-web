<?php 
namespace App\Models;

use CodeIgniter\Model;

class TipoModel extends Model{
    protected $table      = 'tipo_empleado';
    // Uncomment below if you want add primary key
     protected $primaryKey = 'id';
     protected $allowedFields= ['nombre','descripcion','usuario','estado'];
}