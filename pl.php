<?php
/**
 * Arfooo
 * 
 * @package    Arfooo
 * @copyright  Copyright (c) Arfooo Annuaire (fr) and Arfooo Directory (en)
 *             by Guillaume Hocine (c) 2007 - 2010
 *             http://www.arfooo.com/ (fr) and http://www.arfooo.net/ (en)
 * @author     Guillaume Hocine & Adrian Galewski
 * @license    http://creativecommons.org/licenses/by/2.0/fr/ Creative Commons
 */

/* !! set this value to the current language name, when creating new languages !! */
$languageName = 'Poland';

/*  English language dictionary
	To create another language, 
	please, copy this file and replace 
	expressions with the same ones in the 
	new language.
	
	The file should be posted in /languages 
	folder. Its name sould be LanguageName.php,
	where LanguageName is the language, shown 
	in the CMS as an language option.
*/

$language = array();


/* Front Sites Texts */


// all
$language['show_arbo_directory'] = 'Katalog';
$language['page'] = 'page';


//// --> template/templateName/captcha/
// show.tpl
$language['captchaShow_generate_new_image'] = 'Wygeneruj nowy kod';


//// --> template/templateName/category/
// list.tpl

// showAll.tpl
$language['categoryShowAll_html_title'] = 'Kategorie';
$language['categoryShowAll_meta_description'] = 'Wszystkie kategorie';
$language['categoryShowAll_categories'] = 'Kategorie';
$language['categoryShowAll_h1'] = 'Kategorie katalogu';


//// --> template/templateName/comment/
// popup.tpl
$language['commentPopup_post_comment'] = 'Wyślij komentarz';
$language['commentPopup_name'] = 'Nazwa';
$language['commentPopup_rating'] = 'Ocena';
$language['commentPopup_message'] = 'Wiadomość';
$language['commentPopup_security_code'] = 'Kod bezpieczeństwa';
$language['commentPopup_button_send'] = 'Wyślij';
$language['commentPopup_button_cancel'] = 'Anuluj';
$language['commentPopup_already_commented'] = 'Już komentowałeś tę stronę dzisiaj.';


//// --> template/templateName/contact/
// contactPopup.tpl
$language['contactPopup_send_message'] = 'Wyślij wiadomość';
$language['contactPopup_mandatory_fields'] = '= to pole jest obowiązkowe';
$language['contactPopup_your_email'] = 'Twój Email';
$language['contactPopup_object'] = 'Obiekt';
$language['contactPopup_message'] = 'Wiadomość';
$language['contactPopup_security_code'] = 'Kod bezpieczeństwa';
$language['contactPopup_button_send'] = 'Wyślij';
$language['contactPopup_button_cancel'] = 'Anuluj';

// index.tpl
$language['contactIndex_html_title'] = 'Kontakt';
$language['contactIndex_meta_description'] = 'Kontakt';
$language['contactIndex_contact'] = 'Kontakt';
$language['contactIndex_form'] = 'Formularz kontaktowy';
$language['contactIndex_email'] = 'Email';
$language['contactIndex_subject'] = 'Temat';
$language['contactIndex_message'] = 'Wiadomość';
$language['contactIndex_security_code'] = 'Kod bezpieczeństwa';
$language['contactIndex_button_send'] = 'Wyślij';

// ProblemPopup.tpl
$language['problemPopup_title'] = 'Ostrzeżenie o stronie';
$language['problemPopup_mandatory_fields'] = '= to pole jest obowiązkowe';
$language['problemPopup_problem_type'] = 'Rodzaj problem';
$language['problemPopup_select_choice'] = 'Wybierz';
$language['problemPopup_spam'] = 'Spam';
$language['problemPopup_bad_category'] = 'Zła kategoria';
$language['problemPopup_expired'] = 'Wygasł';
$language['problemPopup_others'] = 'Inne';
$language['problemPopup_message'] = 'Wiadomość';
$language['problemPopup_description_why'] = 'Dlaczego chcesz nas poinformować (nie będzie opublikowany)?';
$language['problemPopup_security_code'] = 'Kod bezpieczeństwa';
$language['problemPopup_button_send'] = 'Wyślij';
$language['problemPopup_button_cancel'] = 'Anuluj';


//// -> Template / TemplateName / extraField /
// ItemForm.tpl
$language['extraFieldItemForm_select_option'] = 'Wybierz opcję';
$language['extraFieldItemForm_url'] = 'URL';
$language['extraFieldItemForm_anchor'] = 'Tekst';
$language['extraFieldItemForm_file'] = 'Plik';
$language['extraFieldItemForm_file_title'] = 'Nazwa pliku';
$language['extraFieldItemForm_see_file'] = 'Podgląd';
$language['extraFieldItemForm_delete_file'] = 'Usuń';

