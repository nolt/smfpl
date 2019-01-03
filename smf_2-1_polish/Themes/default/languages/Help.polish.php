<?php
// Version: 2.1 Beta 3; Help

global $helptxt;

$txt['close_window'] = 'Zamknij okno';

$helptxt['manage_boards'] = '	<strong>Edytuj działy</strong><br>
	W tym menu możesz stworzyć/usunąć/zmienić kolejność działów i kategorii.
	Przykładowo, miałeś stronę o szerokiej tematyce
	takiej jak &quot;Sport&quot;, &quot;Motoryzacja&quot; i &quot;Muzyka&quot;.
	To byłyby kategorie najwyższego poziomu. Pod każdą z nich chciałbyś
	prawdopodobnie stworzyć hierarchiczne &quot;podkategorie&quot; lub &quot;działy&quot; dla tematów.
	To będzie prosta hierarchia ze strukturą: <br>
	<ul class="normallist">
		<li>
			<strong>Sport</strong>
			&nbsp;-  &quot;Kategoria&quot;
		</li>
		<ul class="normallist">
			<li>
				<strong>Motoryzacja</strong>
				&nbsp;- Forum w kategorii &quot;Sport&quot;
			</li>
			<ul class="normallist">
				<li>
					<strong>Muzyka</strong>
					&nbsp;- Forum podrzędne dla forum &quot;Motoryzacja&quot;
				</li>
			</ul>
			<li><strong>Piłka nożna</strong>
			&nbsp;- Kolejne forum w kategorii &quot;Sport&quot;</li>
		</ul>
	</ul>
Kategorie pozwolą Ci na rozdzielenie forum z szerszych tematów (&quot;Motoryzacja, Sporty&quot;), a &quot;Fora&quot; pod nimi są aktualnymi tematami w których użytkownik może pisać. Użytkownik zainteresowany Pinto, napisałby wiadomość pod &quot;Motoryzacja->Pinto&quot;. Kategorie pozwolą ludziom szybko znaleźć konkretnie to, co ich interesuje: zamiast &quot;Sklep&quot; możesz mieć &quot;Sprzęt&quot; oraz &quot;Ubiór&quot;, sklepy do których możesz wejść. Zdecydowanie upraszcza wyszukiwanie &quot;płyta główna&quot;, ponieważ możesz przejść do &quot;kategorii&quot; sklepu - Sprzęt zamiast szukać w sklepie z ubiorem (gdzie raczej ciężko o płytę główną).<br>
Tak jak podano wyżej, Forum jest konkretnym tematem w szerszej kategorii. Jeśli chcesz rozmawiać o &quot;Pinto&quot;, przejdziesz do kategorii &quot;Auto&quot;, a następnie wybierzesz forum Pinto i napiszesz to co masz namyśli.<br>
Funkcje zarządzania dla tego menu pozwalają na tworzenie for dla każdej kategorii oraz zmiana ich kolejności (np. przesuń &quot;Pinto&quot; przed &quot;Chevy&quot;) lub całkowite usunięcie forum.';

$helptxt['edit_news'] = '<ul class="normallist">  <li>  <strong>Aktualności</strong><br> Ta sekcja pozwala wprowadzić tekst informacji o nowościach, wyświetlany na stronie głównej forum. Dodaj co tylko chcesz (np. &quot;Nie zapomnijcie o konferencji w najbliższy wtorek&quot;). Informacje te są wyświetlane losowo, każda w osobnej ramce. </li> <li> <strong>Newsletters</strong><br> Ta sekcja pozwoli Ci na wysłanie masowej korespondencji do użytkowników forum. Najpierw musisz zaznaczyć nazwy grup użytkowników, do których chcesz wysłać newsletter. Jeśli sobie życzysz możesz dodatkowo dodać użytkowników lub adresy email którzy otrzymają newsletter. Ostatecznie możesz zdecydować w jakiej formie korespondencja ma być wysłana do użytkownika, za pomocą wiadomości prywatnej lub też wiadomości email. </li> <li> <strong>Ustawienia</strong><br> Ta sekcja zawiera kilka ustawień dotyczących aktualności oraz korespondencji takich jak: dodawanie grup które mogą edytować aktualności i wysyłać korespondencję. Istnieje także opcja konfiguracji aktualności za pomocą której możesz je włączyć lub wyłączyć, ustawić długość znaków w wyświetlanej wiadomości. </li> </ul>';

$helptxt['view_members'] = '	<ul class="normallist">
		<li>
			<strong>Przeglądanie użytkowników</strong><br>
			Przeglądaj wszystkich użytkowników forum. Zostanie wyświetlona lista użytkowników, z których
			każdy jest odnośnikiem do jego profilu. Jako administrator, możesz modyfikować profile
			użytkowników. Masz całkowitą kontrolę nad użytkownikami,
			włącznie z ich usunięciem z forum.<br><br>
		</li>
		<li>
			<strong>Oczekujący na zatwierdzenie</strong><br>
			Ta sekcja pokazuje się tylko jeśli włączona jest opcja zatwierdzania wszystkich nowych użytkowników. Każdy rejestrujący się
			na forum staje się pełnym użytkownikiem dopiero po zatwierdzeniu przez admina. Ta sekcja wyświetla wszystkich tych użytkowników,
			którzy oczekują na zatwierdzenie. Pokazują się również ich emaile i adres IP. Możesz wybrać czy zatwierdzić, czy odrzucić
			(skasować) każdego użytkownika z listy, poprzez zaznaczenie użytkowników i wybranie odpowiedniej czynności z rozwijanej listy.
			Podczas odrzucania użytkownika możesz wybrać czy po usunięciu poinformować go emailem o swojej decyzji.<br><br>
		</li>
		<li>
			<strong>Oczekujący na aktywację</strong><br>
			Ta sekcja pokazuje się tylko jeśli włączona jest opcja aktywacji kont użytkownika. Ta lista
			wyświetla wszystkich użytkowników, którzy jeszcze nie aktywowali swojego konta. Możesz wybrać czy aktywować te konta za nich,
			odrzucić, czy też przypomnieć o konieczności aktywacji konta. Tak jak powyżej, możesz poinformować lub nie użytkowników
			o swojej decyzji.<br><br>
		</li>
	</ul>';

$helptxt['ban_members'] = '<strong>Ban użytkowników</strong><br> SMF pozwala na &quot;banowanie&quot; użytkowników którzy zakłócają działanie forum poprzez spamowanie, floodowanie, itp. Jako admin widzisz podczas przeglądania wiadomości adres IP każdego z użytkowników z którego wysłana została wiadomość. Możesz dodać dane IP do listy banów co zablokuje możliwość pisania wiadomości z tej lokalizacji.<br>Możesz również banować użytkowników podając ich adres email.';

$helptxt['featuresettings'] = '<strong>Właściwości i Opcje</strong><br> Jest tu kilka ustawień, które możesz zmienić według swoich preferencji.';

$helptxt['modsettings'] = '<strong>Ustawienia modyfikacji</strong><br> Strona ta zawiera różne ustawienia dodane przez modyfikacje zainstalowane na Twoim forum.';

$helptxt['time_format'] = '<strong>Format Czasu</strong><br>
	Możesz dostosować sposób wyświetlania daty i czasu do swoich upodobań. Wygląda to na dość skomplikowany ciąg literek, ale nie jest specjalnie trudne.
	Konwencja pochodzi z funkcji PHP strftime i została opisana poniżej (więcej szczegółów można znaleźć na stronie <a href="http://www.php.net/manual/function.strftime.php" target="_blank" class="new_win">php.net</a>).<br>
	<br>
	Następujące znaki są rozpoznawane w łańcuchu formatującym: <br>
	<span class="smalltext">
	&nbsp;&nbsp;%a - skrócony dzień tygodnia<br>
	&nbsp;&nbsp;%A - pełny dzień tygodnia<br>
	&nbsp;&nbsp;%b - skrócona nazwa miesiąca<br>
	&nbsp;&nbsp;%B - pełna nazwa miesiąca<br>
	&nbsp;&nbsp;%d - dzień miesiąca (01 do 31) <br>
	&nbsp;&nbsp;%D<b>*</b> - to samo, co %m/%d/%y <br>
	&nbsp;&nbsp;%e<b>*</b> - dzień miesiąca (1 do 31) <br>
	&nbsp;&nbsp;%H - godzina (format 24-godzinny)<br>
	&nbsp;&nbsp;%I - godzina (format 12-godzinny)<br>
	&nbsp;&nbsp;%m - miesiąc jako liczba (01 do 12) <br>
	&nbsp;&nbsp;%M - minuty jako liczba <br>
	&nbsp;&nbsp;%p - &quot;am&quot; albo &quot;pm&quot; zgodnie z aktualnym czasem<br>
	&nbsp;&nbsp;%R<b>*</b> - czas w notacji 24-godzinnej <br>
	&nbsp;&nbsp;%S - sekundy jako liczba dziesiętna <br>
	&nbsp;&nbsp;%T<b>*</b> - aktualny czas, odpowiednik %H:%M:%S <br>
	&nbsp;&nbsp;%y - rok jako liczba dwucyfrowa (00 do 99) <br>
	&nbsp;&nbsp;%Y - rok jako liczba 4-cyfrowa<br>
	&nbsp;&nbsp;%Z - strefa czasowa, nazwa lub skrót <br>
	&nbsp;&nbsp;%% - Znak \'%\' literowy <br>
	<br>
	<em>* Nie działa na serwerach opartych na systemie Windows.</em></span>';

$helptxt['live_news'] = '<strong>Aktualne ogłoszenia</strong><br> Ten boks pokazuje ostatnie ogłoszenia z <a href="http://www.simplemachines.org/" target="_blank" class="new_win">www.simplemachines.org</a>. Powinieneś sprawdzać je na bieżąco aby uzyskiwać informacje o aktualizacjach, nowych wydaniach i ważnych informacjach od Simple Machines.';

$helptxt['registrations'] = '<strong>Zarządzanie rejestracją</strong><br>
	Ta sekcja zawiera wszystkie funkcje związane z zarządzaniem nowymi rejestracjami na forum. Jest podzielona na maksymalnie cztery
	działy, które są widoczne zależnie od ustawień Twojego forum:<br><br>
	<ul class="normallist">
		<li>
			<b>Zarejestruj nowego użytkownika</b><br>
			Tu możesz zarejestrować użytkownika na jego prośbę. Jest to przydatne na zamkniętych forach, 
			lub gdy admin chce stworzyć konto testowe. Jeśli jest włączona opcja aktywacji konta, to 
			do użytkownika zostanie wysłany emailem link aktywacyjny, który będzie musiał być kliknięty, 
			by zacząć korzystać z konta. Ewentualnie można wybrać opcję, by przesłać użytkownikowi hasło na email.<br><br>
		</li>
		<li>
			<b>Edytuj umowę rejestracyjną</b><br>
			W tym miejscu możesz zmienić umowę rejestracyjną, wyświetlaną podczas tworzenia nowego konta na forum.
			Możesz dodać, usunąć i zmienić wszystko co zostało standardowo zaproponowane przez SMF.<br><br>
		</li>
		<li>
			<b>Ustal zarezerwowane nazwy</b><br>
			Tu ustalisz jakie wyrazy nie będą mogły być użyte przez użytkowników do stworzenia ich nazwy konta.<br><br>
		</li>
		<li>
			<b>Ustawienia</b><br>
			Ta sekcja będzie widoczna jedynie, jeśli masz zezwolenie na administrację forum. Tu możesz ustawić sposób rejestracji
      jaki będzie używany na forum, a także inne związane z rejestracją opcje.
		</li>
	</ul>';

