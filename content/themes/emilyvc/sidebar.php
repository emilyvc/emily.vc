<aside class="sidebar" role="complementary">
    <?php
    $page_id = ($post->post_parent > 0 ? $post->post_parent : $post->ID);

    $childArgs = array(
        'child_of' => $page_id,
        'post_type' => 'page'
    );
    $list_pages = get_pages($childArgs);
    if($list_pages) { ?>
        <div class="sidebar__section">
            <h2 class="sidebar__heading">In this section</h2>
            <nav class="list--unset list--arrows" role="navigation">
                <?php
                foreach($list_pages as $page):
                    $page_url = '/';
                    $post_parents = array_reverse(get_post_ancestors($page->ID));

                    foreach($post_parents as $parent_id) {
                        $ancestor = get_page($parent_id);
                        $page_url .= $ancestor->post_name . '/';
                    }
                    $page_url .= $page->post_name;
                    ?>
                    <li class="<?php if(is_page($page->ID)) { ?>current_page_item<?php } ?>">
                        <a href="<?php echo $page_url; ?>">
                            <span class="icon--caret-right"></span>
                            <?php echo $page->post_title; ?>
                        </a>
                    </li>
                <?php endforeach; ?>
            </nav>
        </div>
    <?php } ?>
</aside>