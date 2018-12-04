

<!--Vacatures Block-->
        <div class="block3">
            <?php
            $submittedValue = "";
            $value0 = 8;
            $value1 = 16;
            $value2 = 24;
            $value3 = "";
            if (isset($_POST["FruitList"])) {
                $submittedValue = $_POST["FruitList"];
            }
            echo $submittedValue;
            ?>
            <form action="" name="fruits" method="post">
                <select project="FruitList" id="FruitList" name="FruitList" placeholder="<?php echo $submittedValue;?>">
                    <option value = "<?php echo $value0; ?>"<?php echo ($value0 == $submittedValue)?" SELECTED":""?>><?php echo $value0; ?></option>
                    <option value = "<?php echo $value1; ?>"<?php echo ($value0 == $submittedValue)?" SELECTED":""?>><?php echo $value1; ?></option>
                    <option value = "<?php echo $value2; ?>"<?php echo ($value0 == $submittedValue)?" SELECTED":""?>><?php echo $value2; ?></option>
                    <option value = "<?php echo $value3; ?>"<?php echo ($value0 == $submittedValue)?" SELECTED":""?>><?php echo "Alle"; ?></option>
                </select>
                <input type="submit" name="submit" id="submit" value="Submit" />
            </form>

            <?php


            $catquery = new WP_Query( 'cat=' . $category_id . '&posts_per_page=' . $submittedValue );
            while($catquery->have_posts()) : $catquery->the_post();
                ?>
                <!--Post Content Start-->
                <div class="post-block" id="post-<?php the_ID(); ?>">
                    <div class="col-lg-12">
                        <!-- Title -->
                        <a href="<?php the_permalink(); ?>"> <h2 class="post-title"><?php the_title(); ?></h2></a>
                        <!-- Subtitle -->
                        <h5 class="post-subtitle"><?php echo get_the_date(); ?></h5>
                        <!-- Content -->
                        <div class="post-content"><?php echo wp_trim_words( get_the_content(), 150, '...' );?></div>
                        <a href="<?php the_permalink(); ?>#post-scroll" class="perma-button">Bekijk Vacature</a>
                    </div>
                </div>
                <!--Post Content End-->
            <?php endwhile; ?>
            <?php wp_reset_query(); // reset the query ?>
        </div>
        <!--Container End-->