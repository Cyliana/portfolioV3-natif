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

function closeModal()
{
    document.getElementById("modal").style.display = "none";
    document.getElementById("overlay").style.display = "none";
}


