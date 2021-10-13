<?php header("Content-type: text/css"); ?>
h2
{
    font-size:20px;
    padding: 5px 0;
}

/************************************** NAVIGATION **************************************/

nav
{
    width: 100%;
    height: 250px;    
    display:none;
    z-index: 100;
}

nav>ul
{   
    padding-top:50px;
    display: flex;
    flex-direction: column;
    justify-content: space-evenly;
    width: 100%;
    height: 200px;
}

nav>ul>li
{
    display:block;
}

nav>ul>li>a
{
    top:50px;
}

nav>ul>li>a:hover
{
    color:var(--dark);
}

#burger
{
    width: 50px;
    height: 50px;
    display:block;
    position: absolute;
    top:0;
    left:0;
    background-color: var(--dark-purple);
    opacity:0.5;
}

input, button, submit 
{ 
    border:none; 
} 

#burger>img
{
    width: 20px;
    height: 20px; 
}

/************************************** PHRASE ACCROCHE **************************************/

.no-speech
{
    height: calc(100vh - 100px);
}
#essential 
{
    font-size: 2.7em;
}

.no-speech>img
{
    width: 200px;
    height: 200px;
}

/************************************** CV - PARCOURS **************************************/


#parcours
{
    position: relative;
    max-width: 1000px;
    min-height:120px;
}

#experiences
{
    position: absolute;
    bottom:80px;
    left: 0px;
    width: 100%;
    height: 40px;
    z-index: 1;
}

#softskills
{   
    position: absolute;
    bottom : 0px;
    left:0px;
    width: 100%;
    height: 40px;
    transform: rotate(0deg);
    z-index: 3;
}

#technos
{
    position: absolute;
    bottom : 40px;
    left:0px;
    width: 100%;
    height: 40px;
    transform: rotate(0deg);
    z-index: 2;
} 

#experiences .p
{
    font-size: 15px;
}

#softskills .p, #technos .p
{
    font-size:1em;
}

/************************************** PROJET **************************************/

.modal 
{
    width : 75%;
    padding:15px;
    color:var(--text-color);
}

.modal h3
{
    margin-top :20px;
}

.close p
{
    margin: 0;
}

/************************************** MOODBOARD **************************************/

#moods
{
    width: 90%;
    height: 200px;
    margin: 20px auto;
    display: flex;
}  

.mood
{
    flex:1;
    flex-grow:1;
    transition: 0.3s ease-in-out;
    background-size: cover;
    background-position: center; 
}

.mood:hover
{
    width: 500px;
    height: 200px;
    flex-grow:9;
}

/************************************** INSPIRATIONS **************************************/

.content
{
    width: 90%;
    height: 100%;
    min-height: 100%;
    margin: 20px auto;
    display: flex;
    flex-direction: column;
    justify-content: center;
    text-align: center;
    padding-bottom:10px;
}

.content img
{
    padding: 20px;
    width: 150px;
    height: 150px;
}

#clemence
{
    flex-direction: column;
    text-align: center;
}

.content a
{
    background-color: var(--dark-purple);
}

.content p 
{
    padding:20px;
}

#clemence>div>p 
{
    padding: 20px;
}

#clemence>div>a.btn-purple
{
    margin : 0 10px;
}

/************************************** CONTACT **************************************/

#section-contact 
{
    overflow:scroll;
}

.formulaire 
{
    width:90%;
    margin:auto;
    align-self:center;
    overflow:scroll;
}

form 
{
    overflow:scroll;
}