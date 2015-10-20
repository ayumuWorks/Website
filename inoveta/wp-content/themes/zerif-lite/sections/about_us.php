<section class="about-us" id="aboutus">
	<div class="container">


		<!-- SECTION HEADER -->

		<div class="section-header">


			<!-- SECTION TITLE -->

			<?php 
			$zerif_aboutus_title = get_theme_mod('zerif_aboutus_title',__('En+OS ( エントス ) ','zerif-lite'));
			
			if( !empty($zerif_aboutus_title) ):
				echo '<h2 class="white-text" style="margin-bottom: 50px;">'.__($zerif_aboutus_title,'zerif-lite').'</h2>';
			endif;
			?>

			<!-- SHORT DESCRIPTION ABOUT THE SECTION -->

			<?php


				$zerif_aboutus_subtitle = get_theme_mod('zerif_aboutus_subtitle',__('Use this section to showcase important details about your business.','zerif-lite'));


				if( !empty($zerif_aboutus_subtitle) ):


					echo '<h6 class="white-text">';


						echo  '<h7>想い</h7>
								<p>学生と社会人の縁をつむぎ、エネルギーを plus(+) する OS でありたい</p>
 								<h7>Vison -目指す世界- イノベーションをもっと身近に</h7>
								<p>京都は、若くて優秀な人が多い学生の街であるにも関わらず、innovative なことが京都から生まれることは少ない。若者にとってイノベーションが身近に感じられる世界を目指す。</p>
								<h7>Mission -私たちが目指す姿-</h7>
								<p>京都という場所は幸い、世界のどこよりも大学が密集している。この地の利を生かし、En+OS は他大学生同士の活発な交流を促す。たとえば、クリエイティブなデザイナーやコーディングでプロダクトを実現するエンジニア、チームの意志をまとめるディレクター。彼ら異才を引き合わせることで、独創的なプロダクトが生まれる可能性は高まるはずだ。そう、次の革新的なプロダクト創出のためのプラットフォームをEn+OS は構築する。</p>';
					echo '</h6>';


				endif;


			?>
		</div><!-- / END SECTION HEADER -->


		<!-- 3 COLUMNS OF ABOUT US-->


		



		<!-- COLUMN 1 - SKILSS-->



	</div> <!-- / END 3 COLUMNS OF ABOUT US-->





	<!-- CLIENTS -->
	<?php
		if(is_active_sidebar( 'sidebar-aboutus' )):
			echo '<div class="our-clients">';
				echo '<h5><span class="section-footer-title">'.__('OUR HAPPY CLIENTS','zerif-lite').'</span></h5>';
			echo '</div>';

			echo '<div class="client-list">';
				echo '<div data-scrollreveal="enter right move 60px after 0.00s over 2.5s">';
				dynamic_sidebar( 'sidebar-aboutus' );
				echo '</div>';
			echo '</div> ';
		endif;
	?>


</div> <!-- / END CONTAINER -->


</section> <!-- END ABOUT US SECTION -->
