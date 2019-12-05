<!DOCTYPE html>
<html lang="en-gb" dir="ltr">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Sprin | Courses and Events HTML Template</title>
  <link rel="shortcut icon" type="image/png" href="https://placehold.co/20x20.png" >
  <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:400,600,700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="css/main.css" />
  <script src="js/uikit.js"></script>
</head>

<body class="uk-background-body">

<div data-uk-sticky="animation: uk-animation-slide-top; sel-target: .uk-navbar-container; cls-active: uk-navbar-sticky; cls-inactive: uk-navbar-transparent ; top: #header">
  <nav class="uk-navbar-container uk-letter-spacing-small uk-text-bold">
    <div class="uk-container">
      <div class="uk-position-z-index" data-uk-navbar>
        <div class="uk-navbar-left">
          <a class="uk-navbar-item uk-logo" href="index.html">Sprin</a>
        </div>
        <div class="uk-navbar-right">
          <ul class="uk-navbar-nav uk-visible@m" data-uk-scrollspy-nav="closest: li; scroll: true; offset: 80">
            <li ><a href="index.html">Courses</a></li>
            <li ><a href="events.html">Events</a></li>
            <li >
              <a href="#">Pages</a>
              <div class="uk-navbar-dropdown">
                <ul class="uk-nav uk-navbar-dropdown-nav">
                  <li ><a href="course.html">Course</a></li>
                  <li ><a href="event.html">Event</a></li>
                  <li class="uk-active"><a href="search.html">Search</a></li>
                  <li ><a href="sign-in.html">Sign In</a></li>
                  <li ><a href="sign-up.html">Sign Up</a></li>
                </ul>
              </div>            
            </li>
          </ul>
          <div>
            <a class="uk-navbar-toggle" data-uk-search-icon href="#"></a>
            <div class="uk-drop uk-background-default" data-uk-drop="mode: click; pos: left-center; offset: 0">
              <form class="uk-search uk-search-navbar uk-width-1-1">
                <input class="uk-search-input uk-text-demi-bold" type="search" placeholder="Search..." autofocus>
              </form>
            </div>
          </div>
          <div class="uk-navbar-item">
            <div><a class="uk-button uk-button-primary-light" href="sign-up.html">Sign Up</a></div>
          </div>          
          <a class="uk-navbar-toggle uk-hidden@m" href="#offcanvas" data-uk-toggle><span
            data-uk-navbar-toggle-icon></span></a>
        </div>
      </div>
    </div>
  </nav>
</div>

