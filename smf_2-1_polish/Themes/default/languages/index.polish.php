<?php
// Version: 2.1 Beta 3; Index

global $forum_copyright, $webmaster_email, $scripturl, $context, $boardurl;

// Native name, please use full HTML entities to write your language's name.
$txt['native_name'] = 'Polski';

// Locale (strftime, pspell_new) and spelling. (pspell_new, can be left as '' normally.)
// For more information see:
//   - https://php.net/function.pspell-new
//   - https://php.net/function.setlocale
// Again, SPELLING SHOULD BE '' 99% OF THE TIME!!  Please read this!
$txt['lang_locale'] = 'pl_PL.utf8';
$txt['lang_dictionary'] = 'pl';
$txt['lang_spelling'] = '';
//https://developers.google.com/recaptcha/docs/language
$txt['lang_recaptcha'] = 'en';

// Ensure you remember to use uppercase for character set strings.
$txt['lang_character_set'] = 'UTF-8';
// Character set and right to left?
$txt['lang_rtl'] = false;
// Number format.
$txt['number_format'] = '1,234.00';

$txt['days_title'] = 'Dni';
$txt['days'] = array('Niedziela', 'Poniedziałek', 'Wtorek', 'Środa', 'Czwartek', 'Piątek', 'Sobota');
$txt['days_short'] = array('Nd', 'Pn', 'Wt', 'Śr', 'Cz', 'Pt', 'So');
// Months must start with 1 => 'January'. (or translated, of course.)
$txt['months_title'] = 'Miesięcy';
$txt['months'] = array(1 => 'Styczeń', 'Luty', 'Marzec', 'Kwiecień', 'Maj', 'Czerwiec', 'Lipiec', 'Sierpień', 'Wrzesień', 'Październik', 'Listopad', 'Grudzień');
$txt['months_titles'] = array(1 => 'Styczeń', 'Luty', 'Marzec', 'Kwiecień', 'Maj', 'Czerwiec', 'Lipiec', 'Sierpień', 'Wrzesień', 'Październik', 'Listopad', 'Grudzień');
$txt['months_short'] = array(1 => 'Sty', 'Lut', 'Mar', 'Kwi', 'Maj', 'Cze', 'Lip', 'Sie', 'Wrz', 'Paź', 'Lis', 'Gru');
$txt['prev_month'] = 'Previous month';
$txt['next_month'] = 'Next month';
$txt['start'] = 'Start';
$txt['end'] = 'End';
$txt['starts'] = 'Starts';
$txt['ends'] = 'Ends';
$txt['none'] = 'None';

$txt['minutes_label'] = 'Minut';
$txt['hours_label'] = 'Godzin';
$txt['years_title'] = 'Lat';

$txt['time_am'] = 'am';
$txt['time_pm'] = 'pm';

$txt['admin'] = 'Administracja';
$txt['moderate'] = 'Moderuj';

$txt['save'] = 'Zapisz';
$txt['reset'] = 'Reset';
$txt['upload'] = 'Wyślij';
$txt['upload_all'] = 'Upload all';
$txt['processing'] = 'Processing...';

$txt['modify'] = 'Modyfikuj';
$txt['forum_index'] = '%1$s - Indeks';
$txt['members'] = 'użytkowników';
$txt['board_name'] = 'Nazwa działu';
$txt['posts'] = 'Wiadomości';

$txt['member_postcount'] = 'Wiadomości';
$txt['no_subject'] = '(Bez tematu)';
$txt['view_profile'] = 'Zobacz profil';
$txt['guest_title'] = 'Gość';
$txt['author'] = 'Autor';
$txt['on'] = 'dnia';
$txt['remove'] = 'Usuń';
$txt['start_new_topic'] = 'Rozpocznij nowy wątek';

$txt['login'] = 'Zaloguj się';
// Use numeric entities in the below string.
$txt['username'] = 'Nazwa użytkownika';
$txt['password'] = 'Hasło';

$txt['username_no_exist'] = 'Nazwa użytkownika nie istnieje.';
$txt['no_user_with_email'] = 'Brak użytkowników powiązanych z tym adresem email.';

$txt['board_moderator'] = 'Moderator działu';
$txt['remove_topic'] = 'Usuń wątek';
$txt['topics'] = 'wątkach,';
$txt['modify_msg'] = 'Modyfikuj wiadomość';
$txt['name'] = 'Nazwa';
$txt['email'] = 'Email';
$txt['user_email_address'] = 'Adres Email';
$txt['subject'] = 'Temat';
$txt['message'] = 'Wiadomość';
$txt['redirects'] = 'Przekierowania';
$txt['quick_modify'] = 'Szybka edycja';
$txt['quick_modify_message'] = 'You have successfully modified this message.';
$txt['reason_for_edit'] = 'Powód edycji';

$txt['choose_pass'] = 'Wybierz hasło';
$txt['verify_pass'] = 'Potwierdź hasło';
$txt['notify_announcements'] = 'Allow the administrators to send me important news by email';

$txt['position'] = 'Pozycja';

$txt['profile_of'] = 'Zobacz profil';
$txt['total'] = 'W sumie';
$txt['website'] = 'Strona WWW';
$txt['register'] = 'Zarejestruj się';
$txt['warning_status'] = 'Status ostrzeżenia';
$txt['user_warn_watch'] = 'Użytkownik jest na liście obserwowanych';
$txt['user_warn_moderate'] = 'Wiadomość użytkownika dołączyła do kolejki oczekujących na zatwierdzenie';
$txt['user_warn_mute'] = 'Użytkownik jest zbanowany i nie może wysyłać wiadomości';
$txt['warn_watch'] = 'Obserwowany';
$txt['warn_moderate'] = 'Moderowany';
$txt['warn_mute'] = 'Wyciszony';

$txt['message_index'] = 'Indeks wiadomości';
$txt['news'] = 'Aktualności';
$txt['home'] = 'Strona główna';
$txt['page'] = 'Strona';
$txt['prev'] = 'poprzednia strona';
$txt['next'] = 'następna strona';

$txt['lock_unlock'] = 'Zamknij/Otwórz wątek';
$txt['post'] = 'Wyślij wiadomość';
$txt['error_occured'] = 'Wystąpił błąd!';
$txt['at'] = 'w';
$txt['by'] = 'wysłana przez';
$txt['logout'] = 'Wyloguj się';
$txt['started_by'] = 'Zaczęty przez';
$txt['topic_started_by'] = 'Utworzony przez <strong>%1$s</strong> w <em>%2$s</em>';
$txt['replies'] = 'Odpowiedzi';
$txt['last_post'] = 'Ostatnia wiadomość';
$txt['first_post'] = 'Pierwsza wiadomość';
$txt['last_poster'] = 'Ostatnia wiadomość przez';
$txt['last_post_message'] = '<strong>Ostatnia wiadomość: </strong>%3$s <span class="postby">%2$s przez %1$s</span>';
$txt['last_post_topic'] = '%1$s<br>przez %2$s';
$txt['post_by_member'] = '<strong>%1$s</strong> przez <strong>%2$s</strong><br>';
$txt['boardindex_total_posts'] = '%1$s Wiadomości %2$s Wątków %3$s Użytkowników ';
$txt['show'] = 'Pokaż';
$txt['hide'] = 'Ukryj';

