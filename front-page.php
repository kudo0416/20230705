<?php get_header(); ?>
<main>
     <!-- スマホ版のトップ画像 -->
     <div class="res-main-visual-img"><a href="index.html"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/sp_top_01_01.png" alt="酒列磯前神社"></a></div>
                <div class="res-main-visual-backimg"></div>
<div class="main-wrapper">
                <div class="main-about-txt">
                    <h2>ようこそ、常陸国の古社へ</h2>
                    <p>
                        酒列磯前神社、その歴史は古く<br>
                        平安時代からと云われています。<br>
                        病気平癒・健康長寿・醸造発展<br>
                        温泉の神に深く関わっており<br>
                        古来より地元のみなさまに<br>
                        愛されてまいりました。<br>
                        四季のうつろいとともに<br>
                        歴史を感じながら<br>
                        ただただ、その身をゆだね<br>
                        ゆるやかに過ぎていく刻を感じる。
                    </p>
                </div>
                <p class="goyuisyo"><a href="<?php echo esc_url(home_url('/about')); ?>about.html">ご由緒</a></p>
            </div>

            <div class="sanpai">
                    <p><a href="<?php echo esc_url(home_url('/sanpai')); ?>sanpai.html">参拝・お祓い・御祈祷</a></p>
                    <p>神々を敬い<br>畏怖の念を抱く</p>
            </div>

            <div class="contents-wrapper">
                <div class="news">
                    <div class="logo-tsubaki-1"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/tsubaki.png" alt="酒列椿のロゴ"></div>
                    <h2>お知らせ</h2>
                    <div class="news-wrapper">
                        <?php $args = array(
                            'post_type' => 'post',
                            'posts_per_page' => 4,
                            );
                        $new_query = new WP_Query($args);
                        if($new_query->have_posts()): while($new_query->have_posts()): $new_query->the_post(); ?>
                        
                        
                        <div class="news-topics">
                            <a href="#">
                                <div class="news-img"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/r5maygatugosyuin.jpeg" alt="四月御朱印のお知らせ"></div>
                                
                                <p><?php the_title(); ?></p>
                            </a>
                        </div>
                       
                        <?php endwhile; wp_reset_postdata(); else: ?>
                        <?php endif; ?>
                    </div>
                    <p class="all-news"><a href="<?php echo esc_url(home_url('/about')); ?>">お知らせ一覧</a></p>
                </div>
        
                <div class="info-item">
                    <div class="logo-tsubaki-2"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/tsubaki.png" alt="酒列椿のロゴ"></div>
                    <div class="item-wrapper">
                        <div class="item">
                            <div class="item1">
                                <a href="#">
                                    <h3>人生儀礼のご案内</h3>
                                    <p>日本古来からの尊い風習</p>
                                </a>
                            </div>  
                        </div>
                        <div class="item">
                            <div class="item2">
                                <a href="#">
                                    <h3>法人祈願のご案内</h3>
                                    <p>法人・団体様の御祈願</p>
                                </a>
                            </div>  
                        </div>
                        <div class="item">
                            <div class="item3">
                                <a href="#">
                                    <h3>幸運の亀さん</h3>
                                    <p>宝くじ開運祈願</p>
                                </a>
                            </div>  
                        </div>
                        <div class="item">
                            <div class="item4">
                                <a href="#">
                                    <h3>病気平癒・健康長寿</h3>
                                    <p>法人・団体様の御祈願</p>
                                </a>
                            </div>  
                        </div>
                    </div>
                </div>
            </div>

            <div class="res-takarakuji">
                <div class="logo-tsubaki-3"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/tsubaki.png" alt="酒列椿のロゴ"></div>
                <a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/sp_top_02.png" alt="宝くじ当選祈願幸運の亀さん"></a>
            </div>
        
            <div class="ooaraiisosakijinja-wrapper">
                <div class="ooaraiisosakijinja">
                    <div class="ooaraiisosakijinja-img1"></div>
                    <div class="ooaraiisosakijinja-txt">
                        <h3>『対の宮』</h3>
                        <h2>大洗磯前神社</h2>
                        <p>当社の兄弟神社です。<br>大己貴命・少彦名命をお祀りしております。<br>海の中にある神磯の鳥居は神秘的で大人気です。</p>
                        <p><a href="https://www.oarai-isosakijinja.net/">大洗磯前神社へ</a></p>
                    </div>
                    <div class="ooaraiisosakijinja-img2"></div>
                </div>
            </div>
            

            <div class="shrine-guidance">
                <p><a href="#">境内のご案内</a></p>
                <p>刻まれた歴史<br>という趣が<br>時を忘れさせる</p>
            </div>
</main>
<?php get_footer(); ?>