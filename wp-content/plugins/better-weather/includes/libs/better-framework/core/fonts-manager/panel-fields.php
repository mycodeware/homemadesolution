<?php
/***
 *  BetterFramework is BetterStudio framework for themes and plugins.
 *
 *  ______      _   _             ______                                           _
 *  | ___ \    | | | |            |  ___|                                         | |
 *  | |_/ / ___| |_| |_ ___ _ __  | |_ _ __ __ _ _ __ ___   _____      _____  _ __| | __
 *  | ___ \/ _ \ __| __/ _ \ '__| |  _| '__/ _` | '_ ` _ \ / _ \ \ /\ / / _ \| '__| |/ /
 *  | |_/ /  __/ |_| ||  __/ |    | | | | | (_| | | | | | |  __/\ V  V / (_) | |  |   <
 *  \____/ \___|\__|\__\___|_|    \_| |_|  \__,_|_| |_| |_|\___| \_/\_/ \___/|_|  |_|\_\
 *
 *  Copyright © 2017 Better Studio
 *
 *
 *  Our portfolio is here: http://themeforest.net/user/Better-Studio/portfolio
 *
 *  \--> BetterStudio, 2017 <--/
 */


//
// Custom Fonts
//
$fields[]               = array(
	'name' => __( 'Custom Fonts', 'better-studio' ),
	'id'   => 'custom_fonts_tab',
	'type' => 'tab',
	'icon' => 'bsai-add',
);
$custom_fonts           = array();
$custom_fonts['id']     = array(
	'name'            => __( 'Font Name', 'better-studio' ),
	'id'              => 'id',
	'std'             => '',
	'type'            => 'text',
	'container_class' => 'better-custom-fonts-id',
	'section_class'   => 'full-with-both',
	'repeater_item'   => TRUE
);
$custom_fonts['woff']   = array(
	'name'            => __( 'Font .woff', 'better-studio' ),
	'button_text'     => __( 'Upload .woff', 'better-studio' ),
	'id'              => 'woff',
	'std'             => '',
	'type'            => 'media',
	'container_class' => 'better-custom-fonts-woff',
	'section_class'   => 'full-with-both',
	'repeater_item'   => TRUE
);
$custom_fonts['ttf']    = array(
	'name'            => __( 'Font .ttf', 'better-studio' ),
	'button_text'     => __( 'Upload .ttf', 'better-studio' ),
	'id'              => 'ttf',
	'std'             => '',
	'type'            => 'media',
	'container_class' => 'better-custom-fonts-ttf',
	'section_class'   => 'full-with-both',
	'repeater_item'   => TRUE
);
$custom_fonts['svg']    = array(
	'name'            => __( 'Font .svg', 'better-studio' ),
	'button_text'     => __( 'Upload .svg', 'better-studio' ),
	'id'              => 'svg',
	'std'             => '',
	'type'            => 'media',
	'container_class' => 'better-custom-fonts-svg',
	'section_class'   => 'full-with-both',
	'repeater_item'   => TRUE
);
$custom_fonts['eot']    = array(
	'name'            => __( 'Font .eot', 'better-studio' ),
	'button_text'     => __( 'Upload .eot', 'better-studio' ),
	'id'              => 'eot',
	'std'             => '',
	'type'            => 'media',
	'container_class' => 'better-custom-fonts-eot',
	'section_class'   => 'full-with-both',
	'repeater_item'   => TRUE
);
$fields['custom_fonts'] = array(
	'name'          => __( 'Upload Custom Fonts', 'better-studio' ),
	'id'            => 'custom_fonts',
	'type'          => 'repeater',
	'save-std'      => TRUE,
	'delete_label'  => __( 'Delete Font', 'better-studio' ),
	'item_title'    => __( 'Custom Font', 'better-studio' ),
	'section_class' => 'full-with-both',
	'options'       => $custom_fonts
);


