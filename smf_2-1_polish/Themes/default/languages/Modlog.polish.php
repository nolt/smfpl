<?php
// Version: 2.1 Beta 3; Modlog

$txt['modlog_date'] = 'Data';
$txt['modlog_member'] = 'Użytkownik';
$txt['modlog_position'] = 'Pozycja';
$txt['modlog_action'] = 'Akcja';
$txt['modlog_ip'] = 'IP';
$txt['modlog_search_result'] = 'Wyniki wyszukiwania';
$txt['modlog_total_entries'] = 'Wejść w sumie';
$txt['modlog_ac_approve_topic'] = 'Zatwierdzony wątek &quot;{topic}&quot; napisany przez &quot;{member}&quot;';
$txt['modlog_ac_unapprove_topic'] = 'Niezatwierdzony wątek &quot;{topic}&quot; przez &quot;{member}&quot;';
$txt['modlog_ac_approve'] = 'Wiadomość &quot;{subject}&quot; w &quot;{topic}&quot; zatwierdzona przez &quot;{member}&quot;';
$txt['modlog_ac_unapprove'] = 'Niezatwierdzona wiadomość &quot;{subject}&quot; w &quot;{topic}&quot; przez &quot;{member}&quot;';
$txt['modlog_ac_lock'] = 'Zamknięty &quot;{topic}&quot;';
$txt['modlog_ac_warning'] = '{member} ostrzeżony za &quot;{message}&quot;';
$txt['modlog_ac_unlock'] = 'Odblokowany &quot;{topic}&quot;';
$txt['modlog_ac_sticky'] = 'Przyklejony &quot;{topic}&quot;';
$txt['modlog_ac_unsticky'] = 'Odklejony &quot;{topic}&quot;';
$txt['modlog_ac_delete'] = '&quot;{subject}&quot; napisany przez &quot;{member}&quot; usunięty z &quot;{topic}&quot;';
$txt['modlog_ac_delete_member'] = 'Użytkownik &quot;{name}&quot; usunięty';
$txt['modlog_ac_remove'] = 'Wątek &quot;{topic}&quot; usunięty z &quot;{board}&quot;';
$txt['modlog_ac_modify'] = 'Edytowany &quot;{message}&quot; napisany przez &quot;{member}&quot;';
$txt['modlog_ac_merge'] = 'Scal wątki aby utworzyć &quot;{topic}&quot;';
$txt['modlog_ac_split'] = 'Podziel &quot;{topic}&quot; aby stworzyć &quot;{new_topic}&quot;';
$txt['modlog_ac_move'] = '&quot;{topic}&quot; przeniesiony z &quot;{board_from}&quot; do &quot;{board_to}&quot;';
$txt['modlog_ac_profile'] = 'Edytuj profil &quot;{member}&quot;';
$txt['modlog_ac_pruned'] = 'Wyczyść wiadomości starsze niż {days} dni';
$txt['modlog_ac_news'] = 'Edytuj nowości';
$txt['modlog_ac_clearlog_moderate'] = 'Wyczyszczony log moderacji';
$txt['modlog_ac_clearlog_admin'] = 'Wyczyszczony log administracyjny';
$txt['modlog_enter_comment'] = 'Wejdź w komentarz moderatora';
$txt['modlog_moderation_log'] = 'Mod Log';
$txt['modlog_moderation_log_desc'] = 'Niżej znajduje się lista wszystkich akcji podejmowanych przez moderatorów twojego forum.';
$txt['modlog_no_entries_found'] = 'Brak wpisów.';
$txt['modlog_remove'] = 'Usuń';
$txt['modlog_removeall'] = 'Usuń wszystkie';
$txt['modlog_remove_selected_confirm'] = 'Czy aby na pewno chcesz usunąć wybrane wartości w logu?';
$txt['modlog_remove_all_confirm'] = 'Czy na pewno chcesz całkowicie wyczyścić logi?';
$txt['modlog_go'] = 'Idź';
$txt['modlog_add'] = 'Dodaj';
$txt['modlog_search'] = 'Szybkie wyszukiwanie';
$txt['modlog_by'] = 'przez';
$txt['modlog_id'] = '<em>Skasowane - ID:%1$d</em>';

$txt['modlog_ac_add_warn_template'] = 'Dodany szablon ostrzeżeń: &quot;{template}&quot; ';
$txt['modlog_ac_modify_warn_template'] = 'Edytowany szablon ostrzeżeń: &quot;{template}&quot;';
$txt['modlog_ac_delete_warn_template'] = 'Skasowany szablon ostrzeżeń: &quot;{template}&quot;';

$txt['modlog_ac_ban'] = 'Ban dodany:';
$txt['modlog_ac_ban_remove'] = 'Usunięte bany:';
$txt['modlog_ac_ban_trigger_member'] = ' <em>Użytkownik:</em> {member}';
$txt['modlog_ac_ban_trigger_email'] = '<em>Email:</em> {email}';
$txt['modlog_ac_ban_trigger_ip_range'] = '<em>IP:</em> {ip_range}';
$txt['modlog_ac_ban_trigger_hostname'] = ' <em>Nazwa hosta:</em> {hostname}';

