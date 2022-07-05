
@extends('layouts.dashlay')

@section('sidebar_menu')
    
    <div class="sidebar-menu">
        <ul class="menu">
            <li class="sidebar-title">Menu</li>

            <li class="sidebar-item">
                <a href="/dashboard" class='sidebar-link'>
                    <i class="bi bi-grid-fill"></i>
                    <span>Dashboard</span>
                </a>
            </li>

            <li class="sidebar-item">
                <a href="/rooms" class='sidebar-link'>
                    <i class="fa fa-bed"></i>
                    <span>Manage Rooms</span>
                </a>
            </li>

            <li class="sidebar-item ">
                <a href="/reservation" class='sidebar-link'>
                    <i class="fa fa-address-book"></i>
                    <span>Make Reservation</span>
                </a>
            </li>

            <li class="sidebar-item ">
                <a href="#" class='sidebar-link'>
                    <i class="bi bi-pen-fill"></i>
                    <span>Accounts</span>
                </a>
            </li>

            <li class="sidebar-item active">
                <a href="/database" class='sidebar-link'>
                    <i class="bi bi-grid-1x2-fill"></i>
                    <span>Database</span>
                </a>
            </li>

            <li class="sidebar-item has-sub">
                <a href="#" class='sidebar-link'>
                    <i class="fa fa-cogs"></i>
                    <span>Settings</span>
                </a>
                <ul class="submenu">
                    <li class="submenu-item">
                        <a href="/companysetup">Company Setup</a>
                    </li>
                    <li class="submenu-item">
                        <a href="/adduser">Add User</a>
                    </li>
                    {{-- <li class="submenu-item ">
                        <a href="#">Accounts</a>
                    </li> --}}
                </ul>
            </li>

            {{-- <li class="sidebar-item  has-sub">
                <a href="#" class='sidebar-link'>
                    <i class="bi bi-stack"></i>
                    <span>Components</span>
                </a>
                <ul class="submenu ">
                    <li class="submenu-item ">
                        <a href="component-alert.html">Alert</a>
                    </li>
                    <li class="submenu-item ">
                        <a href="component-badge.html">Badge</a>
                    </li>
                    <li class="submenu-item ">
                        <a href="component-breadcrumb.html">Breadcrumb</a>
                    </li>
                    <li class="submenu-item ">
                        <a href="component-button.html">Button</a>
                    </li>
                    <li class="submenu-item ">
                        <a href="component-card.html">Card</a>
                    </li>
                    <li class="submenu-item ">
                        <a href="component-carousel.html">Carousel</a>
                    </li>
                    <li class="submenu-item ">
                        <a href="component-dropdown.html">Dropdown</a>
                    </li>
                    <li class="submenu-item ">
                        <a href="component-list-group.html">List Group</a>
                    </li>
                    <li class="submenu-item ">
                        <a href="component-modal.html">Modal</a>
                    </li>
                    <li class="submenu-item ">
                        <a href="component-navs.html">Navs</a>
                    </li>
                    <li class="submenu-item ">
                        <a href="component-pagination.html">Pagination</a>
                    </li>
                    <li class="submenu-item ">
                        <a href="component-progress.html">Progress</a>
                    </li>
                    <li class="submenu-item ">
                        <a href="component-spinner.html">Spinner</a>
                    </li>
                    <li class="submenu-item ">
                        <a href="component-tooltip.html">Tooltip</a>
                    </li>
                </ul>
            </li> --}}

            <li class="sidebar-item  has-sub">
                <a href="#" class='sidebar-link'>
                    <i class="bi bi-collection-fill"></i>
                    <span>Web Components</span>
                </a>
                <ul class="submenu ">
                    <li class="submenu-item ">
                        <a href="extra-component-avatar.html">Main Page</a>
                    </li>
                    <li class="submenu-item ">
                        <a href="extra-component-sweetalert.html">Galery Page</a>
                    </li>
                    <li class="submenu-item ">
                        <a href="extra-component-toastify.html">Contact Page</a>
                    </li>
                    <li class="submenu-item ">
                        <a href="extra-component-rating.html">Footer</a>
                    </li>
                </ul>
            </li>

            <li class="sidebar-item  has-sub">
                <a href="#" class='sidebar-link'>
                    <i class="bi bi-grid-1x2-fill"></i>
                    <span>Layouts</span>
                </a>
                <ul class="submenu ">
                    <li class="submenu-item ">
                        <a href="layout-default.html">Default Layout</a>
                    </li>
                    <li class="submenu-item ">
                        <a href="layout-vertical-1-column.html">1 Column</a>
                    </li>
                    <li class="submenu-item ">
                        <a href="layout-vertical-navbar.html">Vertical Navbar</a>
                    </li>
                    <li class="submenu-item ">
                        <a href="layout-rtl.html">RTL Layout</a>
                    </li>
                    <li class="submenu-item ">
                        <a href="layout-horizontal.html">Horizontal Menu</a>
                    </li>
                </ul>
            </li>

           {{-- <li class="sidebar-title">Forms &amp; Tables</li>

            <li class="sidebar-item  has-sub">
                <a href="#" class='sidebar-link'>
                    <i class="bi bi-hexagon-fill"></i>
                    <span>Form Elements</span>
                </a>
                <ul class="submenu ">
                    <li class="submenu-item ">
                        <a href="form-element-input.html">Input</a>
                    </li>
                    <li class="submenu-item ">
                        <a href="form-element-input-group.html">Input Group</a>
                    </li>
                    <li class="submenu-item ">
                        <a href="form-element-select.html">Select</a>
                    </li>
                    <li class="submenu-item ">
                        <a href="form-element-radio.html">Radio</a>
                    </li>
                    <li class="submenu-item ">
                        <a href="form-element-checkbox.html">Checkbox</a>
                    </li>
                    <li class="submenu-item ">
                        <a href="form-element-textarea.html">Textarea</a>
                    </li>
                </ul>
            </li>

            <li class="sidebar-item  ">
                <a href="form-layout.html" class='sidebar-link'>
                    <i class="bi bi-file-earmark-medical-fill"></i>
                    <span>Form Layout</span>
                </a>
            </li>

            <li class="sidebar-item  has-sub">
                <a href="#" class='sidebar-link'>
                    <i class="bi bi-pen-fill"></i>
                    <span>Form Editor</span>
                </a>
                <ul class="submenu ">
                    <li class="submenu-item ">
                        <a href="form-editor-quill.html">Quill</a>
                    </li>
                    <li class="submenu-item ">
                        <a href="form-editor-ckeditor.html">CKEditor</a>
                    </li>
                    <li class="submenu-item ">
                        <a href="form-editor-summernote.html">Summernote</a>
                    </li>
                    <li class="submenu-item ">
                        <a href="form-editor-tinymce.html">TinyMCE</a>
                    </li>
                </ul>
            </li>

            <li class="sidebar-item  ">
                <a href="table.html" class='sidebar-link'>
                    <i class="bi bi-grid-1x2-fill"></i>
                    <span>Table</span>
                </a>
            </li>

            <li class="sidebar-item  ">
                <a href="table-datatable.html" class='sidebar-link'>
                    <i class="bi bi-file-earmark-spreadsheet-fill"></i>
                    <span>Datatable</span>
                </a>
            </li>

            <li class="sidebar-title">Extra UI</li>

            <li class="sidebar-item  has-sub">
                <a href="#" class='sidebar-link'>
                    <i class="bi bi-pentagon-fill"></i>
                    <span>Widgets</span>
                </a>
                <ul class="submenu ">
                    <li class="submenu-item ">
                        <a href="ui-widgets-chatbox.html">Chatbox</a>
                    </li>
                    <li class="submenu-item ">
                        <a href="ui-widgets-pricing.html">Pricing</a>
                    </li>
                    <li class="submenu-item ">
                        <a href="ui-widgets-todolist.html">To-do List</a>
                    </li>
                </ul>
            </li>

            <li class="sidebar-item  has-sub">
                <a href="#" class='sidebar-link'>
                    <i class="bi bi-egg-fill"></i>
                    <span>Icons</span>
                </a>
                <ul class="submenu ">
                    <li class="submenu-item ">
                        <a href="ui-icons-bootstrap-icons.html">Bootstrap Icons </a>
                    </li>
                    <li class="submenu-item ">
                        <a href="ui-icons-fontawesome.html">Fontawesome</a>
                    </li>
                    <li class="submenu-item ">
                        <a href="ui-icons-dripicons.html">Dripicons</a>
                    </li>
                </ul>
            </li>

            <li class="sidebar-item  has-sub">
                <a href="#" class='sidebar-link'>
                    <i class="bi bi-bar-chart-fill"></i>
                    <span>Charts</span>
                </a>
                <ul class="submenu ">
                    <li class="submenu-item ">
                        <a href="ui-chart-chartjs.html">ChartJS</a>
                    </li>
                    <li class="submenu-item ">
                        <a href="ui-chart-apexcharts.html">Apexcharts</a>
                    </li>
                </ul>
            </li>

            <li class="sidebar-item  ">
                <a href="ui-file-uploader.html" class='sidebar-link'>
                    <i class="bi bi-cloud-arrow-up-fill"></i>
                    <span>File Uploader</span>
                </a>
            </li>

            <li class="sidebar-item  has-sub">
                <a href="#" class='sidebar-link'>
                    <i class="bi bi-map-fill"></i>
                    <span>Maps</span>
                </a>
                <ul class="submenu ">
                    <li class="submenu-item ">
                        <a href="ui-map-google-map.html">Google Map</a>
                    </li>
                    <li class="submenu-item ">
                        <a href="ui-map-jsvectormap.html">JS Vector Map</a>
                    </li>
                </ul>
            </li>

            <li class="sidebar-title">Pages</li>

            <li class="sidebar-item  ">
                <a href="application-email.html" class='sidebar-link'>
                    <i class="bi bi-envelope-fill"></i>
                    <span>Email Application</span>
                </a>
            </li>

            <li class="sidebar-item  ">
                <a href="application-chat.html" class='sidebar-link'>
                    <i class="bi bi-chat-dots-fill"></i>
                    <span>Chat Application</span>
                </a>
            </li>

            <li class="sidebar-item  ">
                <a href="application-gallery.html" class='sidebar-link'>
                    <i class="bi bi-image-fill"></i>
                    <span>Photo Gallery</span>
                </a>
            </li>

            <li class="sidebar-item  ">
                <a href="application-checkout.html" class='sidebar-link'>
                    <i class="bi bi-basket-fill"></i>
                    <span>Checkout Page</span>
                </a>
            </li>

            <li class="sidebar-item  has-sub">
                <a href="#" class='sidebar-link'>
                    <i class="bi bi-person-badge-fill"></i>
                    <span>Authentication</span>
                </a>
                <ul class="submenu ">
                    <li class="submenu-item ">
                        <a href="auth-login.html">Login</a>
                    </li>
                    <li class="submenu-item ">
                        <a href="auth-register.html">Register</a>
                    </li>
                    <li class="submenu-item ">
                        <a href="auth-forgot-password.html">Forgot Password</a>
                    </li>
                </ul>
            </li>

            <li class="sidebar-item  has-sub">
                <a href="#" class='sidebar-link'>
                    <i class="bi bi-x-octagon-fill"></i>
                    <span>Errors</span>
                </a>
                <ul class="submenu ">
                    <li class="submenu-item ">
                        <a href="error-403.html">403</a>
                    </li>
                    <li class="submenu-item ">
                        <a href="error-404.html">404</a>
                    </li>
                    <li class="submenu-item ">
                        <a href="error-500.html">500</a>
                    </li>
                </ul>
            </li>

            <li class="sidebar-title">Raise Support</li>

            <li class="sidebar-item  ">
                <a href="https://zuramai.github.io/mazer/docs" class='sidebar-link'>
                    <i class="bi bi-life-preserver"></i>
                    <span>Documentation</span>
                </a>
            </li>

            <li class="sidebar-item  ">
                <a href="https://github.com/zuramai/mazer/blob/main/CONTRIBUTING.md" class='sidebar-link'>
                    <i class="bi bi-puzzle"></i>
                    <span>Contribute</span>
                </a>
            </li>

            <li class="sidebar-item  ">
                <a href="https://github.com/zuramai/mazer#donate" class='sidebar-link'>
                    <i class="bi bi-cash"></i>
                    <span>Donate</span>
                </a>
            </li> --}}

        </ul>
    </div>
    
