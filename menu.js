window.onload = function() {
    var show = document.querySelector("#show-menu");

    show.onchange = function() {
        var hideclass = "hidden";
        var menu = document.querySelector("#mainnav");

        if(!show.checked){
            menu.classList.add(hideclass);
        }
        else {
            menu.classList.remove(hideclass);
        }
    }
}
