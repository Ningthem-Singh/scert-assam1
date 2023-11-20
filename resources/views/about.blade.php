@extends('layouts.nav')
@section('content')
    <!-- About Section Starts  -->
    <div id="about__section" class="about__section">
        <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='currentColor'/%3E%3C/svg%3E&#34;);"
            aria-label="breadcrumb">
            <div class="container">
                <ol class="breadcrumb ">
                    <li class="breadcrumb-item"><a href="/scert-assam">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">About Us</li>
                </ol>
            </div>
        </nav>
        <div class="container">
            <div class="aboutUs__right mb-5">
                {{-- <h6>Introduction :</h6>
                <p>
                    State Council of Educational Research and Training (SCERT), Assam is the state academic authority
                    notified by Government of Assam u/s 29 of RTE Act,2009 assisting in formulating academic policies,
                    planning for quality improvement of school education, teacher education, maintain appropriate linkages
                    with other educational organizations and provide supervision/support to the district and sub-district
                    level institutions. SCERT is organizing in-service teacher training program for professional development
                    of all teachers. Along with its in-service responsibilities, the SCERT conducting short term and long
                    term teacher education programs on specific themes of specialization for secondary and senior secondary
                    teachers, administrators and teacher educators. SCERT, Assam is the affiliating body for D.El.Ed.
                    course, which has been conducted by a good number of government and private TEIs recognized by NCTE.
                    Development of curriculum, textbooks/ resource materials and assessment strategies for both school and
                    teacher education besides conduct of research based activities are the prime responsibilities of SCERT,
                    Assam.
                </p>
                <p>
                    Under SCERT, Assam, total 62 different Teachers education institutes (TEIs) such as District Institutes
                    of Education and Training (DIETs), Colleges of Teacher Education (CTEs), Institutes for Advanced Studies
                    in Education (IASEs), Normal Schools, Basic Training Centres (BTC)/ Block Institute of Teacher Education
                    (BITE), Hindi Teacher Training College, Hindi Training Centre, Pre-Primary Teacher Training Centre
                    (PPTTC).
                </p>
                <h6>Objective :</h6>
                <p>
                    In today's digital world, delivery of information and services in a consistent, accurate and uniform
                    manner is critical to maintain transparency in governance. Information related to Teacher Education that
                    was available on the web was found limited largely to the functions of the institution, important
                    documents and details of officials. Issues related to the content, it’s no availability; accuracy and
                    low level of intuitiveness were the major findings. The information that users looked for were generally
                    found lacking. This is a design for development of standardized, quality, informative, user-friendly
                    online portal to generate data-base with provision for regular updatation and grading of TEIs based on
                    certain vital phenomena as well as performance appraisal of individual teacher educator.
                </p>
                <h6>Advantages :</h6>
                <div class="advantages__list">
                    <ul>
                        <li>With Simple and easy to use .</li>
                        <li>Faster access to information .</li>
                        <li>Assured Content authenticity and accuracy .</li>
                        <li>Access from Anywhere .</li>
                        <li>Provide a platform to the users to express their initiative/works .</li>
                        <li>Encourage end user to execute as their works can be monitored and recognized .</li>
                        <li>Self appraisal leads to better Performance of the Teacher Educators .</li>
                        <li>Tracking of the individual employee .</li>
                        <li>Increases Productivity .</li>
                        <li>Grading of TEIs and Performance appraisal .</li>
                    </ul>
                </div> --}}

                @foreach ($data as $about)
                <h6>{{ $about->about_name }}</h6>
                <p>{!! $about->about_description !!}</p>
                @endforeach
            </div>
        </div>
    </div>
    <!-- About Section Ends  -->
    <!-- End #main -->
@endsection
