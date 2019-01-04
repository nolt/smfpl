<?php
// Version: 2.1 Beta 3; Install

// These should be the same as those in index.language.php.
$txt['lang_character_set'] = 'UTF-8';
$txt['lang_rtl'] = false;

$txt['install_step_welcome'] = 'Witamy';
$txt['install_step_writable'] = 'Test CHMOD';
$txt['install_step_forum'] = 'Ustawienia forum';
$txt['install_step_databaseset'] = 'Ustawienia bazy danych';
$txt['install_step_databasechange'] = 'Uzupełnianie bazy danych';
$txt['install_step_admin'] = 'Konto Administratora';
$txt['install_step_delete'] = 'Kończenie instalacji';

$txt['smf_installer'] = 'Instalator SMF';
$txt['installer_language'] = 'Język';
$txt['installer_language_set'] = 'Ustaw';
$txt['congratulations'] = 'Gratulacje, proces instalacji zakończony!';
$txt['congratulations_help'] = 'Jeśli SMF nie będzie poprawnie działało lub będziesz kiedykolwiek potrzebował pomocy pamiętaj, że zawsze możesz zwrócić się o nią <a href="http://www.simplemachines.org/community/index.php">do nas</a>.';
$txt['still_writable'] = 'Zapisywanie w twoim katalogu instalacyjnym jest włączone. Z powodów bezpieczeństwa powinieneś zmienić ustawienia CHMOD, tak aby zapisywanie w tym katalogu nie było możliwe.';
$txt['delete_installer'] = 'Kliknij tutaj, aby usunąć plik install.php.';
$txt['delete_installer_maybe'] = '<em>(nie działa na niektórych serwerach).</em>';
$txt['go_to_your_forum'] = 'Teraz możesz odwiedzić <a href="%1$s">twoje nowo zainstalowane forum</a> i zacząć go używać. Aby móc skorzystać z funkcji administracyjnych, powinieneś najpierw się zalogować.';
$txt['good_luck'] = 'Powodzenia!<br>Simple Machines';

$txt['install_welcome'] = 'Witamy';
$txt['install_welcome_desc'] = 'Witaj w SMF. Ten skrypt przeprowadzi cię przez proces instalacji %1$s. W następnych krokach zbierzemy kilka informacji o twoim forum i po kilku minutach forum będzie gotowe do użycia.';
$txt['install_no_https'] = 'Your environment does not support https streams.  Certain functions, e.g., receiving updates from SimpleMachines.org, will not work.';
$txt['install_no_mbstring'] = 'Your environment does not support the required mbstring library.  Please enable mbstring and try again.';
$txt['install_all_lovely'] = 'Przeprowadziliśmy pomyślnie kilka ważnych testów twojego serwera i wszystko wygląda w porządku. Kliknij przycisk &quot;Kontynuuj&quot; aby zacząć.';

$txt['user_refresh_install'] = 'Forum odświeżone';
$txt['user_refresh_install_desc'] = 'Podczas instalacji, instalator wykrył (wykorzystując informacje podane przez ciebie), że jedna lub więcej tabel, które instalator powinien utworzyć już istnieje.<br>Jakiekolwiek brakujące tabele w twojej instalacji zostały odtworzone z domyślnymi danymi, a z istniejących tabel niczego nie skasowano.';

$txt['default_topic_subject'] = 'Witamy w SMF!';
$txt['default_topic_message'] = 'Witamy na Simple Machines Forum!<br><br />Mamy nadzieję, że używanie twojego forum będzie Ci się podobało.&nbsp;Jeśli napotkasz jakiekolwiek problemy, zawsze możesz [url=http://www.simplemachines.org/community/index.php]zwrócić się do nas po pomoc[/url].<br><br>Dziękujemy!<br>Simple Machines';
$txt['default_board_name'] = 'Dyskusja ogólna';
$txt['default_board_description'] = 'W tym dziale możesz rozmawiać o wszystkim.';
$txt['default_category_name'] = 'Kategoria ogólna';
$txt['default_time_format'] = '%d %b %Y, %H:%M:%S';
$txt['default_news'] = 'Forum SMF zostało uruchomione!';
$txt['default_smileyset_name'] = '';
$txt['default_reserved_names'] = 'Admin\\nWebmaster\\nGuest\\nroot\\nGość\\nAdministrator';
$txt['default_fugue_smileyset_name'] = 'Fugue';
$txt['default_alienine_smileyset_name'] = 'Alienine\'s Set';
$txt['default_aaron_smileyset_name'] = 'Aaron';
$txt['default_akyhne_smileyset_name'] = 'Akyhne';
$txt['default_core_theme_name'] = '';
$txt['default_theme_name'] = 'Domyślny styl SMF - Curve2';
$txt['default_classic_theme_name'] = '';
$txt['default_babylon_theme_name'] = '';

$txt['default_administrator_group'] = 'Administrator';
$txt['default_global_moderator_group'] = 'Moderator Globalny';
$txt['default_moderator_group'] = 'Moderator';
$txt['default_newbie_group'] = 'Nowy użytkownik';
$txt['default_junior_group'] = 'Użytkownik';
$txt['default_full_group'] = 'Aktywny użytkownik';
$txt['default_senior_group'] = 'Zaawansowany użytkownik';
$txt['default_hero_group'] = 'Ekspert';