$helptxt['modlog'] = '<strong>Raport moderacji</strong><br>
	Ta sekcja pozwala członkom grupy administratorów śledzić wszystkie czynności moderacyjne, które wykonali moderatorzy. Aby 
	moderatorzy nie mogli usunąć odwołań do akcji, które wykonali, wpisy nie mogą zostać usunięte przed upływem 24 godzin od ich wystąpienia. Kolumna \'obiekty\' pokazuje zmienne powiązane z akcją.';
$helptxt['adminlog'] = '<strong>Raport Administratora</strong><br> Ta sekcja pozwala członkom grupy Administratorzy, śledzić niektóre czynności administracyjne, które zostały dokonane na forum. Aby się upewnić, że administratorzy nie usuną odnośników do czynności jakie wykonali, wejścia nie mogą zostać usunięte przez 24 godziny po dokonaniu czynności.';
$helptxt['userlog'] = '<strong>Profile Edits Log</strong><br>
	This page allows members of the admin team to view changes users make to their profiles, and is available from inside a user\'s profile area.';
$helptxt['warning_enable'] = '<strong>System Ostrzeżeń Użytkowników</strong><br>
	Ta opcja pozwala administratorom i moderatorom przyznawać użytkownikom ostrzeżenia - oraz używać Poziomu Ostrzeżenia, do określenia 
	ograniczeń w korzystaniu z forum. Po uaktywnieniu te opcji, w sekcji Zezwolenia, możesz określić, które grupy mogą przyznawać
	ostrzeżenia użytkownikom. Poziom ostrzeżenia może być ustawiony w profilu użytkownika. Dostępne są następujące ustawienia:
	<ul class="normallist">
		<li>
			<strong>Poziom Ostrzeżenia - Użytkownik jest obserwowany</strong><br>
			To ustawienie pozwala zdefiniować procentowy poziom ostrzeżenia, który musi osiągnąć użytkownik, aby zostać automatycznie wciągniętym na listę obserwowanych użytkowników.
			Każdy użytkownik, który jest &quot;obserwowany&quot; pojawi się w odpowiednim obszarze w centrum moderacji.
		</li>
		<li>
			<strong>Poziom Ostrzeżenia - Wszystkie wiadomości użytkownika są moderowane</strong><br>
			Każdy użytkownik, który przekroczy ustawioną wartość, będzie musiał otrzymać zgodę moderatora, na publikację każdej wiadomości na forum.
			To ustawienie będzie nadrzędne do wszystkich lokalnych zezwoleń związanych z moderacją wiadomości.
		</li>
		<li>
			<strong>Poziom Ostrzeżenia - Użytkownik nie może pisać wiadomości</strong><br>
			Przekroczenie ustawionego poziomu, spowoduje całkowity brak możliwości pisania wiadomości na forum. 
		</li>
		<li>
			<strong>Maksymalna ilość punktów ostrzeżenia na dzień</strong><br>
			To ustawienie określa całkowitą ilość punktów, które pojedynczemu użytkownikowi, może przyznać lub odebrać moderator w okresie 24 godzin.
			To ustawienie pozwala ograniczyć aktywność administratorów w krótkim okresie czasu. Pamiętaj, można wyłączyć tę opcję, ustawiając wartość na zero. 
			Żaden użytkownik z uprawnieniami administratora, nie jest objęty tą regułą.
		</li>
	</ul>';
$helptxt['warning_watch'] = 'This setting defines the percentage warning level a member must reach to automatically assign a &quot;watch&quot; to the member. Any member who is being &quot;watched&quot; will appear in the watched members list in the moderation center.';
$helptxt['warning_moderate'] = 'Any member passing the value of this setting will find all their posts require moderator approval before they appear to the forum community. This will override any local board permissions which may exist related to post moderation.';
$helptxt['warning_mute'] = 'If this warning level is passed by a member they will find themselves under a post ban. The member will lose all posting rights.';
$helptxt['user_limit'] = 'This setting limits the amount of points a moderator may add/remove to any particular member in a twenty four hour period. This
			can be used to limit what a moderator can do in a small period of time. This can be disabled by setting it to a value of zero. Note that
			any members with administrator permissions are not affected by this value.';

$helptxt['error_log'] = '<strong>Raport błędów forum</strong><br>
	Każdy błąd, który wystąpił podczas korzystania z forum zostaje zapisany. Domyślnie są sortowane po dacie. 
	Za pomocą strzałek, można zmienić sortowanie, a dodatkowo można włączyć filtr, np. według użytkownika. 
	Podczas filtrowania, wyświetlą się jedynie te wpisy, które pasują do filtra.';
$helptxt['theme_settings'] = '<strong>Ustawienia stylu</strong><br>
	Ekran ten pozwala na zmianę specyficznych ustawień dla obecnego stylu, włączając w to opcje takie jak 
	katalog oraz adres URL stylu czy ustawienia layoutu forum. Większość stylów posiada rozmaite opcje 
	pozwalające na dostosowanie ustawień do indywidualnych potrzeb forum.';
$helptxt['smileys'] = '<strong>Centrum Uśmieszków</strong><br>
	Tutaj możesz dodawać i usuwać uśmieszki i zestawy uśmieszków. Zauważ, że jeśli uśmieszek znajduje się w jednym zestawie, to istnieje również w pozostałych zestawach - w przeciwnym wypadku 
	mogłoby być to zaskakujące dla użytkowników forum używających różnych zestawów.<br><br>

	Możesz tutaj również edytować ikony wiadomości, o ile włączyłeś je na stronie ustawień.';
$helptxt['calendar'] = '<strong>Zarządzaj kalendarzem</strong><br>
	Tutaj możesz dodawać i usuwać wpisy oraz zmienić ustawienia kalendarza.';
$helptxt['cal_export'] = 'Exports a text file in the iCal format for importing into other calendar applications';
$helptxt['cal_highlight_events'] = 'This setting allows you to highlight events on the Mini Calendars, Main Calendar, both places, or disable event highlighting.';
$helptxt['cal_highlight_holidays'] = 'This setting allows you to highlight holidays on the Mini Calendars, Main Calendar, both places, or disable event highlighting.';
$helptxt['cal_highlight_birthdays'] = 'This setting allows you to highlight birthdays on the Mini Calendars, Main Calendar, both places, or disable event highlighting.';
$helptxt['cal_disable_prev_next'] = 'If this setting is checked, the three month blocks on the left hand side of the page will be disabled.';
$helptxt['cal_display_type'] = 'This setting allows you to change the display type of the calendar.<br><br><strong>Comfortable:</strong> makes the rows of the calendar big.<br><strong>Compact:</strong> makes the rows of the calendar small.';
$helptxt['cal_week_links'] = 'If this setting is checked, links will be added alongside each week in the calendar.';
$helptxt['cal_prev_next_links'] = 'If this setting is checked, previous month and next month links will be added to the top of each month for easy navigation.';
$helptxt['cal_short_months'] = 'If this setting is checked, month names within the calendar will be shortened.<br><br><strong>Enabled:</strong> ' . $txt['months_short'][1] . ' 1<br><strong>Disabled:</strong> ' . $txt['months_titles'][1] . ' 1';
$helptxt['cal_short_days'] = 'If this setting is checked, day names within the calendar will be shortened.<br><br><strong>Enabled:</strong> ' . $txt['days_short'][1] . '<br><strong>Disabled:</strong> ' . $txt['days'][1];

$helptxt['serversettings'] = '<strong>Ustawienia serwera</strong><br>
	Tu możesz zmienić główne ustawienia forum. W tej sekcji znajdziesz ustawienia bazy danych, ścieżek URL, a także
	tych związanych z pocztą i pamięcią podręczną. Zastanów się przed zmianami w tym miejscu, gdyż błędy mogą spowodować
	brak dostępu do forum.';
$helptxt['manage_files'] = '<ul class="normallist">  <li>  <strong>Przeglądaj pliki</strong><br>  Przeglądanie wszystkich załączników, awatarów i miniaturek zgromadzonych przez SMF.<br><br>  </li><li>  <strong>Ustawienia załączników</strong><br>  Skonfiguruj miejsce przechowywania załączników i ustaw ograniczenia na typy załączników.<br><br>  </li><li>  <strong>Ustawienia awatarów</strong><br>  Skonfiguruj miejsce przechowywania awatarów i ustaw zmianę wielkości awatarów.<br><br>  </li><li>  <strong>Zarządzanie plikami</strong><br>  Sprawdź i napraw jakiekolwiek błędy w katalogu załączników i usuń wybrane załączniki.<br><br>  </li>  </ul>';

$helptxt['topicSummaryPosts'] = 'Ta opcja pozwala ustawić liczbę poprzednich wiadomości widocznych w podsumowaniu wątku podczas odpowiedzi.';
$helptxt['enableAllMessages'] = 'Definiuje <em>maksymalną</em> ilość wiadomości w wątku, dla którego zostanie wyświetlony link do <em>wszystkich</em> wiadomości. Ustawienie tej ilości na mniej niż &quot;Maksymalna ilość wiadomości do wyświetlenia na stronie wątku&quot; spowoduje, że link nigdy się nie pojawi, a zbyt duża wartość może spowolnić Twoje forum.';
$helptxt['allow_guestAccess'] = 'Odznaczenie tej opcji wyłączy gościom wykonywanie większości czynności poza tymi najprostszymi - logowanie, rejestracja, przypomnienie hasła, itp. - na Twoim forum. Nie jest to to samo co uniemożliwienie gościom dostępu do działów.';
$helptxt['userLanguage'] = 'Włączenie tej opcji pozwoli użytkownikom wybrać plik językowy z którego będą korzystać. Nie będzie to miało wpływu na 
		ustawienia domyślne.';
$helptxt['trackStats'] = 'Statystyki:<br>Ta opcja pozwoli na wyświetlanie użytkownikom listy najnowszych wiadomości oraz najbardziej popularnych wątków na Twoim forum. 
		Opcja ta pozwoli również na wyświetlanie różnych statystyk, jak np. najwyższa liczba użytkowników online, nowi użytkownicy czy nowe wątki.<hr />
		Trafienia:<br>Dodaje następną kolumnę na stronie statystyk z ilością trafień na Twoim forum.';
$helptxt['titlesEnable'] = 'Włączenie Tytułów osobistych pozwoli użytkownikom ze stosownymi uprawnieniami na stworzenie własnych tytułów widocznych pod nazwą.<br><em>Na przykład:</em><br>Janek<br>Spoko koleś
';
$helptxt['onlineEnable'] = 'Pokazuje obrazek wskazujący czy użytkownik jest online lub offline';
$helptxt['todayMod'] = 'Będzie pokazywać "Dzisiaj" lub "Wczoraj", jeśli to możliwe, zamiast daty.<br><br>  <strong>Przykłady:</strong><br><br>  <dt>  <dt>Wyłączone</dt>  <dd>Październik 3, 2009 at 12:59:18 am</dd>  <dt>Tylko dziś</dt>  <dd>Dziś at 12:59:18 am</dd>  <dt>Dziś i Wczoraj</dt>  <dd>Wczoraj at 09:36:55 pm</dd>  </dt>  ';
$helptxt['disableCustomPerPage'] = 'Zaznacz tę opcję, aby uniemożliwić użytkownikom zmianę ilości wiadomości i wątków pokazywanych odpowiednio na stronach "Indeks Wiadomości"" i "Pokaż wątek".';
$helptxt['enablePreviousNext'] = 'Ta opcja spowoduje wyświetlanie odnośnika do następnego i poprzedniego wątku.';
$helptxt['pollMode'] = 'Ta opcja włącza lub wyłącza ankiety. Jeśli opcja jest wyłączona, to wszystkie istniejące ankiety zostaną ukryte
		na liście wątków. Możesz wybrać, czy pokazywać wątki, w których były ankiety bez ankiet, przez wybranie
		&quot;Pokaż ankiety jako wątki&quot;.<br><br>By zdecydować kto może tworzyć ankiety, lub w nich głosować,
		zajrzyj do zarządzania zezwoleniami. Pamiętaj o tym, jeśli komuś nie działają ankiety.';
