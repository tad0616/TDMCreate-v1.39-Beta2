<?php
/*
 You may not change or alter any portion of this comment or credits
 of supporting developers from this source code or any supporting source code
 which is considered copyrighted (c) material of the original comment or credit authors.

 This program is distributed 於 hope that it will be useful,
 but WITHOUT ANY WARRANTY; without even the implied warranty of
 MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
 */
/**
 * tdmcreate 模組
 *
 * @copyright       The XOOPS Project http://sourceforge.net/projects/xoops/
 * @license         GNU GPL 2 (http://www.gnu.org/licenses/old-licenses/gpl-2.0.html)
 * @package         tdmcreate
 * @since           2.5.0
 * @author          Txmod Xoops http://www.txmodxoops.org
 * @version         $Id: admin.php 11084 2013-02-23 15:44:20Z timgno $
 */
//Menu
define('_AM_TDMCREATE_ADMIN_INDEX', "主頁");
define('_AM_TDMCREATE_ADMIN_MODULES', "新增模組");
define('_AM_TDMCREATE_ADMIN_TABLES', "新增資料表");
define('_AM_TDMCREATE_ADMIN_CONST', "建立模組");
define('_AM_TDMCREATE_ADMIN_ABOUT', "關於");
define('_AM_TDMCREATE_ADMIN_PREFERENCES', "偏好設定");
define('_AM_TDMCREATE_ADMIN_UPDATE', "更新");
define('_AM_TDMCREATE_ADMIN_NUMMODULES', "統計");
define('_AM_TDMCREATE_THEREARE_NUMMODULES', "資料庫中有 <span class='red bold'>%s</span> 個模組");
define('_AM_TDMCREATE_THEREARE_NUMTABLES', "資料庫中有 <span class='red bold'>%s</span> 個資料表");

define('_AM_TDMCREATE_TABLES_FIELDS_MORE_ELEMENTS', "表單：元件");
define('_AM_TDMCREATE_TABLES_FIELDS_MORE_PARENT_ID', "父：分類編號");
define('_AM_TDMCREATE_TABLES_FIELDS_MORE_DISPLAY_ADMIN', "頁面：顯示管理");
define('_AM_TDMCREATE_TABLES_FIELDS_MORE_DISPLAY_USER', "頁面：觀看使用者");
define('_AM_TDMCREATE_TABLES_FIELDS_MORE_BLOC', "區塊：觀看");
define('_AM_TDMCREATE_TABLES_FIELDS_MORE_MAIN_FIELD', "資料表：主欄位");
define('_AM_TDMCREATE_TABLES_FIELDS_MORE_SEARCH', "搜尋：索引");
define('_AM_TDMCREATE_TABLES_FIELDS_MORE_REQUIRED', "表單：必填欄位");

//General
define('_AM_TDMCREATE_FORMOK', "成功儲存");
define('_AM_TDMCREATE_FORMDELOK', "成功刪除");
define('_AM_TDMCREATE_FORMSUREDEL', "確定要刪除：<b><span style='color : Red'>%s </span></b>");
define('_AM_TDMCREATE_FORMSURERENEW', "確定要更新：<b><span style='color : Red'>%s </span></b>");
define('_AM_TDMCREATE_FORMUPLOAD', "上傳檔案");
define('_AM_TDMCREATE_FORMIMAGE_PATH', "%s 中的檔案");
define('_AM_TDMCREATE_FORMACTION', "動作");
define('_AM_TDMCREATE_FORMEDIT', "修改");
define('_AM_TDMCREATE_FORMDEL', "清除");
define('_AM_TDMCREATE_FORMFIELDS', "編輯欄位");
define('_AM_TDMCREATE_FORM_INFO_TABLE_OPTIONAL_FIELD', "選項欄位");
define('_AM_TDMCREATE_FORM_INFO_TABLE_STRUCTURES_FIELD', "結構欄位");
define('_AM_TDMCREATE_FORM_INFO_TABLE_ICON_FIELD', "圖示欄位");

