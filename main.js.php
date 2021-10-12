<?php header("Content-type: text/javascript"); ?>

//=============================PAGE ACCUEIL===========================


if (window.matchMedia("(max-width: 768px)").matches) 
{
    function showSoftSkills()
    {
        let e = document.getElementById("softskills");

        if(e.style.height == "calc(100% - 80px)")
        {
            e.style.bottom = "0px";
            e.style.height = "40px";
        }
        else
        {
            e.style.bottom = "0px";
            e.style.height = "calc(100% - 80px)";
        }
    }

    function showTechnos()
    {
        let e = document.getElementById("technos");

        if(e.style.height == "calc(100% - 80px)")
        {
            e.style.bottom = "40px";
            e.style.height = "40px";
        }
        else
        {
            e.style.bottom = "40px";
            e.style.height = "calc(100% - 80px)";
        }
    }

    function showExperiences()
    {
        let e = document.getElementById("experiences");
        let p = document.getElementById("parcours");

        if(e.style.height == "calc(100% - 80px)")
        {
            e.style.bottom = "80px";
            e.style.height = "40px";
            p.style.height = "120px";
        }
        else
        {
            e.style.bottom = "80";
            e.style.height = "calc(100% - 80px)";
            p.style.height = "1000px";
        }
    }

    function showMenu()
    {
        let e = document.getElementById("menu");

        if(e.style.display == "block")
        {
            e.style.display = "none";
        }
        else
        {
            e.style.display = "block";
        }
    }
} 

else 
{
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

    <?php
    $dir = "img-moodboard";
    $files = scandir($dir);

    $js = "let moods = [";
    foreach($files as $file)
    {
        $f = strtolower(explode('.',$file)[0]);
        $e = strtolower(explode('.',$file)[1]);

        // --- CSS ---
        if($file != '.' && $file !='..' && is_file("$dir/$file") && ($e == 'jpg' || $e == 'jpeg'))
        {
            
            $js .= "\"$file\",";
        }

        // --- FICHIERS ---
        if(!file_exists("$dir/$f.png"))
        {
            if($file != '.' && $file !='..' && is_file("$dir/$file") && ($e == 'jpg' || $e == 'jpeg'))
            {
        
                $src = imagecreatefromjpeg("$dir/$file");
                $dst = imagecreatetruecolor(250,250);

                $imgW = imagesx($src);
                $imgH = imagesy($src);

                imagecopyresampled($dst,$src,0,0,0,0,249,249,$imgW,$imgH);

                imagepng($dst,"$dir/$f.png");
            }
        }
    }

    $js = substr($js,0,strlen($js)-1).'];';


    print($js);
    
    ?>

    moods.forEach(f =>
    {
        let id = f.split('.')[0];
        let e = document.createElement("div");
        e.id = "mood-" + id;
        e.className="mood";
//        e.style.backgroundImage = "url(./img-moodboard/"+id+".png)";
        document.getElementById("moods").appendChild(e);
    });
}

//============================ CONTACT ==============================


function mail()
{
    let data = new FormData(form);
    let ajax = new XMLHttpRequest();

    ajax.open("POST","mail.php", true);

    ajax.onreadystatechange = () =>
        {
            if (ajax.readyState == XMLHttpRequest.DONE)
            {
                if(ajax.statusText == 'OK')
                {
                   document.getElementById("formulaire").innerHTML = ajax.responseText;
                }
                else
                {
                   alert("Erreur");
                }
            }
        }
        ajax.send(data);
}
