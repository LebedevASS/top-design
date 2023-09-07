window.onload = function () {
    // Выбираем пункт меню в соответствии с загруженной страницей
    let links = document.querySelectorAll('.navbar-nav > li > a');
    for (let i = 0; i < links.length; i++) {
        if (links[i].href === document.location.href)
            links[i].classList.add('active');
    }
}

// Get the modal
var modal = document.getElementById('modal');

// Get the button that opens the modal
var btn = document.getElementById("call-me");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
    modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
    modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}