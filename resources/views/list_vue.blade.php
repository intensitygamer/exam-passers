@extends('layouts.app')

@section('title', 'Lists')
   
@section('content')

  <div id="app">

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

  <script> 

    const app = new Vue({

      el: '#app',

      data: {

        exam_passers:[]

      }, 

      mounted() {

          axios.get('get_passers').then(response => {
            this.exam_passers = response
          })

        }

      }); 

  </script>

@endsection