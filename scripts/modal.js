document.addEventListener('DOMContentLoaded', function() {
    const modal = document.getElementById('modal');
    const openModalBtn = document.getElementById('modalBtn');

    openModalBtn.addEventListener('click', function() {
        modal.style.display = 'flex';
    })

})