<!-- //php
$con=mysqli_connect("localhost","root","") or die("Unable to connect");
mysqli_select_db($con,"star");
 if(isset($_POST["insert"]))  
 {  
      $rate=$_POST['rating'];
      print_r($rate);
}
 ?> -->
 
 <!DOCTYPE html>  
 <html>  
      <head>  
           <title>Add movies</title>  
 
       
           
           <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
           <link rel="stylesheet" href="add.css">


      </script>
      </head>  
      <body>  
      <h1 class="title">Star Rating System</h1>
        

           <br /><br />  
           <div class="container" >  
            

                <form method="post" enctype="multipart/form-data">  
                 
      
      
        <br>
      <br>
      <label for="Rating"><h1>Ratings :</h1></label>
      
      <div class="star-wrapper">

        <label for="star-1">&#x2605;</label>
        <input type="radio" id="star-1" name="rating" value="1">
        <label for="star-2">&#x2605;</label>
        <input type="radio" id="star-2" name="rating" value="2">
        <label for="star-3">&#x2605;</label>
        <input type="radio" id="star-3" name="rating" value="3">
        <label for="star-4">&#x2605;</label>
        <input type="radio" id="star-4" name="rating" value="4">
        <label for="star-5">&#x2605;</label>
        <input type="radio" id="star-5" name="rating" value="5">



   
   
      </div>
      
     
                     <input id="submit" type="submit" name="insert" value="Submit">
                     <br>
      <br>
           </div> 



     <script type="text/javascript" src="add.js"></script>

      </body>  
 </html>  
 <script>  
 
 </script>  