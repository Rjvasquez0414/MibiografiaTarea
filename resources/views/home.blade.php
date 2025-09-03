@extends('layouts.app')

@section('content')
    <!-- Hero Section -->
    <section id="inicio" class="hero">
        <div class="hero-background">
            <div class="hero-overlay"></div>
        </div>
        <div class="hero-content">
            <h1 class="hero-title fade-in">
                <span class="first-name">Roberto José</span>
                <span class="last-name">Vásquez Dávila</span>
            </h1>
            <div class="hero-subtitle fade-in">
                <span class="typing-text">Desarrollador de Software | Emprendedor | Soñador</span>
            </div>
            <div class="hero-location fade-in">
                <i class="fas fa-map-marker-alt"></i>
                <span>Floridablanca, Santander - Colombia</span>
            </div>
        </div>
        <div class="scroll-indicator">
            <span>Descubre mi historia</span>
            <i class="fas fa-chevron-down"></i>
        </div>
    </section>

    <!-- About Section -->
    <section id="sobre-mi" class="about-section">
        <div class="container">
            <h2 class="section-title fade-in">
                <span class="title-decoration">Sobre Mí</span>
            </h2>
            
            <div class="family-info fade-in">
                <div class="info-card">
                    <div class="card-icon">
                        <i class="fas fa-home"></i>
                    </div>
                    <h3>Mi Familia</h3>
                    <p class="card-subtitle">Las raíces que me fortalecen</p>
                    
                    <div class="family-grid">
                        <div class="family-member">
                            <div class="member-icon parents">
                                <i class="fas fa-user-tie"></i>
                            </div>
                            <h4>Roberto Vásquez</h4>
                            <span class="relation">Mi Padre</span>
                        </div>
                        
                        <div class="family-member">
                            <div class="member-icon parents">
                                <i class="fas fa-user"></i>
                            </div>
                            <h4>Nelly Dávila</h4>
                            <span class="relation">Mi Madre</span>
                        </div>
                        
                        <div class="family-member">
                            <div class="member-icon sister">
                                <i class="fas fa-user"></i>
                            </div>
                            <h4>Natalia Vásquez</h4>
                            <span class="relation">Hermana</span>
                        </div>
                        
                        <div class="family-member">
                            <div class="member-icon sister">
                                <i class="fas fa-user"></i>
                            </div>
                            <h4>Andrea Vásquez</h4>
                            <span class="relation">Hermana</span>
                        </div>
                        
                        <div class="family-member">
                            <div class="member-icon sister">
                                <i class="fas fa-user"></i>
                            </div>
                            <h4>Diana Dávila</h4>
                            <span class="relation">Hermana</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Timeline Section -->
    <section id="trayectoria" class="timeline-section">
        <div class="container">
            <h2 class="section-title fade-in">
                <span class="title-decoration">Mi Trayectoria Hasta El Momento</span>
            </h2>
            
            <div class="timeline">
                <!-- Niñez -->
                <div class="timeline-item fade-in">
                    <div class="timeline-content">
                        <div class="timeline-dot">
                            <i class="fas fa-child"></i>
                        </div>
                        <h3>Mi Niñez</h3>
                        <span class="timeline-date">Los primeros años</span>
                        <p>
                            Desde muy pequeño, mi vida estuvo marcada por grandes sueños y aspiraciones. 
                            Fui un niño estudioso y alegre, siempre con la meta de alcanzar grandes logros. 
                            Mi infancia estuvo llena de momentos inolvidables, rodeado de amigos extraordinarios 
                            y una familia que siempre me brindó su apoyo incondicional. La alegría fue mi 
                            compañera constante en estos años formativos, donde aprendí el valor del esfuerzo 
                            y la importancia de mantener siempre una actitud positiva ante la vida.
                        </p>
                        <div class="timeline-tags">
                            <span class="tag">Estudioso</span>
                            <span class="tag">Alegre</span>
                            <span class="tag">Soñador</span>
                        </div>
                    </div>
                </div>

                <!-- Adolescencia -->
                <div class="timeline-item fade-in">
                    <div class="timeline-content">
                        <div class="timeline-dot">
                            <i class="fas fa-graduation-cap"></i>
                        </div>
                        <h3>Mi Adolescencia</h3>
                        <span class="timeline-date">Construyendo el futuro</span>
                        <p>
                            Durante mi adolescencia, mis deseos de construir mi futuro se intensificaron. 
                            Fue en esta etapa cuando descubrí mi pasión por la programación, iniciando 
                            un camino que definiría mi vida profesional. Estos años fueron fundamentales 
                            para mi crecimiento personal, donde conocí personas maravillosas que hasta 
                            el día de hoy considero pilares importantes en mi vida. Fue una etapa 
                            tranquila pero llena de aprendizajes, donde cada experiencia me preparó 
                            para los desafíos que vendrían.
                        </p>
                        <div class="timeline-tags">
                            <span class="tag">Programación</span>
                            <span class="tag">Aprendizaje</span>
                            <span class="tag">Crecimiento</span>
                        </div>
                    </div>
                </div>

                <!-- Actualidad -->
                <div class="timeline-item fade-in">
                    <div class="timeline-content">
                        <div class="timeline-dot active">
                            <i class="fas fa-laptop-code"></i>
                        </div>
                        <h3>Actualidad</h3>
                        <span class="timeline-date">Presente</span>
                        <p>
                            Hoy en día, me encuentro en una etapa emocionante de mi vida donde combino 
                            mis estudios con mi trabajo profesional. Gracias a Dios, he tenido la 
                            oportunidad de abrir múltiples puertas en el ámbito laboral, desarrollando 
                            software complejo y páginas web para grandes empresas. Esta experiencia 
                            invaluable me ha permitido ganar conocimientos técnicos avanzados y, 
                            más importante aún, me ha dado la claridad para proyectar mi futuro 
                            profesional con mayor certeza y ambición.
                        </p>
                        <div class="timeline-tags">
                            <span class="tag">Desarrollo Web</span>
                            <span class="tag">Software Empresarial</span>
                            <span class="tag">Experiencia</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Aspirations Section -->
    <section id="aspiraciones" class="aspirations-section">
        <div class="container">
            <h2 class="section-title fade-in">
                <span class="title-decoration">Mis Aspiraciones y Metas</span>
            </h2>
            
            <div class="aspirations-content fade-in">
                <div class="aspiration-intro">
                    <p class="lead-text">
                        Mi visión del futuro está guiada por valores profundos y metas significativas 
                        que trascienden lo profesional.
                    </p>
                </div>
                
                <div class="goals-grid">
                    <div class="goal-card fade-in">
                        <div class="goal-icon">
                            <i class="fas fa-heart"></i>
                        </div>
                        <h3>Ser Mejor Persona</h3>
                        <p>
                            Mi mayor meta es el crecimiento personal constante. Cada día busco ser 
                            una mejor versión de mí mismo, cultivando valores que me permitan 
                            impactar positivamente en mi entorno.
                        </p>
                    </div>
                    
                    <div class="goal-card fade-in">
                        <div class="goal-icon">
                            <i class="fas fa-users"></i>
                        </div>
                        <h3>Construir una Familia</h3>
                        <p>
                            Aspiro a formar un hogar lleno de amor y valores, donde pueda compartir 
                            todos mis logros y crear momentos inolvidables junto a las personas 
                            que más amo.
                        </p>
                    </div>
                    
                    <div class="goal-card fade-in">
                        <div class="goal-icon">
                            <i class="fas fa-hands-helping"></i>
                        </div>
                        <h3>Ayudar a Otros</h3>
                        <p>
                            Deseo usar mis conocimientos en tecnología para crear soluciones que 
                            mejoren la vida de las personas, contribuyendo al desarrollo de mi 
                            comunidad y sociedad.
                        </p>
                    </div>
                    
                    <div class="goal-card fade-in">
                        <div class="goal-icon">
                            <i class="fas fa-trophy"></i>
                        </div>
                        <h3>Alcanzar la Excelencia</h3>
                        <p>
                            Busco conseguir grandes logros profesionales que me permitan brindar 
                            estabilidad y felicidad a mi familia, siempre manteniendo un equilibrio 
                            entre el éxito y los valores humanos.
                        </p>
                    </div>
                </div>
                
                <div class="aspiration-quote fade-in">
                    <blockquote>
                        "Mi mayor satisfacción será ver a mi familia feliz y saber que mis conocimientos 
                        han servido para hacer del mundo un lugar mejor."
                    </blockquote>
                </div>
            </div>
        </div>
    </section>

    <!-- Call to Action -->
    <section class="cta-section fade-in">
        <div class="container">
            <div class="cta-content">
                <h2>Construyamos el futuro juntos</h2>
                <p>Si compartes mi visión o quieres conocer más sobre mi trabajo, conectemos.</p>
                <div class="cta-buttons">
                    <a href="/experiencia" class="btn btn-primary">
                        <i class="fas fa-briefcase"></i> Ver Mi Experiencia
                    </a>
                    <a href="#" class="btn btn-secondary">
                        <i class="fas fa-envelope"></i> Contactar
                    </a>
                </div>
            </div>
        </div>
    </section>
@endsection