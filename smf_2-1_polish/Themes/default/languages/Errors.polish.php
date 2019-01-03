<?php
// Version: 2.1 Beta 3; Errors

global $scripturl, $modSettings;

$txt['no_access'] = 'Nie masz dostępu do tej sekcji';
$txt['not_found'] = 'Przepraszamy, ta sekcja nie jest dostępna.';

$txt['mods_only'] = 'Tylko moderatorzy mogą usuwać wiadomości, wykasuj swoją wiadomość używając funkcji &quot;Zmień&quot;.';
$txt['no_name'] = 'Nie wpisałeś nazwy użytkownika - jest to wymagane.';
$txt['no_email'] = 'Nie wpisałeś adresu email - jest to wymagane.';
$txt['topic_locked'] = 'Ten wątek jest zamknięty, nie masz zezwolenia na wysyłanie lub modyfikację wiadomości...';
$txt['no_password'] = 'Pole hasło jest puste';
$txt['already_a_user'] = 'Nazwa użytkownika, której próbowałeś jest już zajęta.';
$txt['cant_move'] = 'Nie masz zezwolenia na przenoszenie wątków...';
$txt['login_to_post'] = 'Musisz być zalogowany aby wysyłać wiadomości. Jeśli nie masz jeszcze konta, <a href="' . $scripturl . '?action=signup">zarejestruj się</a>.';
$txt['passwords_dont_match'] = 'Hasła nie są identyczne.';
$txt['register_to_use'] = 'Musisz się zarejestrować, zanim będziesz mógł korzystać z tej opcji.';
$txt['password_invalid_character'] = 'Niedozwolony znak w haśle.';
$txt['name_invalid_character'] = 'Niedozwolony znak w nazwie użytkownika.';
$txt['email_invalid_character'] = 'Niedozwolony znak w adresie email.';
$txt['username_reserved'] = 'Nazwa użytkownika, której próbowałeś zawiera zarezerwowaną nazwę %1$s\'. Spróbuj jeszcze raz.';
$txt['numbers_one_to_nine'] = 'W to pole można wpisywać tylko cyfry od 0 do 9';
$txt['not_a_user'] = 'Profil użytkownika, który próbujesz przeglądać nie istnieje.';
$txt['not_a_topic'] = 'Wątek nie istnieje.';
$txt['email_in_use'] = 'Podany adres email (%1$s) jest używany przez innego zarejestrowanego użytkownika. Jeśli to pomyłka, przejdź do strony z logowaniem i postaraj się przywrócić hasło na ten adres email.';
$txt['attachments_no_write'] = 'Nie można zapisywać w katalogu załączników. Twój załącznik lub awatar nie może być zapisany.';
$txt['attachment_not_created'] = 'The attachment could not be created';

$txt['didnt_select_vote'] = 'Nie wybrałeś żadnej z opcji ankiety.';
$txt['poll_error'] = 'Ankieta nie istnieje, została zamknięta lub próbowałeś zagłosować dwa razy.';
$txt['members_only'] = 'Opcja ta jest dostępna tylko użytkownikom zarejestrowanym.';
$txt['locked_by_admin'] = 'Ten wątek został zamknięty przez administratora. Nie możesz go otworzyć.';
$txt['feature_disabled'] = 'Ta funkcja jest wyłączona.';
$txt['feature_no_exists'] = 'Przepraszamy, ta funkcjonalność nie istnieje.';
$txt['couldnt_connect'] = 'Nie można połączyć się z serwerem lub nie można znaleźć pliku';
$txt['no_board'] = 'Dział nie istnieje';
$txt['no_message'] = 'Wiadomość nie jest dostępna';
$txt['cant_split'] = 'Nie masz zezwolenia na dzielenie wątków';
$txt['cant_merge'] = 'Nie masz zezwolenia na scalanie wątków';
$txt['no_topic_id'] = 'Podałeś niewłaściwe ID wątku.';
$txt['split_first_post'] = 'Nie możesz rozdzielić wątku na pierwszej wiadomości.';
$txt['topic_one_post'] = 'Ten wątek zawiera tylko jedną wiadomość i nie może być rozdzielony.';
$txt['no_posts_selected'] = 'nie wybrano żadnej wiadomości';
$txt['selected_all_posts'] = 'Wybrałeś wszystkie wiadomości - nie można dokonać podziału.';
$txt['cant_find_messages'] = 'Nie można znaleźć wiadomości';
$txt['cant_find_user_email'] = 'Nie można znaleźć adresu email użytkownika.';
$txt['cant_insert_topic'] = 'Nie można zamieścić wątku';
$txt['already_a_mod'] = 'Wybrałeś nazwę użytkownika należącą do jednego z moderatorów. Spróbuj jeszcze raz';
$txt['session_timeout'] = 'Czas twojej sesji skończył się podczas pisania wiadomości. Wróć i spróbuj jeszcze raz.';
$txt['session_verify_fail'] = 'Weryfikacja sesji nie powiodła się. Wyloguj i zaloguj się ponownie, a potem spróbuj jeszcze raz.';
$txt['verify_url_fail'] = 'Nie można zweryfikować URL odnoszącego. Wróć i spróbuj jeszcze raz.';
$txt['token_verify_fail'] = 'Weryfikacja poprzez token nie powiodła się. Wróć i spróbuj ponownie.';
$txt['guest_vote_disabled'] = 'Goście nie mogą głosować w tej ankiecie.';

