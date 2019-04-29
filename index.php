<!DOCTYPE html>
<html>
     <head>
          <meta charset="UTF-8">
          <title>CV Svajunas Kaseta</title>
         <meta name="description" content="Svajuno Kasetos gyvenimo aprasymas">
         <meta name="keywords" content="programuotojas programavimas html css javascript php">
          <link rel="shortcut icon" href="">
          <link type="text/css" href="assets/style/style.css?v=1.0.0.1" rel="stylesheet">
          <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
          <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

     </head>
     <body>
          <div id="boxes">
               <div id="dialog" class="window">
                    <form  method="get" action="" >
                        <label for="namePop">Sveiki <br>prašau prisistatykite</label>
                         <input type="text" name="name" id="namePop" autofocus="">
                    </form>
                    <div id="popupfoot">
                        <button  class="close" id="text" >Užeikite</button>
                    </div>
               </div>
               <div style="display: none; opacity: 0.8;" id="mask"></div>
          </div>
          <!-- ---------------------- Paralax-------------------------- -->
          <div class="bgimg-1">
              <div class="container">
                  <div class="caption">
                    <span class="border" id="showName">
                    </span><br>
                      <span class="border">Malonu, kad užsukote!</span>
                  </div>
              </div>

          </div>
          <main>
              <section class="content">
                      <div class="container">
                          <h3 style="text-align:center;color: whitesmoke">Sveiki, mano vardas Svajūnas</h3>
                          <p>
                              Esu Kauno informacinių technologijų mokyklos, žiniatinklio programuotojo specialybės mokinys.
                              Moku HTML, CSS, turiu JavaScript ir PhP programavimo pradmenis.
                              Noriu pagilinti esamas žinias ir įgauti naujų įgūdžių darbe prie realių projektų, todėl kreipiuosi dėl galimybės atlikti praktiką Jūsų įmonėje.
                              Esu atsakingas, žingeidus, komunikabilus, sugebu dirbti komandoje ir individualiai.
                              Nebijau naujovių, iššūkių ir pokyčių. Dėl šių asmeninių savybių ir besikeičiančių darbo rinkos poreikių nusprendžiau keisti elektros inžinieriaus kvalifikaciją į žiniatinklio programuotojo.
                          </p>
                      </div>
              </section>
              <section class="content ">
                      <div class="container">
                          <h3 style="text-align:center; color:whitesmoke">Išsilavinimas</h3>
                          <p> Šiuo metu studijuoju Kauno informacinių technologijų mokykloje,
                              žiniatinklio programuotojo specialybę. <br>
                              Nuo 2000 iki 2006 metų studijavau Kauno technologijos universitete ir įgijau elektros inžinerijos
                              bakalauro laipsnį
                          </p>
                      </div>
              </section>
              <section class="content ">
                      <div class="container">
                          <h3 style="text-align:center; color: whitesmoke">Darbo patirtis</h3>
                          <h4>Nuo 2010m. vasario. iki 2015m. gruodžio mėn</h4>
                          <p>Dirbau AB"Vilniaus paukštynas" inžinieriaus pozicijoje. Buvau atsakingas už paukštidžių mikroklimato parametrų palaikymą, elektroninės/kompiuterinės
                              įrangos valdymą, derinimą, darbo priežiūrą ir remontą, atsarginių detalių tiekimą bei bendravimą
                              su tiekėjais. Su įranga susijusios dokumentacijos pildymą.
                              Atostogų ir ligos atveju vaduodavau padalinio vadovą
                          </p>
                          <h4>Nuo 2015m. gruodžio mėn. iki 2016m. balanždio mėn.</h4>
                          <p>
                              Dirbau AB"Kauno grūdai" inžinieriaus pozicijoje. Mano atsakomybėje buvo gamybinių įrengimų elektrinės dalies priežiūrą,
                              pavaldžių darbuotojų darbo organizavimas ir atliktų darbų kokybės užtikrinimas.
                          </p>
                  </div>
              </section>
              <section class="content ">
                      <div class="container">
                          <h3 style="text-align: center; color: whitesmoke">Kalbos</h3>
                          <p>Mano gimtoji kalba yra lietuvių. Laisvai kalbu bei rašau anglų bei rusų
                              užsienio kalbomis.</p>
                          <h3 style="text-align: center; color: whitesmoke">Kompiuterinis raštingumas</h3>
                          <p>
                              Dirbu su operacine sistema Windows ir Microsoft Office programų paketu.
                              Programavimo kalbomis Matlab, C++ (pagrindai), HTML, CSS, JavaScript, PhP, SQL duomenų baze .
                          </p>
                      </div>

              </section>
              <section class="bgimg-6">
                  <div class="content">
                      <div class="container">
                          <h1 style="text-align: center">Susisiekite su manimi</h1>
                          <form id="ajax-contact" method="post" action="mailer.php">
                              <div class="field">
                                  <label for="name">Vardas:</label>
                                  <input type="text" id="name" name="name" required>
                              </div>
                              <div class="field">
                                  <label for="email">El.Paštas:</label>
                                  <input type="email" id="email" name="email" required>
                              </div>
                              <div class="field">
                                  <label for="message">Žinutė:</label>
                                  <textarea id="message" name="message" required></textarea>
                              </div>
                              <div class="field">
                                  <button type="submit">Siųsti</button>
                              </div>
                          </form>
                          <div id="form-messages"></div></div>

                  </div>

              </section>
          </main>



          <script src="assets/js/script.js" ></script>
     </body>
</html>
