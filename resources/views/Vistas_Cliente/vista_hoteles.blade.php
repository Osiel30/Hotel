<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel Booking</title>
    <link rel="stylesheet" href="{{ asset('css/vistasCliente/vista_hoteles.css') }}">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
</head>
<body>
    <!-- Barra de Navegación -->
    <header>
        <nav class="navbar">
            <div class="logo">
                <img src="{{ asset('img/logo.png') }}" alt="Logo" class="logo-image">
                HUPV
            </div>
            <ul class="nav-links">
                <li><a href="{{ url('/') }}">Home</a></li>
                <li><a href="{{ url('/hoteles') }}">Hoteles</a></li>
                <li><a href="#informacion">Sobre nosotros</a></li>
                <li><a href="{{ url('/contacto') }}">Contacto</a></li>
                <li><a href="#">Login</a></li>
            </ul>
        </nav>
    </header>
    
    <!-- Encabezado segundo de fechas -->
    <section id="booking-form">
        <div class="booking-container">
            <h2>HUPV</h2>
            <form>
                <div class="form-group">
                    <label for="arrival">LLEGADA</label>
                    <input type="date" id="arrival">
                </div>
                <div class="form-group">
                    <label for="departure">SALIDA</label>
                    <input type="date" id="departure">
                </div>
                <div class="form-group">
                    <label for="rooms">1 ROOM</label>
                    <select id="rooms">
                        <option>1 Room</option>
                        <option>2 Rooms</option>
                        <option>3 Rooms</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="adults">1 ADULT</label>
                    <select id="adults">
                        <option>1 Adult</option>
                        <option>2 Adults</option>
                        <option>3 Adults</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="children">0 CHILD</label>
                    <select id="children">
                        <option>0 Child</option>
                        <option>1 Child</option>
                        <option>2 Children</option>
                    </select>
                </div>
                <button type="submit">BOOK</button>
            </form>
        </div>
    </section>
    
    <!-- Sección de info hoteles -->
    <div class="hotels-section">
        <h1>Hoteles en Monterrey (Nuevo León, México)</h1>
        @foreach ([1, 2, 3] as $hotel)
            <div class="hotel-card">
                <img src="{{ asset('img/hotel.png') }}" alt="Hotel Monterrey Macroplaza" class="hotel-image">
                <div class="hotel-info">
                    <div class="popular-tag">Opción popular</div>
                    <h2>Hotel Monterrey Macroplaza</h2>
                    <p>⭐⭐⭐⭐ Hotel</p>
                    <p>a 1.2 km de: Centro de la ciudad</p>
                    <p class="rating">7.7 - Bueno (11551)</p>
                </div>
                <div class="price-info">
                    <p class="price">$1,095 <span>por noche</span></p>
                    <p>Precio previsto para:</p>
                    <p>nov 2024</p>
                    <button class="price-button">Ver precios</button>
                </div>
            </div>
        @endforeach
    </div>
    
    <!-- Pie de página -->
    <footer class="footer">
        <div class="footer-top">
            <div class="contact-info">
                <p>CALL US</p>
                <span>123 456 7890</span>
            </div>
            <div class="contact-info">
                <p>EMAIL US</p>
                <span>info@HUPV.com</span>
            </div>
            <div class="newsletter">
                <p>ENTER ID FOR NEWSLETTER</p>
                <input type="text" placeholder="Your Email">
                <button>GO</button>
            </div>
            <div class="social-icons">
                <a href="#"><i class="fa fa-facebook"></i></a>
                <a href="#"><i class="fa fa-twitter"></i></a>
                <a href="#"><i class="fa fa-google"></i></a>
                <a href="#"><i class="fa fa-linkedin"></i></a>
            </div>
        </div>
        <div class="footer-bottom">
            <div class="footer-column">
                <h3>HUPV</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In consectetur tincidunt dolor.</p>
                <p>St Amsterdam Finland, United States of AKY16 8PN</p>
            </div>
            <div class="footer-column">
                <h3>QUICK LINKS</h3>
                <ul>
                    <li><a href="#">Rooms</a></li>
                    <li><a href="#">Food & Drinks</a></li>
                    <li><a href="#">Beach Venues</a></li>
                    <li><a href="#">Amenities</a></li>
                    <li><a href="#">Noordwijk</a></li>
                    <li><a href="#">Wellness</a></li>
                </ul>
            </div>
            <div class="footer-column">
                <h3>WE ARE GLOBAL</h3>
                <img src="{{ asset('img/map.jpg') }}" alt="World Map">
            </div>
        </div>
        <div class="footer-copyright">
            <p>&copy; 2015 HUPV. All rights reserved.</p>
        </div>
    </footer>

</body>
</html>
