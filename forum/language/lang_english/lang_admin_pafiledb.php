<?php




// Categories
$lang['Acattitle'] = 'Add Category'; 
$lang['Ecattitle'] = 'Edit Category'; 
$lang['Dcattitle'] = 'Delete Category'; 
$lang['Rcattitle'] = 'Reorder Categories'; 
$lang['Catexplain'] = 'You can use the Category Management section to add, edit, delete and reorder categories. In order to add files to your database, you must have at least one category created. You can select a link below to manage your categories.'; 
$lang['Rcatexplain'] = 'You can reorder categories to change the position they are displayed in on the main page. To reorder the categories, change the numbers to the order you want them shown in. 1 will be showed first, 2 will be shown second, etc. This does not affect sub-categories.';
$lang['Catadded'] = 'The new category has been successfully added';
$lang['Catname'] = 'Category Name';
$lang['Catnameinfo'] = 'This will become the name of the category.';
$lang['Catdesc'] = 'Category Description';
$lang['Catdescinfo'] = 'This is a description of the files in the category';
$lang['Catparent'] = 'Parent Category';
$lang['Catparentinfo'] = 'If you want this category to be a sub-category, select the category you want it to be a sub-category of.';
$lang['None'] = 'None';
$lang['Catedited'] = 'The category you selected has been successfully edited';
$lang['Delfiles'] = 'Delete files in category?';
$lang['Catsdeleted'] = 'The categories you selected have been successfully deleted';
$lang['Cdelerror'] = 'You didn\'t select any categories to delete';
$lang['Rcatdone'] = 'The categories have been successfully re-ordered';

// Configuration
$lang['Settingstitle'] = 'Download Configuration';
$lang['Settingsexplain'] = 'The form below will allow you to customize all the general download options.';
$lang['Dbname'] = 'Database Name';
$lang['Dbnameinfo'] = 'This is the name of the database, such as \'Download Index\'';
$lang['Sitename'] = 'Site Name';
$lang['Sitenameinfo'] = 'This is the name of your site for the navigation menu, such as \'Home\'';
$lang['Dburl'] = 'Database URL';
$lang['Dburlinfo'] = 'This is the URL to the directory where this is installed';
$lang['Hpurl'] = 'Homepage URL';
$lang['Hpurlinfo'] = 'This is the URL to your portal or home page';
$lang['Topnum'] = 'Top Number';
$lang['Topnuminfo'] = 'This is how many files will be displayed on the Top X Downloaded files list';
$lang['Nfdays'] = 'New File Days';
$lang['Nfdaysinfo'] = 'How many days a new file is to be listed with a \'New File\' icon. If this is set to 5, then all files added within the past 5 days will have the \'New File\' icon';
$lang['Showva'] = 'Show \'View All Files\'';
$lang['Showvainfo'] = 'Choose whether or not you wish to have the \'View All Files\' category displayed with the other categories on the main page';
$lang['Showss'] = 'Show Screenshot';
$lang['Showssinfo'] = 'Display screenshots on the file info page. If set to \'No\', a link to the screenshot will be displayed instead';
$lang['Dbdl'] = 'Disable Downloads';
$lang['Dbdlinfo'] = 'This will make the download section unavailable to users. This is a good option to use when making modifications to your database. Only Admins will be able to view the database';
$lang['Com_settings'] = 'Comment Settings';
$lang['Com_allowh'] = 'Allow HTML';
$lang['Com_allowb'] = 'Allow BBCode';
$lang['Com_allows'] = 'Allow Smilies';
$lang['Com_allowl'] = 'Allow Links';
$lang['Com_messagel'] = 'Default \'No Links\' Message';
$lang['Com_messagel_info'] = 'If links are not allowed this text will be displayed instead';
$lang['Com_allowi'] = 'Allow Images';
$lang['Com_messagei'] = 'Default \'No Images\' Message';
$lang['Com_messagei_info'] = 'If images are not allowed this text will be displayed instead';
$lang['Max_char'] = 'Maximum Number of charcters';
$lang['Max_char_info'] = 'If some one posted a comment in which charcters is more that this it will give them an error message (Limit the comment).';
$lang['Settings_changed'] = 'Your settings have been successfully updated';
$lang['l_dlinked'] = 'Protect against downloading from another site';
$lang['l_dlinked_e'] = '';

// Custom Field
$lang['Afieldtitle'] = 'Add Field';
$lang['Efieldtitle'] = 'Edit Field';
$lang['Dfieldtitle'] = 'Delete Field';
$lang['Fieldexplain'] = 'You can use the custom fields management section to add, edit, and delete custom fields. You can use custom fields to add more information about a file. For example, if you want an information field to put the file\'s size in, you can create the custom field and then you can add the file size on the Add/Edit file page.';
$lang['Fieldname'] = 'Field Name';
$lang['Fieldnameinfo'] = 'This is the name of the field, for example \'File Size\'';
$lang['Fielddesc'] = 'Field Description';
$lang['Fielddescinfo'] = 'This is a description of the field, for example \'File Size in Megabytes\'';
$lang['Fieldadded'] = 'The custom field has been successfully added';
$lang['Fieldedited'] = 'The custom field you selected has been successfully edited';
$lang['Dfielderror'] = 'You didn\'t select any fields to delete';
$lang['Fieldsdel'] = 'The custom fields you selected have been successfully deleted';

