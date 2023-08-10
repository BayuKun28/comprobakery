var savemethod;
$(function () {
    ClassicEditor.create(document.querySelector('textarea[name="slogan"]'))
        .then((editor) => {
            editorInstance = editor; // Store the CKEditor instance in the variable
        })
        .catch((error) => {
            console.error(error);
        });
    $.ajaxSetup({
        headers: {
            "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
        },
    });
    var table = $("#mytable").DataTable({
        processing: true,
        serverSide: true,
        ajax: urldata,
        columns: [
            {
                data: "DT_RowIndex",
                name: "DT_RowIndex",
            },
            {
                data: "slogan",
                name: "slogan",
                escape: false,
            },
            {
                data: "image_url",
                name: "image_url",
                render: function (data, type, full, meta) {
                    return (
                        '<img src="' +
                        data +
                        '" alt="Gambar" width="60" height="60">'
                    );
                },
            },
            {
                data: "action",
                name: "action",
            },
            {
                data: "is_active",
                name: "is_active",
            },
        ],
        columnDefs: [
            {
                targets: 2,
                className: "text-center",
            },
            {
                targets: 3,
                className: "text-center",
            },
            {
                targets: 4,
                className: "text-center",
            },
        ],
        autoWidth: false,
    });
    $("#cover").change(function () {
        let reader = new FileReader();
        reader.onload = (e) => {
            $("#preview-image").attr("src", e.target.result);
        };

        reader.readAsDataURL(this.files[0]);
    });
    $("#createMenu").click(function () {
        savemethod = "add";
        if (editorInstance) {
            editorInstance.setData("");
        }
        $("#homeForm").trigger("reset");
        $("#modal-title").html("Tambah Data");
        $("#ajaxModel").modal("show");
        $("#preview-image").attr("src", "");
    });
    $("body").on("click", ".edit", function () {
        savemethod = "update";
        var id_home = $(this).data("id");
        var url = urledit.replace(":id", id_home);
        $.get(url, function (data) {
            $("#modal-title").html("Edit Data");
            $("#ajaxModel").modal("show");
            $("#id_home").val(data.id);
            editorInstance.setData(data.slogan);
            var imageUrl = urlimage + "/" + data.cover;
            $("#preview-image").attr("src", imageUrl);
        });
    });
    $("#homeForm").submit(function (e) {
        var urlx;
        var tipe;
        if (savemethod == "add") {
            urlx = urlStore;
            tipe = "POST";
        } else {
            var id = $("#id_home").val();
            var urlxx = urleditsave.replace(":id", id);
            urlx = urlxx;
            tipe = "POST";
        }
        e.preventDefault();
        let formData = new FormData(this);
        $.ajax({
            data: formData,
            url: urlx,
            type: tipe,
            contentType: false,
            processData: false,
            success: function (data) {
                $("#homeForm").trigger("reset");
                $("#ajaxModel").modal("hide");
                table.draw();
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
    $("body").on("click", ".delete", function () {
        var id_home = $(this).data("id");
        var url_delete = urldelete.replace(":id", id_home);
        Swal.fire({
            title: "Are you sure?",
            text: "You won't be able to revert this!",
            icon: "warning",
            showCancelButton: true,
            confirmButtonColor: "#3085d6",
            cancelButtonColor: "#d33",
            confirmButtonText: "Yes, delete it!",
        }).then((result) => {
            if (result.isConfirmed) {
                $.ajax({
                    url: url_delete,
                    success: function (data) {
                        table.draw();
                        Swal.fire(
                            "Deleted!",
                            "Your data has been deleted.",
                            "success"
                        );
                    },
                    error: function (data) {
                        console.log("Error:", data);
                    },
                });
            }
        });
    });
    $("body").on("click", ".ubah", function () {
        var id_home = $(this).data("id");
        var url_switch = urlswitch.replace(":id", id_home);
        var is_active = $(this).prop("checked") ? 1 : 0;
        console.log(url_switch);

        Swal.fire({
            title: "Are you sure?",
            text: "You won't be able to revert this!",
            icon: "warning",
            showCancelButton: true,
            confirmButtonColor: "#3085d6",
            cancelButtonColor: "#d33",
            confirmButtonText: "Yes, switch it!",
        }).then((result) => {
            if (result.isConfirmed) {
                $.ajax({
                    url: url_switch,
                    type: "POST",
                    data: {
                        is_active: is_active,
                    },
                    success: function (data) {
                        table.draw();
                        Swal.fire(
                            "Updated!",
                            "Your data has been update.",
                            "success"
                        );
                    },
                    error: function (xhr) {
                        console.log("Error:", data);
                    },
                });
            } else {
                // Jika pengguna membatalkan konfirmasi, atur kembali status tombol
                $(this).prop("checked", !$(this).prop("checked"));
            }
        });
    });
});
