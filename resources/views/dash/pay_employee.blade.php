
@extends('layouts.dashlay')

@section('header_nav')
    @include('inc.header_nav')  
@endsection

@section('sidebar_menu')
    
    <div class="sidebar-menu">
        <ul class="menu">
            <li class="sidebar-title">Menu</li>

            <li class="sidebar-item">
                <a href="#" class='sidebar-link'>
                    <i class="bi bi-grid-fill"></i>
                    <span>Dashboard</span>
                </a>
            </li>

            <li class="sidebar-item active has-sub">
                <a href="#" class='sidebar-link'>
                    <i class="fa fa-users"></i>
                    <span>Employees</span>
                </a>
                <ul class="submenu active">
                    <li class="submenu-item active">
                        <a href="/pay_employee">Upload Data</a>
                    </li>
                    <li class="submenu-item">
                        <a href="/view_employee">View/Edit Data</a>
                    </li>
                    {{-- <li class="submenu-item ">
                        <a href="#">Accounts</a>
                    </li> --}}
                </ul>
            </li>

            <li class="sidebar-item">
                <a href="#" class='sidebar-link'>
                    <i class="fa fa-edit"></i>
                    <span>Accounts</span>
                </a>
            </li>

            <li class="sidebar-item">
                <a href="#" class='sidebar-link'>
                    <i class="fa fa-euro"></i>
                    <span>Payroll</span>
                </a>
            </li>

            <li class="sidebar-item ">
                <a href="#" class='sidebar-link'>
                    <i class="fa fa-file-text"></i>
                    <span>Reports</span>
                </a>
            </li>

            <li class="sidebar-item">
                <a href="#" class='sidebar-link'>
                    <i class="fa fa-calendar"></i>
                    <span>Calendar</span>
                </a>
            </li>

            <li class="sidebar-item has-sub">
                <a href="#" class='sidebar-link'>
                    <i class="fa fa-cogs"></i>
                    <span>Settings</span>
                </a>
                <ul class="submenu">
                    <li class="submenu-item">
                        <a href="/compsetup">Company Setup</a>
                    </li>
                    <li class="submenu-item">
                        <a href="/adduser">Add User</a>
                    </li>
                    {{-- <li class="submenu-item ">
                        <a href="#">Accounts</a>
                    </li> --}}
                </ul>
            </li>

        </ul>
    </div>
    
@endsection

@section('content')

    <div class="page-heading">
        <h3><i class="fa fa-file-text color6"></i>&nbsp;&nbsp;Employee Management</h3>

        <div class="top_content">
          {{-- <h5><i class="fa fa-file-text color6"></i>&nbsp;&nbsp;Reports Management </h5> --}}
          <a href="/emp_report"><p class="print_report">&nbsp;<i class="fa fa-print"></i>&nbsp; Print Emp. Report</p></a>
        </div>
    </div>

    <div class="row">
        <div class="col-12 col-xl-10">
            @include('inc.messages') 
            <div class="card">
                <div class="card-body">


                    <div class="row black_bottom">
                        
                        <!-- Uploads -->
                        <div class="col-md-12 my_borders">
                            <form class="form form-horizontal" action="{{action('EmployeeController@store')}}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <h5>Upload Employees Data</h5>
                                <div class="input-group mb-3">
                                    <label class="input-group-text" for="inputGroupFile01"><i class="bi bi-upload"></i></label>
                                    <input type="file" name="ex_file" multiple class="form-control" id="inputGroupFile01" >
                                </div>

                                <!--div class="input-group mb-8">
                                    <label class="input-group-text" for="inputGroupSelect01">Upload For</label>
                                    <select name="use" class="form-select" id="inputGroupSelect01">
                                        <option selected>Gallery Use</option>
                                        <option>System Use</option>
                                    </select>
                                </div-->

                                <div style="height: 20px"></div>
                                <h6>NOTE</h6>
                                {{-- <p class="gray_p">"Gallery Use" means image will be available to the public. ie. on gallery page</p> --}}
                                <p class="mid_p">Check file extention before clicking on upload</p>
                                <p class="small_p">System may only accept Excel files</p>

                                <div style="height: 10px"></div>
                                <div class="col-12 d-flex justify-content-end">
                                    <button type="submit" class="btn btn-dark me-1 mb-1" name="store_action" value="import_employee">Upload</button>
                                    <button type="reset" class="btn btn-light-secondary me-1 mb-1">Reset</button>
                                </div>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
        

@endsection

 