$txt['admin_login'] = 'Logowanie do administracji';
// Use numeric entities in the below string.
$txt['topic'] = 'Wątek';
$txt['help'] = 'Pomoc';
$txt['terms_and_rules'] = 'Terms and Rules';
$txt['watch_board'] = 'Watch this Board';
$txt['unwatch_board'] = 'Stop watching Board';
$txt['watch_topic'] = 'Watch this Topic';
$txt['unwatch_topic'] = 'Stop watching Topic';
$txt['watching_this_topic'] = 'You are watching this topic, and will receive notifications about it.';
$txt['notify'] = 'Powiadamiaj';
$txt['unnotify'] = 'Przestań śledzić';
$txt['notify_request'] = 'Czy chcesz otrzymywać powiadomienia, kiedy ktoś odpowie na ten wątek?';
// Use numeric entities in the below string.
$txt['regards_team'] = 'Pozdrowienia, Załoga' . "\n" . $context['forum_name'] .'.';
$txt['notify_replies'] = 'Powiadamiaj o odpowiedziach';
$txt['move_topic'] = 'Przesuń wątek';
$txt['move_to'] = 'Przesuń do';
$txt['pages'] = 'Strony';
$txt['users_active'] = 'Użytkownicy aktywni w ciągu ostatnich %s minut';
$txt['personal_messages'] = 'Prywatne Wiadomości';
$txt['reply_quote'] = 'Odpowiedz cytując';
$txt['reply'] = 'Odpowiedz';
$txt['reply_noun'] = 'Odpowiedź';
$txt['reply_number'] = 'Odpowiedź #%1$s';
$txt['approve'] = 'Zatwierdź';
$txt['unapprove'] = 'Usuń zatwierdzenie';
$txt['approve_all'] = 'zatwierdź wszystko';
$txt['issue_warning'] = 'Ostrzeżenie';
$txt['awaiting_approval'] = 'Oczekujące na zatwierdzenie';
$txt['attach_awaiting_approve'] = 'Załączniki oczekujące na zatwierdzenie';
$txt['post_awaiting_approval'] = 'Uwaga: Ta wiadomość oczekuje na zatwierdzenie przez moderatora.';
$txt['there_are_unapproved_topics'] = 'Jest %1$s wątków i %2$s wiadomości oczekujących na zatwierdzenie w tym forum. Kliknij <a href="%3$s">tutaj</a> aby wyświetlić wszystkie.';
$txt['send_message'] = 'Wyślij wiadomość';

$txt['msg_alert_no_messages'] = 'nie posiadasz żadnych wiadomości';
$txt['msg_alert_one_message'] = 'masz <a href="%1$s">1 wiadomość</a> ';
$txt['msg_alert_many_message'] = 'masz <a href="%1$s">%2$d wiadomości</a>';
$txt['msg_alert_one_new'] = '1 nowa';
$txt['msg_alert_many_new'] = '%1$d nowych';
$txt['new_alert'] = 'New alert';
$txt['remove_message'] = 'Usunąć tą wiadomość';
$txt['remove_message_question'] = 'Remove this post?';

$txt['topic_alert_none'] = 'Brak wiadomości...';
$txt['pm_alert_none'] = 'Brak wiadomości...';
$txt['no_messages'] = 'No messages';

$txt['online_users'] = 'Użytkownicy online';
$txt['jump_to'] = 'Skocz do';
$txt['go'] = 'Idź';
$txt['are_sure_remove_topic'] = 'Na pewno chcesz usunąć ten wątek?';
$txt['yes'] = 'Tak';
$txt['no'] = 'Nie';

$txt['search_end_results'] = 'Koniec wyników';
$txt['search_on'] = 'w';

$txt['search'] = 'Szukaj';
$txt['all'] = 'Wszystkie';
$txt['search_thisbrd'] = '';
$txt['search_entireforum'] = 'Całe Forum';
$txt['search_thisboard'] = 'This board';
$txt['search_thistopic'] = 'Ten wątek';
$txt['search_members'] = 'Użytkowników';

$txt['back'] = 'Wróć';
$txt['continue'] = 'Kontynuuj';
$txt['password_reminder'] = 'Przypomnienie hasła';
$txt['topic_started'] = 'Wątek zaczęty przez';
$txt['title'] = 'Tytuł';
$txt['post_by'] = 'Wiadomość wysłana przez';
$txt['memberlist_searchable'] = 'Lista zarejestrowanych użytkowników.';
$txt['welcome_newest_member'] = 'Witamy nowego użytkownika %1$s.';
$txt['admin_center'] = 'Centrum administracji';
$txt['last_edit_by'] = '<span class="lastedit">Ostatnia edycja</span>: %1$s by %2$s';
$txt['last_edit_reason'] = '<span class="lastedit">Powód</span>: %1$s';
$txt['notify_deactivate'] = 'Czy chcesz wyłączyć powiadamianie o tym wątku?';

$txt['recent_posts'] = 'Ostatnie wiadomości';

$txt['location'] = 'Miejsce pobytu';
$txt['gender'] = 'Płeć';
$txt['personal_text'] = 'Tekst osobisty';
$txt['date_registered'] = 'Data rejestracji';

$txt['recent_view'] = 'Zobacz ostatnio wysłane wiadomości';
$txt['recent_updated'] = 'jest najbardziej aktualnym wątkiem';
$txt['is_recent_updated'] = '%1$s wątek w którym najczęściej dodawane są odpowiedzi';

$txt['male'] = 'Mężczyzna';
$txt['female'] = 'Kobieta';

$txt['error_invalid_characters_username'] = 'Nieprawidłowy znak w nazwie użytkownika.';

$txt['welcome_guest'] = 'Witaj, <strong>%1$s</strong>. Prosimy <a href="%3$s" onclick="%4$s">zaloguj się</a>.';

//$txt['welcome_guest_register'] = 'Welcome, <strong>%1$s</strong>. Please <a href="' . $scripturl . '?action=login">login</a> or <a href="' . $scripturl . '?action=register">register</a>.';
$txt['welcome_guest_register'] = 'Witamy na <strong>%2$s</strong>. Prosimy <a href="%3$s" onclick="%4$s">zaloguj</a> lub <a href="%5$s">zarejestruj się</a>.';

