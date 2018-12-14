<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use App\Entity\Products;
use App\Entity\Category;

class CatalogFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        
        for( $i=1; $i <= 50; $i++ ){
            $randomText = null;
            $randomInteger = rand(1,4);
            switch ($randomInteger) {
                case 1:
                    $randomText ='Canapé en cuir noir 5 places';
                    $randomDesc ='Adoptez le style anglais ! Ce magnifique canapé Club 3 places en croûte de cuir marron bénéficie d\'une assise spacieuse et confortable de L 214 x l 82.5 x L 84.5 cm.b Vous apprécierez son dossier rembourré de mousse et ses larges accoudoirs gages de confort et de bien-être. Esthétiquement, c\'est un accessoire déco vintage au charme authentique. C\'est un modèle d\'élégance qui convient à de nombreux styles d\'intérieur. Profitez dès maintenant de son prix imbattable ! Nos canapés Club existent aussi en version deux places.';
                    $urlImage ='https://media.delamaison.fr/catalog/product/cache/e4d64343b1bc593f1c5348fe05efa4a6/l/0/l001/can1270376-l001_can1270376-image_web_1-l001can1270376-0403-0750-p00.jpg';
                    $cat = 2;
                    $price = 490.90;
                    break;
                case 2:
                    $randomText ='Canapé marron 3 places';
                    $randomDesc ='Tissu 100% polyester Piétement : Bois - Chêne Structure : ressort nosag + 1 cm de mousse de polyuréthane densité 16kg..';
                    $urlImage ='https://media.delamaison.fr/catalog/product/cache/e4d64343b1bc593f1c5348fe05efa4a6/c/d/cdc3569007-cdc3569007-image_web_1-cdc3569007-0403-0750-p00.jpg';
                    $cat = 2;
                    $price = 249.90;
                    break;
                case 3:
                    $randomText ='Canapé en 3 places vert';
                    $randomDesc ='Tissu 100% polyester Piétement : Bois - Chêne Structure : ressort nosag + 1 cm de mousse de polyuréthane densité 16kg..';
                    $urlImage ='https://media.delamaison.fr/catalog/product/cache/e4d64343b1bc593f1c5348fe05efa4a6/c/d/cdf3994002-cdf3994002-image_web_1-cdf3994002-p00.jpg';
                    $cat = 2;
                    $price = 149.90;
                    break;
                    case 4:
                    $randomText ='Table basse';
                    $randomDesc ='Table basse en verre trempé.Dimensions : 160cm*80cm.';
                    $urlImage ='https://media.delamaison.fr/catalog/product/cache/e4d64343b1bc593f1c5348fe05efa4a6/m/s/msa6010446-msa6010446-image_web_1-msa6010446-0101-0750-p00.jpg';
                    $cat =3;
                    $price = 99.90;
                    break;
                default :
                    $randomText ='Canapé bleu vintage';
                    $randomDesc ='Tissu 100% polyester Piétement : Bois - Chêne Structure : ressort nosag + 1 cm de mousse de polyuréthane densité 16kg..';
                    $urlImage ='https://media.delamaison.fr/catalog/product/cache/e4d64343b1bc593f1c5348fe05efa4a6/c/d/cdf3994002-cdf3994002-image_web_1-cdf3994002-p00.jpg';
                    $cat = 2;
                    break;
            }

            $product = new Products();
            $category = new Category();
            $product-> setProductName($randomText)
                    -> setProductDescription($randomDesc)
                    -> setProductImage($urlImage)
                    -> setProductMaker('fabricant')
                    -> setProductPrice($price)
                    -> setTax(20.6)
                    -> setProductCategory(2)
                    -> setCreatedAt(new \DateTime());

            $manager->persist($product);
        }
        $manager->flush();
    }
}
