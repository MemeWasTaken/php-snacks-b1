const App = new Vue(
  {
    el: '#app',
    data: {
      cards: [],
      bodyFilter: 'all',
      noviceFilter: 'all',
      filteredCars: [],
    },
    created() {
      axios.get('http://localhost/php-snacks-b1/server/controller.php').then((result) => {
        this.cards = result.data.results;
        this.filteredCars = this.cards;
        console.log(this.cards);
      }).catch((error) => { console.log(error); });
    },
    methods: {
      filterCars() {
        if (this.bodyFilter != 'all' && this.noviceFilter != 'all') {
            this.filteredCars = this.cards.filter((element) =>
            {
                return element.carrozzeria == this.bodyFilter && element.neopatentato == this.noviceFilter;
            });
        } else if (this.bodyFilter == 'all' && this.noviceFilter != 'all') {
            this.filteredCars = this.cards.filter((element) => {
                return element.neopatentato == this.noviceFilter;
            });
        } else if (this.bodyFilter != 'all' && this.noviceFilter == 'all') {
            this.filteredCars = this.cards.filter((element) => {
                return element.carrozzeria == this.bodyFilter;
            });
        } else {
            this.filteredCars = this.cards;
        }
      }
    }
});