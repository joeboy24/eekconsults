<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\Faqs;
use App\Models\User;
use App\Models\Room;
use App\Models\Exam;
use App\Models\Staff;
use App\Models\Event;
use App\Models\About;
use App\Models\Course;
use App\Models\Student;
use App\Models\Program;
use App\Models\Gallery;
use App\Models\Company;
use App\Models\MyUpload;
use App\Models\RoomType;
use App\Models\NewsBlog;
use App\Models\Homepage;
use App\Models\Department;
use App\Models\Employee;
use Session;

class DashpagesController extends Controller
{
    //
    public function __construct(){
        $this->middleware(['auth', 'admin_auth']);
    } 
    
    public function pay_employee(){
        return view('dash.pay_employee');
    }

    public function pay_employee_view(){
        // $users = User::where('status', '!=', 'Student')->get();
        $employees = Employee::orderBy('fname', 'ASC')->paginate(20);
        return view('dash.pay_employee_view')->with('employees', $employees);
    }

    public function emp_report(){
        $send = [
            'c' => 1,
            'tax' => 44205.05,
            'from' => date('D, d-M-Y'),
            'to' => date('D, d-M-Y'),
            'report_type' => 'employee',
            'cur_date' => date('D, d-M-Y'),
            // 'region' => Region::all(),
            'query_region' => 'Ashanti',
            'employees' => Employee::all(),
        ];
        return view('dash.pay_emp_report')->with($send);
    }




 
    public function index(){
        $patch = [
            'exam' => Exam::where('del', 'no')->where('status', 'open')->count(),
            'staff' => Staff::where('del', 'no')->count(),
            'student' => Student::where('del', 'no')->count(),
        ];
        return view('dash.index')->with($patch);
    }

    public function adduser(){
        $users = User::where('status', '!=', 'Student')->get();
        return view('dash.adduser')->with('users', $users);
    }

    public function addstudent(){
        $patch = [
            'programs' => Program::all()
        ];
        return view('dash.addstudent')->with($patch);
    }

    public function studentview(){
        // $pss = Hash::make('code.8080');
        // if(Hash::check('code.8080', '$2y$10$ALm1.xtdQ0tsr61qAoZNH.CnHjxkEzpDOIS0wnmo/K0LiZmcTeyy6')){
        //     return 1;
        // }else {
        //     return 0;
        // }
        // return Hash::make('code.8080');
        $patch = [
            'programs' => Program::all(),
            'students' => Student::orderBy('id', 'DESC')->paginate(20)
        ];
        return view('dash.studentview')->with($patch);
    }

    public function add_staff(){
        // $token = rand(78777, 100000);
        // $token = substr(str_shuffle(str_repeat("0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ", 5)), 0, 5);
        // return $token;
        $patch = [
            'departments' => Department::all(),
            'staff' => Staff::orderBy('id', 'DESC')->paginate(10),
        ];
        return view('dash.addstaff')->with($patch);
        // return view('dash.addstaff');
    }

    public function programs(){
        $patch = [
            'departments' => Department::all(),
            'lecturer' => Staff::where('role', 'Lecturer')->orderBy('fname', 'ASC')->get(),
            'programs' => Program::orderBy('id', 'DESC')->paginate(10),
            'courses' => Course::orderBy('id', 'DESC')->paginate(10),
        ];
        return view('dash.programs')->with($patch);
        // return view('dash.addstaff');
    }

    public function programs_outl(){
        $patch = [
            'departments' => Department::all(),
            'programs' => Program::orderBy('program_name', 'ASC')->paginate(10),
            'courses' => Course::orderBy('id', 'DESC')->paginate(10),
        ];
        return view('dash.programs_outline')->with($patch);
        // return view('dash.addstaff');
    }

    public function programs_course_reg(){
        $patch = [
            'departments' => Department::all(),
            'programs' => Program::orderBy('program_name', 'ASC')->paginate(10),
            'courses' => Course::orderBy('id', 'DESC')->paginate(10),
        ];
        return view('dash.programs_course_reg')->with($patch);
        // return view('dash.addstaff');
    }

    public function departments(){
        $dept = Department::where('del', 'no')->paginate(10);
        return view('dash.departments')->with('dept', $dept);
        // return view('dash.addstaff');
    }

    public function companysetup(){
        $company = Company::all();
        return view('dash.companysetup')->with('company', $company);
    }

    public function dbase(){
        return view('dash.databasetbl');
    }
    
    public function admin_homepage(){
        $where = ['del' => 'no', 'loc_use' => 'Gallery Use'];
        $where2 = ['del' => 'no', 'loc_use' => 'System Use'];
        $homepage = Homepage::where('del', 'no')->Latest()->first();
        $gallery = Gallery::where($where)->orderBy('id', 'DESC')->get();
        $sys_gallery = Gallery::where($where2)->orderBy('id', 'DESC')->get();
        Session::put('homepage', $homepage);
        $patch = [
            'y' => 1,
            'z' => 1,
            'homepage' => $homepage,
            'sys_gallery' => $sys_gallery,
            'gallery' => $gallery
        ];
        // return $gallery;
        return view('dash.admin_homepage')->with($patch);
    }
    
    public function admin_about(){
        $about = About::limit(3)->get();
        return view('dash.admin_about')->with('about', $about);
    }
    
    public function admin_news(){
        $blogs = NewsBlog::orderBy('id', 'DESC')->paginate(5);
        return view('dash.newsblog')->with('blogs', $blogs);
    }
    
    public function admin_events(){
        $events = Event::orderBy('id', 'DESC')->paginate(5);
        return view('dash.admin_events')->with('events', $events);
    }
    
    public function admin_faqs(){
        $faqs = Faqs::orderBy('id', 'DESC')->paginate(10);
        return view('dash.admin_faqs')->with('faqs', $faqs);
    }
    
    public function admin_newsletter(){
        $newsletter = NewsletterMsg::orderBy('id', 'DESC')->paginate(10);
        return view('dash.admin_newsletter')->with('newsletter', $newsletter);
    }



    

}
