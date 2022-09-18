@extends('layouts.home')

@section('content')

        <a href="{{route('student.create')}}" class="btn btn-outline-primary">Create Student</a>
        <hr>

    <div class="card mb-3">
        <img src="https://info.ehl.edu/hubfs/Blog-EHL-Insights/Blog-Header-EHL-Insights/invest%20-education.jpg" class="card-img-top" alt="..." width="100" height="500">
        <div class="card-body">
            <h5 class="card-title">Student List</h5>
            <p class="card-text">All the information about the students can be found in here.</p>

            <table class="table">
                <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">Image</th>
                    <th scope="col">Age</th>
                    <th scope="col">Status</th>
                    <th scope="col">Operations</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($students as $student)
                    <tr>
                        <th scope="row">{{ $loop->iteration }}</th>
                        <td>{{ $student->name }}</td>
                        <td><img src="{{ asset('storage/'.$student->image) }}" alt="" style="width: 30px"></td>
                        <td>{{ $student->age }}</td>
                        <td>@if($student->status == 1) Active @else InActive @endif</td>
                        <td>
                            {{--                        <a href="#" class="btn btn-sm btn-info">show</a>--}}
                            <a href="{{route('student.view',$student->id)}}" class="btn btn-outline-primary">View</a>
                            <a href="{{route('student.edit',$student->id)}}" class="btn btn-outline-success">Update</a>
                            <a  href="{{route('student.delete',$student->id)}}" class="btn btn-outline-danger">
                                Delete
                            </a>
                        </td>

                    </tr>
                @endforeach
                </tbody>
            </table>

        </div>
    </div>

@endsection
