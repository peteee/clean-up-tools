<?php
  
  /**
   * loeschmich.php
   *
   * Delete stuff recursively created by malicious scripts when no access to CHOWN
   * ...to be used with caution!
   *
   * @author Peter Oberlaender aka A5tr4y(0z) aka peteee aka W00L
   * @version 1.0 $
   * @link wayoutofline.net
   * @see http://stackoverflow.com/questions/3338123/how-do-i-recursively-delete-a-directory-and-its-entire-contents-files-sub-dir
   */
  
  /**
   * @var string $dir2delete Folder which you want to empty of ALL its contens, using realitve paths
   */
  $dir2delete = "tmp/";
  
  /**
   * Total deletion method
   * 
   * @param string $dir folder as defined in $dir2delete
   * @return void
   */
  function rrmdir($dir) { 
    if (is_dir($dir)) { 
      $objects = scandir($dir); 
      foreach ($objects as $object) { 
        if ($object != "." && $object != "..") { 
          if (is_dir($dir."/".$object))
            rrmdir($dir."/".$object);
          else
            unlink($dir."/".$object); 
        } 
      }
      rmdir($dir); 
    } 
  }
  
  /**
   * Call it here to execute the deletion
   */
  rrmdir($dir2delete);
  
?>