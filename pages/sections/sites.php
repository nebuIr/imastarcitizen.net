<?php
    switch($section)
    {
        case "home":
            include ("pages/home.php");
            break;
            
        case "card_archives":
            include ("pages/card_archives/card_archives.php");
            break;

        case "cardbackpuzzle":
            include ("pages/puzzle.php");
            break;
            
        case "galactic-systems":
            include ("pages/card_archives/categories/galactic-systems.php");
            break;
        
        case "all":
            include ("pages/card_archives/card_archives.php");
            break;
            
        case "ships":
            include ("pages/card_archives/categories/ships.php");
            break;

        case "companies":
            include ("pages/card_archives/categories/companies.php");
            break;

        case "systems":
            include ("pages/card_archives/categories/systems.php");
            break;

        case "developer_team":
            include ("pages/card_archives/categories/developer_team.php");
            break;

        case "events":
            include ("pages/card_archives/categories/events.php");
            break;
            
        case "shows":
            include ("pages/card_archives/categories/shows.php");
            break;
            
        case "miscellaneous":
            include ("pages/card_archives/categories/miscellaneous.php");
            break;
            
        case "downloads":
            include ("pages/downloads.php");
            break;
            
        case "feedback":
            include ("pages/feedback.php");
            break;
            
        case "400":
            include ("pages/errorpages/400.php");
            break;
            
        case "401":
            include ("pages/errorpages/401.php");
            break;
            
        case "403":
            include ("pages/errorpages/403.php");
            break;
            
        case "404":
            include ("pages/errorpages/404.php");
            break;
            
        case "500":
            include ("pages/errorpages/500.php");
            break;
            
        default:
            include ("pages/home.php");
            break;
    
    }

?>
<!DOCTYPE html>
<html>
<head>
<title></title>
</head>
<body>
</body>
</html>