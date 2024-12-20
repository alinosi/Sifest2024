$.ajaxSetup({
    headers: {
        "X-CSRF-TOKEN": $('meta[name="csrf_token"]').attr("content"),
    },
});

// Wait until document is ready
$(document).ready(function () {
    const inputs = document.querySelectorAll(".input");

    inputs.forEach((input) => {
        if (input.value) {
            input.parentNode.parentNode.classList.add("focus");
        }

        input.addEventListener("focus", function () {
            let parent = this.parentNode.parentNode;
            parent.classList.add("focus");
        });

        input.addEventListener("blur", function () {
            let parent = this.parentNode.parentNode;
            if (!this.value) {
                parent.classList.remove("focus");
            }
        });
    });

    $(".password_visibility").click(function () {
        $(this).toggleClass("fa-eye");
        $(this).toggleClass("fa-eye-slash");

        const type_check =
            $(this).parent().find("input").attr("type") === "password"
                ? "text"
                : "password";
        $(this).parent().find("input").attr("type", type_check);
    });

    $("#password").on("change, keyup", function () {
        let password = $(this).val();
        let password_confirmation = $("#password_confirmation").val();
        let error_msg = $(this).parent().parent().parent().find(".error_msg p");
        let error_msg_confirmation = $("#password_confirmation")
            .parent()
            .parent()
            .parent()
            .find(".error_msg p");

        // regex validation
        if (!/^(.{8,20}$)/.test(password)) {
            error_msg.html("Password must be between 8 to 20 characters long.");
        } else if (!/^(?=.*[A-Z])/.test(password)) {
            error_msg.html("Password must contain at least one uppercase.");
        } else if (!/^(?=.*[a-z])/.test(password)) {
            error_msg.html("Password must contain at least one lowercase.");
        } else if (!/^(?=.*[0-9])/.test(password)) {
            error_msg.html("Password must contain at least one digit.");
        } else {
            error_msg.html("");
        }

        // if password change when password_confirmation is filled
        if (
            password !== password_confirmation &&
            password_confirmation !== ""
        ) {
            error_msg_confirmation.html("Password confirmation does not match");
        } else {
            error_msg_confirmation.html("");
        }

        // empty fill
        if (password === "") {
            error_msg.html("");
        }
    });

    $("#password_confirmation").on("change, keyup", function () {
        let password = $("#password").val();
        let password_confirmation = $(this).val();
        let error_msg = $(this).parent().parent().parent().find(".error_msg p");

        // if password confirmation change when password is filled
        if (password !== password_confirmation) {
            error_msg.html("Password confirmation does not match");
        } else {
            error_msg.html("");
        }

        if (password_confirmation === "") {
            error_msg.html("");
        }
    });

    $(".phone_number").on("change, keyup", function () {
        let phone_number = $(this).val();
        let error_msg = $(this).parent().parent().parent().find(".error_msg p");

        if (!/^628/.test(phone_number)) {
            error_msg.html("Phone number must start with 628");
        } else {
            error_msg.html("");
        }

        if (phone_number === "") {
            error_msg.html("");
        }
    });

    $(".participants_poster").on("change", function () {
        if ($(this).val() === "1") {
            $("button[data-id='2']").hide();
            $("#name2").removeAttr("required");
            $("#phone_number2").removeAttr("required");
            $("#line2").removeAttr("required");
            $("#institution2").removeAttr("required");
            $("#idcard2").removeAttr("required");

            $("button[data-id='3']").hide();
            $("#name3").removeAttr("required");
            $("#phone_number3").removeAttr("required");
            $("#line3").removeAttr("required");
            $("#institution3").removeAttr("required");
            $("#idcard3").removeAttr("required");
        } else if ($(this).val() === "2") {
            $("button[data-id='2']").show();
            $("#name2").attr("required", true);
            $("#phone_number2").attr("required", true);
            $("#line2").attr("required", true);
            $("#institution2").attr("required", true);
            $("#idcard2").attr("required", true);

            $("button[data-id='3']").hide();
            $("#name3").removeAttr("required");
            $("#phone_number3").removeAttr("required");
            $("#line3").removeAttr("required");
            $("#institution3").removeAttr("required");
            $("#idcard3").removeAttr("required");
        } else if ($(this).val() === "3") {
            $("button[data-id='3']").show();
            $("#name3").attr("required", true);
            $("#phone_number3").attr("required", true);
            $("#line3").attr("required", true);
            $("#institution3").attr("required", true);
            $("#idcard3").attr("required", true);

            $("button[data-id='2']").show();
            $("#name2").attr("required", true);
            $("#phone_number2").attr("required", true);
            $("#line2").attr("required", true);
            $("#institution2").attr("required", true);
            $("#idcard2").attr("required", true);
        }
    });

    // $(".participants_ml").on("change", function () {
    //     if ($(this).val() === "5") {

    //         $("button[data-id='6']").hide();
    //         $("#name6").removeAttr("required");
    //         $("#phone_number6").removeAttr("required");
    //         $("#line6").removeAttr("required");
    //         $("#institution6").removeAttr("required");
    //         $("#idcard6").removeAttr("required");

    //         $("button[data-id='7']").hide();
    //         $("#name7").removeAttr("required");
    //         $("#phone_number7").removeAttr("required");
    //         $("#line7").removeAttr("required");
    //         $("#institution7").removeAttr("required");
    //         $("#idcard7").removeAttr("required");
            
    //     } else if ($(this).val() === "6") {

    //         $("button[data-id='7']").hide();
    //         $("#name7").removeAttr("required");
    //         $("#phone_number7").removeAttr("required");
    //         $("#line7").removeAttr("required");
    //         $("#institution7").removeAttr("required");
    //         $("#idcard7").removeAttr("required");                      

    //     } else if ($(this).val() === "7") {

    //         $("button[data-id='6']").show();
    //         $("#name6").attr("required", true);
    //         $("#phone_number6").attr("required", true);
    //         $("#line6").attr("required", true);
    //         $("#institution6").attr("required", true);
    //         $("#idcard6").attr("required", true);

    //         $("button[data-id='7']").show();
    //         $("#name7").attr("required", true);
    //         $("#phone_number7").attr("required", true);
    //         $("#line7").attr("required", true);
    //         $("#institution7").attr("required", true);
    //         $("#idcard7").attr("required", true);
    //     }
    // });
    $(".participants").on("change", function () {
        if ($(this).val() === "2") {
            $("button[data-id='3']").hide();
            $("#name3").removeAttr("required");
            $("#phone_number3").removeAttr("required");
            $("#line3").removeAttr("required");
            $("#institution3").removeAttr("required");
            $("#idcard3").removeAttr("required");
        } else if ($(this).val() === "3") {
            $("button[data-id='3']").show();
            $("#name3").attr("required", true);
            $("#phone_number3").attr("required", true);
            $("#line3").attr("required", true);
            $("#institution3").attr("required", true);
            $("#idcard3").attr("required", true);
        }
    });

    $(".division_select").change(function () {
        $("#first_choice, #second_choice")
            .not(this)
            .children("option[value='" + this.value + "']")
            .attr("disabled", true)
            .siblings()
            .removeAttr("disabled");

        $(this)
            .parent()
            .parent()
            .parent()
            .next()
            .find(".input_info")
            .html(
                "Alasan anda memilih divisi <span class='fw_bold fc_red'>" +
                    this.value +
                    "</span>"
            );
    });

    // navs tabs
    $(".form_navs button").click(function () {
        const id = $(this).data("id");
        if (!$(this).hasClass("active")) {
            $(".form_navs button").removeClass("active");
            $(this).addClass("active");

            $(".form_tab").hide();
            $(`[data-content=${id}]`).fadeIn();
        }
    });

    $(".type_navs button").click(function () {
        const id = $(this).data("id");
        if (!$(this).hasClass("active")) {
            $(".type_navs button").removeClass("active");
            $(this).addClass("active");

            $(".type_tab").hide();
            $(`[type-content=${id}]`).fadeIn();
        }
    });

    // alert
    $(".alert_toggle").click(function () {
        $(".alert").remove();
    });

    setTimeout(() => {
        $(".alert").remove();
    }, 8000);
});
