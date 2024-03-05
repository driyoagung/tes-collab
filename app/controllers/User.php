<?php 
class User extends Controller {
   public function index() {
      $data["judul"] = "User";
      $this->view("template/header", $data);
      $this->view("user/index");
      $this->view("template/footer");  
    }
   public function profile($nama = "Linux", $pekerjaan = "Devs") {
      $data["judul"] = "User";
      $data["nama"] = $nama;
      $data["pekerjaan"] = $pekerjaan;
      $this->view("template/header", $data);
      $this->view("user/profile", $data);
      $this->view("template/footer");
   }
}

