<footer class="bg-dark text-light mt-5">
    <div class="container py-4">
        <div class="row">
            <div class="col-md-4">
                <h5 class="mb-3 border-bottom pb-2">About Us</h5>
                <p>We are dedicated to providing the best item management system for your business needs. Our platform helps you organize and track your inventory efficiently.</p>
            </div>
            <div class="col-md-4">
                <h5 class="mb-3 border-bottom pb-2">Quick Links</h5>
                <ul class="list-unstyled">
                    <li class="mb-2"><a href="/" class="text-light text-decoration-none"><i class="fas fa-home me-2"></i>Home</a></li>
                    <li class="mb-2"><a href="{{ route('items.index') }}" class="text-light text-decoration-none"><i class="fas fa-box me-2"></i>Items</a></li>
                    <li class="mb-2"><a href="#about" class="text-light text-decoration-none"><i class="fas fa-info-circle me-2"></i>About</a></li>
                    <li class="mb-2"><a href="#services" class="text-light text-decoration-none"><i class="fas fa-cogs me-2"></i>Services</a></li>
                </ul>
            </div>
            <div class="col-md-4">
                <h5 class="mb-3 border-bottom pb-2">Contact Information</h5>
                <address>
                    <p class="mb-2"><i class="fas fa-map-marker-alt me-2"></i>Islamabad, Pakistan</p>
                    <p class="mb-2"><i class="fas fa-phone me-2"></i>+92 330 9319370</p>
                    <p class="mb-2"><i class="fas fa-envelope me-2"></i>hadid@gmail.com</p>
                </address>
            </div>
        </div>
    </div>
    <div class="bg-secondary py-2">
        <div class="container text-center">
            <p class="mb-0">&copy; {{ date('Y') }} Items Management System. All rights reserved.</p>
        </div>
    </div>
</footer> 