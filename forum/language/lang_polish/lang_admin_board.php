<?php
/***************************************************************************
 *                      lang_admin_board.php [Polish]
 *                      -------------------
 * begin                : Sat Dec 16 2000
 * copyright            : (C) 2001 The phpBB Group
 * e-mail               : support@phpbb.com
 *
 * modification         : (C) 2005 Przemo http://www.przemo.org
 * date modification    : ver. 1.12.4 2005/11/10 19:34
 *
 ****************************************************************************/

/***************************************************************************
 *
 *   This program is free software; you can redistribute it and/or modify
 *   it under the terms of the GNU General Public License as published by
 *   the Free Software Foundation; either version 2 of the License, or
 *   (at your option) any later version.
 *
 ***************************************************************************/
$he = ($userdata['user_gender'] != 2) ? true : false;

$lang['ccount'] = 'Licznik wizyt';
$lang['Max_filesize'] = 'Maksymalny rozmiar pliku Avataru';
$lang['Max_filesize_explain'] = 'Dla obrazk�w wysy�anych na serwer';
$lang['Max_avatar_size'] = 'Maksymalne Rozmiary Avataru';
$lang['Max_avatar_size_explain'] = '(Wysoko�� x Szeroko�� w pikselach)';
$lang['Avatar_settings'] = 'Ustawienia Avatar�w';
$lang['Allow_local'] = 'W��cz galeri� Avatar�w';
$lang['Allow_remote'] = 'W��cz zdalne Avatary';
$lang['Allow_remote_explain'] = 'Avatary b�d� wy�wietlane z innych serwer�w';
$lang['Allow_upload'] = 'W��cz wysy�anie Avatar�w';
$lang['Avatar_storage_path'] = '�cie�ka Zapisu Avatar�w';
$lang['Avatar_storage_path_explain'] = '�cie�ka od katalogu g��wnego phpBB, np. images/avatars';
$lang['Avatar_gallery_path'] = '�cie�ka Galerii Avatar�w';
$lang['Avatar_gallery_path_explain'] = '�cie�ka od katalogu g��wnego phpBB dla wcze�niej �adowanych plik�w, np. images/avatars/gallery';
$lang['header'] = 'Wy��cz oryginalny nag��wek';
$lang['header_e'] = 'Wy��cza oryginalny nag��wek forum, kiedy chcemy u�y� tylko w�asnego nag��wka (banner nag��wkowy z linkami)';
$lang['General_settings'] = 'Generalne Ustawienia Forum';
$lang['Script_path_explain'] = '�cie�ka pod kt�r� znajduje si� phpBB2 relatywnie do nazwy domeny. Je�eli domena wskazuje na docelowy katalog nie wpisuj tutaj tego katalogu!';
$lang['Server_port_explain'] = 'Port na kt�rym dzia�a tw�j serwer, zwykle 80, zmie� tylko je�li jest inny';
$lang['Site_name'] = 'Nazwa Strony';
$lang['Site_desc'] = 'Opis Strony';
$lang['Board_disable_explain'] = 'Wybierz opcj� do wy��czenia, w polu tekstowym mo�esz poda� pow�d. Nie dotyczy Administratora';
$lang['Max_poll_options'] = 'Maksymalna liczba opcji ankiety';
$lang['Flood_Interval'] = 'Interwa� Anty-Floodowy';
$lang['Flood_Interval_explain'] = 'Ilo�� sekund, zanim mo�na wys�a� nowy post';
$lang['Board_email_form'] = 'E-mail przez forum';
$lang['Board_email_form_explain'] = 'U�ytkownicy wysy�aj� e-mail\'e przez forum';
$lang['Topics_per_page'] = 'Temat�w na Stron�';
$lang['Posts_per_page'] = 'Post�w na Stron�';
$lang['Hot_threshold'] = 'Post�w do okre�lenia Popularny';
$lang['Default_style'] = 'Domy�lny Styl';
$lang['Override_style'] = 'Zignoruj Styl U�ytkownika';
$lang['Override_style_explain'] = 'Zamienia styl u�ytkownika na domy�lny';
$lang['Default_language'] = 'Domy�lny J�zyk';
$lang['System_timezone'] = 'Strefa Czasowa Systemu';
$lang['Enable_gzip'] = 'W��cz Kompresj� GZip';
$lang['Allow_HTML'] = 'Zezw�l na HTML';
$lang['Allowed_tags'] = 'Dozwolone tagi HTML';
$lang['Allowed_tags_explain'] = 'Oddziel znaczniki przecinkami';
$lang['Smilies_path'] = '�cie�ka dost�pu do U�mieszk�w';
$lang['Allow_sig'] = 'Zezw�l na Podpisy';
$lang['Max_sig_length'] = 'Maksymalna d�ugo�� podpisu';
$lang['Max_sig_length_explain'] = 'Maksymalna ilo�� znak�w w podpisie u�ytkownika';
$lang['Allow_name_change'] = 'Zezw�l na zmiany Nazw U�ytkownika';

$lang['COPPA_settings'] = 'Ustawienia COPPA';
$lang['COPPA_fax'] = 'Numer Faxu COPPA';
$lang['COPPA_mail'] = 'Adres Pocztowy COPPA';
$lang['COPPA_mail_explain'] = 'To jest adres pocztowy, pod kt�ry rodzice b�d� przesy�ali formularze rejestracji COPPA';

$lang['Email_settings'] = 'Ustawienia E-mail\'i';
$lang['Email_sig'] = 'Podpis pod E-mail';
$lang['Email_sig_explain'] = 'Ten tekst b�dzie dodawany do ka�dej wiadomo�ci wysy�anej przez forum';
$lang['Use_SMTP'] = 'U�ywaj Serwera SMTP';
$lang['Use_SMTP_explain'] = 'Wybierz TAK i ustaw odpowiednie parametry, je�li chcesz aby wiadomo�ci e-mail by�y przesy�ane przez odpowiedni serwer zamiast lokalnej funkcji mail()';
$lang['SMTP_server'] = 'Adres Serwera SMTP';
$lang['SMTP_username'] = 'Nazwa U�ytkownika SMTP';
$lang['SMTP_username_explain'] = 'Wpisz nazw� tylko je�li tw�j serwer SMTP tego wymaga';
$lang['SMTP_password'] = 'Has�o SMTP';
$lang['SMTP_password_explain'] = 'Wpisz has�o tylko je�li tw�j serwer SMTP tego wymaga';

