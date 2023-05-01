<?php
// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Version details
 *
 * @package    theme_adaptable
 * @copyright  2015-2019 Jeremy Hopkins (Coventry University)
 * @copyright  2015-2019 Fernando Acedo (3-bits.com)
 * @copyright  2017-2019 Manoj Solanki (Coventry University)
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 *
 */

defined('MOODLE_INTERNAL') || die;

// Let's go to include first the common header file.
require_once(dirname(__FILE__) . '/includes/header.php');

// And now we go to create the main layout.
// $left = $PAGE->theme->settings->blockside;
// if (($PAGE->theme->settings->frontpageuserblocksenabled) || (is_siteadmin($USER))) {
//     $hassidepost = $PAGE->blocks->region_has_content('side-post', $OUTPUT);
// } else {
//     $hassidepost = false;
// }

// $regions = theme_adaptable_grid($left, $hassidepost);

// // Let's include the images slider if enabled.
// if (!empty($PAGE->theme->settings->sliderenabled)) {
//     echo $OUTPUT->get_frontpage_slider();
// }

// // And let's show Infobox 1 if enabled.
// if (!empty($PAGE->theme->settings->infobox)) {
//     if (!empty($PAGE->theme->settings->infoboxfullscreen)) {
//         echo '<div id="theinfo">';
//     } else {
//         echo '<div id="theinfo" class="container">';
//     }
//     echo '<div class="row">';
//     echo $OUTPUT->get_setting('infobox', 'format_html');
//     echo '</div>';
//     echo '</div>';
// }

// The main content goes here.
?>


