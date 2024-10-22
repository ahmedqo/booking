const btn = document.querySelector("#player"),
    modal = document.querySelector("#modal"),
    video = modal.querySelector("video");

btn.addEventListener("click", e => {
    if (!video.src)
        video.src = btn.getAttribute("src");
    modal.show();
});

modal.addEventListener("change:expand", e => {
    video[e.detail.data ? "play" : "pause"]();
})