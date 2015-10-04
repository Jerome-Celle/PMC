window.onload = function(){
    $('body').addClass('loaded');
}

$(document).ready(function(){
    $("input.text").keyup(function(){
        showHint();
    });
    $("input[name=ordreTri]").click(function(){
        showHint();
    });
});

function showHint() {
    var ordreTri = $('input[name=ordreTri]:checked').val();
    //$(selector).prop('checked')
    var str = $('#PMC_searchtopbar').val();
    if (str.length == 0) { 
        str = "all_movies";
    }

    $.ajax({
        url: './php/search.php',
        type: 'get',
        data: 'q=' + str + '&ordreTri=' + ordreTri,
        success: function(data) {
            var e = document.getElementById("PMC_searchresults");
            e.innerHTML = data;
            var scripts = e.getElementsByTagName('script');
            for(var i=0; i < scripts.length;i++)
            {
                window.eval(scripts[i].text);
            }
        }
    });
}
function affiche(p_annee, p_mois, p_jour, idTable) {
    var listeMois = [[31,29,31,30,31,30,31,31,30,31,30,31],
    [31,28,31,30,31,30,31,31,30,31,30,31],
    [31,28,31,30,31,30,31,31,30,31,30,31],
    [31,28,31,30,31,30,31,31,30,31,30,31]];
    var listeYears = [366,365,365,365];

    var dateActuelle = new Date();
    var dateEvenement;
    var nbMois = 0;
    var nbYears = 0;

    if(p_mois == 99){
        dateEvenement = new Date(p_annee);
        nbYears++;
    } 
    else if(p_jour == 99){
        dateEvenement = new Date(p_annee + "-" + p_mois);
        nbMois++;
    } 
    else{
        dateEvenement = new Date(p_annee + "-" + p_mois + "-" + p_jour);
    }

    var nbJours = Math.ceil((dateEvenement - dateActuelle)/(1000*60*60*24));
    var mois = dateActuelle.getMonth();
    var year = dateActuelle.getFullYear();


    while (nbJours >= listeYears[year%4]){
        nbJours -= listeYears[year%4];
        year++;
        nbYears++;
    }

    while (nbJours >= listeMois[year%4][mois%12]){
        nbJours -= listeMois[year%4][mois%12];
        nbMois++;
        mois++;
    }

    var keyWordYear = nbYears < 2 ?'ANNÉE' : 'ANNÉES';
    var keyWordMonth = nbMois < 2 ?'MOIS' : 'MOIS';
    var keyWordDay = nbJours < 2 ?'JOUR' : 'JOURS';

    if(p_mois == 99){
        nbMois = "?";
    } 
    if(p_mois == 99){
        nbJours = "?";
    }


    document.getElementById(idTable).innerHTML = "<table id='countdown_table'>"+
    "<tbody>" +
    "<tr>" +
    "<td><h1>" + nbYears + "</h1></td>" +
    "<td><h1>" + nbMois + "</h1></td>" +
    "<td><h1>" + nbJours + "</h1></td>" +
    "</tr>" +
    "<tr>" +
    "<td><h6>"+keyWordYear+"</h6></td>" +
    "<td><h6>"+keyWordMonth+"</h6></td>" +
    "<td><h6>"+keyWordDay+"</h6></td>" +
    "</tr>" +
    "</tbody>" +
    "</table>";
    actualisation = window.setTimeout(affiche, 1000*60*60, p_annee, p_mois, p_jour, idTable);
}

function infiniteScroll(){
$(document).ready(function(){ // Quand le document est complètement chargé

    var load = false; // aucun chargement de commentaire n'est en cours

    /* la fonction offset permet de récupérer la valeur X et Y d'un élément
    dans une page. Ici on récupère la position du dernier div qui 
    a pour classe : ".commentaire" */
    var offset = $('.commentaire:last').offset();
    $(window).scroll(function(){ // On surveille l'évènement scroll

        /* Si l'élément offset est en bas de scroll, si aucun chargement 
        n'est en cours, si le nombre de commentaire affiché est supérieur 
        à 5 et si tout les commentaires ne sont pas affichés, alors on 
        lance la fonction. */
        if((offset.top-$(window).height() <= $(window).scrollTop()) && load==false && ($('.commentaire').size()>=5) && ($('.commentaire').size()!=$('.nb_com').text())){
            // la valeur passe à vrai, on va charger
        load = true;
            //On récupère l'id du dernier commentaire affiché
            var last_id = $('.commentaire:last').attr('id');
            //On affiche un loader
            $('.loadmore').show();
            //On lance la fonction ajax
            $.ajax({
                url: './search.php',
                type: 'get',
                data: 'last='+last_id+'&q=all_movies',
                //Succès de la requête
                success: function(data) {
                    //On masque le loader
                    $('.loadmore').fadeOut(500);
                    /* On affiche le résultat après
                    le dernier commentaire */
                    $('.commentaire:last').after(data);
                    /* On actualise la valeur offset
                    du dernier commentaire */
                    offset = $('.commentaire:last').offset();
                    //On remet la valeur à faux car c'est fini
                    load = false;
                }
            });
        }
    });
});
}