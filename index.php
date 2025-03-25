<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TLC Recruitment</title>
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
        const HomePage = () => {
            return (
                <div>
                    <header className="header">
                        <div className="logo">
                            <a href="index.php">
                                <img 
                                    src="public/media/homepage/tlc-logo.png"
                                    alt="TLC Logo"
                                />
                            </a>
                        </div>
                        <nav className="nav">
                            <a className="nav-link" href="index.php">Home</a>
                            <a className="nav-link" href="over-ons.php">Over ons</a>
                            <a className="nav-link" href="vacatures.php">Vacatures</a>
                            <a className="nav-link" href="contact.php">Contact</a>
                        </nav>
                    </header>
                    <div className="hero">
                        <div className="hero-content">
                            <h1>Vind jouw droombaan in IT, Finance of Marketing</h1>
                            <p>Wij verbinden talent met de beste carrièremogelijkheden bij toonaangevende bedrijven</p>
                            <a href="vacatures.php" className="cta-button">Bekijk alle vacatures</a>
                        </div>
                    </div>
                    <div className="container">
                        <section className="featured-jobs">
                            <h2>Uitgelichte Vacatures</h2>
                            <div className="job-grid">
                                <div className="job-card">
                                    <span className="job-type">Full-time</span>
                                    <h3>Senior Software Developer</h3>
                                    <p className="job-company">TechCorp B.V.</p>
                                    <p className="job-location">Amsterdam</p>
                                    <ul className="job-highlights">
                                        <li>5+ jaar ervaring met Python/Django</li>
                                        <li>€4500 - €6000 per maand</li>
                                        <li>Hybride werken mogelijk</li>
                                    </ul>
                                    <a href="jobs/senior-software-developer.php" className="job-link">Bekijk vacature</a>
                                </div>

                                <div className="job-card">
                                    <span className="job-type">Full-time</span>
                                    <h3>Financial Controller</h3>
                                    <p className="job-company">Finance Solutions</p>
                                    <p className="job-location">Rotterdam</p>
                                    <ul className="job-highlights">
                                        <li>RA/RC diploma</li>
                                        <li>€5000 - €7000 per maand</li>
                                        <li>Internationale organisatie</li>
                                    </ul>
                                    <a href="jobs/financial-controller.php" className="job-link">Bekijk vacature</a>
                                </div>

                                <div className="job-card">
                                    <span className="job-type">Full-time</span>
                                    <h3>Digital Marketing Manager</h3>
                                    <p className="job-company">Brand Masters</p>
                                    <p className="job-location">Utrecht</p>
                                    <ul className="job-highlights">
                                        <li>3+ jaar online marketing ervaring</li>
                                        <li>€3500 - €4500 per maand</li>
                                        <li>Dynamisch team</li>
                                    </ul>
                                    <a href="jobs/digital-marketing-manager.php" className="job-link">Bekijk vacature</a>
                                </div>

                                <div className="job-card">
                                    <span className="job-type">Part-time</span>
                                    <h3>Front-end Developer</h3>
                                    <p className="job-company">WebDesign Pro</p>
                                    <p className="job-location">Den Haag</p>
                                    <ul className="job-highlights">
                                        <li>React/Vue.js ervaring</li>
                                        <li>24-32 uur per week</li>
                                        <li>Flexibele werktijden</li>
                                    </ul>
                                    <a href="jobs/frontend-developer.php" className="job-link">Bekijk vacature</a>
                                </div>

                                <div className="job-card">
                                    <span className="job-type">Full-time</span>
                                    <h3>Business Analist</h3>
                                    <p className="job-company">Data Insights</p>
                                    <p className="job-location">Eindhoven</p>
                                    <ul className="job-highlights">
                                        <li>SQL en Power BI ervaring</li>
                                        <li>€3800 - €5200 per maand</li>
                                        <li>Groeiende scale-up</li>
                                    </ul>
                                    <a href="jobs/business-analyst.php" className="job-link">Bekijk vacature</a>
                                </div>
                            </div>
                        </section>

                        <section className="why-us">
                            <h2>Waarom TLC Recruitment?</h2>
                            <div className="benefits-grid">
                                <div className="benefit-card">
                                    <h3>Persoonlijke Aanpak</h3>
                                    <p>Wij geloven in maatwerk en persoonlijke aandacht voor elke kandidaat</p>
                                </div>
                                <div className="benefit-card">
                                    <h3>Breed Netwerk</h3>
                                    <p>Toegang tot de beste vacatures bij toonaangevende bedrijven</p>
                                </div>
                                <div className="benefit-card">
                                    <h3>Carrière Coaching</h3>
                                    <p>Professionele begeleiding tijdens je hele sollicitatieproces</p>
                                </div>
                            </div>
                        </section>
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
        root.render(<HomePage />);
    </script>
</body>
</html>
