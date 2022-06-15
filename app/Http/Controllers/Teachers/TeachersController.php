<?php

namespace App\Http\Controllers\Teachers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\Teachers\TeachersService;

class TeachersController extends Controller
{
    public TeachersService $teachersService;

    public function __construct(TeachersService $teachersService)
    {
        $this->teachersService = $teachersService;
    }

    public function list(Request $request)
    {
        $name = $request->get("name");
        $subject_id = $request->get("subject_id");

        $teachers = $this->teachersService->list($name, $subject_id);

        return view('teachers.list', ['teachers' => $teachers]);
    }
}
