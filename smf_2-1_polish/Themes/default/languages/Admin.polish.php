<?php
// Version: 2.1 Beta 3; Admin

global $settings, $scripturl;

$txt['settings_saved'] = 'Ustawienia zostały pomyślnie zapisane';
$txt['settings_not_saved'] = 'Zmiany nie zostały zapisane, ponieważ: %1$s';

$txt['admin_boards'] = 'Działy i Kategorie';
$txt['admin_users'] = 'Użytkownicy';
$txt['admin_newsletters'] = 'Wyślij email do użytkowników';
$txt['admin_edit_news'] = 'Aktualności';
$txt['admin_groups'] = 'Grupy';
$txt['admin_members'] = 'Zobacz wszystkich użytkowników';
$txt['admin_members_list'] = 'Poniżej znajduje się lista wszystkich obecnie zarejestrowanych użytkowników twojego forum.';
$txt['admin_next'] = 'Następna';
$txt['admin_censored_words'] = 'Modyfikuj cenzurowane słowa';
$txt['admin_censored_where'] = 'Po lewej wpisz słowo do ocenzurowania, po prawej na co ma być zmienione.';
$txt['admin_censored_desc'] = 'Z uwagi na publiczny charakter forum, mogą istnieć słowa, których wysyłania chcesz zabronić swoim użytkownikom. Pod spodem możesz wprowadzić słowa, które mają być ocenzurowane przy każdym użyciu przez któregoś z użytkowników.<br >Wyczyść pole aby usunąć dane słowo.';
$txt['admin_reserved_names'] = 'Ustaw zarezerwowane nazwy użytkowników';
$txt['admin_template_edit'] = '';
$txt['admin_modifications'] = 'Ustawienia modyfikacji';
$txt['admin_server_settings'] = 'Ustawienia serwera';
$txt['admin_reserved_set'] = 'Ustaw zarezerwowane nazwy użytkowników';
$txt['admin_reserved_line'] = 'Jedno zarezerwowane słowo na linię.';
$txt['admin_basic_settings'] = 'Na tej stronie możesz zmienić podstawowe ustawienia forum. Bądź ostrożny, gdyż nieprawidłowa zmiana niektórych z nich może negatywnie wpłynąć na działanie forum.';
$txt['admin_maintain'] = 'Włącz tryb konserwacji forum';
$txt['admin_title'] = 'Nazwa forum';
$txt['cookie_name'] = 'Nazwa cookie';
$txt['admin_webmaster_email'] = 'Email Administratora';
$txt['cachedir'] = 'Ścieżka cache';
$txt['admin_news'] = 'Włącz aktualności';
$txt['admin_manage_members'] = 'Użytkownicy';
$txt['admin_guest_post'] = '';
$txt['admin_main'] = 'Główne';
$txt['admin_config'] = 'Konfiguracja';
$txt['admin_version_check'] = 'Szczegółowe sprawdzenie wersji';
$txt['admin_smffile'] = 'Plik SMF';
$txt['admin_smfpackage'] = 'Pakiet SMF';
$txt['admin_logoff'] = 'Admin zakończył sesję';
$txt['admin_logoff'] = 'Admin zakończył sesję';
$txt['admin_maintenance'] = 'Konserwacja';
$txt['admin_credits'] = 'Twórcy';
$txt['admin_agreement'] = 'Pokaż umowę rejestracyjną przy rejestracji';
$txt['admin_image_text'] = '';
$txt['admin_agreement_default'] = 'Domyślny';
$txt['admin_agreement_select_language'] = 'Język do edycji';
$txt['admin_agreement_select_language_change'] = 'Zmień';
$txt['admin_agreement_not_saved'] = 'The agreement changes have not been saved. Perhaps the file permissions on the file were not set correctly.';
$txt['admin_delete_members'] = 'Usuń wybranych użytkowników';
$txt['admin_repair'] = 'Napraw wszystkie działy i wątki';
$txt['admin_repair'] = 'Napraw wszystkie działy i wątki';
$txt['admin_main_welcome'] = 'To jest &quot;%1$s&quot;. Tu możesz modyfikować ustawienia, obsługiwać forum, przeglądać raporty, instalować pakiety, zarządzać stylami i robić wiele innych rzeczy.<br><br>Jeśli masz jakiekolwiek problemy, odwiedź stronę &quot;Support &amp; Credits&quot;. Jeśli zawarte tam informacje nie pomogą Ci <a href="http://www.simplemachines.org/community/index.php" target="_blank" class="new_win">zwróć się po pomoc do nas</a>.<br>Odpowiedzi na twoje pytania i rozwiązania problemów możesz również znaleźć klikając na ikonę <span class="generic_icons help" title="%3$s"></span> umieszczoną przy danych opcjach.<br><br>Autorzy polonizacji SMF: Nolt, ronin, Kemac, CyPhErR, tommass, HaWaN, WilK, voythas i phantom.<br>Wszelkie zauważone błędy w tłumaczeniu prosimy zgłaszać na <a href="http://www.smf.pl">www.smf.pl (Polska Pomoc Simple Machines Forum)</a>.';
$txt['admin_main_welcome'] = 'To jest &quot;%1$s&quot;. Tu możesz modyfikować ustawienia, obsługiwać forum, przeglądać raporty, instalować pakiety, zarządzać stylami i robić wiele innych rzeczy.<br><br>Jeśli masz jakiekolwiek problemy, odwiedź stronę &quot;Support &amp; Credits&quot;. Jeśli zawarte tam informacje nie pomogą Ci <a href="http://www.simplemachines.org/community/index.php" target="_blank" class="new_win">zwróć się po pomoc do nas</a>.<br>Odpowiedzi na twoje pytania i rozwiązania problemów możesz również znaleźć klikając na ikonę <span class="generic_icons help" title="%3$s"></span> umieszczoną przy danych opcjach.<br><br>Autorzy polonizacji SMF: Nolt, ronin, Kemac, CyPhErR, tommass, HaWaN, WilK, voythas i phantom.<br>Wszelkie zauważone błędy w tłumaczeniu prosimy zgłaszać na <a href="http://www.smf.pl">www.smf.pl (Polska Pomoc Simple Machines Forum)</a>.';
$txt['admin_news_desc'] = 'Umieszczaj jedną wiadomość na okienko. Niektóre kody BBC, np. <span title="Pogrubienie">[b]</span>, <span title="Kursywa">[i]</span> i <span title="Podkreślenie">[u]</span> mogą być użyte w aktualnościach, podobnie jak emotikony i kod HTML. Wyczyść okienko aby usunąć daną wiadomość.';
$txt['administrators'] = 'Administratorzy forum';
$txt['admin_reserved_desc'] = 'Zarezerwowane nazwy użytkowników, nie mogą być użyte podczas rejestracji lub jako nazwy wyświetlane. Wybierz opcje widoczne na dole, przed zatwierdzeniem.';
$txt['admin_match_whole'] = 'Bierz pod uwagę tylko całe nazwy.';
$txt['admin_match_case'] = 'Bierz pod uwagę wielkość liter.';
$txt['admin_check_user'] = 'Sprawdź nazwę użytkownika.';
$txt['admin_activation_email'] = '';
$txt['admin_check_display'] = 'Sprawdź nazwę wyświetlaną.';
$txt['admin_fader_delay'] = 'Czas w milisekundach na wyświetlenie każdej z wiadomości na pasku aktualności';
$txt['admin_fader_delay'] = 'Czas w milisekundach na wyświetlenie każdej z wiadomości na pasku aktualności';
$txt['additional_options_collapsable'] = 'Enable collapsible additional post options';
$txt['guest_post_no_email'] = 'Do not show the email field for guests posts';
$txt['guest_post_no_email'] = 'Do not show the email field for guests posts';
$txt['zero_for_no_limit'] = '(0 aby wyłączyć limit) ';
$txt['admin_newsletter_send'] = '';
$txt['zero_to_disable'] = '(0 aby wyłączyć)';
$txt['dont_show_attach_under_post'] = 'Do not show attachments under the post if they are already embedded in it.';
$txt['dont_show_attach_under_post_sub'] = 'Enable this if you do not want attachments to appear twice. Attachments embedded in the post still count towards attachment limits and can still be treated like normal attachments.';

