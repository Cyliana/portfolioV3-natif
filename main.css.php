<?php header("Content-type: text/css"); ?>
/************************************** GENERAL **************************************/

@font-face 
{
    font-family: 'Gabriola';
    font-style: normal;
    font-weight: normal;
    src: local('Gabriola'), url('fonts/gabriola.woff') format('woff');
}

@font-face 
{
    font-family: 'Dubai Light';
    font-style: normal;
    font-weight: normal;
    src: local('Dubai Light'), url('fonts/dubai-light.woff') format('woff');
}
*
{
    margin:0;
    padding:0;
}

html, body
{
    --dark : black;
    --dark-purple : #59095B;
    --light-purple : #69465C;

    --text-color : white;

    width: 100%;
    height: 100%;
    background-color: var(--dark);
}

header
{
    position: fixed;
    top: 0px;
    width: 100%;
    height: 50px;
    font-family: 'Dubai Light';
    font-size: 20px;
    background-color:var(--dark-purple);
    border-bottom: 1px solid var(--dark); 
    z-index :100;
}

#burger 
{
    display:none;
}

main 
{
    width:100%;
    min-height: calc(100vh - 50px);
    font-family: 'Dubai Light';
} 

footer 
{
    margin: 0;
    padding: 0;
    width: 100%;
    line-height: 50px;
    vertical-align: middle;
    height: 50px;
    font-family: 'Dubai Light';
    color:var(--text-color);
    text-align: center;
    background-color: var(--dark-purple);
    border-top: 1px solid var(--dark);
}

h1 
{
    font-family: 'Gabriola';
    font-weight: lighter;
    color:var(--text-color);
    text-align: center;
    padding-top: 5px;
    background-color :var(--dark-purple);
    min-width: 100%;
    max-width: 100%;
    margin: 0;
}

h2
{
    font-size :30px;
    font-weight: lighter;
    text-align: center;
    font-style: oblique;
    background-color: var(--dark-purple);
    margin:0;
    font-family:'Dubai Light';
    color:var(--text-color);
}

h3
{
    font-size:25px;
}

.fab, .fas
{
    width: 100px;
    margin: 10px 0;
}

.btn-purple 
{
    background-color: var(--light-purple);
    color:var(--text-color);
    width: 100px;
    border-radius: 3px;
    margin:0 20px 20px 20px;
    text-align:center;
}

.btn-purple:hover 
{
    background-color: var(--dark-purple);
    color:var(--text-color);
}

/************************************** NAVIGATION **************************************/

nav
{
    width: 100%;
    height: 100%;
}

nav>ul
{
    display: flex;
    width: 100%;
    height: 100%;
    line-height: 100%;
    vertical-align: middle;
    padding:0;
    margin :0;
    justify-content: center;
    background-color: var(--dark-purple);
}

nav>ul>li
{
    list-style-type: none;
    display: inline-block;
    margin:10px 20px;
    align-items: center;
    padding: 0;
}

nav>ul>li>a
{
    text-decoration: none;
    color:var(--text-color);
}

nav>ul>li>a:hover
{
    color:var(--dark);
}

/************************************** PHRASE ACCROCHE **************************************/

.no-speech 
{
    margin-top:50px;
    width: 100%;
    height: calc(100vh - 50px);
    background-image: url(./img/clavier1.jpg);
    background-repeat:no-repeat;
    background-size: cover;
    background-position: center;
    background-attachment: fixed;
    overflow: hidden;
    display:flex;
    flex-direction:column;
    align-items:center;
    justify-content:space-evenly;
}

.no-speech img
{
    display:block;
    width: 300px;
    height: 300px;
    text-align:center;
    border-radius:200px;
    border: 2px solid var(--dark);
    opacity: 0.6;
    margin:50px;
}

