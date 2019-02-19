
    <div class="modal" tabindex="-1" role="dialog" id = "add_passers">
      
      <div class="modal-dialog" role="document">
        
        <div class="modal-content">
          
          <div class="modal-header">

            <h5 class="modal-title"> Add Passers - Entry </h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>

          </div>

          <form action = "{{ url('add_passers') }}" method="POST">
            
            {{ csrf_field() }}

              <div class="modal-body">
                
                  <table class="table table-striped">
                      

                      <tr><td> Examinee            <td> <input type="text" name="examinee"  class="form-control">
                      <tr><td> Campus Eligibility  <td> <input type="text" name="campus_eligibility"  class="form-control">
                      <tr><td> School              <td> <input type="text" name="school"  class="form-control">
                      <tr><td> Division            <td> <input type="text" name="division"  class="form-control">
       
                  </table>
                           

              </div>

              <div class="modal-footer">
                <button type="submit" class="btn btn-primary">  Add Passer </button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              </div>
            
            </div> 

          </form>

      </div>
      
  </div>     