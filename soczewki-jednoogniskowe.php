<!DOCTYPE html>
<html lang="pl">
<head>
    <link rel="icon" href="data:;base64,iVBORw0KGgo=">
    <script src="./JS/Component/lens-thikness-carousel-element.js"></script>
    <link rel="stylesheet" href="./CSS/index.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Soczewki jednoogniskowe</title>
</head>
<body>

<?php include("./Layout/header.php");?>

<p class = "lenses-general-description">Mają 1 docelową moc i są najpopularniejszym rozwiązaniem dla osób, które potrzebują korekty wady wzroku.</p>
<h2 class = "lenses-feature-title">Materiały soczewek okularowych</h2>

<div class = "lenses-feature-description-container">
<?php

$title = "Soczewki plastikowe (organiczne)";
$description = "Szkła z tego materiału są lżejsze, odporniejsze na stłuczenie. Ze względu na to zyskały dużą popularność.
Jest dostępna największa ilość różnych konstrukcji soczewek, uszlachetnień. Minusem jest mniejsza odporność na zarysowania. Między innymi przez to warto się zastanowić nad powłoką antyrefleksyjną, dodatkowym utwardzeniem.";
include './Component/single-vision-lenses-features-description.php';

$title = "Soczewki szklane (mineralne)";
$description = "  Szkła z tego materiału rzadko są wykorzystywane. Najczęściej są wybierane ze względu na osobiste preferencje.Niemniej jednak w sytuacji, gdy ktoś pracuje np. przy wysokiej temperaturze (w takich warunkach powłoka antyrefleksyjna jest narażona na pęknięcie) lub przy dużym zapyleniu (w tej sytuacji okulary ze szkłąmi plastikowymi są narażone na szybkie zarysowanie się).";
include './Component/single-vision-lenses-features-description.php';
?>
</div>

<h2 class = "lenses-feature-title">Specyficzne materiały soczewek plastikowych</h2>

<div class = "lenses-feature-description-container">
<?php
$title = "1,53 Trivex";
$description = "  Jest to bardzo odporny materiał.

  Najczęściej soczewki okularowe tego typu wykorzystuje się w oprawkach typu patent (bez obramowania), na żyłce lub w okurach dla dzieci. 

Jest to możliwe tylko w przypadku stosunkowo niewielkich mocy.";
include './Component/single-vision-lenses-features-description.php';

$title = "1,59 Policarbon/Poliwęglan";
$description = "  Ten materiał jest miękki i podąża za wibracjami soczewki przy uderzeniu.

  Ze względu na to często  wykorzystuje się je w okularach na żyłce oraz w okularach dla dzieci i młodzieży. Są też cieńsze i lżejsze. 

  Jednak warto uważać na czyszczenie takich szkieł: przy kontakcie z alkocholem soczewka pęka.";
include './Component/single-vision-lenses-features-description.php';
?>
</div>
<h2 class = "lenses-feature-title">Porównanie stopni redukcji grubości</h2>
<p class = "lenses-general-description">
    Poniższe schematy służą jedynie do celów poglądowych.
</p>
<?php include './Component/lens-thikness-carousel-elemnet.php'; ?>
<div class = "carousel-line">
<?php generateCarouzel('../Universal/+4,00 1,5 Sferyczna_page-0001.jpg', '../Universal/+4,00 1,6 Sferyczna_pages-to-jpg-0001.jpg','../Universal/+4,00 1,67 Sferyczna_page-0001.jpg','../Universal/+4,00 1,74 Sferyczna_page-0001.jpg'); ?>
<?php generateCarouzel('../Universal/+4,00 1,5 Sferyczna_page-0001.jpg', '../Universal/+4,00 1,6 Sferyczna_pages-to-jpg-0001.jpg','../Universal/+4,00 1,67 Sferyczna_page-0001.jpg','../Universal/+4,00 1,74 Sferyczna_page-0001.jpg'); ?>
</div>
<div class = "carousel-line">
<?php generateCarouzel('../Universal/+6,00 1,5 Sferyczna_page-0001.jpg', '../Universal/+6,00 1,6 Sferyczna_page-0001.jpg','../Universal/+6,00 1,67 Sferyczna_page-0001.jpg','../Universal/+6,00 1,74 Sferyczna_page-0001.jpg'); ?>
<?php generateCarouzel('../Universal/+6,00 1,5 Sferyczna_page-0001.jpg', '../Universal/+6,00 1,6 Sferyczna_page-0001.jpg','../Universal/+6,00 1,67 Sferyczna_page-0001.jpg','../Universal/+6,00 1,74 Sferyczna_page-0001.jpg'); ?>
</div>
<div class = "carousel-line">
<?php generateCarouzel('../Universal/_4,00 1,5 Sferyczna_page-0001.jpg', '../Universal/_4,00 1,6 Sferyczna_page-0001.jpg','../Universal/_4,00 1,67 Sferyczna_page-0001.jpg','../Universal/_4,00 1,74 Sferyczna_page-0001.jpg'); ?>
<?php generateCarouzel('../Universal/_4,00 1,5 Sferyczna_page-0001.jpg', '../Universal/_4,00 1,6 Sferyczna_page-0001.jpg','../Universal/_4,00 1,67 Sferyczna_page-0001.jpg','../Universal/_4,00 1,74 Sferyczna_page-0001.jpg'); ?>
</div>
<div class = "carousel-line">
<?php generateCarouzel('../Universal/_6,00 1,5 Sferyczna_page-0001.jpg', '../Universal/_6,00 1,6 Sferyczna_page-0001.jpg','../Universal/_6,00 1,67 Sferyczna_page-0001.jpg','../Universal/_6,00 1,74 Sferyczna_page-0001.jpg'); ?>
<?php generateCarouzel('../Universal/_6,00 1,5 Sferyczna_page-0001.jpg', '../Universal/_6,00 1,6 Sferyczna_page-0001.jpg','../Universal/_6,00 1,67 Sferyczna_page-0001.jpg','../Universal/_6,00 1,74 Sferyczna_page-0001.jpg'); ?>
</div>


