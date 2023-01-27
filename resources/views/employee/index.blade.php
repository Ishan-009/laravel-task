<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>View employee</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>

    <div class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-8">
            <div class="card" >
              <div class="card-body text-center" style="">

              <h3 style="padding-top: 10px;">View Employee</h5>


<br>
<br>
				   <div class="container">

	<a style= "float:right" name="Add" id="button001" class="btn btn-primary" href="{{route('employee.create')}}" role="button" ><i class="fa fa-plus-square" aria-hidden="true">Add employee</i></a>
<br>
<br>
<table class="table table-bordered">
    <thead>
        <tr>
            <th>ID</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Email</th>
            <th>Company</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach($employees as $employee)
            <tr>
                <td>{{ $employee->id }}</td>
                <td>{{ $employee->first_name }}</td>
                <td>{{ $employee->last_name }}</td>
                <td>{{ $employee->email }}</td>
                <td>{{ $employee->company->name }}</td>
                <td>
                    <a href="{{ route('employee.edit', $employee->id) }}" class="btn btn-primary">Edit</a>
                    <a href="{{ route('employee.destroy', $employee->id) }}" class="btn btn-danger" onclick="event.preventDefault();document.getElementById('delete-form-{{ $employee->id }}').submit();">Delete</a>
                    <form id="delete-form-{{ $employee->id }}" action="{{ route('employee.destroy', $employee->id) }}" method="POST" style="display: none;">
                        @csrf
                        @method('DELETE')
                    </form>
                </td>
            </tr>
        @endforeach
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
