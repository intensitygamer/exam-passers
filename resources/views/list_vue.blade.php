@extends('layouts.app')

@section('title', 'Lists')
   
@section('content')

<div id="list_passers">

    <table>

      <thead>
              <tr>
                <td> Examinee ID
                <td> Examinee
                <td> Campus
                <td> School
                <td> Divisions
            
        </thead>

      <tbody>
            
    <paginate
      :page-count="10"
      :container-class="pagination"
      :prev-text="prev"
      :next-text="next"
      :click-handler="clickCallback">
     
      <span slot="prevContent">Changed previous button</span>
      <span slot="nextContent">Changed next button</span>

        <tr v-for="passer in exam_passers">

          <td>@{{ passer.id }}</td>
          <td>@{{ passer.examinee }}</td>
          <td>@{{ passer.campus_eligibility }}</td>
          <td>@{{ passer.school }}</td>
          <td>@{{ passer.division }}</td>

        </tr>

      </tbody>

    </table>

</div>

<script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.18.0/axios.js"></script>

<script src="https://unpkg.com/vuejs-paginate@0.9.0"></script>

<script src="{{ URL::asset('js/app.js') }}" ></script>


@endsection