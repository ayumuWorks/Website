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
define('DB_NAME', 'inoveta');

/** MySQL データベースのユーザー名 */
define('DB_USER', 'root');

/** MySQL データベースのパスワード */
define('DB_PASSWORD', '0A5y1m6u');

/** MySQL のホスト名 */
define('DB_HOST', 'localhost');

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
define('AUTH_KEY',         '^n:`Vagt/b9<6kkOrccbK{$9t6R78As2s2Yzqvt5c+4/&_B-N6Uw9mI$i4+-|`g?');
define('SECURE_AUTH_KEY',  'QnHik3T!qqf6Lj3v?dhhdbxu{,Y7ikU]y<n:xaTM_P|FiHYP2+}ER[f1)yFh)+M ');
define('LOGGED_IN_KEY',    'grvHEnL{+z>w/4[-EC7cikhd#W(sJ&^8wKcN!w0k+cCY)+U0/IA?,J[y]%^R%!+y');
define('NONCE_KEY',        '>S4V#|t(6@&ah3m+q{gTh]l+?*>0X`Ka@A.YW<nsR-N,V7p]$}x0Q=(NWD/FMm3_');
define('AUTH_SALT',        '*K#Y:b+m_jRvIjR.-y+*VF:G|hxGI~^A2}|7]DGmBPJhs&^+G@[OSbG_7HG^;!?x');
define('SECURE_AUTH_SALT', 'zb+}!W3*^(Tuzu<&jze+]e/6}G6{p?Z2)Yi&~9R+x9$D]RkOL@2JfeeUXcyETRlZ');
define('LOGGED_IN_SALT',   'g>sw{r}cq9;W)6)|6?JjC~+`+2=~gM8F(4|G<K97OzO3uc=4T[iu{SeVOMg)]By4');
define('NONCE_SALT',       '(rJUW9iR5gb4CR*nSMKlYH?b_0|[+!4L/%<#-b|vM2NCKt0E`?q, |Z2!fdlP9Zw');

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
