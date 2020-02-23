<header>
    <div style="background-color: blue">
        <img src="https://www.minuteschool.com/wp-content/uploads/2019/07/blog-20190722.jpg" width="10%">
        <h1 style="color:white" > Election Dashboard</h1>
         <style "text/css">
             a{
                 color: white;
             }
         </style>   
        
        <a id="header_link" href="<?php echo e(route('logout')); ?>"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        <?php echo e(__('Logout')); ?>

                                    </a>

                                    <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                                        <?php echo csrf_field(); ?>
                                    </form>

    </div>
 </header><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/OTC/resources/views/nav.blade.php ENDPATH**/ ?>