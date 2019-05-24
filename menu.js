window.onload = function() {
    var toggler = document.querySelector("#toggle-menu");

    toggler.onchange = function() {
        var hideclass = "hidden";
        var menu = document.querySelector("#mainnav");

        if(!toggler.checked){
            menu.classList.add(hideclass);
        }
        else {
            menu.classList.remove(hideclass);
        }
    }
}
