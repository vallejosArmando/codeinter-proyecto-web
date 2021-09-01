<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\AsignacionModel;
use App\Models\EmpleadoModel;
use App\Models\ReclamoModel;

class Asignacion extends BaseController
{
    protected $sos_asignacion;
    protected $sos_empleado;
    protected $sos_reclamo;
    protected $reglas;
    public function __construct()
    {
        $this->sos_empleado = new AsignacionModel();
        $this->sos_asignacion = new EmpleadoModel();
        $this->sos_reclamo = new ReclamoModel();
        $this->reglas = [
            'id_conf' => ['rules' => 'required', 'errors' => ['required' => 'El campo {field} es obligatorio.']],
            'id_empleado' => ['rules' => 'required', 'errors' => ['required' => 'El campo {field} es obligatorio.']],
            'descripcion' => ['rules' => 'required', 'errors' => ['required' => 'El campo {field} es obligatorio.']],
            'fec_inicio' => ['rules' => 'required', 'errors' => ['required' => 'El campo {field} es obligatorio.']],
            'fec_fin' => ['rules' => 'required', 'errors' => ['required' => 'El campo {field} es obligatorio.']]
          

        ];
    }



    public function index()
    {
        $consultas = $this->sos_asignacion->listar();

        $datos = [
            'titulo' => 'Tabla Asignacions',
            'datos' => $consultas
        ];
        echo view('layout/header');
        echo view('asignacion/inicio', $datos);
        echo view('layout/footer');
    }
    public function agregar()
    {
        $reclamos = $this->sos_reclamo->where('estado', 1)->findAll();
        $empleados = $this->sos_empleado->where('estado', 1)->findAll();
        $datos = [
            'titulo' => 'Agregar Asignacions',
            'reclamos' => $reclamos,
            'empleados' => $empleados,

        ];
        echo view('layout/header');
        echo view('asignacion/agregar', $datos);
        echo view('layout/footer');
    }
    public function insertar()
    {
        if ($this->request->getMethod() == "post" && $this->validate($this->reglas)) {
            $this->sos_asignacion->save([
                'id_conf' => $this->request->getPost('id_conf'),
                'id_empleado' => $this->request->getPost('id_empleado'),
                'descripcion' => $this->request->getPost('descripcion'),
                'fec_inicio' => $this->request->getPost('fec_inicio'),
                'fec_fin' => $this->request->getPost('fec_fin'),
              
                'usuario' => 1,
                'estado' => 1


            ]);
            return redirect()->to(base_url() . '/asignacion');
        } else {
            $reclamos = $this->sos_reclamo->where('estado', 1)->findAll();
            $empleados = $this->sos_empleado->where('estado', 1)->findAll();
            $datos = ['titulo' => 'Agregar Asignacion', 'reclamos' => $reclamos, 'empleados' => $empleados, 'validation' => $this->validator];
            echo view('layout/header');
            echo view('asignacion/agregar', $datos);
            echo view('layout/footer');
        }
    }
    public function editar($id, $valid = null)
    {
        $consultas = $this->sos_asignacion->where('id', $id)->first();
        $reclamos = $this->sos_reclamo->where('estado', 1)->findAll();
        $empleados = $this->sos_empleado->where('estado', 1)->findAll();
        if ($valid!= null) {
            $datos = [
                'titulo' => 'Editar Asignacion',
                'datos' => $consultas,
                'reclamos' => $reclamos,
                'empleados' => $empleados,
                'validator' => $this->valid
            ];
        } else {
            $datos = [
                'titulo' => 'Editar Asignacion',
                'reclamos' => $reclamos,
                'empleados' => $empleados,
                'datos' => $consultas
            ];
        }

        echo view('layout/header');
        echo view('asignacion/editar', $datos);
        echo view('layout/footer');
    }
    public function actualizar()
    {
        if ($this->request->getMethod() == 'post' && $this->validate($this->reglas)) {
            $this->sos_asignacion->update($this->request->getPost('id'), [
                'id_conf' => $this->request->getPost('id_conf'),
                'id_empleado' => $this->request->getPost('id_empleado'),
                'descripcion' => $this->request->getPost('descripcion'),
                'fec_inicio' => $this->request->getPost('fec_inicio'),
                'fec_fin' => $this->request->getPost('fec_fin'),
            ]);
            return redirect()->to(base_url() . '/asignacion');
        } else {
            return $this->editar($this->request->getPost('id'), $this->validator);
        }
    }
    public function eliminar($id)
    {
      $this->sos_empleado->update($id,['estado'=>0]);
      return redirect()->to(base_url() . '/asignacion');
    }
}
