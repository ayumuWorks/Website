<?php
/****************************************

	archive-information.php

	CHAPTER 23

	カスタム投稿「information」を表示する archive.php

*****************************************/

get_header(); ?>
<!-- archive-information.php -->
<div class="grid_9 push_3" id="main">
	<div class="box-top"></div>
	<div class="box-middle">

	<?php if ( have_posts() ) : /** ループ開始 */

		while ( have_posts() ) : the_post(); ?>

			<article class="post">

				<h3><?php the_title(); /** 投稿タイトル */ ?></h3>

				<time datetime="<?php echo get_the_date( 'Y-m-j' ) ?>"><?php echo get_the_date(); /** 投稿の日付 */ ?></time>

				<?php the_content(); /** 投稿のコンテンツ */ ?>

			</article>

		<?php endwhile;

	else : ?>

		<article class="post">

			<h3>Not Found</h3>

			<p>Sorry, but you are looking for something that isn't here.</p>

		</article>

<?php endif; /** ループ終了 */ ?>

	</div>
	<div class="box-bottom"></div>

	<?php if ( function_exists( 'wp_pagenavi' ) ): /** ページャープラグイン wp_pagenavi用 */

		wp_pagenavi();

	else :

		if ( $wp_query->max_num_pages > 1 ) : /** 複数ページ用のナビゲーション */ ?>

			<nav class="navigation">
				<div class="alignleft"><?php next_posts_link( '&laquo; PREV' ); ?></div>
				<div class="alignright"><?php previous_posts_link( 'NEXT &raquo;' ); ?></div>
			</nav>

		<?php endif;
	endif; ?>

</div><!-- / main -->
<!-- / archive-information.php -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>