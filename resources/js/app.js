// Them vao script trong layout
document.addEventListener('keydown', function (e) {
    if (e.key === 'Escape') {
        document.querySelectorAll('.alert-dismissible').forEach(function (alert) {
            bootstrap.Alert.getOrCreateInstance(alert).close();
        });
    }
});
