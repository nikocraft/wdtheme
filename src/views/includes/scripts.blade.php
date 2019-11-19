<script id="custom-javascript">
    $(document).ready(function() {
        $('.image-lightbox').magnificPopup({type:'image'});
    });

    const $hamburgerBtn = $(".hamburger");
    $hamburgerBtn.on("click", function(e) {
        $hamburgerBtn.toggleClass("is-active");
        const $hamburgerMenu = $("#hamburger-menu");
        if($hamburgerBtn.hasClass('is-active')) {
            $hamburgerMenu.show();
            $hamburgerMenu.attr("class", "hamburger-wrapper");
            $hamburgerMenu.addClass("animated {{ get_theme_setting('header.hamburger.general.inAnimation') }} slow");
        } else {
            $hamburgerMenu.removeClass("animated {{ get_theme_setting('header.hamburger.general.inAnimation') }} slow");
            window.setTimeout(function() {
                $('#hamburger-menu').addClass("animated {{ get_theme_setting('header.hamburger.general.outAnimation') }}");
            }, 200);
        }
    });

    const $openDropDownMenu = $(".open-dropdown-menu");
    $openDropDownMenu.on("click", function(event) {
        const $dropdownBtnOpen = $(event.target).closest('.menu-item').find('.dropdown-button-open');
        const $dropdownBtnClose = $(event.target).closest('.menu-item').find('.dropdown-button-close');

        if($dropdownBtnOpen.is(":visible"))
            $dropdownBtnOpen.trigger('click');
        else {
            $dropdownBtnClose.trigger('click');
        }
    });

    const $dropdownBtnOpen = $('.dropdown-button-open');
    $dropdownBtnOpen.on("click", function(event) {
        const $dropdownContent = $(event.target).closest('.menu-item').find('.dropdown-content');
        const $dropdownBtnClose = $(event.target).closest('.menu-item').find('.dropdown-button-close');
        $dropdownContent.show();
        $(event.target).hide();
        $dropdownBtnClose.show();
    });

    const $dropdownBtnClose = $('.dropdown-button-close');
    $dropdownBtnClose.on("click", function(event) {
        const $dropdownContent = $(event.target).closest('.menu-item').find('.dropdown-content');
        const $dropdownBtnOpen = $(event.target).closest('.menu-item').find('.dropdown-button-open');
        $dropdownContent.hide();
        $(event.target).hide();
        $dropdownBtnOpen.show();
    });
</script>