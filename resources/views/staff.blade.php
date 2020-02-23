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
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
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
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
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
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <input type="submit" value="Submit" class="btn btn-primary">
                                
                            </form>
<hr>
                        <form class="form-horizontal" action="startV"  method="POST"> 
                        <h1> Start Election for a class </h1>
                            <br><br>
                            <label class="control-label col-sm-1" for="class"> Select Class:</label>
                            <div class="col-sm-4"> 
                                <select name="class" class="btn btn-primary dropdown-toggle btn-lg col-sm-8" type="button" data-toggle="dropdown">
                                    @foreach($classes as $classes)
                            
                                @if($classes->vflag==0)
                                <option value={{$classes->name}} selected><?php echo $classes->name ?></option>
                                @endif

                            @endforeach
                         
                                </select>
                            </div>
                                <br><br><br>
                                <label for="deadline">Deadline for voting</label>
                                <input type="datetime-local" id="deadline" name="deadline">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">    
                            <input type="submit"  value="Submit" class="btn btn-primary">

        
        {{-- <div id="sign_up">
            
            <form class="form-horizontal" action="user_create"  method="post" target="_blank" onsubmit="try {return window.confirm(&quot;You are submitting information to an external page.\nAre you sure?&quot;);} catch (e) {return false;}"> --}}
                
               
                {{-- <div class="form-group">
                    <label class="control-label col-sm-2" for="email">Email:</label>
                    <div class="col-sm-10">
                        <input type="email" class="form-control" id="email" placeholder="Enter email">
                    </div> --}}
                {{-- </div>
                <div class="form-group">
                    <label class="control-label col-sm-2" for="pwd">Password:</label>
                    <div class="col-sm-10"> 
                    <input type="password" class="form-control" id="pwd" placeholder="Enter password">
                    </div> --}}
                {{-- </div>
                <div class="form-group">
                        <label class="control-label col-sm-2" for="pwd">Confirm Password:</label>
                        <div class="col-sm-10"> 
                        <input type="password" class="form-control" id="pwd" placeholder="Enter password">
                        </div>
                    </div> --}}
                

                {{-- <label> Submit Buttton:</label>
                <input type="submit" value="Submit" class="btn btn-primary">
                
                
                

            </form>
        </div> --}}
        {{-- <section>
            <div id="myCarousel" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#myCarousel" data-slide-to="1"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="item active">
                        <img src="http://freeday.in/wp-content/uploads/2017/09/goomo-romo-code-960x540.png" >
                    </div>                        
                    <div class="item">
                        <img src="https://www.cheapskyflights.com/wp-content/uploads/2014/12/SKY-FLIGHTS.jpg">
                    </div>
                </div>
                <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#myCarousel" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right"></span>
                    <span class="sr-only">Next</span>
                </a>                    
            </div>     --}}
    </body>
</html>

















