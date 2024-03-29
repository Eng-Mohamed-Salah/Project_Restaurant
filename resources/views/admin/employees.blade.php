@extends('admin.shared.shared')

{{-- Title Page --}}
@section('title')
    Employees
@endsection

{{-- Style Css --}}
@section('scriptstabale')
<link href="{{ asset( 'assetsAdmin') }}/vendor/bootstrap-select/dist/css/bootstrap-select.min.css" rel="stylesheet" type="text/css"/>
<link href="{{ asset( 'assetsAdmin') }}/vendor/datatables/css/jquery.dataTables.min.css" rel="stylesheet" type="text/css"/>

@endsection

{{-- Content --}}
@section('content')
    <div class="content-body">

        <div class="container-fluid">
            <div class="modal fade" id="addOrderModalside">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Create Project</h5>
                            <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form>
                                <div class="form-group">
                                    <label class="text-black font-w500">Project Name</label>
                                    <input type="text" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label class="text-black font-w500">Deadline</label>
                                    <input type="date" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label class="text-black font-w500">Client Name</label>
                                    <input type="text" class="form-control">
                                </div>
                                <div class="form-group">
                                    <button type="button" class="btn btn-primary">CREATE</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="page-titles">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Table</a></li>
                    <li class="breadcrumb-item active"><a href="javascript:void(0)">Employees</a></li>
                </ol>
            </div>
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Profile Datatable</h4>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="example3" class="display min-w850">
                                    <thead>
                                        <tr>
                                            <th></th>
                                            <th>Name</th>
                                            <th>Department</th>
                                            <th>Gender</th>
                                            <th>Education</th>
                                            <th>Mobile</th>
                                            <th>Email</th>
                                            <th>Joining Date</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td><img class="rounded-circle" width="35"
                                                    src="{{ asset( 'assetsAdmin') }}/images/profile/small/p9.jpg" alt=""></td>
                                            <td>Mohamed Sami </td>
                                            <td>Architect</td>
                                            <td>Male</td>
                                            <td>M.COM., P.H.D.</td>
                                            <td><a href="javascript:void(0);"><strong>123 456 7890</strong></a></td>
                                            <td><a href="javascript:void(0);"><strong>info@example.com</strong></a></td>
                                            <td>2023/04/25</td>
                                            <td>
                                                <div class="d-flex">
                                                    <a href="#" class="btn btn-primary shadow btn-xs sharp mr-1"><i
                                                            class="fa fa-pencil"></i></a>
                                                    <a href="#" class="btn btn-danger shadow btn-xs sharp"><i
                                                            class="fa fa-trash"></i></a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><img class="rounded-circle" width="35"
                                                    src="{{ asset( 'assetsAdmin') }}/images/profile/small/p8.jpg" alt=""></td>
                                            <td>Essra Rajab</td>
                                            <td>Accountant</td>
                                            <td>Female</td>
                                            <td>M.COM., P.H.D.</td>
                                            <td><a href="javascript:void(0);"><strong>987 654 3210</a></strong></td>
                                            <td><a href="javascript:void(0);"><strong>info@example.com</a></strong></td>
                                            <td>2023/07/25</td>
                                            <td>
                                                <div class="d-flex">
                                                    <a href="#" class="btn btn-primary shadow btn-xs sharp mr-1"><i
                                                            class="fa fa-pencil"></i></a>
                                                    <a href="#" class="btn btn-danger shadow btn-xs sharp"><i
                                                            class="fa fa-trash"></i></a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><img class="rounded-circle" width="35"
                                                    src="{{ asset( 'assetsAdmin') }}/images/profile/small/p1.jpg" alt=""></td>
                                            <td>Omar Ahmed</td>
                                            <td>Junior Technical</td>
                                            <td>Male</td>
                                            <td>B.COM., M.COM.</td>
                                            <td><a href="javascript:void(0);"><strong>(123) 4567 890</a></strong></td>
                                            <td><a href="javascript:void(0);"><strong>info@example.com</a></strong></td>
                                            <td>2023/01/12</td>
                                            <td>
                                                <div class="d-flex">
                                                    <a href="#" class="btn btn-primary shadow btn-xs sharp mr-1"><i
                                                            class="fa fa-pencil"></i></a>
                                                    <a href="#" class="btn btn-danger shadow btn-xs sharp"><i
                                                            class="fa fa-trash"></i></a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><img class="rounded-circle" width="35"
                                                    src="{{ asset( 'assetsAdmin') }}/images/profile/small/p3.jpg" alt=""></td>
                                            <td>Shahd Essam </td>
                                            <td>Developer</td>
                                            <td>Female</td>
                                            <td>B.COM., M.COM.</td>
                                            <td><a href="javascript:void(0);"><strong>123 456 7890</a></strong></td>
                                            <td><a href="javascript:void(0);"><strong>info@example.com</a></strong></td>
                                            <td>2023/03/29</td>
                                            <td>
                                                <div class="d-flex">
                                                    <a href="#" class="btn btn-primary shadow btn-xs sharp mr-1"><i
                                                            class="fa fa-pencil"></i></a>
                                                    <a href="#" class="btn btn-danger shadow btn-xs sharp"><i
                                                            class="fa fa-trash"></i></a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><img class="rounded-circle" width="35"
                                                    src="{{ asset( 'assetsAdmin') }}/images/profile/small/p2.jpg" alt=""></td>
                                            <td>Ayman Rafie</td>
                                            <td>Accountant</td>
                                            <td>Female</td>
                                            <td>B.A, B.C.A</td>
                                            <td><a href="javascript:void(0);"><strong>987 654 3210</a></strong></td>
                                            <td><a href="javascript:void(0);"><strong>info@example.com</a></strong></td>
                                            <td>2023/11/28</td>
                                            <td>
                                                <div class="d-flex">
                                                    <a href="#" class="btn btn-primary shadow btn-xs sharp mr-1"><i
                                                            class="fa fa-pencil"></i></a>
                                                    <a href="#" class="btn btn-danger shadow btn-xs sharp"><i
                                                            class="fa fa-trash"></i></a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><img class="rounded-circle" width="35"
                                                    src="{{ asset( 'assetsAdmin') }}/images/profile/small/p6.jpg" alt=""></td>
                                            <td>Naglaa Shehta
                                            </td>
                                            <td>Specialist</td>
                                            <td>Female</td>
                                            <td>B.COM., M.COM.</td>
                                            <td><a href="javascript:void(0);"><strong>123 456 7890</a></strong></td>
                                            <td><a href="javascript:void(0);"><strong>info@example.com</a></strong></td>
                                            <td>2023/12/02</td>
                                            <td>
                                                <div class="d-flex">
                                                    <a href="#" class="btn btn-primary shadow btn-xs sharp mr-1"><i
                                                            class="fa fa-pencil"></i></a>
                                                    <a href="#" class="btn btn-danger shadow btn-xs sharp"><i
                                                            class="fa fa-trash"></i></a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><img class="rounded-circle" width="35"
                                                    src="{{ asset( 'assetsAdmin') }}/images/profile/small/p5.jpg" alt=""></td>
                                            <td>Bassant Emad
                                            </td>
                                            <td>Sales Assistant</td>
                                            <td>Female</td>
                                            <td>B.A, B.C.A</td>
                                            <td><a href="javascript:void(0);"><strong>987 654 3210</a></strong></td>
                                            <td><a href="javascript:void(0);"><strong>info@example.com</a></strong></td>
                                            <td>2023/08/06</td>
                                            <td>
                                                <div class="d-flex">
                                                    <a href="#" class="btn btn-primary shadow btn-xs sharp mr-1"><i
                                                            class="fa fa-pencil"></i></a>
                                                    <a href="#" class="btn btn-danger shadow btn-xs sharp"><i
                                                            class="fa fa-trash"></i></a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><img class="rounded-circle" width="35"
                                                    src="{{ asset( 'assetsAdmin') }}/images/profile/small/p7.jpg" alt=""></td>
                                            <td>Hossam Ahmed
                                            </td>
                                            <td>Integration</td>
                                            <td>Male</td>
                                            <td>B.TACH, M.TACH</td>
                                            <td><a href="javascript:void(0);"><strong>(123) 4567 890</a></strong></td>
                                            <td><a href="javascript:void(0);"><strong>info@example.com</a></strong></td>
                                            <td>2023/10/14</td>
                                            <td>
                                                <div class="d-flex">
                                                    <a href="#" class="btn btn-primary shadow btn-xs sharp mr-1"><i
                                                            class="fa fa-pencil"></i></a>
                                                    <a href="#" class="btn btn-danger shadow btn-xs sharp"><i
                                                            class="fa fa-trash"></i></a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><img class="rounded-circle" width="35"
                                                    src="{{ asset( 'assetsAdmin') }}/images/profile/small/p4.jpg" alt=""></td>
                                            <td>Ahmed Mohamed
                                            </td>
                                            <td>Javascript Developer</td>
                                            <td>Male</td>
                                            <td>B.A, B.C.A</td>
                                            <td><a href="javascript:void(0);"><strong>(123) 4567 890</a></strong></td>
                                            <td><a href="javascript:void(0);"><strong>info@example.com</a></strong></td>
                                            <td>2023/09/15</td>
                                            <td>
                                                <div class="d-flex">
                                                    <a href="#" class="btn btn-primary shadow btn-xs sharp mr-1"><i
                                                            class="fa fa-pencil"></i></a>
                                                    <a href="#" class="btn btn-danger shadow btn-xs sharp"><i
                                                            class="fa fa-trash"></i></a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><img class="rounded-circle" width="35"
                                                    src="{{ asset( 'assetsAdmin') }}/images/profile/small/p10.jpg" alt=""></td>
                                            <td>Amany Hany
                                            </td>
                                            <td>Software Engineer</td>
                                            <td>Male</td>
                                            <td>B.COM., M.COM.</td>
                                            <td><a href="javascript:void(0);"><strong>123 456 7890</a></strong></td>
                                            <td><a href="javascript:void(0);"><strong>info@example.com</a></strong></td>
                                            <td>2023/12/13</td>
                                            <td>
                                                <div class="d-flex">
                                                    <a href="#" class="btn btn-primary shadow btn-xs sharp mr-1"><i
                                                            class="fa fa-pencil"></i></a>
                                                    <a href="#" class="btn btn-danger shadow btn-xs sharp"><i
                                                            class="fa fa-trash"></i></a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><img class="rounded-circle" width="35"
                                                    src="{{ asset( 'assetsAdmin') }}/images/profile/small/pic1.jpg" alt=""></td>
                                            <td>Jena Gaines</td>
                                            <td>Office Manager</td>
                                            <td>Female</td>
                                            <td>B.TACH, M.TACH</td>
                                            <td><a href="javascript:void(0);"><strong>987 654 3210</a></strong></td>
                                            <td><a href="javascript:void(0);"><strong>info@example.com</a></strong></td>
                                            <td>2008/12/19</td>
                                            <td>
                                                <div class="d-flex">
                                                    <a href="#" class="btn btn-primary shadow btn-xs sharp mr-1"><i
                                                            class="fa fa-pencil"></i></a>
                                                    <a href="#" class="btn btn-danger shadow btn-xs sharp"><i
                                                            class="fa fa-trash"></i></a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><img class="rounded-circle" width="35"
                                                    src="{{ asset( 'assetsAdmin') }}/images/profile/small/pic2.jpg" alt=""></td>
                                            <td>Quinn Flynn</td>
                                            <td>Support Lead</td>
                                            <td>Male</td>
                                            <td>B.TACH, M.TACH</td>
                                            <td><a href="javascript:void(0);"><strong>(123) 4567 890</a></strong></td>
                                            <td><a href="javascript:void(0);"><strong>info@example.com</a></strong></td>
                                            <td>2013/03/03</td>
                                            <td>
                                                <div class="d-flex">
                                                    <a href="#" class="btn btn-primary shadow btn-xs sharp mr-1"><i
                                                            class="fa fa-pencil"></i></a>
                                                    <a href="#" class="btn btn-danger shadow btn-xs sharp"><i
                                                            class="fa fa-trash"></i></a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><img class="rounded-circle" width="35"
                                                    src="{{ asset( 'assetsAdmin') }}/images/profile/small/pic3.jpg" alt=""></td>
                                            <td>Charde Marshall</td>
                                            <td>Regional Director</td>
                                            <td>Female</td>
                                            <td>B.A, B.C.A</td>
                                            <td><a href="javascript:void(0);"><strong>123 456 7890</a></strong></td>
                                            <td><a href="javascript:void(0);"><strong>info@example.com</a></strong></td>
                                            <td>2008/10/16</td>
                                            <td>
                                                <div class="d-flex">
                                                    <a href="#" class="btn btn-primary shadow btn-xs sharp mr-1"><i
                                                            class="fa fa-pencil"></i></a>
                                                    <a href="#" class="btn btn-danger shadow btn-xs sharp"><i
                                                            class="fa fa-trash"></i></a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><img class="rounded-circle" width="35"
                                                    src="{{ asset( 'assetsAdmin') }}/images/profile/small/pic4.jpg" alt=""></td>
                                            <td>Haley Kennedy</td>
                                            <td>Senior Marketing</td>
                                            <td>Male</td>
                                            <td>B.COM., M.COM.</td>
                                            <td><a href="javascript:void(0);"><strong>987 654 3210</a></strong></td>
                                            <td><a href="javascript:void(0);"><strong>info@example.com</a></strong></td>
                                            <td>2012/12/18</td>
                                            <td>
                                                <div class="d-flex">
                                                    <a href="#" class="btn btn-primary shadow btn-xs sharp mr-1"><i
                                                            class="fa fa-pencil"></i></a>
                                                    <a href="#" class="btn btn-danger shadow btn-xs sharp"><i
                                                            class="fa fa-trash"></i></a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><img class="rounded-circle" width="35"
                                                    src="{{ asset( 'assetsAdmin') }}/images/profile/small/pic5.jpg" alt=""></td>
                                            <td>Tatyana Fitzpatrick</td>
                                            <td>Regional Director</td>
                                            <td>Male</td>
                                            <td>B.TACH, M.TACH</td>
                                            <td><a href="javascript:void(0);"><strong>(123) 4567 890</a></strong></td>
                                            <td><a href="javascript:void(0);"><strong>info@example.com</a></strong></td>
                                            <td>2010/03/17</td>
                                            <td>
                                                <div class="d-flex">
                                                    <a href="#" class="btn btn-primary shadow btn-xs sharp mr-1"><i
                                                            class="fa fa-pencil"></i></a>
                                                    <a href="#" class="btn btn-danger shadow btn-xs sharp"><i
                                                            class="fa fa-trash"></i></a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><img class="rounded-circle" width="35"
                                                    src="{{ asset( 'assetsAdmin') }}/images/profile/small/pic6.jpg" alt=""></td>
                                            <td>Michael Silva</td>
                                            <td>Marketing Designer</td>
                                            <td>Female</td>
                                            <td>B.A, B.C.A</td>
                                            <td><a href="javascript:void(0);"><strong>123 456 7890</a></strong></td>
                                            <td><a href="javascript:void(0);"><strong>info@example.com</a></strong></td>
                                            <td>2012/11/27</td>
                                            <td>
                                                <div class="d-flex">
                                                    <a href="#" class="btn btn-primary shadow btn-xs sharp mr-1"><i
                                                            class="fa fa-pencil"></i></a>
                                                    <a href="#" class="btn btn-danger shadow btn-xs sharp"><i
                                                            class="fa fa-trash"></i></a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><img class="rounded-circle" width="35"
                                                    src="{{ asset( 'assetsAdmin') }}/images/profile/small/pic7.jpg" alt=""></td>
                                            <td>Paul Byrd</td>
                                            <td>Financial Officer</td>
                                            <td>Male</td>
                                            <td>B.TACH, M.TACH</td>
                                            <td><a href="javascript:void(0);"><strong>987 654 3210</a></strong></td>
                                            <td><a href="javascript:void(0);"><strong>info@example.com</a></strong></td>
                                            <td>2010/06/09</td>
                                            <td>
                                                <div class="d-flex">
                                                    <a href="#" class="btn btn-primary shadow btn-xs sharp mr-1"><i
                                                            class="fa fa-pencil"></i></a>
                                                    <a href="#" class="btn btn-danger shadow btn-xs sharp"><i
                                                            class="fa fa-trash"></i></a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><img class="rounded-circle" width="35"
                                                    src="{{ asset( 'assetsAdmin') }}/images/profile/small/pic8.jpg" alt=""></td>
                                            <td>Gloria Little</td>
                                            <td>Systems Administrator</td>
                                            <td>Female</td>
                                            <td>B.A, B.C.A</td>
                                            <td><a href="javascript:void(0);"><strong>(123) 4567 890</a></strong></td>
                                            <td><a href="javascript:void(0);"><strong>info@example.com</a></strong></td>
                                            <td>2009/04/10</td>
                                            <td>
                                                <div class="d-flex">
                                                    <a href="#" class="btn btn-primary shadow btn-xs sharp mr-1"><i
                                                            class="fa fa-pencil"></i></a>
                                                    <a href="#" class="btn btn-danger shadow btn-xs sharp"><i
                                                            class="fa fa-trash"></i></a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><img class="rounded-circle" width="35"
                                                    src="{{ asset( 'assetsAdmin') }}/images/profile/small/pic9.jpg" alt=""></td>
                                            <td>Bradley Greer</td>
                                            <td>Software Engineer</td>
                                            <td>Male</td>
                                            <td>B.COM., M.COM.</td>
                                            <td><a href="javascript:void(0);"><strong>(123) 4567 890</a></strong></td>
                                            <td><a href="javascript:void(0);"><strong>info@example.com</a></strong></td>
                                            <td>2012/10/13</td>
                                            <td>
                                                <div class="d-flex">
                                                    <a href="#" class="btn btn-primary shadow btn-xs sharp mr-1"><i
                                                            class="fa fa-pencil"></i></a>
                                                    <a href="#" class="btn btn-danger shadow btn-xs sharp"><i
                                                            class="fa fa-trash"></i></a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><img class="rounded-circle" width="35"
                                                    src="{{ asset( 'assetsAdmin') }}/images/profile/small/pic10.jpg" alt=""></td>
                                            <td>Dai Rios</td>
                                            <td>Personnel Lead</td>
                                            <td>Male</td>
                                            <td>B.TACH, M.TACH</td>
                                            <td><a href="javascript:void(0);"><strong>123 456 7890</a></strong></td>
                                            <td><a href="javascript:void(0);"><strong>info@example.com</a></strong></td>
                                            <td>2012/09/26</td>
                                            <td>
                                                <div class="d-flex">
                                                    <a href="#" class="btn btn-primary shadow btn-xs sharp mr-1"><i
                                                            class="fa fa-pencil"></i></a>
                                                    <a href="#" class="btn btn-danger shadow btn-xs sharp"><i
                                                            class="fa fa-trash"></i></a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><img class="rounded-circle" width="35"
                                                    src="{{ asset( 'assetsAdmin') }}/images/profile/small/pic1.jpg" alt=""></td>
                                            <td>Jenette Caldwell</td>
                                            <td>Development Lead</td>
                                            <td>Female</td>
                                            <td>B.A, B.C.A</td>
                                            <td><a href="javascript:void(0);"><strong>987 654 3210</a></strong></td>
                                            <td><a href="javascript:void(0);"><strong>info@example.com</a></strong></td>
                                            <td>2011/09/03</td>
                                            <td>
                                                <div class="d-flex">
                                                    <a href="#" class="btn btn-primary shadow btn-xs sharp mr-1"><i
                                                            class="fa fa-pencil"></i></a>
                                                    <a href="#" class="btn btn-danger shadow btn-xs sharp"><i
                                                            class="fa fa-trash"></i></a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><img class="rounded-circle" width="35"
                                                    src="{{ asset( 'assetsAdmin') }}/images/profile/small/pic2.jpg" alt=""></td>
                                            <td>Yuri Berry</td>
                                            <td>Marketing Officer</td>
                                            <td>Male</td>
                                            <td>B.TACH, M.TACH</td>
                                            <td><a href="javascript:void(0);"><strong>(123) 4567 890</a></strong></td>
                                            <td><a href="javascript:void(0);"><strong>info@example.com</a></strong></td>
                                            <td>2009/06/25</td>
                                            <td>
                                                <div class="d-flex">
                                                    <a href="#" class="btn btn-primary shadow btn-xs sharp mr-1"><i
                                                            class="fa fa-pencil"></i></a>
                                                    <a href="#" class="btn btn-danger shadow btn-xs sharp"><i
                                                            class="fa fa-trash"></i></a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><img class="rounded-circle" width="35"
                                                    src="{{ asset( 'assetsAdmin') }}/images/profile/small/pic3.jpg" alt=""></td>
                                            <td>Caesar Vance</td>
                                            <td>Pre-Sales Support</td>
                                            <td>Male</td>
                                            <td>B.TACH, M.TACH</td>
                                            <td><a href="javascript:void(0);"><strong>(123) 4567 890</a></strong></td>
                                            <td><a href="javascript:void(0);"><strong>info@example.com</a></strong></td>
                                            <td>2011/12/12</td>
                                            <td>
                                                <div class="d-flex">
                                                    <a href="#" class="btn btn-primary shadow btn-xs sharp mr-1"><i
                                                            class="fa fa-pencil"></i></a>
                                                    <a href="#" class="btn btn-danger shadow btn-xs sharp"><i
                                                            class="fa fa-trash"></i></a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><img class="rounded-circle" width="35"
                                                    src="{{ asset( 'assetsAdmin') }}/images/profile/small/pic4.jpg" alt=""></td>
                                            <td>Doris Wilder</td>
                                            <td>Sales Assistant</td>
                                            <td>Female</td>
                                            <td>B.A, B.C.A</td>
                                            <td><a href="javascript:void(0);"><strong>123 456 7890</a></strong></td>
                                            <td><a href="javascript:void(0);"><strong>info@example.com</a></strong></td>
                                            <td>2010/09/20</td>
                                            <td>
                                                <div class="d-flex">
                                                    <a href="#" class="btn btn-primary shadow btn-xs sharp mr-1"><i
                                                            class="fa fa-pencil"></i></a>
                                                    <a href="#" class="btn btn-danger shadow btn-xs sharp"><i
                                                            class="fa fa-trash"></i></a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><img class="rounded-circle" width="35"
                                                    src="{{ asset( 'assetsAdmin') }}/images/profile/small/pic5.jpg" alt=""></td>
                                            <td>Angelica Ramos</td>
                                            <td>Executive Officer</td>
                                            <td>Male</td>
                                            <td>B.COM., M.COM.</td>
                                            <td><a href="javascript:void(0);"><strong>987 654 3210</a></strong></td>
                                            <td><a href="javascript:void(0);"><strong>info@example.com</a></strong></td>
                                            <td>2009/10/09</td>
                                            <td>
                                                <div class="d-flex">
                                                    <a href="#" class="btn btn-primary shadow btn-xs sharp mr-1"><i
                                                            class="fa fa-pencil"></i></a>
                                                    <a href="#" class="btn btn-danger shadow btn-xs sharp"><i
                                                            class="fa fa-trash"></i></a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><img class="rounded-circle" width="35"
                                                    src="{{ asset( 'assetsAdmin') }}/images/profile/small/pic6.jpg" alt=""></td>
                                            <td>Gavin Joyce</td>
                                            <td>Developer</td>
                                            <td>Female</td>
                                            <td>B.TACH, M.TACH</td>
                                            <td><a href="javascript:void(0);"><strong>(123) 4567 890</a></strong></td>
                                            <td><a href="javascript:void(0);"><strong>info@example.com</a></strong></td>
                                            <td>2010/12/22</td>
                                            <td>
                                                <div class="d-flex">
                                                    <a href="#" class="btn btn-primary shadow btn-xs sharp mr-1"><i
                                                            class="fa fa-pencil"></i></a>
                                                    <a href="#" class="btn btn-danger shadow btn-xs sharp"><i
                                                            class="fa fa-trash"></i></a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><img class="rounded-circle" width="35"
                                                    src="{{ asset( 'assetsAdmin') }}/images/profile/small/pic7.jpg" alt=""></td>
                                            <td>Jennifer Chang</td>
                                            <td>Regional Director</td>
                                            <td>Male</td>
                                            <td>B.A, B.C.A</td>
                                            <td><a href="javascript:void(0);"><strong>(123) 4567 890</a></strong></td>
                                            <td><a href="javascript:void(0);"><strong>info@example.com</a></strong></td>
                                            <td>2010/11/14</td>
                                            <td>
                                                <div class="d-flex">
                                                    <a href="#" class="btn btn-primary shadow btn-xs sharp mr-1"><i
                                                            class="fa fa-pencil"></i></a>
                                                    <a href="#" class="btn btn-danger shadow btn-xs sharp"><i
                                                            class="fa fa-trash"></i></a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><img class="rounded-circle" width="35"
                                                    src="{{ asset( 'assetsAdmin') }}/images/profile/small/pic8.jpg" alt=""></td>
                                            <td>Brenden Wagner</td>
                                            <td>Software Engineer</td>
                                            <td>Female</td>
                                            <td>B.TACH, M.TACH</td>
                                            <td><a href="javascript:void(0);"><strong>123 456 7890</a></strong></td>
                                            <td><a href="javascript:void(0);"><strong>info@example.com</a></strong></td>
                                            <td>2011/06/07</td>
                                            <td>
                                                <div class="d-flex">
                                                    <a href="#" class="btn btn-primary shadow btn-xs sharp mr-1"><i
                                                            class="fa fa-pencil"></i></a>
                                                    <a href="#" class="btn btn-danger shadow btn-xs sharp"><i
                                                            class="fa fa-trash"></i></a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><img class="rounded-circle" width="35"
                                                    src="{{ asset( 'assetsAdmin') }}/images/profile/small/pic9.jpg" alt=""></td>
                                            <td>Fiona Green</td>
                                            <td>Operating Officer</td>
                                            <td>Male</td>
                                            <td>B.A, B.C.A</td>
                                            <td><a href="javascript:void(0);"><strong>987 654 3210</a></strong></td>
                                            <td><a href="javascript:void(0);"><strong>info@example.com</a></strong></td>
                                            <td>2010/03/11</td>
                                            <td>
                                                <div class="d-flex">
                                                    <a href="#" class="btn btn-primary shadow btn-xs sharp mr-1"><i
                                                            class="fa fa-pencil"></i></a>
                                                    <a href="#" class="btn btn-danger shadow btn-xs sharp"><i
                                                            class="fa fa-trash"></i></a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><img class="rounded-circle" width="35"
                                                    src="{{ asset( 'assetsAdmin') }}/images/profile/small/pic10.jpg" alt=""></td>
                                            <td>Shou Itou</td>
                                            <td>Regional Marketing</td>
                                            <td>Female</td>
                                            <td>B.COM., M.COM.</td>
                                            <td><a href="javascript:void(0);"><strong>(123) 4567 890</a></strong></td>
                                            <td><a href="javascript:void(0);"><strong>info@example.com</a></strong></td>
                                            <td>2011/08/14</td>
                                            <td>
                                                <div class="d-flex">
                                                    <a href="#" class="btn btn-primary shadow btn-xs sharp mr-1"><i
                                                            class="fa fa-pencil"></i></a>
                                                    <a href="#" class="btn btn-danger shadow btn-xs sharp"><i
                                                            class="fa fa-trash"></i></a>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection

    {{-- Scripting js --}}
    @section('scripts')
    <script src="{{ asset( 'assetsAdmin') }}/vendor/datatables/js/jquery.dataTables.min.js" type="text/javascript"></script>
    <script src="{{ asset( 'assetsAdmin') }}/js/plugins-init/datatables.init.js" type="text/javascript"></script>

    @endsection
