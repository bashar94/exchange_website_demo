/**
 * @license Copyright (c) 2003-2017, CKSource - Frederico Knabben. All rights reserved.
 * For licensing, see LICENSE.md or http://ckeditor.com/license
 */

CKEDITOR.editorConfig = function( config ) {
	// Define changes to default configuration here. For example:
	// config.language = 'fr';
	// config.uiColor = '#AADC6E';

  config.filebrowserBrowseUrl = 'config/kcfinder/browse.php?opener=ckeditor&type=files';
  config.filebrowserImageBrowseUrl = 'config/kcfinder/browse.php?opener=ckeditor&type=images';
  config.filebrowserFlashBrowseUrl = 'config/kcfinder/browse.php?opener=ckeditor&type=flash';
  config.filebrowserUploadUrl = 'config/kcfinder/upload.php?opener=ckeditor&type=files';
  config.filebrowserImageUploadUrl = 'config/kcfinder/upload.php?opener=ckeditor&type=images';
  config.filebrowserFlashUploadUrl = 'config/kcfinder/upload.php?opener=ckeditor&type=flash';
  
};