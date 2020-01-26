<?php
    switch($section)
    {
        case 'home':
        case '':
            include __DIR__ . '/../home.php';
            break;

        case 'all':
        case 'card_archives':
            include __DIR__ . '/../card_archives/card_archives.php';
            break;

        case 'cardbackpuzzle':
            include __DIR__ . '/../puzzle.php';
            break;

        case 'ships':
            include __DIR__ . '/../card_archives/categories/ships.php';
            break;

        case 'companies':
            include __DIR__ . '/../card_archives/categories/companies.php';
            break;

        case 'systems':
            include __DIR__ . '/../card_archives/categories/systems.php';
            break;

        case 'developer_team':
            include __DIR__ . '/../card_archives/categories/developer_team.php';
            break;

        case 'events':
            include __DIR__ . '/../card_archives/categories/events.php';
            break;
            
        case 'shows':
            include __DIR__ . '/../card_archives/categories/shows.php';
            break;
            
        case 'miscellaneous':
            include __DIR__ . '/../card_archives/categories/miscellaneous.php';
            break;
            
        case 'downloads':
            include __DIR__ . '/../downloads.php';
            break;
            
        case 'feedback':
            include __DIR__ . '/../feedback.php';
            break;
            
        case '400':
            include __DIR__ . '/../errorpages/400.php';
            break;
            
        case '401':
            include __DIR__ . '/../errorpages/401.php';
            break;
            
        case '403':
            include __DIR__ . '/../errorpages/403.php';
            break;

        case '500':
            include __DIR__ . '/../errorpages/500.php';
            break;

        case '404':
        default:
            include __DIR__ . '/../errorpages/404.php';
            break;
    
    }