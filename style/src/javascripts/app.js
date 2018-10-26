$(document).ready(function(){


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

});


function proceedUpload(data){
  console.log('filename:'+data);
}
