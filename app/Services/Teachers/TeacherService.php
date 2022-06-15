<?php

namespace App\Services\Teachers;

use App\Models\Teachers\Teacher;
use App\Models\Reviews\Review;



class TeacherService
{

    public Teacher $teacherModel;
    public Review $reviewModel;



    public function __construct(Teacher $teacherModel, Review $reviewModel)
    {
        $this->teacherModel = $teacherModel;
        $this->reviewModel = $reviewModel;
    }



    public function show($id)
    {
        return $this->teacherModel->with('subject')->with('reviews')->find($id);
    }

    public function destroy($id)
    {
        $this->teacherModel->destroy($id);
    }

    public function update($id, $newTeacher)
    {
        $teacher = $this->show($id);
        $teacher->update($newTeacher);
    }

    public function create($teacher)
    {
        $this->teacherModel::create($teacher);
    }
}
