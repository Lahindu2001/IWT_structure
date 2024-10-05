document.querySelectorAll('.faq-question').forEach(item => {
    item.addEventListener('click', () => {
        const answer = item.nextElementSibling;

        // Toggle display of the answer
        answer.style.display = answer.style.display === 'block' ? 'none' : 'block';
    });
});