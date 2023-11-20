@extends('layouts.nav')
@section('content')
    <div id="institutes__lists" class="institutes__lists">
        <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='currentColor'/%3E%3C/svg%3E&#34;);"
            aria-label="breadcrumb">
            <div class="container">
                <ol class="breadcrumb ">
                    <li class="breadcrumb-item"><a href="/scert-assam">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Institutes</li>
                </ol>
            </div>
        </nav>
        <div class="container">
            <div class="institues__table">
                <table class="table table-hover table-bordered mb-5">
                    <thead>
                        <tr>
                            <th scope="col">Sl No</th>
                            <th scope="col">TEIS</th>
                            <th scope="col">Institute Name</th>
                            <th scope="col">District</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $institutesDesc = $institutes->sortByDesc('id');
                        @endphp
                        @foreach ($institutesDesc as $institutes)
                            <tr>
                                <td scope="row" class="text-center">{{ $loop->iteration }}</td>
                                <td>{{ $institutes->teis_name }}</td>
                                <td>{{ $institutes->institute_name }}</td>
                                <td>{{ $institutes->district_name }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <main id="main">
    </main>
    <!-- End #main -->
@endsection
