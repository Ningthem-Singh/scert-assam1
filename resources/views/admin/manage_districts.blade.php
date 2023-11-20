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
                    background: "linear-gradient(to left, #00b09b, #96c93d)",
                }
            }).showToast();
        </script>
    @endif

    <!-- Page content -->
    <div class="container-fluid ">
        <div class="row">
            <div class="col-xl-12">
                <button type="button" class="btn btn-primary mb-4 float-end" data-bs-toggle="modal"
                    data-bs-target="#fundsModal">
                    + Add Districts
                </button>
                <!-- Add Districts Modal -->
                <div class="modal fade" id="fundsModal" tabindex="-1" role="dialog" aria-labelledby="fundsModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="fundsModalLabel">Add District</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form method="post" action="{{ url('/post/master_districtsmember') }}">
                                    @csrf
                                    <div class="mb-3">
                                        <label for="districtName" class="form-label">District Name</label>
                                        <input type="text" class="form-control" id="districtName" name="district_name"
                                            required>
                                    </div>
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-primary">Add District</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>


        <div class="row">
            <div class="col-xl-12">
                <div class="card card-stats">
                    <div class="card-header" style="background:white!important;box-shadow:none!important">
                        <div class="row align-items-center">
                            <div class="col-6">
                                <h3 class="mb-0">List of Districts</h3>
                            </div>

                        </div>
                    </div>
                    <!-- Card body -->
                    <div class="card-body">

                        <table class="table align-items-center table-flush table-responsive-sm" id="myTable">
                            <thead class="thead-light">
                                <tr>
                                    <th>Sl. No</th>
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
                                            {{ $member->district_name }}
                                        </td>

                                        <td>
                                            <a class="btn btn-info btn-sm editDistrict" type="button" data-toggle="modal"
                                                data-target="#editmodal" href="#" data-id="{{ $member->id }}"
                                                data-district="{{ $member->district_name }}">Edit</a>

                                            <a href="{{ url('/post/master_districtsmember/delete/' . $member->id) }}"
                                                class="btn btn-danger btn-sm deleteDistricts" role="button"
                                                data-method="delete" data-token="{{ csrf_token() }}">Delete</a>

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
                                        <form method="post" action="{{ route('master_districtUpdate') }}"
                                            id="editdistrictdata">
                                            @csrf
                                            <input type="hidden" name="id" id="districtIdEdit">
                                            <!-- Add hidden input for district ID -->
                                            <h3 class="mb-3">Edit District</h3>
                                            <div class="mb-3">
                                                <label for="districtNameEdit" class="form-label">District Name</label>
                                                <input type="text" class="form-control" id="districtNameEdit"
                                                    name="districtNameEdit" required>
                                            </div>

                                            <button type="button" class="btn btn-secondary mt-3"
                                                data-bs-dismiss="modal">Close</button>
                                            <button type="submit" class="btn btn-primary mt-3"
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
        $(document).ready(function() {
            // ---------------------Add Districts Modal---------------------
            $('#fundsModal').on('show.bs.modal', function(e) {
                // Clear the input field when modal is shown
                $('#districtName').val('');
            });
            // ---------------------Add Districts Modal---------------------
        });


        // Edit District Modal
        $('body').on('click', '.editDistrict', function(event) {
            event.preventDefault();
            $('#editmodal').modal('show');

            // Get the district id and name from the data attributes
            var id = $(this).data('id');
            var districtName = $(this).data('district');

            // Set the district ID and name in the modal input fields
            $('#districtIdEdit').val(id);
            $('#districtNameEdit').val(districtName);
        });
    </script>


    <script>
        // /Sweetalert on successful "Delete" buttons start
        $('.deleteDistricts').on('click', function(event) {
            event.preventDefault(); // Prevent the default behavior (navigating to the URL)

            var deleteUrl = $(this).attr('href'); // Get the URL to delete
            var csrfToken = $(this).data('token'); // Get the CSRF token from data attribute

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
                    // Try to delete the district using DELETE method
                    $.ajax({
                        url: deleteUrl,
                        method: 'DELETE',
                        headers: {
                            'X-CSRF-TOKEN': csrfToken
                        },
                        success: function(response) {
                            Swal.fire({
                                title: 'Deleted!',
                                text: 'District has been deleted.',
                                icon: 'success'
                            }).then(() => {
                                window.location.reload();
                            });
                        },
                        error: function(xhr, status, error) {
                            // Handle errors
                            if (xhr.status == 500) {
                                Swal.fire({
                                    title: 'Cannot delete!',
                                    text: 'This district is associated with other records and cannot be deleted.',
                                    icon: 'error'
                                }).then(() => {
                                    window.location.reload();
                                });
                            } else {
                                Swal.fire({
                                    title: 'Error!',
                                    text: 'An error occurred while deleting the district.',
                                    icon: 'error'
                                }).then(() => {
                                    window.location.reload();
                                });
                            }
                        }
                    });
                }
            });
        });
        // /Sweetalert on successful "Delete" buttons end
    </script>
@endsection