<div class="uk-section">
  <div class="uk-container">
    <div class="uk-child-width-1-2@m" data-uk-grid>
      <div>
        <form class="uk-search uk-search-default uk-width-1-1">
          <div class="uk-grid-small" data-uk-grid>
            <div class="uk-width-expand">
              <input class="uk-input uk-form-large uk-border-rounded-medium" type="search" placeholder="Search anything">
            </div>
            <div class="uk-width-auto">
              <button class="uk-button uk-button-large uk-button-primary">Search</button>
            </div>
          </div>
        </form>
      </div>
      <div>
        <div class="uk-grid-small uk-child-width-auto@m uk-flex uk-flex-right" data-uk-grid>
          <div>
            <select class="uk-select uk-select-light">
              <option>Any Type</option>
              <option>Online</option>
              <option>School</option>
            </select>
          </div>
          <div>
            <select class="uk-select uk-select-light">
              <option>Any Category</option>
              <option>Web Design</option>
              <option>Marketing</option>
              <option>Accounting</option>
              <option>Business</option>
              <option>Design</option>
            </select>
          </div>
        </div>
      </div>
    </div>

    <div class="uk-child-width-1-2@s uk-child-width-1-3@m uk-grid-match uk-margin-medium-top" data-uk-grid>
      <div>
        <div class="uk-card uk-card-small uk-card-default uk-card-hover uk-border-rounded-large uk-overflow-hidden">
          <div class="uk-card-media-top uk-inline uk-light">
            <img src="https://placehold.co/640x380" alt="Course Title">
            <div class="uk-position-cover uk-overlay-xlight"></div>
            <div class="uk-position-small uk-position-top-left">
              <span class="uk-label uk-text-bold uk-text-price">$27.00</span>
            </div>
            <div class="uk-position-small uk-position-top-right">
              <a href="#" class="uk-icon-button uk-like uk-position-z-index uk-position-relative" data-uk-icon="heart"></a>
            </div>            
          </div>
          <div class="uk-card-body">
            <h3 class="uk-card-title uk-margin-small-bottom">Business Presentation Course</h3>
            <div class="uk-text-muted uk-text-small">Thomas Haller</div>
            <div class="uk-text-muted uk-text-xxsmall uk-rating uk-margin-small-top">
              <span class="uk-rating-filled" data-uk-icon="icon: star; ratio: 0.75"></span>
              <span class="uk-rating-filled" data-uk-icon="icon: star; ratio: 0.75"></span>
              <span class="uk-rating-filled" data-uk-icon="icon: star; ratio: 0.75"></span>
              <span class="uk-rating-filled" data-uk-icon="icon: star; ratio: 0.75"></span>
              <span class="uk-rating-filled" data-uk-icon="icon: star; ratio: 0.75"></span>
              <span class="uk-margin-small-left uk-text-bold">5.0</span>
              <span>(324)</span>
            </div>
          </div>
          <a href="course.html" class="uk-position-cover"></a>
        </div>
      </div>
      <div>
        <div class="uk-card uk-card-small uk-card-default uk-card-hover uk-border-rounded-large uk-overflow-hidden">
          <div class="uk-card-media-top uk-inline uk-light">
            <img src="https://placehold.co/640x380" alt="Course Title">
            <div class="uk-position-cover uk-overlay-xlight"></div>
            <div class="uk-position-small uk-position-top-left">
              <span class="uk-label uk-text-bold uk-text-price">$39.00</span>
            </div>
            <div class="uk-position-small uk-position-top-right">
              <a href="#" class="uk-icon-button uk-like uk-position-z-index uk-position-relative" data-uk-icon="heart"></a>
            </div>            
          </div>
          <div class="uk-card-body">
            <h3 class="uk-card-title uk-margin-small-bottom">Outdoor Portrait Photography</h3>
            <div class="uk-text-muted uk-text-small">Jannet Wilkins</div>
            <div class="uk-text-muted uk-text-xxsmall uk-rating uk-margin-small-top">
              <span class="uk-rating-filled" data-uk-icon="icon: star; ratio: 0.75"></span>
              <span class="uk-rating-filled" data-uk-icon="icon: star; ratio: 0.75"></span>
              <span class="uk-rating-filled" data-uk-icon="icon: star; ratio: 0.75"></span>
              <span class="uk-rating-filled" data-uk-icon="icon: star; ratio: 0.75"></span>
              <span data-uk-icon="icon: star; ratio: 0.75"></span>
              <span class="uk-margin-small-left uk-text-bold">4.0</span>
              <span>(6,650)</span>
            </div>
          </div>
          <a href="course.html" class="uk-position-cover"></a>
        </div>
      </div>
      <div>
        <div class="uk-card uk-card-small uk-card-default uk-card-hover uk-border-rounded-large uk-overflow-hidden">
          <div class="uk-card-media-top uk-inline uk-light">
            <img src="https://placehold.co/640x380" alt="Course Title">
            <div class="uk-position-cover uk-overlay-xlight"></div>
            <div class="uk-position-small uk-position-top-left">
              <span class="uk-label uk-text-bold uk-text-price">$19.00</span>
            </div>
            <div class="uk-position-small uk-position-top-right">
              <a href="#" class="uk-icon-button uk-like uk-position-z-index uk-position-relative" data-uk-icon="heart"></a>
            </div>            
          </div>
          <div class="uk-card-body">
            <h3 class="uk-card-title uk-margin-small-bottom">Creating Digital Artwork on Tablet</h3>
            <div class="uk-text-muted uk-text-small">Chris Jenkins</div>
            <div class="uk-text-muted uk-text-xxsmall uk-rating uk-margin-small-top">
              <span class="uk-rating-filled" data-uk-icon="icon: star; ratio: 0.75"></span>
              <span class="uk-rating-filled" data-uk-icon="icon: star; ratio: 0.75"></span>
              <span class="uk-rating-filled" data-uk-icon="icon: star; ratio: 0.75"></span>
              <span class="uk-rating-filled" data-uk-icon="icon: star; ratio: 0.75"></span>
              <span data-uk-icon="icon: star; ratio: 0.75"></span>
              <span class="uk-margin-small-left uk-text-bold">4.0</span>
              <span>(6,650)</span>
            </div>
          </div>
          <a href="course.html" class="uk-position-cover"></a>
        </div>
      </div>
      <div>
        <div class="uk-card uk-card-small uk-card-default uk-card-hover uk-border-rounded-large uk-overflow-hidden">
          <div class="uk-card-media-top uk-inline uk-light">
            <img src="https://placehold.co/640x380" alt="Course Title">
            <div class="uk-position-cover uk-overlay-xlight"></div>
            <div class="uk-position-small uk-position-top-left">
              <span class="uk-label uk-text-bold uk-text-price">$34.00</span>
            </div>
            <div class="uk-position-small uk-position-top-right">
              <a href="#" class="uk-icon-button uk-like uk-position-z-index uk-position-relative" data-uk-icon="heart"></a>
            </div>            
          </div>
          <div class="uk-card-body">
            <h3 class="uk-card-title uk-margin-small-bottom">Advanced Portrait Photography</h3>
            <div class="uk-text-muted uk-text-small">Linsey Tomkins</div>
            <div class="uk-text-muted uk-text-xxsmall uk-rating uk-margin-small-top">
              <span class="uk-rating-filled" data-uk-icon="icon: star; ratio: 0.75"></span>
              <span class="uk-rating-filled" data-uk-icon="icon: star; ratio: 0.75"></span>
              <span class="uk-rating-filled" data-uk-icon="icon: star; ratio: 0.75"></span>
              <span class="uk-rating-filled" data-uk-icon="icon: star; ratio: 0.75"></span>
              <span class="uk-rating-filled" data-uk-icon="icon: star; ratio: 0.75"></span>
              <span class="uk-margin-small-left uk-text-bold">4.95</span>
              <span>(2,350)</span>
            </div>
          </div>
          <a href="course.html" class="uk-position-cover"></a>
        </div>
      </div>
      <div>
        <div class="uk-card uk-card-small uk-card-default uk-card-hover uk-border-rounded-large uk-overflow-hidden">
          <div class="uk-card-media-top uk-inline uk-light">
            <img src="https://placehold.co/640x380" alt="Course Title">
            <div class="uk-position-cover uk-overlay-xlight"></div>
            <div class="uk-position-small uk-position-top-left">
              <span class="uk-label uk-text-bold uk-text-price">$45.00</span>
            </div>
            <div class="uk-position-small uk-position-top-right">
              <a href="#" class="uk-icon-button uk-like uk-position-z-index uk-position-relative" data-uk-icon="heart"></a>
            </div>            
          </div>
          <div class="uk-card-body">
            <h3 class="uk-card-title uk-margin-small-bottom">React Development Environment</h3>
            <div class="uk-text-muted uk-text-small">Ben Allen</div>
            <div class="uk-text-muted uk-text-xxsmall uk-rating uk-margin-small-top">
              <span class="uk-rating-filled" data-uk-icon="icon: star; ratio: 0.75"></span>
              <span class="uk-rating-filled" data-uk-icon="icon: star; ratio: 0.75"></span>
              <span class="uk-rating-filled" data-uk-icon="icon: star; ratio: 0.75"></span>
              <span class="uk-rating-filled" data-uk-icon="icon: star; ratio: 0.75"></span>
              <span data-uk-icon="icon: star; ratio: 0.75"></span>
              <span class="uk-margin-small-left uk-text-bold">4.0</span>
              <span>(6,650)</span>
            </div>
          </div>
          <a href="course.html" class="uk-position-cover"></a>
        </div>
      </div>
      <div>
        <div class="uk-card uk-card-small uk-card-default uk-card-hover uk-border-rounded-large uk-overflow-hidden">
          <div class="uk-card-media-top uk-inline uk-light">
            <img src="https://placehold.co/640x380" alt="Course Title">
            <div class="uk-position-cover uk-overlay-xlight"></div>
            <div class="uk-position-small uk-position-top-left">
              <span class="uk-label uk-text-bold uk-text-price">$29.00</span>
            </div>
            <div class="uk-position-small uk-position-top-right">
              <a href="#" class="uk-icon-button uk-like uk-position-z-index uk-position-relative" data-uk-icon="heart"></a>
            </div>            
          </div>
          <div class="uk-card-body">
            <h3 class="uk-card-title uk-margin-small-bottom">Hatha Yoga for Complete Beginners</h3>
            <div class="uk-text-muted uk-text-small">Alex Jensen</div>
            <div class="uk-text-muted uk-text-xxsmall uk-rating uk-margin-small-top">
              <span class="uk-rating-filled" data-uk-icon="icon: star; ratio: 0.75"></span>
              <span class="uk-rating-filled" data-uk-icon="icon: star; ratio: 0.75"></span>
              <span class="uk-rating-filled" data-uk-icon="icon: star; ratio: 0.75"></span>
              <span data-uk-icon="icon: star; ratio: 0.75"></span>
              <span data-uk-icon="icon: star; ratio: 0.75"></span>
              <span class="uk-margin-small-left uk-text-bold">3.1</span>
              <span>(1,834)</span>
            </div>
          </div>
          <a href="course.html" class="uk-position-cover"></a>
        </div>
      </div>
      <div>
        <div class="uk-card uk-card-small uk-card-default uk-card-hover uk-border-rounded-large uk-overflow-hidden">
          <div class="uk-card-media-top uk-inline uk-light">
            <img src="https://placehold.co/640x380" alt="Course Title">
            <div class="uk-position-cover uk-overlay-xlight"></div>
            <div class="uk-position-small uk-position-top-left">
              <span class="uk-label uk-text-bold uk-text-price">$59.00</span>
            </div>
            <div class="uk-position-small uk-position-top-right">
              <a href="#" class="uk-icon-button uk-like uk-position-z-index uk-position-relative" data-uk-icon="heart"></a>
            </div>            
          </div>
          <div class="uk-card-body">
            <div data-uk-grid>
              <div class="uk-width-auto uk-text-center">
                <span class="uk-display-block uk-text-small uk-text-bold uk-text-primary uk-text-uppercase">Feb</span>
                <span class="uk-display-block uk-h4 uk-margin-xsmall-top">2</span>
              </div>
              <div class="uk-width-expand">
                <h3 class="uk-card-title">Fosters Live in Great Hall</h3>
                <p class="uk-text-muted uk-text-small">10902 Great Hall, Los Angeles, California USA</p>
              </div>
            </div>
          </div>
          <a href="event.html" class="uk-position-cover"></a>
        </div>
      </div>
      <div>
        <div class="uk-card uk-card-small uk-card-default uk-card-hover uk-border-rounded-large uk-overflow-hidden">
          <div class="uk-card-media-top uk-inline uk-light">
            <img src="https://placehold.co/640x380" alt="Course Title">
            <div class="uk-position-cover uk-overlay-xlight"></div>
            <div class="uk-position-small uk-position-top-left">
              <span class="uk-label uk-text-bold uk-text-price">$119.00</span>
            </div>
            <div class="uk-position-small uk-position-top-right">
              <a href="#" class="uk-icon-button uk-like uk-position-z-index uk-position-relative" data-uk-icon="heart"></a>
            </div>            
          </div>
          <div class="uk-card-body">
            <div data-uk-grid>
              <div class="uk-width-auto uk-text-center">
                <span class="uk-display-block uk-text-small uk-text-bold uk-text-primary uk-text-uppercase">Nov</span>
                <span class="uk-display-block uk-h4 uk-margin-xsmall-top">30</span>
              </div>
              <div class="uk-width-expand">
                <h3 class="uk-card-title">Door Stopper Rock Concert</h3>
                <p class="uk-text-muted uk-text-small">40111 Small Arena, New York City USA</p>
              </div>
            </div>
          </div>
          <a href="event.html" class="uk-position-cover"></a>
        </div>
      </div>
      <div>
        <div class="uk-card uk-card-small uk-card-default uk-card-hover uk-border-rounded-large uk-overflow-hidden">
          <div class="uk-card-media-top uk-inline uk-light">
            <img src="https://placehold.co/640x380" alt="Course Title">
            <div class="uk-position-cover uk-overlay-xlight"></div>
            <div class="uk-position-small uk-position-top-left">
              <span class="uk-label uk-text-bold uk-text-price">$99.00</span>
            </div>
            <div class="uk-position-small uk-position-top-right">
              <a href="#" class="uk-icon-button uk-like uk-position-z-index uk-position-relative" data-uk-icon="heart"></a>
            </div>            
          </div>
          <div class="uk-card-body">
            <div data-uk-grid>
              <div class="uk-width-auto uk-text-center">
                <span class="uk-display-block uk-text-small uk-text-bold uk-text-primary uk-text-uppercase">Feb</span>
                <span class="uk-display-block uk-h4 uk-margin-xsmall-top">10</span>
              </div>
              <div class="uk-width-expand">
                <h3 class="uk-card-title">ProductCon Conference</h3>
                <p class="uk-text-muted uk-text-small">90111 Short Beach Hall, San Francisco</p>
              </div>
            </div>
          </div>
          <a href="event.html" class="uk-position-cover"></a>
        </div>
      </div>
    </div>
    <div class="uk-text-center uk-margin-large-top">
      <ul class="uk-pagination uk-flex-center uk-margin-remove">
        <li><a class="uk-button uk-button-primary uk-disabled" href="#">1</a></li>
        <li><a class="uk-button uk-button-primary-light" href="#">2</a></li>
        <li><a class="uk-button uk-button-primary-light" href="#">3</a></li>
        <li><a class="uk-button uk-button-primary-light" href="#">4</a></li>
        <li><a class="uk-button uk-button-primary-light" href="#">Next</a></li>
      </ul>    
    </div>    
  </div>
