<?php
// Version: 2.1 Beta 3; ManageScheduledTasks

$txt['scheduled_tasks_title'] = 'Zaplanowane Zadania';
$txt['scheduled_tasks_header'] = 'Wszystkie zaplanowane zadania';
$txt['scheduled_tasks_name'] = 'Nazwa zadania';
$txt['scheduled_tasks_next_time'] = 'Czas następnego uruchomienia';
$txt['scheduled_tasks_regularity'] = 'Harmonogram';
$txt['scheduled_tasks_enabled'] = 'Włączony';
$txt['scheduled_tasks_run_now'] = 'Uruchom teraz';
$txt['scheduled_tasks_save_changes'] = 'Zapisz zmiany';
$txt['scheduled_tasks_time_offset'] = '<strong>Notatka:</strong> Wszystkie czasy widoczne poniżej są <em>czasami serwera</em> i nie wprowadzają żadnych zmian wewnątrz SMF.';
$txt['scheduled_tasks_were_run'] = 'Wszystkie wybrane zadania zostały uzupełnione';
$txt['scheduled_tasks_were_run_errors'] = 'Wszystkie zaznaczone zadania zostały wykonane pomyślnie, niestety wystąpiły pewne błędy:';

$txt['scheduled_tasks_na'] = 'N/A';
$txt['scheduled_task_approval_notification'] = '';
$txt['scheduled_task_auto_optimize'] = 'Optymalizuj bazę danych';
$txt['scheduled_task_desc_approval_notification'] = '';
$txt['scheduled_task_desc_auto_optimize'] = 'Optymalizuj bazę danych aby rozwiązać problemy z fragmentacją.';
$txt['scheduled_task_daily_maintenance'] = 'Codzienna konserwacja';
$txt['scheduled_task_desc_daily_maintenance'] = 'Uruchom niezbędną codzienną konserwację forum - nie powinno być wyłączone.';
$txt['scheduled_task_daily_digest'] = 'Podsumowanie Codziennych Powiadomień';
$txt['scheduled_task_desc_daily_digest'] = 'Wyślij E-maile z dziennym zestawieniem powiadomień dla subskrybentów.';
$txt['scheduled_task_weekly_digest'] = 'Podsumowanie Cotygodniowych Powiadomień';
$txt['scheduled_task_desc_weekly_digest'] = 'Wyślij E-mail z tygodniowym zestawieniem powiadomień dla subskrybentów.';
$txt['scheduled_task_fetchSMfiles'] = 'Sprawdź pliki Simple Machines';
$txt['scheduled_task_desc_fetchSMfiles'] = 'Naprawia pliki javascript zawierające powiadomienia o aktualizacjach i inne informacje.';
$txt['scheduled_task_birthdayemails'] = 'Wyślij E-maile z życzeniami urodzinowymi';
$txt['scheduled_task_desc_birthdayemails'] = 'Wyślij E-maile życzące użytkownikom wszystkiego najlepszego z okazji urodzin.';
$txt['scheduled_task_weekly_maintenance'] = 'Cotygodniowa konserwacja';
$txt['scheduled_task_desc_weekly_maintenance'] = 'Uruchom niezbędną cotygodniową konserwację forum - nie powinno być wyłączone.';
$txt['scheduled_task_paid_subscriptions'] = 'Sprawdź subskrypcje';
$txt['scheduled_task_desc_paid_subscriptions'] = 'Wyślij wszystkie przypomnienia o kończących się subskrypcjach i usuń użytkownikom subskrypcje po terminie.';
$txt['scheduled_task_remove_topic_redirect'] = 'Usuń PRZESUNIĘTE: wątki przekierowujące';
$txt['scheduled_task_desc_remove_topic_redirect'] = 'Usuwa "PRZESUNIĘTE:" powiadomienia o wątku tworzonym w momencie przesunięcia tematu.';
$txt['scheduled_task_remove_temp_attachments'] = 'Tymczasowo usuń załączniki';
$txt['scheduled_task_desc_remove_temp_attachments'] = 'Usuwa pliki tymczasowe tworzone podczas wysyłania załącznika, których nazwy z jakiegoś powodu nie zostały zmienione lub same pliki nie zostały wcześniej skasowane.';

$txt['scheduled_task_reg_starting'] = 'Start o %1$s';
$txt['scheduled_task_reg_repeating'] = 'powtarzaj co %1$d %2$s';
$txt['scheduled_task_reg_unit_m'] = 'minuta(y)';
$txt['scheduled_task_reg_unit_h'] = 'godzina(y)';
$txt['scheduled_task_reg_unit_d'] = 'dzień(dni)';
$txt['scheduled_task_reg_unit_w'] = 'tydzień(tygodnie)';

$txt['scheduled_task_edit'] = 'Edytuj Zaplanowane Zadania';
$txt['scheduled_task_edit_repeat'] = 'Powtarzaj zadanie co';
$txt['scheduled_task_edit_interval'] = 'Interwał';
$txt['scheduled_task_edit_start_time'] = 'Rozpocznij o';
$txt['scheduled_task_edit_start_time_desc'] = 'Godzina pierwszego uruchomienia zadania (godzina:minuty)';
$txt['scheduled_task_time_offset'] = 'Czas początku powinien być ustawiony w stosunku do aktualnego czasu serwera. Aktualny czas serwera to: %1$s';

$txt['scheduled_view_log'] = 'Pokaż raporty';
$txt['scheduled_log_empty'] = 'Obecnie nie ma żadnych logów zadań.';
$txt['scheduled_log_time_run'] = 'Czas uruchomienia';
$txt['scheduled_log_time_taken'] = 'Czas wykonania';
$txt['scheduled_log_time_taken_seconds'] = '%1$d sekund';
$txt['scheduled_log_empty_log'] = 'Wyczyść log';
$txt['scheduled_log_empty_log_confirm'] = 'Czy jesteś pewien że chcesz wyczyścić kompletnie cały log?';

$txt['scheduled_task_remove_old_drafts'] = 'Usuń stare szkice';
$txt['scheduled_task_desc_remove_old_drafts'] = 'Usuwa szkice starsze niż liczba dni określona w ustawieniach szkiców w panelu administracyjnym.';

$txt['cron_is_real_cron'] = 'Disable JavaScript-based method of running scheduled tasks.';
$txt['cron_is_real_cron_desc'] = '<strong>Do not check this box</strong> unless you are <strong><u>sure</u></strong> that you have configured another method to tell your server to run SMF\'s cron.php on a regular basis.';
$txt['cron_not_working'] = 'No scheduled tasks have been run in the last 24 hours. Re-enabling JavaScript-based method of running scheduled tasks.';

?>