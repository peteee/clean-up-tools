<?php
  
  /**
   * loeschmich-single.php
   *
   * Delete single files (OR multiple files using an array list)
   * ...to be used with caution!
   *
   * @author Peter Oberlaender aka A5tr4y(0z) aka peteee aka W00L
   * @version 1.0 $
   * @link wayoutofline.net
   * @see http://php.net/manual/en/function.unlink.php
   */
  
  /**
   * @var array $files2delete Files, listed in array using relative paths
   * @example array('components/com_jce/7i8eb2.php', 'xyzspammailer.php', 'etc...');
   */
  $files2delete = array(''); //filenames here
  
  /**
   * File deletion method
   * 
   * @param array $files files as defined in $files2delete
   * @return void
   */
  function rrmfiles($files) { 
    foreach ($files as $file) { 
      unlink($file); 
    }
  }
  
  /**
   * Call it here to execute the deletion
   */
  rrmfiles($files2delete);
  
?>