<h2 class = "lenses-feature-title">Konstrukcje soczewek jednoogniskowych</h2>
<div class = "lenses-feature-description-container">
<?php
$title = "Sferyczna";
$description = " Jest to najbardziej rozpowszechniona konstrukcja soczewek okularowych.

  Takie soczewki istnieją w różnych stopniach redukcji grubości, jest możliwość dodania różnych uszlachetnień";
include './Component/single-vision-lenses-features-description.php';

$title = "Asferyczna";
$description = "Są to szkła bardziej wypłaszczone, co powoduje, że są lżejsze i lepiej wyglądają w cieńskich oprawkach nawet o większej mocy.

  Zwykle stosuje się takie soczewki przy większych mocach szkieł, ponieważ dana konstrukcja pozwala na poszerzenie pola widzenia.";
include './Component/single-vision-lenses-features-description.php';
?>
</div>
<p class = "lenses-general-description">
    Poniższe schematy służą jedynie do celów poglądowych.
</p>
<div class = "carousel-line">
<?php generateCarouzel('../Universal/+4,00 1,5 Sferyczna_page-0001.jpg', '../Universal/+4,00 1,6 Sferyczna_pages-to-jpg-0001.jpg','../Universal/+4,00 1,67 Sferyczna_page-0001.jpg','../Universal/+4,00 1,74 Sferyczna_page-0001.jpg'); ?>
<?php generateCarouzel('../Universal/+4,00 1,5 Asferyczna_page-0001.jpg', '../Universal/+4,00 1,6 Asferyczna_pages-to-jpg-0001.jpg','../Universal/+4,00 1,67 Asferyczna_page-0001.jpg','../Universal/+4,00 1,74 Asferyczna_page-0001.jpg'); ?>
</div>
<div class = "carousel-line">
<?php generateCarouzel('../Universal/+6,00 1,5 Sferyczna_page-0001.jpg', '../Universal/+6,00 1,6 Sferyczna_page-0001.jpg','../Universal/+6,00 1,67 Sferyczna_page-0001.jpg','../Universal/+6,00 1,74 Sferyczna_page-0001.jpg'); ?>
<?php generateCarouzel('../Universal/+6,00 1,5 Asferyczna_page-0001.jpg', '../Universal/+6,00 1,6 Asferyczna_page-0001.jpg','../Universal/+6,00 1,67 Asferyczna_page-0001.jpg','../Universal/+6,00 1,74 Asferyczna_page-0001.jpg'); ?>
</div>
<div class = "carousel-line">
<?php generateCarouzel('../Universal/_4,00 1,5 Sferyczna_page-0001.jpg', '../Universal/_4,00 1,6 Sferyczna_page-0001.jpg','../Universal/_4,00 1,67 Sferyczna_page-0001.jpg','../Universal/_4,00 1,74 Sferyczna_page-0001.jpg'); ?>
<?php generateCarouzel('../Universal/_4,00 1,5 Asferyczna_page-0001.jpg', '../Universal/_4,00 1,6 Asferyczna_page-0001.jpg','../Universal/_4,00 1,67 Asferyczna_page-0001.jpg','../Universal/_4,00 1,74 Asferyczna_page-0001.jpg'); ?>
</div>
<div class = "carousel-line">
<?php generateCarouzel('../Universal/_6,00 1,5 Sferyczna_page-0001.jpg', '../Universal/_6,00 1,6 Sferyczna_page-0001.jpg','../Universal/_6,00 1,67 Sferyczna_page-0001.jpg','../Universal/_6,00 1,74 Sferyczna_page-0001.jpg'); ?>
<?php generateCarouzel('../Universal/_6,00 1,5 Asferyczna_page-0001.jpg', '../Universal/_6,00 1,6 Asferyczna_page-0001.jpg','../Universal/_6,00 1,67 Asferyczna_page-0001.jpg','../Universal/_6,00 1,74 Asferyczna_page-0001.jpg'); ?>
</div>




