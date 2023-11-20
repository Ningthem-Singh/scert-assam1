@extends('layouts.sidenav')

@section('sidenav')
    @if (Session::has('success'))
        <script>
            Toastify({
                text: "{{ Session::get('success') }}",
                duration: 3000,
                close: true,
                gravity: "top",
                position: "center",
                stopOnFocus: true,
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
                    + Add Notifications
                </button>
                <!-- Add Notifications Modal -->
                <div class="modal fade" id="fundsModal" tabindex="-1" role="dialog" aria-labelledby="fundsModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="fundsModalLabel">Add Notification</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form method="post" action="{{ url('/post/master_notificationmember') }}">
                                    @csrf
                                    <div class="mb-3">
                                        <label for="notification_type" class="form-label">Notification Type</label>
                                        <select class="form-select" id="notification_type" name="notification_type"
                                            required>
                                            <option value="" disabled selected>Select Type</option>

                                            <option value="1">Notice</option>
                                            <option value="2">Career</option>
                                            <option value="3">Report</option>
                                        </select>
                                    </div>

                                    <div class="mb-3">
                                        <label for="notification_description" class="form-label">Notification Name</label>
                                        <textarea class="form-control" id="notification_description" name="notification_description" rows="5" required></textarea>
                                    </div>
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-primary">Add Notification</button>
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
                                <h3 class="mb-0">List of Notifications</h3>
                            </div>

                        </div>
                    </div>
                    <!-- Card body -->
                    <div class="card-body">

                        <table class="table align-items-center table-flush table-responsive-sm" id="myTable">
                            <thead class="thead-light">
                                <tr>
                                    <th>Sl. No</th>
                                    <th>Notification Type</th>
                                    <th>Notification Description</th>
                                    <th>Notification Date</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($notifications as $notification)
                                    <tr>
                                        <th scope="row">
                                            <span class="mb-0 text-sm">{{ $loop->iteration }}</span>
                                        </th>
                                        <td>
                                            @if ($notification->notification_type == 1)
                                                Notice
                                            @elseif($notification->notification_type == 2)
                                                Career
                                            @elseif($notification->notification_type == 3)
                                                Report
                                            @else
                                                Unknown Type
                                            @endif
                                        </td>


                                        <td>
                                            {{ Str::limit($notification->notification_description, 60) }}
                                        </td>
                                        <td>
                                            {{ date('d-m-Y | h:i a', strtotime($notification->updated_at)) }}
                                        </td>

                                        <td>
                                            <button class="btn btn-info btn-sm editNotification" data-toggle="modal"
                                                data-target="#editmodal" data-id="{{ $notification->id }}"
                                                data-type="{{ $notification->notification_type }}"
                                                data-description="{{ $notification->notification_description }}">
                                                Edit
                                            </button>


                                            <a href = '{{ url('/admin/manage-notifications/delete/') }}/{{ $notification->id }}'
                                                class="btn btn-danger  btn-sm deleteNotification" role="button">Delete</a>
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
                                        <form method="post" action=" " id="editnotificationdata">
                                            @csrf
                                            <input type="hidden" name="id" id="notificationIdEdit">

                                            <h3 class="mb-3">Edit Notification</h3>
                                            <div class="mb-3">
                                                <label for="NotificationTypeEdit" class="form-label">Notification
                                                    Type</label>

                                                <select class="form-select" id="NotificationTypeEdit"
                                                    name="NotificationTypeEdit" required>
                                                    <option value="1">Notice</option>
                                                    <option value="2">Career</option>
                                                    <option value="3">Report</option>
                                                </select>
                                            </div>
                                            <div class="mb-3">
                                                <label for="NotificationDescriptionEdit" class="form-label">Notification
                                                    Description</label>
                                                <textarea class="form-control" id="NotificationDescriptionEdit" name="NotificationDescriptionEdit" rows="5"
                                                    required></textarea>
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
            // ---------------------Add Description Modal---------------------
            $('#fundsModal').on('show.bs.modal', function(e) {
                // Clear the input field when modal is shown
                // $('#notification_type').val('');
                $('#notification_description').val('');
            });
            // ---------------------Add Description Modal---------------------
        });

        $('body').on('click', '.editNotification', function(event) {
            event.preventDefault();
            $('#editmodal').modal('show');

            var id = $(this).data('id');
            var notificationType = $(this).data('type');
            var notificationDescription = $(this).data('description');

            $('#notificationIdEdit').val(id);
            $('#NotificationTypeEdit').val(notificationType);
            $('#NotificationDescriptionEdit').val(notificationDescription);
        });


        $('#editnotificationdata').on('submit', function(event) {
            event.preventDefault();

            var formData = $(this).serialize();
            var updateUrl = '{{ route('update_notification') }}';

            $.ajax({
                url: updateUrl,
                type: 'POST',
                data: formData,
                dataType: 'json',
                success: function(data) {
                    if (data.message) {
                        Swal.fire({
                            title: 'Updated!',
                            text: data.message,
                            icon: 'success'
                        }).then(() => {
                            window.location.reload();
                        });
                    }
                },
                error: function(error) {
                    console.error('Update Error:', error);
                }
            });
        });


        $('.deleteNotification').on('click', function(event) {
            event.preventDefault();
            var deleteUrl = $(this).attr('href');

            Swal.fire({
                title: 'Are you sure?',
                text: 'You won\'t be able to revert this!',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonText: 'Yes, delete it!',
                cancelButtonText: 'Cancel'
            }).then((result) => {
                if (result.isConfirmed) {
                    window.location.href = deleteUrl;
                }
            });
        });
    </script>
@endsection
