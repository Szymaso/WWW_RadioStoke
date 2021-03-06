<?php
$lang['Empty_server_name'] = 'Brak nazwy domeny';
$lang['Empty_port'] = 'Brak portu serwera';
$lang['Empty_path'] = 'Brak �cie�ki skryptu';
$lang['Empty_dbhost'] = 'Brak hostu serwera SQL';
$lang['Empty_dbname'] = 'Brak nazwy bazy danych';
$lang['Empty_dbuser'] = 'Brak u�ytkownika bazy danych, z powod�w bezpiecze�stwa jest to wymagane';
$lang['Empty_dbpasswd'] = 'Brak has�a bazy danych, z powod�w bezpiecze�stwa jest to wymagane';
$lang['Empty_username'] = 'Brak nazwy administratora';
$lang['Empty_email'] = 'Brak adresu e-mail';
$lang['Welcome_install'] = 'Witamy w Instalacji phpBB modified by Przemo';
$lang['ftp_instructs'] = 'Wybra�e� opcj� automatycznego wys�ania pliku do katalogu zawieraj�cego skrypt phpbb2 modified by Przemo. Poni�ej wpisz informacje potrzebne do wykonania tego polecenia. Pami�taj, �e �cie�ka powinna by� dok�adnie taka jak� u�ywasz przy po��czeniach z FTP przez inne programy.';
$lang['NoFTP_config'] = 'Pr�ba wys�ania pliku drog� ftp na swoje miejsce nie powiod�a si�. �ci�gnij plik konfiguracyjny i wy�lij go na miejsce samodzielnie.';
$lang['Inst_Step_2'] = 'Konto administratora zosta�o utworzone. W tej chwili podstawowa instalacja jest zako�czona. Pami�taj o sprawdzeniu Konfiguracji G��wnej i zmianie tych opcji, kt�re tego wymagaj�. Pami�taj te� o sprawdzeniu w Panelu Administracyjnym w sekcji "Kontrola Systemu" czy wymagaj�ce tego pliki i katalogi w katalogu forum maj� prawa do zapisu, w przeciwnym wypadku cz�� funkcji nie b�dzie dzia�a� prawid�owo.<br />Dzi�kujemy, za wyb�r phpBB modified by Przemo.';
$lang['Start_Install'] = 'Zacznij Instalacj�';
$lang['Finish_Install'] = 'Zako�cz Instalacj�';
$lang['Inst_Step_0'] = 'Dzi�kujemy, za wyb�r phpBB modified by Przemo. Aby zainstalowa� forum wpisz poni�sze dane. Pami�taj, �e baza danych, w kt�rej chcesz zainstalowa� forum powinna wcze�niej istnie�.<br />Poni�ej jest formularz s�u��cy do wprowadzenia podstawowych danych konfiguracyjnych, warto�ci kt�re s� ju� podane nie musisz zmienia� (zosta�y wykryte automatycznie). Wszystkie dane mo�na zmieni� p�niej w Panelu Administracyjnym';
$lang['Unwriteable_config'] = 'Tw�j plik konfiguracyjny nie mo�e zosta� zapisany. Jego kopia zostanie wys�ana do ciebie je�li wci�niesz poni�szy przycisk, i zapisze sie na Twoim komputerze. Powiniene� potem wys�a� j� samodzielnie do katalogu g��wnego forum. Kiedy to zrobisz zaloguj si� do nowego forum, u�ywaj�c twoich danych podanych wcze�niej, oraz odwiedzi� Panel Aministracyjny forum (do kt�rego odno�nik pojawi si� na dole ka�dej strony forum, kiedy si� zalogujesz) aby zmieni� opcje. Dzi�kujemy, za wyb�r phpBB modified by Przemo.';
$lang['Download_config'] = '�ci�gnij Plik Konfiguracyjny';
$lang['Initial_config'] = 'Podstawowa Konfiguracja';
$lang['Transfer_config'] = 'Rozpocznij Transfer';
$lang['ftp_path'] = '�cie�ka FTP do katalogu forum';
$lang['ftp_password'] = 'Has�o FTP';
$lang['DB_config'] = 'Konfiguracja Bazy Danych';
$lang['dbms'] = 'Typ Bazy Danych';
$lang['DB_Host'] = 'Server Bazy Danych / DSN';
$lang['DB_Name'] = 'Nazwa Bazy Danych';
$lang['DB_Username'] = 'U�ytkownik Bazy Danych';
$lang['DB_Password'] = 'Has�o Bazy Danych';
$lang['Table_Prefix'] = 'Prefiks dla tabel w bazie danych';
$lang['Admin_config'] = 'Konfiguracja Admina';
$lang['Admin_Username'] = 'Nazwa Administratora';
$lang['Admin_Password'] = 'Has�o Administratora';
$lang['Admin_Password_confirm'] = 'Has�o Administratora [ Potwierd� ]';
$lang['Installer_Error'] = 'Wyst�pi� b��d podczas instalacji';
$lang['Install_db_error'] = 'Wyst�pi� b��d przy instalacji do bazy danych';
$lang['Install_No_Ext'] = 'Konfiguracja php na serwerze nie obs�uguje wybranej bazy danych';
$lang['Upgrade'] = 'Aktualizacja';

