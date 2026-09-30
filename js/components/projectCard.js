export function createProjectCard(project) {
    const tags = project.stack.map((tag) => `<span>#${tag}</span>`).join('');
    return `
   <article class="project-card">
                                <div class="project-image dashboard-one">
                                    <img
                                    src="../../images/projects/${project.image}"
                                    >
                                </div>

                                <div class="project-body">
                                    <h4>${project.title}</h4>

                                    <p>
                                        ${project.intro}
                                    </p>

                                   <div class="tags">
                ${tags}
            </div>

                                    <a href=${project.page}> View Project → </a>
                                </div>
                            </article>

    `;
}
