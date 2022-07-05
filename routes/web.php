<?php

use Illuminate\Support\Facades\Route;
use App\Models\Event;
use App\Models\Homepage;
// use Session;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/ 



Route::get('/pay_employee', 'DashpagesController@pay_employee');
Route::get('/view_employee', 'DashpagesController@pay_employee_view');
Route::get('/emp_report', 'DashpagesController@emp_report');
Route::resource('/employee', 'EmployeeController');




Route::get('/quesearch','SearchController@quesearch');


Route::get('/', 'PagesController@index');
Route::get('/about', 'PagesController@about');
Route::get('/news', 'PagesController@news');
Route::get('/events', 'PagesController@events');
Route::get('/all_events', 'PagesController@all_events');
Route::get('/news-single', 'PagesController@news_single');
Route::get('/admissions', 'PagesController@admissions');
Route::get('/team', 'PagesController@team');
Route::get('/gallery', 'PagesController@gallery');
Route::get('/contact', 'PagesController@contact');
Route::get('/bugfixes', 'PagesController@bugfixes');
Route::get('/exam_portal', 'PagesController@exam_portal');
Route::get('/student_portal', 'PagesController@student_portal');
Route::get('/staff_portal', 'PagesController@staff_portal');
Route::get('/admin_portal', 'PagesController@admin_portal');
Route::get('/stop_countdown', 'PagesController@stop_countdown');

Route::get('/logout', 'Auth\LoginController@logout');
Route::get('/dashboard', 'DashpagesController@index');
Route::get('/admin_events', 'DashpagesController@admin_events');
Route::get('/reservation', 'DashpagesController@reserve');
Route::get('/adduser', 'DashpagesController@adduser');
Route::get('/addstudent', 'DashpagesController@addstudent');
Route::get('/studentview', 'DashpagesController@studentview');
Route::get('/companysetup', 'DashpagesController@companysetup');
Route::get('/add_staff', 'DashpagesController@add_staff');
Route::get('/departments', 'DashpagesController@departments');
Route::get('/programs', 'DashpagesController@programs');
Route::get('/programs_outline', 'DashpagesController@programs_outl');
Route::get('/admin_homepage', 'DashpagesController@admin_homepage');
Route::get('/admin_about', 'DashpagesController@admin_about');
Route::get('/admin_news', 'DashpagesController@admin_news');
Route::get('/admin_contacts', 'DashpagesController@admin_faqs');
Route::get('/admin_newsletter', 'DashpagesController@admin_newsletter');
// Route::get('/pcoursereg', 'DashpagesController@programs_course_reg');

Route::get('/database', 'DashpagesController@dbase');

Route::resource('/dash', 'DashController');
Route::resource('/admincr', 'AdminCourseReg');
Route::resource('/sdash', 'StdDashController');
Route::resource('/guestpages', 'GuestPagesController');

// Lecturers Routes
// Route::get('/staff_login', function(){
//     return view('dash.lect_login');
// });
Route::get('/lconfirm', 'LecturersController@lect_confirm');
// Route::get('/lregister', 'LecturersController@lect_register');
Route::get('/lprofile', 'LecturersController@lect_profile');
Route::get('/luploads', 'LecturersController@lect_uploads');
Route::get('/lslides', 'LecturersController@lect_uploads');
Route::get('/lquiz', 'LecturersController@lect_quize');
Route::get('/lmidsem', 'LecturersController@lect_midsem');
Route::get('/ldashboard', 'LecturersController@lect_dash');
Route::get('/lexam', 'LecturersController@lect_exam');
Route::get('/lscore', 'LecturersController@lect_score');


// Students Routes
Route::get('/sdashboard', 'StdPagesController@index');
Route::get('/sprofile', 'StdPagesController@profile');
Route::get('/sexamview', 'StdPagesController@examview');
Route::get('/sreg_slip', 'StdPagesController@sreg_slip');
Route::get('/svclassroom', 'StdPagesController@svclassroom');
Route::get('/sregister_course', 'StdPagesController@sregister_course');
Route::get('/registration_slip', 'StdPagesController@registration_slip');
Route::get('/sslides', 'StdPagesController@sslides');
Route::get('/sexam', 'StdPagesController@sexam');
Route::get('/sgrades', 'StdPagesController@sgrades');



