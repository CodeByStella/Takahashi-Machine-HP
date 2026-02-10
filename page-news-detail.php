<?php

/**
 * Page template for News (slug: news).
 *
 * @package mytheme
 */
get_header();
?>

<!-- Hero section start -->
<?php
$hero_mesh = mytheme_img_asset('news/hero-mesh');
?>
<section class="about-hero relative ">
    <div class="aspect-[1600/577] relative">
        <img src="<?php echo esc_url($hero_mesh); ?>" alt="<?php echo esc_attr(get_the_title()); ?>"
            class="-z-10 absolute h-auto w-[94%] object-cover mx-auto left-1/2 -translate-x-1/2" />
        <div class="w-full max-w-6xl mx-auto flex justify-center items-end">
            <p class="text-[14px] opacity-70 mt-[20px] w-full text-right pr-30">TOP > お知らせ >
                <?php the_title(); ?>
            </p>
        </div>
        <div class=" w-full py-[42px] max-w-6xl mx-auto px-10">
            <div class="flex justify-start ">
                <div class="flex flex-row gap-[12px]">
                    <span
                        class="shrink-0 bg-secondary px-[14px] py-[4px] text-[12px] font-medium leading-none text-white">
                        お知らせ
                    </span>
                    <h1 class="text-[16px] font-light leading-[1.1]">
                        <?php the_title(); ?>
                    </h1>
                </div>
            </div>
            <p class="text-[20px] lg:text-[30px] font-light leading-[1.5] mt-[20px]">
                投稿のタイトルが入りますダミーテキストです投稿のタイトルが入ります投稿のタイトルが入りますダミーテキストです投稿のタイトルが入ります</p>
        </div>
    </div>
</section>
<!-- Hero section end -->

<!-- BackTop section start -->
<section class=" ">
    <div class="max-w-6xl mx-auto px-10 mt-[65px] border-t-2 flex justify-center py-[20px]">
        <div
            class="flex justify-center items-center bg-black px-[20px] py-[17px] rounded-[27px] w-[260px]">
            <p class="text-[14px] font-medium text-white text-center ml-[60px]">BACK TO LIST <span
                    class="font-bold text-white ml-[50px]">></span></p>
        </div>
    </div>
</section>
<!-- BackTop section end -->

<?php
get_footer();