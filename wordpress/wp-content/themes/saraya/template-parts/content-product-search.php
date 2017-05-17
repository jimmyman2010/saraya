<div class="site-title search-area">
    <div class="container">
        <div class="search-product">

            <?php $id = get_option('product_page_' . ICL_LANGUAGE_CODE) ? intval(get_option('product_page_' . ICL_LANGUAGE_CODE)) : 335 ?>
            <form action="<?= get_page_link($id); ?>">
                <div class="row">
                    <div class="col col-1">
                        <label for="select--brand"><?= get_option('product_brand_' . ICL_LANGUAGE_CODE) ?></label>
                        <select id="select--brand" name="pb">
                            <option value="">-- <?= get_option('product_brand_' . ICL_LANGUAGE_CODE) ?> --</option>
                            <?php
                            $terms = get_terms( array(
                                'taxonomy' => 'brand',
                                'hide_empty' => false,
                            ) );
                            if(is_array($terms)) {
                                $qv = get_query_var( 'pb' );
                                foreach ($terms as $tmp) {
                                    if($tmp->term_id === intval($qv)){
                                        echo '<option selected="selected" value="' . $tmp->term_id . '">' . $tmp->name . '</option>';
                                    } else {
                                        echo '<option value="' . $tmp->term_id . '">' . $tmp->name . '</option>';
                                    }
                                }
                            }
                            ?>
                        </select>

                    </div>
                    <div class="col col-1">
                        <label for="select--market-segment"><?= get_option('product_market_' . ICL_LANGUAGE_CODE) ?></label>
                        <select id="select--market-segment" name="ms">
                            <option value="">-- <?= get_option('product_market_' . ICL_LANGUAGE_CODE) ?> --</option>
                            <?php
                            $terms = get_terms( array(
                                'taxonomy' => 'market_segment',
                                'hide_empty' => false,
                            ) );
                            if(is_array($terms)) {
                                $qv = get_query_var( 'ms' );
                                foreach ($terms as $tmp) {
                                    if($tmp->term_id === intval($qv)){
                                        echo '<option selected="selected" value="' . $tmp->term_id . '">' . $tmp->name . '</option>';
                                    } else {
                                        echo '<option value="' . $tmp->term_id . '">' . $tmp->name . '</option>';
                                    }
                                }
                            }
                            ?>
                        </select>
                    </div>
                    <div class="col col-1">
                        <label for="select--type"><?= get_option('product_type_' . ICL_LANGUAGE_CODE) ?></label>
                        <select id="select--type" name="pt">
                            <option value="">-- <?= get_option('product_type_' . ICL_LANGUAGE_CODE) ?> --</option>
                            <?php
                            $terms = get_terms( array(
                                'taxonomy' => 'product_type',
                                'hide_empty' => false,
                            ) );
                            if(is_array($terms)) {
                                $qv = get_query_var( 'pt' );
                                foreach ($terms as $tmp) {
                                    if($tmp->term_id === intval($qv)){
                                        echo '<option selected="selected" value="' . $tmp->term_id . '">' . $tmp->name . '</option>';
                                    } else {
                                        echo '<option value="' . $tmp->term_id . '">' . $tmp->name . '</option>';
                                    }
                                }
                            }
                            ?>
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="col col-2">
                        <label class="label-name" for="name"><?= strtoupper(get_option('product_byname_' . ICL_LANGUAGE_CODE)) ?></label>
                        <input type="text" id="name" placeholder="<?= get_option('product_byname_' . ICL_LANGUAGE_CODE) ?>" name="pn" value="<?php echo get_query_var( 'pn' ); ?>">
                    </div>
                    <div class="col col-1">
                        <label class="label-search">&nbsp;</label>
                        <button type="submit"><?= get_option('product_search_' . ICL_LANGUAGE_CODE) ?></button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>