$txt['default_smiley_smiley'] = 'Uśmiech';
$txt['default_wink_smiley'] = 'Mrugnięcie';
$txt['default_cheesy_smiley'] = 'Chichot';
$txt['default_grin_smiley'] = 'Duży uśmiech';
$txt['default_angry_smiley'] = 'Zły';
$txt['default_sad_smiley'] = 'Smutny';
$txt['default_shocked_smiley'] = 'Szok';
$txt['default_cool_smiley'] = 'Cool';
$txt['default_huh_smiley'] = 'Co?';
$txt['default_roll_eyes_smiley'] = 'Z politowaniem';
$txt['default_tongue_smiley'] = 'Język';
$txt['default_embarrassed_smiley'] = 'Zawstydzony';
$txt['default_lips_sealed_smiley'] = 'Buzia na kłódkę';
$txt['default_undecided_smiley'] = 'Niezdecydowany';
$txt['default_kiss_smiley'] = 'Buziak';
$txt['default_cry_smiley'] = 'Płacz';
$txt['default_evil_smiley'] = 'Zły';
$txt['default_azn_smiley'] = 'Uśmiech 2';
$txt['default_afro_smiley'] = 'Afro';
$txt['default_laugh_smiley'] = 'Śmiech';
$txt['default_police_smiley'] = 'Policja';
$txt['default_angel_smiley'] = 'Anioł';

$txt['error_message_click'] = 'Kliknij tutaj';
$txt['error_message_try_again'] = 'aby wykonać ten krok ponownie.';
$txt['error_message_bad_try_again'] = 'aby spróbować instalacji mimo wszystko. Miej jednak na uwadze, że jest to <em>mocno</em> odradzane.';

$txt['install_settings'] = 'Podstawowe ustawienia';
$txt['install_settings_info'] = 'Ta strona wymaga od ciebie podania kilku kluczowych ustawień dla twojego forum. SMF automatycznie wykryło kluczowe ustawienia dla ciebie.';
$txt['install_settings_name'] = 'Nazwa forum';
$txt['install_settings_name_info'] = 'To jest nazwa twojego forum, np. &quot;Forum testowe&quot;.';
$txt['install_settings_name_default'] = 'Moje forum';
$txt['install_settings_url'] = 'Adres forum';
$txt['install_settings_url_info'] = 'To jest adres internetowy do twojego forum <strong>(nie może być zakończony symbolem \'/\'!)</strong>.<br>W większości przypadków możesz pozostawić w tym polu wartość domyślną.';
$txt['install_settings_reg_mode'] = 'Metoda rejestracji';
$txt['install_settings_reg_modes'] = 'Metody rejestracji';
$txt['install_settings_reg_immediate'] = 'Rejestracja natychmiastowa';
$txt['install_settings_reg_email'] = 'Aktywacja email';
$txt['install_settings_reg_admin'] = 'Zatwierdzenie użytkownika';
$txt['install_settings_reg_disabled'] = 'Rejestracja wyłączona';
$txt['install_settings_reg_mode_info'] = 'To pole pozwala na wybranie metody rejestracji na twoim forum.';
$txt['install_settings_compress'] = 'Kompresja Gzip';
$txt['install_settings_compress_title'] = 'Pakuj dane, aby zmniejszyć transfer.';
// In this string, you can translate the word "PASS" to change what it says when the test passes.
$txt['install_settings_compress_info'] = 'Funkcja ta nie działa na niektórych serwerach, zmniejszy natomiast zarówno transfer danych na forum, jak i rozmiar bazy danych.<br>Kliknij <a href="install.php?obgz=1&amp;pass_string=OK" onclick="return reqWin(this.href, 200, 60);" target="_blank">tutaj</a>, aby ją przetestować (powinien pokazać się napis "OK").';
$txt['install_settings_dbsession'] = 'Sesje w bazie danych';
$txt['install_settings_dbsession_title'] = 'Użyj bazy danych zamiast plików do przechowania informacji o sesjach';
$txt['install_settings_dbsession_info1'] = 'Najczęściej warto włączyć tę funkcję, ponieważ dzięki niej dane o sesjach są bardziej godne zaufania.';
$txt['install_settings_dbsession_info2'] = 'Nie wygląda na to, że ta funkcja zadziała na twoim serwerze ale możesz spróbować.';
$txt['install_settings_utf8'] = 'Kodowanie UTF-8';
$txt['install_settings_utf8_title'] = 'Użyj UTF-8 jako domyślnego systemu kodowania.';
$txt['install_settings_utf8_info'] = 'Ta opcja pozwoli bazie danych i forum używać międzynarodowego systemu kodowania znaków UTF-8. Jest ono przydatne podczas używania na forum wielu języków, które korzystają z różnych zestawów znaków.';
$txt['install_settings_stats'] = 'Pozwól pobierać statystyki';
$txt['install_settings_stats_title'] = 'Pozwól Simple Machines zbierać podstawowe statystyki co miesiąc.';
$txt['install_settings_stats_info'] = 'Zaznaczenie tej opcji pozwoli Simple Machines odwiedzać twoją stronę raz na miesiąc w celu zebrania podstawowych statystyk. Pomoże nam to podejmować decyzje pod jaką konfigurację mamy optymalizować oprogramowanie. Dla dalszych informacji zobacz naszą <a href="http://www.simplemachines.org/about/stats.php" target="_blank">stronę informacyjną</a>.';
$txt['install_settings_proceed'] = 'Wykonaj';

