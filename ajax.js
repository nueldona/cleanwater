($.ajax(function() {
  $('form').submit(function(e) {

    //prevent default form submission
    e.preventDefault();

   //ajax form submission
      $.ajax({
          type: 'POST',
          url: 'index.php',
          data: $(this).serialize(),
          success: (message) => {
           // add an action to be carried out when submission is successful
            alert(`${message}`)
          },
          // add an action to be carried out when submission is successful
          error: (error) => {
            alert(`${error}`)
          }
      })
  }); 
})
)