// tooltip.js – Loot item tooltip positioning.
// Used on loot.php to show a larger item detail image when hovering over
// a small loot icon. Each .image-container in the loot table holds two
// images: a thumbnail (.small-image) and a hidden tooltip (.tooltip-imageN).
// CSS makes the tooltip visible on hover; this script keeps it next to
// the cursor so it doesn't overlap the thumbnail or go off-screen.
document.addEventListener('DOMContentLoaded', function () {
    // Find every loot item container in the page.
    const imageContainers = document.querySelectorAll('.image-container');

    imageContainers.forEach(container => {
        // Each container has exactly one tooltip image whose class starts with
        // "tooltip-image", so a prefix attribute selector works for all of them.
        const tooltipImage = container.querySelector('[class^="tooltip-image"]');

        // Track mouse position within the container and reposition the tooltip.
        container.addEventListener('mousemove', function (event) {
            // Convert the page-level mouse coordinates to coordinates relative
            // to the container so the tooltip stays inside the right element.
            const rect = container.getBoundingClientRect();
            const mouseX = event.clientX - rect.left;
            const mouseY = event.clientY - rect.top;

            // Small offset so the tooltip doesn't sit directly under the cursor,
            // which would interfere with the mousemove event.
            const offsetX = 10;
            const offsetY = 10;

            tooltipImage.style.left = `${mouseX + offsetX}px`;
            tooltipImage.style.top  = `${mouseY + offsetY}px`;
        });
    });
});