$txt['db_settings'] = 'Ustawienia bazy danych';
$txt['db_settings_info'] = 'Poniższe opcje służą do ustawienia bazy danych serwera. Jeśli ich nie znasz, skontaktuj się z administratorem swojego hostingu.';
$txt['db_settings_type'] = 'Typ bazy danych';
$txt['db_settings_type_info'] = 'Wykryto możliwość korzystania z różnych typów baz danych - który typ chcesz użyć? Pamiętaj, że od wersji SMF 2.0 RC3 działanie kilku instalacji SMF w jednej bazie PostgreSQL nie jest obsługiwane, w związku z tym musisz zaktualizować swoją instalację SMF.';
$txt['db_settings_server'] = 'Nazwa serwera';
$txt['db_settings_server_info'] = 'Z reguły nazwa to localhost - jeśli nie jesteś pewien spróbuj localhost.';
$txt['db_settings_username'] = 'Użytkownik';
$txt['db_settings_username_info'] = 'Wpisz nazwę użytkownika wymaganą do połączenia się z bazą danych.<br>Jeśli nie jesteś pewien spróbuj użyć nazwy loginu do FTP, czasami nazwa użytkownika bazy danych i FTP są takie same.';
$txt['db_settings_password'] = 'Hasło';
$txt['db_settings_password_info'] = 'Wpisz hasło wymagane do połączenia się z bazą danych.<br>Jeśli nie jesteś pewien spróbuj użyć hasła FTP.';
$txt['db_settings_database'] = 'Nazwa bazy danych';
$txt['db_settings_database_info'] = 'Wpisz nazwę bazy danych, gdzie SMF ma trzymać dane twojego forum.';
$txt['db_settings_database_info_note'] = 'Jeśli baza danych nie istnieje, instalator spróbuje ją utworzyć.';
$txt['db_settings_port'] = 'Port MySQL';
$txt['db_settings_port_info'] = 'Pozostaw puste, aby użyć domyślnego.';
$txt['db_settings_prefix'] = 'Prefix tabel';
$txt['db_settings_database_file'] = '';
$txt['db_settings_prefix_info'] = 'Prefiks każdej tabeli w bazie danych. <strong>Nie instaluj dwóch for z takimi samymi prefiksami!</strong><br>Wartość pozwala na multi instalację for w jednej bazie.';
$txt['db_settings_database_file_info'] = '';
$txt['db_populate'] = 'Uzupełnianie bazy danych';
$txt['db_populate_info'] = 'Twoje ustawienia zostały zapisane oraz baza danych została wypełniona wszystkimi wymaganymi danymi do poprawnego działania twojego forum. Podsumowanie:';
$txt['db_populate_info2'] = 'Kliknij &quot;Kontynuuj&quot; aby przejść do strony tworzenia konta administratora.';
$txt['db_populate_inserts'] = 'Wstawiono %1$d rzędów.';
$txt['db_populate_tables'] = 'Utworzono %1$d tabel. ';
$txt['db_populate_insert_dups'] = 'Zignorowano %1$d zduplikowanych wpisów.';
$txt['db_populate_table_dups'] = 'Zignorowano %1$d zduplikowanych tabel.';

$txt['user_settings'] = 'Utwórz swoje konto';
$txt['user_settings_info'] = 'Instalator utworzy teraz twoje konto administratora.';
$txt['user_settings_username'] = 'Nazwa użytkownika';
$txt['user_settings_username_info'] = 'Wybierz nazwę użytkownika, za pomocą której będziesz się logować.<br>Możesz ją zmienić później.';
$txt['user_settings_password'] = 'Hasło';
$txt['user_settings_password_info'] = 'Tu wprowadź hasło i dobrze je zapamiętaj!';
$txt['user_settings_again'] = 'Hasło';
$txt['user_settings_again_info'] = '(dla sprawdzenia).';
$txt['user_settings_admin_email'] = 'Adres email administratora';
$txt['user_settings_admin_email_info'] = 'Podaj swój adres email. Musi to być poprawny adres email!';
$txt['user_settings_server_email'] = 'Adres email webmastera';
$txt['user_settings_server_email_info'] = 'Podaj <strong>adres, którego SMF używać będzie do wysyłania emaili</strong>. Ten adres musi być prawidłowy!';
$txt['user_settings_database'] = 'Hasło bazy danych MySQL';
$txt['user_settings_database_info'] = 'Z powodów bezpieczeństwa instalator wymaga, abyś w celu stworzenia konta administratora, podał hasło do bazy danych.';
$txt['user_settings_skip'] = 'Pomiń';
$txt['user_settings_skip_sure'] = 'Czy jesteś pewien, że chcesz pominąć krok tworzenia konta administratora??';
$txt['user_settings_proceed'] = 'Koniec';

