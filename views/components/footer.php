<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/toastify-js"></script>
<script src="assets/js/app.js"></script>
<script>
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