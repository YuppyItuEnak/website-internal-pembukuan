document.addEventListener('DOMContentLoaded', function () {
    const tipeSelect = document.getElementById('tipe');
    const formSecondary = document.getElementById('form-secondary');
    const formPrimary = document.getElementById('form-primary');

    tipeSelect.addEventListener('change', (e) => {
        const tipe = e.target.value;
        if (tipe === 'secondary') {
            formSecondary.style.display = 'block';
            formPrimary.style.display = 'none';
        } else if (tipe === 'primary') {
            formPrimary.style.display = 'block';
            formSecondary.style.display = 'none';
        }
    });

    console.log('Form Pembukuan');
});
