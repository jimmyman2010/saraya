<div class="site-title search-area">
    <div class="container">
        <div class="search-product">

            <form>
                <div class="row">
                    <div class="col col-1">
                        <label for="select--brand">BRAND</label>
                        <select id="select--brand" name="pb">
                            <option value="">-- Brand --</option>
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
                        <label for="select--market-segment">MARKET SEGMENT</label>
                        <select id="select--market-segment" name="ms">
                            <option value="">-- Market segment --</option>
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
                        <label for="select--type">PRODUCT TYPE</label>
                        <select id="select--type" name="pt">
                            <option value="">-- Type --</option>
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
                        <label class="label-name" for="name">SEARCH BY NAME</label>
                        <input type="text" id="name" placeholder="Search by name" name="pn" value="<?php echo get_query_var( 'pn' ); ?>">
                    </div>
                    <div class="col col-1">
                        <label class="label-search">&nbsp;</label>
                        <button type="submit">Search</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>