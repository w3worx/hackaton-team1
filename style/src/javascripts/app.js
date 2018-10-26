$(document).ready(function(){

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
