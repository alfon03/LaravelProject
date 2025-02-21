document.addEventListener("DOMContentLoaded", function () {
    document.querySelectorAll(".eliminar-producto").forEach((button) => {
        button.addEventListener("click", function () {
            const url = this.getAttribute("data-url");
            const form = this.nextElementSibling;

            Swal.fire({
                title: "¿Estás seguro?",
                text: "Esta acción no se puede deshacer",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#d33",
                cancelButtonColor: "#3085d6",
                confirmButtonText: "Sí, eliminar",
                cancelButtonText: "Cancelar",
            }).then((result) => {
                if (result.isConfirmed) {
                    form.submit();
                }
            });
        });
    });
});

document.addEventListener("DOMContentLoaded", function () {
    const statusMessage = document.body.getAttribute("data-status");
    if (statusMessage) {
        Swal.fire({
            icon: "success",
            title: "Éxito",
            text: statusMessage,
            confirmButtonColor: "#3085d6",
            confirmButtonText: "OK",
        });
    }
});
