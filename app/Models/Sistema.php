<?php 
namespace App\Models;

use CodeIgniter\Model;

class Sistema extends Model{
    protected $table      = 'sistema_reclamo';
    protected $primaryKey = 'id';
    protected $allowedFields= ['nombre','nombre_creador','logo','usuario','estado'];
    // Uncomment below if you want add primary key
    // protected $primaryKey = 'id';
}