$txt['please_login'] = 'Prosimy <a href="' . $scripturl . '?action=login">zaloguj się</a>.';
$txt['login_or_register'] = '<a href="' . $scripturl . '?action=login">lZaloguj się</a> lub <a href="' . $scripturl . '?action=signup">zarejestruj</a>.';
$txt['welcome_guest_activate'] = '<br>Czy dotarł do Ciebie <a href="' . $scripturl . '?action=activate">email aktywacyjny?</a>';
// @todo the following to sprintf
$txt['hello_member'] = 'Hej,';
// Use numeric entities in the below string.
$txt['hello_guest'] = 'Witamy,';
$txt['welmsg_hey'] = 'Hej,';
$txt['welmsg_welcome'] = 'Witamy,';
$txt['welmsg_please'] = 'Proszę';
$txt['select_destination'] = 'Wybierz cel';

// Escape any single quotes in here twice.. 'it\'s' -> 'it\\\'s'.
$txt['posted_by'] = 'Wysłany przez';

$txt['icon_smiley'] = 'Uśmiech';
$txt['icon_angry'] = 'Złość';
$txt['icon_cheesy'] = 'Chichot';
$txt['icon_laugh'] = 'Śmiech';
$txt['icon_sad'] = 'Smutny';
$txt['icon_wink'] = 'Mrugnięcie';
$txt['icon_grin'] = 'Duży uśmiech';
$txt['icon_shocked'] = 'Szok';
$txt['icon_cool'] = 'Spoko';
$txt['icon_huh'] = 'Co?';
$txt['icon_rolleyes'] = 'Z politowaniem';
$txt['icon_tongue'] = 'Język';
$txt['icon_embarrassed'] = 'Zawstydzony';
$txt['icon_lips'] = 'Buzia na kłódkę';
$txt['icon_undecided'] = 'Niezdecydowany';
$txt['icon_kiss'] = 'Buziak';
$txt['icon_cry'] = 'Płacz';

$txt['moderator'] = 'Moderator';
$txt['moderators'] = 'Moderatorzy';

$txt['mark_board_read'] = 'Zaznacz wątki w tym dziale jako przeczytane';
$txt['views'] = 'Wyświetleń';
$txt['new'] = 'Nowy';

$txt['view_all_members'] = 'Zobacz wszystkich użytkowników';
$txt['view'] = 'Zobacz';

$txt['viewing_members'] = 'Przeglądanie użytkowników %1$s do %2$s';
$txt['of_total_members'] = 'z %1$s wszystkich użytkowników';

$txt['forgot_your_password'] = 'Zapomniałeś hasła?';

$txt['date'] = 'Data';
// Use numeric entities in the below string.
$txt['from'] = 'Od';
$txt['check_new_messages'] = 'Sprawdź czy nie ma nowych wiadomości';
$txt['to'] = 'Do';

$txt['board_topics'] = 'Wątków';
$txt['members_title'] = 'Użytkownicy';
$txt['members_list'] = 'Lista użytkowników';
$txt['new_posts'] = 'Nowe wiadomości';
$txt['old_posts'] = 'Brak nowych wiadomości';
$txt['redirect_board'] = 'Przekieruj forum';
$txt['post_becomesUnapproved'] = '';

$txt['sendtopic_send'] = 'Wyślij';
$txt['report_sent'] = 'Twój raport został wysłany pomyślnie.';
$txt['post_becomes_unapproved'] = 'Your message became unapproved because it was posted on an unapproved topic, once the topic gets approved your message will be approved too.';

$txt['time_offset'] = 'Przesunięcie czasu';
$txt['or'] = 'lub';

$txt['no_matches'] = 'Nic nie znaleziono';

$txt['notification'] = 'Powiadomienie';

$txt['your_ban'] = 'Przepraszamy %1$s, zostałeś zbanowany na tym forum!';
$txt['your_ban_expires'] = 'Twój ban wygaśnie za %1$s.';
$txt['your_ban_expires_never'] = 'Twój ban nie wygaśnie.';
$txt['ban_continue_browse'] = 'Możesz kontynuować przeglądanie forum jako gość.';

$txt['mark_as_read'] = 'Zaznacz wątki jako przeczytane';

$txt['locked_topic'] = 'Zamknięty wątek';
$txt['normal_topic'] = 'Normalny wątek';
$txt['participation_caption'] = 'Wątek w którym uczestniczyłeś';
$txt['moved_topic'] = 'Przenieś wątek';

$txt['go_caps'] = 'IDŹ';

$txt['print'] = 'Drukuj';
$txt['profile'] = 'Profil';
$txt['topic_summary'] = 'Podgląd wątku';
$txt['not_applicable'] = 'brak';
$txt['name_in_use'] = 'Ta nazwa jest już używana przez innego użytkownika.';

$txt['total_members'] = 'Użytkowników w sumie';
$txt['total_posts'] = 'Wiadomości w sumie';
$txt['mins_logged_in'] = '';
$txt['total_topics'] = 'Wątków w sumie';

$txt['time_logged_in'] = 'Time to stay logged in';

$txt['preview'] = 'Podgląd';
$txt['always_logged_in'] = 'Bądź zawsze zalogowany';

$txt['logged'] = 'IP zapisane';
// Use numeric entities in the below string.
$txt['ip'] = 'IP';

$txt['www'] = 'WWW';

$txt['hours'] = 'godzin';
$txt['minutes'] = 'minut';
$txt['seconds'] = 'sekund';

// Used upper case in Paid subscriptions management
$txt['hour'] = 'Godzina';
$txt['days_word'] = 'dni';

$txt['search_for'] = 'Szukaj';
$txt['search_match'] = 'Porównaj';

$txt['forum_in_maintenance'] = 'Your forum is in Maintenance Mode. Only administrators can currently log in.';
$txt['maintenance_page'] = 'Możesz wyłączyć tryb konserwacji forum w sekcji <a href="%1$s">Ustawienia serwera</a>.';

$txt['read_one_time'] = 'Przeczytano 1 raz';
$txt['read_many_times'] = 'Przeczytano %1$d razy';

$txt['forum_stats'] = 'Statystyki forum';
$txt['latest_member'] = 'Najnowszy użytkownik';
$txt['total_cats'] = 'Kategorii w sumie';
$txt['latest_post'] = 'Ostatnio wysłane';

$txt['total_boards'] = 'Działów w sumie';

$txt['print_page'] = 'Drukuj stronę';
$txt['print_page_text'] = 'Tylko tekst';
$txt['print_page_images'] = 'Tekst z obrazami';

$txt['valid_email'] = 'Podaj prawidłowy adres email.';

$txt['geek'] = 'Jestem kujonem!';
$txt['info_center_title'] = '%1$s - Centrum informacji';

$txt['watch'] = 'Obserwuj';
$txt['unwatch'] = 'Przestań obserwować';

$txt['check_all'] = 'Zaznacz wszystko';

