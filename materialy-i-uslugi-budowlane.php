<?php include "head_section.php"; ?>

<body>
    <!--============================= HEADER =============================-->
    <?php include "header.php"; ?>
    <!--============================= Punkty sprzedaży DB24 =============================-->
    <section class="hero-wrap d-flex align-items-center">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="hero-title">
                    <h1>Doradca Budowlany 24</h1>
                    <h3>Odwiedź jeden z naszych punktów</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                        <div class="search-box">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="search-box1 rounded">
                                        <div class="search-box-title">
                                            <img src="images/db24-leszno.PNG" alt="zdjęcie db24 krzemieniewo" style="width: 100%; margin: 0px;"/>
                                            <div class="container-db24">
                                                <label>Doradca Budowlany 24 Leszno</label><br>
                                                <span class="address-db24"> <img src="images/location_icon.png" alt="#" class="img-fluid location-icon"> Leszno, ul Fabryczna 17 </span> <a class="contact-with-us" href="https://budio.pl/hurtownia/doradca-budowlany-24/kontakt">Skontaktuj&nbsp;się</a>
                                                <ul class="main-category-list">
                                                    <li><a href="https://budio.pl/produkty/budowa?hurtownia=138">Budowa</a></li>
                                                    <li><a href="https://budio.pl/produkty/wykonczenie?hurtownia=138">Wykończenie</a></li>
                                                    <li><a href="https://budio.pl/produkty/ogrod?hurtownia=138">Ogród</a></li>
                                                    <li><a href="https://budio.pl/produkty/narzedzia?hurtownia=138">Narzędzia</a></li>
                                                </ul>
                                                <p class="description-db24 add-padding">
                                                Hurtownia budowlana Leszno oferuje szeroki wachlarz usług z zakresu branży budowlanej. Znajdziesz tu różne produkty od renomowanych firm - polskich i zagranicznych. Czekają materiały budowlane ścienne, materiały dociepleniowe, farby i wiele innych.
                                                </p>  
                                            </div>
                                                <hr>
                                            <div class="container-db24">
                                                <div class="open-information-container">
                                                        <?php
                                                            $day = date("l");
                                                            //$day='Sunday';
                                                            $hour = date('h');
                                                            //$hour=17;
                                                        ?>
                                                        
                                                        <?php
                                                            
                                                            if($hour>=8 && $hour<=16)
                                                            {
                                                                if($day == 'Monday' || $day == 'Tuesday' || $day == 'Wednesday' || $day == 'Thursday' || $day == 'Friday')
                                                                {
                                                                    echo "<p class='open-information-db24 opening-hours-leszno'> DZISIAJ OTWARTE 08:00 - 16:00 <span class='arrow-down'>‹</span> </p>";
                                                                }
                                                                else if($day == 'Saturday' || $day == 'Sunday')
                                                                {
                                                                    echo "<p class='close-information-db24 opening-hours-leszno'>DZISIAJ ZAMKNIĘTE <span class='arrow-down'>‹</span></p>";
                                                                }
                                                            }
                                                            else
                                                            {
                                                                echo "<p class='close-information-db24 opening-hours-leszno'>DZISIAJ ZAMKNIĘTE <span class='arrow-down'>‹</span></p>";  
                                                            }
                                                           
                                                        ?>
                                                        
                                                        
                                                    
                                                    <p class="offer">
                                                        <a class="btn-db24 btn-see-offer rounded" href="https://budio.pl/hurtownia/doradca-budowlany-24">Zobacz ofertę</a>
                                                    </p>
                                                </div>

                                                <div class="hours-open hours-open-leszno">
                                                Poniedziałek: 8:00 - 16:00<br />
                                                Wtorek: 8:00 - 16:00<br />
                                                Środa: 8:00 - 16:00<br />
                                                Czwartek: 8:00 - 16:00<br />
                                                Piątek: 8:00 - 16:00<br />
                                                Sobota: Nieczynne<br />
                                                Niedziela: Nieczynne
                                                </div>
    
                                                
                                            </div>
                                            
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="search-box2 rounded">
                                        <div class="search-box-title">
                                            <img src="images/db24-krzemieniewo.PNG" alt="zdjęcie db24 krzemieniewo" style="width: 100%; margin: 0px;"/>
                                            <div class="container-db24">
                                                <label>Doradca Budowlany 24 Krzemieniewo</label><br>
                                                <span class="address-db24"><img src="images/location_icon.png" alt="#" class="img-fluid location-icon"> Krzemieniewo, ul Dworcowa 152 </span> <a class="contact-with-us" href="https://budio.pl/hurtownia/doradca-budowlany-24-krzemieniewo/kontakt">Skontaktuj&nbsp;się</a>
                                                <ul class="main-category-list">
                                                    <li><a href="https://budio.pl/produkty/budowa?hurtownia=11875">Budowa</a></li>
                                                    <li><a href="https://budio.pl/produkty/wykonczenie?hurtownia=11875">Wykończenie</a></li>
                                                    <li><a href="https://budio.pl/produkty/ogrod?hurtownia=11875">Ogród</a></li>
                                                    <li><a href="https://budio.pl/produkty/narzedzia?hurtownia=11875">Narzędzia</a></li>
                                                </ul>
                                                <p class="description-db24">
                                                Hurtownia budowlana Krzemieniewo gwarantuje szeroki wybór materiałów budowlanych i dociepleniowych, fachowe doradztwo i indywidualne podejście do klienta. Znajdziesz tu także wysokojakościowe artykuły wykończeniowe, narzędzia i farby z mieszalnika.
                                                </p>  
                                            </div>
                                                <hr>
                                            <div class="container-db24">
                                                <div class="open-information-container">
                                                        <?php
                                                            
                                                            if($hour>=8 && $hour<=16)
                                                            {
                                                                if($day == 'Monday' || $day == 'Tuesday' || $day == 'Wednesday' || $day == 'Thursday' || $day == 'Friday')
                                                                {
                                                                    echo "<p class='open-information-db24 opening-hours-leszno'> DZISIAJ OTWARTE 08:00 - 16:00 <span class='arrow-down'>‹</span> </p>";
                                                                }
                                                                else if($day == 'Saturday' || $day == 'Sunday')
                                                                {
                                                                    echo "<p class='close-information-db24 opening-hours-leszno'>DZISIAJ ZAMKNIĘTE <span class='arrow-down'>‹</span></p>";
                                                                }
                                                            }
                                                            else
                                                            {
                                                                echo "<p class='close-information-db24 opening-hours-leszno'>DZISIAJ ZAMKNIĘTE <span class='arrow-down'>‹</span></p>";  
                                                            }
                                                           
                                                        ?>
                                                    <p class="offer">
                                                        <a class="btn-db24 btn-see-offer rounded" href="https://budio.pl/hurtownia/doradca-budowlany-24-krzemieniewo">Zobacz ofertę</a>
                                                    </p>
                                                </div>

                                                <div class="hours-open hours-open-krzemieniewo">
                                                Poniedziałek: 8:00 - 16:00<br />
                                                Wtorek: 8:00 - 16:00<br />
                                                Środa: 8:00 - 16:00<br />
                                                Czwartek: 8:00 - 16:00<br />
                                                Piątek: 8:00 - 16:00<br />
                                                Sobota: Nieczynne<br />
                                                Niedziela: Nieczynne
                                                </div>
                                                
                                            </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    
                </div>
            </div>
        </div>
    </section>
    
    <!--============================= Produkty w promocji =============================-->
    <section class="main-block gray">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-md-10">
                    <div class="titile-block products-in-promotion">
                        <h2 class="text-center">Produkty w promocji</h2>
                        
                    </div>
                </div>
            </div>
           
                


            <?php

            $strJsonFileContents = file_get_contents("https://budio.pl/hurtownia/1/promocje");
                    // Convert to array 
            $array = json_decode($strJsonFileContents);

            for($i=0;$i<8;$i++)
            {
            $product_name=$array[$i]->product_name;
            $temp=explode("{",$product_name);
            $temp2=explode("}",$temp[1]);
            $product_name_first=$temp[0];
            $product_name_second=strtoupper($temp2[0]);

            $image=$array[$i]->image->name;

            $sugg_price=$array[$i]->pivot->product_sugg_price;
            $sugg_price_format=number_format($sugg_price, 2);

            $sugg_price_promo=$array[$i]->pivot->product_sugg_price_promo;
            $sugg_price_promo_format=number_format($sugg_price_promo, 2);
    
    
            if($i==0 || $i==4)
             echo "<div class='row products-container'>";
                echo "<div class='col-md-6 col-lg-3 article-first'>";
                   echo " <div class='news-block'>";
                        echo "<div class='news-image'>";
                            
                            echo "<img src='https://budio-website.s3.eu-west-1.amazonaws.com/$image' alt='#'>";
                        echo "</div>";
                        
                       echo "<div class='news-title'>";
                           echo " <p class='price'>od <span class='promotional-price'>".$sugg_price_promo_format." zł/ szt</span>&nbsp;&nbsp;&nbsp;<s>".$sugg_price_format." zł</s></p>";
                            echo "<p class='product-name'>$product_name_first</p>";
                           echo " <h5>$product_name_second</h5>";
                            
                        echo "</div>";
                    echo "</div>";
                    

                echo "</div>";
            if($i==3 || $i==7)
            echo "</div>";
            }
            ?>

                
            
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <div class="btn-wrap btn-center order-online-container">
                        <a href="https://budio.pl/hurtownia/doradca-budowlany-24" class="btn-db24 rounded order-online">Zamów online</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <!--============================= Materiały budowlane Leszno i Krzemieniewo =============================-->
    <section class="main-block">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <div class="titile-block">
                        <h2>Materiały budowlane Leszno i Krzemieniewo</h2>
                        
                    </div>
                    <div class="btn-wrap btn-wrap2 long-description-db24">
                        <p>
                        Doradca Budowlany 24 to hurtownia budowlana, która od kilkunastu lat dostarcza klientom wysokojakościowe materiały budowlane. W jej ofercie możesz znaleźć rozmaite artykuły — zarówno pochodzące od renomowanych firm polskich, jak i zagranicznych. Hurtownia budowlana Leszno gwarantuje najwyższą jakość produktów, takich jak beton komórkowy, cegła ceramiczna i klinkierowa czy pustaki. Oprócz tego możesz tutaj znaleźć szeroką gamę materiałów dociepleniowych, m.in. różnego rodzaju gatunki styropianu, wełny, tynków, siatek czy klejów. Co więcej, materiały budowlane Leszno to również elementy konstrukcji oraz pokrycia dachowego. Dzięki nam z powodzeniem dobierzesz także najmodniejsze płytki ścienne lub podłogowe, kupisz stylowa ceramikę bądź armaturę łazienkową. Dodatkowo hurtownia budowlana Leszno dysponuje mieszalnikiem do farb, który pozwoli Ci stworzyć idealny kolor do wnętrz Twojego domu. Pamiętaj zatem, że u nas znajdziesz wszystko — od fundamentów, aż po sam dach! Obojętnie czy budujesz samodzielnie swój własny dom, jesteś wykonawcą czy deweloperem budowlanym. 
                        </p>

                        <p>
                        Hurtownia budowlana Leszno to jednak nie tylko starannie wyselekcjonowane produkty, ale również profesjonalne doradztwo przy budowie domu oraz wszelkiego rodzaju remontach czy naprawach. Nasi doradcy podpowiedzą Ci, jakie narzędzia należy wybrać, polecą sprawdzoną ekipę budowlaną, pomogą Ci w stworzeniu wstępnego kosztorysu oraz doradzą w kwestiach transportowych. Hurtownia budowlana Leszno zapewnia transport materiałów do okolicznych miejscowości takich jak: Osieczna, Lipno, Kąkolewo, Nowa Wieś, Dąbcze, Rydzyna, Henrykowo, Lasocice, Długie Stare, Święciechowa czy Wilkowice. Dzięki nam zaoszczędzisz zatem nie tylko swój czas, ale i pieniądze — a wszystko to w przyjaznej, partnerskiej atmosferze. Pamiętaj więc, że wszelkie plany remontowe warto zacząć właśnie od hurtowni budowlanej. Hurtownia jest w stanie zapewnić towar w hurtowych ilościach i lepszych cenach niż tradycyjny market, ale oferuje również sprawdzone, wysokojakościowe produkty, które cieszą się uznaniem zarówno profesjonalistów, jak i zadowolonych klientów.
                        </p>


                        <img src="images/bricks.PNG" alt="#" class="img-fluid bricks-image">

                        <p>
                        Hurtowania budowlana Krzemieniewo działa na polskim rynku od kilkunastu lat. Naszą główną specjalizacją są produkty budowlane najwyższej jakości, których wachlarz na bieżąco poszerzamy. Materiały budowlane Krzemieniewo to zarówno artykuły, takie jak beton komórkowy, cegła ceramiczna i klinkierowa, pustaki oraz wiele innych produktów dedykowanych pracom remontowym lub budowlanym. Wybierając je staramy się zawsze starannie selekcjonować wybrane towary i współpracować wyłącznie z renomowanymi markami dostępnymi na rynkach europejskich. Oprócz tego hurtownia budowlana Krzemieniewo gwarantuje dostępność produktów pochodzących wyłącznie z limitowanych kolekcji. Takie podejście do sprzedaży sprawia, że nasi klienci mogą cieszyć się produktami najwyższej jakości, które są trudno dostępne w tradycyjnych sklepach budowlanych. Wybierając materiały budowlane Krzemieniewo możesz być zatem pewien, że są to nie tylko w pełni oryginalne artykuły o wysokim standardzie, ale często również niszowe, przeznaczone dla profesjonalistów.
                        </p>

                        <p>
                        Jeżeli zdecydujesz się na zakupy w hurtowni budowlanej Krzemieniewo, możesz być pewien zarówno wysokiej jakości oferowanych produktów, jak i wachlarza w pełni profesjonalnych usług. Nasi fachowcy z pełnym zaangażowaniem udzielą Ci wszelkich porad dotyczących wyboru najlepszych rozwiązań remontowo-budowlanych, zaproponują produkty adekwatne do konkretnego projektu, pomogą w oszacowaniu potrzebnego budżetu oraz wesprą we wszelkich kwestiach związanych z transportem. Hurtownia budowlana Krzemieniewo zapewnia bowiem transport materiałów do okolicznych miejscowości takich jak: Gostyń, Poniec, Krobia, Borek Wielkopolski, Pępowo czy Pogorzela. Dzięki nam uda Ci się dostarczyć wybrane materiały budowlane w sposób szybki i bezpieczny. Pamiętaj zatem, że korzystanie z naszych usług oznacza w pełni kompleksową ofertę, począwszy od zakupów, idąc poprzez doradztwo, na transporcie kończąc. Wszystko to sprawia, że hurtownia budowlana Krzemieniewo jest opcją niezwykle konkurencyjną, dzięki której uda Ci się zaoszczędzić czas nie nadwyrężając przy tym domowego budżetu.

                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <section class="cookie-bar">
       <?php include "cookie_bar.php"; ?> 
    </section>

    <!--============================= FOOTER =============================-->
    <?php include "footer.php"; ?>
    <!--//END FOOTER -->





    <!-- jQuery, Bootstrap JS. -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <!-- skrypt od wyświetlania godzin otwarcia-->
    <script src="js/script-hours-open-db24.js"></script>
    <script src="js/cookie-script.js"></script> 
</body>

</html>