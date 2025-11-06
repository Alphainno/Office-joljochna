    <nav class="navbar navbar-expand-lg navbar-dark fixed-top custom-navbar">
        <div class="container-fluid">
            <!-- Logo -->
            <a class="navbar-brand d-flex align-items-center" href="#home" id="navBrand">
                <img id="brandLogo" alt="Logo" style="display:none; height:60px; width:auto; margin-right:8px;" />
                <i class="fas fa-home me-2 text-warning" id="brandIcon"></i>
            </a>

            <!-- Mobile Toggle Button -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Navigation Items -->
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" id="navHome" href="/">হোম</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="navAbout" href="/about">আমাদের সম্পর্কে</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="navFeatures" href="/#features">সুবিধা</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="navPricing" href="/#pricing">মূল্য তালিকা</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="navTestimonials" href="/#testimonials">মন্তব্য</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="navOtherProjects" href="/#other-projects">অন্যান্য প্রকল্প</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="navContact" href="/#contact">যোগাযোগ</a>
                    </li>
                </ul>

                <!-- CTA Button -->
                <div class="nav-actions">
                    <a href="#contact" class="btn btn-warning btn-cta" id="navCta">
                        <i class="fas fa-calendar-check me-2"></i>
                        <span id="navCtaText">এখনই বুক করুন</span>
                    </a>
                </div>
            </div>
        </div>
    </nav>
    <script>
        (function() {
            function applyHeader(saved){
                if (!saved || typeof saved !== 'object') return;
                const logoSrc = saved.logoDataUrl || saved.logoUrl || '';
                const brandLogo = document.getElementById('brandLogo');
                const brandIcon = document.getElementById('brandIcon');
                if (brandLogo && brandIcon) {
                    if (logoSrc) { brandLogo.src = logoSrc; brandLogo.style.display = 'inline-block'; brandIcon.style.display = 'none'; }
                    else { brandLogo.src = ''; brandLogo.style.display = 'none'; brandIcon.style.display = 'inline-block'; }
                }
                const map = [
                    ['navHome','homeLabel'],
                    ['navAbout','aboutLabel'],
                    ['navFeatures','featuresLabel'],
                    ['navPricing','pricingLabel'],
                    ['navTestimonials','testimonialsLabel'],
                    ['navOtherProjects','otherProjectsLabel'],
                    ['navContact','contactLabel']
                ];
                map.forEach(([id, key]) => { const el = document.getElementById(id); if (el && saved[key]) el.textContent = saved[key]; });
                const cta = document.getElementById('navCta');
                const ctaText = document.getElementById('navCtaText');
                if (cta && saved.ctaHref) cta.setAttribute('href', saved.ctaHref);
                if (ctaText && saved.ctaText) ctaText.textContent = saved.ctaText;
            }

            function readSaved(){
                try { return JSON.parse(localStorage.getItem('headerSettings') || '{}'); } catch (_) { return {}; }
            }

            // Initial apply
            applyHeader(readSaved());

            // Live update on storage changes
            window.addEventListener('storage', (e) => {
                if (e.key === 'headerSettings') applyHeader(readSaved());
            });

            // Fallback polling (1s)
            let last = localStorage.getItem('headerSettings') || '';
            setInterval(() => {
                const cur = localStorage.getItem('headerSettings') || '';
                if (cur !== last) { last = cur; applyHeader(readSaved()); }
            }, 1000);
        })();
    </script>
