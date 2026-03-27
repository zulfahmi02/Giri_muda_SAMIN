import './bootstrap';

function createElement(tagName, className, textContent) {
    const element = document.createElement(tagName);

    if (className) {
        element.className = className;
    }

    if (textContent !== undefined) {
        element.textContent = textContent;
    }

    return element;
}

function initializeNavbar() {
    const mobileMenuButton = document.getElementById('mobile-menu-btn');
    const mobileMenu = document.getElementById('mobile-menu');
    const mobileTentangButton = document.getElementById('mobile-tentang-btn');
    const mobileTentangDropdown = document.getElementById('mobile-tentang-dropdown');
    const mobileTentangIcon = document.getElementById('mobile-tentang-icon');

    if (mobileMenuButton && mobileMenu) {
        mobileMenuButton.addEventListener('click', () => {
            mobileMenu.classList.toggle('hidden');
        });
    }

    if (mobileTentangButton && mobileTentangDropdown && mobileTentangIcon) {
        mobileTentangButton.addEventListener('click', () => {
            mobileTentangDropdown.classList.toggle('hidden');
            mobileTentangIcon.classList.toggle('rotate-180');
        });
    }

    const searchModal = document.getElementById('searchModal');
    const searchButton = document.getElementById('searchBtn');
    const closeSearchButton = document.getElementById('closeSearchBtn');
    const searchInput = document.getElementById('searchInput');
    const searchResults = document.getElementById('searchResults');

    if (!searchModal || !searchButton || !closeSearchButton || !searchInput || !searchResults) {
        return;
    }

    const routes = searchModal.dataset;
    const searchData = [
        {
            title: 'Ajaran Samin',
            description: 'Filosofi hidup sederhana: Laku Jujur, Sabar, Trokal Lan Nrimo',
            url: routes.ajaranUrl || routes.homeTentangUrl,
            category: 'Tentang',
        },
        {
            title: 'Sejarah Samin',
            description: 'Sejarah Suku Samin dari masa Raden Surowdjojo hingga kini',
            url: routes.sejarahUrl || routes.homeTentangUrl,
            category: 'Tentang',
        },
        {
            title: 'Tokoh Samin',
            description: 'Tokoh-tokoh penting dalam sejarah Suku Samin',
            url: routes.tokohUrl || routes.homeTentangUrl,
            category: 'Tentang',
        },
        {
            title: 'Kepercayaan Samin',
            description: 'Kepercayaan dan spiritualitas Suku Samin',
            url: routes.kepercayaanUrl || routes.homeTentangUrl,
            category: 'Tentang',
        },
        {
            title: 'Narasi Samin',
            description: 'Indonesia/Bumi Nusantara (Jawa) lama sekali dijajah oleh Belanda. Sejarah lengkap Suku Samin dari Kabupaten Sumoroto.',
            url: routes.homeNarasiUrl,
            category: 'Sejarah',
        },
        {
            title: 'Raden Surowdjojo',
            description: 'Pendiri gerakan Samin yang memiliki julukan "SAMI-SAMI AMIN"',
            url: routes.tokohUrl || routes.homeNarasiUrl,
            category: 'Tokoh',
        },
        {
            title: 'VR 360° - Rumah Tradisional',
            description: 'Jelajahi arsitektur rumah tradisional Suku Samin',
            url: routes.vrRumahUrl,
            category: 'VR',
        },
        {
            title: 'VR 360° - Ladang Pertanian',
            description: 'Saksikan aktivitas pertanian Suku Samin',
            url: routes.vrLadangUrl,
            category: 'VR',
        },
        {
            title: 'VR 360° - Upacara Adat',
            description: 'Rasakan suasana upacara adat Suku Samin',
            url: routes.vrUpacaraUrl,
            category: 'VR',
        },
        {
            title: 'VR 360° - Kehidupan Sehari-hari',
            description: 'Lihat kehidupan sehari-hari masyarakat Samin',
            url: routes.vrKehidupanUrl,
            category: 'VR',
        },
    ].filter((item) => item.url);

    const iconMap = {
        VR: 'fa-vr-cardboard',
        Tokoh: 'fa-user',
        Sejarah: 'fa-book-open',
        Tentang: 'fa-book',
    };

    function renderIdleState() {
        searchResults.replaceChildren(
            createElement('p', 'text-slate-600 text-center py-8', 'Mulai ketik untuk mencari...')
        );
    }

    function createIcon(iconName, className) {
        const icon = createElement('i', className);
        icon.classList.add('fas', iconName);

        return icon;
    }

    function createResultCard(item) {
        const link = createElement(
            'a',
            'search-glass-result block p-4 rounded-2xl transition-all group mb-3 border border-white/35 hover:border-white/70'
        );
        link.href = item.url;

        const row = createElement('div', 'flex items-start space-x-4');
        const iconWrapper = createElement(
            'div',
            'bg-gradient-to-br from-teal-400/35 to-cyan-500/25 backdrop-blur-sm text-teal-700 rounded-xl p-3 group-hover:from-teal-500 group-hover:to-cyan-500 group-hover:text-white transition-all border border-white/40 shadow-[inset_0_1px_0_rgba(255,255,255,0.35)]'
        );
        iconWrapper.appendChild(createIcon(iconMap[item.category] || 'fa-book', 'text-xl'));

        const copy = createElement('div', 'flex-1');
        const meta = createElement('div', 'flex items-center space-x-2 mb-1');
        const title = createElement('h4', 'font-bold text-slate-900 group-hover:text-teal-700 transition', item.title);
        const badge = createElement(
            'span',
            'text-xs bg-white/72 backdrop-blur-sm text-slate-700 px-2 py-1 rounded-lg border border-white/75 shadow-sm',
            item.category
        );
        const description = createElement('p', 'text-sm text-slate-600 line-clamp-2', item.description);
        const arrow = createIcon('fa-arrow-right', 'text-slate-400 group-hover:text-teal-600 transition-all group-hover:translate-x-1');

        meta.append(title, badge);
        copy.append(meta, description);
        row.append(iconWrapper, copy, arrow);
        link.appendChild(row);

        return link;
    }

    function renderEmptyState(query) {
        const wrapper = createElement('div', 'text-center py-8');
        wrapper.appendChild(createIcon('fa-search', 'text-4xl text-slate-400 mb-4'));

        const message = createElement('p', 'text-slate-700');
        message.append('Tidak ada hasil untuk "');
        message.appendChild(createElement('strong', null, query));
        message.append('"');

        const hint = createElement(
            'p',
            'text-sm text-slate-500 mt-2',
            'Coba kata kunci lain seperti: sejarah, ajaran, tokoh, vr'
        );

        wrapper.append(message, hint);
        searchResults.replaceChildren(wrapper);
    }

    function renderResults(results) {
        const fragment = document.createDocumentFragment();

        results.forEach((item) => {
            fragment.appendChild(createResultCard(item));
        });

        searchResults.replaceChildren(fragment);
    }

    function closeSearchModal() {
        searchModal.classList.add('hidden');
        searchInput.value = '';
        renderIdleState();
    }

    searchButton.addEventListener('click', () => {
        searchModal.classList.remove('hidden');
        searchInput.focus();
    });

    closeSearchButton.addEventListener('click', closeSearchModal);

    document.addEventListener('keydown', (event) => {
        if (event.key === 'Escape' && !searchModal.classList.contains('hidden')) {
            closeSearchModal();
        }
    });

    searchModal.addEventListener('click', (event) => {
        if (event.target === searchModal) {
            closeSearchModal();
        }
    });

    searchInput.addEventListener('input', (event) => {
        const query = event.currentTarget.value.toLowerCase().trim();

        if (!query) {
            renderIdleState();
            return;
        }

        const results = searchData.filter((item) => {
            return item.title.toLowerCase().includes(query)
                || item.description.toLowerCase().includes(query)
                || item.category.toLowerCase().includes(query);
        });

        if (results.length === 0) {
            renderEmptyState(query);
            return;
        }

        renderResults(results);
    });

    renderIdleState();
}

function boot() {
    initializeNavbar();
}

if (document.readyState === 'loading') {
    document.addEventListener('DOMContentLoaded', boot, { once: true });
} else {
    boot();
}
