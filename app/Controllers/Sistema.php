
<?php 
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\SistemaModel;

class Sistema extends BaseController{
    protected $sistema;
    protected $reglas;

    public function __construct(){
     $this->sistema=new SistemaModel();
     helper(['form']);
     $this->reglas=['nombre'=>['rules'=>'required','errors'=>['required'=>'El campo {field} es obligatorio.'
     ]
 ]

 ];
    }
    public function index($estado=1){

        $consulta=$this->sistema->where('estado',$estado)->findAll();
         $matriz=['titulo'=>'Sistema','datos'=>$consulta];
         echo view('layout/header');
         echo view ('sistema/inicio',$matriz);
         echo view('layout/footer');

    }
    public function agregar(){

        $matriz=['titulo'=>'Agregar Sistema'];
        echo view('layout/header');
        echo view('sistema/agregar',$matriz);
        echo view('layout/footer');
    }
    public function insertar(){
        $this->sistema->save(['nombre'=>$this->request->getPost('nombre'),'nom_creador'=>$this->request->getPost('nom_creador')]);
        return  redirect()->to(base_url().'/sistema');
    }
    public function editar($id){
       $consulta=$this->sistema->where('id',$id)->first();
    
        $matriz=['titulo'=>'Editar Sistema','datos'=>$consulta];
        echo view('layout/header');
        echo view('sistema/editar',$matriz);
        echo view('layout/footer');
    
    }
    public function actualizar(){
        $this->sistema->update($this->request->getPost('id'),['nombre'=>$this->request->getPost('n'),'nom_creador'=>$this->request->getPost('nom_creador')]);
        return  redirect()->to(base_url().'/sistema');
    }
    public function eliminar($id){
        $this->sistema->update($id,['estado'=>0]);
        return  redirect()->to(base_url().'/sistema');
    
    }
    public function eliminados($estado=0){
        $consulta=$this->sistema->where('estado',$estado)->findAll();
       $matriz=['titulo'=>'Eliminados','datos'=>$consulta];
       echo view('layout/header');
       echo view('sistema/eliminados',$matriz);
       echo view('layout/footer');
    }
    public function activar($id){
    
        $this->sistema->update($id,['estado'=>1]);
        return  redirect()->to(base_url().'/sistema');
    
    }
}