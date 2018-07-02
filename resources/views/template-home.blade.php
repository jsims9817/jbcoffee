{{--
  Template Name: Front Page Template
--}}

@extends('layouts.app')

@section('content')

<div class="home_wrapper">
  @while(have_posts()) @php(the_post())

  <div class="caption_dump">
    <?php
    if( have_rows('carousel') ):
        while ( have_rows('carousel') ) : the_row(); ?>

        <div class="caption" data-caption="<?php the_sub_field('slide_number'); ?>"></div>

        <?php

        endwhile;
    else :
    endif;
    ?>
  </div>

  <div class="home_1">
    <div class="home_carousel">
      <?php
      if( have_rows('carousel') ):
          while ( have_rows('carousel') ) : the_row(); ?>

          <div class="home_slide">
            <div class="home_1a" style="background-image: url(<?php the_sub_field('image'); ?>);" data-title="Lubbock’s Coffee Shop">
              <div class="text_block">
                <div class="wrapper small_wrapper">
                  <?php the_sub_field('caption'); ?>
                </div>
              </div>
              <div class="screen" style="background-image: url(/wp-content/themes/MyLegion/resources/assets/images/Rectangle.png);"></div>
            </div>
          </div>

          <?php

          endwhile;
      else :
      endif;
      ?>
    </div>
  </div>

  <div class="home_2">
    <div class="home_2a">
      <div class="wrapper small_wrapper">
        <div class="my_row">
          <div class="my_col border_right">
            <img src="/wp-content/themes/MyLegion/resources/assets/images/pin.png" class="loc">
            <div class="text_block">
              <a href="https://www.google.com/maps/place/2701+26th+St,+Lubbock,+TX+79410/data=!4m2!3m1!1s0x86fe6d4fa4a81555:0x905482efb3999a96?sa=X&ved=0ahUKEwifr_emyYDcAhUPI6wKHaFeCkAQ8gEIJjAA" class="address">2701 26th Street (26th & Boston)</a>
              <p>Lubbock, TX 79410</p>
              <a href="tel:8067961114">806.796.1114</a>
              <a href="/hours">View Hours</a>
            </div>
          </div>
          <div class="my_col">
            <img src="/wp-content/themes/MyLegion/resources/assets/images/pin.png" class="loc">
            <div class="text_block">
              <a href="https://www.google.com/maps/place/3334+66th+St,+Lubbock,+TX+79413/data=!4m2!3m1!1s0x86fe6d802839455f:0x208891492f95bfa3?sa=X&ved=0ahUKEwii-tTmyYDcAhUQA6wKHbSGBKgQ8gEIJjAA" class="address">3334 66th Street (66th & Indiana)</a>
              <p>Lubbock, TX 79413</p>
              <a href="tel:8067991996">806.799.1996</a>
              <a href="/hours">View Hours</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="home_3">
    <div class="wrapper small_wrapper">
      <div class="my_row">
        <img src="/wp-content/themes/MyLegion/resources/assets/images/coffeebag.png" class="coffee_bag">
        <div class="text_block">
          <h3>Cowboy Coffee</h3>
          <p>Lightly roasted with a bright acidity, this varietal boasts hints of dark chocolate. The perfect pick-me-up for a study session or a productive meeting. Also available in decaf. Come by J&B, and our barista will help find the perfect drink for you.</p>
          <a href="/coffee">SEE ALL PRODUCTS</a>
        </div>
      </div>
    </div>
  </div>

  <div class="home_4">
    <div class="wrapper small_wrapper">
      <div class="texture"><div class="texture_1a"></div></div>
      <div class="image_right" style="background-image: url(/wp-content/themes/MyLegion/resources/assets/images/sammitchbg.jpg)"></div>
      <div class="text_block">
        <div class="arrow_box"></div>
        <h3>Brewing Creativity and Hospitality Since 1979</h3>
        <p>J&B Coffee is Lubbock's original neighborhood coffee shop. We're a place where students, creators, families, and beverage enthusiasts can all come together to enjoy a menu full of expertly-curated coffee, top-of-the-line tea, and hand-selected sweet and savory snacks in a bright and open space. Since '79, we've been proud to foster and fuel creativity, learning, and art in the Lubbock community.</p>
      </div>
      <div class="carousel_2">
        <div class="slide" style="background-image: url(/wp-content/themes/MyLegion/resources/assets/images/cinnamon_roll.png)"></div>
        <div class="slide" style="background-image: url(/wp-content/themes/MyLegion/resources/assets/images/cinnamon_roll.png)"></div>
        <div class="slide" style="background-image: url(/wp-content/themes/MyLegion/resources/assets/images/cinnamon_roll.png)"></div>
      </div>
    </div>
  </div>

  <div class="home_5">
    <div class="bg"></div>
    <div class="wrapper small_wrapper">
      <div class="my_row">
        <div class="my_col">
          <div class="border_box">
            <img src="/wp-content/themes/MyLegion/resources/assets/images/coffee_icon.png" class="coffee">
            <div class="text_block">
              <h3>Let Us Cater Your Next Event</h3>
              <p>Fuel your next meeting with the best coffee that Lubbock has to offer. Whether you want J&B's House Coffee, a classic hot chocolate, or our one-of-a-kind Mobile Espresso Bar, our full-service staff will be happy to serve you whatever you may need. Our catering now features our delicious pastries and desserts!</p>
              <a href="#">TELL ME MORE</a>
            </div>
          </div>
        </div>
        <div class="my_col">
          <div class="border_box">
            <img src="/wp-content/themes/MyLegion/resources/assets/images/chair_icon.png" class="coffee">
            <div class="text_block">
              <h3>The Perfect Place for Any Meeting</h3>
              <p>Our community is always growing and we'd love for you to join! Whether it's an Open Mic Night, the sights and sounds of the First Friday Art Trail, or a collaborative business meeting, there's always something happening in our Meeting Space!</p>
              <a href="#">SEE WHAT’S COMING UP</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="home_6">
    <div class="wrapper small_wrapper">
      <div class="insta_img outside_1" style="background-image: url(/wp-content/themes/MyLegion/resources/assets/images/insta_img.jpg);"></div>
      <div class="insta_img outside_2" style="background-image: url(/wp-content/themes/MyLegion/resources/assets/images/insta_img.jpg);"></div>
      <div class="my_row">
        <div class="my_col">
          <div class="text_block">
            <h3>Stay connected to see what's brewing at J&B!</h3>
            <hr>
          </div>
          <div class="insta_img" style="background-image: url(/wp-content/themes/MyLegion/resources/assets/images/insta_img.jpg);"></div>
          <div class="insta_img" style="background-image: url(/wp-content/themes/MyLegion/resources/assets/images/insta_img.jpg);"></div>
        </div>
        <div class="my_col">
          <div class="insta_img" style="background-image: url(/wp-content/themes/MyLegion/resources/assets/images/insta_img.jpg);"></div>
          <div class="insta_img" style="background-image: url(/wp-content/themes/MyLegion/resources/assets/images/insta_img.jpg);"></div>
        </div>
      </div>
    </div>
  </div>










  @include('partials.content-page')

  @endwhile
</div>
@endsection
