<?php if ( ! empty( $settings->color_field ) ) : ?>	
.fl-node-<?php echo $id; ?> .bread-parent {
    color: #<?php echo $settings->color_field; ?>;
}
<?php endif; ?>
	
<?php if ( ! empty( $settings->color_field_2 ) ) : ?>	
.fl-node-<?php echo $id; ?> .item-current {
    color: #<?php echo $settings->color_field_2; ?>;
}
<?php endif; ?>
