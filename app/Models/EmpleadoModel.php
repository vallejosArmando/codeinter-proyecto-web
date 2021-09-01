<?php 
namespace App\Models;

use CodeIgniter\Model;

class EmpleadoModel extends Model{
    protected $table      = 'empleado';
    // Uncomment below if you want add primary key
     protected $primaryKey = 'id';
     protected $allowedFields=['id_tipo','id_area','id_sistema','nombres','ap','am','ci','tel_fijo','tel_cel','direccion','usuario','estado'];

     public function listar()
     {
         $builder = $this->builder($this->table);
 
         $builder = $builder->where('empleado.estado', 1);
         $builder = $builder->join('tipo_empleado', 'empleado.id_tipo = tipo_empleado.id');
         $builder = $builder->join('area', 'empleado.id_area = area.id');
         $builder = $builder->select('area.nombre as nomb, tipo_empleado.nombre, empleado.id_tipo,empleado.id_area, empleado.*');
 
         $builder = $builder->get();
         return $builder->getResultArray();
     }
 
}