<div class="">

    <div class="hero_slider_container">
			<div class="hero_slider owl-carousel">
				
				<!-- Hero Slide -->
				<div class="hero_slide">
					<div class="hero_slide_background" style="background-image:url(theme/adaptable/layout/images/slider_background.jpg)"></div>
					<div class="hero_slide_container d-flex flex-column align-items-center justify-content-center">
						<div class="hero_slide_content text-center">
							<h1 data-animation-in="fadeInUp" data-animation-out="animate-out fadeOut">Get your <span>Education</span> today!</h1>
						</div>
					</div>
				</div>
				
				<!-- Hero Slide -->
				<div class="hero_slide">
					<div class="hero_slide_background" style="background-image:url(theme/adaptable/layout/images/slider_background.jpg)"></div>
					<div class="hero_slide_container d-flex flex-column align-items-center justify-content-center">
						<div class="hero_slide_content text-center">
							<h1 data-animation-in="fadeInUp" data-animation-out="animate-out fadeOut">Get your <span>Education</span> today!</h1>
						</div>
					</div>
				</div>
				
				<!-- Hero Slide -->
				<div class="hero_slide">
					<div class="hero_slide_background" style="background-image:url(theme/adaptable/layout/images/slider_background.jpg)"></div>
					<div class="hero_slide_container d-flex flex-column align-items-center justify-content-center">
						<div class="hero_slide_content text-center">
							<h1 data-animation-in="fadeInUp" data-animation-out="animate-out fadeOut">Get your <span>Education</span> today!</h1>
						</div>
					</div>
				</div>

			</div>

			<div class="hero_slider_left hero_slider_nav trans_200"><span class="trans_200">prev</span></div>
			<div class="hero_slider_right hero_slider_nav trans_200"><span class="trans_200">next</span></div>
		</div>

	</div>

    <div class="hero_boxes">
		<div class="hero_boxes_inner">
			<div class="container">
				<div class="row">

					<div class="col-lg-4 hero_box_col">
						<div class="hero_box d-flex flex-row align-items-center justify-content-start">
							<img src="theme/adaptable/layout/images/earth-globe.svg" class="svg" alt="">
							<div class="hero_box_content">
								<h2 class="hero_box_title">Online Courses</h2>
								<a href="courses.html" class="hero_box_link">view more</a>
							</div>
						</div>
					</div>

					<div class="col-lg-4 hero_box_col">
						<div class="hero_box d-flex flex-row align-items-center justify-content-start">
							<img src="theme/adaptable/layout/images/books.svg" class="svg" alt="">
							<div class="hero_box_content">
								<h2 class="hero_box_title">Our Library</h2>
								<a href="courses.html" class="hero_box_link">view more</a>
							</div>
						</div>
					</div>

					<div class="col-lg-4 hero_box_col">
						<div class="hero_box d-flex flex-row align-items-center justify-content-start">
							<img src="theme/adaptable/layout/images/professor.svg" class="svg" alt="">
							<div class="hero_box_content">
								<h2 class="hero_box_title">Our Teachers</h2>
								<a href="teachers.html" class="hero_box_link">view more</a>
							</div>
						</div>
					</div>

				</div>
			</div>
		</div>
	</div>

    <!-- Popular -->

	<div class="popular page_section">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="section_title text-center">
						<h1>Popular Courses</h1>
					</div>
				</div>
			</div>

			<div class="row course_boxes">
				
				<!-- Popular Course Item -->
				<div class="col-lg-4 course_box">
					<div class="card">
						<img class="card-img-top" src="theme/adaptable/layout/images/course_1.jpg" alt="https://unsplash.com/@kellybrito">
						<div class="card-body text-center">
							<div class="card-title"><a href="courses.html">A complete guide to design</a></div>
							<div class="card-text">Adobe Guide, Layes, Smart Objects etc...</div>
						</div>
						<div class="price_box d-flex flex-row align-items-center">
							<div class="course_author_image">
								<img src="theme/adaptable/layout/images/author.jpg" alt="https://unsplash.com/@mehdizadeh">
							</div>
							<div class="course_author_name">Michael Smith, <span>Author</span></div>
							<div class="course_price d-flex flex-column align-items-center justify-content-center"><span>$29</span></div>
						</div>
					</div>
				</div>

				<!-- Popular Course Item -->
				<div class="col-lg-4 course_box">
					<div class="card">
						<img class="card-img-top" src="theme/adaptable/layout/images/course_2.jpg" alt="https://unsplash.com/@cikstefan">
						<div class="card-body text-center">
							<div class="card-title"><a href="courses.html">Beginners guide to HTML</a></div>
							<div class="card-text">Adobe Guide, Layes, Smart Objects etc...</div>
						</div>
						<div class="price_box d-flex flex-row align-items-center">
							<div class="course_author_image">
								<img src="theme/adaptable/layout/images/author.jpg" alt="https://unsplash.com/@mehdizadeh">
							</div>
							<div class="course_author_name">Michael Smith, <span>Author</span></div>
							<div class="course_price d-flex flex-column align-items-center justify-content-center"><span>$29</span></div>
						</div>
					</div>
				</div>

				<!-- Popular Course Item -->
				<div class="col-lg-4 course_box">
					<div class="card">
						<img class="card-img-top" src="theme/adaptable/layout/images/course_3.jpg" alt="https://unsplash.com/@dsmacinnes">
						<div class="card-body text-center">
							<div class="card-title"><a href="courses.html">Advanced Photoshop</a></div>
							<div class="card-text">Adobe Guide, Layes, Smart Objects etc...</div>
						</div>
						<div class="price_box d-flex flex-row align-items-center">
							<div class="course_author_image">
								<img src="theme/adaptable/layout/images/author.jpg" alt="https://unsplash.com/@mehdizadeh">
							</div>
							<div class="course_author_name">Michael Smith, <span>Author</span></div>
							<div class="course_price d-flex flex-column align-items-center justify-content-center"><span>$29</span></div>
						</div>
					</div>
				</div>
			</div>
		</div>		
	</div>

    <!-- Register -->

	<div class="register">

<div class="container-fluid">
    
    <div class="row row-eq-height">
        <div class="col-lg-6 nopadding">
            
            <!-- Register -->

            <div class="register_section d-flex flex-column align-items-center justify-content-center">
                <div class="register_content text-center">
                    <h1 class="register_title">Register now and get a discount <span>50%</span> discount until 1 January</h1>
                    <p class="register_text">In aliquam, augue a gravida rutrum, ante nisl fermentum nulla, vitae tempor nisl ligula vel nunc. Proin quis mi malesuada, finibus tortor fermentum. Aliquam, augue a gravida rutrum, ante nisl fermentum nulla, vitae tempo.</p>
                    <div class="button button_1 register_button mx-auto trans_200"><a href="#">register now</a></div>
                </div>
            </div>

        </div>

        <div class="col-lg-6 nopadding">
            
            <!-- Search -->

            <div class="search_section d-flex flex-column align-items-center justify-content-center">
                <div class="search_background" style="background-image:url(theme/adaptable/layout/images/search_background.jpg);"></div>
                <div class="search_content text-center">
                    <h1 class="search_title">Search for your course</h1>
                    <form id="search_form" class="search_form" action="post">
                        <input id="search_form_name" class="input_field search_form_name" type="text" placeholder="Course Name" required="required" data-error="Course name is required.">
                        <input id="search_form_category" class="input_field search_form_category" type="text" placeholder="Category">
                        <input id="search_form_degree" class="input_field search_form_degree" type="text" placeholder="Degree">
                        <button id="search_submit_button" type="submit" class="search_submit_button trans_200" value="Submit">search course</button>
                    </form>
                </div> 
            </div>

        </div>
    </div>
