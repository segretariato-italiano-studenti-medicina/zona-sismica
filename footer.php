		</div> <!-- end #container2 -->
	</div> <!-- end #container -->		
	
	<div id="footer">
		<div id="footer-wrapper">
			<div id="footer-content">
				<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Footer') ) : ?> 
				<?php endif; ?>
			</div> <!-- end #footer-content -->
			<p id="copyright">ZonaSismica <a href="http://sism.org">&copy SISM - 2012</a>, based on <a href="http://www.elegantthemes.com/demo/?theme=TheStyle">The Style</a> <?php esc_html_e('from','TheStyle'); ?> <a href="http://www.elegantthemes.com" title="Elegant Themes">Elegant Themes</a> | <?php esc_html_e('Powered by ','TheStyle'); ?> <a href="http://www.wordpress.org">Wordpress</a><br>
			redazione: <a href="mailto:redazioneZS@sism.org">redazioneZS@sism.org</a>
		</div> <!-- end #footer-wrapper -->
	</div> <!-- end #footer -->		
				
	<?php get_template_part('includes/scripts'); ?>

	<?php wp_footer(); ?>	
</body>
</html>