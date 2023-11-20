@extends('layouts.sidenav')

@section('sidenav')
    <style>
        .scrolling-text {
            white-space: nowrap;
            overflow: hidden;
            animation: marquee 20s linear infinite;
        }

        @keyframes marquee {
            0% {
                transform: translateX(100%);
            }

            100% {
                transform: translateX(-100%);
            }
        }
    </style>

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
                    background: "radial-gradient(to left, #009245 , #FCEE21)",
                }
            }).showToast();
        </script>
    @endif

    @if (Session::has('error'))
        <script>
            // Display a toast alert for error message
            Toastify({
                text: "{{ Session::get('error') }}",
                duration: 3000,
                close: true,
                gravity: "top", // `top` or `bottom`
                position: "center", // `left`, `center` or `right`
                stopOnFocus: true, // Prevents dismissing of toast on hover
                style: {
                    background: "radial-gradient(to left, #FF512F , #DD2476)",
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
                    + Add Institutes
                </button>
                <div class="modal fade" id="fundsModal" tabindex="-1" role="dialog" aria-labelledby="fundsModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">

                            <div class="modal-body">
                                <div class="card">
                                    <div class="card-header" style="background:white!important;box-shadow:none!important">
                                        <div class="row align-items-center">
                                            <div class="col-8">
                                                <h3 class="mb-0">
                                                    Add Institutes</h3>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <form action="{{ url('/post/institutesmember') }}" method="POST"
                                            enctype="multipart/form-data">
                                            @csrf
                                            <div class="row">
                                                <!-- TEIS Name Dropdown -->
                                                <div class="col-lg-12">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="teis">TEIS Name</label>
                                                        <select id="teis" name="teis"
                                                            class="form-control form-select" required>
                                                            <option value="" disabled selected>Select TEIS Name</option>
                                                            @foreach ($teisNames as $teisId => $teisName)
                                                                <option value="{{ $teisId }}">{{ $teisName }}
                                                                </option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row mt-2">
                                                <div class="col-lg-12">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="institute_name">Institutes
                                                            Name</label>
                                                        <input type="text" id="institute_name" name="institute_name"
                                                            class="form-control" placeholder="Institutes Name" required>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row mt-2">
                                                <!-- District Dropdown -->
                                                <div class="col-lg-12">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="district">District</label>
                                                        <select id="district" name="district"
                                                            class="form-control form-select" required>
                                                            <option value="" disabled selected>Select District</option>
                                                            @foreach ($districts as $districtId => $districtName)
                                                                <option value="{{ $districtId }}">{{ $districtName }}
                                                                </option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>


                                            <button type="button" class="btn btn-secondary mt-3"
                                                data-bs-dismiss="modal">Close</button>
                                            <button type="submit" class="btn btn-success mt-3">Add Institute</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>


        <div class="row">
            <div class="col-xl-12">

                <div class="scrolling-text"><b>This also acts as website institute and master institute</b></div>

                <div class="card card-stats">
                    <div class="card-header" style="background:white!important;box-shadow:none!important">
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
                                    <th>TEIS</th>
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
                                            {{ $member->teis_name }}
                                        </td>
                                        <td>
                                            {{ $member->institute_name }}
                                        </td>
                                        <td>
                                            {{ $member->district_name }}
                                        </td>

                                        <td>
                                            <button class="btn btn-info btn-sm editInstitute" data-toggle="modal"
                                                data-target="#editmodal" data-id="{{ $member->id }}"
                                                data-district="{{ $member->district_name }}">Edit</button>

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
                                            <h3 class="mb-3">Edit Institutes</h3>
                                            <div class="form-group">
                                                <label class="form-control-label mb-2" for="teis">TEIS
                                                    Name</label>
                                                <select id="teisDropdown" name="teis" class="form-control form-select"
                                                    required>
                                                    
                                                    @foreach ($teisNames as $teisId => $teisName)
                                                    <option value="{{ $teisId }}">{{ trim($teisName) }}</option>
                                                    @endforeach
                                                </select>


                                                <label for="institute_name" class="col-form-label">Institutes
                                                    Name:</label>
                                                <input type="text" name="institute_name"
                                                    class="form-control institute_name">
                                                <input type="hidden" name="d_id" class="did">
                                            </div>

                                            <div class="form-group">
                                                <label class="form-control-label my-2" for="district">District</label>
                                                <select id="districtDropdown" name="district"
                                                    class="form-control form-select" required>
                                                    
                                                    @foreach ($districts as $districtId => $districtName)
                                                        <option value="{{ $districtId }}">{{ $districtName }}</option>
                                                    @endforeach
                                                </select>
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
        // update model ajax start
        $('body').on('click', '.editInstitute', function(event) {
            event.preventDefault();

            var id = $(this).data('id');

            $.ajax({
                url: "{{ route('institutesEdit') }}",
                type: "GET",
                data: {
                    id: id,
                },
                dataType: 'json',
                success: function(returnData) {
                    console.log('TEIS Id:', returnData.institutes.teis);
                    console.log('TEIS:', returnData.institutes.teis_name);
                    console.log('District Id:', returnData.institutes.district);
                    console.log('District:', returnData.institutes.district_name);
                    console.log('did:', returnData.institutes.id);
                    console.log('----------------------------------');
                    console.log('TEIS Dropdown Options:', $('#teisDropdown option').map(function() {
                        return $(this).text();
                    }).get());

                    console.log('District Dropdown Options:', $('#districtDropdown option').map(
                        function() {
                            return $(this).text();
                        }).get());
                    console.log('-----------------------------------');

                    $('#editmodal').modal('show');
                    $('.institute_name').val(returnData.institutes.institute_name);

                    // Select the TEIS option
                    $('#teisDropdown option').filter(function() {
                        return $(this).text() == returnData.institutes.teis_name;
                    }).prop('selected', true);

                    // Select the District option
                    $('#districtDropdown option').filter(function() {
                        return $(this).text() == returnData.institutes.district_name;
                    }).prop('selected', true);

                    $(".did").val(returnData.institutes.id);
                }
            });
        });
        // update model ajax end


        $('body').on('click', '#update_btn', function(event) {
            event.preventDefault()
            var id = $(".did").val();
            var institute_name = $(".institute_name").val();
            var teis_name = $("#teisDropdown").val();
            var district_name = $("#districtDropdown").val();

            $.ajax({
                url: '{{ route('institutesUpdate') }}',
                type: "POST",
                data: {
                    "_token": "{{ csrf_token() }}",
                    id: id,
                    institute_name: institute_name,
                    district: district_name,
                    teis: teis_name,

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
