<!DOCTYPE html>
<html lang="pl">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <title>Optimistic Optyk Soczewki Wieloogniskowe</title>
</head>
<body>
    <?php include("./Layout/header.php");?>
    <div class = "multifocal-lenses-general-description-text-container">
    <p class = "lenses-description-text" > 
    Mają dwie lub więcej mocy docelowych. W sytuacji, gdy są potrzebne osobne okulary do patrzenia w dal oraz z bliska, są wygodniejszem rozwiązaniem niż 2 pary osobnych okularów. Istnieje wiele rodzajów soczewek wieloogniskowych.
    </p>
    </div>

    <?php include './Component/multifocal-lenses-description.php';?>
<?php
    $title = "Dwuogniskowe (bifokalne)";

$descriptions = [
    "Te soczewki okularowe mają 2 docelowe moce. W dolnej części znajduje się widoczny segment z mocą do czytania. Jest to najprostsze rozwiązanie dla osób, które potrzebują różnych mocy do patrzenia w dal i z bliska, ale jednak chcieliby mieć jedne okulary. Czas adaptacji do takich soczewek jest krótki ze względu na prostą konstrukcję. Warto skorzystać ze wskazówek jakie przy odbiorze okularów sugeruje doradca. Jednak są mniej popularnym rozwiązaniem ze względu na widoczny segment. Przez to jest dostępna ograniczona ilość uszlachetnień."
];

    $images = ["Universal/Dwuogniskowa_page-0001.jpg"];

    renderMultifocalLensesComponent($title, $descriptions, $images);
    ?>
    <?php
    $title = "Relaksacyjne";
    $descriptions = [
        "Te soczewki okularowe również mają 2 docelowe moce. Konstrukcyjnie te soczewki można porównać do dwuogniskowych.  Jednak, segment z mocą do czytania jest niewidoczny.",

    "Te soczewki można zastosować jedynie w sytuacji, gdy różnica pomiędzy korektą do dali i do bliży (addycja) stanowi nie więcej niż 1,25 dpt.  Ze względu na stosunkowo niewielką różnicę w mocach i prostsze ich ułożenie czas adaptacji do takich szkieł jest krótki.",

    "Takie okulary dobrze się sprawdzają w codziennym użytku oraz w pracy przy laptopie."];

    $images = ["Universal/Relaksacyjna_page-0001.jpg"];

    renderMultifocalLensesComponent($title, $descriptions, $images);
    ?>

    <div class = "office-lenses-title-container">
    <h2 class = "lenses-kind-title">Biurowe (półprogresywne)</h2>
    </div>
    <div class = "office-lenses-description-container">
    <p class = "lenses-description-text" >
    Te soczewki zostały zaprojektowane z myślą o osobach, które potrzebują oddzielnych okularów do patrzenia z bliska i dużo pracują przy monitorach stacjonarnych. Jest to dosyć specyficzna odległośc, ponieważ nie zawsze jest możliwość zapewnienia komfortu używając 1 mocy do odległości ok. 1metra oraz 40 cm.

W takich szkłach na poziomie źrenic jest montowana moc do odległości pośredniej i ona łagodnie przechodzi w moc do odległości ok. 40 cm. w dolnej części. Przy tym widocznego podziału taka soczewka nie ma.

Takie soczewki mają 2 najbardziej popularne konstrukcje z maksymalną odległością do: 1,5 lub 3 metrów. (schematy służą jedynie do celów poglądowych). Jednak najczęściej są stosowana konstrukcja z maksymalną odległością do 1,5 metra, ponieważ w soczewce z mocą do 3 kanał do czytania zaczyna się zawężać, prawie jak w soczewce progresywnej.

Warto pamiętać, że te szkła nie nadają się do prowadzenia auta.
    </p>

    </div>
<div class = "office-lens-imagine-container">
    <img class = "office-lens-image" src="./Universal/Biurowe%20odległości_page-0001.jpg" alt = "Schemat do porównania konstrukcji soczewek wieloogniskowych" />
    </div>

    <?php
    $title = "Progresywne";
    $descriptions = [
            "To są szkła, które się sprawdzą w każdej odległości, ponieważ mają płynne przejście od mocy do patrzenia w dal (w górnej części soczewki, na poziomie źrenic danej osoby), do odległości pośrednich np. lusterko w samochodzie, monitor stacjonarny (pod źrenicą, szerokość takiego pola stanowi od 11 mm. w dół) oraz do patrzenia z bliska (odległośćok. 50-40 cm.: książka, laptop).",

"Każda soczewka progresywna ma tzw. strefy zamglenia (boczna część soczewki). Powstają one w skutek połączenia większej ilości różnych mocy. Im bardziej zaawansowana jest konstrukcja soczewki tym strefy zamglenia są mniejsze i jest bardziej płynne przejście pomiędzy poszczególnymi częściami soczewki. Również na komfort patrzenia wpływa stopień redukcji grubości, ponieważ grubość soczewki również powoduje powstanie abberacji bocznych. Również stopień zaawansowania soczewki wiąże się z czasem adaptacji do patrzenia przez takie soczewki, zwykle on stanowi 2-3 tygodnie ciągłego noszenia okularów, w szczególnych przypadkach dłużej.",

"Warto pamiętać, że szkła progresywne są objęte tzw. gwarancją adaptacji, którą udziela producent szkieł. Jest to okres czasu, w trakcie którego można zmienić pewne parametry w soczewce, wymienić na 2 pary osobnych szkieł (do dali i do bliży) lub zmienić konstrukcję na bardziej zaawansowane. W zależności od producenta stanowi on od 1 miesiąca do nawet kilku miesięcy. W zależności od producenta warunki się różnią, w celu uzyskania bardziej szczegułowych informacji prosimy o kontakt z optykiem.",

"Również trzeba wziąć pod uwagę, że o ile moce w każdej części takiej soczewki są różne ogromne znaczenie ma regulacja oprawki. W celu jej dokonania warto się zwrócić do optyka, gdzie takie okulary były robione.",

"Poniższe schematy służą jedynie do celów poglądowych czym się różnią konstrukcje soczewek progresywnych."
       ];

    $images = ["Universal/Progres mniej zaawansowana_page-0001.jpg", "Universal/Progres średniozaawansowana_page-0001.jpg", "Universal/Progres zaawansowana_page-0001.jpg"];

    renderMultifocalLensesComponent($title, $descriptions, $images);
    ?>
    <?php include("./Layout/footer.php");?>
</body>
</html>