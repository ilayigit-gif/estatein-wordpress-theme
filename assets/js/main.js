document.addEventListener("DOMContentLoaded", function () {
    /* MOBILE MENU */
    const toggle = document.querySelector(".mobile-menu-toggle");
    const nav = document.querySelector(".main-navigation");

    if (toggle && nav) {
        toggle.addEventListener("click", function () {
            toggle.classList.toggle("is-active");
            nav.classList.toggle("is-open");
        });
    }

    /* REAL PROPERTY FILTER */
    const searchInput = document.getElementById("propertySearchInput");
    const searchForm = document.getElementById("propertySearchForm");

    const locationFilter = document.getElementById("filterLocation");
    const typeFilter = document.getElementById("filterType");
    const priceFilter = document.getElementById("filterPrice");
    const bedroomFilter = document.getElementById("filterBedroom");
    const resetBtn = document.getElementById("resetFilters");
    const noResults = document.getElementById("noResults");

    const cards = document.querySelectorAll(".property-card[data-title]");

    if (cards.length) {
        function filterProperties() {
            const searchValue = searchInput ? searchInput.value.toLowerCase().trim() : "";
            const locationValue = locationFilter ? locationFilter.value : "";
            const typeValue = typeFilter ? typeFilter.value : "";
            const priceValue = priceFilter ? priceFilter.value : "";
            const bedroomValue = bedroomFilter ? bedroomFilter.value : "";

            let visibleCount = 0;

            cards.forEach(function (card) {
                const title = card.dataset.title || "";
                const location = card.dataset.location || "";
                const type = card.dataset.type || "";
                const price = Number(card.dataset.price || 0);
                const bedroom = card.dataset.bedroom || "";

                const matchesSearch = title.includes(searchValue);
                const matchesLocation = !locationValue || location === locationValue;
                const matchesType = !typeValue || type === typeValue;
                const matchesBedroom = !bedroomValue || bedroom === bedroomValue;

                let matchesPrice = true;

                if (priceValue) {
                    const range = priceValue.split("-");
                    const min = Number(range[0]);
                    const max = Number(range[1]);

                    matchesPrice = price >= min && price <= max;
                }

                const isVisible =
                    matchesSearch &&
                    matchesLocation &&
                    matchesType &&
                    matchesBedroom &&
                    matchesPrice;

                card.style.display = isVisible ? "block" : "none";

                if (isVisible) {
                    visibleCount++;
                }
            });

            if (noResults) {
                noResults.style.display = visibleCount === 0 ? "block" : "none";
            }
        }

        if (searchForm) {
            searchForm.addEventListener("submit", function (e) {
                e.preventDefault();
                filterProperties();
            });
        }

        [searchInput, locationFilter, typeFilter, priceFilter, bedroomFilter].forEach(function (item) {
            if (!item) return;

            item.addEventListener("input", filterProperties);
            item.addEventListener("change", filterProperties);
        });

        if (resetBtn) {
            resetBtn.addEventListener("click", function () {
                if (searchInput) searchInput.value = "";
                if (locationFilter) locationFilter.value = "";
                if (typeFilter) typeFilter.value = "";
                if (priceFilter) priceFilter.value = "";
                if (bedroomFilter) bedroomFilter.value = "";

                filterProperties();
            });
        }

        filterProperties();
    }

    /* FAQ ACCORDION */
    const faqItems = document.querySelectorAll(".faq-item");

    if (faqItems.length) {
        faqItems.forEach(function (item) {
            const question = item.querySelector(".faq-question");

            if (!question) return;

            question.addEventListener("click", function () {
                const activeItem = document.querySelector(".faq-item.active");

                if (activeItem && activeItem !== item) {
                    activeItem.classList.remove("active");
                }

                item.classList.toggle("active");
            });
        });
    }
});