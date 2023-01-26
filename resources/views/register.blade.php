<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>REGISTER</title>

  <!-- css -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

  <!-- js -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</head>

<body>
  <div class="container-fluid">
    <div class="container mt-5">
      <div class="card">
        <div class="card-header">
          <h1>Register</h1>
        </div>
        <div class="card-body">
          <form action="/store" method="post">
            @csrf
            <div class="row">
              <div class="col-12">
                <div class="mb-3 form-floating">
                  <input type="text" name="last_name" id="lastName" placeholder="Lastname" class="form-control">
                  <label for="lastName">Enter your lastname</label>
                </div>
              </div>
              <div class="col-12">
                <div class="mb-3 form-floating">
                  <input type="text" name="first_name" id="firstName" placeholder="Firstname" class="form-control">
                  <label for="firstName">Enter your firstname</label>
                </div>
              </div>
              <div class="col-12">
                <div class="mb-3 form-floating">
                  <input type="email" name="email" id="email" placeholder="Email" class="form-control">
                  <label for="email">Enter your email</label>
                </div>
              </div>
              <div class="col-12">
                <div class="mb-3 form-floating">
                  <input type="password" name="password" id="password" placeholder="Password" class="form-control">
                  <label for="lastName">Enter your password</label>
                </div>
              </div>
              <div class="col-12">
                <div class="mb-3 form-floating">
                  <input type="password" name="password_confirmation" id="lastName" placeholder="Lastname" class="form-control">
                  <label for="lastName">Confirm password</label>
                </div>
              </div>
              <div class="col-12">
                <button type="submit" class="btn btn-dark fw-bold float-end">Register</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</body>

</html>