/*Funckja odpali nową stronę w tym samym oknie po 5 sekundach - takze na chwile pokaze sie full logo i przechodzimy do kolejnej strony - Piotr Wróblewski */
function open_page() {
    setTimeout("window.location.replace('navbar.html')",5000,);
}
open_page();