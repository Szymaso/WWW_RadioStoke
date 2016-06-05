<?php

// Check for user gender
$he = ($userdata['user_gender'] != 2) ? true : false;

// Toplist
$lang['Toplist'] = 'Toplista';
$lang['Select_list'] = 'Wybierz liste do pokazania';
$lang['By_date'] = 'Wed�ug daty';
$lang['By_download'] = 'Wedlug �ci�gni��';
$lang['By_rated'] = 'Wed�ug ocen';
$lang['Latest_downloads'] = 'Starszy download';
$lang['Most_downloads'] = 'Najcz�ciej �ci�gane';
$lang['Rated_downloads'] = 'Najlepiej oceniany';

// Main
$lang['Files'] = 'Pliki';
$lang['Viewall'] = 'Poka� wszystkie pliki';
$lang['Vainfo'] = 'Poka� wszystkie pliki w bazie';
$lang['Jump'] = "Wybierz kategori�";

// Sort 
$lang['Next'] = 'Nast�pny';
$lang['Pagenums'] = 'Strony';
$lang['Prev'] = 'Wcze�niejsze';
$lang['Name'] = 'Nazwa';

// Category
$lang['No_files'] = 'Nie znaleziono plik�w';
$lang['No_files_cat'] = 'Nie ma plik�w w tej kategorii.';

// File
$lang['File'] = 'Plik';
$lang['Desc'] = 'Opis';
$lang['Creator'] = 'Autor';
$lang['Version'] = 'Wersja';
$lang['Scrsht'] = 'Screenshot';
$lang['Docs'] = 'Dokumentacja';
$lang['Lastdl'] = 'Ostatni plik';
$lang['Never'] = 'Nigdy';
$lang['Votes'] = ' g�os�w';
$lang['Date'] = 'Data';
$lang['DlRating'] = 'Oceny';
$lang['Dls'] = ' �ci�gni��';
$lang['Downloadfile'] = '�ci�gnij plik';

// License
$lang['License'] = 'Licencja';
$lang['Licensewarn'] = 'Musisz zgodzi� si� z licencj� �eby �ci�gn�� plik';
$lang['Iagree'] = 'Zgadzam si�';
$lang['Dontagree'] = 'Nie zgadzam si�';

// Search
$lang['Search'] = 'Szukaj';
$lang['Search_for'] = 'Szukaj';
$lang['Results'] = 'Rezultaty dla';
$lang['No_matches'] = 'Nic nie znaleziono';
$lang['Matches'] = 'Znaleziono';

// Statistics
$lang['Statistics'] = 'Statystyki';
$lang['Stats_text'] = "Mamy {total_files} plik�w w {total_categories} kategoriach<br />";
$lang['Stats_text'] .= "Wszystkich: {total_downloads}<br /><br />";
$lang['Stats_text'] .= "Ostatni plik <a href=\"{u_newest_file}\">{newest_file}</a><br />";
$lang['Stats_text'] .= "Najstarszy plik <a href=\"{u_oldest_file}\">{oldest_file}</a><br /><br />";
$lang['Stats_text'] .= "�rednia ocen {average}/10<br />";
$lang['Stats_text'] .= "Najwy�ej oceniany <a href=\"{u_popular}\">{popular}</a> oceny: {most}/10<br />";
$lang['Stats_text'] .= "Ostatnio najwy�ej oceniany: <a href=\"{u_lpopular}\">{lpopular}</a> oceny: {least}/10<br /><br />";
$lang['Stats_text'] .= "Suma plik�w {avg_dls}<br />";
$lang['Stats_text'] .= "Najcz�ciej �ci�gany <a href=\"{u_most_dl}\">{most_dl}</a> �ci�gni��: {most_no}<br />";
$lang['Stats_text'] .= "Ostatnio najcz�ciej �ci�gany: <a href=\"{u_least_dl}\">{least_dl}</a> �ci�gni��: {least_no}<br />";