$helptxt['enableCompressedOutput'] = 'Włączenie tej opcji spowoduje kompresowanie wynikowej strony w celu zmniejszenia zużycia przepustowości łącza, ale wymaga 
		zainstalowanej biblioteki zlib.';
$helptxt['disableTemplateEval'] = '';
$helptxt['httponlyCookies'] = 'Cookies won\'t be accessible by scripting languages, such as JavaScript. This setting can help to reduce identity theft through XSS attacks. This can cause issues with third party scripts but should be on wherever possible.';
$helptxt['databaseSession_enable'] = 'Ta opcja wykorzystuje bazę danych do przechowywania informacji o sesjach - jest to najlepsze rozwiązanie dla serwerów wykorzystujących równoważenie obciążenia, ale pomaga również przy wszelkich problemach z timeoutem i może przyspieszyć działanie forum.';
$helptxt['databaseSession_loose'] = 'Włączenie tej opcji spowoduje zmniejszenie transferu, jaki generuje Twoje forum, oraz sprawi, że powrót do poprzedniej strony nie będzie skutkować jej przeładowaniem. Minusem jest między innymi to, że ikony nowych wiadomości nie odświeżą się (dopóki nie przejdziesz do niej kliknięciem zamiast przyciskiem powrotu).';
$helptxt['databaseSession_lifetime'] = 'To jest czas bezczynności w sekundach, po którym sesja wygaśnie. Jeśli czas bezczynności użytkownika przekroczy tą wartość kolejna akcja spowoduje wyświetlenie komunikatu &quot;sesja wygasła&quot;. Wartości powyżej 2400 sekund nie są zalecane.';
$helptxt['tfa_mode'] = 'You can add a second level of security to your forum by enabling <a href="https://en.wikipedia.org/wiki/Two_factor_authentication">Two Factor Authentication</a>. 2FA forces your users to add a enter a machine-generated code after the regular login. You need to configure 2FA to yourself before you are able to force it to other users!';
$helptxt['cache_enable'] = 'SMF performs caching at a variety of levels. The higher the level of caching enabled the more CPU time will be spent retrieving cached information. If caching is available on your machine it is recommended that you try caching at level 1 first.';
$helptxt['cache_memcached'] = 'If you are using memcached you need to provide the server details. This should be entered as a comma separated list as shown in the example below:<br><br>	&quot;server1,server2,server3:port,server4&quot;<br><br>Note that if no port is specified SMF will use port 11211 unless the host contains a slash, then it is assumed to be an alternative transport and the port will be set to 0. SMF will attempt to perform rough/random load balancing across the specified servers.';
$helptxt['cache_cachedir'] = 'This setting is only for the smf file-based cache system. It specifies the path to the cache directory. It is recommended that you place this in /tmp/ if you are going to use this, although it will work in any directory';
$helptxt['cache_sqlite_cachedir'] = 'This setting is only for the SQLite database cache system. It specifies the path to the cache directory. It is recommended that you place this in /tmp/ if you are going to use this, although it will work in any directory';
$helptxt['xcache_adminuser'] = 'This setting is only for the xcache based cache system. It specifies a username and password required to issue a clear command. If this is not set, clearing the cache will fail and the caching system will still force it to invalidate all cached data.<br>The username and password are in cleartext. The password is a unsalted MD5. It is recommended the username and password are set to random values.<br><br>The Cache API will attempt to set these values, however it is <a href="https://xcache.lighttpd.net/wiki/InstallAdministration">recommended these be set in your php.ini</a>';
$helptxt['enableErrorLogging'] = 'Ta opcja powoduje logowanie wszystkich błędów, jak np. błędne logowania, tak aby można było zobaczyć, co poszło źle.';
$helptxt['enableErrorQueryLogging'] = 'Uwzględnia pełne zapytanie wysłane do bazy danych z jakimkolwiek błędem bazy. Wymaga włączenia rejestracji błędów.<br><br><strong>Uwaga:  Wpłynie to na możliwość filtrowania logu błędów po komunikacie błędu.</strong>';
$helptxt['log_ban_hits'] = 'If enabled, every time a banned user tries to access the site, this will be logged in the error log. If you do not care whether, or how often, banned users attempt to access the site, you can turn this off for a performance boost.';
$helptxt['allow_disableAnnounce'] = 'Ta opcja umożliwi użytkownikom wyłączenie powiadamiania o wątkach, które administrator zaznaczył jako wątki do powiadamiania.';
$helptxt['disallow_sendBody'] = 'Ta opcja usuwa opcję otrzymywania treści odpowiedzi i wiadomości w powiadomieniach wysyłanych na email.<br><br>Często użytkownicy odpowiadają na takie powiadomienia, a to w większości przypadków oznacza, że odpowiedź otrzymuje webmaster.';
$helptxt['enable_ajax_alerts'] = 'This option allows your members to receive AJAX notifications. This means that members don\'t need to refresh the page to get new notifications.<br><strong>DO NOTE:</strong> This option might cause a severe load at your server with many users online.';
$helptxt['jquery_source'] = 'This will determine the source used to load the jQuery Library. <em>Auto</em> will use the CDN first and if not available fall back to the local source. <em>Local</em> will only use the local source. <em>CDN</em> will only load it from Google CDN network';
$helptxt['compactTopicPagesEnable'] = 'Ta opcja pokazuje jak będzie wyświetlana ilość stron w jednym temacie.<br><em>Przykład:</em>
		&quot;3&quot; wyświetlaj jako: 1 ... 4 [5] 6 ... 9 <br>
		&quot;5&quot; wyświetlaj jako: 1 ... 3 4 [5] 6 7 ... 9';
$helptxt['timeLoadPageEnable'] = 'Ta opcja będzie pokazywać na dole strony forum czas w sekundach, jaki zajęło dla SMF na wygenerowanie strony.';
$helptxt['removeNestedQuotes'] = 'Ta opcja wyłączy wklejanie zagnieżdżonych cytatów, podczas cytowania wiadomości.';
$helptxt['max_image_width'] = 'Ta opcja pozwala na ustawienie maksymalnego rozmiaru wysyłanych obrazków. Nie będzie to miało wpływu na obrazki mniejsze niż maksimum.';
$helptxt['mail_type'] = 'To ustawienie pozwala Ci wybrać pomiędzy domyślnymi ustawieniami PHP a zastąpieniem tych ustawień przez SMTP. PHP nie obsługuje autoryzacji SMTP (której wiele serwerów aktualnie wymaga), tak więc jeśli jest ona dla Ciebie konieczna, powinieneś wybrać SMTP. Miej na uwadze, że SMTP może działać wolniej, a niektóre serwery mogą nie przyjmować nazwy użytkownika i hasła.<br><br>Nie musisz wypełniać ustawień SMTP jeśli zdecydowałeś się na domyślne ustawienia PHP.';
$helptxt['attachment_manager_settings'] = 'Załączniki to pliki, mogą być wysłane na serwer oraz dodane do wiadomości przez użytkownika. Różne strony mogą z nich korzystać na różne sposoby, tutaj możesz dokonać odpowiednich ustawień. ';
$helptxt['attachmentCheckExtensions'] = 'For some communities, you may wish to limit the types of files that users can upload by checking the extension: e.g. myphoto.jpg has an extension of jpg.';
$helptxt['attachmentExtensions'] = 'If "check attachment\'s extension" above is ticked, these are the extensions that will be permitted for new attachments.';
$helptxt['attachmentUploadDir'] = 'The path to your attachment folder on the server<br>(example: /home/sites/yoursite/www/forum/attachments)';
$helptxt['attachmentDirSizeLimit'] = ' Select how large the attachment folder can be, including all files within it.';
$helptxt['attachmentPostLimit'] = ' Select the maximum filesize (in KB) of all attachments made per post. If this is lower than the per-attachment limit, this will be the limit.';
$helptxt['attachmentSizeLimit'] = 'Select the maximum filesize of each separate attachment.';
$helptxt['attachmentNumPerPostLimit'] = ' Select the number of attachments a person can make per post.';
$helptxt['attachmentShowImages'] = 'If the uploaded file is a picture, it will be displayed underneath the post.';
$helptxt['attachmentThumbnails'] = 'If the above setting is selected, this will save a separate (smaller) attachment for the thumbnail to decrease bandwidth.';
$helptxt['attachmentThumbWidth'] = 'Only used with the &quot;Resize images when showing under posts&quot; setting the maximum width to resize attachments down from. They will be resized proportionally.';
$helptxt['attachmentThumbHeight'] = 'Only used with the &quot;Resize images when showing under posts&quot; setting the maximum height to resize attachments down from. They will be resized proportionally.';
$helptxt['attachmentDirFileLimit'] = 'Max number of files per directory';
$helptxt['attachmentEnable'] = 'This setting enables you to configure how attachments can be made.<br><br>
	<ul class="normallist">
		<li>
			<strong>Disable all attachments</strong><br>
			All attachments are disabled. Existing attachments are not deleted, but they are hidden from view (even administrators cannot see them). New attachments cannot be made either, regardless of permissions.<br><br>
		</li>
		<li>
			<strong>Enable all attachments</strong><br>
			Everything behaves as normal, users who are permitted to view attachments can do so, users who are permitted to upload can do so.<br><br>
		</li>
		<li>
			<strong>Disable new attachments</strong><br>
			Existing attachments are still accessible, but no new attachments can be added, regardless of permission.
		</li>
	</ul>';
