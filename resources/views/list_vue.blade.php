@extends('layouts.app')

@section('title', 'Lists')
   
@section('content')

<style type="text/css">

  a {
    color: #999;
  }
  .current {
    color: red;
  }
  ul {
    padding: 0;
    list-style-type: none;
  }
  li {
    display: inline;
    margin: 5px 5px;
  }

  a.first::after {
    content:'...'
  }

  a.last::before {
    content:'...'
  }

</style>

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
    
          <tr v-for="passer in exam_passers | paginate">

            <td>@{{ passer.id }}</td>
            <td>@{{ passer.examinee }}</td>
            <td>@{{ passer.campus_eligibility }}</td>
            <td>@{{ passer.school }}</td>
            <td>@{{ passer.division }}</td>

          </tr>

   
        </tbody>

      </table>

      <ul>
          <li v-for="pageNumber in totalPages" v-if="Math.abs(pageNumber - currentPage) < 3 || pageNumber == totalPages - 1 || pageNumber == 0">
          <a href="#" @click="setPage(pageNumber)"  :class="{current: currentPage === pageNumber, last: (pageNumber == totalPages - 1 && Math.abs(pageNumber - currentPage) > 3), first:(pageNumber == 0 && Math.abs(pageNumber - currentPage) > 3)}"> @{{ pageNumber+1 }}</a>
          </li>
      </ul>

</div>

<script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>

<script src="https://unpkg.com/vuejs-paginate@0.9.0"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.18.0/axios.js"></script>


<script src="{{ URL::asset('js/app.js') }}" ></script>


@endsection