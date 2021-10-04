
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

    let m =['hope','bee','big-waterfall','other','butterfly','landscape','double-waterfall','fail','glans','balanced','humor','cat','I-learn','little-waterfall','music','hammock','river','strong','tipi','musicvintage','triskel'];
    
    let n = 0;
    m.forEach(id =>
    {
        let e = document.createElement("div");
        e.id = "mood-" + id;
        e.className="mood";
        e.style.backgroundImage = "url(./img-moodboard/"+id+".png)";
        document.getElementById("moods").appendChild(e);

    });
}

