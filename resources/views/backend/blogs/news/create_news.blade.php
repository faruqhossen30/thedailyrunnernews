@extends('backend.layout.app')
@section('content')
    <div class="container-fluid">
        <div class="content">
            <!-- Start Content-->
            <div class="container-fluid">

                <!-- start page title -->
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box page-title-box-alt">
                            <h4 class="page-title">Create News</h4>
                            <div class="page-title-right">
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Heshelghor</a></li>
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">eCommerce</a></li>
                                    <li class="breadcrumb-item active">News List</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end page title -->

                <div class="row">
                    <div class="col-md-8">
                        <div class="card">
                            <div class="card-body">
                                <div class="row mb-2">
                                    <div class="col-sm-6">
                                        <a href="#" class="btn btn-success mb-2"><i
                                                class="mdi mdi-format-list-bulleted me-1"></i> All News</a>
                                    </div>
                                </div>
                                <!-- end row -->

                                <div class="row">
                                    <div class="col-md-12">

                                        <form method="POST" action="" enctype="multipart/form-data" class="form-horizontal"
                                            role="form">
                                            @csrf
                                            <div class="form-group">
                                                <label for="title">Title</label>
                                                <input type="text" class="form-control" name="title" id="title"
                                                    placeholder="Title" spellcheck="false" data-ms-editor="true">
                                            </div>


                                            <div class="form-group mt-2">
                                                <label>Content<span class="text-danger">*</span></label>
                                                <textarea id="snow-editor" name="content" type="text" class="form-control @error('content') is-invalid @enderror"
                                                    rows="10"
                                                    placeholder="Enter location details">{{ old('content') }}</textarea>
                                                @error('content')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                            <div class="form-group mt-2">
                                                <label>Excerpt<span class="text-danger">*</span></label>
                                                <textarea id="bubble-editor" name="content" type="text" class="form-control @error('content') is-invalid @enderror"
                                                    rows="5"
                                                    placeholder="Enter location details">{{ old('content') }}</textarea>
                                                @error('content')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>

                                            <div class="card mt-2">
                                                <div class="card-header">
                                                    <h4>blog</h4>
                                                </div>
                                                <div class="card-body">
                                                    <div class="mb-2 row">
                                                        <label class="col-md-2 col-form-label" for="simpleinput">
                                                            Meta Title</label>
                                                        <div class="col-md-10">
                                                            <input name="title" type="text"
                                                                class="form-control  @error('title') is-invalid @enderror "
                                                                placeholder="Please enter your meta title ">
                                                            <div class="text-danger">
                                                            </div>
                                                        </div>
                                                        @error('title')
                                                            <div class="invalid-feedback">
                                                                {{ $message }}
                                                            </div>
                                                        @enderror
                                                    </div>
                                                    <div class="mb-2 row">
                                                        <label class="col-md-2 col-form-label" for="simpleinput">
                                                            Meta Tags</label>
                                                        <div class="col-md-10">
                                                            <input name="title" type="text"
                                                                class="form-control  @error('title') is-invalid @enderror "
                                                                placeholder="Please enter your meta title ">
                                                            <div class="text-danger">
                                                            </div>
                                                        </div>
                                                        @error('title')
                                                            <div class="invalid-feedback">
                                                                {{ $message }}
                                                            </div>
                                                        @enderror
                                                    </div>
                                                    <div class="form-group mt-2">
                                                        <label>Excerpt<span class="text-danger">*</span></label>
                                                        <textarea id="bubble-editor" name="content" type="text" class="form-control @error('content') is-invalid @enderror"
                                                            rows="5"
                                                            placeholder="Enter your blog meta description details">{{ old('content') }}</textarea>
                                                        @error('content')
                                                            <div class="invalid-feedback">
                                                                {{ $message }}
                                                            </div>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>

                                            <button type="submit" class="btn btn-success">Add
                                                News</button>
                                        </form>

                                    </div><!-- end col -->
                                </div>
                                <!-- end row -->

                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">

                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card mb-3">
                                    <div class="card-body">
                                        <div class="post_type_radio">
                                            <h6>Post Type</h6>
                                            <div class="form-check form-check-inline d-block">

                                                <input class="form-check-input post_type" type="radio" checked=""
                                                    name="inlineRadioOptions" id="radio_general" value="option1">
                                                <i class="ti-settings"></i>
                                                <label class="form-check-label" for="inlineRadio1">General</label>
                                            </div>
                                            <div class="form-check form-check-inline d-block">

                                                <input class="form-check-input post_type" type="radio"
                                                    name="inlineRadioOptions" id="radio_video" value="option2">
                                                <i class="ti-video-camera"></i>
                                                <label class="form-check-label" for="inlineRadio2">Video</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="video_section" style="display: none;">
                                    <div class="card mb-3">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="card-body">
                                                    <div class="form-group">
                                                        <label for="slug">Video Url</label>
                                                        <input type="text" class="form-control" name="video_url"
                                                            spellcheck="false" data-ms-editor="true">
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="slug">Video Duration</label>
                                                        <input type="text" class="form-control" name="video_duration"
                                                            spellcheck="false" data-ms-editor="true">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="row">

                                            <div class="col-lg-12">
                                                <div class="form-group">
                                                    <label for="featured"><strong>Select Categories</strong></label>
                                                    <div class="category-section list-style:none; ">
                                                        <ul>
                                                            <li>
                                                                <input type="checkbox" name="category_id[]"
                                                                    id="exampleCheck1" value="2">
                                                                <label class="ml-1">
                                                                    Travel
                                                                </label>
                                                            </li>
                                                            <li>
                                                                <input type="checkbox" name="category_id[]"
                                                                    id="exampleCheck1" value="3">
                                                                <label class="ml-1">
                                                                    Vehicle
                                                                </label>
                                                            </li>
                                                            <li>
                                                                <input type="checkbox" name="category_id[]"
                                                                    id="exampleCheck1" value="4">
                                                                <label class="ml-1">
                                                                    Fashion
                                                                </label>
                                                            </li>
                                                            <li>
                                                                <input type="checkbox" name="category_id[]"
                                                                    id="exampleCheck1" value="5">
                                                                <label class="ml-1">
                                                                    Music
                                                                </label>
                                                            </li>
                                                            <li>
                                                                <input type="checkbox" name="category_id[]"
                                                                    id="exampleCheck1" value="6">
                                                                <label class="ml-1">
                                                                    Health
                                                                </label>
                                                            </li>
                                                            <li>
                                                                <input type="checkbox" name="category_id[]"
                                                                    id="exampleCheck1" value="12">
                                                                <label class="ml-1">
                                                                    Sports
                                                                </label>
                                                            </li>
                                                            <li>
                                                                <input type="checkbox" name="category_id[]"
                                                                    id="exampleCheck1" value="13">
                                                                <label class="ml-1">
                                                                    Gadgets
                                                                </label>
                                                            </li>
                                                            <li>
                                                                <input type="checkbox" name="category_id[]"
                                                                    id="exampleCheck1" value="14">
                                                                <label class="ml-1">
                                                                    Business
                                                                </label>
                                                            </li>
                                                            <li>
                                                                <input type="checkbox" name="category_id[]"
                                                                    id="exampleCheck1" value="15">
                                                                <label class="ml-1">
                                                                    Global
                                                                </label>
                                                            </li>
                                                            <li>
                                                                <input type="checkbox" name="category_id[]"
                                                                    id="exampleCheck1" value="16">
                                                                <label class="ml-1">
                                                                    Beauty
                                                                </label>
                                                            </li>
                                                            <li>
                                                                <input type="checkbox" name="category_id[]"
                                                                    id="exampleCheck1" value="17">
                                                                <label class="ml-1">
                                                                    Lifestyle
                                                                </label>
                                                            </li>
                                                            <li>
                                                                <input type="checkbox" name="category_id[]"
                                                                    id="exampleCheck1" value="18">
                                                                <label class="ml-1">
                                                                    Corona
                                                                </label>
                                                            </li>
                                                            <li>
                                                                <input type="checkbox" name="category_id[]"
                                                                    id="exampleCheck1" value="19">
                                                                <label class="ml-1">
                                                                    Life
                                                                </label>
                                                            </li>
                                                            <li>
                                                                <input type="checkbox" name="category_id[]"
                                                                    id="exampleCheck1" value="20">
                                                                <label class="ml-1">
                                                                    Astro
                                                                </label>
                                                            </li>
                                                            <li>
                                                                <input type="checkbox" name="category_id[]"
                                                                    id="exampleCheck1" value="21">
                                                                <label class="ml-1">
                                                                    Olympic
                                                                </label>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>

                                                <hr>

                                                <div class="form-group " id="blog_tag_list">
                                                    <label for="title">Blog Tag</label>
                                                    <div class="bootstrap-tagsinput"><input type="text" placeholder=""
                                                            spellcheck="false" data-ms-editor="true"></div><input
                                                        type="text" class="form-control tags_filed" name="tag_id[]"
                                                        id="datetimepicker1" style="display: none;">
                                                    <div id="show-autocomplete" style="display: none;">
                                                        <ul class="autocomplete-warp"></ul>
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label for="featured"><strong>Featured</strong></label>
                                                    <label class="switch">
                                                        <input type="checkbox" name="featured">
                                                        <span class="slider"></span>
                                                    </label>
                                                </div>

                                                <div class="form-group">
                                                    <label><strong>Breaking News</strong></label>
                                                    <label class="switch">
                                                        <input type="checkbox" name="breaking_news">
                                                        <span class="slider"></span>
                                                    </label>
                                                </div>

                                                <div class="form-group ">
                                                    <label for="slug">Order</label>
                                                    <input type="number" class="form-control" name="order_by"
                                                        placeholder="Order">
                                                </div>
                                                <div id="visibility_list" class="form-group ">
                                                    <label for="visibility">Visibility</label>
                                                    <select name="visibility" class="form-control" id="visibility">
                                                        <option value="public">Public</option>
                                                        <option value="logged_user">Logged User</option>
                                                        <option value="password">Password</option>
                                                    </select>
                                                </div>

                                                <div class="form-group d-none password-section ">
                                                    <label for="title">Blog Password</label>
                                                    <div class="d-flex justify-content-between">
                                                        <input type="password" class="form-control password"
                                                            name="password">
                                                        <span href="" class="btn btn-primary btn-sm mr-1 password-show"> <i
                                                                class="las la-eye show-icon d-none"></i> <i
                                                                class="las la-low-vision close-icon"></i></span>
                                                    </div>
                                                </div>

                                                <div class="form-group ">
                                                    <label for="status">Status</label>
                                                    <select name="status" class="form-control" id="status">
                                                        <option value="draft">Draft</option>
                                                        <option value="publish">Publish</option>
                                                        <option value="archive">Archive</option>
                                                        <option class="selected_schedule" value="schedule">Schedule
                                                        </option>
                                                    </select>
                                                    <input type="text" name="schedule_date"
                                                        class="form-control mt-2 date flatpickr-input"
                                                        style="display: none" id="tag_data" readonly="readonly">
                                                </div>
                                                <div class="form-group ">
                                                    <label for="image">Blog Image</label>
                                                    <div class="media-upload-btn-wrapper">
                                                        <div class="img-wrap"></div>
                                                        <input type="hidden" name="image">
                                                        <button type="button" class="btn btn-info media_upload_form_btn"
                                                            data-btntitle="Select Image" data-modaltitle="Upload Image"
                                                            data-toggle="modal" data-target="#media_upload_modal">
                                                            Upload Image
                                                        </button>
                                                    </div>
                                                </div>

                                                <div class="form-group ">
                                                    <label for="image">Galley Image</label>
                                                    <div class="media-upload-btn-wrapper">
                                                        <div class="img-wrap"></div>
                                                        <input type="hidden" name="image_gallery">
                                                        <button type="button" class="btn btn-info media_upload_form_btn"
                                                            data-btntitle="Select Image" data-modaltitle="Upload Image"
                                                            data-toggle="modal" data-mulitple="true"
                                                            data-target="#media_upload_modal">
                                                            Upload Image
                                                        </button>
                                                    </div>
                                                </div>

                                                <div class="submit_btn mt-5">
                                                    <button type="submit" class="btn btn-success pull-right">Submit New
                                                        Post</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <!-- end row -->


            </div> <!-- container -->

        </div> <!-- content -->

    </div>
@endsection
@push('style')
    <style>
        *,
        ::after,
        ::before {
            box-sizing: border-box;
            list-style: none;
        }

    </style>
@endpush
