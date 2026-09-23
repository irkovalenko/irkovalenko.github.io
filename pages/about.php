<?php

require __DIR__ . '/../components/header.php';

?>

<section id="about" class="section about-section">
    <div class="container">
        <div class="section-heading">
            <p class="eyebrow">ABOUT ME</p>

            <h2>
                Junior developer with background
                <span>in BI</span>
            </h2>
        </div>

        <div class="about-grid">
            <div class="about-text">
                <p>
                    I am a motivated and eager to learn PHP developer of entry level with an experience of working in
                    Laravel framework for almost 1 year and a PowerBI data analyst with experience of almost 3 years.
                <p>
                    Born in Poland in an Ukrainian immigrants family, I have come to the Netherlands in October 2023 to
                    work as a customer service officer and as a PowerBI data analyst for a Dutch company.
                </p>
                <p>
                    In 2019 I obtained a Bachelor degree in Tourism and Recreation. However, the pandemic gradually
                    shifted my focus to IT. In 2023 I completed Data Science studies where, apart from machine learning
                    projects in Python, I learnt the basics of BI software like Tableau and PowerBI.
                </p>
                <p>
                    That basis served me well in my job in the Netherlands. I grew professionally as PowerBI data
                    analyst since I was responsible for delivering insights and metrics for different departments of the
                    company.
                </p>

                <p>
                    In February 2025, I started in combined position of Junior PHP Developer and PowerBI data analyst.
                    That made me realise that I want to focus on programming and build something more than dashboards.
                    Apart from working on small functionalities, I used php to prepare data for BI. I stayed truly
                    inspired of its efficiency and possibilities.
                </p>

                <div class="about-info">
                    <div>
                        <span class="info-icon">⌖</span>
                        <div>
                            <small>Location</small>
                            <strong>Netherlands</strong>
                        </div>
                    </div>

                    <div>
                        <span class="info-icon">▣</span>
                        <div>
                            <small>Experience</small>
                            <strong>3+ Years</strong>
                        </div>
                    </div>

                    <div>
                    </div>
                </div>
            </div>

            <div class="profile-card">
                <div class="profile-avatar">
                    <img class="rounded-img" src="../images/me.jpg">
                </div>

                <div class="profile-decoration"></div>
            </div>
        </div>

        <?php require __DIR__ . '/projects.php'; ?>
</section>
