<?php

$siteTitle = "Magna Cum Lazy";
$pageTitle = "Dimanche matin, 11h30.";
$pageContent = "C'est le matin, vous dormez parce que de toute façon il n'y a rien de mieux à faire.<br>
            Quand soudain vous entendez une notification sur votre téléphone.<br>
            C'est Emery, votre gars sûr, qui vous demande où vous en êtes du projet PHP à rendre ce soir pour 23h42.<br>
            Le stress s'empare de vous lorsque vous comprenez que vous n'avez rien fait du week-end.<br>
            Que décidez-vous de faire ?";

$choice = [
    [
        "pick" => "Pff, je n'ai rien compris à ce qu'il faut faire, tant pis. *Vous vous rendormez*",
        "link" => "index.php?page_1=sleep"
    ],
    [
        "pick" => "Je suis dans la merde, je dois vite me mettre à bosser",
        "link" => "index.php?page_1=work"
    ]
];

if(isset($_GET["page_1"]))
{
    $pick = $_GET["page_1"];

    if($pick === "sleep")
    {
        $pageTitle = "Vous choisissez de dormir";
        $pageContent = "Vous arrivez à l'école lundi matin, Mari, votre professeur de PHP, vous interpelle :<br>
        - Maxime, je n'ai pas reçu ton repository par mail, tu me l'as bien envoyé ?<br>
        - ...";

        $choice = [
            [
                "pick" => "Mentir",
                "link" => "index.php?page_2=lie"
            ],
            [
                "pick" => "Dire la vérité",
                "link" => "index.php?page_2=truth"
            ]
        ];
    }
    else if($pick === "work")
    {
        $pageTitle = "Vous choisissez de travailler";
        $pageContent = "Le problème, c'est que vous êtes nul en PHP et vous ne savez pas par où commencer...<br>
        Que faites-vous ?";

        $choice = [
            [
                "pick" => "Appeler Emery à la rescousse",
                 "link" => "index.php?page_3=call"
            ],
            [
                "pick" => "Se débrouiller",
                "link" => "index.php?page_3=getBy"
            ]
        ];
    }
}

if(isset($_GET["page_2"]))
{
    $pick = $_GET["page_2"];

    if($pick === "lie")
    {
        $pageTitle = "Vous choisissez de mentir";
        $pageContent = "Vous arrivez à l'école lundi matin, Mari, votre professeur de PHP, vous interpelle :<br>
        - Maxime, je n'ai pas reçu ton repository par mail, tu me l'as bien envoyé ?<br>
        - Je suis désolé, j'ai complètement oublié de vous l'envoyer, promis je vous l'envoie ce soir.<br><br>
        Vous vous en sortez de justesse mais vous avez une courte soirée pour finir ce projet.<br>
        Vous rentrez chez vous et vous empressez de terminer votre projet puis de l'envoyer.<br><br>
        
        Note : 8/20 - Travail bâclé, manque d'intérêt pour le projet<br>
        Liar Ending (1/6)";

        $choice = [
            [
                "pick" => "Recommencer",
                "link" => "index.php"
            ]
        ];
    }
    else if($pick === "truth")
    {
        $pageTitle = "Vous choisissez de dire la vérité";
        $pageContent = "Vous arrivez à l'école lundi matin, Mari, votre professeur de PHP, vous interpelle :<br>
        - Maxime, je n'ai pas reçu ton repository par mail, tu me l'as bien envoyé ?<br>
        - Je suis désolé, j'ai procrastiné tout le week-end, je n'ai rien à vous rendre.<br><br>
        
        Note : 0/20 - Aucun travail rendu, il faut vous impliquer davantage dans votre scolarité.<br>
        Truth Ending (2/6)";

        $choice = [
            [
                "pick" => "Recommencer",
                "link" => "index.php"
            ]
        ];
    }
}

