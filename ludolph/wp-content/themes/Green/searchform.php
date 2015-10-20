<?php
/****************************************

	searchform.php

	検索フォームを表示するテンプレートファイル

*****************************************/
?>

<form method="get" id="searchform" action="<?php echo home_url( '/' ); ?>">
	<input type="text" value="<?php the_search_query(); ?>" name="s" id="s" />
	<input type="submit" id="searchsubmit" value="" />
</form>