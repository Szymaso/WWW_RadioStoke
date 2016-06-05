<?php
/***************************************************************************
 *                          lang_main_album.php [English]
 *                              -------------------
 *     begin                : Sunday, February 02, 2003
 *     copyright            : (C) 2003 Smartor
 *     email                : smartor_xp@hotmail.com
 *
 *     $Id: lang_main_album.php,v 1.0.6 2003/03/05 20:12:38 ngoctu Exp $
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

// Check for user gender
$he = ($userdata['user_gender'] != 2) ? true : false;

//
// Album Index
//
$lang['Photo_Album'] = 'Album zdj��';
$lang['Pics'] = 'Zdj�cia';
$lang['Last_Pic'] = 'Ostatnie zdj�cie';
$lang['Public_Categories'] = 'Kategorie publiczne';
$lang['No_Pics'] = 'Brak zdj��';
$lang['Users_Personal_Galleries'] = 'Galerie u�ytkownik�w';
$lang['Your_Personal_Gallery'] = 'Twoja prywatna galeria';
$lang['Recent_Public_Pics'] = 'Ostatnie zdj�cia';

$lang['View'] = 'Ods�on';

//
// Category View
//
$lang['Category_not_exist'] = 'Ta kategoria nie istnieje lub nie posiadasz do niej praw dost�pu';
$lang['Upload_Pic'] = 'Dodaj zdj�cie';
$lang['Pic_Title'] = 'Tytu� zdj�cia';

$lang['Album_moderate_can'] = '<b>Mo�esz</b> %smoderowa�%s t� kategorie';

$lang['Edit_pic'] = 'Edytuj';
$lang['Delete_pic'] = 'Usu�';
$lang['Rating'] = 'Oceny';
$lang['Comments'] = 'Komentarze';
$lang['New_Comment'] = 'Dodaj komentarz';

$lang['Not_rated'] = '<i>nie ocenione</i>';

//
// Upload
//
$lang['Pic_Desc'] = 'Opis zdj�cia';
$lang['Plain_text_only'] = 'Tylko normalny tekst';
$lang['Max_length'] = 'Max d�ugo�� (bytes)';
$lang['Upload_pic_from_machine'] = 'Wybierz zdj�cie ze swojego komputera';
$lang['Upload_to_Category'] = 'Dodaj do kategorii';
$lang['Upload_thumbnail'] = 'Dodaj miniaturk� zdj�cia';
$lang['Upload_thumbnail_explain'] = 'Musi by� tego samego typu co twoje zdj�cie';
$lang['Thumbnail_size'] = 'Rozmiar miniatury (pixele)';
$lang['Filetype_and_thumbtype_do_not_match'] = 'Twoje zdj�cie i miniatura musi by� tego samego typu';

$lang['Upload_no_title'] = 'Musisz doda� tytu� swojego zdj�cia';
$lang['Upload_no_file'] = 'Musisz poda� �cie�k� i nazw� pliku';
$lang['Desc_too_long'] = 'Opis jest za d�ugi';

$lang['Max_file_size'] = 'Maksymalna wielko�� pliku (bytes)';
$lang['Max_width'] = 'Maksymalna szeroko�� (pixel)';
$lang['Max_height'] = 'Maksymalna wysoko�� (pixel)';

$lang['JPG_allowed'] = 'Dozwolony plik JPG';
$lang['PNG_allowed'] = 'Dozwolony plik PNG';
$lang['GIF_allowed'] = 'Dozwolony plik GIF ';

$lang['Album_reached_quota'] = 'W tej kategorii zosta�a osi�gni�ta maksymalna ilo�� zdj��, nie mo�esz wi�c doda� ju� �adnego.';
$lang['User_reached_pics_quota'] = 'Przekroczy�' .  (($he) ? 'e' : 'a') . '� limit dodanych zdj��, nie mo�esz ju� doda� �adnego. Je�li jest to konieczne i mo�liwe, usu� jakie� swoje poprzednie zdj�cie.';

$lang['Bad_upload_file_size'] = 'Plik twojego zdj�cia jest zbyt du�y, lub uszkodzony';
$lang['Not_allowed_file_type'] = 'Typ twojego pliku nie jest dozwolony';
$lang['Upload_image_size_too_big'] = 'Rozmiar (w pixelach) twojego zdj�cia jest za du�y';
$lang['Upload_thumbnail_size_too_big'] = 'Rozmiar miniatury twojego zdj�cia (w pixelach) jest za du�y';

$lang['Missed_pic_title'] = 'Musisz poda� tytu� zdj�cia';

$lang['Album_upload_successful'] = 'Zdj�cie dodane';
$lang['Album_upload_need_approval'] = 'Twoje zdj�cie zosta�o dodane<br /><br />Zdj�cie musi zosta� zaakceptowane przez moderatora, lub administratora';

$lang['Click_return_category'] = 'Kliknij %sTutaj%s �eby powr�ci� do kategorii';
$lang['Click_return_album_index'] = 'Kliknij %sTutaj%s �eby powr�ci� do menu g��wnego albumu';

// View Pic
$lang['Pic_not_exist'] = 'To zdj�cie nie istnieje';

// Edit Pic
$lang['Edit_Pic_Info'] = 'Zmie� informacje o zdj�ciu';
$lang['Pics_updated_successfully'] = 'Informacje zaktualizowane';

// Delete Pic
$lang['Album_delete_confirm'] = 'Jeste� pew' .  (($he) ? 'ien' : 'na') . ' �e chcesz usun�� zdj�cie?';
$lang['Pics_deleted_successfully'] = 'Zdj�cie usuni�te.';

//
// ModCP
//
$lang['Approval'] = 'Zatwierdzono';
$lang['Approve'] = 'Zatwierdz';
$lang['Unapprove'] = 'Cofnij';
$lang['Status'] = 'Status';
$lang['Locked'] = 'Zablokowane';
$lang['Not_approved'] = 'Nie Zatwierdzone';
$lang['Approved'] = 'Zatwierdzone';
$lang['Move_to_Category'] = 'Przenie� do kategorii';
$lang['Pics_moved_successfully'] = 'Zdj�cie(a) zosta�o(y) przeniesione';
$lang['Pics_locked_successfully'] = 'Zdj�cie(a) zosta�o(y) zablokowane';
$lang['Pics_unlocked_successfully'] = 'Zdj�cie(a) zosta�o(y) odblokowane';
$lang['Pics_approved_successfully'] = 'Zdj�cie(a) zosta�o(y) Zatwierdzone';
$lang['Pics_unapproved_successfully'] = 'Zdj�cie(a) zosta�o(y) Cofni�te';

//
// Rate
//
$lang['Current_Rating'] = 'Aktualne oceny';
$lang['Please_Rate_It'] = 'Oce�';
$lang['Already_rated'] = 'Ju� ocenia�' .  (($he) ? 'e' : 'a') . '� to zdj�cie';
$lang['Album_rate_successfully'] = 'Zdj�cie zosta�o ocenione';

//
// Comment
//
$lang['Comment_no_text'] = 'Dodaj sw�j komentarz';
$lang['Comment_too_long'] = 'Komentarz za d�ugi';
$lang['Comment_delete_confirm'] = 'Jeste� pew' .  (($he) ? 'ien' : 'na') . ' �e chcesz usun�� sw�j komentarz?';
$lang['Pic_Locked'] = 'To zdj�cie zosta�o zablokowane przez moderatora, nie mo�na dodawa� komentarzy.';

//
// Personal Gallery
//
$lang['Personal_Gallery_Explain'] = 'Mo�esz przegl�da� galerie innych u�ytkownik�w, klikaj�c na link w ich profilu';
$lang['Personal_gallery_not_created'] = 'Galeria %s jest pusta lub nie zosta�a utworzona';
$lang['Not_allowed_to_create_personal_gallery'] = 'Prywatne galerie s� wy��czone';
$lang['Click_return_personal_gallery'] = 'Kliknij %sTutaj%s �eby wr�ci� do prywatnej galerii';

$lang['No_convert'] = 'Nie mo�na stworzy� miniatury zdj�cia. Na serwerze brak zainstalowanego konwertera zdj��.<br />Mo�esz wy��czy� kompresj� GD i ustawi� r�czne tworzenie miniatur w Panelu Admina.';
$lang['Sub-catagories'] = 'Podkategorie';
?>