$helptxt['attachment_image_paranoid'] = 'Zaznaczenie tej opcji umożliwi bardzo rygorystyczne sprawdzanie załączonych obrazków. <strong>Uwaga!</strong> Ta szczegółowa kontrola może nie przepuścić nawet prawidłowych obrazków. Zdecydowanie zalecamy używanie tej opcji wraz z przekodowywaniem obrazków w celu próbkowania przez SMF tych, które nie zdadzą testu bezpieczeństwa - jeśli to się powiedzie, zostaną wyczyszczone oraz załadowane. W przeciwnym wypadku, jeśli przekodowywanie jest wyłączone, każdy obrazek, który nie przejdzie testu bezpieczeństwa, zostanie odrzucony.';
$helptxt['attachment_image_reencode'] = 'Zaznaczenie tej opcji umożliwi przekodowywanie załączonych obrazków. Przekodowywanie oferuje większe bezpieczeństwo. Uwaga, przekodowywanie powoduje wyświetlanie wszystkich animowanych obrazków jako statyczne. <br> Ta funkcja jest dostępna tylko wtedy, gdy moduł GD jest zainstalowany na serwerze.';
$helptxt['attachment_thumb_memory'] = 'The larger the source image (size & width x height), the higher the memory requirements are for the system to successfully create a thumbnail image.<br>Checking this setting, the system will estimate the required memory and will then request that amount. If successful, only then will it attempt to create the thumbnail.<br>This will result in fewer white page errors but may result in fewer thumbnails being created. Leaving this unchecked will always cause the system to try to create the thumbnail (with a fixed amount of memory). This may result in more white page errors.';
$helptxt['attachmentRecodeLineEndings'] = 'The script will re-code line endings according to your server.';
$helptxt['automanage_attachments'] = 'By default, SMF puts new attachments into a single folder. For most sites this is not a problem, but as a site grows it can be useful to have multiple folders to store attachments in.<br><br>This setting allows you to set whether you manage these folders yourself (e.g. creating a second folder and moving to it when you are ready) or whether you let SMF do it, based on criteria, such as when the current directory reaches a given size, or breaking down folders by years or even months on very busy sites.';
$helptxt['dont_show_attach_under_post'] = 'If enabled, the attachments embedded on the post won\'t appear under the post but are still subject to be deleted.';
$helptxt['use_subdirectories_for_attachments'] = 'Stwórz nowe katalogi.';
$helptxt['max_image_height'] = 'As with the maximum width, this setting indicates the maximum height a posted image can be.';
$helptxt['avatar_paranoid'] = 'Zaznaczenie tej opcji umożliwi bardzo rygorystyczne sprawdzanie awatarów. <strong>Uwaga!</strong> Ta szczegółowa kontrola może nie przepuścić nawet prawidłowych awatarów. Zdecydowanie zalecamy używanie tej opcji wraz z przekodowywaniem obrazków w celu próbkowania przez SMF tych, które nie zdadzą testu bezpieczeństwa - jeśli to się powiedzie, zostaną wyczyszczone oraz załadowane. W przeciwnym wypadku, jeśli przekodowywanie jest wyłączone, każdy awatar, który nie przejdzie testu bezpieczeństwa, zostanie odrzucony.';
$helptxt['avatar_reencode'] = 'Zaznaczenie tej opcji umożliwi przekodowywanie załadowanych awatarów. Przekodowywanie oferuje większe bezpieczeństwo. Uwaga, przekodowywanie powoduje wyświetlanie wszystkich animowanych awatarów jako statyczne. <br> Ta funkcja jest dostępna tylko wtedy, gdy moduł GD jest zainstalowany na serwerze.';
$helptxt['cal_enabled'] = 'Kalendarz może być używany do wyświetlania dat urodzin albo ważnych wydarzeń w życiu społeczności.<br><br>
		<strong>Pokazuj dni jako odnośniki do \'Dodaj wydarzenie\'</strong>:<br>To pozwoli użytkownikowi na dodawanie wydarzenia do tego dnia, którego data została wybrana.<br>
		<strong>Pokazuj numery tygodni</strong>:<br>Pokaż, który jest tydzień.<br>
		<strong>Maksymalna liczba dni na przód w indeksie działów</strong>:<br>Jeśli ustawione jest na 7, zostaną pokazane wydarzenia z następnego tygodnia.<br>
		<strong>Pokazuj święta w indeksie działów</strong>:<br>Pokazuj dzisiejsze święta w tablicy kalendarza w indeksie działów.<br>
		<strong>Pokazuj urodziny w indeksie działów</strong>:<br>Pokazuj dzisiejsze urodziny w tabeli kalendarza w indeksie działów.<br>
		<strong>Pokazuj wydarzenia w indeksie działów</strong>:<br>Pokazuj dzisiejsze wydarzenia w tabeli kalendarza w indeksie działów.<br>
		<strong>Domyślny dział do dodawania wydarzeń</strong>:<br>Jaki jest domyślny dział do dodawania wydarzeń?<br>
		<strong>Zezwól na wydarzenia niepowiązane z wiadomościami</strong>:<br>Zezwól użytkownikom wysyłać wydarzenia bez wymagania, aby były powiązane z wiadomością w dziale.<br>
		<strong>Rok pierwszy</strong>:<br>Zaznacz &quot;pierwszy&quot; rok na liście kalendarza.<br>
		<strong>Rok ostatni</strong>:<br>Zaznacz &quot;ostatni&quot; rok na liście kalendarza.<br>
		<strong>Kolor urodzin</strong>:<br>Wybierz kolor tekstu dla urodzin.<br>
		<strong>Kolor wydarzeń</strong>:<br>Wybierz kolor tekstu dla wydarzeń.<br>
		<strong>Kolor świąt</strong>:<br>Wybierz kolor tekstu dla świąt.<br>
		<strong>Zezwól na kilkudniowe wydarzenia</strong>:<br>Zezwól na kilkudniowe wydarzenia.<br>
		<strong>Maksymalna długość trwania wydarzenia (w dniach)</strong>:<br>Wybierz maksymalną ilość dni jaką może trwać dane wydarzenie.<br><br>
		Pamiętaj, że używanie kalendarza (dodawanie wydarzeń, pokazywanie wydarzeń, itp.) może być kontrolowane za pomocą zezwoleń w panelu zezwoleń.';
$helptxt['cal_link_postevent'] = 'This will allow members to post events for that day, when they click on that date';
$helptxt['cal_maxdays_advance'] = 'If this is set to 7, the next week\'s worth of events will be shown';
$helptxt['cal_allow_unlinkedevents'] = 'Allow members to post events without requiring them to be linked with a post in a board';
$helptxt['cal_min_year'] = 'Select the &quot;first&quot; year on the calendar list';
$helptxt['cal_max_year'] = 'Select the &quot;last&quot; year on the calendar list';
$helptxt['cal_maxevent_span'] = 'Select the maximum number of days that an event can span';
$helptxt['localCookies'] = 'SMF używa ciasteczek (cookies) do przechowywania informacji na komputerze użytkownika. Ciasteczka mogą być przechowywane globalnie (mojserwer.com) lub lokalnie (mojserwer.com/sciezka/do/forum).<br><br> Sprawdź tą opcję jeśli występują problemy polegające na automatycznym wylogowywaniu użytkowników.<hr /> Ciasteczka przechowywane globalnie są mniej bezpieczne jeśli są używane na współdzielonym serwerze (np. Tripod).<hr /> Ciasteczka lokalne nie działają poza katalogiem forum, tak więc jeśli Twoje forum jest zainstalowane w www.mojserwer.com/forum, strony w stylu www.mojserwer.com/index.php nie będą w stanie uzyskać dostępu do informacji o koncie użytkownika.<br><br> Globalne ciasteczka są szczególnie polecane gdy używasz SSI.php.';
$helptxt['enableBBC'] = 'Zaznaczenie tej opcji pozwoli użytkownikom na korzystanie w wiadomościach z kodów BBC (Bulletin Board Code), dzięki czemu będą mogli umieszczać obrazki, formatować tekst, itp.';
$helptxt['time_offset'] = 'Nie wszyscy administratorzy chcą aby forum używało tej samej strefy czasowej co serwer. Użyj tej opcji aby ustawić różnicę (w godzinach) między czasem na serwerze a godziną na forum. Dozwolone są wartości ujemne oraz ułamkowe.';
$helptxt['default_timezone'] = 'Strefa czasowa serwera informuje PHP o tym, gdzie znajduje się twój serwer. Powinieneś upewnić się czy to ustawienie jest poprawne, najlepiej według kraju/miasta w którym znajduje się serwer. Więcej informacji znajdziesz na <a href="http://www.php.net/manual/pl/timezones.php" target="_blank">stronie PHP</a>.';
$helptxt['enableEmbeddedFlash'] = '';
$helptxt['timezone_priority_countries'] = 'This setting lets you push the time zones for a certain country or countries to the top of the list of selectabled time zones that is shown when users are configuring their profiles, creating calendar events, etc.<br><br>For example, if many of your forum\'s members live in New Zealand or Fiji, you may enter "NZ,FJ" to make it easier for them to find the most relevant time zones quickly.<br><br>You can find the complete list of ISO country codes by searching the Internet for "<a href="//www.google.com/search?q=iso+3166-1+alpha-2" target="_blank" rel="noopener">ISO 3166-1 alpha-2</a>".';
$helptxt['spamWaitTime'] = 'Tutaj możesz ustawić czas po upływie którego można napisać kolejną wiadomość. Ta opcja chroni przed "spamowaniem" ustalając jak często użytkownicy mogą wysyłać wiadomość.';

$helptxt['enablePostHTML'] = 'Włączenie tej opcji umożliwi korzystanie w wiadomościach z podstawowych znaczników HTML: <ul class="normallist" style="margin-bottom: 0;"> <li>&lt;b&gt;, &lt;u&gt;, &lt;i&gt;, &lt;s&gt;, &lt;em&gt;, &lt;ins&gt;, &lt;del&gt;</li> <li>&lt;a href=&quot;&quot;&gt;</li> <li>&lt;img src=&quot;&quot; alt=&quot;&quot; /&gt;</li> <li>&lt;br /&gt;, &lt;hr /&gt;</li> <li>&lt;pre&gt;, &lt;blockquote&gt;</li> </ul>';

$helptxt['themes'] = 'W tej sekcji możesz zadecydować czy użytkownik może wybrać styl domyślny, jaki styl widzą goście i inne opcje związane ze stylami. Kliknij na dany styl, aby zmienić jego ustawienia.';
$helptxt['theme_install'] = 'Tutaj możesz zainstalować nowe style podając katalog, wgrywając archiwum lub kopiując domyślny styl.<br><br>Pamiętaj że katalog lub archiwum musi zawierać plik <tt>theme_info.xml</tt>.';
$helptxt['xmlnews_enable'] = 'Zezwól na łączenie się z <a href="%1$s?action=.xml;sa=news" target="_blank" class="new_win">Ostatnimi aktualnościami</a> itp. Polecamy ograniczyć rozmiar liczby ostatnich wiadomości/aktualności ze względu na to, że niektóre czytniki RSS je obetną.';
$helptxt['xmlnews_attachments'] = 'Allows links to attachments to be enclosed within your XML/RSS feeds. Turn this on if you want to use your forum as a podcasting, broadcatching, or similar content distribution platform.
	<br><br>
	The "view attachments" permission affects this setting. Members and guests will only see a post\'s attachments in the feed if they can also see the attachments on the post\'s web page. Keep in mind that most feed readers will access your feeds as a guest.
	<br><br>
	Some feed formats only allow one enclosed attachment per post. If a post has multiple attachments, SMF will enclose the largest one in these feeds.';
