<?php

namespace App\Models;

use App\Core\Model;

class Login extends Model
{
    public function proses()
    {
        // Periksa ketersediaan variabel pada $_POST
        if (isset($_POST['email']) && isset($_POST['password'])) {
            $email = $_POST['email'];
            $password = $_POST['password'];

            // Validasi input email
            if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
                // Gunakan prepared statement untuk mencegah SQL injection
                $query = "SELECT * FROM tb_users WHERE user_email=:user_email AND user_password=PASSWORD(:user_password)";
                $stmt = $this->db->prepare($query);
                $stmt->bindParam(":user_email", $email);
                $stmt->bindParam(":user_password", $password);
                $stmt->execute();

                // Ambil hasil query
                return $stmt->fetch();
            } else {
                // Email tidak valid, handle kesalahan atau redirect
                echo "Format email tidak valid.";
            }
        } else {
            // Variabel tidak diatur, handle kesalahan atau redirect
            echo "Form tidak lengkap.";
        }
    }
}
