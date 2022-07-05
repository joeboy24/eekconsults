<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\EmployeeImport;
use App\Models\Employee;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //

        switch ($request->input('store_action')) {

            case 'import_employee':

                // return 'Im in!';

                try {
                    $this->validate($request, [
                        'ex_file'   => 'required|max:5000|mimes:xlsx,xls,csv'
                    ]);

                    Excel::import(new EmployeeImport,request()->file('ex_file'));
                    return redirect(url()->previous())->with('success', 'Employee Data successfully uploaded');

                } catch (ValidationException $exception) {
                    return redirect(url()->previous())->with('Error', $exception->errors());
                }

            break;

        }

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //

        switch ($request->input('update_action')) {


            // Update
            case 'update_employee':
                try {
                    $emp = Employee::find($id);
                    $emp->fname = $request->input('fname');
                    $emp->sname = $request->input('sname');
                    $emp->oname = $request->input('oname');
                    $emp->contact = $request->input('contact');
                    $emp->save();
                    return redirect(url()->previous())->with('success', $request->input('fname')."'s details successfully updated!");
                } catch (\Throwable $th) {
                    return redirect(url()->previous())->with('error', 'Oops..! Something went wrong');
                }
            break;

            // Delete
            case 'del_employee':
                $emp = Employee::find($id);
                $emp->del = 'yes';
                $emp->save();
                return redirect(url()->previous())->with('Success', $emp->name.' Deleted!');
            break;
            
            // Restore
            case 'restore_employee':
                $emp = Employee::find($id);
                $emp->del = 'no';
                $emp->save();
                return redirect(url()->previous())->with('Success', $emp->name.' Successfully Restored!');
            break;
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
