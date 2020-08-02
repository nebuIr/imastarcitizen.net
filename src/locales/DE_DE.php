<?php

/**
-----------------
Language: German
-----------------
 **/

namespace imastarcitizen\Locales;

class DE_DE
{
    public function getLocale(): array
    {
        //HEADER

        $locale['HEADER_LOCALE'] = '<a href="/?hl=en" id="locale" title="English"><img src="/assets/img/misc/en.png" width="30px"></a>';

        ////PAGES

        //HOME

        $locale['HOME_TITLE'] = '#I\'mAStarCitizen Sammelkarten';
        $locale['HOME_WELCOME'] = 'Hier kannst du alle #I\'mAStarCitizen Sammelkarten anschauen.<br> Auf dem offizellen <a href=https://instagram.com/robertsspaceind>RSI Instagram Account</a> siehst du alle geposteten Karten. Schau dort mal vorbei!<br><br> Ich werde die Sammelkarten aktualisieren, sobald neue hinzugefügt wurden :)';

        //DOWNLOADS

        $locale['DOWNLOADS_UPDATE'] = 'Zuletzt aktualisiert: 04/02/2016<br>Größe: 35MB';
        $locale['DOWNLOADS_BUTTON'] = 'Karten ausdrucken!';

        //FEEDBACK

        $locale['FEEDBACK_EMAIL'] = 'Email:';
        $locale['FEEDBACK_SUBJECT'] = 'Titel:';
        $locale['FEEDBACK_MESSAGE'] = 'Nachricht:';
        $locale['FEEDBACK_SUBMIT_BUTTON'] = 'SENDEN';
        $locale['FEEDBACK_MESSAGE_FAILED_MISSING'] = '<p id="message_failed">Bitte fülle die fehlenden Felder aus!</p>';
        $locale['FEEDBACK_MESSAGE_FAILED_RECAPTCHA'] = '<p id="message_failed">Verifikation fehlgeschlagen, bitte erneut versuchen.</p>';
        $locale['FEEDBACK_MESSAGE_SUCCESS_SENT'] = '<p id="message_success">Mail wurde erfolgreich gesendet!</p>';

        //CARD ARCHIVES

        $locale['CARD_ARCHIVES_CATEGORIES'] = 'Kategorien';
        $locale['CARD_ARCHIVES_ALL_TITLE'] = 'Alle #ImAStarCitizen Sammelkarten';
        $locale['CARD_ARCHIVES_ALL'] = 'Alle';
        $locale['CARD_ARCHIVES_COMPANIES'] = 'Hersteller';
        $locale['CARD_ARCHIVES_DEVELOPER_TEAM'] = 'Entwickler Team';
        $locale['CARD_ARCHIVES_EVENTS'] = 'Events';
        $locale['CARD_ARCHIVES_MISCELLANEOUS'] = 'Verschiedenes';
        $locale['CARD_ARCHIVES_SHIPS'] = 'Schiffe';
        $locale['CARD_ARCHIVES_SHOWS'] = 'Shows';
        $locale['CARD_ARCHIVES_SYSTEMS'] = 'Systeme';

        // NAV

        $locale['NAV_HOME'] = 'Startseite';
        $locale['NAV_CARD_ARCHIVES'] = 'Kartenarchiv';
        $locale['NAV_CARD_BACK_PUZZLE'] = 'Rückseiten-Puzzle';
        $locale['NAV_DOWNLOADS'] = 'Downloads';

        //FOOTER

        $locale['FOOTER_SOCIAL'] = 'Auf Sozialen Netzwerken teilen';
        $locale['FOOTER_CARD_ARCHIVES'] = 'Kartenarchiv';
        $locale['FOOTER_DOWNLOADS'] = 'Downloads';
        $locale['FOOTER_RSI_HOMEPAGE'] = 'RSI Startseite';
        $locale['FOOTER_RSI_INSTAGRAM'] = 'RSI Instagram';
        $locale['FOOTER_BY'] = 'Diese Website wurde von <img src="/assets/img/misc/logo.png" height="16px" width="16px"><b><a href="https://nebulr.me"> nebulr</a></b> erstellt';
        $locale['FOOTER_FEEDBACK'] = ' Bitte <a href="/feedback"><b>sende</b></a> mir dein <b>Feedback</b> oder <b>Fehler</b>, falls du welche findest';
        $locale['FOOTER_REFERRAL'] = 'Klicke hier um ein Star Citizen zu werden!';
        $locale['FOOTER_LOCALE'] = '<a href="/?hl=en" title="English"><img src="/assets/img/misc/en.png" width="30px"></a>';

        return $locale;
    }
}