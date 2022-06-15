<?php

namespace App\Services\Teachers;

use App\Models\Teachers\Teacher;

class TeacherService
{

    public Teacher $teacherModel;

    public function __construct(Teacher $teacherModel)
    {
        $this->teacherModel = $teacherModel;
    }

    public function show($id)
    {
        return $this->teacherModel->with('subject')->find($id);
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
