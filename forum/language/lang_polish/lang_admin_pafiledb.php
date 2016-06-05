<?php

// Check for user gender
$he = ($userdata['user_gender'] != 2) ? true : false;

// Categories
$lang['Acattitle'] = 'Dodaj kategori�'; 
$lang['Ecattitle'] = 'Edytuj kategori�'; 
$lang['Dcattitle'] = 'Usu� kategori�'; 
$lang['Rcattitle'] = 'Przemianuj kategori�'; 
$lang['Catexplain'] = 'Mo�esz u�y� tego menad�era do dodawania, edytowania i przemianowywania kategorii. �eby doda� plik, musisz stworzy� przynajmniej jedn� kategori�.'; 
$lang['Rcatexplain'] = 'Mo�esz przemianowa� kategori�, aby by�a pokazywana w innym miejscu na stronie.';
$lang['Catadded'] = 'Kategoria dodana';
$lang['Catname'] = 'Nazwa kategorii';
$lang['Catnameinfo'] = 'To b�dzie nazwa kategorii.';
$lang['Catdesc'] = 'Opis kategorii';
$lang['Catdescinfo'] = 'To jest opis kategorii';
$lang['Catparent'] = 'G��wny katalog';
$lang['Catparentinfo'] = 'Je�li chcesz aby ta kategoria by�a podkategori� innej, wybierz g��wn� kategori�, w kt�rej bedzie utworzona.';
$lang['None'] = 'Brak';
$lang['Catedited'] = 'Kategoria zmieniona';
$lang['Delfiles'] = 'Usun�� pliki z tej kategorii?';
$lang['Catsdeleted'] = 'Kategoria usuni�ta';
$lang['Cdelerror'] = 'Nie wybra�' .  (($he) ? 'e' : 'a') . '� kategorii do usuni�cia';
$lang['Rcatdone'] = 'Kategoria przemianowana';

// Configuration
$lang['Settingstitle'] = 'Konfiguracja downloadu';
$lang['Settingsexplain'] = 'W tym miejscu mo�esz zmieni� g��wne ustawienia downloadu.';
$lang['Dbname'] = 'Nazwa bazy danych';
$lang['Dbnameinfo'] = 'Nazwa bazy danych \'Download Index\'';
$lang['Sitename'] = 'Nazwa strony';
$lang['Sitenameinfo'] = 'Nazwa twojej strony \'Home\'';
$lang['Dburl'] = 'Adres bazy danych';
$lang['Dburlinfo'] = 'Adres bazy danych, do miejsca w kt�rym jest ona zainstalowana';
$lang['Hpurl'] = 'Adres strony g��wnej';
$lang['Hpurlinfo'] = 'Adres URL do twojego portalu lub strony';
$lang['Topnum'] = 'Toplista';
$lang['Topnuminfo'] = 'Ile pokazywa� plik�w w topliscie';
$lang['Nfdays'] = 'Data dla nowych plik�w';
$lang['Nfdaysinfo'] = 'Ile dni w stecz b�dzie okre�la�o nowe pliki';
$lang['Showva'] = 'Poka� wszystkie pliki';
$lang['Showvainfo'] = 'Czy pokazywa� widok wszystkich plik�w?';
$lang['Showss'] = 'Poka� screenshot';
$lang['Showssinfo'] = 'Wy�wietla� screenshot?';
$lang['Dbdl'] = 'Wy��cz Download';
$lang['Dbdlinfo'] = 'Wy��cza download dla u�ytkownik�w';
$lang['Com_settings'] = 'Ustawienia komentarzy';
$lang['Com_allowh'] = 'Zezw�l na HTML';
$lang['Com_allowb'] = 'Zezw�l na BBCode';
$lang['Com_allows'] = 'Zezw�l na U�mieszki';
$lang['Com_allowl'] = 'Zezw�l na linki';
$lang['Com_messagel'] = 'Informacja "No Links"';
$lang['Com_messagel_info'] = 'Informacja wy�wietlana, jesli nie ma zezwolenia na linki';
$lang['Com_allowi'] = 'Zezw�l na obrazki';
$lang['Com_messagei'] = 'Informacja "No Images"';
$lang['Com_messagei_info'] = 'Informacja wy�wietlana, jesli nie ma zezwolenia na obrazki';
$lang['Max_char'] = 'Maksymalna ilo�� znak�w';
$lang['Max_char_info'] = 'Maksymalna ilo�� znak�w dla komentarzy';
$lang['Settings_changed'] = 'Ustawienia zaktualizowane';
$lang['l_dlinked'] = 'Zabezpieczenie �ci�gania z innych adres�w';
$lang['l_dlinked_e'] = 'Zabezpiecza przed �ci�ganiem plik�w w menu download bezpo�rednio z innych adresow';

// Custom Field
$lang['Afieldtitle'] = 'Dodaj Dodatkowe pole dla pliku';
$lang['Efieldtitle'] = 'Edytuj';
$lang['Dfieldtitle'] = 'Usu�';
$lang['Fieldexplain'] = 'W tym miejscu mo�esz doda� dodatkowe pole dla plik�w, np: \'Data\' lub \'Rozmiar\'';
$lang['Fieldname'] = 'Nazwa';
$lang['Fieldnameinfo'] = '';
$lang['Fielddesc'] = 'Opis';
$lang['Fielddescinfo'] = '';
$lang['Fieldadded'] = 'Dodatkowe pole dodane';
$lang['Fieldedited'] = 'Dodatkowe pole zmienione';
$lang['Dfielderror'] = 'Nie wybra�' .  (($he) ? 'e' : 'a') . '� dodatkowych p�l do skasowania';
$lang['Fieldsdel'] = 'Dodatkowe pole usuni�te';

