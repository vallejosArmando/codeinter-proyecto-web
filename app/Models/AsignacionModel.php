<?php 
namespace App\Models;

use CodeIgniter\Model;

class AsignacionModel extends Model{
    protected $table      = 'asignacion';
    // Uncomment below if you want add primary key
    protected $primaryKey = 'id';
    protected $allowedFields=['id_conf','id_empleado','descripcion','fec_inicio','fec_fin','usuario','estado'];

    public function listar()
    {
        $builder = $this->builder($this->table);

        $builder = $builder->where('asignacion.estado', 1);
        $builder = $builder->join('reclamo', 'asignacion.id_conf = reclamo.id');
        $builder = $builder->join('empleado', 'asignacion.id_empleado = empleado.id');
        $builder = $builder->select('empleado.nombre as nomb, reclamo.nombres, asignacion.id_conf,asignacion.id_empleado, asignacion.*');

        $builder = $builder->get();
        return $builder->getResultArray();
    }

}