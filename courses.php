<?php include ('master/header.php') ?>

<div class="react-breadcrumbs">
    <div class="breadcrumbs-wrap">
        <img class="desktop" src="assets/images/breadcrumbs/1.jpg" alt="Breadcrumbs">
        <img class="mobile" src="assets/images/breadcrumbs/1.jpg" alt="Breadcrumbs">
        <div class="breadcrumbs-inner">
            <div class="container">
                <div class="breadcrumbs-text">
                    <h1 class="breadcrumbs-title">Courses</h1>
                    <div class="back-nav">
                        <ul>
                            <li><a href="courses.php">Home</a></li>
                            <li>Courses</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="react-course-filter pb---100 pt---120">
    <div class="container">
        <div class="row d-flex">
            <div class="col-lg-3">
                <div class="react__title__section text-left">
                    <h2 class="react__tittle">Our Courses </h2>
                </div>
            </div>
            <div class="col-lg-9 text-right">
                <div class="react-filter">
                    <button class="active" data-filter="*">See All</button>
                    <button data-filter=".filter1">3 Months</button>
                    <button data-filter=".filter2">6 Months</button>
                    <button data-filter=".filter3">12 Months</button>
                    <button data-filter=".filter4">18 Months</button>
                    <button data-filter=".filter5">24 Months</button>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 filter2">
                <div class="inner-course">
                    <div class="case-img">
                        <img src="assets/images/course-filter/1.jpg" alt="Course Image">
                    </div>
                    <div class="case-content">
                        <ul class="meta-course">
                            <li></li>
                            <li> </li>
                        </ul>
                        <h4 class="case-title"> <a href="coureses-single.html">Diploma in Computer Application - DCA</a>
                        </h4>

                        <ul class="react-ratings">
                            <li> </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-4 filter6">
                <div class="inner-course">
                    <div class="case-img">
                        <img src="assets/images/course-filter/1.jpg" alt="Course Image">
                    </div>
                    <div class="case-content">
                        <ul class="meta-course">
                            <li></li>
                            <li> </li>
                        </ul>
                        <h4 class="case-title"> <a href="coureses-single.html">Diploma in Computer Application - DCA</a>
                        </h4>

                        <ul class="react-ratings">
                            <li> </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="inner-course">
                    <div class="case-img">
                        <img src="assets/images/course-filter/1.jpg" alt="Course Image">
                    </div>
                    <div class="case-content">
                        <ul class="meta-course">
                            <li></li>
                            <li> </li>
                        </ul>
                        <h4 class="case-title"> <a href="coureses-single.html">Diploma in Computer Application - DCA</a>
                        </h4>

                        <ul class="react-ratings">
                            <li> </li>
                        </ul>
                    </div>
                </div>
            </div>

        </div>

    </div>
</div>

<?php include ('master/footer.php') ?>

<script>
// Wait for the document to load
// JavaScript code using jQuery
$(document).ready(function() {
    // Event handler for filter button clicks
    $('#course-filter button').on('click', function() {
        var filter = $(this).data('filter');

        // Hide all course items
        $('.row .col-md-4').hide();

        if (filter === '*') {
            // Show all courses if "See All" button is clicked
            $('.row .col-md-4').show();
        } else {
            // Show only the courses with matching filter class
            $('.row .col-md-4').filter(filter).show();
        }

        // Add/remove active class to the filter buttons
        $(this).addClass('active').siblings().removeClass('active');
    });
});
</script>