// File
$lang['Afiletitle'] = 'Add File';
$lang['Efiletitle'] = 'Edit File';
$lang['Dfiletitle'] = 'Delete File';
$lang['Fileexplain'] = 'You can use the file management section to add, edit, and delete files.';
$lang['Upload'] = 'Upload File';
$lang['Uploadinfo'] = 'Upload this file';
$lang['Uploaderror'] = 'This file already exists. Please rename the file and try again.';
$lang['Uploaddone'] = 'This file has been successfully uploaded. The URL to the file is';
$lang['Uploaddone2'] = 'Click Here to place this URL in the Download URL field.';
$lang['Upload_do_done'] = 'Uploaded Sucessfully';
$lang['Upload_do_not'] = 'Not Uploaded';
$lang['Upload_do_exist'] = 'File Exist';
$lang['Filename'] = 'File Name';
$lang['Filenameinfo'] = 'This is the name of the file you are adding, such as \'My Picture.\'';
$lang['Filesd'] = 'Short Description';
$lang['Filesdinfo'] = 'This is a short description of the file. This will go on the page that lists all the files in a category, so this description should be short';
$lang['Fileld'] = 'Long Description';
$lang['Fileldinfo'] = 'This is a longer description of the file. This will go on the file\'s information page so this description can be longer';
$lang['Filecreator'] = 'Creator/Author';
$lang['Filecreatorinfo'] = 'This is the name of whoever created the file.';
$lang['Fileversion'] = 'File Version';
$lang['Fileversioninfo'] = 'This is the version of the file, such as 3.0 or 1.3 Beta';
$lang['Filess'] = 'Screenshot URL';
$lang['Filessinfo'] = 'This is a URL to a screenshot of the file. For example, if you are adding a Winamp skin, this would be a URL to a screenshot of Winamp with this skin. You can manually enter a URL or ';
$lang['Filessupload'] = 'Upload a screenshot to the server';
$lang['Filedocs'] = 'Documentation/Manual URL';
$lang['Filedocsinfo'] = 'This is a URL to the documentation or a manual for the file';
$lang['Fileurl'] = 'Download URL';
$lang['Fileurlinfo'] = 'This is a URL to the file that will be downloaded. You can either type it in manually or ';
$lang['Fileurlupload'] = 'Upload a file to the server';
$lang['Filepi'] = 'Post Icon';
$lang['Filepiinfo'] = 'You can choose a post icon for the file. The post icon will be shown next to the file in the list of files.';
$lang['Filecat'] = 'Category';
$lang['Filecatinfo'] = 'This is the category the file belongs in.';
$lang['Filelicense'] = 'License';
$lang['Filelicenseinfo'] = 'This is the license agreement the user must agree to before downloading the file.';
$lang['Filepin'] = 'Pin File';
$lang['Filepininfo'] = 'Choose if you want the file pinned or not. Pinned files will always be shown at the top of the file list.';
$lang['Filedls'] = 'Download Total';
$lang['Fileadded'] = 'The new file has been successfully added';
$lang['Fileedited'] = 'The file you selected has been successfully edited';
$lang['Fderror'] = 'You didn\'t select any files to delete';
$lang['Filesdeleted'] = 'The files you selected have been successfully deleted';
$lang['File_checker'] = 'File Maintenance';
$lang['File_checker_explain'] = 'Here you can perform a checking for all file in database and the file in the download directory.';
$lang['File_saftey'] = 'File maintenance will attempt to delete all files and screenshots that are currently not needed and will remove any file records where the file has been deleted and will clear all screenshots that are not found. If the files do not start with <span style="color: #FF0000">{html_path}</span> then the files will be skipped for security reasons. Please make sure that <span style="color: #FF0000">{html_path}</span> is the path that you use for your files. It is strongly recommended that you Backup your database and your uploads directory.<br />';
$lang['File_checker_perform'] = 'Perform Checking';
$lang['Checker_saved'] = 'Total Saved Space';
$lang['Checker_sp1'] = 'Checking for records with missing files...';
$lang['Checker_sp2'] = 'Checking for records with missing screenshots...';
$lang['Checker_sp3'] = 'Deleting unused Files...'; 

// License 
$lang['Alicensetitle'] = 'Add License';
$lang['Elicensetitle'] = 'Edit License';
$lang['Dlicensetitle'] = 'Delete License';
$lang['Licenseexplain'] = 'You can use the license management section to add, edit, and delete license agreements. You can select a license for a file on the file add or edit page. If a file has a license agreement, a user will have to agree to it before downloading the file.';
$lang['Lname'] = 'License Name';
$lang['Ltext'] = 'License Text';
$lang['Licenseadded'] = 'The new license agreement has been successfully added';
$lang['Licenseedited'] = 'The license agreement you selected has been successfully edited';
$lang['Ldeleted'] = 'The license agreements you selected have been successfully deleted';

$lang['file_not_type'] = 'File is too large, or type not supported. Upload your file via FTP to pafiledb/uploads and put address in form field pafiledb/uploads/file';

$lang['Click_return'] = 'Click %sHere%s to return to the previous page';

$lang['extension_forbidden'] = "File extension '%s' is forbidden.";

?>