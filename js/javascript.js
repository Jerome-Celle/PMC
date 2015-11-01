window.onload = function(){
    $('body').addClass('loaded');
}

$(document).ready(function(){
    $("#PMC_searchtopbar").keyup(function(){
        showHint();
    });
    $("input[name=ordreTri]").click(function(){
        showHint();
    });

    var togglePmc_searchResults = false;
    $('#search_option').click(function(){
        $('#tri_choice').slideToggle(600);
        if(togglePmc_searchResults){
            $('#PMC_searchresults').animate({'padding-top': '195px'},600);
            $(this).attr('src', 'img/dsn/PMC_icn_search_option.svg');
            togglePmc_searchResults = false            
        }else{
            $('#PMC_searchresults').animate({'padding-top': '225px'},600);
            $(this).attr('src', 'img/dsn/PMC_icn_search_option.svg');
            togglePmc_searchResults = true
        }
    });

    $('#search_option').mouseenter(function(){
        $(this).attr('src', 'img/dsn/PMC_icn_search_option_marvel.svg');
    });
    $('#search_option').mouseleave(function(){
        if(togglePmc_searchResults){
            $(this).attr('src', 'img/dsn/PMC_icn_search_option.svg');
        }else{
            $(this).attr('src', 'img/dsn/PMC_icn_search_option.svg');
        }
    });
});

function showHint() {
    var ordreTri = $('input[name=ordreTri]:checked').val();
    //$(selector).prop('checked')
    var str = $('#PMC_searchtopbar').val();

    //EasterEggs Matrix
    if(str == 'matrix'){
        //création du canvas
        $('#PMC_searchresults').html('<canvas id="c"></canvas>');
        easterEggsMatrix();
    } else{
        $.ajax({
            url: './search.php',
            type: 'post',
            data: 'q=' + str + '&ordreTri=' + ordreTri + '&PortailPage=' + PortailPage,
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
}
function affiche(p_annee, p_mois, p_jour, idDiv) {
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
    var keyWordDay  = nbJours < 2 || p_jour == 99 ?'JOUR' : 'JOURS';

    if(p_mois == 99){
        nbMois = "?";
    } 
    if(p_jour == 99){
        nbJours = "?";
    }


    $(idDiv).html("<table id='countdown_table'>"+
    "<tbody>" +
    "<tr>" +
    "<td><h1>" + nbYears + "</h1></td>" +
    "<td><h1>" + nbMois + "</h1></td>" +
    "<td><h1>" + nbJours + "</h1></td>" +
    "</tr>" +
    "<tr>" +
    "<td><h6>" + keyWordYear + "</h6></td>" +
    "<td><h6>" + "Mois" + "</h6></td>" +
    "<td><h6>" + keyWordDay + "</h6></td>" +
    "</tr>" +
    "</tbody>" +
    "</table>");
    actualisation = window.setTimeout(affiche, 1000*60*60, p_annee, p_mois, p_jour, idDiv);
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
