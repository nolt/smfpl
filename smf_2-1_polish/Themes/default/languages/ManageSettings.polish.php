<?php
// Version: 2.1 Beta 3; ManageSettings

global $scripturl;

$txt['modSettings_desc'] = 'Na tej stronie możesz zmienić ustawienia funkcji i prostych opcji forum. Przejrzyj <a href="' . $scripturl . '?action=admin;area=theme;sa=list;th=%1$s;%3$s=%2$s">ustawienia stylów</a> jeśli chcesz zmienić inne opcje.  Kliknij na ikonę pomocy, jeśli chcesz uzyskać więcej informacji o jakimś ustawieniu.';
$txt['modification_settings_desc'] = 'Ta strona zawiera ustawienie dodane do twojego forum przez modyfikacje';

$txt['modification_no_misc_settings'] = 'Nie ma jeszcze zainstalowanych żadnych modyfikacji, aby móc dodać jakieś ustawienia.';

$txt['pollMode'] = 'Tryb ankiety';
$txt['disable_polls'] = 'Wyłącz ankiety';
$txt['enable_polls'] = 'Włącz ankiety';
$txt['polls_as_topics'] = 'Wyświetl istniejące ankiety jako wątki';
$txt['allow_guestAccess'] = 'Pozwól gościom przeglądać forum';
$txt['userLanguage'] = 'Pozwól użytkownikom wybrać język forum';
$txt['allow_hideOnline'] = 'Pozwól nie-administratorom ukryć swój status online';
$txt['titlesEnable'] = 'Włącz tytuły osobiste';
$txt['enable_buddylist'] = 'Włącz listę znajomych/ignorowanych';
$txt['default_personal_text'] = 'Domyślny tekst osobisty';
$txt['default_personal_text_note'] = 'Personal text to assign to newly registered members.';
$txt['time_format'] = 'Domyślny format czasu';
$txt['setting_time_offset'] = 'Generalne przesunięcie czasu<div class="smalltext">(modyfikacja tej wartości zmieni ustawienia u wszystkich.)</div>';
$txt['setting_time_offset_note'] = '(added to the member specific option)';
$txt['setting_default_timezone'] = 'Serwer czasu';
$txt['setting_timezone_priority_countries'] = 'Show time zones from these countries first';
$txt['setting_timezone_priority_countries_note'] = 'A comma separated list of two character ISO country codes.';
$txt['failed_login_threshold'] = 'Dopuszczalna ilość prób zalogowania';
$txt['loginHistoryDays'] = 'Days to keep login history';
$txt['lastActive'] = 'Ilość w minutach do pokazania, że użytkownik jest aktywny';
$txt['trackStats'] = 'Śledź statystykę dni';
$txt['hitStats'] = 'Śledź ilość wejść na dzień (statystyki muszą być włączone)';
$txt['enableCompressedOutput'] = 'Włącz kompresję';
$txt['disableTemplateEval'] = '';
$txt['databaseSession_enable'] = 'Informacje o sesjach w bazie danych';
$txt['databaseSession_loose'] = 'Zezwól przeglądarkom wracać do stron zachowanych w cache';
$txt['databaseSession_lifetime'] = 'Sekund do wygaśnięcia nieaktywnej sesji';
$txt['error_log_desc'] = 'The error log, if enabled, will log every error encountered by users using your forum. This can be an invaluable aid to identifying forum problems.';
$txt['enableErrorLogging'] = 'Włącz raportowanie błędów';
$txt['enableErrorQueryLogging'] = 'Uwzględnij zapytania bazy danych w dzienniku błędów';
$txt['pruningOptions'] = 'Włącz czyszczenie logów';
$txt['pruneErrorLog'] = 'Usuwają logi błędów starsze niż:<div class="smalltext">(0 wyłączone)</div>';
$txt['pruneModLog'] = 'Usuń logi moderacji starsze niż:<div class="smalltext">(0 wyłączone)</div>';
$txt['pruneBanLog'] = 'Usuń wpisy banów z logu starsze niż:<div class="smalltext">(0 wyłączone)</div>';
$txt['pruneReportLog'] = 'Usuń raporty moderacji starsze niż:<div class="smalltext">(0 wyłączone)</div>';
$txt['pruneScheduledTaskLog'] = 'Usuń logi zaplanowanych zadań starsze niż:<div class="smalltext">(0 wyłączone)</div>';
$txt['pruneSpiderHitLog'] = 'Usuń logi aktywności wyszukiwarek starsze niż:<div class="smalltext">(0 wyłączone)</div>';
$txt['cookieTime'] = 'Domyślny czas zalogowania (w minutach)';
$txt['localCookies'] = 'Włącz lokalne przechowywanie plików cookies<div class="smalltext">(SSI nie działa z tą opcją.)</div>';
$txt['globalCookies'] = 'Używaj plików cookies niezależnych od subdomeny<div class="smalltext">(najpierw wyłącz lokalne pliki cookies!)</div>';
$txt['globalCookiesDomain'] = 'Main domain used for subdomain independent cookies';
$txt['invalid_cookie_domain'] = 'The domain introduced seems to be invalid, please check it and save again.';
$txt['secureCookies'] = 'Wymuś ciasteczka w celu bezpieczeństwa<div class="smalltext">(Możliwość włączenia jeśli używasz HTTPS - w przeciwnym wypadku nie korzystaj z tej opcji!)</div>';
$txt['httponlyCookies'] = 'Force cookies to be made accessible only through the HTTP protocol';
$txt['securityDisable'] = 'Wyłącz dodatkowe sprawdzanie hasła w centrum administracji';
$txt['securityDisable_moderate'] = 'Disable moderation security';
$txt['send_validation_onChange'] = 'Ponowna aktywacja konta po zmianie adresu email';
$txt['approveAccountDeletion'] = 'Wymagaj zgody administratora gdy użytkownik chce usunąć swoje konto';
$txt['autoFixDatabase'] = 'Automatycznie naprawiaj uszkodzone tabele';
$txt['allow_disableAnnounce'] = 'Zezwól użytkownikom na wyłączenie ogłoszeń';
$txt['disallow_sendBody'] = 'Wyłącz treść wiadomości w powiadomieniach';
$txt['enable_ajax_alerts'] = 'Allow AJAX Desktop Notifications for Alerts';
$txt['jquery_source'] = 'Źródło biblioteki jQuery';
$txt['jquery_custom_label'] = 'Własne';
$txt['jquery_custom'] = 'Adres URL dla własnego źródła biblioteki jQuery';
$txt['jquery_local'] = 'Lokalne';
$txt['jquery_cdn'] = 'Google CDN';
$txt['jquery_auto'] = 'Auto';
$txt['queryless_urls'] = 'Wyświetlaj adresy przyjazne wyszukiwarkom<div class="smalltext"><strong>działa tylko w Apache/Lighttpd!</strong></div>';
$txt['minimize_files'] = 'Minimize CSS and JavaScript files';
$txt['queryless_urls_note'] = 'Tylko Apache/Lighttpd';
$txt['enableReportPM'] = 'Włącz zgłaszanie prywatnych wiadomości administracji';
$txt['max_pm_recipients'] = 'Maksymalna dozwolona liczba odbiorców przy wysyłaniu prywatnych wiadomości.<div class="smalltext">(0 - bez limitu, nie dotyczy administratorów)</div>';
$txt['max_pm_recipients_note'] = '(0 for no limit, admins are exempt)';
$txt['pm_posts_verification'] = 'Liczba wiadomości poniżej której użytkownik musi wpisać kod weryfikacyjny, aby wysłać prywatną wiadomość.<div class="smalltext">(0 - bez limitu, nie dotyczy administratorów)</div>';
$txt['pm_posts_verification_note'] = '(0 for no limit, admins are exempt)';
$txt['pm_posts_per_hour'] = 'Liczba prywatnych wiadomości jaką użytkownik może wysłać w ciągu godziny.<div class="smalltext">(0 - bez limitu, nie dotyczy administratorów)</div>';
$txt['pm_posts_per_hour_note'] = '(0 for no limit, moderators are exempt)';
$txt['compactTopicPagesEnable'] = 'Ogranicz liczbę wyświetlanych odnośników do stron';
$txt['contiguous_page_display'] = 'Ilość kolejno wyświetlanych stron';
$txt['to_display'] = 'wyświetla';
$txt['todayMod'] = 'Włącz funkcję &quot;Dzisiaj&quot;';
$txt['today_disabled'] = 'Wyłączona';
$txt['today_only'] = 'Tylko Dzisiaj';
$txt['yesterday_today'] = 'Dzisiaj i Wczoraj';
$txt['onlineEnable'] = 'Pokazuj status online/offline użytkownika w wiadomościach i PW';
$txt['defaultMaxMembers'] = 'Ilość użytkowników na stronę w liście użytkowników';
$txt['timeLoadPageEnable'] = 'Wyświetlaj czas generacji strony';
$txt['disableHostnameLookup'] = 'Wyłącz sprawdzanie dostawcy internetowego';
$txt['who_enabled'] = 'Włącz listę użytkowników online';
$txt['meta_keywords'] = 'Znaczniki Meta powiązane z forum.<div class="smalltext">Dla wyszukiwarek, zostaw pole puste aby użyć domyślnych znaczników.</div>';
$txt['meta_keywords_note'] = 'For search engines. Leave blank for default.';
$txt['settings_error'] = 'Warning: Updating of Settings.php failed, the settings cannot be saved.';
$txt['image_proxy_enabled'] = 'Enable Image Proxy';
$txt['image_proxy_secret'] = 'Image Proxy Secret';
$txt['image_proxy_maxsize'] = 'Maximum file size of images to cache (in KB)';
$txt['force_ssl'] = 'Forum SSL mode';
$txt['force_ssl_off'] = 'Disable SSL';
$txt['force_ssl_complete'] = 'Force SSL throughout the forum';
$txt['force_ssl_auth'] = '';
$txt['search_language'] = 'Fulltext Search Language';

