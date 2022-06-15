<?php

namespace App\Services\Teachers;

use App\Models\Teachers\Teacher;
use Illuminate\Support\Facades\DB;

class TeachersService
{
    public Teacher $teacherModel;

    public function __construct(Teacher $teacherModel)
    {
        $this->teacherModel = $teacherModel;
    }

    public function list($name, $subject_id)
    {
        if ($subject_id == null || $subject_id == 'null') {
            return $this->teacherModel->with('subject')->filterByName($name)->get();
        } else {
            return $this->teacherModel->with('subject')->filterBySubject($subject_id)->filterByName($name)->get();
        }
    }
}
