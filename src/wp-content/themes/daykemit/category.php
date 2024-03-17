<?php
/**
 * Posts archive.
 *
 * @package          Flatsome\\Templates
 * @flatsome-version 3.16.0
 */
get_header();

$category = get_queried_object();
$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
$posts_per_page = get_option('posts_per_page');
$args = array(
    'cat' => $category->cat_ID,
    'posts_per_page' => $posts_per_page,
    'paged' => $paged,
    'fields' => 'ids'
);
$query = new WP_Query($args);
$post_ids = implode(',', $query->posts);

$pagination_links = paginate_links(array(
    'total' => $query->max_num_pages,
));
$pagination_links = str_replace('Trang sau ', '', $pagination_links);
$pagination_links = str_replace(' Trang trước', '', $pagination_links);
$pagination_links = str_replace('Next ', '', $pagination_links);
$pagination_links = str_replace(' Previous', '', $pagination_links);
?>
<div class="content_sub">
    <div class="">
        <?php
        echo do_shortcode(<<<EOF
[gap height="20px"]
[blog_posts style="normal" type="row" col_spacing="xsmall" columns="3" columns__md="1" ids="$post_ids" show_date="false" excerpt_length="30" image_height="56.25%" text_align="left" image_size="medium"]
<div class="c-pagination">$pagination_links</div>
EOF
        );
        ?>
    </div>
</div>
<style>
    /* .c-pagination {
        margin-bottom: 1rem;
        display: flex;
        justify-content: center;
    }
    .c-pagination .current{
        border-color: #21487d;
        background-color: #21487d;
    }
    .c-pagination a, .c-pagination span {
        margin-left: 1rem;
        border: 2px solid;
        border-radius: 99px;
        display: block;
        font-size: 1.1em;
        font-weight: bolder;
        height: 2.25em;
        line-height: 1.8em;
        width: 2.25em;
        text-align: center;
        transition: all .3s;
        vertical-align: top;
    }
    .c-pagination a:first-child, .c-pagination span:first-child {
        margin-left: 0rem;
    } */
</style>
<?php
get_footer();
