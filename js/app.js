
var app = new Vue({

      el: '#list_passers',

      data: {

         exam_passers: []

      }, 

	 	mounted() {
	          axios.get('get_passers').then(response => {
	            this.exam_passers = response.data
	          })
	    }



});