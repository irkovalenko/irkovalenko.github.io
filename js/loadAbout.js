import { loadComponent } from './loadComponent.js';

const aboutUrl = new URL(
    '../components/about/about_section.html',
    import.meta.url
);
const siteRoot = new URL('../', import.meta.url);

await loadComponent('about', aboutUrl);
lucide.createIcons();

document.querySelectorAll('#about nav a[href]').forEach((a) => {
    const relativeHref = a.getAttribute('href');
    a.href = new URL(relativeHref, siteRoot).href;
});