if(isset($_GET["page_3"]))
{
    $pick = $_GET["page_3"];

    if($pick === "call")
    {
        $pageTitle = "Vous choisissez d'appeler Emery à la rescousse";
        $pageContent = "Emery, décidément le GOAT, vous montre son projet et vous explique comment vous y prendre.<br>
        Son projet paraît si bien et le vôtre est mauvais, alors il vous vient l'idée de complètement copier sur lui.<br>
        Que faites-vous ?";

        $choice = [
            [
                "pick" => "Écouter ses explications",
                "link" => "index.php?page_4=listen"
            ],
            [
                "pick" => "Copier tout son travail",
                "link" => "index.php?page_4=copy"
            ]
        ];
    }
    else if($pick === "getBy")
    {
        $pageTitle = "Vous décidez de travailler par vous-même";
        $pageContent = "Vous tentez tout ce que vous pouvez (YouTube, Gemini, StackOverflow) pour terminer votre travail.<br>
        Il est 23h41 et vous déposez un travail dont vous n'êtes pas très satisfait, mais au moins vous avez rendu quelque chose.<br><br>
        Note : 5/20 - Vous n'avez aucun talent en PHP, la prochaine fois demandez de l'aide.<br>
        You suck ending (3/6)";

        $choice = [
            [
                "pick" => "Recommencer",
                "link" => "index.php"
            ]
        ];
    }
}

if(isset($_GET["page_4"]))
{
    $pick = $_GET["page_4"];

    if($pick === "listen")
    {
        $pageTitle = "Vous choisissez d'écouter les explications d'Emery";
        $pageContent = "Ces incroyables explications vous redonnent confiance en vous et vous permettent de réussir à terminer votre projet dans les temps.<br>
        Vous rendez un travail dont vous êtes complètement satisfait et espérez avoir une bonne note.<br><br>
        Note : 16/20 - Très bon travail, continuez comme ça !<br>
        Emery carry ending (4/6)";

        $choice = [
            [
                "pick" => "Recommencer",
                "link" => "index.php"
            ]
        ];
    }
    else if($pick === "copy")
    {
        $pageTitle = "Vous choisissez de copier complètement le travail d'Emery";
        $pageContent = "Vous rendez votre projet et profitez de votre soirée.<br>
        Vous allez à l'école le lendemain et Mari vous interpelle :<br>
        - Maxime, j'ai vu que votre travail ressemblait beaucoup à celui d'Emery, avez-vous une explication ?<br>
        - ...";

        $choice = [
            [
                "pick" => "Mentir",
                "link" => "index.php?page_5=lie"
            ],
            [
                "pick" => "Dire la vérité",
                "link" => "index.php?page_5=truth"
            ]
        ];
    }
}

if(isset($_GET["page_5"]))
{
    $pick = $_GET["page_5"];

    if($pick === "lie")
    {
        $pageTitle = "Vous choisissez de mentir";
        $pageContent = "Vous rendez votre projet et profitez de votre soirée.<br>
        Vous allez à l'école le lendemain et Mari vous interpelle :<br>
        - Maxime, j'ai vu que votre travail ressemblait beaucoup à celui d'Emery, avez-vous une explication ?<br>
        - Non, c'est Emery qui a copié tout mon travail, j'ai bossé tout seul sur ce projet.<br>
        - Très bien alors ça sera 0 pour Emery !<br>
        Emery apprend que vous vous êtes attribué le mérite de son travail et a eu 0 par votre vote, il ne veut plus vous adresser la parole.<br><br>
        Note : 20/20 - Excellent travail, continuez comme ça !<br>
        -1 ami ending (5/6)";

        $choice = [
            [
                "pick" => "Recommencer",
                "link" => "index.php"
            ]
        ];
    }
    else if($pick === "truth")
    {
        $pageTitle = "Vous choisissez de dire la vérité";
        $pageContent = "Vous rendez votre projet et profitez de votre soirée.<br>
        Vous allez à l'école le lendemain et Mari vous interpelle :<br>
        - Maxime, j'ai vu que votre travail ressemblait beaucoup à celui d'Emery, avez-vous une explication ?<br>
        - Désolé, je n'arrivais pas à travailler seul mais je voulais absolument rendre un bon travail, alors j'ai copié sur Emery.<br>
        - Je ne peux pas tolérer la triche, je suis très déçu de toi Maxime...<br><br>
        Note : 2/20 - Il faut apprendre à travailler par vous-même et ne pas copier sur les autres.<br>
        True friendship ending (6/6)";

        $choice = [
            [
                "pick" => "Recommencer",
                "link" => "index.php"
            ]
        ];
    }
}

require "templates/layout.phtml";

?>