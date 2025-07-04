@extends('admin.layouts.app')
@section('content')
    <!--start content-->
    <main class="page-content">
        <!--breadcrumb-->
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
            <div class="breadcrumb-title pe-3">Category</div>
            <div class="ps-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0 p-0">
                        <li class="breadcrumb-item"><a href="javascript:void(0);"><i class="bx bx-home-alt"></i></a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Categories</li>
                    </ol>
                </nav>
            </div>

        </div>
        <!--end breadcrumb-->

        <div class="card">
            <div class="card-header py-3">
                <h6 class="mb-0">Add Blog Category</h6>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-12 col-lg-4 d-flex">
                        <div class="card border shadow-none w-100">
                            <div class="card-body">
                                <form action="{{ route('blog-category.store') }}" method="POST" class="row g-3">
                                    @csrf
                                    <div class="col-12">
                                        <label class="form-label">Name</label>
                                        <input type="text" class="form-control" name="category_name"
                                            placeholder="Category name">
                                    </div>
                                    <div class="col-12">
                                        <label class="form-label">Slug</label>
                                        <input type="text" class="form-control" name="slug" placeholder="Slug name">
                                    </div>


                                    <div class="col-12">
                                        <div class="d-grid">
                                            <button class="btn btn-primary">Add Category</button>
                                        </div>
                                    </div>
                                </form>

                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-lg-8 d-flex">
                        <div class="card border shadow-none w-100">
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table align-middle">
                                        <thead class="table-light">
                                            <tr>
                                                <th>ID</th>
                                                <th>Name</th>
                                                <th>Slug</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                            @forelse ($categories as $key=>$categorie)

                                                <tr>
                                                    <td>{{ $key + 1 }}</td>
                                                    <td>{{ $categorie->category_name }}</td>
                                                    <td>{{ $categorie->slug }}</td>
                                                    <td>
                                                        <div class="d-flex align-items-center gap-3 fs-6">
                                                            <a href="{{ route('blog-category.edit', $categorie->id) }}"
                                                                class="text-warning" data-bs-toggle="tooltip"
                                                                data-bs-placement="bottom" title=""
                                                                data-bs-original-title="Edit info" aria-label="Edit"><i
                                                                    class="bi bi-pencil-fill" title="Edit"></i></a>
                                                            <form
                                                                action="{{ route('blog-category.destroy', $categorie->id) }}"
                                                                method="POST" class="delete-form" style="display:inline;"
                                                                onsubmit="return confirm('Are you sure you want to delete this category?');">
                                                                @csrf
                                                                @method('DELETE')
                                                                <button type="submit"
                                                                    class="text-danger border-0 bg-transparent"
                                                                    data-bs-toggle="tooltip" data-bs-placement="bottom"
                                                                    title="Delete">
                                                                    <i class="bi bi-trash-fill"></i>
                                                                </button>
                                                            </form>

                                                        </div>
                                                    </td>
                                                </tr>
                                            @empty
                                                <td >No categories available</td>
                                            @endforelse


                                        </tbody>
                                    </table>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </main>
@endsection

@section('scripts')
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
