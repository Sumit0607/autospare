<?php
/**
 * @package AutoSpare
 *
 * Plugin Name: AutoSpare Plugin
 * Plugin URI: 
 * Description: This is CodeSaga Plugin
 * Version: 1.0.0
 * Author: Sumit Srivastava
 * Author URI: 
 * License: GPL2 or later
 * Text Domain: Autospare-plugin
 * 
 */


 defined("ABSPATH") or
 die("Hii, What are you doing here? You silly Man");

 if( file_exists( dirname(__FILE__).'/vendor/autoload.php')){
     require_once dirname(__FILE__).'/vendor/autoload.php';
 }

        use Inc\Base\Activate;
        use Inc\Base\Deactivate;
        use Inc\Admin\Admin;

    class AutosparePlugin 
    {
        public $plugin;

        function __construct() 
        {
           // add_action('init', array( $this, 'custom_post_type'));
           $this->plugin = plugin_basename(__FILE__);
        }

       public function register()
        {   
            // add_action('admin_enqueue_scripts', array( $this, 'enqueue'));

            add_action('admin_menu', array( $this, 'add_admin_page'));    
            
            //echo $this->plugin;

           add_filter("plugin_action_links_$this->plugin", array($this, 'settings_link'));
        }
          public function settings_link( $links)
          {

            $settings_link='<a href="admin.php?page=autospare_plugin">Setting</a>';

            array_push($links, $settings_link);

            return $links;

          }  

        public function add_admin_page()
        {

            add_menu_page('AutoSpare Plugin', 'CodeOne','manage_options', 'autospare_plugin', array($this, 'admin_index'),'dashicons-buddicons-activity', 110 );
            add_menu_page('AutoSpare CodeTwo', 'CodeTwo','manage_options', 'autospare_plugincodetwo', array($this, 'CodeTwo'),'dashicons-buddicons-activity', 110 );
            
            add_submenu_page('Code','AutoSpare CodeTwo', 'CodeTwo','manage_options', 'code_page', array($this, 'sumit'), null  );
        }

        public function admin_index()
        {
            require_once plugin_dir_path(__FILE__) . 'templates/admin.php';
            
        }
        public function CodeTwo(){
            require_once plugin_dir_path(__FILE__) . 'templates/codetwo.php';
        }
        public function sumit(){
            require_once plugin_dir_path(__FILE__) . 'templates/new.php';
        }


        function activate() 
        {
            //require_once plugin_dir_path(__FILE__) . 'inc/Activate.php';
            Activate::activate(); 
        }

        function deactivate() {

            //require_once plugin_dir_path(__FILE__) . 'inc/Deactivate.php';
            Deactivate::deactivate();

        }

        // function uninstall() {

        // }

         function custom_post_type() 
         {
            register_post_type('book', ['public' => true, 'label' => 'AutoSpare']);
        }   

        function enqueue() 
        {
            //enqueue all our script
            wp_enqueue_style('mypluginstyle', plugins_url('/assets/mystyle.css', __FILE__ ));
            wp_enqueue_script('mypluginscript', plugins_url('/assets/myscript.js', __FILE__ ));
        } 
    }
    if (class_exists("AutosparePlugin")) 
    {


        $autospareplugin= new AutosparePlugin();
        $autospareplugin->register();
        
    }

    //activation
    register_activation_hook(__FILE__, array($autospareplugin, "activate"));

    //deactivate
    register_deactivation_hook(__FILE__, array($autospareplugin, "deactivate"));

    //uninstall
    // register_uninstall_hook(__FILE__, array($autospareplugin, "uninstall"));


 ?>