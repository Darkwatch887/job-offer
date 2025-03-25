<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Digital Marketing Manager - TLC Recruitment</title>
    <!-- React and ReactDOM -->
    <script src="https://unpkg.com/react@18/umd/react.development.js"></script>
    <script src="https://unpkg.com/react-dom@18/umd/react-dom.development.js"></script>
    <!-- Babel for JSX -->
    <script src="https://unpkg.com/@babel/standalone/babel.min.js"></script>
    <link rel="stylesheet" href="../styles/main.css">
</head>
<body>
    <div id="root"></div>

    <script type="text/babel">
        const JobDetailPage = () => {
            return (
                <div>
                    <header className="header">
                        <div className="logo">
                            <a href="../index.php">
                                <img 
                                    src="../public/media/homepage/tlc-logo.png"
                                    alt="TLC Logo"
                                />
                            </a>
                        </div>
                        <nav className="nav">
                            <a className="nav-link" href="../index.php">Home</a>
                            <a className="nav-link" href="../over-ons.php">Over ons</a>
                            <a className="nav-link" href="../vacatures.php">Vacatures</a>
                            <a className="nav-link" href="../contact.php">Contact</a>
                        </nav>
                    </header>

                    <div className="container">
                        <div className="job-detail">
                            <div className="job-header">
                                <span className="job-type">Fulltime</span>
                                <h1 className="job-title">Digital Marketing Manager</h1>
                                <p className="job-company">Brand Masters</p>
                                <p className="job-location">Utrecht</p>
                            </div>

                            <div className="job-meta">
                                <div className="meta-item">
                                    <span className="meta-label">Dienstverband</span>
                                    <span className="meta-value">Fulltime (40 uur)</span>
                                </div>
                                <div className="meta-item">
                                    <span className="meta-label">Salaris</span>
                                    <span className="meta-value">€3500 - €4500 per maand</span>
                                </div>
                                <div className="meta-item">
                                    <span className="meta-label">Ervaring</span>
                                    <span className="meta-value">3+ jaar online marketing</span>
                                </div>
                                <div className="meta-item">
                                    <span className="meta-label">Locatie</span>
                                    <span className="meta-value">Utrecht (Hybride werken mogelijk)</span>
                                </div>
                            </div>

                            <div className="job-section">
                                <h2>Functieomschrijving</h2>
                                <p>Als Digital Marketing Manager bij Brand Masters ben je verantwoordelijk voor het ontwikkelen en uitvoeren van digitale marketingstrategieën. Je leidt een team van specialisten en werkt nauw samen met verschillende afdelingen om onze online aanwezigheid te versterken en leads te genereren.</p>
                            </div>

                            <div className="job-section">
                                <h2>Wat ga je doen?</h2>
                                <ul>
                                    <li>Ontwikkelen en implementeren van digitale marketingstrategieën</li>
                                    <li>Beheren van social media campagnes en content planning</li>
                                    <li>Optimaliseren van SEO/SEA campagnes</li>
                                    <li>Analyseren van data en KPI's</li>
                                    <li>Aansturen van het digital marketing team</li>
                                    <li>Samenwerken met externe bureaus en partners</li>
                                </ul>
                            </div>

                            <div className="job-section">
                                <h2>Wat vragen wij?</h2>
                                <ul>
                                    <li>3+ jaar ervaring in digital marketing</li>
                                    <li>Ervaring met Google Analytics, Google Ads en social media platforms</li>
                                    <li>Kennis van SEO/SEA en content marketing</li>
                                    <li>Ervaring met marketing automation tools</li>
                                    <li>Sterke analytische en communicatieve vaardigheden</li>
                                    <li>HBO/WO werk- en denkniveau</li>
                                </ul>
                            </div>

                            <div className="job-section">
                                <h2>Wat bieden wij?</h2>
                                <ul>
                                    <li>Competitief salaris tussen €3500 - €4500 per maand</li>
                                    <li>25 vakantiedagen per jaar</li>
                                    <li>Hybride werken (2-3 dagen kantoor)</li>
                                    <li>Persoonlijk opleidingsbudget</li>
                                    <li>Reiskostenvergoeding</li>
                                    <li>Laptop en telefoon van de zaak</li>
                                    <li>Gezellig jong team</li>
                                    <li>Regelmatige teamuitjes en borrels</li>
                                </ul>
                            </div>

                            <a href="../contact.php" className="apply-button">
                                Solliciteer nu
                            </a>
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
                                <p><a href="../privacy.php">Privacyverklaring</a></p>
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
        root.render(<JobDetailPage />);
    </script>
</body>
</html> 