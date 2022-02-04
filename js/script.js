const App = new Vue(
    {
      el: '#app',
      data: {
        cards: []
      },
      created() {
        axios.get('http://localhost/php-snacks-b1/server/controller.php').then((result) => {
          this.cards = result.data.results;
        }).catch((error) => { console.log(error); });
      }
    }
  );