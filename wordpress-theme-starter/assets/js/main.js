document.addEventListener('DOMContentLoaded', function () {
    var toggle = document.getElementById('nova-nav-toggle');
    var nav = document.querySelector('.nova-nav');
    if (toggle && nav) {
        toggle.addEventListener('click', function () {
            nav.classList.toggle('is-open');
        });
    }

    loadFromRest('nova-portfolio-grid', renderPortfolioCard);
    loadFromRest('nova-testimonials-grid', renderTestimonialCard);
});

/**
 * Fetches a section's data from the custom REST API (see inc/rest-api.php)
 * and renders it into the matching container.
 */
function loadFromRest(containerId, renderFn) {
    var container = document.getElementById(containerId);
    if (!container || typeof novaAPI === 'undefined') return;

    var endpoint = container.dataset.endpoint;

    fetch(novaAPI.root + endpoint)
        .then(function (res) { return res.json(); })
        .then(function (items) {
            if (!Array.isArray(items) || items.length === 0) {
                container.innerHTML = '<p class="nova-empty-state">No content yet — add posts in wp-admin.</p>';
                return;
            }
            container.innerHTML = items.map(renderFn).join('');
        })
        .catch(function () {
            container.innerHTML = '<p class="nova-empty-state">Unable to load content right now.</p>';
        });
}

function renderPortfolioCard(item) {
    var thumb = item.thumbnail ? '<img src="' + item.thumbnail + '" alt="' + escapeHtml(item.title) + '">' : '';
    return (
        '<div class="nova-card nova-portfolio-card">' +
        thumb +
        '<h3 class="nova-card__title">' + escapeHtml(item.title) + '</h3>' +
        '<p class="nova-card__desc">' + escapeHtml(item.category || '') + '</p>' +
        '</div>'
    );
}

function renderTestimonialCard(item) {
    return (
        '<div class="nova-card nova-testimonial-card">' +
        '<p class="nova-card__desc">“' + escapeHtml(item.quote || '') + '”</p>' +
        '<h3 class="nova-card__title">' + escapeHtml(item.name) + '</h3>' +
        '<p class="nova-card__desc">' + escapeHtml(item.role || '') + '</p>' +
        '</div>'
    );
}

function escapeHtml(str) {
    var div = document.createElement('div');
    div.textContent = str == null ? '' : String(str);
    return div.innerHTML;
}
