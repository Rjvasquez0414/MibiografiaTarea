@extends('layouts.app')

@section('content')
    <!-- Hero Section -->
    <section class="experience-hero">
        <div class="container">
            <div class="hero-content fade-in">
                <h1 class="page-title">
                    <span class="title-highlight">Experiencia</span> Profesional
                </h1>
                <p class="hero-description">
                    Transformando ideas en soluciones digitales innovadoras!
                </p>
                <div class="hero-stats">
                    <div class="stat-item">
                        <span class="stat-number">4+</span>
                        <span class="stat-label">Proyectos Web</span>
                    </div>
                    <div class="stat-item">
                        <span class="stat-number">3+</span>
                        <span class="stat-label">Años de Experiencia</span>
                    </div>
                    <div class="stat-item">
                        <span class="stat-number">10+</span>
                        <span class="stat-label">Clientes Satisfechos</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Portfolio Section -->
    <section class="portfolio-section">
        <div class="container">
            <h2 class="section-title fade-in">
                <span class="title-decoration">Portafolio de Proyectos</span>
            </h2>
            
            <div class="projects-grid">
                <!-- Proyecto 1 -->
                <div class="project-card fade-in">
                    <div class="project-image">
                        <div class="project-overlay">
                            <i class="fas fa-gem"></i>
                        </div>
                    </div>
                    <div class="project-content">
                        <h3>Guacari Joyas</h3>
                        <p class="project-description">
                            E-commerce especializado en joyería fina. Plataforma completa con catálogo de productos, 
                            carrito de compras y sistema de pagos integrado.
                        </p>
                        <div class="project-tech">
                            <span class="tech-tag">Laravel</span>
                            <span class="tech-tag">MySQL</span>
                            <span class="tech-tag">JavaScript</span>
                            <span class="tech-tag">Bootstrap</span>
                        </div>
                        <div class="project-links">
                            <a href="https://guacarijoyas.com" target="_blank" class="project-link">
                                <i class="fas fa-external-link-alt"></i> Ver Proyecto
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Proyecto 2 -->
                <div class="project-card fade-in">
                    <div class="project-image">
                        <div class="project-overlay">
                            <i class="fas fa-futbol"></i>
                        </div>
                    </div>
                    <div class="project-content">
                        <h3>DAC Soccer Trainer</h3>
                        <p class="project-description">
                            Plataforma educativa para entrenamiento de fútbol. Sistema de gestión de contenidos, 
                            videos tutoriales y seguimiento de progreso.
                        </p>
                        <div class="project-tech">
                            <span class="tech-tag">PHP</span>
                            <span class="tech-tag">Vue.js</span>
                            <span class="tech-tag">API REST</span>
                            <span class="tech-tag">CSS3</span>
                        </div>
                        <div class="project-links">
                            <a href="https://dacsoccertrainer.com" target="_blank" class="project-link">
                                <i class="fas fa-external-link-alt"></i> Ver Proyecto
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Proyecto 3 -->
                <div class="project-card fade-in">
                    <div class="project-image">
                        <div class="project-overlay">
                            <i class="fas fa-mobile-alt"></i>
                        </div>
                    </div>
                    <div class="project-content">
                        <h3>Technova Cell</h3>
                        <p class="project-description">
                            Sitio web corporativo para empresa de tecnología móvil. Diseño moderno con enfoque 
                            en experiencia de usuario y optimización SEO.
                        </p>
                        <div class="project-tech">
                            <span class="tech-tag">WordPress</span>
                            <span class="tech-tag">PHP</span>
                            <span class="tech-tag">JavaScript</span>
                            <span class="tech-tag">Responsive Design</span>
                        </div>
                        <div class="project-links">
                            <a href="https://technovacell.com" target="_blank" class="project-link">
                                <i class="fas fa-external-link-alt"></i> Ver Proyecto
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Proyecto 4 -->
                <div class="project-card fade-in">
                    <div class="project-image">
                        <div class="project-overlay">
                            <i class="fas fa-church"></i>
                        </div>
                    </div>
                    <div class="project-content">
                        <h3>Arkai Iglesia</h3>
                        <p class="project-description">
                            Portal web institucional con sistema de gestión de eventos, blog integrado y 
                            plataforma de donaciones online.
                        </p>
                        <div class="project-tech">
                            <span class="tech-tag">Laravel</span>
                            <span class="tech-tag">Tailwind CSS</span>
                            <span class="tech-tag">Alpine.js</span>
                            <span class="tech-tag">MySQL</span>
                        </div>
                        <div class="project-links">
                            <a href="https://arkaiglesia.com" target="_blank" class="project-link">
                                <i class="fas fa-external-link-alt"></i> Ver Proyecto
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Expertise Areas Section -->
    <section class="expertise-section">
        <div class="container">
            <h2 class="section-title fade-in">
                <span class="title-decoration">Áreas de Especialización</span>
            </h2>
            
            <div class="expertise-grid">
                <div class="expertise-card fade-in">
                    <div class="expertise-icon">
                        <i class="fas fa-code"></i>
                    </div>
                    <h3>Desarrollo Web Full-Stack</h3>
                    <p>
                        Desarrollo completo de aplicaciones web desde el frontend hasta el backend, 
                        utilizando las tecnologías más modernas y mejores prácticas del mercado.
                    </p>
                    <ul class="expertise-list">
                        <li>Aplicaciones SPA y MPA</li>
                        <li>APIs RESTful</li>
                        <li>Bases de datos relacionales</li>
                        <li>Integración de terceros</li>
                    </ul>
                </div>

                <div class="expertise-card fade-in">
                    <div class="expertise-icon">
                        <i class="fas fa-robot"></i>
                    </div>
                    <h3>Automatización de Procesos</h3>
                    <p>
                        Creación de software especializado para automatizar procesos empresariales 
                        complejos, mejorando la eficiencia y reduciendo errores operativos.
                    </p>
                    <ul class="expertise-list">
                        <li>Scripts de automatización</li>
                        <li>Procesamiento de datos masivos</li>
                        <li>Workflows automatizados</li>
                        <li>Integración de sistemas</li>
                    </ul>
                </div>

                <div class="expertise-card fade-in">
                    <div class="expertise-icon">
                        <i class="fas fa-chart-line"></i>
                    </div>
                    <h3>Optimización de Campañas</h3>
                    <p>
                        Desarrollo de sistemas complejos para optimización y automatización de 
                        campañas publicitarias mediante integración con APIs de plataformas.
                    </p>
                    <ul class="expertise-list">
                        <li>Google Ads API</li>
                        <li>Facebook Marketing API</li>
                        <li>Analytics y reporting</li>
                        <li>Optimización automática</li>
                    </ul>
                </div>

                <div class="expertise-card fade-in">
                    <div class="expertise-icon">
                        <i class="fas fa-cloud"></i>
                    </div>
                    <h3>Google Cloud Platform</h3>
                    <p>
                        Experiencia en implementación y gestión de servicios en la nube, 
                        aprovechando la infraestructura de Google Cloud para soluciones escalables.
                    </p>
                    <ul class="expertise-list">
                        <li>Cloud Functions</li>
                        <li>Cloud Storage</li>
                        <li>App Engine</li>
                        <li>BigQuery</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Companies Section -->
    <section class="companies-section">
        <div class="container">
            <h2 class="section-title fade-in">
                <span class="title-decoration">Experiencia Empresarial</span>
            </h2>
            
            <div class="companies-content">
                <div class="company-card fade-in">
                    <div class="company-icon">
                        <i class="fas fa-building"></i>
                    </div>
                    <div class="company-details">
                        <h3>Empresas Multinacionales de Publicidad</h3>
                        <p class="company-role">Desarrollador de Sistemas de Optimización</p>
                        <p class="company-description">
                            Desarrollo de sistemas avanzados para la gestión y optimización automatizada 
                            de campañas publicitarias a gran escala. Implementación de integraciones con 
                            múltiples plataformas publicitarias mediante APIs, procesamiento de grandes 
                            volúmenes de datos y creación de algoritmos de optimización personalizados.
                        </p>
                        <div class="company-achievements">
                            <span class="achievement">
                                <i class="fas fa-check-circle"></i> Automatización de procesos
                            </span>
                            <span class="achievement">
                                <i class="fas fa-check-circle"></i> Reducción de costos publicitarios
                            </span>
                            <span class="achievement">
                                <i class="fas fa-check-circle"></i> Mejora en ROI de campañas
                            </span>
                        </div>
                    </div>
                </div>

                <div class="company-card fade-in">
                    <div class="company-icon">
                        <i class="fas fa-hospital"></i>
                    </div>
                    <div class="company-details">
                        <h3>Clínica de Salud</h3>
                        <p class="company-role">Desarrollador de Sistema de Gestión</p>
                        <p class="company-description">
                            Diseño y desarrollo de un sistema integral para la gestión de pacientes y 
                            clientes. La plataforma incluye módulos de registro, historial médico, 
                            agendamiento de citas, facturación y reportes administrativos. Sistema 
                            diseñado con enfoque en la usabilidad y la seguridad de datos sensibles.
                        </p>
                        <div class="company-achievements">
                            <span class="achievement">
                                <i class="fas fa-check-circle"></i> Digitalización de procesos
                            </span>
                            <span class="achievement">
                                <i class="fas fa-check-circle"></i> Mejora en atención al paciente
                            </span>
                            <span class="achievement">
                                <i class="fas fa-check-circle"></i> Sistema HIPAA compliant
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Technologies Section -->
    <section class="technologies-section">
        <div class="container">
            <h2 class="section-title fade-in">
                <span class="title-decoration">Tecnologías y Herramientas</span>
            </h2>
            
            <div class="tech-categories">
                <div class="tech-category fade-in">
                    <h3>Frontend</h3>
                    <div class="tech-grid">
                        <div class="tech-item">
                            <i class="fab fa-html5"></i>
                            <span>HTML5</span>
                        </div>
                        <div class="tech-item">
                            <i class="fab fa-css3-alt"></i>
                            <span>CSS3</span>
                        </div>
                        <div class="tech-item">
                            <i class="fab fa-js"></i>
                            <span>JavaScript</span>
                        </div>
                        <div class="tech-item">
                            <i class="fab fa-vuejs"></i>
                            <span>Vue.js</span>
                        </div>
                        <div class="tech-item">
                            <i class="fab fa-bootstrap"></i>
                            <span>Bootstrap</span>
                        </div>
                        <div class="tech-item">
                            <i class="fas fa-wind"></i>
                            <span>Tailwind</span>
                        </div>
                    </div>
                </div>

                <div class="tech-category fade-in">
                    <h3>Backend</h3>
                    <div class="tech-grid">
                        <div class="tech-item">
                            <i class="fab fa-php"></i>
                            <span>PHP</span>
                        </div>
                        <div class="tech-item">
                            <i class="fab fa-laravel"></i>
                            <span>Laravel</span>
                        </div>
                        <div class="tech-item">
                            <i class="fab fa-node-js"></i>
                            <span>Node.js</span>
                        </div>
                        <div class="tech-item">
                            <i class="fab fa-python"></i>
                            <span>Python</span>
                        </div>
                        <div class="tech-item">
                            <i class="fas fa-database"></i>
                            <span>MySQL</span>
                        </div>
                        <div class="tech-item">
                            <i class="fas fa-database"></i>
                            <span>PostgreSQL</span>
                        </div>
                    </div>
                </div>

                <div class="tech-category fade-in">
                    <h3>Cloud & DevOps</h3>
                    <div class="tech-grid">
                        <div class="tech-item">
                            <i class="fab fa-google"></i>
                            <span>Google Cloud</span>
                        </div>
                        <div class="tech-item">
                            <i class="fab fa-git-alt"></i>
                            <span>Git</span>
                        </div>
                        <div class="tech-item">
                            <i class="fab fa-docker"></i>
                            <span>Docker</span>
                        </div>
                        <div class="tech-item">
                            <i class="fas fa-server"></i>
                            <span>Linux</span>
                        </div>
                        <div class="tech-item">
                            <i class="fas fa-code-branch"></i>
                            <span>CI/CD</span>
                        </div>
                        <div class="tech-item">
                            <i class="fas fa-shield-alt"></i>
                            <span>Security</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="experience-cta fade-in">
        <div class="container">
            <div class="cta-content">
                <h2>¿Tienes un proyecto en mente?</h2>
                <p>Transformemos tus ideas en realidad digital</p>
                <div class="cta-buttons">
                    <a href="/" class="btn btn-primary">
                        <i class="fas fa-user"></i> Conoce más sobre mí
                    </a>
                    <a href="#" class="btn btn-secondary">
                        <i class="fas fa-envelope"></i> Contactar
                    </a>
                </div>
            </div>
        </div>
    </section>

    <style>
        /* Experience Page Specific Styles */
        .experience-hero {
            padding: 8rem 0 4rem;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            position: relative;
            overflow: hidden;
        }

        .experience-hero::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: url("data:image/svg+xml,%3Csvg width='60' height='60' viewBox='0 0 60 60' xmlns='http://www.w3.org/2000/svg'%3E%3Cg fill='none' fill-rule='evenodd'%3E%3Cg fill='%23ffffff' fill-opacity='0.05'%3E%3Cpath d='M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E");
        }

        .experience-hero .hero-content {
            position: relative;
            z-index: 1;
            text-align: center;
            color: white;
        }

        .page-title {
            font-size: 3.5rem;
            margin-bottom: 1rem;
            color: white;
        }

        .title-highlight {
            background: linear-gradient(135deg, #fff, #f0f0f0);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        .hero-description {
            font-size: 1.25rem;
            opacity: 0.95;
            margin-bottom: 3rem;
        }

        .hero-stats {
            display: flex;
            justify-content: center;
            gap: 4rem;
            flex-wrap: wrap;
        }

        .stat-item {
            text-align: center;
        }

        .stat-number {
            display: block;
            font-size: 2.5rem;
            font-weight: 700;
            margin-bottom: 0.5rem;
        }

        .stat-label {
            display: block;
            font-size: 0.9rem;
            opacity: 0.9;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        /* Portfolio Section */
        .portfolio-section {
            padding: 5rem 0;
            background: var(--light-color);
        }

        .projects-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2rem;
            margin-top: 3rem;
        }

        .project-card {
            background: white;
            border-radius: var(--border-radius);
            overflow: hidden;
            box-shadow: var(--shadow-md);
            transition: var(--transition);
        }

        .project-card:hover {
            transform: translateY(-10px);
            box-shadow: var(--shadow-xl);
        }

        .project-image {
            height: 200px;
            background: linear-gradient(135deg, var(--primary-color), var(--secondary-color));
            display: flex;
            align-items: center;
            justify-content: center;
            position: relative;
            overflow: hidden;
        }

        .project-overlay {
            font-size: 4rem;
            color: white;
            opacity: 0.3;
        }

        .project-content {
            padding: 2rem;
        }

        .project-content h3 {
            font-size: 1.5rem;
            margin-bottom: 1rem;
            color: var(--text-primary);
        }

        .project-description {
            color: var(--text-secondary);
            margin-bottom: 1.5rem;
            line-height: 1.6;
        }

        .project-tech {
            display: flex;
            flex-wrap: wrap;
            gap: 0.5rem;
            margin-bottom: 1.5rem;
        }

        .tech-tag {
            background: var(--light-color);
            color: var(--primary-color);
            padding: 0.25rem 0.75rem;
            border-radius: 20px;
            font-size: 0.875rem;
            font-weight: 500;
        }

        .project-link {
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
            color: var(--primary-color);
            text-decoration: none;
            font-weight: 600;
            transition: var(--transition);
        }

        .project-link:hover {
            gap: 0.75rem;
        }

        /* Expertise Section */
        .expertise-section {
            padding: 5rem 0;
            background: white;
        }

        .expertise-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 2rem;
            margin-top: 3rem;
        }

        .expertise-card {
            padding: 2rem;
            border-radius: var(--border-radius);
            background: white;
            box-shadow: var(--shadow-md);
            transition: var(--transition);
            border-top: 4px solid var(--primary-color);
        }

        .expertise-card:hover {
            transform: translateY(-5px);
            box-shadow: var(--shadow-xl);
        }

        .expertise-icon {
            width: 60px;
            height: 60px;
            background: linear-gradient(135deg, var(--primary-color), var(--secondary-color));
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 1.5rem;
            margin-bottom: 1.5rem;
        }

        .expertise-card h3 {
            margin-bottom: 1rem;
            color: var(--text-primary);
        }

        .expertise-card p {
            color: var(--text-secondary);
            margin-bottom: 1.5rem;
            line-height: 1.6;
        }

        .expertise-list {
            list-style: none;
        }

        .expertise-list li {
            padding-left: 1.5rem;
            position: relative;
            margin-bottom: 0.5rem;
            color: var(--text-secondary);
        }

        .expertise-list li::before {
            content: '✓';
            position: absolute;
            left: 0;
            color: var(--accent-color);
            font-weight: bold;
        }

        /* Companies Section */
        .companies-section {
            padding: 5rem 0;
            background: var(--light-color);
        }

        .companies-content {
            display: grid;
            gap: 2rem;
            margin-top: 3rem;
        }

        .company-card {
            background: white;
            border-radius: var(--border-radius);
            padding: 2.5rem;
            box-shadow: var(--shadow-md);
            display: grid;
            grid-template-columns: auto 1fr;
            gap: 2rem;
            transition: var(--transition);
        }

        .company-card:hover {
            box-shadow: var(--shadow-xl);
        }

        .company-icon {
            width: 80px;
            height: 80px;
            background: linear-gradient(135deg, var(--primary-color), var(--secondary-color));
            border-radius: var(--border-radius);
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 2rem;
        }

        .company-details h3 {
            font-size: 1.5rem;
            margin-bottom: 0.5rem;
            color: var(--text-primary);
        }

        .company-role {
            color: var(--primary-color);
            font-weight: 600;
            margin-bottom: 1rem;
        }

        .company-description {
            color: var(--text-secondary);
            line-height: 1.6;
            margin-bottom: 1.5rem;
        }

        .company-achievements {
            display: flex;
            flex-wrap: wrap;
            gap: 1rem;
        }

        .achievement {
            display: flex;
            align-items: center;
            gap: 0.5rem;
            color: var(--text-secondary);
            font-size: 0.9rem;
        }

        .achievement i {
            color: var(--accent-color);
        }

        /* Technologies Section */
        .technologies-section {
            padding: 5rem 0;
            background: white;
        }

        .tech-categories {
            display: grid;
            gap: 3rem;
            margin-top: 3rem;
        }

        .tech-category h3 {
            font-size: 1.5rem;
            margin-bottom: 1.5rem;
            color: var(--primary-color);
            text-align: center;
        }

        .tech-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(100px, 1fr));
            gap: 1.5rem;
            max-width: 800px;
            margin: 0 auto;
        }

        .tech-item {
            text-align: center;
            padding: 1.5rem 1rem;
            background: var(--light-color);
            border-radius: var(--border-radius);
            transition: var(--transition);
        }

        .tech-item:hover {
            transform: translateY(-5px);
            background: white;
            box-shadow: var(--shadow-md);
        }

        .tech-item i {
            font-size: 2.5rem;
            color: var(--primary-color);
            margin-bottom: 0.5rem;
            display: block;
        }

        .tech-item span {
            font-size: 0.9rem;
            color: var(--text-secondary);
            font-weight: 500;
        }

        /* Experience CTA */
        .experience-cta {
            padding: 5rem 0;
            background: linear-gradient(135deg, var(--primary-color), var(--secondary-color));
            color: white;
            text-align: center;
        }

        .experience-cta h2 {
            color: white;
            font-size: 2.5rem;
            margin-bottom: 1rem;
        }

        .experience-cta p {
            font-size: 1.25rem;
            opacity: 0.95;
            margin-bottom: 2rem;
        }

        /* Responsive */
        @media (max-width: 768px) {
            .page-title {
                font-size: 2rem;
            }

            .hero-stats {
                gap: 2rem;
            }

            .company-card {
                grid-template-columns: 1fr;
                text-align: center;
            }

            .company-icon {
                margin: 0 auto;
            }

            .tech-grid {
                grid-template-columns: repeat(3, 1fr);
            }
        }
    </style>
@endsection