$txt['admin_backup_fail'] = 'Nie można wykonać kopii zapasowej pliku Settings.php - upewnij się, że plik Settings_bak.php istnieje i można go zapisywać.';
$txt['registration_agreement'] = 'Modyfikuj umowę rejestracyjną';
$txt['registration_agreement_desc'] = 'Ta umowa jest wyświetlana tylko, jeśli włączysz to w ustawieniach forum.';
$txt['errors_list'] = 'Wykaz błędów na forum';
$txt['errors_found'] = 'Na twoim forum obecne są następujące błędy (lista jest pusta, przy braku błędów)';
$txt['errors_fix'] = 'Czy chcesz naprawić te błędy?';
$txt['errors_do_recount'] = 'Wszystkie błędy naprawione - Dział odzysku został utworzony! Kliknij na przycisk poniżej, aby przeliczyć kluczowe statystyki.';
$txt['errors_recount_now'] = 'Przelicz statystyki';
$txt['errors_fixing'] = 'Naprawianie błędów';
$txt['errors_fixed'] = 'Wszystkie błędy naprawione! Musisz przejrzeć utworzone działy, kategorie i wątki i zdecydować, co z nimi zrobić.';
$txt['attachments_avatars'] = 'Załączniki i awatary';
$txt['attachments_desc'] = 'Tu możesz zarządzać załącznikami. Możesz usuwać zbyt duże lub stare pliki. Wyświetlane są tu również statystyki załączników.';
$txt['attachment_stats'] = 'Statystyki załączników';
$txt['attachment_integrity_check'] = 'Sprawdzenie spójności załączników';
$txt['attachment_integrity_check_desc'] = 'Ta funkcja sprawdzi oraz jeśli będzie to konieczne naprawi błędy związane ze spójnością i rozmiarem załączników, a także listę ich nazw w bazie danych.';
$txt['attachment_check_now'] = 'Uruchom sprawdzanie teraz';
$txt['attachment_pruning'] = 'Czyszczenie załączników';
$txt['attachment_pruning_message'] = 'Informacja dodana do wiadomości';
$txt['attachment_pruning_warning'] = 'Czy aby na pewno usunąć te załączniki?\\nTej operacji nie można cofnąć!';

$txt['attachment_total'] = 'Wszystkich załączników';
$txt['attachmentdir_size'] = 'Całkowity rozmiar katalogu załączników';
$txt['attachmentdir_size_current'] = 'Rozmiar całkowity obecnego katalogu z załącznikami';
$txt['attachmentdir_files_current'] = 'Liczba plików w katalogu załączników';
$txt['attachment_space'] = 'Wolne miejsce w katalogu załączników';
$txt['attachment_files'] = 'Pozostało plików';

$txt['attachment_log'] = 'Raport o załącznikach';
$txt['attachment_remove_old'] = 'Usuń załączniki starsze niż';
$txt['attachment_remove_size'] = 'Usuń załączniki większe niż';
$txt['attachment_name'] = 'Nazwa załącznika';

$txt['attachment_options'] = '';
$txt['attachment_file_size'] = 'Rozmiar pliku';
$txt['attachment_file_size'] = 'Rozmiar pliku';
$txt['attachmentdir_size_not_set'] = 'Nie ustalono maksymalnego rozmiaru katalogu załączników';
$txt['attachmentdir_files_not_set'] = 'No directory file limit is currently set';
$txt['attachment_delete_admin'] = '[załącznik usunięty przez administratora]';
$txt['live'] = 'Na żywo z www.simplemachines.org...';
$txt['remove_all'] = 'Usuń wszystkie';
$txt['remove_all'] = 'Usuń wszystkie';
$txt['agreement_not_writable'] = 'Ostrzeżenie - agreement.txt nie jest zapisywalny, zmiany które dokonasz zostaną niezapisane.';

$txt['version_check_desc'] = 'Informacja pokazuje wersję twoich plików instalacyjnych przeciwko najnowszym plikom. Jeśli któryś z plików jest nieaktualny, powinieneś pobrać i zaktualizować je do najnowszej wersji <a href="http://www.simplemachines.org/" target="_blank" class="new_win">www.simplemachines.org</a>.';

$txt['version_check_desc'] = 'Informacja pokazuje wersję twoich plików instalacyjnych przeciwko najnowszym plikom. Jeśli któryś z plików jest nieaktualny, powinieneś pobrać i zaktualizować je do najnowszej wersji <a href="http://www.simplemachines.org/" target="_blank" class="new_win">www.simplemachines.org</a>.';
$txt['version_check_more'] = '(bardziej szczegółowo)';

$txt['smf_news_cant_connect'] = 'You are unable to connect to simplemachines.org\'s latest news file.';

$txt['smf_news_cant_connect'] = 'You are unable to connect to simplemachines.org\'s latest news file.';

$txt['manage_calendar'] = 'Kalendarz';
$txt['approve_new_members'] = '';
$txt['manage_search'] = 'Szukaj';

$txt['smileys_manage'] = 'Emotikony';
$txt['theme_admin'] = 'Zarządzanie stylami';
$txt['registration_center'] = 'Rejestracja';

$txt['lfyi'] = '';

$txt['viewmembers_online'] = 'Ostatnio online';
$txt['viewmembers_today'] = 'Dziś';
$txt['viewmembers_day_ago'] = 'dzień temu';
$txt['viewmembers_days_ago'] = 'dni temu';

$txt['display_name'] = 'Nazwa wyświetlana';
$txt['email_address'] = 'Adres email';
$txt['email_address'] = 'Adres email';

$txt['viewmembers_name'] = '';
$txt['ip_address'] = 'Adres IP';
$txt['member_id'] = 'ID';

$txt['unknown'] = 'nieznany';
$txt['security_wrong'] = 'Próba zalogowania jako administrator!' . "\n" . 'Referer: %1$s' . "\n" . 'User agent: %2$s' . "\n" . 'IP: %3$s';
$txt['security_wrong'] = 'Próba zalogowania jako administrator!' . "\n" . 'Referer: %1$s' . "\n" . 'User agent: %2$s' . "\n" . 'IP: %3$s';

$txt['email_as_html'] = 'Wysyłaj jako HTML. (dzięki temu możesz dodawać kod HTML do treści wiadomości email.)';
$txt['email_parsed_html'] = 'Dodaj &lt;br /&gt;s i &amp;nbsp;s do tej wiadomości.';
$txt['email_parsed_html'] = 'Dodaj &lt;br /&gt;s i &amp;nbsp;s do tej wiadomości.';
$txt['email_variables'] = 'W tej wiadomości możesz użyć kilku "zmiennych". Kliknij <a href="' . $scripturl . '?action=helpadmin;help=email_members" onclick="return reqOverlayDiv(this.href);" class="help">tutaj</a> po więcej informacji.';
$txt['email_force'] = 'Wyślij do użytkowników, którzy nie zgodzili się na wysyłanie im ogłoszeń.';
$txt['email_as_pms'] = 'Wyślij to do tych grup za pomocą prywatnych wiadomości.';
$txt['email_continue'] = 'Kontynuuj';
$txt['email_done'] = 'skończone.';

$txt['email_preview_warning'] = '';

$txt['warnings'] = 'Ostrzeżenia';
$txt['warnings_desc'] = 'This system allows administrators and moderators to issue warnings to users, and can automatically remove user rights as their warning level increases. To take full advantage of this system, &quot;Post Moderation&quot; should be enabled.';

$txt['ban_title'] = 'Banowanie';

$txt['ban_title'] = 'Banowanie';

