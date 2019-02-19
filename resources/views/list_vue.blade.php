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

        <tr v-for="passer in passers">

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

      el:'#app',

      data:{
        passers:[]
      },

      created: function() {

        Vue.axios.get('/get_passers')

        .then(res => res.json())

        .then(res => {

          this.passers = res;
        })
      }
    })

  </script>

@endsection