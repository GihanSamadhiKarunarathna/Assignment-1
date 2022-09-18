<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Student Crud</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
</head>
<body>

<div class="card mb-3">
    <img src="https://images.squarespace-cdn.com/content/v1/5a4c8547f14aa106b73fae8a/1585859520955-GAUUJI9A5Z5QUT60PWG4/ID+124673375+%C2%A9+Viacheslav+Iacobchuk+%7C+Dreamstime.com.jpg?format=750w" class="card-img-top" alt="...">
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
                    <th scope="row">1</th>
                    <td>{{ $student->name }}</td>
                    <td>{{ $student->image }}</td>
                    <td>{{ $student->age }}</td>
                    <td>{{ $student->status }}</td>
                    <td>
{{--                        <a href="#" class="btn btn-sm btn-info">show</a>--}}
                        <a href="{{route('student.edit',$student->id)}}" class="btn btn-outline-success">Update</a>
                        <a href="{{route('student.destroy',$student->id)}}" class="btn btn-outline-danger">Delete</a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>

    </div>
</div>

</body>
</html>
