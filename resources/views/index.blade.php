@extends('layout')

@section('isi')
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="row">

                <div class="col-lg-12 grid-margin stretch-card">
                    <div class="card mt-5 mx-auto" style="width: 65%;">
                        <div class="card-body">
                            <div class="d-flex justify-content-between">
                                <h4 class="card-title">DAFTAR BUKU</h4>
                            </div>

                            <div class="table-responsive">
                                <table id="buku" class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th>NO</th>
                                            <th>Product</th>
                                            <th>Sale</th>
                                            <th>Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Jacob</td>
                                            <td>Photoshop</td>
                                            <td class="text-danger"> 28.76% <i class="mdi mdi-arrow-down"></i></td>
                                            <td><label class="badge badge-danger">Pending</label></td>
                                        </tr>
                                        <tr>
                                            <td>Messsy</td>
                                            <td>Flash</td>
                                            <td class="text-danger"> 21.06% <i class="mdi mdi-arrow-down"></i></td>
                                            <td><label class="badge badge-warning">In progress</label></td>
                                        </tr>
                                        <tr>
                                            <td>John</td>
                                            <td>Premier</td>
                                            <td class="text-danger"> 35.00% <i class="mdi mdi-arrow-down"></i></td>
                                            <td><label class="badge badge-info">Fixed</label></td>
                                        </tr>
                                        <tr>
                                            <td>Peter</td>
                                            <td>After effects</td>
                                            <td class="text-success"> 82.00% <i class="mdi mdi-arrow-up"></i></td>
                                            <td><label class="badge badge-success">Completed</label></td>
                                        </tr>
                                        <tr>
                                            <td>Dave</td>
                                            <td>53275535</td>
                                            <td class="text-success"> 98.05% <i class="mdi mdi-arrow-up"></i></td>
                                            <td><label class="badge badge-warning">In progress</label></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
        <script src="/datatable/datatables.min.js"></script>
        <script>
            $('#buku').DataTable({

            });
        </script>
    @endsection
