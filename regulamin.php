<?php
session_start();
    $_SESSION;
    include("connection.php");
    include("functions.php");

    $user_data = check_login($con);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Akcja - Przeprowadzka - regulamin</title>
    <link rel="stylesheet" href="style.css">
    <link rel="script" href="script.js"/>
</head>
<body>
<div class="topnav">
    <nav class="main-nav">
        <ul class="nav-list">
        <a href="index.php">Strona główna</a>
            <?php
                if ($user_data['id'] != 2)
                {
                   echo '<a href="orderLog.php">Moje zamówienia</a>';
                   echo '<a href="order.php">Zamów nowe</a>';
                }            
            ?>
            <a href="informacje.php">Informacje</a>
            <?php
                if ($user_data['id'] == 2)
                {
                    echo '<a href="order.php">Zamówienia</a>';
                }
            ?>
            <a href="galeria.php">Galeria</a>
            <a href="settings.php">Ustawienia</a>
            <a href="regulamin.php"  class="current">Regulamin</a>
            <a href="logout.php">Wyloguj się</a>
        </ul>
    </nav>
</div>
<div class="container">
    <div class="indexContainer1">
        <img src="cool-background.png" class="background">
        <h1 class="firstTxt">Akcja - Przeprowadzka</h1><br>
        <p class="secondTxt">Regulamin korzystania z serwisu</p>
    </div>
    <div id="boxLogOrder">
        <p>
            <b>I. PREAMBULA </b><br><br>
            1. Niniejszy dokument określa warunki dostępu i korzystania ze strony internetowej, zwany będzie dalej: "Ogólne warunki".<br><br>
            2. Każdy Użytkownik z chwilą podjęcia czynności zmierzających do korzystania ze strony internetowej zobowiązany jest
            do zapoznania się, przestrzegania oraz akceptacji Ogólnych warunków, bez ograniczeń i zastrzeżeń. <br><br>
            3. W przypadku niewyrażenia zgody na wszystkie Ogólne warunki należy zaprzestać korzystania ze strony internetowej i natychmiast ją opuścić. <br><br>
            4. Wszystkie nazwy handlowe, nazwy firm i ich logo, użyte na stronie internetowej należą do ich właścicieli i są używane wyłącznie w celach identyfikacyjnych.
            Mogą być one zastrzeżone znakami towarowymi. <br><br>
            5. Zabrania się nieuprawnionego korzystania z zawartości strony internetowej, utworów
            lub informacji, jak też ich nieuprawnionej reprodukcji, retransmisji lub innego użycia jakiegokolwiek elementu strony internetowej, 
            gdyż takie działanie może naruszać m.in. prawa autorskie lub chronione znaki towarowe.<br> <br>
            6. Pytania lub uwagi dotyczące strony internetowej 
            można zgłaszać na następujący adres email: akcja_przeprowadzka@wp.pl. <br><br>
        </p>
        <p>
            <b>II. DEFINICJE</b><br><br>
            1. FORMULARZ REJESTRACJI - kwestionariusz dostępny na stronie internetowej umożliwiający rejestrację i 
            utworzenie Konta na stronie internetowej <br><br>
            2. KONTO - oznaczony indywidualną nazwą lub loginem oraz hasłem zbiór zasobów na stronie internetowej, w którym gromadzone są dane Użytkownika; <br><br>
            3. PRAWO WŁAŚCIWE - Do celów realizacji Ogólnych warunków zastosowanie ma prawo polskie; <br><br>
            4. STRONA INTERNETOWA - narzędzie, o nazwie: akcja-przeprowadzka.pl, służące do świadczenia usług elektronicznych; <br><br>
            5. UŻYTKOWNIK - osoba fizyczna, osoba prawna albo jednostka organizacyjna nieposiadająca osobowości prawnej, której ustawa przyznaje zdolność prawną, 
            korzystająca z usług elektronicznych dostępnych w ramach strony internetowej; <br><br>
            6. WARUNKI - zbiór wszystkich postanowień m.in. niniejszych Ogólnych warunków, zasad polityki prywatności, plików cookies, 
            regulaminu korzystania ze sklepu internetowego oraz wszelkich innych warunków, znajdujących się na stronie internetowej, 
            które dotyczą określonych funkcji, właściwości lub promocji, jak również obsługi klienta; <br><br>
            7. WŁAŚCICIEL - Podmiot udostępniający niniejszą stronę internetową, mianowicie: Pan Michał Bryja, zamieszkały przy: ul. Kolejowa 1a/6, 73-110, Stargard; <br><br>
        </p>
        <p>
            <b>III. ZAKRES WARUNKÓW</b><br><br>
            1. Właściciel zapewnia dostęp do zawartości strony internetowej, zgodnie z poniższymi Ogólnymi warunkami. <br><br>
            2. Zawartość i dane publikowane na stronie internetowej mają charakter informacji dla osób zainteresowanych i mogą być wykorzystywane jedynie do celów informacyjnych. <br><br>
            3. Użytkownicy mogą korzystać z dostępu i usług oferowanych na stronie internetowej, pod warunkiem uprzedniego wyrażenia zgody na Ogólne warunki. <br><br>
        </p>
        <p>
            <b>IV. ZASADY KORZYSTANIA ZE STRONY INTERNETOWEJ</b><br><br>
            1. Strona internetowa jest obsługiwana przez wszelkiego rodzaju przeglądarki internetowe. 
            Nie wymaga się żadnych szczególnych właściwości urządzenia końcowego Użytkownika. <br><br>
            2. Po zaakceptowaniu Warunków, Użytkownik ma prawo przeglądać, kopiować, drukować oraz rozpowszechniać, bez dokonywania zmian w treści, 
            zawartość niniejszej strony internetowej, pod warunkiem, że: <br><br>
            a. treści te będą wykorzystywane wyłącznie informacyjnie, w celach niekomercyjnych; <br>
            b. każda wykonana kopia będzie zawierała informacje na temat praw autorskich lub dane dotyczące autora treści. <br><br>
            3. Zakazane jest używanie i kopiowanie oprogramowania, procesów i technologii, stanowiących część strony internetowej.<br><br> 
            4. Użytkownicy mogą korzystać ze strony internetowej jedynie w poszanowaniu przepisów ustawy prawo 
            telekomunikacyjne, ustawy o świadczeniu usług drogą elektroniczną i odpowiednich przepisów prawa cywilnego. <br><br>
            5. Zabronione jest korzystanie ze strony internetowej: <br><br>
            a. w sposób prowadzący do naruszenia obowiązujących przepisów prawa; <br><br>
            b. w jakikolwiek sposób niezgodny z prawem lub nieuczciwy, albo w sposób, zmierzający do osiągnięcia niezgodnego z prawem lub nieuczciwego celu;<br> <br>
            c. do celów związanych z wyrządzaniem szkody dzieciom lub prób wyrządzenia im jakiejkolwiek szkody; <br><br>
            d. do wysyłania, świadomego otrzymywania, wgrywania lub używania treści niezgodnych z Ogólnymi warunkami; <br><br>
            e. do przekazywania lub prowokowania wysyłki jakichkolwiek niezamówionych lub nieuprawnionych reklam lub materiałów promocyjnych, jak również jakichkolwiek 
            form podobnych, zaliczanych do zbiorczej kategorii SPAM; <br><br>
            f. do świadomego przekazywania jakichkolwiek danych, wysyłania lub wgrywania jakichkolwiek materiałów zawierających wirusy, 
            konie trojańskie, oprogramowanie szpiegujące (spyware), oprogramowanie z reklamami (adware) lub inny szkodliwy program lub zbliżone 
            kody komputerowe zaprogramowane, by niekorzystnie wpływać lub zagrażać na funkcjonowanie jakiegokolwiek oprogramowania lub sprzętu 
            komputerowego albo niekorzystnie wpływać lub zagrażać Użytkownikowi. <br><br>
        </p>
        <p>
            <b>V. FORMULARZ REJESTRACJI</b><br><br>
            1. W ramach formularza rejestracji, Użytkownik może wpisać swoje dane osobowe, aby zarejestrować się jako zidentyfikowany
            Użytkownik na stronie internetowej i utworzyć swoje Konto. <br><br>
            2. Po zarejestrowaniu, gdy Użytkownik odwiedzi ponownie stronę internetową, będzie mógł zalogować się jako zidentyfikowany Użytkownik na swoje Konto. <br><br>
            3. Po zalogowaniu na Konto, strona internetowa będzie dysponowała danymi osobowymi i kontaktowymi Użytkownika, podanymi podczas rejestracji lub w późniejszym 
            okresie, które umożliwią sprawniejszy kontakt, przesył danych lub płatność za usługę lub towary, dostępne na stronie internetowej. <br><br>
            4. Zarejestrowanie Użytkownika i w rezultacie zapisanie Jego danych osobowych oznacza, że Użytkownik wyraził zgodę na przetwarzanie 
            przez Właściciela danych osobowych Użytkownika, podanych w Formularzu Rejestracji. <br><br>
            </p>
            <p>
            <b>VI. POSZANOWANIE WŁASNOŚCI INTELEKTUALNEJ</b><br><br>
            1. Strona internetowa oraz jej treści mogą być chronione prawami autorskimi, prawami dotyczącymi znaków towarowych oraz innymi 
            przepisami, związanymi z ochroną własności intelektualnej. <br><br>
            2. Znaki, laga i inne spersonalizowane emblematy Właściciela, pojawiające się na 
            stronie internetowej (zwane łącznie: "Znakami"), stanowią znaki towarowe Właściciela. <br><br>
            3. Z wyjątkiem osobnych, indywidualnych, pisemnych upoważnień, Użytkownik nie może wykorzystywać przez siebie, należących do 
            Właściciela, Znaków: osobno, ani w zestawieniu z innymi elementami słownymi lub graficznymi, szczególnie w informacjach 
            prasowych, reklamach, materiałach promocyjnych, marketingowych, w mediach, w materialach pisemnych lub ustnych, w formie elektronicznej, w formie 
            wizualnej ani w żadnej innej formie. <br><br>
            </p>
            <p>
            <b>VII. OCHRONA DANYCH UŻYTKOWNIKA</b><br><br>
            Właściciel szanuje w pełni prywatność Użytkowników. Szczegółowe informacje na temat sposobu gromadzenia i przetwarzania danych osobowych Użytkownika lub innych informacji, 
            jak również sytuacji, w których Właściciel może je ujawniać, znajdują się w zakładce Polityka Prywatności. <br><br>
        </p>
        <p>
            <b>VIII. OGRANICZENIE ODPOWIEDZIALNOŚCI </b><br><br>
            1. Strona internetowa zawiera informacje o charakterze ogólnym. Nie ma na celu pośredniczyć w świadczeniu jakichkolwiek 
            usług doradztwa profesjonalnego. Przed podjęciem czynności mających wpływ na sytuację finansową lub działalność gospodarczą 
            Użytkownika należy skontaktować się z profesjonalnym doradcą. <br><br>
            2. Strona internetowa nie zapewnia żadnych gwarancji dotyczących jej treści, w szczególności gwarancji bezpieczeństwa, 
            bezbłędności, braku wirusów czy złośliwych kodów, gwarancji dotyczących poprawnego działania czy jakości. <br><br>
            3. Strona internetowa nie zapewnia żadnej rękojmi, wyraźnej lub dorozumianej, w tym gwarancji przydatności handlowej lub przydatności 
            do określonego celu, nienaruszenia praw autorskich, dostosowania, bezpieczeństwa i rzetelności informacji. <br><br>
            4. Użytkownik korzysta ze strony intemetowej na własne ryzyko i przyjmuje na siebie pełną odpowiedzialność za szkody 
            związane lub wynikające z jej wykorzystania, zarówno bezpośrednie jak i pośrednie, uboczne, następcze, moralne, lub inne szkody z tytułu 
            odpowiedzialności umownej, deliktowej, z tytułu zaniedbań, w tym m.in. za utratę danych lub usług. <br><br>
            5. Strona internetowa nie ponosi żadnej odpowiedzialności za linki zamieszczone na stronie intemetowej, szczególnie jeśli prowadzą do witryn, zasobów 
            lub narzędzi utrzymywanych przez osoby trzecie. <br><br>
            6. Właściciel nie ponosi odpowiedzialności, jeśli strona internetowa jest z jakichkolwiek przyczyn tymczasowo lub długookresowo niedostępna. <br><br>
            7. Właściciel nie ponosi odpowiedzialności za informacje przekazywane na stronie internetowej, ani też nie może zapewnić
            całkowitego bezpieczeństwa transakcji lub komunikacji, prowadzonych za pomocą strony internetowej. <br><br>
            8. Pomimo podejmowania przez Właściciela największych starań, w kwestii zapewnienia dokładności i aktualności 
            strony internetowej, mogą pojawić się niezamierzone przez Właściciela błędy, które Użytkownik, po ich wykryciu, proszony jest zgłaszać 
            Właścicielowi. <br><br>
            9. Wszystkie wskazane powyżej wyłączenia i ograniczenia odpowiedzialności obowiązują w najszerszym 
            dopuszczalnym prawnie zakresie, obejmując każdy typ istniejącej odpowiedzialności m.in. odpowiedzialności kontraktowej, 
            deliktowej i każdej innej przewidzianej w polskim lub zagranicznym porządku prawnym. <br><br>
            </p>
        <p>
            <b>IX. STOSUNEK DO ZAWARTYCH UMÓW</b><br><br>
            Jeśli nie postanowiono inaczej, Ogólne warunki stanowią kompletną i wyczerpującą umowę pomiędzy Użytkownikiem i Właścicielem, dotyczącą 
            korzystania ze strony intemetowej, w zakresie treści w nich zawartych 
            oraz zastępują wszelkie inne porozumienia, uzgodnienia i umowy dotyczące przedmiotu (treści) niniejszych Ogólnych warunków. <br><br>
        </p>
        <p>
            <b>X. ROZWIĄZYWANIE SPORÓW</b><br><br>
            1. Wszelkie powstałe spory Strony postanawiają w pierwszej kolejności rozwiązać w trybie polubownego załatwienia sprawy, przed właściwym sądem 
            polubownym (zapis na sąd polubowny). 2. Jeśli polubowne załatwienie sprawy okaże się niemożliwe, spór wynikający z niniejszej 
            umowy zostanie rozstrzygnięty przez sąd, w którego okręgu znajduje się miejsce zamieszkania lub stałego pobytu Właściciela. <br><br>
        </p>
        <p>
            <b>XI. PODSTAWA PRAWNA</b><br><br>
            1. W sprawach nieuregulowanych w niniejszych Ogólnych warunkach stosuje się odpowiednio następujące ustawy: <br><br>
            a. ustawę prawo telekomunikacyjne z dnia 16 lipca 2004 E (tj. Dz.U. z 2019 r. poz. 2460, ze zm.); <br><br>
            b. ustawę o świadczeniu usług drogą elektroniczną z dnia 18 lipca 2002 E (t.j. Dz.U. z 2019 r poz. 123, ze zm.); <br><br>
            c. ustawę o prawie autorskim i prawach pokrewnych z dnia 4 lutego 1994 E (t.j. Dz.U. z 2019 E poz. 1231, ze zm.); <br><br>
            d. ustawę Kodeks Cywilny z dnia 23 kwietnia 1964 E (t.j. Dz.U. z 2019 E poz. 1145, ze zm.); <br><br>
            oraz inne właściwe przepisy prawa polskiego. 
        </p>
    </div>
    <footer class="footer"><b>Kontakt:</b>
        +48 502-545-591,
        bryjax76@gmail.com
    </footer>
</div>
</body>
</html>