<?php 
namespace App\Models;

use CodeIgniter\Model;

class SistemaModel
 extends Model{
    protected $table      = 'sistema_reclamo';
    protected $primaryKey = 'id';

    protected $useAutoIncrement = true;

    protected $returnType     = 'array';
    protected $useSoftDeletes = false;

    protected $allowedFields = ['nombre','nombre_creador','logo','usuario','estado'];

    protected $useTimestamps = true;
    protected $createdField  = 'fec_insercion';
    protected $updatedField  = 'fec_modificacion';
    protected $deletedField  = 'deleted_at';

    protected $validationRules    = [];
    protected $validationMessages = [];
    protected $skipValidation     = false;
}