$txt['cannot_like_content'] = 'You are not able to like that content.';
$txt['cannot_view_likes'] = 'You are not able to view who liked that content.';
$txt['cannot_access_mod_center'] = 'Nie masz zezwoleń do dostępu do centrum moderacji.';
$txt['cannot_admin_forum'] = 'Nie masz zezwolenia na administrowanie tym forum.';
$txt['cannot_announce_topic'] = 'Nie masz zezwolenia na ogłaszanie wątków w tym dziele.';
$txt['cannot_approve_posts'] = 'Nie masz zezwoleń na zatwierdzanie.';
$txt['cannot_post_unapproved_attachments'] = 'Nie masz zezwoleń na dodawanie niezatwierdzonych załączników.';
$txt['cannot_post_unapproved_topics'] = 'Nie masz zezwoleń na dodawanie niezatwierdzonych wątków.';
$txt['cannot_post_unapproved_replies_own'] = 'Nie masz zezwoleń na dodawanie niezatwierdzonych odpowiedzi na własne wątki.';
$txt['cannot_post_unapproved_replies_any'] = 'Nie masz zezwoleń na dodawanie niezatwierdzonych odpowiedzi na wątki innych użytkowników.';
$txt['cannot_calendar_edit_any'] = 'Nie możesz dodawać wydarzeń w kalendarzu.';
$txt['cannot_calendar_edit_own'] = 'Nie masz zezwoleń potrzebnych, aby dodawać własne wydarzenia w kalendarzu.';
$txt['cannot_calendar_post'] = 'Dodawanie wydarzeń jest zabronione.';
$txt['cannot_calendar_view'] = 'Nie masz zezwolenia na przeglądanie kalendarza.';
$txt['cannot_remove_any'] = 'Przepraszamy, nie masz uprawnień na usuwanie jakichkolwiek wątków. Upewnij się, że wątek nie został przeniesiony do innego działu.';
$txt['cannot_remove_own'] = 'Nie możesz usuwać własnych wątków w tym dziale. Upewnij się, że wątek nie został przeniesiony do innego działu.';
$txt['cannot_edit_news'] = 'Nie masz zezwolenia na dodawanie aktualności.';
$txt['cannot_pm_read'] = 'Nie możesz czytać własnych prywatnych wiadomości.';
$txt['cannot_pm_send'] = 'Nie możesz wysyłać prywatnych wiadomości.';
$txt['cannot_lock_any'] = 'Nie masz zezwolenia na zamykanie każdego wątku.';
$txt['cannot_lock_own'] = 'Nie masz zezwolenia na zamykanie swoich wątków.';
$txt['cannot_make_sticky'] = 'Nie masz zezwolenia na przyklejenie tego wątku.';
$txt['cannot_manage_attachments'] = 'Nie masz zezwolenia na zarządzanie załącznikami i awatarami.';
$txt['cannot_manage_bans'] = 'Nie masz zezwolenia na zmianę listy banów.';
$txt['cannot_manage_boards'] = 'Nie masz zezwolenia na zarządzanie działami i kategoriami.';
$txt['cannot_manage_membergroups'] = 'Nie masz zezwolenia na modyfikację lub przyznawanie grupy użytkowników.';
$txt['cannot_manage_permissions'] = 'Nie masz zezwolenia na zarządzanie zezwoleniami.';
$txt['cannot_manage_smileys'] = 'Nie masz uprawnień na zarządzanie uśmieszkami oraz ikonami w wiadomościach.';
$txt['cannot_merge_any'] = 'Nie masz zezwolenia na scalanie wątków w jednym z zaznaczonych działów.';
$txt['cannot_merge_redirect'] = 'One or more of the topics you have selected is a redirect topic and cannot be merged.';
$txt['cannot_moderate_forum'] = 'Nie masz zezwolenia na moderowanie tego forum.';
$txt['cannot_moderate_board'] = 'Nie masz zezwolenia na moderowanie tego działu.';
$txt['cannot_modify_any'] = 'Nie możesz zmieniać każdej wiadomości.';
$txt['cannot_modify_own'] = 'Nie możesz zmieniać swoich wiadomości.';
$txt['cannot_modify_replies'] = 'Pomimo tego, że ta wiadomość jest odpowiedzią na twój wątek, nie możesz jej modyfikować.';
$txt['cannot_move_own'] = 'Nie masz zezwolenia na przenoszenie własnych wątków w tym dziale.';
$txt['cannot_move_any'] = 'Nie masz zezwolenia na przenoszenie wątków w tym dziale.';
$txt['cannot_poll_add_own'] = 'Nie masz zezwolenia na dodawanie ankiet do swoich wątków w tym dziale.';
$txt['cannot_poll_add_any'] = 'Nie masz zezwolenia na dodanie ankiety do tego wątku.';
$txt['cannot_poll_edit_own'] = 'Pomimo tego, że ta ankieta należy do twojego wątku, nie możesz jej modyfikować.';
$txt['cannot_poll_edit_any'] = 'Nie masz zezwolenia na modyfikowanie ankiet w tym dziale.';
$txt['cannot_poll_lock_own'] = 'Nie masz zezwolenia na zamykanie swoich ankiet w tym dziale.';
$txt['cannot_poll_lock_any'] = 'Nie masz zezwolenia na zamykanie każdej ankiety.';
$txt['cannot_poll_post'] = 'Nie masz zezwolenia na wysyłanie ankiet w tym dziale.';
$txt['cannot_poll_remove_own'] = 'Nie masz zezwolenia na usunięcie ankiety ze swojego wątku.';
$txt['cannot_poll_remove_any'] = 'Nie masz zezwolenia na usuwanie każdej ankiety w tym dziale.';
$txt['cannot_poll_view'] = 'Nie masz zezwolenia na przeglądanie ankiet w tym dziale.';
$txt['cannot_poll_vote'] = 'Nie masz zezwolenia na głosowanie w tym dziale.';
$txt['cannot_post_attachment'] = 'Nie masz zezwolenia na wysyłanie załączników.';
$txt['cannot_post_new'] = 'Nie masz zezwolenia na wysyłanie wątków w tym dziale.';
$txt['cannot_post_reply_any'] = 'Nie masz zezwolenia na odpowiadanie w tym dziale.';
$txt['cannot_post_reply_own'] = 'Nie masz zezwolenia na odpowiadanie nawet na swoje wątki w tym dziale.';
$txt['cannot_post_redirect'] = 'You cannot post in redirection boards.';
$txt['cannot_profile_remove_own'] = 'Nie masz zezwolenia na usunięcie swojego konta.';
$txt['cannot_profile_remove_any'] = 'Nie masz odpowiednich uprawnień do usuwania kont innych użytkowników.';
$txt['cannot_profile_extra_any'] = 'Nie masz zezwolenia na modyfikowanie ustawień profilu.';
$txt['cannot_profile_identity_any'] = 'Nie masz zezwolenia na modyfikowanie ustawień konta.';
$txt['cannot_profile_title_any'] = 'Nie masz zezwolenia na modyfikowanie tytułów osobistych.';
$txt['cannot_profile_extra_own'] = 'Nie masz zezwoleń potrzebnych, aby modyfikować swój profil.';
$txt['cannot_profile_identity_own'] = 'Nie możesz teraz zmienić swojej tożsamości.';
$txt['cannot_profile_title_own'] = 'Nie masz zezwolenia na modyfikowanie swojego tytułu osobistego.';
$txt['cannot_profile_server_avatar'] = 'Nie masz uprawnień do korzystania z galerii awatarów.';
$txt['cannot_profile_upload_avatar'] = 'Nie masz uprawnień do wgrywania awatarów na serwer.';
$txt['cannot_profile_remote_avatar'] = 'Nie masz zezwolenia na używanie zewnętrznego awatara.';
$txt['cannot_profile_view'] = 'Many apologies, but you can\'t view just any profile.';
$txt['cannot_delete_own'] = 'Nie możesz usuwać własnych wątków w tym dziale.';
$txt['cannot_delete_replies'] = 'Przykro nam, ale nie możesz usuwać tych wiadomości, pomimo że są odpowiedzią na twój wątek.';
$txt['cannot_delete_any'] = 'Nie masz zezwolenia na usuwanie każdego wątku.';
$txt['cannot_report_any'] = 'Nie masz zezwolenia na zgłaszanie wiadomości w tym dziale.';
$txt['cannot_search_posts'] = 'Nie masz zezwolenia na wyszukiwanie wiadomości.';
$txt['cannot_send_mail'] = 'Nie masz zezwolenia na wysyłanie wiadomości email.';
$txt['cannot_issue_warning'] = 'Przepraszamy, nie masz zezwoleń na wysyłanie ostrzeżeń do użytkowników.';
$txt['cannot_send_email_to_members'] = 'Przepraszamy, ale administrator wyłączył wysyłanie wiadomości email w tym dziale.';
$txt['cannot_split_any'] = 'Nie masz zezwolenia na dzielenie każdego wątku w tym dziale.';
$txt['cannot_view_attachments'] = 'Nie masz zezwolenia na pobieranie i oglądanie załączników w tym dziale.';
$txt['cannot_view_mlist'] = 'Nie masz zezwolenia na przeglądanie listy użytkowników.';
$txt['cannot_view_stats'] = 'Nie masz zezwolenia na przeglądanie statystyk forum.';
$txt['cannot_who_view'] = 'Nie masz zezwolenia na przeglądanie listy użytkowników online.';

