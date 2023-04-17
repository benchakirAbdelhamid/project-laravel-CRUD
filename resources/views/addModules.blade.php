<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
<style>
    a{
        list-style-type: none;
        text-decoration: none
    }
</style>
</head>
<body class="container p-5">

    <form method="POST" action="/saveAddModules">

        @csrf

        <div class="mb-3">
          <label class="form-label">Id Modules</label>
          <input type="text" name="idm" id="idm" class="form-control" >
          @error('idm')
              <span class="text-danger">{{$message}}</span>
          @enderror
        </div>

        <div class="mb-3">
          <label  class="form-label">Title</label>
          <input type="text" name="titlem" id="titlem" class="form-control" >
          @error('titlem')
            <span class="text-danger">{{$message}}</span>
          @enderror
        </div>

        <div class="mb-3">
          <label  class="form-label">Number Of Student</label>
          <input type="text" name="nbrs" id="nbrs" class="form-control" >
          @error('nbrs')
            <span class="text-danger">{{$message}}</span>
          @enderror
        </div>

      

        <button type="submit" class="btn btn-primary">Add Module</button>
      </form>
   
</body>
</html>