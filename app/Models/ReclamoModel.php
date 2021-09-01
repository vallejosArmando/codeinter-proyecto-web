<?php 
namespace App\Models;

use CodeIgniter\Model;

class ReclamoModel extends Model{
    protected $table      = 'reclamo';
    // Uncomment below if you want add primary key
     protected $primaryKey = 'id';
     protected $allowedFields=['nombres','ap','am','telefono','correo','codigo_usuario','barrio','calle_avenida','entre_que_calles','numero_de_casa','referencias','descripcion_del_reclamo','map','otro_recurrente','telefono_del_recurrente','tipo_de_calzada','usuario','estado'];

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