$helptxt['globalCookies'] = 'Ta opcja włącza ciasteczka działające we wszystkich poddomenach. Na przykład jeśli:<br> twoja strona to http://www.przykład.com/,<br> a Twoje forum to http://forum.przykład.com/,<br> Włączenie tej opcji umożliwi Ci dostęp do ciasteczek forum ze swojej strony. Nie włączaj tej opcji, jeśli na Twoim serwerze są inne poddomeny (np. hacker.przykład.com), których nie kontrolujesz.<br><br> Opcja nie działa jeśli są włączone lokalne ciasteczka.';
$helptxt['globalCookiesDomain'] = 'When using subdomain independent cookies (global cookies), you can specify which domain should be used for them. This should, of course, be set to your main domain - for example, if you are using <em>forum.example.com</em> and <em>www.example.com</em>, the domain is <em>example.com</em> in this case. You should not put the <em>http://</em> or <em>https://</em> part in front of it.';
$helptxt['secureCookies'] = 'Włączenie tej opcji spowoduje wymuszenie oznaczenia cookies stworzonych dla użytkowników Twojego forum jako bezpieczne. Włącz tę opcję tylko wtedy, gdy używasz bezpiecznego protokołu HTTPS, w przeciwnym wypadku nikt nie będzie mógł zalogować się poprawnie!';
$helptxt['securityDisable'] = 'Opcja <em>wyłącza</em> dodatkowe sprawdzanie hasła przy wchodzeniu do sekcji administracyjnej. Nie jest to zalecane!';
$helptxt['securityDisable_why'] = 'Jest to Twoje bieżące hasło. (to samo którego używasz do logowania.)<br><br>Wymuszając ponowne wpisanie hasła, system sprawdza czy na pewno <strong>Ty</strong> chcesz wykonać jakiekolwiek czynności administracyjne.';
$helptxt['securityDisable_moderate'] = 'This <em>disables</em> the additional password check for the moderation page. This is not recommended!';
$helptxt['securityDisable_moderate_why'] = 'This is your current password. (the same one you use to login).<br><br>The requirement to enter this helps ensure that you want to do whatever moderation you are doing, and that it is <strong>you</strong> doing it.';
$helptxt['frame_security'] = 'Modern browsers now understand a security header presented by servers called X-Frame-Options. By setting this option you specify how you want to allow your site to be framed inside a frameset or a iframe. Disable will not send any header and is the most unsecure, however allows the most freedom. Deny will prevent all frames completely and is the most restrictive and secure. Allowing the Same Origin will only allow your domain to issue any frames and provides a middle ground for the previous two options.';
$helptxt['proxy_ip_header'] = 'This is the server header that will be trusted by SMF for containing the actual users IP address. Changing this setting can cause unexpected IP results on members. Please check with your server administrator, CDN provider or proxy administrator prior to changing these settings. Most providers will understand and use HTTP_X_FORWARDED_FOR. You should fill out the list of Servers sending the reverse proxy headers for security to ensure these headers only come from valid sources.';
$helptxt['email_members'] = 'In this message you can use a few &quot;variables&quot;. These are:<br>
	{$board_url} - The URL to your forum.<br>
	{$current_time} - The current time.<br>
	{$member.email} - The current member\'s email.<br>
	{$member.link} - The current member\'s link.<br>
	{$member.id} - The current member\'s id.<br>
	{$member.name} - The current member\'s name. (for personalization).<br>
	{$latest_member.link} - The most recently registered member\'s link.<br>
	{$latest_member.id} - The most recently registered member\'s id.<br>
	{$latest_member.name} - The most recently registered member\'s name.';

$helptxt['failed_login_threshold'] = 'Ustawia liczbę nieudanych prób logowania zanim użytkownik zostanie przekierowany do strony z przypomnieniem hasła.';
$helptxt['loginHistoryDays'] = 'The number of days to keep login history under user profile tracking. The default is 30 days.';
$helptxt['oldTopicDays'] = 'Jeśli ta opcja jest włączona, użytkownik zobaczy ostrzeżenie podczas próby napisania wiadomości w wątku, w którym nikt nic nie napisał w podanym w tym ustawieniu okresie czasu (w dniach). Ustawienie ilości dni na 0 spowoduje wyłączenie pokazywania ostrzeżeń.';
$helptxt['edit_wait_time'] = 'Liczba sekund, w których można jeszcze edytować wiadomość zanim zastanie zapisana informacja o dacie ostatniej modyfikacji.';
$helptxt['edit_disable_time'] = 'Liczba minut po upływie których użytkownik nie będzie mógł edytować napisanej przez siebie wiadomości. Ustaw 0 by wyłączyć.<br><br><em>Pamiętaj: Opcja ta nie wpłynie na użytkowników mających pozwolenie na edycję wiadomości pozostałych użytkowników.</em>';
$helptxt['preview_characters'] = 'This setting sets the number of available characters for the first and last message topic preview.';
$helptxt['posts_require_captcha'] = 'To ustawienie zmusza użytkowników do przejścia weryfikacji anty-spam bot, za każdym razem, kiedy chcą napisać wiadomość na forum. Tylko użytkownicy o ilości napisanych wiadomości, mniejszej niż ustawiona liczba, będą zmuszeni przejść tę procedurę. To powinno pomóc zwalczać spamowanie przez automatyczne skrypty.';
$helptxt['enableSpellChecking'] = 'Włącza sprawdzanie pisowni. Musisz mieć zainstalowaną bibliotekę pspell na serwerze, a Twoja konfiguracja PHP musi być ustawiona do użycia tej biblioteki. Wydaje się że twój serwer ' . ((function_exists('pspell_new') || function_exists('enchant_broker_init')) ? 'MA' : 'NIE MA') . ' tej opcji.';
$helptxt['disable_wysiwyg'] = 'To ustawienie wyłącza wszystkim użytkownikom możliwość korzystania z edytora WYSIWYG (&quot;What You See Is What You Get&quot;) na stronie edycji wiadomości.';
$helptxt['lastActive'] = 'Ustawia liczbę minut przez które ludzie będą widoczni na głównej stronie forum jako aktywni. Domyślnie 15 minut.';

$helptxt['customoptions'] = 'Ta sekcja definiuje opcje dostępne dla użytkownika z listy rozwijalnej. Jest klika kluczowych punktów do zauważenia w tej sekcji: <ul class="normallist"> <li><strong>Opcje Domyślne:</strong> Zależnie, które opcje mają &quot;przycisk radio&quot; zaznaczony, będą one domyślnym wyborem użytkownika gdy otworzy swój profil.</li> <li><strong>Usuwanie Opcji:</strong> Aby usunąć opcję po prostu odznacz ją - wszyscy użytkownicy z zaznaczoną daną opcją, będą mieli ją odznaczoną.</li> <li><strong>Zmiana kolejności Opcji:</strong> Możesz zmienić kolejność opcji poprzez przeniesienie tekstu pomiędzy boksami. Jednakże - ważna uwaga - musisz upewnić się, że <strong>nie</strong> przenosisz tekstu, podczas zmiany kolejności opcji, w innym wypadku dane użytkownika zostaną utracone.</li> </ul>';

$helptxt['autoFixDatabase'] = 'Automatycznie naprawia uszkodzone tabele i przywraca działanie forum tak, jakby nic się nie stało. Może być to użyteczne, ponieważ jedynym sposobem na naprawę jest naprawa tabeli, a dzięki temu forum nie będzie wyłączone dopóki nie dowiesz się o awarii. Zostaniesz powiadomiony emailem jeśli coś takiego się stanie.';
$helptxt['pgFulltextSearch'] = 'This setting defines the language to use for PostgreSQL\'s fulltext search. Choose the language that most closely matches the language your forum actually uses. If your forum\'s language is not listed, or if your forum is multi-lingual, choose the "simple" option. <br>
This setting is independent of your main SMF language settings and not related to the installed language for SMF. <br>
When you change this setting you need to [url=' . $scripturl . '?action=admin;area=managesearch;sa=method]rebuild the fulltext search index[/url].<br>
If a language you need is not listed, ask your database admin to install PostgreSQL language support for that language.';

$helptxt['enableParticipation'] = 'Ta opcja pokazuje małą ikonę przy wątkach, w których użytkownik napisał.';

$helptxt['db_persist'] = 'Ustal stałe połączenie z bazą danych, aby zwiększyć wydajność. Jeśli nie korzystasz z serwera dedykowanego, może to powodować problemy z Twoim hostem.';
$helptxt['ssi_db_user'] = 'Opcjonalne ustawienie, które zezwoli na użycie innej nazwy użytkownika oraz hasła do bazy danych, jeśli używasz SSI.php.';

$helptxt['queryless_urls'] = 'Zmienia trochę format adresów URL tak, aby były one lepiej indeksowane przez wyszukiwarki. Będą one wyglądać mniej więcej tak index.php/topic,1.html.<br><br>Ta funkcja ' . (isset($_SERVER['SERVER_SOFTWARE']) && (strpos($_SERVER['SERVER_SOFTWARE'], 'Apache') !== false || strpos($_SERVER['SERVER_SOFTWARE'], 'lighttpd') !== false) ? '' : 'not') . ' będzie działać na Twoim serwerze.';
$helptxt['minimize_files'] = 'This option will minimize the CSS and JavaScript files used by your forum, reducing the request calls to your server and speeding up load times for your users.<br><br>You should normally leave this option enabled. The only time you might want to disable it temporarily is while you are in the process of altering the CSS or JavaScript files used on your site (for example, when editing your theme files or developing a modification).';
$helptxt['boardindex_max_depth'] = 'This setting controls how many sub-board levels SMF will check when looking for new posts in sub-boards. It also affects which boards are included when the "Count sub-board\'s posts in parent\'s totals" option is enabled.<br><br>For example, if this is set to 1, a sub-board will only be marked "new" on the index page if the sub-board itself contains a new post. If it is set to 2, the sub-board will be marked "new" if there is a new post in the sub-board or in a sub-sub-board. If it is set to 10, the sub-board will be marked "new" if there is a new post in the sub-board, a sub-sub-board, a sub-sub-sub-board, etc., up to 10 levels deep.<br><br>Large, active forums may want to set this value to a low number in order to conserve server resources.';
$helptxt['countChildPosts'] = 'Po włączeniu tej opcji, przy działach zawierających poddziały pojawi się liczba wiadomości będąca sumą poddziałów. <br><br>Może to znacząco spowolnić forum, ale dzięki temu działy z poddziałami niezawierające wiadomości nie będą pokazywać 0 wiadomości.';
$helptxt['allow_ignore_boards'] = 'Zaznaczenie tej opcji umożliwi użytkownikom wybranie działów, które chcieliby ignorować.';
$helptxt['deny_boards_access'] = 'Checking this setting will allow you to deny access to certain boards based on membergroup access';

$helptxt['who_enabled'] = 'Ta opcja pozwala Tobie włączyć lub wyłączyć możliwość sprawdzania użytkownikom kto przegląda forum i co kto robi.';

$helptxt['recycle_enable'] = '&quot;Przywraca&quot; usunięte wątki i wiadomości w określonym dziale.';

$helptxt['enableReportPM'] = 'Ta opcja pozwala Twoim użytkownikom na zgłaszanie otrzymanych prywatnych wiadomości do ekipy administracyjnej. Może być to pomocne przy tropieniu nadużyć systemu prywatnych wiadomości.';
$helptxt['max_pm_recipients'] = 'Ta opcja pozwala na ustawienie maksymalnej ilości odbiorców wiadomości prywatnych, wysyłanych przez użytkownika forum. Może być to użyteczne do powstrzymania spamu wysyłanego przy użyciu systemu PW. Pamiętaj, że użytkownicy z uprawnieniami do wysyłania newsletterów nie są objęci tym ograniczeniem. Wpisanie wartości zerowej spowoduje wyłączenie limitu.';
$helptxt['pm_posts_verification'] = 'Ta opcja wymusi na użytkownikach wprowadzenie kodu z obrazka przy każdym wysyłaniu prywatnej wiadomości. Tylko użytkownicy o liczbie wiadomości poniżej ustawionej liczby będą musieli wpisywać kod. Ta funkcja pomaga w walce z automatycznym spamem.';
$helptxt['pm_posts_per_hour'] = 'Ogranicza liczbę prywatnych wiadomości jaką użytkownik może wysłać w ciągu godziny. Nie wpływa na moderatorów i administrację forum.';

$helptxt['default_personal_text'] = 'Ustawia domyślny tekst w profilu użytkownika w polu &quot;prywatny tekst.&quot; Opcja jest niedostępna gdy prywatny tekst jest wyłączony lub użytkownik ustawił taki tekst podczas rejestracji.';

