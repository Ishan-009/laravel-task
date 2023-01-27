<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>View User</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
    <div class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-8">
            <div class="card" >
              <div class="card-body text-center" style="">

              <h3 style="padding-top: 10px;">View User</h5>


<br>
<br>
				   <div class="container">


<br>
<br>
	<table class="table table-striped table-hover" border="2" >
		<thead class="thead-dark blue">
			<tr>
			<th style="text-align: center">
					User Attributes
				</th>
                <th style="text-align: center">
					User Info
				</th>
            </tr>

		<tbody>



            <tr>
                <td>Name:</td>
                <td>{{ $user->name }}</td>
            </tr>
            <tr>
                <td>Gender


    </td>
    <td>{{ $user->gender }}</td>
    </tr>
    <tr>
    <td>Email:</td>
    <td>{{ $user->email }}</td>
    </tr>
    <tr>
    <td>Mobile:</td>
    <td>{{ $user->mobile }}</td>
    </tr>
    <tr>
    <td>Address:</td>
    <td>{{ $user->address }}</td>
    </tr>
    <tr>
    <td>Hobbies:</td>
    <td>{{ $user->hobbies }}</td>
    </tr>
    <tr>
    <td>Status:</td>
    <td>{{ $user->status }}</td>
    </tr>
    <tr>
    <td>Image:</td>
    <td>
    <img src="{{ Storage::url($user->image) }}" alt="" height="120pxz">
    </td>
    </tr>
</tr>








		</tbody>


	</table>
</div>




    </div>

  </div>
		  </div>
		</div>
	  </div>
</div>
</body>
</html>
