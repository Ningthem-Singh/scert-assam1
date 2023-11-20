@extends('layouts.sidenav')

@section('sidenav')
    <div class="container-fluid px-4">
        <div class="row my-3">
            <div class="col-md-6">
                <h4 class="">Institutes</h4>
            </div>
            <div class="col-md-6 text-end">
                <button class="btn btn-secondary addNew__instituteButton">+ Add New Institute</button>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-6 col-md-6">
                <div class="card text-white mb-4 institute__card">
                    <div class="card-header d-flex align-items-center justify-content-between">
                        <div class="card-title text-white text-uppercase">
                            DIET, BARPETA
                        </div>
                        <a class="small go__button text-white" href="#">GO</a>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <div class="info-box">
                                    <span class="info-box-icon bg-gray"><i class="fa-solid fa-people-line"></i></span>
                                    <div class="info-box-content">
                                        <span class="info-box-text">Manpower Strength</span>
                                        <span class="info-box-number">42</span>

                                        <!-- /.info-box-content -->
                                    </div>
                                </div>
                                <div class="info-box">
                                    <span class="info-box-icon bg-gray"><i class="fa-solid fa-award"></i></span>
                                    <div class="info-box-content">
                                        <span class="info-box-text">Overall Grade</span>
                                        <span class="info-box-grade">D</span>
                                        <!-- /.info-box-content -->
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <div class="progressBar__wrapper">
                                    <div class="progressBar__box">
                                        <div class="row d-flex align-items-center justify-content-between">
                                            <div class="col-md-5">
                                                <div class="progressBar__box__title">
                                                    Administration
                                                </div>
                                            </div>
                                            <div class="col-md-5 text-end">
                                                <div class="progressBar__box__number">
                                                    <strong>Average / <span>41.0</span></strong>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="progress" role="progressbar" aria-label="Basic example"
                                            aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">
                                            <div class="progress-bar bg_yellow__progressBar" style="width: 41%"></div>
                                        </div>

                                        <!-- /.progress-bar-box -->
                                    </div>
                                    <div class="progressBar__box">
                                        <div class="row d-flex align-items-center justify-content-between">
                                            <div class="col-md-5">
                                                <div class="progressBar__box__title">
                                                    Infrastructure
                                                </div>
                                            </div>
                                            <div class="col-md-5 text-end">
                                                <div class="progressBar__box__number">
                                                    <strong>Average / <span>51.0</span></strong>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="progress" role="progressbar" aria-label="Basic example"
                                            aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">
                                            <div class="progress-bar bg_yellow__progressBar" style="width: 51%"></div>
                                        </div>

                                        <!-- /.progress-bar-box -->
                                    </div>
                                    <div class="progressBar__box">
                                        <div class="row d-flex align-items-center justify-content-between">
                                            <div class="col-md-5">
                                                <div class="progressBar__box__title">
                                                    Academic
                                                </div>
                                            </div>
                                            <div class="col-md-5 text-end">
                                                <div class="progressBar__box__number">
                                                    <strong>Average / <span>23.0</span></strong>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="progress" role="progressbar" aria-label="Basic example"
                                            aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">
                                            <div class="progress-bar bg-danger" style="width: 23%"></div>
                                        </div>

                                        <!-- /.progress-bar-box -->
                                    </div>
                                    <div class="progressBar__box">
                                        <div class="row d-flex align-items-center justify-content-between">
                                            <div class="col-md-5">
                                                <div class="progressBar__box__title">
                                                    Financial
                                                </div>
                                            </div>
                                            <div class="col-md-5 text-end">
                                                <div class="progressBar__box__number">
                                                    <strong>Fair / <span>30.0</span></strong>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="progress" role="progressbar" aria-label="Basic example"
                                            aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">
                                            <div class="progress-bar bg-danger" style="width: 30%"></div>
                                        </div>

                                        <!-- /.progress-bar-box -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-md-6">
                <div class="card text-white mb-4 institute__card">
                    <div class="card-header d-flex align-items-center justify-content-between">
                        <div class="card-title text-white text-uppercase">
                            DIET, BONGAIGAON
                        </div>
                        <a class="small go__button text-white" href="#">GO</a>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <div class="info-box">
                                    <span class="info-box-icon bg-gray"><i class="fa-solid fa-people-line"></i></span>
                                    <div class="info-box-content">
                                        <span class="info-box-text">Manpower Strength</span>
                                        <span class="info-box-number">37</span>

                                        <!-- /.info-box-content -->
                                    </div>
                                </div>
                                <div class="info-box">
                                    <span class="info-box-icon bg-gray"><i class="fa-solid fa-award"></i></span>
                                    <div class="info-box-content">
                                        <span class="info-box-text">Overall Grade</span>
                                        <span class="info-box-grade">C</span>
                                        <!-- /.info-box-content -->
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <div class="progressBar__wrapper">
                                    <div class="progressBar__box">
                                        <div class="row d-flex align-items-center justify-content-between">
                                            <div class="col-md-5">
                                                <div class="progressBar__box__title">
                                                    Administration
                                                </div>
                                            </div>
                                            <div class="col-md-5 text-end">
                                                <div class="progressBar__box__number">
                                                    <strong>Average / <span>41.0</span></strong>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="progress" role="progressbar" aria-label="Basic example"
                                            aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">
                                            <div class="progress-bar bg_yellow__progressBar" style="width: 41%"></div>
                                        </div>

                                        <!-- /.progress-bar-box -->
                                    </div>
                                    <div class="progressBar__box">
                                        <div class="row d-flex align-items-center justify-content-between">
                                            <div class="col-md-5">
                                                <div class="progressBar__box__title">
                                                    Infrastructure
                                                </div>
                                            </div>
                                            <div class="col-md-5 text-end">
                                                <div class="progressBar__box__number">
                                                    <strong>Average / <span>51.0</span></strong>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="progress" role="progressbar" aria-label="Basic example"
                                            aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">
                                            <div class="progress-bar bg_yellow__progressBar" style="width: 51%"></div>
                                        </div>

                                        <!-- /.progress-bar-box -->
                                    </div>
                                    <div class="progressBar__box">
                                        <div class="row d-flex align-items-center justify-content-between">
                                            <div class="col-md-5">
                                                <div class="progressBar__box__title">
                                                    Academic
                                                </div>
                                            </div>
                                            <div class="col-md-5 text-end">
                                                <div class="progressBar__box__number">
                                                    <strong>Average / <span>23.0</span></strong>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="progress" role="progressbar" aria-label="Basic example"
                                            aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">
                                            <div class="progress-bar bg-danger" style="width: 23%"></div>
                                        </div>

                                        <!-- /.progress-bar-box -->
                                    </div>
                                    <div class="progressBar__box">
                                        <div class="row d-flex align-items-center justify-content-between">
                                            <div class="col-md-5">
                                                <div class="progressBar__box__title">
                                                    Financial
                                                </div>
                                            </div>
                                            <div class="col-md-5 text-end">
                                                <div class="progressBar__box__number">
                                                    <strong>Excellent / <span>84.98</span></strong>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="progress" role="progressbar" aria-label="Basic example"
                                            aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">
                                            <div class="progress-bar bg-success" style="width: 84.98%">
                                            </div>
                                        </div>

                                        <!-- /.progress-bar-box -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-md-6">
                <div class="card text-white mb-4 institute__card">
                    <div class="card-header d-flex align-items-center justify-content-between">
                        <div class="card-title text-white text-uppercase">
                            DIET, CACHAR
                        </div>
                        <a class="small go__button text-white" href="#">GO</a>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <div class="info-box">
                                    <span class="info-box-icon bg-gray"><i class="fa-solid fa-people-line"></i></span>
                                    <div class="info-box-content">
                                        <span class="info-box-text">Manpower Strength</span>
                                        <span class="info-box-number">36</span>

                                        <!-- /.info-box-content -->
                                    </div>
                                </div>
                                <div class="info-box">
                                    <span class="info-box-icon bg-gray"><i class="fa-solid fa-award"></i></span>
                                    <div class="info-box-content">
                                        <span class="info-box-text">Overall Grade</span>
                                        <span class="info-box-grade">C</span>
                                        <!-- /.info-box-content -->
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <div class="progressBar__wrapper">
                                    <div class="progressBar__box">
                                        <div class="row d-flex align-items-center justify-content-between">
                                            <div class="col-md-5">
                                                <div class="progressBar__box__title">
                                                    Administration
                                                </div>
                                            </div>
                                            <div class="col-md-5 text-end">
                                                <div class="progressBar__box__number">
                                                    <strong>Average / <span>41.0</span></strong>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="progress" role="progressbar" aria-label="Basic example"
                                            aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">
                                            <div class="progress-bar bg_yellow__progressBar" style="width: 41%"></div>
                                        </div>

                                        <!-- /.progress-bar-box -->
                                    </div>
                                    <div class="progressBar__box">
                                        <div class="row d-flex align-items-center justify-content-between">
                                            <div class="col-md-5">
                                                <div class="progressBar__box__title">
                                                    Infrastructure
                                                </div>
                                            </div>
                                            <div class="col-md-5 text-end">
                                                <div class="progressBar__box__number">
                                                    <strong>Average / <span>51.0</span></strong>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="progress" role="progressbar" aria-label="Basic example"
                                            aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">
                                            <div class="progress-bar bg_yellow__progressBar" style="width: 51%"></div>
                                        </div>

                                        <!-- /.progress-bar-box -->
                                    </div>
                                    <div class="progressBar__box">
                                        <div class="row d-flex align-items-center justify-content-between">
                                            <div class="col-md-5">
                                                <div class="progressBar__box__title">
                                                    Academic
                                                </div>
                                            </div>
                                            <div class="col-md-5 text-end">
                                                <div class="progressBar__box__number">
                                                    <strong>Average / <span>23.0</span></strong>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="progress" role="progressbar" aria-label="Basic example"
                                            aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">
                                            <div class="progress-bar bg-danger" style="width: 23%"></div>
                                        </div>

                                        <!-- /.progress-bar-box -->
                                    </div>
                                    <div class="progressBar__box">
                                        <div class="row d-flex align-items-center justify-content-between">
                                            <div class="col-md-5">
                                                <div class="progressBar__box__title">
                                                    Financial
                                                </div>
                                            </div>
                                            <div class="col-md-5 text-end">
                                                <div class="progressBar__box__number">
                                                    <strong>Excellent / <span>30.0</span></strong>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="progress" role="progressbar" aria-label="Basic example"
                                            aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">
                                            <div class="progress-bar bg-success" style="width: 89.82%">
                                            </div>
                                        </div>

                                        <!-- /.progress-bar-box -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-md-6">
                <div class="card text-white mb-4 institute__card">
                    <div class="card-header d-flex align-items-center justify-content-between">
                        <div class="card-title text-white text-uppercase">
                            DIET, DARRANG
                        </div>
                        <a class="small go__button text-white" href="#">GO</a>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <div class="info-box">
                                    <span class="info-box-icon bg-gray"><i class="fa-solid fa-people-line"></i></span>
                                    <div class="info-box-content">
                                        <span class="info-box-text">Manpower Strength</span>
                                        <span class="info-box-number">36</span>

                                        <!-- /.info-box-content -->
                                    </div>
                                </div>
                                <div class="info-box">
                                    <span class="info-box-icon bg-gray"><i class="fa-solid fa-award"></i></span>
                                    <div class="info-box-content">
                                        <span class="info-box-text">Overall Grade</span>
                                        <span class="info-box-grade">E</span>
                                        <!-- /.info-box-content -->
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <div class="progressBar__wrapper">
                                    <div class="progressBar__box">
                                        <div class="row d-flex align-items-center justify-content-between">
                                            <div class="col-md-5">
                                                <div class="progressBar__box__title">
                                                    Administration
                                                </div>
                                            </div>
                                            <div class="col-md-5 text-end">
                                                <div class="progressBar__box__number">
                                                    <strong>Average / <span>41.0</span></strong>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="progress" role="progressbar" aria-label="Basic example"
                                            aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">
                                            <div class="progress-bar bg_yellow__progressBar" style="width: 41%"></div>
                                        </div>

                                        <!-- /.progress-bar-box -->
                                    </div>
                                    <div class="progressBar__box">
                                        <div class="row d-flex align-items-center justify-content-between">
                                            <div class="col-md-5">
                                                <div class="progressBar__box__title">
                                                    Infrastructure
                                                </div>
                                            </div>
                                            <div class="col-md-5 text-end">
                                                <div class="progressBar__box__number">
                                                    <strong>Average / <span>29.0</span></strong>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="progress" role="progressbar" aria-label="Basic example"
                                            aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">
                                            <div class="progress-bar bg_yellow__progressBar" style="width: 29%"></div>
                                        </div>

                                        <!-- /.progress-bar-box -->
                                    </div>
                                    <div class="progressBar__box">
                                        <div class="row d-flex align-items-center justify-content-between">
                                            <div class="col-md-5">
                                                <div class="progressBar__box__title">
                                                    Academic
                                                </div>
                                            </div>
                                            <div class="col-md-5 text-end">
                                                <div class="progressBar__box__number">
                                                    <strong>Poor / <span>0.0</span></strong>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="progress" role="progressbar" aria-label="Basic example"
                                            aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">
                                            <div class="progress-bar bg-danger" style="width: 0%"></div>
                                        </div>

                                        <!-- /.progress-bar-box -->
                                    </div>
                                    <div class="progressBar__box">
                                        <div class="row d-flex align-items-center justify-content-between">
                                            <div class="col-md-5">
                                                <div class="progressBar__box__title">
                                                    Financial
                                                </div>
                                            </div>
                                            <div class="col-md-5 text-end">
                                                <div class="progressBar__box__number">
                                                    <strong>Poor / <span>0.0</span></strong>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="progress" role="progressbar" aria-label="Basic example"
                                            aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">
                                            <div class="progress-bar bg-danger" style="width: 0%"></div>
                                        </div>

                                        <!-- /.progress-bar-box -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-md-6">
                <div class="card text-white mb-4 institute__card">
                    <div class="card-header d-flex align-items-center justify-content-between">
                        <div class="card-title text-white text-uppercase">
                            DIET, DHEMAJI
                        </div>
                        <a class="small go__button text-white" href="#">GO</a>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <div class="info-box">
                                    <span class="info-box-icon bg-gray"><i class="fa-solid fa-people-line"></i></span>
                                    <div class="info-box-content">
                                        <span class="info-box-text">Manpower Strength</span>
                                        <span class="info-box-number">35</span>

                                        <!-- /.info-box-content -->
                                    </div>
                                </div>
                                <div class="info-box">
                                    <span class="info-box-icon bg-gray"><i class="fa-solid fa-award"></i></span>
                                    <div class="info-box-content">
                                        <span class="info-box-text">Overall Grade</span>
                                        <span class="info-box-grade">E</span>
                                        <!-- /.info-box-content -->
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <div class="progressBar__wrapper">
                                    <div class="progressBar__box">
                                        <div class="row d-flex align-items-center justify-content-between">
                                            <div class="col-md-5">
                                                <div class="progressBar__box__title">
                                                    Administration
                                                </div>
                                            </div>
                                            <div class="col-md-5 text-end">
                                                <div class="progressBar__box__number">
                                                    <strong>Average / <span>41.0</span></strong>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="progress" role="progressbar" aria-label="Basic example"
                                            aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">
                                            <div class="progress-bar bg_yellow__progressBar" style="width: 41%"></div>
                                        </div>

                                        <!-- /.progress-bar-box -->
                                    </div>
                                    <div class="progressBar__box">
                                        <div class="row d-flex align-items-center justify-content-between">
                                            <div class="col-md-5">
                                                <div class="progressBar__box__title">
                                                    Infrastructure
                                                </div>
                                            </div>
                                            <div class="col-md-5 text-end">
                                                <div class="progressBar__box__number">
                                                    <strong>Average / <span>51.0</span></strong>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="progress" role="progressbar" aria-label="Basic example"
                                            aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">
                                            <div class="progress-bar bg_yellow__progressBar" style="width: 51%"></div>
                                        </div>

                                        <!-- /.progress-bar-box -->
                                    </div>
                                    <div class="progressBar__box">
                                        <div class="row d-flex align-items-center justify-content-between">
                                            <div class="col-md-5">
                                                <div class="progressBar__box__title">
                                                    Academic
                                                </div>
                                            </div>
                                            <div class="col-md-5 text-end">
                                                <div class="progressBar__box__number">
                                                    <strong>Average / <span>23.0</span></strong>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="progress" role="progressbar" aria-label="Basic example"
                                            aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">
                                            <div class="progress-bar bg-danger" style="width: 23%"></div>
                                        </div>

                                        <!-- /.progress-bar-box -->
                                    </div>
                                    <div class="progressBar__box">
                                        <div class="row d-flex align-items-center justify-content-between">
                                            <div class="col-md-5">
                                                <div class="progressBar__box__title">
                                                    Financial
                                                </div>
                                            </div>
                                            <div class="col-md-5 text-end">
                                                <div class="progressBar__box__number">
                                                    <strong>Fair / <span>30.0</span></strong>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="progress" role="progressbar" aria-label="Basic example"
                                            aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">
                                            <div class="progress-bar bg-danger" style="width: 30%"></div>
                                        </div>

                                        <!-- /.progress-bar-box -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-md-6">
                <div class="card text-white mb-4 institute__card">
                    <div class="card-header d-flex align-items-center justify-content-between">
                        <div class="card-title text-white text-uppercase">
                            DIET, DHUBRI
                        </div>
                        <a class="small go__button text-white" href="#">GO</a>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <div class="info-box">
                                    <span class="info-box-icon bg-gray"><i class="fa-solid fa-people-line"></i></span>
                                    <div class="info-box-content">
                                        <span class="info-box-text">Manpower Strength</span>
                                        <span class="info-box-number">0</span>

                                        <!-- /.info-box-content -->
                                    </div>
                                </div>
                                <div class="info-box">
                                    <span class="info-box-icon bg-gray"><i class="fa-solid fa-award"></i></span>
                                    <div class="info-box-content">
                                        <span class="info-box-text">Overall Grade</span>
                                        <span class="info-box-grade">E</span>
                                        <!-- /.info-box-content -->
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <div class="progressBar__wrapper">
                                    <div class="progressBar__box">
                                        <div class="row d-flex align-items-center justify-content-between">
                                            <div class="col-md-5">
                                                <div class="progressBar__box__title">
                                                    Administration
                                                </div>
                                            </div>
                                            <div class="col-md-5 text-end">
                                                <div class="progressBar__box__number">
                                                    <strong>Poor / <span>0.0</span></strong>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="progress" role="progressbar" aria-label="Basic example"
                                            aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">
                                            <div class="progress-bar bg_yellow__progressBar" style="width: 0%"></div>
                                        </div>

                                        <!-- /.progress-bar-box -->
                                    </div>
                                    <div class="progressBar__box">
                                        <div class="row d-flex align-items-center justify-content-between">
                                            <div class="col-md-5">
                                                <div class="progressBar__box__title">
                                                    Infrastructure
                                                </div>
                                            </div>
                                            <div class="col-md-5 text-end">
                                                <div class="progressBar__box__number">
                                                    <strong>Poor / <span>0.0</span></strong>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="progress" role="progressbar" aria-label="Basic example"
                                            aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">
                                            <div class="progress-bar bg_yellow__progressBar" style="width: 0%"></div>
                                        </div>

                                        <!-- /.progress-bar-box -->
                                    </div>
                                    <div class="progressBar__box">
                                        <div class="row d-flex align-items-center justify-content-between">
                                            <div class="col-md-5">
                                                <div class="progressBar__box__title">
                                                    Academic
                                                </div>
                                            </div>
                                            <div class="col-md-5 text-end">
                                                <div class="progressBar__box__number">
                                                    <strong>Poor / <span>0.0</span></strong>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="progress" role="progressbar" aria-label="Basic example"
                                            aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">
                                            <div class="progress-bar bg-danger" style="width: 0%"></div>
                                        </div>

                                        <!-- /.progress-bar-box -->
                                    </div>
                                    <div class="progressBar__box">
                                        <div class="row d-flex align-items-center justify-content-between">
                                            <div class="col-md-5">
                                                <div class="progressBar__box__title">
                                                    Financial
                                                </div>
                                            </div>
                                            <div class="col-md-5 text-end">
                                                <div class="progressBar__box__number">
                                                    <strong>Poor / <span>0.0</span></strong>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="progress" role="progressbar" aria-label="Basic example"
                                            aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">
                                            <div class="progress-bar bg-danger" style="width: 0%"></div>
                                        </div>

                                        <!-- /.progress-bar-box -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