$txt['ban_errors_detected'] = 'The following error or errors occurred while saving or editing the ban';
$txt['ban_description'] = 'Stąd możesz banować użytkowników stwarzających problemy, wprowadzając ich adres IP, nazwę hosta, nazwę użytkownika lub adres email.';
$txt['ban_add_new'] = 'Dodaj nowy ban';
$txt['ban_banned_entity'] = 'Banuj według';
$txt['ban_on_ip'] = 'Adresu IP (np. 192.168.10-20.*)';
$txt['ban_on_hostname'] = 'Nazwy hosta (np. *.mil)';
$txt['ban_on_email'] = 'Adresu email (np. *@zlastrona.com)';
$txt['ban_on_username'] = 'Nazwy użytkownika';
$txt['ban_ip'] = '';
$txt['ban_notes'] = 'Uwagi';
$txt['ban_email'] = '';
$txt['ban_restriction'] = 'Restrykcje';
$txt['ban_username'] = '';
$txt['ban_full_ban'] = 'Pełny ban';
$txt['ban_partial_ban'] = 'Częściowy ban';
$txt['ban_cannot_post'] = 'Nie może wysyłać wiadomości';
$txt['ban_cannot_register'] = 'Nie może się zarejestrować';
$txt['ban_cannot_login'] = 'Nie może się logować';
$txt['ban_add'] = 'Dodaj';
$txt['ban_edit_list'] = 'Modyfikuj listę banów';
$txt['ban_edit_list'] = 'Modyfikuj listę banów';
$txt['ban_type'] = 'Typ bana';
$txt['ban_type'] = 'Typ bana';
$txt['ban_days'] = 'dniu/dniach';
$txt['ban_will_expire_within'] = 'Ban wygaśnie po';
$txt['ban_added'] = 'Dodane';
$txt['ban_expires'] = 'Wygasa';
$txt['ban_hits'] = 'Trafienia';
$txt['ban_actions'] = 'Czynności';
$txt['ban_expiration'] = 'Wygaśnięcie';
$txt['ban_reason_desc'] = 'Powód bana wyświetlany banowanemu użytkownikowi.';
$txt['ban_notes_desc'] = 'Uwagi mogące służyć reszcie załogi forum.';
$txt['ban_remove_selected'] = 'Usuń zaznaczone';
// Escape any single quotes in here twice.. 'it\'s' -> 'it\\\'s'.
$txt['ban_remove_selected_confirm'] = 'Na pewno chcesz usunąć zaznaczone bany?';
$txt['ban_modify'] = 'Modyfikuj';
$txt['ban_name'] = 'Nazwa bana';
// Escape any single quotes in here twice.. 'it\'s' -> 'it\\\'s'.
$txt['ban_edit'] = 'Edytuj ban';
$txt['ban_add_notes'] = '<strong>Uwaga</strong>: po dodaniu powyższego bana, możesz dodać dodatkowe blokady, np. - adresy IP, nazwy hostów i adresy email.';
$txt['ban_expired'] = 'Wygasły / wyłączony';
// Escape any single quotes in here twice.. 'it\'s' -> 'it\\\'s'.
$txt['ban_restriction_empty'] = 'Nie wybrano żadnych ograniczeń';

$txt['ban_triggers'] = 'Blokada';
$txt['ban_add_trigger'] = 'Dodaj ban';
$txt['ban_add_trigger_submit'] = 'Dodaj';
$txt['ban_edit_trigger'] = 'Modyfikuj';
$txt['ban_edit_trigger_title'] = 'Edytuj ban';
$txt['ban_edit_trigger_submit'] = 'Modyfikuj';
$txt['ban_remove_selected_triggers'] = 'Usuń zaznaczone bany';
$txt['ban_no_entries'] = 'W tym momencie nie ma żadnych aktywnych banów.';

// Escape any single quotes in here twice.. 'it\'s' -> 'it\\\'s'.
$txt['ban_remove_selected_triggers_confirm'] = 'Czy jesteś pewien, że chcesz usunąć zaznaczone bany?';
$txt['ban_trigger_browse'] = 'Przeglądaj bany';
$txt['ban_trigger_browse_description'] = 'Ten ekran pokazuje wszystkie zbanowane wpisy pogrupowane według adresu IP, nazwy hosta, adresu email i nazwy użytkownika.';

$txt['ban_log'] = 'Rejestr';
$txt['ban_log_description'] = 'Rejestr pokazuje wszystkie próby wejścia na forum dokonane przez banowanych użytkowników (dotyczy tylko: \'pełnego bana\' i \'zakazu rejestracji\').';
$txt['ban_log_no_entries'] = 'Brak wpisów.';
$txt['ban_log_ip'] = 'IP';
$txt['ban_log_email'] = 'Adres email';
$txt['ban_log_member'] = 'Użytkownik';
$txt['ban_log_date'] = 'Data';
$txt['ban_log_remove_all'] = 'Usuń wszystkie';
$txt['ban_log_remove_all'] = 'Usuń wszystkie';
$txt['ban_log_remove_all_confirm'] = 'Na pewno chcesz usunąć wszystkie wpisy w rejestrze?';
$txt['ban_log_remove_selected'] = 'Usuń zaznaczone';
$txt['ban_log_remove_selected_confirm'] = 'Na pewno chcesz usunąć wszystkie zaznaczone wpisy?';
$txt['ban_no_triggers'] = 'Brak banów.';

$txt['settings_not_writable'] = 'Opcje nie mogą zostać zmienione gdyż plik Settings.php jest tylko do odczytu.';

$txt['maintain_title'] = 'Konserwacja forum';
$txt['maintain_info'] = 'Optymalizuj bazę danych, rób kopie zapasowe, szukaj błędów i czyść działy za pomocą tych narzędzi.';
$txt['maintain_sub_database'] = 'Baza danych';
$txt['maintain_sub_routine'] = 'Zadania';
$txt['maintain_sub_members'] = 'Użytkownicy';
$txt['maintain_sub_topics'] = 'Wątki';
$txt['maintain_done'] = 'Zadanie \'%1$s\' zakończone powodzeniem.';
$txt['maintain_no_errors'] = 'Gratulacje, nie znaleziono żadnych błędów! Dzięki za sprawdzenie.';

$txt['maintain_tasks'] = 'Zaplanowane zadania';
$txt['maintain_tasks_desc'] = 'Zarządzaj wszystkimi zaplanowanymi zadaniami przez SMF.';
$txt['scheduled_tasks_settings'] = 'Settings';
$txt['scheduled_tasks_settings'] = 'Settings';
$txt['scheduled_tasks_settings_desc'] = 'Settings to control how scheduled tasks are run.';
$txt['scheduled_tasks_settings_desc'] = 'Settings to control how scheduled tasks are run.';

$txt['scheduled_log'] = 'Log zadania';
$txt['scheduled_log_desc'] = 'Ten log pokazuje wszystkie zaplanowane zadania, które zostały uruchomione na Twoim forum.';
$txt['admin_log'] = 'Log administratora';
$txt['admin_log_desc'] = 'Lista zadań administracyjnych, które zostały wykonane przez Administratorów Twojego forum.';
$txt['moderation_log'] = 'Raport moderacji';
$txt['moderation_log_desc'] = 'Lista czynności moderujących, które zostały wykonane przez Moderatorów Twojego forum.';
$txt['spider_log_desc'] = 'Przejrzyj wpisy związane z aktywnością robotów wyszukiwarek internetowych na twoim forum.';
$txt['log_settings_desc'] = 'Use these options to configure how logging works on your forum.';
$txt['modlog_enabled'] = 'Włącz logi moderacji';
$txt['adminlog_enabled'] = 'Włącz logi administracji';
$txt['userlog_enabled'] = 'Włącz logowanie edycji profilu';

$txt['mailqueue_title'] = 'Mail';

$txt['db_error_send'] = 'Wyślij wiadomość email przy błędzie w połączeniu MySQL';
$txt['db_persist'] = 'Używaj ciągłego połączenia';
$txt['ssi_db_user'] = 'Nazwa użytkownika w bazie danych do użycia w trybie SSI';
$txt['ssi_db_passwd'] = 'Hasło użytkownika w bazie danych do użycia w trybie SSI';

$txt['default_language'] = 'Domyślny język forum';

$txt['maintenance_subject'] = 'Wyświetlany temat';
$txt['maintenance_message'] = 'Wyświetlana wiadomość';

$txt['errorlog_desc'] = 'The error log tracks every error encountered by your forum. To delete any errors from the database, mark the checkbox, and click the %1$s button at the bottom of the page.';

$txt['errorlog_desc'] = 'The error log tracks every error encountered by your forum. To delete any errors from the database, mark the checkbox, and click the %1$s button at the bottom of the page.';
$txt['errorlog_no_entries'] = 'There are currently no error log entries.';
$txt['errorlog_no_entries'] = 'There are currently no error log entries.';

$txt['theme_settings'] = 'Ustawienia stylów';
$txt['theme_current_settings'] = 'Ustawienia obecnego stylu';

$txt['dvc_your'] = 'Twoja wersja';

$txt['dvc_your'] = 'Twoja wersja';
$txt['dvc_current'] = 'Obecna wersja';
$txt['dvc_current'] = 'Obecna wersja';
$txt['dvc_sources'] = 'Źródła';
$txt['dvc_default'] = 'Domyślne szablony';
$txt['dvc_templates'] = 'Obecne szablony';

$txt['errlog_desc'] = '';
$txt['dvc_languages'] = 'Pliki języków';
$txt['errlog_no_entries'] = '';
$txt['dvc_tasks'] = 'Background Tasks';

$txt['smileys_default_set_for_theme'] = 'Wybierz domyślny zestaw emotikon dla tego stylu';
$txt['smileys_no_default'] = '(Użyj zestawu domyślnego)';

