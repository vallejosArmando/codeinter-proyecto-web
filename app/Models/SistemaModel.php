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

    protected $allowedFields = ['nombre','nom_creador','activo'];

    protected $useTimestamps = true;
    protected $createdField  = 'fech_insercion';
    protected $updatedField  = 'fech_modificacion';
    protected $deletedField  = 'deleted_at';

    protected $validationRules    = [];
    protected $validationMessages = [];
    protected $skipValidation     = false;
}