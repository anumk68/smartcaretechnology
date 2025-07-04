@extends('admin.layouts.app')


@section('content')
    <main class="page-content">
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
            <div class="breadcrumb-title pe-3">Contacts</div>
            <div class="ps-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0 p-0">
                        <li class="breadcrumb-item"><a href="javascript:void(0);"><i class="bx bx-home-alt"></i></a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Contacts</li>
                    </ol>
                </nav>
            </div>

        </div>

        <div class="card">
            <div class="card-body">
                <div class="d-flex align-items-center">
                    <h5 class="mb-0">Contact</h5>
                </div>
                <div class="table-responsive mt-3">
                    <table id="example" class="table table-striped table-bordered" style="width:100%">
                        <thead>
                            <tr>
                                <th>Sr No.</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Phone no.</th>
                                <th>Subject</th>
                                <th>Message</th>
                                <th>Date</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($contact as $key => $data)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>
                                        <div class="text-wrap" style="min-width: 150px; max-width: 200px;">
                                            <p class="mb-0">{{ ucfirst($data->name) ?? '-' }}</p>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="text-wrap" style="min-width: 150px; max-width: 200px;">
                                            <p class="mb-0">{{ $data->email ?? '-'}}</p>
                                        </div>
                                    </td>
                                    <td>
                                        <p class="mb-0">{{ $data->phone_no ?? '-' }}</p>
                                    </td>
                                    <td>
                                        <p class="mb-0">{{ $data->subject ?? '-'}}</p>
                                    </td>

                                    <td>
                                        <div class="text-wrap" style="min-width: 150px; max-width: 200px;">
                                            <p class="mb-0">{{ $data->message ?? '-' }}</p>
                                            <div>
                                    </td>
                                    <td>{{ $data->created_at->format('d M Y, h:i A') }}</td>
                                    </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </main>
@endsection

@section('heads')
    <link href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css" rel="stylesheet">
@endsection

@section('scripts')
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.all.min.js"></script>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        document.querySelectorAll('.status-toggle').forEach(function (checkbox) {
            checkbox.addEventListener('change', function (e) {
                e.preventDefault();
                const form = this.closest('form');

                Swal.fire({
                    title: 'Are you sure?',
                    text: "You want to change the status?",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#28a745',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Yes, change it!'
                }).then((result) => {
                    if (result.isConfirmed) {
                        let input = document.createElement('input');
                        input.type = 'hidden';
                        input.name = 'status';
                        input.value = checkbox.checked ? 'active' : 'inactive';
                        form.appendChild(input);

                        form.submit();
                    } else {
                        checkbox.checked = !checkbox.checked;
                    }
                });
            });
        });
    });
</script>

    @if (session('success'))
        <script>
            Swal.fire({
                icon: 'success',
                title: 'Success!',
                text: '{{ session('success') }}',
                showConfirmButton: false,
                timer: 2000
            });
        </script>
    @endif
@endsection
