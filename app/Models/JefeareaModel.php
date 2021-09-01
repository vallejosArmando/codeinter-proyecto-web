<?php 
namespace App\Models;

use CodeIgniter\Model;

class JefeareaModel extends Model{
    protected $table      = 'jefes_area';
    // Uncomment below if you want add primary key
     protected $primaryKey = 'id';
     protected $allowedFields=['id_area','nombres','ap','am','ci','telefono','correo','fec_inicio','fec_fin','usuario','estado'];

     public function listar()
     {
         $builder = $this->builder($this->table);
 
         $builder = $builder->where('jefes_area.estado', 1);
         $builder = $builder->join('area', 'jefes_area.id_area = area.id');
         $builder = $builder->select('area.nombre, jefes_area.id_area, jefes_area.*');
 
         $builder = $builder->get();
         return $builder->getResultArray();
     }
 
}