@extends('layouts.home')

@section('content')
    <div class="row">

        <section class="col">

            <div class="card mb-3">
                <img
                    src="https://en.shafaqna.com/wp-content/uploads/2022/01/CUE_international-day-of-ed2-1-1030x541.jpg"
                    class="card-img-top" alt="..." width="200" height="400">
                <div class="card-body">
                    <h5 class="card-title">Enter the Student Information.</h5>

                    <form action="{{route('student.store')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label>Name</label>
                            <input name="name" type="text" class="form-control" placeholder="Enter name" required>
                        </div>

                        <div class="mb-3">
                            <label>Age</label>
                            <input name="age" type="text" class="form-control" placeholder="Enter age" required>
                        </div>

                        <div class="mb-3">
                            <label>Image</label>
                            <input name="image" class="form-control" type="file" id="formFileMultiple"  required>
                        </div>

                        <div class="mb-3">
                            <label>Status</label>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="status" value="1"
                                       id="flexRadioDefault1">
                                <label class="form-check-label" for="flexRadioDefault1">
                                    Active
                                </label>
                            </div>

                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="status" value="0"
                                       id="flexRadioDefault2" checked>
                                <label class="form-check-label" for="flexRadioDefault2">
                                    Inactive
                                </label>
                            </div>
                            <br>
                            <input type="submit" class="btn btn-info" value="Save Student">
{{--                            <input type="reset" class="btn btn-warning" value="reset">--}}

                        </div>

                    </form>

                </div>
            </div>

        </section>
    </div>
@endsection
