@extends('backend.layouts.master')

@section('content')
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="row">
                <div class="col-sm-12">
                    <div class="home-tab">
                        <div class="d-sm-flex align-items-center justify-content-between border-bottom">
                            <ul class="nav nav-tabs" role="tablist">

                            </ul>
                            <div>
                                <div class="btn-wrapper">
                                    <a href="#" class="btn btn-otline-dark align-items-center"><i class="icon-share"></i> Share</a>
                                    <a href="#" class="btn btn-otline-dark"><i class="icon-printer"></i> Print</a>
                                    <a href="#" class="btn btn-primary text-white me-0"><i class="icon-download"></i> Export</a>
                                </div>
                            </div>
                        </div>
                        <div class="tab-content tab-content-basic">
                            <div class="tab-pane fade show active" id="overview" role="tabpanel" aria-labelledby="overview">

                                <table class="table">
                                    <thead>
                                    <tr>
                                        <th scope="col">Sl</th>
                                        <th scope="col">Title</th>
                                        <th scope="col">Description</th>
                                        <th scope="col">Author</th>
                                        <th scope="col">Category</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>Mark</td>
                                        <td>Otto</td>
                                        <td>@mdo</td>
                                        <td>tech</td>
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
    @endsection