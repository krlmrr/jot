.<template>
  <div class="relative">
      <div class="absolute">
        <svg viewBox="0 0 24 24" class="w-5 h-5 mt-2 ml-2">
            <path fill-rule="evenodd" d="M20.2 18.1l-1.4 1.3-5.5-5.2 1.4-1.3 5.5 5.2zM7.5 12c-2.7 0-4.9-2.1-4.9-4.6s2.2-4.6 4.9-4.6 4.9 2.1 4.9 4.6S10.2 12 7.5 12zM7.5.8C3.7.8.7 3.7.7 7.3s3.1 6.5 6.8 6.5c3.8 0 6.8-2.9 6.8-6.5S11.3.8 7.5.8z" clip-rule="evenodd"/>
        </svg>
      </div>
      <input type="text" class="w-64 mr-6 bg-gray-200 border border-gray-400 pl-8 pr-3 py-1 rounded-full text-sm focus:outline-none focus:border-blue-500 focus:shadow focus:bg-gray-100" placeholder="Search..." id="searchTerm" v-model="searchTerm" @input="search">
  </div>
</template>

<script>
    import _ from 'lodash';
    export default {

        name: 'SearchBar',

        data: function() {
            return {
                searchTerm: ''
            }
        },

        methods: {
            search: _.debounce( function(e) {
                if(this.searchTerm.length < 3){
                    return;
                }
                axios.post('/api/search',{searchTerm: this.searchTerm})
                    .then(response =>{
                        console.log(response.data);
                    })
                    .catch(error =>{
                        console.log(error.response);
                    })
            },300)
        }
    }
</script>

<style>

</style>
