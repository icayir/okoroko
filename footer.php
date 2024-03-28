<footer class="brk-footer position-relative ml-30 mr-30 mb-30" id="contact" data-brk-library="component__footer">
			<div class="brk-footer__wrapper pt-120 pb-60 d-flex flex-column align-items-center">
				<img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="img/demo_minimalistic_portfolio/1860x480_1.jpg" alt="alt" class="brk-abs-img lazyload">
				<span class="brk-abs-overlay brk-base-bg-11"></span>
				<div class="text-center mb-100" data-brk-library="component__typing_rotator,assets__typing_rotator">
					<h2 class="brk-headline font__family-poppins font__size-84 font__weight-normal letters rotate-2 text-center show-inline">
						<span class="brk-words-rotators brk-white-font-color">
							<b class="is-visible">Okan &nbsp; Özyiğit</b>
							<b>Fotoğraf</b>
							<b>Videografi</b>
							<b></b>
						</span>
					</h2>
				</div>
				<div class="brk-social-links brk-white-font-color d-flex justify-content-center mb-25 font__size-16 brk-social-links_bordered" data-brk-library="component__social_links">
					
					<a href="https://www.instagram.com/okorokoko/" class="brk-social-links__item wow fadeInUp" data-wow-delay="1.1s" data-wow-duration=".35s">
						<i class="fab fa-instagram"></i>
					</a>
					
					<a href="#" class="brk-social-links__item wow fadeInUp" data-wow-delay="1.3s" data-wow-duration=".35s">
						<i class="fab fa-youtube"></i>
					</a>
					<a href="https://vimeo.com/okorokoko" class="brk-social-links__item wow fadeInUp" data-wow-delay="1.4s" data-wow-duration=".35s">
						<i class="fab fa-vimeo"></i>
					</a>
					
				</div>
				<p class="font__family-open-sans font__size-16 lh-18 letter-spacing-100 brk-dark-font-color">© All Rights Reserved</p>
			</div>
		</footer>
	</div>
	<a href="#top" id="toTop"></a>
	<script defer="defer" src="js/scripts.min.js"></script>
	<script defer="defer" src="vendor/revslider/js/jquery.themepunch.tools.min.js"></script>
	<script defer="defer" src="vendor/revslider/js/jquery.themepunch.revolution.min.js"></script>
	<script>
		var revapi31,
			tpj;
		(function() {
			if (!/loaded|interactive|complete/.test(document.readyState)) document.addEventListener("DOMContentLoaded", onLoad);
			else onLoad();

			function onLoad() {
				if (tpj === undefined) {
					tpj = jQuery;
					if ("off" == "on") tpj.noConflict();
				}
				if (tpj("#rev_slider_31_1").revolution == undefined) {
					revslider_showDoubleJqueryError("#rev_slider_31_1");
				} else {
					revapi31 = tpj("#rev_slider_31_1").show().revolution({
						sliderType: "standard",
						jsFileLocation: "vendor/revslider/js/",
						sliderLayout: "fullwidth",
						dottedOverlay: "none",
						delay: 6000,
						navigation: {
							onHoverStop: "off",
						},
						responsiveLevels: [1240, 1024, 778, 480],
						visibilityLevels: [1240, 1024, 778, 480],
						gridwidth: [1600, 1366, 768, 576],
						gridheight: [720, 720, 960, 720],
						lazyType: "none",
						minHeight: "720",
						shadow: 0,
						spinner: "spinner0",
						stopLoop: "off",
						stopAfterLoops: -1,
						stopAtSlide: -1,
						shuffle: "off",
						autoHeight: "off",
						hideThumbsOnMobile: "off",
						hideSliderAtLimit: 0,
						hideCaptionAtLimit: 0,
						hideAllCaptionAtLilmit: 0,
						debugMode: false,
						fallbacks: {
							simplifyAll: "off",
							nextSlideOnWindowFocus: "off",
							disableFocusListener: false,
						}
					});
				}; /* END OF revapi call */
			}; /* END OF ON LOAD FUNCTION */
		}()); /* END OF WRAPPING FUNCTION */
	</script>
</body>

</html>