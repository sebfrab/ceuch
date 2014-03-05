<?php

class SFGaleriaVideos extends CWidget{
    public $dataProvider;
    
    public function init(){
        parent::init();
        foreach($this->dataProvider as $model){
            $this->cabecera($model->link);
            $this->thumbnail($model->nombre, $model->link);
            $this->tituloVideo($model->nombre);
            $this->cierre();
        } 
    }
    
    public function cabecera($link){
        echo "<div id=\"item\" class=\"col-lg-3 col-md-3 col-sm-4 col-xs-6\">\n";
        echo "<a class=\"video\" href=\"$link\" >\n";
    }
    
    public function thumbnail($nombre, $link){
        $link = $this->get_thumbnail($link, 'hqdefault');
        echo "<div class=\"thumbnail\">";
        echo "<img src=\"$link\"  alt=\"$nombre\">";
        echo "</div>\n";
    }
    
    public function tituloVideo($titulo){
        echo "<p id=\"tituloAlbum\">";
        echo "$titulo";
        echo "</p>\n";
    }
    
    public function cierre(){
        echo "</a>\n";
        echo "</div>\n";
    }
    
    function get_youtube_id($url)
    {
      $query_string = array();
      parse_str(parse_url($url, PHP_URL_QUERY), $query_string);
      $id = $query_string["v"];
      return $id;
    }

    function get_thumbnail($video_url, $quality = 'default')
    {
      $video_id = $this->get_youtube_id($video_url);
      return 'http://img.youtube.com/vi/' . $video_id . '/' . $quality . '.jpg';
    }
    
}
?>
