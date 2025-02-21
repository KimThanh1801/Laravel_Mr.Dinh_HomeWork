const closeOverlap = document.getElementById('close-overlay');
const form = document.getElementById('form');
const overlap = document.getElementById('overlap');

if (closeOverlap) {
    closeOverlap.onclick = function () {
        overlap.style.display = 'none';
        form.style.display = 'block';
    }
}