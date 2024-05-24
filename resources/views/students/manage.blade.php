@extends('master')
@section('title')
    Manage Students
@endsection
@section('body')
    <section class="py-5">
        <div class="container align-items-center">
            <div class="row mx-auto">
                <div class="col-md-10">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>SI</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Mobile</th>
                                <th>Date of Birth</th>
                                <th>Image</th>
                                <th>Gender</th>
                                <th>Address</th>
                                <th>Publication Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Alu Khor</td>
                                <td>alu@alu.com</td>
                                <td>1234865</td>
                                <td>29/02/2000</td>
                                <td></td>
                                <td>male</td>
                                <td>adksnvfa</td>
                                <td>publish</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
@endsection
