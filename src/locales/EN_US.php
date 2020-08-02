<?php

/**
-----------------
Language: English
-----------------
 **/

namespace imastarcitizen\Locales;

class EN_US
{
    public function getLocale(): array
    {

        //HEADER

        $locale['HEADER_LOCALE'] = '<a href="/?hl=de" id="locale" title="Deutsch"><img src="/assets/img/misc/de.png" width=\'30px\'></a>';

        ////PAGES

        //HOME

        $locale['HOME_TITLE'] = '#I\'mAStarCitizen Trading Cards';
        $locale['HOME_WELCOME'] = 'Here you can see all previously posted trading cards.<br> On the official <a href=https://instagram.com/robertsspaceind>RSI Instagram Account</a> are all originally posted cards. Check it out!<br><br> I\'ll update the cards as soon as they are uploaded :)';

        //DOWNLOADS

        $locale['DOWNLOADS_UPDATE'] = 'Last updated: 04/02/2016<br>Size: 35MB';
        $locale['DOWNLOADS_BUTTON'] = 'Print your own cards!';

        //FEEDBACK

        $locale['FEEDBACK_EMAIL'] = 'Email:';
        $locale['FEEDBACK_SUBJECT'] = 'Subject:';
        $locale['FEEDBACK_MESSAGE'] = 'Message:';
        $locale['FEEDBACK_SUBMIT_BUTTON'] = 'SUBMIT';
        $locale['FEEDBACK_MESSAGE_FAILED_MISSING'] = '<p id="message_failed">Please fill in the missing fields!</p>';
        $locale['FEEDBACK_MESSAGE_FAILED_RECAPTCHA'] = '<p id="message_failed">reCAPTCHA verification failed, please try again.</p>';
        $locale['FEEDBACK_MESSAGE_SUCCESS_SENT'] = '<p id="message_success">Mail was successfully sent!</p>';

        //CARD ARCHIVES

        $locale['CARD_ARCHIVES_CATEGORIES'] = 'Categories';
        $locale['CARD_ARCHIVES_ALL_TITLE'] = 'All #ImAStarCitizen trading cards';
        $locale['CARD_ARCHIVES_ALL'] = 'All';
        $locale['CARD_ARCHIVES_COMPANIES'] = 'Companies';
        $locale['CARD_ARCHIVES_DEVELOPER_TEAM'] = 'Developer team';
        $locale['CARD_ARCHIVES_EVENTS'] = 'Events';
        $locale['CARD_ARCHIVES_MISCELLANEOUS'] = 'Miscellaneous';
        $locale['CARD_ARCHIVES_SHIPS'] = 'Ships';
        $locale['CARD_ARCHIVES_SHOWS'] = 'Shows';
        $locale['CARD_ARCHIVES_SYSTEMS'] = 'Systems';

        // NAV

        $locale['NAV_HOME'] = 'Home';
        $locale['NAV_CARD_ARCHIVES'] = 'Card Archive';
        $locale['NAV_CARD_BACK_PUZZLE'] = 'Card Back Puzzle';
        $locale['NAV_DOWNLOADS'] = 'Downloads';

        //FOOTER

        $locale['FOOTER_SOCIAL'] = 'Share on social media';
        $locale['FOOTER_CARD_ARCHIVES'] = 'Card Archive';
        $locale['FOOTER_DOWNLOADS'] = 'Downloads';
        $locale['FOOTER_RSI_HOMEPAGE'] = 'RSI Homepage';
        $locale['FOOTER_RSI_INSTAGRAM'] = 'RSI Instagram';
        $locale['FOOTER_BY'] = 'This website was created by <img src="/assets/img/misc/logo.png" height="16px" width="16px"><b><a href="https://nebulr.me"> nebulr</a></b>';
        $locale['FOOTER_FEEDBACK'] = ' Feel free to <a href="/feedback"><b>send</b></a> any <b>bug reports</b> or <b>feedback</b>';
        $locale['FOOTER_REFERRAL'] = 'Click here to become a Star Citizen today!';
        $locale['FOOTER_LOCALE'] = '<a href="/?hl=de" title="Deutsch"><img src="/assets/img/misc/de.png" width="30px"></a>';

        return $locale;
    }
}