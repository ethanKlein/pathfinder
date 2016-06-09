<?php
/**
 * The template for displaying all single posts and attachments
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

get_header(); ?>



<!-- NAV -->
<nav class="pathfinder_nav">
  <div class="container">
    <div class="row">
      <div class="col-xs-2 relative">
        <div class="topic_box">Arctic Development</div>
      </div>
      <div class="col-sm-10 text-right relative">
        <ul class="nav">
          <li>
            <div class="current_bar"></div>
            <a href="#context">Overview</a>
          </li>
          <li>
            <div class="current_bar"></div>
            <a data-section="activity" href="#activity">Activity</a>
          </li>
          <li>
            <div class="current_bar"></div>
            <a href="#perspective">Perspectives</a>
          </li>
          <li>
            <div class="current_bar"></div>
            <a href="#next">Looking Ahead</a>
          </li>
        </ul>
      </div>
    </div>
  </div>
</nav>

<!-- MOBILE NAV -->
<div class="mobile_nav closed">
  <a href="#context">Overview</a>
  <a href="#activity">Activity</a>
  <a href="#perspective">Perspectives</a>
  <a href="#next">Looking Ahead</a>
</div>

<!-- hamburger mobile nav (only shows up on smaller screen widths)n -->
<div id="hamburger">
  <span></span>
  <span></span>
  <span></span>
</div>

<!-- TITLE  -->
<div class="top_section_background">
  <section class="top_section container">
    <div class="row">
      <div class="col-sm-8 col-sm-offset-2">
        <div class="top_title">
          Investment Despite Challenges in Arctic Shipping Routes
        </div>
        <div class="sub_title">
          <!--Melting sea ice may change the face of global shipping.-->
        </div>
        <div class="tiny_margin_bottom">
          <img src="<?php bloginfo('stylesheet_directory'); ?>/img/avatar_big.png" alt="Doug Smith" />
        </div>
        <div class="body_text">By Doug Smith</div>
      </div>
    </div>
  </section>
</div>

<!-- SPOTLIGHT  -->
<div class="spotlight_container">
  <section class="spotlight_row container">
    <div class="row">
      <div class="text-center col-sm-2 col-xs-6 col-sm-offset-2 col-xs-offset-0 top_row_spotlight_mobile">
        <div class="spotlight_header">Latest</div>
        <!-- <div class="spotlight_graph">
          <img src="<?php bloginfo('stylesheet_directory'); ?>/img/spotlight_graph.png" alt="spotlight_graph" />
        </div> -->
        <div class="spotlight_number">
          $<span id="spotlight1">26</span>B
        </div>
        <div class="spotlight_small">
          Real Estate Investment in Last Year
        </div>
      </div>
      <div class="text-center col-sm-2 col-xs-6 top_row_spotlight_mobile">
        <div class="spotlight_header">Impact</div>
        <div class="spotlight_number">
          <span id="spotlight2">716</span>
        </div>
        <div class="spotlight_small">
          Major Ghost Cities Identified So Far
        </div>
      </div>
      <div class="text-center col-sm-2 col-xs-6">
        <div class="spotlight_header">Location</div>
        <div class="spotlight_graph">
          <div class="map_container">
            <div class="map_spot_1 map_point"></div>
            <div class="map_spot_2 map_point"></div>
          </div>
        </div>
        <div class="spotlight_small">
          Arctic Circle
        </div>
      </div>
      <div class="text-center col-sm-2 col-xs-6">
        <div class="spotlight_header">Updated</div>
        <div class="spotlight_number">
          May <span id="spotlight4">18</span>
        </div>
        <div class="spotlight_small">
          Updated 12 Days Ago
        </div>
      </div>
    </div>
  </section>
</div>


<!-- OVERVIEW  -->
<div class="overview_background">
  <section class="container" id="context">
    <div class="row">
      <div class="col-sm-offset-1 col-sm-10 text-center">
        <div class="main_title">Overview</div>
        <div class="vertical_bar"></div>
        <div class="header_text">
          As the Arctic ice shelf melts, countries and companies are evaluating and investing in shipping via the Arctic sea routes. Russia is looking to capitalise on it’s location, despite poor feasibility projections.
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-sm-offset-2 col-sm-8 text-center">
        <div class="normal_text">
          Within the last five years many optimistic moves have been made by a number of nations, spearheaded by Russia, in seeking the improve the viability of Arctic transit via infrastructure and pilot transits. However credible, recent reports and traffic patterns calling into question the economic viability of these routes until approximately 2040.
        </div>
      </div>
    </div>

    <div class="row vertical_align">
      <div class="col-xs-2 text-center">
        <!-- arrow for image slideshow -->
        <!-- <img src="<?php bloginfo('stylesheet_directory'); ?>/img/slideshow_left_arrow.png" alt="left" /> -->
      </div>
      <div class="col-xs-8 text-center">
        <div class="overview_image_container">
          <img src="<?php bloginfo('stylesheet_directory'); ?>/img/overview_image.png" data-no-retina alt="overview image" />
        </div>
      </div>
      <div class="col-xs-2 text-center">
        <!-- arrow for image slideshow -->
        <!-- <img src="<?php bloginfo('stylesheet_directory'); ?>/img/slideshow_right_arrow.png" alt="right" /> -->
      </div>
    </div>
    <div class="show_less_or_more context_toggle closed">
      <div class="show_more_text">See More</div>
      <div class="show_less_text">See Less</div>
    </div>
    <div class="row context_additional">
      <div class="col-sm-offset-2 col-sm-8 text-center">
        <div class="small_title">
          Who is Involved?
        </div>
        <div class="normal_text">
          <p>Since approximately 2011 Russia has been working on infrastructural projects to improve the feasiblity of shipping, including developing key ports and expanding making their icebreaker fleet available for hire, to safely guide cargo vessels.</p>
          <p>Canada is also experiencing an increase in interest in the Northwestern Passage above them, particularly from China, and less so Japan and Korea.</p>
          <p>A recent report from Denmark, home to the world’s largest shipping fleet, and in position to enormously profit from the opening routes, has significantly tampered optimism with a highly pessimistic forecast of real-world usage of these routes—within the next three to four decades.</p>
        </div>
        <div class="small_title">
          Why This Matters?
        </div>
        <div class="normal_text">
          <p>The Northern Sea Route above Russia takes only one third the distance needed to transit the Suez Canal, and affords Russia a lucrative foothold as a hub for international shipping.</p>
          <p>By some reports traffic is expected to increase tenfold by 2020, but as bunker fuel prices have plummeted since 2014, traffic has instead decreased significantly. Whilst fuel costs are low, the difficulty and danger of transit does not make economic sense.</p>
          <p>For Canada and the Northwest Passage, even a moderate increase in shipping has the potential to change the nation’s relationship with it’s Asian trading partners, especially China.</p>
        </div>
      </div>
    </div>
  </section>
</div>

<!-- ACTIVITY  -->
<!--           -->
<section class="activity container" id="activity">
  <div class="row">
    <div class="text-center col-xs-12 no_padding">
      <div class="header_container">
        <img class="header_image" data-no-retina src="<?php bloginfo('stylesheet_directory'); ?>/img/activity_back.jpg" />
        <div class="header_title">Activity</div>
      </div>
      <div class="vertical_bar"></div>
    </div>
  </div>
  <div class="row">
    <div class="col-sm-offset-3 col-sm-6 text-center">
      <div class="body_text margin_bottom_big">
        Despite Russia's efforts, the past two years have seen a dramatic decrease in Arctic cargo volumes, and a robust new study has tempered expectations for the next three decades.
      </div>
    </div>
  </div>

  <div class="timeline_graph_toggle">
    <div class="active timeline">Timeline</div><!-- weird white-space bug
    --><div class="inactive graph">Graph</div>
  </div>

  <div class="graph_container">
    <div class="margin_bottom_huge">
      <img class="full_image" src="<?php bloginfo('stylesheet_directory'); ?>/img/graph_arctic1.png" alt="graph" />
    </div>
    <div>
      <img class="full_image" src="<?php bloginfo('stylesheet_directory'); ?>/img/graph_arctic2.png" alt="graph" />
    </div>
  </div>

  <div class="row timeline_container"> <!-- beginning of timeline -->
    <div class="activity_col col-xs-offset-1 col-lg-offset-2 col-md-offset-1 col-lg-8 col-md-9 col-xs-11">
      <div class="timeline_bar closed">
        <div class="timeline_top"></div>
        <div class="timeline_dot highlight"></div>
        <div class="timeline_dot timeline2"></div>
        <div class="timeline_bottom">
          <div class="timeline_bottom_text">
            <span class="expand_text_closed">View all 12</span>
            <span class="expand_text_opened">Collapse</span>
          </div>
        </div>
      </div>

      <!-- 1. timeline item (collapsed) -->
      <div class="timeline_item collapsed closed first_item">
        <div class="marker">
          <div class="timeline_dot"></div>
          <div class="marker_line"></div>
        </div>

        <span class="timeline_date">19 APR 2016</span>
        <div class="timeline_title">China Releases Arctic Transit Guide</div>
        <div class="collapsed_content"></div>

        <div class="full_content">
          <div class="row equal_col_height_row">
            <div class="col-sm-6">
              <div class="timeline_text">
                <div class="timeline_item_text">
                    <div class="tiny_margin_bottom">
                      China is seeking to build a dominant role in Arctic shipping, with significant benefits for faster access to Chinese exports.
                    </div>
                  <div class="sources">Source: <a href="#">Wikimapia</a>, <a href="#">The Guardian</a></div>
                </div>
              </div>
            </div>
            <div class="col-sm-6 full_back_image" style="background-image: url(<?php bloginfo('stylesheet_directory'); ?>/img/arctic1.jpg);"></div>
          </div> <!-- end of row -->
        </div>
      </div>
      <!-- end of collapsed timeline item -->

      <!-- 2. timeline item (highlighted) -->
      <div class="timeline_item expandable closed highlighted">
        <div class="marker">
          <div class="timeline_dot"></div>
          <div class="marker_line"></div>
        </div>
        <div class="row equal_col_height_row">
          <div class="col-sm-6">
            <div class="timeline_text">
              <div class="timeline_date">
                9 FEB 2016
              </div>
              <div class="timeline_item_title">
                Study Dashes Cargo Projections
              </div>
              <div class="timeline_item_text">
                <div class="tiny_margin_bottom">
                  A comprehensive Danish study projects Arctic shipping routes are decades away from economic viability.
                </div>
                <div class="read_more_content">
                  As global warming continues to melt the Arctic sea ice, the number of safely navigable days will continue increase each year. A key consideration for economic viability is whether ice-hardened cargo ships are preferable, to increase navigable days, but with the additional construction and fuel costs associated.
                  <div class="sources">Source: <a href="#">Wikimapia</a>, <a href="#">The Guardian</a></div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-sm-6 full_back_image" style="background-image: url(<?php bloginfo('stylesheet_directory'); ?>/img/arctic2.jpg);"></div>
        </div> <!-- end of row -->
        <div class="read_more closed">
          <div class="read_more_text">Read More</div>
          <div class="read_less_text">Read Less</div>
        </div>
      </div>
      <!-- end timeline item (highlighted) -->




      <!-- 3. timeline item (collapsed) -->
      <div class="timeline_item collapsed closed first_item">
        <div class="marker">
          <div class="timeline_dot"></div>
          <div class="marker_line"></div>
        </div>

        <span class="timeline_date">AUG 2015</span>
        <div class="timeline_title">China Releases Arctic Transit Guide</div>
        <div class="collapsed_content"></div>

        <div class="full_content">
          <div class="row equal_col_height_row">
            <div class="col-xs-6">
              <div class="timeline_text">
                <div class="timeline_item_text">
                    <div class="tiny_margin_bottom">
                      A commercial Russian cargo ship makes its first Arctic transit, a historical first signifying growing confidence in the routes.
                    </div>
                  <div class="sources">Source: <a href="#">Wikimapia</a>, <a href="#">The Guardian</a></div>
                </div>
              </div>
            </div>
            <div class="col-xs-6 full_back_image" style="background-image: url(<?php bloginfo('stylesheet_directory'); ?>/img/arctic3.jpg);"></div>
          </div> <!-- end of row -->
        </div>
      </div>
      <!-- end of collapsed timeline item -->



      <!-- 4. timeline item (collapsed) -->
      <div class="timeline_item collapsed closed first_item">
        <div class="marker">
          <div class="timeline_dot"></div>
          <div class="marker_line"></div>
        </div>

        <span class="timeline_date">JAN 2016</span>
        <div class="timeline_title">Historically Lowest Recorded Sea Ice</div>
        <div class="collapsed_content"></div>

        <div class="full_content">
          <div class="row equal_col_height_row">
            <div class="col-xs-6">
              <div class="timeline_text">
                <div class="timeline_item_text">
                    <div class="tiny_margin_bottom">
                      The Arctic passages continue to become easier to transit during summer, although still impossible during winter.
                    </div>
                  <div class="sources">Source: <a href="#">Wikimapia</a>, <a href="#">The Guardian</a></div>
                </div>
              </div>
            </div>
            <div class="col-xs-6 full_back_image" style="background-image: url(<?php bloginfo('stylesheet_directory'); ?>/img/arctic4.jpg);"></div>
          </div> <!-- end of row -->
        </div>
      </div>
      <!-- end of collapsed timeline item -->


      <!-- 5. timeline item (collapsed) -->
      <div class="timeline_item collapsed closed first_item">
        <div class="marker">
          <div class="timeline_dot"></div>
          <div class="marker_line"></div>
        </div>

        <span class="timeline_date">DEC 2015</span>
        <div class="timeline_title">Transit Volumes Just 3% of 2013 Peak</div>
        <div class="collapsed_content"></div>

        <div class="full_content">
          <div class="row equal_col_height_row">
            <div class="col-xs-6">
              <div class="timeline_text">
                <div class="timeline_item_text">
                    <div class="tiny_margin_bottom">
                      Despite falling sea ice, cheap bunker fuel continues to make longer, easier transit routes the preferred option.
                    </div>
                  <div class="sources">Source: <a href="#">Wikimapia</a>, <a href="#">The Guardian</a></div>
                </div>
              </div>
            </div>
            <div class="col-xs-6 full_back_image" style="background-image: url(<?php bloginfo('stylesheet_directory'); ?>/img/arctic5.jpg);"></div>
          </div> <!-- end of row -->
        </div>
      </div>
      <!-- end of collapsed timeline item -->


      <!-- 6. timeline item (highlighted) -->
      <div class="timeline_item expandable closed highlighted">
        <div class="marker">
          <div class="timeline_dot"></div>
          <div class="marker_line"></div>
        </div>
        <div class="row equal_col_height_row">
          <div class="col-sm-6">
            <div class="timeline_text">
              <div class="timeline_date">
                8 JUN 2015
              </div>
              <div class="timeline_item_title">
                Russia Announces Development Plan
              </div>
              <div class="timeline_item_text">
                <div class="tiny_margin_bottom">
                  The Northern Sea Route plan includes a 20-fold increase in shipment, projecting 80 million tons by 2030.
                </div>
                <div class="read_more_content">
                  As global warming continues to melt the Arctic sea ice, the number of safely navigable days will continue increase each year. A key consideration for economic viability is whether ice-hardened cargo ships are preferable, to increase navigable days, but with the additional construction and fuel costs associated.
                  <div class="sources">Source: <a href="#">Wikimapia</a>, <a href="#">The Guardian</a></div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-sm-6 full_back_image" style="background-image: url(<?php bloginfo('stylesheet_directory'); ?>/img/arctic6.jpg);"></div>
        </div> <!-- end of row -->
        <div class="read_more closed">
          <div class="read_more_text">Read More</div>
          <div class="read_less_text">Read Less</div>
        </div>
      </div>
      <!-- end timeline item (highlighted) -->


      <!-- 7. timeline item (collapsed) -->
      <div class="timeline_item collapsed closed first_item">
        <div class="marker">
          <div class="timeline_dot"></div>
          <div class="marker_line"></div>
        </div>

        <span class="timeline_date">SEP 2014</span>
        <div class="timeline_title">First Cargo via Northwest Passage</div>
        <div class="collapsed_content"></div>

        <div class="full_content">
          <div class="row equal_col_height_row">
            <div class="col-xs-6">
              <div class="timeline_text">
                <div class="timeline_item_text">
                    <div class="tiny_margin_bottom">
                      Interest in Canada’s Northwest Passage continues to grow, with the first cargo passage in history occuring.
                    </div>
                  <div class="sources">Source: <a href="#">Wikimapia</a>, <a href="#">The Guardian</a></div>
                </div>
              </div>
            </div>
            <div class="col-xs-6 full_back_image" style="background-image: url(<?php bloginfo('stylesheet_directory'); ?>/img/arctic7.jpg);"></div>
          </div> <!-- end of row -->
        </div>
      </div>
      <!-- end of collapsed timeline item -->


      <!-- 8. timeline item (collapsed) -->
      <div class="timeline_item collapsed closed first_item">
        <div class="marker">
          <div class="timeline_dot"></div>
          <div class="marker_line"></div>
        </div>

        <span class="timeline_date">JAN 2014</span>
        <div class="timeline_title">Transit Volumes Fall by Two Thirds</div>
        <div class="collapsed_content"></div>

        <div class="full_content">
          <div class="row equal_col_height_row">
            <div class="col-xs-6">
              <div class="timeline_text">
                <div class="timeline_item_text">
                    <div class="tiny_margin_bottom">
                      Despite Russian promotion, transit volumes fall due to cheap fuel, enabling slower routes. Remaining traffic is mostly Russian.
                    </div>
                  <div class="sources">Source: <a href="#">Wikimapia</a>, <a href="#">The Guardian</a></div>
                </div>
              </div>
            </div>
            <div class="col-xs-6 full_back_image" style="background-image: url(<?php bloginfo('stylesheet_directory'); ?>/img/arctic8.jpg);"></div>
          </div> <!-- end of row -->
        </div>
      </div>
      <!-- end of collapsed timeline item -->


      <!-- 9. timeline item (highlighted) -->
      <div class="timeline_item expandable closed highlighted">
        <div class="marker">
          <div class="timeline_dot"></div>
          <div class="marker_line"></div>
        </div>
        <div class="row equal_col_height_row">
          <div class="col-sm-6">
            <div class="timeline_text">
              <div class="timeline_date">
                2013
              </div>
              <div class="timeline_item_title">
                Peak of Arctic Cargo To-Date
              </div>
              <div class="timeline_item_text">
                With high fuel prices and a warm summer, 1.3 million tons transited the Arctic, mostly passing Russia.
                <div class="read_more_content">
                    As global warming continues to melt the Arctic sea ice, the number of safely navigable days will continue increase each year. A key consideration for economic viability is whether ice-hardened cargo ships are preferable, to increase navigable days, but with the additional construction and fuel costs associated.
                    <div class="sources">Source: <a href="#">Wikimapia</a>, <a href="#">The Guardian</a></div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-sm-6 full_back_image" style="background-image: url(<?php bloginfo('stylesheet_directory'); ?>/img/arctic9.jpg);"></div>
        </div> <!-- end of row -->
        <div class="read_more closed">
          <div class="read_more_text">Read More</div>
          <div class="read_less_text">Read Less</div>
        </div>
      </div>
      <!-- end timeline item (highlighted) -->



      <!-- 10. timeline item (collapsed) -->
      <div class="timeline_item collapsed last_default_timeline_item closed first_item">
        <div class="marker">
          <div class="timeline_dot"></div>
          <div class="marker_line"></div>
        </div>

        <span class="timeline_date">6 JUL 2011</span>
        <div class="timeline_title">Putin Announces Year-Round Port</div>
        <div class="collapsed_content"></div>

        <div class="full_content">
          <div class="row equal_col_height_row">
            <div class="col-xs-6">
              <div class="timeline_text">
                <div class="timeline_item_text">
                    <div class="tiny_margin_bottom">
                      Russia announces a planned shipping hub on the Yamal pennisula, allowing year-round servicing and resupply.
                    </div>
                    <div class="sources">Source: <a href="#">Wikimapia</a>, <a href="#">The Guardian</a></div>
                </div>
              </div>
            </div>
            <div class="col-xs-6 full_back_image" style="background-image: url(img/arctic10.jpg);"></div>
          </div> <!-- end of row -->
        </div>
      </div>
      <!-- end of collapsed timeline item -->


      <div class="hidden_timeline_items">

        <!-- 11. timeline item (collapsed) -->
        <div class="timeline_item first_expanded_timeline_item collapsed closed first_item">
          <div class="marker">
            <div class="timeline_dot"></div>
            <div class="marker_line"></div>
          </div>
          <span class="timeline_date">23 Aug 2010</span>
          <div class="timeline_title">Lukoil Tanker Spill</div>
          <div class="collapsed_content"></div>
          <div class="full_content">
            <div class="row equal_col_height_row">
              <div class="col-xs-6">
                <div class="timeline_text">
                  <div class="timeline_item_text">
                      <div class="tiny_margin_bottom">
                        Russia announces a planned shipping hub on the Yamal pennisula, allowing year-round servicing and resupply.
                      </div>
                      <div class="sources">Source: <a href="#">Wikimapia</a>, <a href="#">The Guardian</a></div>
                  </div>
                </div>
              </div>
              <div class="col-xs-6 full_back_image" style="background-image: url(img/arctic10.jpg);"></div>
            </div> <!-- end of row -->
          </div>
        </div>
        <!-- end of collapsed timeline item -->

        <!-- 12. timeline item (collapsed) -->
        <div class="timeline_item collapsed closed first_item">
          <div class="marker">
            <div class="timeline_dot"></div>
            <div class="marker_line"></div>
          </div>
          <span class="timeline_date">10 JUL 2010</span>
          <div class="timeline_title">Norway Announces Second Ice Breaker</div>
          <div class="collapsed_content"></div>
          <div class="full_content">
            <div class="row equal_col_height_row">
              <div class="col-xs-6">
                <div class="timeline_text">
                  <div class="timeline_item_text">
                      <div class="tiny_margin_bottom">
                        Russia announces a planned shipping hub on the Yamal pennisula, allowing year-round servicing and resupply.
                      </div>
                      <div class="sources">Source: <a href="#">Wikimapia</a>, <a href="#">The Guardian</a></div>
                  </div>
                </div>
              </div>
              <div class="col-xs-6 full_back_image" style="background-image: url(img/arctic10.jpg);"></div>
            </div> <!-- end of row -->
          </div>
        </div>
        <!-- end of collapsed timeline item -->


        <!-- 13. timeline item (collapsed) -->
        <div class="timeline_item collapsed closed first_item">
          <div class="marker">
            <div class="timeline_dot"></div>
            <div class="marker_line"></div>
          </div>
          <span class="timeline_date">20 Apr 2010</span>
          <div class="timeline_title">Warmest Winter on Record</div>
          <div class="collapsed_content"></div>
          <div class="full_content">
            <div class="row equal_col_height_row">
              <div class="col-xs-6">
                <div class="timeline_text">
                  <div class="timeline_item_text">
                      <div class="tiny_margin_bottom">
                        Russia announces a planned shipping hub on the Yamal pennisula, allowing year-round servicing and resupply.
                      </div>
                      <div class="sources">Source: <a href="#">Wikimapia</a>, <a href="#">The Guardian</a></div>
                  </div>
                </div>
              </div>
              <div class="col-xs-6 full_back_image" style="background-image: url(img/arctic10.jpg);"></div>
            </div> <!-- end of row -->
          </div>
        </div>
        <!-- end of collapsed timeline item -->


        <!-- 14. timeline item (collapsed) -->
        <div class="timeline_item collapsed closed first_item">
          <div class="marker">
            <div class="timeline_dot"></div>
            <div class="marker_line"></div>
          </div>
          <span class="timeline_date">4 JAN 2009</span>
          <div class="timeline_title">Russia Announces Heavy Investment</div>
          <div class="collapsed_content"></div>
          <div class="full_content">
            <div class="row equal_col_height_row">
              <div class="col-xs-6">
                <div class="timeline_text">
                  <div class="timeline_item_text">
                      <div class="tiny_margin_bottom">
                        Russia announces a planned shipping hub on the Yamal pennisula, allowing year-round servicing and resupply.
                      </div>
                      <div class="sources">Source: <a href="#">Wikimapia</a>, <a href="#">The Guardian</a></div>
                  </div>
                </div>
              </div>
              <div class="col-xs-6 full_back_image" style="background-image: url(img/arctic10.jpg);"></div>
            </div> <!-- end of row -->
          </div>
        </div>
        <!-- end of collapsed timeline item -->



        <!-- 15. timeline item (collapsed) -->
        <div class="timeline_item collapsed closed first_item">
          <div class="marker">
            <div class="timeline_dot"></div>
            <div class="marker_line"></div>
          </div>
          <span class="timeline_date">19 AUG 2008</span>
          <div class="timeline_title">Wait For It</div>
          <div class="collapsed_content"></div>
          <div class="full_content">
            <div class="row equal_col_height_row">
              <div class="col-xs-6">
                <div class="timeline_text">
                  <div class="timeline_item_text">
                      <div class="tiny_margin_bottom">
                        Russia announces a planned shipping hub on the Yamal pennisula, allowing year-round servicing and resupply.
                      </div>
                      <div class="sources">Source: <a href="#">Wikimapia</a>, <a href="#">The Guardian</a></div>
                  </div>
                </div>
              </div>
              <div class="col-xs-6 full_back_image" style="background-image: url(img/arctic10.jpg);"></div>
            </div> <!-- end of row -->
          </div>
        </div>
        <!-- end of collapsed timeline item -->




      </div>




    </div>
  </div> <!-- end of timeline -->
</section>

<!-- PERSPECTIVES  -->
<section class="container" id="perspective">
  <div class="row">
    <div class="text-center col-xs-12 no_padding">
      <div class="header_container">
        <img class="header_image" data-no-retina src="<?php bloginfo('stylesheet_directory'); ?>/img/perspectives_back.jpg" />
        <div class="header_title">PERSPECTIVES</div>
      </div>
      <div class="vertical_bar"></div>

      <div class="row">
        <div class="col-sm-offset-3 col-sm-6 text-center">
          <div class="body_text margin_bottom_big">
            Whilst commercial viability will take time, it will happen. We can expect a range of geopolitical effects in the short to medium term future. Join the discussion.
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-sm-offset-1 col-sm-10 text-center">
          <div class="header_text margin_bottom_big">
            What are the implications of Russia's turn to the Arctic?
          </div>
        </div>
      </div>

    </div>
  </div>

  <div class="persp_box_rows_container">
    <div class="row persp_box_row">
      <div class="col-sm-4">


        <!-- 1. beginning of perspective box -->
        <div class="perspective_container clearfix">
          <div class="commenter_container row vertical_align">
            <div class="col-xs-9">
              <img class="avatar baseline" src="<?php bloginfo('stylesheet_directory'); ?>/img/avatar-nick.png" alt="Avatar" />
              <div class="commenter">
                John Davies<br />
                <span class="not_bold">Senior Analyst, NGA</span>
              </div>
            </div>
            <div class="perspective_vote col-xs-3 text-center">
              <div class="up">&#x25B2;</div>
              <div class="vote_number_container"><span class="number">12</span>Votes</div>
              <div class="down">&#x25BC;</div>
            </div>
          </div>
          <div class="perspective_title">Negative ROI for Russia</div>
          <div class="perspective_body">
            Russia is investing tens of billions, with a significant chance of no return on investment. It may turn into a budgetary failure.
          </div>
          <div class="comment_count_container closed">
            <img class="comment_icon" src="<?php bloginfo('stylesheet_directory'); ?>/img/comment.png" alt="comment icon" />
            <span class="number_of_comments_container">
              <span class="number_of_comments">2</span> Comments
            </span>
          </div>

          <div class="new_comment_container">
            <div class="new_comment">
              <div class="row margin_bottom_20 vertical_align">
                <div class="col-xs-2">
                  <img class="avatar baseline" src="<?php bloginfo('stylesheet_directory'); ?>/img/avatar-rochelle.png" alt="Avatar" />
                </div>
                <div class="col-xs-8">
                  <div class="commenter">
                    Rachel Alwa
                  </div>
                </div>
              </div> <!-- end of row -->
              <div class="new_comment_text">Potentially even without international shipping growth, the significant increase in domestic traffic and uses will ensure a reasonable ROI.</div>
            </div> <!-- end of comment -->

            <div class="new_comment">
              <div class="row vertical_align margin_bottom_20">
                <div class="col-xs-2">
                  <img class="avatar baseline" src="<?php bloginfo('stylesheet_directory'); ?>/img/avatar-michael.png" alt="Avatar" />
                </div>
                <div class="col-xs-8">
                  <div class="commenter">
                    Nathan Ko
                  </div>
                </div>
              </div> <!-- end of row -->
              <div class="new_comment_text">
                Yes, it's worth noting Russia's internal growth in oil and resource extraction activity utilising this shipping corridor. This represents almost all growth.
              </div>
            </div> <!-- end of comment -->
          </div>

          <div class="comment_box_container">
            <img class="avatar" src="<?php bloginfo('stylesheet_directory'); ?>/img/avatar.png" alt="Avatar" />
            <textarea class="comment_input" placeholder="Join the Discussion"></textarea>
          </div>
          <div class="post_comment_button">Submit</div>
        </div> <!-- End of Perspective box -->





      </div>
      <div class="col-sm-4">
        <!-- 2. beginning of perspective box -->
        <div class="perspective_container clearfix">
          <div class="commenter_container row vertical_align">
            <div class="col-xs-9">
              <img class="avatar baseline" src="<?php bloginfo('stylesheet_directory'); ?>/img/avatar-annette.png" alt="Avatar" />
              <div class="commenter">
                Annette Garcia<br />
                <span class="not_bold">Attaché, US Embassy, Russia</span>
              </div>
            </div>
            <div class="perspective_vote col-xs-3 text-center">
              <div class="up">&#x25B2;</div>
              <div class="vote_number_container"><span class="number">7</span>Votes</div>
              <div class="down">&#x25BC;</div>
            </div>
          </div>
          <div class="perspective_title">USA Loses Arctic Capability</div>
          <div class="perspective_body">
            The US has only one aging icebreaker in service, with the possibility of another in 2028. The Coastguard asserts six are needed for full effectiveness.
          </div>
          <div class="comment_count_container closed">
            <div class="comment_icon"></div>
            <span class="number_of_comments_container">
              <span class="number_of_comments">3</span> Comments
            </span>
          </div>
          <div class="new_comment_container">
            <div class="new_comment">
              <div class="row margin_bottom_20 vertical_align">
                <div class="col-xs-2">
                  <img class="avatar baseline" src="<?php bloginfo('stylesheet_directory'); ?>/img/avatar-megan.png" alt="Avatar" />
                </div>
                <div class="col-xs-8">
                  <div class="commenter">
                    Amelia Eriksson
                  </div>
                </div>
              </div> <!-- end of row -->
              <div class="new_comment_text">Although current laws require US ships to be built domestically, an exception for Finnish-built icebreakers already has a historical precedent. This is a plausable approach for maintaining capability through massive cost and time savings.</div>
            </div> <!-- end of comment -->

            <div class="new_comment">
              <div class="row vertical_align margin_bottom_20">
                <div class="col-xs-2">
                  <img class="avatar baseline" src="<?php bloginfo('stylesheet_directory'); ?>/img/avatar-richard.png" alt="Avatar" />
                </div>
                <div class="col-xs-8">
                  <div class="commenter">
                    Sam Anderson
                  </div>
                </div>
              </div> <!-- end of row -->
              <div class="new_comment_text">
                Given the possibility of expedited icebreaker construction in Finland, even with 1-5 years before initial orders, it would be possible to increase capability before significant changes in ice melt and ship movements.
              </div>
            </div> <!-- end of comment -->

            <div class="new_comment">
              <div class="row vertical_align margin_bottom_20">
                <div class="col-xs-2">
                  <img class="avatar baseline" src="<?php bloginfo('stylesheet_directory'); ?>/img/avatar-nick.png" alt="Avatar" />
                </div>
                <div class="col-xs-8">
                  <div class="commenter">
                    John Davies
                  </div>
                </div>
              </div> <!-- end of row -->
              <div class="new_comment_text">Assuming capability can be met via Finnish suppliers, the remaining issue is perceived capability. As the US currently lacks visible icebreakers, Russia can cement it's position as the dominant Arctic force geopolitically, with implications on territorial and resource claims.</div>
            </div> <!-- end of comment -->

          </div>
          <div class="comment_box_container">
            <img class="avatar" src="<?php bloginfo('stylesheet_directory'); ?>/img/avatar.png" alt="Avatar" />
            <textarea class="comment_input" placeholder="Join the Discussion"></textarea>
          </div>
          <div class="post_comment_button">Submit</div>
        </div> <!-- End of Perspective box -->




      </div>
      <div class="col-sm-4">
      </div>
    </div> <!-- end of perspetive box row -->
  </div> <!-- end of persp_box_rows_container -->

<!-- NEW PERSPECTIVE BUTTON  -->
  <div class="add_new_perspective_container">
    <div class="add_new_perspective_hr"></div>
    <div class="add_new_perspective_button">
      <img src="<?php bloginfo('stylesheet_directory'); ?>/img/btn-plus.png" alt="Add New Perspective" />
    </div>
    <div class="more_text">Add new perspective</div>

    <div class="new_persp_form_container">
      <div class="row">
        <div class="col-sm-offset-4 col-sm-4 text-center">
          <div class="new_persp_col">
            <div class="perspective_title nav_style">
              Add Your Perspective
            </div>
            <div>
              <input type="text" class="new_persp_form_title" placeholder="Title" />
            </div>
            <textarea class="new_persp_form_description" placeholder="Description" ></textarea>
            <div class="post_comment_button persp_submit">Submit</div>
          </div>
        </div>
      </div>
    </div> <!-- end new_persp_form_container -->


  </div>
</section>

<!-- WHAT TO WATCH  -->
<section class="container" id="next">
  <div class="row">
    <div class="text-center col-xs-12 no_padding">
      <div class="header_container">
        <img class="header_image" data-no-retina src="<?php bloginfo('stylesheet_directory'); ?>/img/looking_back.jpg" alt="Looking Ahead" />
        <div class="header_title">Looking Ahead</div>
      </div>
      <div class="vertical_bar"></div>
    </div>
  </div>

  <div class="row">
    <div class="col-sm-offset-3 col-sm-6 text-center">
      <div class="normal_text">
        In the near-term future Arctic shipping routes will see minimal growth, with the most robust research suggesting these routes will see limited use until 2040 and beyond. Russia’s staunch investment and promotion are at odds with this.
      </div>

      <div class="small_title">Questions To watch</div>

      <div class="looking_list_container">
        <ul class="looking_list normal_text">
          <li>
            <span class="text">Will Russian investment and promotion continue to increase?</span>
          </li>
          <li>
            <span class="text">Will oil interests stimulate economic growth regardless of cargo shipping?</span>
          </li>
          <li>
            <span class="text">How will the US’s limited icebreaking capacity constrain influence for the next decade?</span>
          </li>
        </ul>
      </div>


    </div>
  </div>
  <div class="follow_button_container">
    <div class="follow more_details_button">
      Follow This Story
    </div>
    <div class="digest_signup_form closed">
      <div class="box_top_triangle"></div>
      <div class="digest_form_title nav_style">sign up for email updates</div>
      <div class="digest_form_hr"></div>
      <input type="text" class="digest_email_field" placeholder="Email Address" />
      <div class="how_often spotlight_small">How often?</div>

      <label class="radio_box">
        <input type="radio" name="digest_type">All Updates
      </label>
      <label class="radio_box">
        <input type="radio" name="digest_type">Daily Digest
      </label>
      <label class="radio_box">
        <input type="radio" name="digest_type">Weekly Digest
      </label>

      <div class="follow_story_submit">
        Follow Story
      </div>

      <!-- <label>Click me <input type="radio"></label> -->
    </div>
  </div>
</section>


<!-- About the Author -->
<section class="container padded_section">
  <div class="title_hr_container">
    <div class="title_hr"></div>
    <div class="title_text">About the author</div>
  </div>

  <div class="row">
    <div class="col-sm-5 author_info_container">

      <div class="row">
        <div class="col-xs-4">
          <img class="full_image about_author_avatar" src="<?php bloginfo('stylesheet_directory'); ?>/img/avatar_about.png" alt="Nick Jones" />
        </div>
        <div class="col-xs-8">
          <div class="about_author">Doug Smith</div>
          <div class="half_hr"></div>
          <div class="small_body">GIS Analyst | San Diego</div>
          <div class="small_body"><a href="#">doug.smith.sample@nga.gov</a></div>
          <div class="see_more_no_toggle">See More</div>
        </div>
      </div>

    </div>
    <div class="col-sm-7">
      <div class="row feedback_container">
        <div class="col-sm-6 pad_me feedback_instructions">
          <div class="small_title feedback_title">What Do you Think?</div>
          <div class="small_body">
            Let Doug know how this article helped and if it
            can be improved in future.
          </div>
        </div>
        <div class="col-sm-6 pad_me no_bottom_padding">
          <textarea class="feedback_textarea" placeholder="Add Feedback Here"></textarea>
          <div class="feedback_submit_button">
            Submit
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Related Content -->
<section class="container margin_bottom_huge padded_section">
  <div class="title_hr_container">
    <div class="title_hr"></div>
    <div class="title_text">Related Stories</div>
  </div>

  <div class="row">
    <div class="col-sm-4">
      <img class="full_image" data-no-retina src="<?php bloginfo('stylesheet_directory'); ?>/img/ar1.jpg" alt="" />
      <div class="half_hr tall"></div>
      <div class="body_text">Arctic Territorial Claims and Tensions</div>
    </div>
    <div class="col-sm-4">
      <img class="full_image" data-no-retina src="<?php bloginfo('stylesheet_directory'); ?>/img/ar2.jpg" alt="" />
      <div class="half_hr tall"></div>
      <div class="body_text">Icebreaking and Naval Power Dynamics</div>
    </div>
    <div class="col-sm-4">
      <img class="full_image" data-no-retina src="<?php bloginfo('stylesheet_directory'); ?>/img/ar3.jpg" alt="" />
      <div class="half_hr tall"></div>
      <div class="body_text">Arctic Resource Exploitation</div>
    </div>
  </div>
</section>







<!--
  Below are html snippes used by javasript when creating new elements
  TODO: use React, Mustache or other templating system
-->





<!--
  Used when a new row of perspectives needs to be created
  Used by pathfinder.determineNewPerspLocation()
-->
<div class="row perp_box_row_template">
  <div class="col-sm-4"></div>
  <div class="col-sm-4"></div>
  <div class="col-sm-4"></div>
</div>



<!--
  perspective_template is used used by pathfinder.submitNewPerspective()
  to create a new perspective when one gets submitted via the form
-->
<div class="perspective_template perspective_container clearfix">
  <div class="commenter_container row vertical_align">
    <div class="col-xs-9">
      <img class="avatar baseline" src="<?php bloginfo('stylesheet_directory'); ?>/img/avatar.png" alt="Avatar" />
      <div class="commenter">
        John Davies<br />
        <span class="not_bold">Senior Analyst, NGA</span>
      </div>
    </div>
    <div class="perspective_vote col-xs-3 text-center">
      <div class="up">&#x25B2;</div>
      <div class="vote_number_container"><span class="number">0</span>Votes</div>
      <div class="down">&#x25BC;</div>
    </div>
  </div>
  <div class="perspective_title"></div>
  <div class="perspective_body"></div>
  <div class="comment_count_container">
    <img class="comment_icon" src="<?php bloginfo('stylesheet_directory'); ?>/img/comment.png" alt="comment icon" />
    <span class="number_of_comments_container">
      <span class="number_of_comments">0</span> Comments
    </span>
  </div>
  <div class="new_comment_container"></div>
  <div class="comment_box_container">
    <img class="avatar" src="<?php bloginfo('stylesheet_directory'); ?>/img/avatar.png" alt="Avatar" />
    <textarea class="comment_input" placeholder="Join the Discussion"></textarea>
  </div>
  <div class="post_comment_button">Submit</div>
</div> <!-- End of Perspective box -->
<!-- end of perspective template for cloning -->



<!--
  new_comment_template is used used by pathfinder.commentBox()
  to create a new comment when one gets submitted via the form
-->
<div class="new_comment_template">
  <div class="row vertical_align margin_bottom_20">
    <div class="col-xs-2">
      <img class="avatar baseline" src="<?php bloginfo('stylesheet_directory'); ?>/img/avatar.png" alt="Avatar" />
    </div>
    <div class="col-xs-8">
      <div class="commenter">
        John Davies
      </div>
    </div>
  </div> <!-- end of row -->
  <div class="new_comment_text"></div>
</div> <!-- end of new comment template -->













<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">
		<?php
		// Start the loop.
		while ( have_posts() ) : the_post();

			// Include the single post content template.
			get_template_part( 'template-parts/content', 'single' );

			// If comments are open or we have at least one comment, load up the comment template.
			// if ( comments_open() || get_comments_number() ) {
			// 	comments_template();
			// }

			if ( is_singular( 'attachment' ) ) {
				// Parent post navigation.
				the_post_navigation( array(
					'prev_text' => _x( '<span class="meta-nav">Published in</span><span class="post-title">%title</span>', 'Parent post link', 'twentysixteen' ),
				) );
			} elseif ( is_singular( 'post' ) ) {
				// Previous/next post navigation.
				the_post_navigation( array(
					'next_text' => '<span class="meta-nav" aria-hidden="true">' . __( 'Next', 'twentysixteen' ) . '</span> ' .
						'<span class="screen-reader-text">' . __( 'Next post:', 'twentysixteen' ) . '</span> ' .
						'<span class="post-title">%title</span>',
					'prev_text' => '<span class="meta-nav" aria-hidden="true">' . __( 'Previous', 'twentysixteen' ) . '</span> ' .
						'<span class="screen-reader-text">' . __( 'Previous post:', 'twentysixteen' ) . '</span> ' .
						'<span class="post-title">%title</span>',
				) );
			}

			// End of the loop.
		endwhile;
		?>
	</main><!-- .site-main -->
</div><!-- .content-area -->

<?php get_footer(); ?>
