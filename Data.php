<?php

$adherent=[
        ["id"=>1,"nom"=>"Diop","prenom"=>"arno"],
        ["id"=>2,"nom"=>"SIk","prenom"=>"arman"],
        ["id"=>3,"nom"=>"SCH","prenom"=>"jul"],
        ["id"=>4,"nom"=>"SALL","prenom"=>"bob"],
     

    ];

    $rayon=[
             ["id"=>1, "genre"=>"litterature"],
             ["id"=>2, "genre"=>"geographie"],
             ["id"=>3, "genre"=>"histoire"],
             

    ];
    $ouvrage=[
        ["id"=>1,"titre"=>"rouge est la couleur","date"=>01/04/22,"etat"=>"dispo","nbrexemp"=>10,"id_auteur"=>1],
        ["id"=>2,"titre"=>" la couleur","date"=>03/03/22,"etat"=>"dispo","nbrexemp"=>1,"id_auteur"=>1],
        ["id"=>3,"titre"=>"la mort","date"=>10/08/22,"etat"=>"dispo","nbrexemp"=>20,"id_auteur"=>2],
        ["id"=>4,"titre"=>"la purge","date_edition"=>11/04/22,"etat"=>"dispo","nbrexemp"=>30,"id_auteur"=>3]
    

];

$Pret[
        ["id"=>1,"date_prise"=>01/03/22,"date_prevu"=>02/03/22,"date_retour"=>04/04/22,"id_ouvrage"=>"la purge","id_ahderent"=>"3"] ,   
        ["id"=>2,"date_prise"=>01/03/22,"date_prevu"=>02/03/22,"date_retour"=>04/04/22,"id_ouvrage"=>"la purge","id_ahderent"=>"2"],
        ["id"=>3,"date_prise"=>01/03/22,"date_prevu"=>02/03/22,"date_retour"=>04/04/22,"id_ouvrage"=>"la purge","id_ahderent"=>"3"] ,       
];
 
$Exemplaire[
        ["id"=>1, "genre"=>"litterature","ouvrage"=>"la mort","etat"=>"True"],
        ["id"=>2, "genre"=>"litterature","ouvrage"=>"la mort","etat"=>"True"],
        ["id"=>3, "genre"=>"","geographie"=>"la mort","etat"=>"True"],
        ["id"=>4, "genre"=>"geographie","ouvrage"=>"la mort","etat"=>"False"],
        ["id"=>5, "genre"=>"litterature","ouvrage"=>"la purge","etat"=>"True"],
]
$auteur[
        ["id"=>1, "nom"=>"Jean","prenom"=>"erick", "profession"=>"avocat"],
        ["id"=>2, "nom"=>"Jean","prenom"=>"erick", "profession"=>"musicien"],
        ["id"=>3, "nom"=>"Jean","prenom"=>"erick", "profession"=>"banquier"],

];
$Exemp_indispo[
    ["id"=>1,"id_exemplaire"=>1,"etat"=>"disparu"],
    ["id"=>2,"id_exemplaire"=>1,"etat"=>"degrader"],
    ["id"=>3,"id_exemplaire"=>1,"etat"=>"disparu"],
];

$RP[
    ["id"=>1,"nom"=>"Zo","prenom"=>"julio"],
    ["id"=>1,"nom"=>"Nordface","prenom"=>"zak"],
];
$RB[
    ["id"=>1,"nom"=>"Said","prenom"=>"Aman"],
    ["id"=>2,"nom"=>"Diop","prenom"=>"jean"],
];
    ?>