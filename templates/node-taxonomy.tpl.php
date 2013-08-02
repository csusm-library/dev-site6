<div id="node-<?php echo $node->nid; ?>" class="node<?php if($sticky) echo ' sticky'; ?><?php if(!$status) echo ' node-unpublished'; ?>">
<a class="node-title" href="<?php echo $node_url ?>" title="<?php echo $title ?>">
<?php echo $title ?></a>
</div>