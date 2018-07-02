<!doctype html>
<html @php(language_attributes())>
  @include('partials.head')

  <body @php(body_class())>

    <div class="slide__content">

      <header class="header header--js" id="top">
    @php(do_action('get_header'))
    @include('partials.header')
      </header>

      <main id="main" class="main">
        <div class="main__inner">
          @yield('content')
          <div id="instafeed"></div>
        </div>
      </main>
      <!-- /.main -->

    </div>
    @php(do_action('get_footer'))
    @include('partials.footer')
    @php(wp_footer())

    <script
    src="https://code.jquery.com/jquery-3.3.1.min.js"
    integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
    crossorigin="anonymous"></script>

    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.css" />
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    <script type="text/javascript" src="/wp-content/themes/MyLegion/resources/assets/scripts/instafeed.min.js"></script>

    <script type="text/javascript">
        var feed = new Instafeed({
          get: 'user',
          userId: '265677005',
          accessToken: '265677005.ba4c844.799321b9a68a46aa95b1d4bc5918ab9c',
          limit: 6,
          resolution: 'standard_resolution'
        });
        feed.run();
    </script>

    <script>

    $(document).ready(function(){
      $('#instafeed').find("a").each(function(index) {
        console.log('hi');
        var caption = $(this).prop('src');
        console.log(caption);

        //$('.slick-dots').find('button').eq(index).html(caption);
      });
    });

    </script>

    <script>

    $(document).ready(function(){
      $('.home_carousel').slick({
        autoplay: true,
        autoplaySpeed: 6000,
        dots: true,
        arrows: false,
      });

      $('.home_carousel').find('button').html('1<br>Copy Goes Here');

      $('.caption_dump').find(".caption").each(function(index) {
        var caption = $(this).data('caption');
        $('.slick-dots').find('button').eq(index).html(caption);
      });

      $('.carousel_2').slick({
        autoplay: true,
        autoplaySpeed: 6000,
        dots: false,
        arrows: true,
        appendArrows: '.arrow_box',
        prevArrow:"<img class='slick-prev' src='/wp-content/themes/MyLegion/resources/assets/images/left-arrow.png'>",
        nextArrow:"<img class='slick-next' src='/wp-content/themes/MyLegion/resources/assets/images/right-arrow.png'><img class='slick-next white-arrow' src='/wp-content/themes/MyLegion/resources/assets/images/right-arrow-white.png'>"
      });
    });

    </script>

  </body>

</html>
