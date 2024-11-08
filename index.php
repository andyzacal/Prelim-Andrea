<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Student Enrollment Form</title>
    
  <style>
    body {
      font-family: Helvetica, Arial, sans-serif;
    }
    .form-group {
      margin-bottom: 15px; /* Change to your preferred spacing */
    }
    .btn {
        margin-top: 10px;
      margin-bottom: 30px; /* Add space above the button */
    }
    .form-container {
      padding: 20px; /* Adjust padding inside form container */
    }
    .status-passed { color: green; font-weight: bold; }
    .status-failed { color: red; font-weight: bold; }
    .btn-green {
      background-color: #28a745 !important; /* Green color */
      border-color: #28a745 !important;
      color: white !important;
    }
  </style>

</head>
<body>
<div class="container d-flex flex-column align-items-center">
    <h2 class="text-center my-4">Student Enrollment And Grade Processing System</h2>

    <form id="enrollmentForm" action="#" method="post" onsubmit="showGradeForm(event)" class="w-100 w-md-75 w-lg-50">
      <h5>Student Enrollment Form</h5>

      <div class="mb-3">
        <label for="first_name">First Name</label>
        <input type="text" id="first_name" name="first_name" class="form-control" required>
      </div>
      <div class="mb-3">
        <label for="last_name">Last Name</label>
        <input type="text" id="last_name" name="last_name" class="form-control" required>
      </div>
      <div class="mb-3">
        <label for="age">Age</label>
        <input type="number" id="age" name="age" class="form-control" required>
      </div>
      <div class="mb-3">
        <label>Gender:</label>
        <div>
          <input type="radio" id="male" name="gender" value="Male" required checked>
          <label for="male">Male</label>
          <input type="radio" id="female" name="gender" value="Female" required>
          <label for="female">Female</label>
        </div>
      </div>
      <div class="mb-3">
        <label for="course">Course</label>
        <select id="course" name="course" class="form-select" required>
          <option value="BSIT">BSIT</option>
          <option value="BSHM">BSHM</option>
          <option value="BSHRM">BSBA</option>
        </select>
      </div>
      <div class="mb-3">
        <label for="email">Email</label>
        <input type="email" id="email" name="email" class="form-control" required>
      </div>
      <button type="submit" class="btn btn-primary w-10">Submit Student Information</button>
    </form>
</body>
</html>