// Search.tpl
$language['extraFieldSearch_category'] = 'Kategorie';
$language['extraFieldSearch_all_categories'] = 'Wszystkie kategorie';
$language['extraFieldSearch_select_option'] = 'Wybierz opcję';
$language['extraFieldSearch_from'] = 'Od';
$language['extraFieldSearch_to'] = 'Do';


//// -> Template / TemplateName / przód /
// 404.tpl
$language['front404_html_title'] = 'Błąd, strona nie znaleziona ...';
$language['front404_meta_description'] = 'Strona której szukasz nie istnieje. Wybacz nam za niedogodności ...';
$language['front404_h1'] = 'Błąd, strona nie znaleziona ...';
$language['front404_description'] = 'Strona której szukasz nie istnieje. Wybacz nam za niedogodności ...';

// Error.tpl


//// -> Template / TemplateName / includes /
// Header.tpl
$language['includesHeader_language'] = 'pl';

// Footer.tpl
$language['includesFooter_powered'] = 'Powered by';
$language['includesFooter_arfooo_url'] = 'http://www.arfooo.net/';
$language['includesFooter_arfooo_name'] = 'Katalog Arfooo';
$language['includesFooter_arfooo_title'] = 'Katalog SEO';
//$language['includesFooter_date'] = '2007 - ' . data('Y');
$language['includesFooter_newsletter'] = 'Newsletter';
$language['includesFooter_contact'] = 'Kontakt';

// PageNavigation.tpl
$language['includesPageNavigation_page'] = 'Strona';
$language['includesPageNavigation_from'] = 'z';


//// -> Template / TemplateName / info /
// UseCondition.tpl
$language['infoUseCondition_html_title'] ='Regulamin';
$language['infoUseCondition_meta_description'] ='Regulamin';
$language['infoUseCondition_arbo'] ='Regulamin';
$language['infoUseCondition_h1'] ='Regulamin' ;


//// -> Template / TemplateName / javascript /
// Config.tpl
$language['javascriptConfig_you_have_already_chosen_this_keyword_Select_another_one'] = 'Już wybrano to słowo kluczowe. Wybierz inne.';
$language['javascriptConfig_loading'] = 'loading ...';
$language['javascriptConfig_please_fill_in_the_website_Url_Title_and_Description_fields'] = 'Proszę wpisać adres URL strony, tytuł i opis pola';
$language['javascriptConfig_the_Url_must_start_with_http://'] = 'Adres strony musi się zaczynać od http://';
$language['javascriptConfig_please_enter_valid_email_address'] = 'Proszę podać poprawny adres e-mail';
$language['javascriptConfig_when_changing_the_website_webmaster_the_email_will_also_change'] = 'Po zmianie webmastera strony, e-mail będzie także zmieniony';
$language['javascriptConfig_the_comment_was_saved'] = 'Komentarz został zapisany';
$language['javascriptConfig_the_comment_was_deleted'] = 'Komentarz został usunięty';
$language['javascriptConfig_the_IP_was_banned'] = 'IP zostało zablokowane';
$language['javascriptConfig_please_select_package'] = 'Proszę wybrać pakiet';
$language['javascriptConfig_please_select_payment_processor'] = 'Proszę wybrać sposób płatności';
$language['javascriptConfig_please_enter_your_username'] = 'Proszę wprowadzić swoją nazwę użytkownika';
$language['javascriptConfig_please_enter_comment'] = 'Proszę wprowadzić komentarz';
$language['javascriptConfig_please_enter_the_security_code'] = 'Proszę wpisać kod bezpieczeństwa';
$language['javascriptConfig_the_tag_was_saved'] = 'Tag został zapisany';
$language['javascriptConfig_you_cant_select_this_payment_method_for_selected_package'] = 'Nie możesz wybrać tej metody płatności dla wybranego pakietu';
$language['javascriptConfig_delete'] = 'Usuń';
$language['javascriptConfig_edit'] = 'Edytuj';
$language['javascriptConfig_file'] = 'Plik';
$language['javascriptConfig_was_uploaded_sucessfully'] = 'został przesłany pomyślnie';
$language['javascriptConfig_of'] = 'z';
$language['javascriptConfig_available_photos_uploaded'] = 'dostępne zdjęcia dodane';
$language['javascriptConfig_popup_loading_title'] = 'Loading';
$language['javascriptConfig_popup_loading_content'] = 'Loading ...';
$language['javascript_config_email_format'] = 'Twój e-mail musi być w formacie - name@domain.com';
$language['javascript_config_email_was_used_earlier'] = 'E-mail został wykorzystany wcześniej';
$language['javascript_config_please_enter_password'] = 'Podaj hasło';
$language['javascript_config_please_confirm_your_password'] = 'Proszę o potwierdzenie hasła';
$language['javascript_config_please_enter_captcha_code'] = 'Proszę wpisać kod captcha';
$language['javascript_config_passwords_are_not_equal'] = 'Hasła nie są jednakowe';
$language['javascript_config_please_enter_your_email'] = 'Podaj swój adres e-mail';
$language['javascript_config_validation_message'] = 'Walidacja';
$language['javascript_config_your_message_was_saved'] = 'Twoja wiadomość została zapisana';
$language['javascript_config_your_message_was_sent'] = 'Twoja wiadomość została wysłana';
$language['javascript_config_new_file_has_been_uploaded_sucessfully'] = 'Obraz został pomyślnie przesłany';
$language['javascript_config_uploading'] = 'Przesyłanie ...';
$language['You did not guess the security code. Try again with a new one.'] ='Nie podałeś poprawnego kodu bezpieczeństwa. Spróbuj ponownie z nowym.';
$language['You did not guess the security code.'] ='Nie podałeś poprawnego kodu bezpieczeństwa. Spróbuj ponownie z nowym.';
$language['Your comment was saved'] = 'Twój komentarz został zapisany';
$language['Your comment was saved. He is awaiting moderation and will be published if it is useful for surfers'] =' Twój komentarz został zapisany. Po zaakceptowaniu zostanie opublikowany, jeśli jest to przydatne dla surferów';
$language['The problem has been reported to the administrator. Thank you for your help.'] ='Problem został zgłoszony do administratora. Dziękuję za pomoc.';
$language['Validation Message'] = 'test test walidacji Wiadomość';
$language['This site\' HTTP response code is not 200. The site is not accepted.'] = 'Odpowiedź tej strony nie jest poprawna (HTTP 200). Strona nie jest akceptowana.';
$language['We have detected duplicate content, change your description.'] = 'Wykryto podwójną zawartość. Proszę zmienić opis.';
$language['Please enter a valid code'] = 'Proszę podać poprawny kod';
$language['You have entered an invalid code'] = 'Wprowadzono nieprawidłowy kod';
$language['Allopass was validated sucessfully.'] = 'Kod Allopass został zatwierdzony. Możesz teraz zgłosić swoją witrynę.';
$language['You haven\'t credit for this action'] ='Nie masz kredytów dla tej akcji. Wróć do poprzedniego kroku, aby zgłosić swoją witrynę z formułą premii.';


