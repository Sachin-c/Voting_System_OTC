<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>OTC</title>
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    
    
    
    <style type="text/css">
        h1{
            display:inline;
            text-align:center;
        }
        #header_link{
            text-decoration:none;
            float:right;
            display:block;
            margin-right:0px;
            clear:left;
            padding:1%;
            
        }
		#logo_link{
			text-decoration:none;
		}
        .carousel {
            width:900px;
            height:300px;
             
        }
        #sign_up{
            text-decoration:none;
            float:right;
            display:block;
            margin-right:0px;
            clear:left;
            padding:1%;
            
        }
    </style>    
        
        
        
    </head>
    <body>
       <?php echo $__env->make('nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <br>
        <nav>
                <?php echo $__env->make('message', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>        
        </nav>
      
            <form class="form-horizontal" action="storeT"  method="POST"> 

            <h3>Add class teacher</h3>
            <br>
            <div class="form-group">
                    <label class="control-label col-sm-1" for="email"> Email:</label>
                    <div class="col-sm-6"> 
                        <input type="text" name="email" class="form-control" id="email" placeholder="Enter Email">
                    </div>
                </div>
                <br><br>
                <label class="control-label col-sm-1" for="class"> Select Class:</label>
                <div class="col-sm-4"> 
					<select name="class" class="btn btn-primary dropdown-toggle btn-lg col-sm-8" type="button" data-toggle="dropdown">
					  <option value="d17a" selected>d17a</option>
					  <option value="d17b">d17b</option>
					  <option value="d17c">d17c</option>
					</select>
                </div>
                <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
                <input type="submit" value="Submit" class="btn btn-primary">
                
                </form>
                <form class="form-horizontal" action="storeCC"  method="POST"> 
<hr>
                    <h3>Add class counselor</h3>
                    <br>
                    <div class="form-group">
                            <label class="control-label col-sm-1" for="email"> Email:</label>
                            <div class="col-sm-6"> 
                                <input type="text" name="email" class="form-control" id="email" placeholder="Enter Email">
                            </div>
                        </div>
                        <br><br>
                        <label class="control-label col-sm-1" for="class"> Select Class:</label>
                        <div class="col-sm-4"> 
                            <select name="class" class="btn btn-primary dropdown-toggle btn-lg col-sm-8" type="button" data-toggle="dropdown">
                              <option value="d17a" selected>d17a</option>
                              <option value="d17b">d17b</option>
                              <option value="d17c">d17c</option>
                            </select>
                        </div>
                        <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
                        <input type="submit" value="Submit" class="btn btn-primary">
                        
                        </form>
                        <form class="form-horizontal" action="storeS"  method="POST"> 
<hr>
                            <h3>Add student</h3>
                            <br>
                            <div class="form-group">
                                    <label class="control-label col-sm-1" for="email"> Email:</label>
                                    <div class="col-sm-6"> 
                                        <input type="text" name="email" class="form-control" id="email" placeholder="Enter Email">
                                    </div>
                                </div>
                                <br><br>
                                <label class="control-label col-sm-1" for="class"> Select Class:</label>
                                <div class="col-sm-4"> 
                                    <select name="class" class="btn btn-primary dropdown-toggle btn-lg col-sm-8" type="button" data-toggle="dropdown">
                                      <option value="d17a" selected>d17a</option>
                                      <option value="d17b">d17b</option>
                                      <option value="d17c">d17c</option>
                                    </select>
                                </div>
                                <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
                                <input type="submit" value="Submit" class="btn btn-primary">
                                
                            </form>
<hr>
                        <form class="form-horizontal" action="startV"  method="POST"> 
                        <h1> Start Election for a class </h1>
                            <br><br>
                            <label class="control-label col-sm-1" for="class"> Select Class:</label>
                            <div class="col-sm-4"> 
                                <select name="class" class="btn btn-primary dropdown-toggle btn-lg col-sm-8" type="button" data-toggle="dropdown">
                                    <?php $__currentLoopData = $classes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $classes): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            
                                <?php if($classes->vflag==0): ?>
                                <option value=<?php echo e($classes->name); ?> selected><?php echo $classes->name ?></option>
                                <?php endif; ?>

                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                         
                                </select>
                            </div>
                                <br><br><br>
                                <label for="deadline">Deadline for voting</label>
                                <input type="datetime-local" id="deadline" name="deadline">
                            <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">    
                            <input type="submit"  value="Submit" class="btn btn-primary">

        
        
                
               
                
                
                
                

                
        
    </body>
</html>

















<?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/OTC/resources/views/staff.blade.php ENDPATH**/ ?>