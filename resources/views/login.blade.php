<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>LOGIN</title>

  <!-- css -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

  <!-- js -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  <script src="{{ asset('js/validation.js') }}" defer></script>

</head>

<body>
  <div class="container-fluid">
    <div class="container mt-5 ">
      <div class="card">
        <div class="card-header">
          <h1>Login</h1>
        </div>
        <div class="card-body">
          <form action="/login/loginQuery" method="post" class="needs-validation" novalidate>
            @csrf
            <div class="row">
              <div class="col-12">
                <div class="mb-3 form-floating">
                  <input type="email" name="email" id="email" class="form-control" placeholder="Email" required>
                  <label for="email">Email</label>
                  <div class="invalid-feedback">
                    Please fill-up the email.
                  </div>
                </div>
              </div>
              <div class="col-12">
                <div class="mb-3 form-floating">
                  <input type="password" name="password" id="password" class="form-control" placeholder="Password" required>
                  <label for="password">Password</label>
                  <div class="invalid-feedback">
                    Please fill-up the password.
                  </div>
                </div>
              </div>
              <div class="col-12">
                <div class="mb-3">
                  <button type="submit" class="btn btn-dark fw-bold float-end">Login</button>
                </div>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</body>

</html>