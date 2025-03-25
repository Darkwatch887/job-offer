<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Over ons - TLC Recruitment</title>
    <!-- React and ReactDOM -->
    <script src="https://unpkg.com/react@18/umd/react.development.js"></script>
    <script src="https://unpkg.com/react-dom@18/umd/react-dom.development.js"></script>
    <!-- Babel for JSX -->
    <script src="https://unpkg.com/@babel/standalone/babel.min.js"></script>
    <link rel="stylesheet" href="styles/main.css">
</head>
<body>
    <div id="root"></div>

    <script type="text/babel">
        const AboutPage = () => {
            return (
                <div>
                    <header className="header">
                        <div className="logo">
                            <img 
                                src="public/media/homepage/tlc-logo.png"
                                alt="TLC Logo"
                            />
                        </div>
                        <nav className="nav">
                            <a className="nav-link" href="index.php">Home</a>
                            <a className="nav-link" href="over-ons.php">Over ons</a>
                            <a className="nav-link" href="/vacatures">Vacatures</a>
                            <a className="nav-link" href="contact.php">Contact</a>
                        </nav>
                    </header>
                    <div className="container">
                        <h1>Over Ons</h1>
                        <div className="about-section">
                            <div className="about-content">
                                <h2>Wie zijn wij?</h2>
                                <p>
                                    TLC Recruitment is een toonaangevend recruitmentplatform dat zich richt op het verbinden van 
                                    talent met de beste carrièremogelijkheden. Als specialist in arbeidsbemiddeling helpen 
                                    we dagelijks professionals bij het vinden van hun droombaan en ondersteunen we bedrijven 
                                    bij het vinden van de perfecte kandidaat.
                                </p>

                                <h2>Onze Missie</h2>
                                <p>
                                    Onze missie is om de perfecte match te creëren tussen werkzoekenden en werkgevers. 
                                    We geloven in het bouwen van duurzame werkrelaties en het ondersteunen van 
                                    carrièregroei. Dit doen we door:
                                </p>
                                <ul className="about-list">
                                    <li>Persoonlijke begeleiding voor kandidaten</li>
                                    <li>Uitgebreide screening van vacatures en bedrijven</li>
                                    <li>Transparant recruitmentproces</li>
                                    <li>Focus op langdurige arbeidsrelaties</li>
                                </ul>

                                <h2>Onze Expertise</h2>
                                <div className="values-grid">
                                    <div className="value-item">
                                        <h3>Vakgebieden</h3>
                                        <p>Specialisatie in IT, Finance, Marketing en Sales functies op alle niveaus.</p>
                                    </div>
                                    <div className="value-item">
                                        <h3>Persoonlijke Aanpak</h3>
                                        <p>Individuele aandacht voor zowel kandidaten als opdrachtgevers.</p>
                                    </div>
                                    <div className="value-item">
                                        <h3>Marktkennis</h3>
                                        <p>Diepgaand inzicht in de arbeidsmarkt en actuele trends.</p>
                                    </div>
                                    <div className="value-item">
                                        <h3>Netwerk</h3>
                                        <p>Uitgebreid netwerk van toonaangevende bedrijven en professionals.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <footer className="footer">
                        <div className="footer-container">
                            <div className="footer-section">
                                <h3>Locatie</h3>
                                <p>TLC Recruitment</p>
                                <p>Voorbeeldstraat 123</p>
                                <p>1234 AB Amsterdam</p>
                                <p>Nederland</p>
                            </div>
                            <div className="footer-section">
                                <h3>Nieuwsbrief</h3>
                                <p>Blijf op de hoogte van nieuwe vacatures</p>
                                <form className="newsletter-form" onSubmit={(e) => {
                                    e.preventDefault();
                                    console.log('Newsletter form submitted');
                                }}>
                                    <input 
                                        type="email" 
                                        className="newsletter-input"
                                        placeholder="E-mailadres"
                                        required
                                    />
                                    <button type="submit" className="newsletter-button">
                                        Aanmelden
                                    </button>
                                </form>
                            </div>
                            <div className="footer-section">
                                <h3>Links</h3>
                                <p><a href="privacy.php">Privacyverklaring</a></p>
                            </div>
                        </div>
                        <div className="footer-container footer-bottom">
                            <p>&copy; {new Date().getFullYear()} TLC Recruitment. Alle rechten voorbehouden.</p>
                        </div>
                    </footer>
                </div>
            );
        };

        const root = ReactDOM.createRoot(document.getElementById('root'));
        root.render(<AboutPage />);
    </script>
</body>
</html> 