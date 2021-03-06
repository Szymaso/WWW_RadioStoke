<?php

$he = ($userdata['user_gender'] != 2) ? true : false;

$lang['Current_password'] = 'Obecne Has�o';
$lang['Confirm_password_explain'] = 'Musisz potwierdzi� obecne has�o je�li chcesz je zmieni� lub poda� inny adres email';
$lang['password_if_changed'] = 'Musisz podawa� has�o tylko je�li chcesz je zmieni�';
$lang['password_confirm_if_changed'] = 'Musisz potwierdza� has�o tylko je�li chcesz je zmieni�';
$lang['Occupation'] = 'Zaw�d';
$lang['Board_lang'] = 'J�zyk Forum';
$lang['Timezone'] = 'Strefa Czasowa';
$lang['Birthday'] = 'Data urodzenia';
$lang['Always_smile'] = 'Zawsze w��czaj U�mieszki';
$lang['Always_bbcode'] = 'Zawsze w��czaj BBCode';
$lang['Always_html'] = 'Zawsze w��czaj HTML';
$lang['Hide_user'] = 'Ukryj moj� obecno�� na forum';
$lang['Always_add_sig'] = 'Zawsze dodawaj m�j podpis';
$lang['Avatar_panel'] = 'Panel kontrolny Avatar�w';
$lang['Avatar_explain'] = 'Wy�wietla ma�y obrazek pod informacjami o Tobie przy ka�dym po�cie. Tylko jeden obrazek mo�e by� wy�wietlany, jego szeroko�� nie mo�e by� wi�ksza ni� %d pikseli, wysoko�� wi�ksza ni� %d pikseli, a rozmiar wi�kszy ni� %dkB.';
$lang['Upload_Avatar_file'] = 'Wy�lij obrazek z twojego komputera';
$lang['Upload_Avatar_URL'] = 'Wy�lij obrazek z adresu';
$lang['Upload_Avatar_URL_explain'] = 'Wpisz adres, pod kt�rym zlokalizowany jest Tw�j obrazek, zostanie on skopiowany na t� stron�.';
$lang['Select_from_gallery'] = 'Wybierz Avatar z galerii';
$lang['View_avatar_gallery'] = 'Poka� galeri�';
$lang['Link_remote_Avatar'] = 'Odno�nik do zewn�trznego obrazka';
$lang['Link_remote_Avatar_explain'] = 'Wpisz adres obrazka, kt�ry chcesz wykorzysta�.';
$lang['Delete_Image'] = 'Usu� Obraz';
$lang['Signature_panel'] = 'Podpis';
$lang['Signature_text'] = 'Tekst podpisu';
$lang['Signature_text_explain'] = 'Podpis - dozwolona ilo�� znak�w: %d';
$lang['Signature_explain'] = 'Umo�liwia wstawienia obrazka do twojego podpisu. Tylko jeden obrazek jest dozwolony w podpisie, nie mo�e by� szerszy ni� %d pikseli i wy�szy ni� %d pikseli. Rozmiar nie mo�e przekracza� %d Kb.';
$lang['Current_Image'] = 'Obecny Obraz';
$lang['Always_notify'] = 'Zawsze powiadamiaj o odpowiedziach';
$lang['Always_notify_explain'] = 'Wysy�a email gdy kto� odpowie w temacie, w kt�rym napisa�' .  (($he) ? 'e' : 'a') . '� wiadomo��. Mo�esz to zmieni� przy ka�dej napisanej wiadomo�ci';
$lang['l_notify_gg_e'] = 'Je�eli wybierzesz powiadamiane na Gadu-Gadu, informacje o prywatnych wiadomo�ciach oraz o odpowiedziach w �ledzonych tematach, b�dziesz dostawa�' .  (($he) ? '' : a) . ' tylko na Gadu-Gadu<br />Musisz doda� numer %s do listy u�ytkownik�w w GG, �eby otrzymywa� powiadomienia.';
$lang['Notify_on_privmsg'] = 'Powiadom o Prywatnej Wiadomo�ci';
$lang['Popup_on_privmsg'] = 'Otw�rz okno przy nadej�ciu Wiadomo�ci';
$lang['Popup_on_privmsg_explain'] = 'Niekt�re szablony mog� otwiera� nowe okno aby poinformowa� o nadej�ciu nowej Prywatnej Wiadomo�ci';
$lang['Public_view_email'] = 'Pokazuj m�j Adres Email';
$lang['Public_view_aim'] = 'Pokazuj m�j numer GG';
$lang['Registration_info'] = 'Obowi�zkowe Dane Rejestracji';
$lang['Profile_info'] = 'Informacje Profilu (nieobowi�zkowe, mo�na je zmieni� p�niej, chyba �e s� zaznaczone gwiazdk�)';
$lang['Profile_info_warn'] = 'Te informacje b�d� widoczne publicznie';
$lang['allowpm'] = 'W��cz prywatne wiadomo�ci';
$lang['allowpm_e'] = 'Je�eli wy��czysz, nie b�dziesz dostawa� prywatnych wiadomo�ci';
$lang['Wrong_Profile'] = 'Nie mo�esz zmienia� cudzego profilu.';
$lang['Only_one_avatar'] = 'Mo�na okre�li� tylko jeden typ obrazka';
$lang['File_no_data'] = 'Plik pod podanym adresem nie zawiera �adnych danych';
$lang['No_connection_URL'] = 'Nie mo�na by�o po��czy� si� z podanym przez Ciebie adresem';
$lang['Incomplete_URL'] = 'Wpisany adres jest niekompletny';
$lang['Wrong_remote_avatar_format'] = 'Podany adres obrazka nie jest prawid�owy';
$lang['No_send_account_inactive'] = 'Twoje has�o nie mo�e by� odzyskane gdy� Twoje konto jest obecnie nieaktywne. Skontaktuj si� z administratorem aby uzyska� wi�cej informacji';
$lang['New_password'] = 'Nowe Has�o';
$lang['Select_avatar'] = 'Wybierz Avatar';
$lang['Return_profile'] = 'Anuluj Wyb�r';
$lang['Select_category'] = 'Wybierz Kategori�';
$lang['Profile_updated'] = 'Tw�j profil zosta� zaktualizowany';
$lang['Profile_updated_inactive'] = 'Tw�j profil zosta� zmieniony jednak�e zmodyfikowa�' .  (($he) ? 'e' : 'a') . '� istotne dane i Twoje konto zosta�o deaktywowane. Otrzymasz wiadomo�� email z instrukcjami jak reaktywowa� Twoje konto, lub b�dziesz musia� poczeka� a� administrator dokona reaktywacji';
$lang['Password_mismatch'] = 'Wpisane has�a nie pasuj� do siebie';
$lang['Current_password_mismatch'] = 'Wpisane przez Ciebie has�o nie pasuje do zapisanego w bazie danych';
$lang['Password_long'] = 'Twoje has�o nie mo�e mie� wi�cej ni� 32 znaki';
$lang['Username_taken'] = 'Ta nazwa u�ytkownika jest ju� zaj�ta';
$lang['Username_invalid'] = 'Nazwa u�ytkownika nie mo�e zawiera� znak�w takich jak <b>&lt; &gt; &quot; &amp; \ % *</b> oraz podw�jnej spacji';
$lang['Username_disallowed'] = 'Ta nazwa u�ytkownika zosta�a zakazana';
$lang['Email_taken'] = 'Ten adres email zosta� ju� zarejestrowany wraz z innym u�ytkownikiem';
$lang['Signature_too_long'] = 'Tw�j podpis jest za d�ugi';
$lang['Email_banned'] = 'Ten adres email zosta� zablokowany na tym forum forum';
$lang['Email_invalid'] = 'Ten adres email jest nieprawid�owy';
$lang['Fields_empty'] = 'Musisz wype�ni� wymagane pola. Pola zaznaczone * s� wymagane.';
$lang['Avatar_filetype'] = 'Obrazek musi by� typu JPG, GIF lub PNG';
$lang['Avatar_filesize'] = 'Rozmiar obrazka musi by� mniejszy ni� %d kB';
$lang['Avatar_imagesize'] = 'Obrazek musi by� mniejszy ni� %d pikseli szeroko�ci i %d pikseli wysoko�ci';
$lang['Account_added'] = 'Dzi�kujemy za rejestracj�, Twoje konto zosta�o utworzone.<br />Zosta�e� zalogowany na forum.';
$lang['Account_added_she'] = 'Dzi�kujemy za rejestracj�, Twoje konto zosta�o utworzone.<br />Zosta�a� zalogowana na forum.';
$lang['Account_inactive'] = 'Twoje konto zosta�o utworzone. To Forum jednak�e wymaga aktywacji kont, poprzez podanie klucza aktywuj�cego, kt�ry otrzymasz w wiadomo�ci wys�anej na podany email: <b>%s</b> W niej te� znajdziesz dalsze instrukcje post�powania.<br />Je�eli nie otrzymasz e-mail\'a z kluczem aktywacyjnym, mo�esz wys�a� go ponownie podczas logowania.';
$lang['Account_inactive_admin'] = 'Twoje konto zosta�o utworzone. To Forum jednak�e wymaga aktywacji kont przez administratora. Zosta� ju� do niego wys�any email powiadamiaj�cy o utworzeniu nowego konta i wkr�tce zostanie ono aktywowane';
$lang['Account_active'] = 'Twoje konto zosta�o niniejszym aktywowane. Dzi�kujemy za rejestracj�';
$lang['Account_active_admin'] = 'Konto zosta�o aktywowane';
$lang['Reactivate'] = 'Reaktywuj swoje konto!';
$lang['Already_activated'] = 'Twoje konto zosta�o ju� aktywowane';
$lang['COPPA'] = 'Twoje konto zosta�o utworzone ale musi jeszcze zosta� zaakceptowane. Otrzymasz specjalny email z instrukcjami.';
$lang['Registration'] = 'Warunki Rejestracji';
$lang['Reg_agreement'] = 'Administratorzy i moderatorzy podejm� starania maj�ce na celu usuwanie wszelkich uznawanych za obra�liwe materia��w jak najszybciej, jednak�e nie jest mo�liwe przeczytanie ka�dej wiadomo�ci. Zgadzasz si� wi�c, �e zawarto�� ka�dego postu na tym forum wyra�a pogl�dy i opinie jego autora a nie administrator�w, moderator�w czy webmaster�w (poza wiadomo�ciami pisanymi przez nich) i nie ponosz� oni za te tre�ci odpowiedzialno�ci.<br /><br />Zgadzasz si� nie pisa� �adnych obra�liwych, obscenicznych, wulgarnych, oszczerczych, nienawistnych, zawieraj�cych gro�by i innych materia��w, kt�re mog� by� sprzeczne z prawem. Z�amanie tej zasady mo�e by� przyczyn� natychmiastowego i trwa�ego usuni�cia z listy u�ytkownik�w (wraz z powiadomieniem odpowiednich w�adz). Aby wspom�c te dzia�ania rejestrowane s� adresy IP autor�w. Przyjmujesz do wiadomo�ci, �e webmaster, administrator i moderatorzy tego forum maj� prawo do usuwania, zmiany lub zamykania ka�dego w�tku w ka�dej chwili je�li zajdzie taka potrzeba. Jako u�ytkownik zgadzasz si�, �e wszystkie informacje, kt�re wpiszesz b�d� przechowywane w bazie danych. Informacje te nie b�d� podawane bez twojej zgody �adnym osobom ani podmiotom trzecim, jednak�e webmaster, administrator i moderatorzy nie b�d� obarczeni odpowiedzialno�ci� za w�amania hackerskie prowadz�ce do pozyskania tych danych.<br /><br />Skrypt tego forum wykorzystuje cookies do przechowywania informacji na twoim komputerze. Te cookies nie zawieraj� �adnych informacji, kt�re poda�' .  (($he) ? 'e' : 'a') . '� i s�u�� jedynie u�atwieniu korzystania z forum. Adres email jest wykorzystywany jedynie dla potwierdzenia podanych informacji oraz has�a (i dla przes�ania nowego has�a, gdyby� zapomnia� stare).<br /><br />Klikaj�c odno�nik Rejestracja na dole zgadzasz si� na te warunki.';
$lang['Agree_under_13'] = '';
$lang['Agree_over_13'] = 'Zgadzam Si� na te warunki';
$lang['Agree_not'] = 'Nie zgadzam si� na te warunki';
$lang['Wrong_activation'] = 'Podany przez ciebie klucz aktywacyjny nie pasuje do �adnego w bazie danych';
$lang['Send_password'] = 'Wy�lij mi nowe has�o';
$lang['Password_updated'] = 'Nowe has�o zosta�o utworzone. Otrzymasz email z informacjami jak je aktywowa�';
$lang['No_email_match'] = 'Adres email, kt�ry poda�' .  (($he) ? 'e' : 'a') . '� nie pasuje do zapisanego razem z baz� danych';
$lang['New_password_activation'] = 'Aktywacja nowego has�a';
$lang['Password_activated'] = 'Twoje konto zosta�o reaktywowane. Aby si� zalogowa� u�yj has�a podanego w email\'u, kt�ry otrzyma�' .  (($he) ? 'e' : 'a') . '�';
$lang['Send_email_msg'] = 'Wy�lij mi email';
$lang['User_prevent_email'] = 'Ten u�ytkownik nie �yczy sobie otrzymywa� email\'i. Spr�buj wys�a� mu prywatn� wiadomo��.';
$lang['CC_email'] = 'Wy�lij kopi� tego email\'a do siebie';
$lang['Email_message_desc'] = 'Wiadomo�� zostanie wys�ana jako zwyk�y tekst, nie wstawiaj znacznik�w HTML ani BBCode. Jako adres zwrotny zostanie wstawiony tw�j adres email.';
$lang['Recipient'] = 'Odbiorca';
$lang['Password_to_short'] = 'musi miec przynajmniej %d znak�w';
$lang['Password_mixed'] = 'musi zawiera� litery i cyfry';
$lang['Password_not_same'] = 'nie mo�e by� takie samo jak twoja nazwa u�ytkownika';
$lang['custom_rank_too_long'] = 'Tw�j tytu� jest za d�ugi';
$lang['location_too_long'] = 'Twoja lokalizacja zawiera za du�o znak�w';
$lang['Profile_photo'] = 'Zdj�cie';
$lang['Photo_panel'] = 'Panel kontrolny zdj�cia w twoim profilu';
$lang['Photo_explain'] = 'Wy�wietla zdj�cie na dole twojego profilu, mo�esz go wys�a� od siebie z dysku, lub poda� lokalizacje pod jak� znajduje sie na innym serwerze. Maksymalna szeroko�� zdj�cia to %d pikseli, a wysoko�� %d pikseli. Maksymalny rozmiar zdj�cia to: %dkB.'; 
$lang['l_notify_gg'] = 'Powiadamiaj na Gadu-Gadu';
$lang['Custom_color'] = 'Kolor nicka';
$lang['Custom_color_Explain'] = 'Wybierz kolor jaki ma mie� tw�j nick';
$lang['Custom_Rank_Explain'] = 'To co wpiszesz, b�dzie pod twoim nickiem.';
$lang['Visits'] = 'Wizyt';
$lang['Topic_spy'] = 'Przegl�dane tematy';
$lang['Spend time'] = '��czny czas wizyt';
$lang['Attachments_total'] = 'za��cznik�w';
$lang['Polls_total'] = 'ankiet';
$lang['Contact'] = 'Kontakt z';
$lang['Viewing_user_profile'] = 'Przedstawiamy profil :: %s';
$lang['Items_required'] = 'Pola oznaczone * s� wymagane, chyba �e napisano inaczej';
$lang['Avatar_gallery'] = 'Galeria Avatar�w';
$lang['Account_activated_subject'] = 'Konto Aktywowane';
$lang['New_account_subject'] = 'Nowe Konto';
$lang['Welcome_subject'] = 'Witamy na %s';
$lang['Validation_explain'] = '�eby mie� pewno�� �e nie jeste� robotem, wpisz wy�wietlone cyfry';
$lang['All_times'] = 'Wszystkie czasy w strefie %s';
$lang['tz']['-12'] = '(GMT -12:00 godzin) Eniwetok, Kwajalein';
$lang['tz']['-11'] = '(GMT -11:00 godzin) Wyspa Midway, Samoa';
$lang['tz']['-10'] = '(HST -10:00 godzin) Hawaje';
$lang['tz']['-9'] = '(GMT -9:00 godzin) Alaska';
$lang['tz']['-8'] = '(PST -8:00 godzin) Pacific Time (US &amp; Kanada)';
$lang['tz']['-7'] = '(MST -7:00 godzin) Mountain Time (US &amp; Kanada)';
$lang['tz']['-6'] = '(CST -6:00 godzin) Central Time (US &amp; Kanada), Meksyk';
$lang['tz']['-5'] = '(EST -5:00 godzin) Eastern Time (US &amp; Kanada), Bogota';
$lang['tz']['-4'] = '(GMT -4:00 godziny) Atlantic Time (Canada), Caracas, La Paz';
$lang['tz']['-3.5'] = '(GMT -3:30 godziny) Nowa Funflandia';
$lang['tz']['-3'] = '(GMT -3:00 godziny) Brazylia, Buenos Aires, Georgetown, Falklandy';
$lang['tz']['-2'] = '(GMT -2:00 godziny) �r.-Atlantyk, Wyspa Ascension, �w. Helena';
$lang['tz']['-1'] = '(GMT -1:00 godzin�) Azory, Wyspy Cape Verde';
$lang['tz']['0'] = '(GMT) Londyn, Dublin, Edynburg, Lisbona, Monrovia';
$lang['tz']['1'] = '(CET +1:00 godzin�) Warszawa, Berlin, Bruksela, Pary�, Rzym';
$lang['tz']['2'] = '(EET +2:00 godziny) Kaliningrad, Po�. Afryka';
$lang['tz']['3'] = '(GMT +3:00 godziny) Moskwa, Bagdad, Riyadh, Nairobi';
$lang['tz']['3.5'] = '(GMT +3:30 godziny) Teheran';
$lang['tz']['4'] = '(GMT +4:00 godziny) Abu Dhabi, Baku, Muscat, Tbilisi';
$lang['tz']['4.5'] = '(GMT +4:30 godziny) Kabul';
$lang['tz']['5'] = '(GMT +5:00 godzin) Ekaterinburg, Islamabad, Karaczi, Taszkent';
$lang['tz']['5.5'] = '(GMT +5:30 godzin) Bombaj, Kalkuta, Madras, Nowe Delhi';
$lang['tz']['6'] = '(GMT +6:00 godzin) Almaty, Colombo, Dhaka';
$lang['tz']['6.5'] = '(GMT +6:30 godzin) Rangoon';
$lang['tz']['7'] = '(GMT +7:00 godzin) Bangkok, Hanoi, D�akarta';
$lang['tz']['8'] = '(WST +8:00 godzin) Pekin, Hong Kong, Perth, Singapur, Taipei';
$lang['tz']['9'] = '(GMT +9:00 godzin) Tokyo, Osaka, Sapporo, Seoul, Jakuck';
$lang['tz']['9.5'] = '(CST +9:30 godzin) Adelaide, Darwin';
$lang['tz']['10'] = '(EST +10:00 godzin) Sydney, W�adywostok';
$lang['tz']['11'] = '(GMT +11:00 godzin) Magadan, Nowa Kaledonia, Wyspy Salomona';
$lang['tz']['12'] = '(GMT +12:00 godzin) Auckland, Wellington, Fid�i, Wyspy Marshalla';

