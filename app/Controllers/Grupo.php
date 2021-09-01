<?php 
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\GrupoModel;
class Grupo extends BaseController{
    protected $grupo;
    protected $reglas;
    public function __construct(){

        $this->grupo=new GrupoModel();
        helper(['form']);
        $this->reglas=[
            'icono'=>['rules'=>'required','errors'=>['required'=>'El campo {field} es obligatorio.']],
            'grupo'=>['rules'=>'required','errors'=>['required'=>'El campo {field} es obligatorio.']],

    ];
    }
    public function index(){
   
      $consulta=$this->grupo->where('estado',1)->findAll() ;
      $datos=[
          'grupo'=>$consulta,
          'titulo'=>'Grupo'
      ];
      
echo view('layout/header');      
echo view('grupo/inicio',$datos);
echo view('layout/footer');

    }public function agregar(){
$datos=['titulo'=>'Agregar grupo'];
        echo view('layout/header');      
echo view('grupo/agregar',$datos);
echo view('layout/footer');
    
    }
    public function insertar(){
if($this->request->getMethod() == "post" && $this->validate($this->reglas) ){
 $this->grupo->save([
     'usuario'=>1,
     'estado'=>1,
     'icono'=>$this->request->getPost('icono'),
     'grupo'=>$this->request->getPost('grupo'),
 ]);
 return redirect()->to(base_url().'/grupo');
}else{
    $datos=[
        'datos'=>'Agregar grupo','validation'=>$this->validator
    ];
          
echo view('layout/header');      
echo view('grupo/agregar',$datos);
echo view('layout/footer');
    }
    }
    public function editar($id,$valid=null){
        $consulta=$this->grupo->where('id',$id)->first();
        if($valid!=null){
       $matriz=[
           'datos'=>$consulta,
           'titulo'=>'Actualizar grupo',
           'validation'=>$valid
       ];
    }else{
        $matriz=['titulo'=>'Editar grupo','datos'=>$consulta];
    }
       echo view('layout/header');      
       echo view('grupo/editar',$matriz);
       echo view('layout/footer');
    }
    public function actualizar(){
        if($this->request->getMethod() =="post" && $this->validate($this->reglas)){
            $this->grupo->update($this->request->getPost('id'),[
                'icono'=>$this->request->getPost('icono'),
                'grupo'=>$this->request->getPost('grupo')
            ]);
            return redirect()->to(base_url().'/grupo');
        }else{
        return $this->editar($this->request->getPost('id'),$this->validator );    
        }

    }
    public function eliminar($id){$this->grupo->update($id,['estado'=>0]);
        return redirect()->to(base_url().'/grupo');

    }


}