$txt['no_theme'] = 'Ten styl nie istnieje.';
$txt['theme_dir_wrong'] = 'Domyślny katalog stylów jest zły, popraw to klikając na ten tekst.';
$txt['registration_disabled'] = 'Rejestracja jest obecnie wyłączona.';
$txt['registration_agreement_missing'] = 'Plik umowy rejestracyjnej (agreement.txt) jest pusty lub nie istnieje. Rejestracja została wyłączona do czasu poprawienia tego błędu';
$txt['registration_no_secret_question'] = 'Ten użytkownik nie ustawił sobie sekretnego pytania.';
$txt['poll_range_error'] = 'Ankieta musi być otwarta przez więcej niż 0 dni.';
$txt['delFirstPost'] = 'Nie możesz usunąć pierwszej wiadomości w wątku.<p>Jeśli chcesz usunąć wątek, kliknij na &quot;usuń wątek&quot; albo poproś o to moderatora lub administratora.</p>';
$txt['parent_error'] = 'Nie można utworzyć działu!';
$txt['login_cookie_error'] = 'Nie możesz się zalogować. Sprawdź swoje ustawienia plików cookie.';
$txt['login_ssl_required'] = 'You can only login via HTTPS';
$txt['register_ssl_required'] = 'You can only register via HTTPS';
$txt['incorrect_answer'] = 'Przepraszamy, udzieliłeś nieprawidłowej odpowiedzi na Twoje pytanie. Wróć i spróbuj ponownie lub wróć o dwa poziomy wstecz, aby użyć domyślnej metody uzyskiwania hasła.';
$txt['no_mods'] = 'Nie znaleziono żadnych moderatorów!';
$txt['parent_not_found'] = 'Struktura działów uszkodzona: nie można znaleźć działu nadrzędnego';
$txt['modify_post_time_passed'] = 'Nie możesz edytować tej wiadomość, ponieważ minął minimalny czas w którym mogłeś to zrobić.';

$txt['calendar_off'] = 'Obecnie nie masz dostępu do kalendarza, ponieważ jest wyłączony.';
$txt['calendar_export_off'] = 'Nie możesz eksportować wydarzeń z kalendarza ponieważ ta funkcja jest obecnie wyłączona.';
$txt['invalid_month'] = 'Niewłaściwy numer miesiąca.';
$txt['invalid_year'] = 'Niewłaściwy numer roku.';
$txt['invalid_day'] = 'Niepoprawna wartość dnia.';
$txt['event_month_missing'] = 'Brakuje miesiąca wydarzenia.';
$txt['event_year_missing'] = 'Brakuje roku wydarzenia.';
$txt['event_day_missing'] = 'Brakuje dnia wydarzenia.';
$txt['event_title_missing'] = 'Brakuje nazwy wydarzenia.';
$txt['invalid_date'] = 'Nieprawidłowa data.';
$txt['no_event_title'] = 'Nie wprowadzono nazwy wydarzenia.';
$txt['missing_event_id'] = 'Brakuje ID wydarzenia.';
$txt['cant_edit_event'] = 'Nie masz zezwolenia na modyfikowanie tego wydarzenia.';
$txt['missing_board_id'] = 'Brakuje ID działu.';
$txt['missing_topic_id'] = 'Brakuje ID wątku.';
$txt['topic_doesnt_exist'] = 'Wątek nie istnieje.';
$txt['not_your_topic'] = 'Nie jesteś twórcą tego wątku.';
$txt['board_doesnt_exist'] = 'Dział nie istnieje.';
$txt['no_span'] = '';
$txt['invalid_days_numb'] = 'Nieprawidłowa ilość dni trwania wydarzenia.';