// Like settings.
$txt['enable_likes'] = 'Enable Likes';

// Mention settings.
$txt['enable_mentions'] = 'Enable Mentions';

$txt['caching_information'] = 'SMF obsługuje cache używając akceleratorów. Aktualnie obsługiwane akceleratory to: <ul class="normallist"> <li>APC</li> <li>APCu</li> <li>Memcached</li> <li>Zend Platform/Performance Suite (Not Zend Optimizer)</li> <li>XCache</li> </ul> </ul> Cache będzie działać na Twoim serwerze tylko jeśli 
 PHP będzie skompilowane z jednym z wyżej wymienionych akceleratorów lub z włączonym memcache. Jeśli nie posiadasz zainstalowanego żadnego akceleratora, SMF będzie polegać na opcji cache w pliku.';
$txt['detected_no_caching'] = '<strong class="alert">SMF nie jest w stanie wykryć na Twoim serwerze kompatybilnego akceleratora. Możesz zamiast tego użyć pliku jako cache</strong>';
$txt['detected_accelerators'] = '<strong class="success">SMF wykryło następujące akceleratory: %1$s</strong>';

$txt['cache_enable'] = 'Poziom cache';
$txt['cache_off'] = 'Wyłącz cache';
$txt['cache_level1'] = 'Poziom 1';
$txt['cache_level2'] = 'Poziom 2 (nie polecany)';
$txt['cache_level3'] = 'Poziom 3 (nie polecany)';
$txt['cache_memcached'] = '';
$txt['cache_accelerator'] = 'Caching Accelerator';
$txt['default_cache'] = '';
$txt['smf_cache'] = 'SMF file based caching';
$txt['sqlite_cache'] = 'SQLite3 database based caching';
$txt['postgres_cache'] = 'PostgreSQL caching';
$txt['cachedir_sqlite'] = 'SQLite3 database cache directory';
$txt['apc_cache'] = 'APC';
$txt['apcu_cache'] = 'APCu';
$txt['memcache_cache'] = 'Memcache';
$txt['memcached_cache'] = 'Memcached';
$txt['xcache_cache'] = 'XCache';
$txt['zend_cache'] = 'Zend Platform/Performance Suite';
$txt['cache_smf_settings'] = 'SMF file based caching settings';
$txt['cache_sqlite_settings'] = 'SQLite3 database caching settings';
$txt['cache_memcache_settings'] = 'Memcache(d) settings';
$txt['cache_memcache_servers'] = 'Memcache(d) servers';
$txt['cache_memcache_servers_subtext'] = 'Example: 127.0.0.1:11211,127.0.0.2';
$txt['cache_xcache_settings'] = 'XCache settings';
$txt['cache_xcache_adminuser'] = 'XCache Admin User';
$txt['cache_xcache_adminpass'] = 'XCache Admin Password';