//// --> template/templateName/keyword/
// show.tpl
$language['keywordShow_html_title'] = 'Katalog słów zaczynających się od';
$language['keywordShow_meta_description'] = 'Katalog słów zaczynających się od';
$language['keywordShow_arbo'] = 'Katalog słów zaczynających się od';
$language['keywordShow_h1'] = 'Katalog słów zaczynających się od';


//// -> Template / TemplateName / main /
// Index.tpl
$language['mainIndex_h2'] = 'Strony internetowe wymienione w katalogu';


//// --> template/templateName/menu/
// menuheader/menuheader.tpl
$language['menuMenuheader_directory'] = 'Katalog';
$language['menuMenuheader_news'] = 'Aktualności';
$language['menuMenuheader_top_hits'] = 'Top hits';
$language['menuMenuheader_top_rated'] = 'Top rate';
$language['menuMenuheader_top_rank'] = 'Top rank';
$language['menuMenuheader_top_referrers'] = 'Top Referenci';
$language['menuMenuheader_categories'] = 'Kategorie';
$language['menuMenuheader_submit_website'] = 'Prześlij stronę';

// Menuheader / searchEngine.tpl
$language['menuSearchEngine_what'] = 'Co';
$language['menuSearchEngine_where'] = 'Gdzie';
$language['menuSearchEngine_type_keyword'] = 'Wpisz słowo kluczowe';
$language['menuSearchEngine_adress'] = 'Adres, miasto, powiat lub kod pocztowy';
$language['menuSearchEngine_search_button'] = 'Szukaj';
$language['menuSearchEngine_advanced_search'] = 'Wyszukiwanie zaawansowane';

// Menuleft / categories.tpl
$language['menuleftCategories_categories'] = 'Kategorie';

// Menuleft / keywords.tpl
$language['menuleftKeywords_keywords'] = 'Słowa kluczowe';

// Menuleft / menuleft.tpl

// Menuleft / statistics.tpl
$language['menuleftStatistics_stats'] = 'Statystyki';
$language['menuleftStatistics_approved_links'] = 'Zaakceptowanych linków';
$language['menuleftStatistics_pending_links'] = 'Oczekujących linków';
$language['menuleftStatistics_rejected_links'] = 'Odrzuconych linków';
$language['menuleftStatistics_banned_links'] = 'Zablokowanych linków';
$language['menuleftStatistics_categories'] = 'Kategorie';
$language['menuleftStatistics_keywords'] = 'Słowa kluczowe';
$language['menuleftStatistics_webmasters'] = 'Webmasterzy';

// Menuright / menuright.tpl
$language['menuright_members_area'] = 'Strefa użytkownika';
$language['menuright_management'] = 'Zarządzanie';
$language['menuright_change_password'] = 'Zmień hasło';
$language['menuright_logout'] = 'Wyloguj';

// Menuright / tagCloud.tpl
$language['menurightTagCloud_tag_cloud'] = 'Tag Cloud';


