<?php
/***************************************************************************
 *                       lang_admin_album.php [Polish]
 *                       -------------------
 *     begin             : Sunday, February 02, 2003
 *     copyright         : (C) 2003 Smartor
 *     email             : smartor_xp@hotmail.com
 ****************************************************************************/

/***************************************************************************
 *
 *   This program is free software; you can redistribute it and/or modify
 *   it under the terms of the GNU General Public License as published by
 *   the Free Software Foundation; either version 2 of the License, or
 *   (at your option) any later version.
 *
 ***************************************************************************/

//
// Configuration
//

// Check for user gender
$he = ($userdata['user_gender'] != 2) ? true : false;

$lang['Album_config'] = 'Konfiguracja albumu';
$lang['Album_config_explain'] = 'Tutaj mo�esz zmienia� g��wne ustawienia Albumu zdj��';
$lang['Album_config_updated'] = 'Konfiguracja zmieniona';
$lang['Click_return_album_config'] = 'Kliknij %sTutaj%s �eby powr�ci� do konfiguracji albumu';
$lang['Max_pics'] = 'Maksymalna liczba zdj�� w jednej kategorii (-1 = nielimitowane)';
$lang['User_pics_limit'] = 'Maksymalna ilo�� zdj�� dla jednego u�ytkownika (-1 = nielimitowane)';
$lang['Moderator_pics_limit'] = 'Limit kategorii dla jednego moderatora (-1 = nielimitowane)';
$lang['Pics_Approval'] = 'Ustawienia zdj��';
$lang['Rows_per_page'] = 'Ilo�� rz�d�w w mini galerii';
$lang['Cols_per_page'] = 'Ilo�� kolumn w mini galerii';
$lang['Thumbnail_quality'] = 'Jako�� miniatur zdj�� (1-100)';
$lang['Thumbnail_cache'] = 'Cache minigalerii';
$lang['Manual_thumbnail'] = 'R�czna minigaleria';
$lang['GD_version'] = 'Optymalizacja dla wersji GD';
$lang['GD_version_e'] = 'W zale�no�ci od systemu i rodzaju zainstalowanego kompresora grafiki, musisz wybra� eksperymentalnie wersj� optymalizacji. Wersja 2 w systemach unixowych z regu�y dzia�a dobrze, przy wersji 1 miniatury kompresuje brzydko. Wersja 2 natomiast w systemach windowsowych cz�sto powoduje b��d przy dodawaniu zdj�cia, a wersja 1 dzia�a dobrze i miniatury wygl�daj� �adnie';
$lang['Pic_Desc_Max_Length'] = 'Opis zdj�cia/Komentarz wielko�� (bytes)';
$lang['Hotlink_prevent'] = 'Zapobieganie hotlinkom';
$lang['Hotlink_allowed'] = 'Zezwolenia hotlink�w dla domen (oddzielanie przecinkami)';
$lang['Personal_gallery'] = 'Zezwolenia na tworzenie prywatnych galerii dla u�ytkownik�w';
$lang['Personal_gallery_limit'] = 'Limit zdj�� dla jednej prywatnej galerii (-1 = nielimitowane)';
$lang['Personal_gallery_view'] = 'Kto mo�e przegl�da� prywatne galerie';
$lang['Rate_system'] = 'W��cz oceny';
$lang['Rate_Scale'] =' Skala ocen';
$lang['Comment_system'] = 'W��cz komentarze';
$lang['Thumbnail_Settings'] = 'Ustawienia minigalerii';
$lang['Extra_Settings'] = 'Dodatkowe ustawienia';
$lang['Default_Sort_Method'] = 'Domy�lna metoda sortowania';
$lang['Default_Sort_Order'] = 'Domy�lny porz�dek sortowania';
$lang['Fullpic_Popup'] = 'Oryginalny widok zdj�cia jako PopUp';


// Personal Gallery Page
$lang['Personal_Galleries'] = 'Prywatne galerie';
$lang['Album_personal_gallery_title'] = 'Prywatna galeria';
$lang['Album_personal_gallery_explain'] = 'Tutaj mo�esz ustawi�, kt�ra grupa u�ytkownik�w ma prawa do tworzenia i przegl�dania w�asnych galerii, je�li og�lnie wy��czy�' .  (($he) ? 'e' : 'a') . '� mo�liwo�� tworzenia i przegl�du prywatnych galerii.';
$lang['Album_personal_successfully'] = 'Ustawienia zapisane';
$lang['Click_return_album_personal'] = 'Kliknij %sTutaj%s �eby wr�ci� do ustawie� prywatnych galerii';