$txt['censor_test'] = 'Testuj ocenzurowane słowa';
$txt['censor_test_save'] = 'Testuj';
$txt['censor_case'] = 'Ignoruj wielkość liter podczas cenzurowania';
$txt['censor_whole_words'] = 'Sprawdzaj tylko całe słowa';

$txt['admin_confirm_password'] = '(potwierdź)';
$txt['admin_incorrect_password'] = 'Błędne hasło';

$txt['date_format'] = '(RRRR-MM-DD)';
$txt['age'] = 'Wiek użytkownika';
$txt['activation_status'] = 'Status aktywacji';
$txt['activated'] = 'Aktywne';
$txt['not_activated'] = 'Nieaktywne';
$txt['primary'] = 'Podstawowe';
$txt['additional'] = 'Dodatkowe';
$txt['wild_cards_allowed'] = 'Możesz używać znaków * i ?';
$txt['search_for'] = 'Szukaj';
$txt['search_match'] = 'Match';
$txt['undefined_gender'] = '';
$txt['member_part_of_these_membergroups'] = 'Użytkownik jest członkiem tych grup';
$txt['membergroups'] = 'Grupy użytkowników';
$txt['confirm_delete_members'] = 'Na pewno chcesz usunąć wybranych użytkowników?';

$txt['support_credits_title'] = 'Wsparcie i twórcy';
$txt['support_title'] = 'Informacja techniczna';
$txt['support_versions_current'] = 'Obecna wersja SMF';
$txt['support_versions_forum'] = 'Wersja zainstalowana';
$txt['support_versions_db'] = '%1$s wersja';
$txt['support_versions_db_engine'] = '%1$s engine';
$txt['support_versions_server'] = 'Wersja serwera';
$txt['support_versions_gd'] = 'Wersja GD';
$txt['support_versions_imagemagick'] = 'Wersja ImageMagick';
$txt['support_versions'] = 'Informacja o wersjach';
$txt['support_resources'] = 'Zasoby wsparcia';
$txt['support_resources_p1'] = 'Nasz <a href="%1$s">Online Manual</a> to główna dokumentacja dla SMF. SMF Online Manual posiada wiele dokumentów niosących pomoc dotyczących skryptu oraz wyjaśnień <a href="%2$s">Funkcji</a>, <a href="%3$s">Ustawień</a>, <a href="%4$s">Styli</a>, <a href="%5$s">Pakietów</a>, itd. Dokumentacja pomoże nam w szybkim odszukaniu odpowiedzi na pytania oraz problemy dotyczące SMF.';
$txt['support_resources_p2'] = 'Jeśli nie możesz znaleźć odpowiedzi na Twoje pytanie w Online Manual, spróbuj poszukać na naszym oficjalnym <a href="%1$s">Forum</a> lub poproś o pomoc w dziale <a href="%2$s">Angielskim</a> lub jednym z wielu <a href="%3$s">działów międzynarodowych</a>. Na Oficjalnym Forum SMF możesz uzyskać pomoc w <a href="%4$s">obsłudze</a>, <a href="%5$s">dostosowaniu</a>, znalezieniu firmy hostingowej, a także dyskusji dotyczącej administracji i jej problemami oraz wymienić się spostrzeżeniami z innymi administratorami for opartych o skrypt SMF. ';

$txt['membergroups_members'] = 'Użytkownicy bez grupy';
$txt['support_versions_php'] = '';
$txt['membergroups_guests'] = 'Goście';
$txt['membergroups_add_group'] = 'Dodaj grupę';
$txt['membergroups_permissions'] = 'Zezwolenia';

$txt['permitgroups_restrict'] = 'Restrykcyjne';
$txt['permitgroups_standard'] = 'Standardowe';
$txt['permitgroups_moderator'] = 'Moderatorskie';
$txt['permitgroups_maintenance'] = 'Konserwacja forum';
$txt['permitgroups_inherit'] = 'Dziedziczone';

$txt['confirm_delete_attachments_all'] = 'Na pewno chcesz usunąć wszystkie załączniki?';
$txt['confirm_delete_attachments'] = 'Na pewno chcesz usunąć wybrane załączniki?';
$txt['attachment_manager_browse_files'] = 'Przeglądaj pliki';
$txt['attachment_manager_browse_files'] = 'Przeglądaj pliki';
$txt['attachment_manager_repair'] = 'Napraw błędy';
$txt['attachment_manager_avatars'] = 'Awatary';
$txt['attachment_manager_attachments'] = 'Załączniki';
$txt['attachment_manager_thumbs'] = 'Miniaturki';
$txt['attachment_manager_last_active'] = 'Ostatni aktywny';
$txt['attachment_manager_last_active'] = 'Ostatni aktywny';
$txt['attachment_manager_member'] = 'Użytkownik';
$txt['attachment_manager_avatars_older'] = 'Usuń awatary użytkowników nieaktywnych dłużej niż';
$txt['attachment_manager_total_avatars'] = 'Awatarów w sumie';

$txt['attachment_manager_avatars_no_entries'] = 'Nie ma obecnie żadnych awatarów';
$txt['attachment_manager_attachments_no_entries'] = 'Nie ma obecnie żadnych załączników';
$txt['attachment_manager_thumbs_no_entries'] = 'Nie ma obecnie żadnych miniatur';

$txt['attachment_manager_settings'] = 'Ustawienia załączników';
$txt['attachment_manager_avatar_settings'] = 'Ustawienia Awatarów';
$txt['attachment_manager_browse'] = 'Przeglądaj pliki';
$txt['attachment_manager_maintenance'] = 'Zarządzanie plikami';
$txt['attachment_manager_save'] = 'Zapisz';

$txt['attachmentEnable'] = 'Tryb załączników';
$txt['attachmentEnable_deactivate'] = 'Wyłącz załączniki';
$txt['attachmentEnable_enable_all'] = 'Włącz wszystkie załączniki';
$txt['attachmentEnable_disable_new'] = 'Wyłącz nowe załączniki';
$txt['attachmentCheckExtensions'] = 'Sprawdzaj rozszerzenie załącznika';
$txt['attachmentExtensions'] = 'Dozwolone rozszerzenia załączników';
$txt['attachmentShowImages'] = 'Wyświetlaj załączniki graficzne jako obrazki pod wiadomością';
$txt['attachmentUploadDir'] = 'Katalog załączników<div class="smalltext"><a href="' . $scripturl . '?action=admin;area=manageattachments;sa=attachpaths">Konfiguruj multi katalogi załączników</a></div>';
$txt['attachmentUploadDir_multiple_configure'] = '<a href="' . $scripturl . '?action=admin;area=manageattachments;sa=attachpaths">[Konfiguruj multi katalogi załączników]</a>';
$txt['attachmentDirSizeLimit'] = 'Maksymalny rozmiar folderu z załącznikami<div class="smalltext">(0 = bez limitu)</div>';
$txt['attachmentPostLimit'] = 'Maksymalny rozmiar załączników na jedną wiadomość<div class="smalltext">(0 = bez limitu)</div>';
$txt['attachmentSizeLimit'] = 'Maksymalny rozmiar jednego załącznika<div class="smalltext">(0 = bez limitu)</div>';
$txt['attachmentNumPerPostLimit'] = 'Maksymalna liczba załączników na wiadomość<div class="smalltext">(0 = bez limitu)</div>';
$txt['attachment_img_enc_warning'] = 'Neither the GD module nor the IMagick or MagickWand extensions are currently installed. Image re-encoding is not possible.';
$txt['attachment_postsize_warning'] = 'The current php.ini setting \'post_max_size\' may not support this.';
$txt['attachment_filesize_warning'] = 'The current php.ini setting \'upload_max_filesize\' may not support this.';
$txt['attachment_image_reencode'] = 'Ponowne kodowanie potencjalnie niebezpiecznych obrazów w załącznikach';
$txt['attachment_image_paranoid_warning'] = 'Przeprowadzenie kontroli bezpieczeństwa może doprowadzić do odrzucenia dużej liczby załączników.';
$txt['attachment_image_paranoid'] = 'Przeprowadzenie kontroli bezpieczeństwa wysłanych obrazków';
$txt['attachmentThumbnails'] = 'Zmień rozmiar obrazka, gdy ten jest wyświetlany pod wiadomością';
$txt['attachment_thumb_png'] = 'Zapisz miniatury jako pliki PNG';
$txt['attachment_thumb_memory'] = 'Adaptive thumbnail memory';
$txt['attachmentThumbWidth'] = 'Maksymalna szerokość miniaturki';
$txt['attachmentThumbHeight'] = 'Maksymalna wysokość miniaturki';
$txt['attachment_thumbnail_settings'] = 'Ustawienia miniatur';
$txt['attachment_security_settings'] = 'Ustawienia bezpieczeństwa załączników';

