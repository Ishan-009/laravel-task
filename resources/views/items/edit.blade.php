<!-- resources/views/items/edit.blade.php -->
    <?php
        print_r($errors->all());
    ?>
    <!doctype html>
    <html lang="en">
      <head>
        <title>Title</title>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
      </head>
      <body>
        <div class="container-fluid h-100 d-flex justify-content-center align-items-center">
            <div class="card" style="width: 30rem;">
              <div class="card-body">
                <h5 class="card-title text-center">Registration Form</h5>
                <form action="{{ route('items.update', $item->id) }}" method="post">
                    @csrf
                    @method('PUT')
                  <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" id="name" placeholder="Enter name" value="{{$item->name}}" name="name">
                  </div>
                  <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" id="email" placeholder="Enter email" value="{{$item->email}}" name="email">
                  </div>
                  <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" id="password" placeholder="Enter password" value="{{$item->password}}" name="password">
                  </div>
                  <div class="form-group">
                    <label for="confirmPassword">Confirm Password</label>
                    <input type="password" class="form-control" id="confirmPassword" placeholder="Confirm password" value="{{$item->confirm_password}}" name="confirm_password">
                  </div>
                  <div class="form-group">
                    <label for="country">Country</label>
                    <select class="form-control" id="country" value="{{$item->country}}" name="country">
                        <option value="{{$item->country}}" selected>India</option>
                      <option>India</option>
                      <option>United States</option>
                      <option>United Kingdom</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="state">State</label>
                    <input type="text" class="form-control" id="state" placeholder="Enter state" value="{{$item->state}}" name="state">
                  </div>
                  <div class="form-group">
                    <label for="address">Address</label>
                    <textarea class="form-control" id="address" rows="3" name="address">{{$item->address}}</textarea>
                  </div>
                  <div class="form-group">
                    <label for="gender">Gender</label>
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="gender" id="male" value="{{$item->gender}}" checked>
                      <label class="form-check-label" for="male">
                        Male
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="gender" id="female" value="female">
                      <label class="form-check-label" for="female">
                        Female
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="gender" id="other" value="other">
                      <label class="form-check-label" for="other">
                        Other
                      </label>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="dob">Date of Birth</label>
                    <input type="date" class="form-control" id="dob" value="{{$item->dob}}" name="dob">

                </div>
                <button type="submit" class="btn btn-primary btn-block">Submit</button>
              </form>
            </div>
          </div>
        </div>

        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
      </body>
    </html>

