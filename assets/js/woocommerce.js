document.addEventListener('DOMContentLoaded', function () {
    var body = document.body;
    var filterPanel = document.getElementById('bfShopFiltersPanel');
    var filterToggle = document.querySelector('.bf-filter-mobile-toggle');
    var filterClose = document.querySelector('.bf-filter-mobile-close');

    if (filterPanel && filterToggle) {
        var filterBackdrop = document.createElement('button');
        filterBackdrop.type = 'button';
        filterBackdrop.className = 'bf-filter-backdrop';
        filterBackdrop.setAttribute('aria-hidden', 'true');
        filterPanel.parentNode.insertBefore(filterBackdrop, filterPanel);

        var setFiltersOpen = function (isOpen) {
            body.classList.toggle('bf-filters-open', isOpen);
            filterToggle.setAttribute('aria-expanded', isOpen ? 'true' : 'false');
        };

        filterToggle.addEventListener('click', function () {
            setFiltersOpen(!body.classList.contains('bf-filters-open'));
        });

        if (filterClose) {
            filterClose.addEventListener('click', function () {
                setFiltersOpen(false);
            });
        }

        filterBackdrop.addEventListener('click', function () {
            setFiltersOpen(false);
        });

        document.addEventListener('keydown', function (event) {
            if (event.key === 'Escape' && body.classList.contains('bf-filters-open')) {
                setFiltersOpen(false);
            }
        });

        if (window.matchMedia('(max-width: 900px)').matches) {
            filterPanel.querySelectorAll('.bf-filter-group').forEach(function (group, index) {
                if (index > 0) {
                    group.removeAttribute('open');
                }
                group.addEventListener('toggle', function () {
                    if (!group.open || !window.matchMedia('(max-width: 900px)').matches) {
                        return;
                    }
                    filterPanel.querySelectorAll('.bf-filter-group').forEach(function (other) {
                        if (other !== group) {
                            other.removeAttribute('open');
                        }
                    });
                });
            });
        }
    }

    var cartForm = document.querySelector('.woocommerce-cart-form');
    if (cartForm) {
        var coupon = cartForm.querySelector('.coupon');
        if (coupon && !coupon.dataset.bfEnhanced) {
            coupon.dataset.bfEnhanced = 'true';
            coupon.classList.add('bf-cart-coupon');

            var toggle = document.createElement('button');
            toggle.type = 'button';
            toggle.className = 'bf-cart-coupon-toggle';
            toggle.setAttribute('aria-expanded', 'false');
            toggle.textContent = 'Have a promo code?';

            toggle.addEventListener('click', function () {
                var isOpen = coupon.classList.toggle('is-open');
                toggle.setAttribute('aria-expanded', isOpen ? 'true' : 'false');
            });

            coupon.parentNode.insertBefore(toggle, coupon);
        }
    }

    document.querySelectorAll('.woocommerce-checkout .wc_payment_method').forEach(function (item) {
        item.classList.add('bf-payment-method');
    });
});