$helptxt['registration_method'] = 'Ta opcja umożliwia wybór metody rejestracji, przez osoby chcące dołączyć do użytkowników forum. Masz wybór pomiędzy:<br><br>
	<ul class="normallist">
		<li>
			<strong>Rejestracja wyłączona:</strong><br>
				Wyłącza rejestrację, co oznacza, że jedyny sposób na dołączenie do grona użytkowników, to stworzenie konta przez administratora.<br>
		</li><li>
			<strong>Rejestracja natychmiastowa</strong><br>
				Nowi użytkownicy mogą zalogować się i pisać wiadomości bezpośrednio po rejestracji.<br>
		</li><li>
			<strong>Aktywacja użytkownika</strong><br>
				Nowi użytkownicy po rejestracji otrzymają email z odnośnikiem do aktywacji konta. Dopiero po kliknięciu staną się pełnoprawnymi użytkownikami forum. Ta opcja zapobiega podawaniu niepoprawnych adresów email.<br>
		</li><li>
			<strong>Zatwierdzenie użytkownika</strong><br>
				Nowi użytkownicy po rejestracji muszą zaczekać, aż ich rejestrację zatwierdzi administrator.
		</li>
	</ul>';

$helptxt['send_validation_onChange'] = 'Gdy ta opcja jest zaznaczona; wszyscy użytkownicy, którzy zmienią swój adres email w profilu będą musieli reaktywować swoje konto poprzez email wysłany na nowy adres.';
$helptxt['approveAccountDeletion'] = 'When this setting is checked, any user request to delete his own account has to be approved by an administrator';

$helptxt['send_welcomeEmail'] = 'Gdy ta opcja jest włączona nowi użytkownicy otrzymają emaila witającego ich na Twoim forum.';
$helptxt['password_strength'] = 'To ustawienie określa wymaganą siłę haseł użytkowników Twojego forum. Im silniejsze jest hasło, tym trudniej je odgadnąć lub złamać. 
	Dostępne są następujące ustawienia dla siły haseł.
	<ul class="normallist">
		<li><strong>Niska:</strong> Hasło musi mieć długość co najmniej czterech znaków.</li>
		<li><strong>Średnia:</strong> Hasło musi mieć długość co najmniej ośmiu znaków i nie może być częścią nazwy użytkownika lub jego adresu email.</li>
		<li><strong>Wysoka:</strong> To samo, co w Średnim, poza tym, że hasło musi składać się z dużych i małych liter oraz co najmniej jednej cyfry.</li>
	</ul>';
$helptxt['enable_password_conversion'] = 'By enabling this setting, SMF will attempt to detect passwords stored in other formats and convert them to the format SMF uses. Typically this is used for forums converted to SMF, but may have other uses as well. Disabling this prevents a user from logging in using their password after a conversion and they would need to reset their password.';

$helptxt['coppaAge'] = 'Wartość podana w tym polu określa minimalny wiek użytkownika pozwalający na natychmiastową rejestrację na forum.
	Podczas rejestracji użytkownik będzie musiał potwierdzić, czy przekroczył określony wiek. Jeżeli odpowiedź będzie negatywna rejestracja zostanie odrzucona lub zawieszona do momentu potwierdzenia przez dorosłego opiekuna - w zależności od wybranego trybu.
	Jeżeli zostanie wpisane 0 wszelkie restrykcje związane z wiekiem będą ignorowane.';
$helptxt['coppaType'] = 'Jeśli ograniczenia wieku są włączone, to w tym miejscu można wybrać w jaki sposób traktować osoby poniżej wymaganego wieku. Do wyboru są dwa tryby postępowania:
	<ul class="normallist">
		<li>
			<strong>Odrzucenie próby rejestracji:</strong><br>
				Każdy próba rejestracji nowego użytkownika poniżej wymaganego wieku zostanie odrzucona.<br>
		</li><li>
			<strong>Wymóg zatwierdzenia przez rodzica bądź opiekuna</strong><br>
				Każdy nowy użytkownik poniżej wymaganego wieku, musi przesłać zgodę rodziców bądź opiekunów, zanim jego konto zostanie aktywowane. 
				Zostanie też przesłany im standardowy formularz do wypełnienia przez rodziców lub opiekunów, oraz dane kontaktowe, na jaki ma on być wysłany.
		</li>
	</ul>';
$helptxt['coppaPost'] = 'Miejsce na wpisanie danych kontaktowych jest wymagane, tak by rodzice lub opiekunowie małoletnich mogli przesłać formularz ze zgodą. Musi być wypełnione przynajmniej pole adresowe lub numer faksu.';

$helptxt['allow_hideOnline'] = 'Zaznaczając tę opcje pozwolisz użytkownikom na ukrycie swojego statusu online przed innymi użytkownikami (oprócz administratorów). Jeżeli opcja pozostanie wyłączona jedynie osoby moderujące forum będą mogły ukryć swoją obecność. Wyłączenie tej opcji nie zmieni istniejącego statusu użytkownika - powstrzyma ich przed ukrywaniem statusu w przyszłości.';
$helptxt['meta_keywords'] = 'Te słowa-klucze pojawią się w kodzie każdej strony, aby naprowadzić wyszukiwarki internetowe (itp.) na główną zawartość Twojej strony. Powinna to być lista słów, każde słowo powinno być oddzielone przecinkiem oraz bez użycia HTML. Jeśli pozostawisz to pole puste, wtedy ustawiona będzie domyślna lista. Oto jak ona wygląda: <br><div class="smalltext">&quot;PHP, MySQL, bulletin, board, free, open, source, smf, simple, machines, forum&quot;</div>';

$helptxt['latest_themes'] = 'Ten dział pokazuje kilka ostatnich i najpopularniejszych stylów z <a href="http://www.simplemachines.org/" target="_blank" class="new_win">www.simplemachines.org</a>. Może się jednak nie wyświetlić poprawnie, jeśli twój komputer nie jest w stanie znaleźć <a href="http://www.simplemachines.org/" target="_blank" class="new_win">www.simplemachines.org</a>.';

$helptxt['secret_why_blank'] = 'Ze względów bezpieczeństwa odpowiedź na Twoje pytanie (tak jak i na Twoje hasło) jest zakodowana w taki sposób, że tylko SMF może go potwierdzić. Nigdy nie powie Ci (ani nikomu innemu) jaka jest Twoja odpowiedz i hasło.';
$helptxt['moderator_why_missing'] = 'Moderatorzy ustalani są poprzez <a href="%1$s?action=admin;area=manageboards" target="_blank" class="new_win">zarządzanie działami</a> dla każdego działu osobno.';

$helptxt['permissions'] = 'Zezwolenia pozwalają administratorom decydować o dostępie grup użytkowników do różnych czynności na forum.<br><br>Można zarządzać zezwoleniami poprzez działy lub grupy użytkowników klikając w \'Modyfikuj.\'';
$helptxt['permissions_board'] = 'Jeśli dział ma ustawienie \'globalne\', oznacza to, że nie posiada żadnych dodatkowych pozwoleń. Ustawienie \'lokalne\' oznacza, że dział posiada swoje odrębne zezwolenia. Pozwala to na ograniczenie lub zwiększenie dostępu do któregoś z działów, bez konieczności zmian w całym forum.';
$helptxt['permissions_quickgroups'] = 'Ta opcja pozwala na szybkie przyznanie &quot;domyślnych&quot; uprawnień dla grup. <em>Standardowe</em> to zwyczajne prawa użytkownika. <em>Restrykcyjne</em> to takie jakie ma gość. <em>Moderator</em> to prawa jakie posiadają moderatorzy. <em>Obsługa forum</em> daje prawa bardzo zbliżone do tych, które posiada administrator.';
$helptxt['permissions_deny'] = 'Zabronienie jakiejś czynności jest przydatne, jeśli chcesz zmienić pozwolenia konkretnemu użytkownikowi. Możesz też stworzyć grupę użytkowników z odebranymi prawami i dodać tam tych użytkowników.<br><br>Zalecamy ostrożne stosowanie. Po zabronieniu użytkownikowi wybranych czynności na forum, nie będzie on miał do nich dostępu, niezależnie od grupy, do której przynależy.';
$helptxt['permissions_postgroups'] = 'Zezwolenia dla grup opartych na ilości wiadomości pozwalają na dodanie dodatkowych praw użytkownikom, którzy napisali określoną liczbę wiadomości. Tak by np. nagrodzić wiernych użytkowników forum. Te zezwolenia <em>dodają się</em> do zezwoleń z innych grup, do których należą użytkownicy.';
$helptxt['membergroup_guests'] = 'Grupa Goście to wszyscy użytkownicy, którzy nie są zalogowani.';
$helptxt['membergroup_regular_members'] = 'Użytkownikami bez grupy są wszyscy użytkownicy którzy są zarejestrowani, ale nie mają przydzielonej żadnej grupy.';
$helptxt['membergroup_administrator'] = 'Administrator może z definicji robić wszystko i widzieć wszystkie fora. Nie istnieją ustawienia uprawnień dla administratora.';
$helptxt['membergroup_moderator'] = 'Moderatorzy to grupa specjalna. Zezwolenia i ustawienia tej grupy dotyczą moderatorów, ale <em>tylko w działach, w których moderują</em>. Poza tymi działami, ich prawa nie różnią się od praw zwykłych użytkowników.';
$helptxt['membergroups'] = 'W SMF są dwa rodzaje grup użytkowników:
	<ul class="normallist">
		<li><strong>Zwykłe grupy:</strong> To takie grupy, do których użytkownicy nie są przydzielani automatycznie. By przypisać użytkownika do grupy, administrator musi wejść do jego profilu i kliknąć na &quot;ustawienia konta&quot;. Z tego miejsca można przydzielić go do dowolnej liczby istniejących grup.</li>
		<li><strong>Grupy oparte na ilości wiadomości:</strong> W odróżnieniu od zwykłych grup, do grup opartych na ilości wiadomości napisanych przez użytkownika, nie można przydzielić użytkowników. Użytkownicy są przydzielani do nich automatycznie po osiągnięciu określonej liczby wiadomości.</li>
	</ul>';

$helptxt['calendar_how_edit'] = 'Możesz edytować te zdarzenia poprzez kliknięcie na czerwonej gwiazdce (*) zaraz obok ich nazw.';

$helptxt['maintenance_backup'] = 'Tutaj możesz zapisać kopię wszystkich wiadomości, ustawień, użytkowników i innych informacji dotyczących Twojego forum w bardzo dużym pliku.<br><br>Zaleca się, aby dla bezpieczeństwa robić to dość często (np. raz w tygodniu).';
$helptxt['maintenance_rot'] = 'Pozwala <strong>całkowicie</strong> i <strong>nieodwracalnie</strong> usunąć stare wątki. Zaleca się zrobić najpierw kopię na wypadek, gdyby zostało usunięte coś, czego nie chciałeś skasować.<br><br>Używaj tej opcji z należytą ostrożnością.';
$helptxt['maintenance_members'] = 'Pozwala <strong>całkowicie</strong> i <strong>nieodwracalnie</strong> usunąć konta użytkowników z Twojego forum. Zaleca się zrobić najpierw kopię na wypadek, gdyby zostało usunięte coś, czego nie chciałeś skasować.<br><br>Używaj tej opcji z należytą ostrożnością.';

