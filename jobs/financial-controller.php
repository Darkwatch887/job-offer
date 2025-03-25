<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Financial Controller - TLC Recruitment</title>
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
                                <h1 className="job-title">Financial Controller</h1>
                                <p className="job-company">Finance Solutions</p>
                                <p className="job-location">Rotterdam</p>
                            </div>

                            <div className="job-meta">
                                <div className="meta-item">
                                    <span className="meta-label">Dienstverband</span>
                                    <span className="meta-value">Fulltime (40 uur)</span>
                                </div>
                                <div className="meta-item">
                                    <span className="meta-label">Salaris</span>
                                    <span className="meta-value">€5000 - €7000 per maand</span>
                                </div>
                                <div className="meta-item">
                                    <span className="meta-label">Opleiding</span>
                                    <span className="meta-value">RA/RC diploma vereist</span>
                                </div>
                                <div className="meta-item">
                                    <span className="meta-label">Locatie</span>
                                    <span className="meta-value">Rotterdam (Hybride werken mogelijk)</span>
                                </div>
                            </div>

                            <div className="job-section">
                                <h2>Functieomschrijving</h2>
                                <p>Als Financial Controller bij Finance Solutions ben je verantwoordelijk voor het financiële beleid en de rapportage binnen onze internationale organisatie. Je werkt nauw samen met het management team en speelt een cruciale rol in de strategische besluitvorming.</p>
                            </div>

                            <div className="job-section">
                                <h2>Wat ga je doen?</h2>
                                <ul>
                                    <li>Opstellen en analyseren van maand-, kwartaal- en jaarrapportages</li>
                                    <li>Bewaken en optimaliseren van de financiële processen</li>
                                    <li>Aansturen van het finance team</li>
                                    <li>Adviseren van het management over financiële vraagstukken</li>
                                    <li>Verantwoordelijk voor budgettering en forecasting</li>
                                    <li>Contact onderhouden met externe stakeholders (accountants, belastingadviseurs)</li>
                                </ul>
                            </div>

                            <div className="job-section">
                                <h2>Wat vragen wij?</h2>
                                <ul>
                                    <li>RA of RC diploma</li>
                                    <li>Minimaal 5 jaar relevante werkervaring</li>
                                    <li>Ervaring met internationale consolidatie</li>
                                    <li>Uitstekende beheersing van Nederlands en Engels</li>
                                    <li>Sterke analytische en communicatieve vaardigheden</li>
                                    <li>Ervaring met ERP-systemen (SAP voorkennis is een pre)</li>
                                </ul>
                            </div>

                            <div className="job-section">
                                <h2>Wat bieden wij?</h2>
                                <ul>
                                    <li>Uitstekend salaris tussen €5000 - €7000 per maand</li>
                                    <li>30 vakantiedagen per jaar</li>
                                    <li>Hybride werken (2-3 dagen kantoor)</li>
                                    <li>Bonusregeling</li>
                                    <li>Pensioenregeling</li>
                                    <li>Lease auto of mobiliteitsvergoeding</li>
                                    <li>Opleidingsbudget en ontwikkelmogelijkheden</li>
                                    <li>Laptop en telefoon van de zaak</li>
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