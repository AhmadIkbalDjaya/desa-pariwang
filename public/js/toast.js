window.addEventListener("show-notif", (event) => {
    $(".toast").addClass("show");
    setTimeout(() => {
        $(".toast").removeClass("show");
    }, 3000);
});
