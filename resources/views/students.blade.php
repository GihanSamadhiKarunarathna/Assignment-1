

@include("layouts.home")

<div class="row header-container">
    <div class="header">
        <h1 style="text-align:center">Manage Student Details</h1>
    </div>
</div>

@if ($layout == 'index')

    <div class="container-fluid mt-4">
        <div class="container-fluid mt-4">
            <div class="container-fluid mt-4">
                <div class="row justify-content-center">
                    <section class="col-md-8">
                        @include("student_list")
                    </section>
                </div>
            </div>
        </div>
    </div>

@elseif ($layout == 'create')

    <div class="container-fluid mt-4">
        <div class="row">
            <section class="col">
                @include("student_list")
            </section>
            <section class="col-md-5">

                <div class="card mb-3">
                    <img
                        src="https://en.shafaqna.com/wp-content/uploads/2022/01/CUE_international-day-of-ed2-1-1030x541.jpg"
                        class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Enter the Student Information.</h5>

                        <form action="{{ url('/store') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <label>Name</label>
                                <input name="name" type="text" class="form-control" placeholder="Enter name">
                            </div>

                            <div class="mb-3">
                                <label>Age</label>
                                <input name="age" type="text" class="form-control" placeholder="Enter age">
                            </div>

                            <div class="mb-3">
                                <label>Image</label>
                                <input name="image" class="form-control" type="file" id="formFileMultiple" multiple>
                            </div>

                            <div class="mb-3">
                                <label>Status</label>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault"
                                           id="flexRadioDefault1">
                                    <label class="form-check-label" for="flexRadioDefault1">
                                        Active
                                    </label>
                                </div>

                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault"
                                           id="flexRadioDefault2" checked>
                                    <label class="form-check-label" for="flexRadioDefault2">
                                        Inactive
                                    </label>
                                </div>
                                <br>
                                <input type="submit" class="btn btn-info" value="Save Student">
                                <input type="reset" class="btn btn-warning" value="reset">

                            </div>

                        </form>

                    </div>
                </div>

            </section>
        </div>
    </div>

@elseif ($layout == 'show')
    <div class="container-fluid mt-4">
        <div class="row">
            <section class="col">
                @include("student_list")
            </section>
            <section class="col"></section>
        </div>
    </div>

@elseif ($layout == 'edit')

    <div class="container-fluid mt-4">
        <div class="row">
            <section class="col">
                @include("student_list")
            </section>
            <section class="col">

                <div class="card mb-3">
                    <img src="https://assets.thehansindia.com/h-upload/2022/07/31/1305709-education.webp"
                         class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Update Student Information.</h5>

                        <form action="{{route('student.update',$student->id)}}" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="mb-3">
                                <label>Name</label>
                                <input value="{{ $student->name }}" name="name" type="text" class="form-control"
                                       placeholder="Enter name">
                            </div>

                            <div class="mb-3">
                                <label>Age</label>
                                <input value="{{ $student->age }}" name="age" type="text" class="form-control"
                                       placeholder="Enter age">
                            </div>

                            <div class="mb-3">
                                <label>Image</label>
                                <input value="{{ $student->image }}" class="form-control" type="file"
                                       id="formFileMultiple" multiple>
                            </div>

                            <div class="mb-3">
                                <label>Status</label>
                                <div class="form-check">
                                    <input value="{{ $student->status }}" class="form-check-input" type="radio"
                                           name="flexRadioDefault" id="flexRadioDefault1">
                                    <label class="form-check-label" for="flexRadioDefault1">
                                        Active
                                    </label>
                                </div>

                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault"
                                           id="flexRadioDefault2" checked>
                                    <label class="form-check-label" for="flexRadioDefault2">
                                        Inactive
                                    </label>
                                </div>
                                <br>
                                <button type="submit" class="btn btn-outline-success">Update</button>
                                <button type="rest" class="btn btn-outline-warning">Reset</button>

                            </div>

                        </form>

                    </div>
                </div>


            </section>
        </div>
    </div>

@endif


