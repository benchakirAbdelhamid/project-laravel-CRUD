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

    <form method="POST" action="/saveUpdate">

        <?php echo csrf_field(); ?>

        <div class="mb-3">
          <label class="form-label">Id Modules</label>
          <input type="text" name="idm" id="idm" value="<?php echo e($module[0]->idModule); ?>" class="form-control" >
          <?php $__errorArgs = ['idm'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
              <span class="text-danger"><?php echo e($message); ?></span>
          <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </div>

        <div class="mb-3">
          <label  class="form-label">Title</label>
          <input type="text" name="titlem" id="titlem" value="<?php echo e($module[0]->title); ?>" class="form-control" >
          <?php $__errorArgs = ['titlem'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
            <span class="text-danger"><?php echo e($message); ?></span>
          <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </div>

        <div class="mb-3">
          <label  class="form-label">Number Of Student</label>
          <input type="text" name="nbrs" id="nbrs" value="<?php echo e($module[0]->numberOfStudents); ?>" class="form-control" >
          <?php $__errorArgs = ['nbrs'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
            <span class="text-danger"><?php echo e($message); ?></span>
          <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </div>

      

        <button type="submit" class="btn btn-outline-primary">Update Module</button>
      </form>
   
</body>
</html><?php /**PATH C:\xampp\htdocs\project laravel CRUD\resources\views/updateModule.blade.php ENDPATH**/ ?>