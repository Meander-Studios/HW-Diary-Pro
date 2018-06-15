<?php
  function valid_pass($candidate) { //Code snippet from code.runnable.com by gtsolutions
      if (!preg_match_all('$\S*(?=\S{8,})(?=\S*[a-z])(?=\S*[A-Z])(?=\S*[\d])(?=\S*[\W])\S*$', $candidate))
          return FALSE;
      return TRUE;
  }
 ?>