@endsection

@section('content')

            <div class="page-heading">
                <div class="page-title">
                    <div class="row">
                        <div class="col-12 col-md-6 order-md-1 order-last">
                            <h3>Database</h3>
                            <p class="text-subtitle text-muted">Have a view of all entries here</p>
                        </div>
                        <div class="col-12 col-md-6 order-md-2 order-first">
                            <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">DataTable</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
                <section class="section">
                    <div class="card">
                        <div class="card-header">
                            Simple Datatable
                        </div>
                        <div class="card-body">
                            <table class="table table-striped" id="table1">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Phone</th>
                                        <th>City</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Graiden</td>
                                        <td>vehicula.aliquet@semconsequat.co.uk</td>
                                        <td>076 4820 8838</td>
                                        <td>Offenburg</td>
                                        <td>
                                            <button type="button" class="paid_btn"><i class="fa fa-check-square-o"></i>&nbsp; ACTIVE</button>
                                            {{-- <button type="button" class="paid_btn"><i class="fa fa-check-square-o"></i>&nbsp; ACTIVE</button> --}}
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Dale</td>
                                        <td>fringilla.euismod.enim@quam.ca</td>
                                        <td>0500 527693</td>
                                        <td>New Quay</td>
                                        <td>
                                            <button type="button" class="paid_btn"><i class="fa fa-check-square-o"></i>&nbsp; ACTIVE</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Nathaniel</td>
                                        <td>mi.Duis@diam.edu</td>
                                        <td>(012165) 76278</td>
                                        <td>Grumo Appula</td>
                                        <td>
                                            <button type="button" class="paid_btn2"><i class="fa fa-times-circle"></i>&nbsp; INACTIVE</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Darius</td>
                                        <td>velit@nec.com</td>
                                        <td>0309 690 7871</td>
                                        <td>Ways</td>
                                        <td>
                                            <button type="button" class="paid_btn"><i class="fa fa-check-square-o"></i>&nbsp; ACTIVE</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Oleg</td>
                                        <td>rhoncus.id@Aliquamauctorvelit.net</td>
                                        <td>0500 441046</td>
                                        <td>Rossignol</td>
                                        <td>
                                            <button type="button" class="paid_btn"><i class="fa fa-check-square-o"></i>&nbsp; ACTIVE</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Kermit</td>
                                        <td>diam.Sed.diam@anteVivamusnon.org</td>
                                        <td>(01653) 27844</td>
                                        <td>Patna</td>
                                        <td>
                                            <button type="button" class="paid_btn"><i class="fa fa-check-square-o"></i>&nbsp; ACTIVE</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Jermaine</td>
                                        <td>sodales@nuncsit.org</td>
                                        <td>0800 528324</td>
                                        <td>Mold</td>
                                        <td>
                                            <button type="button" class="paid_btn"><i class="fa fa-check-square-o"></i>&nbsp; ACTIVE</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Ferdinand</td>
                                        <td>gravida.molestie@tinciduntadipiscing.org</td>
                                        <td>(016977) 4107</td>
                                        <td>Marlborough</td>
                                        <td>
                                            <button type="button" class="paid_btn2"><i class="fa fa-times-circle"></i>&nbsp; INACTIVE</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Kuame</td>
                                        <td>Quisque.purus@mauris.org</td>
                                        <td>(0151) 561 8896</td>
                                        <td>Tresigallo</td>
                                        <td>
                                            <button type="button" class="paid_btn"><i class="fa fa-check-square-o"></i>&nbsp; ACTIVE</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Deacon</td>
                                        <td>Duis.a.mi@sociisnatoquepenatibus.com</td>
                                        <td>07740 599321</td>
                                        <td>Karapınar</td>
                                        <td>
                                            <button type="button" class="paid_btn"><i class="fa fa-check-square-o"></i>&nbsp; ACTIVE</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Channing</td>
                                        <td>tempor.bibendum.Donec@ornarelectusante.ca</td>
                                        <td>0845 46 49</td>
                                        <td>Warrnambool</td>
                                        <td>
                                            <button type="button" class="paid_btn"><i class="fa fa-check-square-o"></i>&nbsp; ACTIVE</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Aladdin</td>
                                        <td>sem.ut@pellentesqueafacilisis.ca</td>
                                        <td>0800 1111</td>
                                        <td>Bothey</td>
                                        <td>
                                            <button type="button" class="paid_btn"><i class="fa fa-check-square-o"></i>&nbsp; ACTIVE</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Cruz</td>
                                        <td>non@quisturpisvitae.ca</td>
                                        <td>07624 944915</td>
                                        <td>Shikarpur</td>
                                        <td>
                                            <button type="button" class="paid_btn"><i class="fa fa-check-square-o"></i>&nbsp; ACTIVE</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Keegan</td>
                                        <td>molestie.dapibus@condimentumDonecat.edu</td>
                                        <td>0800 200103</td>
                                        <td>Assen</td>
                                        <td>
                                            <button type="button" class="paid_btn"><i class="fa fa-check-square-o"></i>&nbsp; ACTIVE</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Ray</td>
                                        <td>placerat.eget@sagittislobortis.edu</td>
                                        <td>(0112) 896 6829</td>
                                        <td>Hofors</td>
                                        <td>
                                            <button type="button" class="paid_btn"><i class="fa fa-check-square-o"></i>&nbsp; ACTIVE</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Maxwell</td>
                                        <td>diam@dapibus.org</td>
                                        <td>0334 836 4028</td>
                                        <td>Thane</td>
                                        <td>
                                            <button type="button" class="paid_btn"><i class="fa fa-check-square-o"></i>&nbsp; ACTIVE</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Carter</td>
                                        <td>urna.justo.faucibus@orci.com</td>
                                        <td>07079 826350</td>
                                        <td>Biez</td>
                                        <td>
                                            <button type="button" class="paid_btn"><i class="fa fa-check-square-o"></i>&nbsp; ACTIVE</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Stone</td>
                                        <td>velit.Aliquam.nisl@sitametrisus.com</td>
                                        <td>0800 1111</td>
                                        <td>Olivar</td>
                                        <td>
                                            <button type="button" class="paid_btn"><i class="fa fa-check-square-o"></i>&nbsp; ACTIVE</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Berk</td>
                                        <td>fringilla.porttitor.vulputate@taciti.edu</td>
                                        <td>(0101) 043 2822</td>
                                        <td>Sanquhar</td>
                                        <td>
                                            <button type="button" class="paid_btn"><i class="fa fa-check-square-o"></i>&nbsp; ACTIVE</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Philip</td>
                                        <td>turpis@euenimEtiam.org</td>
                                        <td>0500 571108</td>
                                        <td>Okara</td>
                                        <td>
                                            <button type="button" class="paid_btn"><i class="fa fa-check-square-o"></i>&nbsp; ACTIVE</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Kibo</td>
                                        <td>feugiat@urnajustofaucibus.co.uk</td>
                                        <td>07624 682306</td>
                                        <td>La Cisterna</td>
                                        <td>
                                            <button type="button" class="paid_btn"><i class="fa fa-check-square-o"></i>&nbsp; ACTIVE</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Bruno</td>
                                        <td>elit.Etiam.laoreet@luctuslobortisClass.edu</td>
                                        <td>07624 869434</td>
                                        <td>Rocca d"Arce</td>
                                        <td>
                                            <button type="button" class="paid_btn"><i class="fa fa-check-square-o"></i>&nbsp; ACTIVE</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Leonard</td>
                                        <td>blandit.enim.consequat@mollislectuspede.net</td>
                                        <td>0800 1111</td>
                                        <td>Lobbes</td>
                                        <td>
                                            <button type="button" class="paid_btn"><i class="fa fa-check-square-o"></i>&nbsp; ACTIVE</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Hamilton</td>
                                        <td>mauris@diam.org</td>
                                        <td>0800 256 8788</td>
                                        <td>Sanzeno</td>
                                        <td>
                                            <button type="button" class="paid_btn"><i class="fa fa-check-square-o"></i>&nbsp; ACTIVE</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Harding</td>
                                        <td>Lorem.ipsum.dolor@etnetuset.com</td>
                                        <td>0800 1111</td>
                                        <td>Obaix</td>
                                        <td>
                                            <button type="button" class="paid_btn"><i class="fa fa-check-square-o"></i>&nbsp; ACTIVE</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Emmanuel</td>
                                        <td>eget.lacus.Mauris@feugiatSednec.org</td>
                                        <td>(016977) 8208</td>
                                        <td>Saint-Remy-Geest</td>
                                        <td>
                                            <button type="button" class="paid_btn"><i class="fa fa-check-square-o"></i>&nbsp; ACTIVE</button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                </section>
            </div>

@endsection