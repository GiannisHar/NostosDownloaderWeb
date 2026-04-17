// nav.js — include this in every page with <script src="nav.js"></script>
// It injects the nav bar and top header at the top of <body>

(function() {
    // Check if we're on the lobby page to add the logout button
    var isLobby = window.location.pathname.includes("lobby");

    var navHTML = '<ul id="toplist">' +
        '<li onclick="window.location.href=\'index.html\'">Home</li>' +
        '<li onclick="window.location.href=\'login.html\'">Products</li>' +
        '<li onclick="window.location.href=\'about.html\'">About</li>' +
        '<li onclick="window.location.href=\'contact.html\'">Contact</li>' +
        (isLobby ? '<li id="logoutBtn" onclick="handleLogout()">Logout</li>' : '') +
        '</ul>';

    var topHTML = '<div class="topdivers">' +
        '<img class="logo" src="Nostos_Logo.png" alt="Nostos App Logo" onclick="window.location.href=\'index.html\'">' +
        '<h1>NGA Nostos</h1>' +
        '</div>';

    document.body.insertAdjacentHTML('afterbegin', topHTML);
    document.body.insertAdjacentHTML('afterbegin', navHTML);
})();
