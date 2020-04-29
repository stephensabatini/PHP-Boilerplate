window.onload = function() {
    var navButton = document.getElementById("nav-toggle");
    navButton.addEventListener("click", function () {
        var body = document.getElementsByTagName("body")[0];
        var openClass = "nav-open";
        var ariaAttr = "aria-expanded";
        var isOpen = body.classList.toggle(openClass);
        if (isOpen) {
            navButton.setAttribute(ariaAttr, "true");
        } else {
            navButton.setAttribute(ariaAttr, "false");
        }
    });
};
