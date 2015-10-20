<?php
/**
 * WordPress の基本設定
 *
 * このファイルは、MySQL、テーブル接頭辞、秘密鍵、ABSPATH の設定を含みます。
 * より詳しい情報は {@link http://wpdocs.sourceforge.jp/wp-config.php_%E3%81%AE%E7%B7%A8%E9%9B%86 
 * wp-config.php の編集} を参照してください。MySQL の設定情報はホスティング先より入手できます。
 *
 * このファイルはインストール時に wp-config.php 作成ウィザードが利用します。
 * ウィザードを介さず、このファイルを "wp-config.php" という名前でコピーして直接編集し値を
 * 入力してもかまいません。
 *
 * @package WordPress
 */

// 注意: 
// Windows の "メモ帳" でこのファイルを編集しないでください !
// 問題なく使えるテキストエディタ
// (http://wpdocs.sourceforge.jp/Codex:%E8%AB%87%E8%A9%B1%E5%AE%A4 参照)
// を使用し、必ず UTF-8 の BOM なし (UTF-8N) で保存してください。

// ** MySQL 設定 - この情報はホスティング先から入手してください。 ** //
/** WordPress のためのデータベース名 */
define('DB_NAME', 'LAA0604077-ludolph');

/** MySQL データベースのユーザー名 */
define('DB_USER', 'LAA0604077');

/** MySQL データベースのパスワード */
define('DB_PASSWORD', 'rits1234');

/** MySQL のホスト名 */
define('DB_HOST', 'mysql022.phy.lolipop.lan');

/** データベースのテーブルを作成する際のデータベースの文字セット */
define('DB_CHARSET', 'utf8');

/** データベースの照合順序 (ほとんどの場合変更する必要はありません) */
define('DB_COLLATE', '');

/**#@+
 * 認証用ユニークキー
 *
 * それぞれを異なるユニーク (一意) な文字列に変更してください。
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org の秘密鍵サービス} で自動生成することもできます。
 * 後でいつでも変更して、既存のすべての cookie を無効にできます。これにより、すべてのユーザーを強制的に再ログインさせることになります。
 *
 * @since 2.6.0
 */
define('AUTH_KEY','213B+mTe2la,ym|-n sLeAWo+lRVV|p~q7~J1(KfDBY=nJf-$2@$!;$Fa+JL)e%k');
define('SECURE_AUTH_KEY','2mp1)+o5H6)*1}}9Og`WQB<S?ils)C*S0}#]kFI9w0l-M?XX+pNp#s%b~tGHbIQt');
define('LOGGED_IN_KEY','rI9gv=dDv -+vx8)71ecaX+|sTvjj[5r`1oR/.<$:UGg#+rrmSZc-1PDD}f+VUrh');
define('NONCE_KEY','J|gG~.jo^fL5aY/W5.K,n_6E-+6#kS(:8$;l6e~vO7Of<0)y6ac|>*-RFle1TK n');
define('AUTH_SALT','w*]TI|UG0[Vffu-/&0LySd00r|B|p!<59|9`2l(VpdSwUuwyCE-r6aDnE/pCze+W');
define('SECURE_AUTH_SALT','h+(},>ed=72*|-X9r:0zCY/v:fd+A,:oe+-[i~)_gd*C_ZiQ]Mh9H`LeAdRnH:+8');
define('LOGGED_IN_SALT','lV{:h>~|Bn+RBs?AKX_sPGoJC<7I3T39eMe:w>Y;I-@AK7*1=^//_ON$Sw3G1r`!');
define('NONCE_SALT','70u;T?0vcK=<t-|rr,R$QVSkn;r}M=hDkT;aGlP*AN+}hLy-%N+2N1[`]#xQUs#u');

/**#@-*/

/**
 * WordPress データベーステーブルの接頭辞
 *
 * それぞれにユニーク (一意) な接頭辞を与えることで一つのデータベースに複数の WordPress を
 * インストールすることができます。半角英数字と下線のみを使用してください。
 */
$table_prefix  = 'wp_';

/**
 * 開発者へ: WordPress デバッグモード
 *
 * この値を true にすると、開発中に注意 (notice) を表示します。
 * テーマおよびプラグインの開発者には、その開発環境においてこの WP_DEBUG を使用することを強く推奨します。
 */
define('WP_DEBUG', false);

/* 編集が必要なのはここまでです ! WordPress でブログをお楽しみください。 */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');




define('FS_METHOD', 'direct');