$txt['loadavg_warning'] = '<span class="error">Uwaga: poniższe ustawienia muszą być edytowane z ostrożnością. Ustawienie ich na niskim poziomie może spowodować, że forum będzie źle renderowane i będzie <strong>bezużyteczne</strong>! Obecnie średnie ładowanie jest <strong>%01.2f</strong></span>';
$txt['loadavg_enable'] = 'Włącz równoważenie obciążenia przez średnie obciążenie';
$txt['loadavg_auto_opt'] = 'Próg automatycznego wyłączenia optymalizacji bazy danych';
$txt['loadavg_search'] = 'Próg wyłączenia wyszukiwania';
$txt['loadavg_allunread'] = 'Próg wyłączenia wszystkich nieprzeczytanych wątków';
$txt['loadavg_unreadreplies'] = 'Próg wyłączenia nieprzeczytanych odpowiedzi';
$txt['loadavg_show_posts'] = 'Próg do wyłączania pokazywanych wiadomości użytkownika';
$txt['loadavg_userstats'] = 'Threshold to disabling showing user statistics';
$txt['loadavg_bbc'] = 'Threshold to disabling BBC formatting when showing posts';
$txt['loadavg_forum'] = 'Próg <strong>całkowitego</strong> wyłączenia forum';
$txt['loadavg_disabled_windows'] = '<span class="error">Wsparcie dla zbalansowanego ładowania nie jest dostępne w Windows.</span>';
$txt['loadavg_disabled_osx'] = '<span class="error">Load balancing support is not available on OS:X.</span>';
$txt['loadavg_disabled_conf'] = '<span class="error">Wsparcie dla zbalansowanego ładowania jest wyłączone w konfiguracji Twojego hosta.</span>';

