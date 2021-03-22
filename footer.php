	</main>
<footer class="footer">
	<div class="container">
		<div class="footer__items">
			<div class="footer__item">
				<h2>S.A.L - MET</h2>
				<p>Precyzyjne cięcie i gięcie blach.
					<span>Zawsze na czas.</span>
				</p>

				<div class="footer-contact">
					<p>Zadzwoń: <a href="tel:+48739907919">+48 739 907 919</a></p>
					<p>E-mail: <a href="mailto:kontakt@sal-met.com">kontakt@sal-met.com</a></p>
				</div>

				<div class="footer__item-social">
					<a href="#" class="social-item">
						<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" version="1.1" x="0" y="0" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512" xml:space="preserve" class=""><g><path xmlns="http://www.w3.org/2000/svg" d="m344.9 140.6v-55.9s-57.2-.5-61.1-.5c-25.9 0-63 29.4-63 62.8v59.9h-53.6v63.5h52.8v157.6h62.5v-158.4h55.3l7-62.1h-61.6s0-38.1 0-45.6c0-10.9 8.2-21.7 20.6-21.7 8.3.1 41.1.4 41.1.4z" fill="#ffffff" data-original="#000000" style="" class=""/></g></svg>
            / sal-met
          </a>

          <a href="#" class="social-item">
						<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" version="1.1" x="0" y="0" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512" xml:space="preserve" class=""><g><g xmlns="http://www.w3.org/2000/svg"><path d="m321.7 84.1h-131.4c-58.6 0-106.2 47.6-106.2 106.2v131.4c0 58.6 47.6 106.2 106.2 106.2h131.4c58.6 0 106.2-47.6 106.2-106.2v-131.4c0-58.5-47.7-106.2-106.2-106.2zm67.9 237.6c0 37.4-30.5 67.9-67.9 67.9h-131.4c-37.4 0-67.9-30.5-67.9-67.9v-131.4c0-37.4 30.5-67.9 67.9-67.9h131.4c37.4 0 67.9 30.5 67.9 67.9z" fill="#ffffff" data-original="#000000" style="" class=""/><path d="m256 168.1c-48.4 0-87.9 39.4-87.9 87.9s39.4 87.9 87.9 87.9 87.9-39.4 87.9-87.9-39.5-87.9-87.9-87.9zm0 141.3c-29.4 0-53.4-23.9-53.4-53.4 0-29.4 23.9-53.4 53.4-53.4 29.4 0 53.4 23.9 53.4 53.4 0 29.4-24 53.4-53.4 53.4z" fill="#ffffff" data-original="#000000" style="" class=""/><ellipse cx="348.3" cy="163" rx="14.9" ry="14.9" transform="matrix(.987 -.16 .16 .987 -21.617 57.896)" fill="#ffffff" data-original="#000000" style="" class=""/></g></g></svg>
            / sal-met
          </a>
        </div>
			</div>
			<div class="footer__item">
				<ul>
					<li><a href="<?php echo site_url(); ?>/o-nas">O nas</a></li>
					<li><a href="<?php echo site_url(); ?>/uslugi">Usługi</a></li>
					<li><a href="<?php echo site_url(); ?>/realizacje">Realizacje</a></li>
					<li><a href="<?php echo site_url(); ?>/blog">Blog</a></li>
					<li><a href="<?php echo site_url(); ?>/kontakt">Kontakt</a></li>
				</ul>
			</div>
			<div class="footer__item">
				<ul>
					<li><a href="<?php echo site_url(); ?>/oferta/ciecie-laserem-blach/">Cięcie laserem blach</a></li>
					<li><a href="<?php echo site_url(); ?>/oferta/ciecie-laserem-rur-i-profili/">Cięcie laserem rur i profili</a></li>
					<li><a href="<?php echo site_url(); ?>/oferta/giecie-blach/">Gięcie blach</a></li>
					<li><a href="<?php echo site_url(); ?>/oferta/giecie-rur-i-profili/">Gięcie rur i profili</a></li>
					<li><a href="<?php echo site_url(); ?>/oferta/spawanie-konstrukcji/">Spawanie konstrukcji</a></li>
					<li><a href="<?php echo site_url(); ?>/oferta/tloczenie/">Tłoczenie</a></li>
				</ul>
			</div>
			<div class="footer__item">
				<ul>
					<li><a href="<?php echo site_url(); ?>/oferta/przetlaczanie">Przetłaczanie</a></li>
					<li><a href="<?php echo site_url(); ?>/oferta/tabliczki-znamionowe">Tabliczki znamionowe</a></li>
					<li><a href="<?php echo site_url(); ?>/oferta/tloczenie-i-frezowanie/">Toczenie i frezowanie</a></li>
					<li><a href="<?php echo site_url(); ?>/oferta/zgrzewanie-kolkow">Zgrzewanie kołków</a></li>
					<li><a href="<?php echo site_url(); ?>/oferta/zaslonki-samochodowe">Zasłonki samochodowe</a></li>
					<li><a href="<?php echo site_url(); ?>/oferta/gietarki-drutu">Giętarki drutu</a></li>
				</ul>
			</div>
		</div>
		<div class="footer__copy">
			<p>&copy; 2021 SAL-MET</p>
			<p>
				<a href="https://marcinzogrodnik.pl"><span>Realizacja:</span> Marcin Zogrodnik - Strony internetowe</a>
			</p>
		</div>
	</div>
</footer>

<?php wp_footer(); ?>
<script>
	if ($(".contact-page").length > 0 || $(".start-page").length > 0) {
		mapboxgl.accessToken = 'pk.eyJ1IjoibWFyY2luem9ncm9kbmlrIiwiYSI6ImNra3o5dnpoaTVrbjcyb3F0bW54MDF5ajMifQ.s6GVsjaAwAC35nTGsHRK_A';
		var map = new mapboxgl.Map({
			container: 'map',
			style: 'mapbox://styles/mapbox/streets-v11',
			center: [18.539738356169035, 50.564012651910524],
			zoom: 11
		});
		var marker = new mapboxgl.Marker().setLngLat([18.539738356169035, 50.564012651910524]).addTo(map);
}

</script>
</body>
</html>