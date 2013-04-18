<?php
/*************************************
Project: Phone Formatting
Original Dev: Angel Magaña, June 2008
@2008-2010 Angel Magaña
cheleguanaco[at]cheleguanaco.com

Desc: Manifest file for SugarCRM module installer
 
The contents of this file are governed by the GNU General Public License (GPL).
A copy of said license is available here: http://www.gnu.org/copyleft/gpl.html
This code is provided AS IS and WITHOUT WARRANTY OF ANY KIND.
*************************************/

global $sugar_config;

$upload_dir = $sugar_config['uploads_dir'];
$manifest = array(
	'acceptable_sugar_versions' => array(
		'regex_matches' => array(
			0 => "6\.5\.*.*"
		),
	),
	'acceptable_sugar_flavors' => array(
		0 => 'CE',
	), 
	'name'				=> 'Tree_View_Utils',
	'description'		=> 'Javascript utils for TreeView and others...',
	'is_uninstallable'	=> true,
	'author'			=> 'Serge Coban',
	'published_date'	=> 'April 18, 2013',
	'version'			=> '1.0.1',
	'type'				=> 'module',
	);
	
$installdefs = array(
	'id' 	=> 'Tree_view_javascript',
	'mkdir' => array(
					array('path' => "custom/include/javascript/dhtmlx"),
					array('path' => "custom/include/javascript/jvectormap"),
					array('path' => "custom/include/javascript/stdlib"),
				),
	'copy'	=> array(
					array(
						'from' 	=> '<basepath>/dhtmlx',
						'to'	=> 'custom/include/javascript/dhtmlx'
					),
					array(
						'from' 	=> '<basepath>/jvectormap',
						'to'	=> 'custom/include/javascript/jvectormap'
					),
					array(
						'from' 	=> '<basepath>/stdlib',
						'to'	=> 'modules/custom/include/javascript/stdlib'
					),					
				)
						
	);
			
?>