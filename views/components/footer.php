<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/toastify-js"></script>
<script src="assets/js/app.js"></script>
<script>
    function showNotification(message, type = "success") {
        Toastify({
            text: message,
            duration: 4000,
            close: true,
            gravity: "top",
            position: "right",
            stopOnFocus: true, // Prevents dismissing of toast on hover
            style: {
                // Use your brand colors
                background: type === "success" ? "#3b82f6" : "#ef4444",
                boxShadow: "none",
                fontWeight: "600",
                fontSize: "14px"
            },
            onClick: function() {} // Callback after click
        }).showToast();
    }


    // cleans the url parameters when done
    const cleanUrl = window.location.protocol + "//" + window.location.host + window.location.pathname;
    window.history.replaceState({}, document.title, cleanUrl);
    const message = "<?= $message ?>";
    if (message.length >= 1) {
        showNotification(message);
    }
</script>
</body>

</html>