//
// Categories
//
$lang['Album_Categories_Title'] = 'Ustawienia kategorii Albumu';
$lang['Album_Categories_Explain'] = 'Tutaj mo�esz ustawi� ustawienia tworzenia, dodawania, usuwania, sortowania, itp.';
$lang['Category_Permissions'] = 'Poziomy kategorii';
$lang['Category_Title'] = 'Tytu� kategorii';
$lang['Category_Desc'] = 'Opis kategorii';
$lang['View_level'] = 'Poziom dla podgl�du';
$lang['Upload_level'] = 'Poziom dla dodawania';
$lang['Rate_level'] = 'Poziom dla oceny';
$lang['Comment_level'] = 'Poziom dla komentarzy';
$lang['Edit_level'] = ' Poziom dla edytowania';
$lang['Delete_level'] = 'Poziom dla kasowania';
$lang['New_category_created'] = 'Nowa kategoria zosta�a utworzona';
$lang['Click_return_album_category'] = 'Kliknij %sTutaj%s �eby powr�ci� do ustawie� kategorii';
$lang['Category_updated'] = 'Kategoria zosta�a zaktualizowana';
$lang['Delete_Category'] = 'Usu� kategorie';
$lang['Delete_Category_Explain'] = 'W tym miejscu mo�esz usun�� kategorie i wybra� gdzie maj� znale�� si� zdj�cia z usuwanej kategorii';

$lang['Delete_all_pics'] = 'Usu� wszystkie zdj�cia z tej kategorii';
$lang['Category_deleted'] = 'Kategoria usuni�ta';

//
// Permissions
//
$lang['Album_Auth_Title'] = 'Prawa u�ytkownik�w';
$lang['Album_Auth_Explain'] = 'Mo�esz wybra� kt�re grupy lub u�ytkownicy b�d� moderatorami dla jakiej kategorii albumu.';
$lang['Select_a_Category'] = 'Wybierz kategori�';
$lang['Look_up_Category'] = 'Podgl�d kategorii';
$lang['Album_Auth_successfully'] = 'Ustawienia zapisane';
$lang['Click_return_album_auth'] = 'Kliknij %sTutaj%s �eby powr�ci� do ustawie� praw u�ytkownik�w';

$lang['Upload'] = 'Dodawanie';
$lang['Rate'] = 'Ocena';
$lang['Comment'] = 'Komentarz';

//
// Clear Cache
//
$lang['Clear_Cache'] = 'Wyczy�� Cache';
$lang['Album_clear_cache_confirm'] = 'Je�li masz w��czony cache dla miniatur musisz wyczy�ci� cache po zmianie ustawie� Albumu.<br /><br />Chcesz wyczy�ci� teraz?';

$lang['Create_album'] = 'Utw�rz nowy album';
$lang['Create_sub_album'] = 'Utw�rz podkategorie albumu';

$lang['Thumbnail_cache_cleared_successfully'] = '<br />Cache wyczyszczony<br />&nbsp;';

$lang['Watermark_transparent'] = 'Znak wodny';
$lang['Watermark_transparent_e'] = 'Podaj przezroczysto�� znaku wodnego w przedziale 1-99<br />Zostaje wykorzystany obrazek <b>/images/wm.png</b> mo�esz go zmieni�.<br />0 - wy��czone';
$lang['Watermark_width'] = 'Znak wodny po�o�enie w poziomie';
$lang['Watermark_width_e'] = 'Podaj warto�� w punktach, warto�� dodatnia - lewa strona<br />warto�� ujemna - prawa strona, <b>mid</b> - wy�rodkowane';
$lang['Watermark_height'] = 'Znak wodny po�o�enie w pionie';
$lang['Watermark_height_e'] = 'Podaj warto�� w punktach, warto�� dodatnia - g�ra<br />warto�� ujemna - d�, <b>mid</b> - wy�rodkowane';

?>