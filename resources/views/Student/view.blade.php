@extends('layouts.home')

@section('content')
    <div class="row">
        <section class="col-md-5">

            <div class="card mb-3">
                <img
                    src="https://en.shafaqna.com/wp-content/uploads/2022/01/CUE_international-day-of-ed2-1-1030x541.jpg"
                    class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Student Details</h5>
                        <div class="mb-3">
                            <label>Name</label>
                            <input name="name" type="text" class="form-control" placeholder="Enter name" value="{{$student->name}}" readonly>
                        </div>

                        <div class="mb-3">
                            <label>Age</label>
                            <input name="age" type="text" class="form-control" placeholder="Enter age" value="{{$student->age}}" readonly>
                        </div>

                        <div class="mb-3">
                            <label>Image</label>
                            <br>
                            <img src="{{asset('storage/'.$student->image)}}" alt="img_st" style="width:50%">
                        </div>

                    <div class="mb-3">
                        <label>Status</label>
                        <input name="status" type="text" class="form-control" placeholder="Enter age" value="@if($student->status == 1) Active @else InActive @endif" readonly>
                    </div>


                </div>
            </div>

        </section>
    </div>
@endsection
