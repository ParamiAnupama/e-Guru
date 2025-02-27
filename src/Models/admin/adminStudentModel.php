<?php
namespace App\Models\admin;

use App\Config\Database;
use PDO;
use PDOException;

class adminStudentModel {
    private $conn;

    public function __construct() {
        // Initialize the Database class and get the connection
        $db = new Database();
        $this->conn = $db->connect();

        if ($this->conn === null) {
            die('Error connecting to the database');
        }
    }

    // Fetch all students
    public function getAllStudents() {
        // Default query to fetch all students
        $query = "SELECT * FROM student";

        // Check if search is performed
        if (isset($_POST['search'])) {
            $searchTerm = $_POST['search_term'];
            //added id search too
            $query = "SELECT * FROM student WHERE firstname LIKE :searchTerm OR lastname LIKE :searchTerm OR email LIKE :searchTerm OR id LIKE :searchTerm";
        }

        // Prepare the query
        $stmt = $this->conn->prepare($query);

        // Bind the search term if available
        if (isset($searchTerm)) {
            $stmt->bindValue(':searchTerm', "%$searchTerm%", PDO::PARAM_STR);
        }

        // Execute the query and return the results
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }

    //get student profile on click
    public function getStudentProfile($studentId) {
        $query = "SELECT * FROM student WHERE id = :studentId";
        $stmt = $this->conn->prepare($query);
        $stmt->bindValue(':studentId', $studentId, PDO::PARAM_INT);
        $stmt->execute();
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        return $result;
    }
}
?>