$txt['setting_password_strength'] = 'Wymagana siła haseł użytkowników';
$txt['setting_password_strength_low'] = 'Niska - minimum 4 znaki';
$txt['setting_password_strength_medium'] = 'Średnia - nie może zawierać nazwy użytkownika';
$txt['setting_password_strength_high'] = 'Wysoka - mieszanka różnych znaków';
$txt['setting_enable_password_conversion'] = 'Allow password hash conversion';

$txt['antispam_Settings'] = 'Weryfikacja Anty-Spam';
$txt['antispam_Settings_desc'] = 'Ta sekcja pozwala na ustawienie kontroli weryfikacji aby zapewnić cię że użytkownik to człowiek (a nie bot), i w jaki sposób i gdzie się stosuje.';
$txt['setting_reg_verification'] = 'Wymagaj weryfikacji na stronie rejestracji';
$txt['posts_require_captcha'] = 'Liczba wiadomości, poniżej której użytkownicy muszą przejść weryfikację aby utworzyć wiadomość';
$txt['posts_require_captcha_desc'] = '(0 - bez limitu, nie dotyczy moderatorów)';
$txt['search_enable_captcha'] = 'Wymagaj weryfikacji przy przeszukiwaniu przez wszystkich gości';
$txt['setting_guests_require_captcha'] = 'Goście muszą przejść weryfikację kiedy tworzą wiadomość';
$txt['setting_guests_require_captcha_desc'] = '(Automatycznie ustawione, jeśli określiłeś minimalną liczbę wiadomości poniżej)';
$txt['question_not_defined'] = 'You need to add a question and answer for your forum\'s default language (%1$s) otherwise users will not be able to fill in a CAPTCHA, meaning no registration.';

$txt['configure_verification_means'] = 'Konfiguracja metod weryfikacji';
$txt['setting_qa_verification_number'] = 'Liczba pytań weryfikacyjnych na które użytkownik musi odpowiedzieć';
$txt['setting_qa_verification_number_desc'] = '(0 aby wyłączyć; pytania są ustawiane poniżej)';
$txt['configure_verification_means_desc'] = '<span class="smalltext">Poniżej możesz ustawić funkcje dotyczące anty-spamu, które wymuszają na użytkownikach potwierdzenie, że są ludźmi. Każdy użytkownik będzie musiał przejść przez <em>wszystkie</em> zabezpieczenia, więc jeśli ustawisz weryfikację obrazka oraz pytanie/odpowiedź - trzeba będzie poprawnie odpowiedzieć na oba testy.</span>';
$txt['setting_visual_verification_type'] = 'Złożoność obrazka do weryfikacji (CAPTCHA)';
$txt['setting_visual_verification_type_desc'] = 'Im bardziej obraz jest złożony, tym trudniejsze jest obejście go przez boty';
$txt['setting_image_verification_off'] = 'Wyłącz';
$txt['setting_image_verification_vsimple'] = 'Bardzo prosty - Sam tekst';
$txt['setting_image_verification_simple'] = 'Prosty - Nachodzące na siebie kolorowe litery, bez szumu';
$txt['setting_image_verification_medium'] = 'Średni - Nachodzące na siebie kolorowe litery, z szumem';
$txt['setting_image_verification_high'] = 'Trudny - Pochylone litery, znaczny szum';
$txt['setting_image_verification_extreme'] = 'Ekstremalny - Pochylone litery, szum, linie i kształty.';
$txt['setting_image_verification_sample'] = 'Przykład';

// reCAPTCHA
$txt['recaptcha_configure'] = 'reCAPTCHA Verification System';
$txt['recaptcha_configure_desc'] = 'Configure the reCAPTCHA Verification System. Don\'t have a key for reCAPTCHA? <a href="https://www.google.com/recaptcha/admin"> Get your reCAPTCHA key here</a>.';
$txt['recaptcha_enabled'] = 'Use reCAPTCHA Verification System';
$txt['recaptcha_enable_desc'] = 'This augments the built-in visual verification';
$txt['recaptcha_theme'] = 'reCAPTCHA Theme';
$txt['recaptcha_theme_light'] = 'Light';
$txt['recaptcha_theme_dark'] = 'Dark';
$txt['recaptcha_site_key'] = 'Site Key';
$txt['recaptcha_site_key_desc'] = 'This will be set in the HTML code your site serves to users.';
$txt['recaptcha_secret_key'] = 'Secret Key';
$txt['recaptcha_secret_key_desc'] = 'This is for communication between your site and Google. Be sure to keep it a secret.';
$txt['recaptcha_no_key_question'] = 'Don\'t have a key for reCAPTCHA?';
$txt['recaptcha_get_key'] = 'Get your reCAPTCHA key here.';
$txt['languages_recaptcha'] = 'ReCAPTCHA language';

