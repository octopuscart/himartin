<?php
$this->load->view('layout/header');

function truncate($str, $len) {
    $tail = max(0, $len - 10);
    $trunk = substr($str, 0, $tail);
    $trunk .= strrev(preg_replace('~^..+?[\s,:]\b|^...~', '...', strrev(substr($str, $tail, $len - $tail))));
    return $trunk;
}
?>

<section class="page_title translucent_bg_color_dark image_fixed t_align_c relative wrapper" style="margin-top: 0px;padding: 0px;">
    <div class="container">
        <h1 class="color_light fw_light m_bottom_5" style="    font-size: 22px;
            line-height: 25px;">Styling Tips</h1>
        <!--breadcrumbs-->

    </div>
</section>




<div class="section_offset">
    <div class="container">
        <div class="row">
            <section class="col-lg-9 col-md-9 col-sm-9 m_xs_bottom_30">
                <!--post-->
                <article class="clearfix m_bottom_45 m_xs_bottom_30 blog_post">
                    <!--date,category,likes-->
                    <div class="blog_side_container w_sm_auto f_left f_xs_none m_xs_bottom_5">
                        <!--date-->
                        <a href="#" class="d_block d_xs_inline_b m_xs_right_5 blog_side_button r_corners bg_color_purple color_light not_hover t_align_c blog_date m_bottom_5">
                            <span class="d_block day_of_the_month fw_light">27</span>
                            <span class="d_block tt_uppercase fs_medium">Dec</span>
                        </a>
                        <!--category-->


                        <div id="fb-root"></div>
                        <script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.2&appId=224707228091621&autoLogAppEvents=1"></script>
                        <div class="fb-share-button" data-href="<?php echo site_url('styleTips/' . $styleobj->id . "/" . $styleobj->title); ?>" data-layout="box_count" data-size="large"><a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=<?php echo urlencode(site_url('styleTips/' . $styleobj->id . "/" . $styleobj->title)); ?>;src=sdkpreparse" class="fb-xfbml-parse-ignore">Share</a></div>

                        <!--likes-->






                        <a href="https://api.whatsapp.com/send?text=<?php echo site_url('styleTips/' . $styleobj->id . "/" . $styleobj->title); ?>" class="d_block d_xs_inline_b m_xs_right_5 blog_side_button vc_child t_align_c color_purple bg_color_purple_hover color_light_hover bg_light_3 r_corners m_bottom_5 tr_all">
                            <i class="fa fa-whatsapp d_inline_m" style="font-size: 40px;"></i>



                        </a>
                        <!-- AddThis Button BEGIN -->

                        <div class="addthis_toolbox addthis_floating_style addthis_counter_style clearfix">
                            <a class="addthis_button_facebook_like" fb:like:layout="box_count"></a>
                            <a class="addthis_button_tweet" tw:count="vertical"></a>
                            <a class="addthis_button_google_plusone" g:plusone:size="tall"></a>
                            <a class="addthis_counter"></a>
                        </div></div>
                    <!--post content-->
                    <figure>
                        <img src="images/blog_img_3.jpg" alt="" class="r_corners m_bottom_20">
                        <figcaption>
                            <h3 class="fw_light color_dark"><?php echo $styleobj->title; ?></h3>
                            <ul class="dotted_list m_bottom_5 color_grey_light_2">
                                <li class="m_right_15 relative d_inline_m">
                                    <a href="#" class="color_grey fs_small">
                                        <i>By admin</i>
                                    </a>
                                </li>
                                <li class="m_right_15 relative d_inline_m">
                                    <a href="#" class="fs_medium color_grey"><i>Mobile</i></a>,
                                    <a href="#" class="fs_medium color_grey"><i>Technology</i></a>
                                </li>
                                <li class="m_right_15 relative d_inline_m">
                                    <a href="#" class="color_scheme_hover">
                                        <i class="icon-chat-empty m_right_2 color_grey_light_2 tr_all"></i><i class="fs_medium color_grey tr_all">35</i>
                                    </a>
                                </li>
                            </ul>
                            <p class="fw_light m_bottom_12" style="    white-space: pre-line;">
                                <?php echo $styleobj->description; ?>
                            </p>
                            <!--tags-->
                            <i class="icon-tag-1 color_grey_light_2 d_inline_m m_right_5 fs_large tags_icon"></i>
                            <ul class="d_inline_m fw_light">
                                <li class="d_inline_m"><a href="#" class="color_purple">mobile</a>,</li>
                                <li class="d_inline_m"><a href="#" class="color_purple">tips</a>,</li>
                                <li class="d_inline_m"><a href="#" class="color_purple">technology</a></li>
                            </ul>
                        </figcaption>
                    </figure>
                </article>
                <hr class="m_bottom_20">
                <!--author comment-->
                <div class="clearfix m_bottom_20">
                    <a href="#" class="f_left wrapper circle d_block m_right_20 m_xs_bottom_10">
                        <img src="images/blog_img_12.jpg" alt="">
                    </a>
                    <a href="#" class="d_inline_b m_bottom_8 color_dark tr_all"><b>Bradley Grosh</b></a>
                    <p class="fw_light fs_medium">Integer rutrum ante eu lacus. Vestibulum libero nisl, porta vel, scelerisque eget, malesuada at, neque. Vivamus eget nibh. Etiam cursus leo vel metus. Nulla facilisi. Aenean nec eros. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae.</p>
                </div>
                <hr class="m_bottom_15">
                <!--prev next post buttons-->
                <div class="clearfix m_bottom_45 m_xs_bottom_30">
                    <a href="#" class="color_purple d_inline_b color_pink_hover d_block f_left fw_light">
                        <span class="d_inline_m m_right_5 icon_wrap_size_0 circle color_grey_light tr_all">
                            <i class="icon-angle-left"></i>
                        </span>
                        Prev Post
                    </a>
                    <a href="#" class="color_purple d_inline_b color_pink_hover d_block f_right fw_light">
                        Next Post
                        <span class="d_inline_m m_left_5 icon_wrap_size_0 circle color_grey_light tr_all">
                            <i class="icon-angle-right"></i>
                        </span>
                    </a>
                </div>
                <h5 class="fw_light color_dark m_bottom_25">Comments</h5>
                <!--comment level 1-->
                <div class="m_bottom_20">
                    <div class="d_table w_full m_bottom_20">
                        <div class="d_table_cell">
                            <!--author photo-->
                            <a href="#" class="d_inline_m circle wrapper m_right_10">
                                <img src="images/blog_img_13.jpg" alt="">
                            </a>
                            <!--author name-->
                            <div class="d_inline_m">
                                <a href="#" class="fs_large color_dark tr_all"><b>Camala Haddon</b></a>
                                <p class="fs_medium color_grey d_mxs_none"><i>September 23, 2013, 11:45 am</i></p>
                            </div>
                        </div>
                        <div class="d_table_cell t_align_r v_align_m d_mxs_none">
                            <a href="#" class="color_purple d_inline_b color_pink_hover d_block f_right fw_light">
                                <span class="d_inline_m m_right_5 icon_wrap_size_0 circle color_grey_light tr_all">
                                    <i class="icon-reply"></i>
                                </span>
                                Reply
                            </a>
                        </div>
                    </div>
                    <div class="comment relative r_corners bg_light_3 fw_light">Nulla venenatis. In pede mi, aliquet sit amet, euismod in, auctor ut, ligula. Aliquam dapibus tincidunt metus. Praesent justo dolor, lobortis quis, lobortis dignissim, pulvinar ac, lorem. Vestibulum sed ante. Donec sagittis euismod purus.Sed ut perspiciatis unde omnis iste natus error sit</div>
                </div>
                <!--comment level 2-->
                <div class="m_bottom_20 comment_level_2">
                    <div class="d_table w_full m_bottom_20">
                        <div class="d_table_cell">
                            <!--author photo-->
                            <a href="#" class="d_inline_m circle wrapper m_right_10">
                                <img src="images/blog_img_12.jpg" alt="">
                            </a>
                            <!--author name-->
                            <div class="d_inline_m">
                                <a href="#" class="fs_large color_dark tr_all"><b>Bradley Grosh</b></a>
                                <p class="fs_medium color_grey d_mxs_none"><i>September 23, 2013, 11:45 am</i></p>
                            </div>
                        </div>
                        <div class="d_table_cell t_align_r v_align_m d_mxs_none">
                            <a href="#" class="color_purple d_inline_b color_pink_hover d_block f_right fw_light">
                                <span class="d_inline_m m_right_5 icon_wrap_size_0 circle color_grey_light tr_all">
                                    <i class="icon-reply"></i>
                                </span>
                                Reply
                            </a>
                        </div>
                    </div>
                    <div class="comment relative r_corners bg_light_3 fw_light">Vivamus eget nibh. Etiam cursus leo vel metus. Nulla facilisi. Aenean nec eros. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Suspendisse sollicitudin velit sed leo. Ut pharetra augue nec augue. </div>
                </div>
                <!--comment level 1-->
                <div class="m_bottom_45 m_xs_bottom_30">
                    <div class="d_table w_full m_bottom_20">
                        <div class="d_table_cell">
                            <!--author photo-->
                            <a href="#" class="d_inline_m circle wrapper m_right_10">
                                <img src="images/blog_img_13.jpg" alt="">
                            </a>
                            <!--author name-->
                            <div class="d_inline_m">
                                <a href="#" class="fs_large color_dark tr_all"><b>Marta Healy</b></a>
                                <p class="fs_medium color_grey d_mxs_none"><i>September 23, 2013, 11:45 am</i></p>
                            </div>
                        </div>
                        <div class="d_table_cell t_align_r v_align_m d_mxs_none">
                            <a href="#" class="color_purple d_inline_b color_pink_hover d_block f_right fw_light">
                                <span class="d_inline_m m_right_5 icon_wrap_size_0 circle color_grey_light tr_all">
                                    <i class="icon-reply"></i>
                                </span>
                                Reply
                            </a>
                        </div>
                    </div>
                    <div class="comment relative r_corners bg_light_3 fw_light">Vivamus eget nibh. Etiam cursus leo vel metus. Nulla facilisi. Aenean nec eros. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Suspendisse sollicitudin velit sed leo. Ut pharetra augue nec augue. </div>
                </div>
                <!--comment form-->
                <h5 class="fw_light color_dark m_bottom_23">Leave a Comment</h5>
                <form>
                    <ul>
                        <li class="row fw_light">
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <input type="text" class="r_corners color_grey r_corners w_full m_bottom_10" placeholder="Name*">
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <input type="email" class="r_corners color_grey r_corners w_full m_bottom_10" placeholder="Email*">
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <input type="url" class="r_corners color_grey r_corners w_full m_bottom_10" placeholder="Website">
                            </div>
                        </li>
                        <li class="m_bottom_20 fw_light">
                            <textarea class="color_grey d_block r_corners w_full height_4" placeholder="Message"></textarea>
                        </li>
                        <li>
                            <button class="button_type_2 r_corners tr_all fs_medium color_blue transparent">Submit</button>
                        </li>
                    </ul>
                </form>
            </section>
            <aside class="col-lg-3 col-md-3 col-sm-3">
                <div class="m_bottom_40 m_xs_bottom_30">
                    <h5 class="fw_light color_dark m_bottom_20">Text Widget</h5>
                    <p class="fw_light">Nulla venenatis. In pede mi, aliquet sit amet, euismod in,auctor ut, ligula. Aliquam dapibus tincidunt metus. Praesent justo dolor, lobortis quis.</p>
                </div>
                <div class="tabs m_bottom_50 m_xs_bottom_30" data-easytabs="true">
                    <!--tabs nav-->
                    <ul class="tabs_nav type_3 hr_list d_inline_b d_md_block m_bottom_30 m_xs_bottom_20">
                        <li class="f_md_none active"><a href="#popular" class="color_dark d_block n_sc_hover tr_all_medium active">Popular</a></li>
                        <li class="f_md_none"><a href="#recent" class="color_dark d_block n_sc_hover tr_all_medium">Recent</a></li>
                        <li class="f_md_none"><a href="#comments" class="color_dark d_block n_sc_hover tr_all_medium">Comments</a></li>
                    </ul>
                    <!--tabs content-->
                    <div id="popular" class="active" style="display: block;">
                        <!--popular-->
                        <article class="clearfix m_bottom_35 m_xs_bottom_20">
                            <a href="#" class="d_block r_corners wrapper f_left m_right_20 m_md_right_10 m_xs_right_20 f_sm_none m_sm_bottom_10 d_sm_inline_b d_xs_block f_xs_left m_xs_bottom_0">
                                <img src="images/popular_img_1.jpg" alt="">
                            </a>
                            <a href="#" class="color_dark d_block lh_medium m_bottom_5"><b>Proin dictum</b></a>
                            <ul class="dotted_list color_grey_light_2 article_stats">
                                <li class="m_right_15 relative d_inline_m">
                                    <a href="#" class="color_grey_light_2 fs_small">
                                        <i class="icon-picture"></i>
                                    </a>
                                </li>
                                <li class="m_right_15 relative d_inline_m">
                                    <a href="#" class="fs_small color_grey">
                                        <i>June 26, 2013</i>
                                    </a>
                                </li>
                                <li class="m_right_15 relative d_inline_m">
                                    <a href="#" class="fs_small color_grey">
                                        <i>3D</i>
                                    </a>,
                                    <a href="#" class="fs_small color_grey">
                                        <i>Graphic Design</i>
                                    </a>
                                </li>
                            </ul>
                        </article>
                        <article class="clearfix m_bottom_35 m_xs_bottom_20">
                            <a href="#" class="d_block r_corners wrapper f_left m_right_20 m_md_right_10 m_xs_right_20 f_sm_none m_sm_bottom_10 d_sm_inline_b d_xs_block f_xs_left m_xs_bottom_0">
                                <img src="images/popular_img_2.jpg" alt="">
                            </a>
                            <a href="#" class="color_dark d_block lh_medium m_bottom_5"><b>Aliquam dapibus tincidunt metus</b></a>
                            <ul class="dotted_list color_grey_light_2 article_stats">
                                <li class="m_right_15 relative d_inline_m">
                                    <a href="#" class="color_grey_light_2 fs_small">
                                        <i class="icon-doc-text-inv"></i>
                                    </a>
                                </li>
                                <li class="m_right_15 relative d_inline_m">
                                    <a href="#" class="fs_small color_grey">
                                        <i>June 29, 2013</i>
                                    </a>
                                </li>
                                <li class="m_right_15 relative d_inline_m">
                                    <a href="#" class="fs_small color_grey">
                                        <i>Mobile</i>
                                    </a>,
                                    <a href="#" class="fs_small color_grey">
                                        <i>Technology</i>
                                    </a>
                                </li>
                            </ul>
                        </article>
                        <article class="clearfix">
                            <a href="#" class="d_block r_corners wrapper f_left m_right_20 m_md_right_10 m_xs_right_20 f_sm_none m_sm_bottom_10 d_sm_inline_b d_xs_block f_xs_left m_xs_bottom_0">
                                <img src="images/popular_img_3.jpg" alt="">
                            </a>
                            <a href="#" class="color_dark d_block lh_medium m_bottom_5"><b>Donec sagittis euismod purus</b></a>
                            <ul class="dotted_list color_grey_light_2 article_stats">
                                <li class="m_right_15 relative d_inline_m">
                                    <a href="#" class="color_grey_light_2 fs_small">
                                        <i class="icon-video"></i>
                                    </a>
                                </li>
                                <li class="m_right_15 relative d_inline_m">
                                    <a href="#" class="fs_small color_grey">
                                        <i>June 25, 2013</i>
                                    </a>
                                </li>
                                <li class="m_right_15 relative d_inline_m">
                                    <a href="#" class="fs_small color_grey">
                                        <i>Video</i>
                                    </a>,
                                    <a href="#" class="fs_small color_grey">
                                        <i>Music</i>
                                    </a>
                                </li>
                            </ul>
                        </article>
                    </div>
                    <div id="recent" style="display: none;">
                        <!--recent-->
                        <article class="clearfix m_bottom_35 m_xs_bottom_20">
                            <a href="#" class="d_block r_corners wrapper f_left m_right_20 m_md_right_10 m_xs_right_20 f_sm_none m_sm_bottom_10 d_sm_inline_b d_xs_block f_xs_left m_xs_bottom_0">
                                <img src="images/popular_img_3.jpg" alt="">
                            </a>
                            <a href="#" class="color_dark d_block lh_medium m_bottom_5"><b>Donec sagittis euismod purus</b></a>
                            <ul class="dotted_list color_grey_light_2 article_stats">
                                <li class="m_right_15 relative d_inline_m">
                                    <a href="#" class="color_grey_light_2 fs_small">
                                        <i class="icon-video"></i>
                                    </a>
                                </li>
                                <li class="m_right_15 relative d_inline_m">
                                    <a href="#" class="fs_small color_grey">
                                        <i>June 25, 2013</i>
                                    </a>
                                </li>
                                <li class="m_right_15 relative d_inline_m">
                                    <a href="#" class="fs_small color_grey">
                                        <i>Video</i>
                                    </a>,
                                    <a href="#" class="fs_small color_grey">
                                        <i>Music</i>
                                    </a>
                                </li>
                            </ul>
                        </article>
                        <article class="clearfix m_bottom_35 m_xs_bottom_20">
                            <a href="#" class="d_block r_corners wrapper f_left m_right_20 m_md_right_10 m_xs_right_20 f_sm_none m_sm_bottom_10 d_sm_inline_b d_xs_block f_xs_left m_xs_bottom_0">
                                <img src="images/popular_img_2.jpg" alt="">
                            </a>
                            <a href="#" class="color_dark d_block lh_medium m_bottom_5"><b>Aliquam dapibus tincidunt metus</b></a>
                            <ul class="dotted_list color_grey_light_2 article_stats">
                                <li class="m_right_15 relative d_inline_m">
                                    <a href="#" class="color_grey_light_2 fs_small">
                                        <i class="icon-doc-text-inv"></i>
                                    </a>
                                </li>
                                <li class="m_right_15 relative d_inline_m">
                                    <a href="#" class="fs_small color_grey">
                                        <i>June 29, 2013</i>
                                    </a>
                                </li>
                                <li class="m_right_15 relative d_inline_m">
                                    <a href="#" class="fs_small color_grey">
                                        <i>Mobile</i>
                                    </a>,
                                    <a href="#" class="fs_small color_grey">
                                        <i>Technology</i>
                                    </a>
                                </li>
                            </ul>
                        </article>
                        <article class="clearfix">
                            <a href="#" class="d_block r_corners wrapper f_left m_right_20 m_md_right_10 m_xs_right_20 f_sm_none m_sm_bottom_10 d_sm_inline_b d_xs_block f_xs_left m_xs_bottom_0">
                                <img src="images/popular_img_1.jpg" alt="">
                            </a>
                            <a href="#" class="color_dark d_block lh_medium m_bottom_5"><b>Proin dictum</b></a>
                            <ul class="dotted_list color_grey_light_2 article_stats">
                                <li class="m_right_15 relative d_inline_m">
                                    <a href="#" class="color_grey_light_2 fs_small">
                                        <i class="icon-picture"></i>
                                    </a>
                                </li>
                                <li class="m_right_15 relative d_inline_m">
                                    <a href="#" class="fs_small color_grey">
                                        <i>June 26, 2013</i>
                                    </a>
                                </li>
                                <li class="m_right_15 relative d_inline_m">
                                    <a href="#" class="fs_small color_grey">
                                        <i>3D</i>
                                    </a>,
                                    <a href="#" class="fs_small color_grey">
                                        <i>Graphic Design</i>
                                    </a>
                                </li>
                            </ul>
                        </article>
                    </div>
                    <div id="comments" style="display: none;">
                        <!--comments-->
                        <ul class="hr_list vr_list_type_2 fw_light color_grey lh_medium">
                            <li class="m_bottom_15">
                                <i class="icon-comment-empty m_right_8 fs_large color_grey_light_2 d_block f_left"></i>
                                <a href="#" class="color_grey">admin</a> on <a href="#" class="color_dark"><b>Proin dictum</b></a>
                            </li>
                            <li class="m_bottom_15">
                                <i class="icon-comment-empty m_right_8 fs_large color_grey_light_2 d_block f_left"></i>
                                <a href="#" class="color_grey">admin</a> on <a href="#" class="color_dark"><b>Aliquam dapibus tincidunt metus</b></a>
                            </li>
                            <li class="m_bottom_15">
                                <i class="icon-comment-empty m_right_8 fs_large color_grey_light_2 d_block f_left"></i>
                                <a href="#" class="color_grey">admin</a> on <a href="#" class="color_dark"><b>Donec sagittis euismod purus</b></a>
                            </li>
                            <li class="m_bottom_15">
                                <i class="icon-comment-empty m_right_8 fs_large color_grey_light_2 d_block f_left"></i>
                                <a href="#" class="color_grey">admin</a> on <a href="#" class="color_dark"><b>Lorem ipsum dolor sit</b></a>
                            </li>
                            <li>
                                <i class="icon-comment-empty m_right_8 fs_large color_grey_light_2 d_block f_left"></i>
                                <a href="#" class="color_grey">admin</a> on <a href="#" class="color_dark"><b>Nam elit agna,endrerit sit amet tincidunt ac</b></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <!--advertising area-->
                <div class="advertising_area t_align_c bg_light_2 color_grey m_bottom_45 m_xs_bottom_30">
                    <span class="tt_uppercase translucent">Advertisment</span>
                    <div class="tt_uppercase bg_light_3 vc_child"><div class="d_inline_m translucent fw_light lh_medium">Advertising Area<br><span class="fs_medium">250 x 250</span></div></div>
                </div>
                <div class="m_bottom_45 m_xs_bottom_30">
                    <h5 class="fw_light color_dark m_bottom_20">Categories</h5>
                    <ul class="vr_list_type_4 color_dark fw_light">
                        <li class="m_bottom_12">
                            <a href="#" class="color_dark d_inline_b">
                                <span class="icon_wrap_size_0 circle color_grey_light_5 d_block tr_inherit f_left">
                                    <i class="icon-angle-right"></i>
                                </span>
                                Web design
                            </a>
                        </li>
                        <li class="m_bottom_12">
                            <a href="#" class="color_dark d_inline_b">
                                <span class="icon_wrap_size_0 circle color_grey_light_5 d_block tr_inherit f_left">
                                    <i class="icon-angle-right"></i>
                                </span>
                                Web development
                            </a>
                        </li>
                        <li class="m_bottom_12">
                            <a href="#" class="color_dark d_inline_b">
                                <span class="icon_wrap_size_0 circle color_grey_light_5 d_block tr_inherit f_left">
                                    <i class="icon-angle-right"></i>
                                </span>
                                Marketing
                            </a>
                        </li>
                        <li class="m_bottom_12">
                            <a href="#" class="color_dark d_inline_b">
                                <span class="icon_wrap_size_0 circle color_grey_light_5 d_block tr_inherit f_left">
                                    <i class="icon-angle-right"></i>
                                </span>
                                Tips
                            </a>
                        </li>
                        <li class="m_bottom_12">
                            <a href="#" class="color_dark d_inline_b">
                                <span class="icon_wrap_size_0 circle color_grey_light_5 d_block tr_inherit f_left">
                                    <i class="icon-angle-right"></i>
                                </span>
                                Resources
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="m_bottom_45 m_xs_bottom_30">
                    <h5 class="fw_light color_dark m_bottom_23">Popular Video</h5>
                    <div class="iframe_video_wrap">
                        <iframe src="http://player.vimeo.com/video/71476743"></iframe>
                    </div>
                </div>
                <div class="m_bottom_45 m_xs_bottom_30">
                    <h5 class="fw_light color_dark m_bottom_23">Tags</h5>
                    <!--tags list-->
                    <ul class="hr_list tags_list">
                        <li class="m_right_5 m_bottom_5"><a href="#" class="r_corners button_type_2 d_block color_dark color_pink_hover fs_medium">interviews</a></li>
                        <li class="m_right_5 m_bottom_5"><a href="#" class="r_corners button_type_2 d_block color_dark color_pink_hover fs_medium">design</a></li>
                        <li class="m_right_5 m_bottom_5"><a href="#" class="r_corners button_type_2 d_block color_dark color_pink_hover fs_medium">development</a></li>
                        <li class="m_right_5 m_bottom_5"><a href="#" class="r_corners button_type_2 d_block color_dark color_pink_hover fs_medium">marketing</a></li>
                        <li class="m_right_5 m_bottom_5"><a href="#" class="r_corners button_type_2 d_block color_dark color_pink_hover fs_medium">press</a></li>
                        <li class="m_right_5 m_bottom_5"><a href="#" class="r_corners button_type_2 d_block color_dark color_pink_hover fs_medium">projects</a></li>
                        <li class="m_right_5 m_bottom_5"><a href="#" class="r_corners button_type_2 d_block color_dark color_pink_hover fs_medium">resources</a></li>
                        <li class="m_right_5 m_bottom_5"><a href="#" class="r_corners button_type_2 d_block color_dark color_pink_hover fs_medium">tips</a></li>
                        <li class="m_right_5 m_bottom_5"><a href="#" class="r_corners button_type_2 d_block color_dark color_pink_hover fs_medium">tricks</a></li>
                        <li class="m_right_5 m_bottom_5"><a href="#" class="r_corners button_type_2 d_block color_dark color_pink_hover fs_medium">web</a></li>
                    </ul>
                </div>
                <!--advertising area-->
                <div class="advertising_area type_2 t_align_c bg_light_2 color_grey m_bottom_45 m_xs_bottom_30">
                    <span class="tt_uppercase translucent">Advertisment</span>
                    <div class="advertising_row">
                        <div class="clearfix">
                            <div class="half_column f_left">
                                <div class="tt_uppercase bg_light_3 vc_child">
                                    <div class="d_inline_m translucent"><span class="d_sm_none d_xs_block">Advertising<br>Area<br></span>125 x125</div>	
                                </div>
                            </div>
                            <div class="half_column f_right">
                                <div class="tt_uppercase bg_light_3 vc_child">
                                    <div class="d_inline_m translucent"><span class="d_sm_none d_xs_block">Advertising<br>Area<br></span>125 x125</div>	
                                </div>
                            </div>
                        </div>
                        <div class="clearfix">
                            <div class="half_column f_left">
                                <div class="tt_uppercase bg_light_3 vc_child">
                                    <div class="d_inline_m translucent"><span class="d_sm_none d_xs_block">Advertising<br>Area<br></span>125 x125</div>	
                                </div>
                            </div>
                            <div class="half_column f_right">
                                <div class="tt_uppercase bg_light_3 vc_child">
                                    <div class="d_inline_m translucent"><span class="d_sm_none d_xs_block">Advertising<br>Area<br></span>125 x125</div>	
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </aside>
        </div>
    </div>
</div>



<script src="<?php echo base_url(); ?>assets/theme/plugins/isotope.pkgd.min.js"></script>



<?php
$this->load->view('layout/footer');
?>