<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admissions Application</title>
    <link rel="shortcut icon" href="/img/favIcon.png" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');

        @font-face {
            font-family: 'Playful';
            src: url('/fonts/playful.ttf') format('truetype');
            font-weight: normal;
            font-style: normal;
        }
.unique-div {
  width: 10em;
  position: relative;
  height: 3.5em;
  border: 3px ridge #149CEA;
  background-color: transparent;
  color: black;
  transition: 1s;
  border-radius: 0.3em;
  font-size: 16px;
  font-weight: bold;
  display: flex;
  align-items: center;
  justify-content: center;
  text-align: center;
}

.unique-div::after {
  content: "";
  position: absolute;
  top: -10px;
  left: 3%;
  width: 95%;
  height: 40%;
  background-color: #fff;
  transition: 0.5s;
  transform-origin: center;
}

.unique-div::before {
  content: "";
  position: absolute;
  top: 80%;
  left: 3%;
  width: 95%;
  height: 40%;
  background-color: #fff;
  transition: 0.5s;
  transform-origin: center;
}

.unique-div:hover::before,
.unique-div:hover::after {
  transform: scale(0);
}

.unique-div:hover {
  box-shadow: inset 0px 0px 25px #1479EA;
}
/* end button */
        .title h2 {
            margin-top: 50px;
            margin-left: 50px;
            color: #4E5EB1;
            font-family: 'Playful', sans-serif;
        }

        .form-bar {
            padding: 20px;
            border-radius: 20px;
            text-align: center;
            background-color: #FCFAEE;
            width: 100%;
            padding-bottom: 50px;
        }

        .form-bar h1 {
            font-size: 1.5rem;
            font-weight: bold;
            color: #4E5EB1;
            width: 500px;
            margin-top: 10px;
            font-family: 'Playful', sans-serif;
        }

        .form-bar h2 {
            font-size: 1.2rem;
            color: #4E5EB1;
            font-family: 'Playful', sans-serif;
        }

        .col-md-6,
        .col-md-12,
        .col-md-4 {
            background-color: #FFEEB6;
            /* Background for the whole block */
            padding: 15px;
            border-radius: 5px;
            display: inline-block;

        }

        .last-form {
            background-color: #FFEEB6;
            
            padding: 15px;
            border-radius: 5px;
        }

        .required p {
            color: #4E5EB1;
            font-family: 'Poppins', sans-serif;
            font-size: 20px;
        }

        .required span {
            color: #FDC24A;
        }

        .form-title p {
            font-family: 'Playful', sans-serif;
            color: #4E5EB1;
            font-size: 25px;
        }

        .form-label,
        h6 {
            color: #4E5EB1;
        }

        @media (max-width: 600px) {
            .form-bar h1 {
                width: 200px;
            }
        }
        .alert.alert-success,
.unique-div {
    display: inline-block; /* Arrange elements in a row */
    margin-right: 100px; /* Optional: Add spacing between elements */
    vertical-align: top; /* Align elements vertically */
}

.unique-div {

    padding: 10px;
    border-radius: 4px;
}
@if (session('success')) {
    display: flex;
    gap: 10px; /* Space between elements */
    align-items: center; 
}

    </style>
</head>

<body>
    <div class="title">
        <h2 class=" mb-4">Admissions Application</h2>
    </div>
    @if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
    <div class="unique-div">
  Back to home
</div>

