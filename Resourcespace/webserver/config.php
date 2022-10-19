<?php
###############################
## ResourceSpace
## Local Configuration Script
###############################

# All custom settings should be entered in this file.
# Options may be copied from config.default.php and configured here.

# MySQL database settings
$mysql_server = '10.0.0.9';
$mysql_username = 'resourcespace_rw';
$mysql_password = 'TopSecret';
$read_only_db_username = 'resourcespace_r';
$read_only_db_password = 'TopSecret';
$mysql_db = 'rs01';

$mysql_bin_path = '/usr/bin';

# Base URL of the installation
$baseurl = 'http://localhost/10.0';

# Email settings
$email_notify = 's@s.n';
$email_from = 's@s.n';
# Secure keys
$spider_password = '333b17921ddb5352cb8ffb9b30433ee444f69a1e091720990249b48fa1ca5e3e';
$scramble_key = '1ade347135815ade8ee100ff7000912b4271cac5abdae230532a2b118ebc68d5';
$api_scramble_key = 'e15a87adf6adf3eb7db2f1e9548e7f2ea9e72b95be3a3f1960a95d4e06f54d35';

# Paths
$imagemagick_path = '/usr/bin';
$ghostscript_path = '/usr/bin';
$ffmpeg_path = '/usr/bin';
$exiftool_path = '/usr/bin';
$antiword_path = '/usr/bin';
$pdftotext_path = '/usr/bin';

$applicationname = 'ResourceSpace';
$homeanim_folder = 'filestore/system/slideshow_7abbd0ecfb2ac88';

/*

New Installation Defaults
-------------------------

The following configuration options are set for new installations only.
This provides a mechanism for enabling new features for new installations without affecting existing installations (as would occur with changes to config.default.php)

*/
                                
// Set imagemagick default for new installs to expect the newer version with the sRGB bug fixed.
$imagemagick_colorspace = "sRGB";

$contact_link=false;

$slideshow_big=true;
$home_slideshow_width=1920;
$home_slideshow_height=1080;

$themes_simple_view=true;

$stemming=true;
$case_insensitive_username=true;
$user_pref_user_management_notifications=true;
$themes_show_background_image = true;

$use_zip_extension=true;
$collection_download=true;

$ffmpeg_preview_force = true;
$ffmpeg_preview_extension = 'mp4';
$ffmpeg_preview_options = '-f mp4 -b:v 1200k -b:a 64k -ac 1 -c:v libx264 -pix_fmt yuv420p -profile:v baseline -level 3 -c:a aac -strict -2';

$daterange_search = true;
$upload_then_edit = true;

$purge_temp_folder_age=90;
$filestore_evenspread=true;

$comments_resource_enable=true;
