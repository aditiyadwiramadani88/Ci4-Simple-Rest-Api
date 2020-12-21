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
$data = [
  "title" => $this->request->getVar('title'), 
  "content" =>  $this->request->getVar('content'),
  ];
$model->insert($data); 
return $this->response->setJSON($data);
 }
 
   public function delete($id){  
    $model = $this->Model();
    $data = $model->delete($id);
    return $this->response->setJSON(["msg" => "sucesss delete data"]);
  }


public function edit($id){
$model =$this->model();
$data = [ 
  "title" => $this->request->getJSON('title')['title'], 
  "content" =>  $this->request->getJSON('content')['content'],

 ];
$model->update($id, $data);
 return $this->response->setJSON($data);
  }

}