$txt['moveto_noboards'] = 'Dział, do którego chcesz przenieść wątek, nie istnieje!';
$txt['topic_already_moved'] = 'Ten wątek %1$s został przeniesiony do działu %2$s, sprawdź jego nową lokalizację przed ponownym przeniesieniem.';

$txt['already_activated'] = 'Twoje konto zostało już zaktywowane.';
$txt['still_awaiting_approval'] = 'Twoje konto nadal oczekuje na zatwierdzenie przez administratora.';

$txt['invalid_email'] = 'Nieprawidłowy adres email lub zakres adresów.<br>Przykład prawidłowego adresu: zly.uzytkownik@brzydkastrona.com.<br>Przykład prawidłowego zakresu adresów: *@*.brzydkastrona.com';
$txt['invalid_expiration_date'] = 'Nieprawidłowa data wygaśnięcia';
$txt['invalid_hostname'] = 'Nieprawidłowa nazwa dostawcy lub zakres nazw<br>Przykład prawidłowej nazwy: proxy4.zlyhost.com<br>Przykład prawidłowego zakresu nazw: *.zlyhost.com';
$txt['invalid_ip'] = 'Nieprawidłowy adres IP lub zakres adresów.<br>Przykład prawidłowego adresu: 127.0.0.1<br>Przykład prawidłowego zakresu: 127.0.0-20.*';
$txt['invalid_tracking_ip'] = 'Nieprawidłowy adres IP lub zakres adresów.<br>Przykład prawidłowego adresu IP: 127.0.0.1<br>Przykład prawidłowego zakresu IP: 127.0.0.*';
$txt['invalid_username'] = 'Nazwa użytkownika nie znaleziona';
$txt['no_user_selected'] = 'Użytkownik nie znaleziony';
$txt['no_ban_admin'] = 'Nie możesz zbanować administratora - najpierw musisz go zdegradować!';
$txt['no_bantype_selected'] = 'Nie wybrano typu bana';
$txt['ban_not_found'] = 'Ban nie znaleziony';
$txt['ban_unknown_restriction_type'] = 'Rodzaj ograniczenia nie znany';
$txt['ban_name_empty'] = 'Nazwa bana jest pusta';
$txt['ban_id_empty'] = 'Nie znaleziono ID banu.';
$txt['ban_no_triggers'] = 'No ban triggers specified';
$txt['ban_ban_item_empty'] = 'Ban trigger not found';
$txt['impossible_insert_new_bangroup'] = 'An error occurred while inserting the new ban';

$txt['ban_name_exists'] = 'Podana nazwa bana już istnieje, wybierz inną.';
$txt['ban_trigger_already_exists'] = 'Ten ban (%1$s) już istnieje w %2$s. ';

$txt['recycle_no_valid_board'] = 'Nie wybrano działu do zachowywania wątków';
$txt['post_already_deleted'] = 'Wątek lub wiadomość jest aktualnie w koszu. Na pewno chcesz go całkowicie usunąć?<br>Jeśli jesteś pewien kliknij w <a href="%1$s">ten link</a>';

$txt['login_threshold_fail'] = 'Wyczerpałeś ilość prób zalogowania. Wróć później i spróbuj ponownie.';
$txt['login_threshold_brute_fail'] = 'Przepraszamy, wyczerpałeś już ilość prób zalogowania. Odczekaj 30 sekund i spróbuj ponownie później.';

$txt['who_off'] = 'Obecnie nie masz dostępu do listy użytkowników online, ponieważ jest wyłączona.';

$txt['merge_create_topic_failed'] = 'Błąd podczas tworzenia wątku.';
$txt['merge_need_more_topics'] = 'Potrzeba co najmniej dwóch wątków aby je scalić.';

$txt['post_WaitTime_broken'] = 'Ostatnia wiadomość z Twojego adresu IP została wysłana mniej niż %1$d sekund temu. Spróbuj ponownie później.';
$txt['register_WaitTime_broken'] = 'Zarejestrowałeś się %1$d sekund temu!';
$txt['login_WaitTime_broken'] = 'Musisz poczekać %1$d sekund przed ponowną próbą zalogowania.';
$txt['pm_WaitTime_broken'] = 'Ostatnia prywatna wiadomość z Twojego adresu IP była wysłana mniej niż %1$d sekund temu. Spróbuj ponownie później.';
$txt['reporttm_WaitTime_broken'] = 'Ostatni raport wątku z Twojego adresu IP był wysłany mniej niż %1$d sekund temu. Spróbuj ponownie później.';
$txt['sendmail_WaitTime_broken'] = 'Ostatni email był wysłany z Twojego adresu IP mniej niż %1$d sekund temu. Spróbuj ponownie później.';
$txt['search_WaitTime_broken'] = 'Twoja ostatnia próba wyszukiwania była mniej niż %1$d sekund temu. Spróbuj ponownie później.';
$txt['remind_WaitTime_broken'] = 'Twoje ostatnie przypomnienie było wysłane mniej niż %1$d sekund temu. Spróbuj ponownie później.';

$txt['email_missing_data'] = 'Musisz wpisać coś w pola tematu i wiadomości.';

$txt['topic_gone'] = 'Wątek lub dział, którego szukasz nie istnieje albo nie masz do niego dostępu.';
$txt['theme_edit_missing'] = 'Plik który chcesz zmienić nie został znaleziony!';

