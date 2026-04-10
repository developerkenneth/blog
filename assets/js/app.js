// using toastify 

export function showNotification(message, type = "success") {
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
        onClick: function () { } // Callback after click
    }).showToast();
}
