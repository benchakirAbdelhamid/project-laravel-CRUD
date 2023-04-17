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
<body class="container p-5 text-center">
 
   <a href="/AddModules" class="btn btn-primary mb-4">Add new modules</a>

    @if (count($modules)>0)
        <table class="table table-striped" >
        <tr>
            <th>Id Module</th>
            <th>Title</th>
            <th>Number Of Student</th>
            <th>Update</th>
            <th>Delete</th>
        </tr>
    @foreach ($modules as $module)
        <tr>
            <td> {{$module->idModule  }} </td>
            <td> {{$module->title  }} </td>
            <td> {{$module->numberOfStudents  }} </td>
            <td> <a href="/update/{{$module->idModule}}" class="btn btn-primary">Update</a> </td>
            <td> <a href="/delete/{{$module->idModule}}" class="btn btn-danger">Delete</a> </td>
        </tr>
    @endforeach  
        </table>
    @else
        <p>pas de modules dans la base de donnes</p>
    @endif



    
</body>
</html>