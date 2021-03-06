<?php

	use App\data_002914;
	use App\app_list;

	// Material Control
    // create_menu_1_27();
    function create_menu_1_27(){        
        // ------------------------------------------------------------------------- INITIALIZE
            $status_id      = '1';
            $dmha_id        = '27';
            $parent_id      = NULL;
            $tipe           = '1';
            $urutan         = '0';
            $nama           = 'Material Control';
            $link           = 'javascript:;';
            $deskripsi      = NULL;
            $has_sub        = NULL;
            $icon           = '89';
            $css_js         = NULL;
            $ui             = NULL;
            $tipe_data      = NULL;
            $form           = NULL;
            $kategori       = '9';

        // ------------------------------------------------------------------------- ACTION
            // delete dmha yang sama
            data_002914::double_dmha_checking($dmha_id);

            // delete dmha yang sama
            app_list::double_app_list_checking($dmha_id);

            // insert dmha terbaru            
            //full_insert($STATUS_ID,$DMHA_ID,$PARENT_ID,$TIPE,$URUTAN,$NAMA,$LINK,$DESKRIPSI,$HAS_SUB,$ICON,$CSS_JS,$UI,$TIPE_DATA,$FORM,$KATEGORI)
            data_002914::full_insert($status_id,$dmha_id,$parent_id,$tipe,$urutan,$nama,$link,$deskripsi,$has_sub,$icon,$css_js,$ui,$tipe_data,$form,$kategori);

            // insert dmha terbaru
            app_list::full_insert($dmha_id);
        ////////////////////////////////////////////////////////////////////////////        
    }
