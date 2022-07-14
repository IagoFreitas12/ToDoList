const toggle = () => {
    const display = document.getElementById("collapseExample").style.display;
    if (display === "none") {
        document.getElementById("collapseExample").style.display = "flex";
        return;
    }
    document.getElementById("collapseExample").style.display = "none";
};
