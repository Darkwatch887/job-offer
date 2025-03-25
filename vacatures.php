<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vacatures - TLC Recruitment</title>
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
        const JobsPage = () => {
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

                    <div className="jobs-hero">
                        <div className="container">
                            <h1>Vacatures</h1>
                            <p>Ontdek jouw volgende carrièrestap bij toonaangevende bedrijven</p>
                        </div>
                    </div>

                    <div className="container">
                        <div className="jobs-filters">
                            <input 
                                type="text" 
                                placeholder="Zoek op functie of locatie..." 
                                className="jobs-search"
                            />
                            <select className="jobs-filter">
                                <option value="">Alle locaties</option>
                                <option value="amsterdam">Amsterdam</option>
                                <option value="rotterdam">Rotterdam</option>
                                <option value="den-haag">Den Haag</option>
                                <option value="utrecht">Utrecht</option>
                                <option value="eindhoven">Eindhoven</option>
                            </select>
                            <select className="jobs-filter">
                                <option value="">Alle types</option>
                                <option value="fulltime">Fulltime</option>
                                <option value="parttime">Parttime</option>
                            </select>
                        </div>

                        <div className="jobs-list">
                            <div className="job-item">
                                <span className="job-type">Fulltime</span>
                                <h2>Senior Software Developer</h2>
                                <p className="job-company">TechCorp B.V.</p>
                                <p className="job-location">Amsterdam</p>
                                <p className="job-excerpt">Ben jij een ervaren developer met passie voor Python/Django? Wij zoeken een senior developer die ons team kan versterken.</p>
                                <a href="jobs/senior-software-developer.php" className="job-details-link">Bekijk vacature</a>
                            </div>

                            <div className="job-item">
                                <span className="job-type">Fulltime</span>
                                <h2>Financial Controller</h2>
                                <p className="job-company">Finance Solutions</p>
                                <p className="job-location">Rotterdam</p>
                                <p className="job-excerpt">Voor onze internationale klant zoeken wij een ervaren Financial Controller met RA/RC diploma.</p>
                                <a href="jobs/financial-controller.php" className="job-details-link">Bekijk vacature</a>
                            </div>

                            <div className="job-item">
                                <span className="job-type">Fulltime</span>
                                <h2>Digital Marketing Manager</h2>
                                <p className="job-company">Brand Masters</p>
                                <p className="job-location">Utrecht</p>
                                <p className="job-excerpt">Word jij onze nieuwe Digital Marketing Manager? Kom werken in een dynamisch team!</p>
                                <a href="jobs/digital-marketing-manager.php" className="job-details-link">Bekijk vacature</a>
                            </div>

                            <div className="job-item">
                                <span className="job-type">Parttime</span>
                                <h2>Front-end Developer</h2>
                                <p className="job-company">WebDesign Pro</p>
                                <p className="job-location">Den Haag</p>
                                <p className="job-excerpt">Parttime front-end developer gezocht voor het bouwen van moderne web applicaties.</p>
                                <a href="jobs/frontend-developer.php" className="job-details-link">Bekijk vacature</a>
                            </div>

                            <div className="job-item">
                                <span className="job-type">Fulltime</span>
                                <h2>Business Analist</h2>
                                <p className="job-company">Data Insights</p>
                                <p className="job-location">Eindhoven</p>
                                <p className="job-excerpt">Analytisch talent gezocht voor het analyseren en optimaliseren van bedrijfsprocessen.</p>
                                <a href="jobs/business-analyst.php" className="job-details-link">Bekijk vacature</a>
                            </div>

                            <div className="job-item">
                                <span className="job-type">Fulltime</span>
                                <h2>DevOps Engineer</h2>
                                <p className="job-company">Cloud Solutions</p>
                                <p className="job-location">Amsterdam</p>
                                <p className="job-excerpt">Ervaren DevOps Engineer gezocht voor het beheren en optimaliseren van cloud infrastructuur.</p>
                                <a href="jobs/devops-engineer.php" className="job-details-link">Bekijk vacature</a>
                            </div>

                            <div className="job-item">
                                <span className="job-type">Fulltime</span>
                                <h2>UX/UI Designer</h2>
                                <p className="job-company">Creative Agency</p>
                                <p className="job-location">Rotterdam</p>
                                <p className="job-excerpt">Creatieve UX/UI Designer gezocht voor het ontwerpen van gebruiksvriendelijke interfaces.</p>
                                <a href="jobs/ux-ui-designer.php" className="job-details-link">Bekijk vacature</a>
                            </div>

                            <div className="job-item">
                                <span className="job-type">Fulltime</span>
                                <h2>Data Scientist</h2>
                                <p className="job-company">AI Solutions</p>
                                <p className="job-location">Utrecht</p>
                                <p className="job-excerpt">Gedreven Data Scientist gezocht voor het ontwikkelen van machine learning modellen.</p>
                                <a href="jobs/data-scientist.php" className="job-details-link">Bekijk vacature</a>
                            </div>

                            <div className="job-item">
                                <span className="job-type">Parttime</span>
                                <h2>Content Marketing Specialist</h2>
                                <p className="job-company">Digital Media</p>
                                <p className="job-location">Den Haag</p>
                                <p className="job-excerpt">Creatieve Content Marketeer gezocht voor het creëren van engaging content.</p>
                                <a href="jobs/content-marketing-specialist.php" className="job-details-link">Bekijk vacature</a>
                            </div>

                            <div className="job-item">
                                <span className="job-type">Fulltime</span>
                                <h2>IT Project Manager</h2>
                                <p className="job-company">Tech Solutions</p>
                                <p className="job-location">Eindhoven</p>
                                <p className="job-excerpt">Ervaren IT Project Manager gezocht voor het leiden van complexe IT projecten.</p>
                                <a href="jobs/it-project-manager.php" className="job-details-link">Bekijk vacature</a>
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
        root.render(<JobsPage />);
    </script>
</body>
</html> 