const toggles = document.querySelectorAll('.text-wrapper-toggle');

toggles.forEach(toggle => {
    toggle.addEventListener('click',() => {
        toggle.parentNode.classList.toggle('active');
    })
})