</div>

<footer class="uk-section uk-section-secondary uk-section-large">
	<div class="uk-container uk-text-muted">
		<div class="uk-child-width-1-2@s uk-child-width-1-5@m" data-uk-grid>
			<div>
				<h5>Company</h5>
				<ul class="uk-list uk-text-small">
					<li><a class="uk-link-muted" href="#">Marketing Tools</a></li>
					<li><a class="uk-link-muted" href="#">Presentations</a></li>
					<li><a class="uk-link-muted" href="#">Professionals</a></li>
					<li><a class="uk-link-muted" href="#">Appointments</a></li>
					<li><a class="uk-link-muted" href="#">Stores</a></li>
				</ul>
			</div>
			<div>
				<h5>Community</h5>
				<ul class="uk-list uk-text-small">
					<li><a class="uk-link-muted" href="#">Webinars</a></li>
					<li><a class="uk-link-muted" href="#">Developers</a></li>
					<li><a class="uk-link-muted" href="#">Platforms</a></li>
					<li><a class="uk-link-muted" href="#">Workshops</a></li>
					<li><a class="uk-link-muted" href="#">Local Meetups</a></li>
				</ul>
			</div>
			<div>
				<h5>Join Us</h5>
				<ul class="uk-list uk-text-small">
					<li><a class="uk-link-muted" href="#">Our Initiatives</a></li>
					<li><a class="uk-link-muted" href="#">Giving Back</a></li>
					<li><a class="uk-link-muted" href="#">Communities</a></li>
					<li><a class="uk-link-muted" href="#">Youth Program</a></li>
					<li><a class="uk-link-muted" href="#">Charity</a></li>
				</ul>
			</div>
			<div>
				<h5>Contact</h5>
				<ul class="uk-list uk-text-small">
					<li><a class="uk-link-muted" href="#">Contact Form</a></li>
					<li><a class="uk-link-muted" href="#">LinkedIn</a></li>
					<li><a class="uk-link-muted" href="#">Facebook</a></li>
					<li><a class="uk-link-muted" href="#">Instagram</a></li>
					<li><a class="uk-link-muted" href="#">Visit Us</a></li>
				</ul>
			</div>
			<div>
				<div class="uk-margin">
					<a href="#" class="uk-logo">Sprin</a>
				</div>
				<div class="uk-margin uk-text-small">				
					<p>Made by a <a href="https://drifter.works/" target="_blank">Drifter</a> in Guatemala City.</p>
				</div>
				<div class="uk-margin">
					<div data-uk-grid class="uk-child-width-auto uk-grid-small">
						<div class="uk-first-column">
							<a href="https://www.facebook.com/" data-uk-icon="icon: facebook" class="uk-icon-link uk-icon"
								target="_blank"></a>
						</div>
						<div>
							<a href="https://www.instagram.com/" data-uk-icon="icon: instagram" class="uk-icon-link uk-icon"
								target="_blank"></a>
						</div>
						<div>
							<a href="mailto:info@blacompany.com" data-uk-icon="icon: mail" class="uk-icon-link uk-icon"
								target="_blank"></a>
						</div>
					</div>
				</div>
			</div>			
		</div>
	</div>
