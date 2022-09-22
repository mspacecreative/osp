(function ($) {
  $(function () {
    var 
    modalContainer = $(".modal_container"),
    splash = $('.splash'),
    closeModal = $(".closeModalButton"),
    modalBackdrop = $(".modal"),
    modal = modalContainer.add(modalBackdrop);

    $(document).on("click", ".modal-link", function (e) {
      e.preventDefault();
      
      $('body').addClass('modal-is-open');

      var
      data = {
        action: "load_page_by_ajax",
        id: $(this).data("id"),
        security: perennia.security,
      };

      $.post(perennia.ajaxurl, data, function (response) {
        response = JSON.parse(response);

        if (response.content && response.title) {
          $(modalContainer).html(
            (response.image ? '<img src="' + response.image + '" class="modal-image">' : '') +
            '<div class="card-content-container"><h2>' + response.title + '</h2>'
              + response.content + '</div>'
          );
        }

        modal.fadeIn();

      });
    });
    
    $(".modal-content").click(function (e) {
      e.stopPropagation();
    });

    $(".nav a").click(function () {
      modal.fadeOut();
    });

    $(".closeModalButton, .modal_container").click(function () {
      modal.fadeOut();
      $('body').removeClass('modal-is-open');
    });

    // ESCAPE KEY CLICK TO ESCAPE
    $(document).keyup(function (e) {
      if (e.key === "Escape") {
        // escape key maps to keycode `27`
        modal.fadeOut();
        $('body').removeClass('modal-is-open');
      }
    });
  });
})(jQuery);