$txt['no_dump_database'] = 'Tylko administratorzy mogą wykonywać kopie zapasowe bazy danych!';
$txt['pm_not_yours'] = 'Prywatna wiadomość, którą próbujesz cytować nie jest twoja lub nie istnieje, przejdź wstecz i spróbuj jeszcze raz.';
$txt['mangled_post'] = 'Uszkodzony formularz danych - przejdź wstecz i spróbuj jeszcze raz.';
$txt['too_many_groups'] = 'Przepraszamy, ale wybrałeś zbyt dużo grup, usuń kilka.';
$txt['post_upload_error'] = 'Problem z wysłaniem wiadomości. Może być on spowodowany zbyt dużym rozmiarem załącznika. Prosimy skontaktuj się z administratorem jeśli problem będzie się powtarzał.';
$txt['quoted_post_deleted'] = 'Wiadomość, którą próbujesz zacytować, nie istnieje, została skasowana lub nie masz uprawnień do czytania jej.';
$txt['pm_too_many_per_hour'] = 'Przekroczyłeś limit %1$d wiadomości prywatnych na godzinę.';

$txt['register_only_once'] = 'Przepraszamy, ale nie można rejestrować wielu kont w tym samym czasie z tego samego komputera.';
$txt['admin_setting_coppa_require_contact'] = 'Musisz wpisać kod pocztowy lub nr faxu jeśli to konieczne do potwierdzenia twojej wiarygodności.';

$txt['error_long_name'] = 'Nazwa użytkownika, której użyłeś, była za długa.';
$txt['error_no_name'] = 'Nie podano nazwy użytkownika.';
$txt['error_bad_name'] = 'Podana przez Ciebie nazwa użytkownika nie może zostać użyta, ponieważ zawiera nazwę zarezerwowaną.';
$txt['error_no_email'] = 'Nie podano adresu email.';
$txt['error_bad_email'] = 'Podano nieprawidłowy adres email.';
$txt['error_no_event'] = 'Nie podano nazwy wydarzenia.';
$txt['error_no_subject'] = 'Nie wpisano tematu.';
$txt['error_no_question'] = 'Nie wpisano pytania do ankiety.';
$txt['error_no_message'] = 'Nie wpisano treści wiadomości.';
$txt['error_long_message'] = 'Wiadomość przekracza dozwoloną długość (%s znaków).';
$txt['error_no_comment'] = 'Pole komentarza nie zostało uzupełnione.';
// duplicate of post_too_long in Post.{language}.php
$txt['error_post_too_long'] = 'Twoja wiadomość jest za długa. Skróć ją i spróbuj wysłać ją ponownie.';
$txt['error_session_timeout'] = 'Twoja sesja dobiegła końca podczas pisania. Spróbuj ponownie wysłać wiadomość.';
$txt['error_no_to'] = 'Nie podano odbiorców.';
$txt['error_bad_to'] = 'Nie znaleziono jednego lub więcej odbiorców \'do\'.';
$txt['error_bad_bcc'] = 'Nie znaleziono jednego lub więcej odbiorców \'kopia do\'.';
$txt['error_form_already_submitted'] = 'Ta wiadomość została już wysłana! Może to być spowodowane przypadkowym podwójnym kliknięciem lub próbą odświeżenia strony.';
$txt['error_poll_few'] = 'Musisz dać przynajmniej dwie możliwości do wyboru!';
$txt['error_poll_many'] = 'Masz nie więcej niż 256 możliwości.';
$txt['error_need_qr_verification'] = 'Uzupełnij poniższą sekcję weryfikacji, aby wysłać wiadomość.';
$txt['error_wrong_verification_code'] = 'Wpisane litery nie pasują do liter pokazanych na obrazku.';
$txt['error_wrong_verification_answer'] = 'Odpowiedziałeś błędnie na pytanie weryfikacyjne.';
$txt['error_need_verification_code'] = 'Wprowadź niżej kod weryfikacyjny aby kontynuować.';
$txt['error_bad_file'] = 'Przepraszamy, podany plik nie może zostać otwarty: %1$s';
$txt['error_bad_line'] = 'Podana linia jest niepoprawna.';
$txt['error_draft_not_saved'] = 'Wystąpił problem podczas zapisywania szkicu.';
$txt['error_topic_locked_already'] = 'This topic was locked already by another moderator action.';
$txt['error_topic_unlocked_already'] = 'This topic was unlocked already by another moderator action.';
$txt['error_topic_sticky_already'] = 'This topic was stickied already by another moderator action.';
$txt['error_topic_nonsticky_already'] = 'This topic was unstickied already by another moderator action.';

$txt['smiley_not_found'] = 'Uśmieszek nie znaleziony.';
$txt['smiley_has_no_code'] = 'Temu uśmieszkowi nie przyznano kodu.';
$txt['smiley_has_no_filename'] = 'Nie podano nazwy pliku dla tego uśmieszku.';
$txt['smiley_not_unique'] = 'Uśmieszek z tym kodem już istnieje.';
$txt['smiley_set_already_exists'] = 'Zestaw uśmieszków pod tym adresem URL już istnieje.';
$txt['smiley_set_not_found'] = 'Zestaw uśmieszków nie znaleziony';
$txt['smiley_set_dir_not_found'] = 'Katalog zestawu emotikon %1$s nie jest poprawny lub nie może zostać odczytany';
$txt['smiley_set_path_already_used'] = 'Adres URL tego zestawu uśmieszków jest już zajęty przez inny zestaw.';
$txt['smiley_set_unable_to_import'] = 'Nie można importować zestawu uśmieszków. Katalog jest niewłaściwy lub nie można uzyskać do niego dostępu.';

$txt['smileys_upload_error'] = 'Błąd przy wysyłaniu pliku.';
$txt['smileys_upload_error_blank'] = 'Wszystkie zestawy uśmieszków muszą mieć obrazek!';
$txt['smileys_upload_error_name'] = 'Wszystkie uśmieszki muszą mieć tę samą nazwę pliku!';
$txt['smileys_upload_error_illegal'] = 'Niewłaściwy typ pliku.';

$txt['search_invalid_weights'] = 'Wagi wyszukiwania nie są poprawnie skonfigurowane. Przynajmniej jedna musi mieć wartość inną niż zero. Zgłoś ten błąd administratorowi.';
$txt['unable_to_create_temporary'] = 'Funkcja wyszukiwania nie mogła stworzyć tymczasowych tabel. Spróbuj ponownie.';