</div>
</div>

<!-- Services -->

<div class="services page_section">

<div class="container">
    <div class="row">
        <div class="col">
            <div class="section_title text-center">
                <h1>Our Services</h1>
            </div>
        </div>
    </div>

    <div class="row services_row">

        <div class="col-lg-4 service_item text-left d-flex flex-column align-items-start justify-content-start">
            <div class="icon_container d-flex flex-column justify-content-end">
                <img src="theme/adaptable/layout/images/earth-globe.svg" alt="">
            </div>
            <h3>Online Courses</h3>
            <p>In aliquam, augue a gravida rutrum, ante nisl fermentum nulla, vitae tempor nisl ligula vel nunc. Proin quis mi malesuada, finibus tortor fermentum.</p>
        </div>

        <div class="col-lg-4 service_item text-left d-flex flex-column align-items-start justify-content-start">
            <div class="icon_container d-flex flex-column justify-content-end">
                <img src="theme/adaptable/layout/images/exam.svg" alt="">
            </div>
            <h3>Indoor Courses</h3>
            <p>In aliquam, augue a gravida rutrum, ante nisl fermentum nulla, vitae tempor nisl ligula vel nunc. Proin quis mi malesuada, finibus tortor fermentum.</p>
        </div>

        <div class="col-lg-4 service_item text-left d-flex flex-column align-items-start justify-content-start">
            <div class="icon_container d-flex flex-column justify-content-end">
                <img src="theme/adaptable/layout/images/books.svg" alt="">
            </div>
            <h3>Amazing Library</h3>
            <p>In aliquam, augue a gravida rutrum, ante nisl fermentum nulla, vitae tempor nisl ligula vel nunc. Proin quis mi malesuada, finibus tortor fermentum.</p>
        </div>

        <div class="col-lg-4 service_item text-left d-flex flex-column align-items-start justify-content-start">
            <div class="icon_container d-flex flex-column justify-content-end">
                <img src="theme/adaptable/layout/images/professor.svg" alt="">
            </div>
            <h3>Exceptional Professors</h3>
            <p>In aliquam, augue a gravida rutrum, ante nisl fermentum nulla, vitae tempor nisl ligula vel nunc. Proin quis mi malesuada, finibus tortor fermentum.</p>
        </div>

        <div class="col-lg-4 service_item text-left d-flex flex-column align-items-start justify-content-start">
            <div class="icon_container d-flex flex-column justify-content-end">
                <img src="theme/adaptable/layout/images/blackboard.svg" alt="">
            </div>
            <h3>Top Programs</h3>
            <p>In aliquam, augue a gravida rutrum, ante nisl fermentum nulla, vitae tempor nisl ligula vel nunc. Proin quis mi malesuada, finibus tortor fermentum.</p>
        </div>

        <div class="col-lg-4 service_item text-left d-flex flex-column align-items-start justify-content-start">
            <div class="icon_container d-flex flex-column justify-content-end">
                <img src="theme/adaptable/layout/images/mortarboard.svg" alt="">
            </div>
            <h3>Graduate Diploma</h3>
            <p>In aliquam, augue a gravida rutrum, ante nisl fermentum nulla, vitae tempor nisl ligula vel nunc. Proin quis mi malesuada, finibus tortor fermentum.</p>
        </div>

    </div>
</div>
</div>

<!-- Testimonials -->

<div class="testimonials page_section">
<!-- <div class="testimonials_background" style="background-image:url(images/testimonials_background.jpg)"></div> -->
<div class="testimonials_background_container prlx_parent">
    <div class="testimonials_background prlx" style="background-image:url(theme/adaptable/layout/images/testimonials_background.jpg)"></div>
