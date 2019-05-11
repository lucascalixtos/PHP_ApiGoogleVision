<?php
# includes the autoloader for libraries installed with composer
require 'vendor/autoload.php';

# imports the Google Cloud client library
use Google\Cloud\Vision\V1\ImageAnnotatorClient;

class VisionApi{

    public function read_file(){
        putenv('GOOGLE_APPLICATION_CREDENTIALS=C:\xampp\htdocs\lp6_projeto\key.json');
        #instantiates a client
        $imageAnnotator = new ImageAnnotatorClient();

        # the name of the image file to annotate
        $fileName = 'C:\xampp\htdocs\lp6_projeto\banco.png';

        # prepare the image to be annotated
        $image = file_get_contents($fileName);

        # performs label detection on the image file
        $response = $imageAnnotator->labelDetection($image);
        $labels = $response->getLabelAnnotations();

        if ($labels) {
            echo("Labels:" . PHP_EOL);
            foreach ($labels as $label) {
                echo($label->getDescription() . PHP_EOL);
            }
        } else {
            echo('No label found' . PHP_EOL);
        }

        

    }


}

?>