define('_AM_TDMCREATE_ID', "編號");
define('_AM_TDMCREATE_NAME', "名稱");
define('_AM_TDMCREATE_BLOCKS', "區塊");
define('_AM_TDMCREATE_NB_FIELDS', "欄位數");
define('_AM_TDMCREATE_IMAGE', "圖片");
define('_AM_TDMCREATE_DISPLAY_ADMIN', "可見於後台界面");
// 1.37
define('_AM_TDMCREATE_DISPLAY_USER', "可見於前台界面");

//Modules.php
//Form
define('_AM_TDMCREATE_MODULES_ADD', "新增一個新模組");
define('_AM_TDMCREATE_MODULES_EDIT', "建立一個模組");
define('_AM_TDMCREATE_MODULES_IMPORTANT', "必填資訊");
define('_AM_TDMCREATE_MODULES_NOTIMPORTANT', "選填資訊");
define('_AM_TDMCREATE_MODULES_NAME', "名稱");
define('_AM_TDMCREATE_MODULES_VERSION', "版本");
define('_AM_TDMCREATE_MODULES_SINCE', "緣由");
define('_AM_TDMCREATE_MODULES_DESCRIPTION', "說明");
define('_AM_TDMCREATE_MODULES_AUTHOR', "作者");
define('_AM_TDMCREATE_MODULES_AUTHOR_MAIL', "作者的 Email");
define('_AM_TDMCREATE_MODULES_AUTHOR_WEBSITE_網址', "作者的網站");
define('_AM_TDMCREATE_MODULES_AUTHOR_WEBSITE_NAME', "網站的名稱");

define('_AM_TDMCREATE_MODULES_CREDITS', "誌謝");
define('_AM_TDMCREATE_MODULES_LICENSE', "授權方式");
define('_AM_TDMCREATE_MODULES_RELEASE_INFO', "釋出資訊");
define('_AM_TDMCREATE_MODULES_RELEASE_FILE', "釋出檔案");
define('_AM_TDMCREATE_MODULES_MANUAL', "手冊");
define('_AM_TDMCREATE_MODULES_MANUAL_FILE', "手冊檔案");
define('_AM_TDMCREATE_MODULES_IMAGE', "模組 Logo 圖示");
define('_AM_TDMCREATE_MODULES_DEMO_SITE_網址', " 範例網站網址");
define('_AM_TDMCREATE_MODULES_DEMO_SITE_NAME', "範例網站名稱");

define('_AM_TDMCREATE_MODULES_FORUM_SITE_網址', "論壇網址");
define('_AM_TDMCREATE_MODULES_FORUM_SITE_NAME', "論壇網址標題");
define('_AM_TDMCREATE_MODULES_WEBSITE_網址', "模組網站");
define('_AM_TDMCREATE_MODULES_WEBSITE_NAME', "模組網站標題");
define('_AM_TDMCREATE_MODULES_RELEASE', "釋出");
define('_AM_TDMCREATE_MODULES_STATUS', "Status");
define('_AM_TDMCREATE_MODULES_DISPLAY_ADMIN', "可見於後台界面");
define('_AM_TDMCREATE_MODULES_DISPLAY_USER', "可見於前台界面");

define('_AM_TDMCREATE_MODULES_ACTIVE_SEARCH', "啟用搜尋");
define('_AM_TDMCREATE_MODULES_ACTIVE_COMMENTS', "啟用評論");
define('_AM_TDMCREATE_MODULES_ACTIVE_NOTIFICATIONS', "啟用通知");
define('_AM_TDMCREATE_MODULES_ACTIVE_PERMISSIONS', "啟用權限");
define('_AM_TDMCREATE_MODULES_INROOT_INSTALL', "直接在 /modules 安裝模組？");
define('_AM_TDMCREATE_MODULES_PAYPAL_BUTTON', "PayPal 按鈕");

define('_AM_TDMCREATE_MODULES_SUBVERSION', "Subversion");
//Tables.php
//Form1
define('_AM_TDMCREATE_TABLES_ADD', "新增資料表");
define('_AM_TDMCREATE_TABLES_EDIT', "編輯模組資料表");
define('_AM_TDMCREATE_TABLES_MODULES', "選擇一個模組");