$txt['setting_image_verification_nogd'] = '<strong>Uwaga:</strong> ustawienie złożoności nie ma znaczenia, ponieważ serwer nie ma zainstalowanej biblioteki GD.';
$txt['setup_verification_questions'] = 'Pytania kontrolne';
$txt['setup_verification_questions_desc'] = '<span class="smalltext">Jeśli chcesz by użytkownicy odpowiadali na pytania weryfikacyjne, aby zatrzymać boty, powinieneś ustawić kilka pytań w tabelce poniżej. Wybierz w miarę łatwe pytania; wielkość znaków nie ma znaczenia. Użytkownik w przeciwieństwie do bota odpowie poprawnie na dane pytanie. Możesz używać tagów BBC, aby sformatować pytania, w celu usunięcia pytania zwyczajnie wyczyść zawartość tego pola.</span>';
$txt['setup_verification_question'] = 'Pytanie';
$txt['setup_verification_answer'] = 'Odpowiedź';
$txt['setup_verification_add_more'] = 'Dodaj kolejne pytanie';
$txt['setup_verification_add_answer'] = 'Dodaj dodatkową odpowiedź';

$txt['moderation_settings'] = 'Ustawienia moderacji';
$txt['setting_warning_enable'] = 'Włącz system ostrzeżeń użytkownika';
$txt['setting_warning_watch'] = 'Poziom Ostrzeżenia - Użytkownik jest obserwowany<div class="smalltext">Wartość poziomu ostrzeżenia, powyżej którego, użytkownik zostanie dodany do listy obserwowanych użytkowników - 0 aby wyłączyć.</div>';
$txt['setting_warning_watch_note'] = 'The user warning level after which a user watch is put in place.';
$txt['setting_warning_moderate'] = 'Poziom Ostrzeżenia - wiadomości użytkownika są moderowane<div class="smalltext">Wartość poziomu ostrzeżenia, powyżej którego, wszystkie wiadomości użytkownika są moderowane - 0 aby wyłączyć.</div>';
$txt['setting_warning_moderate_note'] = 'The user warning level after which a user has all posts moderated.';
$txt['setting_warning_mute'] = 'Poziom Ostrzeżenia - Użytkownik nie może pisać wiadomości<div class="smalltext">Wartość poziomu ostrzeżenia, powyżej którego, użytkownik nie może pisać wiadomości - 0 aby wyłączyć.</div>';
$txt['setting_warning_mute_note'] = 'The user warning level after which a user cannot post any further.';
$txt['setting_user_limit'] = 'Maksymalna ilość punktów ostrzeżenia na dzień<div class="smalltext">Ta wartość, to maksymalna ilość punktów ostrzeżenia, jakie jeden moderator może przyznać użytkownikowi w okresie 24 godzin - 0 bez limitu.</div>';
$txt['setting_user_limit_note'] = 'This value is the maximum amount of warning points a single moderator can assign to a user in a 24 hour period - 0 for no limit.';
$txt['setting_warning_decrement'] = 'Ilość punktów ostrzeżeń redukowana co 24 godziny';
$txt['setting_warning_decrement_note'] = 'Only applies to users not warned within last 24 hours.';
$txt['setting_warning_show'] = '';
$txt['setting_warning_show_note'] = '';
$txt['setting_view_warning'] = 'Users who can see warning status';
$txt['setting_warning_show_mods'] = '';

$txt['signature_settings'] = 'Ustawienia podpisu';
$txt['setting_warning_show_user'] = '';
$txt['signature_settings_desc'] = 'Na tej stronie decydujesz o wyglądzie podpisów użytkowników SMF.';
$txt['setting_warning_show_all'] = '';
$txt['signature_settings_warning'] = 'Te ustawienia nie dotyczą istniejących juz podpisów. Kliknij <a href="' . $scripturl . '?action=admin;area=featuresettings;sa=sig;apply;%2$s=%1$s">tutaj</a> aby zastosować reguły do wszystkich istniejących podpisów.';
$txt['signature_settings_applied'] = 'The updated rules have been applied to the existing signatures.';
$txt['signature_enable'] = 'Włącz podpisy';
$txt['signature_max_length'] = 'Maksymalna dozwolona ilość znaków<div class="smalltext">(0=brak limitu)</div>';
$txt['signature_max_lines'] = 'Maksymalna ilość linii<div class="smalltext">(0=brak limitu)</div>';
$txt['signature_max_images'] = 'Maksymalna liczba obrazków<div class="smalltext">(0=brak limitu - pomija buźki)</div>';
$txt['signature_max_images_note'] = '(0 for no max - excludes smileys)';
$txt['signature_allow_smileys'] = 'Zezwól na używanie emotikon w sygnaturach';
$txt['signature_max_smileys'] = 'Maksymalna liczba emotikon<div class="smalltext">(0=brak limitu)</div>';
$txt['signature_max_image_width'] = 'Maksymalna szerokość obrazka w podpisie (w pikselach)<div class="smalltext">(0=brak limitu)</div>';
$txt['signature_max_image_height'] = 'Maksymalna wysokość obrazka w podpisie (w pikselach)<div class="smalltext">(0=brak limitu)</div>';
$txt['signature_max_font_size'] = 'Maksymalny rozmiar czcionki dozwolonej w podpisach<div class="smalltext">(0=brak limitu, w pikselach)</div>';
$txt['signature_bbc'] = 'Tagi BBC włączone';

