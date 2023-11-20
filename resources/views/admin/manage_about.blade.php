@extends('layouts.sidenav')

@section('sidenav')
    @if ($msg = Session::get('success'))
        <div class="alert alert-success alert-dismissible">
            <button type="button" class="close" data-bs-dismiss="alert">×</button>
            <strong>{{ $msg }}</strong>
        </div>
    @endif

    @if ($msg = Session::get('error'))
        <div class="alert alert-danger alert-dismissible">
            <button type="button" class="close" data-bs-dismiss="alert">×</button>
            <strong>{{ $msg }}</strong>
        </div>
    @endif


    <!-- Page content -->
    <div class="container-fluid mt--6">
        <div class="row">
            <div class="col-xl-12 order-xl-1">
                <button type="button" class="btn btn-primary mb-4 float-end" data-bs-toggle="modal"
                    data-bs-target="#fundsModal">
                    + Add About
                </button>
                {{-- add about model --}}
                <div class="modal fade" id="fundsModal" tabindex="-1" role="dialog" aria-labelledby="fundsModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">

                            <div class="modal-body">
                                <div class="card">
                                    <div class="card-header" style="background:white!important;box-shadow:none!important">
                                        <div class="row align-items-center">
                                            <div class="col-8">
                                                <h3 class="mb-0">Add About</h3>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <form action="{{ url('/admin/manage_about_post') }}" method="POST"
                                            enctype="multipart/form-data">
                                            @csrf
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="about_name">About
                                                            Title</label>
                                                        <input type="text" id="about_name" class="form-control mt-1"
                                                            name="about_name" placeholder="About Title Name" required>

                                                    </div>
                                                </div>
                                            </div>


                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="form-group">
                                                        <label class="form-control-label my-2" for="summernote">About
                                                            Description</label>
                                                        <textarea id="summernote" class="form-control" name="about_description" aria-label="About Description" required></textarea>
                                                    </div>
                                                </div>
                                            </div>

                                            <button type="button" class="btn btn-secondary mt-3"
                                                data-bs-dismiss="modal">Close</button>
                                            <button type="submit" class="btn btn-success mt-3">Add About</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>


        {{-- table --}}
        <div class="row">
            <div class="col-xl-12">
                <div class="card card-stats">
                    <div class="card-header" style="background:white!important;box-shadow:none!important">
                        <div class="row align-items-center">
                            <div class="col-6">
                                <h3 class="mb-0">Manage About</h3>
                            </div>

                        </div>
                    </div>
                    <!-- Card body -->
                    <div class="card-body">

                        <table class="table align-items-center table-flush table-responsive-sm" id="myTable">
                            <thead class="thead-light">
                                <tr>
                                    <th>Sl. No</th>
                                    <th>About Name</th>
                                    <th>About Description</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($data as $data)
                                    <tr>
                                        <th data="row">
                                            <span class="mb-0 text-sm">{{ $loop->iteration }}</span>
                                        </th>
                                        <td>
                                            {{ Str::limit($data->about_name, 30) }}
                                        </td>
                                        <td>
                                            {!! Str::limit(strip_tags($data->about_description), 40) !!}
                                        </td>
                                        <td>
                                            <a class="btn btn-info btn-sm editCompany" id="editCompany"
                                                data-toggle="modal" data-target="#editmodal" href="#"
                                                data-id="{{ $data->id }}">Edit</a>
                                            <a href="{{ url('/admin/manage_about/delete/') }}/{{ $data->id }}"
                                                class="btn btn-danger btn-sm deleteAbout" role="button">Delete</a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>

                        {{-- Edit Modal Start --}}
                        <div class="modal fade" id="editmodal" tabindex="-1" role="dialog"
                            aria-labelledby="editmodalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">

                                    <div class="modal-body">
                                        <form id="companydata">
                                            <h3 class="mb-3">Edit About</h3>
                                            <div class="form-group">
                                                <input type="hidden" id="about_id" name="about_id" value="">
                                                <label for="about_name" class="col-form-label">About Name:</label>
                                                <input type="text" name="about_name" class="form-control about_name">
                                                <input type="hidden" name="d_id" class="did">
                                            </div>
                                            <div class="form-group">
                                                <label class="form-control-label my-2" for="summernote_edit">About
                                                    Description</label>
                                                <textarea id="summernote_edit" class="form-control about_descriptions" name="about_description" required></textarea>
                                            </div>

                                            <button type="button" class="btn btn-secondary mt-3"
                                                data-bs-dismiss="modal">Close</button>
                                            <button type="submit" class="btn btn-success mt-3"
                                                id="update_btn">Update</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{-- Edit Modal End --}}
                    </div>
                </div>
            </div>

        </div>

    </div>

    <div id="summernote"></div>
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>
    <script>
        $('#summernote').summernote({
            placeholder: 'About Description',
            tabsize: 2,
            height: 100
        });

        $('#summernote_edit').summernote({
            placeholder: 'About Description',
            tabsize: 2,
            height: 100,
        });
    </script>
    <script>
        $('body').on('click', '.editCompany', function(event) {

            $('.about_name').val('');
            $('.about_description').val('');

            var id = $(this).data('id');

            $.ajax({
                url: "{{ route('manage_about_edit') }}",
                type: "GET",
                data: {
                    id: id,
                },
                dataType: 'json',
                success: function(returnData) {
                    $('#editmodal').modal('show')
                    $('.about_name').val(returnData.about_name)
                    // $('#summernote_edit').val(returnData.about_description)
                    $('#summernote_edit').summernote('code', returnData.about_description);


                    $(".did").val(returnData.id);
                }
            });
        });

        $('body').on('click', '#update_btn', function(event) {
            event.preventDefault()
            var id = $(".did").val();
            var about_name = $(".about_name").val();
            var about_description = $("#summernote_edit").val();
            // console.log(about_description);
            // return
            $.ajax({
                // url: 'http://127.0.0.1:8000/admin/manage_about/update',
                url: '{{ route('manage_about_update') }}',
                type: "POST",
                dataType: "json",
                data: {
                    "_token": "{{ csrf_token() }}",
                    id: id,
                    about_name: about_name,
                    about_description: about_description,

                },
                dataType: 'json',
                success: function(data) {
                    if (data.msg == 1) {
                        window.location.reload(true);

                    }
                }
            });
        });
    </script>

    <script>
        // /Sweetalert on successfull "Delete" buttons start
        $('.deleteAbout').on('click', function(event) {
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
        // /Sweetalert on successfull "Delete" buttons end
    </script>
@endsection