$txt['ftp_checking_writable'] = 'Sprawdzanie plików czy są zapisywalne';
$txt['ftp_setup'] = 'Informacje o połączeniu FTP';
$txt['ftp_setup_info'] = 'Instalator może połączyć się poprzez FTP aby zmienić atrybuty plików, które muszą być zapisywalne, a nie są. Jeśli ta funkcja nie zadziała u ciebie, musisz własnoręcznie dokonać potrzebnych zmian. Opcja ta nie działa obecnie z SSL.';
$txt['ftp_server'] = 'Serwer';
$txt['ftp_server_info'] = 'Adres (z reguły localhost) oraz port serwera FTP.';
$txt['ftp_port'] = 'Port';
$txt['ftp_username'] = 'Nazwa użytkownika';
$txt['ftp_username_info'] = 'Nazwa używana w celu logowania się. <em>Nie będzie ona nigdzie zapisana.</em>';
$txt['ftp_password'] = 'Hasło';
$txt['ftp_password_info'] = 'Hasło używane w celu logowania się. <em>Nie będzie ono nigdzie zapisane.</em>';
$txt['ftp_path'] = 'Ścieżka instalacji';
$txt['ftp_path_info'] = 'To jest ścieżka pokazująca <em>prawdziwą</em> lokalizację plików na serwerze FTP <a href="' . $_SERVER['PHP_SELF'] . '?ftphelp" onclick="window.open(this.href, \'\', \'width=450,height=250\');return false;" target="_blank">(pomoc)</a>.';
$txt['ftp_path_found_info'] = 'Ścieżka w polu powyżej została wykryta automatycznie.';
$txt['ftp_connect'] = 'Połącz';
$txt['ftp_setup_why'] = 'Po co jest ten krok?';
$txt['ftp_setup_why_info'] = 'Aby działać poprawnie, SMF musi mieć możliwość zapisywania w niektórych plikach. Teraz instalator wykona potrzebne zmiany na tych plikach. Jeśli jednak to nie zadziała, zmień atrybuty następujących plików na 777 (zapisywalne):';
$txt['ftp_setup_again'] = 'aby ponownie przetestować, czy można zapisywać w tych plikach.';
$txt['error_php_too_low'] = 'Uwaga! Wersja PHP zainstalowana na twoim serwerze <strong>nie spełnia minimalnych wymagań</strong>.<br>Jeśli nie jesteś właścicielem serwera, będziesz musiał poprosić właściciela serwera o dokonanie uaktualnienia, możesz też skorzystać z innego serwera. W innym przypadku uaktualnij PHP do najnowszej wersji.<br><br>Jeśli wiesz na pewno, że masz wystarczająco nową wersję PHP, możesz kontynuować, chociaż jest to odradzane.';
$txt['error_missing_files'] = 'Nie znaleziono niezbędnych plików w katalogu instalacji!<br><br>Upewnij się, że wysłałeś na serwer cały pakiet instalacyjny, razem z plikiem sql i spróbuj ponownie.';
$txt['error_session_save_path'] = 'Poinformuj właściciela serwera, że <strong>wpis session.save_path w php.ini</strong> jest niewłaściwy! Musi on być zmieniony na katalog, który <strong>istnieje</strong> i ma możliwość <strong>zapisu</strong> przez użytkownika,  u którego jest uruchomione PHP.<br>';
$txt['error_windows_chmod'] = 'Jesteś na serwerze Windows i niektóre niezbędne pliki są niezapisywalne. Poproś właściciela serwera aby umożliwił <strong>zapisywanie plików</strong> w twojej instalacji SMF użytkownikowi, dla którego jest uruchomione PHP. Następujące pliki oraz katalogi muszą być zapisywalne:';
$txt['error_ftp_no_connect'] = 'Nie można połączyć się z serwerem FTP za pomocą wprowadzonych wartości.';
$txt['error_db_file'] = 'Nie można znaleźć skryptu bazy danych! Sprawdź czy plik %1$s znajduje się w plikach źródłowych twojego forum.';
$txt['error_db_connect'] = 'Nie można połączyć się z serwerem bazy danych używając podanych danych.<br><br>Jeśli nie jesteś pewien co wpisać, skontaktuj się ze swoim hostem.';
$txt['error_db_connect_settings'] = 'Cannot connect to the database server.<br><br>Please check that the database info variables are correct in Settings.php.';
$txt['error_db_too_low'] = 'Wersja twojego serwera baz danych jest bardzo stara i nie spełnia minimalnych wymagań SMF.<br><br>Poproś swojego hosta o zaktualizowanie bądź zmianę serwera.';
$txt['error_db_database'] = 'Instalator nie mógł uzyskać dostępu do bazy danych &quot;<em>%1$s</em>&quot;. W niektórych przypadkach musisz najpierw sam stworzyć bazę danych dla SMF w panelu administracyjnym serwera. Niektóre serwery dodają prefiks do nazwy twojej bazy danych np. nazwę użytkownika.';
$txt['error_db_queries'] = 'Niektóre zapytania zostały niepoprawnie wykonane. Może być to spowodowane nieobsługiwana wersją oprogramowania bazy danych.<br><br>Informacje techniczne o zapytaniach:';
$txt['error_db_queries_line'] = 'Linia #';
$txt['error_db_missing'] = 'Instalator nie był w stanie wykryć jakichkolwiek baz danych obsługiwanych przez PHP.  Zapytaj hosta czy PHP zostało skompilowane z proponowaną bazą, lub czy załadowane zostały dodatkowe rozszerzenia.';
$txt['error_db_script_missing'] = 'Instalator nie mógł znaleźć żadnego skryptu instalacyjnego dla wykrytej bazy danych. Prosimy sprawdź czy wysłałeś na serwer wszystkie wymagane pliki skryptów instalacji do głównego folderu twojego forum, na przykład &quot;%1$s&quot;';
$txt['error_session_missing'] = 'Instalator nie był w stanie wykryć wsparcia dla sesji w PHP na twoim serwerze. Zapytaj się właściciela serwera, czy PHP było skompilowane ze wsparciem dla sesji (a raczej czy specjalnie zostało skompilowane bez)';
$txt['error_user_settings_again_match'] = 'Wpisałeś dwa różne hasła!';
$txt['error_user_settings_no_password'] = 'Twoje hasło musi zawierać przynajmniej cztery znaki.';
$txt['error_user_settings_taken'] = 'Przykro nam, jeden z członków już używa tej nazwy użytkownika i/lub hasła.<br><br>Nie utworzono nowego konta.';
$txt['error_user_settings_query'] = 'Wystąpił błąd bazy danych podczas próby utworzenia konta administratora. Błąd to:';
$txt['error_sourcefile_missing'] = 'Unable to find the Sources/%1$s file. Please make sure it was uploaded properly, and then try again.';
$txt['error_db_alter_priv'] = 'Konto bazy danych które wpisałeś nie posiada zezwoleń ALTER, CREATE, i/lub DROP tabel w bazie; jest to wymagane do poprawnego funkcjonowania SMF.';
$txt['error_subs_missing'] = '';
$txt['error_versions_do_not_match'] = 'Instalator wykrył inną wersję SMF zainstalowaną z podanymi teraz informacjami. Jeśli próbujesz dokonać uaktualnienia, powinieneś skorzystać z paczki do aktualizacji, a nie instalacji.<br><br>Możesz również spróbować podać inne dane bazy danych, lub zrobić kopię bezpieczeństwa i usunąć aktualną bazę danych, w celu dokończenia instalacji.';
$txt['error_mod_security'] = 'Instalator wykrył, że na twoim serwerze jest zainstalowany moduł mod_security. Mod_security będzie blokować wysyłane formularze nawet zanim SMF będzie w stanie zrobić z nimi cokolwiek. SMF posiada wbudowany skaner bezpieczeństwa, który będzie działać efektywniej niż mod_security i nie będzie blokować wysyłanych formularzy.<br><br><a href="http://www.simplemachines.org/redirect/mod_security">Więcej o wyłączaniu mod_security</a>';
$txt['error_mod_security_no_write'] = 'Instalator wykrył zainstalowany moduł mod_security na twoim serwerze. W SMF został wbudowany skaner bezpieczeństwa bardziej efektywny niż mod_security który nie blokuje zatwierdzanych form.<br><br><a href="http://www.simplemachines.org/redirect/mod_security">Więcej informacji o wyłączeniu mod_security</a><br><br>Alternatywnie, możesz użyć klienta FTP i zmienić CHMOD na zapisywalny (777) pliku .htaccess w katalogu swojego forum, i odświeżyć tą stronę.';
$txt['error_utf8_version'] = 'Obecna wersja twojej bazy danych nie wspiera układu znaków UTF-8. Możesz nadal zainstalować SMF beż żadnych problemów, lecz bez zaznaczonej opcji UTF-8. Jeśli zamierzasz w przyszłości konwersję do UTF-8 (lub jeśli wersja bazy danych twojego serwera zostanie zaktualizowana do wersji >= %1$s), możesz przekonwertować swoje forum do UTF-8 poprzez Panel Admina.';
$txt['error_valid_admin_email_needed'] = 'Nie podałeś prawidłowego adresu email dla twojego konta administratora.';
$txt['error_valid_server_email_needed'] = 'Nie podałeś prawidłowego adresu email dla konta webmastera.';
$txt['error_already_installed'] = 'Instalator wykrył że posiadasz już zainstalowane SMF. Radzimy abyś <strong>nie</strong> próbował nadpisywania istniejącej instalacji - kontynuacja instalacji <strong>poniesie za sobą utratę bądź uszkodzenie istniejących danych</strong>.<br><br>Jeśli chcesz zaktualizować odwiedź <a href="http://www.simplemachines.org">Stronę Simple Machines</a> i pobierz najnowszy pakiet <em>aktualizacyjny</em>.<br><br>Jeśli życzysz sobie nadpisania obecnej instalacji, włączając w to wszystkie dane, zalecamy skasowanie wszystkich tabel istniejącej bazy oraz pliku Settings.php i spróbowaniu ponownie.';
$txt['error_warning_notice'] = 'Uwaga!';
$txt['error_script_outdated'] = 'Instalowany skrypt jest nieaktualny! Obecna wersja SMF to %1$s instalowany skrypt jest dla wersji %2$s.<br><br> Zalecamy odwiedzenie strony <a href="http://www.simplemachines.org">Simple Machines</a> aby upewnić się że instalujesz najnowszą wersję.';
$txt['error_db_prefix_numeric'] = 'Zaznaczony typ bazy danych nie obsługuje numerycznych prefiksów.';
$txt['error_invalid_characters_username'] = 'Niepoprawny znak użyty w nazwie użytkownika.';
$txt['error_username_too_long'] = 'Nazwa użytkownika musi być krótsza niż 25 znaków.';
$txt['error_username_left_empty'] = 'Pole nazwy użytkownika pozostało puste.';
$txt['error_db_prefix_reserved'] = 'Prefiks, który wpisałeś jest prefiksem zarezerwowanym. Prosimy wpisz inny prefiks.';
$txt['error_utf8_support'] = 'The database you are trying to use is not using UTF8 charset';
$txt['error_db_filename_exists'] = '';