define('_AM_TDMCREATE_TABLES_NAME', "資料表名稱<br /><i>（會自動將模組名稱作為前置字串）
</i><br />例如：&#39;mod_模組名稱_資料表&#39;");
define('_AM_TDMCREATE_TABLES_FIELDNAME', "欄位前置字串 <br> <i>（前置字串會在下一步自動新增）</i><br />例如：&#39;欄位名稱&#39;<br />注意：勿在欄位名稱前使用底線 - 這會由 TDMCreate 產生");
define('_AM_TDMCREATE_TABLES_NUMBER_FIELDS', "資料表的欄位數");
define('_AM_TDMCREATE_TABLES_IMAGE', "資料表圖示");
define('_AM_TDMCREATE_TABLES_CATEGORY', "此資料表是一個分類？");

define('_AM_TDMCREATE_TABLES_CATEGORY_DESC', "<i>一旦您使用此欄位，<br />在建立其他資料表時將不會再顯示</i>");
define('_AM_TDMCREATE_TABLES_BLOCKS', "建立此資料表的區塊");
define('_AM_TDMCREATE_TABLES_ADMIN', "可見於後台界面");
define('_AM_TDMCREATE_TABLES_USER', "可見於前台界面");
define('_AM_TDMCREATE_TABLES_SUBMITTER', "新增發布者");
define('_AM_TDMCREATE_TABLES_CREATED', "新增建立者");
define('_AM_TDMCREATE_TABLES_ONLINE', "線上新增");
define('_AM_TDMCREATE_TABLES_SEARCH', "啟用資料表的搜尋功能 <br> <i>此時此刻的表單可以用來控制資料表的搜尋 <br> 如果確認搜索選項將被禁用</i>");
define('_AM_TDMCREATE_TABLES_EXIST', "此資料表名稱已被使用");
define('_AM_TDMCREATE_TABLES_COMMENTS', "啟用此資料表的評論 <br> <i>此模組可以管理此一資料表中的所屬評論 <br> 如果確認評論選項將被禁用</i>");
define('_AM_TDMCREATE_TABLES_NOTIFICATIONS', "對此資料表啟用通知。");
define('_AM_TDMCREATE_TABLES_PERMISSIONS', "對此資料表啟用權限<br /> <i><span class='red big'>注意</span>：僅針對此資料表</i>");
define('_AM_TDMCREATE_TABLES_CATEGORY_ADD', "新增資料表到分類");
//Form2
define('_AM_TDMCREATE_TABLES_FIELDS_ADD', "新增欄位");
define('_AM_TDMCREATE_TABLES_FIELDS_EDIT', "編輯您的欄位");
define('_AM_TDMCREATE_TABLES_FIELDS_NAME', "欄位名稱");
define('_AM_TDMCREATE_TABLES_FIELDS_TYPE', "類型");
define('_AM_TDMCREATE_TABLES_FIELDS_VALUE', "值");
define('_AM_TDMCREATE_TABLES_FIELDS_ATTRIBUTES', "屬性");
define('_AM_TDMCREATE_TABLES_FIELDS_NULL', "Null");
define('_AM_TDMCREATE_TABLES_FIELDS_DEFAULT', "預設");
define('_AM_TDMCREATE_TABLES_FIELDS_INDEX', "索引");
define('_AM_TDMCREATE_TABLES_FIELDS_MORE', "其他");
define('_AM_TDMCREATE_ADMIN_SUBMIT', "送出");
//Const.php
define('_AM_TDMCREATE_CONST_MODULES', "選擇您要建立的模組");
define('_AM_TDMCREATE_CONST_TABLES', "選擇您要建立的資料表");
//Creation
//OK
define('_AM_TDMCREATE_CONST_OK_ARCHITECTURE', "<span class='green'>模組架構已建立（index.html, modules, ...）</span>");
define('_AM_TDMCREATE_CONST_OK_COMMENTS', "此檔案 <b>%s</b> 已被建立於 <span class='green bold'>directory</span> of 模組");
define('_AM_TDMCREATE_CONST_OK_DOCS', "此檔案 <b>%s</b> 已被建立於 <span class='green bold'>docs</span> 目錄");
define('_AM_TDMCREATE_CONST_OK_CSS', "此檔案 <b>%s</b> 已被建立於 <span class='green bold'>css</span> 目錄");
define('_AM_TDMCREATE_CONST_OK_ROOTS', "此檔案 <b>%s</b> 已被建立於 <span class='green bold'>directory</span> of the 模組");
define('_AM_TDMCREATE_CONST_OK_CLASSES', "此檔案 <b>%s</b> 已被建立於 <span class='green bold'>class</span> 目錄");
define('_AM_TDMCREATE_CONST_OK_BLOCKS', "此檔案 <b>%s</b> 已被建立於 <span class='green bold'>blocks</span> 目錄");
define('_AM_TDMCREATE_CONST_OK_SQL', "此檔案 <b>%s</b> 已被建立於 <span class='green bold'>sql</span> 目錄");
define('_AM_TDMCREATE_CONST_OK_ADMINS', "此檔案 <b>%s</b> 已被建立於 <span class='green bold'>admin</span> 目錄");
define('_AM_TDMCREATE_CONST_OK_LANGUAGES', "此檔案 <b>%s</b> 已被建立於 <span class='green bold'>language</span> 目錄");
define('_AM_TDMCREATE_CONST_OK_INCLUDES', "此檔案 <b>%s</b> 已被建立於 <span class='green bold'>include</span> 目錄");
define('_AM_TDMCREATE_CONST_OK_TEMPLATES', "此檔案 <b>%s</b> 已被建立於 <span class='green bold'>templates</span> 目錄");
define('_AM_TDMCREATE_CONST_OK_TEMPLATES_BLOCKS', "此檔案 <b>%s</b> 已被建立於 <span class='green bold'>templates/blocks</span> 目錄");
define('_AM_TDMCREATE_CONST_OK_TEMPLATES_ADMIN', "此檔案 <b>%s</b> 已被建立於 <span class='green bold'>templates/admin</span> 目錄");

//NOTOK
define('_AM_TDMCREATE_CONST_NOTOK_ARCHITECTURE', "<span class='red'>問題：建立此模組架構（index.html, icons ,...）</span>");
define('_AM_TDMCREATE_CONST_NOTOK_COMMENTS', "問題：建立檔案 <b class='red'>%s</b> 於 <span class='red bold'>模組目錄</span>");
define('_AM_TDMCREATE_CONST_NOTOK_DOCS', "問題：建立檔案 <b class='red'>%s</b> 於 <span class='red bold'>docs</span> 目錄");
define('_AM_TDMCREATE_CONST_NOTOK_CSS', "問題：建立檔案 <b class='red'>%s</b> 於 <span class='red bold'>css</span> 目錄");
define('_AM_TDMCREATE_CONST_NOTOK_ROOTS', "問題：建立檔案 <b class='red'>%s</b> 於 <span class='red bold'>directory</span> of the 模組");
define('_AM_TDMCREATE_CONST_NOTOK_CLASSES', "問題：建立檔案 <b class='red'>%s</b> 於 <span class='red bold'>class</span> 目錄");
define('_AM_TDMCREATE_CONST_NOTOK_BLOCKS', "問題：建立檔案 <b class='red'>%s</b> in <span class='red bold'>blocks</span> 目錄");
define('_AM_TDMCREATE_CONST_NOTOK_SQL', "問題：建立檔案 <b class='red'>%s</b> 於 <span class='red bold'>sql</span> 目錄");
define('_AM_TDMCREATE_CONST_NOTOK_ADMINS', "問題：建立檔案 <b class='red'>%s</b> 於 <span class='red bold'>admin</span> 目錄");
define('_AM_TDMCREATE_CONST_NOTOK_LANGUAGES', "問題：建立檔案 <b class='red'>%s</b> 於 <span class='red bold'>language</span> 目錄");
define('_AM_TDMCREATE_CONST_NOTOK_INCLUDES', "問題：建立檔案 <b class='red'>%s</b> 於 <span class='red bold'>include</span> 目錄");
define('_AM_TDMCREATE_CONST_NOTOK_TEMPLATES', "問題：建立檔案 <b class='red'>%s</b> 於 <span class='red bold'>templates</span> 目錄");
define('_AM_TDMCREATE_CONST_NOTOK_TEMPLATES_BLOCKS', "問題：建立檔案 <b class='red'>%s</b> 於 <span class='red bold'>templates/blocks</span> 目錄");
define('_AM_TDMCREATE_CONST_NOTOK_TEMPLATES_ADMIN', "問題：建立檔案 <b class='red'>%s</b> 於 <span class='red bold'>templates/admin</span> 目錄");

//------------ new additions: Ver. 1.11 -----------------------

define('_AM_TDMCREATE_ADMIN_PERMISSIONS', "權限");
define('_AM_TDMCREATE_FORMON', "上線");
define('_AM_TDMCREATE_FORMOFF', "離線");

define('_AM_TDMCREATE_TRANSLATION_PERMISSIONS_ACCESS', "允許讀取");
define('_AM_TDMCREATE_TRANSLATION_PERMISSIONS_SUBMIT', "允許發布");

//blocks
define('_AM_TDMCREATE_BLOCK_DAY', "今天");
define('_AM_TDMCREATE_BLOCK_RANDOM', "隨機");
define('_AM_TDMCREATE_BLOCK_RECENT', "最新");

define('_AM_TDMCREATE_THEREARE_DATABASE1', "有 <span style='color: #ff0000; font-weight: bold'> %s </span>");
define('_AM_TDMCREATE_THEREARE_DATABASE2', "在資料庫中");
define('_AM_TDMCREATE_THEREARE_PENDING', "有 <span style='color: #ff0000; font-weight: bold'> %s </span>");
define('_AM_TDMCREATE_THEREARE_PENDING2', "等待中");

define('_AM_TDMCREATE_FORMADD', "新增");

define('_AM_TDMCREATE_MIMETYPES', "Mime types：");
define('_AM_TDMCREATE_MIMESIZE', "允許的大小：");
define('_AM_TDMCREATE_EDITOR', "編輯器：");

//------------ new additions: Ver. 1.15 -----------------------

define('_AM_TDMCREATE_ABOUT_WEBSITE_FORUM', "論壇網站");

//------------ new additions: Ver. 1.37 -----------------------
define('_AM_TDMCREATE_MODULES_LIST', "模組列表");
define('_AM_TDMCREATE_MODULES_NEW', "新模組");
define('_AM_TDMCREATE_TABLES_LIST', "資料表列表");
define('_AM_TDMCREATE_TABLES_NEW', "新資料表");
define('_AM_TDMCREATE_TABLES_NEW_CATEGORY', "新分類");

//1.38
define('_AM_TDMCREATE_TABLES_STATUS', "顯示資料表狀態");
define('_AM_TDMCREATE_TABLES_WAITING', "顯示資料表等待中");

//1.39
define('_AM_TDMCREATE_MODULES_MIN_PHP', "PHP 最低版本");
define('_AM_TDMCREATE_MODULES_MIN_XOOPS', "XOOPS 最低版本");

define('_AM_TDMCREATE_MODULES_MIN_ADMIN', "後台界面最低版本");
define('_AM_TDMCREATE_MODULES_MIN_MYSQL', "資料庫最低版本");
define('_AM_TDMCREATE_BUILDING_FILES', "已編譯的檔案");
define('_AM_TDMCREATE_BUILDING_SUCCESS', "建立成功");
define('_AM_TDMCREATE_BUILDING_FAILED', "建立失敗");
define('_AM_TDMCREATE_CONST_OK_ARCHITECTURE_ROOT', "此模組架構已建立於 modules 目錄下（index.html, 目錄s, ...）");

define('_AM_TDMCREATE_CONST_NOTOK_ARCHITECTURE_ROOT', "問題：在modules目錄中建立此模組架構 （index.html, icons ,...等）");
