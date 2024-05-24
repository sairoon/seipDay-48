@extends('master')
@section('title')
    Add Students
@endsection
@section('body')
    <section class="py-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-8 mx-auto">
                    <div class="card shadow">
                        <div class="card-header"></div>
                        <div class="card-body">
                            <form action="{{ route('students.store') }}" method="post" enctype="multipart/form-data">
                                @csrf
                                <h3 class="text-center fw-bolder">Add Students</h3>
                                <hr>
                                <div class="row">
                                    <label class="mb-2 col-md-3" for="text">Student Name</label>
                                    <div class="col-md-9">
                                        <input type="text" id="text"  name="name" placeholder="Enter Your Name" class="form-control"/>
                                    </div>
                                </div>
                                <div class="row mt-2">
                                    <label class="mb-2 col-md-3" for="text">Student Email</label>
                                    <div class="col-md-9">
                                        <input type="email" id="text"  name="email" placeholder="Enter Your Email" class="form-control"/>
                                    </div>
                                </div>
                                <div class="row mt-2">
                                    <label class="mb-2 col-md-3" for="text">Student Mobile</label>
                                    <div class="col-md-9">
                                        <input type="number" id="text"  name="mobile" placeholder="Enter Your Mobile" class="form-control"/>
                                    </div>
                                </div>
                                <div class="row mt-2">
                                    <label class="mb-2 col-md-3" for="text">Date of Birth</label>
                                    <div class="col-md-9">
                                        <input type="date" id="text"  name="dob" class="form-control"/>
                                    </div>
                                </div>
                                <div class="row mt-2">
                                    <label class="mb-2 col-md-3" for="text">Student Address</label>
                                    <div class="col-md-9">
                                        <textarea name="address" class="form-control" id="" cols="30" rows="5"></textarea>
                                    </div>
                                </div>
                                <div class="row mt-2">
                                    <label class="mb-2 col-md-3" for="text">Student Gender</label>
                                    <div class="col-md-9">
                                        <label for="male"><input type="radio" id="male" name="gender" value="male" checked> Male</label>
                                        <label for="female"><input type="radio" id="female" name="gender" value="female"> Female</label>
                                        <label for="other"><input type="radio" id="other" name="gender" value="other"> Other</label>
                                    </div>
                                </div>
                                <div class="row mt-2">
                                    <label class="mb-2 col-md-3" for="text">Student Image</label>
                                    <div class="col-md-9">
                                        <input type="file" name="image" class="form-control">
                                    </div>
                                </div>
                                <div class="row mt-2">
                                    <label class="mb-2 col-md-3" for="text">Publication Status</label>
                                    <div class="col-md-9">
                                        <label for="published"><input type="radio" id="published" name="status" value="1"> Published</label>
                                        <label for="unpublished"><input type="radio" id="unpublished" name="status" value="0"> Unpublished</label>
                                    </div>
                                </div>
                                <div class="row mt-2">
                                    <div class="">
                                        <input type="submit" class="btn btn-outline-success col-md-12 rounded-0" value="Add Student"/>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