$lang['Disable_privmsg'] = 'Prywatne Wiadomo�ci';
$lang['Inbox_limits'] = 'Maks. wiadomo�ci w Skrzynce (Administrator ma x 6 a Moderator x 3)';
$lang['Sentbox_limits'] = 'Maks. wiadomo�ci w Wys�anych (Administrator ma x 6 a Moderator x 3)';
$lang['Savebox_limits'] = 'Maks. wiadomo�ci w Zapisanych (Administrator ma x 6 a Moderator x 3)';

$lang['Cookie_settings'] = 'Ustawienia Cookies i adres�w';
$lang['Cookie_settings_explain'] = '<span style=\'color: red\'>Kontroluj� w jaki spos�b zdefiniowane zostanie cookie wys�ane do przegl�darki.<br />W wi�kszo�ci przypadk�w powinny wystarczy� warto�ci domy�lne. Je�li zechcesz je zmieni� r�b to ostro�nie, nieprawid�owe ustawienia mog� uniemo�liwi� logowanie, wej�cie do panelu admina (error 404) lub d�ugie generowanie strony g��wnej lub panelu logowania.<br />Je�eli Nazwa Domeny, Port Serwera lub �cie�ka skryptu b�dzie podana nieprawid�owo mo�e nie by� dost�pu do Panelu Administracyjnego i ustawienia poprawnych warto�ci! W takiej sytuacji b�dzie konieczna r�czna edycja poprzez PhpMyAdmina (tabela phpbb_config kolumny: domain_name, server_port, script_path) po zmianie nale�y wyczy�ci� katalog /cache/ w celu odczytania aktualnych danych z bazy (podobnie jak podczas innych r�cznych zmian w bazie danych). Najlepiej zapisz sobie te informacje (mog� si� przyda� np. podczas przenoszenia na inny serwer - w takich sytuacjach dane wype�niane w tym miejscu powinny by� zmienione)<br /><b>Nie u�ywaj r�nych domen bo mog� wyst�pi� problemy z logowaniem!</b></span><br />Przyk�ad: adres forum: <b>www.przemo.org/forum</b> lub <b>http://www.przemo.org/forum</b> nazwa domeny musi by�: <b>www.przemo.org</b><br /> Drugi przyk�ad adres: <b>http://przemo.org/forum</b> nazwa domeny: <b>przemo.org</b><br />�cie�ka skryptu w obu przypadkach: <b>forum/</b> Je�eli forum jest bezpo�rednio pod domen� podaj: /';
$lang['Cookie_name'] = 'Nazwa Cookie';
$lang['Cookie_path'] = '�cie�ka Cookie';
$lang['Cookie_secure'] = 'Bezpieczne Cookie [ https ]';
$lang['Cookie_secure_explain'] = 'Je�li tw�j serwer obs�uguje SSL mo�esz ustawi� na w��czone, w innym przypadku wy��cz.';
$lang['Session_length'] = 'D�ugo�� Sesji [ sekundy ]';
$lang['Session_length_e'] = 'Aktualizacja informacji o obecno�ci u�ytkownika na forum jest zmieniana co 60 sekund, natomiast po przekroczeniu czasu nieobecno�ci na forum przekraczaj�cego t� warto�� z prawej strony, dopisywana jest kolejna wizyta u�ytkownika i zostaje wyzerowany czas obecno�ci u�ytkownika na forum. Sugerowana warto��: 300-1500 sekund (5-25 minut)';

