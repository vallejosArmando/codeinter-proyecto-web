<?php 
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\TipoModel;
class Tipo extends baseController{

protected $sos_tipo;
    protected $reglas;
    public function __construct(){
        $this->sos_tipo = new TipoModel();
        $this->reglas =[
            'nombre'=>['rules'=>'required','errors'=>['required'=>'El campo {field} es obligatorio.']],
            'descripcion'=>['rules'=>'required','errors'=>['required'=>'El campo {field} es obligatorio.']]
        ];
    }
public function index (){
$consultas=$this->sos_tipo->where('estado',1)->findAll();

$datos=['titulo'=>'Tabla Tipo Empleado','datos'=>$consultas];
echo view('layout/header');
echo view('tipo/inicio',$datos);
echo view('layout/footer');

}
public function agregar (){
    $datos=['titulo'=>'Agregar Tipo de Empleado'];
echo view('layout/header');
echo view('tipo/agregar',$datos);
echo view('layout/footer');

}
public function insertar (){
if($this->request->getMethod() =="post" && $this->validate($this->reglas)){
    $this->sos_tipo->save([
        'nombre' => $this->request->getPost('nombre'),
        'descripcion' =>$this->request->getPost('descripcion'),
        'usuario'=>1,
        'estado'=>1
    ]);
    return redirect()->to(base_url().'/tipo');
}else{
    $datos=['titulo'=>'Agregar Tipo de Empleado','validation'=>$this->validator];

}
echo view('layout/header');
echo view('tipo/agregar',$datos);
echo view('layout/footer');

}
public function editar ($id,$valor=null) {
    $consultas=$this->sos_tipo->where('id',$id)->first();
    if($valor!=null) {
        
        $datos=['titulo'=>'Editar Tipo de Empleado','datos'=>$consultas,'validation'=>$valor];
    }else{
        $datos=['titulo'=>'Editar Tipo de Empleado','datos'=>$consultas];
    }
    echo view('layout/header');
    echo view('tipo/editar',$datos);
    echo view('layout/footer');
    
}
public function actualizar (){
    if($this->request->getMethod()=="post" && $this->validate($this->reglas) ){

        $this->sos_tipo->update($this->request->getPost('id'),[
         'nombre'=>$this->request->getPost('nombre'),
         'descripcion'=>$this->request->getPost('descripcion')
        ]);
        return redirect()->to(base_url().'/tipo');
    }
    else{
        return $this->editar($this->request->getPost('id'),$this->validator);
    }


}
public function eliminar ($id){
$this->sos_tipo->update(($id),['estado'=>0]);
return redirect()->to(base_url().'/tipo');


}
public function eliminados (){

echo view('layout/header');
echo view('tipo/header');
echo view('layout/footer');

}
public function reigresar (){

echo view('layout/header');
echo view('tipo/header');
echo view('layout/footer');

}


}