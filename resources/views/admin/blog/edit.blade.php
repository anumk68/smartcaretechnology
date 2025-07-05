@extends('admin.layouts.app')
<style>
    p.ck-placeholder {
        height: 150px !important;
    }

    img.w-100.border-radius-lg.shadow-sm {
        height: 78px;
        width: 15% !important;
    }
</style>
@section('content')
    <div class="page-wrapper">
        <div class="page-content">
            <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
                <div class="breadcrumb-title pe-3">Blogs</div>
                <div class="ps-3">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb mb-0 p-0">
                            <li class="breadcrumb-item"><a href=""><i class="bx bx-home-alt"></i></a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">Blog Update</li>
                        </ol>
                    </nav>
                </div>

            </div>

            <h6 class="mb-0 text-uppercase">Blog Update</h6>
            <hr />

            <div class="card">

                <div class="card-body">
                    <form id="add_form" class="form-horizontal" action="{{ route('blog.update', $blog->id) }}"
                        method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group row">
                            <label class="col-md-3 col-form-label">
                                Blog Title
                                <span class="text-danger">*</span>
                            </label>
                            <div class="col-md-9">
                                <input type="text" placeholder="Blog Title" onkeyup="makeSlug(this.value)" id="title"
                                    name="title" value="{{ $blog->title }}" class="form-control" required>
                            </div>
                        </div><br>
                        <div class="form-group row">
                            <label class="col-md-3 col-form-label">Slug
                                <small>(https://printerithelp.com/blogs)</small></label>
                            <div class="col-md-9">
                                <input type="text" placeholder="Slug" name="slug" id="slug" class="form-control"
                                    value="{{ $blog->slug }}" required disabled>
                                @error('slug')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div><br>
                        <div class="form-group row" id="category">
                            <label class="col-md-3 col-from-label">
                                Category
                                <span class="text-danger">*</span>
                            </label>
                            <div class="col-md-9">
                                <select class="form-control aiz-selectpicker" name="category_id" id="category_id"
                                    data-live-search="true" required>
                                    <option value="">Select One</option>
                                    @foreach ($blog_categories as $category)
                                        <option @if ($blog->category_id == $category->id) {{ 'selected' }} @endif
                                            value="{{ $category->id }}">
                                            {{ $category->category_name }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                        </div><br>

                        <div class="form-group row">
                            <label class="col-md-3 col-form-label">Banner Alt
                                <span class="text-danger">*</span></label>
                            <div class="col-md-9">
                                <input type="text" placeholder="Banner Alt" name="banner_alt"
                                    value="{{ $blog->banner_alt }}" id="slug" class="form-control">
                            </div>
                        </div><br>


                        <div class="form-group row">
                            <label class="col-md-3 col-form-label" for="signinSrEmail">
                                Banner
                                {{-- <small>(1300x650)</small> --}}
                            </label>
                            <div class="col-md-9">
                                <div class="input-group" data-toggle="aizuploader" data-type="image">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text bg-soft-secondary font-weight-medium">
                                            <input id="fancy-file-upload" type="file" name="banner"
                                                value="{{ asset($blog->banner) }}" class="selected-files">
                                        </div>

                                    </div>

                                </div>
                                <div class="file-preview box sm">
                                    <img src="{{ asset('public/' . $blog->banner) }}" alt="bruce"
                                        class="w-100 border-radius-lg shadow-sm">
                                </div>
                            </div>
                        </div><br>

                        <div class="form-group row">
                            <label class="col-md-3 col-form-label">
                                Short Description
                                <span class="text-danger">*</span>
                            </label>
                            <div class="col-md-9">
                                <textarea name="short_description" rows="5" class="form-control">{{ $blog->short_description }}</textarea>
                            </div>
                        </div><br>

                        <div class="form-group row">
                            <label class="col-md-3 col-from-label">
                                Description
                            </label>
                            <div class="col-md-9">

                                <textarea class="form-control" id="editor" rows="3" name="description">{{ $blog->description }}</textarea>
                            </div>
                        </div><br>

                        <div class="form-group row">
                            <label class="col-md-3 col-form-label">Meta Title</label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" name="meta_title"
                                    value="{{ $blog->meta_title }}" placeholder="Meta Title">
                            </div>
                        </div><br>

                        <div class="form-group row">
                            <label class="col-md-3 col-form-label" for="signinSrEmail">
                                Meta Image
                                <small>(824*324)</small>
                            </label>
                            <div class="col-md-9">
                                <div class="input-group" data-toggle="aizuploader" data-type="image">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text bg-soft-secondary font-weight-medium">
                                            <input id="fancy-file-uploadd" type="file" name="meta_img"
                                                class="selected-files">
                                        </div>
                                    </div>
                                </div>
                                <div class="file-preview box sm">
                                    @if ('header_logo' != null)
                                        <img src="{{ asset('public/' . $blog->meta_img) }}" alt="bruce"
                                            width="150px" height="150px" class="border-radius-lg shadow-sm">
                                    @endif
                                </div>
                            </div>
                        </div><br>

                        <div class="form-group row">
                            <label class="col-md-3 col-form-label">Meta Description</label>
                            <div class="col-md-9">
                                <textarea name="meta_description" rows="5" class="form-control">{{ $blog->meta_description }}</textarea>
                            </div>
                        </div><br>

                        <div class="form-group row">
                            <label class="col-md-3 col-form-label">
                                Meta Keywords
                            </label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" id="meta_keywords" name="meta_keywords"
                                    value="{{ $blog->meta_keywords }}" placeholder="Meta Keywords">
                            </div>
                        </div><br>
                        <div class="form-group row" id="category">
                            <label class="col-md-3 col-from-label">
                                Status
                                <span class="text-danger">*</span>
                            </label>
                            <div class="col-md-9">
                                <select class="form-control aiz-selectpicker" name="status" id="category_id"
                                    data-live-search="true" required>
                                    <option value="active">Active</option>
                                    <option value="inactive">Inactive</option>

                                </select>
                            </div>
                        </div><br>
                        <div class="form-group mb-0 text-right">
                            <button type="submit" class="btn btn-primary">
                                Update
                            </button>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>
@endsection
