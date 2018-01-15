<script type="text/javascript">
	
		alert("Hello World!");

</script>


<?php
	if( have_posts() ) : 	
		while( have_posts() 	): the_post();
			the_title();
	?>		
<div>
	<h3><a href=""><?php the_title(); ?></a></h3>	
	<p>
		<small>
			by: <a href="<?php echo get_the_author_posts_url(get_the_author_meta('ID'));?>"><?php the_author();?></a> |
			<?php the_time('F j, Y g:i a'); ?> |  posted in
					<?php
						$categories = get_the_category();
						$separator = ',';
						$output = '';

						foreach($categories as $category){
							$output .= '<a href="'.get_category_link($category->term_id).'">'.$category->cat_name.'</a>'.$separator;
						}

							echo trim($output, $separator);
						#echo $output;

							?>	

		</small>
	</p>

		<p>
			<small>
				<?php the_content(); ?> 
			</small>
		</p>

</div>
<?php	
		endwhile;
	
			
	else:


	endif;
?>