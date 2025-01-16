// Ambil elemen tombol dan overlay
const showOverlayButton = document.getElementById("show-overlay");
const closeOverlayButton = document.getElementById("close-overlay");
const overlay = document.getElementById("overlay");

// Tampilkan overlay
showOverlayButton.addEventListener("click", () => {
    overlay.classList.add("show");
});

// Tutup overlay
closeOverlayButton.addEventListener("click", () => {
    overlay.classList.remove("show");
});