$lang['Wrong_file_checksum'] = 'Z�a zawarto�� pliku! <span class="gensmall">Suma kontrolna: [ %s ]</span>';
$lang['Missing_file'] = 'Brak pliku!';
$lang['Wrong_checksum'] = 'Niekt�re pliki wys�ane na serwer maj� z�� zawarto�� (s� prawdopodobnie uszkodzone)<br />Je�eli nie edytowa�e� �adnych plik�w, oznacza to, �e wyst�pi�y problemy z ich wysy�aniem na serwer. Sprobuj ponownie wys�a� pliki, kt�re s� wy�wietlone poni�ej. Mo�esz spr�bowa� w��czy� lub wy��czy� przesy�anie w trybie binarnym.<br /><br />Je�eli zmienia�e� zawarto�� plik�w celowo, kliknij <a href="install.'.$phpEx.'?mode=break">TUTAJ</a> aby zainstalowa� forum, ale <font color="red"><b>TYLKO w tym przypadku!</b></font><br />Je�eli �ciagn��e� oryginalny pakiet ze strony http://www.przemo.org/phpBB2 i nie zmienia�e� �adnych plik�w, wy�lij je ponownie na serwer. W innym przypadku forum nie b�dzie dzia�a� prawid�owo!</font>';
$lang['Install_duplicate_tables_info'] = 'Wyst�pi� nieoczekiwany b��d instalacji do bazy SQL. Plik instalacyjny: <b>%s</b><br /><br />W bazie danych <b>"%s"</b> istniej� tabele phpBB2 z prefixem <b>"%s"</b><br /><br />Mo�esz wybra� inny prefix dla nowo instalowanego forum, lub usun�� istniej�ce tabele. Je�eli zdecydujesz si� usun��, upewnij si�, �e tabele nie s� potrzebne (nie korzysta z nich inne forum dyskusyjne. Nie mo�na cofn�� tej operacji !';
$lang['Install_duplicate_tables_info2'] = 'Wyst�pi� nieoczekiwany b��d instalacji do bazy SQL. Plik instalacyjny: <b>%s</b><br /><br />Nie mo�na kontynuowa� instalacji forum.<br />Istnieje mo�liwo�c poprawienia b��du w pliku lub w ustawieniach serwera w celu wyeliminowania b��du.<br />Gdy to zostanie zrobione b�dzie mo�liwo�c kontunuacji lecz w�wczas nale�y usun�� tabele, kt�re zosta�y juz utworzone, lub utworzy� nowe, zmieniaj�c prefix.';
$lang['Install_duplicate_tables_info3'] = 'Wyst�pi� nieoczekiwany b��d instalacji do bazy SQL. Plik instalacyjny: <b>%s</b><br /><br />Nie mo�na kontynuowa� instalacji forum.<br />Istnieje mo�liwo�� poprawienia b��du w pliku lub w ustawieniach serwera w celu wyeliminowania b��du.<br />Gdy to zostanie zrobione b�dzie mo�liwo�c kontunuacji.';
$lang['Remove_tables'] = 'Usu� wszystkie tabele z prefixem: <b>"%s"</b>';
$lang['Change_prefix'] = 'Zmie� prefix nowych tabel';
$lang['Continue'] = 'Kontynuuj';
$lang['DB_name_e'] = 'Je�eli jej nie znasz, skontaktuj si� z administratorem hostingu';
$lang['DB_username_e'] = 'Nazwa u�ytkownika przypisanego do powy�szej bazy';
$lang['Table_Prefix_e'] = 'Dowolny ci�g znak�w identyfikuj�cy tabele forum w bazie';
$lang['Admin_config_e'] = 'Twoje osobiste dane: e-mail kt�ry b�dzie u�ywany na forum oraz z kt�rego b�d� wysy�ane wiadomo�ci z forum. Nazwa u�ytkownika i has�o u�ywane na forum.';
$lang['Install_warning_1'] = '- Niekt�re katalogi lub pliki nie maj� praw do zapisu. Po zainstalowaniu forum, w Panelu Administracyjnym w sekcji "Kontrola Systemu" sprawd� kt�re katalogi tego wymagaj� i ustaw im prawa do zapisu u�ywaj�c klienta FTP. W przeciwnym razie niekt�re funkcje forum nie b�d� dzia�a�. W zwi�zku z tym prawdopodobnie po zako�czeniu instalacji b�dzie konieczne �ci�gni�cie pliku konfiguracyjnego <b>%s</b> i wys�aniu go poprzez FTP';
$lang['Go_to_admin_panel'] = 'Przej�� do Panelu Administracji';
$lang['Go_to_forum'] = 'Przej�� na stron� g��wn� Forum';
$lang['After_downloading'] = 'Po odebraniu pliku i wys�aniu do katalogu forum mo�esz:';
$lang['File_download_trouble'] = 'Je�eli z jaki� powod�w nie mo�esz �ci�gn�� pliku, poni�ej znajduje si� jego zawarto��. Skopiuj j� dok�adnie, utw�rz na dysku plik <b>%s</b> i wklej skopiowan� zawarto�� (upewnij si�, �e na pocz�tku i na ko�cu pliku nie ma spacji ani pustej linii! Po czym wy�lij go do g��wnego katalogu forum.';
?>