$(document).ready(function() {




    //  sidebar toggle animation

    let sidebar = $(".sidebar"),
        navbar_menu_btn = $(".menu-icon");


    navbar_menu_btn.click(function() {
        if (sidebar.hasClass("sidebar-hide")) {
            sidebar.removeClass("sidebar-hide");
            $(".dashboard").css("margin-right", 0);
            $(".sidebar").css("width", "260px");
            $(".sidebar__frame").css("width", "260px");
            $("#logout-btn").css("display", "flex");
            $("#sidebar-logo").attr("src", "http://127.0.0.1:8000/uploads/logo4.png");
        } else {
            sidebar.addClass("sidebar-hide");
            $(".dashboard").css("margin-right", 0);
            $(".sidebar").css("width", "80px");
            $(".sidebar__frame").css("width", "80px");
            $("#logout-btn").css("display", "none");
            $("#sidebar-logo").attr("src", "http://127.0.0.1:8000/uploads/logo1.png").css({
                "height": "70%",
                "object-fit": "scale-down"
            });

        }
    });

    $(".sidebar__close-btn").click(function() {
        sidebar.addClass("sidebar-hide");
        $(".dashboard").css("margin-right", 0);
    });


    // forms section 

    // form label animation 
    let form_input = $(".form__input-frame__input"),
        input_label = $(".form__input-frame__label");
    form_input.change(function() {
        // alert($(this).val().length);
        if ($(this).val().length >= 1) {
            $(this).next(input_label).addClass("form__input-frame__label--up");
        } else {
            $(this).next(input_label).removeClass("form__input-frame__label--up");
        }
    });


    // password rules card guide 
    $("#register_password").focus(function() {
        $(".password_rules").show(300);
    });

    $("#register_password").blur(function() {
        $(".password_rules").hide(300);
    });


    $('#register_password').keyup(function() {
        let text = $(this).val();
        let num_rule = /^(?=.*[0-9])/;
        let Small_alpha_rule = /^(?=.*[a-z])/;
        let cap_alpha_rule = /[A-Z]/g;
        let spaces_rule = /\s/g;
        let symbols_rule = /(?=.*\W)/g;
        let lang_rule = /^[a-zA-Z0-9$@$!%*?&#^-_. +]+$/;
        let result = symbols_rule.test(text);

        // password must be minium 8 character 
        if (text.length <= 8) {
            $("#min_rule").addClass("rule--error");
            $("#min_rule i").removeClass("fa-circle").addClass("fa-circle-xmark");
        } else {
            $("#min_rule").removeClass("rule--error").addClass("rule--checked");
            $("#min_rule i").removeClass("fa-circle-xmark").addClass("fa-circle-check");
        }

        // language must be only english character 
        if (lang_rule.test(text)) {
            $("#lang_rule").removeClass("rule--error").addClass("rule--checked");
            $("#lang_rule i").removeClass("fa-circle-xmark").removeClass("fa-circle").addClass("fa-circle-check");
        } else {
            $("#lang_rule").addClass("rule--error");
            $("#lang_rule i").removeClass("fa-circle").addClass("fa-circle-xmark");
        }

        // password must contain at least one capital character
        if (cap_alpha_rule.test(text)) {
            $("#capital_rule").removeClass("rule--error").addClass("rule--checked");
            $("#capital_rule i").removeClass("fa-circle-xmark").addClass("fa-circle-check");
        } else {
            $("#capital_rule").addClass("rule--error");
            $("#capital_rule i").removeClass("fa-circle").addClass("fa-circle-xmark");
        }

        // password must contain at least one small character 
        if (Small_alpha_rule.test(text)) {
            $("#small_alpha_rule").removeClass("rule--error").addClass("rule--checked");
            $("#small_alpha_rule i").removeClass("fa-circle-xmark").removeClass("fa-circle").addClass("fa-circle-check");
        } else {
            $("#small_alpha_rule").addClass("rule--error");
            $("#small_alpha_rule i").removeClass("fa-circle").addClass("fa-circle-xmark");
        }

        // password must contain at lest one of numbers
        if (num_rule.test(text)) {
            $("#num_rule").removeClass("rule--error").addClass("rule--checked");
            $("#num_rule i").removeClass("fa-circle-xmark").addClass("fa-circle-check");
        } else {
            $("#num_rule").addClass("rule--error");
            $("#num_rule i").removeClass("fa-circle").addClass("fa-circle-xmark");
        }

        //password must contain one of symbols 
        if (!symbols_rule.test(text)) {
            $("#symbols_rule").removeClass("rule--checked").addClass("rule--error");
            $("#symbols_rule i").removeClass("fa-circle").addClass("fa-circle-xmark");
        } else {
            $("#symbols_rule").removeClass("rule--error").addClass("rule--checked");
            $("#symbols_rule i").removeClass("fa-circle-xmark").addClass("fa-circle-check");
        }

        // password must haven't any whit space 
        if (spaces_rule.test(text)) {
            $("#spaces_rule").addClass("rule--error");
            $("#spaces_rule i").removeClass("fa-circle").addClass("fa-circle-xmark");
        } else {
            $("#spaces_rule").removeClass("rule--error").addClass("rule--checked");
            $("#spaces_rule i").removeClass("fa-circle-xmark").removeClass("fa-circle").addClass("fa-circle-check");
        }

    });




    // alert to make user confirm terms and rules 

    $(".form__submit-btn").click(function(e) {

        if ($("[name=terms_agree]").prop("checked") == false) {
            alert("يرجي الموافقة علي شروط الإستخدام");
            e.preventDefault();
        }

    })


    $(".add-link__item__input").blur(function() {
        $(this).removeClass("input--error");
        $(this).next(".input_error").hide();
    });

    let show_password_icon = $(".togglePassword");

    show_password_icon.click(function() {
        let password_stats = $(this).attr("data-check");
        if (password_stats == "true") {
            $(this).attr("data-check", "false");
            $(this).addClass("fas fa-eye-slash").removeClass("fa-eye");
            $(this).next().attr("type", "text");
        } else if (password_stats == "false") {
            $(this).attr("data-check", "true");
            $(this).addClass("fas fa-eye").removeClass("fa-eye-slash");
            $(this).next().attr("type", "password");
        }
        // $(this).addClass();

    });



































});