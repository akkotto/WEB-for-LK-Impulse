  function formbuy() {
    var msg   = $('#formbuy').serialize();
        $.ajax({
          type: 'POST',
          url: 'buy.php',
          data: msg,
          success: function(data) {
            console.log(data);
            $('.result').html(data);
          },
          error:  function(xhr, str){
      alert('Возникла ошибка: ' + xhr.responseCode);
          }
        });
 
    }