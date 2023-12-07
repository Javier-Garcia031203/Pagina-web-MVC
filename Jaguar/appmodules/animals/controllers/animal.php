<?php
import('appmodules.animals.models.animal');
import('appmodules.animals.views.animal');

#[AllowDynamicProperties]
class AnimalController extends Controller { 
    public function inicio() {
        $this->view->inicio();
    }
    
    public function add() {
        $this->view->add();
    }
    public function edit($id=0) {
        $product = $this->model->getById($id);
        $this->view->edit($animals);
    }

    public function list() {
        $sql = "SELECT * FROM animal";
        $animals = $this->model->query($sql);
        $this->view->list($animals);

    }
    public function save() {
        $this->models->nombre = $_POST['nombre'];
        $this->models->edad = $_POST['edad'];
        $this->models->numerodehabitad = $_POST['numerodehabitad'];
        $this->models->tipodealimentacion = $_POST['tipodealimentacion'];
        $this->models->fechadeingreso = $_POST['fechadeingreso'];

        $this->model->save();
        $this->list();    
    }
    public function delete($id=0) {
        $this->model->delete($id);
        $this->list();
    }
}
?>
