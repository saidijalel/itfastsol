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


        $p1 = new Product();
        $p1->setTitle("Onduleur On-Line Eaton 9130 RM 3000VA Rack 2U");
        $p1->setDescription("Onduleur On-Line Eaton PowerWare 9130 RM - Technologie: On-Line Double Conversion - Format: Rack 2U - Puissance en Volts: 3000 VA - Puissance en Watts: 2700 Watt - Autonomie de Batterie: 20 min (50% de Charge), 8 min (100% de Charge) - Connexion d'entrée: (1) Prise IEC-320-C20 - Prises de Sortie: (8) Prises IEC-320-C13, (1) Prises IEC-320-C19 - Interface: 1 x Port RS232, 1 x Port USB HID standard - Garantie: 1 an");
        $p1->setCategory("RESEAUX & SECURITE");
        $p1->setPhoto("onduleur.jpg");
        $manager->persist($p1);

        $p1 = new Product();
        $p1->setTitle("Camera Mini PTZ IR High Speed Dome - 1036XO");
        $p1->setDescription("Caméra Mini PTZ IR High Speed Dome, IR Distance: jusqu'à 100m, Résolution: 700TVL-IP66, CUP: 64bit, Taux de vitesse: 0.05°/s, Exactitude: 0.01°, Mise à jour du firmware à distance via le bus RS485, 36Xzoom");
        $p1->setCategory("RESEAUX & SECURITE");
        $p1->setPhoto("camera.jpg");
        $manager->persist($p1);


        $p1 = new Product();
        $p1->setTitle("Switch TP-LINK 16 ports Gigabit avec 2 emplacements combinés SFP");
        $p1->setDescription("Switch JetStream™ administrable niveau 2 16 ports Gigabit avec 2 emplacements combinés SFP - Les fonctions QoS L2/L3/L4 et snooping IGMP permettent d'optimiser les applications - Interface: 16 10/100 / 1000Mbps Ports RJ45, 2 Combo 100 / 1000Mbps - Le TL-SG3216 offre IP-MAC-Port-VID Reliure, Port de sécurité, contrôle de la tempête, et DHCP Snooping pour se défendre contre les tempêtes de diffusion - Bande passante/ backplane: 32Gbps - Mémoire tampon: 512KB - Garantie 1 an ");
        $p1->setCategory("RESEAUX & SECURITE");
        $p1->setPhoto("switch.jpg");
        $manager->persist($p1);


        $p1 = new Product();
        $p1->setTitle("Barrière Infrarouge");
        $p1->setDescription("Détecteur de barrière Infrarouge IR200 - Puissance sonore de la sirène 100 dB Volume - Technologie de capteur infrarouge infrarouge - Volume réglable - Dimensions du produit (L x l x h) 12,2 x 8 x 4 cm");
        $p1->setCategory("RESEAUX & SECURITE");
        $p1->setPhoto("barriere_infrarouge.jpg");
        $manager->persist($p1);

        $manager->flush();
    }
}