$txt['custom_profile_title'] = 'Własne pola profilu';
$txt['custom_profile_desc'] = 'Na tej stronie możesz tworzyć własne pola profilów dopasowane do Twoich wymagań';
$txt['custom_profile_active'] = 'Aktywne';
$txt['custom_profile_fieldname'] = 'Nazwa pola';
$txt['custom_profile_fieldtype'] = 'Typ pola';
$txt['custom_profile_fieldorder'] = 'Field Order';
$txt['custom_profile_make_new'] = 'Nowe pole';
$txt['custom_profile_none'] = 'Nie utworzyłeś jeszcze żadnych własnych pól profilu!';
$txt['custom_profile_icon'] = 'Ikona';

$txt['custom_profile_type_text'] = 'Tekst';
$txt['custom_profile_type_textarea'] = 'Długi tekst';
$txt['custom_profile_type_select'] = 'Lista wyboru';
$txt['custom_profile_type_radio'] = 'Grupa opcji';
$txt['custom_profile_type_check'] = 'Pole wyboru';

$txt['custom_add_title'] = 'Dodaj pole profilu';
$txt['custom_edit_title'] = 'Edytuj pole profilu';
$txt['custom_edit_general'] = 'Pokaż ustawienia';
$txt['custom_edit_input'] = 'Dane wejściowe';
$txt['custom_edit_advanced'] = 'Zaawansowane ustawienia';
$txt['custom_edit_name'] = 'Nazwa';
$txt['custom_edit_desc'] = 'Opis';
$txt['custom_edit_profile'] = 'Sekcja profilu';
$txt['custom_edit_profile_desc'] = 'Sekcja profilu, gdzie jest edytowany.';
$txt['custom_edit_profile_none'] = 'Brak';
$txt['custom_edit_registration'] = 'Pokaż przy rejestracji';
$txt['custom_edit_registration_disable'] = 'Nie';
$txt['custom_edit_registration_allow'] = 'Tak';
$txt['custom_edit_registration_require'] = 'Tak, i wymagaj wpisania';
$txt['custom_edit_display'] = 'Pokaż w widoku wątku';
$txt['custom_edit_mlist'] = 'Show on memberlist';
$txt['custom_edit_picktype'] = 'Typ pola';

$txt['custom_edit_max_length'] = 'Maksymalna długość';
$txt['custom_edit_max_length_desc'] = '(0=bez limitu)';
$txt['custom_edit_dimension'] = 'Wymiary';
$txt['custom_edit_dimension_row'] = 'Wierszy';
$txt['custom_edit_dimension_col'] = 'Kolumn';
$txt['custom_edit_bbc'] = 'Włącz BBC';
$txt['custom_edit_options'] = 'Opcje';
$txt['custom_edit_options_desc'] = 'Zostaw puste pola aby usunąć. Przełącznik wybiera domyślną opcję.';
$txt['custom_edit_options_more'] = 'Więcej';
$txt['custom_edit_default'] = 'Stan domyślny';
$txt['custom_edit_active'] = 'Aktywne';
$txt['custom_edit_active_desc'] = 'Jeżeli nie jest zaznaczone to pole nie będzie pokazywane.';
$txt['custom_edit_privacy'] = 'Prywatność';
$txt['custom_edit_privacy_desc'] = 'Kto może widzieć i edytować to pole.';
$txt['custom_edit_privacy_all'] = 'Użytkownicy widzą to pole; właściciel może edytować';
$txt['custom_edit_privacy_see'] = 'Użytkownicy widzą to pole; tylko administratorzy mogą edytować';
$txt['custom_edit_privacy_owner'] = 'Użytkownicy nie widzą tego pola; właściciele oraz administratorzy mogą je edytować';
$txt['custom_edit_privacy_none'] = 'To pole widoczne jest tylko dla administratorów';
$txt['custom_edit_can_search'] = 'Można wyszukać?';
$txt['custom_edit_can_search_desc'] = 'Można szukać według tego pola na liście użytkowników.';
$txt['custom_edit_mask'] = 'Maska wprowadzania';
$txt['custom_edit_mask_desc'] = 'Maska wprowadzania może zostać wybrana dla pól tekstowych, aby narzucić konkretny rodzaj danych.';
$txt['custom_edit_mask_email'] = 'Prawidłowy Email';
$txt['custom_edit_mask_number'] = 'Numeryczny';
$txt['custom_edit_mask_nohtml'] = 'Brak HTML';
$txt['custom_edit_mask_regex'] = 'Wyrażenie regularne - regex (Zaawansowane)';
$txt['custom_edit_enclose'] = 'Pokaż załączony w tekście (opcjonalne)';
$txt['custom_edit_enclose_desc'] = '<strong>Sugerujemy</strong>, aby użyć maski wprowadzania do sprawdzenia danych wprowadzonych przez użytkownika.';

