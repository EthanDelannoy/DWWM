<?php
require_once './Models/UserManager.class.php';
require_once './Models/AuthManager.class.php';
require_once './Models/MyDbConnection.php';

class UserController {
    private $userManager;

    public function __construct() {
        $this->userManager = new UserManager();
    }

    public function read() {
        $users = $this->userManager->getAllUsers();
        require './views/read.view.php';

    }

    public function updateForm($id){
        $utilisateur = $this->userManager->getUserById($id);
        require './views/update.view.php';
    }

    public function updateUser($data, $files){
        $id = $data['id'];
        $nom = $data['nom'];
        $prenom = $data['prenom'];
        $email = $data['email'];
        $telephone = $data['telephone'];
        $role = $data['role'];
        $nomImage = $data['currentImage'];

        if(isset($files['image']) && $files['image']['error'] == UPLOAD_ERR_OK) {
            $name = $files['image']['name'];
            $imgName = basename($files['image']['imgName']);
            move_uploaded_file($name,"./public/images/$imgName");
            $nomImage = $imgName;
        }

        $message = $this->userManager->updateUser($id,$nom,$prenom,$email,$telephone,$role,$nomImage);
        // $this->listUsers();
    }

    public function delete(){
        // $delet = $this->userManager->deleteUser();
        require './views/delete.view.php';
    }



}