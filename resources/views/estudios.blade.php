@extends('layouts.app')

@section('content')
    <!-- Hero Section -->
    <section class="education-hero">
        <div class="hero-bg-pattern"></div>
        <div class="container">
            <div class="hero-content fade-in">
                <div class="graduation-cap">
                    <i class="fas fa-graduation-cap"></i>
                </div>
                <h1 class="page-title">
                    <span class="title-line">Mi Trayectoria</span>
                    <span class="title-highlight">Académica</span>
                </h1>
                <p class="hero-description">
                    Un viaje de aprendizaje continuo desde los primeros pasos hasta la excelencia profesional.
                </p>
                <div class="education-stats">
                    <div class="stat-card">
                        <i class="fas fa-calendar-alt"></i>
                        <span class="stat-number">15+</span>
                        <span class="stat-label">Años de Estudio</span>
                    </div>
                    <div class="stat-card">
                        <i class="fas fa-school"></i>
                        <span class="stat-number">3</span>
                        <span class="stat-label">Instituciones</span>
                    </div>
                    <div class="stat-card">
                        <i class="fas fa-certificate"></i>
                        <span class="stat-number">2</span>
                        <span class="stat-label">Certificaciones</span>
                    </div>
                    <div class="stat-card">
                        <i class="fas fa-language"></i>
                        <span class="stat-number">C1</span>
                        <span class="stat-label">Nivel de Inglés</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="scroll-indicator">
            <div class="scroll-text">Descubre mi recorrido</div>
            <div class="scroll-arrow">
                <i class="fas fa-chevron-down"></i>
            </div>
        </div>
    </section>

    <!-- Educational Journey Timeline -->
    <section class="education-timeline">
        <div class="container">
            <h2 class="section-title fade-in">
                <span class="title-decoration">Recorrido Educativo</span>
            </h2>
            
            <div class="timeline-container">
                <div class="timeline-path"></div>
                
                <!-- Preescolar -->
                <div class="timeline-item fade-in" data-year="Inicio">
                    <div class="timeline-marker">
                        <i class="fas fa-baby"></i>
                    </div>
                    <div class="education-card preescolar">
                        <div class="card-header">
                            <div class="institution-logo">
                                <i class="fas fa-shapes"></i>
                            </div>
                            <div class="card-title">
                                <h3>Educación Preescolar</h3>
                                <p class="institution-name">Colegio Biberones</p>
                            </div>
                        </div>
                        <div class="card-content">
                            <div class="education-details">
                                <div class="detail-item">
                                    <i class="fas fa-clock"></i>
                                    <span>Periodo: Primeros años - Transición</span>
                                </div>
                                <div class="detail-item">
                                    <i class="fas fa-book-open"></i>
                                    <span>Fundamentos educativos iniciales</span>
                                </div>
                            </div>
                            <div class="skills-developed">
                                <h4>Bases Desarrolladas:</h4>
                                <div class="skill-tags">
                                    <span class="skill-tag">Socialización</span>
                                    <span class="skill-tag">Motricidad</span>
                                    <span class="skill-tag">Creatividad</span>
                                    <span class="skill-tag">Primeras letras</span>
                                </div>
                            </div>
                            <div class="achievement-badge">
                                <i class="fas fa-star"></i>
                                <span>Primera Etapa Completada</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Primaria y Bachillerato -->
                <div class="timeline-item fade-in" data-year="Formación">
                    <div class="timeline-marker active">
                        <i class="fas fa-user-graduate"></i>
                    </div>
                    <div class="education-card lasalle">
                        <div class="card-header">
                            <div class="institution-logo">
                                <i class="fas fa-cross"></i>
                            </div>
                            <div class="card-title">
                                <h3>Educación Básica y Media</h3>
                                <p class="institution-name">Colegio La Salle Bucaramanga</p>
                            </div>
                        </div>
                        <div class="card-content">
                            <div class="education-details">
                                <div class="detail-item">
                                    <i class="fas fa-clock"></i>
                                    <span>Periodo: Primaria y Bachillerato completo</span>
                                </div>
                                <div class="detail-item">
                                    <i class="fas fa-medal"></i>
                                    <span>Formación integral lasallista</span>
                                </div>
                                <div class="detail-item">
                                    <i class="fas fa-users"></i>
                                    <span>Valores y excelencia académica</span>
                                </div>
                            </div>
                            <div class="academic-highlights">
                                <h4>Logros Destacados:</h4>
                                <div class="highlights-grid">
                                    <div class="highlight">
                                        <i class="fas fa-trophy"></i>
                                        <span>Participación en olimpiadas académicas</span>
                                    </div>
                                    <div class="highlight">
                                        <i class="fas fa-brain"></i>
                                        <span>Desarrollo del pensamiento lógico</span>
                                    </div>
                                    <div class="highlight">
                                        <i class="fas fa-laptop-code"></i>
                                        <span>Primeros pasos en programación</span>
                                    </div>
                                    <div class="highlight">
                                        <i class="fas fa-globe"></i>
                                        <span>Formación bilingüe</span>
                                    </div>
                                </div>
                            </div>
                            <div class="progress-bar">
                                <div class="progress-fill" style="width: 100%"></div>
                                <span class="progress-text">Completado</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Universidad -->
                <div class="timeline-item fade-in current" data-year="Actual">
                    <div class="timeline-marker current">
                        <i class="fas fa-university"></i>
                    </div>
                    <div class="education-card university">
                        <div class="card-header">
                            <div class="institution-logo">
                                <i class="fas fa-graduation-cap"></i>
                            </div>
                            <div class="card-title">
                                <h3>Educación Superior</h3>
                                <p class="institution-name">Universidad Autónoma de Bucaramanga</p>
                            </div>
                            <div class="status-badge">En Curso</div>
                        </div>
                        <div class="card-content">
                            <div class="education-details">
                                <div class="detail-item">
                                    <i class="fas fa-laptop-code"></i>
                                    <span>Carrera: <strong>Ingeniería de Sistemas</strong></span>
                                </div>
                                <div class="detail-item">
                                    <i class="fas fa-clock"></i>
                                    <span>Estado: Actualmente cursando</span>
                                </div>
                                <div class="detail-item">
                                    <i class="fas fa-chart-line"></i>
                                    <span>Enfoque: Desarrollo de Software</span>
                                </div>
                            </div>
                            
                            <div class="courses-grid">
                                <h4>Áreas de Estudio:</h4>
                                <div class="course-items">
                                    <div class="course">
                                        <i class="fas fa-database"></i>
                                        <span>Bases de Datos</span>
                                    </div>
                                    <div class="course">
                                        <i class="fas fa-code"></i>
                                        <span>Programación Avanzada</span>
                                    </div>
                                    <div class="course">
                                        <i class="fas fa-network-wired"></i>
                                        <span>Redes y Comunicaciones</span>
                                    </div>
                                    <div class="course">
                                        <i class="fas fa-shield-alt"></i>
                                        <span>Seguridad Informática</span>
                                    </div>
                                    <div class="course">
                                        <i class="fas fa-project-diagram"></i>
                                        <span>Ingeniería de Software</span>
                                    </div>
                                    <div class="course">
                                        <i class="fas fa-robot"></i>
                                        <span>Inteligencia Artificial</span>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="progress-bar">
                                <div class="progress-fill animated" style="width: 70%"></div>
                                <span class="progress-text">En Progreso</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Additional Studies & Certifications -->
    <section class="certifications-section">
        <div class="container">
            <h2 class="section-title fade-in">
                <span class="title-decoration">Estudios Adicionales y Certificaciones</span>
            </h2>
            
            <div class="certifications-grid">
                <!-- English Certifications -->
                <div class="certification-category fade-in">
                    <div class="category-header">
                        <i class="fas fa-language"></i>
                        <h3>Dominio del Inglés</h3>
                        <span class="level-badge">C1 - Advanced</span>
                    </div>
                    
                    <div class="language-level">
                        <div class="level-bars">
                            <div class="level-item">
                                <span>Listening</span>
                                <div class="level-bar">
                                    <div class="level-fill" style="width: 90%"></div>
                                </div>
                            </div>
                            <div class="level-item">
                                <span>Speaking</span>
                                <div class="level-bar">
                                    <div class="level-fill" style="width: 85%"></div>
                                </div>
                            </div>
                            <div class="level-item">
                                <span>Reading</span>
                                <div class="level-bar">
                                    <div class="level-fill" style="width: 95%"></div>
                                </div>
                            </div>
                            <div class="level-item">
                                <span>Writing</span>
                                <div class="level-bar">
                                    <div class="level-fill" style="width: 88%"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="certificates-list">
                        <div class="certificate-card">
                            <div class="certificate-icon">
                                <i class="fas fa-award"></i>
                            </div>
                            <div class="certificate-content">
                                <h4>Praxis English</h4>
                                <p>Certificación Nivel C1</p>
                                <div class="certificate-details">
                                    <span class="detail"><i class="fas fa-check-circle"></i> Certificado Oficial</span>
                                    <span class="detail"><i class="fas fa-globe"></i> Reconocimiento Internacional</span>
                                </div>
                            </div>
                            <div class="certificate-badge">
                                <i class="fas fa-certificate"></i>
                            </div>
                        </div>
                        
                        <div class="certificate-card">
                            <div class="certificate-icon">
                                <i class="fas fa-award"></i>
                            </div>
                            <div class="certificate-content">
                                <h4>Playground</h4>
                                <p>Certificación Nivel C1</p>
                                <div class="certificate-details">
                                    <span class="detail"><i class="fas fa-check-circle"></i> Metodología Innovadora</span>
                                    <span class="detail"><i class="fas fa-comments"></i> Enfoque Conversacional</span>
                                </div>
                            </div>
                            <div class="certificate-badge">
                                <i class="fas fa-certificate"></i>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Future Certifications -->
                <div class="future-studies fade-in">
                    <h3>Próximos Objetivos</h3>
                    <div class="objectives-grid">
                        <div class="objective-card">
                            <i class="fas fa-cloud"></i>
                            <h4>Cloud Computing</h4>
                            <p>Certificación en AWS o Google Cloud</p>
                        </div>
                        <div class="objective-card">
                            <i class="fas fa-lock"></i>
                            <h4>Ciberseguridad</h4>
                            <p>Especialización en seguridad informática</p>
                        </div>
                        <div class="objective-card">
                            <i class="fas fa-chart-bar"></i>
                            <h4>Data Science</h4>
                            <p>Machine Learning y Análisis de Datos</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Academic Skills Matrix -->
    <section class="skills-matrix">
        <div class="container">
            <h2 class="section-title fade-in">
                <span class="title-decoration">Competencias Académicas Desarrolladas</span>
            </h2>
            
            <div class="matrix-grid fade-in">
                <div class="skill-category">
                    <div class="category-icon">
                        <i class="fas fa-brain"></i>
                    </div>
                    <h3>Pensamiento Analítico</h3>
                    <ul class="skill-list">
                        <li>Resolución de problemas complejos</li>
                        <li>Análisis de algoritmos</li>
                        <li>Pensamiento crítico</li>
                        <li>Lógica matemática</li>
                    </ul>
                </div>

                <div class="skill-category">
                    <div class="category-icon">
                        <i class="fas fa-cogs"></i>
                    </div>
                    <h3>Habilidades Técnicas</h3>
                    <ul class="skill-list">
                        <li>Programación multiparadigma</li>
                        <li>Diseño de sistemas</li>
                        <li>Arquitectura de software</li>
                        <li>Gestión de bases de datos</li>
                    </ul>
                </div>

                <div class="skill-category">
                    <div class="category-icon">
                        <i class="fas fa-users-cog"></i>
                    </div>
                    <h3>Competencias Interpersonales</h3>
                    <ul class="skill-list">
                        <li>Trabajo colaborativo</li>
                        <li>Liderazgo de equipos</li>
                        <li>Comunicación efectiva</li>
                        <li>Gestión de proyectos</li>
                    </ul>
                </div>

                <div class="skill-category">
                    <div class="category-icon">
                        <i class="fas fa-seedling"></i>
                    </div>
                    <h3>Desarrollo Personal</h3>
                    <ul class="skill-list">
                        <li>Aprendizaje autónomo</li>
                        <li>Adaptabilidad</li>
                        <li>Innovación y creatividad</li>
                        <li>Ética profesional</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Educational Philosophy -->
    <section class="philosophy-section">
        <div class="container">
            <div class="philosophy-content fade-in">
                <div class="quote-icon">
                    <i class="fas fa-quote-left"></i>
                </div>
                <blockquote class="philosophy-quote">
                    "La educación no es preparación para la vida; la educación es la vida misma. 
                    Cada día es una oportunidad para aprender algo nuevo y crecer como profesional y como persona."
                </blockquote>
                <div class="quote-author">
                    - Mi filosofía de aprendizaje
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="education-cta fade-in">
        <div class="container">
            <div class="cta-content">
                <h2>El aprendizaje nunca termina</h2>
                <p>Conoce más sobre mi experiencia y proyectos profesionales</p>
                <div class="cta-buttons">
                    <a href="/experiencia" class="btn btn-primary">
                        <i class="fas fa-briefcase"></i> Ver Experiencia
                    </a>
                    <a href="/habilidades" class="btn btn-secondary">
                        <i class="fas fa-code"></i> Mis Habilidades
                    </a>
                </div>
            </div>
        </div>
    </section>

    <style>
        /* Education Page Specific Styles */
        .education-hero {
            position: relative;
            min-height: 100vh;
            display: flex;
            align-items: center;
            background: linear-gradient(135deg, #1e3c72 0%, #2a5298 100%);
            overflow: hidden;
        }

        .hero-bg-pattern {
            position: absolute;
            width: 100%;
            height: 100%;
            opacity: 0.1;
            background-image: 
                repeating-linear-gradient(45deg, transparent, transparent 35px, rgba(255,255,255,.1) 35px, rgba(255,255,255,.1) 70px),
                repeating-linear-gradient(-45deg, transparent, transparent 35px, rgba(255,255,255,.05) 35px, rgba(255,255,255,.05) 70px);
        }

        .education-hero .hero-content {
            position: relative;
            z-index: 1;
            text-align: center;
            color: white;
        }

        .graduation-cap {
            font-size: 5rem;
            margin-bottom: 2rem;
            animation: float 3s ease-in-out infinite;
        }

        @keyframes float {
            0%, 100% { transform: translateY(0); }
            50% { transform: translateY(-20px); }
        }

        .page-title {
            font-size: 3.5rem;
            margin-bottom: 1rem;
            font-family: 'Playfair Display', serif;
        }

        .title-line {
            display: block;
            font-weight: 400;
            font-size: 2.5rem;
            opacity: 0.9;
        }

        .title-highlight {
            display: block;
            font-weight: 900;
            background: linear-gradient(135deg, #fff, #f0f0f0);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        .hero-description {
            font-size: 1.2rem;
            opacity: 0.95;
            max-width: 600px;
            margin: 0 auto 3rem;
        }

        .education-stats {
            display: flex;
            justify-content: center;
            gap: 2rem;
            flex-wrap: wrap;
        }

        .stat-card {
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(10px);
            padding: 1.5rem;
            border-radius: 15px;
            border: 1px solid rgba(255, 255, 255, 0.2);
            text-align: center;
            min-width: 140px;
        }

        .stat-card i {
            font-size: 2rem;
            margin-bottom: 0.5rem;
            display: block;
            color: #ffd700;
        }

        .stat-number {
            display: block;
            font-size: 2rem;
            font-weight: 700;
            margin-bottom: 0.25rem;
        }

        .stat-label {
            font-size: 0.9rem;
            opacity: 0.9;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        .scroll-indicator {
            position: absolute;
            bottom: 2rem;
            left: 50%;
            transform: translateX(-50%);
            text-align: center;
            color: white;
            animation: bounce 2s infinite;
        }

        .scroll-text {
            margin-bottom: 0.5rem;
            opacity: 0.9;
        }

        /* Timeline Section */
        .education-timeline {
            padding: 5rem 0;
            background: linear-gradient(180deg, #f8f9fa 0%, white 100%);
        }

        .timeline-container {
            position: relative;
            max-width: 1000px;
            margin: 0 auto;
            padding: 0 2rem;
        }

        .timeline-path {
            position: absolute;
            left: 50px;
            top: 0;
            bottom: 0;
            width: 3px;
            background: linear-gradient(180deg, #1e3c72, #2a5298);
            border-radius: 2px;
        }

        .timeline-item {
            position: relative;
            margin-bottom: 4rem;
            padding-left: 100px;
        }

        .timeline-marker {
            position: absolute;
            left: 35px;
            top: 20px;
            width: 35px;
            height: 35px;
            background: white;
            border: 3px solid #1e3c72;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #1e3c72;
            font-size: 1rem;
            z-index: 2;
        }

        .timeline-marker.active {
            background: #1e3c72;
            color: white;
            box-shadow: 0 0 0 5px rgba(30, 60, 114, 0.2);
        }

        .timeline-marker.current {
            background: #ffd700;
            border-color: #ffd700;
            color: #1e3c72;
            animation: pulse 2s infinite;
        }

        @keyframes pulse {
            0% { box-shadow: 0 0 0 0 rgba(255, 215, 0, 0.7); }
            70% { box-shadow: 0 0 0 20px rgba(255, 215, 0, 0); }
            100% { box-shadow: 0 0 0 0 rgba(255, 215, 0, 0); }
        }

        .timeline-item::before {
            content: attr(data-year);
            position: absolute;
            left: -30px;
            top: 20px;
            font-size: 0.85rem;
            font-weight: 600;
            color: #1e3c72;
            text-transform: uppercase;
            letter-spacing: 1px;
            transform: rotate(-90deg);
            transform-origin: center;
            white-space: nowrap;
        }

        .education-card {
            background: white;
            border-radius: 20px;
            box-shadow: 0 10px 40px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .education-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 50px rgba(0, 0, 0, 0.15);
        }

        .education-card.preescolar {
            border-top: 5px solid #ff6b6b;
        }

        .education-card.lasalle {
            border-top: 5px solid #4ecdc4;
        }

        .education-card.university {
            border-top: 5px solid #ffd700;
        }

        .card-header {
            padding: 2rem;
            display: flex;
            align-items: center;
            gap: 1.5rem;
            background: linear-gradient(135deg, #f8f9fa, #e9ecef);
            position: relative;
        }

        .institution-logo {
            width: 60px;
            height: 60px;
            background: white;
            border-radius: 15px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.5rem;
            color: #1e3c72;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        }

        .card-title h3 {
            font-size: 1.5rem;
            margin-bottom: 0.25rem;
            color: #1e3c72;
        }

        .institution-name {
            color: #6c757d;
            font-weight: 500;
        }

        .status-badge {
            position: absolute;
            top: 1rem;
            right: 1rem;
            background: #28a745;
            color: white;
            padding: 0.25rem 1rem;
            border-radius: 20px;
            font-size: 0.85rem;
            font-weight: 600;
            animation: blink 2s infinite;
        }

        @keyframes blink {
            0%, 100% { opacity: 1; }
            50% { opacity: 0.7; }
        }

        .card-content {
            padding: 2rem;
        }

        .education-details {
            margin-bottom: 2rem;
        }

        .detail-item {
            display: flex;
            align-items: center;
            gap: 1rem;
            margin-bottom: 1rem;
            color: #495057;
        }

        .detail-item i {
            color: #1e3c72;
            width: 20px;
        }

        .skills-developed,
        .academic-highlights,
        .courses-grid {
            margin-top: 2rem;
        }

        .skills-developed h4,
        .academic-highlights h4,
        .courses-grid h4 {
            font-size: 1.1rem;
            margin-bottom: 1rem;
            color: #1e3c72;
        }

        .skill-tags {
            display: flex;
            flex-wrap: wrap;
            gap: 0.5rem;
        }

        .skill-tag {
            background: #e3f2fd;
            color: #1e3c72;
            padding: 0.25rem 0.75rem;
            border-radius: 15px;
            font-size: 0.85rem;
        }

        .highlights-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 1rem;
        }

        .highlight {
            display: flex;
            align-items: center;
            gap: 0.5rem;
            padding: 0.75rem;
            background: #f8f9fa;
            border-radius: 10px;
            font-size: 0.9rem;
        }

        .highlight i {
            color: #ffd700;
        }

        .course-items {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(150px, 1fr));
            gap: 1rem;
        }

        .course {
            display: flex;
            align-items: center;
            gap: 0.5rem;
            padding: 0.75rem;
            background: linear-gradient(135deg, #e3f2fd, #bbdefb);
            border-radius: 10px;
            font-size: 0.9rem;
        }

        .course i {
            color: #1e3c72;
        }

        .achievement-badge {
            margin-top: 1.5rem;
            padding: 0.75rem;
            background: linear-gradient(135deg, #ffd700, #ffed4e);
            border-radius: 10px;
            text-align: center;
            color: #1e3c72;
            font-weight: 600;
        }

        .achievement-badge i {
            margin-right: 0.5rem;
        }

        .progress-bar {
            margin-top: 2rem;
            height: 8px;
            background: #e9ecef;
            border-radius: 10px;
            overflow: hidden;
            position: relative;
        }

        .progress-fill {
            height: 100%;
            background: linear-gradient(90deg, #1e3c72, #2a5298);
            border-radius: 10px;
            position: relative;
            transition: width 2s ease;
        }

        .progress-fill.animated::after {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            height: 100%;
            width: 100%;
            background: linear-gradient(90deg, transparent, rgba(255,255,255,0.3), transparent);
            animation: shine 2s infinite;
        }

        @keyframes shine {
            0% { transform: translateX(-100%); }
            100% { transform: translateX(100%); }
        }

        .progress-text {
            position: absolute;
            right: 0;
            top: -25px;
            font-size: 0.85rem;
            color: #6c757d;
            font-weight: 600;
        }

        /* Certifications Section */
        .certifications-section {
            padding: 5rem 0;
            background: white;
        }

        .certifications-grid {
            display: grid;
            gap: 3rem;
            margin-top: 3rem;
        }

        .certification-category {
            background: linear-gradient(135deg, #f8f9fa, white);
            padding: 2.5rem;
            border-radius: 20px;
            box-shadow: 0 10px 40px rgba(0, 0, 0, 0.08);
        }

        .category-header {
            display: flex;
            align-items: center;
            gap: 1rem;
            margin-bottom: 2rem;
            position: relative;
        }

        .category-header i {
            font-size: 2rem;
            color: #1e3c72;
        }

        .category-header h3 {
            font-size: 1.5rem;
            color: #1e3c72;
        }

        .level-badge {
            position: absolute;
            right: 0;
            background: linear-gradient(135deg, #28a745, #20c997);
            color: white;
            padding: 0.5rem 1rem;
            border-radius: 20px;
            font-weight: 600;
        }

        .language-level {
            margin-bottom: 2rem;
        }

        .level-bars {
            display: grid;
            gap: 1rem;
        }

        .level-item {
            display: grid;
            grid-template-columns: 100px 1fr;
            align-items: center;
            gap: 1rem;
        }

        .level-item span {
            font-weight: 500;
            color: #495057;
        }

        .level-bar {
            height: 10px;
            background: #e9ecef;
            border-radius: 10px;
            overflow: hidden;
        }

        .level-fill {
            height: 100%;
            background: linear-gradient(90deg, #1e3c72, #2a5298);
            border-radius: 10px;
            transition: width 2s ease;
        }

        .certificates-list {
            display: grid;
            gap: 1.5rem;
        }

        .certificate-card {
            display: grid;
            grid-template-columns: auto 1fr auto;
            gap: 1.5rem;
            padding: 1.5rem;
            background: white;
            border-radius: 15px;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.08);
            align-items: center;
            transition: transform 0.3s ease;
        }

        .certificate-card:hover {
            transform: translateX(10px);
        }

        .certificate-icon {
            width: 50px;
            height: 50px;
            background: linear-gradient(135deg, #ffd700, #ffed4e);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #1e3c72;
            font-size: 1.5rem;
        }

        .certificate-content h4 {
            margin-bottom: 0.25rem;
            color: #1e3c72;
        }

        .certificate-content p {
            color: #6c757d;
            margin-bottom: 0.5rem;
        }

        .certificate-details {
            display: flex;
            gap: 1rem;
            flex-wrap: wrap;
        }

        .certificate-details .detail {
            display: flex;
            align-items: center;
            gap: 0.25rem;
            font-size: 0.85rem;
            color: #495057;
        }

        .certificate-details .detail i {
            color: #28a745;
        }

        .certificate-badge {
            font-size: 2rem;
            color: #1e3c72;
            opacity: 0.3;
        }

        .future-studies {
            margin-top: 3rem;
            padding: 2rem;
            background: linear-gradient(135deg, #e3f2fd, #bbdefb);
            border-radius: 20px;
        }

        .future-studies h3 {
            text-align: center;
            margin-bottom: 2rem;
            color: #1e3c72;
        }

        .objectives-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 1.5rem;
        }

        .objective-card {
            background: white;
            padding: 1.5rem;
            border-radius: 15px;
            text-align: center;
            transition: transform 0.3s ease;
        }

        .objective-card:hover {
            transform: translateY(-5px);
        }

        .objective-card i {
            font-size: 2rem;
            color: #1e3c72;
            margin-bottom: 1rem;
            display: block;
        }

        .objective-card h4 {
            margin-bottom: 0.5rem;
            color: #1e3c72;
        }

        .objective-card p {
            font-size: 0.9rem;
            color: #6c757d;
        }

        /* Skills Matrix */
        .skills-matrix {
            padding: 5rem 0;
            background: #f8f9fa;
        }

        .matrix-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 2rem;
            margin-top: 3rem;
        }

        .skill-category {
            background: white;
            padding: 2rem;
            border-radius: 15px;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.08);
            transition: transform 0.3s ease;
        }

        .skill-category:hover {
            transform: translateY(-5px);
        }

        .category-icon {
            width: 60px;
            height: 60px;
            background: linear-gradient(135deg, #1e3c72, #2a5298);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 1.5rem;
            margin-bottom: 1rem;
        }

        .skill-category h3 {
            margin-bottom: 1rem;
            color: #1e3c72;
        }

        .skill-list {
            list-style: none;
            padding: 0;
        }

        .skill-list li {
            padding: 0.5rem 0;
            color: #495057;
            position: relative;
            padding-left: 1.5rem;
        }

        .skill-list li::before {
            content: '✓';
            position: absolute;
            left: 0;
            color: #28a745;
            font-weight: bold;
        }

        /* Philosophy Section */
        .philosophy-section {
            padding: 5rem 0;
            background: linear-gradient(135deg, #1e3c72, #2a5298);
            position: relative;
            overflow: hidden;
        }

        .philosophy-section::before {
            content: '';
            position: absolute;
            top: -50%;
            right: -10%;
            width: 500px;
            height: 500px;
            background: radial-gradient(circle, rgba(255,255,255,0.1) 0%, transparent 70%);
            border-radius: 50%;
        }

        .philosophy-content {
            position: relative;
            z-index: 1;
            text-align: center;
            max-width: 800px;
            margin: 0 auto;
        }

        .quote-icon {
            font-size: 3rem;
            color: rgba(255, 255, 255, 0.3);
            margin-bottom: 2rem;
        }

        .philosophy-quote {
            font-size: 1.5rem;
            line-height: 1.8;
            color: white;
            font-style: italic;
            margin-bottom: 2rem;
            font-family: 'Playfair Display', serif;
        }

        .quote-author {
            color: rgba(255, 255, 255, 0.8);
            font-size: 1.1rem;
        }

        /* Education CTA */
        .education-cta {
            padding: 5rem 0;
            background: white;
            text-align: center;
        }

        .education-cta h2 {
            font-size: 2.5rem;
            margin-bottom: 1rem;
            color: #1e3c72;
        }

        .education-cta p {
            font-size: 1.2rem;
            color: #6c757d;
            margin-bottom: 2rem;
        }

        /* Responsive */
        @media (max-width: 768px) {
            .page-title {
                font-size: 2rem;
            }

            .title-line {
                font-size: 1.5rem;
            }

            .education-stats {
                gap: 1rem;
            }

            .timeline-path {
                left: 20px;
            }

            .timeline-item {
                padding-left: 60px;
            }

            .timeline-marker {
                left: 5px;
            }

            .timeline-item::before {
                display: none;
            }

            .highlights-grid,
            .course-items {
                grid-template-columns: 1fr;
            }

            .category-header {
                flex-direction: column;
                text-align: center;
            }

            .level-badge {
                position: static;
                margin-top: 1rem;
            }

            .certificate-card {
                grid-template-columns: 1fr;
                text-align: center;
            }

            .objectives-grid {
                grid-template-columns: 1fr;
            }

            .philosophy-quote {
                font-size: 1.2rem;
            }
        }
    </style>

    <script>
        // Animate progress bars on scroll
        const observerOptions = {
            threshold: 0.5,
            rootMargin: '0px'
        };

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    const progressBars = entry.target.querySelectorAll('.progress-fill');
                    progressBars.forEach(bar => {
                        const width = bar.style.width;
                        bar.style.width = '0';
                        setTimeout(() => {
                            bar.style.width = width;
                        }, 100);
                    });

                    const levelBars = entry.target.querySelectorAll('.level-fill');
                    levelBars.forEach(bar => {
                        const width = bar.style.width;
                        bar.style.width = '0';
                        setTimeout(() => {
                            bar.style.width = width;
                        }, 100);
                    });
                }
            });
        }, observerOptions);

        // Observe all sections with progress bars
        document.addEventListener('DOMContentLoaded', () => {
            document.querySelectorAll('.education-card, .language-level').forEach(el => {
                observer.observe(el);
            });

            // Add fade-in animations
            const fadeElements = document.querySelectorAll('.fade-in');
            const fadeObserver = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('visible');
                    }
                });
            }, { threshold: 0.1 });

            fadeElements.forEach(el => fadeObserver.observe(el));
        });
    </script>
@endsection