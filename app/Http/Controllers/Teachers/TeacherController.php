<?php

namespace App\Http\Controllers\Teachers;

use App\Http\Controllers\Controller;
use App\Services\Teachers\SubjectsService;
use Illuminate\Http\Request;
use App\Services\Teachers\TeacherService;
use App\Services\Reviews\ReviewsService;


class TeacherController extends Controller
{
    public TeacherService $teacherService;
    public SubjectsService $subjectsService;
    public ReviewsService $reviewsService;

    public function __construct(TeacherService $teacherService, SubjectsService $subjectsService, ReviewsService $reviewsService)
    {
        $this->teacherService = $teacherService;
        $this->subjectsService = $subjectsService;
        $this->reviewsService = $reviewsService;
    }

    public function show($id)
    {
        $teacher = $this->teacherService->show($id);
        $reviews = $this->reviewsService->list($id);
        return view('teachers.show', ['teacher' => $teacher, 'reviews' => $reviews]);
    }

    public function destroy($id)
    {

        $teacher = $this->teacherService->destroy($id);
        return redirect()->route('teachers.list');
    }

    public function getUpdateView($id)
    {
        $teacher = $this->teacherService->show($id);
        $subjects = $this->subjectsService->list();
        return view('teachers.update', ['teacher' => $teacher, 'subjects' => $subjects]);
    }

    public function update(Request $request, $id)
    {
        $newTeacher = $request->all();
        $this->teacherService->update($id, $newTeacher);

        return redirect()->route('teachers.show', ['id' => $id]);
    }

    public function getCreateView()
    {
        $subjects = $this->subjectsService->list();
        return view('teachers.create', ['subjects' => $subjects]);
    }

    public function create(Request $request)
    {
        $teacher = $request->all();
        $this->teacherService->create($teacher);
        return redirect()->route('teachers.list');
    }
}
