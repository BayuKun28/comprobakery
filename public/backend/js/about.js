var savemethod;
$(function () {
    tinymce.init({
        selector: "textarea#content",
    });
    $.ajaxSetup({
        headers: {
            "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
        },
    });
    $("#cover").change(function () {
        let reader = new FileReader();
        reader.onload = (e) => {
            $("#preview-image").attr("src", e.target.result);
        };
        reader.readAsDataURL(this.files[0]);
    });
    $(document).ready(function () {
        $("#saveBtn").click(function (e) {
            var urlx;
            var tipe;
            urlx = urlStore;
            tipe = "POST";

            e.preventDefault();
            $(this).html("Sending..");
            tinymce.get("content").save();

            $.ajax({
                data: $("#aboutForm").serialize(),
                url: urlx,
                type: tipe,
                dataType: "json",
                success: function (data) {
                    Swal.fire("Data", data.success, "success");
                },
                error: function (data) {
                    var errorMessages = "";
                    var errors = data.responseJSON.errors;

                    for (var key in errors) {
                        if (errors.hasOwnProperty(key)) {
                            errorMessages += errors[key][0] + "<br>";
                        }
                    }

                    Swal.fire("Error", errorMessages, "error");

                    $("#saveBtn").html("Save Changes");
                },
            });
            $("#saveBtn").html("Save Changes");
        });
    });
});