</div>
<div class="container">

    <div class="row">
        <div class="col">
            <div class="section_title text-center">
                <h1>What our students say</h1>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-10 offset-lg-1">
            
            <div class="testimonials_slider_container">

                <!-- Testimonials Slider -->
                <div class="owl-carousel owl-theme testimonials_slider">
                    
                    <!-- Testimonials Item -->
                    <div class="owl-item">
                        <div class="testimonials_item text-center">
                            <div class="quote">“</div>
                            <p class="testimonials_text">In aliquam, augue a gravida rutrum, ante nisl fermentum nulla, vitae tempor nisl ligula vel nunc. Proin quis mi malesuada, finibus tortor fermentum.In aliquam, augue a gravida rutrum, ante nisl fermentum nulla, vitae tempor nisl ligula vel nunc. Proin quis mi malesuada, finibus tortor fermentum.</p>
                            <div class="testimonial_user">
                                <div class="testimonial_image mx-auto">
                                    <img src="theme/adaptable/layout/images/testimonials_user.jpg" alt="">
                                </div>
                                <div class="testimonial_name">james cooper</div>
                                <div class="testimonial_title">Graduate Student</div>
                            </div>
                        </div>
                    </div>

                    <!-- Testimonials Item -->
                    <div class="owl-item">
                        <div class="testimonials_item text-center">
                            <div class="quote">“</div>
                            <p class="testimonials_text">In aliquam, augue a gravida rutrum, ante nisl fermentum nulla, vitae tempor nisl ligula vel nunc. Proin quis mi malesuada, finibus tortor fermentum.In aliquam, augue a gravida rutrum, ante nisl fermentum nulla, vitae tempor nisl ligula vel nunc. Proin quis mi malesuada, finibus tortor fermentum.</p>
                            <div class="testimonial_user">
                                <div class="testimonial_image mx-auto">
                                    <img src="theme/adaptable/layout/images/testimonials_user.jpg" alt="">
                                </div>
                                <div class="testimonial_name">james cooper</div>
                                <div class="testimonial_title">Graduate Student</div>
                            </div>
                        </div>
                    </div>

                    <!-- Testimonials Item -->
                    <div class="owl-item">
                        <div class="testimonials_item text-center">
                            <div class="quote">“</div>
                            <p class="testimonials_text">In aliquam, augue a gravida rutrum, ante nisl fermentum nulla, vitae tempor nisl ligula vel nunc. Proin quis mi malesuada, finibus tortor fermentum.In aliquam, augue a gravida rutrum, ante nisl fermentum nulla, vitae tempor nisl ligula vel nunc. Proin quis mi malesuada, finibus tortor fermentum.</p>
                            <div class="testimonial_user">
                                <div class="testimonial_image mx-auto">
                                    <img src="theme/adaptable/layout/images/testimonials_user.jpg" alt="">
                                </div>
                                <div class="testimonial_name">james cooper</div>
                                <div class="testimonial_title">Graduate Student</div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>

</div>
</div>

<!-- Events -->