// Use numeric entities in the below string.
$txt['database_error'] = 'Błąd bazy danych';
$txt['try_again'] = 'Spróbuj ponownie. Jeśli powrócisz do tego komunikatu, zgłoś błąd administratorowi.';
$txt['file'] = 'Plik';
$txt['line'] = 'Linia';
// Use numeric entities in the below string.
$txt['tried_to_repair'] = 'SMF wykryło i próbowało automatycznie naprawić błąd w bazie danych. Jeżeli w dalszym ciągu będziesz napotykał problemy, lub otrzymywał te emaile, skontaktuj się z właścicielem serwera.';
$txt['database_error_versions'] = '<strong>Uwaga:</strong> Wygląda na to, że twoja baza danych wymaga uaktualnienia. Pliki forum mają obecnie wersję %1$s, podczas gdy baza danych jest w wersji %2$s. Powinieneś uruchomić najnowszą wersję upgrade.php.';
$txt['template_parse_error'] = 'Błąd parsowania stylu!';
$txt['template_parse_error_message'] = 'Wygląda na to, że coś poszło nie tak w systemie stylów. Ten problem powinien być tylko tymczasowy, spróbuj później. Jeżeli w dalszym ciągu widzisz ten komunikat, skontaktuj się z administratorem.<br><br>Możesz również spróbować <a href="javascript:location.reload();">odświeżyć tę stronę</a>.';
$txt['template_parse_error_details'] = 'Wystąpił problem z załadowaniem <pre><strong>%1$s</strong></pre> pliku stylu lub języka. Sprawdź składnię i spróbuj ponownie - pamiętaj, pojedyncze cudzysłowy (<pre>\'</pre>) często muszą być poprzedzone ukośnikiem (<pre>\\</pre>).  Aby zobaczyć bardziej szczegółową informację o błędzie z PHP, spróbuj <a href="' . $boardurl . '%1$s">uzyskać dostęp do pliku bezpośrednio</a>.<br><br>Możesz również  <a href="javascript:location.reload();">odświeżyć tę stronę</a> lub <a href="' . $scripturl . '?theme=1">użyć domyślnego stylu</a>.';
$txt['template_parse_errmsg'] = 'Unfortunately more information is not available at this time as to exactly what is wrong.';

$txt['today'] = '<strong>Dzisiaj</strong> o ';
$txt['yesterday'] = '<strong>Wczoraj</strong> o ';
$txt['new_poll'] = 'Nowa ankieta';
$txt['poll_question'] = 'Pytanie';
$txt['poll_vote'] = 'Zagłosuj';
$txt['poll_total_voters'] = 'Głosów w sumie';
$txt['shortcuts'] = 'Skróty: naciśnij alt+s aby wysłać wiadomość, alt+p aby ją podejrzeć';
$txt['shortcuts_firefox'] = 'Skróty: naciśnij shift+alt+s aby wysłać wiadomość, shift+alt+p aby ją podejrzeć';
$txt['shortcuts_mac'] = 'Shortcuts: ⌃⌥S save/post, ⌃⌥P preview';
$txt['shortcuts_drafts'] = ', alt+d zapisz szkic';
$txt['shortcuts_drafts_firefox'] = ', shift+alt+d zapisz szkic';
$txt['shortcuts_drafts_mac'] = ', ⌃⌥D save draft';
$txt['poll_results'] = 'Zobacz wyniki';
$txt['poll_lock'] = 'Zamknij głosowanie';
$txt['poll_unlock'] = 'Otwórz głosowanie';
$txt['poll_edit'] = 'Modyfikuj ankietę';
$txt['poll'] = 'Ankieta';
$txt['one_hour'] = '1 Godzina';
$txt['one_day'] = '1 Dzień';
$txt['one_week'] = '1 Tydzień';
$txt['two_weeks'] = '2 tygodnie';
$txt['one_month'] = '1 Miesiąc';
$txt['two_months'] = '2 miesiące';
$txt['forever'] = 'Zawsze';
$txt['quick_login_dec'] = 'Zaloguj się podając nazwę użytkownika, hasło i długość sesji';
$txt['moved'] = 'PRZENIESIONY';
$txt['move_why'] = 'Please enter a brief description as to<br>why this topic is being moved.';
$txt['board'] = 'Dział';
$txt['in'] = 'w';
$txt['sticky_topic'] = 'Wątek przyklejony';

$txt['delete'] = 'Usuń';
$txt['no_change'] = 'No change';

$txt['your_pms'] = 'Twoje prywatne wiadomości';

$txt['kilobyte'] = 'kB';
$txt['megabyte'] = 'MB';

$txt['more_stats'] = '[Więcej statystyk]';

// Use numeric entities in the below three strings.
$txt['code'] = 'Kod';
$txt['code_select'] = 'Zaznacz';
$txt['quote_from'] = 'Cytat';
$txt['quote'] = 'Cytuj';
$txt['quote_action'] = 'Cytat';
$txt['quote_selected_action'] = 'Quote selected text';
$txt['fulledit'] = 'Pełna&nbsp;edycja';
$txt['edit'] = 'Edytuj';
$txt['quick_edit'] = 'Szybka edycja';
$txt['post_options'] = 'Więcej...';

$txt['merge_to_topic_id'] = 'ID docelowego wątku';
$txt['split'] = 'Podziel wątek';
$txt['merge'] = 'Scal wątki';
$txt['target_id'] = 'Select target by topic ID';
$txt['target_below'] = 'Select target from the list below';
$txt['subject_new_topic'] = 'Temat nowego wątku';
$txt['split_this_post'] = 'Wydziel tylko tę wiadomość.';
$txt['split_after_and_this_post'] = 'Wydziel tę wiadomość i wszystkie nowsze od niej.';
$txt['select_split_posts'] = 'Wybierz wiadomości do wydzielenia.';
$txt['new_topic'] = 'Nowy wątek';
$txt['split_successful'] = 'Wątek pomyślnie został podzielony na dwa wątki.';
$txt['origin_topic'] = 'Oryginalny wątek';
$txt['please_select_split'] = 'Wybierz, które wiadomości chcesz wydzielić.';
$txt['merge_successful'] = 'Wątki zostały scalone.';
$txt['new_merged_topic'] = 'Nowo scalony wątek';
$txt['topic_to_merge'] = 'Wątek do scalenia';
$txt['target_board'] = 'Dział docelowy';
$txt['target_topic'] = 'Wątek docelowy';
$txt['merge_confirm'] = 'Na pewno chcesz scalić';
$txt['with'] = 'i';
$txt['merge_desc'] = 'Ta funkcja scali wiadomości z dwóch wątków w jeden. Wiadomości będą posortowane według daty wysłania. Najwcześniej wysłana wiadomość będzie pierwszą wiadomością wątku.';

$txt['set_sticky'] = 'Przyklej wątek';
$txt['set_nonsticky'] = 'Odklej wątek';
$txt['set_lock'] = 'Zamknij wątek';
$txt['set_unlock'] = 'Otwórz wątek';

$txt['search_advanced'] = 'Szukanie zaawansowane';