$lang['Enable_birthday_greeting'] = 'Powitanie urodzinowe';
$lang['Birthday_greeting_expain'] = 'Wy�wietla pop\'up z �yczeniami gdy osoba obchodz�ca w danym dniu urodziny wejdzie pierwszy raz na forum.';
$lang['Max_user_age'] = 'Maksymalny wiek u�ytkownika';
$lang['Min_user_age'] = 'Minimalny wiek u�ytkownika';
$lang['Birthday_lookforward'] = 'Ile dni na prz�d pokazywa� solenizant�w';
$lang['cagent'] = 'Pokazywanie systemu i przegl�darki.';
$lang['cagente'] = 'Czy pokazywa� w widoku temat�w, system i przegl�dark� u�ytkownika?';
$lang['crestrict'] = 'Restrykcja dost�pu dla niezarejestrowanych';
$lang['crestrict_e'] = 'Niezarejestrowani u�ytkownicy nie mog� przegl�da� listy u�ytkownik�w i profil�w';
$lang['login_require'] = 'Restrykcja ca�kowita dost�pu dla niezarejestrowanych';
$lang['login_require_e'] = 'Niezarejestrowani u�ytkownicy nie mog� w og�le przegl�da� �adnej cz�ci forum';
$lang['Allow_custom_rank'] = 'Pozw�l u�ytkownikom wybra� swoje tytu�y';
$lang['Allow_custom_rank_explain'] = 'Ustaw ilo�� post�w od jakiej mo�na ustawi� sw�j tytu� (podaj np. 9999 by wy��czy�';
$lang['Allow_avatar'] = 'Zezw�l na avatary po napisaniu danej ilo�ci post�w';
$lang['Allow_avatar_explain'] = 'Podaj warto�� od jakiej u�ytkownik mo�e u�ywa� avatar�w';
$lang['llevelp'] = 'Czy w profilu u�ytkownika pokazywa� jego Poziom ?';
$lang['lyahoo'] = 'Czy podczas rejestracji oraz edycji profilu, pokaza� pole "YIM" ?';
$lang['lmsn'] = 'Czy podczas rejestracji oraz edycji profilu, pokaza� pole "MSNM" ?';
$lang['ljob'] = 'Czy podczas rejestracji oraz edycji profilu, pokaza� pole "Zaw�d" ?';
$lang['linter'] = 'Czy podczas rejestracji oraz edycji profilu, pokaza� pole "Zainteresowania" ?';
$lang['lemail'] = 'Czy podczas rejestracji oraz edycji profilu, pokaza� pole "Zawsze pokazuj m�j Adres E-mail" ? (Domy�lnie jest w��czone)';
$lang['licq'] = 'Czy podczas rejestracji oraz edycji profilu, pokaza� pole "ICQ" ?';
$lang['clevelp'] = 'Poziom u�ytkownika w profilu';
$lang['lllogin'] = 'Czy w profilu oraz widoku u�ytkownik�w pokazywa� pole "Data ostatniej aktywno�ci" ?';
$lang['newest_e'] = 'Je�li w��czysz, to tytu� tematu, b�dzie linkiem do tego tematu, lecz w miejsce w jakim ostatnio sko�czy�' .  (($he) ? 'e' : 'a') . '� czyta� ten temat (bardzo wygodne).';
$lang['lsearch'] = 'Czy w widoku listy temat�w pokazywa� pole "Szukaj w tym dziale" ?';
$lang['newest'] = 'Tytu� tematu linkiem do ostatniego nieczytanego postu';
$lang['lgg'] = 'Czy w widoku tematu, profilu oraz podczas rejestracji pokazywa� Gadu-Gadu?';
$lang['lquick'] = 'Czy w widoku tematu pokazywa� na dole strony, pole "Szybka odpowied�" ?';
$lang['lignore'] = 'Czy pokazywa� przycisk do ignorowania u�ytkownik�w?';
$lang['cignore'] = 'Przycisk Ignoruj';
$lang['lleveld'] = 'Czy w widoku tematu, pod przyciskami (profil, pw, e-mail) pokaza� Poziom u�ytkownika?';
$lang['llevell'] = 'Czy w widoku tematu, pod avatarem u�ytkownika, pokaza� jego Poziom?';
$lang['clevell'] = 'Poziom u�ytkownika pod avatarem';
$lang['cleveld'] = 'Poziom u�ytkownika pod postem';
$lang['lposts'] = 'Czy w widoku tematu, pod avatarem u�ytkownika, pokaza� ile ma post�w?';
$lang['lfrom'] = 'Czy w widoku tematu, pod avatarem u�ytkownika, pokaza� sk�d jest u�ytkownik?';
$lang['cposts'] = 'Ilo�� post�w pod avatarem';
$lang['cjoin'] = 'Data przy��czenia u�ytkownika pod avatarem';
$lang['ljoin'] = 'Czy w widoku tematu, pod avatarem u�ytkownika, pokaza� jego Dat� przy��czenia ?';
$lang['cfrom'] = 'Lokalizacja pod avatarem';
$lang['cage'] = 'Wiek u�ytkownika pod avatarem';
$lang['lage'] = 'Czy w widoku tematu, pod avatarem u�ytkownika, pokaza� jego Wiek ?';
$lang['lfriend'] = 'W widoku tematu, pokazuje link "Powiadom znajomego o tym temacie"';
$lang['ltop'] = 'Pokazuje na stronie g��wnej, w polu danego dzia�u, ile nowych temat�w napisano w danym dziale od twojej ostatniej wizyty';
$lang['ctop'] = 'Nowych temat�w?';
$lang['lbirth'] = 'Wy�wietla na dole strony g��wnej kto ma dzi� i w najbli�szych dniach urodziny. Umo�liwia wys�anie �ycze� standardowych lub w�asnych.<br />Informacje oraz ilo�� dni aktualizowane co godzin�.';
$lang['lcount'] = 'Pokazuje na dole strony g��wnej, licznik wizyt';
$lang['cregist'] = 'Szybka rejestracja?';
$lang['cstyles'] = 'Style na stronie g��wnej?';
$lang['lstyles'] = 'W��cza na stronie g��wnej ma�y pasek do szybkiej zmiany styl�w forum';
$lang['cstat'] = 'Statystyki?';
$lang['lstat'] = 'Pokazuje w nag��wku strony, link do statystyk?';
$lang['cload'] = 'Loading?';
$lang['cdownload'] = 'W��cz download';
$lang['cdownload_e'] = 'W��cza download i link w nag��wku';
$lang['auto_date'] = 'Automatyczna zmiana daty na czas letni/zimowy';
$lang['cavatar'] = 'Avatar w nag��wku?';
$lang['cavatar_e'] = 'Gdy u�ytkownik jest zalogowany, pokazuje jego avatar w nag��wku';
$lang['clog'] = 'Logowanie host�w i IP';
$lang['clog_e'] = 'Czy logowa� hosty i adresy IP do pliku? Mo�e obci��y� forum (Uwaga nale�y co jaki� czas kontrolowa� jego wielko��)<br />Logowanie warto�ci $_POST pozwala przechwyci� warto�ci wysy�ane przez formularze oraz ciasteczka, nie jest to mo�liwe np. w zwyk�ych logach serwera.<BR />Warto�ci te s� zawsze logowane w panelu admina, je�eli tylko jest w��czone logowanie.';
$lang['lload'] = 'Po klikni�ciu na link pokazuje "�adowanie strony... prosz� czeka�!" ';
$lang['cchat'] = 'Przycisk Czat w nag��wku';
$lang['lchat'] = 'W nag��wku strony, przycisk z linkiem do chata';
$lang['lregist'] = 'Gdy na forum wejdzie u�ytkownik nie zalogowany pokazuje u g�ry pola do szybkiej rejestracji';
$lang['clogin_b'] = 'Na dole strony';
$lang['lchat2'] = 'Na dole strony link do czata';
$lang['lbbcode'] = 'Czy podczas rejestracji oraz edycji profilu, pokaza� pole "Zawsze w��czaj BBCode" ? (Domy�lnie jest w��czone)?';
$lang['lhtml'] = 'Czy podczas rejestracji oraz edycji profilu, pokaza� pole "Zawsze w��czaj HTML" ? (Domy�lnie jest w��czone)';
$lang['lsmiles'] = 'Czy podczas rejestracji oraz edycji profilu, pokaza� pole "Zawsze w��czaj U�mieszki" ? (Domy�lnie jest w��czone)';
$lang['llang'] = 'Czy podczas rejestracji oraz edycji profilu, pokaza� pole "J�zyk Forum" ?';
$lang['ltimezone'] = 'Czy podczas rejestracji oraz edycji profilu, pokaza� pole "Strefa Czasowa" ?';
$lang['lbstyle'] = 'Czy podczas rejestracji oraz edycji profilu, pokaza� pole "Styl Forum" ?';
$lang['l_links'] = 'W�asne linki, w module Menu';
$lang['l_links_e'] = '�eby link by� widoczny, musisz poda� nazw� linka i adres. Adres zewn�trzny, np. www.przemo.org musi zaczyna� si� od http:// czyli http://www.przemo.org W innym przypadku link b�dzie wskazywa� na: www.adres.twojego.forum.pl/www.przemo.orgl W przypadku plik�w w katalogu forum, podajemy tylko nazw� pliku np. statystyki.php';
$lang['l_meta_refresh'] = 'Od�wie�anie';
$lang['l_meta_refresh_e'] = 'Czas po jakim strona zostanie od�wie�ona po zmianie ustawie�';
$lang['Meta_keywords'] = 'META Keywords';
$lang['Meta_keywords_explain'] = 'Keywords w tagach HTML <META KEYWORDS>';
$lang['Meta_description'] = 'META Description';
$lang['Meta_description_explain'] = 'Description w tagach HTML <META DESCRIPTION>';
$lang['cvalidatee'] = 'Przy rejestracji wymaga graficznego uwierzytelniania, zabezpiecza przed flooduj�cymi robotami';
$lang['l_addon_main_page'] = 'Ustawienia strony g��wnej';
$lang['l_addon_viewforum'] = 'Ustawienia widoku listy temat�w';
$lang['l_addon_viewtopic'] = 'Ustawienia widoku tematu';
$lang['l_addon_posting'] = 'Ustawienia widoku podczas pisania postu';
$lang['l_addon_profile'] = 'Ustawienia profilu';
$lang['l_addon_main'] = 'Ustawienia dodatk�w';
$lang['l_restrictbbcode'] = 'BBcode dla niezarejestrowanych';
$lang['l_restrictbbcode_e'] = 'Zezwala lub zabrania u�ywania bbcode niezarejestrowanym u�ytkownikom';
$lang['l_sql'] = 'PhpMyAdmin';
$lang['l_sql_e'] = 'Podaj adres do swojego PhpMyAdmina (Link w Menu nawigacji)';
$lang['l_button_b'] = 'Button bbcode [b]';
$lang['l_button_i'] = 'Button bbcode [i]';
$lang['l_button_u'] = 'Button bbcode [u]';
$lang['l_button_q'] = 'Button bbcode [Quote]';
$lang['l_button_c'] = 'Button bbcode [Code]';
$lang['l_button_l'] = 'Button bbcode [List]';
$lang['l_button_im'] = 'Button bbcode [Img]';
$lang['l_button_ur'] = 'Button bbcode [URL]';
$lang['l_button_ce'] = 'Button bbcode [Center]';
$lang['l_button_f'] = 'Button bbcode [Fade]';
$lang['l_button_s'] = 'Button bbcode [Scroll]';
$lang['l_button_hi'] = 'Button bbcode [Hide]';
$lang['l_color_box'] = 'JumpBox Kolor';
$lang['l_size_box'] = 'JumpBox rozmiar';
$lang['l_glow_box'] = 'JumpBoxy Ogie� i Cie�';
$lang['l_freak'] = 'Przyciski styl�w FrEaK i l33t';