$txt['ftp_login'] = 'Informacje dotyczące połączenia FTP';
$txt['ftp_login_info'] = 'Instalator wymaga informacji dotyczących FTP w celu poprawnej auto-instalacji. Żadne dane nie zostaną nigdzie zapisane, zostaną użyte tylko w celu instalacji SMF.';
$txt['ftp_path_help'] = 'Ścieżka FTP jest tą, którą widzisz po zalogowaniu klientem FTP. Zazwyczaj zaczyna się od &quot;<tt>www</tt>&quot;, &quot;<tt>public_html</tt>&quot;, lub &quot;<tt>httpdocs</tt>&quot; - ale także powinna zawierać katalog w którym znajdują się pliki SMF, np &quot;/public_html/forum&quot;. Jest to inna ścieżka niż adres URL oraz pełna ścieżka.<br><br>Pliki mogą zostać nadpisane więc upewnij się iż jest poprawna.';
$txt['ftp_path_help_close'] = 'Zamknij';

$txt['force_ssl'] = 'Włącz SSL';
$txt['force_ssl_label'] = 'Wymuś SSL poprzez forum.';
$txt['force_ssl_info'] = '<b>Upewnij się, że funkcja SSL i HTTPS są obsługiwane przez forum w innym wypadku twoje forum może być niedostępne.</b>';

