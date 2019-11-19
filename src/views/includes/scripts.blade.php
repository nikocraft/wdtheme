<script id="custom-javascript">
    $(document).ready(function() {
        $('.image-lightbox').magnificPopup({type:'image'});
    });

    const $hamburger = $(".hamburger");
    $hamburger.on("click", function(e) {
        $hamburger.toggleClass("is-active");
        var $hamburgerId = $("#hamburger");
        if($hamburger.hasClass('is-active')) {
            $hamburgerId.show();
            $hamburgerId.attr("class", "hamburger-wrapper");
            $hamburgerId.addClass("animated {{ get_theme_setting('header.hamburger.general.inAnimation') }} slow");
        } else {
            $hamburgerId.removeClass("animated {{ get_theme_setting('header.hamburger.general.inAnimation') }} slow");
            window.setTimeout(function() {
                $('#hamburger').addClass("animated {{ get_theme_setting('header.hamburger.general.outAnimation') }}");
            }, 200);
        }
    });

    const $openDropDownMenu = $(".open-dropdown-menu");
    $openDropDownMenu.on("click", function(event) {
        const $dropdownBtnOpen = $(event.target).closest('.hamburger-menu-item').find('.dropdown-button-open');
        const $dropdownBtnClose = $(event.target).closest('.hamburger-menu-item').find('.dropdown-button-close');

        if($dropdownBtnOpen.is(":visible"))
            $dropdownBtnOpen.trigger('click');
        else {
            $dropdownBtnClose.trigger('click');
        }
    });

    const $dropdownBtnOpen = $('.dropdown-button-open');
    $dropdownBtnOpen.on("click", function(event) {
        const $dropdownContent = $(event.target).closest('.hamburger-menu-item').find('.dropdown-content');
        const $dropdownBtnClose = $(event.target).closest('.hamburger-menu-item').find('.dropdown-button-close');
        $dropdownContent.show();
        $(event.target).hide();
        $dropdownBtnClose.show();
    });

    const $dropdownBtnClose = $('.dropdown-button-close');
    $dropdownBtnClose.on("click", function(event) {
        const $dropdownContent = $(event.target).closest('.hamburger-menu-item').find('.dropdown-content');
        const $dropdownBtnOpen = $(event.target).closest('.hamburger-menu-item').find('.dropdown-button-open');
        $dropdownContent.hide();
        $(event.target).hide();
        $dropdownBtnOpen.show();
    });

</script>