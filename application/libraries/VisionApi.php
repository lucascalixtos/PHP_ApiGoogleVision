<?php
# includes the autoloader for libraries installed with composer
require 'vendor/autoload.php';

# imports the Google Cloud client library
use Google\Cloud\Vision\V1\ImageAnnotatorClient;

class VisionApi{

    public function label($img){
        putenv('GOOGLE_APPLICATION_CREDENTIALS=C:\xampp\htdocs\lp6_projeto2\key.json');
        #instantiates a client
        $fileName = './assets/images/'.$img;
        $imageAnnotator = new ImageAnnotatorClient();

        # the name of the image file to annotate

        # prepare the image to be annotated
        $image = file_get_contents($fileName);

        # performs label detection on the image file
        $response = $imageAnnotator->labelDetection($image);
        $labels = $response->getLabelAnnotations();
        $resultado = '';
        if ($labels) {
            foreach ($labels as $label) {
                //$label->getDescription() . PHP_EOL;
                $resultado .= '<br>'.$label->getDescription();
            }
        } else {
            echo('No label found' . PHP_EOL);
        }
        return $resultado;
    }


}

?>