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
                    + Add Contact
                </button>
                <!-- Add Contacts Modal -->
                <div class="modal fade" id="fundsModal" tabindex="-1" role="dialog" aria-labelledby="fundsModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="fundsModalLabel">Add Contact</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form method="post" action="{{ url('/post/manageContact') }}">
                                    @csrf
                                    <div class="mb-3">
                                        <label for="mastermind" class="form-label">Mastermind</label>
                                        <input type="text" class="form-control" id="mastermind" name="mastermind"
                                            required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="profile_pic" class="form-label">Profile Picture</label>
                                        <input type="file" class="form-control" id="profile_pic" name="profile_pic">
                                    </div>
                                    <div class="mb-3">
                                        <label for="name" class="form-label">Name</label>
                                        <input type="text" class="form-control" id="name" name="name" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="designation" class="form-label">Designation</label>
                                        <input type="text" class="form-control" id="designation" name="designation"
                                            required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="address" class="form-label">Address</label>
                                        <input type="text" class="form-control" id="address" name="address" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="district" class="form-label">District</label>
                                        <input type="text" class="form-control" id="district" name="district" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="telephone_number" class="form-label">Telephone Number</label>
                                        <input type="text" class="form-control" id="telephone_number"
                                            name="telephone_number" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="email" class="form-label">email</label>
                                        <input type="email" class="form-control" id="email" name="email" required>
                                    </div>

                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-primary">Add Contact</button>
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
                                <h3 class="mb-0">List of Contact</h3>
                            </div>

                        </div>
                    </div>
                    <!-- Card body -->
                    <div class="card-body">

                        <table class="table align-items-center table-flush table-responsive-sm" id="myTable">
                            <thead class="thead-light">
                                <tr>
                                    <th>Sl. No</th>
                                    <th>Mastermind</th>
                                    <th>Profile Pic</th>
                                    <th>Name</th>
                                    <th>Designation</th>
                                    <th>Address</th>
                                    <th>District</th>
                                    <th>Telephone Number</th>
                                    <th>Email</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($contacts as $contact)
                                    <tr>
                                        <th scope="row">
                                            <span class="mb-0 text-sm">{{ $loop->iteration }}</span>
                                        </th>
                                        <td>
                                            {{ Str::limit($contact->mastermind, 10) }}
                                        </td>
                                        <td>
                                            @if ($contact->profile_pic)
                                                <img src="{{ asset($contact->profile_pic) }}" />
                                            @else
                                                <img src="{{ asset('assets/img/avatar.png') }}" />
                                            @endif
                                        </td>

                                        <td>
                                            {{ Str::limit($contact->name, 10) }}
                                        </td>

                                        <td>
                                            {{ Str::limit($contact->designation, 10) }}
                                        </td>

                                        <td>
                                            {{ Str::limit($contact->address, 10) }}
                                        </td>

                                        <td>
                                            {{ Str::limit($contact->district, 10) }}
                                        </td>

                                        <td>
                                            {{ $contact->telephone_number }}
                                        </td>

                                        <td>
                                            {{ Str::limit($contact->email, 10) }}
                                        </td>

                                        <td>
                                            <button class="btn btn-info btn-sm editContact" data-toggle="modal"
                                                data-target="#editmodal" data-id="{{ $contact->id }}"
                                                data-mastermind="{{ $contact->mastermind }}"
                                                data-name="{{ $contact->name }}"
                                                data-designation="{{ $contact->designation }}"
                                                data-address="{{ $contact->address }}"
                                                data-district="{{ $contact->district }}"
                                                data-telephone_number="{{ $contact->telephone_number }}"
                                                data-email="{{ $contact->email }}">Edit</button>

                                            <a href="{{ url('/admin/manage_contact/delete/' . $contact->id) }}"
                                                class="btn btn-danger btn-sm deleteContact" role="button">Delete</a>

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
                                        <form method="post" action="{{ route('postManageContactUpdate') }}"
                                            id="editcontactdata">
                                            @csrf
                                            <input type="hidden" name="id" id="contactIdEdit">
                                            <!-- Add hidden input for Contact ID -->
                                            <h3 class="mb-3">Edit Contact</h3>
                                            <div class="mb-3">
                                                <label for="MastermindEdit" class="form-label">Mastermind</label>
                                                <input type="text" class="form-control" id="MastermindEdit"
                                                    name="MastermindEdit" required>
                                            </div>
                                            <div class="mb-3">
                                                <label for="NameEdit" class="form-label">Name</label>
                                                <input type="text" class="form-control" id="NameEdit"
                                                    name="NameEdit" required>
                                            </div>
                                            <div class="mb-3">
                                                <label for="DesignationEdit" class="form-label">Designation</label>
                                                <input type="text" class="form-control" id="DesignationEdit"
                                                    name="DesignationEdit" required>
                                            </div>
                                            <div class="mb-3">
                                                <label for="AddressEdit" class="form-label">Address</label>
                                                <input type="text" class="form-control" id="AddressEdit"
                                                    name="AddressEdit" required>
                                            </div>
                                            <div class="mb-3">
                                                <label for="DistrictEdit" class="form-label">District</label>
                                                <input type="text" class="form-control" id="DistrictEdit"
                                                    name="DistrictEdit" required>
                                            </div>
                                            <div class="mb-3">
                                                <label for="TelephoneEdit" class="form-label">Telephone Number</label>
                                                <input type="text" class="form-control" id="TelephoneEdit"
                                                    name="TelephoneEdit" required>
                                            </div>
                                            <div class="mb-3">
                                                <label for="EmailEdit" class="form-label">Email</label>
                                                <input type="text" class="form-control" id="EmailEdit"
                                                    name="EmailEdit" required>
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
            // ---------------------Add Contact Modal---------------------
            $('#fundsModal').on('show.bs.modal', function(e) {
                // Clear the input field when modal is shown
                $('#mastermind').val('');
                $('#name').val('');
                $('#designation').val('');
                $('#address').val('');
                $('#district').val('');
                $('#telephone_number').val('');
                $('#email').val('');
            });
            // ---------------------Add Contact Modal---------------------
        });

        // Edit Contact Modal
        $('body').on('click', '.editContact', function(event) {
            event.preventDefault();
            $('#editmodal').modal('show');

            // Get the contact id, name, designation, address, district, telephone_number, email from the data attributes
            var id = $(this).data('id');
            var mastermind = $(this).data('mastermind');
            var name = $(this).data('name');
            var designation = $(this).data('designation');
            var address = $(this).data('address');
            var district = $(this).data('district');
            var telephone_number = $(this).data('telephone_number');
            var email = $(this).data('email');

            // Set the Contact ID, name, designation, address, district, telephone_number, email in the modal input fields
            $('#contactIdEdit').val(id);
            $('#MastermindEdit').val(mastermind);
            $('#NameEdit').val(name);
            $('#DesignationEdit').val(designation);
            $('#AddressEdit').val(address);
            $('#DistrictEdit').val(district);
            $('#TelephoneEdit').val(telephone_number);
            $('#EmailEdit').val(email);
        });
    </script>

    <script>
        // /Sweetalert on successfull "Delete" buttons start
        $('.deleteContact').on('click', function(event) {
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