//
// Fonts Stacks
//
$fields[]              = array(
	'name' => __( 'Font Stacks', 'better-studio' ),
	'id'   => 'font_stacks_tab',
	'type' => 'tab',
	'icon' => 'bsai-font',
);
$font_stacks['id']     = array(
	'name'            => __( 'Font Name', 'better-studio' ),
	'id'              => 'id',
	'std'             => '',
	'type'            => 'text',
	'container_class' => 'better-font-stack-name',
	'section_class'   => 'full-with-both',
	'repeater_item'   => TRUE
);
$font_stacks['stack']  = array(
	'name'            => __( 'Font Stack', 'better-studio' ),
	'id'              => 'stack',
	'std'             => '',
	'type'            => 'text',
	'container_class' => 'better-font-stack-stack',
	'section_class'   => 'full-with-both',
	'repeater_item'   => TRUE
);
$fields['font_stacks'] = array(
	'name'          => __( 'Web Safe CSS Font Stacks', 'better-studio' ),
	'id'            => 'font_stacks',
	'type'          => 'repeater',
	'save-std'      => TRUE,
	'add_label'     => '<i class="fa fa-plus"></i> ' . __( 'Add New Font Stack', 'better-studio' ),
	'delete_label'  => __( 'Delete Font Stack', 'better-studio' ),
	'item_title'    => __( 'CSS Font Stack', 'better-studio' ),
	'section_class' => 'full-with-both',
	'options'       => $font_stacks
);


//
// Advanced Options
//
$fields[] = array(
	'name' => __( 'Advanced', 'better-studio' ),
	'id'   => 'typo_opt_tab',
	'type' => 'tab',
	'icon' => 'bsai-gear',
);
$fields[] = array(
	'name'          => __( 'Google Fonts Protocol', 'better-studio' ),
	'id'            => 'google_fonts_protocol',
	'desc'          => __( 'Select protocol of fonts link for Google Fonts.', 'better-studio' ),
	'std'           => 'http',
	'type'          => 'select',
	'section_class' => 'style-floated-left',
	'options'       => array(
		'http'     => __( 'HTTP', 'better-studio' ),
		'https'    => __( 'HTTPs', 'better-studio' ),
		'relative' => __( 'Relative to Site', 'better-studio' ),
	),
);
$fields[] = array(
	'name'  => __( 'Typography Field Preview Texts', 'better-studio' ),
	'type'  => 'group',
	'state' => 'not',
);
$fields[] = array(
	'name' => __( 'Font modal preview text', 'better-studio' ),
	'id'   => 'typo_text_font_manager',
	'type' => 'text',
);
$fields[] = array(
	'name' => __( 'Heading Text', 'better-studio' ),
	'id'   => 'typo_text_heading',
	'type' => 'text',
);
$fields[] = array(
	'name' => __( 'Paragraph Text', 'better-studio' ),
	'id'   => 'typo_text_paragraph',
	'type' => 'textarea',
);
$fields[] = array(
	'name' => __( 'Divided Text', 'better-studio' ),
	'id'   => 'typo_text_divided',
	'type' => 'textarea',
);


//
// Backup & restore
//
$fields[] = array(
	'name'       => __( 'Backup & Restore', 'better-studio' ),
	'id'         => 'backup_restore',
	'type'       => 'tab',
	'icon'       => 'bsai-export-import',
	'margin-top' => '30',
);
$fields[] = array(
	'name'      => __( 'Backup / Export', 'better-studio' ),
	'id'        => 'backup_export_options',
	'type'      => 'export',
	'file_name' => 'custom-fonts-backup',
	'panel_id'  => $this->option_panel_id,
	'desc'      => __( 'This allows you to create a backup of your translation. Please note, it will not backup anything else.', 'better-studio' )
);
$fields[] = array(
	'name'     => __( 'Restore / Import', 'better-studio' ),
	'id'       => 'import_restore_options',
	'type'     => 'import',
	'panel_id' => $this->option_panel_id,
	'desc'     => __( '<strong>It will override your current translation!</strong> Please make sure to select a valid translation file.', 'better-studio' ),
);
