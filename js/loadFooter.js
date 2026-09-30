import { loadComponent } from './loadComponent.js';

const footerUrl = new URL('../components/footer.html', import.meta.url);
const siteRoot = new URL('../', import.meta.url);

await loadComponent('footer', footerUrl);

document.querySelectorAll('#footer nav a[href]').forEach((a) => {
    const relativeHref = a.getAttribute('href');
    a.href = new URL(relativeHref, siteRoot).href;
});
