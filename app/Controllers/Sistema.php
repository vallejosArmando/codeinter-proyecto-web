<?php

namespace App\Controllers;

use CodeIgniter\Controller;

use App\Models\SistemaModel;

class Sistema extends BaseController
{

    public function index()
    {
        $sistema = new SistemaModel();
        $datos['sistema'] = $sistema->where('estado', 1)->orderBy('id', 'ASC')->findAll();
        $datos['header'] = view('layout/header');
        $datos['footer'] = view('layout/footer');
        return view('sistema/listar', $datos);
    }
    public function agregar()
    {

        $datos['header'] = view('layout/header');
        $datos['footer'] = view('layout/footer');

        return view('sistema/agregar', $datos);
    }
    public function guardar()
    {
        $sistema = new SistemaModel();

        $validacion = $this->validate([
            'nombre' => 'required|min_length[3]',
            'nombre_creador' => 'required|min_length[3]',

            'logo' => [
                'uploaded[logo]',
                'mime_in[logo,image/jpg,image/jpeg,image/png]',
                'max_size[logo,1024]',]
        ]);
        if (!$validacion) {
            $session = session();
            $session->setflashdata('mensaje', 'Revise la informacion');
          //  return redirect()->back()->withInput();
            return redirect()->to(base_url().'/agregar');
            /*  return $this->response->redirect( base_url('/listar'));*/
        }
        if ($logo = $this->request->getFile('logo')) {
            $nuevoNombre = $logo->getRandomName();
            $logo->move('../public/fotos/', $nuevoNombre);
            $datos = [
                'nombre' => $this->request->getVar('nombre'),
                'nombre_creador' => $this->request->getVar('nombre_creador'),
                'logo' => $nuevoNombre,
                'usuario' => 1,
                'estado' => 1
            ];
            $sistema->insert($datos);
        }
        //return $this->response->redirect(site_url('/listar'));
        return redirect()->to(base_url().'/listar');

    }
    public function editar($id = null)
    {
        
        /* print_r($id);*/
        $sistema = new SistemaModel();
        $datos['sistema'] = $sistema->where('id', $id)->first();
        $datos['header'] = view('layout/header');
        $datos['footer'] = view('layout/footer');
        return view('sistema/editar', $datos);
    }
    public function actualizar()
    {
        $sistema = new SistemaModel();
        $datos = [
            'nombre' => $this->request->getVar('nombre'),
            'nombre_creador' => $this->request->getVar('nombre_creador')
        ];
        $id = $this->request->getVar('id');
        
        $validacion = $this->validate([
            'nombre' => 'required|min_length[3]',
            'nombre_creador' => 'required|min_length[3]',]);

        if (!$validacion) {
            $session = session();
            $session->setflashdata('mensaje', 'Revise la informacion');
        return redirect()->back()->withInput();
    


        }
        $sistema->update($id, $datos);
        
        
        $validacion = $this->validate([
            
            'logo' => [
                'uploaded[logo]',
                'mime_in[logo,image/jpg,image/jpeg,image/png]',
                'max_size[logo,1024]',]]);
            
            if ($validacion) {
                
                if ($logo = $this->request->getFile('logo')) {
                    $datosSistema = $sistema->where('id', $id)->first();
                    $ruta = ('../public/fotos/' . $datosSistema['logo']);
                    unlink($ruta);
                    $nuevoNombre = $logo->getRandomName();
                    $logo->move('../public/fotos/', $nuevoNombre);
                    $datos = [ 
                        'logo' => $nuevoNombre ];
                    $sistema->update($id, $datos);
                }
            }
            //return $this->response->redirect(base_url('/listar'));
            return redirect()->to(base_url().'/listar');

        }
        public function borrar($id = null)
        {
            $sistema = new SistemaModel();
            $datosSistema = $sistema->where('id', $id)->first();
            /*$ruta=('../public/fotos/'.$datosSistema['logo']);
         unlink($ruta);*/
            $sistema->where('id', $id)->update($id, ['estado' => 0]);
           // return $this->response->redirect(base_url('/listar'));
           return redirect()->to(base_url().'/listar');

        }
}
