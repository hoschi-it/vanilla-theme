window.onload = function() {

    var show = document.querySelector("#show-menu");

    // TODO debug #1
    show.onclick = toggleMainMenu;

}


// TODO #1 use this as onchange-function for the toggle-checkbox
function toggleMainMenu(){
    var show_menu_box = document.querySelector("#show-menu");
    var hideclass = "hidden";
    var menu = document.querySelector("nav#mainnav");
    var page = document.querySelector("section.page");
    var open_sym = document.querySelector(".toggle-menu .burger");
    var close_sym = document.querySelector(".toggle-menu .close");
    
    mustShow = show_menu_box.checked;

    if(mustShow) {
        menu.classList.remove(hideclass);
        page.classList.add(hideclass);
        open_sym.classList.add(hideclass);
        close_sym.classList.remove(hideclass);
        show_menu_box.checked = true;
    }
    else {
        menu.classList.add(hideclass);
        page.classList.remove(hideclass);
        open_sym.classList.remove(hideclass);
        close_sym.classList.add(hideclass);
        show_menu_box.checked = false;
    }
}
