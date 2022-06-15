<?php

namespace App\Services\Teachers;

use App\Models\Teachers\Subject;

class SubjectsService
{

    public Subject $subjectModel;

    public function __construct(Subject $subjectModel)
    {
        $this->subjectModel = $subjectModel;
    }

    public function list()
    {
        $subjects = $this->subjectModel->get();
        return $subjects;
    }
}