$lang['Allow_custom_color'] = 'Zezw�l na w�asne kolory nazw';
$lang['Allow_custom_color_explain'] = 'Ustaw ilo�� post�w od jakiej mo�na u�y� koloru.';
$lang['l_allow_custom_color_view'] = 'Wy��cz tylko mo�liwo�� zmiany kolor�w nazw';
$lang['l_allow_custom_color_view_e'] = 'U�ytkownicy nie b�d� mogli zmienia� swoich kolor�w. B�dziesz m' .  (($he) ? '�g�' : 'og�a') . ' je zmienia� w panelu admina, np. tylko moderatorom';
$lang['Allow_custom_color_mod'] = 'Zezw�l moderatorom na zmiany kolor�w';
$lang['Allow_custom_color_mod_e'] = 'Zezw�l tylko moderatorom na zmiany kolor�w swoich nazw, je�eli og�lne zezwolenia s� wy��czone';
$lang['Allow_custom_rank_mod'] = 'Zezw�l moderatorom na w�asne tytu�y';
$lang['Allow_custom_rank_mod_e'] = 'Zezw�l tylko moderatorom na ustawianie w�asnych tytu��w, je�eli og�lne zezwolenia s� wy��czone (9999)';

$lang['ipview'] = 'Moderatorzy mog� widzie� IP u�ytkownik�w';
$lang['show_badwords'] = 'Poka� oryginalne ocenzurowane s�owo administratorom i moderatorom';
$lang['calbum'] = 'W��cz galerie zdj��';
$lang['l_address_whois'] = 'Adres sprawdzania Whois';
$lang['l_address_whois_e'] = 'Podaj adres strony wg. kt�rej b�dzie sprawdzane Whois. Pami�taj �eby poda� http://';
$lang['u_o_t_d'] = 'Pokazywa� kto dzi� odwiedzi� forum?';
$lang['posticon_a'] = 'W��cz ikony temat�w/post�w';
$lang['GG_nr'] = 'Numer Gadu-Gadu';
$lang['GG_pass'] = 'Has�o Gadu-Gadu';

$lang['user_password_settings'] = 'Ustawienia zabezpieczenia hase� u�ytkownik�w';
$lang['Max_login_error'] = 'Czasowa blokady konta';
$lang['Max_login_error_explain'] = 'Podaj ilo�� mo�liwych pr�b b��dnego logowania, po kt�rych konto u�ytkownika zostanie czasowo zablokowane.';
$lang['Block_time'] = 'Czas blokady';
$lang['Block_time_explain'] = 'Podaj czas w minutach na jaki ma zosta� zablokowane konto.';
$lang['Password_complex'] = 'Has�o "mieszane"';
$lang['Password_complex_explain'] = 'Has�o musi zawiera� litery i cyfry, inne nie b�dzie przyjmowane podczas rejestracji.';
$lang['Password_len'] = 'Minimalna d�ugo�� has�a';
$lang['Password_len_explain'] = 'Zakres [ 1 - 32 ]';
$lang['Password_not_login'] = 'Has�o inne ni� login';
$lang['Password_not_login_explain'] = 'Has�o takie samo jak login, nie b�dzie przyjmowane podczas rejestracji.';

