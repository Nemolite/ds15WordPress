<?php
/**
 * Initialize the custom Theme Options.
 *
 * @package OptionTree
 */

add_action( 'init', 'custom_theme_options' );

/**
 * Build the custom settings & update OptionTree.
 *
 * @since 2.0
 */
function custom_theme_options() {

	// OptionTree is not loaded yet, or this is not an admin request.
	if ( ! function_exists( 'ot_settings_id' ) || ! is_admin() ) {
		return false;
	}

	/**
	 * Get a copy of the saved settings array.
	 */
	$saved_settings = get_option( ot_settings_id(), array() );

	/**
	 * Custom settings array that will eventually be
	 * passes to the OptionTree Settings API Class.
	 */
	$custom_settings = array(
		'contextual_help' => array(
			'content' => array(
				array(
					'id'      => 'option_types_help',
					'title'   => __( 'Option Types', 'theme-text-domain' ),
					'content' => '<p>' . __( 'Help content goes here!', 'theme-text-domain' ) . '</p>',
				),
			),
			'sidebar' => '<p>' . __( 'Sidebar content goes here!', 'theme-text-domain' ) . '</p>',
		),
		'sections'        => array(		
		 	array(
				'id'    => 'main_name',
				'title' => __( 'Официальное название', 'theme-text-domain' ),
			),		    
		    array(
				'id'    => 'welcome',
				'title' => __( 'Приветствие', 'theme-text-domain' ),
			),			
			array(
				'id'    => 'main_slider',
				'title' => __( 'Слайдер', 'theme-text-domain' ),
			),		
			
			array(
				'id'    => 'main_top_baners',
				'title' => __( 'Верхние банеры', 'theme-text-domain' ),
			),

			array(
				'id'    => 'main_middle_baners_1',
				'title' => __( 'Средние банеры 1 ряд', 'theme-text-domain' ),
			),
			array(
				'id'    => 'main_middle_baners_2',
				'title' => __( 'Средние банеры 2 ряд', 'theme-text-domain' ),
			),
			array(
				'id'    => 'main_middle_baners_3',
				'title' => __( 'Средние банеры 3 ряд', 'theme-text-domain' ),
			),
			array(
				'id'    => 'main_bottom_baners_1',
				'title' => __( 'Нижние банеры 1 ряд', 'theme-text-domain' ),
			),
			array(
				'id'    => 'main_bottom_baners_2',
				'title' => __( 'Нижние банеры 2 ряд', 'theme-text-domain' ),
			),
			array(
				'id'    => 'main_bottom_baners_3',
				'title' => __( 'Нижние банеры 3 ряд', 'theme-text-domain' ),
			),
			array(
				'id'    => 'youtube',
				'title' => __( 'YouTube', 'theme-text-domain' ),
			),

			// Демо
			array(
				'id'    => 'option_types',
				'title' => __( 'Option Types', 'theme-text-domain' ),
			),
		),
		'settings'        => array(
		// Официальное название
			array(
				'id'           => 'head_main_text',
				'label'        => __( 'Text', 'theme-text-domain' ),
				'desc'         => __( 'Официальное название', 'theme-text-domain' ),				
				'type'         => 'text',
				'section'      => 'main_name',				
				'operator'     => 'and',
			),
		
		//---------------- Приветствие ---------------
		// Заголовок текста
		
		array(
				'id'           => 'head_welcome_text',
				'label'        => __( 'Text', 'theme-text-domain' ),
				'desc'         => __( 'Заголовок текста (красным)', 'theme-text-domain' ),				
				'type'         => 'text',
				'section'      => 'welcome',			
				'operator'     => 'and',
			),	
		
		// Текст приветствия
			array(
				'id'           => 'welcome_textarea',
				'label'        => __( 'Textarea', 'theme-text-domain' ),
				'desc'         => sprintf( __( 'Форма для текста приветствия' ), '<code>wpautop</code>', '<code>media_buttons</code>', '<code>tinymce</code>', '<code>quicktags</code>' ),				
				'type'         => 'textarea',
				'section'      => 'welcome',
				'rows'         => '15',				
				'operator'     => 'and',
			),
		// Подпись текста
		
		array(
				'id'           => 'footer_welcome_text',
				'label'        => __( 'Text', 'theme-text-domain' ),
				'desc'         => __( 'Подпись под текстом (красным)', 'theme-text-domain' ),			
				'type'         => 'text',
				'section'      => 'welcome',			
				'operator'     => 'and',
			),
		
		// ---------------Привествие finish----------------
		
		// -------- Слайдер -----------------
		
			array(
				'id'           => 'main_slider_upload_1',
				'label'        => __( 'Upload', 'theme-text-domain' ),
				'desc'         => sprintf( __( 'Первый слайд', 'theme-text-domain' ), apply_filters( 'ot_upload_text', __( 'Send to OptionTree', 'theme-text-domain' ) ), 'FTP' ),			
				'type'         => 'upload',
				'section'      => 'main_slider',			
				'operator'     => 'and',
			),
			
			
			array(
				'id'           => 'main_slider_upload_2',
				'label'        => __( 'Upload', 'theme-text-domain' ),
				'desc'         => sprintf( __( 'Второй слайд', 'theme-text-domain' ), apply_filters( 'ot_upload_text', __( 'Send to OptionTree', 'theme-text-domain' ) ), 'FTP' ),			
				'type'         => 'upload',
				'section'      => 'main_slider',			
				'operator'     => 'and',
			),
			
			array(
				'id'           => 'main_slider_upload_3',
				'label'        => __( 'Upload', 'theme-text-domain' ),
				'desc'         => sprintf( __( 'Третий слайд', 'theme-text-domain' ), apply_filters( 'ot_upload_text', __( 'Send to OptionTree', 'theme-text-domain' ) ), 'FTP' ),				
				'type'         => 'upload',
				'section'      => 'main_slider',			
				'operator'     => 'and',
			),
			
				array(
				'id'           => 'main_slider_upload_4',
				'label'        => __( 'Upload', 'theme-text-domain' ),
				'desc'         => sprintf( __( 'Четвертый слайд', 'theme-text-domain' ), apply_filters( 'ot_upload_text', __( 'Send to OptionTree', 'theme-text-domain' ) ), 'FTP' ),		
				'type'         => 'upload',
				'section'      => 'main_slider',		
				'operator'     => 'and',
			),
			
				array(
				'id'           => 'main_slider_upload_5',
				'label'        => __( 'Upload', 'theme-text-domain' ),
				'desc'         => sprintf( __( 'Пятый слайд', 'theme-text-domain' ), apply_filters( 'ot_upload_text', __( 'Send to OptionTree', 'theme-text-domain' ) ), 'FTP' ),			
				'type'         => 'upload',
				'section'      => 'main_slider',			
				'operator'     => 'and',
			),
			
					array(
				'id'           => 'main_slider_upload_6',
				'label'        => __( 'Upload', 'theme-text-domain' ),
				'desc'         => sprintf( __( 'Шестой слайд', 'theme-text-domain' ), apply_filters( 'ot_upload_text', __( 'Send to OptionTree', 'theme-text-domain' ) ), 'FTP' ),			
				'type'         => 'upload',
				'section'      => 'main_slider',			
				'operator'     => 'and',
			),
			
						array(
				'id'           => 'main_slider_upload_7',
				'label'        => __( 'Upload', 'theme-text-domain' ),
				'desc'         => sprintf( __( 'Седьмой слайд', 'theme-text-domain' ), apply_filters( 'ot_upload_text', __( 'Send to OptionTree', 'theme-text-domain' ) ), 'FTP' ),				
				'type'         => 'upload',
				'section'      => 'main_slider',			
				'operator'     => 'and',
			),
			
						array(
				'id'           => 'main_slider_upload_8',
				'label'        => __( 'Upload', 'theme-text-domain' ),
				'desc'         => sprintf( __( 'Восьмой слайд', 'theme-text-domain' ), apply_filters( 'ot_upload_text', __( 'Send to OptionTree', 'theme-text-domain' ) ), 'FTP' ),		
				'type'         => 'upload',
				'section'      => 'main_slider',		
				'operator'     => 'and',
			),
			
		//----------- 	Слайдер finish -------------//
		
		//----------- 	банеры -----------//		
		//---------------------ПЕРВЫЙ БАНЕР-----------------------------------//
		   // Текст на банере
			array(
				'id'           => 'main_top_text_1',
				'label'        => __( 'Для первого банера', 'theme-text-domain' ),
				'desc'         => __( 'Текст на банере', 'theme-text-domain' ),			
				'type'         => 'text',
				'section'      => 'main_top_baners',			
				'operator'     => 'and',
			),
		
		        // img
					array(
				'id'           => 'main_top_baner_1',
				'label'        => __( 'Для первого банера', 'theme-text-domain' ),
				'desc'         => sprintf( __( 'Изображение первого банера', 'theme-text-domain' ), apply_filters( 'ot_upload_text', __( 'Send to OptionTree', 'theme-text-domain' ) ), 'FTP' ),			
				'type'         => 'upload',
				'section'      => 'main_top_baners',			
				'operator'     => 'and',
			),
			
			// Ссылка
			array(
				'id'           => 'main_top_link_1',
				'label'        => __( 'Для первого банера', 'theme-text-domain' ),
				'desc'         => __( 'Ссылка на сайт', 'theme-text-domain' ),			
				'type'         => 'text',
				'section'      => 'main_top_baners',			
				'operator'     => 'and',
			),
		//---------------------ПЕРВЫЙ БАНЕР finish-------------------------------//
		
		//---------------------ВТОРОЙ БАНЕР-----------------------------------//
		   // Текст на банере
			array(
				'id'           => 'main_top_text_2',
				'label'        => __( 'Для второго банера', 'theme-text-domain' ),
				'desc'         => __( 'Текст на банере', 'theme-text-domain' ),			
				'type'         => 'text',
				'section'      => 'main_top_baners',			
				'operator'     => 'and',
			),
		
		        // img
					array(
				'id'           => 'main_top_baner_2',
				'label'        => __( 'Для второго банера', 'theme-text-domain' ),
				'desc'         => sprintf( __( 'Изображение первого банера', 'theme-text-domain' ), apply_filters( 'ot_upload_text', __( 'Send to OptionTree', 'theme-text-domain' ) ), 'FTP' ),				
				'type'         => 'upload',
				'section'      => 'main_top_baners',			
				'operator'     => 'and',
			),
			
			// Ссылка
			array(
				'id'           => 'main_top_link_2',
				'label'        => __( 'Для второго банера', 'theme-text-domain' ),
				'desc'         => __( 'Ссылка на сайт', 'theme-text-domain' ),			
				'type'         => 'text',
				'section'      => 'main_top_baners',			
				'operator'     => 'and',
			),
		//--------------------- ВТОРОЙ БАНЕР finish-------------------------------//
		
		//---------------------ТРЕТИЙ БАНЕР-----------------------------------//
		   // Текст на банере
			array(
				'id'           => 'main_top_text_3',
				'label'        => __( 'Для третьего банера', 'theme-text-domain' ),
				'desc'         => __( 'Текст на банере', 'theme-text-domain' ),			
				'type'         => 'text',
				'section'      => 'main_top_baners',			
				'operator'     => 'and',
			),
		
		        // img
					array(
				'id'           => 'main_top_baner_3',
				'label'        => __( 'Для третьего банера', 'theme-text-domain' ),
				'desc'         => sprintf( __( 'Изображение первого банера', 'theme-text-domain' ), apply_filters( 'ot_upload_text', __( 'Send to OptionTree', 'theme-text-domain' ) ), 'FTP' ),			
				'type'         => 'upload',
				'section'      => 'main_top_baners',			
				'operator'     => 'and',
			),
			
			// Ссылка
			array(
				'id'           => 'main_top_link_3',
				'label'        => __( 'Для третьего банера', 'theme-text-domain' ),
				'desc'         => __( 'Ссылка на сайт', 'theme-text-domain' ),			
				'type'         => 'text',
				'section'      => 'main_top_baners',			
				'operator'     => 'and',
			),
		//--------------------- ТРЕТИЙ БАНЕР finish-------------------------------//
		
		//---------------------ЧЕТВЕРЫЙ БАНЕР-----------------------------------//
		   // Текст на банере
			array(
				'id'           => 'main_top_text_4',
				'label'        => __( 'Для четвертого банера', 'theme-text-domain' ),
				'desc'         => __( 'Текст на банере', 'theme-text-domain' ),			
				'type'         => 'text',
				'section'      => 'main_top_baners',		
				'operator'     => 'and',
			),
		
		        // img
					array(
				'id'           => 'main_top_baner_4',
				'label'        => __( 'Для четвертого банера', 'theme-text-domain' ),
				'desc'         => sprintf( __( 'Изображение первого банера', 'theme-text-domain' ), apply_filters( 'ot_upload_text', __( 'Send to OptionTree', 'theme-text-domain' ) ), 'FTP' ),			
				'type'         => 'upload',
				'section'      => 'main_top_baners',			
				'operator'     => 'and',
			),
			
			// Ссылка
			array(
				'id'           => 'main_top_link_4',
				'label'        => __( 'Для четвертого банера', 'theme-text-domain' ),
				'desc'         => __( 'Ссылка на сайт', 'theme-text-domain' ),
				'std'          => '',
				'type'         => 'text',
				'section'      => 'main_top_baners',			
				'operator'     => 'and',
			),
		//--------------------- ЧЕТВЕРЫЙ БАНЕР finish-------------------------------//
		
			//---------------------ПЯТЫЙ БАНЕР-----------------------------------//
		   // Текст на банере
			array(
				'id'           => 'main_top_text_5',
				'label'        => __( 'Для пятого банера', 'theme-text-domain' ),
				'desc'         => __( 'Текст на банере', 'theme-text-domain' ),				
				'type'         => 'text',
				'section'      => 'main_top_baners',			
				'operator'     => 'and',
			),
		
		        // img
					array(
				'id'           => 'main_top_baner_5',
				'label'        => __( 'Для пятого банера', 'theme-text-domain' ),
				'desc'         => sprintf( __( 'Изображение первого банера', 'theme-text-domain' ), apply_filters( 'ot_upload_text', __( 'Send to OptionTree', 'theme-text-domain' ) ), 'FTP' ),			
				'type'         => 'upload',
				'section'      => 'main_top_baners',			
				'operator'     => 'and',
			),
			
			// Ссылка
			array(
				'id'           => 'main_top_link_5',
				'label'        => __( 'Для пятого банера', 'theme-text-domain' ),
				'desc'         => __( 'Ссылка на сайт', 'theme-text-domain' ),			
				'type'         => 'text',
				'section'      => 'main_top_baners',			
				'operator'     => 'and',
			),
		//--------------------- ПЯТЫЙ БАНЕР finish-------------------------------//		
        //------------------------ банеры finish ----------------//			
		
		// Завершение блока настройки темы
		
		/**
		 * Средние баннеры main_middle_baners_1
		 */
		
			//---------------------Первый банер,первый ряд -------------------------------//
		   // Текст на банере
		   array(
			'id'           => 'main_middle_text_1',
			'label'        => __( 'Первый банер, первый ряд', 'theme-text-domain' ),
			'desc'         => __( 'Текст на банере', 'theme-text-domain' ),				
			'type'         => 'text',
			'section'      => 'main_middle_baners_1',			
			'operator'     => 'and',
		),
	
			// img
				array(
			'id'           => 'main_middle_baner_1',
			'label'        => __( 'Первый банер, первый ряд', 'theme-text-domain' ),
			'desc'         => sprintf( __( 'Изображение первого банера', 'theme-text-domain' ), apply_filters( 'ot_upload_text', __( 'Send to OptionTree', 'theme-text-domain' ) ), 'FTP' ),			
			'type'         => 'upload',
			'section'      => 'main_middle_baners_1',			
			'operator'     => 'and',
		),
		
		// Ссылка
		array(
			'id'           => 'main_middle_link_1',
			'label'        => __( 'Первый банер, первый ряд', 'theme-text-domain' ),
			'desc'         => __( 'Ссылка на сайт', 'theme-text-domain' ),			
			'type'         => 'text',
			'section'      => 'main_middle_baners_1',			
			'operator'     => 'and',
		), 

			//---------------------Второй банер,первый ряд -------------------------------//
		   // Текст на банере
		   array(
			'id'           => 'main_middle_text_2',
			'label'        => __( 'Второй банер, первый ряд', 'theme-text-domain' ),
			'desc'         => __( 'Текст на банере', 'theme-text-domain' ),				
			'type'         => 'text',
			'section'      => 'main_middle_baners_1',			
			'operator'     => 'and',
		),
	
			// img
				array(
			'id'           => 'main_middle_baner_2',
			'label'        => __( 'Второй банер, первый ряд', 'theme-text-domain' ),
			'desc'         => sprintf( __( 'Изображение первого банера', 'theme-text-domain' ), apply_filters( 'ot_upload_text', __( 'Send to OptionTree', 'theme-text-domain' ) ), 'FTP' ),			
			'type'         => 'upload',
			'section'      => 'main_middle_baners_1',			
			'operator'     => 'and',
		),
		
		// Ссылка
		array(
			'id'           => 'main_middle_link_2',
			'label'        => __( 'Второй банер, первый ряд', 'theme-text-domain' ),
			'desc'         => __( 'Ссылка на сайт', 'theme-text-domain' ),			
			'type'         => 'text',
			'section'      => 'main_middle_baners_1',			
			'operator'     => 'and',
		), 

		
			//---------------------Третий банер,первый ряд -------------------------------//
		   // Текст на банере
		   array(
			'id'           => 'main_middle_text_3',
			'label'        => __( 'Третий банер, первый ряд', 'theme-text-domain' ),
			'desc'         => __( 'Текст на банере', 'theme-text-domain' ),				
			'type'         => 'text',
			'section'      => 'main_middle_baners_1',			
			'operator'     => 'and',
		),
	
			// img
				array(
			'id'           => 'main_middle_baner_3',
			'label'        => __( 'Третий банер, первый ряд', 'theme-text-domain' ),
			'desc'         => sprintf( __( 'Изображение первого банера', 'theme-text-domain' ), apply_filters( 'ot_upload_text', __( 'Send to OptionTree', 'theme-text-domain' ) ), 'FTP' ),			
			'type'         => 'upload',
			'section'      => 'main_middle_baners_1',			
			'operator'     => 'and',
		),
		
		// Ссылка
		array(
			'id'           => 'main_middle_link_3',
			'label'        => __( 'Третий банер, первый ряд', 'theme-text-domain' ),
			'desc'         => __( 'Ссылка на сайт', 'theme-text-domain' ),			
			'type'         => 'text',
			'section'      => 'main_middle_baners_1',			
			'operator'     => 'and',
		), 

			//---------------------Четвертый банер,первый ряд -------------------------------//
		   // Текст на банере
		   array(
			'id'           => 'main_middle_text_4',
			'label'        => __( 'Четвертый банер, первый ряд', 'theme-text-domain' ),
			'desc'         => __( 'Текст на банере', 'theme-text-domain' ),				
			'type'         => 'text',
			'section'      => 'main_middle_baners_1',			
			'operator'     => 'and',
		),
	
			// img
				array(
			'id'           => 'main_middle_baner_4',
			'label'        => __( 'Четвертый банер, первый ряд', 'theme-text-domain' ),
			'desc'         => sprintf( __( 'Изображение первого банера', 'theme-text-domain' ), apply_filters( 'ot_upload_text', __( 'Send to OptionTree', 'theme-text-domain' ) ), 'FTP' ),			
			'type'         => 'upload',
			'section'      => 'main_middle_baners_1',			
			'operator'     => 'and',
		),
		
		// Ссылка
		array(
			'id'           => 'main_middle_link_4',
			'label'        => __( 'Четвертый банер, первый ряд', 'theme-text-domain' ),
			'desc'         => __( 'Ссылка на сайт', 'theme-text-domain' ),			
			'type'         => 'text',
			'section'      => 'main_middle_baners_1',			
			'operator'     => 'and',
		), 

			//---------------------Пятый банер,первый ряд -------------------------------//
		   // Текст на банере
		   array(
			'id'           => 'main_middle_text_5',
			'label'        => __( 'Пятый банер, первый ряд', 'theme-text-domain' ),
			'desc'         => __( 'Текст на банере', 'theme-text-domain' ),				
			'type'         => 'text',
			'section'      => 'main_middle_baners_1',			
			'operator'     => 'and',
		),
	
			// img
				array(
			'id'           => 'main_middle_baner_5',
			'label'        => __( 'Пятый банер, первый ряд', 'theme-text-domain' ),
			'desc'         => sprintf( __( 'Изображение первого банера', 'theme-text-domain' ), apply_filters( 'ot_upload_text', __( 'Send to OptionTree', 'theme-text-domain' ) ), 'FTP' ),			
			'type'         => 'upload',
			'section'      => 'main_middle_baners_1',			
			'operator'     => 'and',
		),
		
		// Ссылка
		array(
			'id'           => 'main_middle_link_5',
			'label'        => __( 'Пятый банер, первый ряд', 'theme-text-domain' ),
			'desc'         => __( 'Ссылка на сайт', 'theme-text-domain' ),			
			'type'         => 'text',
			'section'      => 'main_middle_baners_1',			
			'operator'     => 'and',
		), 

		/**
		 * Средние баннеры main_middle_baners_2
		 */
		
			//---------------------Первый банер,второй ряд -------------------------------//
		   // Текст на банере
		   array(
			'id'           => 'main_middle_text_2_1',
			'label'        => __( 'Первый банер, второй ряд', 'theme-text-domain' ),
			'desc'         => __( 'Текст на банере', 'theme-text-domain' ),				
			'type'         => 'text',
			'section'      => 'main_middle_baners_2',			
			'operator'     => 'and',
		),
	
			// img
				array(
			'id'           => 'main_middle_baner_2_1',
			'label'        => __( 'Первый банер, второй ряд', 'theme-text-domain' ),
			'desc'         => sprintf( __( 'Изображение первого банера', 'theme-text-domain' ), apply_filters( 'ot_upload_text', __( 'Send to OptionTree', 'theme-text-domain' ) ), 'FTP' ),			
			'type'         => 'upload',
			'section'      => 'main_middle_baners_2',			
			'operator'     => 'and',
		),
		
		// Ссылка
		array(
			'id'           => 'main_middle_link_2_1',
			'label'        => __( 'Первый банер, второй ряд', 'theme-text-domain' ),
			'desc'         => __( 'Ссылка на сайт', 'theme-text-domain' ),			
			'type'         => 'text',
			'section'      => 'main_middle_baners_2',			
			'operator'     => 'and',
		), 

			//---------------------Второй банер,второй ряд -------------------------------//
		   // Текст на банере
		   array(
			'id'           => 'main_middle_text_2_2',
			'label'        => __( 'Второй банер, второй ряд', 'theme-text-domain' ),
			'desc'         => __( 'Текст на банере', 'theme-text-domain' ),				
			'type'         => 'text',
			'section'      => 'main_middle_baners_2',			
			'operator'     => 'and',
		),
	
			// img
				array(
			'id'           => 'main_middle_baner_2_2',
			'label'        => __( 'Второй банер, второй ряд', 'theme-text-domain' ),
			'desc'         => sprintf( __( 'Изображение первого банера', 'theme-text-domain' ), apply_filters( 'ot_upload_text', __( 'Send to OptionTree', 'theme-text-domain' ) ), 'FTP' ),			
			'type'         => 'upload',
			'section'      => 'main_middle_baners_2',			
			'operator'     => 'and',
		),
		
		// Ссылка
		array(
			'id'           => 'main_middle_link_2_2',
			'label'        => __( 'Второй банер, второй ряд', 'theme-text-domain' ),
			'desc'         => __( 'Ссылка на сайт', 'theme-text-domain' ),			
			'type'         => 'text',
			'section'      => 'main_middle_baners_2',			
			'operator'     => 'and',
		), 

		
			//---------------------Третий банер,второй ряд -------------------------------//
		   // Текст на банере
		   array(
			'id'           => 'main_middle_text_2_3',
			'label'        => __( 'Третий банер, второй ряд', 'theme-text-domain' ),
			'desc'         => __( 'Текст на банере', 'theme-text-domain' ),				
			'type'         => 'text',
			'section'      => 'main_middle_baners_2',			
			'operator'     => 'and',
		),
	
			// img
				array(
			'id'           => 'main_middle_baner_2_3',
			'label'        => __( 'Третий банер, второй ряд', 'theme-text-domain' ),
			'desc'         => sprintf( __( 'Изображение первого банера', 'theme-text-domain' ), apply_filters( 'ot_upload_text', __( 'Send to OptionTree', 'theme-text-domain' ) ), 'FTP' ),			
			'type'         => 'upload',
			'section'      => 'main_middle_baners_2',			
			'operator'     => 'and',
		),
		
		// Ссылка
		array(
			'id'           => 'main_middle_link_2_3',
			'label'        => __( 'Третий банер, второй ряд', 'theme-text-domain' ),
			'desc'         => __( 'Ссылка на сайт', 'theme-text-domain' ),			
			'type'         => 'text',
			'section'      => 'main_middle_baners_2',			
			'operator'     => 'and',
		), 

			//---------------------Четвертый банер,второй ряд -------------------------------//
		   // Текст на банере
		   array(
			'id'           => 'main_middle_text_2_4',
			'label'        => __( 'Четвертый банер, второй ряд', 'theme-text-domain' ),
			'desc'         => __( 'Текст на банере', 'theme-text-domain' ),				
			'type'         => 'text',
			'section'      => 'main_middle_baners_2',			
			'operator'     => 'and',
		),
	
			// img
				array(
			'id'           => 'main_middle_baner_2_4',
			'label'        => __( 'Четвертый банер, второй ряд', 'theme-text-domain' ),
			'desc'         => sprintf( __( 'Изображение первого банера', 'theme-text-domain' ), apply_filters( 'ot_upload_text', __( 'Send to OptionTree', 'theme-text-domain' ) ), 'FTP' ),			
			'type'         => 'upload',
			'section'      => 'main_middle_baners_2',			
			'operator'     => 'and',
		),
		
		// Ссылка
		array(
			'id'           => 'main_middle_link_2_4',
			'label'        => __( 'Четвертый банер, второй ряд', 'theme-text-domain' ),
			'desc'         => __( 'Ссылка на сайт', 'theme-text-domain' ),			
			'type'         => 'text',
			'section'      => 'main_middle_baners_2',			
			'operator'     => 'and',
		), 

			//---------------------Пятый банер,второй ряд -------------------------------//
		   // Текст на банере
		   array(
			'id'           => 'main_middle_text_2_5',
			'label'        => __( 'Пятый банер, второй ряд', 'theme-text-domain' ),
			'desc'         => __( 'Текст на банере', 'theme-text-domain' ),				
			'type'         => 'text',
			'section'      => 'main_middle_baners_2',			
			'operator'     => 'and',
		),
	
			// img
				array(
			'id'           => 'main_middle_baner_2_5',
			'label'        => __( 'Пятый банер, второй ряд', 'theme-text-domain' ),
			'desc'         => sprintf( __( 'Изображение первого банера', 'theme-text-domain' ), apply_filters( 'ot_upload_text', __( 'Send to OptionTree', 'theme-text-domain' ) ), 'FTP' ),			
			'type'         => 'upload',
			'section'      => 'main_middle_baners_2',			
			'operator'     => 'and',
		),
		
		// Ссылка
		array(
			'id'           => 'main_middle_link_2_5',
			'label'        => __( 'Пятый банер, второй ряд', 'theme-text-domain' ),
			'desc'         => __( 'Ссылка на сайт', 'theme-text-domain' ),			
			'type'         => 'text',
			'section'      => 'main_middle_baners_2',			
			'operator'     => 'and',
		), 

		/**
		 * Средние баннеры main_middle_baners_3
		 */
		
			//---------------------Первый банер,третий ряд -------------------------------//
		   // Текст на банере
		   array(
			'id'           => 'main_middle_text_3_1',
			'label'        => __( 'Первый банер,третий ряд', 'theme-text-domain' ),
			'desc'         => __( 'Текст на банере', 'theme-text-domain' ),				
			'type'         => 'text',
			'section'      => 'main_middle_baners_3',			
			'operator'     => 'and',
		),
	
			// img
				array(
			'id'           => 'main_middle_baner_3_1',
			'label'        => __( 'Первый банер,третий ряд', 'theme-text-domain' ),
			'desc'         => sprintf( __( 'Изображение первого банера', 'theme-text-domain' ), apply_filters( 'ot_upload_text', __( 'Send to OptionTree', 'theme-text-domain' ) ), 'FTP' ),			
			'type'         => 'upload',
			'section'      => 'main_middle_baners_3',			
			'operator'     => 'and',
		),
		
		// Ссылка
		array(
			'id'           => 'main_middle_link_3_1',
			'label'        => __( 'Первый банер,третий ряд', 'theme-text-domain' ),
			'desc'         => __( 'Ссылка на сайт', 'theme-text-domain' ),			
			'type'         => 'text',
			'section'      => 'main_middle_baners_3',			
			'operator'     => 'and',
		), 

			//---------------------Второй банер,второй ряд -------------------------------//
		   // Текст на банере
		   array(
			'id'           => 'main_middle_text_3_2',
			'label'        => __( 'Второй банер, третий ряд', 'theme-text-domain' ),
			'desc'         => __( 'Текст на банере', 'theme-text-domain' ),				
			'type'         => 'text',
			'section'      => 'main_middle_baners_3',			
			'operator'     => 'and',
		),
	
			// img
				array(
			'id'           => 'main_middle_baner_3_2',
			'label'        => __( 'Второй банер, третий ряд', 'theme-text-domain' ),
			'desc'         => sprintf( __( 'Изображение первого банера', 'theme-text-domain' ), apply_filters( 'ot_upload_text', __( 'Send to OptionTree', 'theme-text-domain' ) ), 'FTP' ),			
			'type'         => 'upload',
			'section'      => 'main_middle_baners_3',			
			'operator'     => 'and',
		),
		
		// Ссылка
		array(
			'id'           => 'main_middle_link_3_2',
			'label'        => __( 'Второй банер, третий ряд', 'theme-text-domain' ),
			'desc'         => __( 'Ссылка на сайт', 'theme-text-domain' ),			
			'type'         => 'text',
			'section'      => 'main_middle_baners_3',			
			'operator'     => 'and',
		), 

		
			//---------------------Третий банер,второй ряд -------------------------------//
		   // Текст на банере
		   array(
			'id'           => 'main_middle_text_3_3',
			'label'        => __( 'Третий банер, третий ряд', 'theme-text-domain' ),
			'desc'         => __( 'Текст на банере', 'theme-text-domain' ),				
			'type'         => 'text',
			'section'      => 'main_middle_baners_3',			
			'operator'     => 'and',
		),
	
			// img
				array(
			'id'           => 'main_middle_baner_3_3',
			'label'        => __( 'Третий банер, третий ряд', 'theme-text-domain' ),
			'desc'         => sprintf( __( 'Изображение первого банера', 'theme-text-domain' ), apply_filters( 'ot_upload_text', __( 'Send to OptionTree', 'theme-text-domain' ) ), 'FTP' ),			
			'type'         => 'upload',
			'section'      => 'main_middle_baners_3',			
			'operator'     => 'and',
		),
		
		// Ссылка
		array(
			'id'           => 'main_middle_link_3_3',
			'label'        => __( 'Третий банер, третий ряд', 'theme-text-domain' ),
			'desc'         => __( 'Ссылка на сайт', 'theme-text-domain' ),			
			'type'         => 'text',
			'section'      => 'main_middle_baners_3',			
			'operator'     => 'and',
		), 

			//---------------------Четвертый банер,второй ряд -------------------------------//
		   // Текст на банере
		   array(
			'id'           => 'main_middle_text_3_4',
			'label'        => __( 'Четвертый банер, третий ряд', 'theme-text-domain' ),
			'desc'         => __( 'Текст на банере', 'theme-text-domain' ),				
			'type'         => 'text',
			'section'      => 'main_middle_baners_3',			
			'operator'     => 'and',
		),
	
			// img
				array(
			'id'           => 'main_middle_baner_3_4',
			'label'        => __( 'Четвертый банер, третий ряд', 'theme-text-domain' ),
			'desc'         => sprintf( __( 'Изображение первого банера', 'theme-text-domain' ), apply_filters( 'ot_upload_text', __( 'Send to OptionTree', 'theme-text-domain' ) ), 'FTP' ),			
			'type'         => 'upload',
			'section'      => 'main_middle_baners_3',			
			'operator'     => 'and',
		),
		
		// Ссылка
		array(
			'id'           => 'main_middle_link_3_4',
			'label'        => __( 'Четвертый банер, третий ряд', 'theme-text-domain' ),
			'desc'         => __( 'Ссылка на сайт', 'theme-text-domain' ),			
			'type'         => 'text',
			'section'      => 'main_middle_baners_3',			
			'operator'     => 'and',
		), 

			//---------------------Пятый банер,второй ряд -------------------------------//
		   // Текст на банере
		   array(
			'id'           => 'main_middle_text_3_5',
			'label'        => __( 'Пятый банер, третий ряд', 'theme-text-domain' ),
			'desc'         => __( 'Текст на банере', 'theme-text-domain' ),				
			'type'         => 'text',
			'section'      => 'main_middle_baners_3',			
			'operator'     => 'and',
		),
	
			// img
				array(
			'id'           => 'main_middle_baner_3_5',
			'label'        => __( 'Пятый банер, третий ряд', 'theme-text-domain' ),
			'desc'         => sprintf( __( 'Изображение первого банера', 'theme-text-domain' ), apply_filters( 'ot_upload_text', __( 'Send to OptionTree', 'theme-text-domain' ) ), 'FTP' ),			
			'type'         => 'upload',
			'section'      => 'main_middle_baners_3',			
			'operator'     => 'and',
		),
		
		// Ссылка
		array(
			'id'           => 'main_middle_link_3_5',
			'label'        => __( 'Пятый банер, третий ряд', 'theme-text-domain' ),
			'desc'         => __( 'Ссылка на сайт', 'theme-text-domain' ),			
			'type'         => 'text',
			'section'      => 'main_middle_baners_3',			
			'operator'     => 'and',
		), 
		/**
		 * Нижние баннеры main_bottom_baners
		 */
		
			//---------------------Первый банер,первый ряд -------------------------------//
		   // Текст на банере
		   array(
			'id'           => 'main_bottom_text_1',
			'label'        => __( 'Первый банер, первый ряд', 'theme-text-domain' ),
			'desc'         => __( 'Текст на банере', 'theme-text-domain' ),				
			'type'         => 'text',
			'section'      => 'main_bottom_baners_1',			
			'operator'     => 'and',
		),
	
			// img
				array(
			'id'           => 'main_bottom_baner_1',
			'label'        => __( 'Первый банер, первый ряд', 'theme-text-domain' ),
			'desc'         => sprintf( __( 'Изображение первого банера', 'theme-text-domain' ), apply_filters( 'ot_upload_text', __( 'Send to OptionTree', 'theme-text-domain' ) ), 'FTP' ),			
			'type'         => 'upload',
			'section'      => 'main_bottom_baners_1',			
			'operator'     => 'and',
		),
		
		// Ссылка
		array(
			'id'           => 'main_bottom_link_1',
			'label'        => __( 'Первый банер, первый ряд', 'theme-text-domain' ),
			'desc'         => __( 'Ссылка на сайт', 'theme-text-domain' ),			
			'type'         => 'text',
			'section'      => 'main_bottom_baners_1',			
			'operator'     => 'and',
		), 

			//---------------------Второй банер,первый ряд -------------------------------//
		   // Текст на банере
		   array(
			'id'           => 'main_bottom_text_2',
			'label'        => __( 'Второй банер, первый ряд', 'theme-text-domain' ),
			'desc'         => __( 'Текст на банере', 'theme-text-domain' ),				
			'type'         => 'text',
			'section'      => 'main_bottom_baners_1',			
			'operator'     => 'and',
		),
	
			// img
				array(
			'id'           => 'main_bottom_baner_2',
			'label'        => __( 'Второй банер, первый ряд', 'theme-text-domain' ),
			'desc'         => sprintf( __( 'Изображение первого банера', 'theme-text-domain' ), apply_filters( 'ot_upload_text', __( 'Send to OptionTree', 'theme-text-domain' ) ), 'FTP' ),			
			'type'         => 'upload',
			'section'      => 'main_bottom_baners_1',			
			'operator'     => 'and',
		),
		
		// Ссылка
		array(
			'id'           => 'main_bottom_link_2',
			'label'        => __( 'Второй банер, первый ряд', 'theme-text-domain' ),
			'desc'         => __( 'Ссылка на сайт', 'theme-text-domain' ),			
			'type'         => 'text',
			'section'      => 'main_bottom_baners_1',			
			'operator'     => 'and',
		), 

		
			//---------------------Третий банер,первый ряд -------------------------------//
		   // Текст на банере
		   array(
			'id'           => 'main_bottom_text_3',
			'label'        => __( 'Третий банер, первый ряд', 'theme-text-domain' ),
			'desc'         => __( 'Текст на банере', 'theme-text-domain' ),				
			'type'         => 'text',
			'section'      => 'main_bottom_baners_1',			
			'operator'     => 'and',
		),
	
			// img
				array(
			'id'           => 'main_bottom_baner_3',
			'label'        => __( 'Третий банер, первый ряд', 'theme-text-domain' ),
			'desc'         => sprintf( __( 'Изображение первого банера', 'theme-text-domain' ), apply_filters( 'ot_upload_text', __( 'Send to OptionTree', 'theme-text-domain' ) ), 'FTP' ),			
			'type'         => 'upload',
			'section'      => 'main_bottom_baners_1',			
			'operator'     => 'and',
		),
		
		// Ссылка
		array(
			'id'           => 'main_bottom_link_3',
			'label'        => __( 'Третий банер, первый ряд', 'theme-text-domain' ),
			'desc'         => __( 'Ссылка на сайт', 'theme-text-domain' ),			
			'type'         => 'text',
			'section'      => 'main_bottom_baners_1',			
			'operator'     => 'and',
		), 

			//---------------------Четвертый банер,первый ряд -------------------------------//
		   // Текст на банере
		   array(
			'id'           => 'main_bottom_text_4',
			'label'        => __( 'Четвертый банер, первый ряд', 'theme-text-domain' ),
			'desc'         => __( 'Текст на банере', 'theme-text-domain' ),				
			'type'         => 'text',
			'section'      => 'main_bottom_baners_1',			
			'operator'     => 'and',
		),
	
			// img
				array(
			'id'           => 'main_bottom_baner_4',
			'label'        => __( 'Четвертый банер, первый ряд', 'theme-text-domain' ),
			'desc'         => sprintf( __( 'Изображение первого банера', 'theme-text-domain' ), apply_filters( 'ot_upload_text', __( 'Send to OptionTree', 'theme-text-domain' ) ), 'FTP' ),			
			'type'         => 'upload',
			'section'      => 'main_bottom_baners_1',			
			'operator'     => 'and',
		),
		
		// Ссылка
		array(
			'id'           => 'main_bottom_link_4',
			'label'        => __( 'Четвертый банер, первый ряд', 'theme-text-domain' ),
			'desc'         => __( 'Ссылка на сайт', 'theme-text-domain' ),			
			'type'         => 'text',
			'section'      => 'main_bottom_baners_1',			
			'operator'     => 'and',
		), 

			//---------------------Пятый банер,первый ряд -------------------------------//
		   // Текст на банере
		   array(
			'id'           => 'main_bottom_text_5',
			'label'        => __( 'Пятый банер, первый ряд', 'theme-text-domain' ),
			'desc'         => __( 'Текст на банере', 'theme-text-domain' ),				
			'type'         => 'text',
			'section'      => 'main_bottom_baners_1',			
			'operator'     => 'and',
		),
	
			// img
				array(
			'id'           => 'main_bottom_baner_5',
			'label'        => __( 'Пятый банер, первый ряд', 'theme-text-domain' ),
			'desc'         => sprintf( __( 'Изображение первого банера', 'theme-text-domain' ), apply_filters( 'ot_upload_text', __( 'Send to OptionTree', 'theme-text-domain' ) ), 'FTP' ),			
			'type'         => 'upload',
			'section'      => 'main_bottom_baners_1',			
			'operator'     => 'and',
		),
		
		// Ссылка
		array(
			'id'           => 'main_bottom_link_5',
			'label'        => __( 'Пятый банер, первый ряд', 'theme-text-domain' ),
			'desc'         => __( 'Ссылка на сайт', 'theme-text-domain' ),			
			'type'         => 'text',
			'section'      => 'main_bottom_baners_1',			
			'operator'     => 'and',
		), 

		/**
		 * Средние баннеры main_bottom_baners_2
		 */
		
			//---------------------Первый банер,второй ряд -------------------------------//
		   // Текст на банере
		   array(
			'id'           => 'main_bottom_text_2_1',
			'label'        => __( 'Первый банер, второй ряд', 'theme-text-domain' ),
			'desc'         => __( 'Текст на банере', 'theme-text-domain' ),				
			'type'         => 'text',
			'section'      => 'main_bottom_baners_2',			
			'operator'     => 'and',
		),
	
			// img
				array(
			'id'           => 'main_bottom_baner_2_1',
			'label'        => __( 'Первый банер, второй ряд', 'theme-text-domain' ),
			'desc'         => sprintf( __( 'Изображение первого банера', 'theme-text-domain' ), apply_filters( 'ot_upload_text', __( 'Send to OptionTree', 'theme-text-domain' ) ), 'FTP' ),			
			'type'         => 'upload',
			'section'      => 'main_bottom_baners_2',			
			'operator'     => 'and',
		),
		
		// Ссылка
		array(
			'id'           => 'main_bottom_link_2_1',
			'label'        => __( 'Первый банер, второй ряд', 'theme-text-domain' ),
			'desc'         => __( 'Ссылка на сайт', 'theme-text-domain' ),			
			'type'         => 'text',
			'section'      => 'main_bottom_baners_2',			
			'operator'     => 'and',
		), 

			//---------------------Второй банер,второй ряд -------------------------------//
		   // Текст на банере
		   array(
			'id'           => 'main_bottom_text_2_2',
			'label'        => __( 'Второй банер, второй ряд', 'theme-text-domain' ),
			'desc'         => __( 'Текст на банере', 'theme-text-domain' ),				
			'type'         => 'text',
			'section'      => 'main_bottom_baners_2',			
			'operator'     => 'and',
		),
	
			// img
				array(
			'id'           => 'main_bottom_baner_2_2',
			'label'        => __( 'Второй банер, второй ряд', 'theme-text-domain' ),
			'desc'         => sprintf( __( 'Изображение первого банера', 'theme-text-domain' ), apply_filters( 'ot_upload_text', __( 'Send to OptionTree', 'theme-text-domain' ) ), 'FTP' ),			
			'type'         => 'upload',
			'section'      => 'main_bottom_baners_2',			
			'operator'     => 'and',
		),
		
		// Ссылка
		array(
			'id'           => 'main_bottom_link_2_2',
			'label'        => __( 'Второй банер, второй ряд', 'theme-text-domain' ),
			'desc'         => __( 'Ссылка на сайт', 'theme-text-domain' ),			
			'type'         => 'text',
			'section'      => 'main_bottom_baners_2',			
			'operator'     => 'and',
		), 

		
			//---------------------Третий банер,второй ряд -------------------------------//
		   // Текст на банере
		   array(
			'id'           => 'main_bottom_text_2_3',
			'label'        => __( 'Третий банер, второй ряд', 'theme-text-domain' ),
			'desc'         => __( 'Текст на банере', 'theme-text-domain' ),				
			'type'         => 'text',
			'section'      => 'main_bottom_baners_2',			
			'operator'     => 'and',
		),
	
			// img
				array(
			'id'           => 'main_bottom_baner_2_3',
			'label'        => __( 'Третий банер, второй ряд', 'theme-text-domain' ),
			'desc'         => sprintf( __( 'Изображение первого банера', 'theme-text-domain' ), apply_filters( 'ot_upload_text', __( 'Send to OptionTree', 'theme-text-domain' ) ), 'FTP' ),			
			'type'         => 'upload',
			'section'      => 'main_bottom_baners_2',			
			'operator'     => 'and',
		),
		
		// Ссылка
		array(
			'id'           => 'main_bottom_link_2_3',
			'label'        => __( 'Третий банер, второй ряд', 'theme-text-domain' ),
			'desc'         => __( 'Ссылка на сайт', 'theme-text-domain' ),			
			'type'         => 'text',
			'section'      => 'main_bottom_baners_2',			
			'operator'     => 'and',
		), 

			//---------------------Четвертый банер,второй ряд -------------------------------//
		   // Текст на банере
		   array(
			'id'           => 'main_bottom_text_2_4',
			'label'        => __( 'Четвертый банер, второй ряд', 'theme-text-domain' ),
			'desc'         => __( 'Текст на банере', 'theme-text-domain' ),				
			'type'         => 'text',
			'section'      => 'main_bottom_baners_2',			
			'operator'     => 'and',
		),
	
			// img
				array(
			'id'           => 'main_bottom_baner_2_4',
			'label'        => __( 'Четвертый банер, второй ряд', 'theme-text-domain' ),
			'desc'         => sprintf( __( 'Изображение первого банера', 'theme-text-domain' ), apply_filters( 'ot_upload_text', __( 'Send to OptionTree', 'theme-text-domain' ) ), 'FTP' ),			
			'type'         => 'upload',
			'section'      => 'main_bottom_baners_2',			
			'operator'     => 'and',
		),
		
		// Ссылка
		array(
			'id'           => 'main_bottom_link_2_4',
			'label'        => __( 'Четвертый банер, второй ряд', 'theme-text-domain' ),
			'desc'         => __( 'Ссылка на сайт', 'theme-text-domain' ),			
			'type'         => 'text',
			'section'      => 'main_bottom_baners_2',			
			'operator'     => 'and',
		), 

			//---------------------Пятый банер,второй ряд -------------------------------//
		   // Текст на банере
		   array(
			'id'           => 'main_bottom_text_2_5',
			'label'        => __( 'Пятый банер, второй ряд', 'theme-text-domain' ),
			'desc'         => __( 'Текст на банере', 'theme-text-domain' ),				
			'type'         => 'text',
			'section'      => 'main_bottom_baners_2',			
			'operator'     => 'and',
		),
	
			// img
				array(
			'id'           => 'main_bottom_baner_2_5',
			'label'        => __( 'Пятый банер, второй ряд', 'theme-text-domain' ),
			'desc'         => sprintf( __( 'Изображение первого банера', 'theme-text-domain' ), apply_filters( 'ot_upload_text', __( 'Send to OptionTree', 'theme-text-domain' ) ), 'FTP' ),			
			'type'         => 'upload',
			'section'      => 'main_bottom_baners_2',			
			'operator'     => 'and',
		),
		
		// Ссылка
		array(
			'id'           => 'main_bottom_link_2_5',
			'label'        => __( 'Пятый банер, второй ряд', 'theme-text-domain' ),
			'desc'         => __( 'Ссылка на сайт', 'theme-text-domain' ),			
			'type'         => 'text',
			'section'      => 'main_bottom_baners_2',			
			'operator'     => 'and',
		), 

		/**
		 * Средние баннеры main_bottom_baners_3
		 */
		
			//---------------------Первый банер,третий ряд -------------------------------//
		   // Текст на банере
		   array(
			'id'           => 'main_bottom_text_3_1',
			'label'        => __( 'Первый банер,третий ряд', 'theme-text-domain' ),
			'desc'         => __( 'Текст на банере', 'theme-text-domain' ),				
			'type'         => 'text',
			'section'      => 'main_bottom_baners_3',			
			'operator'     => 'and',
		),
	
			// img
				array(
			'id'           => 'main_bottom_baner_3_1',
			'label'        => __( 'Первый банер,третий ряд', 'theme-text-domain' ),
			'desc'         => sprintf( __( 'Изображение первого банера', 'theme-text-domain' ), apply_filters( 'ot_upload_text', __( 'Send to OptionTree', 'theme-text-domain' ) ), 'FTP' ),			
			'type'         => 'upload',
			'section'      => 'main_bottom_baners_3',			
			'operator'     => 'and',
		),
		
		// Ссылка
		array(
			'id'           => 'main_bottom_link_3_1',
			'label'        => __( 'Первый банер,третий ряд', 'theme-text-domain' ),
			'desc'         => __( 'Ссылка на сайт', 'theme-text-domain' ),			
			'type'         => 'text',
			'section'      => 'main_bottom_baners_3',			
			'operator'     => 'and',
		), 

			//---------------------Второй банер,второй ряд -------------------------------//
		   // Текст на банере
		   array(
			'id'           => 'main_bottom_text_3_2',
			'label'        => __( 'Второй банер, третий ряд', 'theme-text-domain' ),
			'desc'         => __( 'Текст на банере', 'theme-text-domain' ),				
			'type'         => 'text',
			'section'      => 'main_bottom_baners_3',			
			'operator'     => 'and',
		),
	
			// img
				array(
			'id'           => 'main_bottom_baner_3_2',
			'label'        => __( 'Второй банер, третий ряд', 'theme-text-domain' ),
			'desc'         => sprintf( __( 'Изображение первого банера', 'theme-text-domain' ), apply_filters( 'ot_upload_text', __( 'Send to OptionTree', 'theme-text-domain' ) ), 'FTP' ),			
			'type'         => 'upload',
			'section'      => 'main_bottom_baners_3',			
			'operator'     => 'and',
		),
		
		// Ссылка
		array(
			'id'           => 'main_bottom_link_3_2',
			'label'        => __( 'Второй банер, третий ряд', 'theme-text-domain' ),
			'desc'         => __( 'Ссылка на сайт', 'theme-text-domain' ),			
			'type'         => 'text',
			'section'      => 'main_bottom_baners_3',			
			'operator'     => 'and',
		), 

		
			//---------------------Третий банер,второй ряд -------------------------------//
		   // Текст на банере
		   array(
			'id'           => 'main_bottom_text_3_3',
			'label'        => __( 'Третий банер, третий ряд', 'theme-text-domain' ),
			'desc'         => __( 'Текст на банере', 'theme-text-domain' ),				
			'type'         => 'text',
			'section'      => 'main_bottom_baners_3',			
			'operator'     => 'and',
		),
	
			// img
				array(
			'id'           => 'main_bottom_baner_3_3',
			'label'        => __( 'Третий банер, третий ряд', 'theme-text-domain' ),
			'desc'         => sprintf( __( 'Изображение первого банера', 'theme-text-domain' ), apply_filters( 'ot_upload_text', __( 'Send to OptionTree', 'theme-text-domain' ) ), 'FTP' ),			
			'type'         => 'upload',
			'section'      => 'main_bottom_baners_3',			
			'operator'     => 'and',
		),
		
		// Ссылка
		array(
			'id'           => 'main_bottom_link_3_3',
			'label'        => __( 'Третий банер, третий ряд', 'theme-text-domain' ),
			'desc'         => __( 'Ссылка на сайт', 'theme-text-domain' ),			
			'type'         => 'text',
			'section'      => 'main_bottom_baners_3',			
			'operator'     => 'and',
		), 

			//---------------------Четвертый банер,второй ряд -------------------------------//
		   // Текст на банере
		   array(
			'id'           => 'main_bottom_text_3_4',
			'label'        => __( 'Четвертый банер, третий ряд', 'theme-text-domain' ),
			'desc'         => __( 'Текст на банере', 'theme-text-domain' ),				
			'type'         => 'text',
			'section'      => 'main_bottom_baners_3',			
			'operator'     => 'and',
		),
	
			// img
				array(
			'id'           => 'main_bottom_baner_3_4',
			'label'        => __( 'Четвертый банер, третий ряд', 'theme-text-domain' ),
			'desc'         => sprintf( __( 'Изображение первого банера', 'theme-text-domain' ), apply_filters( 'ot_upload_text', __( 'Send to OptionTree', 'theme-text-domain' ) ), 'FTP' ),			
			'type'         => 'upload',
			'section'      => 'main_bottom_baners_3',			
			'operator'     => 'and',
		),
		
		// Ссылка
		array(
			'id'           => 'main_bottom_link_3_4',
			'label'        => __( 'Четвертый банер, третий ряд', 'theme-text-domain' ),
			'desc'         => __( 'Ссылка на сайт', 'theme-text-domain' ),			
			'type'         => 'text',
			'section'      => 'main_bottom_baners_3',			
			'operator'     => 'and',
		), 

			//---------------------Пятый банер,второй ряд -------------------------------//
		   // Текст на банере
		   array(
			'id'           => 'main_bottom_text_3_5',
			'label'        => __( 'Пятый банер, третий ряд', 'theme-text-domain' ),
			'desc'         => __( 'Текст на банере', 'theme-text-domain' ),				
			'type'         => 'text',
			'section'      => 'main_bottom_baners_3',			
			'operator'     => 'and',
		),
	
			// img
				array(
			'id'           => 'main_bottom_baner_3_5',
			'label'        => __( 'Пятый банер, третий ряд', 'theme-text-domain' ),
			'desc'         => sprintf( __( 'Изображение первого банера', 'theme-text-domain' ), apply_filters( 'ot_upload_text', __( 'Send to OptionTree', 'theme-text-domain' ) ), 'FTP' ),			
			'type'         => 'upload',
			'section'      => 'main_bottom_baners_3',			
			'operator'     => 'and',
		),
		
		// Ссылка
		array(
			'id'           => 'main_bottom_link_3_5',
			'label'        => __( 'Пятый банер, третий ряд', 'theme-text-domain' ),
			'desc'         => __( 'Ссылка на сайт', 'theme-text-domain' ),			
			'type'         => 'text',
			'section'      => 'main_bottom_baners_3',			
			'operator'     => 'and',
		), 
		// youtube
		array(
			'id'           => 'youtube_1',
			'label'        => __( 'Первое видео', 'theme-text-domain' ),
			'desc'         => __( 'Ссылка на контент', 'theme-text-domain' ),			
			'type'         => 'text',
			'section'      => 'youtube',			
			'operator'     => 'and',
		), 
		array(
			'id'           => 'youtube_2',
			'label'        => __( 'Второе видео', 'theme-text-domain' ),
			'desc'         => __( 'Ссылка на контент', 'theme-text-domain' ),			
			'type'         => 'text',
			'section'      => 'youtube',			
			'operator'     => 'and',
		),
		array(
			'id'           => 'youtube_3',
			'label'        => __( 'Третье видео (в центре)', 'theme-text-domain' ),
			'desc'         => __( 'Ссылка на контент', 'theme-text-domain' ),			
			'type'         => 'text',
			'section'      => 'youtube',			
			'operator'     => 'and',
		),
		array(
			'id'           => 'youtube_4',
			'label'        => __( 'Четвертое видео', 'theme-text-domain' ),
			'desc'         => __( 'Ссылка на контент', 'theme-text-domain' ),			
			'type'         => 'text',
			'section'      => 'youtube',			
			'operator'     => 'and',
		),
		array(
			'id'           => 'youtube_5',
			'label'        => __( 'Пятое видео', 'theme-text-domain' ),
			'desc'         => __( 'Ссылка на контент', 'theme-text-domain' ),			
			'type'         => 'text',
			'section'      => 'youtube',			
			'operator'     => 'and',
		),




		// Ниже примеры настроек
		
			array(
				'id'           => 'demo_background',
				'label'        => __( 'Background', 'theme-text-domain' ),
				'desc'         => sprintf( __( 'The Background option type is for adding background styles to your theme either dynamically via the CSS option type below or manually with %1$s. The Background option type has filters that allow you to remove fields or change the defaults. For example, you can filter %2$s to remove unwanted fields from all Background options or an individual one. You can also filter %3$s. These filters allow you to fine tune the select lists for your specific needs.', 'theme-text-domain' ), '<code>ot_get_option()</code>', '<code>ot_recognized_background_fields</code>', '<code>ot_recognized_background_repeat</code>, <code>ot_recognized_background_attachment</code>, <code>ot_recognized_background_position</code>, ' . __( 'and', 'theme-text-domain' ) . ' <code>ot_type_background_size_choices</code>' ),
				'std'          => '',
				'type'         => 'background',
				'section'      => 'option_types',
				'rows'         => '',
				'post_type'    => '',
				'taxonomy'     => '',
				'min_max_step' => '',
				'class'        => '',
				'condition'    => '',
				'operator'     => 'and',
			),
			array(
				'id'           => 'demo_border',
				'label'        => __( 'Border', 'theme-text-domain' ),
				'desc'         => __( 'The Border option type is used to set width, unit, style, and color values.', 'theme-text-domain' ),
				'std'          => '',
				'type'         => 'border',
				'section'      => 'option_types',
				'rows'         => '',
				'post_type'    => '',
				'taxonomy'     => '',
				'min_max_step' => '',
				'class'        => '',
				'condition'    => '',
				'operator'     => 'and',
			),
			array(
				'id'           => 'demo_box_shadow',
				'label'        => __( 'Box Shadow', 'theme-text-domain' ),
				'desc'         => sprintf( __( 'The Box Shadow option type is used to set %1$s, %2$s, %3$s, %4$s, %5$s, and %6$s values.', 'theme-text-domain' ), '<code>inset</code>', '<code>offset-x</code>', '<code>offset-y</code>', '<code>blur-radius</code>', '<code>spread-radius</code>', '<code>color</code>' ),
				'std'          => '',
				'type'         => 'box-shadow',
				'section'      => 'option_types',
				'rows'         => '',
				'post_type'    => '',
				'taxonomy'     => '',
				'min_max_step' => '',
				'class'        => '',
				'condition'    => '',
				'operator'     => 'and',
			),
			array(
				'id'           => 'demo_category_checkbox',
				'label'        => __( 'Category Checkbox', 'theme-text-domain' ),
				'desc'         => __( 'The Category Checkbox option type displays a list of category IDs. It allows the user to check multiple category IDs and will return that value as an array for use in a custom function or loop.', 'theme-text-domain' ),
				'std'          => '',
				'type'         => 'category-checkbox',
				'section'      => 'option_types',
				'rows'         => '',
				'post_type'    => '',
				'taxonomy'     => '',
				'min_max_step' => '',
				'class'        => '',
				'condition'    => '',
				'operator'     => 'and',
			),
			array(
				'id'           => 'demo_category_select',
				'label'        => __( 'Category Select', 'theme-text-domain' ),
				'desc'         => __( 'The Category Select option type displays a list of category IDs. It allows the user to select only one category ID and will return that value for use in a custom function or loop.', 'theme-text-domain' ),
				'std'          => '',
				'type'         => 'category-select',
				'section'      => 'option_types',
				'rows'         => '',
				'post_type'    => '',
				'taxonomy'     => '',
				'min_max_step' => '',
				'class'        => '',
				'condition'    => '',
				'operator'     => 'and',
			),
			array(
				'id'           => 'demo_checkbox',
				'label'        => __( 'Checkbox', 'theme-text-domain' ),
				'desc'         => __( 'The Checkbox option type displays a group of choices. It allows the user to check multiple choices and will return that value as an array for use in a custom function or loop.', 'theme-text-domain' ),
				'std'          => '',
				'type'         => 'checkbox',
				'section'      => 'option_types',
				'rows'         => '',
				'post_type'    => '',
				'taxonomy'     => '',
				'min_max_step' => '',
				'class'        => '',
				'condition'    => '',
				'operator'     => 'and',
				'choices'      => array(
					array(
						'value' => 'no',
						'label' => __( 'No', 'theme-text-domain' ),
						'src'   => '',
					),
					array(
						'value' => 'Yes',
						'label' => __( 'Yes', 'theme-text-domain' ),
						'src'   => '',
					),
				),
			),
			array(
				'id'           => 'demo_colorpicker',
				'label'        => __( 'Colorpicker', 'theme-text-domain' ),
				'desc'         => __( 'The Colorpicker option type saves a hexadecimal color code for use in CSS. Use it to modify the color of something in your theme.', 'theme-text-domain' ),
				'std'          => '',
				'type'         => 'colorpicker',
				'section'      => 'option_types',
				'rows'         => '',
				'post_type'    => '',
				'taxonomy'     => '',
				'min_max_step' => '',
				'class'        => '',
				'condition'    => '',
				'operator'     => 'and',
			),
			array(
				'id'           => 'demo_colorpicker_opacity',
				'label'        => __( 'Colorpicker Opacity', 'theme-text-domain' ),
				'desc'         => __( 'Colorpicker Opacity', 'option-tree-theme' ),
				'desc'         => sprintf( __( 'The Colorpicker Opacity option type saves an rgba color value for use in CSS. To add opacity to other colorpickers add the %1$s class to the %2$s array.', 'option-tree' ), '<code>ot-colorpicker-opacity</code>', '<code>$args</code>' ),
				'std'          => '',
				'type'         => 'colorpicker-opacity',
				'section'      => 'option_types',
				'rows'         => '',
				'post_type'    => '',
				'taxonomy'     => '',
				'min_max_step' => '',
				'class'        => '',
				'condition'    => '',
				'operator'     => 'and',
			),
			array(
				'id'           => 'demo_css',
				'label'        => __( 'CSS', 'theme-text-domain' ),
				'desc'         => '<p>' . sprintf( __( 'The CSS option type is a textarea that when used properly can add dynamic CSS to your theme from within OptionTree. Unfortunately, due server limitations you will need to create a file named %1$s at the root level of your theme and change permissions using %2$s so the server can write to the file. I have had the most success setting this single file to %3$s but feel free to play around with permissions until everything is working. A good starting point is %4$s. When the server can save to the file, CSS will automatically be updated when you save your Theme Options.', 'theme-text-domain' ), '<code>dynamic.css</code>', '<code>chmod</code>', '<code>0777</code>', '<code>0666</code>' ) . '</p><p>' . sprintf( __( 'This example assumes you have an option with the ID of %1$s. Which means this option will automatically insert the value of %1$s into the %2$s when the Theme Options are saved.', 'theme-text-domain' ), '<code>demo_background</code>', '<code>dynamic.css</code>' ) . '</p>',
				'std'          => '#custom {
  {{demo_background}}
}',
				'type'         => 'css',
				'section'      => 'option_types',
				'rows'         => '20',
				'post_type'    => '',
				'taxonomy'     => '',
				'min_max_step' => '',
				'class'        => '',
				'condition'    => '',
				'operator'     => 'and',
			),
			array(
				'id'           => 'demo_custom_post_type_checkbox',
				'label'        => __( 'Custom Post Type Checkbox', 'theme-text-domain' ),
				'desc'         => sprintf( __( 'The Custom Post Type Select option type displays a list of IDs from any available WordPress post type or custom post type. It allows the user to check multiple post IDs for use in a custom function or loop. Requires at least one valid %1$s in the %1$s field.', 'theme-text-domain' ), '<code>post_type</code>' ),
				'std'          => '',
				'type'         => 'custom-post-type-checkbox',
				'section'      => 'option_types',
				'rows'         => '',
				'post_type'    => 'post',
				'taxonomy'     => '',
				'min_max_step' => '',
				'class'        => '',
				'condition'    => '',
				'operator'     => 'and',
			),
			array(
				'id'           => 'demo_custom_post_type_select',
				'label'        => __( 'Custom Post Type Select', 'theme-text-domain' ),
				'desc'         => sprintf( __( 'The Custom Post Type Select option type displays a list of IDs from any available WordPress post type or custom post type. It will return a single post ID for use in a custom function or loop. Requires at least one valid %1$s in the %1$s field.', 'theme-text-domain' ), '<code>post_type</code>' ),
				'std'          => '',
				'type'         => 'custom-post-type-select',
				'section'      => 'option_types',
				'rows'         => '',
				'post_type'    => 'post',
				'taxonomy'     => '',
				'min_max_step' => '',
				'class'        => '',
				'condition'    => '',
				'operator'     => 'and',
			),
			array(
				'id'           => 'demo_date_picker',
				'label'        => __( 'Date Picker', 'theme-text-domain' ),
				'desc'         => __( 'The Date Picker option type is tied to a standard form input field which displays a calendar pop-up that allow the user to pick any date when focus is given to the input field. The returned value is a date formatted string.', 'theme-text-domain' ),
				'std'          => '',
				'type'         => 'date-picker',
				'section'      => 'option_types',
				'rows'         => '',
				'post_type'    => '',
				'taxonomy'     => '',
				'min_max_step' => '',
				'class'        => '',
				'condition'    => '',
				'operator'     => 'and',
			),
			array(
				'id'           => 'demo_date_time_picker',
				'label'        => __( 'Date Time Picker', 'theme-text-domain' ),
				'desc'         => __( 'The Date Time Picker option type is tied to a standard form input field which displays a calendar pop-up that allow the user to pick any date and time when focus is given to the input field. The returned value is a date and time formatted string.', 'theme-text-domain' ),
				'std'          => '',
				'type'         => 'date-time-picker',
				'section'      => 'option_types',
				'rows'         => '',
				'post_type'    => '',
				'taxonomy'     => '',
				'min_max_step' => '',
				'class'        => '',
				'condition'    => '',
				'operator'     => 'and',
			),
			array(
				'id'           => 'demo_dimension',
				'label'        => __( 'Dimension', 'theme-text-domain' ),
				'desc'         => __( 'The Dimension option type is used to set width and height values.', 'theme-text-domain' ),
				'std'          => '',
				'type'         => 'dimension',
				'section'      => 'option_types',
				'rows'         => '',
				'post_type'    => '',
				'taxonomy'     => '',
				'min_max_step' => '',
				'class'        => '',
				'condition'    => '',
				'operator'     => 'and',
			),
			array(
				'id'           => 'demo_gallery',
				'label'        => __( 'Gallery', 'theme-text-domain' ),
				'desc'         => __( 'The Gallery option type saves a comma separated list of image attachment IDs. You will need to create a front-end function to display the images in your theme.', 'theme-text-domain' ),
				'std'          => '',
				'type'         => 'gallery',
				'section'      => 'option_types',
				'rows'         => '',
				'post_type'    => '',
				'taxonomy'     => '',
				'min_max_step' => '',
				'class'        => '',
				'condition'    => '',
				'operator'     => 'and',
			),
			array(
				'id'           => 'demo_gallery_shortcode',
				'label'        => __( 'Gallery Shortcode', 'theme-text-domain' ),
				'desc'         => sprintf( __( 'The Gallery option type can also be saved as a shortcode by adding %s to the class attribute. Using the Gallery option type in this manner will result in a better user experience as you\'re able to save the link, column, and order settings.', 'theme-text-domain' ), '<code>ot-gallery-shortcode</code>' ),
				'std'          => '',
				'type'         => 'gallery',
				'section'      => 'option_types',
				'rows'         => '',
				'post_type'    => '',
				'taxonomy'     => '',
				'min_max_step' => '',
				'class'        => 'ot-gallery-shortcode',
				'condition'    => '',
				'operator'     => 'and',
			),
			array(
				'id'           => 'demo_google_fonts',
				'label'        => __( 'Google Fonts', 'theme-text-domain' ),
				'desc'         => sprintf( __( 'The Google Fonts option type will dynamically enqueue any number of Google Web Fonts into the document %1$s. As well, once the option has been saved each font family will automatically be inserted into the %2$s array for the Typography option type. You can further modify the font stack by using the %3$s filter, which is passed the %4$s, %5$s, and %6$s parameters. The %6$s parameter is being passed from %7$s, so it will be the ID of a Typography option type. This will allow you to add additional web safe fonts to individual font families on an as-need basis.', 'theme-text-domain' ), '<code>HEAD</code>', '<code>font-family</code>', '<code>ot_google_font_stack</code>', '<code>$font_stack</code>', '<code>$family</code>', '<code>$field_id</code>', '<code>ot_recognized_font_families</code>' ),
				'std'          => array(
					array(
						'family'   => 'opensans',
						'variants' => array( '300', '300italic', 'regular', 'italic', '600', '600italic' ),
						'subsets'  => array( 'latin' ),
					),
				),
				'type'         => 'google-fonts',
				'section'      => 'option_types',
				'rows'         => '',
				'post_type'    => '',
				'taxonomy'     => '',
				'min_max_step' => '',
				'class'        => '',
				'condition'    => '',
				'operator'     => 'and',
			),
			array(
				'id'           => 'demo_javascript',
				'label'        => __( 'JavaScript', 'theme-text-domain' ),
				'desc'         => '<p>' . sprintf( __( 'The JavaScript option type is a textarea that uses the %s code editor to highlight your JavaScript and display errors as you type.', 'theme-text-domain' ), '<code>ace.js</code>' ) . '</p>',
				'std'          => '',
				'type'         => 'javascript',
				'section'      => 'option_types',
				'rows'         => '20',
				'post_type'    => '',
				'taxonomy'     => '',
				'min_max_step' => '',
				'class'        => '',
				'condition'    => '',
				'operator'     => 'and',
			),
			array(
				'id'           => 'demo_link_color',
				'label'        => __( 'Link Color', 'theme-text-domain' ),
				'desc'         => __( 'The Link Color option type is used to set all link color states.', 'theme-text-domain' ),
				'std'          => '',
				'type'         => 'link-color',
				'section'      => 'option_types',
				'rows'         => '',
				'post_type'    => '',
				'taxonomy'     => '',
				'min_max_step' => '',
				'class'        => '',
				'condition'    => '',
				'operator'     => 'and',
			),
			array(
				'id'           => 'demo_list_item',
				'label'        => __( 'List Item', 'theme-text-domain' ),
				'desc'         => __( 'The List Item option type allows for a great deal of customization. You can add settings to the List Item and those settings will be displayed to the user when they add a new List Item. Typical use is for creating sliding content or blocks of code for custom layouts.', 'theme-text-domain' ),
				'std'          => '',
				'type'         => 'list-item',
				'section'      => 'option_types',
				'rows'         => '',
				'post_type'    => '',
				'taxonomy'     => '',
				'min_max_step' => '',
				'class'        => '',
				'condition'    => '',
				'operator'     => 'and',
				'settings'     => array(
					array(
						'id'           => 'demo_list_item_content',
						'label'        => __( 'Content', 'theme-text-domain' ),
						'desc'         => '',
						'std'          => '',
						'type'         => 'textarea-simple',
						'rows'         => '10',
						'post_type'    => '',
						'taxonomy'     => '',
						'min_max_step' => '',
						'class'        => '',
						'condition'    => '',
						'operator'     => 'and',
					),
				),
			),
			array(
				'id'           => 'demo_measurement',
				'label'        => __( 'Measurement', 'theme-text-domain' ),
				'desc'         => sprintf( __( 'The Measurement option type is a mix of input and select fields. The text input excepts a value and the select lets you choose the unit of measurement to add to that value. Currently the default units are %1$s, %2$s, %3$s, and %4$s. However, you can change them with the %5$s filter.', 'theme-text-domain' ), '<code>px</code>', '<code>%</code>', '<code>em</code>', '<code>pt</code>', '<code>ot_measurement_unit_types</code>' ),
				'std'          => '',
				'type'         => 'measurement',
				'section'      => 'option_types',
				'rows'         => '',
				'post_type'    => '',
				'taxonomy'     => '',
				'min_max_step' => '',
				'class'        => '',
				'condition'    => '',
				'operator'     => 'and',
			),
			array(
				'id'           => 'demo_numeric_slider',
				'label'        => __( 'Numeric Slider', 'theme-text-domain' ),
				'desc'         => __( 'The Numeric Slider option type displays a jQuery UI slider. It will return a single numerical value for use in a custom function or loop.', 'theme-text-domain' ),
				'std'          => '',
				'type'         => 'numeric-slider',
				'section'      => 'option_types',
				'rows'         => '',
				'post_type'    => '',
				'taxonomy'     => '',
				'min_max_step' => '-500,5000,100',
				'class'        => '',
				'condition'    => '',
				'operator'     => 'and',
			),
			array(
				'id'           => 'demo_on_off',
				'label'        => __( 'On/Off', 'theme-text-domain' ),
				'desc'         => sprintf( __( 'The On/Off option type displays a simple switch that can be used to turn things on or off. The saved return value is either %1$s or %2$s.', 'theme-text-domain' ), '<code>on</code>', '<code>off</code>' ),
				'std'          => '',
				'type'         => 'on-off',
				'section'      => 'option_types',
				'rows'         => '',
				'post_type'    => '',
				'taxonomy'     => '',
				'min_max_step' => '',
				'class'        => '',
				'condition'    => '',
				'operator'     => 'and',
			),
			array(
				'id'           => 'demo_page_checkbox',
				'label'        => __( 'Page Checkbox', 'theme-text-domain' ),
				'desc'         => __( 'The Page Checkbox option type displays a list of page IDs. It allows the user to check multiple page IDs for use in a custom function or loop.', 'theme-text-domain' ),
				'std'          => '',
				'type'         => 'page-checkbox',
				'section'      => 'option_types',
				'rows'         => '',
				'post_type'    => '',
				'taxonomy'     => '',
				'min_max_step' => '',
				'class'        => '',
				'condition'    => '',
				'operator'     => 'and',
			),
			array(
				'id'           => 'demo_page_select',
				'label'        => __( 'Page Select', 'theme-text-domain' ),
				'desc'         => __( 'The Page Select option type displays a list of page IDs. It will return a single page ID for use in a custom function or loop.', 'theme-text-domain' ),
				'std'          => '',
				'type'         => 'page-select',
				'section'      => 'option_types',
				'rows'         => '',
				'post_type'    => '',
				'taxonomy'     => '',
				'min_max_step' => '',
				'class'        => '',
				'condition'    => '',
				'operator'     => 'and',
			),
			array(
				'id'           => 'demo_post_checkbox',
				'label'        => __( 'Post Checkbox', 'theme-text-domain' ),
				'desc'         => __( 'The Post Checkbox option type displays a list of post IDs. It allows the user to check multiple post IDs for use in a custom function or loop.', 'theme-text-domain' ),
				'std'          => '',
				'type'         => 'post-checkbox',
				'section'      => 'option_types',
				'rows'         => '',
				'post_type'    => '',
				'taxonomy'     => '',
				'min_max_step' => '',
				'class'        => '',
				'condition'    => '',
				'operator'     => 'and',
			),
			array(
				'id'           => 'demo_post_select',
				'label'        => __( 'Post Select', 'theme-text-domain' ),
				'desc'         => __( 'The Post Select option type displays a list of post IDs. It will return a single post ID for use in a custom function or loop.', 'theme-text-domain' ),
				'std'          => '',
				'type'         => 'post-select',
				'section'      => 'option_types',
				'rows'         => '',
				'post_type'    => '',
				'taxonomy'     => '',
				'min_max_step' => '',
				'class'        => '',
				'condition'    => '',
				'operator'     => 'and',
			),
			array(
				'id'           => 'demo_radio',
				'label'        => __( 'Radio', 'theme-text-domain' ),
				'desc'         => __( 'The Radio option type displays a group of choices. It allows the user to choose one and will return that value as a string for use in a custom function or loop.', 'theme-text-domain' ),
				'std'          => '',
				'type'         => 'radio',
				'section'      => 'option_types',
				'rows'         => '',
				'post_type'    => '',
				'taxonomy'     => '',
				'min_max_step' => '',
				'class'        => '',
				'condition'    => '',
				'operator'     => 'and',
				'choices'      => array(
					array(
						'value' => 'yes',
						'label' => __( 'Yes', 'theme-text-domain' ),
						'src'   => '',
					),
					array(
						'value' => 'no',
						'label' => __( 'No', 'theme-text-domain' ),
						'src'   => '',
					),
					array(
						'value' => 'maybe',
						'label' => __( 'Maybe', 'theme-text-domain' ),
						'src'   => '',
					),
				),
			),
			array(
				'id'           => 'demo_radio_image',
				'label'        => __( 'Radio Image', 'theme-text-domain' ),
				'desc'         => sprintf( __( 'the Radio Images option type is primarily used for layouts. However, you can filter the image list using %s. As well, you can add your own custom images using the choices array.', 'theme-text-domain' ), '<code>ot_radio_images</code>' ),
				'std'          => 'right-sidebar',
				'type'         => 'radio-image',
				'section'      => 'option_types',
				'rows'         => '',
				'post_type'    => '',
				'taxonomy'     => '',
				'min_max_step' => '',
				'class'        => '',
				'condition'    => '',
				'operator'     => 'and',
			),
			array(
				'id'           => 'demo_select',
				'label'        => __( 'Select', 'theme-text-domain' ),
				'desc'         => __( 'The Select option type is used to list anything you want that would be chosen from a select list.', 'theme-text-domain' ),
				'std'          => '',
				'type'         => 'select',
				'section'      => 'option_types',
				'rows'         => '',
				'post_type'    => '',
				'taxonomy'     => '',
				'min_max_step' => '',
				'class'        => '',
				'condition'    => '',
				'operator'     => 'and',
				'choices'      => array(
					array(
						'value' => '',
						'label' => __( '-- Choose One --', 'theme-text-domain' ),
						'src'   => '',
					),
					array(
						'value' => 'yes',
						'label' => __( 'Yes', 'theme-text-domain' ),
						'src'   => '',
					),
					array(
						'value' => 'no',
						'label' => __( 'No', 'theme-text-domain' ),
						'src'   => '',
					),
					array(
						'value' => 'maybe',
						'label' => __( 'Maybe', 'theme-text-domain' ),
						'src'   => '',
					),
				),
			),
			array(
				'id'           => 'demo_sidebar_select',
				'label'        => __( 'Sidebar Select', 'theme-text-domain' ),
				'desc'         => '<p>' . sprintf( __( 'This option type makes it possible for users to select a WordPress registered sidebar to use on a specific area. By using the two provided filters, %1$s, and %2$s we can be selective about which sidebars are available on a specific content area.', 'theme-text-domain' ), '<code>ot_recognized_sidebars</code>', '<code>ot_recognized_sidebars_{$field_id}</code>' ) . '</p><p>' . sprintf( __( 'For example, if we create a WordPress theme that provides the ability to change the Blog Sidebar and we don\'t want to have the footer sidebars available on this area, we can unset those sidebars either manually or by using a regular expression if we have a common name like %s.', 'theme-text-domain' ), '<code>footer-sidebar-$i</code>' ) . '</p>',
				'std'          => '',
				'type'         => 'sidebar-select',
				'section'      => 'option_types',
				'rows'         => '',
				'post_type'    => '',
				'taxonomy'     => '',
				'min_max_step' => '',
				'class'        => '',
				'condition'    => '',
				'operator'     => 'and',
			),
			array(
				'id'           => 'demo_social_links',
				'label'        => __( 'Social Links', 'theme-text-domain' ),
				'desc'         => '<p>' . sprintf( __( 'The Social Links option type utilizes a drag & drop interface to create a list of social links. There are a few filters that make extending this option type easy. You can set the %1$s filter to %2$s and turn off loading default values. Use the %3$s filter to change the default values that are loaded. To filter the settings array use the %4$s filter.', 'theme-text-domain' ), '<code>ot_type_social_links_load_defaults</code>', '<code>false</code>', '<code>ot_type_social_links_defaults</code>', '<code>ot_social_links_settings</code>' ) . '</p>',
				'std'          => '',
				'type'         => 'social-links',
				'section'      => 'option_types',
				'rows'         => '',
				'post_type'    => '',
				'taxonomy'     => '',
				'min_max_step' => '',
				'class'        => '',
				'condition'    => '',
				'operator'     => 'and',
			),
			array(
				'id'           => 'demo_spacing',
				'label'        => __( 'Spacing', 'theme-text-domain' ),
				'desc'         => __( 'The Spacing option type is used to set spacing values such as padding or margin in the form of top, right, bottom, and left.', 'theme-text-domain' ),
				'std'          => '',
				'type'         => 'spacing',
				'section'      => 'option_types',
				'rows'         => '',
				'post_type'    => '',
				'taxonomy'     => '',
				'min_max_step' => '',
				'class'        => '',
				'condition'    => '',
				'operator'     => 'and',
			),
			array(
				'id'           => 'demo_tag_checkbox',
				'label'        => __( 'Tag Checkbox', 'theme-text-domain' ),
				'desc'         => __( 'The Tag Checkbox option type displays a list of tag IDs. It allows the user to check multiple tag IDs and will return that value as an array for use in a custom function or loop.', 'theme-text-domain' ),
				'std'          => '',
				'type'         => 'tag-checkbox',
				'section'      => 'option_types',
				'rows'         => '',
				'post_type'    => '',
				'taxonomy'     => '',
				'min_max_step' => '',
				'class'        => '',
				'condition'    => '',
				'operator'     => 'and',
			),
			array(
				'id'           => 'demo_tag_select',
				'label'        => __( 'Tag Select', 'theme-text-domain' ),
				'desc'         => __( 'The Tag Select option type displays a list of tag IDs. It allows the user to select only one tag ID and will return that value for use in a custom function or loop.', 'theme-text-domain' ),
				'std'          => '',
				'type'         => 'tag-select',
				'section'      => 'option_types',
				'rows'         => '',
				'post_type'    => '',
				'taxonomy'     => '',
				'min_max_step' => '',
				'class'        => '',
				'condition'    => '',
				'operator'     => 'and',
			),
			array(
				'id'           => 'demo_taxonomy_checkbox',
				'label'        => __( 'Taxonomy Checkbox', 'theme-text-domain' ),
				'desc'         => __( 'The Taxonomy Checkbox option type displays a list of taxonomy IDs. It allows the user to check multiple taxonomy IDs and will return that value as an array for use in a custom function or loop.', 'theme-text-domain' ),
				'std'          => '',
				'type'         => 'taxonomy-checkbox',
				'section'      => 'option_types',
				'rows'         => '',
				'post_type'    => '',
				'taxonomy'     => 'category,post_tag',
				'min_max_step' => '',
				'class'        => '',
				'condition'    => '',
				'operator'     => 'and',
			),
			array(
				'id'           => 'demo_taxonomy_select',
				'label'        => __( 'Taxonomy Select', 'theme-text-domain' ),
				'desc'         => __( 'The Taxonomy Select option type displays a list of taxonomy IDs. It allows the user to select only one taxonomy ID and will return that value for use in a custom function or loop.', 'theme-text-domain' ),
				'std'          => '',
				'type'         => 'taxonomy-select',
				'section'      => 'option_types',
				'rows'         => '',
				'post_type'    => '',
				'taxonomy'     => 'category,post_tag',
				'min_max_step' => '',
				'class'        => '',
				'condition'    => '',
				'operator'     => 'and',
			),
			array(
				'id'           => 'demo_text',
				'label'        => __( 'Text', 'theme-text-domain' ),
				'desc'         => __( 'The Text option type is used to save string values. For example, any optional or required text that is of reasonably short character length.', 'theme-text-domain' ),
				'std'          => '',
				'type'         => 'text',
				'section'      => 'option_types',
				'rows'         => '',
				'post_type'    => '',
				'taxonomy'     => '',
				'min_max_step' => '',
				'class'        => '',
				'condition'    => '',
				'operator'     => 'and',
			),
			array(
				'id'           => 'demo_textarea',
				'label'        => __( 'Textarea', 'theme-text-domain' ),
				'desc'         => sprintf( __( 'The Textarea option type is a large string value used for custom code or text in the theme and has a WYSIWYG editor that can be filtered to change the how it is displayed. For example, you can filter %1$s, %2$s, %3$s, and %4$s.', 'theme-text-domain' ), '<code>wpautop</code>', '<code>media_buttons</code>', '<code>tinymce</code>', '<code>quicktags</code>' ),
				'std'          => '',
				'type'         => 'textarea',
				'section'      => 'option_types',
				'rows'         => '15',
				'post_type'    => '',
				'taxonomy'     => '',
				'min_max_step' => '',
				'class'        => '',
				'condition'    => '',
				'operator'     => 'and',
			),
			array(
				'id'           => 'demo_textarea_simple',
				'label'        => __( 'Textarea Simple', 'theme-text-domain' ),
				'desc'         => __( 'The Textarea Simple option type is a large string value used for custom code or text in the theme. The Textarea Simple does not have a WYSIWYG editor.', 'theme-text-domain' ),
				'std'          => '',
				'type'         => 'textarea-simple',
				'section'      => 'option_types',
				'rows'         => '10',
				'post_type'    => '',
				'taxonomy'     => '',
				'min_max_step' => '',
				'class'        => '',
				'condition'    => '',
				'operator'     => 'and',
			),
			array(
				'id'           => 'demo_textblock',
				'label'        => __( 'Textblock', 'theme-text-domain' ),
				'desc'         => __( 'The Textblock option type is used only on the Theme Option page. It will allow you to create & display HTML, but has no title above the text block. You can then use the Textblock to add a more detailed set of instruction on how the options are used in your theme. You would never use this in your themes template files as it does not save a value.', 'theme-text-domain' ),
				'std'          => '',
				'type'         => 'textblock',
				'section'      => 'option_types',
				'rows'         => '',
				'post_type'    => '',
				'taxonomy'     => '',
				'min_max_step' => '',
				'class'        => '',
				'condition'    => '',
				'operator'     => 'and',
			),
			array(
				'id'           => 'demo_textblock_titled',
				'label'        => __( 'Textblock Titled', 'theme-text-domain' ),
				'desc'         => __( 'The Textblock Titled option type is used only on the Theme Option page. It will allow you to create & display HTML, and has a title above the text block. You can then use the Textblock Titled to add a more detailed set of instruction on how the options are used in your theme. You would never use this in your themes template files as it does not save a value.', 'theme-text-domain' ),
				'std'          => '',
				'type'         => 'textblock-titled',
				'section'      => 'option_types',
				'rows'         => '',
				'post_type'    => '',
				'taxonomy'     => '',
				'min_max_step' => '',
				'class'        => '',
				'condition'    => '',
				'operator'     => 'and',
			),
			array(
				'id'           => 'demo_typography',
				'label'        => __( 'Typography', 'theme-text-domain' ),
				'desc'         => sprintf( __( 'The Typography option type is for adding typography styles to your theme either dynamically via the CSS option type above or manually with %1$s. The Typography option type has filters that allow you to remove fields or change the defaults. For example, you can filter %2$s to remove unwanted fields from all Background options or an individual one. You can also filter %3$s. These filters allow you to fine tune the select lists for your specific needs.', 'theme-text-domain' ), '<code>ot_get_option()</code>', '<code>ot_recognized_typography_fields</code>', '<code>ot_recognized_font_families</code>, <code>ot_recognized_font_sizes</code>, <code>ot_recognized_font_styles</code>, <code>ot_recognized_font_variants</code>, <code>ot_recognized_font_weights</code>, <code>ot_recognized_letter_spacing</code>, <code>ot_recognized_line_heights</code>, <code>ot_recognized_text_decorations</code> ' . __( 'and', 'theme-text-domain' ) . ' <code>ot_recognized_text_transformations</code>' ),
				'std'          => '',
				'type'         => 'typography',
				'section'      => 'option_types',
				'rows'         => '',
				'post_type'    => '',
				'taxonomy'     => '',
				'min_max_step' => '',
				'class'        => '',
				'condition'    => '',
				'operator'     => 'and',
			),
			array(
				'id'           => 'demo_upload',
				'label'        => __( 'Upload', 'theme-text-domain' ),
				'desc'         => sprintf( __( 'The Upload option type is used to upload any WordPress supported media. After uploading, users are required to press the "%1$s" button in order to populate the input with the URI of that media. There is one caveat of this feature. If you import the theme options and have uploaded media on one site the old URI will not reflect the URI of your new site. You will have to re-upload or %2$s any media to your new server and change the URIs if necessary.', 'theme-text-domain' ), apply_filters( 'ot_upload_text', __( 'Send to OptionTree', 'theme-text-domain' ) ), 'FTP' ),
				'std'          => '',
				'type'         => 'upload',
				'section'      => 'option_types',
				'rows'         => '',
				'post_type'    => '',
				'taxonomy'     => '',
				'min_max_step' => '',
				'class'        => '',
				'condition'    => '',
				'operator'     => 'and',
			),
			array(
				'id'           => 'demo_upload_attachment_id',
				'label'        => __( 'Upload Attachment ID', 'theme-text-domain' ),
				'desc'         => sprintf( __( 'The Upload option type can also be saved as an attachment ID by adding %s to the class attribute.', 'theme-text-domain' ), '<code>ot-upload-attachment-id</code>' ),
				'std'          => '',
				'type'         => 'upload',
				'section'      => 'option_types',
				'rows'         => '',
				'post_type'    => '',
				'taxonomy'     => '',
				'min_max_step' => '',
				'class'        => 'ot-upload-attachment-id',
				'condition'    => '',
				'operator'     => 'and',
			),
		),
	);

	// Allow settings to be filtered before saving.
	$custom_settings = apply_filters( ot_settings_id() . '_args', $custom_settings );

	// Settings are not the same update the DB.
	if ( $saved_settings !== $custom_settings ) {
		update_option( ot_settings_id(), $custom_settings );
	}

	// Lets OptionTree know the UI Builder is being overridden.
	global $ot_has_custom_theme_options;
	$ot_has_custom_theme_options = true;
}