$txt['package_no_file'] = 'Nie można znaleźć pliku pakietu!';
$txt['packageget_unable'] = 'Nie można połączyć się z serwerem. Spróbuj używając <a href="%1$s" target="_blank" class="new_win">tego adresu URL</a>.';
$txt['not_on_simplemachines'] = 'Pakiety mogą być pobierane w ten sposób tylko z serwera simplemachines.org.';
$txt['package_cant_uninstall'] = 'Ten pakiet nie był nigdy zainstalowany lub był już odinstalowany - nie możesz go teraz odinstalować.';
$txt['package_cant_download'] = 'Nie możesz pobierać lub instalować nowych pakietów, ponieważ nie można zapisywać w katalogu pakietów!';
$txt['package_upload_error_nofile'] = 'Nie zaznaczyłeś pakietu do wgrania.';
$txt['package_upload_error_failed'] = 'Nie można wysłać pakietu, sprawdź zezwolenie zapisu katalogu.';
$txt['package_upload_error_exists'] = 'Plik, który wysyłasz, jest już na serwerze. Najpierw go skasuj, a potem wyślij ponownie.';
$txt['package_upload_error_supports'] = 'Menedżer pakietów aktualnie pozawala tylko na takie typy plików: %1$s.';
$txt['package_upload_error_broken'] = 'Pakiet który starasz się wysłać jest nie poprawny lub uszkodzony i powoduje następujący błąd:<br>&quot;%1$s&quot; .';
$txt['package_theme_upload_error_broken'] = 'Theme upload failed due to the following error:<br>&quot;%1$s&quot;';

$txt['package_get_error_not_found'] = 'Pakiet, który próbujesz zainstalować nie może zostać zlokalizowany. Możesz spróbować ręcznie wgrać pakiet do katalogu pakietów.';
$txt['package_get_error_missing_xml'] = 'Próbujesz zainstalować pakiet nie posiadający pliku package-info.xml, który musi być w głównym katalogu pakietu.';
$txt['package_get_error_is_zero'] = 'Mimo, że pakiet został pobrany na serwer, wydaje się być pusty. Sprawdź czy katalog pakietów oraz podkatalog &quot;temp&quot; są zapisywalne. Jeżeli problem nie ustąpi, powinieneś spróbować rozpakować pakiet na twoim własnym komputerze i wgrać wypakowane pliki do podkatalogu w katalogu pakietów i spróbować jeszcze raz. Na przykład, jeśli pakiet był nazwany shout.tar.gz to:<br>1) Pobierz pakiet na twój komputer i rozpakuj<br>2) Używając klienta FTP stwórz nowy katalog w folderze &quot;Packages&quot;, w tym przykładzie możesz go nazwać "shout".<br>3) Wgraj wszystkie wypakowane pliki pakietu do tego katalogu.<br>4) Wróć do strony przeglądania pakietów w menadżerze, pakiet powinien zostać automatycznie znaleziony przez SMF.';
$txt['package_get_error_packageinfo_corrupt'] = 'SMF nie mogło znaleźć żadnych poprawnych informacji w pliku package-info.xml, załączonym w pakiecie. Powodem może być błąd w modyfikacji albo pakiet jest uszkodzony.';
$txt['package_get_error_is_theme'] = 'Nie możesz instalować stylów w tej sekcji. Użyj menu <a href="{MANAGETHEMEURL}">Zarządzanie stylami</a> do wysłania nowego stylu.';
$txt['package_get_error_is_mod'] = 'You can\'t install a mod from this section, please use the <a href="{MANAGEMODURL}">Package manager</a> page to upload it';
$txt['package_get_error_theme_not_compatible'] = 'Your theme does not show it has compatibility with %1$s. Please contact the theme author.';
$txt['package_get_error_theme_no_based_on_found'] = 'The theme you\'re trying to install depends on another theme: %1$s, you need to install that theme first.';
$txt['package_get_error_theme_no_new_version'] = 'The theme you\'re trying to install is already installed or is an outdated version of it. The version you\'re trying to install is: %1$s and the version already installed is: %2$s.';

$txt['no_membergroup_selected'] = 'Nie zaznaczono żadnej grupy użytkowników';
$txt['membergroup_does_not_exist'] = 'Grupa użytkowników nie istnieje lub jest nieprawidłowa.';

$txt['at_least_one_admin'] = 'Musi istnieć przynajmniej jeden Administrator forum!';

$txt['error_functionality_not_windows'] = 'Przepraszamy, ta opcja obecnie nie jest dostępna dla serwerów pracujących na Windows.';

// Don't use entities in the below string.
$txt['attachment_not_found'] = 'Załącznik nie znaleziony';

$txt['error_no_boards_selected'] = 'Nie wybrano prawidłowo działów!';
$txt['error_no_boards_available'] = 'Sorry, there are no boards available to you at this time.';
$txt['error_invalid_search_string'] = 'Czy nie zapomniałeś podać co szukać?';
$txt['error_invalid_search_string_blacklist'] = 'Twoje wyszukiwane zapytanie zawiera zbyt banalne słowa. Prosimy spróbuj ponownie z innym zapytaniem.';
$txt['error_search_string_small_words'] = 'Każde słowo musi składać się przynajmniej z dwóch znaków.';
$txt['error_query_not_specific_enough'] = 'Twoje zapytanie nie jest wystarczająco specyficzne. Spróbuj użyć dłuższych słów.';
$txt['error_no_messages_in_time_frame'] = 'Nie znaleziono żadnych pasujących wiadomości w wybranym przedziale czasowym.';
$txt['error_no_labels_selected'] = 'Nie wybrano etykiety!';
$txt['error_no_search_daemon'] = 'Brak dostępu do narzędzia wyszukiwania';

