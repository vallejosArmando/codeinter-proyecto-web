<?php 
namespace App\Models;

use CodeIgniter\Model;

class ReclamoConfModel extends Model{
    protected $table      = 'reclamo_confirmado';
    // Uncomment below if you want add primary key
     protected $primaryKey = 'id';
     protected $allowedFields=['id_reclamo','nombres','ap','am','telefono','correo','codigo_usuario','barrio','calle_avenida','entre_que_calles','numero_de_casa','referencias','descripcion_del_reclamo','fotos','map','otro_recurrente','telefono_del_recurrente','tipo_de_calzada','usuario','estado'];

     public function listar()
     {
         $builder = $this->builder($this->table);
 
         $builder = $builder->where('reclamo_confirmado.estado', 1);
         $builder = $builder->join('reclamo', 'reclamo_confirmado.id_reclamo = reclamo.id');
         $builder = $builder->select('reclamo.nombres, reclamo_confirmado.id_reclamo, reclamo_confirmado.*');
 
         $builder = $builder->get();
         return $builder->getResultArray();
     }
 
}