$txt['security_risk'] = 'POWAŻNE RYZYKO BEZPIECZEŃSTWA:';
$txt['not_removed'] = 'Nie usunąłeś ';
$txt['not_removed_extra'] = '%1$s jest kopią %2$s, która nie została wygenerowana przez SMF. Można uzyskać do niej bezpośredni dostęp, żeby zdobyć nieautoryzowany dostęp do forum. Usuń ją natychmiast.';
$txt['generic_warning'] = 'Ostrzeżenie';
$txt['agreement_missing'] = 'Wymagasz zaakceptowania regulaminu przez nowych użytkowników, niestety plik (agreement.txt) nie istnieje.';

$txt['cache_writable'] = 'Nie można zapisywać w katalogu cache - wpływa to niekorzystnie na działanie Twojego forum.';

$txt['page_created_full'] = 'Strona utworzona w %1$.3f sekund z %2$d zapytaniami.';

$txt['report_to_mod_func'] = 'Użyj tej funkcji aby poinformować moderatorów i administratorów forum o wiadomości łamiącej zasady forum.';
$txt['report_profile_func'] = 'Use this function to inform the administrators of abusive profile content, such as spam or inappropriate images.';

$txt['online'] = 'Online';
$txt['member_is_online'] = '%1$s jest dostępny';
$txt['offline'] = 'Offline';
$txt['member_is_offline'] = '%1$s jest niedostępny';
$txt['pm_online'] = 'Prywatna wiadomość (Online)';
$txt['pm_offline'] = 'Prywatna wiadomość (Offline)';
$txt['status'] = 'Status';

$txt['go_up'] = 'Do góry';
$txt['go_down'] = 'Do dołu';

$forum_copyright = '\'<a href="\' . $scripturl . \'?action=credits" title="License" target="_blank" class="new_win">%1$s &copy; %2$s</a>, <a href="http://www.simplemachines.org" title="Simple Machines" target="_blank" class="new_win">Simple Machines</a>\'';

$txt['birthdays'] = 'Urodziny:';
$txt['events'] = 'Wydarzenia:';
$txt['birthdays_upcoming'] = 'Nadchodzące urodziny:';
$txt['events_upcoming'] = 'Nadchodzące wydarzenia:';
// Prompt for holidays in the calendar, leave blank to just display the holiday's name.
$txt['calendar_prompt'] = '';
$txt['calendar_month'] = 'Miesiąc';
$txt['calendar_year'] = 'Rok';
$txt['calendar_day'] = 'Dzień';
$txt['calendar_event_title'] = 'Nazwa wydarzenia:';
$txt['calendar_event_options'] = 'Opcje wydarzenia';
$txt['calendar_post_in'] = 'Wiadomość w';
$txt['calendar_edit'] = 'Modyfikuj wydarzenie';
$txt['calendar_export'] = 'Eksportuj wydażenie';
$txt['calendar_view_week'] = 'Pokaż tydzień';
$txt['event_delete_confirm'] = 'Usunąć to wydarzenie?';
$txt['event_delete'] = 'Usuń wydarzenie';
$txt['calendar_post_event'] = 'Dodaj wydarzenie';
$txt['calendar'] = 'Kalendarz';
$txt['calendar_link'] = 'Odnośnik do kalendarza';
$txt['calendar_upcoming'] = 'Nadchodzące wydarzenia';
$txt['calendar_today'] = 'Kalendarz na dziś';
$txt['calendar_week'] = 'Tydzień';
$txt['calendar_week_title'] = 'Tydzień %1$d z %2$d ';
// %1$s is the month, %2$s is the day, %3$s is the year. Change to suit your language.
$txt['calendar_week_beginning'] = 'Week beginning %1$s %2$s, %3$s';
$txt['calendar_numb_days'] = 'Liczba dni';
$txt['calendar_how_edit'] = 'jak modyfikować wydarzenia?';
$txt['calendar_link_event'] = 'Połącz zdarzenie z wiadomością';
$txt['calendar_confirm_delete'] = 'Na pewno chcesz usunąć to zdarzenie?';
$txt['calendar_linked_events'] = 'Połączone Zdarzenia';
$txt['calendar_click_all'] = 'Kliknij, by zobaczyć wszystkie %1$s';
$txt['calendar_allday'] = 'All day';
$txt['calendar_timezone'] = 'Time zone';
$txt['calendar_list'] = 'List';

$txt['movetopic_change_subject'] = 'Change the topic\'s subject';
$txt['movetopic_new_subject'] = 'New subject';
$txt['movetopic_change_all_subjects'] = 'Change every message\'s subject';
$txt['move_topic_unapproved_js'] = 'Uwaga! Ten wątek nie został jeszcze zaakceptowany.\\n\\nNie jest zalecane abyś przesuwał wątek, chyba że zamierzasz zaakceptować wiadomości natychmiast po tym ruchu.';
$txt['movetopic_auto_board'] = '[DZIAŁ]';
$txt['movetopic_auto_topic'] = '[ODNOŚNIK DO WĄTKU]';
$txt['movetopic_default'] = 'Ten wątek został przeniesiony do ' . $txt['movetopic_auto_board'] . ".\n\n" . $txt['movetopic_auto_topic'];
$txt['movetopic_redirect'] = 'Przekieruj do przeniesionego wątku';

$txt['post_redirection'] = 'Post a redirection topic';
$txt['redirect_topic_expires'] = 'Automatically remove the redirection topic';
$txt['mergetopic_redirect'] = 'Redirect to the merged topic';
$txt['merge_topic_unapproved_js'] = 'Warning! This topic has not yet been approved.\\n\\nIt is not recommended that you create a redirection topic unless you intend to approve the post immediately following the merge.';

$txt['theme_template_error'] = 'Nie można załadować szablonu \'%1$s\'.';
$txt['theme_language_error'] = 'Nie można załadować pliku języka \'%1$s\'.';

$txt['sub_boards'] = 'Działy podrzędne';
$txt['restricted_board'] = 'Restricted Board';

$txt['smtp_no_connect'] = 'Nie można połączyć się z hostem SMTP';
$txt['smtp_port_ssl'] = 'Błędne ustawienie portu SMTP, powinno być 465 dla serwerów SSL.';
$txt['smtp_bad_response'] = 'Nie można uzyskać odpowiedzi z serwera poczty';
$txt['smtp_error'] = 'Wystąpiły błędy podczas wysyłania poczty. Błąd: ';
$txt['mail_send_unable'] = 'Nie można wysłać wiadomości email na adres \'%1$s\'';

$txt['mlist_search'] = 'Szukaj użytkowników';
$txt['mlist_search_again'] = 'Szukaj ponownie';
$txt['mlist_search_filter'] = 'Opcje wyszukiwania';
$txt['mlist_search_email'] = 'Szukaj wg adresu email';
$txt['mlist_search_messenger'] = 'Szukaj wg identyfikatora komunikatora';
$txt['mlist_search_group'] = 'Szukaj wg pozycji';
$txt['mlist_search_name'] = 'Szukaj wg nazwy';
$txt['mlist_search_website'] = 'Szukaj wg strony WWW';
$txt['mlist_search_results'] = 'Szukaj w wynikach';
$txt['mlist_search_by'] = 'Szukaj w %1$s';
$txt['mlist_menu_view'] = 'Widok listy użytkowników';

