<?php
function fusion_sgvirtual_preprocess_node(&$variables) {
    $links = $variables['node']->links;
    
    //Move comment_add to end of $links
    if( isset($links['comment_add']) ) {
      $comment_add = $links['comment_add'];
      unset($links['comment_add']);
      $links = array_merge($links, array('comment_add' => $comment_add));
    }

}
