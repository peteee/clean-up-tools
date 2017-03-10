<?php 
  /**
   * typo3symlinkz.php
   *
   * Create Typo3 symlinks when no access to SSH
   *
   * @author Peter Oberlaender aka A5tr4y(0z) aka peteee aka W00L
   * @version 1.0 $
   * @link wayoutofline.net
   *
   * @var boolean $_GET['execute'] fire up this script by setting ?execute=true from CLI or browser
   *
   */
   
  if(isset($_GET['execute']) && $_GET['execute']==='true') {
    
    /**
     * @var string $typo3version replace with YOUR version src folder
     */
    $typo3version = 'typo3_src-4.2.8';
    if (is_dir($typo3version)) 
      symlink($typo3version, 'typo3_src');
    }
    if (is_dir('typo3_src/typo3')) 
      symlink('typo3_src/typo3', 'typo3');
    }
    if (is_dir('typo3_src/misc')) 
      symlink('typo3_src/misc', 'misc');
    }
    if (is_dir('typo3_src/t3lib')) {
      symlink('typo3_src/t3lib', 't3lib');
    }
    if (file_exists('typo3_src/index.php')) {
      symlink('typo3_src/index.php', 'index.php');
    }
    if (file_exists('typo3_src/clear.gif')) {
      symlink('typo3_src/clear.gif', 'clear.gif');
    }
  }
?>
