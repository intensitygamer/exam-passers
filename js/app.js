
var app = new Vue({

      el: '#list_passers',

      data: {

         exam_passers: []

      }, 

        searchKey: '',
        currentPage: 0,
        itemsPerPage: 50,
        resultCount: 0

	 	mounted() {
	          axios.get('get_passers').then(response => {
	            this.exam_passers = response.data
	          })
	    },
   	
   	computed: {
        totalPages: function() {
          return Math.ceil(this.resultCount / this.itemsPerPage)
        }
    },
    methods: {
        setPage: function(pageNumber) {
          this.currentPage = pageNumber
        }
    },
    filters: {
        paginate: function(list) {
            this.resultCount = list.length
            if (this.currentPage >= this.totalPages) {
              this.currentPage = this.totalPages - 1
            }
            var index = this.currentPage * this.itemsPerPage
            return list.slice(index, index + this.itemsPerPage)
        }
    }
})
 