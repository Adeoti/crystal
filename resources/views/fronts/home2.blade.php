<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mercy Dew School - We Learn To Excel</title>

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&family=Quicksand:wght@500;700&display=swap"
        rel="stylesheet">

    <!-- Font Awesome for Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <!-- AOS Animation Library -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <style>
        :root {
            --primary-color: #3a86ff;
            --secondary-color: #1d3557;
            --accent-color: #e63946;
            --light-color: #f8f9fa;
            --dark-color: #212529;
            --success-color: #2a9d8f;
            --warning-color: #f77f00;
            --info-color: #7209b7;
            --yellow: #ffbe0b;
            --green: #8ac926;
            --orange: #ff9e00;
            --purple: #b5179e;
            --pink: #f72585;
            --blue: #4361ee;
            --transition: all 0.3s ease;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Nunito', sans-serif;
            color: var(--dark-color);
            line-height: 1.6;
            overflow-x: hidden;
            background-color: #ffffff;
        }

        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            font-family: 'Quicksand', sans-serif;
            font-weight: 700;
            line-height: 1.2;
            margin-bottom: 1rem;
        }

        .container {
            width: 100%;
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 2rem;
        }

        /* Header Styles */
        header {
            background-color: white;
            box-shadow: 0 2px 15px rgba(0, 0, 0, 0.08);
            position: fixed;
            width: 100%;
            top: 0;
            z-index: 1000;
            transition: var(--transition);
        }

        .header-top {
            background: linear-gradient(90deg, var(--primary-color), var(--secondary-color));
            color: white;
            padding: 0.5rem 0;
            font-size: 0.9rem;
        }

        .header-top .container {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .contact-info span {
            margin-right: 1.5rem;
        }

        .social-links a {
            color: white;
            margin-left: 1rem;
            transition: var(--transition);
            font-size: 1.1rem;
        }

        .social-links a:hover {
            color: var(--yellow);
            transform: scale(1.2);
        }

        .navbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 1rem 0;
        }

        .logo {
            display: flex;
            align-items: center;
        }

        .logo img {
            height: 60px;
            margin-right: 1rem;
            border-radius: 50%;
            border: 3px solid var(--primary-color);
        }

        .logo h1 {
            font-size: 1.8rem;
            background: linear-gradient(45deg, var(--primary-color), var(--accent-color));
            -webkit-background-clip: text;
            background-clip: text;
            color: transparent;
            margin-bottom: 0;
        }

        .logo span {
            color: var(--accent-color);
        }

        .nav-links {
            display: flex;
            list-style: none;
        }

        .nav-links li {
            margin-left: 2rem;
        }

        .nav-links a {
            text-decoration: none;
            color: var(--dark-color);
            font-weight: 600;
            position: relative;
            transition: var(--transition);
            font-size: 1rem;
            cursor: pointer;
        }

        .nav-links a::after {
            content: '';
            position: absolute;
            bottom: -5px;
            left: 0;
            width: 0;
            height: 3px;
            background: linear-gradient(90deg, var(--primary-color), var(--accent-color));
            transition: var(--transition);
        }

        .nav-links a:hover::after {
            width: 100%;
        }

        .nav-links a:hover {
            color: var(--primary-color);
        }

        .mobile-menu-btn {
            display: none;
            background: none;
            border: none;
            font-size: 1.5rem;
            cursor: pointer;
            color: var(--primary-color);
        }

        /* Hero Section */
        .hero {
            height: 100vh;
            background: linear-gradient(rgba(255, 255, 255, 0.8), rgba(255, 255, 255, 0.8)), url('https://images.unsplash.com/photo-1503676260728-1c00da094a0b?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1170&q=80') center/cover no-repeat;
            display: flex;
            align-items: center;
            position: relative;
            overflow: hidden;
        }

        .hero::before {
            content: '';
            position: absolute;
            top: -50px;
            right: -50px;
            width: 300px;
            height: 300px;
            border-radius: 50%;
            background: linear-gradient(45deg, rgba(67, 97, 238, 0.1), rgba(247, 37, 133, 0.1));
            z-index: -1;
        }

        .hero::after {
            content: '';
            position: absolute;
            bottom: -100px;
            left: -100px;
            width: 400px;
            height: 400px;
            border-radius: 50%;
            background: linear-gradient(45deg, rgba(255, 190, 11, 0.1), rgba(76, 201, 240, 0.1));
            z-index: -1;
        }

        .hero-content {
            max-width: 800px;
            z-index: 1;
        }

        .hero-content h2 {
            font-size: 3.5rem;
            margin-bottom: 1.5rem;
            color: var(--primary-color);
            animation: bounceIn 1s ease;
        }

        .hero-content p {
            font-size: 1.3rem;
            margin-bottom: 2rem;
            color: var(--dark-color);
            animation: fadeInUp 1s ease 0.2s;
            animation-fill-mode: both;
        }

        .btn {
            display: inline-block;
            padding: 0.8rem 2rem;
            background: linear-gradient(45deg, var(--primary-color), var(--secondary-color));
            color: white;
            text-decoration: none;
            border-radius: 50px;
            font-weight: 600;
            transition: var(--transition);
            border: none;
            margin-right: 1rem;
            margin-bottom: 1rem;
            box-shadow: 0 4px 15px rgba(67, 97, 238, 0.3);
            animation: fadeInUp 1s ease 0.4s;
            animation-fill-mode: both;
            cursor: pointer;
        }

        .btn:hover {
            transform: translateY(-3px);
            box-shadow: 0 7px 20px rgba(67, 97, 238, 0.4);
        }

        .btn-outline {
            background: transparent;
            color: var(--primary-color);
            border: 2px solid var(--primary-color);
            box-shadow: none;
        }

        .btn-outline:hover {
            background: var(--primary-color);
            color: white;
            box-shadow: 0 7px 20px rgba(67, 97, 238, 0.4);
        }

        /* Floating Elements */
        .floating-element {
            position: absolute;
            border-radius: 50%;
            opacity: 0.7;
            z-index: 0;
        }

        .floating-element:nth-child(1) {
            top: 10%;
            right: 10%;
            width: 80px;
            height: 80px;
            background: var(--yellow);
            animation: float 6s ease-in-out infinite;
        }

        .floating-element:nth-child(2) {
            bottom: 15%;
            right: 20%;
            width: 60px;
            height: 60px;
            background: var(--green);
            animation: float 7s ease-in-out infinite 1s;
        }

        .floating-element:nth-child(3) {
            top: 30%;
            left: 5%;
            width: 70px;
            height: 70px;
            background: var(--pink);
            animation: float 8s ease-in-out infinite 0.5s;
        }

        .floating-element:nth-child(4) {
            bottom: 20%;
            left: 15%;
            width: 50px;
            height: 50px;
            background: var(--blue);
            animation: float 9s ease-in-out infinite 1.5s;
        }

        /* Welcome Section */
        .welcome {
            padding: 5rem 0;
            background-color: var(--light-color);
            position: relative;
            overflow: hidden;
        }

        .section-title {
            text-align: center;
            margin-bottom: 3rem;
        }

        .section-title h2 {
            font-size: 2.8rem;
            background: linear-gradient(45deg, var(--primary-color), var(--accent-color));
            -webkit-background-clip: text;
            background-clip: text;
            color: transparent;
            position: relative;
            display: inline-block;
        }

        .section-title h2::after {
            content: '';
            position: absolute;
            bottom: -10px;
            left: 50%;
            transform: translateX(-50%);
            width: 100px;
            height: 4px;
            background: linear-gradient(90deg, var(--yellow), var(--green));
            border-radius: 10px;
        }

        .welcome-content {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 3rem;
            align-items: center;
        }

        .welcome-text h3 {
            font-size: 2.2rem;
            color: var(--secondary-color);
            margin-bottom: 1rem;
        }

        .welcome-text p {
            margin-bottom: 1.5rem;
            font-size: 1.1rem;
        }

        .welcome-image {
            position: relative;
            overflow: hidden;
            border-radius: 20px;
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
            transform: rotate(2deg);
            transition: var(--transition);
        }

        .welcome-image:hover {
            transform: rotate(0deg);
        }

        .welcome-image img {
            width: 100%;
            height: auto;
            transition: transform 0.5s ease;
        }

        .welcome-image:hover img {
            transform: scale(1.05);
        }

        /* Age Groups Section */
        .age-groups {
            padding: 5rem 0;
            background: white;
        }

        .age-groups-container {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 1.5rem;
        }

        .age-card {
            background: white;
            border-radius: 20px;
            padding: 2rem 1.5rem;
            text-align: center;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.05);
            transition: var(--transition);
            position: relative;
            overflow: hidden;
            border: 2px solid transparent;
            cursor: pointer;
        }

        .age-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 5px;
            background: linear-gradient(90deg, var(--primary-color), var(--accent-color));
        }

        .age-card:nth-child(2)::before {
            background: linear-gradient(90deg, var(--yellow), var(--orange));
        }

        .age-card:nth-child(3)::before {
            background: linear-gradient(90deg, var(--green), var(--info-color));
        }

        .age-card:nth-child(4)::before {
            background: linear-gradient(90deg, var(--pink), var(--purple));
        }

        .age-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.1);
        }

        .age-icon {
            width: 80px;
            height: 80px;
            margin: 0 auto 1.5rem;
            background: linear-gradient(45deg, var(--primary-color), var(--secondary-color));
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 2rem;
        }

        .age-card:nth-child(2) .age-icon {
            background: linear-gradient(45deg, var(--yellow), var(--orange));
        }

        .age-card:nth-child(3) .age-icon {
            background: linear-gradient(45deg, var(--green), var(--info-color));
        }

        .age-card:nth-child(4) .age-icon {
            background: linear-gradient(45deg, var(--pink), var(--purple));
        }

        .age-card h3 {
            font-size: 1.5rem;
            margin-bottom: 1rem;
            color: var(--dark-color);
        }

        .age-card p {
            margin-bottom: 1.5rem;
        }

        /* Programs Section */
        .programs {
            padding: 5rem 0;
            background-color: var(--light-color);
        }

        .programs-container {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 2rem;
        }

        .program-card {
            background: white;
            border-radius: 20px;
            overflow: hidden;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.05);
            transition: var(--transition);
            cursor: pointer;
        }

        .program-card:hover {
            transform: translateY(-15px);
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1);
        }

        .card-image {
            height: 200px;
            overflow: hidden;
            position: relative;
        }

        .card-image::after {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(rgba(0, 0, 0, 0), rgba(0, 0, 0, 0.3));
        }

        .card-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.5s ease;
        }

        .program-card:hover .card-image img {
            transform: scale(1.1);
        }

        .card-content {
            padding: 1.5rem;
        }

        .card-content h3 {
            color: var(--primary-color);
            margin-bottom: 1rem;
            font-size: 1.5rem;
        }

        .card-content p {
            margin-bottom: 1.5rem;
        }

        .program-tag {
            display: inline-block;
            padding: 0.3rem 0.8rem;
            border-radius: 20px;
            font-size: 0.8rem;
            font-weight: 600;
            margin-right: 0.5rem;
            margin-bottom: 0.5rem;
        }

        .tag-academic {
            background-color: rgba(67, 97, 238, 0.1);
            color: var(--primary-color);
        }

        .tag-creative {
            background-color: rgba(247, 37, 133, 0.1);
            color: var(--pink);
        }

        .tag-sports {
            background-color: rgba(255, 190, 11, 0.1);
            color: var(--warning-color);
        }

        /* Fun Facts Section */
        .fun-facts {
            padding: 5rem 0;
            background: linear-gradient(135deg, rgba(67, 97, 238, 0.05), rgba(247, 37, 133, 0.05));
        }

        .fun-facts-container {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 2rem;
        }

        .fun-fact {
            background: white;
            border-radius: 20px;
            padding: 2rem;
            text-align: center;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.05);
            transition: var(--transition);
            position: relative;
            overflow: hidden;
        }

        .fun-fact::before {
            content: '';
            position: absolute;
            top: -50px;
            right: -50px;
            width: 100px;
            height: 100px;
            border-radius: 50%;
            background: linear-gradient(45deg, rgba(67, 97, 238, 0.1), rgba(247, 37, 133, 0.1));
        }

        .fun-fact:hover {
            transform: translateY(-10px);
        }

        .fun-fact i {
            font-size: 2.5rem;
            margin-bottom: 1rem;
            background: linear-gradient(45deg, var(--primary-color), var(--accent-color));
            -webkit-background-clip: text;
            background-clip: text;
            color: transparent;
        }

        .fun-fact h3 {
            font-size: 2.5rem;
            margin-bottom: 0.5rem;
            background: linear-gradient(45deg, var(--primary-color), var(--accent-color));
            -webkit-background-clip: text;
            background-clip: text;
            color: transparent;
        }

        /* Activities Section */
        .activities {
            padding: 5rem 0;
            background-color: white;
        }

        .activities-container {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 3rem;
        }

        .activity {
            display: flex;
            align-items: flex-start;
            gap: 1.5rem;
            background: linear-gradient(135deg, rgba(67, 97, 238, 0.05), rgba(247, 37, 133, 0.05));
            padding: 2rem;
            border-radius: 20px;
            transition: var(--transition);
            cursor: pointer;
        }

        .activity:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.05);
        }

        .activity-icon {
            background: linear-gradient(45deg, var(--primary-color), var(--secondary-color));
            color: white;
            width: 60px;
            height: 60px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.5rem;
            flex-shrink: 0;
        }

        .activity:nth-child(even) .activity-icon {
            background: linear-gradient(45deg, var(--yellow), var(--orange));
        }

        .activity-content h3 {
            color: var(--secondary-color);
            margin-bottom: 0.5rem;
            font-size: 1.5rem;
        }

        /* Testimonials Section */
        .testimonials {
            padding: 5rem 0;
            background: linear-gradient(135deg, rgba(67, 97, 238, 0.9), rgba(247, 37, 133, 0.9));
            color: white;
            position: relative;
            overflow: hidden;
        }

        .testimonials::before {
            content: '';
            position: absolute;
            top: -100px;
            right: -100px;
            width: 300px;
            height: 300px;
            border-radius: 50%;
            background: rgba(255, 255, 255, 0.1);
        }

        .testimonials::after {
            content: '';
            position: absolute;
            bottom: -100px;
            left: -100px;
            width: 300px;
            height: 300px;
            border-radius: 50%;
            background: rgba(255, 255, 255, 0.1);
        }

        .testimonials-container {
            max-width: 800px;
            margin: 0 auto;
            text-align: center;
            position: relative;
            z-index: 1;
        }

        .testimonial {
            display: none;
        }

        .testimonial.active {
            display: block;
            animation: fadeIn 1s ease;
        }

        .testimonial-text {
            font-size: 1.3rem;
            font-style: italic;
            margin-bottom: 2rem;
            position: relative;
        }

        .testimonial-text::before {
            content: '"';
            font-size: 5rem;
            position: absolute;
            top: -2rem;
            left: -2rem;
            color: var(--yellow);
            opacity: 0.7;
        }

        .testimonial-author {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 1rem;
        }

        .author-image {
            width: 70px;
            height: 70px;
            border-radius: 50%;
            overflow: hidden;
            border: 3px solid var(--yellow);
        }

        .author-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .author-info h4 {
            margin-bottom: 0.2rem;
            font-size: 1.2rem;
        }

        .testimonial-nav {
            display: flex;
            justify-content: center;
            margin-top: 2rem;
            gap: 0.8rem;
        }

        .nav-dot {
            width: 15px;
            height: 15px;
            border-radius: 50%;
            background-color: rgba(255, 255, 255, 0.3);
            cursor: pointer;
            transition: var(--transition);
        }

        .nav-dot.active {
            background-color: var(--yellow);
            transform: scale(1.2);
        }

        /* Gallery Section */
        .gallery {
            padding: 5rem 0;
            background-color: var(--light-color);
        }

        .gallery-container {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 1rem;
        }

        .gallery-item {
            height: 200px;
            overflow: hidden;
            border-radius: 15px;
            position: relative;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
            transition: var(--transition);
            cursor: pointer;
        }

        .gallery-item:hover {
            transform: scale(1.03);
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.15);
        }

        .gallery-item img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.5s ease;
        }

        .gallery-item:hover img {
            transform: scale(1.1);
        }

        .gallery-item:nth-child(1) {
            grid-column: span 2;
            grid-row: span 2;
        }

        .gallery-item:nth-child(4) {
            grid-row: span 2;
        }

        .gallery-overlay {
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            padding: 1rem;
            background: linear-gradient(transparent, rgba(0, 0, 0, 0.7));
            color: white;
            transform: translateY(100%);
            transition: var(--transition);
        }

        .gallery-item:hover .gallery-overlay {
            transform: translateY(0);
        }

        /* CTA Section */
        .cta {
            padding: 5rem 0;
            background: linear-gradient(135deg, rgba(67, 97, 238, 0.9), rgba(247, 37, 133, 0.9)), url('https://images.unsplash.com/photo-1503676260728-1c00da094a0b?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1170&q=80') center/cover no-repeat;
            color: white;
            text-align: center;
            position: relative;
        }

        .cta::before {
            content: '';
            position: absolute;
            top: -50px;
            right: 10%;
            width: 100px;
            height: 100px;
            border-radius: 50%;
            background: var(--yellow);
            opacity: 0.2;
            animation: float 6s ease-in-out infinite;
        }

        .cta::after {
            content: '';
            position: absolute;
            bottom: -50px;
            left: 10%;
            width: 150px;
            height: 150px;
            border-radius: 50%;
            background: var(--green);
            opacity: 0.2;
            animation: float 7s ease-in-out infinite 1s;
        }

        .cta h2 {
            font-size: 2.8rem;
            margin-bottom: 1.5rem;
            position: relative;
            z-index: 1;
        }

        .cta p {
            max-width: 700px;
            margin: 0 auto 2rem;
            font-size: 1.2rem;
            position: relative;
            z-index: 1;
        }

        /* Footer */
        footer {
            background: linear-gradient(135deg, var(--primary-color), var(--secondary-color));
            color: white;
            padding: 4rem 0 1rem;
        }

        .footer-container {
            display: grid;
            grid-template-columns: 2fr 1fr 1fr 1fr;
            gap: 2rem;
            margin-bottom: 3rem;
        }

        .footer-about h3 {
            color: white;
            margin-bottom: 1rem;
            position: relative;
            padding-bottom: 0.5rem;
            font-size: 1.5rem;
        }

        .footer-about h3::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 50px;
            height: 3px;
            background-color: var(--yellow);
        }

        .footer-about p {
            margin-bottom: 1.5rem;
            opacity: 0.9;
        }

        .footer-links h3 {
            color: white;
            margin-bottom: 1rem;
            position: relative;
            padding-bottom: 0.5rem;
            font-size: 1.5rem;
        }

        .footer-links h3::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 50px;
            height: 3px;
            background-color: var(--yellow);
        }

        .footer-links ul {
            list-style: none;
        }

        .footer-links li {
            margin-bottom: 0.8rem;
        }

        .footer-links a {
            color: rgba(255, 255, 255, 0.8);
            text-decoration: none;
            transition: var(--transition);
            display: inline-block;
            cursor: pointer;
        }

        .footer-links a:hover {
            color: var(--yellow);
            transform: translateX(5px);
        }

        .footer-contact h3 {
            color: white;
            margin-bottom: 1rem;
            position: relative;
            padding-bottom: 0.5rem;
            font-size: 1.5rem;
        }

        .footer-contact h3::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 50px;
            height: 3px;
            background-color: var(--yellow);
        }

        .contact-item {
            display: flex;
            align-items: flex-start;
            margin-bottom: 1rem;
        }

        .contact-item i {
            color: var(--yellow);
            margin-right: 1rem;
            margin-top: 0.3rem;
            font-size: 1.2rem;
        }

        .footer-gallery h3 {
            color: white;
            margin-bottom: 1rem;
            position: relative;
            padding-bottom: 0.5rem;
            font-size: 1.5rem;
        }

        .footer-gallery h3::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 50px;
            height: 3px;
            background-color: var(--yellow);
        }

        .gallery-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 0.5rem;
        }

        .gallery-item-small {
            height: 70px;
            overflow: hidden;
            border-radius: 8px;
            transition: var(--transition);
            cursor: pointer;
        }

        .gallery-item-small:hover {
            transform: scale(1.05);
        }

        .gallery-item-small img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .copyright {
            text-align: center;
            padding-top: 2rem;
            border-top: 1px solid rgba(255, 255, 255, 0.1);
            font-size: 0.9rem;
            color: rgba(255, 255, 255, 0.7);
        }

        /* Anthem and Pledge Section */
        .anthem-pledge {
            padding: 5rem 0;
            background: white;
        }

        .anthem-pledge-container {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 3rem;
        }

        .anthem, .pledge {
            background: linear-gradient(135deg, rgba(67, 97, 238, 0.05), rgba(247, 37, 133, 0.05));
            padding: 2rem;
            border-radius: 20px;
            transition: var(--transition);
        }

        .anthem:hover, .pledge:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.05);
        }

        .anthem h3, .pledge h3 {
            color: var(--primary-color);
            margin-bottom: 1.5rem;
            text-align: center;
        }

        .anthem-content, .pledge-content {
            font-style: italic;
            line-height: 1.8;
        }

        .anthem-content p, .pledge-content p {
            margin-bottom: 1rem;
        }

        .chorus {
            font-weight: bold;
            color: var(--secondary-color);
        }

        /* Modal Styles */
        .modal {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.7);
            z-index: 2000;
            overflow-y: auto;
            opacity: 0;
            transition: opacity 0.3s ease;
        }

        .modal.show {
            display: flex;
            align-items: center;
            justify-content: center;
            opacity: 1;
        }

        .modal-content {
            background-color: white;
            border-radius: 20px;
            width: 90%;
            max-width: 800px;
            max-height: 90vh;
            overflow-y: auto;
            position: relative;
            transform: scale(0.7);
            transition: transform 0.3s ease;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
        }

        .modal.show .modal-content {
            transform: scale(1);
        }

        .modal-header {
            padding: 1.5rem;
            border-bottom: 1px solid rgba(0, 0, 0, 0.1);
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .modal-header h2 {
            margin: 0;
            color: var(--primary-color);
        }

        .modal-close {
            background: none;
            border: none;
            font-size: 1.5rem;
            cursor: pointer;
            color: var(--dark-color);
            transition: var(--transition);
        }

        .modal-close:hover {
            color: var(--accent-color);
            transform: rotate(90deg);
        }

        .modal-body {
            padding: 1.5rem;
        }

        /* Navigation Drawer Styles */
        .nav-drawer {
            position: fixed;
            top: 0;
            right: -350px;
            width: 350px;
            height: 100%;
            background-color: white;
            box-shadow: -5px 0 15px rgba(0, 0, 0, 0.1);
            z-index: 2001;
            transition: right 0.3s ease;
            overflow-y: auto;
        }

        .nav-drawer.open {
            right: 0;
        }

        .drawer-header {
            padding: 1.5rem;
            background: linear-gradient(135deg, var(--primary-color), var(--secondary-color));
            color: white;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .drawer-header h3 {
            margin: 0;
        }

        .drawer-close {
            background: none;
            border: none;
            font-size: 1.5rem;
            cursor: pointer;
            color: white;
            transition: var(--transition);
        }

        .drawer-close:hover {
            transform: rotate(90deg);
        }

        .drawer-content {
            padding: 1.5rem;
        }

        .drawer-menu {
            list-style: none;
        }

        .drawer-menu li {
            margin-bottom: 1rem;
        }

        .drawer-menu a {
            display: flex;
            align-items: center;
            padding: 0.8rem 1rem;
            border-radius: 10px;
            text-decoration: none;
            color: var(--dark-color);
            font-weight: 600;
            transition: var(--transition);
        }

        .drawer-menu a:hover {
            background-color: rgba(67, 97, 238, 0.1);
            color: var(--primary-color);
        }

        .drawer-menu i {
            margin-right: 1rem;
            font-size: 1.2rem;
            width: 24px;
            text-align: center;
        }

        /* Bottom Sheet Styles */
        .bottom-sheet {
            position: fixed;
            bottom: -100%;
            left: 0;
            width: 100%;
            background-color: white;
            border-radius: 20px 20px 0 0;
            box-shadow: 0 -5px 15px rgba(0, 0, 0, 0.1);
            z-index: 2001;
            transition: bottom 0.3s ease;
            max-height: 80vh;
            overflow-y: auto;
        }

        .bottom-sheet.open {
            bottom: 0;
        }

        .sheet-header {
            padding: 1rem;
            display: flex;
            justify-content: center;
            align-items: center;
            border-bottom: 1px solid rgba(0, 0, 0, 0.1);
        }

        .sheet-handle {
            width: 50px;
            height: 5px;
            background-color: rgba(0, 0, 0, 0.2);
            border-radius: 5px;
            cursor: pointer;
        }

        .sheet-title {
            padding: 1rem 1.5rem;
            border-bottom: 1px solid rgba(0, 0, 0, 0.1);
        }

        .sheet-title h3 {
            margin: 0;
            color: var(--primary-color);
        }

        .sheet-content {
            padding: 1.5rem;
        }

        /* Form Styles */
        .form-group {
            margin-bottom: 1.5rem;
        }

        .form-group label {
            display: block;
            margin-bottom: 0.5rem;
            font-weight: 600;
            color: var(--dark-color);
        }

        .form-control {
            width: 100%;
            padding: 0.8rem 1rem;
            border: 2px solid rgba(0, 0, 0, 0.1);
            border-radius: 10px;
            font-family: 'Nunito', sans-serif;
            font-size: 1rem;
            transition: var(--transition);
        }

        .form-control:focus {
            outline: none;
            border-color: var(--primary-color);
            box-shadow: 0 0 0 3px rgba(67, 97, 238, 0.1);
        }

        textarea.form-control {
            resize: vertical;
            min-height: 120px;
        }

        .form-row {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 1rem;
        }

        /* Animations */
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
            }

            to {
                opacity: 1;
            }
        }

        @keyframes bounceIn {
            0% {
                opacity: 0;
                transform: scale(0.3);
            }

            50% {
                opacity: 1;
                transform: scale(1.05);
            }

            70% {
                transform: scale(0.9);
            }

            100% {
                opacity: 1;
                transform: scale(1);
            }
        }

        @keyframes float {
            0% {
                transform: translateY(0px);
            }

            50% {
                transform: translateY(-20px);
            }

            100% {
                transform: translateY(0px);
            }
        }

        /* Responsive Styles */
        @media (max-width: 992px) {
            .fun-facts-container {
                grid-template-columns: repeat(2, 1fr);
            }

            .programs-container,
            .activities-container {
                grid-template-columns: 1fr;
            }

            .gallery-container {
                grid-template-columns: repeat(2, 1fr);
            }

            .gallery-item:nth-child(1) {
                grid-column: span 1;
                grid-row: span 1;
            }

            .gallery-item:nth-child(4) {
                grid-row: span 1;
            }

            .footer-container {
                grid-template-columns: 1fr 1fr;
            }

            .anthem-pledge-container {
                grid-template-columns: 1fr;
            }
        }

        @media (max-width: 768px) {
            .nav-links {
                display: none;
            }

            .mobile-menu-btn {
                display: block;
            }

            .hero-content h2 {
                font-size: 2.5rem;
            }

            .welcome-content {
                grid-template-columns: 1fr;
            }

            .age-groups-container {
                grid-template-columns: repeat(2, 1fr);
            }

            .fun-facts-container {
                grid-template-columns: 1fr;
            }

            .gallery-container {
                grid-template-columns: 1fr;
            }

            .footer-container {
                grid-template-columns: 1fr;
            }

            .form-row {
                grid-template-columns: 1fr;
            }

            .modal-content {
                width: 95%;
                border-radius: 15px 15px 0 0;
                position: fixed;
                bottom: 0;
                left: 0;
                right: 0;
                max-height: 90vh;
                max-width: none;
                transform: translateY(100%);
            }

            .modal.show .modal-content {
                transform: translateY(0);
            }
        }
    </style>