$txt['custom_edit_order_move'] = 'Move ';
$txt['custom_edit_order_up'] = 'Up';
$txt['custom_edit_order_down'] = 'Down';
$txt['custom_edit_placement'] = 'Wybierz położenie';
$txt['custom_profile_placement'] = 'Położenie';
$txt['custom_profile_placement_standard'] = 'Standardowe (z tytułem)';
$txt['custom_profile_placement_icons'] = 'With Icons';
$txt['custom_profile_placement_above_signature'] = 'Above Signature';
$txt['custom_profile_placement_below_signature'] = 'Below Signature';
$txt['custom_profile_placement_below_avatar'] = 'Below Avatar';
$txt['custom_profile_placement_above_member'] = 'Above Username';
$txt['custom_profile_placement_bottom_poster'] = 'Bottom poster info';
$txt['custom_profile_placement_before_member'] = 'Before Username';
$txt['custom_profile_placement_after_member'] = 'After Username';

// Use numeric entities in the string below!
$txt['custom_edit_delete_sure'] = 'Czy jesteś pewien że chcesz skasować to pole - wszystkie dane związane z tym polem dane zostaną stracone!';

$txt['standard_profile_title'] = 'Standardowe pola profilu';
$txt['standard_profile_field'] = 'Pola';
$txt['standard_profile_field_timezone'] = 'Timezone';

$txt['languages_lang_name'] = 'Nazwa wyświetlana';
$txt['languages_native_name'] = 'Native Name of Language';
$txt['languages_locale'] = 'Lokalizacja';
$txt['languages_default'] = 'Domyślny';
$txt['languages_character_set'] = 'Strona kodowa';
$txt['languages_users'] = 'Użytkownicy';
$txt['language_settings_writable'] = 'Uwaga: Nie można zapisywać w Settings.php, domyślne ustawienia nie mogą być zapamiętane.';
$txt['edit_languages'] = 'Edycja języków';
$txt['lang_file_not_writable'] = '<strong>Uwaga:</strong> Podstawowy plik języka (%1$s) jest nie zapisywalny. Musisz umożliwić zapis przed dokonaniem zmian.';
$txt['lang_entries_not_writable'] = '<strong>Uwaga:</strong> Plik języka, który chcesz edytować (%1$s) jest nie zapisywalny. Musisz umożliwić zapis przed dokonaniem zmian.';
$txt['languages_ltr'] = 'Od prawej do lewej';

$txt['add_language'] = 'Dodaj język';
$txt['add_language_smf'] = 'Pobierz z Simple Machines';
$txt['add_language_smf_browse'] = 'Wpisz nazwę poszukiwanego języka lub pozostaw puste aby wyszukać wszystkie.';
$txt['add_language_smf_install'] = 'Zainstaluj';
$txt['add_language_found_title'] = 'Found Languages';
$txt['add_language_smf_found'] = 'Następujące języki zostały znalezione. Kliknij w łącze Zainstaluj obok wybranego języka, zostaniesz przeniesiony do menedżera aktualizacji pakietu aby zainstalować.';
$txt['add_language_error_no_response'] = 'Strona Simple Machines nie odpowiada. Proszę spróbuj ponownie później.';
$txt['add_language_error_no_files'] = 'Żadne pliki nie zostały znalezione.';
$txt['add_language_smf_desc'] = 'Opis';
$txt['add_language_smf_utf8'] = 'UTF-8';
$txt['add_language_smf_version'] = 'Wersja';

$txt['edit_language_entries_primary'] = 'Poniżej najważniejsze ustawienia dla tej paczki językowej.';
$txt['edit_language_entries'] = 'Edytuj plik językowy';
$txt['edit_language_entries_desc'] = 'You can customize the individual text entries for this language. Select a file to load its entries, and then edit them below.<br><br>When you edit (or remove) an entry, a commented out version of the original is preserved in the file. If you ever need to restore your edited strings to their original state, or if you need more advanced access to these language files, go to <a href="' . $scripturl . '?action=admin;area=theme;sa=edit">' . $txt['themeadmin_edit_title'] . '</a>, browse to the file you are looking for, and then edit it directly using SMF\'s built-in text editor.';
$txt['edit_language_entries_file'] = 'Wybierz plik do edycji';
$txt['languages_dictionary'] = 'Słownik';
$txt['languages_spelling'] = 'Pisownia';
$txt['languages_for_pspell'] = 'To jest dla <a href="http://www.php.net/function.pspell-new" target="_blank" class="new_win">pSpell</a> - jeśli zainstalowany';
$txt['languages_rtl'] = 'Włącz tryb &quot;Od prawej do lewej&quot;';

$txt['lang_file_desc_index'] = 'Ogólne zestawy znaków';
$txt['lang_file_desc_EmailTemplates'] = 'Szablony email';

