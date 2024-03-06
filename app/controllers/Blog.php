<?php
    class Blog extends Controller {
        public function index () {
           $data["judul"] = "Blog";
         $data["blog"] = $this->model("Blog_model")->getAllBlog();
         $this->view("template/header", $data);
         $this->view("blog/index", $data);
         $this->view("template/footer");
        }
        public function detail($id) {
            $data["judul"] = "Detail Blog";
            $data["blog"] = $this->model("Blog_model")->getBlogById($id);
            $this->view("template/header", $data);
            $this->view("blog/detail", $data);
            $this->view("template/footer");  
        }
        public function tambah() {
            if($this->model("Blog_model")->buatArtikel($_POST) > 0) {
              Flasher::setFlash("berhasil", "ditambahkan", "success");
              header("Location: " . BASE_URL . "/blog");
              exit;
           } else {
              Flasher::setFlash("gagal", "ditambahkan", "danger");   
              header("Location: " . BASE_URL . "/blog");
              exit;
            }
           }
    }
?>