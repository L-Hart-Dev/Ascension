function toggleNavigation() {
    const nav = document.querySelector('.nav-container');
    if (!nav) {
        return;
    }

    nav.classList.toggle('is-open');
}