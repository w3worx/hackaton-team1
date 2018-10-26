// Mobile Safari in standalone mode
if(("standalone" in window.navigator) && window.navigator.standalone){

    // If you want to prevent remote links in standalone web apps opening Mobile Safari, change 'remotes' to true
    var noddy, remotes = false;

    document.addEventListener('click', function(event) {

        noddy = event.target;

        // Bubble up until we hit link or top HTML element. Warning: BODY element is not compulsory so better to stop on HTML
        while(noddy.nodeName !== "A" && noddy.nodeName !== "HTML") {
            noddy = noddy.parentNode;
        }

        if('href' in noddy && noddy.href.indexOf('http') !== -1 && (noddy.href.indexOf(document.location.host) !== -1 || remotes))
        {
            event.preventDefault();
            document.location.href = noddy.href;
        }

    },false);
}

$(document).ready(function(){


  $('#photoo').on('change', function(e){
    $("#take-photo").submit();
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

});


function proceedCrop(data){
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

function proceedUpload(data){
  $('.popup iframe').attr('src', "https://hackaton.w3worx.nl/team1/cropTest/crop.html?filename="+data);
  $('.popup').fadeIn();
}