$txt['attach_dir_does_not_exist'] = 'Nie istnieje';

$txt['attach_dir_does_not_exist'] = 'Nie istnieje';
$txt['attach_dir_not_writable'] = 'Niezapisywalny';
$txt['attach_dir_not_writable'] = 'Niezapisywalny';
$txt['attachment_image_reencode_note'] = '';
$txt['attach_dir_files_missing'] = 'Brak pliku (<a href="' . $scripturl . '?action=admin;area=manageattachments;sa=repair;%2$s=%1$s">Napraw</a>)';
$txt['attach_dir_unused'] = 'Nieużywany';
$txt['attach_dir_empty'] = 'Pusty';
$txt['attach_dir_ok'] = 'OK';
$txt['attach_dir_basedir'] = 'Katalog główny';
$txt['attach_dir_desc'] = 'Create new directories or change the current directory below. <br>To create a new directory within the forum directory structure, use just the directory name. <br>To remove a directory, blank the path input field. Only empty directories can be removed. To see if a directory is empty, check for files or sub-directories in brackets next to the file count. <br> To rename a directory, simply change its name in the input field. Only directories without sub-directories may be renamed.';
$txt['attach_dir_desc'] = 'Create new directories or change the current directory below. <br>To create a new directory within the forum directory structure, use just the directory name. <br>To remove a directory, blank the path input field. Only empty directories can be removed. To see if a directory is empty, check for files or sub-directories in brackets next to the file count. <br> To rename a directory, simply change its name in the input field. Only directories without sub-directories may be renamed.';
$txt['attach_dir_base_desc'] = 'You may use the area below to change the current base directory or create a new one. New base directories are also added to the Attachment Directory list. You may also designate an existing directory to be a base directory.';
$txt['attach_dir_base_desc'] = 'You may use the area below to change the current base directory or create a new one. New base directories are also added to the Attachment Directory list. You may also designate an existing directory to be a base directory.';
$txt['attach_dir_save_problem'] = 'Oops, there seems to be a problem.';
$txt['attachments_no_create'] = 'Unable to create a new attachment directory. Please do so using a FTP client or your site file manager.';
$txt['attachments_no_write'] = 'This directory has been created but is not writable. Please attempt to do so using a FTP client or your site file manager.';
$txt['attach_dir_duplicate_msg'] = 'Nie można dodać. Ten katalog już istnieje.';
$txt['attach_dir_exists_msg'] = 'Unable to move. A directory already exists at that path.';
$txt['attach_dir_base_dupe_msg'] = 'Unable to add. This base directory has already been created.';
$txt['attach_dir_base_no_create'] = 'Unable to create. Please verify the path input. Or create this directory using an FTP client or your site file manager and retry.';
$txt['attach_dir_base_no_create'] = 'Unable to create. Please verify the path input. Or create this directory using an FTP client or your site file manager and retry.';
$txt['attach_dir_no_rename'] = 'Unable to move or rename. Please verify that the path is correct or that this directory does not contain any sub-directories.';
$txt['attach_dir_no_delete'] = 'Is not empty and can not be deleted. Please do so using a FTP client or your site file manager.';
$txt['attach_dir_no_delete'] = 'Is not empty and can not be deleted. Please do so using a FTP client or your site file manager.';
$txt['attach_dir_no_remove'] = 'Still contains files or is a base directory and can not be deleted.';
$txt['attach_dir_is_current'] = 'Unable to remove while it is selected as the current directory.';
$txt['attach_dir_is_current_bd'] = 'Unable to remove while it is selected as the current base directory.';
$txt['attach_dir_invalid'] = 'Invalid directory';
$txt['attach_last_dir'] = 'Last active attachment directory';
$txt['attach_current_dir'] = 'Obecny katalog';
$txt['attach_current'] = 'Obecny';
$txt['attach_path_manage'] = 'Zarządzaj ściężką załączników';
$txt['attach_directories'] = 'Katalogi załączników';
$txt['attach_paths'] = 'Ścieżki załączników';
$txt['attach_path'] = 'Ścieżka';
$txt['attach_current_size'] = 'Obecny rozmiar (KB)';
$txt['attach_num_files'] = 'Pliki';
$txt['attach_dir_status'] = 'Status';
$txt['attach_add_path'] = 'Dodaj ścieżkę';
$txt['attach_path_current_bad'] = 'Nieprawidłowa ścieżka załączników';
$txt['attachmentDirFileLimit'] = 'Maksymalna ilość plików w katalogu';

$txt['attach_base_paths'] = 'Base directory paths';
$txt['attach_num_dirs'] = 'Katalogi';
$txt['max_image_width'] = 'Maksymalna szerokość wyświetlanych załączników graficznych';
$txt['max_image_height'] = 'Maksymalna wysokość wyświetlanych załączników graficznych';

$txt['automanage_attachments'] = 'Wybierz metodę zarządzania katalogami załączników';
$txt['attachments_normal'] = '(Manual) SMF default behavior';
$txt['attachments_auto_years'] = '(Auto) Subdivide by years';
$txt['attachments_auto_months'] = '(Auto) Subdivide by years and months';
$txt['attachments_auto_days'] = '(Auto) Subdivide by years, months and days';
$txt['attachments_auto_16'] = '(Auto) 16 random directories';
$txt['attachments_auto_16x16'] = '(Auto) 16 random directories with 16 random sub-directories';
$txt['attachments_auto_space'] = '(Auto) When either directory space limit is reached';

$txt['use_subdirectories_for_attachments'] = 'Create new directories within a base directory';
$txt['use_subdirectories_for_attachments_note'] = 'Otherwise any new directories will be created within the forum\'s main directory.';
$txt['basedirectory_for_attachments'] = 'Set a base directory for attachments';
$txt['basedirectory_for_attachments_current'] = 'Current base directory';
$txt['basedirectory_for_attachments_warning'] = '<div class="smalltext">Please note that the directory is wrong. <br>(<a href="' . $scripturl . '?action=admin;area=manageattachments;sa=attachpaths">Attempt to correct</a>)</div>';
$txt['attach_current_dir_warning'] = '<div class="smalltext">There seems to be a problem with this directory. <br>(<a href="' . $scripturl . '?action=admin;area=manageattachments;sa=attachpaths">Attempt to correct</a>)</div>';

$txt['attachment_transfer'] = 'Przenieś załączniki';
$txt['attachment_transfer_desc'] = 'Przenieś załączniki pomiędzy katalogami.';
$txt['attachment_transfer_desc'] = 'Przenieś załączniki pomiędzy katalogami.';
$txt['attachment_transfer_select'] = 'Wybierz katalog';
$txt['attachment_transfer_now'] = 'Przenieś';
$txt['attachment_transfer_from'] = 'Przenieś pliki z';
$txt['attachment_transfer_auto'] = 'Automatically by space or file count';
$txt['attachment_transfer_auto_select'] = 'Select base directory';
$txt['attachment_transfer_to'] = 'Or to a specific directory.';
$txt['attachment_transfer_empty'] = 'Empty the source directory';
$txt['attachment_transfer_no_base'] = 'No base directories available.';
$txt['attachment_transfer_forum_root'] = 'Główny katalog forum.';
$txt['attachment_transfer_no_room'] = 'Directory size or file count limit reached.';
$txt['attachment_transfer_no_find'] = 'No files were found to transfer.';
$txt['attachments_transferred'] = '%1$d plików zostało przeniesionych do %2$s';
$txt['attachments_not_transferred'] = '%1$d plików nie zostało przeniesionych.';
$txt['attachment_transfer_no_dir'] = 'Either the source directory or one of the target options were not selected.';
$txt['attachment_transfer_same_dir'] = 'You cannot select the same directory as both the source and target.';
$txt['attachment_transfer_progress'] = 'Proszę czekać. Trwa przenoszenie.';

