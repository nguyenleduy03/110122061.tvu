window.addEventListener('scroll', function() {
    const scrolled = window.scrollY;
    const background = document.querySelector('.background-container');
    background.style.backgroundPositionY = -(scrolled * 0.5) + 'px'; /* Điều chỉnh vị trí dọc của ảnh nền */
});
