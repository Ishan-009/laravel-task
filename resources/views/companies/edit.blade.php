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
            <h5 class="card-title text-center">Edit company</h5>
            <form method="POST" action="{{ route('company.update', $company->id) }}"  enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ old('name', $company->name) }}">
                    @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>


                    <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{ old('email', $company->email) }}" >
                    @error('email')
                    <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                    </div>

                    <div class="form-group">
                        <label for="name">Website</label>
                        <input type="text" class="form-control @error('website') is-invalid @enderror" id="website" name="name" value="{{ old('website', $company->website) }}">
                        @error('website')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        @if($company->logo)
                        <img src="{{ asset('storage/images'.$company->logo) }}" alt="{{ $company->logo }}" class="img-thumbnail" width="200">

                        @endif

                    </div>
                    <div class="form-group">

                        <input type="file" class="form-control-file" id="logo" name="logo" style="display:none" value="{{$company->logo}}" accept="image/jpeg, image/png">
                        <label for="logo" class="btn btn-secondary">Update Logo</label>

                    </div>
                    <button type="submit" class="btn btn-primary">Update</button>

                    </form>


                </div>
            </div>
        </div>
  </body>
</html>
