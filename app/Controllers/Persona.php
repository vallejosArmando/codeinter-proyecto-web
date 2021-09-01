<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\PersonaModel;

class Persona extends BaseController
{
    protected $aux_persona;
    protected $reglas;
    public function __construct()
    {
        $this->aux_persona = new PersonaModel();
        helper(['form']);
        $this->reglas = [
            'ci' => [
                'rules' => 'required', 'errors' => ['required' => 'El campo {field} es obligatorio.']
            ],
            'nombres' => [
                'rules' => 'required', 'errors' => [
                    'required' => 'el campo {field} es obligatorio.'
                ]
            ],
            'ap' => [
                'rules' => 'required', 'errors' => [
                    'required' => 'el campo {field} es obligatorio.'
                ]
            ],
            'am' => [
                'rules' => 'required', 'errors' => [
                    'required' => 'el campo {field} es obligatorio.'
                ]
            ],
            'telefono' => [
                'rules' => 'required', 'errors' => [
                    'required' => 'el campo {field} es obligatorio.'
                ]
            ],
            'direccion' => [
                'rules' => 'required', 'errors' => [
                    'required' => 'el campo {field} es obligatorio.'
                ]
            ],
            'genero' => [
                'rules' => 'required', 'errors' => [
                    'required' => 'el campo {field} es obligatorio.'
                ]
            ]
        ];
    }
    public function index($estado = 1)
    {

        $consulta = $this->aux_persona->where('estado', $estado)->findAll();
        $matriz = ['titulo' => ' Tabla Personas', 'datos' => $consulta];
        echo view('layout/header');
        echo view('persona/inicio', $matriz);
        echo view('layout/footer');
    }
    public function agregar()
    {
        $matriz = ['titulo' => 'Agregar persona'];
        echo view('layout/header');
        echo view('persona/agregar', $matriz);
        echo view('layout/footer');
    }
    public function insertar()
    {
        if ($this->request->getMethod() == "post" && $this->validate($this->reglas)) {
            $this->aux_persona->save([
                'ci' => $this->request->getPost('ci'),
                'nombres' => $this->request->getPost('nombres'),
                'ap' => $this->request->getPost('ap'),
                'am' => $this->request->getPost('am'),

                'telefono' => $this->request->getPost('telefono'),
                'direccion' => $this->request->getPost('direccion'),
                'genero' => $this->request->getPost('genero'),
                'usuario' => 1,
                'estado' => 1,
                'id_sistema'=>1

            ]);
            return  redirect()->to(base_url() . '/persona');
        } else {
            $matriz = ['titulo' => 'Agregar persona', 'validation' => $this->validator];
            echo view('layout/header');
            echo view('persona/agregar', $matriz);
            echo view('layout/footer');
        }
    }
    public function editar($id, $valid = null)
    {
        $consulta = $this->aux_persona->where('id', $id)->first();

        if ($valid != null) {
            $matriz = ['titulo' => 'Editar persona', 'datos' => $consulta, 'validation' => $valid];
        } else {
            $matriz = ['titulo' => 'Editar persona', 'datos' => $consulta];
        }
        echo view('layout/header');
        echo view('persona/editar', $matriz);
        echo view('layout/footer');
    }
    public function actualizar()
    {
        if ($this->request->getMethod() == "post" && $this->validate($this->reglas)) {

            $this->aux_persona->update($this->request->getPost('id'), [
                'ci' => $this->request->getPost('ci'),

                'nombres' => $this->request->getPost('nombres'),
                'ap' => $this->request->getPost('ap'),
                'am' => $this->request->getPost('am'),

                'telefono' => $this->request->getPost('telefono'),
                'direccion' => $this->request->getPost('direccion'),
                'genero' => $this->request->getPost('genero')
            ]);
            return  redirect()->to(base_url() . '/persona');
        } else {
            return $this->editar($this->request->getPost('id'), $this->validator);
        }
    }
    public function eliminar($id)
    {
        $this->aux_persona->update($id,['estado'=>0]);
        return  redirect()->to(base_url() . '/persona');
    }
}
