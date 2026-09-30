export function createCourseCard(course) {
    return `
        <article class="course-card">
            <div class="course-card-top">
                <span class="course-date">${course.date}</span>

                <img
                    src="${course.image}"
                    alt="${course.organisation}"
                    class="course-image"
                />
            </div>

            <div class="course-card-body">
                <h3>${course.title}</h3>

                <p class="course-organisation">
                    ${course.organisation}
                </p>

                <p class="course-description">
                    ${course.description}
                </p>
            </div>

            <div class="course-card-footer">
                <span>Certificate</span>

                <a
                    href="${course.link}"
                    class="course-arrow"
                    target="_blank"
                    rel="noopener noreferrer"
                >
                    ↗
                </a>
            </div>
        </article>
    `;
}
