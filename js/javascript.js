
window.onload = function(){
    $('body').addClass('loaded');
}

var lastValueSearch = '';
$(document).ready(function(){
    $('#PMC_searchtopbar').focus();
    $("#PMC_searchtopbar").keyup(function(){
        if(lastValueSearch != $(this).val()){
            lastValueSearch = $(this).val();
            showHint();
        }
    });
    $("input[name=ordreTri]").click(function(){
        showHint();
    });

    var togglePmc_searchResults = false;
    $('#search_option').click(function(){
        $('#tri_choice').slideToggle(600);
        if(togglePmc_searchResults){
            $('#PMC_searchresults').animate({'padding-top': '190px'},600);
            $(this).fadeToggle(30).attr('src', 'img/dsn/PMC_icn_search_option.svg').fadeToggle(30);
            togglePmc_searchResults = false;
        }else{
            $('#PMC_searchresults').animate({'padding-top': '225px'},600);
            $(this).fadeToggle(30).attr('src', 'img/dsn/PMC_icn_search_lessoption.svg').fadeToggle(30);
            togglePmc_searchResults = true;
        }
    });
    $('#c_menu_info').click(function(){
        $('#menuabout').slideToggle(300);
        $('.c-menu__item').fadeToggle(300);
    });

});

var topMatrix = false;
var styleHeaderBackground;
var styleSearchBackground;
var styleSearchColor;
function showHint() {
    var ordreTri = $('input[name=ordreTri]:checked').val();
    //$(selector).prop('checked')
    var str = $('#PMC_searchtopbar').val();

    //EasterEggs Matrix
    if(topMatrix){
        $('#header').css('background',styleHeaderBackground);
        $('input#PMC_searchtopbar').css('background',styleSearchBackground).css('color',styleSearchColor);  
        topMatrix = false;      
    }
    if(str.toUpperCase() == 'MATRIX'){        
        //style header
        styleHeaderBackground = $('#header').css('background');
        styleSearchBackground = $('input#PMC_searchtopbar').css('background');
        styleSearchColor = $('input#PMC_searchtopbar').css('color');

        $('#header').css('background','rgba(0,0,0,0)');
        $('input#PMC_searchtopbar').css('background','#000000').css('color','#0F0');
        topMatrix = true;
        easterEggsMatrix();
    } else if(str.toUpperCase() == 'R2D2'){
        R2D2Sound();
    } else if(str.toUpperCase() == 'C3PO'){
        C3POSound();
    }else{
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
    "<td><h6>" + "MOIS" + "</h6></td>" +
    "<td><h6>" + keyWordDay + "</h6></td>" +
    "</tr>" +
    "</tbody>" +
    "</table>");
    actualisation = window.setTimeout(affiche, 1000*60*60, p_annee, p_mois, p_jour, idDiv);
}