$txt['mods_cat_avatars'] = 'Awatary';
$txt['avatar_directory'] = 'Katalog awatarów';
$txt['avatar_directory_wrong'] = 'The Avatars directory is not valid. This will cause several issues with your forum.';
$txt['avatar_url'] = 'URL do awatarów';
$txt['avatar_max_width_external'] = 'Maksymalna szerokość zewnętrznego awatara<div class="smalltext">(0 = brak limitu)</div>';
$txt['avatar_max_height_external'] = 'Maksymalna wysokość zewnętrznego awatara<div class="smalltext">(0 = brak limitu)</div>';
$txt['avatar_action_too_large'] = 'Jeśli awatar jest zbyt duży...';
$txt['option_refuse'] = 'Odrzuć go';
$txt['option_css_resize'] = 'Resize it in the users\' browser';
$txt['option_download_and_resize'] = 'Pobierz go i zmniejsz na serwerze';
$txt['avatar_max_width_upload'] = 'Maksymalna szerokość wysyłanego awatara<div class="smalltext">(0 = brak limitu)</div>';
$txt['avatar_max_height_upload'] = 'Maksymalna wysokość wysyłanego awatara<div class="smalltext">(0 = brak limitu)</div>';
$txt['avatar_resize_upload'] = 'Zmniejsz zbyt duże awatary';
$txt['avatar_resize_upload_note'] = '(wymagany moduł GD, ImageMagick z IMagick lub rozszerzenie MagickWand)';
$txt['avatar_download_png'] = 'Użyj formatu PNG dla zmniejszonych awatarów';
$txt['avatar_img_enc_warning'] = 'Nie znaleziono modułu GD, Imagick ani ImageMagick. Niektóre funkcje dotyczące awatarów nie będą dostępne.';
$txt['avatar_external'] = 'Zewnętrzne awatary';
$txt['avatar_upload'] = 'Awatary użytkowników';
$txt['avatar_server_stored'] = 'Galeria awatarów';
$txt['avatar_server_stored_groups'] = 'Grupy użytkowników uprawnione do wykorzystywania awatarów zamieszczonych w galerii';
$txt['avatar_upload_groups'] = 'Grupy użytkowników uprawnione do wysyłania awatarów na serwer';
$txt['avatar_external_url_groups'] = 'Grupy użytkowników uprawnione do korzystania z zewnętrznego awatara';
$txt['avatar_select_permission'] = 'Ustaw zezwolenia dla każdej grupy';
$txt['avatar_download_external'] = 'Pobieraj awatary ze wskazanego odnośnika';
$txt['option_specified_dir'] = 'Określonego katalogu...';
$txt['custom_avatar_dir_wrong'] = 'The Attachments directory is not valid. This will prevent attachments from working properly.';
$txt['custom_avatar_dir'] = 'Katalog uploadu';
$txt['custom_avatar_dir_desc'] = 'Powinien być to inny katalog, niż katalog główny serwera.';
$txt['custom_avatar_url'] = 'URL uploadu';
$txt['custom_avatar_check_empty'] = 'Wybrany katalog awatarów może być pusty albo niepoprawny. Upewnij się, że te ustawienia są poprawne.';
$txt['avatar_reencode'] = 'Ponowne kodowanie potencjalnie niebezpiecznych awatarów';
$txt['avatar_paranoid_warning'] = 'Przeprowadzenie kontroli bezpieczeństwa może doprowadzić do odrzucenia dużej liczby awatarów.';
$txt['avatar_paranoid'] = 'Przeprowadzenie kontroli bezpieczeństwa przesłanych awatarów';
$txt['gravatar_settings'] = 'Gravatars (Globally Recognized Avatars)';
$txt['gravatarEnabled'] = 'Enable Gravatars for forum users?';
$txt['gravatarOverride'] = 'Force Gravatars to be used instead of normal avatars?';
$txt['option_attachment_dir'] = '';
$txt['gravatarAllowExtraEmail'] = 'Allow storing an extra email address for Gravatars?';
$txt['gravatarMaxRating'] = 'Maximum allowed rating?';
$txt['gravatar_maxG'] = 'G rated (Generally acceptable)';
$txt['gravatar_maxPG'] = 'PG rated (Parental Guidance)';
$txt['gravatar_maxR'] = 'R rated (Restricted)';
$txt['gravatar_maxX'] = 'X rated (Explicit)';
$txt['gravatarDefault'] = 'Default image to show when an email address has no matching Gravatar ';
$txt['gravatar_mm'] = 'A simple, cartoon-style silhouetted outline of a person';
$txt['avatar_reencode_note'] = '';
$txt['gravatar_identicon'] = 'A geometric pattern based on an email hash';
$txt['gravatar_monsterid'] = 'A generated \'monster\' with different colors, faces, etc';
$txt['gravatar_wavatar'] = 'Generated faces with differing features and backgrounds';
$txt['gravatar_retro'] = 'Awesome generated, 8-bit arcade-style pixelated faces';
$txt['gravatar_blank'] = 'A transparent PNG image';

$txt['repair_attachments'] = 'Napraw załączniki';
$txt['repair_attachments_complete'] = 'Naprawa zakończona';
$txt['repair_attachments_complete'] = 'Naprawa zakończona';
$txt['repair_attachments_complete_desc'] = 'Wszystkie zaznaczone błędy zostały usunięte';
$txt['repair_attachments_no_errors'] = 'Nie znaleziono błędów!';
$txt['repair_attachments_error_desc'] = 'Podczas naprawy zostały wykryte następujące błędy. Zaznacz te które chcesz naprawić i naciśnij guzik Napraw.';
$txt['repair_attachments_error_desc'] = 'Podczas naprawy zostały wykryte następujące błędy. Zaznacz te które chcesz naprawić i naciśnij guzik Napraw.';
$txt['repair_attachments_continue'] = 'Kontynuuj';
$txt['repair_attachments_cancel'] = 'Anuluj';
$txt['attach_repair_missing_thumbnail_parent'] = '%1$d miniaturki nie posiadają oryginalnego załącznika';
$txt['attach_repair_parent_missing_thumbnail'] = '%1$d załączonych obrazków nie ma miniaturek, choć w opisie je mają';
$txt['attach_repair_file_missing_on_disk'] = '%1$d załączników/awatarów istnieje w bazie, lecz nie ma ich na dysku';
$txt['attach_repair_file_wrong_size'] = '%1$d załączników/awatarów ma źle opisany rozmiar pliku';
$txt['attach_repair_file_size_of_zero'] = '%1$d załączników/awatarów ma zerowy rozmiar na dysku (zostaną usunięte)';
$txt['attach_repair_attachment_no_msg'] = '%1$d załączników nie jest powiązanych z żadnymi wiadomościami';
$txt['attach_repair_avatar_no_member'] = '%1$d awatarów nie jest powiązanych z żadnym użytkownikiem';
$txt['attach_repair_wrong_folder'] = '%1$d załączniki są w złym folderze';
$txt['attach_repair_files_without_attachment'] = '%1$d files do not have a corresponding entry in the database. (These will be deleted)';

$txt['news_title'] = 'Aktualności i email do użytkowników';
$txt['news_settings_desc'] = 'Tutaj możesz zmieniać ustawienia i uprawnienia związane z aktualnościami oraz emailami do użytkowników.';
$txt['news_mailing_desc'] = 'Za pomocą tego menu możesz wysyłać wiadomości do wszystkich zarejestrowanych użytkowników, którzy podali swój adres email. Możesz edytować listę odbiorców lub wysłać wiadomość do wszystkich. Jest to bardzo użyteczne do przekazywania ważnych informacji technicznych lub informowania o nowościach.';
$txt['news_error_no_news'] = 'Nothing written';
$txt['groups_edit_news'] = 'Grupy uprawnione do edycji aktualności';
$txt['groups_send_mail'] = 'Grupy uprawnione do rozsyłania Newsletterów';
$txt['xmlnews_enable'] = 'Włącz aktualności XML/RSS';
$txt['xmlnews_maxlen'] = 'Maksymalna długość wiadomości:<div class="smalltext">(0 aby wyłączyć - zły pomysł.)</div>';
$txt['xmlnews_maxlen_note'] = '(0 żeby wyłączyć, jest to jednak zły pomysł)';
$txt['xmlnews_attachments'] = 'Enclose attachments in XML/RSS feeds';
$txt['xmlnews_attachments'] = 'Enclose attachments in XML/RSS feeds';
$txt['xmlnews_attachments_note'] = 'Note: Some feed formats will only enclose one attachment per post.';
$txt['xmlnews_attachments_note'] = 'Note: Some feed formats will only enclose one attachment per post.';
$txt['editnews_clickadd'] = 'Kliknij tu aby dodać następną.';
$txt['editnews_remove_selected'] = 'Usuń zaznaczone';
$txt['editnews_remove_confirm'] = 'Na pewno chcesz usunąć zaznaczone aktualności?';
$txt['censor_clickadd'] = 'Kliknij tu aby dodać następne słowo.';

