<?php
//Pics_model.php
class Pics_model extends CI_Model {
            
        public function get_pics($slug = FALSE)
        {
            if ($slug === FALSE)
            {
                
            $tags = 'mountain';
            }else{
                $tags = $slug;
            }
            
            $api_key = '0626fb5b4109ca43b9c8decb1956e4f4';
            $perPage = 25;
            $url = 'https://api.flickr.com/services/rest/?method=flickr.photos.search';
            $url.= '&api_key=' . $api_key;
            $url.= '&tags=' . $tags;
            $url.= '&per_page=' . $perPage;
            $url.= '&format=json';
            $url.= '&nojsoncallback=1';
            
            $response = json_decode(file_get_contents($url));
            return $pics = $response->photos->photo;   
        }
}
