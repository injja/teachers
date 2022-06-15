<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\TestMail;
use App\Http\Controllers\Controller;
use App\Services\Teachers\TeacherService;

class MailController extends Controller
{
    public TeacherService $teacherService;

    public function __construct(TeacherService $teacherService)
    {
        $this->teacherService = $teacherService;
    }


    public function getSendEmailView($id)
    {
        $teacher = $this->teacherService->show($id);

        return view('mails.sendemailview', ['teacher_name' => $teacher->name, 'email_adress' => $teacher->email_adress]);
    }

    public function sendEmail(Request $request)
    {
        $teacher_name = $request->get('name');
        $username = $request->get('username');
        $title = $request->get('title');
        $message = $request->get('message');
        $email_adress = $request->get('email_adress');

        $details = [
            'title' => $title,
            'body' => $message,
            'username' => $username
        ];

        Mail::to($email_adress)->send(new TestMail($details));
        return view('mails.emailsent', ['name' => $teacher_name]);
    }
}
