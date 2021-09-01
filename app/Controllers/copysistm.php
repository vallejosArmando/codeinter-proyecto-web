<?php 
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Sistema;
class Sistemas extends BaseController{
    protected $sistema;
    protected $reglas;
    public function __construct(){

        $this->sistema= new Sistema();
        helper(['form']);
        $this->reglas=[
            'nombre' => ['rules' => 'required', 'errors' => ['required' => 'El campo {field} es obligatorio.']],
            'nombre_creador' => ['rules' => 'required', 'errors' => ['required' => 'El campo {field} es obligatorio.']
           
            ]];
    }
    

    public function index(){

        $matriz= $this->sistema->where('estado',1)->findAll();
        $datos=[
            'titulo'=>'Sistema',
            'sistema'=>$matriz
        ];
 echo view('layout/header');
 echo view('sistemas/inicio',$datos);
 echo view('layout/footer');
 
     }
    public function agregar(){
        $datos=[
            'titulo'=>'Sistema',
            
        ];
        echo view('layout/header');
        echo view('sistemas/agregar',$datos);
        echo view('layout/footer');

    }
    public function insertar(){

        if ($logo= $this->request->getFile('logo')) {
            $nuevoNombre=$logo->getRandomName();
            $logo->move('../public/fotos/',$nuevoNombre);
            $this->sistema->save([
            'nombre'=>$this->request->getVar('nombre'),
            'nombre_creador'=>$this->request->getVar('nombre_creador'),
            'logo'=>$nuevoNombre
        
            ]);
        
        
        } 
             return $this->response->redirect( site_url('/sistemas'));
        
            }
            public function eliminar($id){
                $this->sistema->update($id,['estado'=>0]);
                return  redirect()->to(base_url().'/sistema');
                
                }
    public function editar($id,$valid=null){
        $consulta= $this->sistema->where('id',$id)->first();
     if($valid!=null){
         $datos=[
             'titulo'=>'Editar sistema',
             'datos'=>$consulta,'validation'=>$valid
         ];
     }
     else{
         $datos=[
             'titulo'=>'Editar sistema',
             'datos'=>$consulta
         ];
     }
     echo view('layout/header');
     echo view('sistemas/editar',$datos);
     echo view('layout/footer');
     
     }
    public function actualizar(){
        $sistema=new Sistema();
        $datos=[
            'nombre'=>$this->request->getVar('nombre'),
            'nombre_creador'=>$this->request->getVar('nombre_creador')
            ];
            $id=$this->request->getVar('id');
            
        $validacion=$this->validate([
            'nombre'=>'required|min_length[3]',
            'nombre_creador'=>'required|min_length[3]',

        ]);
        if(!$validacion){
            $session=session();
            $session->setflashdata('mensaje','Revise la informacion');
            return redirect()->back()->withInput();
        }
            $this->sistema->update($id,$datos);


            $validacion=$this->validate([
              
                'logo'=>[
                    'uploaded[logo]',
                    'mime_in[logo,image/jpg,image/jpeg,image/png]',
    
                    ]
            ]);
          

            if($validacion){
           
                if ($logo= $this->request->getFile('logo')) {
$datosSistema=$this->sistema->where('id',$id)->first();
/*$ruta=('../public/fotos/'.$datosSistema['logo']);
unlink($ruta);*/
                    $nuevoNombre=$logo->getRandomName();
                    $logo->move('../public/fotos/',$nuevoNombre);
                    $datos=[
                    
                    'logo'=>$nuevoNombre
                
                    ];
                    $this->sistema->update($id,$datos);
                
                } 


            }
            return $this->response->redirect
            (base_url('/inicio'));
        }

    }

