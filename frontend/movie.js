var vue_BlueBite = new Vue({
  el: '#app',
  data: {
      movieItem: "",
      cur_index: 0
  },
  methods: {
    fetchMovie: function(ind){
      $.ajax({
      url: 'http://api.rottentomatoes.com/api/public/v1.0/lists/movies/box_office.json?limit=5&country=us&apikey=6czx2pst57j3g47cvq9erte5',
      type: 'get',
      dataType: 'jsonp',
      async: false,
      success: function(data) {
          var self = this;
          self.movieItem = data.movies[ind];
          console.log(self.movieItem);
          
          // Set variables
          vue_BlueBite.$set('movieItem', data.movies[ind]);
          vue_BlueBite.$set('cur_index', ind);
        }
      });
    }
  },
  ready: function () {
    this.fetchMovie(0)
  }
});

