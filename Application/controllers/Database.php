<?php



class Database extends Controller
{
  /*
  * chama a view index.php do  /home   ou somente   /
  */

  public function index()
  {
    $data = array();

    $materials_model = $this->loadModel('Materials');
    if(isset($_GET["search"])){
        $value = $_GET["search_value"];
        $value = "%.$value.%";
        //$data = $materials_model->findMaterials($value);

        array_push( $data, (object)[
          "id" => 1,
          "name" => "teste",
          "type" => "CADERNO",
          "theme" => "tema teste",
          "author" => "eu mesmo",
          "subject" => "materia teste",
          "teacher" => "professor teste",
          "link" => "teste",
        ]);
        array_push( $data, (object)[
          "id" => 2,
          "name" => "teste2",
          "type" => "CADERNO2",
          "theme" => "tema teste2",
          "author" => "eu mesmo2",
          "subject" => "materia teste2",
          "teacher" => "professor teste2",
          "link" => "teste2",
        ]);

        echo $data[1]->id;
    }
    require "Application/views/database/index.php";
  
  }
}
// class MaterialsController{


//     public function 
// }
// //params for simple search
// $value = "%.$value.%";
// //params for filter serch
// $params = (object) [
//             'name' => "%" . $name . "%",
//             'theme' => "%" . $theme . "%",
//             'type' => "%" . $type . "%",
//             'author' => "%" . $author . "%",
//             'subject' => $idSubject,
//             'teacher' => $idTeacher,
//         ]; 