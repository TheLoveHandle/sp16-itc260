<?php


$this->load->view($this->config->item('theme').'header');

?>

<?php foreach ($pics as $pics_item): ?>
<?php
 $size = 'm';
    $photo_url = '
    http://farm'. $pics_item->farm . '.staticflickr.com/' . $pics_item->server . '/' . $pics_item->id . '_' . $pics_item->secret . '_' . $size . '.jpg';
     echo "<div><img title='" . $pics_item->title . "' src='" . $photo_url . "' /><br />" . $pics_item->title . "</div>";
     
?>

<?php endforeach; ?>
<?php 
$this->load->view($this->config->item('theme').'footer');
?>