// File
$lang['Afiletitle'] = 'Dodaj plik';
$lang['Efiletitle'] = 'Edytuj plik';
$lang['Dfiletitle'] = 'Usu� plik';
$lang['Fileexplain'] = 'W tym miejscu, mo�esz dodawa�, edytowa� i kasowa� pliki';
$lang['Upload'] = 'Wyslij plik';
$lang['Uploadinfo'] = 'Wy�lij plik';
$lang['Uploaderror'] = 'Nazwa pliku istnieje, zmie� nazw� i spr�buj jeszcze raz';
$lang['Uploaddone'] = 'Plik zapisany, adres dla pliku to';
$lang['Uploaddone2'] = 'Kliknij tutaj aby umie�ci� adres pliku w formularzu';
$lang['Upload_do_done'] = 'Plik zapisany';
$lang['Upload_do_not'] = 'Plik nie zapisany';
$lang['Upload_do_exist'] = 'Plik istnieje';
$lang['Filename'] = 'Nazwa pliku';
$lang['Filenameinfo'] = 'Nazwa dla twojego pliku';
$lang['Filesd'] = 'Kr�tki opis';
$lang['Filesdinfo'] = '';
$lang['Fileld'] = 'D�ugi opis';
$lang['Fileldinfo'] = '';
$lang['Filecreator'] = 'Autor';
$lang['Filecreatorinfo'] = '';
$lang['Fileversion'] = 'Wersja';
$lang['Fileversioninfo'] = '';
$lang['Filess'] = 'Adres screenshotu';
$lang['Filessinfo'] = '';
$lang['Filessupload'] = 'Wy�lij screenshot na serwer';
$lang['Filedocs'] = 'Adres dokumentacji';
$lang['Filedocsinfo'] = '';
$lang['Fileurl'] = 'Adres pliku';
$lang['Fileurlinfo'] = 'Wpisz adres, lub ';
$lang['Fileurlupload'] = 'Wyslij plik na serwer';
$lang['Filepi'] = 'Ikona dla pliku';
$lang['Filepiinfo'] = '';
$lang['Filecat'] = 'Kategoria';
$lang['Filecatinfo'] = '';
$lang['Filelicense'] = 'Licencja';
$lang['Filelicenseinfo'] = 'Licencja, kt�ra musi by� zaakceptowana przez �ci�gaj�cego';
$lang['Filepin'] = 'Pin File';
$lang['Filepininfo'] = 'Wybierz je�li chcesz �eby pliki by�y zawsze pokazywane nad innymi plikami.';
$lang['Filedls'] = 'Download Total';
$lang['Fileadded'] = 'Plik dodany';
$lang['Fileedited'] = 'Plik dodany';
$lang['Fderror'] = 'You didn\'t select any files to delete';
$lang['Filesdeleted'] = 'Plik skasowany';
$lang['File_checker'] = 'Konserwacja plik�w';
$lang['File_checker_explain'] = 'Tutaj mo�esz sprawdzi� pliki w bazie danych i w katalogu';
$lang['File_saftey'] = 'Konserwacja plik�w s�u�y do usuwania wszystkich niepotrzbnych, zalegaj�cych plik�w (z wyj�tkiem plik�w z innego katalogu ni�: {html_path} oraz czyszczenia wpis�w w bazie danych odnosz�cych si� do nie istniej�cych plik�w.<br />Przed rozpocz�ciem konserwacji ' .  (($he) ? 'powiniene�' : 'powinna�') . ' zrobi� kopi� katalogu plik�w oraz kopi� bazy danych.';
$lang['File_checker_perform'] = 'Konserwuj';
$lang['Checker_saved'] = 'Ca�kowita zapisana powierzchnia';
$lang['Checker_sp1'] = 'Konserwacja wpis�w dla nieistniej�cych plik�w...';
$lang['Checker_sp2'] = 'Konserwacja wpis�w dla nieistniej�cych screenshot\'�w...';
$lang['Checker_sp3'] = 'Kasowanie nieu�ywanych plik�w...'; 

// License 
$lang['Alicensetitle'] = 'Dodaj licencje';
$lang['Elicensetitle'] = 'Edytuj licencje';
$lang['Dlicensetitle'] = 'Skasuj licencje';
$lang['Licenseexplain'] = 'W tym miejscu mo�esz ustawi� parametry Licencji. Licencja musi by� zaakceptowana przez u�ytkownika, zanim �ci�gnie plik';
$lang['Lname'] = 'Nazwa licencji';
$lang['Ltext'] = 'Tre�� licencji';
$lang['Licenseadded'] = 'Licencja dodana';
$lang['Licenseedited'] = 'Licencja zmieniona';
$lang['Ldeleted'] = 'Licencja dodana';

$lang['file_not_type'] = 'Plik zbyt du�y, ma niew�a�ciwy format, lub tw�j serwer nie obs�uguje uploadu plik�w.<br />Prze�lij plik poprzez FTP do katalogu pafiledb/uploads i podaj adres w polu formularza: pafiledb/uploads/nazwa_pliku ';

$lang['Click_return'] = 'Kliknij %sTutaj%s �eby wr�ci� do poprzedniej strony';

$lang['extension_forbidden'] = "Rozszerzenie '%s' jest niedozwolone.";

?>