//// -> Template / TemplateName / biuletyn /
// ConfirmNewsletterEmailAdd.tpl
$language['confirmNewsletterEmailAdd_html_title'] = 'Weryfikacja emaila';
$language['confirmNewsletterEmailAdd_meta_description'] = 'Dziękujemy za potwierdzenie rejestracji do newslettera';
$language['confirmNewsletterEmailAdd_h1'] = 'Weryfikacja emaila';
$language['confirmNewsletterEmailAdd_description'] = 'Dziękujemy za potwierdzenie rejestracji do newslettera';

// ConfirmNewsletterEmailDel.tpl
$language['confirmNewsletterEmailDel_html_title'] = 'Weryfikacja emaila';
$language['confirmNewsletterEmailDel_meta_description'] = 'Dziękujemy za potwierdzenie rejestracji do newslettera';
$language['confirmNewsletterEmailDel_h1'] = 'Weryfikacja emaila';
$language['confirmNewsletterEmailDel_description'] = 'Dziękujemy za potwierdzenie rejestracji do newslettera';

// Index.tpl
$language['newsletterIndex_html_title'] = 'Newsletter';
$language['newsletterIndex_meta_description'] = 'Newsletter';
$language['newsletterIndex_arbo'] = 'Newsletter';
$language['newsletterIndex_h1'] = 'Newsletter';
$language['newsletterIndex_email'] = 'Twój e-mail';
$language['newsletterIndex_button_subscribe'] = 'Zapisz';
$language['newsletterIndex_button_unsubscribe'] = 'Wypisz';
$language['Your email was added. Check your inbox to confirm it'] =' Twój e-mail został dodany. Sprawdź swoją skrzynkę odbiorczą, aby go potwierdzić';
$language['This email was added earlier'] =' Ten e-mail został dodany wcześniej';
$language['Check your inbox and click on remove link'] = 'Aby na stałe usunąć swój e-mail newslettera, potwierdź klikając na link w wyłanym emailu.';
$language['This email do not exists in our db'] =' Ten e-mail nie istnieje w naszej bazie ';


//// -> Template / TemplateName / płatności /
// MakePayment.tpl
$language['makePayment_html_title'] = 'Płatność';
$language['makePayment_meta_description'] = 'Płatność';
$language['makePayment_arbo'] = 'Płatność';
$language['makePayment_your_choice'] = 'Twój wybór';
$language['makePayment_price'] = 'Cena';
$language['makePayment_choice_description'] = 'Opis wybóru';
$language['makePayment_next_step'] = 'Następny krok';
$language['makePayment_allopass_code'] = 'Kod Allopass';

// ProcessPayment.tpl
$language['processPayment_html_title'] = 'Przetwarzanie płatności ...';
$language['processPayment_h1'] = 'Przetwarzanie płatności ...';

// SelectPaymentOptions.tpl
$language['selectPaymentOptions_html_title'] = 'Wybierz pakiet i metodę płatności';
$language['selectPaymentOptions_meta_description'] = 'Wybierz pakiet i metodę płatności';
$language['selectPaymentOptions_arbo'] = 'płatność';
$language['selectPaymentOptions_h1'] = 'Wybierz pakiet i metodę płatności';
$language['selectPaymentOptions_package'] = 'Pakiet';
$language['selectPaymentOptions_select_package'] = 'Wybierz pakiet';
$language['selectPaymentOptions_package_description'] = 'Opis pakietu';
$language['selectPaymentOptions_description'] = 'szczegółowy opis pakietu pojawia się po wybraniu pakietu';
$language['selectPaymentOptions_payment_method'] = 'Metoda płatności';
$language['selectPaymentOptions_select_payment_method'] = 'Wybierz metodę płatności';
$language['selectPaymentOptions_next_step'] = 'Następny krok';


//// -> Template / TemplateName / zdjęcia /
// Edit.tpl
$language['photoEdit_title'] = 'Edycja szczegółów zdjęcia';
$language['photoEdit_name_alt'] = 'Nazwa / Alt';
$language['photoEdit_save_button'] = 'Zapisz';
$language['photoEdit_cancel_button'] = 'Anuluj';


//// -> Template / TemplateName / strona /
// Category.tpl
$language['siteCategory_rss'] = 'RSS';

