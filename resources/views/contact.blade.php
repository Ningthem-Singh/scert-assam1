@extends('layouts.nav')

@section('content')
    <!-- Contact Section Starts -->
    <div id="contact" class="contact">
        <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='currentColor'/%3E%3C/svg%3E&#34;);"
            aria-label="breadcrumb">
            <div class="container">
                <ol class="breadcrumb ">
                    <li class="breadcrumb-item"><a href="/scert-assam">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Contact Us</li>
                </ol>
            </div>
        </nav>
        <div class="container">
            <div class="contact__us__wrapper">
                <div class="row">
                    <div class="col-12 mx-auto">
                        <h6 class="ms-1 fw-bold" style="letter-spacing: 1px;">MAIN DIRECTOR</h6>
                        <div class="card mb-3" style="max-width: 540px;">
                            <div class="row g-0">
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <p class="card-text contact__us__cardTitle">Name : Dr. Nirada Devi, Ph. D</p>
                                        <p style="margin-top: -10px!important;" class="card-text contact__us__cardText">
                                            Designation: Additional Director, SCERT, Assam</p>
                                        <p style="margin-top: -10px!important;" class="card-text contact__us__cardText">
                                            Guwahati - 781019</p>
                                        <p style="margin-top: -10px!important;" class="card-text contact__us__cardText">
                                            District : Kamrup Metro, Assam</p>
                                        <p style="margin-top: -10px!important;" class="card-text contact__us__cardText">Tel
                                            : +91-361-2382507</p>
                                        <p style="margin-top: -10px!important;" class="card-text contact__us__cardText">
                                            Email ID : <a
                                                href="dr.scertassam@rediffmail.com">dr.scertassam@rediffmail.com</a></p>
                                    </div>
                                </div>
                                <div class="col-md-4 d-flex align-items-center">
                                    <img src="{{ asset('assets/img/contact/directorjpeg.jpeg') }}"
                                        class="img-fluid rounded-start contact__images" alt="...">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 mt-3">
                        <h6 class="ms-1 fw-bold" style="letter-spacing: 1px;">SPIO & PUBLIC GRIEVANCES</h6>
                        <div class="card mb-3" style="max-width: 540px;">
                            <div class="row g-0">
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <p class="card-text contact__us__cardTitle">Name : Dr. Sumona Roy</p>
                                        <p style="margin-top: -10px!important;" class="card-text contact__us__cardText">
                                            Designation: Additional Director, SCERT, Assam</p>
                                        <p style="margin-top: -10px!important;" class="card-text contact__us__cardText">
                                            Guwahati - 781019</p>
                                        <p style="margin-top: -10px!important;" class="card-text contact__us__cardText">
                                            Address : SCERT, Assam</p>
                                        <p style="margin-top: -10px!important;" class="card-text contact__us__cardText">
                                            Phone : +91-361-2382507</p>
                                        <p style="margin-top: -10px!important;" class="card-text contact__us__cardText">
                                            Email ID : <a href="sumona.roy64@assam.gov.in">sumona.roy64@assam.gov.in</a></p>
                                    </div>
                                </div>
                                <div class="col-md-4 d-flex align-items-center">
                                    <img src="{{ asset('assets/img/contact/sumona_roy.jpg') }}"
                                        class="img-fluid rounded-start contact__images" alt="...">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 mt-3">
                        <h6 class="ms-1 fw-bold" style="letter-spacing: 1px;">WEBSITE RELATED</h6>
                        <div class="card mb-3" style="max-width: 540px;">
                            <div class="row g-0">
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <p class="card-text contact__us__cardTitle">Name : Sri Mukesh Sharma</p>
                                        <p style="margin-top: -10px!important;" class="card-text contact__us__cardText">
                                            Designation: Joint Director, SCERT, Assam.</p>
                                        <p style="margin-top: -10px!important;" class="card-text contact__us__cardText">
                                            Guwahati - 781019</p>
                                        <p style="margin-top: -10px!important;" class="card-text contact__us__cardText">
                                            Address : SCERT, Assam</p>
                                        <p style="margin-top: -10px!important;" class="card-text contact__us__cardText">
                                            Phone : 0361-2382507</p>
                                        <p style="margin-top: -10px!important;" class="card-text contact__us__cardText">
                                            Email ID : <a
                                                href="mukesh.sharma80@assam.gov.in">mukesh.sharma80@assam.gov.in</a></p>
                                    </div>
                                </div>
                                <div class="col-md-4 d-flex align-items-center">
                                    <img src="{{ asset('assets/img/contact/joint__director.jpg') }}"
                                        class="img-fluid rounded-start contact__images" alt="...">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact Section Ends -->
@endsection
