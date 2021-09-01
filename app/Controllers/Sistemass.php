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
            'nombre_creador' => ['rules' => 'required', 'errors' => ['required' => 'El campo {field} es obligatorio.']],
            'logo' => ['rules' => 'required', 'errors' => ['required' => 'El campo {field} es obligatorio.']
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

    $datos['header']=view('layout/header');
    $datos['footer']=view('layout/footer');

    return view('sistemas/agregar',$datos);

    }
    public function insertar(){

        $validacion=$this->validate([
            'nombre'=>'required|min_length[3]',
            'nombre_creador'=>'required|min_length[3]',

            'logo'=>['uploaded[logo]',
            'mime_in[logo,image/jpg,image/jpeg,image/png]',
            'max_size[logo,1024]',]
        ]);
        if(!$validacion){
            $session=session();
            $session->setflashdata('mensaje','Revise la informacion');
            return redirect()->back()->withInput();
          /*  return $this->response->redirect( base_url('/inicio'));*/

        }
if ($logo= $this->request->getFile('logo')) {
    $nuevoNombre=$logo->getRandomName();
    $logo->move('../public/fotos/',$nuevoNombre);
    $datos=[
    'nombre'=>$this->request->getVar('nombre'),
    'nombre_creador'=>$this->request->getVar('nombre_creador'),
    'logo'=>$nuevoNombre,
    'usuario'=>1,
    'estado'=>1

    ];
    $this->sistema->insert($datos);

} 
     return $this->response->redirect( site_url('/inicio'));

    }
    public function eliminar($id){
        $sistema=new Sistema();
     $datosSistema=$this->sistema->where('id',$id)->first();
     /*$ruta=('../public/fotos/'.$datosSistema['logo']);
     unlink($ruta);*/
     $this->sistema->where('id',$id)->delete($id);
     return $this->response->redirect(base_url('/inicio'));


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

