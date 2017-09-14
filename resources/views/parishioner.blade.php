@extends('layouts.admin')

@section('content')

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Tables</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            DataTables Advanced Tables
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Date of Birth</th>
                                        <th>Phone</th>
                                        <th>Mobile</th>
                                        <th>Blood Group</th>
                                        <th>Unit</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    
                                  
                                   


                                    @foreach ($parishioners as $parishioner)
                                             <tr class="gradeU">
                                        <td>{{ $parishioner->name}}</td>
                                        <td>{{ $parishioner->date_of_birth}}</td>
                                        <td>{{ $parishioner->phone_no}}</td>
                                               <td>{{ $parishioner->mob_no}}</td>
                                        <td class="center">{{ $parishioner->blood_group}}</td>
                                        <td class="center">-</td>
                                    </tr>
                                      @endforeach
                                </tbody>
                            </table>
                         
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
        
            
          
        </div>
        <!-- /#page-wrapper -->

        <!-- Metis Menu Plugin JavaScript -->
        <script src="admintheme/vendor/metisMenu/metisMenu.min.js"></script>

        <!-- DataTables JavaScript -->
        <script src="admintheme/vendor/datatables/js/jquery.dataTables.min.js"></script>
        <script src="admintheme/vendor/datatables-plugins/dataTables.bootstrap.min.js"></script>
        <script src="admintheme/vendor/datatables-responsive/dataTables.responsive.js"></script>

        <!-- Custom Theme JavaScript -->
        <script src="admintheme/dist/js/sb-admin-2.js"></script>

        <!-- Page-Level Demo Scripts - Tables - Use for reference -->
        <script>
        $(document).ready(function() {
            $('#dataTables-example').DataTable({
                responsive: true,
                pageLength: 50
            });
        });
        </script>

  @endsection