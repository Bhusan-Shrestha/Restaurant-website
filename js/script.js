function toggleMenu() {
    const nav = document.querySelector('.nav-links');
    nav.classList.toggle('active');
}

window.addEventListener('scroll', () => {
    let sections = document.querySelectorAll('section');
    let navLinks = document.querySelectorAll('.nav-links a');
    const navTargets = {
        home: '.nav-links a[href="index.php"]',
        about: '.nav-links a[href="about.php"]',
        menu: '.nav-links a[href="menus.php"]',
        reserve: '.nav-links a[href="reserve.php"]'
    };
    
    sections.forEach(section => {
        let top = window.scrollY;
        let offset = section.offsetTop - 100;
        let height = section.offsetHeight;
        let id = section.getAttribute('id');
        
        if (top >= offset && top < offset + height) {
            navLinks.forEach(link => {
                link.classList.remove('active');
            });

            const activeLink = document.querySelector(navTargets[id] || '');

            if (activeLink) {
                activeLink.classList.add('active');
            }
        }
    });
});

// Gallery lightbox: show full image in Bootstrap modal when a gallery image is clicked
document.addEventListener('DOMContentLoaded', function () {
    const galleryNodeList = document.querySelectorAll('.gallery-img');
    const galleryImages = Array.from(galleryNodeList);
    const lightboxModalEl = document.getElementById('lightboxModal');
    if (!lightboxModalEl) return;
    const lightboxImage = document.getElementById('lightboxImage');
    const lightboxCaption = document.getElementById('lightboxCaption');
    const prevBtn = document.getElementById('lightboxPrev');
    const nextBtn = document.getElementById('lightboxNext');
    const bsModal = new bootstrap.Modal(lightboxModalEl);
    let currentIndex = -1;

    function showImageAt(index) {
        if (index < 0 || index >= galleryImages.length) return;
        const img = galleryImages[index];
        lightboxImage.src = img.dataset.fullSrc || img.src;
        lightboxImage.alt = img.alt || '';
        lightboxCaption.textContent = img.alt || '';
        currentIndex = index;
        bsModal.show();
    }

    function showNext() {
        const next = (currentIndex + 1) % galleryImages.length;
        showImageAt(next);
    }

    function showPrev() {
        const prev = (currentIndex - 1 + galleryImages.length) % galleryImages.length;
        showImageAt(prev);
    }

    galleryImages.forEach((img, idx) => {
        img.style.cursor = 'pointer';
        img.addEventListener('click', function () {
            showImageAt(idx);
        });
    });

    if (nextBtn) nextBtn.addEventListener('click', showNext);
    if (prevBtn) prevBtn.addEventListener('click', showPrev);

    // Keyboard navigation
    document.addEventListener('keydown', function (e) {
        if (!lightboxModalEl.classList.contains('show')) return;
        if (e.key === 'ArrowRight') {
            showNext();
        } else if (e.key === 'ArrowLeft') {
            showPrev();
        }
    });

    // Clear image src when modal hidden to stop loading when closed
    lightboxModalEl.addEventListener('hidden.bs.modal', function () {
        lightboxImage.src = '';
        lightboxCaption.textContent = '';
        currentIndex = -1;
    });
});