<div class="events page_section">
<div class="container">
    
    <div class="row">
        <div class="col">
            <div class="section_title text-center">
                <h1>Upcoming Events</h1>
            </div>
        </div>
    </div>
    
    <div class="event_items">

        <!-- Event Item -->
        <div class="row event_item">
            <div class="col">
                <div class="row d-flex flex-row align-items-end">

                    <div class="col-lg-2 order-lg-1 order-2">
                        <div class="event_date d-flex flex-column align-items-center justify-content-center">
                            <div class="event_day">07</div>
                            <div class="event_month">January</div>
                        </div>
                    </div>

                    <div class="col-lg-6 order-lg-2 order-3">
                        <div class="event_content">
                            <div class="event_name"><a class="trans_200" href="#">Student Festival</a></div>
                            <div class="event_location">Grand Central Park</div>
                            <p>In aliquam, augue a gravida rutrum, ante nisl fermentum nulla, vitae tempor nisl ligula vel nunc. Proin quis mi malesuada, finibus tortor.</p>
                        </div>
                    </div>

                    <div class="col-lg-4 order-lg-3 order-1">
                        <div class="event_image">
                            <img src="theme/adaptable/layout/images/event_1.jpg" alt="https://unsplash.com/@theunsteady5">
                        </div>
                    </div>

                </div>	
            </div>
        </div>

        <!-- Event Item -->
        <div class="row event_item">
            <div class="col">
                <div class="row d-flex flex-row align-items-end">

                    <div class="col-lg-2 order-lg-1 order-2">
                        <div class="event_date d-flex flex-column align-items-center justify-content-center">
                            <div class="event_day">07</div>
                            <div class="event_month">January</div>
                        </div>
                    </div>

                    <div class="col-lg-6 order-lg-2 order-3">
                        <div class="event_content">
                            <div class="event_name"><a class="trans_200" href="#">Open day in the Univesrsity campus</a></div>
                            <div class="event_location">Grand Central Park</div>
                            <p>In aliquam, augue a gravida rutrum, ante nisl fermentum nulla, vitae tempor nisl ligula vel nunc. Proin quis mi malesuada, finibus tortor.</p>
                        </div>
                    </div>

                    <div class="col-lg-4 order-lg-3 order-1">
                        <div class="event_image">
                            <img src="theme/adaptable/layout/images/event_2.jpg" alt="https://unsplash.com/@claybanks1989">
                        </div>
                    </div>

                </div>	
            </div>
        </div>

        <!-- Event Item -->
        <div class="row event_item">
            <div class="col">
                <div class="row d-flex flex-row align-items-end">

                    <div class="col-lg-2 order-lg-1 order-2">
                        <div class="event_date d-flex flex-column align-items-center justify-content-center">
                            <div class="event_day">07</div>
                            <div class="event_month">January</div>
                        </div>
                    </div>

                    <div class="col-lg-6 order-lg-2 order-3">
                        <div class="event_content">
                            <div class="event_name"><a class="trans_200" href="#">Student Graduation Ceremony</a></div>
                            <div class="event_location">Grand Central Park</div>
                            <p>In aliquam, augue a gravida rutrum, ante nisl fermentum nulla, vitae tempor nisl ligula vel nunc. Proin quis mi malesuada, finibus tortor.</p>
                        </div>
                    </div>

                    <div class="col-lg-4 order-lg-3 order-1">
                        <div class="event_image">
                            <img src="theme/adaptable/layout/images/event_3.jpg" alt="https://unsplash.com/@juanmramosjr">
                        </div>
                    </div>

                </div>	
            </div>
        </div>
    </div>
</div>
        
</div>
<!-- Footer -->

<footer class="footer">
		<div class="container">
			
			<!-- Newsletter -->

			<div class="newsletter">
				<div class="row">
					<div class="col">
						<div class="section_title text-center">
							<h1>Subscribe to newsletter</h1>
						</div>
					</div>
				</div>

				<div class="row">
					<div class="col text-center">
						<div class="newsletter_form_container mx-auto">
							<form action="post">
								<div class="newsletter_form d-flex flex-md-row flex-column flex-xs-column align-items-center justify-content-center">
									<input id="newsletter_email" class="newsletter_email" type="email" placeholder="Email Address" required="required" data-error="Valid email is required.">
									<button id="newsletter_submit" type="submit" class="newsletter_submit_btn trans_300" value="Submit">Subscribe</button>
								</div>
							</form>
						</div>
					</div>
				</div>

			</div>

			<!-- Footer Content -->

			<div class="footer_content">
				<div class="row">

					<!-- Footer Column - About -->
					<div class="col-lg-3 footer_col">

						<!-- Logo -->
						<div class="logo_container">
							<div class="logo">
								<img src="theme/adaptable/layout/images/logo.png" alt="">
							</div>
						</div>

						<p class="footer_about_text">In aliquam, augue a gravida rutrum, ante nisl fermentum nulla, vitae tempor nisl ligula vel nunc. Proin quis mi malesuada, finibus tortor fermentum, tempor lacus.</p>

					</div>

					<!-- Footer Column - Menu -->

					<div class="col-lg-3 footer_col">
						<div class="footer_column_title">Menu</div>
						<div class="footer_column_content">
							<ul>
								<li class="footer_list_item"><a href="#">Home</a></li>
								<li class="footer_list_item"><a href="#">About Us</a></li>
								<li class="footer_list_item"><a href="">Courses</a></li>
								<li class="footer_list_item"><a href="">News</a></li>
								<li class="footer_list_item"><a href="">Contact</a></li>
							</ul>
						</div>
					</div>

					<!-- Footer Column - Usefull Links -->

					<div class="col-lg-3 footer_col">
						<div class="footer_column_title">Usefull Links</div>
						<div class="footer_column_content">
							<ul>
								<li class="footer_list_item"><a href="#">Testimonials</a></li>
								<li class="footer_list_item"><a href="#">FAQ</a></li>
								<li class="footer_list_item"><a href="#">Community</a></li>
								<li class="footer_list_item"><a href="#">Campus Pictures</a></li>
								<li class="footer_list_item"><a href="#">Tuitions</a></li>
							</ul>
						</div>
					</div>

					<!-- Footer Column - Contact -->

					<div class="col-lg-3 footer_col">
						<div class="footer_column_title">Contact</div>
						<div class="footer_column_content">
							<ul>
								<li class="footer_contact_item">
									<div class="footer_contact_icon">
										<img src="theme/adaptable/layout/images/placeholder.svg" alt="https://www.flaticon.com/authors/lucy-g">
									</div>
									SDTI - Skill Development and Training International Institute,
