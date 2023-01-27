<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>View company</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>

    <div class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-8">
            <div class="card" >
              <div class="card-body text-center" style="">

              <h3 style="padding-top: 10px;">View company</h5>


<br>
<br>
				   <div class="container">

	<a style= "float:right" name="Add" id="button001" class="btn btn-primary" href="{{route('company.create')}}" role="button" ><i class="fa fa-plus-square" aria-hidden="true">Add company</i></a>
<br>
<br>
	<table class="table table-striped table-hover" border="2" >
		<thead class="thead-dark blue">
			<tr>
			<th style="text-align: center">
					Name
				</th>

				<th style="text-align: center" >
					Email
				</th>
				<th style="text-align: center" >
					Logo

				</th>
				<th style="text-align: center" >
					Website

				</th>

				<th colspan="6" style="text-align: center">
				Actions
				</th>
			</tr>
		</thead>
		<tbody>

            @foreach($companies as $company)
            <tr>
                <td>{{ $company->name }}</td>
                <td>{{ $company->email }}</td>
                <td>{{ $company->logo }}</td>
                <td>{{ $company->website }}</td>
                <td><img src="{{ asset($company->logo) }}" alt="" height="50px">

                </td>
                <td>
                    <a href="{{route('company.edit',$company->id)}}" class="btn btn-warning">Edit</a>
                 <form action="{{ route('company.destroy', $company->id) }}" method="POST">
                 @csrf
                 @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
                    <a href="{{route('company.show',$company->id)}}" class="btn btn-info">View</a>
                </td>
            </tr>
            @endforeach
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
