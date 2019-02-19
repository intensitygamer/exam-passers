@extends('layouts.app')

@section('title', 'Passers per school')
   
@section('content')
   
      <br><br>
 
      <table class="table" id = "school_lists">
          
          <thead>

            <tr>
              <td> School 
              <td> # of Passers

          </thead>
          
          <tbody>

            <?php foreach($school_by_passers as $school_row): ?>

                <tr>
                    <td><?php echo $school_row->school; ?>
                    <td><?php echo $school_row->passers_cnt; ?>

            <?php endforeach; ?>
            
            </tbody>

      </table>
  
       <a href = "{{ url('lists') }}" type="button" class="btn btn-primary">
      
        List of Passers
      
      </a>
      
     
    @include('modals.add-passers-entry')

@endsection