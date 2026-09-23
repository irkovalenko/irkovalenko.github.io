<?php
require __DIR__ . '/../components/header.php';
?>

<section id="projects" class="section projects-section">
    <div class="container">
        <div class="section-heading">
            <p class="eyebrow">MY PROJECTS</p>
            <p>
                Here are some of the projects I've worked on, categorized by
                technology and area of expertise.
            </p>
        </div>

        <!-- Category buttons -->

        <div class="project-filters">
            <button class="active">All</button>
            <button>Power BI</button>
            <button>Laravel</button>
            <button>FullStack</button>
            <button>Data Science</button>
        </div>

        <!-- Category cards -->

        <div class="category-grid">
            <article class="category-card">
                <div class="category-icon powerbi">▮</div>

                <div class="category-content">
                    <div class="category-title">
                        <h3>Power BI</h3>
                        <span>5</span>
                    </div>

                    <p>Dashboards, reports and data visualization solutions.</p>

                    <a href="#powerbi-projects"> View Projects → </a>
                </div>
            </article>

            <article class="category-card">
                <div class="category-icon laravel">◆</div>

                <div class="category-content">
                    <div class="category-title">
                        <h3>Laravel</h3>
                        <span>4</span>
                    </div>

                    <p>Web applications, APIs and backend systems.</p>

                    <a href="#"> View Projects → </a>
                </div>
            </article>

            <article class="category-card">
                <div class="category-icon react">⚛</div>

                <div class="category-content">
                    <div class="category-title">
                        <h3>FullStack</h3>
                        <span>6</span>
                    </div>

                    <p>Modern web applications using React, Vue, Node, etc.</p>

                    <a href="#"> View Projects → </a>
                </div>
            </article>

            <article class="category-card">
                <div class="category-icon tools">⚙</div>

                <div class="category-content">
                    <div class="category-title">
                        <h3>Other</h3>
                        <span>3</span>
                    </div>

                    <p>Tools, automation and more.</p>

                    <a href="#"> View Projects → </a>
                </div>
            </article>
        </div>

        <!-- ================= POWER BI PROJECTS ================= -->

        <div id="powerbi-projects" class="project-category">
            <div class="category-header">
                <div>
                    <p class="eyebrow">PROJECT CATEGORY</p>

                    <h3>
                        <span class="powerbi-text">▮</span>
                        Power BI
                    </h3>

                    <p>
                        Interactive dashboards, reports and data visualization
                        projects.
                    </p>
                </div>

                <a href="#projects" class="back-link"> ← Back to Projects </a>
            </div>

            <div class="project-grid">
                <article class="project-card">
                    <div class="project-image dashboard-one">
                        <div class="fake-chart">
                            <div></div>
                            <div></div>
                            <div></div>
                            <div></div>
                        </div>
                    </div>

                    <div class="project-body">
                        <h4>Sales Performance Dashboard</h4>

                        <p>
                            Interactive dashboard showing sales trends, profitability
                            and regional performance.
                        </p>

                        <div class="tags">
                            <span>Power BI</span>
                            <span>DAX</span>
                            <span>Data Modeling</span>
                        </div>

                        <a href="#"> View Project → </a>
                    </div>
                </article>

                <article class="project-card">
                    <div class="project-image dashboard-two">
                        <div class="fake-pie"></div>
                    </div>

                    <div class="project-body">
                        <h4>Customer Analytics Report</h4>

                        <p>
                            Customer segmentation and behavior analysis with dynamic
                            filters and KPIs.
                        </p>

                        <div class="tags">
                            <span>Power BI</span>
                            <span>SQL</span>
                            <span>Data Modeling</span>
                        </div>

                        <a href="#"> View Project → </a>
                    </div>
                </article>

                <article class="project-card">
                    <div class="project-image dashboard-three">
                        <div class="fake-bars">
                            <i></i>
                            <i></i>
                            <i></i>
                            <i></i>
                            <i></i>
                        </div>
                    </div>

                    <div class="project-body">
                        <h4>Financial Overview Dashboard</h4>

                        <p>
                            Consolidated financial report with key metrics and
                            drill-through functionality.
                        </p>

                        <div class="tags">
                            <span>Power BI</span>
                            <span>DAX</span>
                            <span>Excel</span>
                        </div>

                        <a href="#"> View Project → </a>
                    </div>
                </article>

                <article class="project-card">
                    <div class="project-image dashboard-four">
                        <div class="fake-circle"></div>
                    </div>

                    <div class="project-body">
                        <h4>HR Analytics Dashboard</h4>

                        <p>
                            Employee performance, attendance and workforce insights.
                        </p>

                        <div class="tags">
                            <span>Power BI</span>
                            <span>DAX</span>
                            <span>Power Query</span>
                        </div>

                        <a href="#"> View Project → </a>
                    </div>
                </article>
            </div>
        </div>
    </div>