$lang['Account_blocked'] = 'Konto na forum zablokowane';
$lang['Error_login_not_active'] = 'Konto u�ytkownika: <b>%s</b> nie jest aktywne, zosta�o deaktywowane na skutek zmiany adresu e-mail, prosz� sprawdzi� poczt�, zosta� wys�any klucz aktywacyjny. Email zostaje wys�any odrazu po dokonaniu zmian, w skrajnych przypadkach dostarczenie mo�e potrwa� kilka godzin.';
$lang['Error_login_not_active_register'] = 'Konto u�ytkownika: <b>%s</b> nie jest aktywne.<br />Na podany adres e-mail: <b>%s</b> zosta� wys�any klucz aktywacyjny, prosz� sprawdzi� poczt�. E-mail zostaje wys�any odrazu po rejestracji, w skrajnych przypadkach dostarczenie mo�e potrwa� kilka godzin.';
$lang['Error_login_blocked'] = 'Konto u�ytkownika: <b>%s</b> zosta�o zawieszone przez administratora.';
$lang['Error_login'] = 'B��dne has�o dla u�ytkownika: <b>%s</b>';
$lang['Click_return_login'] = 'Kliknij %sTutaj%s aby spr�bowa� ponownie';
$lang['Error_login_tomutch'] = 'Konto zosta�o zablokowane z powodu wielokrotnej pr�by logowania, spr�buj po�niej';
$lang['Error_login_not_username'] = 'W systemie nie istnieje u�ytkownik: <b>%s</b>';
$lang['Admin_reauthenticate'] = 'Aby wej�� do Panelu Administracyjnego, wpisz swoje has�o ponownie.';
$lang['Enter_password'] = 'Wpisz nazw� u�ytkownika i has�o by si� zalogowa�';
$lang['Send_act_key'] = 'Wy�lij do mnie ponownie klucz aktywuj�cy';
$lang['Act_key_send'] = 'Klucz aktywacyjny zosta� wys�any ponownie.';
$lang['Act_key_not_send'] = 'Klucz aktywacyjny nie zosta� wys�any, wykryto niezgodno�� danych, powiadom Administratora.';
$lang['login_ip_check'] = 'Zezw�l na autologowanie tylko z ostatniego adresu IP';
$lang['login_ip_check_e'] = 'Je�eli adres IP b�dzie inny ni� adres IP ostatniej wizyty wymaga r�cznego logowania. Wy��cz to TYLKO wtedy je�eli masz zmienne IP i jest dla Ciebie k�opotem r�czne logowanie. Funkcja ta w du�ym stopniu zabezpiecza twoje konto.';
?>