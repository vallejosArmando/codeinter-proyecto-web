<?php 
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\UsuarioModel;
use App\Models\RolModel;
use App\Models\UsurolModel;


class Usurol extends BaseController{
    protected $aux_usuario;
    protected $aux_usurol;
    protected $aux_rol;

    protected $reglas;
    public function __construct(){
        $this->aux_rol=new RolModel();
        $this->aux_usurol=new UsurolModel();
        $this->aux_usuario=new UsuarioModel();

        helper(['form']);
        $this->reglas=['id'=>[
            'rules'=>'required|is_unique[usurol.id]',
        'errors'=>[
            'required'=>'El campo {field} es obligatorio.',
            'is_unique'=>'El campo {field} ya existe y es unico.',
            
            ]
    ],
    'id_usuario'=>['rules'=>'required','errors'=>[
        'required'=>'el campo {field} es obligatorio.'
    ]
    ],
    'id_rol'=>['rules'=>'required','errors'=>[
        'required'=>'el campo {field} es obligatorio.'

    ]
]
  
    ];
    }
    public function index($estado=1){

   $consulta=$this->aux_usurol->where('estado',$estado)->findAll();
   $matriz=[
       'titulo'=>' Usuario Roles',
       'datos'=>$consulta
    ];
   echo view('layout/header');
   echo view('usurol/inicio',$matriz);
   echo view('layout/footer');


    }
 public function nuevo(){
    $usuarios=$this->aux_usuario->where('estado',1)->findAll();

    $roles=$this->aux_rol->where('estado',1)->findAll();

 $matriz=['titulo'=> 'Agregar usuario rol','usuarios'=>$usuarios,'roles'=>$roles];
    echo view('layout/header');
    echo view('usurol/agregar',$matriz);
    echo view('layout/footer');
 
 }
 public function insertar(){
if($this->request->getVar() =="post"  && $this->validate($this->reglas)){
    $this->aux_usurol->save([
        'estado'=>1,
        'usuario'=>1,
        'id_rol'=>$this->request->getPost('id_rol'),
        'id_usuario'=>$this->request->getPost('id_usuario'),
       
     

    ]);
    return  redirect()->to(base_url().'/usurol');
}else{
$usuarios=$this->aux_usuario->where('estado',1)->findAll();

$roles=$this->aux_rol->where('estado',1)->findAll();

$matriz=['titulo'=> 'Agregar usuario rol','usuarios'=>$usuarios,'roles'=>$roles,'validation'=>$this->validator];
echo view('layout/header');
echo view('usurol/agregar',$matriz);
echo view('layout/footer');
}
 }
public function editar($id,$valid=null){
    $consulta=$this->aux_usurol->where('id',$id)->first();
    
    $usuarios=$this->aux_usuario->where('estado',1)->findAll();
    $roles=$this->aux_rol->where('estado',1)->findAll();

    if($valid!=null){
        $matriz=['titulo'=>'Editar Usuario Rol','datos'=>$consulta,'usuarios'=>$usuarios,'roles'=>$roles,'validation'=>$valid];
        $matriz=['titulo'=>'Editar usuario rol','usuarios'=>$usuarios,'roles'=>$roles,'datos'=>$consulta,'validation'=>$valid];


    } else{
        $matriz=['titulo'=>'Editar Usuario Rol','usuarios'=>$usuarios,'roles'=>$roles,'datos'=>$consulta];
    
    echo view('layout/header');
    echo view('usurol/editar',$matriz);
    echo view('layout/footer');
    }
}
public function actualizar(){
    if($this->request->getMethod() == "post" && $this->validate($this->reglas) ){
        $this->aux_usurol->update($this->request->getPost('id'),[
            'id_rol'=>$this->request->getPost('id_rol'),
            'id_usuario'=>$this->request->getPost('id_usuario'),
         
    
        ]);
        return  redirect()->to(base_url().'/usurol');
    }else{
        return $this->editar($this->request->getPost('id'),$this->validator );

    }
}
public function eliminar($id){
    $this->aux_usurol->update($id,['estado'=>0]);
    return  redirect()->to(base_url().'/usurol');
}
public function eliminados($estado=0){
    $consulta=$this->aux_usurol->where('estado',$estado)->findAll();
   $matriz=['titulo'=>'Eliminados','datos'=>$consulta];
   echo view('layout/header');
   echo view('usurol/eliminados',$matriz);
   echo view('layout/footer');
}
public function activar($id){

    $this->aux_usurol->update($id,['estado'=>1]);
    return  redirect()->to(base_url().'/usurol');

}

}