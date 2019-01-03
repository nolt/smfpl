<?php
// Version: 2.1 Beta 3; ManageBoards

$txt['boards_and_cats'] = 'Zarządzaj działami i kategoriami';
$txt['order'] = 'Porządek';
$txt['full_name'] = 'Pełna nazwa';
$txt['name_on_display'] = 'Ta nazwa będzie wyświetlana.';
$txt['boards_and_cats_desc'] = 'Tutaj możesz modyfikować kategorie i działy twojego forum. Jeśli chcesz dodać kilku moderatorów zrób to w ten sposób: <em>&quot;nazwa_użytkownika&quot;, &quot;nazwa_użytkownika&quot;</em>\' (muszą to być nazwy użytkowników, a nie nazwy wyświetlane!).<br>Aby utworzyć nowy dział, kliknij przycisk Dodaj dział, dla utworzenia działu podrzędnego wybierz "Podrzędny..." z rozwijanego menu podczas tworzenia nowego działu.';
$txt['parent_members_only'] = 'Wszyscy użytkownicy';
$txt['parent_guests_only'] = 'Goście';
$txt['catConfirm'] = '';
$txt['cat_delete_confirm'] = 'Do you really want to delete this category?';
$txt['boardConfirm'] = '';
$txt['board_delete_confirm'] = 'Do you really want to delete this board?';

$txt['catEdit'] = '';

$txt['cat_edit'] = 'Edit Category';
$txt['collapse_enable'] = 'Zwijane';
$txt['collapse_desc'] = 'Pozwól użytkownikom zwinąć tę kategorię';
$txt['catModify'] = '';
$txt['cat_modify'] = '(modify)';

$txt['mboards_order_after'] = 'Po ';
$txt['mboards_order_inside'] = 'Wewnątrz ';
$txt['mboards_order_first'] = 'na pierwszym miejscu';

$txt['mboards_new_board'] = 'Dodaj dział';
$txt['mboards_new_cat_name'] = 'Nowa kategoria';
$txt['mboards_add_cat_button'] = 'Dodaj kategorię';
$txt['mboards_new_board_name'] = 'Nowy dział';

$txt['mboards_name'] = 'Nazwa';
$txt['mboards_modify'] = 'modyfikuj';
$txt['mboards_permissions'] = 'Zezwolenia';
// Don't use entities in the below string.
$txt['mboards_permissions_confirm'] = 'Czy na pewno chcesz aby ten dział podlegał lokalnym pozwoleniom?';

$txt['mboards_delete_cat'] = 'Usuń kategorię';
$txt['mboards_delete_board'] = 'Usuń dział';

$txt['mboards_delete_cat_contains'] = 'Usunięcie tej kategorii spowoduje usunięcie działów jej podległych, włącznie ze wszystkimi wątkami, wiadomościami i załącznikami przynależnymi każdemu z tych działów';
$txt['mboards_delete_option1'] = 'Usuń kategorię i wszystkie podległe jej działy.';
$txt['mboards_delete_option2'] = 'Usuń kategorię i przenieś wszystkie podległe jej działy do';
$txt['mboards_delete_board_contains'] = 'Usunięcie tego działu będzie także oznaczało przeniesienie wszystkich poddziałów włącznie z ich tematami, wypowiedziami i załącznikami';
$txt['mboards_delete_board_option1'] = 'Usuń dział i przenieś jego działy podrzędne do poziomu kategorii.';
$txt['mboards_delete_board_option2'] = 'Usuń dział i przenieś wszystkie jego poddziały do';
$txt['mboards_delete_what_do'] = 'Zaznacz, co zrobić z tymi działami';
$txt['mboards_delete_confirm'] = 'Potwierdź';
$txt['mboards_delete_cancel'] = 'Anuluj';

