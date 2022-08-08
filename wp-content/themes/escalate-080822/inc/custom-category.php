<?php 
function custom_category_with_child(){
    /**
     * function to categorized parent, child and grandchilds
     */
    $parents=get_categories(array('parent'=>0,'hide_empty' => false));
    if(!empty($parents)): ?>
        
        <ul>
    <?php foreach($parents as $parent): ?>
            <li><?php _e($parent->name); ?></li>
            <?php $childs = get_categories(array('parent'=>$parent->term_id,'hide_empty' => false) );
        if(!empty($childs)): ?>
            <ul>
                <?php
            foreach($childs as $child): ?>
            <li><?php _e($child->name); ?></li>
            <?php 
                $grandChilds = get_categories( array('parent'=>$child->term_id,'hide_empty' => false) );
                if(!empty($grandChilds)):
                    ?>
                    <ul>
                    <?php
                    foreach($grandChilds as $grandChild): ?>
                       <li><?php _e($grandChild->name); ?></li>
                        <?php
                    endforeach;?>
                    </ul>
                    <?php
                endif;
            endforeach; ?>

            </ul>
            <?php
        endif;
    endforeach; ?>
    </ul>
    <?php
endif;
}