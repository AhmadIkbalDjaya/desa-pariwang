window.addEventListener("close-modal", (event) => {
    $(".modal").modal("hide");
    $(".modal-backdrop").removeClass("show");
});