$txt['attach_downloaded'] = 'pobrany';
$txt['attach_viewed'] = 'wyświetlony';

$txt['settings'] = 'Konfiguracja';
$txt['never'] = 'Nigdy';
$txt['more'] = 'więcej';
$txt['poll_options6'] = '';
$txt['etc'] = 'etc.';

$txt['hostname'] = 'Nazwa hosta';
$txt['you_are_post_banned'] = 'Przykro nam %1$s, nie wolno Ci wysyłać wiadomości normalnych i prywatnych na tym forum.';
$txt['ban_reason'] = 'Powód';
$txt['select_item_check'] = 'Please select at least one item in the list';

$txt['tables_optimized'] = 'Tabele bazy danych zoptymalizowane';

$txt['add_poll'] = 'Dodaj ankietę';
$txt['poll_options_limit'] = 'You may only select up to %1$s options.';
$txt['poll_remove'] = 'Usuń ankietę';
$txt['poll_remove_warn'] = 'Na pewno chcesz usunąć ankietę z tego wątku?';
$txt['poll_results_expire'] = 'Wyniki będą pokazane, kiedy głosowanie będzie skończone';
$txt['poll_expires_on'] = 'Głosowanie się kończy';
$txt['poll_expired_on'] = 'Głosowanie skończone';
$txt['poll_change_vote'] = 'Usuń głos';
$txt['poll_return_vote'] = 'Opcje głosowania';
$txt['poll_cannot_see'] = 'Nie możesz obejrzeć wyników głosowania w tej chwili.';

$txt['quick_mod_approve'] = 'Akceptuj zaznaczone';
$txt['quick_mod_remove'] = 'Usuń zaznaczone';
$txt['quick_mod_lock'] = 'Zamknij/otwórz zaznaczone';
$txt['quick_mod_sticky'] = 'Przyklej/odklej zaznaczone';
$txt['quick_mod_move'] = 'Przenieś zaznaczone do';
$txt['quick_mod_merge'] = 'Scal zaznaczone';
$txt['quick_mod_markread'] = 'Ustaw zaznaczone jako przeczytane';
$txt['quick_mod_markunread'] = 'Mark selected unread';
$txt['quick_mod_selected'] = 'With the selected options do';
$txt['quick_mod_go'] = 'Wykonaj!';
$txt['quickmod_confirm'] = 'Na pewno chcesz to zrobić?';

$txt['spell_check'] = 'Sprawdź ortografię';

$txt['quick_reply'] = 'Szybka odpowiedź';
$txt['quick_reply_desc'] = 'W <em>szybkiej odpowiedzi</em> możesz użyć kodów BBC i uśmieszków tak jak przy normalnej odpowiedzi.';
$txt['quick_reply_warning'] = 'Uwaga: ten wątek jest obecnie zamknięty!<br />Tylko administratorzy i moderatorzy mogą wysyłać do niego odpowiedzi.';
$txt['quick_reply_verification'] = 'Po wysłaniu wiadomości zostaniesz przekierowany do regularnej strony wiadomości, aby ją zweryfikować %1$s.';
$txt['quick_reply_verification_guests'] = '(wymagany dla wszystkich gości)';
$txt['quick_reply_verification_posts'] = '(wymagany dla wszystkich użytkowników, który mają mniej niż %1$d postów)';
$txt['wait_for_approval'] = 'Uwaga: ta wiadomość nie zostanie pokazana dopóki nie będzie zaakceptowana przez moderatora.';

$txt['notification_enable_board'] = 'Na pewno chcesz włączyć powiadamianie o nowych wątkach w tym dziale?';
$txt['notification_disable_board'] = 'Na pewno chcesz wyłączyć powiadamianie o nowych wątkach w tym dziale?';
$txt['notification_enable_topic'] = 'Na pewno chcesz włączyć powiadamianie o nowych odpowiedziach w tym wątku?';
$txt['notification_disable_topic'] = 'Na pewno chcesz wyłączyć powiadamianie o nowych odpowiedziach w tym wątku?';

// Mentions
$txt['mentions'] = 'Mentions';

// Likes
$txt['likes'] = 'Likes';
$txt['like'] = 'Lubię';
$txt['unlike'] = 'Nie lubię';
$txt['like_success'] = 'Your content was successfully liked.';
$txt['like_delete'] = 'Your content was successfully deleted.';
$txt['like_insert'] = 'Your content was successfully inserted.';
$txt['like_error'] = 'There was an error with your request.';
$txt['like_disable'] = 'Likes feature is disabled.';
$txt['not_valid_like_type'] = 'The liked type is not a valid type.';
// Translators, if you need to make more strings to suit your language, e.g. $txt['likes_2'] = 'Two people like this', please do so.
$txt['likes_1'] = '<a href="%1$s">%2$s osoba</a> lubi to.';
$txt['likes_n'] = '<a href="%1$s">%2$s osób</a> lubi to.';
$txt['you_likes_0'] = 'Ty lubisz to.';
$txt['you_likes_1'] = 'Ty i <a href="%1$s">%2$s inna osoba</a> lubicie to.';
$txt['you_likes_n'] = 'Ty i <a href="%1$s">%2$s osób</a> lubi to.';

$txt['report_to_mod'] = 'Zgłoś do moderatora';
$txt['report_profile'] = 'Report profile of %1$s';

$txt['unread_topics_visit'] = 'Ostatnie nieprzeczytane wątki';
$txt['unread_topics_visit_none'] = 'Brak nieprzeczytanych wątków od twojej ostatniej wizyty.  <a href="' . $scripturl . '?action=unread;all">Kliknij tu, aby wyświetlić wszystkie nieprzeczytane wątki</a>.';
$txt['updated_topics_visit_none'] = 'No updated topics found since your last visit. <a href="' . $scripturl . '?action=unread;all">Click here to try all unread topics</a>.';
$txt['unread_topics_all'] = 'Wszystkie nieprzeczytane wątki';
$txt['unread_replies'] = 'Wątki z nowymi odpowiedziami';

$txt['who_title'] = 'Kto jest online';
$txt['who_and'] = ' i ';
$txt['who_viewing_topic'] = ' przegląda ten wątek.';
$txt['who_viewing_board'] = ' przeglądają ten dział.';
$txt['who_member'] = 'Użytkownik';

// No longer used by default theme, but for backwards compat
$txt['powered_by_php'] = 'Działa na PHP';
$txt['powered_by_mysql'] = 'Działa na MySQL';
$txt['valid_css'] = 'Prawidłowy CSS!';

