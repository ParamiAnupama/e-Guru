<?php

namespace App\Controllers;

use App\Controller;

class SubjectController extends Controller{

    public function showSubjectPage() {
        require_once __DIR__ . '/../Views/subjectpage.php';
    }
}