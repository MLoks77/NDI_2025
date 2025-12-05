document.addEventListener("DOMContentLoaded", function() {
    const dropdownButton = document.getElementById('navbarDropdownButton');
    const dropdownMenu = document.getElementById('navbarDropdownMenu');
    if (!dropdownButton || !dropdownMenu) return; // Sécurité

    // Toggle menu display on button click
    dropdownButton.addEventListener('click', function(event) {
        event.stopPropagation();
        if (dropdownMenu.style.display === 'none' || dropdownMenu.style.display === '') {
            dropdownMenu.style.display = 'block';
        } else {
            dropdownMenu.style.display = 'none';
        }
    });

    // Hide menu when clicking outside
    window.addEventListener('click', function(event) {
        if (!dropdownButton.contains(event.target) && !dropdownMenu.contains(event.target)) {
            dropdownMenu.style.display = 'none';
        }
    });
});
