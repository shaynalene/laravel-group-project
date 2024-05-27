<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Student Record</title>
    <!-- BOOTSTRAP CDN -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-secondary" bgcolor = gray>
    <div class="container-fluid">
        <div class="row justify-content-md-center">
            <div class="col-md-4 bg-light align-items-center m-5 p-5 rounded-5 shadow">
                <h1 class="text-center mb-3">CREATE STUDENT</h1>
                <form method ="post" action="{{route('student.saveRecord')}}">
                    @csrf
                    @method('post')
                    <div>
                        <label class="my-2">First Name:</label>
                        <input class="form-control" type = "text" name = "FN" placeholder="First Name">
                    </div>
                    <div>
                        <label class="my-2">Middle Name:</label>
                        <input class="form-control" type = "text" name = "MN" placeholder="Middle Name">
                    </div>
                    <div>
                        <label class="my-2">Last Name:</label>
                        <input class="form-control" type = "text" name = "LN" placeholder="Last Name">
                    </div>
                    <div>
                        <label class="my-2">Age:</label>
                        <input class="form-control" type = "text" name = "AGE" placeholder="Age">
                    </div>
                    <div>
                        <input class="form-control btn-primary mt-4" type = submit value = "Save">
                    </div>
                </form>
            </div>
        </div>
    </div>

    
    
    
</body>
<!-- Bootstrap JS, Popper.js, and jQuery -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</html>