$txt['mboards_category'] = 'Kategoria';
$txt['mboards_description'] = 'Opis';
$txt['mboards_description_desc'] = 'Krótki opis Twojego działu. HTML jest zabronione, możesz użyć następujących tagów BBC: {allowed_tags}';
$txt['mboards_cat_description_desc'] = 'Krótki opis Twojej kategorii. HTML jest zabronione, możesz użyć następujących tagów BBC: {allowed_tags}';
$txt['mboards_groups'] = 'Dozwolone grupy';
$txt['mboards_groups_desc'] = 'Grupy mające dostęp do tego działu.<br><em>Informacja: jeśli użytkownik jest w jakiejkolwiek zaznaczonej grupie, będzie miał dostęp do tego działu.</em>';
$txt['mboards_groups_regular_members'] = 'Grupa zawiera wszystkich użytkowników którzy nie mają przydzielonej podstawowej grupy.';
$txt['mboards_groups_post_group'] = 'Grupa oparta o liczbę wiadomości.';
$txt['mboards_moderators'] = 'Moderatorzy';
$txt['mboards_moderators_desc'] = 'Użytkownicy ze specjalnymi przywilejami w tym dziale.';
$txt['mboards_moderator_groups'] = 'Grupa Moderatorów';
$txt['mboards_moderator_groups_desc'] = 'Grupy których członkowie posiadają zezwolenia moderacyjne na tym forum. Zauważ że ograniczenie to dotyczy grup które nie są oparte o liczbę wiadomości lub nie są ukryte.';
$txt['mboards_count_posts'] = 'Licz wiadomości';
$txt['mboards_count_posts_desc'] = 'Odpowiedzi i nowe wątki podwyższają liczbę wiadomości u użytkowników.';
$txt['mboards_unchanged'] = 'Nie zmieniony';
$txt['mboards_theme'] = 'Styl działu';
$txt['mboards_theme_desc'] = 'Tutaj możesz zmienić wygląd forum tylko wewnątrz tego działu.';
$txt['mboards_theme_default'] = '(domyślny styl forum.)';
$txt['mboards_override_theme'] = 'Zignoruj styl wybrany przez użytkownika';
$txt['mboards_override_theme_desc'] = 'Używaj domyślnego stylu tego forum, nawet jeśli użytkownik wybrał inny.';

$txt['mboards_redirect'] = 'Przekieruj na adres w sieci';
$txt['mboards_redirect_desc'] = 'Włącz tą opcję aby przekierować każdego kto kliknie w to forum do innego adresu w sieci.';
$txt['mboards_redirect_url'] = 'Adres przekierowujący użytkowników do';
$txt['mboards_redirect_url_desc'] = 'Na przykład: &quot;http://www.simplemachines.org&quot;.';
$txt['mboards_redirect_reset'] = 'Zresetuj licznik przekierowań';
$txt['mboards_redirect_reset_desc'] = 'Wybranie tej opcji spowoduje zresetowanie do zera liczby przekierowań dla tego forum.';
$txt['mboards_current_redirects'] = 'Obecnie: %1$s';

$txt['mboards_order_before'] = 'Przed';
$txt['mboards_order_child_of'] = 'Podrzędny';
$txt['mboards_order_in_category'] = 'W kategorii';
$txt['mboards_current_position'] = 'Obecna pozycja';
$txt['no_valid_parent'] = 'Dział %1$s nie ma działu nadrzędnego. Użyj funkcji \'znajdź i usuń błędy\' aby to naprawić.';

$txt['mboards_recycle_disabled_delete'] = 'Uwaga: Musisz utworzyć alternatywny dział jako kosz przed usunięciem obecnego.';

$txt['mboards_settings_desc'] = 'Edytuj ustawienia działów i kategorii.';
$txt['groups_manage_boards'] = 'Grupy użytkowników którym wolno zarządzać działami i kategoriami';
$txt['mboards_settings_submit'] = 'Zapisz';
$txt['recycle_enable'] = 'Włącz zachowanie usuniętych wątków';
$txt['recycle_board'] = 'Dział dla usuniętych wątków';
$txt['redirect_board_desc'] = 'Dział który przekieruje odwiedzającego użytkownika';
$txt['recycle_board_unselected_notice'] = 'Włączyłeś opcję usuwania wątków bez wybrania działu do którego mają być przenoszone. Opcja ta nie zostanie włączona dopóki nie wybierzesz działu oznaczonego jako kosz.';
$txt['boardindex_max_depth'] = 'Maximum depth of sub-boards to check for new posts, etc.';
$txt['countChildPosts'] = 'Uwzględniaj działy podrzędne przy zliczaniu wiadomości';
$txt['allow_ignore_boards'] = 'Zezwól na ignorowanie for';
$txt['deny_boards_access'] = 'Włącz tą opcję aby zablokować dostęp do działu użytkownikom którzy są przydzielenie do grupy użytkowników';
$txt['boardsaccess_option_desc'] = 'Dla każdego zezwolenia możesz wybrać \'Allow\' (A), \'Disallow\' (X), or <span class="alert">\'Deny\' (D)</span>.<br><br>Jeśli zabronisz dostępu, każdy użytkownik - (wraz z moderatorem) - w tej grupie nie będzie miał dostępu.<br>Dlatego powinieneś używać opcji Deny bardzo ostrożnie i tylko wtedy gdy jest to <strong>konieczne</strong>. Disallow z kolei zabrania dostępu tylko w przypadku gdy nie udzielono innego zezwolenia.';

$txt['mboards_select_destination'] = 'Zaznacz cel dla forum \'<strong>%1$s</strong>\'';
$txt['mboards_cancel_moving'] = 'Anuluj przenoszenie';
$txt['mboards_move'] = 'przenieś';

$txt['mboards_no_cats'] = 'Nie ma obecnie żadnych skonfigurowanych kategorii lub działów.';

?>