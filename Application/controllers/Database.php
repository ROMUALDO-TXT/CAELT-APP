<?php

class Database extends Controller
{

  public function index()
  {
    $data = array();

    $materials_model = $this->loadModel('Materials');
    if (isset($_GET["search"])) {
      if (isset($_GET["search_method"])) {
        switch ($_GET["search_method"]) {
          case "normal":
            $value = $_GET["search_value"];
            $value = "%.$value.%";
            //$data = $materials_model->findMaterials($value);
            echo "normal";
            break;
          case "advanced":
            $params = (object) [
              'name' => "%" . $_GET["search_name"] . "%",
              'theme' => "%" . $_GET["search_theme"] . "%",
              'type' => "%" . $_GET["search_type"] . "%",
              'author' => "%" . $_GET["search_author"] . "%",
              'subject' => $_GET["search_subject"],
              'teacher' => $_GET["search_teacher"],
            ];
            echo "advanced";
            //$data = $materials_model->findMaterialsFilter($params);
            break;
        }
        array_push($data, (object)[
          "id" => 1,
          "name" => "teste",
          "type" => "CADERNO",
          "theme" => "tema teste",
          "author" => "eu mesmo",
          "subject" => "materia teste",
          "teacher" => "professor teste",
          "link" => "teste",
        ]);
        array_push($data, (object)[
          "id" => 2,
          "name" => "teste2",
          "type" => "CADERNO2",
          "theme" => "tema teste2",
          "author" => "eu mesmo2",
          "subject" => "materia teste2",
          "teacher" => "professor teste2",
          "link" => "teste2",
        ]);
      }

    }
    require "Application/views/database/index.php";
  }
}
