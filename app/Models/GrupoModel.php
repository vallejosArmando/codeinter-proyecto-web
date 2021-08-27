<?php 
namespace App\Models;

use CodeIgniter\Model;

class GrupoModel extends Model{
    protected $table      = 'grupo';
    // Uncomment below if you want add primary key
    protected $primaryKey = 'id';
    protected $allowedFields = ['icono', 'grupo','usuario','estado'];

}