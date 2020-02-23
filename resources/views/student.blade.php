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
       @include('nav')
        <br>
        <nav>
                @include('message')        
        </nav>
       @if($classes->vflag==1)
               {{-- <php echo($classes->time);?> --}}
                   
                   <h1> Voting has started </h1>
                   <hr><br>
                @if($student->stand==0)
                <form class="form-horizontal" action="standV"  method="POST"> 
               <label class="control-label col-sm-4" for="class"> You want to stand for which position?</label>
               <div class="col-sm-4"> 
                
                <select name="class" class="btn btn-primary dropdown-toggle btn-lg col-sm-8" type="button" data-toggle="dropdown">
                  <option value="0" selected>CR</option>
                  <option value="1">SoRT Incharge</option>
                </select>
            </div>
                @endif
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <input type="submit" value="Submit" class="btn btn-primary">
             </form>
            <hr>

            

        @else
            <h1>You'll be able to vote once voting is started for your class<h1>

        @endif
    </body>
</html>

