<h2 class = "lenses-feature-title">Powłoki na szkłach okularowych oraz inne uszlachetnienia</h2>
<p class = "lenses-general-description">
    Obecnie prawie każde soczewki okularowe mają tzw. antyrefleks. Jest to powłoka na soczewce, która powoduje,że są bardziej przejrzyste. Na życzenie klienta można zastosować soczewki bez niej, jednak wiąże się to z obniżeniem komfortu w patrzeniu przez takie okulary. Oprócz tego, nie będzie wtedy możliwości redukcji grubości, ponieważ soczewka jest wtedy gęstsza i powłoka antyrefleksyjna pozwala nadrobić przejrzystośc tej soczewki.
</p>
<p class = "lenses-general-description">
    Można podzielić wszystkie powłoki na podstawowe (z zielonym odbiciem szczątkowym) lub śliskie (bardziej odporne na zarysowania, łatwiej się czyszczą i mniej przyciągają kurz). Każdy producent szkieł ma takie uszlachetnienia dostępne. O ile śliskie powłoki są bardziej popularne istnieje również możliwość doboru bardziej specyficznej, która będzie wspierała narząd wzroku w rutynie danej osoby.
</p>
<p class = "lenses-general-description">
    Szczególnym przypadkiem takiego uszlachetnienia jest filtr światła niebieskiego. Jest to specjalna ochrona przed nadmiernie oddziaływaniem promienia UVA, UVB i HEV, emitowanym przez słońce oraz sztuczne źródła światła. Może ono powodować między innymi zakłócenie cyklu snu. Ta ochrona może być w powłoce (wtedy blokowane jest do 40% światła niebieskiego) lub wbudowane w masę soczewki (wtedy blokuje do 80% danej wiązki światła). Warto wziąć pod uwagę, że takie soczewki zmieniają kolory w bardziej ciepłe i im więcej światła niebieskiego odcina soczewka tym będzie bardziej żółta.
</p>
<p class = "lenses-general-description">
    Zapraszamy do zapoznania się ze szczegółowymi charakterystykami powłok antyrefleksyjnych poszczególnych producentów szkieł:
</p>

<?php include("./Component/navigate-button.php"); ?>
<nav class="navigate-buttons-container">
    <?php generateNewButton('SHAMIR', 'https://shamir.com/pl/category/coatings-and-materials-pl/'); ?>
    <?php generateNewButton('RODENSTOCK', 'https://www.rodenstock.com/pl/pl/soczewki-x-tra-clean-/journalDetail18.html?docId=2071067&listDocId=0&nextPage=1'); ?>
    <?php generateNewButton('ESSILOR', 'https://ecp.essilor-pro.com/pl/b2b-website-shared-content-products-soczewki-okularowe/powloki-soczewek'); ?>
    <?php generateNewButton('HOYA', 'https://www.hoyavision.com/pl/vision-products/pow%C5%82oki-antyrefleksyjne/'); ?>
    <?php generateNewButton('JZO', 'https://www.jzo.com.pl/powloki-i-barwienia/'); ?>
</nav>

<p class = "lenses-general-description">
    Kolejnym dosyć popularnym rozwiązaniem są soczewki fotochromatyczne. Są to szkła, które się przyciemniają od natężenia promienia UV w powietrzu. Jest do dobre rozwiązanie mn. dla osób, które mają nadwraźliwość na światło.
</p>
<p class = "lenses-general-description">
    Warto wziąć pod uwagę, że takie soczewki przyciemnią się nawet w pochmurny dzień, a w samochodzie nie przyciemnią się do stopnia przeciwsłonecznej soczewki (szyba w samochodzie według najnowszych standardów ma filtr UV). Jeżeli poszukują Państwo okularów do samochodu warto rozważyć oprawkę z nakładkami przeciwsłonecznymi, w nich soczewki są przyciemnione na stałe na poziomie 85% i najczęściej mają polaryzację. Można skorzystać też ze specjalnych patentów przez które soczewka reaguje na światło widzialne w każdych warunkach, dostępnych tylko u niektórych producentów.
</p>
<p class = "lenses-general-description">
    Essilor, Shamir i JZO wykorzystują technologię oprawcowaną przez firmę Transitions, firmy Rodenstock i HOYA mają własną technologię. Jednak każdy producent oferuje szkła najnowszej generacji, które szybciej się przyciemnieją i szybciej się odbarwiają. Oprócz tego istnieją fotochromatyczne soczewki z polaryzacją lub takie, które przyciemniają się w samochodzie do stopnia zabarwienia przeciwsłonecznych, jednak trzeba pamiętać, że są one wstępnie zabarwione około 30%.
</p>

<?php include("./Layout/footer.php");?>
<script>
    new Slider();
</script>
</body>
</html>