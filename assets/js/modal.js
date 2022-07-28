(function ($) {
  $(function () {
    // PREVENT SCROLLING WHEN MODAL IS OPEN
    /*
    function preventScroll(e){
      e.preventDefault();
      e.stopPropagation();
  
      return false;
  }
  
  function disable(){
    document.querySelector('.slide').forEach(function(item){
      item.addEventListener('wheel', preventScroll);
    });
    //document.querySelector('.section').addEventListener('wheel', preventScroll);
  }
  
  function enable(){
    document.querySelector('.slide').forEach(function(item){
      item.removeEventListener('wheel', preventScroll);
    });
  }
  
  document.querySelector('.modal-link').addEventListener('click', disable);
  document.querySelector('.modal_container').addEventListener('click', enable);
  */
  var modalContainer = $(".modal_container"),
      splash = $('.splash'),
      closeModal = $(".closeModalButton"),
      modalBackdrop = $(".modal"),
      modal = modalContainer.add(modalBackdrop);

    $(document).on("click", ".modal-link", function (e) {
      e.preventDefault();
      
      $('body').addClass('modal-is-open');

      var //pageTitle = $(this).attr('title'),
        //page_url = $(this).attr('href'),
        data = {
          action: "load_page_by_ajax",
          id: $(this).data("id"),
          security: perennia.security,
        };

      //document.title = pageTitle + " | " + base_description;
      $.post(perennia.ajaxurl, data, function (response) {
        response = JSON.parse(response);

        if (response.video) {
          $(".modal-content").html(
            "<div class='video-container'>" + response.video + "</div"
          );
        } else if (response.content && response.title && response.image) {
          $(".modal-content").html(
            '<img src="' + response.image + '" class="modal-image">' +
            '<div class="card-content-container"><h2>' + response.title + '</h2>'
              + response.content + '</div>'
          );
        } else if (response.content && response.title && response.hidetitle) {
          $(".modal-content").html(
            '<div class="card-content-container">'
              + response.content + '</div>'
          );
        } else if (response.content && response.title) {
          $(".modal-content").html(
            '<div class="card-content-container"><h2>' + response.title + '</h2>'
              + response.content + '</div>'
          );
        } else if (response.shortcode) {
          $(".modal-content").html(response.shortcode);
        }

        modal.slideDown();
      });
    });
    
    $(".modal-content").click(function (e) {
      e.stopPropagation();
    });

    $(".nav a").click(function () {
      modal.slideUp();
    });

    $(".closeModalButton, .modal_container").click(function () {
      modal.slideUp();
      $('body').removeClass('modal-is-open');
    });

    // ESCAPE KEY CLICK TO ESCAPE
    $(document).keyup(function (e) {
      if (e.key === "Escape") {
        // escape key maps to keycode `27`
        modal.slideUp();
        $('body').removeClass('modal-is-open');
      }
    });
  });
})(jQuery);
