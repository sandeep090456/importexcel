<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Import Excel</title>
</head>
<body>
    <section style="padding-top:20px;">
        <div class="container py-5">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header"><br>
                            <h4 style="margin-left: 20px;">IMPORT EXCEL
                            <a href="{{ route('products.create') }}" class="btn btn-success float-right">import file</a>
                            </h4>  
                        </div>
                        <div class="card-body">
                            <table class="table table-bordered table-hover table-responsive-lg">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>School name</th>
                                        <th>name</th>
                                        <th>Class</th>
                                        <th>Subject</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                   @foreach ($products as $product)
                                   <tr>
                                   <td>{{ $product->id }}</td>
                                   <td>{{ $product->school_name }}</td>
                                   <td>{{ $product->name }}</td>
                                   <td>{{ $product->class }}</td>
                                   <td>{{ $product->subject }}</td>
                                   <td>
                                   <form action="{{ route('students.destroy',$student->id) }}" method="POST">
                                   <a href="{{ route('students.edit',$student->id) }}"><i class="fa fa-pencil" style="padding-left: 20px;"></i></a>
                                   @csrf
                                   @method('DELETE')
                                   
                                   <button type="submit" title="delete" style="border: none; background-color:transparent;"><i class="fa fa-trash"></i></button>
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
    </section>
</body>
</html>