// Details.tpl
$language['siteDetails_rss'] = 'RSS';
$language['siteDetails_see_sentence'] ='Odwiedź stronę';
$language['siteDetails_categorie'] = ', należącą do kategorii';
$language['siteDetails_keyword_sentence'] = 'Słowa kluczowe związane ze stroną:';
$language['siteDetails_language'] = 'Język';
$language['siteDetails_url'] = 'url';
$language['siteDetails_backlink'] = 'Backlink';
$language['siteDetails_hits'] ='Hits' ;
$language['siteDetails_rate'] ='Rate';
$language['siteDetails__rate'] ='rate';
$language['siteDetails_for'] = 'dla';
$language['siteDetails_comments'] = 'Komentarze';
$language['siteDetails_validation_date'] = 'Data walidacji';
$language['siteDetails_interaction'] = 'Interakcje';
$language['siteDetails_report_problem'] = 'Zgłoś problem';
$language['siteDetails_write_comment'] = 'Dodaj komentarz';
$language['siteDetails_rate_website'] = 'Oceń tą stronę';
$language['siteDetails_contact_webmaster'] = 'Kontakt z webmasterem';
$language['siteDetails_google_infos'] = 'Google information';
$language['siteDetails_pagerank'] = 'PageRank';
$language['siteDetails_loading'] = 'Loading ...';
$language['siteDetails_number_backlinks'] = 'Liczba backlinków';
$language['siteDetails_number_indexed_pages'] = 'Liczba zaindeksowanych stron';
$language['siteDetails_rss_feed'] = 'RSS feed';
$language['siteDetails_company_information'] = 'Informacje o firmie';
$language['siteDetails_adress'] = 'Adres';
$language['siteDetails_postal_code'] = 'Kod pocztowy';
$language['siteDetails_city'] = 'Miasto';
$language['siteDetails_country'] = 'Kraj';
$language['siteDetails_phone_number'] = 'Telefon';
$language['siteDetails_fax_number'] = 'Numer faksu';
$language['siteDetails_wrote_on'] = 'napisał';
$language['siteDetails_comment_rate'] = 'Cena: ';
$language['siteDetails_5'] = '/5';
$language['siteDetails_na'] = 'n/a';
$language['siteDetails_related_sites'] = 'Powiązane strony';

// Item.tpl
$language['siteItem_details'] = 'Szczegóły';
$language['siteItem_new_website'] = 'Nowa strona';
$language['siteItem_keywords'] = 'Słowa kluczowe';
$language['siteItem_number_visitors_sent'] = 'Liczba odwiedzających '; //Number of visitors sent to the website
$language['siteItem_pagerank'] = 'PageRank';
$language['siteItem_hits'] ='Hits';
$language['siteItem_rate'] ='Cena';
$language['siteItem_5'] = '/5';
$language['siteItem__rate']= 'rate';
$language['siteItem_for'] = 'dla';

// Keyword.tpl

// News.tpl
$language['siteNews_html_title'] = 'Nowe strony internetowe na liście';
$language['siteNews_meta_description'] = 'Nowe strony internetowe na liście';
$language['siteNews_arbo'] = 'Nowe strony internetowe na liście';
$language['siteNews_h1'] = 'Nowe strony internetowe na liście';
$language['siteNews_rss'] = 'RSS Nowe strony internetowe na liście';

// RandomList.tpl

// Search.tpl
$language['siteSearch_html_title'] = 'Wyniki wyszukiwania';
$language['siteSearch_arbo'] = 'Wyniki wyszukiwania';
$language['siteSearch_h1'] = 'Wyniki wyszukiwania';

// Tag.tpl

// TopHits.tpl
$language['siteTopHits_html_title'] = 'Najczęściej odwiedzana strona';
$language['siteTopHits_meta_description'] = 'Najczęściej odwiedzana strona';
$language['siteTopHits_arbo'] = 'Najczęściej odwiedzana strony internetowej';
$language['siteTopHits_h1'] = 'Najczęściej odwiedzana strona';

// TopNotes.tpl
$language['siteTopNotes_html_title'] = 'Najczęściej oceniana strona';
$language['siteTopNotes_meta_description'] = 'Najczęściej oceniana strona';
$language['siteTopNotes_arbo'] = 'Najczęściej oceniane stronia internetowej';
$language['siteTopNotes_h1'] = 'Najczęściej oceniana strona';

// TopRank.tpl
$language['siteTopRank_html_title'] = 'Strony posortowane po PageRank';
$language['siteTopRank_meta_description'] = 'Strony posortowane po PageRank';
$language['siteTopRank_arbo'] = 'Strony posortowane po PageRank';
$language['siteTopRank_h1'] = 'Strony posortowane po PageRank';
$language['siteTopRank_whit_pagerank'] = 'Strony z PageRank';

// TopReferrers.tpl
$language['siteTopReferrers_html_title'] = 'Top Referenci';
$language['siteTopReferrers_meta_description'] = 'Top Referenci';
$language['siteTopReferrers_arbo'] = 'Top Referenci';
$language['siteTopReferrers_h1'] = 'Top Referenci';


//// -> Template / TemplateName / webmaster /
// ChangePassword.tpl
$language['webmasterChangePassword_html_title'] = 'Zmień hasło';
$language['webmasterChangePassword_meta_description'] = 'Zmień hasło';
$language['webmasterChangePassword_arbo'] = 'Zmień hasło';
$language['webmasterChangePassword_h1'] = 'Zmień hasło';
$language['webmasterChangePassword_new_pass'] = 'Nowe hasło';
$language['webmasterChangePassword_repeat_pass'] = 'Powtórz nowe hasło';
$language['webmasterChangePassword_button'] = 'Zapisz';

