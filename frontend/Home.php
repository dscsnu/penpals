<?php
$GLOBALS['themeVari'] = "cms";
$GLOBALS['titleSub'] = "Penpals";
$GLOBALS['jsInclude'] = array("src/front/js/Home.js");
$GLOBALS['printPage'] = function()
{
    ?>
    <link rel="stylesheet" href="<?php echo __assets ; ?>src/front/css/Home.css">
    <?php
}
?>