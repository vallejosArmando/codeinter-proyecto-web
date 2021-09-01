<?php 
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\JefeareaModel;
use App\Models\AreaModel;

class Jefe_area extends BaseController{

    protected $sos_jefearea;
    protected $sos_area;
    protected $reglas;
    public function __construct()
    {
        $this->sos_jefearea = new JefeareaModel();
        $this->sos_area = new AreaModel();
        $this->reglas = [
           
            'id_area' => ['rules' => 'required', 'errors' => ['required' => 'El campo {field} es obligatorio.']],
            'nombres' => ['rules' => 'required', 'errors' => ['required' => 'El campo {field} es obligatorio.']],
            'ap' => ['rules' => 'required', 'errors' => ['required' => 'El campo {field} es obligatorio.']],
            'am' => ['rules' => 'required', 'errors' => ['required' => 'El campo {field} es obligatorio.']],
            'ci' => ['rules' => 'required', 'errors' => ['required' => 'El campo {field} es obligatorio.']],
            'telefono' => ['rules' => 'required', 'errors' => ['required' => 'El campo {field} es obligatorio.']],
            'correo' => ['rules' => 'required', 'errors' => ['required' => 'El campo {field} es obligatorio.']],
            'fec_inicio' => ['rules' => 'required', 'errors' => ['required' => 'El campo {field} es obligatorio.']],
            'fec_fin' => ['rules' => 'required', 'errors' => ['required' => 'El campo {field} es obligatorio.']]

        ];
    }



    public function index()
    {
        $consultas = $this->sos_jefearea->listar();

        $datos = [
            'titulo' => 'Tabla Empleados',
            'datos' => $consultas
        ];
        echo view('layout/header');
        echo view('jefe_area/inicio', $datos);
        echo view('layout/footer');
    }
    public function agregar()
    {
        $areas = $this->sos_area->where('estado', 1)->findAll();
        $datos = [
            'titulo' => 'Agregar Empleados',
            'areas' => $areas,

        ];
        echo view('layout/header');
        echo view('jefe_area/agregar', $datos);
        echo view('layout/footer');
    }
    public function insertar()
    {
        if ($this->request->getMethod() == "post" && $this->validate($this->reglas)) {
            $this->sos_jefearea->save([
                'id_area' => $this->request->getPost('id_area'),
                'nombres' => $this->request->getPost('nombres'),
                'ap' => $this->request->getPost('ap'),
                'am' => $this->request->getPost('am'),
                'ci' => $this->request->getPost('ci'),
                'telefono' => $this->request->getPost('telefono'),
                'correo' => $this->request->getPost('correo'),
                'fec_inicio' => $this->request->getPost('fec_inicio'),
                'fec_fin' => $this->request->getPost('fec_fin'),

                'usuario' => 1,
                'estado' => 1


            ]);
            return redirect()->to(base_url() . '/jefe_area');
        } else {
            $areas = $this->sos_area->where('estado', 1)->findAll();
            $datos = ['titulo' => 'Agregar Jefe de area',  'areas' => $areas, 'validation' => $this->validator];
            echo view('layout/header');
            echo view('jefe_area/agregar', $datos);
            echo view('layout/footer');
        }
    }
    public function editar($id, $valid = null)
    {
        $consultas = $this->sos_jefearea->where('id', $id)->first();
        $areas = $this->sos_area->where('estado', 1)->findAll();
        if ($valid!= null) {
            $datos = [
                'titulo' => 'Editar Jefe de area',
                'datos' => $consultas,
                'areas' => $areas,
                'validator' => $this->valid
            ];
        } else {
            $datos = [
                'titulo' => 'Editar Jefe de area',
                'areas' => $areas,
                'datos' => $consultas
            ];
        }

        echo view('layout/header');
        echo view('jefe_area/editar', $datos);
        echo view('layout/footer');
    }
    public function actualizar()
    {
        if ($this->request->getMethod() == 'post' && $this->validate($this->reglas)) {
            $this->sos_jefearea->update($this->request->getPost('id'), [
                'id_area'=>$this->request->getPost('id_area'),
                'nombres'=>$this->request->getPost('nombres'),
                'ap'=>$this->request->getPost('ap'),
                'am'=>$this->request->getPost('am'),
                'ci'=>$this->request->getPost('ci'),
                'telefono' => $this->request->getPost('telefono'),
                'correo' => $this->request->getPost('correo'),
                'fec_inicio' => $this->request->getPost('fec_inicio'),
                'fec_fin' => $this->request->getPost('fec_fin'),
            ]);
            return redirect()->to(base_url() . '/jefe_area');
        } else {
            return $this->editar($this->request->getPost('id'), $this->validator);
        }
    }
    public function eliminar($id)
    {
      $this->sos_jefearea->update($id,['estado'=>0]);
      return redirect()->to(base_url() . '/jefe_area');
    }
}