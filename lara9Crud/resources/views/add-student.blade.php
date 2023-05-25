<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Add Student</title>
  <!--CSS ONLY -->
  <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ"
            crossorigin="anonymous"
        />
</head>
<body>
<div class="container" style="margin: top 20px">
      <div class="row">
        <div class="col-md-12">
          <h2>Add Student</h2>
          <form method="post" action="{{url('save-student')}}">
            @csrf
            <div class="md-3">
              <div class="form-lebel">Name</div>
              <input type="text" class="form-control"name="name"
              placeholder="Enter Name">
            </div>
          </form>
        </div>
      </div>
</div>
  
</body>
</html>