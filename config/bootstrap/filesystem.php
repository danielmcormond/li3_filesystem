<?php
/**
 * Lithium Filesystem: managing file uploads the easy way
 *
 * @copyright     Copyright 2012, Little Boy Genius (http://www.littleboygenius.org)
 * @license       http://opensource.org/licenses/bsd-license.php The BSD License
 */

use li3_filesystem\storage\FileSystem;

FileSystem::config(array(
	'default' => array(
		'adapter' => 'S3',
		'key' => 'AKIAJVZ2X5TECEGEEICA',
		'secret' => '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',
		'bucket' => 'danielmcormond'
	)
));

?>