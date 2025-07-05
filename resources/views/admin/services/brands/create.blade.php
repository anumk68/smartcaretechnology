@extends('admin.layouts.app')

@section('content')
    <div class="page-wrapper">
        <div class="page-content">
            <div class="container">
                <div class="row">
                    <div class="contact-form">
                        <div class="title">
                            <h2>Create Brand</h2>
                        </div>
                        <form action="{{ route('brands.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <label for="brand_name">Brand Name*</label>
                                    <input type="text" name="brand_name" class="form-control"
                                        value="{{ old('brand_name') }}">
                                    @error('brand_name')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                                <div class="col-md-6">
                                    <label for="slug">Slug</label>
                                    <input type="text" name="slug" class="form-control" value="{{ old('slug') }}">
                                    @error('slug')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <label for="banner_image">Banner Image</label>
                                    <input type="file" name="banner_image" class="form-control">
                                    @error('banner_image')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                                <div class="col-md-6">
                                    <label for="icon_image">Icon Image</label>
                                    <input type="file" name="icon_image" class="form-control">
                                    @error('icon_image')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-md-12">
                                    <label for="seo_content">SEO Content</label>
                                    <textarea name="seo_content" class="form-control" id="description1" rows="4">{{ old('seo_content') }}</textarea>
                                    @error('seo_content')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <label for="additional_image">Additional Image</label>
                                    <input type="file" name="additional_image" class="form-control">
                                    @error('additional_image')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-md-12">
                                    <label for="description">Description</label>
                                    <textarea name="description" class="form-control" id="description" rows="4">{{ old('description') }}</textarea>
                                    @error('description')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>


                            <!-- Status defaults to 'active' in the database, so no need to include a field here unless you want to give the option -->

                            <div class="row mb-3">
                                <div class="col-md-12">
                                    <button class="btn btn-primary" type="submit">Save Brand</button>
                                    <a href="{{ route('brands.index') }}" class="btn btn-secondary">Back to List</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