$lang['del_email_not'] = 'Powiadom o usuni�ciu konta';
$lang['del_email_not_e'] = 'Wysy�a e-mail z informacj� o usuni�ciu konta, do u�ytkownika.';
$lang['l_require_aim'] = 'Wymaga� GG przy rejestracji';
$lang['l_require_website'] = 'Wymaga� WWW przy rejestracji';
$lang['l_require_location'] = 'Wymaga� "Sk�d" przy rejestracji';
$lang['l_require_aim_e'] = 'Je�li dasz TAK to wy��cz szybk� rejestracj� na stronie g��wnej.';
$lang['l_require_website_e'] = 'Je�li dasz TAK to wy��cz szybk� rejestracj� na stronie g��wnej.';
$lang['l_require_location_e'] = 'Je�li dasz TAK to wy��cz szybk� rejestracj� na stronie g��wnej.';
$lang['post_footer'] = 'Wy��cz ikony pod postem';
$lang['post_footer_e'] = 'Wy��cza pod ka�dym postem ikony takie jak: E-mail, WWW, Profil, PM, GG, oraz level mod i link "na g�r� strony" (Cytuj, Edytuj zostaj�)';
$lang['graphic'] = 'Tekst zamiast ikon';
$lang['graphic_e'] = 'W ka�dym po�cie, zamiast ikon (PM, Profil, WWW, Cytuj, Edytuj itp.) wy�wietla tekst';
$lang['max_sig_custom_rank'] = 'Maksymalna d�ugo�� tytu�u';
$lang['max_sig_location'] = 'Maksymalna d�ugo�� lokalizacji';

$lang['Signature_settings'] = 'Ustawienia podpis�w';
$lang['Allow_sig_image'] = 'Zezw�l na obrazki w podpisie';
$lang['Max_sig_image_filesize'] = 'Maksymalny rozmiar obrazka w bajtach';
$lang['Max_sig_image_size'] = 'Maksymalny rozmiar obrazka w pikselach';
$lang['Sig_images_storage_path'] = '�cie�ka zapisu obrazk�w';
$lang['Sig_images_storage_path_explain'] = '�cie�ka od katalogu g��wnego phpBB, np. images/signatures';

