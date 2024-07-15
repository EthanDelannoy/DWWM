<?php
require_once "./Models/MyDbConnection.php";


class UserManager {
    private $pdo;

    public function __construct() {
        $this->pdo = MyDbConnection::getInstance();
    }

    public function createUser($nom, $prenom, $email, $telephone, $password, $image, $role) {
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

        try {
            $this->pdo->beginTransaction();

            $stmt = $this->pdo->prepare('INSERT INTO users (nom, prenom, email, telephone, password, image_name) VALUES (?, ?, ?, ?, ?, ?)');
            $stmt->execute([$nom, $prenom, $email, $telephone, $hashedPassword, $image]);

            $userId = $this->pdo->lastInsertId();

            $stmt = $this->pdo->prepare('INSERT INTO userroles (user_id, role) VALUES (?, ?)');
            $stmt->execute([$userId, $role]);

            $this->pdo->commit();

            return "Utilisateur ajouté avec succès.";
        } catch (PDOException $e) {
            $this->pdo->rollBack();
            return "Erreur : " . $e->getMessage();
        }
    }

    public function deleteUser($id) {
        try {
            $stmt = $this->pdo->prepare('DELETE FROM users WHERE id = ?');
            $stmt->execute([$id]);
            return "Utilisateur supprimé avec succès.";
        } catch (PDOException $e) {
            return "Erreur : " . $e->getMessage();
        }
    }

    public function updateUser($id, $nom, $prenom, $email, $telephone, $image, $role) {
        try {
            $this->pdo->beginTransaction();

            $stmt = $this->pdo->prepare('UPDATE users SET nom = ?, prenom = ?, email = ?, telephone = ?, image_name = ? WHERE id = ?');
            $stmt->execute([$nom, $prenom, $email, $telephone, $image, $id]);

            $stmt = $this->pdo->prepare('UPDATE userroles SET role = ? WHERE user_id = ?');
            $stmt->execute([$role, $id]);

            $this->pdo->commit();

            return "Utilisateur mis à jour avec succès.";
        } catch (PDOException $e) {
            $this->pdo->rollBack();
            return "Erreur : " . $e->getMessage();
        }
    }

    public function getUserById($id) {
        $stmt = $this->pdo->prepare('SELECT users.*, userroles.role FROM users JOIN userroles ON users.id = userroles.user_id WHERE users.id = ?');
        $stmt->execute([$id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function getAllUsers() {
        $stmt = $this->pdo->prepare('SELECT * FROM users JOIN userroles ON users.id = userroles.user_id');
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getAllUsersRole() {
        $stmt = $this->pdo->prepare('SELECT users.*, userroles.role FROM users JOIN userroles ON users.id = userroles.user_id');
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}