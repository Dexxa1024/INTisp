<?php session_start(); require 'include/head.php';onlyadmin();
ini_set('max_execution_time', 60);
error_reporting(E_ALL);
function redodie($a) {
	require 'include/footer.php';
	die();
}
?>
 <div class="content-wrapper">
            <div class="container-fluid">

                <div class="row">
                    <div class="col-md-12">

                        <h2 class="page-title">Updates</h2>
<?PHP
$grey                                                                                                    = ' style="border-left:7px solid #bcbcbc;padding-left:12px;list-style-type:none"';
$red                                                                                                     = ' style="border-left:7px solid #dd3d36;padding-left:12px;list-style-type:none"';
$orange                                                                                                  = ' style="border-left:7px solid #ffba00;padding-left:12px;list-style-type:none"';
$green                                                                                                   = ' style="border-left:7px solid #7ad03a;padding-left:12px;list-style-type:none"';
$lang['title']                                                                                           = 'Update';
$lang['DYNAMIC UPDATE SYSTEM']                                                                           = 'INTISP UPDATE SYSTEM';
$lang['ERROR']                                                                                           = 'ERROR';
$lang['Could Not Read Current-Version. Operation Aborted']                                               = 'Could Not Read Current-Version. Operation Aborted';
$lang['Could Not Read New-Versions. Operation Aborted']                                                  = 'Could Not Read New-Versions. Operation Aborted';
$lang['CURRENT VERSION']                                                                                 = 'CURRENT VERSION';
$lang['WARNING']                                                                                         = 'WARNING';
$lang['The upgrade process will affect all files and folders included in the main script installation.'] = 'The upgrade process will affect all files and folders that are being used by intisp.';
$lang['This includes all the core files used to run the script.']                                        = 'This includes all the core files used to run the Intisp and other user files.';
$lang['If you have made any modifications to those files, your changes will be lost.']                   = 'If you have made any modifications to those files, your changes will be lost.';
$lang['IMPORTANT']                                                                                       = 'IMPORTANT';
$lang['Before you perform the update, make sure to backup your database and all files!']                 = 'Before you perform the update, make sure to backup your database and all files!';
$lang['STEP']                                                                                            = 'STEP';
$lang['IMPORTANT']                                                                                       = 'IMPORTANT';
$lang['Reading Current Releases List']                                                                   = 'Reading Current Releases List';
$lang['New Update Found &mdash; Version']                                                                = 'New Update Found &mdash; Version';
$lang['Update Already Downloaded']                                                                       = 'Update Already Downloaded';
$lang['New Update Found &mdash; Version']                                                                = 'New Update Found &mdash; Version';
$lang['Downloading New Update']                                                                          = 'Downloading New Update';
$lang['Update Downloaded And Saved']                                                                     = 'Update Downloaded And Saved';
$lang['Already Downloaded File Is Outdatet']                                                             = 'Already Downloaded File Is Outdatet';
$lang['File Is Downloaded And Saved New']                                                                = 'File Is Downloaded And Saved New';
$lang['Update Already Downloaded']                                                                       = 'Update Already Downloaded';
$lang['DO']                                                                                              = 'DO';
$lang['CREATED']                                                                                         = 'CREATED';
$lang['EXECUTED']                                                                                        = 'EXECUTED';
$lang['UPDATED']                                                                                         = 'UPDATED';
$lang['Dir']                                                                                             = 'Dir';
$lang['File']                                                                                            = 'File';
$lang['Update Ready']                                                                                    = 'Update Ready';
$lang['Install Now?']                                                                                    = 'Install Now?';
$lang['READY']                                                                                           = 'READY';
$lang['Script Updated To Version']                                                                       = 'Script Updated To Version';
$lang['Check For Updates?']                                                                              = 'Check For Updates?';
$lang['INFO']                                                                                            = 'INFO';
$lang['The Newest Version Of The Script Is Version']                                                     = 'The Newest Version Of The Script Is Version';
$lang['OK']                                                                                              = 'OK';
$lang['This Is The Latest Version!']                                                                     = 'This Is The Latest Version!';
$lang['Check For Updates?']                                                                              = 'Check For Updates?';
$lang['Could Not Find Latest Releases. Operation Aborted']                                               = 'Could Not Find Latest Releases. Operation Aborted';
$lang['Could Not Read File']                                                                             = 'Could Not Read File';
$lang['Could Not Save New Update. Operation Aborted']                                                    = 'Could Not Save New Update. Operation Aborted';
$lang['Could Not Delete File']                                                                           = 'Could Not Delete File';
$lang['DELETE']                                                                                          = 'DELETE';
$lang['What\'s New']                                                                                     = 'What\'s New';
$lang['PHP 4.1 or greater is required. Operation Aborted']                                               = 'PHP 4.1 or greater is required. Operation Aborted';
$lang['Could Not Create Dir']                                                                            = 'Could Not Create Dir';
$lang['Could Not Create File']                                                                           = 'Could Not Create File';
$lang['Could Not Execute File &bdquo;upgrade.php&ldquo;. Operation Aborted']                             = 'Could Not Execute File &bdquo;upgrade.php&ldquo;. Operation Aborted';
$lang['not downloaded']                                                                                  = 'not downloaded';
$lang['Operation Aborted']                                                                               = 'Operation Aborted';
$lang['Download']                                                                                        = 'Download';
$lang['Filesize']                                                                                        = 'Filesize';
$lang['Changelog']                                                                                       = 'Changelog';
$lang['Peak Memory Usage']                                                                               = 'Peak Memory Usage';
$localScriptsPath = dirname(__FILE__) . '/';
print '
		<style>
			.yxt {width:100%;max-width:100%;font-family:Consolas,Lucida Console,monospace;background-color:#f4f4f4;
				baupdate.php?check_for_updates=trueckground-image:-webkit-graredodient(linear,50% 0%,50% 100%,color-stop(50%,#f4f4f4),color-stop(50%,#e5e5e5));
				background-image:-webkit-linear-graredodient(#f4f4f4 50%,#e5e5e5 50%);
				background-image:-webkit-graredodient(linear,left top,left bottom,color-stop(50%,#f4f4f4),color-stop(50%,#e5e5e5));
				background-image:-webkit-linear-graredodient(#f4f4f4 50%,#e5e5e5 50%);background-image:linear-graredodient(#f4f4f4 50%,#e5e5e5 50%);
				-webkit-background-size:38px 38px;background-size:38px 38px;border:1px solid #c5c5c5;line-height:19px;
				overflow-y:hidden;overflow-x:auto;padding:0 0 0 4px;font-size:small;}
	
		</style>
';
if (version_compare(phpversion(), '4.1') < 0)
  {
    redodie(print_message(lang('ERROR'), lang('PHP 4.1 or greater is required.'), $color = 'red'));
  }
@set_time_limit(0);
@ini_set('max_execution_time', 0);
@ini_set('memory_limit', '32M');
$currentVersion = file_get_contents("data/version");
if (isset($_GET["force"])) {
	$currentVersion = "0.0.1";
}
$getVersions    = file_get_contents("https://raw.githubusercontent.com/INTisp/INTisp/master/intisp/system/data/version");
if ($getVersions != '' and $currentVersion != '')
  {
    print_message(lang('CURRENT VERSION'), $currentVersion, $color = 'grey');
    print_message(lang('WARNING'), lang('The upgrade process will affect all files and folders included in the main script installation.') . '<br>' . lang('This includes all the core files used to run the script.') . '<br>' . lang('If you have made any modifications to those files, your changes will be lost.'), $color = 'red');
    print_message(lang('IMPORTANT'), lang('Before you perform the update, make sure to backup your database and all files!'), $color = 'orange');
    $step = 1;
    print_message(lang('STEP') . ' ' . $step, lang('Reading Current Releases List'), $color = 'grey');
    $versionList = explode("\n", $getVersions);
    sort($versionList);
    foreach ($versionList as $actualVersion)
      {
        $actualVersion = trim($actualVersion);
        if ($actualVersion > $currentVersion)
          {
            $step++;
            print_message(lang('STEP') . ' ' . $step, lang('New Update Found &mdash; Version') . ' ' . $actualVersion, $color = 'grey');
            if ($info = @file_get_contents("https://raw.githubusercontent.com/INTisp/INTisp/master/changelog.txt"))
              {
                print_message(lang('What\'s New'), '<pre class="yxt">' . $info . '</pre>', $color = 'grey');
              }
            $found               = true;
            $actualVersionStrlen = @file_get_contents("/var/webister/master.zip");
            if (!file_exists('/var/webister/master.zip'))
              {
                $step++;
                print_message(lang('STEP') . ' ' . $step, lang('Downloading New Update'), $color = 'grey');
                file_put_contents("/var/webister/master.zip", file_get_contents("https://github.com/INTisp/INTisp/archive/master.zip"));
                $step++;
                print_message(lang('STEP') . ' ' . $step, lang('Update Downloaded And Saved'), $color = 'grey');
              }
            else if ($actualVersionStrlen != @file_get_contents("https://github.com/INTisp/INTisp/archive/master.zip"))
              {
                $step++;
                print_message(lang('STEP') . ' ' . $step, lang('Already Downloaded File Is Outdatet'), $color = 'grey');
                file_put_contents("/var/webister/master.zip", file_get_contents("https://github.com/INTisp/INTisp/archive/master.zip"));
                $step++;
                print_message(lang('STEP') . ' ' . $step, lang('File Is Downloaded And Saved New'), $color = 'grey');
              }
            else
              {
                $step++;
                print_message(lang('STEP') . ' ' . $step, lang('Update Already Downloaded'), $color = 'grey');
                $step++;
                print_message(lang('STEP') . ' ' . $step, lang('Filesize') . ' ' . human_filesize(filesize("/var/webister/master.zip")) . '</p>', $color = 'grey');
              }
            if (isset($_GET['doUpdate']) and $_GET['doUpdate'] == true)
              {
                print_message(lang('STEP') . ' ' . $step, lang('Peak Memory Usage') . ' ' . human_filesize(memory_get_peak_usage(TRUE)) . '</p>', $color = 'grey');
                if (!is_dir("/var/webister/tmp"))
                  {
                    if (@mkdir("/var/webister/tmp", 0777, true))
                      {
                        print_message(lang('CREATED'), " Temperary Storage for Updates.", $color = 'orange');
                      }
                    else
                      {
                        print_message(lang('ERROR'), lang('Could Not Create Dir') . ' ' . lang('Operation Aborted'), $color = 'red');
                        redodie('</body></html>');
                      }
                  }
                else
                  {
                    function deleteDirectory($dir)
                      {
                        if (!file_exists($dir))
                          {
                            return true;
                          }
                        if (!is_dir($dir))
                          {
                            return unlink($dir);
                          }
                        foreach (scandir($dir) as $item)
                          {
                            if ($item == '.' || $item == '..')
                              {
                                continue;
                              }
                            if (!deleteDirectory($dir . DIRECTORY_SEPARATOR . $item))
                              {
                                return false;
                              }
                          }
                        return rmdir($dir);
                      }
                    deleteDirectory("/var/webister/tmp");
                    if (@mkdir("/var/webister/tmp", 0777, true))
                      {
                        print_message(lang('CREATED'), " Temperary Storage for Updates.", $color = 'orange');
                      }
                    else
                      {
                        print_message(lang('ERROR'), lang('Could Not Create Dir') . ' ' . lang('Operation Aborted'), $color = 'red');
                        redodie('</body></html>');
                      }
                  }
                $master = '/var/webister/master';
                $data   = exec('unzip -d /var/webister/tmp ' . $master . '.zip');
                if (is_dir("/var/webister/tmp/INTisp-master"))
                  {
                    $step++;
                    print_message(lang('STEP') . " " . $step, "File extraction completed.", $color = 'grey');
                  }
                else
                  {
                    print_message(lang('ERROR'), lang('Could Not Read File') . ' master.zip. ' . lang('Operation Aborted'), $color = 'red');
                    redodie('</body></html>');
                  }
				  exec("rm -rf /var/webister/tmp/INTisp-master/intisp/system/data");
                unlink("/var/webister/master.zip");
                function recurse_copy($src, $dst)
                  {
                    $dir = opendir($src);
                    @mkdir($dst);
                    while (false !== ($file = readdir($dir)))
                      {
                        if (($file != '.') && ($file != '..'))
                          {
                            if (is_dir($src . '/' . $file))
                              {
                                recurse_copy($src . '/' . $file, $dst . '/' . $file);
                              }
                            else
                              {
                                copy($src . '/' . $file, $dst . '/' . $file);
                                print_message("COPY", "Copying " . $src . '/' . $file . " to " . $dst . '/' . $file . ".", $color = 'grey');
                              }
                          }
                      }
                    closedir($dir);
                  }
                recurse_copy("/var/webister/tmp/INTisp-master/intisp/system/", "/var/www/html/interface/");
                $step++;
		exec("rm -rf /var/www/html/interface/install");
                print_message(lang('STEP') . " " . $step, "Overwrited Directories.", $color = 'grey');
                exec("rm -rf /var/webister/tmp");
                $step++;
                print_message(lang('STEP') . " " . $step, "Cleaning Up.", $color = 'grey');
                $updated = TRUE;
              }
            else
              {
                print_message(lang('OK'), lang('Update Ready'), $color = 'green');
                print_message('', '<a class="btn btn-primary" href="?page=update&doUpdate=true">' . lang('Install Now?') . '</a><br><br><br><br><br> <a class="btn btn-danger" href="?page=update&doUpdate=true&force">Emergency Recovery?</a>');
              }
            break;
          }
      }
    if (isset($updated) and $updated == true)
      {
		    include "include/mail.php";
            sendemailuser(
                "System Update/Emergency Recovery", "
    <p>IntISP has been updated to version " . $actualVersion . ". Please make sure everything works, if not you will need to either run a emergency restore or restore your backup.</p>
    "
            );
        print_message(lang('READY'), lang('Script Updated To Version') . ' ' . $actualVersion, $color = 'green');
      }
    else if (!isset($found) or $found != true)
      {
        print_message(lang('INFO'), lang('The Newest Version Of The Script Is Version') . ' ' . $currentVersion, $color = 'green');
        print_message(lang('OK'), lang('This Is The Latest Version!'), $color = 'green');
        print_message('', '<a class="btn btn-primary" href="?page=update&check_for_updates=true">' . lang('Check For Updates?') . '</a><br><br><br><br><br> <a class="btn btn-danger" href="?page=update&doUpdate=true&force">Emergency Recovery?</a>');
      }
  }
else if ($getVersions == '' OR $currentVersion == '')
  {
    print_message(lang('ERROR'), lang('Could Not Find Latest Releases. Operation Aborted'), $color = 'red');
  }
redodie('</body></html>');
function print_message($headline, $message, $color = '')
  {
    switch ($color)
    {
        case 'red':
            global $red;
            $color = $red;
            break;
        case 'orange':
            global $orange;
            $color = $orange;
            break;
        case 'green':
            global $green;
            $color = $green;
            break;
        case '':
            $color = '';
            break;
        default:
            global $grey;
            $color = $grey;
            break;
    }
    print '<p' . $color . '><b>' . $headline . '</b><br>' . $message . '</p>';
  }
function lang($string, $replaceArray = array(), $default = false)
  {
    global $lang, $automaticallyScrollToTheBottomOfThePage;
    if (is_array($replaceArray) and count($replaceArray) > 0)
      {
        $lang[$string] = strReplaceAssoc($replaceArray, $lang[$string]);
      }
    if (isset($automaticallyScrollToTheBottomOfThePage) and $automaticallyScrollToTheBottomOfThePage == TRUE and $string != 'title')
      {
        $scroll = '<script>window.setTimeout("scrollBy(0,1000)", 500);</script>';
      }
    else
      {
        $scroll = '';
      }
    return isset($lang[$string]) ? $lang[$string] . $scroll : ($default ? $default . $scroll : $string . $scroll);
  }
function human_filesize($bytes, $decimals = 2)
  {
    $unit = array(
        'B',
        'KB',
        'MB',
        'GB',
        'TB',
        'PB'
    );
    return @round($bytes / pow(1024, ($i = floor(log($bytes, 1024)))), $decimals) . ' ' . $unit[$i];
  }
?>
<?php
require 'include/footer.php';
?>
