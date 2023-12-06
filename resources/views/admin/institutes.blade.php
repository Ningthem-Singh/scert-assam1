@extends('layouts.sidenav')

@section('sidenav')
    @if (Session::has('success'))
        <p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('success') }}</p>
    @endif
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <div class="" style="min-height: 70px; background-size: cover; background-position: center top;">

    </div>
    <!-- Page content -->
    <div class="container-fluid mt--6">
        <div class="row">
            <div class="col-xl-12 order-xl-1">
                <button type="button" class="btn btn-primary mb-4 float-right" data-toggle="modal" data-target="#fundsModal">
                    + Add Institutes
                </button>
                <div class="modal fade" id="fundsModal" tabindex="-1" role="dialog" aria-labelledby="fundsModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">

                            <div class="modal-body">
                                <div class="card">
                                    <div class="card-header">
                                        <div class="row align-items-center">
                                            <div class="col-8">
                                                <h3 class="mb-0">Add Institutes</h3>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <form action="{{ url('/post/institutesmember') }}" method="POST"
                                            enctype="multipart/form-data">
                                            @csrf
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="input-username">Institutes
                                                            Name</label>
                                                        <input type="text" id="input-email" name="institute_name"
                                                            class="form-control" placeholder="Institutes Name" required>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="form-group">
                                                        <label class="form-control-label"
                                                            for="input-username">Districts</label>
                                                        <input type="text" id="input-email" name="district_name"
                                                            class="form-control" placeholder="District Name">
                                                    </div>
                                                </div>
                                            </div>


                                            <button type="button" class="btn btn-secondary"
                                                data-dismiss="modal">Close</button>
                                            <button type="submit" class="btn btn-success mt-1">Add Institute</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>


        <!-- <div class="container-fluid"> -->
        <div class="row">
            <div class="col-xl-12">
                <div class="card card-stats">
                    <div class="card-header">
                        <div class="row align-items-center">
                            <div class="col-6">
                                <h3 class="mb-0">List of Institutes</h3>
                            </div>

                        </div>
                    </div>
                    <!-- Card body -->
                    <div class="card-body">

                        <table class="table align-items-center table-flush table-responsive-sm" id="myTable">
                            <thead class="thead-light">
                                <tr>
                                    <th>Sl. No</th>
                                    <th>Institute Name</th>
                                    <th>District</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($members as $member)
                                    <tr>
                                        <th scope="row">
                                            <span class="mb-0 text-sm">{{ $loop->iteration }}</span>
                                        </th>
                                        <td>
                                            {{ $member->institute_name }}
                                        </td>
                                        <td>
                                            {{ Str::limit($member->district, 25) }}

                                        </td>

                                        <td>
                                            <a class="btn btn-info btn-sm editCompany" type="button" id="editCompany"
                                                data-toggle="modal" data-target="#editmodal" href="#"
                                                data-id="{{ $member->id }}">Edit</a>
                                            <a href = '{{ url('/post/institutesmember/delete/') }}/{{ $member->id }}'
                                                class="btn btn-danger  btn-sm deleteInstitutes" role="button">Delete</a>
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
                                            <div class="form-group">
                                                <input type="hidden" id="institutes_id" name="institutes_id"
                                                    value="">
                                                <label for="recipient-name" class="col-form-label">Institutes Name:</label>
                                                <input type="text" name="institute_name"
                                                    class="form-control institute_name">
                                                <input type="hidden" name="d_id" class="did">
                                            </div>
                                            <div class="form-group">

                                                <label class="form-control-label" for="input-username">District</label>
                                                <input type="text" name="district_name"
                                                    class="form-control district_name">

                                            </div>

                                            <button type="button" class="btn btn-secondary"
                                                data-dismiss="modal">Close</button>
                                            <button type="submit" class="btn btn-primary"
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




    <script>
        // update model ajax start
        $('body').on('click', '.editCompany', function(event) {

            $('.institute_name').val('');
            $('.district_name').val('');

            var id = $(this).data('id');

            $.ajax({
                url: "{{ route('institutesEdit') }}",
                type: "GET",
                data: {
                    id: id,
                },
                dataType: 'json',
                success: function(returnData) {
                    $('#editmodal').modal('show')
                    $('.institute_name').val(returnData.institute_name)
                    $('.district_name').val(returnData.district)

                    $(".did").val(returnData.id);
                }
            });
        });

        $('body').on('click', '#update_btn', function(event) {
            event.preventDefault()
            var id = $(".did").val();
            var institute_name = $(".institute_name").val();
            var district_name = $(".district_name").val();

            $.ajax({
                url: '{{ route('institutesUpdate') }}',


                type: "POST",
                data: {
                    "_token": "{{ csrf_token() }}",
                    id: id,
                    institute_name: institute_name,
                    district: district_name,

                },
                dataType: 'json',
                success: function(data) {
                    if (data.msg == 1) {
                        window.location.reload(true);

                    }
                }
            });
        });
        // update model ajax end
    </script>


    <script>
        // /Sweetalert on successfull "Delete" buttons start
        $('.deleteInstitutes').on('click', function(event) {
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