No 297, High Level Road, Nugegoda, Sri Lanka.
								</li>
								<li class="footer_contact_item">
									<div class="footer_contact_icon">
										<img src="theme/adaptable/layout/images/smartphone.svg" alt="https://www.flaticon.com/authors/lucy-g">
									</div>
									+94 115 680 134, 0769998889
								</li>
								<li class="footer_contact_item">
									<div class="footer_contact_icon">
										<img src="theme/adaptable/layout/images/envelope.svg" alt="https://www.flaticon.com/authors/lucy-g">
									</div>info@sdticampus.lk
								</li>
							</ul>
						</div>
					</div>

				</div>
			</div>

			<!-- Footer Copyright -->

			<div class="footer_bar d-flex flex-column flex-sm-row align-items-center">
				<div class="footer_copyright">
					<span><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></span>
				</div>
				<div class="footer_social ml-sm-auto">
					<ul class="menu_social">
						<li class="menu_social_item"><a href="#"><i class="fab fa-pinterest"></i></a></li>
						<li class="menu_social_item"><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
						<li class="menu_social_item"><a href="#"><i class="fab fa-instagram"></i></a></li>
						<li class="menu_social_item"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
						<li class="menu_social_item"><a href="#"><i class="fab fa-twitter"></i></a></li>
					</ul>
				</div>
			</div>

		</div>
	</footer>
</div>

<div id="page-content" class="row<?php echo $regions['direction'];?>">
        <div id="page-navbar" class="col-12">
            <nav class="breadcrumb-button"><?php echo $OUTPUT->page_heading_button(); ?></nav>
        </div>

        <div id="region-main-box" class="<?php echo $regions['content'];?>">
            <section id="region-main">
            <?php
            echo $OUTPUT->course_content_header();
            echo $OUTPUT->main_content();
            echo $OUTPUT->course_content_footer();
            ?>
            </section>
        </div>
    </div>
<script src="theme/adaptable/layout/js/jquery-3.2.1.min.js"></script>
<script src="theme/adaptable/layout/styles/bootstrap4/popper.js"></script>
<script src="theme/adaptable/layout/styles/bootstrap4/bootstrap.min.js"></script>
<script src="theme/adaptable/layout/plugins/greensock/TweenMax.min.js"></script>
<script src="theme/adaptable/layout/plugins/greensock/TimelineMax.min.js"></script>
<script src="theme/adaptable/layout/plugins/scrollmagic/ScrollMagic.min.js"></script>
<script src="theme/adaptable/layout/plugins/greensock/animation.gsap.min.js"></script>
<script src="theme/adaptable/layout/plugins/greensock/ScrollToPlugin.min.js"></script>
<script src="theme/adaptable/layout/plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
<script src="theme/adaptable/layout/plugins/scrollTo/jquery.scrollTo.min.js"></script>
<script src="theme/adaptable/layout/plugins/easing/easing.js"></script>
<script src="theme/adaptable/layout/js/custom.js"></script>

<?php
require_once(dirname(__FILE__) . '/includes/test.php');
?>
</div>

<?php
// And to finish, we include the common footer file.
require_once(dirname(__FILE__) . '/includes/footer.php');
