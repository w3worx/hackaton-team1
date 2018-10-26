$(document).ready(function(){

<<<<<<< HEAD

  $('#take-photo').on('submit', function(e){

    // e.preventDefault();
    // var file = $('input[name=file]').val();
    //
    // $.ajax({
    //   type: "POST",
    //   url: "https://hackaton.w3worx.nl/team1/php/connector.php",
    //   data: "action=uploadPicture&file="+file,
    //   dataType: 'json',
    //   success: function ( response ) {
    //     console.log(response);
    //   },
    //   error: function () {
    //     ajaxLock = false;
    //   }
    // });

  });

  setTimeout(function() {

    var time = 60; /* how long the timer will run (seconds) */
    var initialOffset = '440';
    var i = 1

    /* Need initial run as interval hasn't yet occured... */
    $('.circle_animation').css('stroke-dashoffset', initialOffset-(1*(initialOffset/time)));

    var interval = setInterval(function() {
        $('h2').text(i);
        if (i == time) {
          clearInterval(interval);
          return;
        }
        $('.circle_animation').css('stroke-dashoffset', initialOffset-((i+1)*(initialOffset/time)));
        i++;
    }, 1000);

  }, 0)

=======
>>>>>>> 827b316c3bcfa57269b29fcd8445a8a3c8bb0ed8
});


function proceedUpload(data){
  var url = data;
  $.ajax({
    type: "get",
    url: "https://hackaton.w3worx.nl/team1/php/connector.php",
    data: "action=ratePicture&filename="+data+"&userId=1",
    dataType: 'json',
    success: function ( response ) {
      window.location.href = 'page-score.php?score='+response.score+'&filename='+url;
    },
    error: function () {
      ajaxLock = false;
    }
  });
}