$helptxt['avatar_server_stored'] = 'Ta opcja umożliwia użytkownikom forum na użycie awatarów znajdujących się już na twoim serwerze. Znajdują się one przeważnie w tym samym katalogu co SMF w folderze awatarów.<br>Jako podpowiedź dodamy, że jeśli stworzysz oddzielne katalogi w folderze awatarów, powstaną  &quot;kategorie&quot; awatarów.';
$helptxt['avatar_external'] = 'Kiedy ta funkcja jest włączona, użytkownicy mogą podać własny URL do awatara. Minusem tego jest to, że w niektórych przypadkach użytkownicy mogą użyć zbyt dużego awatara lub z podobizną, której sobie nie życzysz na swoim forum.';
$helptxt['avatar_download_external'] = 'Jeżeli włączysz tę opcję, będzie możliwe pobranie awatarów z zewnętrznego adresu URL podanego przez użytkownika. Awatar będzie traktowany jak wgrany na serwer.';
$helptxt['avatar_action_too_large'] = 'This setting therefore lets you reject images (from other sites) that are too big, or tells the user\'s browser to resize them, or to download them to your server.<br><br>If users put in very large images as their avatars and resize in the browser, it could cause very slow loading for your users - it does not actually resize the file, it just displays it smaller. So a digital photo, for example, would still be loaded in full and then resized only when displayed - so for users this could get quite slow and use a lot of bandwidth.<br><br>On the other hand, downloading them means using your bandwidth and server space, but you also ensure that images are smaller, so it should be faster for users. (Note: downloading and resizing requires either the GD library, or ImageMagick using either the Imagick or MagickWand extensions)';
$helptxt['avatar_upload'] = 'Ta opcja jest podobna do &quot;Zezwól użytkownikom na posiadanie awatarów z innego serwera&quot;, ale masz lepszą kontrolę nad awatarami, możesz zmieniać ich rozmiar a twoi użytkownicy nie muszą posiadać własnego serwera, na którym trzymaliby swoje awatary.<br><br>Jednakże  są pewne minusy tej opcji. Musisz posiadać sporo miejsca na serwerze na awatary swoich forumowiczów.';
$helptxt['avatar_download_png'] = 'Pliki PNG są większe, ale oferują lepszą jakość. Jeśli ta opcja jest odznaczona, zostaną użyte pliki JPEG - które są zwykle mniejsze, ale także gorszej jakości.';

$helptxt['disableHostnameLookup'] = 'Ta opcja wyłącza sprawdzanie nazwy DNS hosta, sprawdzanie nazw na niektórych serwerach jest bardzo wolne. Zauważ, że spowoduje to obniżenie efektywności banowania.';

$helptxt['search_weight_frequency'] = 'Współczynniki wag są używane do zadecydowania, które wiadomości pasujące do wyszukiwania, są najważniejsze. Możesz zmienić wagi, tak by dopasować wyszukiwanie do tego co uważasz za najważniejsze na swoim forum. Na przykład, jeśli używasz forum głównie do pisania aktualności, to ważniejsza może być data wysłania wiadomości i tam powinna być najwyższa waga. Wszystkie liczby wag powinny być dodatnimi liczbami całkowitymi. Wszystkie wagi są powiązane.<br><br>Ten współczynnik bazuje na częstości występowania. Zlicza liczbę pasujących do wyszukiwania wiadomości i dzieli je przez liczbę wiadomości w wątku.';
$helptxt['search_weight_age'] = 'Współczynniki wag są używane do zadecydowania, które wiadomości pasujące do wyszukiwania, są najważniejsze. Możesz zmienić wagi, tak by dopasować wyszukiwanie do tego co uważasz za najważniejsze na swoim forum. Na przykład, jeśli używasz forum głównie do pisania aktualności, to ważniejsza może być data wysłania wiadomości i tam powinna być najwyższa waga. Wszystkie liczby wag powinny być dodatnimi liczbami całkowitymi. Wszystkie wagi są powiązane.<br><br>Ten współczynnik przydziela tym większą ważność im nowsza wiadomość.';
$helptxt['search_weight_length'] = 'Współczynniki wag są używane do zadecydowania, które wiadomości pasujące do wyszukiwania, są najważniejsze. Możesz zmienić wagi, tak by dopasować wyszukiwanie do tego co uważasz za najważniejsze na swoim forum. Na przykład, jeśli używasz forum głównie do pisania aktualności, to ważniejsza może być data wysłania wiadomości i tam powinna być najwyższa waga. Wszystkie liczby wag powinny być dodatnimi liczbami całkowitymi. Wszystkie wagi są powiązane.<br><br>Ten współczynnik bazuje na rozmiarze wątku. Im więcej w nim wiadomości, tym bardziej jest ważny.';
$helptxt['search_weight_subject'] = 'Współczynniki wag są używane do zadecydowania, które wiadomości pasujące do wyszukiwania, są najważniejsze. Możesz zmienić wagi, tak by dopasować wyszukiwanie do tego co uważasz za najważniejsze na swoim forum. Na przykład, jeśli używasz forum głównie do pisania aktualności, to ważniejsza może być data wysłania wiadomości i tam powinna być najwyższa waga. Wszystkie liczby wag powinny być dodatnimi liczbami całkowitymi. Wszystkie wagi są powiązane.<br><br>Ten współczynnik daje większą wagę wiadomościom, w których wyszukiwana fraza znajduje się w temacie wątku.';
$helptxt['search_weight_first_message'] = 'Współczynniki wag są używane do zadecydowania, które wiadomości pasujące do wyszukiwania, są najważniejsze. Możesz zmienić wagi, tak by dopasować wyszukiwanie do tego co uważasz za najważniejsze na swoim forum. Na przykład, jeśli używasz forum głównie do pisania aktualności, to ważniejsza może być data wysłania wiadomości i tam powinna być najwyższa waga. Wszystkie liczby wag powinny być dodatnimi liczbami całkowitymi. Wszystkie wagi są powiązane.<br><br>Ten współczynnik sprawdza czy wyszukiwana fraza znajduje się w pierwszej wiadomości wątku.';
$helptxt['search_weight_sticky'] = 'Współczynniki wag są używane do zadecydowania, które wiadomości pasujące do wyszukiwania, są najważniejsze. Możesz zmienić wagi, tak by dopasować wyszukiwanie do tego co uważasz za najważniejsze na swoim forum. Na przykład, jeśli używasz forum głównie do pisania aktualności, to ważniejsza może być data wysłania wiadomości i tam powinna być najwyższa waga. Wszystkie liczby wag powinny być dodatnimi liczbami całkowitymi. Wszystkie wagi są powiązane.<br><br>Ten współczynnik przydziela większą ważność wątkom przyklejonym.';
$helptxt['search'] = 'Tutaj możesz dostosować wszystkie ustawienia dla funkcji wyszukiwania. Nie możesz tutaj ustawić kto ma do niej dostęp. Aby to zrobić przejdź do ekranu \'zarządzaj zezwoleniami\' w panelu administracyjnym.';
$helptxt['search_why_use_index'] = 'Indeks wyszukiwania może w znaczny sposób przyspieszyć wyszukiwanie na forum. Szczególnie gdy liczba wiadomości na forum jest bardzo duża, wyszukiwanie bez indeksu może zająć dużo czasu i znacznie obciążać bazę danych. Jeśli ilość wiadomości na Twoim forum wzrośnie powyżej 50 tysięcy, weź pod uwagę stworzenie indeksu, by zwiększyć wydajność Twojego forum.<br><br>Weź jednak pod uwagę, że indeks wyszukiwania może zająć sporo miejsca. Indeks pełnotekstowy jest wbudowany w indeks MySQL. Jest stosunkowo niewielki (podobnych rozmiarów co tabela wiadomości), lecz nie wszystkie słowa są indeksowane, a niektóre wyszukiwania i tak okazują się wolne. Indeks wybiórczy jest często większy (zależnie od konfiguracji do 3 razy większy niż tabela wiadomości), lecz jego wydajność jest większa od indeksu pełnotekstowego i nie jest zależna od rodzaju wyszukiwań.';

$helptxt['see_admin_ip'] = 'Adresy IP są pokazywane administratorom i moderatorom w celu ułatwienia moderacji i umożliwienia śledzenia osób, które robią złe rzeczy na forum. Pamiętaj, że adresy IP nie zawsze mogą być identyfikowane, a wiele osób zmienia swój adres IP co jakiś czas.<br><br>Użytkownicy widzą swoje własne adresy IP.';
$helptxt['see_member_ip'] = 'Twój adres IP jest pokazywany jedynie Tobie i moderatorom. Pamiętaj że ta informacja nie identyfikuje jednoznacznie ludzi, ponieważ adresy IP zwykle się zmieniają okresowo<br><br>Nie możesz sprawdzić adresów IP innych członków, a oni twojego.';
$helptxt['whytwoip'] = 'SMF używa różnorodnych metod detekcji adrsu IP użytkownika. Zwykle metody te, dają ten sam rezultat, czyli jeden adres IP, ale w niektórych sytuacjach, może zostać wykryty więcej niż jeden adres IP. W tym przypadku SMF pokaże oba adresy i użyje ich do sprawdzenia listy zbanowanych adresów. Możesz kliknąć w którykolwiek adres aby go śledzić lub zbanować, jeśli to konieczne.';

$helptxt['ban_cannot_post'] = 'Ban \'Nie może wysyłać wiadomości\' włącza forum w tryb tylko-do-odczytu dla banowanego użytkownika. Użytkownik nie może tworzyć nowych wątków, odpowiadać na istniejące, wysyłać prywatnych wiadomości oraz oddawać głosów w ankietach. Zbanowany użytkownik może nadal odczytywać prywatne wiadomości oraz wątki.<br><br>Wiadomość ostrzegawcza jest wyświetlana użytkownikowi jeśli został zbanowany w ten sposób.';

$helptxt['posts_and_topics'] = '	<ul class="normallist">
		<li>
			<strong>Ustawienia wiadomości</strong><br>
			Tu możesz zmienić ustawienia związane z pisaniem wiadomości i sposobem ich wyświetlania, a także włączyć sprawdzanie ortografii (jeśli serwer to umożliwia).
		</li><li>
			<strong>Bulletin Board Code</strong><br>
			Tu włączysz możliwość formatowania wiadomości, oraz możesz wybrać które z kodów mają być dostępne dla użytkowników.
		</li><li>
			<strong>Słowa cenzurowane</strong>
			By utrzymać słownictwo forum pod kontrolą, możesz ustawić które słowa zostaną wymienione na ich \'poprawne\' odpowiedniki.
		</li><li>
			<strong>Ustawienia wątków</strong>
			Tu możesz zmieniać ustawienia dotyczące wątków: ilość na stronę, ilość potrzebna by oznaczyć wątek jako gorący, opcje przyklejonych wątków itp.
		</li>
	</ul>';

$helptxt['spider_mode'] = 'Sets the logging level.<br>
Standard - Logs minimal spider activity.<br>
Moderate - Provides more accurate statistics.<br>
Aggressive - Same as &quot;Moderate&quot;, but logs data about each page visited.';