$txt['languages_download'] = 'Pobierz pakiet językowy';
$txt['languages_download_note'] = 'Ta strona wyświetla listę wszystkich plików, które są zawarte w tym pakiecie językowym oraz parę użytecznych informacji o każdym z nich. Wszystkie zaznaczone pliki zostaną przekopiowane.';
$txt['languages_download_info'] = '<strong>Informacja:</strong>
	<ul class="normallist">
		<li>Pliki, które mają status &quot;Niezapisywalny&quot; nie mogą zostać przekopiowane przez SMF w takim stanie i musisz ręcznie nadać właściwości za pomocą klienta FTP lub wypełnić pola na dole tej strony.</li>
		<li>Informacja o wersji pliku wyświetla ostatnią wersję SMF dla której był on zaktualizowany. Podświetlenie na zielono oznacza, że jest on nowszy niż Twój obecny. Pomarańczowy natomiast oznacza tę samą wersję, a czerwony starszą niż Twoja obecna.</li>
		<li>Jeśli plik już istnieje na Twoim forum, kolumna &quot;Już istnieje&quot; będzie posiadała jedną z dwóch wartości. &quot;Identyczny&quot; oznacza, że plik już istnieje i jest taki sam, więc nie ma potrzeby go podmieniać. &quot;Inny&quot; oznacza, że jego zawartość różni się w jakimś stopniu i zamiana jest prawdopodobnie dobrym rozwiązaniem.</li>
	</ul>';

$txt['languages_download_main_files'] = 'Pliki podstawowe';
$txt['languages_download_filename'] = 'Nazwa pliku';
$txt['languages_download_dest'] = 'Położenie';
$txt['languages_download_writable'] = 'Zapisywalny';
$txt['languages_download_version'] = 'Wersja';
$txt['languages_download_older'] = 'Masz zainstalowaną najnowszą wersję tego pliku, nadpisanie nie jest zalecane.';
$txt['languages_download_exists'] = 'Już istnieje';
$txt['languages_download_exists_same'] = 'Identyczny';
$txt['languages_download_exists_different'] = 'Inny';
$txt['languages_download_copy'] = 'Kopiuj';
$txt['languages_download_not_chmod'] = 'Nie możesz kontynuować instalacji dopóki nie będzie możliwy zapis wszystkich wybranych plików.';
$txt['languages_download_illegal_paths'] = 'Pakiet zawiera nieprawidłowe ścieżki dostępu - skontaktuj się z Simple Machines';
$txt['languages_download_complete'] = 'Instalacja ukończona';
$txt['languages_download_complete_desc'] = 'Pakiet językowy zainstalowany pomyślnie. Kliknij <a href="%1$s">tutaj</a> aby wrócić do strony języków';
$txt['languages_delete_confirm'] = 'Czy jesteś pewien, że chcesz usunąć ten język?';
$txt['languages_max_inputs_warning'] = 'You can only save %1$s edits at a time. Please click the Save button now, and then continue editing when this page reloads.';
$txt['languages_txt'] = 'Standard text strings';
$txt['languages_helptxt'] = 'Help text';
$txt['languages_editortxt'] = 'User interface for the editor';
$txt['languages_tztxt'] = 'Time zone descriptions';
$txt['languages_txt_for_timezones'] = 'Custom location names';
$txt['languages_enter_key'] = 'Enter a variable name for this text string';
$txt['languages_invalid_key'] = 'Sorry, but this variable name is invalid: ';

$txt['setting_frame_security'] = 'Frame Security Options';
$txt['setting_frame_security_SAMEORIGIN'] = 'Allow Same Origin';
$txt['setting_frame_security_DENY'] = 'Deny all frames';
$txt['setting_frame_security_DISABLE'] = 'Disabled';

$txt['setting_proxy_ip_header'] = 'Reverse Proxy IP Header';
$txt['setting_proxy_ip_header_disabled'] = 'Do not allow any Proxy IP Headers';
$txt['setting_proxy_ip_header_autodetect'] = 'Auto-detect Proxy IP header';
$txt['setting_proxy_ip_servers'] = 'Reverse Proxy Servers IPs';

$txt['select_boards_from_list'] = 'Select boards which apply';

$txt['topic_move_any'] = 'Pozwól na przenoszenie wątków do działów tylko do odczytu';

$txt['defaultMaxListItems'] = 'Maximum number of items per page in lists';

$txt['tfa_mode'] = 'Two-Factor Authentication';
$txt['tfa_mode_forced'] = 'Force on selected membergroups';
$txt['tfa_mode_forcedall'] = 'Force for ALL users';
$txt['tfa_mode_forced_help'] = 'Please enable 2FA in your account in order to be able to force 2FA on other users!';
$txt['tfa_mode_enabled'] = 'Enabled';
$txt['tfa_mode_disabled'] = 'Disabled';
$txt['tfa_mode_subtext'] = 'Allows users to have a second layer of security while logging in, users would need an app like Google Authenticator paired with their account';

?>