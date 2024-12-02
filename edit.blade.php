<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Respondent Details</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <style>
        
    body {
        background-color: #f4f6f9;
        font-family: 'Arial', sans-serif;
    }
    .form-container {
        max-width: 800px;
        margin: auto;
        background: #4E5EB1;
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
    }
    .form-header {
        text-align: center;
        color: #4E5EB1;
        margin-bottom: 20px;
    }
    .form-header h1 {
        font-size: 24px;
        margin-bottom: 5px;
    }
    .form-header p {
        font-size: 14px;
        color: #4E5EB1;
    }
    .form-table {
        width: 100%;
        border-collapse: separate;
        border-spacing: 0 15px;
    }
    .form-table th {
        width: 35%;
        text-align: right;
        padding-right: 10px;
        vertical-align: middle;
        color: #4E5EB1;
    }
    .form-table td {
        width: 65%;
    }
    .form-control {
        border-radius: 8px;
        height: 45px;
        transition: box-shadow 0.3s, border-color 0.3s;
    }
    /* Glow effect on hover */
    .form-control:hover, .form-control:focus {
        box-shadow: 0 0 8px rgba(0, 123, 255, 0.6);
        border-color: #007bff;
    }
    .btn-container {
   
        display: flex;
        justify-content: space-between;
        margin-top: 20px;
    }
    .btn-container button,
    .btn-container a {
    
        width: 48%;
    }
</style>
</head>
<body>

    <div class="form-container">
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif

        <div class="form-header">
            <h1>Edit Respondent Details</h1>
            <p>Update the necessary details for the respondent below.</p>
        </div>

        <form action="{{ route('respondents.update', $respondent->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <table class="form-table">
                <tr>
                    <th><label for="childFirstName">Child's First Name</label></th>
                    <td><input type="text" class="form-control" id="childFirstName" name="childFirstName" value="{{ $respondent->childFirstName }}"></td>
                </tr>
                <tr>
                    <th><label for="childLastName">Child's Last Name</label></th>
                    <td><input type="text" class="form-control" id="childLastName" name="childLastName" value="{{ $respondent->childLastName }}"></td>
                </tr>
                <tr>
                    <th><label for="dob">Date of Birth</label></th>
                    <td><input type="date" class="form-control" id="dob" name="dob" value="{{ $respondent->dob }}"></td>
                </tr>
                <tr>
                    <th><label for="gender">Gender</label></th>
                    <td><input type="text" class="form-control" id="gender" name="gender" value="{{ $respondent->gender }}"></td>
                </tr>
                <tr>
                    <th><label for="placeOfBirth">Place of Birth</label></th>
                    <td><input type="text" class="form-control" id="placeOfBirth" name="placeOfBirth" value="{{ $respondent->placeOfBirth }}"></td>
                </tr>
                <tr>
                    <th><label for="religion">Religion</label></th>
                    <td><input type="text" class="form-control" id="religion" name="religion" value="{{ $respondent->religion }}"></td>
                </tr>
                <tr>
                    <th><label for="age">Age</label></th>
                    <td><input type="number" class="form-control" id="age" name="age" value="{{ $respondent->age }}"></td>
                </tr>
                <tr>
                    <th><label for="photoUpload">Upload Photo</label></th>
                    <td><input type="file" class="form-control" id="photoUpload" name="photoUpload" accept="image/*"></td>
                </tr>
                <!-- Add rows for other fields -->
            </table>

            <div class="btn-container">
                <button type="submit" class="btn btn-warning">Save Changes</button>
                <a href="{{ route('respondents.show', $respondent->id) }}" class="btn btn-secondary">Cancel</a>
            </div>
        </form>
    </div>

</body>
</html>