</head>

<body>
    <!-- Header -->
    <header>
        <div class="header-top">
            <div class="container">
                <div class="contact-info">
                    <span><i class="fas fa-phone"></i> 08035270494, 08079845984</span>
                    <span><i class="fas fa-envelope"></i> info@mercydewschool.edu.ng</span>
                </div>
                <div class="social-links">
                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                    <a href="#"><i class="fab fa-linkedin-in"></i></a>
                </div>
            </div>
        </div>
        <div class="container">
            <nav class="navbar">
                <div class="logo">
                    <!-- Placeholder for school logo -->
                    <div style="width: 60px; height: 60px; background: linear-gradient(45deg, var(--primary-color), var(--secondary-color)); border-radius: 50%; display: flex; align-items: center; justify-content: center; color: white; font-weight: bold; font-size: 1.2rem;">MDS</div>
                    <h1>Mercy <span>Dew</span> School</h1>
                </div>
                <ul class="nav-links">
                    <li><a href="#" class="nav-link" data-page="home">Home</a></li>
                    <li><a href="#" class="nav-link" data-page="about">About</a></li>
                    <li><a href="#" class="nav-link" data-page="programs">Programs</a></li>
                    <li><a href="#" class="nav-link" data-page="admissions">Admissions</a></li>
                    <li><a href="#" class="nav-link" data-page="facilities">Facilities</a></li>
                    <li><a href="#" class="nav-link" data-page="gallery">Gallery</a></li>
                    <li><a href="#" class="nav-link" data-page="contact">Contact</a></li>
                    <li><a href="/student/login" target="_blank">Student Portal</a></li>
                </ul>
                <button class="mobile-menu-btn" id="mobileMenuBtn">
                    <i class="fas fa-bars"></i>
                </button>
            </nav>
        </div>
    </header>

    <!-- Hero Section -->
    <section class="hero">
        <div class="floating-element"></div>
        <div class="floating-element"></div>
        <div class="floating-element"></div>
        <div class="floating-element"></div>
        <div class="container">
            <div class="hero-content">
                <h2>We Learn To Excel</h2>
                <p>A world-class standard school with diversity in learning, grooming students from kindergarten to secondary education with a focus on e-learning and computer-based training.</p>
                <button class="btn" id="joinFamilyBtn">Join Our Family</button>
                <button class="btn btn-outline" id="scheduleVisitBtn">Schedule a Visit</button>
            </div>
        </div>
    </section>

    <!-- Welcome Section -->
    <section class="welcome">
        <div class="container">
            <div class="section-title" data-aos="fade-up">
                <h2>Welcome to Mercy Dew School</h2>
            </div>
            <div class="welcome-content">
                <div class="welcome-text" data-aos="fade-right">
                    <h3>A Place Where Every Child Learns to Excel</h3>
                    <p>At Mercy Dew School, we are passionate about providing a good standard education and eradicating examination malpractice in our society. We discovered the decay in our education system and are committed to grooming children from all classes with a solid foundation.</p>
                    <p>We are currently implementing E-Learning in our school to prepare our students for a world that is switching to computer-based testing for all external examinations.</p>
                    <button class="btn" id="discoverStoryBtn">Discover Our Story</button>
                </div>
                <div class="welcome-image" data-aos="fade-left">
                    <img src="https://images.unsplash.com/photo-1588072432836-e10032774350?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1172&q=80"
                        alt="Students at Mercy Dew School">
                </div>
            </div>
        </div>
    </section>

    <!-- Age Groups Section -->
    <section class="age-groups">
        <div class="container">
            <div class="section-title" data-aos="fade-up">
                <h2>Our Educational Programs</h2>
            </div>
            <div class="age-groups-container">
                <div class="age-card" data-aos="fade-up" data-aos-delay="100" data-age="early-years">
                    <div class="age-icon">
                        <i class="fas fa-baby"></i>
                    </div>
                    <h3>Kindergarten</h3>
                    <p>KG1-KG3: Building strong foundations through play-based learning and structured activities that foster curiosity and creativity.</p>
                    <button class="btn" style="padding: 0.5rem 1.5rem; font-size: 0.9rem;">Learn More</button>
                </div>
                <div class="age-card" data-aos="fade-up" data-aos-delay="200" data-age="primary">
                    <div class="age-icon">
                        <i class="fas fa-child"></i>
                    </div>
                    <h3>Primary</h3>
                    <p>Basic 1-5: Developing academic excellence, critical thinking, and character through a comprehensive curriculum.</p>
                    <button class="btn" style="padding: 0.5rem 1.5rem; font-size: 0.9rem;">Learn More</button>
                </div>
                <div class="age-card" data-aos="fade-up" data-aos-delay="300" data-age="junior-secondary">
                    <div class="age-icon">
                        <i class="fas fa-user-graduate"></i>
                    </div>
                    <h3>Junior Secondary</h3>
                    <p>3-year program: Preparing students for senior secondary with a broad-based curriculum and foundational knowledge.</p>
                    <button class="btn" style="padding: 0.5rem 1.5rem; font-size: 0.9rem;">Learn More</button>
                </div>
                <div class="age-card" data-aos="fade-up" data-aos-delay="400" data-age="senior-secondary">
                    <div class="age-icon">
                        <i class="fas fa-graduation-cap"></i>
                    </div>
                    <h3>Senior Secondary</h3>
                    <p>3-year program: Specialized programs preparing students for higher education and career paths with advanced academic opportunities.</p>
                    <button class="btn" style="padding: 0.5rem 1.5rem; font-size: 0.9rem;">Learn More</button>
                </div>
            </div>
        </div>
    </section>

    <!-- Programs Section -->
    <section class="programs">
        <div class="container">
            <div class="section-title" data-aos="fade-up">
                <h2>Our Educational Approach</h2>
            </div>
            <div class="programs-container">
                <div class="program-card" data-aos="fade-up" data-aos-delay="100" data-program="stem">
                    <div class="card-image">
                        <img src="https://images.unsplash.com/photo-1532094349884-543bc11b234d?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1170&q=80"
                            alt="E-Learning">
                    </div>
                    <div class="card-content">
                        <h3>E-Learning & CBT</h3>
                        <p>Preparing students for the digital age with computer-based training and e-learning platforms, ensuring they're ready for all external CBT examinations.</p>
                        <div>
                            <span class="program-tag tag-academic">Technology</span>
                            <span class="program-tag tag-creative">Innovation</span>
                        </div>
                    </div>
                </div>
                <div class="program-card" data-aos="fade-up" data-aos-delay="200" data-program="arts">
                    <div class="card-image">
                        <img src="https://images.unsplash.com/photo-1546410531-bb4caa6b424d?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1171&q=80"
                            alt="World Class Education">
                    </div>
                    <div class="card-content">
                        <h3>World Class Standards</h3>
                        <p>Implementing world-class teaching methods and current revised curriculum to ensure our students can compete at any level globally.</p>
                        <div>
                            <span class="program-tag tag-creative">Excellence</span>
                            <span class="program-tag tag-sports">Quality</span>
                        </div>
                    </div>
                </div>
                <div class="program-card" data-aos="fade-up" data-aos-delay="300" data-program="sports">
                    <div class="card-image">
                        <img src="https://images.unsplash.com/photo-1523050854058-8df90110c9f1?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1170&q=80"
                            alt="Diverse Learning">
                    </div>
                    <div class="card-content">
                        <h3>Diverse Learning</h3>
                        <p>Providing diversity in learning to create impactful students who are well-rounded and prepared for the challenges of the modern world.</p>
                        <div>
                            <span class="program-tag tag-sports">Diversity</span>
                            <span class="program-tag tag-academic">Impact</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Fun Facts Section -->
    <section class="fun-facts">
        <div class="container">
            <div class="section-title" data-aos="fade-up">
                <h2>Our School By Numbers</h2>
            </div>
            <div class="fun-facts-container">
                <div class="fun-fact" data-aos="fade-up" data-aos-delay="100">
                    <i class="fas fa-users"></i>
                    <h3>500+</h3>
                    <p>Students</p>
                </div>
                <div class="fun-fact" data-aos="fade-up" data-aos-delay="200">
                    <i class="fas fa-chalkboard-teacher"></i>
                    <h3>30+</h3>
                    <p>Dedicated Educators</p>
                </div>
                <div class="fun-fact" data-aos="fade-up" data-aos-delay="300">
                    <i class="fas fa-laptop"></i>
                    <h3>100%</h3>
                    <p>CBT Prepared</p>
                </div>
                <div class="fun-fact" data-aos="fade-up" data-aos-delay="400">
                    <i class="fas fa-trophy"></i>
                    <h3>15+</h3>
                    <p>Awards Won</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Activities Section -->
    <section class="activities">
        <div class="container">
            <div class="section-title" data-aos="fade-up">
                <h2>Our Core Values</h2>
            </div>
            <div class="activities-container">
                <div class="activity" data-aos="fade-right" data-activity="science-labs">
                    <div class="activity-icon">
                        <i class="fas fa-graduation-cap"></i>
                    </div>
                    <div class="activity-content">
                        <h3>Academic Excellence</h3>
                        <p>We provide world-class teaching with a focus on the current revised curriculum, ensuring our students can compete at any level.</p>
                    </div>
                </div>
                <div class="activity" data-aos="fade-left" data-activity="arts-center">
                    <div class="activity-icon">
                        <i class="fas fa-laptop-code"></i>
                    </div>
                    <div class="activity-content">
                        <h3>E-Learning</h3>
                        <p>We embrace technology with e-learning and computer-based training to prepare students for the digital future.</p>
                    </div>
                </div>
                <div class="activity" data-aos="fade-right" data-activity="library">
                    <div class="activity-icon">
                        <i class="fas fa-handshake"></i>
                    </div>
                    <div class="activity-content">
                        <h3>Integrity</h3>
                        <p>We are committed to eradicating examination malpractice and promoting honest academic achievement.</p>
                    </div>
                </div>
                <div class="activity" data-aos="fade-left" data-activity="playground">
                    <div class="activity-icon">
                        <i class="fas fa-heart"></i>
                    </div>
                    <div class="activity-content">
                        <h3>Passion for Education</h3>
                        <p>We have a genuine passion for providing quality education to children from all backgrounds.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Anthem and Pledge Section -->
    <section class="anthem-pledge">
        <div class="container">
            <div class="section-title" data-aos="fade-up">
                <h2>School Anthem</h2>
            </div>
            <div class="anthem-pledge-container">
                <div class="anthem" data-aos="fade-right">
                    <h3>School Anthem</h3>
                    <div class="anthem-content">
                        <p>Mercy dew school is the best school,<br>
                        is the best school in the world,<br>
                        greater heights and mind exploits<br>
                        is the portion of our school</p>
                        
                        <p>Self discipline and self confidence<br>
                        is the moral of our school,<br>
                        knowledge is light we learn to excel<br>
                        we are light and we shine bright</p>
                        
                        <p>Mercy dew school is the best school,<br>
                        is the best school in the world,<br>
                        greater heights and mind exploits<br>
                        is the portion of our school</p>
                        
                        <p>We are the learners of Mercy Dew school,<br>
                        We are the learners of mercy dew,<br>
                        we learn and create peace of mind<br>
                        come to us you will know that we are good,<br>
                        we are proud of Mercy Dew</p>
                        
                        <p>We live as one and share peace and love<br>
                        learning to excel is the best thing<br>
                        come to us you we know that we are good<br>
                        we are proud of Mercy Dew</p>
                        
                        <p>We are proud !<br>
                        We are proud !!<br>
                        We are proud!!!</p>
                    </div>
                </div>
                <div class="pledge" data-aos="fade-left">
                    <h3>Our Philosophy</h3>
                    <div class="pledge-content">
                        <p>At Mercy Dew School, our philosophy is simple yet powerful: <strong>Our students are learning to excel</strong>.</p>
                        
                        <p>This guiding principle shapes everything we do, from our curriculum design to our teaching methodologies. We believe that every child has the potential to achieve greatness when provided with the right environment, resources, and guidance.</p>
                        
                        <p>Our motto "WE LEARN TO EXCEL" reflects our commitment to:</p>
                        <ul>
                            <li>Providing diverse learning opportunities</li>
                            <li>Implementing world-class teaching standards</li>
                            <li>Embracing technology in education</li>
                            <li>Eradicating examination malpractice</li>
                            <li>Building a solid educational foundation</li>
                            <li>Preparing students for global competition</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section class="testimonials">
        <div class="container">
            <div class="section-title" data-aos="fade-up">
                <h2 style="color: white;">What Parents Say</h2>
            </div>
            <div class="testimonials-container">
                <div class="testimonial active">
                    <p class="testimonial-text">Mercy Dew School has transformed my child's approach to learning. The focus on e-learning and computer-based training has prepared her for the digital age in ways I couldn't have imagined.</p>
                    <div class="testimonial-author">
                        <div class="author-image">
                            <img src="https://via.placeholder.com/70" alt="Parent">
                        </div>
                        <div class="author-info">
                            <h4>Mrs. Johnson</h4>
                            <p>Parent of Primary Student</p>
                        </div>
                    </div>
                </div>
                <div class="testimonial">
                    <p class="testimonial-text">The school's commitment to eradicating examination malpractice while providing world-class education is truly remarkable. My children are learning with integrity and excellence.</p>
                    <div class="testimonial-author">
                        <div class="author-image">
                            <img src="https://via.placeholder.com/70" alt="Parent">
                        </div>
                        <div class="author-info">
                            <h4>Mr. Adebayo</h4>
                            <p>Parent of Secondary Student</p>
                        </div>
                    </div>
                </div>
                <div class="testimonial">
                    <p class="testimonial-text">As an educator myself, I appreciate how Mercy Dew School balances academic rigor with character development. The focus on "learning to excel" creates well-rounded individuals.</p>
                    <div class="testimonial-author">
                        <div class="author-image">
                            <img src="https://via.placeholder.com/70" alt="Parent">
                        </div>
                        <div class="author-info">
                            <h4>Dr. (Mrs) Okoro</h4>
                            <p>Parent & Educator</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="testimonial-nav">
                <span class="nav-dot active" data-index="0"></span>
                <span class="nav-dot" data-index="1"></span>
                <span class="nav-dot" data-index="2"></span>
            </div>
        </div>
    </section>

    <!-- Gallery Section -->
    <section class="gallery">
        <div class="container">
            <div class="section-title" data-aos="fade-up">
                <h2>Life at Mercy Dew School</h2>
            </div>
            <div class="gallery-container">
                <div class="gallery-item" data-aos="zoom-in" data-aos-delay="100">
                    <img src="https://images.unsplash.com/photo-1588072432836-e10032774350?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1172&q=80"
                        alt="Classroom activities">
                    <div class="gallery-overlay">
                        <h4>Interactive Learning</h4>
                    </div>
                </div>
                <div class="gallery-item" data-aos="zoom-in" data-aos-delay="200">
                    <img src="https://images.unsplash.com/photo-1498243691581-b145c3f54a5a?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1170&q=80"
                        alt="Students collaborating">
                    <div class="gallery-overlay">
                        <h4>Collaborative Learning</h4>
                    </div>
                </div>
                <div class="gallery-item" data-aos="zoom-in" data-aos-delay="300">
                    <img src="https://images.unsplash.com/photo-1546410531-bb4caa6b424d?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1171&q=80"
                        alt="E-learning">
                    <div class="gallery-overlay">
                        <h4>E-Learning</h4>
                    </div>
                </div>
                <div class="gallery-item" data-aos="zoom-in" data-aos-delay="400">
                    <img src="https://images.unsplash.com/photo-1523050854058-8df90110c9f1?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1170&q=80"
                        alt="School facilities">
                    <div class="gallery-overlay">
                        <h4>Modern Facilities</h4>
                    </div>
                </div>
                <div class="gallery-item" data-aos="zoom-in" data-aos-delay="500">
                    <img src="https://images.unsplash.com/photo-1532094349884-543bc11b234d?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1170&q=80"
                        alt="Academic excellence">
                    <div class="gallery-overlay">
                        <h4>Academic Excellence</h4>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="cta">
        <div class="container">
            <h2 data-aos="fade-up">Ready to Join the Mercy Dew School Family?</h2>
            <p data-aos="fade-up" data-aos-delay="100">Empower your child to excel with world-class education, e-learning, and values that prepare them for success in an ever-changing world. Applications are now open for all programs!</p>
            <button class="btn" id="applyAdmissionBtn" data-aos="fade-up" data-aos-delay="200">Apply for Admission</button>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="footer-container">
                <div class="footer-about">
                    <h3>About Mercy Dew School</h3>
                    <p>A world-class standard school with diversity in learning, grooming students from kindergarten to secondary education with a focus on e-learning and computer-based training.</p>
                    <div class="social-links">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                        <a href="#"><i class="fab fa-youtube"></i></a>
                    </div>
                </div>
                <div class="footer-links">
                    <h3>Quick Links</h3>
                    <ul>
                        <li><a href="#" class="footer-link" data-page="about">About Us</a></li>
                        <li><a href="#" class="footer-link" data-page="programs">Our Programs</a></li>
                        <li><a href="#" class="footer-link" data-page="admissions">Admissions</a></li>
                        <li><a href="#" class="footer-link" data-page="facilities">Facilities</a></li>
                        <li><a href="#" class="footer-link" data-page="gallery">Photo Gallery</a></li>
                        <li><a href="#" class="footer-link" data-page="contact">Contact Us</a></li>
                        <li><a href="#" target="_blank">Student Portal</a></li>
                    </ul>
                </div>
                <div class="footer-contact">
                    <h3>Get in Touch</h3>
                    <div class="contact-item">
                        <i class="fas fa-map-marker-alt"></i>
                        <div>
                            <p>3 Sofoluw Street, Off Lajorin Road</p>
                            <p>Behind PS General Drug Center</p>
                            <p>Muritala Way, Sabo Oke, Ilorin, Kwara State</p>
                        </div>
                    </div>
                    <div class="contact-item">
                        <i class="fas fa-phone"></i>
                        <div>
                            <p>08035270494</p>
                            <p>08079845984</p>
                        </div>
                    </div>
                    <div class="contact-item">
                        <i class="fas fa-envelope"></i>
                        <div>
                            <p>info@mercydewschool.edu.ng</p>
                            <p>admissions@mercydewschool.edu.ng</p>
                        </div>
                    </div>
                </div>
                <div class="footer-gallery">
                    <h3>Gallery</h3>
                    <div class="gallery-grid">
                        <div class="gallery-item-small">
                            <img src="https://images.unsplash.com/photo-1588072432836-e10032774350?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1172&q=80"
                                alt="School Gallery">
                        </div>
                        <div class="gallery-item-small">
                            <img src="https://images.unsplash.com/photo-1498243691581-b145c3f54a5a?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1170&q=80"
                                alt="School Gallery">
                        </div>
                        <div class="gallery-item-small">
                            <img src="https://images.unsplash.com/photo-1546410531-bb4caa6b424d?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1171&q=80"
                                alt="School Gallery">
                        </div>
                        <div class="gallery-item-small">
                            <img src="https://images.unsplash.com/photo-1523050854058-8df90110c9f1?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1170&q=80"
                                alt="School Gallery">
                        </div>
                        <div class="gallery-item-small">
                            <img src="https://images.unsplash.com/photo-1532094349884-543bc11b234d?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1170&q=80"
                                alt="School Gallery">
                        </div>
                        <div class="gallery-item-small">
                            <img src="https://images.unsplash.com/photo-1503676260728-1c00da094a0b?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1170&q=80"
                                alt="School Gallery">
                        </div>
                    </div>
                </div>
            </div>
            <div class="copyright">
                <p>&copy; 2023 Mercy Dew School. All Rights Reserved.</p>
            </div>
        </div>
    </footer>

    <!-- Modals -->
    <!-- About Modal -->
    <div class="modal" id="aboutModal">
        <div class="modal-content">
            <div class="modal-header">
                <h2>About Mercy Dew School</h2>
                <button class="modal-close">&times;</button>
            </div>
            <div class="modal-body">
                <h3>Our Story</h3>
                <p>We have passion for a good standard education. We discovered the decay in our society through examination malpractice, and we glamor for a good education of children from all classes - from foundation which is kindergarten to secondary school certificate. Once they are groomed for world class standard, all forms of examination malpractice will be eradicated.</p>
                <p>We are passionate about growing along with your class, not growing sackings in school.</p>

                <h3>Our Mission</h3>
                <p>To get children good education background from kindergarten to secondary education in order to build them with standard background to eradicate illiteracy in our society.</p>

                <h3>Our Vision</h3>
                <p>To groom students in a world standard-based education, for our society to be free from examination malpractice.</p>

                <h3>Our Values</h3>
                <p>We provide world-class teaching and trust that we teach standard and current revised curriculum which we know our wards can face world-class competition at any level in our school.</p>

                <h3>Our Philosophy</h3>
                <p>Our students are learning to excel.</p>

                <h3>Our Programs</h3>
                <p>KG1-KG3, Basic 1-5, Junior School (3 years), Senior School (3 years)</p>

                <h3>Our Facilities</h3>
                <p>Well-researched, world-class, state-of-the-art facilities including e-learning classrooms and computer labs.</p>

                <h3>School Anthem</h3>
                <p>Our school anthem reflects our commitment to excellence, self-discipline, and confidence in our students.</p>

                <div style="margin-top: 2rem;">
                    <button class="btn" id="viewAnthemPledgeBtn">View School Anthem</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Programs Modal -->
    <div class="modal" id="programsModal">
        <div class="modal-content">
            <div class="modal-header">
                <h2>Our Programs</h2>
                <button class="modal-close">&times;</button>
            </div>
            <div class="modal-body">
                <h3>Comprehensive Educational Programs</h3>
                <p>At Mercy Dew School, we offer a continuum of educational programs designed to nurture students from their earliest years through to secondary education.</p>

                <h4>Kindergarten (KG1-KG3)</h4>
                <p>Our youngest learners are nurtured in a stimulating environment that encourages exploration and early development through age-appropriate activities and play-based learning.</p>

                <h4>Primary (Basic 1-5)</h4>
                <p>Developing academic excellence, critical thinking, and character through a comprehensive curriculum that balances core subjects with creative and physical education.</p>

                <h4>Junior Secondary (3 years)</h4>
                <p>Building on primary education with a broad-based curriculum that prepares students for senior secondary education and specialized subjects.</p>

                <h4>Senior Secondary (3 years)</h4>
                <p>Preparing students for higher education and career paths with specialized programs, career guidance, and advanced academic opportunities.</p>

                <h3>Our Educational Approach</h3>
                <p>Our curriculum focuses on world-class standards and current revised curriculum, providing students with the knowledge and skills needed to compete globally. We focus on:</p>
                <ul>
                    <li>E-learning and computer-based training</li>
                    <li>Diverse learning methodologies</li>
                    <li>World-class teaching standards</li>
                    <li>Eradication of examination malpractice</li>
                    <li>Preparation for external CBT examinations</li>
                </ul>
            </div>
        </div>
    </div>

    <!-- Admissions Modal -->
    <div class="modal" id="admissionsModal">
        <div class="modal-content">
            <div class="modal-header">
                <h2>Admissions</h2>
                <button class="modal-close">&times;</button>
            </div>
            <div class="modal-body">
                <h3>Join Our Community of Excellence</h3>
                <p>We welcome students who are eager to learn and excel in a world-class educational environment. Our admissions process is designed to identify students who will thrive in our learning environment.</p>

                <h3>Admission Process</h3>
                <h4>Step 1: Inquiry</h4>
                <p>Begin by contacting our admissions office or filling out our inquiry form. We'll provide you with detailed information about our programs and answer any questions you may have.</p>

                <h4>Step 2: School Visit</h4>
                <p>Schedule a tour of our campus to experience our learning environment firsthand. You'll meet our dedicated staff and see our world-class facilities.</p>

                <h4>Step 3: Application</h4>
                <p>Complete the application form and submit the required documents, including previous academic records, birth certificate, and passport photographs.</p>

                <h4>Step 4: Assessment</h4>
                <p>Depending on the program, your child may be invited for an assessment or interaction session to help us understand their learning needs and potential.</p>

                <h4>Step 5: Admission Decision</h4>
                <p>Our admissions team will review the application and inform you of the decision. If accepted, you'll receive an offer letter with further instructions.</p>

                <h4>Step 6: Enrollment</h4>
                <p>Complete the enrollment process by submitting the required fees and documents. Your child is now ready to begin their journey at Mercy Dew School!</p>

                <h3>Programs Offered</h3>
                <ul>
                    <li>Kindergarten (KG1-KG3)</li>
                    <li>Primary (Basic 1-5)</li>
                    <li>Junior Secondary (3 years)</li>
                    <li>Senior Secondary (3 years)</li>
                </ul>

                <div style="margin-top: 2rem;">
                    <button class="btn" id="startApplicationBtn">Start Application</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Facilities Modal -->
    <div class="modal" id="facilitiesModal">
        <div class="modal-content">
            <div class="modal-header">
                <h2>Our Facilities</h2>
                <button class="modal-close">&times;</button>
            </div>
            <div class="modal-body">
                <h3>World-Class Learning Environment</h3>
                <p>At Mercy Dew School, we've created a stimulating and safe environment where students can learn, grow, and develop into well-rounded individuals. Our facilities are designed to support our educational philosophy and enhance the learning experience.</p>

                <h3>Academic Facilities</h3>
                <h4>Modern Classrooms</h4>
                <p>Our bright, well-equipped classrooms are designed to inspire learning and collaboration. Each classroom is equipped with modern teaching aids and resources.</p>

                <h4>E-Learning Labs</h4>
                <p>State-of-the-art computer labs with high-speed internet ensure our students develop essential digital literacy skills and are prepared for computer-based testing.</p>

                <h4>Library and Resource Center</h4>
                <p>Our library is a treasure trove of knowledge with a diverse collection of books, digital resources, and comfortable reading spaces that support research and leisure reading.</p>

                <h3>Creative and Performing Arts Facilities</h3>
                <h4>Art Studios</h4>
                <p>Spacious art studios equipped with a variety of materials allow students to explore painting, drawing, sculpture, and crafts.</p>

                <h4>Music and Drama Rooms</h4>
                <p>Dedicated spaces for music and drama activities help students develop their creative talents and self-expression.</p>

                <h3>Sports and Physical Development</h3>
                <h4>Sports Fields</h4>
                <p>Our campus includes well-maintained fields for various sports, promoting physical fitness, teamwork, and healthy competition.</p>

                <h4>Playgrounds</h4>
                <p>Age-appropriate playgrounds with safe, modern equipment provide spaces for younger children to develop motor skills and socialize through play.</p>

                <h3>Specialized Facilities</h3>
                <h4>Science Laboratories</h4>
                <p>Well-equipped laboratories provide hands-on learning experiences for students, allowing them to explore scientific concepts through practical experiments.</p>

                <h4>Multipurpose Hall</h4>
                <p>A spacious hall for assemblies, performances, and special events that bring our school community together.</p>
            </div>
        </div>
    </div>

    <!-- Gallery Modal -->
    <div class="modal" id="galleryModal">
        <div class="modal-content">
            <div class="modal-header">
                <h2>Photo Gallery</h2>
                <button class="modal-close">&times;</button>
            </div>
            <div class="modal-body">
                <div class="gallery-container">
                    <div class="gallery-item">
                        <img src="https://images.unsplash.com/photo-1588072432836-e10032774350?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1172&q=80"
                            alt="Classroom activities">
                        <div class="gallery-overlay">
                            <h4>Interactive Learning</h4>
                        </div>
                    </div>
                    <div class="gallery-item">
                        <img src="https://images.unsplash.com/photo-1498243691581-b145c3f54a5a?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1170&q=80"
                            alt="Students collaborating">
                        <div class="gallery-overlay">
                            <h4>Collaborative Projects</h4>
                        </div>
                    </div>
                    <div class="gallery-item">
                        <img src="https://images.unsplash.com/photo-1546410531-bb4caa6b424d?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1171&q=80"
                            alt="E-learning">
                        <div class="gallery-overlay">
                            <h4>E-Learning</h4>
                        </div>
                    </div>
                    <div class="gallery-item">
                        <img src="https://images.unsplash.com/photo-1523050854058-8df90110c9f1?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1170&q=80"
                            alt="School facilities">
                        <div class="gallery-overlay">
                            <h4>Modern Facilities</h4>
                        </div>
                    </div>
                    <div class="gallery-item">
                        <img src="https://images.unsplash.com/photo-1532094349884-543bc11b234d?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1170&q=80"
                            alt="Academic excellence">
                        <div class="gallery-overlay">
                            <h4>Academic Excellence</h4>
                        </div>
                    </div>
                    <div class="gallery-item">
                        <img src="https://images.unsplash.com/photo-1503676260728-1c00da094a0b?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1170&q=80"
                            alt="School event">
                        <div class="gallery-overlay">
                            <h4>School Events</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Contact Modal -->
    <div class="modal" id="contactModal">
        <div class="modal-content">
            <div class="modal-header">
                <h2>Contact Us</h2>
                <button class="modal-close">&times;</button>
            </div>
            <div class="modal-body">
                <h3>Get in Touch</h3>
                <p>We'd love to hear from you! Whether you have questions about our programs, want to schedule a visit, or need more information, our team is here to help.</p>

                <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 2rem; margin: 2rem 0;">
                    <div>
                        <h4>Contact Information</h4>
                        <div class="contact-item">
                            <i class="fas fa-map-marker-alt"></i>
                            <div>
                                <p>3 Sofoluw Street, Off Lajorin Road</p>
                                <p>Behind PS General Drug Center</p>
                                <p>Muritala Way, Sabo Oke, Ilorin, Kwara State</p>
                            </div>
                        </div>
                        <div class="contact-item">
                            <i class="fas fa-phone"></i>
                            <div>
                                <p>08035270494</p>
                                <p>08079845984</p>
                            </div>
                        </div>
                        <div class="contact-item">
                            <i class="fas fa-envelope"></i>
                            <div>
                                <p>info@mercydewschool.edu.ng</p>
                                <p>admissions@mercydewschool.edu.ng</p>
                            </div>
                        </div>
                    </div>

                    <div>
                        <h4>Send us a Message</h4>
                        <form id="contactForm">
                            <div class="form-group">
                                <label for="name">Your Name</label>
                                <input type="text" id="name" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="email">Email Address</label>
                                <input type="email" id="email" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="subject">Subject</label>
                                <input type="text" id="subject" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="message">Message</label>
                                <textarea id="message" class="form-control" required></textarea>
                            </div>
                            <button type="submit" class="btn">Send Message</button>
                        </form>
                    </div>
                </div>

                <h3>Our Location</h3>
                <div
                    style="height: 300px; background-color: #f1f1f1; border-radius: 10px; display: flex; align-items: center; justify-content: center; margin-top: 1rem;">
                    <p><i class="fas fa-map-marked-alt"
                            style="font-size: 2rem; color: var(--primary-color); margin-right: 1rem;"></i> Map of Mercy Dew School Location</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Anthem Modal -->
    <div class="modal" id="anthemPledgeModal">
        <div class="modal-content">
            <div class="modal-header">
                <h2>School Anthem</h2>
                <button class="modal-close">&times;</button>
            </div>
            <div class="modal-body">
                <div class="anthem-pledge-container">
                    <div class="anthem">
                        <h3>School Anthem</h3>
                        <div class="anthem-content">
                            <p>Mercy dew school is the best school,<br>
                            is the best school in the world,<br>
                            greater heights and mind exploits<br>
                            is the portion of our school</p>
                            
                            <p>Self discipline and self confidence<br>
                            is the moral of our school,<br>
                            knowledge is light we learn to excel<br>
                            we are light and we shine bright</p>
                            
                            <p>Mercy dew school is the best school,<br>
                            is the best school in the world,<br>
                            greater heights and mind exploits<br>
                            is the portion of our school</p>
                            
                            <p>We are the learners of Mercy Dew school,<br>
                            We are the learners of mercy dew,<br>
                            we learn and create peace of mind<br>
                            come to us you will know that we are good,<br>
                            we are proud of Mercy Dew</p>
                            
                            <p>We live as one and share peace and love<br>
                            learning to excel is the best thing<br>
                            come to us you we know that we are good<br>
                            we are proud of Mercy Dew</p>
                            
                            <p>We are proud !<br>
                            We are proud !!<br>
                            We are proud!!!</p>
                        </div>
                    </div>
                    <div class="pledge">
                        <h3>Our Philosophy</h3>
                        <div class="pledge-content">
                            <p>At Mercy Dew School, our philosophy is simple yet powerful: <strong>Our students are learning to excel</strong>.</p>
                            
                            <p>This guiding principle shapes everything we do, from our curriculum design to our teaching methodologies. We believe that every child has the potential to achieve greatness when provided with the right environment, resources, and guidance.</p>
                            
                            <p>Our motto "WE LEARN TO EXCEL" reflects our commitment to:</p>
                            <ul>
                                <li>Providing diverse learning opportunities</li>
                                <li>Implementing world-class teaching standards</li>
                                <li>Embracing technology in education</li>
                                <li>Eradicating examination malpractice</li>
                                <li>Building a solid educational foundation</li>
                                <li>Preparing students for global competition</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Application Form Modal -->
    <div class="modal" id="applicationModal">
        <div class="modal-content">
            <div class="modal-header">
                <h2>Admission Application Form</h2>
                <button class="modal-close">&times;</button>
            </div>
            <div class="modal-body">
                <h3>Apply to Mercy Dew School</h3>
                <p>Please complete the form below to apply for admission. All fields marked with an asterisk (*) are required.</p>

                <form id="applicationForm">
                    <div class="form-group">
                        <label for="studentName">Student's Full Name *</label>
                        <input type="text" id="studentName" class="form-control" required>
                    </div>

                    <div class="form-row">
                        <div class="form-group">
                            <label for="dateOfBirth">Date of Birth *</label>
                            <input type="date" id="dateOfBirth" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="gender">Gender *</label>
                            <select id="gender" class="form-control" required>
                                <option value="">Select Gender</option>
                                <option value="male">Male</option>
                                <option value="female">Female</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="program">Program Applying For *</label>
                        <select id="program" class="form-control" required>
                            <option value="">Select Program</option>
                            <option value="kg1">KG1</option>
                            <option value="kg2">KG2</option>
                            <option value="kg3">KG3</option>
                            <option value="basic1">Basic 1</option>
                            <option value="basic2">Basic 2</option>
                            <option value="basic3">Basic 3</option>
                            <option value="basic4">Basic 4</option>
                            <option value="basic5">Basic 5</option>
                            <option value="jss1">JSS 1</option>
                            <option value="jss2">JSS 2</option>
                            <option value="jss3">JSS 3</option>
                            <option value="ss1">SS 1</option>
                            <option value="ss2">SS 2</option>
                            <option value="ss3">SS 3</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="parentName">Parent/Guardian Full Name *</label>
                        <input type="text" id="parentName" class="form-control" required>
                    </div>

                    <div class="form-row">
                        <div class="form-group">
                            <label for="parentEmail">Email Address *</label>
                            <input type="email" id="parentEmail" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="parentPhone">Phone Number *</label>
                            <input type="tel" id="parentPhone" class="form-control" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="address">Residential Address *</label>
                        <textarea id="address" class="form-control" required></textarea>
                    </div>

                    <div class="form-group">
                        <label for="additionalInfo">Additional Information</label>
                        <textarea id="additionalInfo" class="form-control"
                            placeholder="Any other information you would like to share"></textarea>
                    </div>

                    <div class="form-group">
                        <div style="display: flex; align-items: flex-start;">
                            <input type="checkbox" id="agreement" style="margin-right: 10px; margin-top: 5px;" required>
                            <label for="agreement">I certify that the information provided is accurate and complete. I understand that any false information may result in disqualification of the application. *</label>
                        </div>
                    </div>

                    <div style="margin-top: 2rem;">
                        <button type="submit" class="btn">Submit Application</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Schedule Visit Modal -->
    <div class="modal" id="scheduleVisitModal">
        <div class="modal-content">
            <div class="modal-header">
                <h2>Schedule a School Visit</h2>
                <button class="modal-close">&times;</button>
            </div>
            <div class="modal-body">
                <h3>Experience Mercy Dew School</h3>
                <p>We invite you to visit our campus and experience our learning environment. During your visit, you'll have the opportunity to tour our facilities, observe classes, and meet our dedicated staff.</p>

                <form id="visitForm">
                    <div class="form-group">
                        <label for="visitName">Your Full Name *</label>
                        <input type="text" id="visitName" class="form-control" required>
                    </div>

                    <div class="form-group">
                        <label for="visitEmail">Email Address *</label>
                        <input type="email" id="visitEmail" class="form-control" required>
                    </div>

                    <div class="form-group">
                        <label for="visitPhone">Phone Number *</label>
                        <input type="tel" id="visitPhone" class="form-control" required>
                    </div>

                    <div class="form-group">
                        <label for="visitDate">Preferred Visit Date *</label>
                        <input type="date" id="visitDate" class="form-control" required>
                    </div>

                    <div class="form-group">
                        <label for="visitTime">Preferred Visit Time *</label>
                        <select id="visitTime" class="form-control" required>
                            <option value="">Select a time</option>
                            <option value="9:00 AM">9:00 AM</option>
                            <option value="10:00 AM">10:00 AM</option>
                            <option value="11:00 AM">11:00 AM</option>
                            <option value="1:00 PM">1:00 PM</option>
                            <option value="2:00 PM">2:00 PM</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="visitQuestions">Questions or Special Requests</label>
                        <textarea id="visitQuestions" class="form-control"></textarea>
                    </div>

                    <div style="margin-top: 2rem;">
                        <button type="submit" class="btn">Schedule Visit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Navigation Drawer -->
    <div class="nav-drawer" id="navDrawer">
        <div class="drawer-header">
            <h3>Menu</h3>
            <button class="drawer-close" id="drawerCloseBtn">&times;</button>
        </div>
        <div class="drawer-content">
            <ul class="drawer-menu">
                <li><a href="#" class="drawer-link" data-page="home"><i class="fas fa-home"></i> Home</a></li>
                <li><a href="#" class="drawer-link" data-page="about"><i class="fas fa-info-circle"></i> About Us</a>
                </li>
                <li><a href="#" class="drawer-link" data-page="programs"><i class="fas fa-book"></i> Programs</a></li>
                <li><a href="#" class="drawer-link" data-page="admissions"><i class="fas fa-user-graduate"></i>
                        Admissions</a></li>
                <li><a href="#" class="drawer-link" data-page="facilities"><i class="fas fa-school"></i> Facilities</a>
                </li>
                <li><a href="#" class="drawer-link" data-page="gallery"><i class="fas fa-images"></i> Gallery</a></li>
                <li><a href="#" class="drawer-link" data-page="contact"><i class="fas fa-envelope"></i> Contact Us</a>
                </li>
                <li><a href="#" target="_blank"><i class="fas fa-sign-in-alt"></i> Student Portal</a></li>
            </ul>
        </div>
    </div>

    <!-- Bottom Sheet for Mobile -->
    <div class="bottom-sheet" id="bottomSheet">
        <div class="sheet-header">
            <div class="sheet-handle" id="sheetHandle"></div>
        </div>
        <div class="sheet-title">
            <h3 id="sheetTitle">Title</h3>
        </div>
        <div class="sheet-content" id="sheetContent">
            <!-- Content will be dynamically inserted here -->
        </div>
    </div>

    <!-- Scripts -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        // Initialize AOS
        AOS.init({
            duration: 1000,
            once: true
        });

        // DOM Elements
        const mobileMenuBtn = document.getElementById('mobileMenuBtn');
        const navDrawer = document.getElementById('navDrawer');
        const drawerCloseBtn = document.getElementById('drawerCloseBtn');
        const bottomSheet = document.getElementById('bottomSheet');
        const sheetHandle = document.getElementById('sheetHandle');
        const sheetTitle = document.getElementById('sheetTitle');
        const sheetContent = document.getElementById('sheetContent');

        // Modal Elements
        const modals = document.querySelectorAll('.modal');
        const modalCloseBtns = document.querySelectorAll('.modal-close');

        // Navigation Links
        const navLinks = document.querySelectorAll('.nav-link');
        const drawerLinks = document.querySelectorAll('.drawer-link');
        const footerLinks = document.querySelectorAll('.footer-link');

        // Button Elements
        const joinFamilyBtn = document.getElementById('joinFamilyBtn');
        const scheduleVisitBtn = document.getElementById('scheduleVisitBtn');
        const discoverStoryBtn = document.getElementById('discoverStoryBtn');
        const applyAdmissionBtn = document.getElementById('applyAdmissionBtn');
        const startApplicationBtn = document.getElementById('startApplicationBtn');
        const viewAnthemPledgeBtn = document.getElementById('viewAnthemPledgeBtn');

        // Age Card Elements
        const ageCards = document.querySelectorAll('.age-card');

        // Program Card Elements
        const programCards = document.querySelectorAll('.program-card');

        // Activity Elements
        const activities = document.querySelectorAll('.activity');

        // Gallery Elements
        const galleryItems = document.querySelectorAll('.gallery-item');
        const galleryItemSmalls = document.querySelectorAll('.gallery-item-small');

        // Forms
        const contactForm = document.getElementById('contactForm');
        const applicationForm = document.getElementById('applicationForm');
        const visitForm = document.getElementById('visitForm');

        // Testimonial Elements
        const testimonials = document.querySelectorAll('.testimonial');
        const navDots = document.querySelectorAll('.nav-dot');
        let currentTestimonial = 0;

        // Mobile Menu Toggle
        mobileMenuBtn.addEventListener('click', () => {
            navDrawer.classList.add('open');
        });

        drawerCloseBtn.addEventListener('click', () => {
            navDrawer.classList.remove('open');
        });

        // Close drawer when clicking on a link
        drawerLinks.forEach(link => {
            link.addEventListener('click', () => {
                navDrawer.classList.remove('open');
                const page = link.getAttribute('data-page');
                openPage(page);
            });
        });

        // Bottom Sheet Functionality
        sheetHandle.addEventListener('click', () => {
            bottomSheet.classList.toggle('open');
        });

        // Modal Functions
        function openModal(modalId) {
            const modal = document.getElementById(modalId);
            modal.classList.add('show');
            document.body.style.overflow = 'hidden';
        }

        function closeModal() {
            modals.forEach(modal => {
                modal.classList.remove('show');
            });
            document.body.style.overflow = '';
        }

        // Close modals when clicking the close button
        modalCloseBtns.forEach(btn => {
            btn.addEventListener('click', closeModal);
        });

        // Close modals when clicking outside the modal content
        modals.forEach(modal => {
            modal.addEventListener('click', (e) => {
                if (e.target === modal) {
                    closeModal();
                }
            });
        });

        // Page Navigation
        function openPage(page) {
            if (window.innerWidth <= 768) {
                // Use bottom sheet for mobile
                openBottomSheet(page);
            } else {
                // Use modal for desktop
                switch (page) {
                    case 'about':
                        openModal('aboutModal');
                        break;
                    case 'programs':
                        openModal('programsModal');
                        break;
                    case 'admissions':
                        openModal('admissionsModal');
                        break;
                    case 'facilities':
                        openModal('facilitiesModal');
                        break;
                    case 'gallery':
                        openModal('galleryModal');
                        break;
                    case 'contact':
                        openModal('contactModal');
                        break;
                    default:
                        closeModal();
                }
            }
        }

        // Bottom Sheet Content
        function openBottomSheet(page) {
            let title = '';
            let content = '';

            switch (page) {
                case 'about':
                    title = 'About Mercy Dew School';
                    content = `
                        <p>Mercy Dew School is a world-class standard school with diversity in learning, grooming students from kindergarten to secondary education with a focus on e-learning and computer-based training.</p>
                        <h4>Our Mission</h4>
                        <p>To get children good education background from kindergarten to secondary education in order to build them with standard background to eradicate illiteracy in our society.</p>
                        <h4>Our Vision</h4>
                        <p>To groom students in a world standard-based education, for our society to be free from examination malpractice.</p>
                        <button class="btn" id="aboutMoreBtn">Learn More</button>
                    `;
                    break;
                case 'programs':
                    title = 'Our Programs';
                    content = `
                        <p>We offer a continuum of educational programs designed to nurture students from their earliest years through to secondary education.</p>
                        <h4>Programs Offered</h4>
                        <ul>
                            <li>Kindergarten (KG1-KG3)</li>
                            <li>Primary (Basic 1-5)</li>
                            <li>Junior Secondary (3 years)</li>
                            <li>Senior Secondary (3 years)</li>
                        </ul>
                        <button class="btn" id="programsMoreBtn">Learn More</button>
                    `;
                    break;
                case 'admissions':
                    title = 'Admissions';
                    content = `
                        <p>Join our community of excellence and empower your child to learn and excel in a world-class educational environment.</p>
                        <h4>Admission Process</h4>
                        <ol>
                            <li>Inquiry</li>
                            <li>School Visit</li>
                            <li>Application</li>
                            <li>Assessment</li>
                            <li>Admission Decision</li>
                            <li>Enrollment</li>
                        </ol>
                        <button class="btn" id="admissionsMoreBtn">Learn More</button>
                        <button class="btn btn-outline" id="applyNowBtn">Apply Now</button>
                    `;
                    break;
                case 'facilities':
                    title = 'Our Facilities';
                    content = `
                        <p>Our world-class facilities are designed to support our educational philosophy and enhance the learning experience.</p>
                        <h4>Key Facilities</h4>
                        <ul>
                            <li>Modern Classrooms</li>
                            <li>E-Learning Labs</li>
                            <li>Library & Resource Center</li>
                            <li>Science Laboratories</li>
                            <li>Sports Fields</li>
                            <li>Art Studios</li>
                        </ul>
                        <button class="btn" id="facilitiesMoreBtn">Learn More</button>
                    `;
                    break;
                case 'gallery':
                    title = 'Photo Gallery';
                    content = `
                        <div style="display: grid; grid-template-columns: repeat(2, 1fr); gap: 10px;">
                            <img src="https://images.unsplash.com/photo-1588072432836-e10032774350?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1172&q=80" alt="School" style="width: 100%; height: 120px; object-fit: cover; border-radius: 8px;">
                            <img src="https://images.unsplash.com/photo-1498243691581-b145c3f54a5a?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1170&q=80" alt="Students" style="width: 100%; height: 120px; object-fit: cover; border-radius: 8px;">
                            <img src="https://images.unsplash.com/photo-1546410531-bb4caa6b424d?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1171&q=80" alt="E-learning" style="width: 100%; height: 120px; object-fit: cover; border-radius: 8px;">
                            <img src="https://images.unsplash.com/photo-1523050854058-8df90110c9f1?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1170&q=80" alt="Facilities" style="width: 100%; height: 120px; object-fit: cover; border-radius: 8px;">
                        </div>
                        <button class="btn" id="galleryMoreBtn">View Full Gallery</button>
                    `;
                    break;
                case 'contact':
                    title = 'Contact Us';
                    content = `
                        <div class="contact-item">
                            <i class="fas fa-map-marker-alt"></i>
                            <div>
                                <p>3 Sofoluw Street, Off Lajorin Road</p>
                                <p>Behind PS General Drug Center</p>
                                <p>Muritala Way, Sabo Oke, Ilorin, Kwara State</p>
                            </div>
                        </div>
                        <div class="contact-item">
                            <i class="fas fa-phone"></i>
                            <div>
                                <p>08035270494</p>
                                <p>08079845984</p>
                            </div>
                        </div>
                        <div class="contact-item">
                            <i class="fas fa-envelope"></i>
                            <div>
                                <p>info@mercydewschool.edu.ng</p>
                                <p>admissions@mercydewschool.edu.ng</p>
                            </div>
                        </div>
                        <button class="btn" id="contactMoreBtn">Send Message</button>
                        <button class="btn btn-outline" id="scheduleVisitSheetBtn">Schedule Visit</button>
                    `;
                    break;
                default:
                    bottomSheet.classList.remove('open');
                    return;
            }

            sheetTitle.textContent = title;
            sheetContent.innerHTML = content;
            bottomSheet.classList.add('open');

            // Add event listeners to buttons in bottom sheet
            setTimeout(() => {
                const aboutMoreBtn = document.getElementById('aboutMoreBtn');
                const programsMoreBtn = document.getElementById('programsMoreBtn');
                const admissionsMoreBtn = document.getElementById('admissionsMoreBtn');
                const applyNowBtn = document.getElementById('applyNowBtn');
                const facilitiesMoreBtn = document.getElementById('facilitiesMoreBtn');
                const galleryMoreBtn = document.getElementById('galleryMoreBtn');
                const contactMoreBtn = document.getElementById('contactMoreBtn');
                const scheduleVisitSheetBtn = document.getElementById('scheduleVisitSheetBtn');

                if (aboutMoreBtn) {
                    aboutMoreBtn.addEventListener('click', () => {
                        bottomSheet.classList.remove('open');
                        openModal('aboutModal');
                    });
                }

                if (programsMoreBtn) {
                    programsMoreBtn.addEventListener('click', () => {
                        bottomSheet.classList.remove('open');
                        openModal('programsModal');
                    });
                }

                if (admissionsMoreBtn) {
                    admissionsMoreBtn.addEventListener('click', () => {
                        bottomSheet.classList.remove('open');
                        openModal('admissionsModal');
                    });
                }

                if (applyNowBtn) {
                    applyNowBtn.addEventListener('click', () => {
                        bottomSheet.classList.remove('open');
                        openModal('applicationModal');
                    });
                }

                if (facilitiesMoreBtn) {
                    facilitiesMoreBtn.addEventListener('click', () => {
                        bottomSheet.classList.remove('open');
                        openModal('facilitiesModal');
                    });
                }

                if (galleryMoreBtn) {
                    galleryMoreBtn.addEventListener('click', () => {
                        bottomSheet.classList.remove('open');
                        openModal('galleryModal');
                    });
                }

                if (contactMoreBtn) {
                    contactMoreBtn.addEventListener('click', () => {
                        bottomSheet.classList.remove('open');
                        openModal('contactModal');
                    });
                }

                if (scheduleVisitSheetBtn) {
                    scheduleVisitSheetBtn.addEventListener('click', () => {
                        bottomSheet.classList.remove('open');
                        openModal('scheduleVisitModal');
                    });
                }
            }, 100);
        }

        // Navigation Link Click Handlers
        navLinks.forEach(link => {
            link.addEventListener('click', (e) => {
                e.preventDefault();
                const page = link.getAttribute('data-page');
                openPage(page);
            });
        });

        footerLinks.forEach(link => {
            link.addEventListener('click', (e) => {
                e.preventDefault();
                const page = link.getAttribute('data-page');
                openPage(page);
            });
        });

        // Button Click Handlers
        joinFamilyBtn.addEventListener('click', () => {
            openModal('admissionsModal');
        });

        scheduleVisitBtn.addEventListener('click', () => {
            openModal('scheduleVisitModal');
        });

        discoverStoryBtn.addEventListener('click', () => {
            openModal('aboutModal');
        });

        applyAdmissionBtn.addEventListener('click', () => {
            openModal('applicationModal');
        });

        startApplicationBtn.addEventListener('click', () => {
            closeModal();
            openModal('applicationModal');
        });

        viewAnthemPledgeBtn.addEventListener('click', () => {
            closeModal();
            openModal('anthemPledgeModal');
        });

        // Age Card Click Handlers
        ageCards.forEach(card => {
            card.addEventListener('click', () => {
                openModal('programsModal');
            });
        });

        // Program Card Click Handlers
        programCards.forEach(card => {
            card.addEventListener('click', () => {
                openModal('programsModal');
            });
        });

        // Activity Click Handlers
        activities.forEach(activity => {
            activity.addEventListener('click', () => {
                openModal('aboutModal');
            });
        });

        // Gallery Click Handlers
        galleryItems.forEach(item => {
            item.addEventListener('click', () => {
                openModal('galleryModal');
            });
        });

        galleryItemSmalls.forEach(item => {
            item.addEventListener('click', () => {
                openModal('galleryModal');
            });
        });

        // Form Handlers
        contactForm.addEventListener('submit', (e) => {
            e.preventDefault();
            // Show success message
            const formContainer = contactForm.parentElement;
            formContainer.innerHTML = `
                <div style="text-align: center; padding: 2rem;">
                    <i class="fas fa-check-circle" style="font-size: 3rem; color: var(--success-color); margin-bottom: 1rem;"></i>
                    <h3>Message Sent Successfully!</h3>
                    <p>Thank you for contacting Mercy Dew School. We have received your message and will get back to you shortly.</p>
                    <button class="btn" onclick="closeModal()">Close</button>
                </div>
            `;
        });

        applicationForm.addEventListener('submit', (e) => {
            e.preventDefault();
            // Show success message
            const formContainer = applicationForm.parentElement;
            formContainer.innerHTML = `
                <div style="text-align: center; padding: 2rem;">
                    <i class="fas fa-check-circle" style="font-size: 3rem; color: var(--success-color); margin-bottom: 1rem;"></i>
                    <h3>Application Submitted Successfully!</h3>
                    <p>Thank you for applying to Mercy Dew School. We have received your application and will contact you soon with the next steps.</p>
                    <button class="btn" onclick="closeModal()">Close</button>
                </div>
            `;
        });

        visitForm.addEventListener('submit', (e) => {
            e.preventDefault();
            // Show success message
            const formContainer = visitForm.parentElement;
            formContainer.innerHTML = `
                <div style="text-align: center; padding: 2rem;">
                    <i class="fas fa-check-circle" style="font-size: 3rem; color: var(--success-color); margin-bottom: 1rem;"></i>
                    <h3>Visit Scheduled Successfully!</h3>
                    <p>Thank you for scheduling a visit to Mercy Dew School. We have received your request and will confirm your visit shortly.</p>
                    <button class="btn" onclick="closeModal()">Close</button>
                </div>
            `;
        });

        // Testimonial Slider
        function showTestimonial(index) {
            testimonials.forEach(testimonial => {
                testimonial.classList.remove('active');
            });
            navDots.forEach(dot => {
                dot.classList.remove('active');
            });

            testimonials[index].classList.add('active');
            navDots[index].classList.add('active');
            currentTestimonial = index;
        }

        navDots.forEach((dot, index) => {
            dot.addEventListener('click', () => {
                showTestimonial(index);
            });
        });

        // Auto-rotate testimonials
        setInterval(() => {
            let nextIndex = (currentTestimonial + 1) % testimonials.length;
            showTestimonial(nextIndex);
        }, 5000);

        // Header scroll effect
        window.addEventListener('scroll', () => {
            const header = document.querySelector('header');
            if (window.scrollY > 100) {
                header.style.boxShadow = '0 5px 20px rgba(0, 0, 0, 0.1)';
            } else {
                header.style.boxShadow = '0 2px 15px rgba(0, 0, 0, 0.08)';
            }
        });

        // Add parallax effect to hero section
        window.addEventListener('scroll', () => {
            const scrollPosition = window.pageYOffset;
            const heroElements = document.querySelectorAll('.floating-element');

            heroElements.forEach((element, index) => {
                const speed = 0.5 + (index * 0.1);
                element.style.transform = `translateY(${scrollPosition * speed}px)`;
            });
        });

        // Close bottom sheet when clicking outside
        document.addEventListener('click', (e) => {
            if (bottomSheet.classList.contains('open') &&
                !bottomSheet.contains(e.target) &&
                e.target !== sheetHandle &&
                !e.target.closest('.nav-link') &&
                !e.target.closest('.footer-link')) {
                bottomSheet.classList.remove('open');
            }
        });
    </script>
</body>

</html>