// Footer strings, no longer used
$txt['valid_html'] = 'Prawidłowy HTML 4.01!';
$txt['valid_xhtml'] = 'Prawidłowy XHTML 1.0!';
$txt['wap2'] = 'WAP2';
$txt['rss'] = 'RSS';
$txt['atom'] = 'Atom';
$txt['xhtml'] = 'XHTML';
$txt['html'] = 'HTML';

$txt['guest'] = 'Gość';
$txt['guests'] = 'Gości';
$txt['user'] = 'Użytkownik';
$txt['users'] = 'Użytkowników';
$txt['hidden'] = 'Ukrytych';

// Plural form of hidden for languages other than English
$txt['hidden_s'] = 'Ukryte';
$txt['buddy'] = 'Znajomy';
$txt['buddies'] = 'Znajomi';
$txt['most_online_ever'] = 'Najwięcej online';
$txt['most_online_today'] = 'Dziś online';

$txt['merge_select_target_board'] = 'Wybierz dział docelowy dla scalonego wątku';
$txt['merge_select_poll'] = 'Wybierz, którą ankietę powinien mieć scalony wątek';
$txt['merge_topic_list'] = 'Wybierz wątki do scalenia';
$txt['merge_select_subject'] = 'Wybierz temat scalonego wątku';
$txt['merge_custom_subject'] = 'Nowy temat';
$txt['merge_include_notifications'] = 'Dołącz powiadomienia?';
$txt['merge_check'] = 'Scal?';
$txt['merge_no_poll'] = 'Bez ankiety';
$txt['merge_why'] = 'Please enter a brief description as to why these topics are being merged.';
$txt['merged_subject'] = '[MERGED] %1$s';
$txt['mergetopic_default'] = 'This topic has been merged into ' . $txt['movetopic_auto_topic'] . '.';
$txt['totalTimeLogged2'] = '';

$txt['response_prefix'] = 'Odp: ';
$txt['current_icon'] = 'Obecna ikona';
$txt['totalTimeLogged3'] = '';
$txt['message_icon'] = 'Ikona wiadomości';
$txt['totalTimeLogged4'] = '';
$txt['totalTimeLogged5'] = '';

$txt['smileys_current'] = 'Obecny zestaw uśmieszków';
$txt['smileys_none'] = 'Bez uśmieszków';
$txt['totalTimeLogged6'] = '';
$txt['smileys_forum_board_default'] = 'Domyślne dla tego forum bądź działu';
$txt['totalTimeLogged7'] = '';

$txt['search_results'] = 'Pokaż wyniki';
$txt['search_no_results'] = 'Nic nie znaleziono';

$txt['total_time_logged_days'] = ' days, ';
$txt['total_time_logged_hours'] = ' hours and ';
$txt['total_time_logged_minutes'] = ' minutes.';
$txt['total_time_logged_d'] = 'd ';
$txt['total_time_logged_h'] = 'h ';
$txt['total_time_logged_m'] = 'm';

$txt['approve_members_waiting'] = 'Użytkownicy do zatwierdzenia';

$txt['notifyboard_turnon'] = 'Czy chcesz być powiadamianym przez email o nowych wątkach w tym dziale?';
$txt['notifyboard_turnoff'] = 'Na pewno nie chcesz być już powiadamianym o nowych wątkach w tym dziale?';

$txt['activate_code'] = 'Twój kod aktywacyjny to';

$txt['find_members'] = 'Znajdź użytkowników';
$txt['find_username'] = 'Nazwa użytkownika lub adres email';
$txt['find_buddies'] = 'Pokaż tylko znajomych?';
$txt['find_wildcards'] = 'Dozwolone znaki: *, ?';
$txt['find_no_results'] = 'Nic nie znaleziono';
$txt['find_results'] = 'Wyniki';
$txt['find_close'] = 'Zamknij';

$txt['unread_since_visit'] = 'Pokaż wiadomości od ostatniej wizyty.';
$txt['show_unread_replies'] = 'Pokaż nowe odpowiedzi na twoje wątki.';

$txt['change_color'] = 'Zmień kolor';

$txt['quickmod_delete_selected'] = 'Usuń zaznaczone';
$txt['quickmod_split_selected'] = 'Podziel zaznaczone';

$txt['show_personal_messages_heading'] = 'Nowe wiadomości';
$txt['show_personal_messages'] = 'Masz <strong>%1$s</strong> nieprzeczytanych prywatnych wiadomości.<br><br><a href="%2$s">Idź do skrzynki odbiorczej</a>';

$txt['help_popup'] = 'Zagubiłeś się? Pozwól mi wyjaśnić:';

$txt['previous_next_back'] = '&laquo; poprzedni';
$txt['previous_next_forward'] = 'następny &raquo;';

$txt['mark_unread'] = 'Zaznacz jako nieprzeczytane';

$txt['ssi_not_direct'] = 'Nie łącz się z SSI.php bezpośrednio; powinieneś użyć ścieżki (%1$s) lub dodać ?ssi_function=something.';
$txt['ssi_session_broken'] = 'SSI.php nie mogło załadować sesji!  Może to powodować problemy z wylogowaniem i innymi funkcjami - upewnij się, że SSI.php jest "includowane" w kodzie przed *czymkolwiek* innym we wszystkich Twoich skryptach!';

// Escape any single quotes in here twice.. 'it\'s' -> 'it\\\'s'.
$txt['preview_title'] = 'Podgląd';
$txt['preview_fetch'] = 'Generowanie podglądu...';
$txt['preview_new'] = 'Nowa wiadomość';
$txt['pm_error_while_submitting'] = 'Następujący błąd bądź błędy wystąpiły podczas wysyłania prywatnej wiadomości:';
$txt['error_while_submitting'] = 'Podczas wysyłania wiadomości, pojawiły się następujące błędy:';
$txt['error_old_topic'] = 'Uwaga: W tym wątku nie pisano od %1$d dni.<br>Jeżeli nie masz pewności, że chcesz tu odpowiedzieć, rozważ rozpoczęcie nowego wątku.';

$txt['split_selected_posts'] = 'Zaznaczone wiadomości';
$txt['split_selected_posts_desc'] = 'Poniższe wypowiedzi utworzą nowy temat po podziale.';
$txt['split_reset_selection'] = 'anuluj zaznaczenie';

$txt['modify_cancel'] = 'Anuluj';
$txt['modify_cancel_all'] = 'Cancel All';
$txt['mark_read_short'] = 'Zaznacz jako przeczytane';

$txt['alerts'] = 'Alerty';

$txt['pm_short'] = 'Moje wiadomości';
$txt['pm_menu_read'] = 'Przeczytaj wiadomości';
$txt['pm_menu_send'] = 'Wyślij wiadomość';

$txt['unapproved_posts'] = 'Niezaakceptowane wiadomości (Wątków: %1$d, Wiadomości: %2$d)';

$txt['ajax_in_progress'] = 'Ładowanie...';

$txt['mod_reports_waiting'] = 'Raportowane wiadomości';