$txt['layout_controls'] = 'Forum';
$txt['news_settings_submit'] = '';
$txt['logs'] = 'Logi';
$txt['generate_reports'] = 'Raporty';

$txt['update_available'] = 'Dostępna aktualizacja!';

$txt['update_available'] = 'Dostępna aktualizacja!';
$txt['update_message'] = 'Używasz przestarzałej wersji SMF, która zawiera błędy, które zostały naprawione.
	Jest zalecane abyś <a href="" id="update-link">zaktualizował forum</a> do najnowszej wersji najszybciej jak to tylko możliwe. Zabierze Ci to tylko minutę!';

$txt['manageposts'] = 'Wiadomości i wątki';
$txt['manageposts_title'] = 'Zarządzanie wiadomościami i wątkami';
$txt['manageposts_description'] = 'Tu możesz zarządzać wszystkimi ustawieniami odnoszącymi się do wątków i wiadomości.';

$txt['manageposts_seconds'] = 'sekund';
$txt['manageposts_minutes'] = 'minut';
$txt['manageposts_characters'] = 'znaków';
$txt['manageposts_days'] = 'dni';
$txt['manageposts_posts'] = 'wiadomości';
$txt['manageposts_topics'] = 'wątki';

$txt['manageposts_settings'] = 'Ustawienia Wiadomości';
$txt['manageposts_settings_description'] = 'Tu możesz zarządzać wszystkimi ustawieniami odnoszącymi się do tworzenia wiadomości i ich wysyłania.';

$txt['manageposts_bbc_settings'] = 'Bulletin Board Code';
$txt['manageposts_bbc_settings_description'] = 'Znaczniki Bulletin Board Code mogą być używane do formatowania tekstu wiadomości. Na przykład, aby wytłuścić słowo \'dom\' wpisz [b]dom[/b]. Wszystkie znaczniki BBC są umieszczane wewnątrz nawiasów kwadratowych (\'[\' i \']\').';
$txt['manageposts_bbc_settings_title'] = 'Ustawienia Bulletin Board Code';

$txt['manageposts_topic_settings'] = 'Ustawienia Wątków';
$txt['manageposts_topic_settings_description'] = 'Tu możesz ustawić wszystkie opcje związane z wątkami.';

$txt['managedrafts_settings'] = 'Ustawienia szkiców';
$txt['managedrafts_settings_description'] = 'Tutaj możesz zmienić ustawienia dotyczące szkiców';
$txt['manage_drafts'] = 'Szkice';

$txt['removeNestedQuotes'] = 'Usuń zagnieżdżone cytaty podczas wysyłania wiadomości';
$txt['enableSpellChecking'] = 'Włącz sprawdzanie pisowni';
$txt['disable_wysiwyg'] = 'Wyłącz edytor WYSIWYG';
$txt['max_messageLength'] = 'Maksymalny rozmiar wiadomości';
$txt['max_messageLength_zero'] = '0 dla braku ograniczeń';
$txt['manageposts_settings_submit'] = '';
$txt['convert_to_mediumtext'] = 'Your database is not setup to accept messages longer than 65535 characters. Please use the <a href="%1$s">database maintenance</a> page to convert the database and then come back to increase the maximum allowed post size.';
$txt['topicSummaryPosts'] = 'Ilość wiadomości w przeglądzie wątku';
$txt['spamWaitTime'] = 'Czas wymagany pomiędzy wiadomościami z tego samego numeru IP';
$txt['edit_wait_time'] = 'Czas utajonej edycji';
$txt['manageposts_bbc_settings_submit'] = '';
$txt['edit_disable_time'] = 'Przez jaki czas od wysłania wiadomości możliwa jest jej edycja';
$txt['preview_characters'] = 'Maksymalna długość poglądu pierwszej/ostatniej wiadomości';
$txt['preview_characters_units'] = 'znaków';
$txt['manageposts_topic_settings_submit'] = '';
$txt['message_index_preview_first'] = 'When using post previews, show the text of the first post';
$txt['message_index_preview_first_desc'] = 'Leave un-checked to show the text of the last post instead';
$txt['show_user_images'] = 'Show user avatars in message view';
$txt['managedrafts_submit'] = '';
$txt['show_blurb'] = 'Show personal text in message view';
$txt['hide_post_group'] = 'Hide post group titles for grouped members';
$txt['hide_post_group_desc'] = 'Enabling this will not display a member\'s post group title on the message view if they are assigned to a non-post based group.';
$txt['enableEmbeddedFlash'] = '';
$txt['subject_toggle'] = 'Show subjects in topics.';
$txt['enableEmbeddedFlash_warning'] = '';
$txt['show_profile_buttons'] = 'Show view profile button under post';
$txt['show_modify'] = 'Show last modification date on modified posts';
$txt['enableSpellChecking_warning'] = '';

$txt['enableBBC'] = 'Włącz bulletin board code (BBC)';
$txt['enablePostHTML'] = 'Włącz <em>prosty</em> HTML w wiadomościach';
$txt['autoLinkUrls'] = 'Automatycznie przekształcaj adresy internetowe w odnośniki?';
$txt['disabledBBC'] = 'Tagi BBC włączone';
$txt['legacyBBC'] = 'Legacy BBC tags';
$txt['bbcTagsToUse'] = 'Włącz tagi BBC';
$txt['enabled_bbc_select'] = 'Select the tags allowed to be used';
$txt['enabled_bbc_select'] = 'Select the tags allowed to be used';
$txt['enabled_bbc_select_all'] = 'Select all tags';
$txt['enabled_bbc_select_all'] = 'Select all tags';

$txt['enableParticipation'] = 'Włącz ikony uczestnictwa';
$txt['oldTopicDays'] = 'Czas po którym temat zostanie oznaczony jako stary przy odpowiedzi';
$txt['defaultMaxTopics'] = 'Maksymalna ilość wątków na stronę';
$txt['defaultMaxMessages'] = 'Maksymalna ilość wiadomości na stronę';
$txt['disable_print_topic'] = 'Wyłącz możliwość drukowania wątku';
$txt['enableAllMessages'] = 'Maksymalna ilość odpowiedzi w wątku pozwalająca na włączenie funkcji "Pokaż wszystkie"';
$txt['enableAllMessages_zero'] = '0 aby wyłączyć';
$txt['disableCustomPerPage'] = 'Wyłącz dostosowywanie wątków/wiadomości liczonych na stronę';
$txt['enablePreviousNext'] = 'Włącz odnośniki do poprzedniego/następnego wątku';

$txt['not_done_title'] = 'Jeszcze nie gotowe!';
$txt['not_done_reason'] = 'Aby uniknąć przeciążenia serwera proces został chwilowo wstrzymany. Powinien zostać automatycznie wznowiony za kilka sekund. Jeśli tak się nie stanie, kliknij \'kontynuuj\'.';
$txt['not_done_continue'] = 'Kontynuuj';

$txt['general_settings'] = 'Główne';
$txt['database_settings'] = 'Database';
$txt['cookies_sessions_settings'] = 'Ciasteczka i Sesje';
$txt['security_settings'] = 'Security';
$txt['caching_settings'] = 'Cache';
$txt['bbcTagsToUse_select'] = '';
$txt['load_balancing_settings'] = 'Załaduj optymalne';
$txt['bbcTagsToUse_select_all'] = '';
$txt['phpinfo_settings'] = 'Informacje o PHP';
$txt['phpinfo_localsettings'] = 'Lokalne ustawienia';
$txt['phpinfo_defaultsettings'] = 'Domyślne ustawienia';
$txt['phpinfo_itemsettings'] = 'Ustawienia';

$txt['language_configuration'] = 'Języki';
$txt['language_description'] = 'Sekcja ta pozwala na edytowanie zainstalowanych języków na forum, pobranie nowych ze strony Simple Machines. Możesz tutaj także edytować ustawienia dotyczące języka.';
$txt['language_description'] = 'Sekcja ta pozwala na edytowanie zainstalowanych języków na forum, pobranie nowych ze strony Simple Machines. Możesz tutaj także edytować ustawienia dotyczące języka.';
$txt['language_edit'] = 'Edytuj język';
$txt['language_add'] = 'Dodaj język';
$txt['language_settings'] = 'Ustawienia';
$txt['could_not_language_backup'] = 'A backup could not be made before removing this language pack. No changes have been made at this time as a result (either change the permissions so Packages/backup can be written to, or turn off backups - not recommended)';

$txt['advanced'] = 'Zaawansowane';
$txt['simple'] = 'Proste';

