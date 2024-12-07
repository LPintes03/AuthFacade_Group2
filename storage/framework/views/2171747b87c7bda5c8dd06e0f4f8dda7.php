<?php echo app('Illuminate\Foundation\Vite')("resources\css\app.css"); ?>

<div>
   home

   <form action="/logout" method="POST">
        <?php echo csrf_field(); ?>
        <button>logout</button>
   </form>
</div>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html><?php /**PATH D:\WAD PRES\UserAuth\resources\views/dashboard.blade.php ENDPATH**/ ?>