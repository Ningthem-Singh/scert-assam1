@extends('layouts.nav')
@section('content')
    <!-- ======= Hero ======= -->
    <div id="hero" class="hero">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 col-md-7 col-12">
                    <div class="carouselLeft__section">
                        <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="{{ asset('assets/Documents/Slider_images/' . $firstSlider->image_path) }}"
                                        class="d-block w-100" alt="Slider image 1">
                                </div>
                                @foreach ($sliderImage as $row)
                                    <div class="carousel-item">
                                        <img src="{{ asset('assets/Documents/Slider_images/' . $row->image_path) }}"
                                            class="d-block w-100" alt="Slider image 2">
                                    </div>
                                @endforeach
                                {{-- <div class="carousel-item">
                                    <img src="https://elementary.assam.gov.in/sites/default/files/styles/76x84/public/swf_utility_folder/departments/elemenataryedu_medhassu_in_oid_3/slider/photo-2022-08-06-16-40-32.jpg?itok=vtOtXHcp"
                                        class="d-block w-100" alt="Slider image 3">
                                </div> --}}
                            </div>
                            <button class="carousel-control-prev" type="button"
                                data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button"
                                data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 col-md-5 col-12 d-flex align-items-center">

                    <div class="news__container">
                        <div class="vertical__sliding__box__header">
                            <div class="title">
                                <h6>News & Notification</h6>
                            </div>
                        </div>
                        <div class="vertical__sliding__box" id="newsContainer">
                            <div class="vertical__sliding__box__content">
                                <ul class="vertical__slider">
                                    @forelse ($notifications as $notification)
                                        <li>
                                            <h6>
                                                @if ($notification->notification_type == 1)
                                                    Notice
                                                @elseif($notification->notification_type == 2)
                                                    Career
                                                @elseif($notification->notification_type == 3)
                                                    Report
                                                @else
                                                    Unknown Type
                                                @endif
                                            </h6>
                                            <a href="" class="vertical__sliding__links">
                                                {{ $notification->notification_description }}
                                            </a>
                                        </li>
                                    @empty
                                        <p>No notifications available.</p>
                                    @endforelse
                                </ul>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- End Hero Section  -->

    <!-- About Section Starts  -->
    <div id="about" class="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 d-flex align-items-center">
                    <div class="aboutUs__left">
                        <div class="govtSeal__img">
                            <img src="{{ asset('assets/img/about/512px-Seal_of_Assam.svg.webp') }}" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="aboutUs__right">
                        <p>
                            {!! $data->about_description !!}<a href="/scert-assam/about" style="font-size: 12px">Read More...</a>
                        </p>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- About Section Ends  -->


    <script>
        // -------------JavaScript to handle pause on hover functionality of the notification area----------
        var newsContainer = document.getElementById('newsContainer');
        var newsList = document.querySelector('.vertical__slider');

        newsContainer.addEventListener('mouseover', function() {
            pauseNewsAnimation();
        });

        newsContainer.addEventListener('mouseout', function() {
            resumeNewsAnimation();
        });

        function pauseNewsAnimation() {
            newsList.style.animationPlayState = 'paused';
        }

        function resumeNewsAnimation() {
            newsList.style.animationPlayState = 'running';
        }
        // -------------JavaScript to handle pause on hover functionality of the notification area----------
    </script>
@endsection
