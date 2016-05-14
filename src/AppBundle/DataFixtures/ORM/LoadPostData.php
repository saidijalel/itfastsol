<?php
namespace AppBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use AppBundle\Entity\Product;
use AppBundle\Entity\Category;

class LoadProductData implements FixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $p1 = new Product();
        $p1->setTitle("Serveur HP ProLiant DL380e Gen8");
        $p1->setDescription("Le serveur HP ProLiant Gen8 DL380p établit les normes de la prochaine génération de serveurs 2U rack 2 sockets pour l'industrie. Avec une plus grande souplesse de configuration, des performances inégalées, et menant la conception éconergétique du DL380p Gen8 offre la solution parfaite pour les besoins de calcul dynamique des centres de données exigeants d'aujourd'hui.");
        $p1->setCategory("SERVEURS");
        $p1->setPhoto("hp_serveur.jpg");

        $manager->persist($p1);

        $p1 = new Product();
        $p1->setTitle("Imprimante code à barre Zebra 105SL");
        $p1->setDescription("Imprimante code à barre 105SL, Méthode d'impression: transfert thermique / thermique direct, Vitesse d'impression: 302 mm / sec, Résolution:  300 dpi/ 12 pts/mm, Largeur d'impression: 114 mm, Mémoire: 4 Mo de mémoire Flash, 6 Mo de DRAM (standard), Interface: Parallèle, Série et USB, Garantie 1 an, ");
        $p1->setCategory("IMPRESSION");
        $p1->setPhoto("imprimante_code.jpg");

        $manager->persist($p1);

        $manager->flush();
    }
}