// ChooseSiteType.tpl
$language['webmasterChooseSiteType_html_title'] = 'Wybierz metodę dodawania strony internetowej';
$language['webmasterChooseSiteType_meta_description'] = 'Wybierz metodę dodawania strony internetowej';
$language['webmasterChooseSiteType_arbo'] = 'Wybierz metodę dodawania strony internetowej';
$language['webmasterChooseSiteType_h1'] = 'Wybierz metodę dodawania strony internetowej';
$language['webmasterChooseSiteType_free'] = 'Darmowe';
$language['webmasterChooseSiteType_free_submission'] = 'Darmowe dodawanie';
$language['webmasterChooseSiteType_standard_submission'] = 'Standardowe dodawanie bez uprawnień';
$language['webmasterChooseSiteType_privileged'] = 'Uprzywilejowane';
$language['webmasterChooseSiteType_privilege_submission'] = 'Uprzywilejowane dodawanie';
$language['webmasterChooseSiteType_submission_allowing_you'] = 'Dodawanie pozwala uzyskać pewne przywileje';

// ConfirmSiteEmail.tpl
$language['webmasterConfirmSiteEmail_html_title'] = 'Sprawdzanie e-mail';
$language['webmasterConfirmSiteEmail_meta_description'] = 'Sprawdzanie e-mail';
$language['webmasterConfirmSiteEmail_h1'] = 'Sprawdzanie e-mail';
$language['webmasterConfirmSiteEmail_desc'] = 'Dziękujemy za sprawdzanie poczty elektronicznej';

// ConfirmUserEmail.tpl
$language['webmasterConfirmUserEmail_html_title'] = 'Sprawdzanie e-mail';
$language['webmasterConfirmUserEmail_meta_description'] = 'Sprawdzanie e-mail';
$language['webmasterConfirmUserEmail_h1'] = 'Sprawdzanie e-mail';
$language['webmasterConfirmUserEmail_desc'] = 'Dziękujemy za sprawdzanie poczty elektronicznej';
$language['webmasterConfirmUserEmail_desc2'] = 'Teraz możesz zalogować się na konto';

// EditSite.tpl

// Loading.tpl
$language['webmasterLoading_html_title'] = 'Płatność w trakcie potwierdzenie';
$language['webmasterLoading_meta_description'] = 'Płatność w trakcie potwierdzenie';
$language['webmasterLoading_h1'] = 'Płatność w trakcie potwierdzenie';
$language['webmasterLoading_desc'] = 'Weryfikuje płatność';
$language['webmasterLoading_desc2'] = 'Dziękuję uprzejmie za oczekiwanie';
$language['webmasterLoading_desc3'] = 'Zostaniesz przekierowany do formularza zgłoszeniowego po weryfikacji';

// LogIn.tpl
$language['webmasterLogIn_html_title'] = 'Logowanie / Rejestracja';
$language['webmasterLogIn_meta_description'] = 'Logowanie / Rejestracja';
$language['webmasterLogIn_arbo'] = 'Logowanie / Rejestracja';
$language['webmasterLogIn_h1'] = 'Jesteś już użytkownikiem?';
$language['webmasterLogIn_desc'] = 'Wpisz identyfikatory poniżej';
$language['webmasterLogIn_wrong'] = 'Wprowadzono niewłaściwy login / hasło';
$language['webmasterLogIn_email'] = 'E-mail';
$language['webmasterLogIn_pass'] = 'Hasło';
$language['webmasterLogIn_remember'] = 'Zapamiętaj mnie';
$language['webmasterLogIn_forgot_pass'] = 'Nie pamiętasz hasła?';
$language['webmasterLogIn_button_login'] = 'Zaloguj się';
$language['webmasterLogIn_terms'] = 'Regulamin odwoływania';
$language['webmasterLogIn_new_create'] = 'Nowy? Utwórz konto ';
$language['webmasterLogIn_desc2'] = 'Dzięki rejestracji można dodawać i zarządzać swoją stronę';
$language['webmasterLogIn_repeat_pass'] = 'Powtórz hasło';
$language['webmasterLogIn_subscribe_news'] = 'Subskrybuj biuletyn';
$language['webmasterLogIn_security_code'] = 'Kod bezpieczeństwa';
$language['webmasterLogIn_button_registration'] = 'Rejestracja';

// LostPassword.tpl
$language['webmasterLostPass_lost_pass'] = 'Zapomniałem hasła';
$language['webmasterLostPass_desc'] = 'Wpisz swój adres email poniżej, jeśli nie pamiętasz hasła';
$language['webmasterLostPass_desc2'] = 'Otrzymasz e-maila z linkiem do zmiany hasła.';
$language['webmasterLostPass_mandatory'] = '= To pole jest obowiązkowe';
$language['webmasterLostPass_your_email'] = 'Twój e-mail';
$language['webmasterLostPass_security_code'] = 'Kod bezpieczeństwa';
$language['webmasterLostPass_button_send'] = 'Wyślij nowe hasło';
$language['webmasterLostPass_button_cancel'] = 'Anuluj';
$language['We haven\'t this email in database'] = 'Nie mamy tego adresu e-mail w bazie danych';

