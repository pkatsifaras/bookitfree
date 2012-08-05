<td colspan="2">
  <?php echo __('%%name%% - %%slug%%', array('%%name%%' => link_to($bookit_category->getName(), 'bookit_category_edit', $bookit_category), '%%slug%%' => $bookit_category->getSlug()), 'messages') ?>
</td>
