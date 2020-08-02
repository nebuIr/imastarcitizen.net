<?php
    switch($section)
    {
        default:
        case '':
        case 'home':
            include __DIR__ . '/templates/pages/home.php';
            break;

        case 'all':
        case 'archive':
            include __DIR__ . '/templates/pages/archive/archive.php';
            break;

        case 'cardbackpuzzle':
            include __DIR__ . '/templates/pages/puzzle.php';
            break;

        case 'ships':
            include __DIR__ . '/templates/pages/archive/categories/ships.php';
            break;

        case 'companies':
            include __DIR__ . '/templates/pages/archive/categories/companies.php';
            break;

        case 'systems':
            include __DIR__ . '/templates/pages/archive/categories/systems.php';
            break;

        case 'developer_team':
            include __DIR__ . '/templates/pages/archive/categories/developer_team.php';
            break;

        case 'events':
            include __DIR__ . '/templates/pages/archive/categories/events.php';
            break;
            
        case 'shows':
            include __DIR__ . '/templates/pages/archive/categories/shows.php';
            break;
            
        case 'miscellaneous':
            include __DIR__ . '/templates/pages/archive/categories/miscellaneous.php';
            break;
            
        case 'downloads':
            include __DIR__ . '/templates/pages/downloads.php';
            break;
            
        case 'feedback':
            include __DIR__ . '/templates/pages/feedback.php';
            break;
    }