// Manage.tpl
$language['webmasterManage_html_title'] = 'Zarządzanie';
$language['webmasterManage_meta_description'] = 'Zarządzanie ';
$language['webmasterManage_arbo'] = 'Zarządzanie ';
$language['webmasterManage_h1'] = 'Strefa Zarejestrowanych';
$language['webmasterManage_add_website'] = 'Dodaj stronę internetową';
$language['webmasterManage_username'] = 'Nazwa użytkownika';
$language['webmasterManage_logout'] = 'Wyloguj';
$language['webmasterManage_website_url'] = 'Strona / URL';
$language['webmasterManage_status'] = 'Status';
$language['webmasterManage_view'] = 'Widok';
$language['webmasterManage_details'] = 'Szczegóły';
$language['webmasterManage_management']=  'Zarządzanie';
$language['webmasterManage_validated'] = 'Zatwierdzone';
$language['webmasterManage_pending'] = 'Oczekujące';
$language['webmasterManage_go'] = 'Start';
$language['webmasterManage_free'] = 'Darmowe';
$language['webmasterManage_privileged'] = 'Uprzywilejowane';
$language['webmasterManage_edit'] = 'Edytuj';
$language['webmasterManage_delete_website?'] = 'Czy na pewno chcesz usunąć swoją stronę?';
$language['webmasterManage_delete'] = 'Usuń';

// SubmitDisabled.tpl
$language['webmasterSubmitDisabled_html_title'] = 'Zgłoszenia są tymczasowo zamknięte. Spróbuj ponownie później. ';
$language['webmasterSubmitDisabled_meta_description'] = 'Zgłoszenia są tymczasowo zamknięte. Spróbuj ponownie później. ';
$language['webmasterSubmitDisabled_arbo'] = 'Zgłoszenia są czasowo zamknięte';
$language['webmasterSubmitDisabled_h1'] = 'Zgłoszenia są czasowo zamknięte.';
$language['webmasterSubmitDisabled_desc'] = 'Zgłoszenia są tymczasowo zamknięte. Spróbuj ponownie później. ';

