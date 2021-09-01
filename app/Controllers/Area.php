<?php 
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\AreaModel;
class Area extends BAseController{
protected $sos_area;
protected $reglas;
public function __construct(){
    $this->sos_area = new AreaModel();
    helper(['form']);
    $this->reglas=[
        'nombre'=>['rules'=>'required', 'errors'=>['required'=>'El campo {field} es obligatorio.']],
        'descripcion'=>['rules'=>'required','errors'=>['required'=>'El campo {field} es obligatorio.']]
    ];

}

public function index(){
    $matriz=$this->sos_area->where('estado',1)->findAll();
    $datos=[
        'titulo'=>'Areas',
    'datos'=>$matriz
    ];

echo view('layout/header');
echo view('area/inicio',$datos);
echo view('layout/footer');

}
public function agregar (){
$matriz=[
    'titulo'=>'Agregar Area'
];
echo view('layout/header');
echo view('area/agregar',$matriz);
echo view('layout/footer');

}
public function insertar(){
    if($this->request->getMethod()=="post" && $this->validate($this->reglas) ){
$this->sos_area->save([
    'id_sistema'=>1,
    'usuario'=>1,
    'estado'=>1,
 'nombre'=>$this->request->getPost('nombre'),
 'descripcion'=>$this->request->getPost('descripcion')

]);
return redirect()->to(base_url().'/area');
    }else{
        $datos=[
            'titulo'=>'Agregar Area',
            'validation'=>$this->validator,
        ];
echo view('layout/header');
echo view('area/agregar',$datos);
echo view('layout/footer');
    }

}
public function editar($id,$valor=null) {
  $consulta=  $this->sos_area->where('id',$id)->first();
  if($valor!=null){
$datos=[
    'titulo'=>'Editar Area',
    'datos'=>$this->$consulta,'validation'=>$valor
];
  }else{
      $datos=[
          'titulo'=>'Editar area',
          'datos'=>$consulta
      ];
  }
echo view('layout/header');
echo view('area/editar',$datos);
echo view('layout/footer');

}
public function actualizar(){
    if($this->request->getMethod() =="post" && $this->validate($this->reglas)){
        $this->sos_area->update($this->request->getPost('id'),[
            'id'=>$this->request->getPost('id'),
            'nombre'=>$this->request->getPost('nombre'),
             'descripcion'=>$this->request->getPost('descripcion')   
        ]);
        
        return redirect()->to(base_url().'/area');
    }else{
   return $this->editar($this->reuquest->getPost('id'),$this->validator);
    }
}
public function eliminar($id){

        $this->sos_area->update($id,['estado'=>0]);
    
return  redirect()->to(base_url().'/area');
}
}