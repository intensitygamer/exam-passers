@extends('layouts.app')

@section('title', 'Lists')
   
@section('content')
 

<link rel="stylesheet" href="{{ URL::asset('css/jquery.dataTables.min.css') }}" crossorigin="anonymous">

        
<script src="{{ URL::asset('js/jquery.dataTables.min.js') }}" ></script>

<script type="text/javascript">
    
    $("document").ready(function(){
    
      $("#exam_passers_table").dataTable();
    
    });


</script>

<div class="row">

  <form action = "{{ url('search_passers') }}" method="POST">
              
  {{ csrf_field() }}

  <input type="text" name="search_field"> 

  <button type="submit" name="" class="btn btn-primary"> Search <i class="fa fa-search"></i> </button>
           
  </form>

</div>

      @if(isset($search_field))
      
        Search Result for: <span class="text text-danger"><?php echo $search_field; ?> </span>
      
      @endif
      
      <br><br>

    <div class="row">

      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#add_passers">
      
        Add Entry
      
      </button>

      <br><br>

    </div>
         
      <table class="table" id = "exam_passers_table">
          
          <thead>

            <tr>
              <td> Examinee ID
              <td> Examinee
              <td> Campus
              <td> School
              <td> Divisions
          
          </thead>
          
          <tbody>

            <?php foreach($passers as $passers_row): ?>

                <tr><td><?php echo $passers_row->id; ?>
                    <td><?php echo $passers_row->examinee; ?>
                    <td><?php echo $passers_row->campus_eligibility; ?>
                    <td><?php echo $passers_row->school; ?>
                    <td><?php echo $passers_row->division; ?>

            <?php endforeach; ?>
            
            </tbody>

      </table>
  
       <a href = "{{ url('school_by_passers') }}" type="button" class="btn btn-primary">
      
        Schools by Passer
      
      </a>
      
     
    @include('modals.add-passers-entry')

@endsection