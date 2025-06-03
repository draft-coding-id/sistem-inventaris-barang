<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LAGRO INVENTARIS</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        html,
        body {
            height: 100%;
        }

        body {
            background-color: #fff;
            font-family: 'Segoe UI', sans-serif;
            margin: 0;
        }

        .scroll-btn {
            position: absolute;
            bottom: 40px;
            left: 50%;
            transform: translateX(-50%);
            border-radius: 30px;
        }
    </style>
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light px-4 py-3">
        <a class="navbar-brand fw-bold" href="#">
            <span class="me-1">🅻</span> LAGRO INVENTARIS
        </a>
        <div class="ms-auto d-none d-lg-flex gap-4">
            <a href="#about" class="text-decoration-none text-dark fw-medium">ABOUT</a>
            <a href="#feature" class="text-decoration-none text-dark fw-medium">FEATURES</a>
            <a href="#contact" class="text-decoration-none text-dark fw-medium">CONTACT</a>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="d-flex align-items-center justify-content-center text-center" style="height: calc(100vh - 80px);">
        <div>
            <h1 class="display-4 fw-bold">INVENTORY SOLUTIONS REIMAGINED</h1>
        </div>
    </section>

    <!-- Optional Sections -->
    <section id="about" class="py-5 text-center bg-light">
        <div class="container">
            <h2 class="fw-bold">About Lagro Inventaris</h2>
            <p class="text-muted">Lagro Inventaris adalah platform digital untuk manajemen barang, gudang, dan inventaris perusahaan secara efisien.</p>
        </div>
    </section>

    <section id="feature" class="py-5 text-center">
        <div class="container">
            <h2 class="fw-bold">Features</h2>
            <ul class="list-unstyled">
                <li>✔️ Multi Role (Admin, Gudang, Barang)</li>
                <li>✔️ Real-time Stock Monitoring</li>
                <li>✔️ Permission Based Access</li>
            </ul>
        </div>
    </section>

    <section id="contact" class="py-5 text-center bg-light">
        <div class="container">
            <h2 class="fw-bold">Contact Us</h2>
            <p class="text-muted">Hubungi kami melalui WhatsApp untuk info lebih lanjut.</p>
            <a href="https://wa.me/6281234567890" class="btn btn-success">WhatsApp</a>
        </div>
    </section>

    <!-- Footer -->
    <footer class="text-center py-4 bg-white border-top">
        <small class="text-muted">© 2025 Lagro Inventaris. All rights reserved.</small>
    </footer>

    <!-- Floating WhatsApp Button -->
    <a href="https://wa.me/6281234567890" target="_blank"
        class="btn btn-success position-fixed"
        style="bottom: 20px; right: 20px; z-index: 1000; border-radius: 50%; width: 60px; height: 60px; display: flex; align-items: center; justify-content: center; box-shadow: 0 4px 8px rgba(0,0,0,0.2);">
        <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" fill="white" class="bi bi-whatsapp" viewBox="0 0 16 16">
            <path d="M13.601 2.326A7.947 7.947 0 0 0 8.002 0 8.001 8.001 0 0 0 .668 11.54l-.712 2.617a.482.482 0 0 0 .592.591l2.619-.713A8 8 0 1 0 13.6 2.326Zm-5.6 13.163a6.7 6.7 0 0 1-3.421-.934l-.243-.143-1.957.533.523-1.91-.158-.25a6.73 6.73 0 0 1 1.007-8.55 6.703 6.703 0 0 1 4.248-1.55h.003a6.692 6.692 0 0 1 4.243 1.548 6.731 6.731 0 0 1 2.41 5.148 6.72 6.72 0 0 1-6.652 6.658ZM11.2 9.713c-.168-.084-.998-.492-1.152-.548-.153-.057-.264-.084-.375.084-.112.168-.43.548-.527.66-.098.112-.195.126-.363.042-.168-.085-.71-.26-1.35-.828-.5-.446-.837-.997-.935-1.165-.098-.168-.01-.258.074-.342.076-.076.168-.195.252-.293.084-.099.112-.17.168-.283.056-.113.028-.212-.014-.296-.042-.084-.375-.906-.514-1.243-.136-.326-.275-.282-.375-.287a.653.653 0 0 0-.326.014c-.112.028-.296.113-.45.282s-.592.578-.592 1.41c0 .831.607 1.635.692 1.748.084.112 1.2 1.835 2.91 2.574.407.176.725.281.973.36.409.13.78.112 1.074.068.327-.049 1.002-.409 1.144-.805.14-.393.14-.731.098-.805-.042-.07-.154-.112-.322-.197Z" />
        </svg>
    </a>

</body>

</html>