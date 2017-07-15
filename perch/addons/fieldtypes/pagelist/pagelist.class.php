<?php
/**
 * A field type for selecting a page from the site tree.
 *
 * Examples:
 *
 * <perch:content id="page" type="pagelist" label="Page" /> (output="path" by default)
 * <perch:content id="page" type="pagelist" label="Page" output="title" />
 * <perch:content id="page" type="pagelist" label="Page" output="navtext" />
 * 
 */
class PerchFieldType_pagelist extends PerchAPI_FieldType
{

    public function render_inputs($details=array())
    {
        $id  = $this->Tag->input_id();
        $val = '';
        
        if (isset($details[$id]) && $details[$id]!='') {
            $json = $details[$id];
            $val  = $json['id']; 
        }
        
        if (!class_exists('PerchContent_Pages')) {
            include_once(PERCH_CORE.'/apps/content/PerchContent_Pages.class.php');
            include_once(PERCH_CORE.'/apps/content/PerchContent_Page.class.php');
        }


        $Pages = new PerchContent_Pages();
        $pages = $Pages->get_page_tree();

        $opts   = array();
        $opts[] = array('label'=>'', 'value'=>'');

        if (PerchUtil::count($pages)) {
            foreach($pages as $Item) {               
                $depth = $Item->pageDepth()-1;
                if ($depth < 0 ) $depth = 0;         
                $opts[] = array('label'=>str_repeat('-', $depth).' '.$Item->pageNavText(), 'value'=>$Item->id());
            }
        }
       
        if(PerchUtil::count($opts)) {
        	$s = $this->Form->select($id, $opts, $val);
        } else {
        	$s = '-';
        }
        
        return $s;
    }
       
    public function get_raw($post=false, $Item=false) 
    {
        $store  = array();
        $id     = $this->Tag->id();

        if ($post===false) $post = $_POST;
        
        if (isset($post[$id])) {
            $this->raw_item = trim($post[$id]);

            if (!class_exists('PerchContent_Pages')) {
                include_once(PERCH_CORE.'/apps/content/PerchContent_Pages.class.php');
                include_once(PERCH_CORE.'/apps/content/PerchContent_Page.class.php');
            }

            $Pages = new PerchContent_Pages();
            $Page = $Pages->find($this->raw_item);

            if (is_object($Page)) {
                $store['path'] = $Page->pagePath();
                $store['title'] = $Page->pageTitle();
                $store['navtext'] = $Page->pageNavText();
                $store['id'] = $Page->id();

                $store['_default'] = $Page->pagePath();
            }
        }
        return $store;
    }
    
    public function get_processed($raw=false)
    {    
        if (is_array($raw) && isset($raw['path'])) { 
            if ($this->Tag->output()) {
                if (isset($raw[$this->Tag->output()])) {
                    return $raw[$this->Tag->output()];
                }
            }
            return $raw['path'];
        }

        return $raw;
    }
    
    public function get_search_text($raw=false)
    {
		return false;
    }
}
?>