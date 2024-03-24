let up_scroll = document.querySelector('.scroll_customer'); // Sửa 'scroll_customer' thành '.scroll_customer' nếu đó là class hoặc '#scroll_customer' nếu là id
window.addEventListener('scroll', function (e) {
    if (this.window.scrollY > 100) { // Sử dụng window.scrollY để lấy giá trị cuộn trên trục Y
        up_scroll.style.display = 'block'; // Sửa từ this.up_scroll.style.display thành up_scroll.style.display
        up_scroll.onclick = function (e) {
            window.scrollTo({
                top: 0,
                behavior: "smooth",
            })
        }
    } else {
        up_scroll.style.display = 'none'; // Sửa từ this.up_scroll.style.display thành up_scroll.style.display
    }
    console.log(up_scroll.style.display);
});



