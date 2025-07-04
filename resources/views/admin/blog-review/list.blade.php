@extends('admin.layouts.app')


@section('content')
    <main class="page-content">
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
            <div class="breadcrumb-title pe-3">Review</div>
            <div class="ps-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0 p-0">
                        <li class="breadcrumb-item"><a href="javascript:void(0);"><i class="bx bx-home-alt"></i></a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Blog Review's</li>
                    </ol>
                </nav>
            </div>

        </div>

        <div class="card">
            <div class="card-body">
                <div class="d-flex align-items-center">
                    <h5 class="mb-0">Review's</h5>
                </div>
                <div class="table-responsive mt-3">
                    <table id="example" class="table table-striped table-bordered" style="width:100%">
                        <thead>
                            <tr>
                                <th>Sr No.</th>
                                <th>Blog</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Rating</th>
                                <th>Comment</th>
                                <th>Date</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($reviews as $key => $review)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>
                                        <div class="text-wrap" style="min-width: 150px; max-width: 200px;">
                                            <p class="mb-0">{{ $review->blog->title }}</p>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="text-wrap" style="min-width: 150px; max-width: 200px;">
                                            <p class="mb-0">{{ ucfirst($review->name) }}</p>
                                        </div>
                                    </td>
                                    <td>
                                        <p class="mb-0">{{ $review->email }}</p>
                                    </td>
                                    <td>
                                        @for ($i = 1; $i <= 5; $i++)
                                            @if ($i <= $review->rating)
                                                <span style="color: #f1c40f;">&#9733;</span>
                                            @else
                                                <span style="color: #ccc;">&#9734;</span>
                                            @endif
                                        @endfor
                                    </td>

                                    <td>
                                        <div class="text-wrap" style="min-width: 150px; max-width: 200px;">
                                            <p class="mb-0">{{ $review->comment }}</p>
                                            <div>
                                    </td>
                                    <td>{{ $review->created_at->format('d M Y, h:i A') }}</td>

                                    <td>

                                        <form action="{{ route('review.toggleStatus', $review->id) }}" method="POST"
                                            class="status-toggle-form">
                                            @csrf
                                            @method('PATCH')
                                            <div class="form-check form-switch">
                                                <input class="form-check-input status-toggle" type="checkbox"
                                                    {{ $review->status === 'active' ? 'checked' : '' }}>
                                            </div>
                                        </form>

                                        @if ($review->status === 'active')
                                            <span class="badge bg-success">Active</span>
                                        @elseif($review->status === 'inactive')
                                            <span class="badge bg-danger">Inactive</span>
                                        @else
                                            <span class="badge bg-secondary">{{ ucfirst($review->status) }}</span>
                                        @endif

                                    </td>


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
        document.addEventListener('DOMContentLoaded', function() {
            document.querySelectorAll('.status-toggle').forEach(function(checkbox) {
                checkbox.addEventListener('change', function(e) {
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