$lang['Stats_portal'] = "<tr><td class='row1' align='$portal_config[download_pos]'><span class='gensmall'>Wszystkich plik�w: {total_files}</span></td></tr>";
$lang['Stats_portal'] .= "<tr><td class='row2' align='$portal_config[download_pos]'><span class='gensmall'>Najwy�ej oceniany: <a href=\"{u_popular}\">{popular}</a></span></td></tr>";
$lang['Stats_portal'] .= "<tr><td class='row1' align='$portal_config[download_pos]'><span class='gensmall'>Najcz�ciej �ci�gany: <a href=\"{u_most_dl}\">{most_dl}</a></span></td></tr>";
$lang['Stats_portal'] .= "<tr><td class='row2' align='$portal_config[download_pos]'><span class='gensmall'>Ostatni plik: <a href=\"{u_newest_file}\">{newest_file}</a></span></td></tr>";
$lang['Stats_portal'] .= "<tr><td class='row1' align='$portal_config[download_pos]'><span class='gensmall'>Ostatnio najcz�ciej �ci�gany: <a href=\"{u_least_dl}\">{least_dl}</a></span></td></tr>";
$lang['Stats_portal'] .= "<tr><td class='row2' align='$portal_config[download_pos]'><span class='gensmall'>Ostatnio najwy�ej oceniany: <a href=\"{u_lpopular}\">{lpopular}</a></span></td></tr>";

// Rate
$lang['Rate'] = 'Oce� plik';
$lang['Rerror'] = 'Ju� ocenia�' .  (($he) ? 'e' : 'a') . '� ten plik.';
$lang['Rateinfo'] = ' <i>{filename}</i>.<br />Wybierz swoj� ocen� w skali 1 - 10';
$lang['Rconf'] = 'Oceni�' .  (($he) ? 'e' : 'a') . '� plik na: <b>{filename}</b> z {rate}.<br />Og�lna ocena pliku: <b>{newrating}/10</b>';
$lang['R1'] = '1';
$lang['R2'] = '2';
$lang['R3'] = '3';
$lang['R4'] = '4';
$lang['R5'] = '5';
$lang['R6'] = '6';
$lang['R7'] = '7';
$lang['R8'] = '8';
$lang['R9'] = '9';
$lang['R10'] = '10';

// Email
$lang['Emailfile'] = 'Wy�lij email do znajomego z informacj� o tym pliku';
$lang['Emailinfo'] = '';
$lang['Yname'] = 'Twoj� imi�';
$lang['Yemail'] = 'Tw�j email';
$lang['Fname'] = 'Imi� znajomego';
$lang['Femail'] = 'E-mail znajomego';
$lang['Esub'] = 'Temat listu';
$lang['Etext'] = 'Tre��';
$lang['Defaultmail'] = 'My�l� �e mo�e Ci� zainteresowa� plik, kt�ry znalaz�em na';
$lang['Semail'] = 'Wy�lij email';
$lang['Econf'] = "Email wys�any.";

// Comments
$lang['Comments'] = 'Komentarze';
$lang['Comment_subject'] = 'Temat komentarza'; 
$lang['Comment_explain'] = 'Uzyj pola powy�ej aby skomentowa� plik.'; 
$lang['Comment_add'] = 'Dodaj komentarz'; 
$lang['Comment_delete'] = 'Usu�'; 
$lang['Comment_posted'] = 'Komentarz dodany'; 
$lang['Comment_deleted'] = 'Komentarz usuni�ty'; 
$lang['No_comments'] = 'Brak komentarzy.';

// Download
$lang['Directly_linked'] = 'Nie mo�esz �ci�gn�� pliku bezpo�rednio z innego adresu!';

// General
$lang['Click_return'] = 'Kliknij %sTutaj%s �eby wr�ci� do poprzedniej strony';
$lang['never'] = 'Nie';
$lang['jump'] = 'Wybierz kategori�';
$lang['viewall_disabled'] = 'Wy��czone przez administratora.';
$lang['New_file'] = 'Nowy plik';
$lang['you_have_login'] = "Musisz si� %sZalogowa�%s �eby �ci�gn�� ten plik";

?>