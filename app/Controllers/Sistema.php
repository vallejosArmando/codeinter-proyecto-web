
<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\SistemaModel;

class Sistema extends BaseController{
    protected $aux_sistema;
    protected $reglas;

    public function __construct()
    {

        $this->aux_sistema = new SistemaModel();
        helper(['form']);
        $this->reglas=['nombre_creador'=>[
            'rules'=>'required|is_unique[sistema_reclamo.nombre]','errors'=>[
                'required'=>'El campo {field} es obligatorio.',
                'is_unique'=>'El campo {field} deve ser unico'
        ]
    ],
    'nombre'=>['rules'=>'required','errors'=>[
        'required'=>'el campo {field} es obligatorio.'
    ]
    ],
 ,
    ];
    }
    public function index($estado = 1)
    {

        $consulta = $this->aux_sistema->where('estado', $estado,)->findAll();
        $matriz = [
            'titulo' => ' Sistema',
            'datos' => $consulta,

        ];
        echo view('layout/header');
        echo view('sistema/inicio', $matriz);
        echo view('layout/footer');
    }
    public  function agregar()
    {

        $datos = ['titulo' => 'Agregar Sistema'];
        echo view('layout/header');
        echo view('sistema/agregar', $datos);
        echo view('layout/footer');
    }
    public function insertar()
    {
        if ($this->request->getMethod() == "post" && $this->validate($this->reglas)) {

            $this->aux_sistema->save(['nombre' => $this->request->getPost('nombre'), 'nombre_creador' => $this->request->getPost('nombre_creador')]);
            return  redirect()->to(base_url() . '/sistema');
        } else {
            $datos = [
                'datos' => 'Agregar Sistema', 'validation' => $this->validator
            ];
            echo view('layout/header');
            echo view('sistema/agregar', $datos);
            echo view('layout/footer');
        }
    }
    public function editar($id, $valid = null)
    {
        $consulta = $this->aux_sistema->where('id', $id)->first();
        if ($valid != null) {
            $datos = [
                'titulo' => 'Editar Sistema',
                'datos' => $consulta
            ];
        } else {
            $datos = ['titulo' => 'Editar Sistema', 'datos' => $consulta];
        }
        echo view('layout/header');
        echo view('sistema/editar', $datos);
        echo view('layout/footer');
    }
    public function actualizar()
    {
        if ($this->request->getMethod() == "post" && $this->validate($this->reglas)) {

            $this->aux_sistema->update($this->request->getPost('id'), ['nombre' => $this->request->getPost('nombre'), 'nombre_creador' => $this->request->getPost('nombre_creador')]);
            return  redirect()->to(base_url() . '/sistema');
        } else {
            return $this->editar($this->request->getPost('id'), $this->validator);
        }
    }
    public function eliminar($id)
    {
        $this->aux_sistema->update($id, ['estado' => 0]);
        return  redirect()->to(base_url() . '/sistema');
    }
    public function eliminados($estado = 0)
    {
        $consulta = $this->aux_sistema->where('estado', $estado)->findAll();
        $datos = ['titulo' => 'Eliminados', 'datos' => $consulta];
        echo view('layout/header');
        echo view('sistema/eliminados', $datos);
        echo view('layout/footer');
    }
    public function activar($id)
    {

        $this->aux_sistema->update($id, ['estado' => 1]);
        return  redirect()->to(base_url() . '/sistema');
    }
}
