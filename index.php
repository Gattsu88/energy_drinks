<?php
    $title = 'Home';
    include 'html/header.php';
    include 'html/nav.php';
?>

<div class="container mainContainer">

    <div class="row">
        <div class="col-md-8 text-justify">
            <h1>Energy drinks</h1>

            <div class="row">
                <div id="myCarousel" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#myCarousel" data-slide-to="1"></li>
                    <li data-target="#myCarousel" data-slide-to="2"></li>
                </ol>

                <!-- Wrapper for slides -->
                <div class="carousel-inner">
                    <div class="item active">
                        <img src="images/carousel1.jpg" alt="Carousel1" style="width:100%;" class="img-rounded">
                        <div class="carousel-caption">
                          <h3></h3>
                          <p></p>
                        </div>
                    </div>

                  <div class="item">
                      <img src="images/carousel2.jpg" alt="Carousel2" style="width:100%;" class="img-rounded">
                      <div class="carousel-caption">
                          <h3></h3>
                          <p></p>
                      </div>
                  </div>

                  <div class="item">
                      <img src="images/carousel3.jpg" alt="Carousel3" style="width:100%;" class="img-rounded">
                      <div class="carousel-caption">
                          <h3></h3>
                          <p></p>
                      </div>
                  </div>
                </div>

                <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                  <span class="glyphicon glyphicon-chevron-left"></span>
                  <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#myCarousel" data-slide="next">
                  <span class="glyphicon glyphicon-chevron-right"></span>
                  <span class="sr-only">Next</span>
                </a>
                </div>
            </div><br>

            <p>An energy drink is a type of beverage containing stimulant drugs, usually including caffeine, which is marketed as providing mental and physical
            stimulation (marketed as "energy", but distinct from food energy). They may or may not be carbonated and many also contain sugar or other sweeteners,
            herbal extracts, taurine, and amino acids. They are a subset of the larger group of energy products, which includes bars and gels, and distinct from
            sports drinks, which are advertised to enhance sports performance. There are many brands and varieties in this beverage category.</p>

            <h4>Which energy drink has the most caffeine?</h4><br>
            <details>
                <summary>Energy Drink</summary>
                <ul>
                    <li>Redline Energy Drink 39.5mg/floz</li>
                    <li>Spike Shooter 35.7mg/floz</li>
                    <li>Cocaine Energy Drink 33.3mg/floz</li>
                    <li>Monster M3 32mg/floz</li>
                    <li>Redline Princess 31.2 mg/floz</li>
                    <li>Speed Shot Intensity 29.4 mg/floz</li>
                    <li>BANG Energy Drink 22.3mg/floz.</li>
                    <li>Spike Shotgun 21.9mg/floz</li>
                    <li>Wired X344 Energy Drink 21.5mg/floz</li>
                    <li>CoMotion Energy Drink 20 mg/floz</li>
                </ul>
            </details>
            <details>
                <summary>Energy Shot</summary>
                <ul>
                    <li>DynaPep  714.3mg/floz</li>
                    <li>Vital 4U Liquid Energy 305.6mg/floz</li>
                    <li>Sreamin Energy Max Hit 303.9mg/floz</li>
                    <li>ALRI Hypershot  250.0mg/floz</li>
                    <li>Cocaine Energy Shot 140mg/floz</li>
                    <li>Redline Power Rush 140mg/floz</li>
                    <li>5 Hour Energy Extra Strength 125mg/floz</li>
                    <li>Mana Energy Potion 118.5mg/floz</li>
                    <li>Eternal Energy Shot 115mg/floz</li>
                    <li>Street King Energy Shot 112mg/floz</li>
                </ul>
            </details><br>

            <p>Coffee, tea and other naturally caffeinated beverages are usually not considered energy drinks. Other soft drinks such as cola may contain caffeine,
            but are also not energy drinks. Some alcoholic beverages, such as Buckfast Tonic Wine, contain caffeine and other stimulants. According to the
            Mayo Clinic, it is safe for the typical healthy adult to consume a total of 400 mg of caffeine a day. This has been confirmed by a panel of the European
            Food Safety Authority, which also concludes that a caffeine intake of up to 400 mg per day does not raise safety concerns for adults. According to the
            ESFA this is equivalent to 4 cups of coffee (90 mg each) or 5 standard cans (250 ml) of energy drink (80 mg each).</p>

            <p>Energy drinks have the effects caffeine and sugar provide, but there is little or no evidence that the wide variety of other ingredients have any
            effect. Most of the effects of energy drinks on cognitive performance, such as increased attention and reaction speed, are primarily due to the presence
            of caffeine. Other studies, however, ascribe those performance improvements to the effects of the combined ingredients. Advertising for energy drinks
            usually features increased muscle strength and endurance, but there is still no scientific consensus to support these statements. Energy drinks have
            been associated with health risks, such as an increased rate of alcohol-related injury, and excessive or repeated consumption can lead to cardiac and
            psychiatric conditions.</p>

        </div>

        <div class="col-md-3 col-md-offset-1 text-justify sidebar">
            <h3>Related videos..</h3><hr>
            <div class="row">
                <iframe src="https://www.youtube.com/embed/akm3bkzMRXA?showinfo=0" frameborder="1" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                <p>What happens when you mix 50 energy drinks together?</p><hr>
            </div>
            <div class="row">
                <iframe src="https://www.youtube.com/embed/fK8lUwBiwSI?showinfo=0" frameborder="1" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                <p>Energy drinks - Epic collection</p><hr>
            </div>
            <div class="row">
                <iframe src="https://www.youtube.com/embed/7eZIbmq5Jiw?showinfo=0" frameborder="1" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                <p>Virtual Riot - Energy Drink</p>
            </div>
        </div>
    </div>
<?php
    include 'html/footer.php';