$txt['chmod_linux_info'] = 'Jeżeli masz dostęp do konta shell, poniższa praktyczna komenda automatycznie poprawi uprawnienia dla tych plików.';

// The upgrader needs text strings too!
$txt['upgrade_step_login'] = 'Login';
$txt['upgrade_step_options'] = 'Upgrade Options';
$txt['upgrade_step_backup'] = 'Backup';
$txt['upgrade_step_database'] = 'Database Changes';
$txt['upgrade_step_convertutf'] = 'Convert to UTF-8';
$txt['upgrade_step_convertjson'] = 'Convert serialized strings to JSON';
$txt['upgrade_step_delete'] = 'Delete Upgrade.php';

$txt['upgrade_upgrade_utility'] = 'Narzędzie aktualizacji SMF';
$txt['upgrade_warning'] = 'Uwaga!';
$txt['upgrade_critical_error'] = 'Błąd krytyczny!';
$txt['upgrade_continue'] = 'Kontynuuj';
$txt['upgrade_skip'] = 'Pomiń';
$txt['upgrade_note'] = 'Uwaga!';
$txt['upgrade_step'] = 'Krok';
$txt['upgrade_steps'] = 'Kroki';
$txt['upgrade_progress'] = 'Postęp';
$txt['upgrade_overall_progress'] = 'Postęp całkowity';
$txt['upgrade_step_progress'] = 'Postęp kroku';
$txt['upgrade_time_elapsed'] = 'Czas trwania';
$txt['upgrade_time_mins'] = 'minut';
$txt['upgrade_time_secs'] = 'sekund';
$txt['upgrade_username'] = 'Username:';
$txt['upgrade_wrong_username'] = 'Username Incorrect';
$txt['upgrade_password'] = 'Password:';
$txt['upgrade_wrong_password'] = 'Password Incorrect';

$txt['upgrade_wait'] = 'Please wait while a backup is created. For large forums this may take some time!';
$txt['upgrade_wait2'] = 'Please wait while your database is converted to UTF-8. For large forums this may take some time!';
$txt['upgrade_sec_login'] = 'For security purposes please login with your admin account to proceed with the upgrade.';
$txt['upgrade_incomplete'] = 'Niekompletne';
$txt['upgrade_not_quite_done'] = 'Jeszcze nie ukończone!';
$txt['upgrade_paused_overload'] = 'Aktualizacja została zatrzymana, aby nie spowodować przeciążenia serwera. Bez obaw wszystko działa jak należy - kliknij w przycisk <label for="contbutt">kontynuuj</label>, aby przejść dalej.';
$txt['upgrade_continue_step'] = 'Continue from step reached during last execution of upgrade script.';
$txt['upgrade_bypass'] = '<strong>Note:</strong> If necessary the above security check can be bypassed for users who may administrate a server but not have admin rights on the forum. In order to bypass the above check simply open &quot;upgrade.php&quot; in a text editor and replace &quot;$disable_security = false;&quot; with &quot;$disable_security = true;&quot; and refresh this page.';
$txt['upgrade_areyouready'] = 'Before the upgrade gets underway please review the options below - and hit continue when you\'re ready to begin.';
$txt['upgrade_backup_table'] = 'Backup tables in your database with the prefix';
$txt['upgrade_recommended'] = 'recommended!';
$txt['upgrade_maintenance'] = 'Put the forum into maintenance mode during upgrade.';
$txt['upgrade_maintenance_title'] = 'Maintenance Title:';
$txt['upgrade_maintenance_message'] = 'Maintenance Message:';
$txt['upgrade_customize'] = 'Customize';
$txt['upgrade_debug_info'] = 'Output extra debugging information';
$txt['upgrade_empty_errorlog'] = 'Empty error log before upgrading';
$txt['upgrade_delete_karma'] = 'Delete all karma settings and info from the DB';
$txt['upgrade_stats_collection'] = 'Allow Simple Machines to collect basic stats monthly.';
$txt['upgrade_stats_info'] = 'If enabled, this will allow Simple Machines to visit your site once a month to collect basic statistics. This will help us make decisions as to which configurations to optimise the software for. For more information please visit our <a href="%1$s" target="_blank" rel="noopener">info page</a>.';
$txt['upgrade_migrate_settings_file'] = 'Migrate to a new Settings file.';
$txt['upgrade_db_changes'] = 'Executing database changes';
$txt['upgrade_db_patient'] = 'Please be patient - this may take some time on large forums. The time elapsed increments from the server to show progress is being made!';
$txt['upgrade_db_complete'] = '1 Database Updates Complete! Click Continue to Proceed.';
$txt['upgrade_db_complete2'] = 'Database Updates Complete! Click Continue to Proceed.';
$txt['upgrade_script'] = 'Executing upgrade script';
$txt['upgrade_error'] = 'Error!';
$txt['upgrade_unknown_error'] = 'Unknown Error!';
/* Same sentence, 3 different strings */
$txt['upgrade_completed'] = 'Completed';
$txt['upgrade_outof'] = 'out of';
$txt['upgrade_tables'] = 'tables.';

