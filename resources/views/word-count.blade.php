@extends('master')
@section('title')
    word-count
@endsection
@section('body')
<section class="py-5">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-8 mx-auto">
                <div class="card shadow">
                    <div class="card-header"></div>
                    <div class="card-body">
                        <form action="{{ route('word-result') }}" method="post">
                            @csrf
                            <h3 class="text-center fw-bolder">Word Count</h3>
                            <hr>
                            <div class="row">
                                <label class="mb-2 col-md-3" for="text">Text</label>
                                <div class="col-md-9">
                                    <input type="text" id="text" value="{{Session::has('inputText') ? Session::get('inputText') : ''}}" name="enter_text" placeholder="Enter Your Text" class="form-control"/>
                                </div>
                            </div>
                            <div class="row mt-2">
                                <label class="mb-2 col-md-3" for="totalWord">Total word</label>
                                <div class="col-md-9">
                                    <input type="text" disabled id="totalWord" value="{{Session::has('totalWord') ? Session::get('totalWord') : ''}}" name="total_word" class="form-control"/>
                                </div>
                            </div>
                            <div class="row mt-2">
                                <label class="mb-2 col-md-3" for="totalChar">Total Character</label>
                                <div class="col-md-9">
                                    <input type="text" disabled value="{{Session::has('totalChar') ? Session::get('totalChar') : ''}}"  id="totalChar" name="total_character" class="form-control"/>
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="">
                                    <input type="submit" class="btn btn-outline-success col-md-12 rounded-0" value="Submit"/>
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

