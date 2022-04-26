<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>COMPANY DETAILS</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" >
<script src="https://kit.fontawesome.com/786275c29c.js" crossorigin="anonymous"></script>
</head>
<body>
<div class="container mt-2">
<div class="row">
<div class="col-lg-12 margin-tb">
<div class="pull-left">
<h2>COMPANY DETAILS</h2>
</div>
<div class="pull-right mb-2">
<a class="btn btn-success" href="{{ route('companies.create') }}"> Create Company</a>
</div>
</div>
</div>
@if ($message = Session::get('success'))
<div class="alert alert-success">
<p>{{ $message }}</p>
</div>
@endif
<table class="table table-bordered">
<tr>
<th>S.No</th>
<th>Company Name</th>
<th>Company Email</th>
<th>Company Address</th>
<th width="280px">Action</th>
</tr>
@foreach ($companies as $company)
<tr>
<td>{{ $company->id }}</td>
<td>{{ $company->name }}</td>
<td>{{ $company->email }}</td>
<td>{{ $company->address }}</td>
<td>
<form action="{{ route('companies.destroy',$company->id) }}" method="Post">
<a class="btn btn-primary " href="{{ route('companies.edit',$company->id) }}"><i class="fa-solid fa-pen"style="margin-right: 10px;"></i>Edit</a>
@csrf
@method('DELETE')
<button type="submit" class="btn btn-danger"><i class="fa-solid fa-trash"style="margin-right: 10px;"></i>Delete</button>
</form>
</td>
</tr>
@endforeach
</table>
{!! $companies->links() !!}
</body>
</html>