$txt['admin_news_newsletter_queue_done'] = 'The newsletter has been added to the mail queue successfully.';
$txt['admin_news_select_recipients'] = 'Wybierz kto ma otrzymywać kopię ogłoszeń';
$txt['admin_news_select_group'] = 'Grupy użytkowników';
$txt['admin_news_select_group_desc'] = 'Wybierz grupę która będzie otrzymywać ogłoszenia.';
$txt['admin_news_select_members'] = 'Użytkownicy';
$txt['admin_news_select_members_desc'] = 'Dodatkowi użytkownicy otrzymujący ogłoszenia.';
$txt['admin_news_select_excluded_members'] = 'Użytkownicy wykluczeni';
$txt['admin_news_select_excluded_members_desc'] = 'Użytkownicy, którzy nie powinni otrzymywać ogłoszeń.';
$txt['admin_news_select_excluded_groups'] = 'Wykluczone grupy';
$txt['admin_news_select_excluded_groups_desc'] = 'Wybierz grupy które definitywnie nie powinny otrzymywać ogłoszeń.';
$txt['admin_news_select_email'] = 'Adresy email';
$txt['admin_news_select_email_desc'] = 'Rozdzielona średnikami lista adresów email na które powinno zostać wysłane ogłoszenie (np. adres1; adres2). Jest to dodatkowa lista dodana do powyższych grup.';
$txt['admin_news_select_override_notify'] = 'Opcje przymusowych powiadomień';
// Use entities in below.
$txt['admin_news_cannot_pm_emails_js'] = 'Nie możesz wysłać prywatnej wiadomości na adres email. Jeśli kontynuujesz wszystkie wprowadzone adresy email zostaną zignorowane.\\n\\nCzy jesteś pewien że chcesz to zrobić?';

$txt['mailqueue_browse'] = 'Przeglądaj kolejkę';
$txt['mailqueue_settings'] = 'Opcje maili';
$txt['mailqueue_test'] = 'Send Test';
$txt['mailqueue_test'] = 'Send Test';

$txt['admin_search'] = 'Szybkie wyszukiwanie';
$txt['admin_search_type_internal'] = 'Zadania/Opcje';
$txt['admin_search_type_member'] = 'Użytkownik';
$txt['admin_search_type_online'] = 'Podręcznik Online';
$txt['admin_search_go'] = 'Idź';
$txt['admin_search_results'] = 'Wyniki wyszukiwania';
$txt['admin_search_results_desc'] = 'Wyniki dla wyszukiwania: &quot;%1$s&quot;';
$txt['admin_search_results_again'] = 'Szukaj ponownie';
$txt['admin_search_results_none'] = 'Brak znalezionych wyników!';

$txt['admin_search_section_sections'] = 'Sekcja';
$txt['admin_search_section_settings'] = 'Opcja';

$txt['mods_cat_features'] = 'Opcje';
$txt['antispam_title'] = 'Anty-Spam';
$txt['mods_cat_modifications_misc'] = 'Rozmaite';
$txt['mods_cat_layout'] = 'Układ';
$txt['moderation_settings_short'] = 'Moderacja';
$txt['signature_settings_short'] = 'Sygnatury';
$txt['custom_profile_shorttitle'] = 'Pola profilów';
$txt['pruning_title'] = 'Czyszczenie logów';
$txt['pruning_desc'] = 'The following options are useful for keeping your logs from growing too big, because most of the time older entries are not really of that much use.';
$txt['log_settings'] = 'Log Settings';
$txt['log_ban_hits'] = 'Log ban hits in the error log?';

$txt['boards_edit'] = 'Modify Boards';

$txt['boards_edit'] = 'Modify Boards';
$txt['mboards_new_cat'] = 'Stwórz nową kategorię';
$txt['manage_holidays'] = 'Zarządzaj wydarzeniami';
$txt['calendar_settings'] = 'Opcje kalendarza';
$txt['search_weights'] = 'Ważność wyszukiwania';
$txt['search_method'] = 'Metoda wyszukiwania';

$txt['smiley_sets'] = 'Zestaw emotikon';
$txt['smileys_add'] = 'Dodaj emotikony';
$txt['smileys_add'] = 'Dodaj emotikony';
$txt['smileys_edit'] = 'Edytuj emotikony';
$txt['smileys_edit'] = 'Edytuj emotikony';
$txt['smileys_set_order'] = 'Porządek zestawu emotikon';
$txt['smileys_set_order'] = 'Porządek zestawu emotikon';
$txt['icons_edit_message_icons'] = 'Ikony wiadomości';

$txt['membergroups_new_group'] = 'Dodaj grupę użytkowników';

$txt['membergroups_new_group'] = 'Dodaj grupę użytkowników';
$txt['membergroups_edit_groups'] = 'Edytuj grupę użytkowników';
$txt['membergroups_edit_groups'] = 'Edytuj grupę użytkowników';
$txt['permissions_groups'] = 'Zezwolenia dla grupy użytkowników';
$txt['permissions_groups'] = 'Zezwolenia dla grupy użytkowników';
$txt['permissions_boards'] = 'Zezwolenia dla forum';
$txt['permissions_boards'] = 'Zezwolenia dla forum';
$txt['permissions_profiles'] = 'Edytuj profile';
$txt['permissions_profiles'] = 'Edytuj profile';
$txt['permissions_post_moderation'] = 'Moderacja wiadomości';
$txt['permissions_post_moderation'] = 'Moderacja wiadomości';

$txt['browse_packages'] = 'Przeglądaj pakiety';

$txt['boardsEdit'] = '';
$txt['download_packages'] = 'Dodaj pakiety';
$txt['installed_packages'] = 'Zainstalowane pakiety';
$txt['package_file_perms'] = 'Zezwolenia plików';
$txt['package_settings'] = 'Opcje';
$txt['themeadmin_admin_title'] = 'Zarządzaj i instaluj';
$txt['themeadmin_list_title'] = 'Opcje stylów';
$txt['themeadmin_reset_title'] = 'Opcje użytkowników';
$txt['themeadmin_edit_title'] = 'Modyfikuj style';
$txt['admin_browse_register_new'] = 'Zarejestruj nowego użytkownika';

$txt['search_engines'] = 'Silniki wyszukiwarek';
$txt['spiders'] = 'Roboty';
$txt['spider_logs'] = 'Logi';
$txt['spider_stats'] = 'Statystyki';

$txt['paid_subscriptions'] = 'Płatna subskrypcja';
$txt['paid_subs_view'] = 'Pokaż subskrypcje';

$txt['hooks_title_list'] = 'Integration Hooks';
$txt['hooks_field_hook_name'] = 'Hook Name';
$txt['hooks_field_function_name'] = 'Nazwa funkcji';
$txt['hooks_field_function_method'] = 'Function is a method and its class is instantiated';
$txt['hooks_field_function'] = 'Funkcja';
$txt['hooks_field_included_file'] = 'Załączony plik';
$txt['hooks_field_file_name'] = 'Nazwa pliku';
$txt['hooks_field_hook_exists'] = 'Status';
$txt['hooks_active'] = 'Istnieje';
$txt['hooks_disabled'] = 'Wyłączony';
$txt['hooks_missing'] = 'Nie znaleziono';
$txt['hooks_no_hooks'] = 'There are currently no hooks in the system.';
$txt['hooks_button_remove'] = 'Usuń';
$txt['hooks_disable_instructions'] = 'Click on the status icon to enable or disable the hook';
$txt['hooks_disable_legend'] = 'Legenda';
$txt['hooks_disable_legend_exists'] = 'the hook exists and is active';
$txt['hooks_disable_legend_disabled'] = 'the hook exists but has been disabled';
$txt['hooks_disable_legend_missing'] = 'the hook has not been found';
$txt['hooks_reset_filter'] = 'Brak filtru';

$txt['board_perms_allow'] = 'Allow';
$txt['board_perms_ignore'] = 'Ignore';
$txt['board_perms_deny'] = 'Deny';
$txt['all_boards_in_cat'] = 'All boards in this category';

$txt['likes_like'] = 'Membergroups allowed to like posts';

$txt['mention'] = 'Membergroups allowed to mention users';

$txt['notifications'] = 'Notifications';
$txt['notify_settings'] = 'Notification Settings';
$txt['notifications_desc'] = 'This page allows you to set the default notification options for users.';

$txt['enable_sm_stats'] = 'Allow Stat Collection';

$txt['enable_sm_stats'] = 'Allow Stat Collection';
$txt['likes_view'] = '';

?>