// SubmitWebsite.tpl
$language['webmasterSubmitWebsite_html_title'] = 'Webmaster - dodaj / edytuj swoją stronę ';
$language['webmasterSubmitWebsite_meta_description'] = 'Webmaster - dodaj / edytuj swoją stronę ';
$language['webmasterSubmitWebsite_arbo'] = 'Zarządzanie';
$language['webmasterSubmitWebsite_arbo2'] = 'Webmaster - dodaj / edytuj swoją strone internetową';
$language['webmasterSubmitWebsite_step'] = 'Krok';
$language['webmasterSubmitWebsite_select_categorie'] = 'Wybierz kategorię';
$language['webmasterSubmitWebsite_suggest_cat'] = 'Zaproponuj kategorię';
$language['webmasterSubmitWebsite_select_other_category'] = 'Proszę wybrać inną kategorię, nie można użyt tej';
$language['webmasterSubmitWebsite_general_information'] = 'Informacje ogólne';
$language['webmasterSubmitWebsite_mandatory_fields'] = '= To pole jest obowiązkowe';
$language['webmasterSubmitWebsite_language_site'] = 'Język strony';
$language['webmasterSubmitWebsite_select_language_site'] = 'Wybierz język strony';
$language['webmasterSubmitWebsite_webmaster_email'] = 'e-mail Webmaster ';
$language['webmasterSubmitWebsite_webmaster_email_tooltip'] = 'Wprowadź prawidłowy adres e-mail';
$language['webmasterSubmitWebsite_website_title'] = 'Tytuł strony';
$language['webmasterSubmitWebsite_website_title_tooltip'] = 'Nazwa używana linku wychodzącego';
$language['webmasterSubmitWebsite_website_url'] = 'Adres strony internetowej (URL)';
$language['webmasterSubmitWebsite_button_metas'] = 'Metas';
$language['webmasterSubmitWebsite_website_url_tooltip'] = 'Przykład: http://www.example.com/';
$language['webmasterSubmitWebsite_rss_feed_title'] = 'RSS feed title';
$language['webmasterSubmitWebsite_rss_feed_title_tooltip'] = 'Nazwa używana jako tekst linku wychodzącego';
$language['webmasterSubmitWebsite_rss_feed_url'] = 'Adres RSS (URL)';
$language['webmasterSubmitWebsite_rss_feed_url_tooltip'] = 'Przykład: http://www.example.com/rss.xml';
$language['webmasterSubmitWebsite_website_desc'] = 'Opis strony internetowej';
$language['webmasterSubmitWebsite_website_desc_tooltip'] = 'Napisz tekst opisujący Twoją witrynę, aktywność ...';
$language['webmasterSubmitWebsite_characters_left'] = 'znaków na stronie';
$language['webmasterSubmitWebsite_add_photo'] = 'Dodaj zdjęcie';
$language['webmasterSubmitWebsite_add_photo_button'] = 'Dodaj zdjęcie';
$language['webmasterSubmitWebsite_search_partnership'] = 'Szukaj partnerstwa';
$language['webmasterSubmitWebsite_search_partnership_tooltip'] = 'Jeśli szukasz partnerów, sprawdź';
$language['webmasterSubmitWebsite_company_info'] = 'Informacje o firmie / Wyświetla szczegółowe informacje na Google Maps';
$language['webmasterSubmitWebsite_adress'] = 'Adres';
$language['webmasterSubmitWebsite_postal_code'] = 'Kod pocztowy';
$language['webmasterSubmitWebsite_city'] = 'Miasto';
$language['webmasterSubmitWebsite_country'] = 'Kraj';
$language['webmasterSubmitWebsite_phone'] = 'Telefon';
$language['webmasterSubmitWebsite_fax'] = 'Numer faksu ';
$language['webmasterSubmitWebsite_select_keywords'] = 'Wybierz słowa kluczowe / Zaproponuj słowa kluczowe';
$language['webmasterSubmitWebsite_keyword'] = 'Słowo kluczowe';
$language['webmasterSubmitWebsite_select_your_keyword'] = 'Wybierz słowo kluczowe';
$language['webmasterSubmitWebsite_suggest_keywords'] = 'Zaproponuj słowa kluczowe';
$language['webmasterSubmitWebsite_backlink'] = 'Backlink';
$language['webmasterSubmitWebsite_backlink_desc'] = 'Backlink do naszego katalogu nie jest obowiązkowy, ale zalecany';
$language['webmasterSubmitWebsite_desc2'] = 'Poprzez umieszczenie backlinku, Twoja strona będzie miała wiele zalet, takich jak poprawa pozycji w swojej kategorii i może zostać wymieniona na naszej stronie Top refferers';
$language['webmasterSubmitWebsite_desc3'] = 'Jeśli zamieścisz backlink na swojej stronie, to musi on być obecny przed dodaniem twojego linku';
$language['webmasterSubmitWebsite_desc4'] = 'Proszę wprowadzić adres URL backlink w polu poniżej';
$language['webmasterSubmitWebsite_backlink_url'] = 'Backlink (URL),';
$language['webmasterSubmitWebsite_backlink_html1'] = 'Backlink HTML kod 1';
$language['webmasterSubmitWebsite_backlink_html2'] = 'Backlink HTML kod 1';
$language['webmasterSubmitWebsite_backlink_html_tooltip'] = 'Dziękujemy za wstawienie kodu na swojej stronie internetowej';
$language['webmasterSubmitWebsite_submit_website'] = 'Wyślij swoją stronę';
$language['webmasterSubmitWebsite_subscribe_newsletter'] = 'Zapisz się do newslettera';
$language['webmasterSubmitWebsite_security_code'] = 'Kod bezpieczeństwa';
$language['webmasterSubmitWebsite_terms_use_desc'] = 'Klikając "Wyślij moją stronę", akceptujesz regulamin';
$language['webmasterSubmitWebsite_read_terms'] = 'Przeczytaj nasze warunki';
$language['webmasterSubmitWebsite_checking'] = 'Sprawdzanie strony internetowej ...';
$language['webmasterSubmitWebsite_button_submit'] = 'Wyślij moją stronę';


$language['This site is not allowed to be offered more times.'] = 'Ta strona nie może być oferowane kilka razy.';
$language['Description of site must have minimum'] = 'Opis strony musi mieć minimum';
$language['characters length.'] = 'Liczba znaków.';
$language['The registration was successful! You can login now.'] =' Dziękujemy za rejestrację. Teraz możesz zalogować się.';
$language['The registration was successful! You must confirm your email. Check your inbox.'] =' Dziękujemy za rejestrację. E-mail został wysłany do Ciebie. Należy kliknąć link w e-mailu, aby potwierdzić rejestrację. Następnie można się zalogować i dodać stronę';
$language['The site was successfully submitted.'] = 'Strona została pomyślnie dodana.';
$language['This field is required'] = 'To pole jest wymagane';
$language['The site was successfully submitted. You must confirm your email. Check your inbox.'] ='Strona została dodana pomyślnie. E-mail został wysłany do Ciebie. Należy kliknąć link w e-mailu, aby potwierdzić dodanie strony.'; 
/* END Front Sites Texts */
	
/*foreach ($language as $key => $val)
{
	$language[$key] = str_replace("'", "`",$val);
} */

// set values of English expressions same as keys
if ($languageName == 'English')
{
	foreach ($language as $key => $val)
	{
		if ($val == '')
			$language[$key] = $key;
	}
}
?>