$lang['hv_admin'] = 'Ukryj przegl�danie tematu przez admina';
$lang['hv_admin_e'] = 'Gdy w��czone, przegl�danie tematu przez admina nie b�dzie zliczane';
$lang['he_admin'] = 'Ukryj edycj� tematu przez admina';
$lang['he_admin_e'] = 'Gdy w��czone, po edycji w�asnego postu przez admina nie b�dzie dodawana informacja o edycji';
$lang['wv'] = 'Kto przegl�da� temat';
$lang['wv_admin'] = 'Kto przegl�da� temat tylko dla admina i moderator�w';
$lang['wv_admin_e'] = 'Link do widoku "Kto przegl�da� temat" b�dzie tylko mo�liwy dla administrator�w i moderator�w';
$lang['edit_time'] = 'Czas edycji postu'; 
$lang['edit_time_explain'] = 'Czas w minutach przez jaki mo�na edytowa� swoje posty od momentu ich wys�ania. Nie obowi�zuje Administrator�w i Moderator�w. Wpisz 0 aby wy��czy�';
$lang['read_tracking_c'] = 'Czyszczenie read history';
$lang['read_tracking_c_e'] = 'W przypadku przenoszenia forum, lub potrzeby "odchudzenia bazy danych" mo�esz skorzysta� z tej funkcji aby wyczy�ci� tabel� read_history. Po wyczyszczeniu ka�dy u�ytkownik b�dzie mia� oznaczone wszystkie tematy jako przeczytane.';
$lang['read_tracking_days'] = 'Ile dni przetrzymywa� nieczytane posty';
$lang['read_tracking_days_e'] = 'Je�eli u�ytkownik nie odwiedzi� forum przez podan� ilo�� dni, informacje o nieczytanych postach zostan� usuni�te.';
$lang['read_tracking_max_posts'] = 'Maksymalna ilo�� nieczytanych post�w na u�ytkownika';
$lang['read_tracking_max_posts_e'] = 'Zostan� usuni�te informacje o nieczytanych postach, je�eli ich ilo�� przekroczy podan� warto��. Nie dotyczy Administrator�w, Junior Admin�w, Moderator�w';
$lang['read_tracking_without_days'] = 'Kasowanie nieczytanych z wyj�tkiem napisanych przez ostatnie X dni';
$lang['read_tracking_without_days_e'] = 'Je�eli ilo�� post�w nieczytanych przekroczy maksymaln� warto��, zostan� usuni�te wszystkie z wyj�tkiem post�w napisanych przez ostatnie X dni.<br />Prosz� stara� si� zadba� o to aby ilo�� post�w nieczytanych w bazie by�a jak najmniejsza, zbyt du�a ilo�� dla pojedynczych u�ytkownik�w mo�e wp�yn�� niekorzystnie na generowane obci��enie.';
$lang['l_gender'] = 'P�e� u�ytkownik�w';
$lang['l_gender_e'] = 'Umo�liwia ustawienie p�ci u�ytkownik�w podczas rejestracji i w profilu. Widoczna tak�e ikonka obok nazwy u�ytkownika w widoku tematu';
$lang['l_require_gender'] = 'Wymaga� podania p�ci podczas rejestracji?';
$lang['banner_top'] = 'Banner w nag��wku forum';
$lang['banner_top_e'] = 'Mo�esz w��czy� banner nag��wkowy forum, mo�e to by� r�wnie� w�asny nag��wek z linkami (kod HTML)<br /><a href="../images/dynamic.html" target="_blank">Obs�uga zamiennik�w</a>';
$lang['banner_bottom'] = 'Banner w stopce forum';
$lang['banner_bottom_e'] = 'Mo�esz w��czy� banner w stopce forum, mo�e to by� r�wnie� w�asna stopka z linkami (kod HTML)<br /><a href="../images/dynamic.html" target="_blank">Obs�uga zamiennik�w</a>';
$lang['Override_user_choices'] = 'Zignoruj ustawienia u�ytkownik�w';
$lang['not_edit_admin'] = 'Ochrona post�w admina';
$lang['not_edit_admin_e'] = 'W��cza ochron� dla post�w i sond admina, moderatorzy nie mog� ich usuwa� ani edytowa�';
$lang['staff_forums'] = 'Widok dzia��w';
$lang['l_smilies_value'] = 'Ilo�� u�mieszk�w';
$lang['l_smilies_value_e'] = 'Podczas pisania wiadomo�ci, warto�ci <b>C</b>-ilo�� kolumn, <b>R</b>-ilo�� rz�d�w, <b>CW</b>-ilo�� kolumn w oknie wszystkich emotikon�w';
$lang['l_generate_time'] = 'Czas generowania strony';
$lang['Enable_board_msg'] = 'W��cz og�oszenie na forum';
$lang['board_msg'] = 'Tre�� og�oszenia';
$lang['board_msg_explain'] = 'Wpisz tre�� og�oszenia, mo�na u�ywa� kodu HTML<br /><a href="../images/dynamic.html" target="_blank">Obs�uga zamiennik�w</a>';
$lang['board_msg_index'] = 'Na stronie g��wnej';
$lang['board_msg_all'] = 'Na wszystkich stronach';
$lang['width_forum'] = 'Sta�a szeroko�� forum';
$lang['width_forum_e'] = 'Mo�esz okre�li� sta�� szeroko�� forum, warto�� podaj�c w pikselach np. <b>900</b> Mo�esz ustali� kolor t�a, kolor obramowania forum np: <b>#FF2121</b>, oraz szeroko�� obramowania.';
$lang['width_table'] = 'Szeroko�� forum';
$lang['width_color'] = 'Kolor1, Kolor2, Obramowanie (grubo�� w px)';
$lang['show_rules'] = 'Pokazuj regulamin przed rejestracj�';
$lang['gentime_admin'] = 'Czas generowania tylko dla admin�w';
$lang['email_return_path'] = 'E-mail zwrotny';
$lang['email_from'] = 'E-mail nadawcy';
$lang['l_poster_posts'] = 'Oznacza� tematy w kt�rych bra�' .  (($he) ? 'e' : 'a') . '� udzia�';
$lang['l_poster_posts_e'] = 'Przed tytu�em tematu, dodaje znaczek je�li u�ytkownik bra� udzia� w dyskusji, po najechaniu myszk� opis z ilo�ci� post�w u�ytkownika jak� napisa� w tym temacie';
$lang['topic_color_all'] = 'Kolor tematu dla wszystkich';
$lang['topic_color_mod'] = 'Kolor tematu dla moderator�w';
$lang['conf_config'] = 'G��wne';
$lang['conf_addons'] = 'Dodatkowe';
$lang['conf_main_page'] = 'Strony g��wnej';
$lang['conf_viewtopic'] = 'Widoku temat�w';
$lang['conf_profile'] = 'Profilu';
$lang['conf_posting'] = 'Pisania';
$lang['allow_img_bbcode'] = 'Wy��cz bbcode [IMG] w podpisie';
$lang['allow_img_bbcode_e'] = 'Wy��cza bbcode [IMG] w podpisach, pozostawia mo�liwo�� wys�ania obrazka podpisu na forum z ograniczon� wielko�ci�, parametry obrazka poni�ej<br />Je�eli zezwolisz na u�ywanie [IMG] bbcode u�ytkownicy nie b�d� mogli wy��czy� widoku tych obrazk�w w podpisach';
$lang['cbirth'] = 'Info urodzinowe';
$lang['cgg'] = 'Gadu-Gadu';
$lang['csearch'] = 'Szukaj w tym dziale';
$lang['cyahoo'] = 'Yahoo Messenger';
$lang['cmsn'] = 'MSN Messenger';
$lang['Photo_storage_path_explain'] = 'na przyk�ad: images/photos';
$lang['Photo_storage_path'] = '�cie�ka do katalogu na serwerze';
$lang['Allow_photo_upload'] = 'W��cz wysy�anie zdj�cia';
$lang['Photo_max_filesize'] = 'Maksymalny wielko�� zdj�cia(w bajtach)';
$lang['Photo_max_filesize_explain'] = 'Dla wysy�anego zdj�cia';
$lang['Max_photo_size'] = 'Maksymalny rozmiar zdj�cia (w pikselach)';
$lang['Profile_photo_settings'] = 'Ustawienia zdj�cia w profilu';
$lang['Allow_photo_remote'] = 'W��cz zdalne dodawanie zdj�cia w profilu';
$lang['Allow_photo_remote_explain'] = 'Odno�nik do zewn�trznego zdj�cia';
$lang['max_sig_chars_admin_e'] = 'Razy jak� warto�� pomno�y� maksymaln� ilo�� znak�w w podpisie dla admina';
$lang['max_sig_chars_mod_e'] = 'Razy jak� warto�� pomno�y� maksymaln� ilo�� znak�w w podpisie dla moderator�w';
$lang['viewonline_e'] = 'Restrykcja ukrywania obecno�ci na forum: 0 - wyb�r u�ytkownika, 1 - u�ytkownicy b�d� zawsze widoczni, 2 - u�ytkownicy nie b�d� widoczni';
$lang['restrict_smilies'] = 'U�mieszki dla niezarejestrowanych';
$lang['topic_preview'] = 'Podgl�d tematu';
$lang['not_anonymous_posting_e'] = 'Wymaga� podania nazwy podczas wysy�ania post�w przez u�ytkownik�w niezalogowanych';
$lang['not_anonymous_quickreply'] = 'Szybka odpowied� ukryta dla niezalogowanych';
$lang['l_expire_v'] = 'Automatyczne wygaszanie post�w w szybkiej odpowiedzi';
$lang['l_expire_v_e'] = 'Je�li w��czysz, posty napisane w panelu szybkiej odpowiedzi b�d� automatycznie wygasa� po 2 dniach. Domy�lne ustawienie: NIE';
$lang['max_smilies'] = 'Ilo�� u�mieszk�w w szybkiej odpowiedzi';
$lang['portal_link'] = 'Portal link';
$lang['portal_link_e'] = 'Gdy forum jest forum dla news�w lub sond w portalu link do strony g��wnej prowadzi do portalu';
$lang['search_enable'] = 'W��cz "Szukanie"';
$lang['search_enable_e'] = 'Je�eli wy��czysz opcj� "Szukaj", podczas pisania nowych post�w s�owa nie b�d� dodawane do bazy danych (zajmuj� one 50-60% bazy)';
$lang['overlib'] = 'Dynamiczne opisy element�w strony (dymki)';
$lang['notify_gg'] = 'Powiadomienia na GG';
$lang['notify_gg_e'] = 'Gdy na forum masz ustawion� bramk� GG, umo�liwia u�ytkownikom odbieranie powiadomie� o odpowiedziach w obserwowanych tematach. Jednak gdy serwer Gadu-gadu b�dzie niedost�pny, wysy�anie nowych post�w mo�e trwa� kilka sekund d�u�ej.<br />';
$lang['admin_notify_gg'] = 'Powiadomienia admina na GG';
$lang['admin_notify_gg_e'] = 'W tym miejscu podaj�c numer(y) GG, b�d� na niego wysy�ane powiadomienia o nowych tematach na twoim forum. Kilka numer�w oddziel przecinkami';
$lang['admin_notify_reply'] = 'Powiadomienia o odpowiedziach';
$lang['admin_notify_reply_e'] = 'Powiadamia r�wnie� o wszystkich odpowiedziach na twoim forum';
$lang['admin_notify_message'] = 'Ca�a tre�� w powiadomieniach';
$lang['admin_notify_message_e'] = 'W powiadomieniach admina, przesy�a ca�� tre�� post�w';
$lang['topic_start_date'] = 'Data rozpocz�cia tematu';
$lang['topic_start_dateformat'] = 'Format daty rozpocz�cia tematu';
$lang['topic_start_dateformat_e'] = 'Format daty w jakim b�dzie wy�wietlana data napisania tematu, je�li pozostawisz puste format b�dzie taki sam jak na forum.';
$lang['autorepair_tables'] = 'Autonaprawa tabel';
$lang['autorepair_tables_e'] = 'Skrypt probuje automatycznie naprawi� tabele SQL je�li zostanie uszkodzona, wysy�a e-mail do administratora forum.';
$lang['check_address'] = 'Sprawdzanie poprawno�ci adresu';
$lang['check_address_e'] = 'Sprawdza czy u�ytkownicy ��cz� si� na odpowiedni adres forum (z www. lub bez) wed�ug ustawie� nazwy domeny, je�li nie, przekierowuje na prawid�owy adres. Mo�e wyeliminowa� wiele nieprawid�owo�ci podczas ��czenia si� na z�y adres. Jednak przy nieprawid�owym ustawieniu domeny lub �cie�ki skryptu, mo�e uniemo�liwi� korzystanie z forum!';
$lang['echange_banner'] = 'Losowe bannery';
$lang['echange_banner_e'] = 'Mo�esz wstawi� losowe bannery. Masz do wyboru warto�ci 0-6.<br /><b>0</b> - Banner wy��czony, <b>1</b> - Banner na samej g�rze forum (nad tabel�), <b>2</b> - Banner w tabeli forum, <b>3</b> - Banner pod Menu forum, <b>4</b> - Banner na dole strony w tabeli forum, <b>5</b> - Banner na dole strony poza tabel� forum, <b>6</b> - Wy��cza avatar w lewym g�rnym rogu i wstawia w jego miejsce losowe bannery';
$lang['echange_banner_html'] = 'Podaj HTML losowych banner�w, mo�esz u�y� dowolnej liczby baner�w, kody HTML poszczeg�lnych banner�w musz� by� oddzielone poprzez: <b>[banner]</b><br />Przyk�ad: <b>&lt;table&gt;Pierwszy banner&lt;/table&gt;[banner]&lt;table&gt;Drugi banner&lt;/table&gt;</b><br /><a href="../images/dynamic.html" target="_blank">Obs�uga zamiennik�w</a>';
$lang['split_messages'] = '��cz zdublowane posty';
$lang['split_messages_e'] = 'Je�eli u�ytkownik napisze dwa posty pod rz�d, zostan� z��czone w jeden, zostanie dodana data ��czenia, u�ytkownikowi nie zwi�kszy si� licznik post�w.';
$lang['split_messages_admin'] = '��cz te� posty admina';
$lang['split_messages_mod'] = '��cz te� posty moderatora';
$lang['admin_html'] = 'Zezw�l Administratorom na HTML';
$lang['admin_html_e'] = 'Zezwala Administratorom na u�ywanie w postach dowolnych tag�w HTML, niezale�nie od ustawie� forum.';
$lang['jr_admin_html'] = 'Zezw�l Junior Adminom na HTML';
$lang['mod_html'] = 'Zezw�l Moderatorom na HTML';
$lang['last_visitors_time_e'] = 'Czas w godzinach dla wy�wietlania u�ytkownik�w kt�rzy odwiedzili forum przez ostatnie xx godzin. Przy warto�ci np: 12 mo�na zmieni� odpowiednio opis "godziny" na "godzin" w pliku lang_main.php zmienna: $lang[\'Day_users\']';
$lang['last_visitors_time_count'] = "Ilo�� pokazywanych u�ytkownik�w, kt�rzy odwiedzili forum przez ostatnie xx godzin.";
$lang['protection_get'] = 'Globalne zabezpieczenie przeciw w�amaniom ($_GET)';
$lang['protection_get_e'] = 'Opcja ta filtruje wszystkie dane pochodz�ce z paska adresu, od u�ytkownika.';
$lang['helped_a'] = 'Modu� "POM�G�"';
$lang['helped_e'] = 'W��cz punktacje "Pom�g�". Autor tematu, b�dzie m�g� doda� punkt "Pom�g�" osobie, kt�ra odpowiedzia�a w jego temacie.';
$lang['l_del_not_method'] = 'Rodzaj powiadomienia';
$lang['l_del_not_enable'] = 'Powiadomienia o usuni�ciu postu/tematu lub przesuni�ciu tematu';
$lang['l_del_not_choice'] = 'Mo�liwo�� wyboru przez Administratora lub Moderatora nie wysy�ania powiadomienia';
$lang['l_open_in_windows'] = 'Otw�rz wszystkie w nowych oknach';
$lang['l_open_in_windows_e'] = 'Przy wyszukiwaniu w widoku temat�w, dodaje link s�u��cy do otwarcia wszystkich znalezionych temat�w w nowych oknach. Przy bardziej obci��onym serwerze lub przy nadu�ywaniu, mo�e znacznie zwolni� dzia�anie forum.';
$lang['quick_reply_pages'] = 'Szybka odpowied� tylko na ostatniej stronie tematu';
$lang['clog_post'] = 'Loguj wszystkie warto�ci $_POST';
$lang['Show_online_status'] = 'Status online pod avatarem';
$lang['show_action_unlocked'] = 'Poka� kto odblokowa� temat';
$lang['show_action_locked'] = 'Poka� kto zamkn�� temat';
$lang['show_action_moved'] = 'Poka� kto przesun�� temat';
$lang['show_action_expired'] = 'Poka� kto wygasi� post/temat';
$lang['show_action_edited_by_others'] = 'Poka� kto edytowa� post';
$lang['show_action_edited_self'] = 'Poka� edycj� w�asnego postu';
$lang['show_action_edited_self_all'] = 'Poka� edycj� w�asnego postu nawet gdy nie ma odpowiedzi';
$lang['allow_mod_delete_actions'] = 'Zezw�l moderatorom na kasowanie informacji o czynno�ciach';
$lang['Always_in_category'] = 'W ka�dej kategorii';
$lang['Topic_spy_e'] = 'Szpieg dodaje link w widoku profilu u�ytkownik�w, prowadz�cy do widoku listy temat�w kt�re przegl�dali.<br />Szpieg wymaga w��czenia funkcji zapisuj�cej przegl�danie temat�w: <b>Kto przegl�da� temat</b>';
$lang['Topic_spy_mod'] = 'Szpieg dost�pny dla moderator�w';
$lang['Topic_spy_mod_admin'] = 'Zezw�l na "szpiegowanie" administrator�w przez moderator�w';
$lang['Post_overlib'] = 'Dymki ze skr�tem post�w po najechaniu na temat';
$lang['PH_values'] = 'Ilo�� dni przechowywania historii edycji post�w, 0 wy��cza';
$lang['PH_values_e'] = 'Gdy ktokolwiek b�dzie edytowa� jakikolwiek post, poprzednia tre�� postu zostanie zapisana w bazie danych. Pod postem pojawi si� link widoczny dla administrator�w lub moderator�w, wy�wietlaj�cy wszystkie zmieniane tre�ci postu';
$lang['PH_len'] = 'Ilo�� w r�nicy znak�w';
$lang['PH_len_e'] = 'Je�eli podasz warto�� np <b>3</b> a kto� zamieni w po�cie tylko jeden lub dwa znaki, historia nie zapisze tej zmiany. Zapisze tylko wtedy, gdy kto� zamieni 3 lub wi�cej znak�w. 0 lub 1 - Ka�da edycja w kt�rej zmieniono przynajmniej jeden znak b�dzie zapisywana';
$lang['PH_mod'] = 'Podgl�d historii post�w dost�pny dla moderator�w';
$lang['PH_mod_delete'] = 'Kasowanie historii dost�pne dla moderator�w';
$lang['onmouse'] = 'Efekty OnMouseOver po najechaniu mysz�';
$lang['anonymous_simple'] = 'Wy��cz dla u�ytkownik�w niezalogowanych dodatki:';
$lang['anonymous_simple_e'] = 'Dymki, OnMouseOver, Ikony systemu, Poziom u�ytkownik�w, Loading, Statystyki, Ostatnich odwiedzaj�cych<br />W celu zaoszcz�dzenia transferu';
$lang['Allow_autologin'] = 'Zezw�l na automatyczne logowanie';
$lang['Allow_autologin_explain'] = 'Wybierz w jaki spos�b u�ytkownicy mog� by� automatycznie logowani.<br />Automatyczne logowanie jest bezpieczne tylko wtedy, gdy jest sprawdzanie adresu IP. Istnieje zabezpieczenie kont u�ytkownik�w i automatycznego logowania kt�re polega na sprawdzaniu adresu IP ostatniej wizyty, je�eli jest on inny, wymaga r�cznego zalogowania. Mo�e to by� utrudnieniem dla os�b ze zmiennym IP. Zwykli u�ytkownicy maj� mo�liwo�� wy��czenia tego zabezpieczenia w swoim profilu, nie maj� jej Administratorzy, Junior Administratorzy i Moderatorzy. Administrator ma mo�liwo�� wy��czenia tej funkcji dla dowolnego u�ytkownika w edycji jego profilu.';
$lang['Posting'] = 'Pisanie post�w';
$lang['Registering'] = 'Rejestracj�';
$lang['AA_no_limit'] = 'Bez ogranicze�';
$lang['AA_with_IP'] = 'Ze sprawdzaniem ostatniego adresu IP';
$lang['AA_with_staff_IP'] = 'Ze sprawdzaniem ostatniego adresu IP dla Admina i Moderatora';
$lang['Public_category'] = 'Je�eli chcesz aby forum by�o prezentowane w <a href="http://www.przemo.org/phpBB2/forums.php" target="_blank">Katalogu For�w Dyskusyjnych</a> wybierz jedn� z kategorii. W katalogu pojawi si� adres forum pobrany z Nazwy Domeny i �cie�ki Skryptu oraz opis pobrany z Opisu Strony. Uwaga, opis b�dzie skr�cony do 100 znak�w. Aktualizacja danych jest dokonywana raz na dwa dni podczas wej�cia do Panelu Admina, podobnie jak pobieranie informacji o aktualizacjach';
$lang['Public_categories'][] = 'Zdrowie i Uroda';
$lang['Public_categories'][] = 'Dzieci i Rodzina';
$lang['Public_categories'][] = '�wiat, Ludzie i Polityka';
$lang['Public_categories'][] = 'Ekonomia i Biznes';
$lang['Public_categories'][] = 'J�zyki, Narody i Edukacja';
$lang['Public_categories'][] = 'Nauka i Technika';
$lang['Public_categories'][] = 'Kultura i Sztuka';
$lang['Public_categories'][] = 'Muzyka';
$lang['Public_categories'][] = 'Zwierz�ta i Ro�liny';
$lang['Public_categories'][] = 'Gry';
$lang['Public_categories'][] = 'Sport';
$lang['Public_categories'][] = 'Internet i Komputery';
$lang['Public_categories'][] = 'Motoryzacja';
$lang['Public_categories'][] = 'Hobbystyczne';
$lang['Public_categories'][] = 'Rozrywka';
$lang['Public_categories'][] = 'Towarzyskie, Erotyka i Sex';
$lang['Public_categories'][] = 'Regionalne';
$lang['Public_categories'][] = 'Wielotematyczne';
$lang['Public_categories'][] = 'Ekstremalne';
$lang['Public_categories'][] = 'Inne';

?>