$txt['profile_errors_occurred'] = 'Wystąpiły następujące błędy podczas próby zapisania twojego profilu';
$txt['profile_error_bad_offset'] = 'Niepoprawnie podana strefa czasowa';
$txt['profile_error_bad_timezone'] = 'The timezone specified is invalid';
$txt['profile_error_no_name'] = 'Pole z nazwą użytkownika jest puste';
$txt['profile_error_digits_only'] = 'Pole "Liczba wiadomości\' może zawierać jedynie cyfry.';
$txt['profile_error_name_taken'] = 'Wybrana nazwa użytkownika/nazwa wyświetlana jest już zajęta';
$txt['profile_error_name_too_long'] = 'Wybrana nazwa użytkownika jest za długa. Nie powinna przekraczać 60 znaków';
$txt['profile_error_no_email'] = 'Pole email jest puste';
$txt['profile_error_bad_email'] = 'Nie wprowadziłeś poprawnego adresu email';
$txt['profile_error_email_taken'] = 'Inny użytkownik jest już zarejestrowany z tym adresem email';
$txt['profile_error_no_password'] = 'Hasło nie zostało wpisane';
$txt['profile_error_bad_new_password'] = 'Podane hasła nie są zgodne';
$txt['profile_error_bad_password'] = 'Hasło które wprowadziłeś jest nieprawidłowe';
$txt['profile_error_bad_avatar'] = 'Wybrany awatar nie jest poprawnym plikiem obrazka';
$txt['profile_error_bad_avatar_invalid_url'] = 'The url you specified is invalid, please check it.';
$txt['profile_error_bad_avatar_too_large'] = 'The image you\'re trying to use surpasses the max width/height settings, please use a smaller one.';
$txt['profile_error_bad_avatar_fail_reencode'] = 'The image you uploaded was corrupted and the attempt to recover it failed.';
$txt['profile_error_password_short'] = 'Twoje hasło musi mieć co najmniej ' . (empty($modSettings['password_strength']) ? 4 : 8) . ' znaki(ów).';
$txt['profile_error_password_restricted_words'] = 'Twoje hasło nie może zwierać Twojej nazwy użytkownika, adresu email ani innych popularnych słów.';
$txt['profile_error_password_chars'] = 'Twoje hasło musi zawierać mieszankę dużych i małych liter, oraz cyfr.';
$txt['profile_error_already_requested_group'] = 'Już posiadasz pierwszeństwo do przyznania do tej grupy!';
$txt['profile_error_signature_not_yet_saved'] = 'Sygnatura nie została zapisana.';
$txt['profile_error_personal_text_too_long'] = 'Własny tekst jest zbyt długi.';
$txt['profile_error_user_title_too_long'] = 'Własny tytuł jest zbyt długi.';
$txt['profile_error_custom_field_mail_fail'] = 'The mail validation check returned an error, you need to enter a valid email format (user@domain).';
$txt['profile_error_custom_field_regex_fail'] = 'The regex verification returned an error, if you are unsure about what to type here, please contact the forum administrator.';
$txt['profile_error_custom_field_nohtml_fail'] = 'HTML tags aren\'t allowed.';

// Registration form.
$txt['under_age_registration_prohibited'] = 'Sorry, but users under the age of %1$d are not allowed to register on this forum.';
$txt['error_too_quickly'] = 'You went through registration a bit too quickly, faster than should normally be possible. Please give it a moment and try again.';
$txt['mysql_error_space'] = '- sprawdź miejsce zapisu bazy danych lub skontaktuj się z administratorem serwera.';

$txt['icon_not_found'] = 'Plik ikony nie została znaleziona w domyślnym stylu - upewnij się że obrazek został wysłany i spróbuj ponownie.';
$txt['icon_after_itself'] = 'Ikona nie może być pozycjonowana względem siebie!';
$txt['icon_name_too_long'] = 'Nazwa pliku ikony nie może być dłuższa niż 16 znaków';

$txt['name_censored'] = 'Przepraszamy, nazwa której próbujesz użyć, %1$s, zawiera słowa które zostały ocenzurowane. Prosimy użyć innej nazwy.';

$txt['poll_already_exists'] = 'Wątek może mieć tylko jedną powiązaną ze sobą ankietę!';
$txt['poll_not_found'] = 'Nie ma ankiet związanych z tym wątkiem!';

$txt['error_while_adding_poll'] = 'Następujący błąd lub błędy wystąpiły przy dodawaniu ankiety';
$txt['error_while_editing_poll'] = 'Następujący błąd lub błędy wystąpiły przy edycji tej ankiety';

$txt['loadavg_search_disabled'] = 'Z powodu dużego obciążenia serwera, funkcja wyszukiwania została automatycznie tymczasowo wyłączona. Prosimy spróbuj ponownie za chwilę.';
$txt['loadavg_generic_disabled'] = 'Przykro nam, z powodu dużego obciążenia serwera, ta opcja jest obecnie niedostępna.';
$txt['loadavg_allunread_disabled'] = 'Zasoby serwera są czasowo pod zbyt dużym obciążeniem aby znaleźć wszystkie wątki których nie czytałeś.';
$txt['loadavg_unreadreplies_disabled'] = 'W tej chwili serwer jest przeciążony. Spróbuj ponownie za chwile.';
$txt['loadavg_show_posts_disabled'] = 'Spróbuj ponownie później. Z powodu dużego obciążenia serwera wiadomości tego użytkownika nie są w tej chwili dostępne.';
$txt['loadavg_unread_disabled'] = 'Zasoby serwera są obecnie zbyt wysokie aby móc wyświetlić pełną listę nieprzeczytanych wątków.';
$txt['loadavg_userstats_disabled'] = 'Prosimy spróbuj ponownie później. Statystyki użytkownika nie są dostępne z powodu dużego obciążenia serwera.';

$txt['cannot_edit_permissions_inherited'] = 'Nie możesz edytować konkretnie dziedziczonych zezwoleń, musisz edytować albo grupę albo dziedziczącego członka grupy.';

$txt['mc_no_modreport_specified'] = 'Musisz sprecyzować który raport chcesz wyświetlić.';
$txt['mc_no_modreport_found'] = 'Podany raport nie istnieje lub jest poza twoim limitem';