// Inport & Exports
Route::get('/userexport', 'ExportsController@userexport');
// Route::get('/importfile', 'ExportsController@importFile');
// Route::post('/importfile', 'ExportsController@importExcel');
Route::get('/importfile', 'ExportsController@importFile');
Route::get('importExportView', 'ExportsController@importExportView');
Route::post('importquestion', 'ExportsController@importquestion')->name('importquestion');
Route::post('import', 'ExportsController@import')->name('import');
Route::get('export', 'ExportsController@export')->name('export');
// Route for view/blade file.
Route::get('importExport', 'MaatwebsiteController@importExport');
// Route for export/download tabledata to .csv, .xls or .xlsx
Route::get('downloadExcel/{xls}', 'MaatwebsiteController@downloadExcel');
// Route for import excel data to database.
Route::post('importExcel', 'MaatwebsiteController@importExcel');

// Route::get('/', function () {
//     return view('welcome');
// });
 

Route::get('/staff', 'PagesController@staff');
// Route::get('/student', 'PagesController@student');
Route::get('/code80', 'PagesController@code80');
Auth::routes(['register' => false]);
// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/home', function () {
    return redirect(url()->previous());
});

Route::get('/datecheck', function () {
    
    // $event = Event::where('del', 'no')->latest()->first();
    // $homepage = Homepage::where('del', 'no')->Latest()->first();
    // Session::put(['homepage' => $homepage, 'event' => $event]);
    // return Session::get('event');

    $cur_time = Date('2022-02-12');
    return $cur_time('i');
});






Route::get('/db_dump', function () {
    /*
    Needed in SQL File:

    SET GLOBAL sql_mode = '';
    SET SESSION sql_mode = '';
    */
    $get_all_table_query = "SHOW TABLES";
    $result = DB::select(DB::raw($get_all_table_query));

    // $tables = [
    //     'exams',
    //     'exam_subs',
    // ];

    $tables = [
        'companies',
        'courses',
        'expenses',
        'feereports',
        'fees',
        'galleries',
        'gallery_categories',
        'migrations',
        'password_resets',
        'payables',
        'stages',
        'students',
        'student_backups',
        'teachers',
        'users',
    ];

    $structure = '';
    $data = '';
    foreach ($tables as $table) {
        $show_table_query = "SHOW CREATE TABLE " . $table . "";

        $show_table_result = DB::select(DB::raw($show_table_query));

        foreach ($show_table_result as $show_table_row) {
            $show_table_row = (array)$show_table_row;
            $structure .= "\n\n" . $show_table_row["Create Table"] . ";\n\n";
        }
        $select_query = "SELECT * FROM " . $table;
        $records = DB::select(DB::raw($select_query));

        foreach ($records as $record) {
            $record = (array)$record;
            $table_column_array = array_keys($record);
            foreach ($table_column_array as $key => $name) {
                $table_column_array[$key] = '`' . $table_column_array[$key] . '`';
            }

            $table_value_array = array_values($record);
            $data .= "\nINSERT INTO $table (";

            $data .= "" . implode(", ", $table_column_array) . ") VALUES \n";

            foreach($table_value_array as $key => $record_column)
                $table_value_array[$key] = addslashes($record_column);

            $data .= "('" . implode("','", $table_value_array) . "');\n";
        }
    }
    if (!file_exists( __DIR__ . '/../database/DB_Backups')) {
        mkdir( __DIR__ . '/../database/DB_Backups', 0777, true);
        mkdir('Jay/Documents/DB_Backups', 0777, true);
    }
    $file_name = __DIR__ . '/../database/DB_Backups/backup_' . date('Y_m_d h_i_s') . '.sql';
    $file_handle = fopen($file_name, 'w + ');

    $output = $structure . $data;
    fwrite($file_handle, $output);
    fclose($file_handle);
    echo "Backup Successfull!";
});