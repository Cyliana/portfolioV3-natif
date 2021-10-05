
//=============================PAGE ACCUEIL===========================


function showSoftSkills()
{
    let e = document.getElementById("softskills");

    if(e.style.transform == "rotate(0deg)")
    {
        e.style.transform = "rotate(45deg)";
        e.style.left = "-170px";
        e.style.bottom = "55px";
        e.style.height = "40px";
    }
    else
    {
        e.style.transform = "rotate(0deg)";
        e.style.left = "0px";
        e.style.bottom = "0px";
        e.style.height = "calc(100% - 50px)";
    }
}

function showTechnos()
{
    let e = document.getElementById("technos");

    if(e.style.transform == "rotate(0deg)")
    {
        e.style.transform = "rotate(45deg)";
        e.style.left = "-150px";
        e.style.bottom = "90px";
        e.style.height = "40px";
    }
    else
    {
        e.style.transform = "rotate(0deg)";
        e.style.left = "500px";
        e.style.bottom = "0px";
        e.style.height = "calc(100% - 50px)";
    }
}

//============================PROJETS================================

function openModal(id)
{
    if(document.getElementById(id).style.display == "block")
    {

        document.getElementById(id).style.display = "none";
        document.getElementById('overlay').style.display = "none";
    }

    else
    {
        document.getElementById(id).style.display = "block";
        document.getElementById('overlay').style.display = "block";
    }
    
}

function closeModal(id)
{
    document.getElementById(id).style.display = "none";
    document.getElementById("overlay").style.display = "none";
}

//============================MOODBOARD==============================

function moodsCreate()
{
    console.log("moodsCreate();");

    moods =['big-waterfall.jpg',
    'butterfly.JPG',
    'cat.jpg',
    'hope.jpg',
    'ladybug.jpg',
    'landscape.JPG',
    'learn.jpg',
    'little-waterfall.jpg',
    'music.jpg',
    'quotes.jpg',
    'rocks.JPG',
    'saturated.jpg',
    'sister.JPG',
    'strong.jpg',
    'tree.jpg'];

    let n = 0;
    moods.forEach(f =>
    {
        let id = f.split('.')[0];
        console.log(id);
        let e = document.createElement("div");
        e.id = "mood-" + id;
        e.className="mood";
        e.style.backgroundImage = "url(./img-moodboard/"+f+")";
        document.getElementById("moods").appendChild(e);

    });
}