$txt['st_cannot_retrieve_file'] = 'Nie można odzyskać pliku %1$s.';
$txt['admin_file_not_found'] = 'Nie można załadować wybranego pliku: %1$s.';

$txt['themes_none_selectable'] = 'Przynajmniej jeden styl musi być wybrany.';
$txt['themes_default_selectable'] = 'Standardowy styl forum musi być stylem wybieralnym.';
$txt['ignoreboards_disallowed'] = 'Opcja ignorowania for nie jest włączona.';

$txt['mboards_delete_error'] = 'Nie zaznaczono kategorii!';
$txt['mboards_delete_board_error'] = 'Nie zaznaczono forum!';

$txt['mboards_parent_own_child_error'] = 'Nie możesz stworzyć działu nadrzędnego dla własnej kategorii podrzędnej.';
$txt['mboards_board_own_child_error'] = 'Nie możesz stworzyć działu dla własnej kategorii podrzędnej.';

$txt['smileys_upload_error_notwritable'] = 'Podana ścieżka uśmieszków jest niezapisywalna: %1$s';
$txt['smileys_upload_error_types'] = 'Obrazek może posiadać tylko podane rozszerzenia: %1$s.';

$txt['change_email_success'] = 'Twój adres email został zmieniony, nowy email z aktywacją został wysłany na podany adres.';
$txt['resend_email_success'] = 'Nowy email z aktywacją został wysłany pomyślnie.';

$txt['custom_option_need_name'] = 'Opcja profilu musi mieć nazwę!';
$txt['custom_option_not_unique'] = 'Pole nazwy nie jest unikalne!';
$txt['custom_option_regex_error'] = 'Podany regex nie jest poprawny';

$txt['warning_no_reason'] = 'Musisz wpisać powód ostrzeżenia użytkownika';
$txt['warning_notify_blank'] = 'Zaznaczyłeś powiadamianie użytkownika lecz nie wypełniłeś pola tematu lub wiadomości.';

$txt['cannot_connect_doc_site'] = 'Nie można połączyć się z Simple Machines Online Manual. Sprawdź czy konfiguracja twojego serwera zezwala na przychodzące połączenia i spróbuj ponownie.';

$txt['movetopic_no_reason'] = 'Musisz wprowadzić powód przesunięcia wątku albo odznaczyć opcję \'Wyślij wątek przekierowujący\'.';

$txt['error_custom_field_too_long'] = 'Pole &quot;%1$s&quot; nie może być większe niż %2$d znaków.';
$txt['error_custom_field_invalid_email'] = 'Pole &quot;%1$s&quot; musi zawierać prawidłowy adres email.';
$txt['error_custom_field_not_number'] = 'Pole &quot;%1$s&quot; musi być numeryczne.';
$txt['error_custom_field_inproper_format'] = 'Pole &quot;%1$s&quot; posiada błędny format.';
$txt['error_custom_field_empty'] = 'Pole &quot;%1$s&quot; nie może być puste.';

$txt['email_no_template'] = 'Email &quot;%1$s&quot; nie może zostać znaleziony.';

$txt['search_api_missing'] = 'Wyszukiwanie API nie może zostać znalezione! Skontaktuj się z administratorem aby sprawdził czy wysłał poprawne pliki.';
$txt['search_api_not_compatible'] = 'Forum używa nieaktualnego wyszukiwania API - przenoszenie do standardowego wyszukiwania. Sprawdź plik %1$s.';
// SubActions failed attempt.
$txt['subAction_fail'] = '';

// Handling hook calls
$txt['hook_fail_loading_file'] = 'Hook call: The file at path: %s could not be loaded.';
$txt['hook_fail_call_to'] = 'Hook call: function "%1$s" in file %2$s could not be called.';

$txt['file_not_created'] = 'The file at "%1$s" could not be created. Please make sure the parent directory has the appropriate permissions.';
$txt['file_minimize_fail'] = 'The file "%1$s" could not be located on the current or the default theme and therefore it wasn\'t included in the minified file.';
$txt['unlink_minimized_fail'] = 'The following files could not be deleted. Please check the file permissions of the files themselves and the parent directory.<br>%1$s';

// SubActions failed attempt.
$txt['sub_action_fail'] = 'The callable %s could not be called.';

// Restore topic/posts
$txt['cannot_restore_first_post'] = 'Nie możesz przywrócić pierwszej wiadomości w tym wątku.';
$txt['parent_topic_missing'] = 'Wątek wiadomości którą chcesz przywrócić został usunięty.';
$txt['restored_disabled'] = 'Przywracanie wątków zostało wyłączone.';
$txt['restore_not_found'] = 'Następujące wiadomości nie zostały przywrócone; oryginalny wątek mógł zostać usunięty:<ul style="margin-top: 0px;">%1$s</ul> Będziesz musiał przesunąć je samodzielnie.';

$txt['error_invalid_dir'] = 'Podany katalog jest nieprawidłowy.';

// json errors.
$txt['json_JSON_ERROR_DEPTH'] = 'Json decode error: The maximum stack depth has been exceeded';
$txt['json_JSON_ERROR_STATE_MISMATCH'] = 'Json decode error: Invalid or malformed JSON';
$txt['json_JSON_ERROR_CTRL_CHAR'] = 'Json decode error: Control character error, possibly incorrectly encoded';
$txt['json_JSON_ERROR_SYNTAX'] = 'Json decode error: Syntax error, malformed JSON';
$txt['json_JSON_ERROR_UTF8'] = 'Json decode error: Malformed UTF-8 characters, possibly incorrectly encoded';
$txt['json_JSON_ERROR_RECURSION'] = 'Json decode error: One or more recursive references in the value to be encoded';
$txt['json_JSON_ERROR_INF_OR_NAN'] = 'Json decode error: One or more NAN or INF values in the value to be encoded';
$txt['json_JSON_ERROR_UNSUPPORTED_TYPE'] = 'Json decode error: A value of a type that cannot be encoded was given';
$txt['json_unknown'] = 'Unknown error';

?>