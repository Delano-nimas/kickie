<?php get_header(); ?>
<header class="site-header">
    <a class="brand" href="<?php echo esc_url(home_url('/')); ?>">Pro Athletics<br><span>Kickboxing</span></a>
    <nav class="nav" aria-label="Hoofdnavigatie">
        <a href="#over-ons">Over ons</a><a href="#lessen">Lessen</a><a href="#rooster">Rooster</a><a href="#contact">Contact</a>
    </nav>
</header>

<main>
    <section class="hero" aria-labelledby="hero-title">
        <div class="hero-inner">
            <div>
                <span class="eyebrow">Pro Athletics Kickboxing</span>
                <h1 id="hero-title">Own the<br><em>next</em> round.</h1>
                <p class="hero-copy">Kickboksen voor mensen die sterker, scherper en zelfverzekerder willen worden. Elke training is een stap vooruit.</p>
                <a class="button" href="#contact">Plan je proefles</a>
            </div>
            <aside class="hero-card">
                <strong>Train hard. Fight smart.</strong>
                <p>Techniek, conditie en mentale kracht — in een motiverende club waar iedereen welkom is.</p>
            </aside>
        </div>
    </section>

    <div class="ticker" aria-hidden="true"><span>Kickboxing · Conditioning · Confidence · Community · Kickboxing · Conditioning · Confidence · Community · Kickboxing · Conditioning · Confidence · Community · </span></div>

    <section id="over-ons" class="section">
        <div class="intro">
            <div><span class="section-label">De Pro Athletics mentaliteit</span><h2>Meer dan een workout.</h2></div>
            <div><p>Bij Pro Athletics draait kickboksen om vooruitgang die je voelt, op de mat én daarbuiten. We combineren goede coaching met een positieve, energieke sfeer.</p><a class="button" href="#lessen">Ontdek de lessen</a></div>
        </div>
        <div class="values">
            <article class="value"><b>01</b><h3>Iedereen begint ergens</h3></article>
            <article class="value"><b>02</b><h3>Techniek geeft vertrouwen</h3></article>
            <article class="value"><b>03</b><h3>Samen word je sterker</h3></article>
        </div>
    </section>

    <section id="lessen" class="section programs">
        <span class="section-label">Vind jouw tempo</span><h2>Train op jouw niveau.</h2>
        <div class="program-grid">
            <article class="program"><b class="program-number">01</b><h3>Basics</h3><p>Je eerste stappen in kickboksen: houding, stoten, trappen en conditie. Rustig uitgelegd, stevig getraind.</p></article>
            <article class="program"><b class="program-number">02</b><h3>All levels</h3><p>Een uitdagende training voor wie wil zweten, leren en steeds beter wil worden — op jouw eigen tempo.</p></article>
            <article class="program"><b class="program-number">03</b><h3>Fight team</h3><p>Gerichte begeleiding voor ervaren sporters met ambitie, focus en de wil om het uiterste uit zichzelf te halen.</p></article>
        </div>
    </section>

    <section id="rooster" class="section schedule">
        <div><span class="section-label">Jouw week op de mat</span><h2>Kom in beweging.</h2><div class="times">
            <div class="time"><span>Maandag</span><b>All levels</b><small>19:00 – 20:00</small></div>
            <div class="time"><span>Woensdag</span><b>Basics</b><small>19:00 – 20:00</small></div>
            <div class="time"><span>Donderdag</span><b>All levels</b><small>19:00 – 20:00</small></div>
            <div class="time"><span>Zaterdag</span><b>Fight team</b><small>10:00 – 11:30</small></div>
        </div></div>
        <aside class="schedule-note"><span class="section-label">Eerste keer?</span><h3>Je proefles is op ons.</h3><p>Neem sportkleding en een fles water mee. Handschoenen kun je bij ons lenen. De rest regelen we samen.</p><a class="button" href="#contact">Meld je aan</a></aside>
    </section>

    <section id="contact" class="section contact"><div class="contact-grid"><div><span class="section-label">Jouw eerste ronde</span><h2>Ready when you are.</h2></div><div><p>Wil je langskomen, een proefles plannen of iets vragen? Neem contact op met Pro Athletics en we helpen je snel verder.</p><a class="button" href="mailto:info@proathletics.nl?subject=Proefles%20kickboksen">Vraag je proefles aan</a><div class="contact-links"><a href="mailto:info@proathletics.nl">info@proathletics.nl</a><a href="tel:+31000000000">Telefoonnummer toevoegen</a><a href="#rooster">Bekijk het rooster</a></div></div></div></section>
</main>

<footer class="site-footer"><span>© <?php echo esc_html(wp_date('Y')); ?> Pro Athletics Kickboxing</span><span>Train hard. Fight smart.</span></footer>
<?php get_footer(); ?>
