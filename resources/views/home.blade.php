<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>HOME</title>

  <!-- css -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

  <!-- js -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</head>

<body>
  <div class="container-fluid">
    <div class="container mt-5">

      <div class="mb-3">
        <form action="/logout" method="post">
          @csrf
          <button class="btn btn-dark fw-bold" type="submit">Logout</button>
        </form>
      </div>

      <div class="mb-3">
        <button class="btn btn-dark fw-bold" type="button" data-bs-toggle="modal" data-bs-target="#createStudents">Add Students</button>

        <form action="/home/store" method="post">
          @csrf
          <div class="modal fade" id="createStudents" tabindex="-1">
            <div class="modal-dialog modal-dialog-centered">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title">Add students</h5>
                </div>
                <div class="modal-body">
                  <div class="row">

                    <div class="col-12">
                      <div class="mb-3 form-floating">
                        <input type="text" name="last_name" id="lastName" class="form-control" placeholder="Lastname">
                        <label for="lastName">Lastname</label>
                      </div>
                      <div class="mb-3 form-floating">
                        <input type="text" name="first_name" id="firstName" class="form-control" placeholder="Firstname">
                        <label for="firstName">Firstname</label>
                      </div>
                      <div class="mb-3 form-floating">
                        <input type="numbers" name="age" id="age" class="form-control" placeholder="Age">
                        <label for="age">Age</label>
                      </div>
                      <div class="mb-3 form-floating">
                        <select name="gender" id="gender" class="form-select">
                          <option value="Male">Male</option>
                          <option value="Female">Female</option>
                        </select>
                        <label for="gender">Gender</label>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn border border-dark" data-bs-dismiss="modal">Cancel</button>
                  <button type="submit" class="btn btn-dark">Create</button>
                </div>
              </div>
            </div>
          </div>

        </form>
      </div>

      <div class="table-responsive">
        <table class="table table-striped">
          <thead class="table table-dark">
            <tr>
              <th>Lastname</th>
              <th>Fistname</th>
              <th>Age</th>
              <th>Gender</th>
              <th colspan="2">Actions</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($student as $students)
            <tr>
              <td>{{ $students->last_name }}</td>
              <td>{{ $students->first_name }}</td>
              <td>{{ $students->age }}</td>
              <td>{{ $students->gender }}</td>
              <td>
                <button type="button" data-bs-toggle="modal" data-bs-target="#editModal-{{ $students->id }}" class="btn btn-warning">
                  Edit
                </button>

                <form action="/home/{{ $students->id }}" method="post">
                  @method('put')
                  @csrf
                  <div class="modal fade" id="editModal-{{ $students->id }}" tabindex="-1">
                    <div class="modal-dialog modal-dialog-centered">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title">Update Students</h5>
                        </div>
                        <div class="modal-body">
                          <div class="row">
                            <div class="col-12">
                              <div class="mb-3 form-floating">
                                <input type="text" name="first_name" id="updateFirstName" class="form-control" placeholder="First name" value="{{ $students->last_name }}">
                                <label for="updateFirstName">Enter your last name</label>
                              </div>
                            </div>
                            <div class="col-12">
                              <div class="mb-3 form-floating">
                                <input type="text" name="last_name" id="updateLastName" class="form-control" placeholder="Last name" value="{{ $students->first_name }}">
                                <label for="updateLastName">Enter your first name</label>
                              </div>
                            </div>
                            <div class="col-12">
                              <div class="mb-3 form-floating">
                                <input type="number" name="age" id="updateAge" class="form-control" placeholder="Age" value="{{ $students->age }}">
                                <label for="updateAge">Age</label>
                              </div>
                            </div>
                            <div class="col-12">
                              <div class="mb-3 form-floating">
                                <select name="gender" id="updateGender" class="form-select" placeholder="Gender" value="{{ $students->gender }}">
                                  <option value="Male">Male</option>
                                  <option value="Female">Female</option>
                                </select>
                                <label for="updateAge">Gender</label>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="modal-footer">
                          <button class="btn border border-dark" data-bs-dismiss="modal">Cancel</button>
                          <button class="btn btn-dark" type="submit">Update</button>
                        </div>
                      </div>
                    </div>
                  </div>
                </form>
              </td>
              <td>
                <button class="btn btn-danger" type="button" data-bs-toggle="modal" data-bs-target="#deleteModal">Delete</button>

                <form action="/home/{{ $students->id }}" method="post">
                  @method('delete')
                  @csrf
                  <div class="modal fade" id="deleteModal" tabindex="-1">
                    <div class="modal-dialog modal-dialog-centered">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title">Are you sure you want to delete?</h5>
                        </div>
                        <div class="modal-footer">
                          <button type="button" data-bs-dismiss="modal" class="btn border border-danger text-danger">Cancel</button>
                          <button type="submit" class="btn btn-danger">Delete</button>
                        </div>
                      </div>
                    </div>
                  </div>
                </form>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>
</body>

</html>