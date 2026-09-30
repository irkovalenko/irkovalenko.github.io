export function createEducationTimeLine(study) {
    return `
        <article class="study-item">
            <div class="date-and-organisation">
                <div class="study-date">${study.dates}</div>
                <div class="study-university">${study.university}</div>
            </div>
            <div class="study-content">
                <h3>${study.faculty}</h3>
            </div>
        </article>
    `;
}
