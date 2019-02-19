<!Doctype html>

<html lang="en">

  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>List of Passers</title>

  </head>

  <body>

    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#add_passers">
      Add Entry
    </button>

    <table class="table">
        
        <tr><td> Examinee ID
            <td> Examinee
            <td> Campus
            <td> School
            <td> Divisions
      
    </table>


 

    <div class="modal" tabindex="-1" role="dialog" id = "add_passers">
      
      <div class="modal-dialog" role="document">
        
        <div class="modal-content">
          
          <div class="modal-header">

            <h5 class="modal-title"> Add Passers - Entry </h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>

          </div>

          <div class="modal-body">
            
            <table class="table table-striped">
                

                <tr><td> Examinee            <td> <input type="text" name=""class="form-control">
                <tr><td> Campus Eligibility  <td> <input type="text" name="" class="form-control">
                <tr><td> School              <td> <input type="text" name=""  class="form-control">
                <tr><td> Division            <td> <input type="text" name=""  class="form-control">


            </table>          

          </div>

          <div class="modal-footer">
            <button type="button" class="btn btn-primary">  Add Passer </button>
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          </div>
        
        </div> 

      </div>

    </div>

    <!-- Optional JavaScript -->
   
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    
    <script src="assets/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>

    <script src="assets/popper.min.js" crossorigin="anonymous"></script>

    <script src="assets/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  
  </body>

</html>