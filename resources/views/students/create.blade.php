<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/css/bootstrap.rtl.min.css">
</head>
<body>
    <div>
        <div class="container my-5">
            <div class="row">
                <div class="col-md-6 mx-auto d-grip gap-2">
                <form action="{{ url('students') }}" method="POST">
        @csrf
        <div>
        <label class="form-label">First Name</label>
        <input type="text" name="fname" class="form-control">
        </div>

        <div class="form-group mb-3">
        <label class="form-label">Last Name</label>
        <input type="text" name="lname" class="form-control">
        </div>
        <div class="form-group mb-3">
        <label class="form-label">Email</label>
        <input type="text" name="email" class="form-control">
        </div>
        <div class="form-group mb-3">
        <label class="form-label">Phone</label>
        <input type="text" name="phone" class="form-control">
        </div>
        <div class="form-group mb-3">
        <label class="form-label">Address</label>
        <input type="text" name="address" class="form-control">
        </div>
        <div class="form-group mb-3">
        <label class="form-label">City</label>
        <input type="text" name="city" class="form-control">
        </div>
        <div class="form-group mb-3">
        <label class="form-label">Province</label>
        <input type="text" name="province" class="form-control">
        </div>
        <div class="form-group mb-3">
        <label class="form-label">Zip Code</label>
        <input type="text" name="zip" class="form-control">
        </div>
        <div class="form-group mb-3">
        <label class="form-label">Birthdate</label>
        <input type="date" name="birthdate" class="form-control">
        </div>

        <div class="form-group mb-3">
            <button class="btn btn-dark">Save</button>
        </div>
    </form>
                </div>
            </div>
        </div>
    </div>
    
</body>
</html>