$helptxt['spider_group'] = 'Ustawiając uprawnienia według grupy, spowodujesz, że kiedy gość zostanie rozpoznany jako robot, jego uprawnienia zmienią się ze standardowych gościa, na uprawnienia grupy, którą tu ustawisz. Możesz użyć tej opcji do ograniczenia dostępu silnikom wyszukiwarek. Przykładowo: Stwórz grupę o nazwie &quot;Roboty&quot; i ustaw ją tutaj. Możesz teraz zabrać tej grupie możliwość oglądania profili użytkowników, co jednocześnie uniemożliwi robotom indeksowanie profili użytkowników Twojego forum. <br>Uwaga: Detekcja robotów nie jest idealna i może być symulowana przez użytkowników, dlatego nie ma gwarancji, że ograniczenia będą zastosowane tylko do silników wyszukiwarek, które dodałeś.';
$helptxt['show_spider_online'] = 'Te ustawienia pozwolą Ci wybrać, czy roboty powinny być wymienione na liście użytkowników online w indeksie działu i stronie &quot;Kto jest online&quot;. Dostępne opcje to:
	<ul class="normallist">
		<li>
			<strong>Wcale</strong><br>
			Roboty będą po prostu wyświetlane jako goście dla wszystkich użytkowników.
		</li><li>
			<strong>Pokaż ilość robotów</strong><br>
			Indeks działu wyświetli liczbę robotów aktualnie odwiedzających forum.
		</li><li>
			<strong>Pokaż Nazwy Robotów</strong><br>
			Każda nazwa robota będzie wyświetlana, więc użytkownicy mogą zobaczyć ile robotów aktualnie odwiedza forum - efekt odnosi się do Indeksu działu jak i strony Kto jest online.
		</li><li>
			<strong>Pokaż Nazwy Robotów - Tylko dla Administratora</strong><br>
			Jak wyżej z wyjątkiem tego, że tylko Administratorzy mogą zobaczyć status robotów - dla pozostałych użytkowników roboty ukazują się jako goście.
		</li>
	</ul>';

$helptxt['birthday_email'] = 'Wybierz schemat mailowych życzeń urodzinowych. Podgląd będzie widoczny w polach Tytuł Maila i w Treść Maila.<br><strong>Zauważ:</strong> Ustawienie tej opcji nie aktywuje automatycznie mailów urodzinowych. Aby aktywować maile urodzinowe użyj <a href="%1$s?action=admin;area=scheduledtasks;%3$s=%2$s" target="_blank" class="new_win">Menadżera Zadań</a> i aktywuj zadanie rozsyłania maili urodzinowych.';
$helptxt['pm_bcc'] = 'Kiedy wysyłasz Prywatną Wiadomość, możesz wybrać odbiorców jako UDW (Ukryte Do Wiadomości);. Odbiorcy UDW, nie będą widoczni dla pozostałych adresatów wiadomości.';

$helptxt['move_topics_maintenance'] = 'Ta opcja pozwoli Ci na przesunięcie wszystkich wiadomości z wybranego forum na inne forum.';
$helptxt['maintain_reattribute_posts'] = 'Możesz użyć tej funkcji, jeśli chcesz przypisać wiadomości napisane przez gości do zarejestrowanego użytkownika. Jest to przydatne np. w sytuacji, gdy użytkownik usunął swoje konto, później zmienił zdanie i chce, aby jego stare wiadomości, były skojarzone z nowym kontem użytkownika.';
$helptxt['chmod_flags'] = 'Możesz ręcznie ustawić zezwolenia plikom, które zaznaczyłeś. Aby to zrobić, wpisz CHMOD jako wartość numeryczną. Pamiętaj - te zmiany nie odniosą skutku w systemach operacyjnych Microsoft Windows.';

$helptxt['postmod'] = 'Ta sekcja pozwala członkom zespołu moderatorów (z odpowiednimi uprawnieniami) akceptować odpowiedzi i wątki zanim zostaną pokazane.';

$helptxt['field_show_enclosed'] = 'Osadza w HTML lub tekst wprowadzone przez użytkownika dane. Pozwoli Ci na dodanie większej ilości protokołów (komunikatorów), obrazków itp. Dla przykładu:<br><br>
		&lt;a href="http://strona.pl/{INPUT}"&gt;&lt;img src="{DEFAULT_IMAGES_URL}/icon.gif" alt="{INPUT}" /&gt;&lt;/a&gt;<br><br>
		Zauważ, że możesz użyć kilka zmiennych:<br>
		<ul class="normallist">
			<li>{INPUT} - Wstawia zawartość wprowadzoną przez użytkownika.</li>
			<li>{SCRIPTURL} - Adres forum.</li>
			<li>{IMAGES_URL} - Adres folderu z obrazkami obecnego stylu.</li>
			<li>{DEFAULT_IMAGES_URL} - Adres folderu z obrazkami domyślnego stylu.</li>
		</ul>';

$helptxt['custom_mask'] = 'Maska wprowadzania jest ważna dla bezpieczeństwa Twojego forum. Sprawdzenie maską wpisanych przez użytkownika danych ubezpieczy forum przed użyciem pól w niepowołany sposób. Oto lista prosty wyrażeń regularnych:<br><br>
	<div class="smalltext" style="margin: 0 2em">
		&quot;~[A-Za-z]+~&quot; - Sprawdza wszystkie wielkie i małe litery alfabetu.<br>
		&quot;~[0-9]+~&quot; - Sprawdza wszystkie cyfry.<br>
		&quot;~[A-Za-z0-9]{7}~&quot; - Sprawdza wszystkie wielkie i małe litery alfabetu oraz cyfry, lecz zezwala na tylko siedem znaków.<br>
		&quot;~[^0-9]?~&quot; - Zabrania jakiejkolwiek cyfry.<br>
		&quot;~^([A-Fa-f0-9]{3}|[A-Fa-f0-9]{6})$~&quot; - Pozwala tylko na 3 lub 6 kodów szesnastkowych.<br>
	</div><br><br>
	Dodatkowo mogą zostać zdefiniowane specjalne metaznaki ?+*^$ oraz {xx}.
	<div class="smalltext" style="margin: 0 2em">
		? - Jeden lub żaden znak.<br>
		+ - Jeden lub więcej znaków.<br>
		* - Żaden lub więcej znaków<br>
		{xx} - Konkretna liczba znaków.<br>
		{xx,} - Konkretna liczba lub więcej znaków.<br>
		{,xx} - Konkretna liczba lub mniej znaków.<br>
		{xx,yy} - Liczba znaków pomiędzy jedną a drugą liczbą.<br>
		$ - Początek ciągu.<br>
		^ - Koniec ciągu.<br>
		\\ - Anulowanie znaczenia symboli.<br>
	</div><br><br>
	Więcej informacji oraz zaawansowane techniki znajdziesz w internecie.';

$helptxt['topic_move_any'] = 'If checked, users will be allowed to move topics to any board they can see. Otherwise, they will only be able to move them to boards where they can post new topics.';

$helptxt['alert_pm_new'] = 'Notifications of new personal messages do not appear in the Alerts pane, but appear in the "My Messages" list instead.';
$helptxt['alert_event_new'] = 'This will send out an alert or email as requested if there is a new calendar event added. However, if that event is posted and a topic is added, you will not get an alert for the event if you\'re already following that board - the alert from following the board would cover this.';

$helptxt['force_ssl'] = '<strong>Test SSL and HTTPS on your server properly before enabling this, it may cause your forum to become inaccessible.</strong> Enable maintenance mode if you are unable to access the forum after enabling this.<br><br><strong>Changing this setting will update your forum\'s primary URL, as well as the URLs for your theme files and images, smileys, and avatars, setting them to either http: or https: based on your selection. Customized URLs will not be affected.</strong>';
$helptxt['image_proxy_enabled'] = 'Required for embedding external images when in full SSL';
$helptxt['image_proxy_secret'] = 'Keep this a secret, protects your forum from hotlinking images. Change it in order to render current hotlinked images useless';
$helptxt['image_proxy_maxsize'] = 'Maximum image size that the SSL image proxy will cache: bigger images will be not be cached. Cached images are stored in your SMF cache folder, so make sure you have enough free space.';

$helptxt['enable_sm_stats'] = 'If enabled, this will allow Simple Machines to visit your site once a month to collect basic statistics. This will help us make decisions as to which configurations to optimize the software for. For more information please visit our <a href="https://www.simplemachines.org/about/stats.php" target="_blank" rel="noopener">info page</a>.';

$helptxt['field_reg_require'] = 'If this field is required during registration, it will also be required on profile changes.';

$helptxt['cron_is_real_cron'] = 'By default, SMF adds to every page a small bit of JavaScript that prompts the user\'s browser to trigger SMF\'s cron.php in the background. This approach allows SMF to execute its scheduled tasks on a regular basis without requiring the admin to do any extra server configuration. However, some admins might prefer to configure their servers to directly execute cron.php on a regular basis. If you have done this, you can disable the JavaScript method.<br><br><strong>Note:</strong> Configuring your server to run scheduled tasks this way cannot be done from within SMF. You will need to use your server configuration software to do so. Typical tools for this purpose include <code>cron</code> (for Linux servers), <code>schtasks.exe</code> (for Windows servers), and <code>launchd</code> (for macOS servers). Most web hosting companies provide some sort of control panel interface to allow their customers to access these tools.<br><br>The path and URL for your forum\'s cron.php are:<br>Path: ' . $boarddir . '/cron.php<br>URL: ' . $boardurl . '/cron.php';

$helptxt['languages_txt'] = 'These language entries are used throughout SMF to define localized versions of text for different languages.<br><br>If you see a value like <code>&#37;1$s</code> in an entry, it is a placeholder that SMF fills in with a real value at runtime. Make sure to keep such placeholders in your customized text.';
$helptxt['languages_helptxt'] = 'These language entries are used to show floating help text popups (like this one).';
$helptxt['languages_editortxt'] = 'These language entries are used for user interface elements in the post editor.';
$helptxt['languages_tztxt'] = 'These language entries define custom descriptions for entire time zones.<br><br>Each of these language entries uses a specific location, such as <code>Africa/Khartoum</code> or <code>America/New_York</code>, to represent all locations that share its time zone, and then defines a custom description to use for that time zone.<br><br>If no description is set for a given time zone, SMF will generate one using a list of locations within that time zone. If a location is set for a given time zone, but the description is empty, SMF will generate a description in the same way, but will make sure to put the defined location first in the list.';
$helptxt['languages_txt_for_timezones'] = 'These language entries allow you to define custom names for individual locations anywhere they might be used in a context related to time zones.<br><br>For example, you can tell SMF to show "Greenland" for the location "America/Godthab" instead of "Godthab".';
$helptxt['languages_native_name'] = 'The language\'s name for itself, represented in its own script.';
$helptxt['languages_character_set'] = 'The character encoding used for this language. As of SMF 2.1, this should always be "UTF-8".';
$helptxt['languages_locale'] = 'The locale code is used to determine various formatting conventions, etc.<br><br>The locale code typically takes the form of a two character language code, optionally followed by an underscore and a two character country code. For example, <code>en</code> would identify generic English, while <code>en_AU</code> would identify Australian English in particular.';
$helptxt['languages_rtl'] = 'Check this box if this language reads from right to left (e.g. Hebrew, Arabic).';
$helptxt['languages_dictionary'] = 'This defines the main language dictionary that will be used by the <a href="https://php.net/function.pspell-new" target="_blank" rel="noopener">pSpell</a> spellchecker (if installed).';
$helptxt['languages_spelling'] = 'This defines the language variant that will be used by the <a href="https://php.net/function.pspell-new" target="_blank" rel="noopener">pSpell</a> spellchecker. For many languages this is not applicable.';
$helptxt['languages_recaptcha'] = 'The language code to use for the reCAPTCHA verification widget.<br><br>See Google\'s reCAPTCHA documentation for its <a href="https://developers.google.com/recaptcha/docs/language" target="_blank" class="bbc_link">list of supported languages</a>.';

?>