#essential 
{
    display:block;
    width:90%;
    font-family: 'Gabriola';
    font-size: 3em;
    text-align: center;
    overflow: hidden;
    
    line-height: initial;
    background: linear-gradient(90deg,#fff,#59095B,#fff,#59095B,#fff,#59095B,#fff);
    background-repeat:round;
    background-size: 90%;
    animation: animate 5s linear infinite;
    background-clip: text;
    -webkit-background-clip: text;
    -webkit-text-fill-color: rgba(255, 255, 255, 0);
}
  
@keyframes animate 
{
    0% 
    {
        background-position: -500%;
    }

    100% 
    {
        background-position: 500%;
    }
}

/************************************** CV - PARCOURS **************************************/

.bloc-cv 
{
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    margin: 30px auto;
    width: 100%;
    text-align: center;
    color:var(--text-color);
}

.bloc-cv>p 
{
    margin-bottom:10px;
}

#parcours
{
    position: relative;
    max-width: 1000px;
    min-height:580px;
    max-height:580px;
    color:var(--text-color);
    display: flex;
    flex-flow: column;
    justify-content: center; 
    overflow: hidden;
    margin: 30px auto 30px auto;
    border: 1px solid var(--dark-purple);
    background-color:var(--light-purple);;
}

#softskills
{   
    position: absolute;
    bottom : 55px;
    left:-170px;
    width: 500px;
    height: 40px;
    background-color:var(--light-purple);;
    color:var(--text-color);
    transform: rotate(45deg);
    transition: 2s all;
    overflow: hidden;
    box-shadow: 0 0 15px var(--dark);
    cursor: pointer;
    z-index:3;
}

#technos
{
    position: absolute;
    bottom : 90px;
    left:-150px;
    width: 500px;
    height: 40px;
    background-color:var(--light-purple);;
    color:var(--text-color);
    transform: rotate(45deg);
    transition: 2s all;
    overflow: hidden;
    box-shadow: 0 0 15px var(--dark);
    cursor: pointer;
    z-index:2;
} 

#experiences
{
    position: absolute;
    width: 100%;
    height: 100%;
    display: flex;
    flex-direction: column;
    text-align: center;  
    z-index:1;
}

#softskills>.ste:hover,#technos>.ste:hover
{
    color: var(--dark);
}

#softskills .p, #technos .p
{
    text-align: center;
    font-size: 1.5rem;
    margin: 0;
    padding: 0;
}

#experiences .p
{
    font-size:20px;
    line-height:25px;
    margin: 0;
    padding: 0;
}

/************************************** PROJETS **************************************/

#projectcontent
{
    width: 100%;
    padding-top: 50px;
}

#container
{
    width:calc(100% - 80px);
    height:calc(100vh - 150px);
    margin:auto;
    display:flex;
}

#gridcontent
{
    align-self:center;
    width:100%;
    margin: auto;
    display: grid;                                      /*mise en place du grid*/
    grid-template-rows: 100px 100px 100px 100px 100px;  /*hauteur des lignes*/
    grid-template-columns: 1fr 1fr 1fr 1fr;             /*largeur des colonnes*/                           
    grid-gap: 10px;                                     /*espaces entre les éléments*/
}

.celgrid
{
    background-size: cover;
    -webkit-filter: grayscale(100%);
	filter: grayscale(100%);
	-webkit-transition: .3s ease-in-out;
	transition: .3s ease-in-out;
}

.celgrid:hover
{
    -webkit-filter: grayscale(0);
	filter: grayscale(0);
}

#cel1
{
    background-image: url(./img/hackcess.jpg);
    grid-column-start: 1; 
    grid-column-end: 2; 
    grid-row-start: 1; 
    grid-row-end: 3;
}

#cel2
{
    background-image: url(./img/travel.jpg);
    grid-column-start: 2; 
    grid-column-end: 4; 
    grid-row-start: 1; 
    grid-row-end: 2;
}

#cel3
{
    background-image: url(./img/jungle-accueil.jpg);
    grid-column-start: 4; 
    grid-column-end: 5; 
    grid-row-start: 1; 
    grid-row-end: 3;
}

#cel4
{
    background-image: url(./img/portfoliov1.jpg);
    grid-column-start:1; 
    grid-column-end:1; 
    grid-row-start:3; 
    grid-row-end: 5;
}

#cel5
{
    background-image: url(./img/nevinator.jpg);
    grid-column-start: 3; 
    grid-column-end: 5; 
    grid-row-start:5 ; 
    grid-row-end: 5;
}

#cel6
{
    background-image: url(./img/lfmr.jpg);
    grid-column-start: 4; 
    grid-column-end: 4; 
    grid-row-start: 4; 
    grid-row-end: 4;
}

#cel7
{
    background-image: url(./img/nevinator-logo1.png);
    grid-column-start: 1; 
    grid-column-end: 1; 
    grid-row-start: 5; 
    grid-row-end: 5;
}

#cel8
{
    background-image: url(./img/DSM.png);
    grid-column-start: 3; 
    grid-column-end:3; 
    grid-row-start:3; 
    grid-row-end: 5;
}

#cel9
{
    background-image: url(./img/casse-brique.png);
    grid-column-start:2; 
    grid-column-end: 3; 
    grid-row-start: 2; 
    grid-row-end: 4;
}

#cel10
{
    background-image: url(./img/logo-playstation.png);
    grid-column-start:3; 
    grid-column-end:3; 
    grid-row-start:2; 
    grid-row-end: 2;
}

#cel11
{
    background-image: url(./img/wild-circus.png);
    grid-column-start:2; 
    grid-column-end:3; 
    grid-row-start:4; 
    grid-row-end: 6;
}

#cel12
{
    background-image: url(./img/portfolioV2.png);
    grid-column-start:4; 
    grid-column-end:4; 
    grid-row-start:3; 
    grid-row-end: 4;
}

#overlay 
{	
    position:fixed;
    top: 50px; 
    left: 0;
    bottom:0;
    right:0;
    background-color: hsla(0, 0%, 0%, 0.9);
    z-index: 4;
    display:none;
}

.modal 
{
    width : 290px;
    padding:20px;
    text-align: center;
    color:var(--text-color);
    background-color:var(--dark); 
    border:5px solid var(--dark-purple);

    position: fixed;
    top: 50%; 
    left: 50%;
    transform:translate(-50%,-50%);
    z-index: 5;
    display:none;
}

.modal h3
{
    margin-top :20px;
}

.modal p
{
    margin:0;
    margin-bottom: 50px;
}

.close
{
    font-size: 20px;
    line-height: 30px;
    vertical-align: middle;
    text-align: center;
    color:var(--text-color);
    width: 30px;
    height: 30px;
    border:5px solid var(--dark-purple);
    background-color: var(--dark);
    border-radius: 20px;
    position: absolute;
    right:-15px;
    top: -15px;
    margin: 0;
    cursor: pointer;
}

/************************************** MOODBOARD **************************************/

#mood-content
{  
    padding-top: 50px;
    display: flex;
    flex-direction: column;
}

#moods
{
    width: 100%;
    min-width:760px;
    max-width:1000px;
    height: 300px;
    margin: 20px auto;
    display: flex;
}  

.mood
{
    flex:1;
    flex-grow:1;
    overflow: hidden;
    transition: 0.3s ease-in-out;
    background-size: cover;
    background-position: center;
}

.mood:hover
{
    width: 400px;
    height: 300px;
    flex-grow:7;
}

<?php
    $dir = "img-moodboard";
    $files = scandir($dir);

    $tw = 1000;
    $w = floor($tw / (count($files) - 2));

    $css = '';
    foreach($files as $file)
    {
        $f = strtolower(explode('.',$file)[0]);
        $e = strtolower(explode('.',$file)[1]);
        if("$dir/$file" != '.' && "$dir/$file" !='..' && is_file("$dir/$file") && $e == "png")
        {
            if($tw > 768)
            {
                $css .= "#mood-$f {";
                $css .= "display: none; ";
                $css .= "background-image:url(./$dir/$file); ";
                $css .= "}\n";
                $css .= "@media screen and (min-width: ".$tw."px) { #mood-$f { display: block;} }\n\n";
                $tw -= $w;
            }
            else
            {
                $css .= "#mood-$f {";
                $css .= "display: block; ";
                $css .= "background-image:url(./$dir/$file); ";
                $css .= "}\n";
            }
        }
    }
    print($css);
?>

/************************************ INSPIRATION ************************************/

.content
{
    max-width: 1000px;
    min-width:760px;
    height: 240px;
    min-height: 300px;
    margin: 20px auto;
    background-color:var(--light-purple);;
    display: flex;
    align-items:center;
    justify-content: space
}

.content img
{
    padding: 20px;
    width: 200px;
    height: 200px;
}

.content p
{
    padding:20px 0;
}

#clemence
{
    flex-direction: row-reverse;
    text-align: end;
}

.content a
{
    background-color: var(--dark-purple);
}

.content .fa-youtube:hover, .content .fa-linkedin:hover, .content .fa-link:hover
{
    color: var(--dark)
}
/************************************** CONTACT **************************************/

#section-contact
{
    display: flex;
    justify-content: center;
    width: 100%;
    height:calc(100vh - 150px);
    color: var(--text-color); 
    background-image: url(./img/clavier1.jpg);
    background-repeat:no-repeat;
    background-size: cover;
    background-position: center;
    background-attachment: fixed;
    z-index:0;
}

.formulaire 
{
    width:600px;
    min-width : 300px;
    max-width : 600px;
    margin:auto;
    background-color: var(--light-purple);
    align-self:center;
}

form 
{
    width:200px;
    margin:auto;
    padding:40px;
}

form>#button 
{
    margin:0 !important;
    padding:5px;
}

form textarea
{
    width: 180px;
}

form input,textarea
{
    padding: 5px;
} 

::-webkit-scrollbar
{
    display:none;
}
