<?php
/****************************************

		taxonomy.php

		CHAPTER 24

		カスタム分類を表示するテンプレートファイルです。

*****************************************/

get_header(); ?>
<!-- taxonomy.php -->
<div class="grid_9 push_3" id="main">

	<?php if ( have_posts() ) : /** ループ開始 */

		while ( have_posts() ) : the_post(); ?>

			<article class="grid_3 box-link <?php echo add_class(); /** Green 独自関数 - テーマ用のクラスを付ける */ ?>">

				<div class="box-s-top"></div>
				<div class="box-s-middle equal-height">

					<hgroup>
						<h3><?php the_title(); /** タイトル */ ?></h3>

						<h4 class="subtitle">
							<?php if ( get_post_meta( $post -> ID,'sub-title' ) ) : /** カスタムフィールドを利用したサブタイトル */

									echo get_post_meta( $post -> ID,'sub-title', true );

							else: ?>

								Subtile

							<?php endif; ?>
						</h4>
					</hgroup>

					<?php if( has_post_thumbnail() ) : /** アイキャッチ画像 */ ?>

						<?php the_post_thumbnail(); ?>

					<?php else : ?>

						<img src="<?php echo get_template_directory_uri(); ?>/images/default.jpg" alt="" />

					<?php endif; ?>

					<div class="excerpt">
						<?php echo my_excerpt( 60 ); /** Green 独自関数 - 半角60文字抜粋を表示する */ ?>
					</div>

					<p class="rigft-align link">
						<a href="<?php the_permalink(); ?>">詳しく見る</a>
					</p>

				</div>
				<div class="box-s-bottom"></div>

			</article>

		<?php endwhile;

	else : ?>

		<div class="box-top"></div>
		<article class="box-middle post">

			<h3>Not Found</h3>
			<p>Sorry, but you are looking for something that isn't here.</p>

		</article>
		<div class="box-bottom"></div>

	<?php endif;

	if ( function_exists( 'wp_pagenavi' ) ) : /** ページャープラグイン wp_pagenavi用 */

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
<!-- / taxonomy.php -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>