$txt['upgrade_run_script'] = 'We recommend that you do not run this script unless you are sure that';
$txt['upgrade_run_script2'] = 'has completed their upgrade.';
$txt['upgrade_run'] = 'You can choose to either run the upgrade again from the beginning - or alternatively continue from the last step reached during the last upgrade.';

$txt['upgrade_completed_table'] = 'Completed Table:';
$txt['upgrade_current_table'] = 'Current Table:';
$txt['upgrade_fulltext'] = 'Please note that your fulltext index was dropped to facilitate the conversion and will need to be recreated in the admin area after the upgrade is complete.';
$txt['upgrade_conversion_proceed'] = 'Conversion Complete! Click Continue to Proceed.';
$txt['upgrade_convert_datajson'] = 'Converting data from serialize to JSON...';
$txt['upgrade_json_completed'] = 'Convert to JSON Complete! Click Continue to Proceed.';
$txt['upgrade_executing'] = 'Executing:';
$txt['upgrade_of'] = 'of';
$txt['upgrade_admin_login'] = 'Admin Login:';
/* Same sentence, 3 different strings */
$txt['upgrade_done'] = 'That wasn\'t so hard, was it?  Now you are ready to use';
$txt['upgrade_done2'] = 'your installation of SMF';
$txt['upgrade_done3'] = 'Hope you like it!';

$txt['upgrade_delete_now'] = 'Delete upgrade.php and its data files now';
$txt['upgrade_delete_server'] = '(doesn\'t work on all servers).';
$txt['upgrade_problems'] = 'If you had any problems with this upgrade, or have any problems using SMF, please don\'t hesitate to <a href="%1$s">look to us for assistance</a>..';
$txt['upgrade_luck'] = 'Best of luck,';

$txt['upgrade_ftp_login'] = 'Your FTP connection information';
$txt['upgrade_ftp_perms'] = 'The upgrader can fix any issues with file permissions to make upgrading as simple as possible. Simply enter your connection information below or alternatively click <a href="#" onclick="warning_popup();">here</a> for a list of files which need to be changed.';
$txt['upgrade_ftp_warning'] = 'Warning';
$txt['upgrade_ftp_files'] = 'The following files needs to be made writable to continue:';
$txt['upgrade_ftp_shell'] = 'If you have a shell account, the convenient below command can automatically correct permissions on these files';
$txt['upgrade_ftp_error'] = 'The following error was encountered when trying to connect:';

$txt['upgrade_ready_proceed'] = 'Dziękujemy za wybranie aktualizacji SMF do wersji %1$s. Wszystkie pliki są na swoim miejscu i jesteśmy gotowi do kontynuacji. ';
$txt['upgrade_error_script_js'] = 'Skrypt aktualizacji nie mógł znaleźć pliku script.js lub jest on nieaktualny. Upewnij się iż ścieżka styli jest poprawna. Możesz pobrać narzędzie do sprawdzania ustawień ze strony <a href="http://www.simplemachines.org">Simple Machines</a>';
$txt['upgrade_warning_lots_data'] = 'Skrypt aktualizacji wykrył iż twoje forum zawiera bardzo dużo danych które muszą zostać zaktualizowane. Proces ten może potrwać trochę czasu w zależności od twojego serwera a także wielkości forum, dla przykładu dla dużych for (~300,000 wiadomości) może potrwać kilka godzin.';
$txt['upgrade_warning_out_of_date'] = 'Skrypt aktualizacji jest nieaktualny! Obecna wersja SMF to <em id="smfVersion" style="white-space: nowrap;">??</em> ten skrypt aktualizacji jest dla <em id="yourVersion" style="white-space: nowrap;">%1$s</em>.<br><br>Odwiedź stronę <a href="http://www.simplemachines.org">Simple Machines</a> i upewnij się iż pobrałeś najnowszą wersję skryptu z aktualizacją.';

$txt['upgrade_boarddir_settings'] = 'It looks as if your board directory settings <em>might</em> be incorrect. Your board directory is currently set to &quot; %1$s &quot; but should probably be &quot; %2$s &quot;. Settings.php currently lists your paths as:';
$txt['upgrade_boarddir'] = 'Board Directory:';
$txt['upgrade_sourcedir'] = 'Source Directory:';
$txt['upgrade_cachedir'] = 'Cache Directory:';
$txt['upgrade_incorrect_settings'] = 'If these seem incorrect please open Settings.php in a text editor before proceeding with this upgrade. If they are incorrect due to you moving your forum to a new location please download and execute the <a href="https://download.simplemachines.org/?tools">Repair Settings</a> tool from the Simple Machines website before continuing.';

$txt['upgrade_fulltext_error'] = 'Your fulltext search index was dropped to facilitate the conversion. You will need to recreate it.';
$txt['upgrade_writable_files'] = 'The following files need to be writable to continue the upgrade. Please ensure the Windows permissions are correctly set to allow this:';
$txt['upgrade_time_user'] = '&quot; %1$s &quot; is running the upgrade script.';

