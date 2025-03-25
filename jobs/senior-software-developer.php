<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Senior Software Developer - TLC Recruitment</title>
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
                                <h1 className="job-title">Senior Software Developer</h1>
                                <p className="job-company">TechCorp B.V.</p>
                                <p className="job-location">Amsterdam</p>
                            </div>

                            <div className="job-meta">
                                <div className="meta-item">
                                    <span className="meta-label">Dienstverband</span>
                                    <span className="meta-value">Fulltime (40 uur)</span>
                                </div>
                                <div className="meta-item">
                                    <span className="meta-label">Salaris</span>
                                    <span className="meta-value">€4500 - €6000 per maand</span>
                                </div>
                                <div className="meta-item">
                                    <span className="meta-label">Ervaring</span>
                                    <span className="meta-value">5+ jaar</span>
                                </div>
                                <div className="meta-item">
                                    <span className="meta-label">Locatie</span>
                                    <span className="meta-value">Amsterdam (Hybride werken mogelijk)</span>
                                </div>
                            </div>

                            <div className="job-section">
                                <h2>Functieomschrijving</h2>
                                <p>Als Senior Software Developer bij TechCorp B.V. ben je verantwoordelijk voor het ontwerpen, ontwikkelen en onderhouden van hoogwaardige software-oplossingen. Je werkt in een dynamisch team van developers en draagt bij aan innovatieve projecten voor onze internationale klanten.</p>
                            </div>

                            <div className="job-section">
                                <h2>Wat ga je doen?</h2>
                                <ul>
                                    <li>Ontwikkelen van schaalbare backend systemen met Python/Django</li>
                                    <li>Code reviews uitvoeren en junior developers begeleiden</li>
                                    <li>Technische architectuur ontwerpen voor nieuwe features</li>
                                    <li>Samenwerken met product owners en stakeholders</li>
                                    <li>Bijdragen aan technische beslissingen en innovatie</li>
                                    <li>Continuous Integration en Deployment processen optimaliseren</li>
                                </ul>
                            </div>

                            <div className="job-section">
                                <h2>Wat vragen wij?</h2>
                                <ul>
                                    <li>5+ jaar ervaring met Python/Django development</li>
                                    <li>Ervaring met moderne frontend frameworks (React, Vue.js)</li>
                                    <li>Kennis van databases (PostgreSQL, MongoDB)</li>
                                    <li>Ervaring met cloud platforms (AWS, Google Cloud)</li>
                                    <li>Goede communicatieve vaardigheden</li>
                                    <li>Proactieve en zelfstandige werkhouding</li>
                                </ul>
                            </div>

                            <div className="job-section">
                                <h2>Wat bieden wij?</h2>
                                <ul>
                                    <li>Competitief salaris tussen €4500 - €6000 per maand</li>
                                    <li>25 vakantiedagen per jaar</li>
                                    <li>Hybride werken mogelijk (2-3 dagen kantoor)</li>
                                    <li>Uitgebreid opleidingsbudget</li>
                                    <li>Moderne laptop en equipment</li>
                                    <li>Pensioenregeling</li>
                                    <li>Reiskostenvergoeding</li>
                                    <li>Gezellige vrijdagmiddagborrels</li>
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