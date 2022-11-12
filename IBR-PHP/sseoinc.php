<?php
WajeehaSmartSEO();
function WajeehaSmartSEO()
{
include("simbhaseo.php");
echo "<meta name='description' content='$webpageauthordescription'>";
echo "<meta name='keywords' content='$webpageauthorkeywords'>";
echo "<meta name='author' content='$authorname'>";
echo "<meta name='email' content='$webpageauthoremail'>";
echo "<meta name='resource-type' content='document'>";
echo "<meta name='audience' content='all'>";
echo "<meta name='robots' content='index,follow'>";
echo "<meta name='rating' content='general'>";
echo "<meta name='robots' content='all'>";
echo "<meta name='robots' content='INDEX, FOLLOW'>";
echo "<meta name='language' content='$language'>";
echo "<meta name='distribution' content='global'>";
echo "<meta name='revisit-after' content='1 days'>";
echo "<meta name='geo.placename' content='global'>";
echo "<link rel='canonical' href='$completeurl'>";
echo "<meta name='copyright' content='$webpageauthorcompany'>";
echo "<meta name='reply-to' content='$webpageauthoremail'>";
echo "<meta name='owner' content='$authorname'>";
echo "<meta name='Classification' content='$type'>";
echo "<meta name='coverage' content='Worldwide'>";
echo "<meta name='url' content='$webpageauthorcompleteurl'>";
echo "<meta name='identifier-URL' content='$webpageauthorcompleteurl'>";
echo "<meta http-equiv='Pragma' content='no-cache'>";
echo "<meta http-equiv='Cache-Control' content='no-cache'>";
echo "<meta name='og:title' content='$title'>";
echo "<meta name='og:type' content='$type'>";
echo "<meta name='og:url' content='$imagepath'>";
echo "<meta name='og:image' content='$completeurl'>";
echo "<meta name='og:site_name' content='$sitedescription'>";
echo "<meta name='og:description' content='$sitename'>";
echo "<meta name='og:email' content='$phone'>";
echo "<meta name='og:phone_number' content='$email'>";
echo "<meta name='viewport' content='width=device-width, initial-scale=1.0'>";
}
?>