// We represent the time here in backwards variables, as it makes the code easier.
$txt['upgrade_time_ago_hms'] = 'The upgrade script has been running for the last %3$d hours, %2$d minutes and %1$d seconds ago.';
$txt['upgrade_time_ago_ms'] = 'The upgrade script has been running for the last %2$d minutes and %1$d seconds ago.';
$txt['upgrade_time_ago_s'] = 'The upgrade script has been running for the last %1$d seconds ago.';
$txt['upgrade_time_updated_hms'] = 'The upgrade script was last updated %3$d hours, %2$d minutes and %1$d seconds ago.';
$txt['upgrade_time_updated_hm'] = 'The upgrade script was last updated %2$d minutes and %1$d seconds ago.';
$txt['upgrade_time_updated_s'] = 'The upgrade script was last updated %1$d seconds ago.';
$txt['upgrade_completed_time_hms'] = 'Upgrade completed in %3$d hours, %2$s minutes and %1$s seconds';
$txt['upgrade_completed_time_ms'] = 'Upgrade completed in %2$s minutes and %1$s seconds';
$txt['upgrade_completed_time_s'] = 'Upgrade completed in %1$s seconds';
$txt['upgrade_success_time_db'] = 'Successful! Database upgrades completed in %3$d hours, %2$d minutes and %1$d seconds.';

$txt['upgrade_unsuccessful'] = 'Unsuccessful!';
$txt['upgrade_thisquery'] = 'This query:';
$txt['upgrade_causerror'] = 'Caused the error:';
$txt['upgrade_completedtables_outof'] = 'Completed <span id="tab_done">%1$d</span> out of %2$d tables.';
$txt['upgrade_success'] = 'Successful!';
$txt['upgrade_loop'] = 'Upgrade script appears to be going into a loop - step: ';
$txt['upgrade_repondtime'] = 'Server has not responded for %1$d seconds. It may be worth waiting a little longer before trying again.';
$txt['upgrade_respondtime_clickhere'] = 'Click here to try again.';
$txt['mtitle'] = 'Upgrading the forum...';
$txt['mmessage'] = 'Don\'t worry, we will be back shortly with an updated forum.  It will only be a minute ;).';

// Upgrader error messages
$txt['error_unexpected_template_call'] = "\n" . 'Error: Unexpected call to use the %1$s template. Please copy and paste all the text above and visit the SMF support forum to let the developers know that there is a bug so they can fix it and get you up and running again.';
$txt['error_invalid_template'] = 'Upgrade aborted!  Invalid template: template_%1$s';
$txt['error_lang_index_missing'] = 'The upgrader was unable to find language files for the selected language, %1$s.<br>SMF will not work in this language without the language files installed.<br><br>Please either install them, or <a href="%2$s?step=0;lang=english">try English instead</a>.';
$txt['error_upgrade_files_missing'] = 'The upgrader was unable to find some crucial files.<br><br>Please make sure you uploaded all of the files included in the package, including the Themes, Sources, and other directories.';
$txt['error_upgrade_old_files'] = 'The upgrader found some old or outdated files.<br><br>Please make certain you uploaded the new versions of all the files included in the package.';
$txt['error_upgrade_old_lang_files'] = 'The upgrader found some old or outdated language files for the selected language, %1$s.<br><br>Please make certain you uploaded the new versions of all the files included in the package, even the theme and language files for the default theme.<br>&nbsp;&nbsp;&nbsp;[<a href="%2$s?skiplang">SKIP</a>] [<a href="%2$s?lang=english">Try English</a>]';
$txt['error_db_privileges'] = 'The %1$s user you have set in Settings.php does not have proper privileges.<br><br>Please ask your host to give this user the ALTER, CREATE, and DROP privileges.';
$txt['error_dir_not_writable'] = 'The directory: %1$s has to be writable to continue the upgrade. Please make sure permissions are correctly set to allow this.';
$txt['error_cache_not_found'] = 'The cache directory could not be found.<br><br>Please make sure you have a directory called &quot;cache&quot; in your forum directory before continuing.';
$txt['error_agreement_not_writable'] = 'The upgrader was unable to obtain write access to agreement.txt.<br><br>If you are using a linux or unix based server, please ensure that the file is chmod\'d to 777, or if it does not exist that the directory this upgrader is in is 777.<br>If your server is running Windows, please ensure that the internet guest account has the proper permissions on it or its folder.';
$txt['error_settings_migration_no_var'] = 'The upgrader could not copy a setting (%1$s) from your Settings file. Unable to migrate your Settings file to a new version.';
$txt['error_settings_migration_too_short'] = 'The upgrader could not process your Settings file for updates. Unable to migrate your Settings file to a new version.';
$txt['error_settings_migration_write_failed'] = 'The upgrader could not write a test file. Perhaps there is not enough disk space available? Unable to migrate your Settings file to a new version.';
$txt['error_settings_migration_general'] = 'The upgrader detected a bad Settings file and reverted the changes. Unable to migrate your Settings file to a new version.';
$txt['error_not_admin'] = 'You need to be an admin to perform an upgrade!';

$txt['warning_lang_old'] = 'The language files for your selected language, %1$s, have not been updated to the latest version. Upgrade will continue with the forum default, %2$s.';
$txt['warning_lang_missing'] = 'The upgrader could not find the &quot;Install&quot; language file for your selected language, %1$s. Upgrade will continue with the forum default, %2$s.';

// Page titles
$txt['updating_smf_installation'] = 'Updating Your SMF Installation!';
$txt['upgrade_options'] = 'Upgrade Options';
$txt['backup_database'] = 'Backup Database';
$txt['database_changes'] = 'Database Changes';
$txt['upgrade_complete'] = 'Upgrade Complete';
$txt['converting_utf8'] = 'Converting to UTF8';
$txt['converting_json'] = 'Converting to JSON';

?>