@endif

    <div class="container my-5"
        style="background-color: #FFEEB6; padding: 20px; border-radius: 8px; max-width: 1000px; margin: auto; margin-top: 50px; box-shadow: 0px 4px 12px rgba(0, 0, 0, 0.1);">
        <div class="container d-flex justify-content-center">
            <div class="form-bar">
                <div class="row">
                    <!-- Logo Column -->
                    <div class="col-lg-3 d-flex justify-content-center align-items-center">
                        <img src="/img/formLogo.png" alt="Kids Castle logo" width="180px">
                    </div>
                    <!-- Text Column -->
                    <div class="col-lg-6 d-flex flex-column justify-content-center align-items-center">
                        <h2>Fulbarimarg, Khumaltar-15, <br> Lalitpur, Nepal</h2>
                        <br>
                        <h1>"A castle of education, Love and care"</h1>
                    </div>
                </div>
            </div>
        </div>


        <!-- Personal Information Section -->
        <!-- Child's Information Section -->
        <div>
            <form action="{{ route('form.submit') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="card mb-4"
                    style="background-color: #FCFAEE; padding: 20px; border-radius: 8px; max-width: 1000px; margin: auto; margin-top: 50px; box-shadow: 0px 4px 12px rgba(0, 0, 0, 0.1); ">

                    <div class="required">
                        <p>"<span>*</span>" indicates required fields</p>
                    </div>

                    @csrf
                    <div class="card-body">
                        <div class="row g-3">
                            <div class="col-md-6">
                                <label for="formNo" class="form-label">Form No*</label>
                                <input type="text" class="form-control" id="formNo" name="formNo" required>
                            </div>
                            <div class="col-md-6">
                                <label for="date" class="form-label">Date*</label>
                                <input type="date" class="form-control" id="date" name="date" required>
                            </div>

                            <div class="col-md-6">
                                <label class="form-label">Child's Name*</label>
                                <div class="row">
                                    <div class="col">
                                        <input type="text" class="form-control" placeholder="First name"
                                            name="childFirstName" required>
                                    </div>
                                    <div class="col">
                                        <input type="text" class="form-control" placeholder="Last name"
                                            name="childLastName" required>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 ">
                                <label class="form-label">Child's Name in Nepali*</label>
                                <div class="row">
                                    <div class="col">
                                        <input type="text" class="form-control" placeholder="First name"
                                            name="childFirstNameNepali" required>
                                    </div>
                                    <div class="col">
                                        <input type="text" class="form-control" placeholder="Last name"
                                            name="childLastNameNepali" required>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 ">
                                <label for="dob" class="form-label">Child's Date of Birth*</label>
                                <input type="date" class="form-control" id="dob" name="dob" required>
                            </div>
                            <div class="col-md-6">
                                <label for="gender" class="form-label">Child's Gender*</label>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="gender" id="male"
                                        value="Male" required>
                                    <label class="form-check-label" for="male">Male</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="gender" id="female"
                                        value="Female" required>
                                    <label class="form-check-label" for="female">Female</label>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <label for="placeOfBirth" class="form-label">Child's Place of Birth*</label>
                                <input type="text" class="form-control" id="placeOfBirth" name="placeOfBirth"
                                    required>
                            </div>

                            <div class="col-md-6">
                                <label for="religion" class="form-label">Child's Religion</label>
                                <input type="text" class="form-control" id="religion" name="religion">
                            </div>

                            <div class="col-md-6">
                                <label for="age" class="form-label">Child's Age*</label>
                                <input type="number" class="form-control" id="age" name="age" required>
                            </div>

                            <div class="col-md-6">
                                <label for="nationality" class="form-label">Child's Nationality</label>
                                <input type="text" class="form-control" id="nationality" name="nationality">
                            </div>

                            <div class="col-md-12">
                                <label for="previousSchool" class="form-label">Name of Previous School (if
                                    any)</label>
                                <input type="text" class="form-control" id="previousSchool"
                                    name="previousSchool">
                            </div>

                            <div class="col-md-12">
                                <label for="photoUpload" class="form-label">Please upload a recent photograph of your
                                    child:</label>
                                <input type="file" class="form-control" id="photoUpload" name="photoUpload"
                                    accept="image/*">
                                <small class="form-text text-muted">Accepted file types: jpg, png, pdf. Max file size:
                                    50
                                    MB.</small>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- Guardian's Details Section -->
                <div class="card mb-4"
                    style="background-color: #FCFAEE; padding: 20px; border-radius: 8px; max-width: 1000px; margin: auto; margin-top: 50px; box-shadow: 0px 4px 12px rgba(0, 0, 0, 0.1);">
                    <div class="form-title">
                        <p>Guardian's Details</p>
                    </div>
                    <div class="card-body">
                        <!-- Father's Information -->
                        <div class="row g-3 mb-3">
                            <h6>Father's Name*</h6>
                            <div class="col-md-6">
                                <label for="fatherFirstName" class="form-label">First name</label>
                                <input type="text" class="form-control" id="fatherFirstName"
                                    name="fatherFirstName" required>
                            </div>
                            <div class="col-md-6">
                                <label for="fatherLastName" class="form-label">Last name</label>
                                <input type="text" class="form-control" id="fatherLastName" name="fatherLastName"
                                    required>
                            </div>
                            <div class="col-md-4">
                                <label for="fatherContactNumber" class="form-label">Contact Number</label>
                                <input type="text" class="form-control" id="fatherContactNumber"
                                    name="fatherContactNumber" required>
                            </div>
                            <div class="col-md-4">
                                <label for="fatherOccupation" class="form-label">Occupation</label>
                                <input type="text" class="form-control" id="fatherOccupation"
                                    name="fatherOccupation">
                            </div>
                            <div class="col-md-4">
                                <label for="fatherOfficeNo" class="form-label">Office No</label>
                                <input type="text" class="form-control" id="fatherOfficeNo"
                                    name="fatherOfficeNo">
                            </div>
                        </div>

                        <!-- Mother's Information -->
                        <div class="row g-3 mb-3">
                            <h6>Mother's Name*</h6>
                            <div class="col-md-6">
                                <label for="motherFirstName" class="form-label">First name</label>
                                <input type="text" class="form-control" id="motherFirstName"
                                    name="motherFirstName" required>
                            </div>
                            <div class="col-md-6">
                                <label for="motherLastName" class="form-label">Last name</label>
                                <input type="text" class="form-control" id="motherLastName" name="motherLastName"
                                    required>
                            </div>
                            <div class="col-md-4">
                                <label for="motherContactNumber" class="form-label">Contact Number</label>
                                <input type="text" class="form-control" id="motherContactNumber"
                                    name="motherContactNumber" required>
                            </div>
                            <div class="col-md-4">
                                <label for="motherOccupation" class="form-label">Occupation</label>
                                <input type="text" class="form-control" id="motherOccupation"
                                    name="motherOccupation">
                            </div>
                            <div class="col-md-4">
                                <label for="motherOfficeNo" class="form-label">Office No</label>
                                <input type="text" class="form-control" id="motherOfficeNo"
                                    name="motherOfficeNo">
                            </div>
                        </div>

                        <!-- Permanent Address -->
                        <div class="row g-3 mb-3">
                            <h6>Permanent Address</h6>
                            <div class="col-md-12">
                                <label for="permanentAddressStreet" class="form-label">Street Address</label>
                                <input type="text" class="form-control" id="permanentAddressStreet"
                                    name="permanentAddressStreet" required>
                            </div>
                        </div>

                        <!-- Current Address -->
                        <div class="row g-3 mb-3">
                            <h6>Current Address</h6>
                            <div class="col-md-12">
                                <label for="currentAddressStreet" class="form-label">Street Address</label>
                                <input type="text" class="form-control" id="currentAddressStreet"
                                    name="currentAddressStreet" required>
                            </div>
                            <div class="col-md-4">
                                <label for="currentAddressCity" class="form-label">City</label>
                                <input type="text" class="form-control" id="currentAddressCity"
                                    name="currentAddressCity" required>
                            </div>
                            <div class="col-md-4">
                                <label for="currentAddressState" class="form-label">State</label>
                                <input type="text" class="form-control" id="currentAddressState"
                                    name="currentAddressState" required>
                            </div>
                            <div class="col-md-4">
                                <label for="currentAddressZip" class="form-label">ZIP Code</label>
                                <input type="text" class="form-control" id="currentAddressZip"
                                    name="currentAddressZip" required>
                            </div>
                        </div>

                        <!-- Grandparents' Information -->
                        <div class="row g-3 mb-3">
                            <h6>Grandfather's Name</h6>
                            <div class="col-md-12">
                                <label for="grandfatherName" class="form-label">Name</label>
                                <input type="text" class="form-control" id="grandfatherName"
                                    name="grandfatherName">
                            </div>
                            <h6>Grandmother's Name</h6>
                            <div class="col-md-12">
                                <label for="grandmotherName" class="form-label">Name</label>
                                <input type="text" class="form-control" id="grandmotherName"
                                    name="grandmotherName">
                            </div>
                            <div class="col-md-6">
                                <label for="grandparentContact" class="form-label">Contact No</label>
                                <input type="text" class="form-control" id="grandparentContact"
                                    name="grandparentContact">
                            </div>
                            <div class="col-md-6">
                                <label for="grandparentRelationship" class="form-label">Relationship</label>
                                <input type="text" class="form-control" id="grandparentRelationship"
                                    name="grandparentRelationship">
                            </div>
                        </div>
                    </div>
                </div>


                <div class="container"
                    style="background-color: #FCFAEE; padding: 20px; border-radius: 8px; max-width: 1000px; margin: auto; margin-top: 50px; box-shadow: 0px 4px 12px rgba(0, 0, 0, 0.1);">

                    <!-- School Van Section -->
                    <div class="mb-3 last-form">
                        <label class="form-label " style="font-weight: bold;">Does the student use School
                            Van?</label><br>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="schoolVan" id="vanYes"
                                value="yes">
                            <label class="form-check-label" for="vanYes">Yes</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="schoolVan" id="vanNo"
                                value="no">
                            <label class="form-check-label" for="vanNo">No</label>
                        </div>
                    </div>

                    <div class="mb-3 last-form ">
                        <label for="vanStop" class="form-label" style="font-weight: bold;">If Yes: Van Stop</label>
                        <input type="text" class="form-control" id="vanStop" placeholder="Enter van stop">
                    </div>

                    <!-- Day Boarder Section -->
                    <div class="mb-3 last-form">
                        <label class="form-label" style="font-weight: bold;">Does the Student need Day Boarder from
                            3:00
                            pm – 5:30 pm?</label><br>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="dayBoarder" id="dayBoarderYes"
                                value="yes">
                            <label class="form-check-label" for="dayBoarderYes">Yes</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="dayBoarder" id="dayBoarderNo"
                                value="no">
                            <label class="form-check-label" for="dayBoarderNo">No</label>
                        </div>
                    </div>

                    <!-- Serious Case Section -->
                    <div class="mb-3 last-form">
                        <label class="form-label" style="font-weight: bold;">Does your Child have any serious
                            case?</label><br>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="seriousCase" id="seriousCaseYes"
                                value="yes">
                            <label class="form-check-label" for="seriousCaseYes">Yes</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="seriousCase" id="seriousCaseNo"
                                value="no">
                            <label class="form-check-label" for="seriousCaseNo">No</label>
                        </div>
                    </div>

                    <div class="mb-3 last-form">
                        <label for="caseDetails" class="form-label" style="font-weight: bold;">If Yes:</label>
                        <textarea class="form-control" id="caseDetails" rows="2"></textarea>
                    </div>

                    <!-- Emergency Contact Section -->
                    <div class="mb-3 last-form">
                        <label for="emergencyContactPerson" class="form-label" style="font-weight: bold;">Emergency
                            Contact Person:</label>
                        <input type="text" class="form-control" id="emergencyContactPerson"
                            placeholder="Enter contact person">
                    </div>

                    <div class="mb-3 last-form">
                        <label for="emergencyContactNumber" class="form-label" style="font-weight: bold;">Emergency
                            Contact number:</label>
                        <input type="text" class="form-control" id="emergencyContactNumber"
                            placeholder="Enter contact number">
                    </div>

                    <!-- Map Section -->
                    <div class="mb-3 last-form">
                        <label for="map" class="form-label" style="font-weight: bold;">Please draw/describe a
                            map
                            from Kids Castle Montessori School going to your Home.</label>
                        <textarea class="form-control" id="map" rows="3"></textarea>
                    </div>



                </div>


                <!-- Submit Button -->
                <div class="text-center pt-5">
                    <button type="submit" class="btn btn-warning px-5"
                        style="background-color: FCBF40; color: #4E5EB1; font-family: 'Playful', sans-serif; height: 50px;">Submit</button>
                </div>
            </form>
        </div>



        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
