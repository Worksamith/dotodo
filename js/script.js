var flag = true;
    $(window).mouseout(function (e) {
        if (e.pageY - $(window).scrollTop() < 1 && flag == true) {
            $('.fadepopup, .eoxp').fadeIn(300);
            $('.eeee').fadeIn(300);
            flag = false;
        }
    })


    $(document).ready(
      function () {
          $(".eeee").click(function () {
                  $(".eeee").addClass("actsss"); // добавляем в нажатую ссылку класс act
                  $(".fadepopup").addClass("actsss"); // добавляем в нажатую ссылку класс act
                  $(".fadepopup").removeClass("xxxc"); // добавляем в нажатую ссылку класс act
                  $(".eeee").removeClass("xxxc"); // добавляем в нажатую ссылку класс act
                  $(".hikj").removeClass("actss"); // добавляем в нажатую ссылку класс act
                  $("body").removeClass("modal-show"); // добавляем в нажатую ссылку класс act
              }
          );
      }
  );


  jQuery(document).ready(function($) {
    var $city = $('.user-city');
    var city = '';
    $.get('http://ip-api.com/json?lang=en', function(location) {
        city = location.city;
        $('.user-city').text(city);
    })
  });