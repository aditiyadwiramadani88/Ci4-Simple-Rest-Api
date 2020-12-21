<?php
namespace App\Controllers;
use App\Models\Blogi as BlogModel;

class Base extends BaseController{

private function Model(){ 
	  $model = new BlogModel();
	  return $model; 
	}

public function index(){   
    $model = $this->Model();
    $data = $model->findAll();
    return $this->response->setJSON($data);  
  }
public function create(){ 
$model = $this->Model(); 
$model->insert($this->request->getJSON()); 
return $this->response->setJSON($this->request->getJSON());
 }
 
   public function delete($id){  
    $model = $this->Model();
    $data = $model->delete($id);
    return $this->response->setJSON(["msg" => "sucesss delete data"]);
  }


public function edit($id){
$model =$this->model();
$model->update($id, $this->request->getJSON());
 return $this->response->setJSON($this->request->getJSON());
  }

}