$txt['modlog_admin_log'] = 'Admin Log';
$txt['modlog_admin_log_desc'] = 'Niżej znajduje się zapisana lista akcji podejmowanych przez administrację twojego forum.';
$txt['modlog_admin_log_no_entries_found'] = 'Brak logów administracyjnych.';

// Admin type strings.
$txt['modlog_ac_upgrade'] = 'Zaktualizowano forum do wersji {version}';
$txt['modlog_ac_install'] = 'Zainstalowano wersję {version}';
$txt['modlog_ac_add_board'] = 'Dodano nowe forum: &quot;{board}&quot;';
$txt['modlog_ac_edit_board'] = 'Edytowano forum &quot;{board}&quot;';
$txt['modlog_ac_delete_board'] = 'Skasowano forum &quot;{boardname}&quot;';
$txt['modlog_ac_add_cat'] = 'Dodano kategorię, &quot;{catname}&quot;';
$txt['modlog_ac_edit_cat'] = 'Edytowano kategorię &quot;{catname}&quot;';
$txt['modlog_ac_delete_cat'] = 'Skasowano kategorię &quot;{catname}&quot;';

$txt['modlog_ac_delete_group'] = 'Skasowano grupę &quot;{group}&quot;';
$txt['modlog_ac_add_group'] = 'Dodano grupę &quot;{group}&quot;';
$txt['modlog_ac_edited_group'] = 'Edytowano grupę &quot;{group}&quot;';
$txt['modlog_ac_added_to_group'] = 'Dodano &quot;{member}&quot; do grupy &quot;{group}&quot;';
$txt['modlog_ac_removed_from_group'] = 'Usunięto &quot;{member}&quot; z grupy &quot;{group}&quot;';
$txt['modlog_ac_removed_all_groups'] = 'Usunięto &quot;{member}&quot; ze wszystkich grup';

$txt['modlog_ac_remind_member'] = 'Wyślij przypomnienie do &quot;{member}&quot; o aktywacji konta';
$txt['modlog_ac_approve_member'] = 'Zatwierdzone/Aktywowane konto &quot;{member}&quot;';
$txt['modlog_ac_newsletter'] = 'Wyślij newsletter';

$txt['modlog_ac_install_package'] = 'Zainstalowano nowy pakiet: &quot;{package}&quot;, wersja {version} ';
$txt['modlog_ac_upgrade_package'] = 'Zaktualizowano pakiet: &quot;{package}&quot; do wersji {version}';
$txt['modlog_ac_uninstall_package'] = 'Odinstalowano pakiet: &quot;{package}&quot;, wersja {version}';

// Restore topic.
$txt['modlog_ac_restore_topic'] = 'Przywrócono wątek &quot;{topic}&quot; z &quot;{board}&quot; do &quot;{board_to}&quot;';
$txt['modlog_ac_restore_posts'] = 'Przywrócono wiadomości z &quot;{subject}&quot; do wątku &quot;{topic}&quot; w &quot;{board}&quot; forum.';

$txt['modlog_parameter_guest'] = '<em>Gość</em>';

$txt['modlog_ac_approve_attach'] = 'Zatwierdzony &quot;{filename}&quot; w &quot;{message}&quot;';
$txt['modlog_ac_remove_attach'] = 'Usunięto niezatwierdzony &quot;{filename}&quot; w &quot;{message}&quot;';

// Handling reports on posts
$txt['modlog_report'] = 'raport';
$txt['modlog_ac_close_report'] = 'Zamknięty {report} w &quot;{message}&quot;';
$txt['modlog_ac_ignore_report'] = 'Zignorowany {report} w &quot;{message}&quot;';
$txt['modlog_ac_open_report'] = 'Ponownie otwarty {report} w &quot;{message}&quot;';
$txt['modlog_ac_unignore_report'] = 'Undone disregard of {report} on &quot;{message}&quot;';

// Handling reports on users
$txt['modlog_ac_close_user_report'] = 'Closed {report} on profile of {member}';
$txt['modlog_ac_ignore_user_report'] = 'Disregarded {report} on profile of {member}';
$txt['modlog_ac_open_user_report'] = 'Reopened {report} on profile of {member}';
$txt['modlog_ac_unignore_user_report'] = 'Undone disregard of {report} on profile of {member}';

// Poll stuff
$txt['modlog_ac_add_poll'] = 'Added a poll to &quot;{topic}&quot;';
$txt['modlog_ac_edit_poll'] = 'Edited the poll in &quot;{topic}&quot;';
$txt['modlog_ac_lock_poll'] = 'Locked voting in the poll in &quot;{topic}&quot;';
$txt['modlog_ac_remove_poll'] = 'Removed the poll from &quot;{topic}&quot;';
$txt['modlog_ac_reset_poll'] = 'Reset votes in the poll in &quot;{topic}&quot;';
$txt['modlog_ac_unlock_poll'] = 'Unlocked voting in the poll in &quot;{topic}&quot;';

?>