</footer>

<div id="offcanvas" data-uk-offcanvas="flip: true; overlay: true">
  <div class="uk-offcanvas-bar">
    <a class="uk-logo" href="index.html">Sprin</a>
    <button class="uk-offcanvas-close" type="button" data-uk-close="ratio: 1.2"></button>
    <ul class="uk-nav uk-nav-primary uk-nav-offcanvas uk-margin-medium-top uk-text-center">
      <li ><a href="index.html">Courses</a></li>
      <li ><a href="events.html">Events</a></li>
      <li ><a href="course.html">Course</a></li>
      <li ><a href="event.html">Event</a></li>
      <li class="uk-active"><a href="search.html">Search</a></li>
      <li ><a href="sign-in.html">Sign In</a></li>
      <li ><a href="sign-up.html">Sign Up</a></li>
    </ul>
    <div class="uk-margin-medium-top">
      <a class="uk-button uk-width-1-1 uk-button-primary-light" href="sign-up.html">Sign Up</a>
    </div>
    <div class="uk-margin-medium-top uk-text-center">
      <div data-uk-grid class="uk-child-width-auto uk-grid-small uk-flex-center">
        <div>
          <a href="https://twitter.com/" data-uk-icon="icon: twitter" class="uk-icon-link" target="_blank"></a>
        </div>
        <div>
          <a href="https://www.facebook.com/" data-uk-icon="icon: facebook" class="uk-icon-link" target="_blank"></a>
        </div>
        <div>
          <a href="https://www.instagram.com/" data-uk-icon="icon: instagram" class="uk-icon-link" target="_blank"></a>
        </div>
        <div>
          <a href="https://vimeo.com/" data-uk-icon="icon: vimeo" class="uk-icon-link" target="_blank"></a>
        </div>
      </div>
    </div>
  </div>
</div>

</body>

</html>