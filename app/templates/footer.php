<footer class="content-info blue" role="contentinfo">
  <div class="container">
  	<h1>N'hésitez pas à prendre contact</h1>
  	<a class="btn" data-effeckt-type="fill-from-top" href="#"><span class="btn-label">Nous contacter</span></a>
  	<div class="contact-info">
  		<div>
  			<h2>Groupe neocom SAS</h2>
  			<p>56, boulevard Courcerin<br>77 183 Croissy-Beaubourg</p>
  		</div>
  		<div>
  			<ul>
          <li><a href="#"><?php get_template_part('assets/img/svg/inline', 'facebook.svg'); ?></a></li>
          <li><a href="#"><?php get_template_part('assets/img/svg/inline', 'twitter.svg'); ?></a></li>
          <li><a href="#"><?php get_template_part('assets/img/svg/inline', 'google+.svg'); ?></a></li>
          <li><a href="#"><?php get_template_part('assets/img/svg/inline', 'youtube.svg'); ?></a></li>
          <li><a href="#"><?php get_template_part('assets/img/svg/inline', 'instagram.svg'); ?></a></li>
  			</ul>	
  		</div>
  		<div>
  			<p>01 02 34 65 98<br><a href="mailto:contact@agence-neocom.com" target="_blank">contact@agence-neocom.com</a></p>
  		</div>
  	</div>
  	<div class="footer">
  		<div>
  			<p><a href="<?php echo esc_url(get_permalink(get_page_by_title('Mentions légales')));?>">Mentions légales</a> - Copyright <?php echo date('Y'); ?> - Groupe neocom SAS</p>
  		</div>
  		<div>
  			<p>Réalisé par <a href="http://egztudio.com/" target="_blank">éGz</a></p>
  		</div>
  	</div>
    <?php dynamic_sidebar('sidebar-footer'); ?>
  </div>
</footer>

<?php wp_footer(); ?>