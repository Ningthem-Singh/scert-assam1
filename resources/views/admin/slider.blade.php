@extends('layouts.sidenav')

@section('sidenav')

    @if (Session::has('success'))
        <script>
            // Display a toast alert for success message
            Toastify({
                text: "{{ Session::get('success') }}",
                duration: 3000,
                close: true,
                gravity: "top", // `top` or `bottom`
                position: "center", // `left`, `center` or `right`
                stopOnFocus: true, // Prevents dismissing of toast on hover
                style: {
                    background: "linear-gradient(to right, #00b09b, #96c93d)",
                }
            }).showToast();
        </script>
    @endif

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/cropperjs/1.5.6/cropper.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/cropperjs/1.5.6/cropper.js"></script>
    <meta name="_token" content="{{ csrf_token() }}">

    <style type="text/css">
        img {
            display: block;
            max-width: 100%;
        }

        .preview {
            overflow: hidden;
            width: 250px;
            height: 150px;
            margin: 10px;
            border: 1px solid red;
        }

        .modal-lg {
            max-width: 1000px !important;
        }
    </style>

    <!-- Main content -->
    <div class="main-content" id="panel">

        <!-- Page content -->
        <div class="container-fluid">
            <div class="row">

                <div class="col-xl-12">
                    <button type="button" class="btn btn-primary mb-4 float-end" data-bs-toggle="modal"
                        data-bs-target="#sliderModal">
                        + Add New Slider Image
                    </button>
                    <div class="modal fade" id="sliderModal" tabindex="-1" role="dialog"
                        aria-labelledby="sliderModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-body">
                                    <div class="card">
                                        <div class="card-header"
                                            style="background:white!important;box-shadow:none!important">
                                            <div class="row align-items-center">
                                                <div class="col-8">
                                                    <h3 class="mb-0">Add Slider Images</h3>
                                                </div>

                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <div class="card">
                                                <div class="card-body">
                                                    <h5 class="card-title">Please Selete Image For Cropping</h5>
                                                    <input type="file" name="image" class="image">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal fade" id="modal" tabindex="-1" role="dialog"
                                            aria-labelledby="modalLabel" aria-hidden="true" data-backdrop="static"
                                            data-keyboard="false">
                                            <div class="modal-dialog modal-lg" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="modalLabel">Crop Slider Image</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                            aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <div class="img-container">
                                                            <div class="row">
                                                                <div class="col-md-8">
                                                                    <img id="image"
                                                                        src="https://avatars0.githubusercontent.com/u/3456749">
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <div class="preview"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary"
                                                            data-bs-dismiss="modal">Cancel</button>
                                                        <button type="button" class="btn btn-primary" id="crop"
                                                            data-bs-dismiss="modal">Crop & Upload</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="col-xl-12">
                <div class="container">
                    <div class="row" style="margin-bottom: 100px">

                        <div class="col-lg-12 col-md-12 mb-3 mb-lg-0">

                            <div class="card">
                                <div class="row ml-3 mr-3">
                                    @if ($slider->isnotEmpty())
                                        @foreach ($slider as $image)
                                            <div class="col-md-3 text-center mt-3 mb-3">
                                                <a href="#" class="image-link" data-toggle="modal"
                                                    data-target="#imageModal"
                                                    data-image="{{ asset('assets/Documents/Slider_images/' . $image->image_path) }}">
                                                    <img src="{{ asset('assets/Documents/Slider_images/' . $image->image_path) }}"
                                                        class="shadow-1-strong rounded mb-4 card-img-top" alt="" />
                                                </a>
                                                <a href="{{ url('/admin/sliders/delete/' . $image->id) }}"
                                                    class="btn btn-danger btn-sm delete-slider" role="button">Delete</a>
                                            </div>
                                        @endforeach
                                    @else
                                        <div class="col-md-12 text-center mt-3 mb-3">
                                            <h1> No Slider Image Uploaded Yet...</h1>
                                        </div>
                                    @endif

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Add a modal for displaying the image -->
    <div class="modal fade" id="imageModal" tabindex="-1" role="dialog" aria-labelledby="imageModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <img id="modalImage" src="" class="img-fluid" alt="Image">
                </div>
            </div>
        </div>
    </div>


    <script>
        var i = 0;

        $("#add").click(function() {

            ++i;

            $("#dynamicTable").append(
                '<tr><td><input type="file" name="image[]" class="form-control" required/></td><td><button type="button" class="btn btn-danger remove-tr">Remove</button></td></tr>'
            );
        });

        $(document).on('click', '.remove-tr', function() {
            $(this).parents('tr').remove();
        });
    </script>

    {{-- Crop Image Script --}}
    <script>
        var $modal = $('#modal');
        var image = document.getElementById('image');
        var cropper;
        $("body").on("change", ".image", function(e) {
            var files = e.target.files;
            var done = function(url) {
                image.src = url;
                $modal.modal('show');
            };
            var reader;
            var file;
            var url;
            if (files && files.length > 0) {
                file = files[0];
                if (URL) {
                    done(URL.createObjectURL(file));
                } else if (FileReader) {
                    reader = new FileReader();
                    reader.onload = function(e) {
                        done(reader.result);
                    };
                    reader.readAsDataURL(file);
                }
            }
        });
        $modal.on('shown.bs.modal', function() {
            cropper = new Cropper(image, {
                aspectRatio: 16 / 9,
                viewMode: 3,
                preview: '.preview'
            });
        }).on('hidden.bs.modal', function() {
            cropper.destroy();
            cropper = null;
        });
        $("#crop").click(function() {
            canvas = cropper.getCroppedCanvas({
                width: 1366,
                height: 768,
            });

            canvas.toBlob(function(blob) {
                url = URL.createObjectURL(blob);
                var reader = new FileReader();
                reader.readAsDataURL(blob);
                reader.onloadend = function() {
                    var base64data = reader.result;
                    $.ajax({
                        type: "POST",
                        dataType: "json",
                        url: "{{ route('uploadCropImage') }}",
                        data: {
                            '_token': $('meta[name="_token"]').attr('content'),
                            'image': base64data
                        },
                        success: function(data) {
                            console.log(data);
                            $modal.modal('hide');
                            // $modalMain.modal('close');
                        }
                    });
                    //Reload Page after ajax submit successful


                    //Sweetalert on successfull Image upload
                    Swal.fire({
                        title: 'Success',
                        text: "Slider Uploaded Successfully",
                        icon: 'success',
                        showCancelButton: false,
                        confirmButtonColor: '#3085d6',
                        cancelButtonColor: '#d33',
                        confirmButtonText: 'Ok',
                    }).then((result) => {
                        if (result.isConfirmed) {
                            window.location.reload();
                        }
                    })
                }
            });
        })
    </script>
    {{-- Crop Image Script End --}}


    <script>
        // Open the modal and set the image source when the image is clicked
        $('.image-link').on('click', function() {
            var imageUrl = $(this).data('image');
            $('#modalImage').attr('src', imageUrl);
            $('#imageModal').modal('show');
        });
    </script>

    <script>
        // /Sweetalert on successfull "Delete" buttons
        $('.delete-slider').on('click', function(event) {
            event.preventDefault(); // Prevent the default behavior (navigating to the URL)

            var deleteUrl = $(this).attr('href'); // Get the URL to delete

            // Show a SweetAlert2 confirmation dialog
            Swal.fire({
                title: 'Are you sure?',
                text: 'You won\'t be able to revert this!',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonText: 'Yes, delete it!',
                cancelButtonText: 'Cancel'
            }).then((result) => {
                if (result.isConfirmed) {
                    // If the user clicks "Yes, delete it!" in the confirmation dialog
                    // Navigate to the delete URL
                    window.location.href = deleteUrl;
                }
            });
        });
    </script>
@endsection
