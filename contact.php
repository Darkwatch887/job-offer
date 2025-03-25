<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact - TLC Webshop</title>
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
        const ContactPage = () => {
            const handleSubmit = (e) => {
                e.preventDefault();
                console.log('Form submitted');
            };

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
                            <a className="nav-link" href="vacatures.php">Vacatures</a>
                            <a className="nav-link" href="contact.php">Contact</a>
                        </nav>
                    </header>
                    <div className="container">
                        <h1>Contact</h1>
                        <div className="contact-section">
                            <div className="contact-info">
                                <h2>Neem contact met ons op</h2>
                                <p>Heeft u vragen of opmerkingen? Neem gerust contact met ons op via onderstaand formulier of gebruik de contactgegevens hieronder.</p>
                                <p>
                                    <strong>Adres:</strong><br />
                                    TLC Webshop<br />
                                    Voorbeeldstraat 123<br />
                                    1234 AB Amsterdam
                                </p>
                                <p>
                                    <strong>Telefoon:</strong><br />
                                    020 - 123 45 67
                                </p>
                                <p>
                                    <strong>E-mail:</strong><br />
                                    info@tlcwebshop.nl
                                </p>
                            </div>
                            <form className="contact-form" onSubmit={handleSubmit}>
                                <div className="form-group">
                                    <label className="form-label" htmlFor="name">
                                        Naam <span className="required">*</span>
                                    </label>
                                    <input className="form-input" type="text" id="name" name="name" required />
                                </div>
                                <div className="form-group">
                                    <label className="form-label" htmlFor="email">
                                        E-mail <span className="required">*</span>
                                    </label>
                                    <input className="form-input" type="email" id="email" name="email" required />
                                </div>
                                <div className="form-group">
                                    <label className="form-label" htmlFor="subject">
                                        Onderwerp <span className="required">*</span>
                                    </label>
                                    <input className="form-input" type="text" id="subject" name="subject" required />
                                </div>
                                <div className="form-group">
                                    <label className="form-label" htmlFor="message">
                                        Bericht <span className="required">*</span>
                                    </label>
                                    <textarea className="form-textarea" id="message" name="message" required />
                                </div>
                                <button className="submit-button" type="submit">Verstuur</button>
                            </form>
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
        root.render(<ContactPage />);
    </script>
</body>
</html> 