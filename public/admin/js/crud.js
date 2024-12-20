$(document).ready(function () {
    // Data Tablee
    $(document).ready(function () {
        $("#datatable").DataTable();

        $("#datatable").parent().parent().addClass("responsive_table");
    });

    $("#toast").hide().fadeIn();
    setTimeout(() => {
        $("#toast").fadeOut();
    }, 5000);
    setTimeout(() => {
        $("#toast").remove();
    }, 6000);

    $("#datatable tbody").delegate(".detail_btn_modal", "click", function () {
        var user_id = $(this).val();
        $("#pills_participant1-tab").click();
        $("#pills_participant3-tab").show();
        $("#detail_modal").modal("show");

        $.ajax({
            type: "GET",
            url: "/sifest2023/admin/user/" + user_id,
            success: function (response) {
                $("#detail_modal #detail_team_name").val(
                    response.user.team_name
                );

                //name
                //name
                //name
                //name

                $("#detail_modal #detail_name").val(response.user.name);
                $("#detail_modal #detail_name1").val(response.user.name1);
                $("#detail_modal #detail_name2").val(response.user.name2);
                $("#detail_modal #detail_name3").val(response.user.name3);
                $("#detail_modal #detail_name4").val(response.user.name4);
                $("#detail_modal #detail_name5").val(response.user.name5);
                $("#detail_modal #detail_name6").val(response.user.name6);
                $("#detail_modal #detail_name7").val(response.user.name7);

                if (response.user.name3 == null) {
                    $("#pills_participant3-tab").hide();
                }

                //phone number
                //phone number
                //phone number
                //phone number

                $("#detail_modal #detail_phone_number")
                    .attr("href", "https://wa.me/" + response.user.phone_number)
                    .html(response.user.phone_number);
                $("#detail_modal #detail_phone_number1")
                    .attr(
                        "href",
                        "https://wa.me/" + response.user.phone_number1
                    )
                    .html(response.user.phone_number1);
                $("#detail_modal #detail_phone_number2")
                    .attr(
                        "href",
                        "https://wa.me/" + response.user.phone_number2
                    )
                    .html(response.user.phone_number2);
                $("#detail_modal #detail_phone_number3")
                    .attr(
                        "href",
                        "https://wa.me/" + response.user.phone_number3
                    )
                    .html(response.user.phone_number3);
                $("#detail_modal #detail_phone_number4")
                    .attr(
                        "href",
                        "https://wa.me/" + response.user.phone_number4
                    )
                    .html(response.user.phone_number4);
                $("#detail_modal #detail_phone_number5")
                    .attr(
                        "href",
                        "https://wa.me/" + response.user.phone_number5
                    )
                    .html(response.user.phone_number5);
                $("#detail_modal #detail_phone_number6")
                    .attr(
                        "href",
                        "https://wa.me/" + response.user.phone_number6
                    )
                    .html(response.user.phone_number6);
                $("#detail_modal #detail_phone_number7")
                    .attr(
                        "href",
                        "https://wa.me/" + response.user.phone_number7
                    )
                    .html(response.user.phone_number7);

                //line
                //line
                //line
                //line

                $("#detail_modal #detail_line")
                    .attr("href", "https://line.me/ti/p/" + response.user.line)
                    .html(response.user.line);
                $("#detail_modal #detail_line1")
                    .attr("href", "https://line.me/ti/p/" + response.user.line1)
                    .html(response.user.line1);
                $("#detail_modal #detail_line2")
                    .attr("href", "https://line.me/ti/p/" + response.user.line2)
                    .html(response.user.line2);
                $("#detail_modal #detail_line3")
                    .attr("href", "https://line.me/ti/p/" + response.user.line3)
                    .html(response.user.line3);
                $("#detail_modal #detail_line4")
                    .attr("href", "https://line.me/ti/p/" + response.user.line4)
                    .html(response.user.line4);
                $("#detail_modal #detail_line5")
                    .attr("href", "https://line.me/ti/p/" + response.user.line5)
                    .html(response.user.line5);
                $("#detail_modal #detail_line6")
                    .attr("href", "https://line.me/ti/p/" + response.user.line6)
                    .html(response.user.line6);
                $("#detail_modal #detail_line7")
                    .attr("href", "https://line.me/ti/p/" + response.user.line7)
                    .html(response.user.line7);

                //idmole
                //idmole
                //idmole
                //idmole

                $("#detail_modal #detail_id_mole1").val(response.user.id_mole1);
                $("#detail_modal #detail_id_mole2").val(response.user.id_mole2);
                $("#detail_modal #detail_id_mole3").val(response.user.id_mole3);
                $("#detail_modal #detail_id_mole4").val(response.user.id_mole4);
                $("#detail_modal #detail_id_mole5").val(response.user.id_mole5);
                $("#detail_modal #detail_id_mole6").val(response.user.id_mole6);
                $("#detail_modal #detail_id_mole7").val(response.user.id_mole7);

                //server
                //server
                //server
                //server

                $("#detail_modal #detail_server_mole1").val(
                    response.user.server_mole1
                );
                $("#detail_modal #detail_server_mole2").val(
                    response.user.server_mole2
                );
                $("#detail_modal #detail_server_mole3").val(
                    response.user.server_mole3
                );
                $("#detail_modal #detail_server_mole4").val(
                    response.user.server_mole4
                );
                $("#detail_modal #detail_server_mole5").val(
                    response.user.server_mole5
                );
                $("#detail_modal #detail_server_mole6").val(
                    response.user.server_mole6
                );
                $("#detail_modal #detail_server_mole7").val(
                    response.user.server_mole7
                );

                //idriot
                //idriot
                //idriot
                //idriot

                $("#detail_modal #detail_id_riot").val(response.user.id_riot);
                $("#detail_modal #detail_id_riot1").val(response.user.id_riot1);
                $("#detail_modal #detail_id_riot2").val(response.user.id_riot2);
                $("#detail_modal #detail_id_riot3").val(response.user.id_riot3);
                $("#detail_modal #detail_id_riot4").val(response.user.id_riot4);
                $("#detail_modal #detail_id_riot5").val(response.user.id_riot5);

                //tagriot
                //tagriot
                //tagriot
                //tagriot

                $("#detail_modal #detail_tag_riot").val(response.user.tag_riot);
                $("#detail_modal #detail_tag_riot1").val(
                    response.user.tag_riot1
                );
                $("#detail_modal #detail_tag_riot2").val(
                    response.user.tag_riot2
                );
                $("#detail_modal #detail_tag_riot3").val(
                    response.user.tag_riot3
                );
                $("#detail_modal #detail_tag_riot4").val(
                    response.user.tag_riot4
                );
                $("#detail_modal #detail_tag_riot5").val(
                    response.user.tag_riot5
                );

                //rank
                //rank
                //rank
                //rank

                $("#detail_modal #detail_rank").val(response.user.rank);
                $("#detail_modal #detail_rank1").val(response.user.rank1);
                $("#detail_modal #detail_rank2").val(response.user.rank2);
                $("#detail_modal #detail_rank3").val(response.user.rank3);
                $("#detail_modal #detail_rank4").val(response.user.rank4);
                $("#detail_modal #detail_rank5").val(response.user.rank5);

                //idcard
                //idcard
                //idcard
                //idcard

                $("#detail_modal #detail_idcard").attr(
                    "src",
                    "/idcard/" + response.user.idcard
                );
                $("#detail_modal #detail_idcard1").attr(
                    "src",
                    "/idcard/" + response.user.idcard1
                );
                $("#detail_modal #detail_idcard2").attr(
                    "src",
                    "/idcard/" + response.user.idcard2
                );
                $("#detail_modal #detail_idcard3").attr(
                    "src",
                    "/idcard/" + response.user.idcard3
                );
                $("#detail_modal #detail_idcard4").attr(
                    "src",
                    "/idcard/" + response.user.idcard4
                );
                $("#detail_modal #detail_idcard5").attr(
                    "src",
                    "/idcard/" + response.user.idcard5
                );
                $("#detail_modal #detail_idcard6").attr(
                    "src",
                    "/idcard/" + response.user.idcard6
                );
                $("#detail_modal #detail_idcard7").attr(
                    "src",
                    "/idcard/" + response.user.idcard7
                );
            },
        });
    });

    $("#datatable tbody").delegate(
        ".verification_btn_modal",
        "click",
        function () {
            var user_id = $(this).val();
            $("#pills_verification1-tab").click();
            $("#pills_verification3-tab").show();
            $("#verification_modal").modal("show");

            $.ajax({
                type: "GET",
                url: "/sifest2023/admin/user/" + user_id,
                success: function (response) {
                    //name
                    //name
                    //name
                    //name

                    $("#verification_modal #verification_name").val(
                        response.user.name
                    );
                    $("#verification_modal #verification_name1").val(
                        response.user.name1
                    );
                    $("#verification_modal #verification_name2").val(
                        response.user.name2
                    );
                    $("#verification_modal #verification_name3").val(
                        response.user.name3
                    );
                    $("#verification_modal #verification_name4").val(
                        response.user.name4
                    );
                    $("#verification_modal #verification_name5").val(
                        response.user.name5
                    );
                    $("#verification_modal #verification_name6").val(
                        response.user.name6
                    );
                    $("#verification_modal #verification_name7").val(
                        response.user.name7
                    );

                    if (response.user.name3 == null) {
                        $("#pills_verification3-tab").hide();
                    }

                    //institution
                    //institution
                    //institution
                    //institution

                    $("#verification_modal #verification_institution").val(
                        response.user.institution
                    );
                    $("#verification_modal #verification_institution1").val(
                        response.user.institution1
                    );
                    $("#verification_modal #verification_institution2").val(
                        response.user.institution2
                    );
                    $("#verification_modal #verification_institution3").val(
                        response.user.institution3
                    );
                    $("#verification_modal #verification_institution4").val(
                        response.user.institution4
                    );
                    $("#verification_modal #verification_institution5").val(
                        response.user.institution5
                    );
                    $("#verification_modal #verification_institution6").val(
                        response.user.institution6
                    );
                    $("#verification_modal #verification_institution7").val(
                        response.user.institution7
                    );

                    //idcard
                    //idcard
                    //idcard
                    //idcard

                    $("#verification_modal #verification_idcard").attr(
                        "src",
                        "/idcard/" + response.user.idcard
                    );
                    $("#verification_modal #verification_idcard1").attr(
                        "src",
                        "/idcard/" + response.user.idcard1
                    );
                    $("#verification_modal #verification_idcard2").attr(
                        "src",
                        "/idcard/" + response.user.idcard2
                    );
                    $("#verification_modal #verification_idcard3").attr(
                        "src",
                        "/idcard/" + response.user.idcard3
                    );
                    $("#verification_modal #verification_idcard4").attr(
                        "src",
                        "/idcard/" + response.user.idcard4
                    );
                    $("#verification_modal #verification_idcard5").attr(
                        "src",
                        "/idcard/" + response.user.idcard5
                    );
                    $("#verification_modal #verification_idcard6").attr(
                        "src",
                        "/idcard/" + response.user.idcard6
                    );
                    $("#verification_modal #verification_idcard7").attr(
                        "src",
                        "/idcard/" + response.user.idcard7
                    );

                    $("#verification_modal #verification_payment").attr(
                        "src",
                        "/payment/" + response.user.payment
                    );

                    $("#verification_modal #verification_team_name").val(
                        response.user.team_name
                    );
                    
                    $("#verification_modal #verification_email").val(
                        response.user.email
                    );
                },
            });
        }
    );

    $("#datatable tbody").delegate(".delete_btn_modal", "click", function () {
        var user_id = $(this).val();
        $("#delete_modal").modal("show");

        $.ajax({
            type: "GET",
            url: "/sifest2023/admin/user/" + user_id,
            success: function (response) {
                $("#delete_modal #delete_name").val(response.user.name);
                $("#delete_modal #delete_team_name").val(
                    response.user.team_name
                );
                
                $("#delete_modal #delete_email").val(response.user.email);
            },
        });
    });

    $("#datatable tbody").delegate(".edit_btn_modal", "click", function () {
        $("#edit_modal #edit_interview").children().attr("selected", false);
        $("#edit_modal #edit_password").val("");
        var user_id = $(this).val();
        $("#edit_modal").modal("show");

        $.ajax({
            type: "GET",
            url: "/sifest2023/admin/user/" + user_id,
            success: function (response) {
                $("#edit_modal #edit_name").val(response.user.name);
                $("#edit_modal #edit_NIM").val(response.user.NIM);

                $("#edit_modal #edit_interview")
                    .children("option[value='" + response.user.interview + "']")
                    .attr("selected", true);
            },
        });
    });

    $("#datatable #edit_password").on("change, keyup", function () {
        let password = $(this).val();
        let error_msg = $(this).parent().find(".error_msg p");

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

        // empty fill
        if (password === "") {
            error_msg.html("");
        }
    });
});
