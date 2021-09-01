<?php 
namespace App\Models;

use CodeIgniter\Model;

class UsurolModel
 extends Model{
    protected $table      = 'usurol';
    protected $primaryKey = 'id';

    protected $useAutoIncrement = true;

    protected $returnType     = 'array';
    protected $useSoftDeletes = false;

    protected $allowedFields = ['id_usuario','id_rol','usuario','estado'];

    protected $useTimestamps = true;
    protected $createdField  = 'fec_insercion';
    protected $updatedField  = 'fec_modificacion';
    protected $deletedField  = 'deleted_at';

    protected $validationRules    = [
    ];
    protected $validationMessages = [];
    protected $skipValidation     = false;


  
    public function listar()
    {
        $builder = $this->builder($this->table);

        $builder = $builder->where('usurol.estado', 1);
        $builder = $builder->join('rol', 'usurol.id_rol = rol.id');
        $builder = $builder->join('usuario', 'usurol.id_usuario = usuario.id');
        $builder = $builder->select('usuario.nom_usuario, rol.rol, usurol.id_usuario,usurol.id_rol, usurol.*');

        $builder = $builder->get();
        return $builder->getResultArray();
    }

}