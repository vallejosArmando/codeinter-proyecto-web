<?php 
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\RolModel;

class Rol extends BaseController{
    protected $aux_rol;
    protected $reglas;
    public function __construct(){
        $this->aux_rol=new RolModel();
        helper(['form']);
        $this->reglas=['rol'=>['rules'=>'required','errors'=>['required'=>'El campo {field} es obligatorio.'
        ]
    ]

    ];
    }
    public function index($estado=1){

   $consulta=$this->aux_rol->where('estado',$estado)->findAll();
   $matriz=['titulo'=>' Roles','datos'=>$consulta];
   echo view('layout/header');
   echo view('rol/inicio',$matriz);
   echo view('layout/footer');


    }
 public function nuevo(){

 $matriz=['titulo'=> 'Agregar rol'];
    echo view('layout/header');
    echo view('rol/agregar',$matriz);
    echo view('layout/footer');
 
 }
 public function insertar(){
if($this->request->getMethod() =="post" && $this->validate($this->reglas)){

    $this->aux_rol->save([
        'usuario'=>1,
        'estado'=>1,
        'rol'=>$this->request->getPost('rol'),
   
    ]);
    return  redirect()->to(base_url().'/rol');
}else{
$matriz=['titulo'=>'Agregar rol','validation'=>$this->validator];
echo view('layout/header');
echo view('rol/agregar',$matriz);
echo view('layout/footer');
}
 }
public function editar($id,$valid=null){
    $consulta=$this->aux_rol->where('id',$id)->first();

    if($valid!=null){
        $matriz=['titulo'=>'Editar rol','datos'=>$consulta,'validation'=>$valid];

    } else{
        $matriz=['titulo'=>'Editar rol','datos'=>$consulta];

    }
    echo view('layout/header');
    echo view('rol/editar',$matriz);
    echo view('layout/footer');

}
public function actualizar(){
    if($this->request->getMethod() =="post" && $this->validate($this->reglas)){

    $this->aux_rol->update($this->request->getPost('id'),[
        'rol'=>$this->request->getPost('rol')
    ]);
    return  redirect()->to(base_url().'/rol');
}else{
    return $this->editar($this->request->getPost('id'),$this->validator );
}

}
public function eliminar($id){
    $this->aux_rol->update($id,['estado'=>0]);
    return  redirect()->to(base_url().'/rol');

}
public function eliminados($estado=0){
    $aux_rol=$this->aux_rol->where('estado',$estado)->findAll();
   $matriz=['titulo'=>'Eliminados','datos'=>$aux_rol];
   echo view('layout/header');
   echo view('rol/eliminados',$matriz);
   echo view('layout/footer');
}
public function activar($id){

    $this->aux_rol->update($id,['estado'=>1]);
    return  redirect()->to(base_url().'/rol');

}
}