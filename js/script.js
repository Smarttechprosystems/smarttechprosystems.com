function openModal(imgSrc, imgAlt) {
    const modal = document.getElementById('imageModal');
    const modalImg = document.getElementById('modalImage');
    const captionText = document.getElementById('imageCaption');
    
    modal.style.display = "flex";
    modalImg.src = imgSrc;
    captionText.innerHTML = imgAlt;

    // Close modal when clicking outside the image
    modal.onclick = function(e) {
        if (e.target === modal) {
            closeModal();
        }
    }

    // Enable escape key to close modal
    document.addEventListener('keydown', function(e) {
        if (e.key === 'Escape') {
            closeModal();
        }
    });
}

function closeModal() {
    document.getElementById('imageModal').style.display = "none";
} 

function scrollToIdWithOffset(id, offset = 200) {
    const element = document.getElementById(id);
    if (element) {
        const elementPosition = element.getBoundingClientRect().top + window.scrollY;
        window.scrollTo({
            top: elementPosition - offset,
            behavior: 'smooth'
        });
    }
}
