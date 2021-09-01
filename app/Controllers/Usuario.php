<?php 
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\UsuarioModel;
use App\Models\PersonaModel;
class Usuario extends BaseController{
    protected $aux_usuario;
    protected $aux_persona;
    protected $reglas, $reglasLogin,$reglasCambia;
    public function __construct(){
        $this->aux_usuario=new UsuarioModel();
        $this->aux_persona=new PersonaModel();
        helper(['form']);
        $this->reglas=[
            'nom_usuario'=>['rules'=>'required|is_unique[usuario.nom_usuario]','errors'=>[
                'required'=>'El campo {field} es obligatorio.',
                'is_unique'=>'El campo {field} deve ser unico'
        ]
    ],
    'clave'=>['rules'=>'required','errors'=>[
        'required'=>'el campo {field} es obligatorio.'
    ]
    ],
    'reclave'=>[
        'rules'=>'required|matches[clave]',
        'errors'=>[
        'required'=>'el campo {field} es obligatorio.',
        'matches'=>'Las contrasenas no coinciden'
    ]
        ],

    'id_persona'=>['rules'=>'required','errors'=>[
        'required'=>'el campo {field} es obligatorio.'
    ]
    ]
    
    ];
    $this->reglasLogin=['nom_usuario'=>[
        'rules'=>'required',
        'errors'=>[
            'required'=>'El campo {field} es obligatorio.'
    ]
],
'clave'=>[
    'rules'=>'required',
    'errors'=>[
    'required'=>'El campo {field} es obligatorio.'
]
    ]
];
$this->reglasCambia=['clave'=>[
    'rules'=>'required',
    'errors'=>[
        'required'=>'El campo {field} es obligatorio.'
]
],
'reclave'=>[
    'rules'=>'required|matches[clave]',
    'errors'=>[
    'required'=>'el campo {field} es obligatorio.',
    'matches'=>'Las contraseñas no coinciden'
]
    ]
];
    }
    public function index($estado=1){

   $consulta=$this->aux_usuario->where('estado',$estado)->findAll();
   $matriz=['titulo'=>' Usuarios','datos'=>$consulta];
   echo view('layout/header');
   echo view('usuario/inicio',$matriz);
   echo view('layout/footer');


    }
 public function nuevo(){

    $personas=$this->aux_persona->where('estado',1)->findAll();
    $matriz=['titulo'=> 'Agregar usuario','personas'=>$personas];
    echo view('layout/header');
    echo view('usuario/agregar',$matriz);
    echo view('layout/footer');
 
 }
 public function insertar(){
if($this->request->getMethod() =="post" && $this->validate($this->reglas)){
    $hash=password_hash($this->request->getPost('clave'),PASSWORD_DEFAULT);
    $this->aux_usuario->save([
        
        'nom_usuario'=>$this->request->getPost('nom_usuario'),'clave'=>$hash,
    'id_persona'=>$this->request->getPost('id_persona'),
    'estado'=>1
]);
    return  redirect()->to(base_url().'/usuario');
}else{

    $personas=$this->aux_persona->where('estado',1)->findAll();
    $matriz=['titulo'=> 'Agregar usuario','personas'=>$personas,'validation'=>$this->validator];

   echo view('layout/header');
   echo view('usuario/agregar',$matriz);
   echo view('layout/footer');
}
 }
public function editar($id,$valid=null){
    $consulta=$this->aux_usuario->where('id',$id)->first();
    $personas=$this->aux_persona->where('estado',1)->findAll();

    if($valid!=null){
        $matriz=['titulo'=>'Editar usuario','personas'=>$personas,'datos'=>$consulta,'validation'=>$valid];

    } else{
        $matriz=['titulo'=>'Editar usuario','personas'=>$personas,'datos'=>$consulta];

    }
    echo view('layout/header');
    echo view('usuario/editar',$matriz);
    echo view('layout/footer');

}
public function actualizar(){
    if($this->request->getMethod() =="post" && $this->validate($this->reglas)){

    $this->aux_usuario->update($this->request->getPost('id'),[
        'nom_usuario'=>$this->request->getPost('nom_usuario'),
        'clave'=> password_hash($this->request->getPost('clave'),PASSWORD_DEFAULT),

        'id_persona'=>$this->request->getPost('id_persona')

    ]);
    return  redirect()->to(base_url().'/usuario');
}else{
    return $this->editar($this->request->getPost('id'),$this->validator );
}

}
public function eliminar($id){
    $this->aux_usuario->update($id,['estado'=>0]);
    return  redirect()->to(base_url().'/usuario');

}
public function eliminados($estado=0){
    $aux_usuario=$this->aux_usuario->where('estado',$estado)->findAll();
    $personas=$this->aux_persona->where('estado',$estado)->findAll();
   $matriz=['titulo'=>'Eliminados','datos'=>$aux_usuario];
   echo view('layout/header');
   echo view('usuario/eliminados',$matriz);
   echo view('layout/footer');
}
public function activar($id){

    $this->aux_usuario->update($id,['estado'=>1]);
    return  redirect()->to(base_url().'/usuario');

}
public function login(){

    echo view('login');
}
public function validar(){
    if($this->request->getMethod()== "post"  && $this->validate($this->reglasLogin)){

        $nom_usuario=$this->request->getPost('nom_usuario');
        $clave=$this->request->getPost('clave');
        $datosusuario=$this->aux_usuario->where('nom_usuario',$nom_usuario)->first();
        if($datosusuario !=null){

            if(password_verify($clave,$datosusuario['clave'])){
                $datosSession=[
                    'id_usuario'=>$datosusuario['id'],
                    'nom_usuario'=>$datosusuario['nom_usuario'],
                    'id_persona'=>$datosusuario['id_persona'],

                ];
                $session=session();
                $session->set($datosSession);
                return redirect()->to(base_url().'/usuario');
            }
            else{
                $data['error']="Las contrasenas no coinsiden ";
                echo view('login',$data);
            }
        } else{
            $data['error']="El usuario no existe";
            echo view('login',$data);
        }


    }else{
        $data=['validation'=>$this->validator];
        echo view('login',$data);
    }
}
public function logout(){
    $session= session();
    $session->destroy();
    return redirect()->to(base_url());
}
public function cambiar_password(){
    $session=session();
    $usuario=$this->aux_usuario->where('id',$session->id_usuario)->first();
    $matriz=['titulo'=> 'Cambiar password','usuario'=>$usuario];
    echo view('layout/header');
    echo view('usuario/cambiarPassword',$matriz);
    echo view('layout/footer');
 

}
public function actualizar_password(){

    if($this->request->getMethod() =="post" && $this->validate($this->reglasCambia)){

$session=session();
$idUsuario=$session->id_usuario;

        $hash=password_hash($this->request->getPost('clave'),PASSWORD_DEFAULT);
        $this->aux_usuario->update($idUsuario,['clave'=>$hash]);
        $usuario=$this->aux_usuario->where('id',$session->id_usuario)->first();
        $matriz=['titulo'=> 'Cambiar password','usuario'=>$usuario,'mensaje'=>'Conotraseña actualizada'];
        echo view('layout/header');
        echo view('usuario/v_cambiar_password',$matriz);
        echo view('layout/footer');
    }else{
    
        $session=session();
        $usuario=$this->aux_usuario->where('id',$session->id_usuario)->first();
        $matriz=['titulo'=> 'Cambiar contraseña','usuario'=>$usuario,'validation'=>$this->validator];
        echo view('layout/header');
        echo view('usuario/v_cambiar_password',$matriz);
        echo view('layout/footer');
    }

}
}