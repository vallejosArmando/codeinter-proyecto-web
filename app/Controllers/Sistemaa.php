<?php 
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\SistemaModel;
class Sistema extends BaseController{
    protected $sistema;
    protected $reglas;
    public function __construct(){

        $this->sistema=new SistemaModel;
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
echo view('sistema/inicio',$datos);
echo view('layout/footer');

    }
    public function agregar(){
        
       
       $datos=[
           'titulo'=>'Agregar Sistema',
       ];
        echo view('layout/header');
echo view('sistema/agregar',$datos);
echo view('layout/footer');
    }
    public function insertar(){
         if($this->request->getMethod() =="post" && $this->validate($this->reglas)){
       $this->sistema->save([
           'usuario'=>1,
           'estado'=>1,
           'nombre'=>$this->request->getPost('nombre'),
           'nombre_creador'=>$this->request->getPost('nombre_creador'),
           'logo'=>$this->request->getPost('logo')
       ]);
       return redirect()->to(base_url().'/sistema');
    }else{
        $matriz=['titulo'=>'Agregar Sistema','validation'=>$this->validator];
     echo view('layout/header');
echo view('sistema/agregar',$matriz);
echo view('layout/footer');
    }
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
echo view('sistema/editar',$datos);
echo view('layout/footer');

}
public function actualizar(){
if($this->request->getMethod() =="post" && $this->validate($this->reglas)){

$this->sistema->update($this->request->getPost('id'),[
    'nombre'=>$this->request->getPost('nombre'),
    'nombre_creador'=>$this->request->getPost('nombre_creador'),
    'logo'=>$this->request->getPost('logo')
]);
return  redirect()->to(base_url().'/sistema');
}else{
return $this->editar($this->request->getPost('id'),$this->validator );
}

}
public function eliminar($id){
$this->sistema->update($id,['estado'=>0]);
return  redirect()->to(base_url().'/sistema');

}
public function eliminados($estado=0){
$consulta=$this->aux_rol->where('estado',$estado)->findAll();
$matriz=['titulo'=>'Eliminados','datos'=>$consulta];
echo view('layout/header');
echo view('sistema/eliminados',$matriz);
echo view('layout/footer');
}
public function activar($id){

$this->aux_rol->update($id,['estado'=>1]);
return  redirect()->to(base_url().'/rol');

}
}


