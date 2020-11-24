# grafiz-site
le site de grafiz

//// EN DEVELOPPEMENT :
*composer install* => charge l'autoload et les packages*
*npm start* => surveille la compilation de SASS
*composer dump-autoload -o* => mettre à jour l'autoloading

//// EN PRODUCTION :
*npm run purify => supprime le css inutilisé + compression. (il faut modifier le chemin pr le css -> assets/_sass/css/min.css)*
*utliser les CDN pr Fontawesome, Bulma...*

*-----------A FAIRE :*

*la navbar devient en position fixe lors du scroll*

*optimiser le css, comme la répétition des props pr le background-image du header et footer et les animations, faire une mixins*

*faire une sprite pour les images*

*mettre en postion fixe le menu apres avoir cliqué sur le menu burger car celle-ci repousse la section .hero en bas*

*lors du survol d'un menu les autres titres de menu deviennent moins opaque*

*metre les nuages en mouvements a chaques sections*

*animer en JS le scroll de la fleche pr remonter en haut de la page*

*mettre la balise title dans le head*

*mettre en gras les menus de la navbar*

*utiliser font awesom*

*voir pr utiliser des cdn ou pas*

*mettre isactive quang on click sur un lien du menu*

*remplacer les doules quotes(") par les simples quotes(') car plus lourde en performance*

*voir les 'alt' des icons imgs du workflow*

*pr le moment la couleur acive sur le lien de l anavbar est en condition php mais il faut essayer en JS pr voir si ca fai moins ramer*

*optimiser le référencement avec des balises HTML dans le texte en BDD concernant les works*

*mettre tous les éléments qui sont position absolute les centré grace aux mixins*

*vérifier tous les alt des images*

*rectifier les routes pr etre sur de ne jamais tomber sur une erreur de page*
*animer le crayon de la page d'accueil*
*faire les nouveaux works suivants -> macMo, justBnatur et actualisé getMusicOnly*
*exporter les tables Works, Contact et User*
*melanger les catégories des works (branding, packshot...) pr la page works*
*compresser les images*
*créer les comptes sur les réseaux(dribble etc.)*
*faire une boucle php pr les icons du workflow*
*compresser jpeg et utliser jpegopt pr suppr les informations inutiles*