<?php 

class GalleryController {

    public static function indexAction() {  
        return SITE_PATH.'/views/gallery/body.php'; 
    }

    public static function getListAction() {         
        $fileXML = simplexml_load_file(SITE_PATH."/webroot/scaparate/scaparate.xml"); 
        $txt = ''; $img = '';
        foreach($fileXML->children() as $row) { 
            if($row->imagen == '')  {
                $img = '<div class="galleryImg1"><img src="'.WEBROOT.'/scaparate/nohouse.jpg" /></div>';
            }  else  {
                $img = '<div class="galleryImg1"><img src="'.WEBROOT.'/scaparate/'.$row->imagen.'" /></div>';
            }                            
            $txt .= 
            '<tr>
                <td><div class="galleryPa1"><p>'.utf8_decode($row->titulo).'</p><p>'.utf8_decode($row->autor).'</p>
                <p style="font-weight: bold;">'.$row->valor.'</p></div></td>
                <td>'.$img.'</td>
            <tr>';
        }
        return '<table>'.$txt.'</table>';
    }
}
?>