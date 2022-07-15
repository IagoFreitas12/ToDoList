const toggle = () => {
    const display = document.getElementById("collapseCreation").style.display;
    if (display === "none") {
        document.getElementById("collapseCreation").style.display = "flex";
        return;
    }
    document.getElementById("collapseCreation").style.display = "none";
};