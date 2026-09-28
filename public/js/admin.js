// Mobile sidebar toggle
document.addEventListener("DOMContentLoaded", function () {

    const sidebarToggle = document.getElementById("sidebarToggle");
    const sidebar = document.querySelector(".admin-sidebar");

    sidebarToggle.addEventListener("click", function () {

        sidebar.classList.toggle("hide");

    });

});

// Get poster input, preview and remove button
const posterInput = document.getElementById('poster');
const posterPreview = document.getElementById('posterPreview');
const removePoster = document.getElementById('removePoster');

if (posterInput && posterPreview && removePoster) {

    // Show poster preview when an image is selected
    posterInput.addEventListener('change', function () {

        const file = this.files[0];

        if (file) {

            posterPreview.src = URL.createObjectURL(file);
            posterPreview.style.display = 'block';
            removePoster.style.display = 'block';

        }

    });

    // Remove selected poster
    removePoster.addEventListener('click', function () {

        posterInput.value = '';
        posterPreview.src = '';
        posterPreview.style.display = 'none';
        removePoster.style.display = 'none';

    });

}

// Delete confirmation modal
document.addEventListener("DOMContentLoaded", function () {

    const deleteForms = document.querySelectorAll('.delete-form');
    const deleteModalElement = document.getElementById('deleteModal');
    const confirmDeleteBtn = document.getElementById('confirmDeleteBtn');

    let selectedForm = null;
    let confirmedDelete = false;

    if (deleteForms.length && deleteModalElement && confirmDeleteBtn) {

        // Open delete modal
        deleteForms.forEach(function (form) {

            form.addEventListener('submit', function (event) {

                // If delete is already confirmed, allow the form to submit
                if (confirmedDelete) {
                    confirmedDelete = false;
                    return;
                }

                // Stop the form from submitting immediately
                event.preventDefault();

                // Store the form user wants to delete
                selectedForm = form;

                // Create and show Bootstrap modal
                const deleteModal = new bootstrap.Modal(deleteModalElement);
                deleteModal.show();

            });

        });

        // Submit form after user confirms
        confirmDeleteBtn.addEventListener('click', function () {

            if (selectedForm) {

                // Allow the next submit
                confirmedDelete = true;

                // Submit the form
                selectedForm.requestSubmit();

            }

        });

    }
    
});