$txt['view_unread_category'] = 'Nieprzeczytanie wiadomości';
$txt['new_posts_in_category'] = 'Kliknij aby zobaczyć nowe wiadomości w %1$s';
$txt['verification'] = 'Weryfikacja';
$txt['visual_verification_hidden'] = 'Pozostaw to pole puste';
$txt['visual_verification_description'] = 'Wpisz litery widoczne na obrazku';
$txt['visual_verification_sound'] = 'Posłuchaj liter';
$txt['visual_verification_request_new'] = 'Prośba o inny obrazek';
$txt['errlog'] = '';

// Sub menu labels
$txt['summary'] = 'Podsumowanie';
$txt['account'] = 'Ustawienia konta';
$txt['theme'] = 'Opcje wyglądu';
$txt['forumprofile'] = 'Profil Forum';
$txt['activate_changed_email_title'] = 'Email Address Changed';
$txt['activate_changed_email_desc'] = 'You\'ve changed your email address. In order to validate this address you will receive an email. Click the link in that email to reactivate your account.';
$txt['modSettings_title'] = 'Właściwości i Opcje';
$txt['package'] = 'Pakiety';
$txt['errorlog'] = 'Error Log';
$txt['edit_permissions'] = 'Zezwolenia';
$txt['send_email_disclosed'] = '';
$txt['mc_unapproved_attachments'] = 'Niezatwierdzone załączniki';
$txt['mc_unapproved_poststopics'] = 'Niezatwierdzone wiadomości i wątki';
$txt['mc_reported_posts'] = 'Raportowane wiadomości';
$txt['mc_reported_members'] = 'Reported Members';
$txt['modlog_view'] = 'Log moderacji';
$txt['calendar_menu'] = 'Pokaż kalendarz';

// @todo Send email strings - should move?
$txt['send_email'] = 'Wyślij e-mail';

$txt['ignoring_user'] = 'Ignorujesz tego użytkownika.';
$txt['show_ignore_user_post'] = 'Pokaż mi wiadomość.';

$txt['spider'] = 'Robot';
$txt['spiders'] = 'Roboty';

$txt['downloads'] = 'Pobieranie';
$txt['filesize'] = 'Rozmiar pliku';

// Restore topic
$txt['restore_topic'] = 'Przywróć wątek';
$txt['restore_message'] = 'Przywróć wiadomość';
$txt['quick_mod_restore'] = 'Przywróć zaznaczone';

// Editor prompt.
$txt['prompt_text_email'] = 'Wpisz adres email.';
$txt['prompt_text_ftp'] = 'Wpisz adres FTP.';
$txt['prompt_text_url'] = 'Wpisz adres URL.';
$txt['prompt_text_img'] = 'Wpisz lokalizację obrazka';

// Escape any single quotes in here twice.. 'it\'s' -> 'it\\\'s'.
$txt['autosuggest_delete_item'] = 'Usuń przedmiot';

// Debug related - when $db_show_debug is true.
$txt['debug_templates'] = 'Style:';
$txt['debug_subtemplates'] = 'Pod-szablony:';
$txt['debug_language_files'] = 'Pliki językowe:';
$txt['debug_stylesheets'] = 'Arkusze stylów:';
$txt['debug_files_included'] = 'Uwzględnione pliki:';
$txt['debug_memory_use'] = 'Zużycie pamięci:';
$txt['debug_kb'] = 'KB.';
$txt['debug_show'] = 'pokaż';
$txt['debug_cache_hits'] = 'Użycia cache:';
$txt['debug_cache_misses'] = 'Cache misses: ';
$txt['debug_cache_seconds_bytes'] = '%1$ss - %2$s bajtów';
$txt['debug_cache_seconds_bytes_total'] = '%1$ss dla %2$s bajtów';
$txt['debug_queries_used'] = 'Użytych zapytań: %1$d.';
$txt['debug_queries_used_and_warnings'] = 'Użytych zapytań:: %1$d, %2$d ostrzeżeń';
$txt['debug_query_in_line'] = 'w <em>%1$s</em> linia <em>%2$s</em>,';
$txt['debug_query_which_took'] = 'co zajęło %1$s sekund.';
$txt['debug_query_which_took_at'] = 'które zajęło %1$s sekund w %2$s na żądanie.';
$txt['debug_show_queries'] = '[Pokaż zapytania]';
$txt['debug_hide_queries'] = '[Ukryj zapytania]';
$txt['debug_tokens'] = 'Tokeny:';
$txt['debug_browser'] = 'ID Przeglądarki:';
$txt['debug_hooks'] = 'Wołane uchwyty:';
$txt['debug_instances'] = 'Instances created: ';
$txt['are_sure_mark_read'] = 'Czy na pewno zaznaczyć wiadomości jako przeczytane?';

// Inline attachments messages.
$txt['attachments_not_enable'] = 'Attachments are disabled';
$txt['attachments_no_data_loaded'] = 'Not a valid attachment ID.';
$txt['attachments_not_allowed_to_see'] = 'You cannot see attachments on this board.';
$txt['attachments_no_msg_associated'] = 'No message is associated with this attachment.';

// Accessibility
$txt['hide_category'] = 'Ukryj kategorię';
$txt['show_category'] = 'Pokaż kategorię';
$txt['hide_infocenter'] = 'Ukryj centrum informacji';
$txt['show_infocenter'] = 'Pokaż centrum informacji';

// Notification post control
$txt['notify_topic_0'] = 'Not Following';
$txt['notify_topic_1'] = 'No Alerts or Emails';
$txt['notify_topic_2'] = 'Receive Alerts';
$txt['notify_topic_3'] = 'Receive Emails and Alerts';
$txt['notify_topic_0_desc'] = 'You will not receive any emails or alerts for this topic and it will also not show up in your unread replies and topics list. You will still receive @mentions for this topic.';
$txt['notify_topic_1_desc'] = 'You will not receive any emails or alerts but only @mentions by other members.';
$txt['notify_topic_2_desc'] = 'You will receive alerts for this topic.';
$txt['notify_topic_3_desc'] = 'You will receive both alerts and e-mails for this topic.';
$txt['notify_board_1'] = 'No Alerts or Emails';
$txt['notify_board_2'] = 'Receive Alerts';
$txt['notify_board_3'] = 'Receive Emails and Alerts';
$txt['notify_board_1_desc'] = 'You will not receive any emails or alerts for new topics';
$txt['notify_board_2_desc'] = 'You will receive alerts for this board.';
$txt['notify_board_3_desc'] = 'You will receive both alerts and e-mails for this board.';

// Mobile Actions
$txt['mobile_action'] = 'User actions';
$txt['mobile_moderation'] = 'Moderation';
$txt['mobile_user_menu'] = 'Mobile Main Menu';
$txt['sentence_list_format'] = ['n'] = '{series}, and {-1}';
// Separators used to build lists in a sentence
$txt['sentence_list_separator'] = ', ';
$txt['sentence_list_separator_alt'] = '; ';

?>