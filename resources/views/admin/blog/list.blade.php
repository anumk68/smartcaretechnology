@extends('admin.layouts.app')

@section('content')
    <main class="page-content">
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
            <div class="breadcrumb-title pe-3">Blog</div>
            <div class="ps-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0 p-0">
                        <li class="breadcrumb-item"><a href="javascript:void(0);"><i class="bx bx-home-alt"></i></a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Blog List</li>
                    </ol>
                </nav>
            </div>
            <div class="ms-auto">
                <div class="btn-group">
                    <a href="{{ route('blog.create') }}"><button type="button" class="btn btn-primary">Create
                            blog</button></a>
                </div>
            </div>
        </div>

        <div class="card">
            <div class="card-body">
                <div class="d-flex align-items-center">
                    <h5 class="mb-0">Blog</h5>
                </div>
                <div class="table-responsive mt-3">
                    <table id="example" class="table table-striped table-bordered" style="width:100%">
                        <thead>
                            <tr>
                                <th>Sr No.</th>
                                <th>Title</th>
                                <th>Category</th>
                                <th>Short Description</th>
                                <th>Status</th>
                                <th>Created date</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($blogs as $key => $blog)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>
                                        <div class="d-flex align-items-center gap-3 cursor-pointer">
                                            <div class="text-wrap" style="min-width: 150px; max-width: 200px;">
                                                <p class="mb-0">{{ $blog->title }}</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        @if ($blog->category != null)
                                            {{ $blog->category->category_name }}
                                        @else
                                            --
                                        @endif
                                    </td>
                                    <td>
                                        @php
                                            $words = explode(' ', $blog->short_description);
                                            $displayText = implode(' ', array_slice($words, 0, 20));
                                            $isLongText = count($words) > 20;
                                        @endphp
                                        <div class="text-wrap" style="min-width: 200px; max-width: 300px;">
                                            <p>{{ $displayText }}{{ $isLongText ? '...' : '' }}</p>
                                        </div>
                                    </td>
                                    <td>
                                        @if ($blog->status === 'active')
                                            <span class="badge bg-success">Active</span>
                                        @elseif($blog->status === 'inactive')
                                            <span class="badge bg-danger">Inactive</span>
                                        @else
                                            <span class="badge bg-secondary">{{ ucfirst($blog->status) }}</span>
                                        @endif
                                    </td>

                                    <td>{{ $blog->created_at->format('d M Y, h:i A') }}</td>

                                    <td>
                                        <div class="table-actions d-flex align-items-center gap-3 fs-6">
                                            <a href="{{ route('blog.edit', $blog->id) }}" target=""
                                                class="text-primary" data-bs-toggle="tooltip" data-bs-placement="bottom"
                                                title="Edit"><i class="bi bi-pencil-fill"></i></a>
                                            <form action="{{ route('blog.destroy', $blog->id) }}" method="POST"
                                                class="delete-form" style="display:inline;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="text-danger border-0 bg-transparent"
                                                    data-bs-toggle="tooltip" data-bs-placement="bottom" title="Delete">
                                                    <i class="bi bi-trash-fill"></i>
                                                </button>
                                            </form>
                                        </div>
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
            document.querySelectorAll('.delete-form').forEach(function(form) {
                form.addEventListener('submit', function(e) {
                    e.preventDefault();

                    Swal.fire({
                        title: 'Are you sure?',
                        text: "You won't be able to revert this!",
                        icon: 'warning',
                        showCancelButton: true,
                        confirmButtonColor: '#3085d6',
                        cancelButtonColor: '#d33',
                        confirmButtonText: 'Yes, delete it!'
                    }).then((result) => {
                        if (result.isConfirmed) {
                            form.submit();
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
