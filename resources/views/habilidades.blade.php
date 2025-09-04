@extends('layouts.app')

@section('content')
    <!-- Hero Section -->
    <section class="skills-hero">
        <div class="particles-bg"></div>
        <div class="container">
            <div class="hero-content fade-in">
                <h1 class="page-title">
                    <span class="text-gradient">Mis Habilidades</span>
                </h1>
                <div class="typing-container">
                    <span class="typing-prefix">Soy </span>
                    <span class="typing-text"></span>
                </div>
                <p class="hero-subtitle">
                    Transformando líneas de código en soluciones innovadoras
                </p>
                <div class="code-stats">
                    <div class="stat-bubble">
                        <span class="stat-value" data-target="50000">0</span>
                        <span class="stat-label">Líneas de Código</span>
                    </div>
                    <div class="stat-bubble">
                        <span class="stat-value" data-target="15">0</span>
                        <span class="stat-label">Tecnologías Dominadas</span>
                    </div>
                    <div class="stat-bubble">
                        <span class="stat-value" data-target="100">0</span>
                        <span class="stat-label">% Pasión</span>
                    </div>
                </div>
            </div>
            <div class="scroll-hint">
                <div class="mouse">
                    <div class="wheel"></div>
                </div>
            </div>
        </div>
    </section>

    <!-- Technical Skills Section -->
    <section class="technical-skills">
        <div class="container">
            <h2 class="section-title fade-in">
                <span class="title-decoration">Habilidades Técnicas</span>
            </h2>

            <div class="skills-filter fade-in">
                <button class="filter-btn active" data-filter="all">Todas</button>
                <button class="filter-btn" data-filter="frontend">Frontend</button>
                <button class="filter-btn" data-filter="backend">Backend</button>
                <button class="filter-btn" data-filter="database">Base de Datos</button>
                <button class="filter-btn" data-filter="tools">Herramientas</button>
            </div>

            <div class="skills-container">
                <!-- Frontend Skills -->
                <div class="skill-category fade-in" data-category="frontend">
                    <h3 class="category-title">
                        <i class="fas fa-palette"></i> Frontend Development
                    </h3>
                    <div class="skills-list">
                        <div class="skill-item">
                            <div class="skill-header">
                                <span class="skill-name">HTML5 & CSS3</span>
                                <span class="skill-percentage">95%</span>
                            </div>
                            <div class="skill-bar">
                                <div class="skill-progress" data-progress="95"></div>
                            </div>
                            <div class="skill-tags">
                                <span class="tag">Semantic HTML</span>
                                <span class="tag">Flexbox</span>
                                <span class="tag">Grid</span>
                                <span class="tag">Animations</span>
                            </div>
                        </div>

                        <div class="skill-item">
                            <div class="skill-header">
                                <span class="skill-name">JavaScript</span>
                                <span class="skill-percentage">90%</span>
                            </div>
                            <div class="skill-bar">
                                <div class="skill-progress" data-progress="90"></div>
                            </div>
                            <div class="skill-tags">
                                <span class="tag">ES6+</span>
                                <span class="tag">Async/Await</span>
                                <span class="tag">DOM</span>
                            </div>
                        </div>

                        <div class="skill-item">
                            <div class="skill-header">
                                <span class="skill-name">Vue.js</span>
                                <span class="skill-percentage">85%</span>
                            </div>
                            <div class="skill-bar">
                                <div class="skill-progress" data-progress="85"></div>
                            </div>
                            <div class="skill-tags">
                                <span class="tag">Composition API</span>
                                <span class="tag">Vuex</span>
                                <span class="tag">Router</span>
                            </div>
                        </div>

                        <div class="skill-item">
                            <div class="skill-header">
                                <span class="skill-name">Tailwind CSS</span>
                                <span class="skill-percentage">88%</span>
                            </div>
                            <div class="skill-bar">
                                <div class="skill-progress" data-progress="88"></div>
                            </div>
                            <div class="skill-tags">
                                <span class="tag">Utility-First</span>
                                <span class="tag">Responsive</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Backend Skills -->
                <div class="skill-category fade-in" data-category="backend">
                    <h3 class="category-title">
                        <i class="fas fa-server"></i> Backend Development
                    </h3>
                    <div class="skills-list">
                        <div class="skill-item">
                            <div class="skill-header">
                                <span class="skill-name">PHP & Laravel</span>
                                <span class="skill-percentage">92%</span>
                            </div>
                            <div class="skill-bar">
                                <div class="skill-progress" data-progress="92"></div>
                            </div>
                            <div class="skill-tags">
                                <span class="tag">MVC</span>
                                <span class="tag">Eloquent ORM</span>
                                <span class="tag">APIs</span>
                            </div>
                        </div>

                        <div class="skill-item">
                            <div class="skill-header">
                                <span class="skill-name">Node.js</span>
                                <span class="skill-percentage">80%</span>
                            </div>
                            <div class="skill-bar">
                                <div class="skill-progress" data-progress="80"></div>
                            </div>
                            <div class="skill-tags">
                                <span class="tag">Express</span>
                                <span class="tag">NPM</span>
                                <span class="tag">REST</span>
                            </div>
                        </div>

                        <div class="skill-item">
                            <div class="skill-header">
                                <span class="skill-name">Python</span>
                                <span class="skill-percentage">75%</span>
                            </div>
                            <div class="skill-bar">
                                <div class="skill-progress" data-progress="75"></div>
                            </div>
                            <div class="skill-tags">
                                <span class="tag">Automation</span>
                                <span class="tag">Data Processing</span>
                            </div>
                        </div>

                        <div class="skill-item">
                            <div class="skill-header">
                                <span class="skill-name">API Development</span>
                                <span class="skill-percentage">90%</span>
                            </div>
                            <div class="skill-bar">
                                <div class="skill-progress" data-progress="90"></div>
                            </div>
                            <div class="skill-tags">
                                <span class="tag">RESTful</span>
                                <span class="tag">JWT</span>
                                <span class="tag">OAuth</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Database Skills -->
                <div class="skill-category fade-in" data-category="database">
                    <h3 class="category-title">
                        <i class="fas fa-database"></i> Bases de Datos
                    </h3>
                    <div class="skills-list">
                        <div class="skill-item">
                            <div class="skill-header">
                                <span class="skill-name">MySQL</span>
                                <span class="skill-percentage">88%</span>
                            </div>
                            <div class="skill-bar">
                                <div class="skill-progress" data-progress="88"></div>
                            </div>
                            <div class="skill-tags">
                                <span class="tag">Queries Complejas</span>
                                <span class="tag">Optimización</span>
                            </div>
                        </div>

                        <div class="skill-item">
                            <div class="skill-header">
                                <span class="skill-name">PostgreSQL</span>
                                <span class="skill-percentage">82%</span>
                            </div>
                            <div class="skill-bar">
                                <div class="skill-progress" data-progress="82"></div>
                            </div>
                            <div class="skill-tags">
                                <span class="tag">JSONB</span>
                                <span class="tag">Índices</span>
                            </div>
                        </div>

                        <div class="skill-item">
                            <div class="skill-header">
                                <span class="skill-name">MongoDB</span>
                                <span class="skill-percentage">70%</span>
                            </div>
                            <div class="skill-bar">
                                <div class="skill-progress" data-progress="70"></div>
                            </div>
                            <div class="skill-tags">
                                <span class="tag">NoSQL</span>
                                <span class="tag">Aggregation</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Tools & DevOps -->
                <div class="skill-category fade-in" data-category="tools">
                    <h3 class="category-title">
                        <i class="fas fa-tools"></i> Herramientas & DevOps
                    </h3>
                    <div class="skills-list">
                        <div class="skill-item">
                            <div class="skill-header">
                                <span class="skill-name">Git & GitHub</span>
                                <span class="skill-percentage">90%</span>
                            </div>
                            <div class="skill-bar">
                                <div class="skill-progress" data-progress="90"></div>
                            </div>
                            <div class="skill-tags">
                                <span class="tag">Version Control</span>
                                <span class="tag">CI/CD</span>
                            </div>
                        </div>

                        <div class="skill-item">
                            <div class="skill-header">
                                <span class="skill-name">Google Cloud Platform</span>
                                <span class="skill-percentage">85%</span>
                            </div>
                            <div class="skill-bar">
                                <div class="skill-progress" data-progress="85"></div>
                            </div>
                            <div class="skill-tags">
                                <span class="tag">App Engine</span>
                                <span class="tag">Cloud Functions</span>
                            </div>
                        </div>

                        <div class="skill-item">
                            <div class="skill-header">
                                <span class="skill-name">Docker</span>
                                <span class="skill-percentage">78%</span>
                            </div>
                            <div class="skill-bar">
                                <div class="skill-progress" data-progress="78"></div>
                            </div>
                            <div class="skill-tags">
                                <span class="tag">Containers</span>
                                <span class="tag">Compose</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Soft Skills Section -->
    <section class="soft-skills">
        <div class="container">
            <h2 class="section-title fade-in">
                <span class="title-decoration">Habilidades Blandas</span>
            </h2>

            <div class="soft-skills-grid">
                <div class="soft-skill-card fade-in">
                    <div class="hexagon">
                        <i class="fas fa-users"></i>
                    </div>
                    <h3>Trabajo en Equipo</h3>
                    <p>Colaboración efectiva y comunicación clara con equipos multidisciplinarios</p>
                </div>

                <div class="soft-skill-card fade-in">
                    <div class="hexagon">
                        <i class="fas fa-lightbulb"></i>
                    </div>
                    <h3>Resolución de Problemas</h3>
                    <p>Análisis lógico y creativo para encontrar soluciones óptimas</p>
                </div>

                <div class="soft-skill-card fade-in">
                    <div class="hexagon">
                        <i class="fas fa-rocket"></i>
                    </div>
                    <h3>Innovación</h3>
                    <p>Búsqueda constante de nuevas tecnologías y mejores prácticas</p>
                </div>

                <div class="soft-skill-card fade-in">
                    <div class="hexagon">
                        <i class="fas fa-clock"></i>
                    </div>
                    <h3>Gestión del Tiempo</h3>
                    <p>Organización eficiente y cumplimiento de deadlines</p>
                </div>

                <div class="soft-skill-card fade-in">
                    <div class="hexagon">
                        <i class="fas fa-graduation-cap"></i>
                    </div>
                    <h3>Aprendizaje Continuo</h3>
                    <p>Actualización constante en nuevas tecnologías y tendencias</p>
                </div>

                <div class="soft-skill-card fade-in">
                    <div class="hexagon">
                        <i class="fas fa-comments"></i>
                    </div>
                    <h3>Comunicación</h3>
                    <p>Explicación clara de conceptos técnicos a diferentes audiencias</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Skills Radar Chart -->
    <section class="skills-radar">
        <div class="container">
            <h2 class="section-title fade-in">
                <span class="title-decoration">Perfil de Competencias</span>
            </h2>
            
            <div class="radar-container fade-in">
                <canvas id="skillsRadar"></canvas>
                <div class="radar-legend">
                    <div class="legend-item">
                        <span class="legend-color" style="background: #667eea;"></span>
                        <span>Nivel Actual</span>
                    </div>
                    <div class="legend-item">
                        <span class="legend-color" style="background: #f59e0b;"></span>
                        <span>Objetivo 2025</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Code Showcase -->
    <section class="code-showcase">
        <div class="container">
            <h2 class="section-title fade-in">
                <span class="title-decoration">Mi Código en Acción</span>
            </h2>

            <div class="code-tabs fade-in">
                <button class="code-tab active" data-lang="laravel">Laravel</button>
                <button class="code-tab" data-lang="javascript">JavaScript</button>
                <button class="code-tab" data-lang="vue">Vue.js</button>
            </div>

            <div class="code-container">
                <div class="code-window active" data-lang="laravel">
                    <div class="code-header">
                        <div class="code-dots">
                            <span class="dot red"></span>
                            <span class="dot yellow"></span>
                            <span class="dot green"></span>
                        </div>
                        <span class="code-title">UserController.php</span>
                    </div>
                    <pre class="code-content"><code class="language-php">namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(Request $request)
    {
        $users = User::with(['profile', 'roles'])
            ->when($request->search, function ($query, $search) {
                return $query->where('name', 'like', "%{$search}%")
                    ->orWhere('email', 'like', "%{$search}%");
            })
            ->orderBy('created_at', 'desc')
            ->paginate(15);

        return view('users.index', compact('users'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:8|confirmed'
        ]);

        $user = User::create($validated);
        
        return redirect()
            ->route('users.show', $user)
            ->with('success', 'Usuario creado exitosamente');
    }
}</code></pre>
                </div>

                <div class="code-window" data-lang="javascript">
                    <div class="code-header">
                        <div class="code-dots">
                            <span class="dot red"></span>
                            <span class="dot yellow"></span>
                            <span class="dot green"></span>
                        </div>
                        <span class="code-title">api-service.js</span>
                    </div>
                    <pre class="code-content"><code class="language-javascript">class ApiService {
    constructor(baseURL) {
        this.baseURL = baseURL;
        this.headers = {
            'Content-Type': 'application/json',
            'Accept': 'application/json'
        };
    }

    async request(endpoint, options = {}) {
        const url = `${this.baseURL}${endpoint}`;
        const config = {
            ...options,
            headers: { ...this.headers, ...options.headers }
        };

        try {
            const response = await fetch(url, config);
            
            if (!response.ok) {
                throw new Error(`HTTP error! status: ${response.status}`);
            }
            
            return await response.json();
        } catch (error) {
            console.error('API request failed:', error);
            throw error;
        }
    }

    get(endpoint) {
        return this.request(endpoint, { method: 'GET' });
    }

    post(endpoint, data) {
        return this.request(endpoint, {
            method: 'POST',
            body: JSON.stringify(data)
        });
    }
}</code></pre>
                </div>

                <div class="code-window" data-lang="vue">
                    <div class="code-header">
                        <div class="code-dots">
                            <span class="dot red"></span>
                            <span class="dot yellow"></span>
                            <span class="dot green"></span>
                        </div>
                        <span class="code-title">UserProfile.vue</span>
                    </div>
                    <pre class="code-content"><code class="language-vue">&lt;template&gt;
  &lt;div class="user-profile"&gt;
    &lt;div v-if="loading" class="spinner"&gt;Cargando...&lt;/div&gt;
    
    &lt;div v-else class="profile-content"&gt;
      &lt;img :src="user.avatar" :alt="user.name" class="avatar"&gt;
      
      &lt;div class="user-info"&gt;
        &lt;h2&gt;@{{ user.name }}&lt;/h2&gt;
        &lt;p class="email"&gt;@{{ user.email }}&lt;/p&gt;
        
        &lt;div class="stats"&gt;
          &lt;div class="stat-item" v-for="stat in userStats" :key="stat.label"&gt;
            &lt;span class="stat-value"&gt;@{{ stat.value }}&lt;/span&gt;
            &lt;span class="stat-label"&gt;@{{ stat.label }}&lt;/span&gt;
          &lt;/div&gt;
        &lt;/div&gt;
      &lt;/div&gt;
    &lt;/div&gt;
  &lt;/div&gt;
&lt;/template&gt;

&lt;script setup&gt;
import { ref, onMounted, computed } from 'vue';
import { useRoute } from 'vue-router';
import { useUserStore } from '@/stores/user';

const route = useRoute();
const userStore = useUserStore();

const loading = ref(true);
const user = ref({});

const userStats = computed(() =&gt; [
  { label: 'Proyectos', value: user.value.projectsCount || 0 },
  { label: 'Commits', value: user.value.commitsCount || 0 },
  { label: 'Seguidores', value: user.value.followersCount || 0 }
]);

onMounted(async () =&gt; {
  try {
    user.value = await userStore.fetchUser(route.params.id);
  } finally {
    loading.value = false;
  }
});
&lt;/script&gt;</code></pre>
                </div>
            </div>
        </div>
    </section>

    <!-- Learning Path -->
    <section class="learning-path">
        <div class="container">
            <h2 class="section-title fade-in">
                <span class="title-decoration">Mi Ruta de Aprendizaje</span>
            </h2>

            <div class="timeline-learning">
                <div class="timeline-line"></div>
                
                <div class="learning-item fade-in completed">
                    <div class="learning-dot">
                        <i class="fas fa-check"></i>
                    </div>
                    <div class="learning-content">
                        <h3>Fundamentos de Programación</h3>
                        <p>HTML, CSS, JavaScript básico</p>
                        <span class="learning-date">Completado</span>
                    </div>
                </div>

                <div class="learning-item fade-in completed">
                    <div class="learning-dot">
                        <i class="fas fa-check"></i>
                    </div>
                    <div class="learning-content">
                        <h3>Desarrollo Backend</h3>
                        <p>PHP, Laravel, APIs REST</p>
                        <span class="learning-date">Completado</span>
                    </div>
                </div>

                <div class="learning-item fade-in completed">
                    <div class="learning-dot">
                        <i class="fas fa-check"></i>
                    </div>
                    <div class="learning-content">
                        <h3>Frameworks Frontend</h3>
                        <p>Vue.js, Tailwind CSS, Alpine.js</p>
                        <span class="learning-date">Completado</span>
                    </div>
                </div>

                <div class="learning-item fade-in in-progress">
                    <div class="learning-dot">
                        <i class="fas fa-spinner"></i>
                    </div>
                    <div class="learning-content">
                        <h3>Cloud & DevOps</h3>
                        <p>GCP, Docker, Kubernetes</p>
                        <span class="learning-date">En progreso</span>
                    </div>
                </div>

                <div class="learning-item fade-in future">
                    <div class="learning-dot">
                        <i class="fas fa-lock"></i>
                    </div>
                    <div class="learning-content">
                        <h3>Machine Learning</h3>
                        <p>Python, TensorFlow, Data Science</p>
                        <span class="learning-date">Próximo objetivo</span>
                    </div>
                </div>

                <div class="learning-item fade-in future">
                    <div class="learning-dot">
                        <i class="fas fa-lock"></i>
                    </div>
                    <div class="learning-content">
                        <h3>Blockchain Development</h3>
                        <p>Smart Contracts, Web3</p>
                        <span class="learning-date">Futuro</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="skills-cta fade-in">
        <div class="container">
            <div class="cta-content">
                <h2>¿Necesitas estas habilidades en tu proyecto?</h2>
                <p>Trabajemos juntos para crear algo extraordinario</p>
                <div class="cta-buttons">
                    <a href="/experiencia" class="btn btn-primary">
                        <i class="fas fa-briefcase"></i> Ver Proyectos
                    </a>
                    <a href="/" class="btn btn-secondary">
                        <i class="fas fa-user"></i> Conoce Más
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Chart.js for Radar Chart -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <style>
        /* Skills Page Specific Styles */
        .skills-hero {
            position: relative;
            min-height: 100vh;
            display: flex;
            align-items: center;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            overflow: hidden;
        }

        .particles-bg {
            position: absolute;
            width: 100%;
            height: 100%;
            overflow: hidden;
        }

        .particles-bg::before {
            content: '';
            position: absolute;
            width: 200%;
            height: 200%;
            top: -50%;
            left: -50%;
            background-image: radial-gradient(circle, rgba(255,255,255,0.1) 1px, transparent 1px);
            background-size: 50px 50px;
            animation: float 20s linear infinite;
        }

        @keyframes float {
            0% { transform: translate(-50px, -50px); }
            100% { transform: translate(50px, 50px); }
        }

        .skills-hero .hero-content {
            position: relative;
            z-index: 1;
            text-align: center;
            color: white;
            padding: 2rem;
        }

        .text-gradient {
            background: linear-gradient(135deg, #fff, #e0e7ff);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            font-size: 4rem;
            font-weight: 900;
        }

        .typing-container {
            font-size: 1.5rem;
            margin: 1rem 0;
            height: 2rem;
        }

        .typing-prefix {
            opacity: 0.9;
        }

        .typing-text::after {
            content: '|';
            animation: blink 1s infinite;
        }

        .hero-subtitle {
            font-size: 1.1rem;
            opacity: 0.9;
            margin-bottom: 3rem;
        }

        .code-stats {
            display: flex;
            justify-content: center;
            gap: 3rem;
            flex-wrap: wrap;
        }

        .stat-bubble {
            text-align: center;
            padding: 1.5rem;
            background: rgba(255, 255, 255, 0.1);
            border-radius: 20px;
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.2);
        }

        .stat-value {
            display: block;
            font-size: 2.5rem;
            font-weight: 700;
            margin-bottom: 0.5rem;
        }

        .stat-label {
            font-size: 0.9rem;
            opacity: 0.9;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        .scroll-hint {
            position: absolute;
            bottom: 2rem;
            left: 50%;
            transform: translateX(-50%);
            animation: bounce 2s infinite;
        }

        .mouse {
            width: 30px;
            height: 50px;
            border: 2px solid rgba(255, 255, 255, 0.8);
            border-radius: 15px;
            position: relative;
        }

        .wheel {
            width: 4px;
            height: 8px;
            background: rgba(255, 255, 255, 0.8);
            border-radius: 2px;
            position: absolute;
            top: 10px;
            left: 50%;
            transform: translateX(-50%);
            animation: scroll 2s infinite;
        }

        @keyframes scroll {
            0% { opacity: 1; top: 10px; }
            100% { opacity: 0; top: 25px; }
        }

        /* Technical Skills */
        .technical-skills {
            padding: 5rem 0;
            background: white;
        }

        .skills-filter {
            display: flex;
            justify-content: center;
            gap: 1rem;
            margin-bottom: 3rem;
            flex-wrap: wrap;
        }

        .filter-btn {
            padding: 0.75rem 1.5rem;
            background: var(--light-color);
            border: none;
            border-radius: 30px;
            color: var(--text-secondary);
            font-weight: 600;
            cursor: pointer;
            transition: var(--transition);
        }

        .filter-btn.active,
        .filter-btn:hover {
            background: var(--primary-color);
            color: white;
            transform: translateY(-2px);
            box-shadow: var(--shadow-md);
        }

        .skills-container {
            display: grid;
            gap: 3rem;
        }

        .skill-category {
            background: var(--light-color);
            padding: 2rem;
            border-radius: var(--border-radius);
        }

        .category-title {
            font-size: 1.5rem;
            margin-bottom: 2rem;
            color: var(--primary-color);
            display: flex;
            align-items: center;
            gap: 1rem;
        }

        .category-title i {
            font-size: 1.25rem;
        }

        .skills-list {
            display: grid;
            gap: 2rem;
        }

        .skill-item {
            background: white;
            padding: 1.5rem;
            border-radius: var(--border-radius);
            box-shadow: var(--shadow-sm);
        }

        .skill-header {
            display: flex;
            justify-content: space-between;
            margin-bottom: 1rem;
        }

        .skill-name {
            font-weight: 600;
            color: var(--text-primary);
        }

        .skill-percentage {
            color: var(--primary-color);
            font-weight: 700;
        }

        .skill-bar {
            height: 10px;
            background: var(--light-color);
            border-radius: 10px;
            overflow: hidden;
            margin-bottom: 1rem;
        }

        .skill-progress {
            height: 100%;
            background: linear-gradient(90deg, var(--primary-color), var(--accent-color));
            border-radius: 10px;
            width: 0;
            transition: width 2s ease;
            position: relative;
            overflow: hidden;
        }

        .skill-progress::after {
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

        .skill-tags {
            display: flex;
            flex-wrap: wrap;
            gap: 0.5rem;
        }

        .skill-tags .tag {
            padding: 0.25rem 0.75rem;
            background: var(--light-color);
            color: var(--text-secondary);
            border-radius: 15px;
            font-size: 0.85rem;
        }

        /* Soft Skills */
        .soft-skills {
            padding: 5rem 0;
            background: var(--light-color);
        }

        .soft-skills-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 2rem;
            margin-top: 3rem;
        }

        .soft-skill-card {
            text-align: center;
            padding: 2rem;
            background: white;
            border-radius: var(--border-radius);
            box-shadow: var(--shadow-md);
            transition: var(--transition);
        }

        .soft-skill-card:hover {
            transform: translateY(-10px);
            box-shadow: var(--shadow-xl);
        }

        .hexagon {
            width: 80px;
            height: 80px;
            margin: 0 auto 1.5rem;
            background: linear-gradient(135deg, var(--primary-color), var(--secondary-color));
            clip-path: polygon(30% 0%, 70% 0%, 100% 30%, 100% 70%, 70% 100%, 30% 100%, 0% 70%, 0% 30%);
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 2rem;
        }

        .soft-skill-card h3 {
            margin-bottom: 1rem;
            color: var(--text-primary);
        }

        .soft-skill-card p {
            color: var(--text-secondary);
            line-height: 1.6;
        }

        /* Skills Radar */
        .skills-radar {
            padding: 5rem 0;
            background: white;
        }

        .radar-container {
            max-width: 600px;
            margin: 3rem auto;
            position: relative;
        }

        #skillsRadar {
            max-width: 100%;
        }

        .radar-legend {
            display: flex;
            justify-content: center;
            gap: 2rem;
            margin-top: 2rem;
        }

        .legend-item {
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }

        .legend-color {
            width: 20px;
            height: 20px;
            border-radius: 4px;
        }

        /* Code Showcase */
        .code-showcase {
            padding: 5rem 0;
            background: var(--light-color);
        }

        .code-tabs {
            display: flex;
            justify-content: center;
            gap: 1rem;
            margin-bottom: 2rem;
        }

        .code-tab {
            padding: 0.75rem 1.5rem;
            background: white;
            border: none;
            border-radius: var(--border-radius) var(--border-radius) 0 0;
            color: var(--text-secondary);
            font-weight: 600;
            cursor: pointer;
            transition: var(--transition);
        }

        .code-tab.active {
            background: var(--dark-color);
            color: white;
        }

        .code-container {
            max-width: 900px;
            margin: 0 auto;
        }

        .code-window {
            display: none;
            background: var(--dark-color);
            border-radius: var(--border-radius);
            overflow: hidden;
            box-shadow: var(--shadow-xl);
        }

        .code-window.active {
            display: block;
        }

        .code-header {
            background: #2d3748;
            padding: 1rem;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .code-dots {
            display: flex;
            gap: 0.5rem;
        }

        .dot {
            width: 12px;
            height: 12px;
            border-radius: 50%;
        }

        .dot.red { background: #ff5f56; }
        .dot.yellow { background: #ffbd2e; }
        .dot.green { background: #27c93f; }

        .code-title {
            color: white;
            font-size: 0.9rem;
            opacity: 0.8;
        }

        .code-content {
            padding: 2rem;
            color: #e2e8f0;
            font-family: 'Monaco', 'Menlo', monospace;
            font-size: 0.9rem;
            line-height: 1.6;
            overflow-x: auto;
        }

        /* Learning Path */
        .learning-path {
            padding: 5rem 0;
            background: white;
        }

        .timeline-learning {
            position: relative;
            max-width: 800px;
            margin: 3rem auto;
            padding: 0 2rem;
        }

        .timeline-line {
            position: absolute;
            left: 50%;
            top: 0;
            bottom: 0;
            width: 2px;
            background: linear-gradient(180deg, var(--primary-color), var(--accent-color));
            transform: translateX(-50%);
        }

        .learning-item {
            position: relative;
            margin-bottom: 3rem;
            display: grid;
            grid-template-columns: 1fr auto 1fr;
            align-items: center;
            gap: 2rem;
        }

        .learning-item:nth-child(even) .learning-content {
            grid-column: 3;
            text-align: left;
        }

        .learning-item:nth-child(odd) .learning-content {
            grid-column: 1;
            text-align: right;
        }

        .learning-dot {
            grid-column: 2;
            width: 50px;
            height: 50px;
            background: white;
            border: 3px solid var(--primary-color);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--primary-color);
            z-index: 1;
        }

        .learning-item.completed .learning-dot {
            background: var(--primary-color);
            color: white;
        }

        .learning-item.in-progress .learning-dot {
            background: var(--accent-color);
            color: white;
            animation: pulse 2s infinite;
        }

        .learning-item.in-progress .learning-dot i {
            animation: spin 2s linear infinite;
        }

        @keyframes spin {
            0% { transform: rotate(0deg); }
            100% { transform: rotate(360deg); }
        }

        .learning-item.future .learning-dot {
            background: var(--light-color);
            border-color: var(--text-secondary);
            color: var(--text-secondary);
        }

        .learning-content {
            background: white;
            padding: 1.5rem;
            border-radius: var(--border-radius);
            box-shadow: var(--shadow-md);
        }

        .learning-content h3 {
            margin-bottom: 0.5rem;
            color: var(--text-primary);
        }

        .learning-content p {
            color: var(--text-secondary);
            margin-bottom: 0.5rem;
        }

        .learning-date {
            display: inline-block;
            padding: 0.25rem 0.75rem;
            background: var(--light-color);
            color: var(--primary-color);
            border-radius: 15px;
            font-size: 0.85rem;
            font-weight: 600;
        }

        /* Skills CTA */
        .skills-cta {
            padding: 5rem 0;
            background: linear-gradient(135deg, var(--primary-color), var(--secondary-color));
            color: white;
            text-align: center;
        }

        .skills-cta h2 {
            color: white;
            font-size: 2.5rem;
            margin-bottom: 1rem;
        }

        .skills-cta p {
            font-size: 1.25rem;
            opacity: 0.95;
            margin-bottom: 2rem;
        }

        /* Responsive */
        @media (max-width: 768px) {
            .text-gradient {
                font-size: 2.5rem;
            }

            .code-stats {
                gap: 1.5rem;
            }

            .soft-skills-grid {
                grid-template-columns: 1fr;
            }

            .learning-item {
                grid-template-columns: auto 1fr;
                gap: 1rem;
            }

            .learning-item .learning-content {
                grid-column: 2 !important;
                text-align: left !important;
            }

            .learning-dot {
                grid-column: 1;
            }

            .timeline-line {
                left: 25px;
            }
        }
    </style>

    <script>
        // Typing animation
        const roles = ['Desarrollador Full-Stack', 'Creador de Soluciones', 'Apasionado por el Código', 'Innovador Digital'];
        let currentRole = 0;
        let currentChar = 0;
        let isDeleting = false;
        const typingElement = document.querySelector('.typing-text');

        function type() {
            if (!typingElement) return;
            
            const role = roles[currentRole];
            
            if (isDeleting) {
                typingElement.textContent = role.substring(0, currentChar - 1);
                currentChar--;
            } else {
                typingElement.textContent = role.substring(0, currentChar + 1);
                currentChar++;
            }
            
            if (!isDeleting && currentChar === role.length) {
                isDeleting = true;
                setTimeout(type, 2000);
            } else if (isDeleting && currentChar === 0) {
                isDeleting = false;
                currentRole = (currentRole + 1) % roles.length;
                setTimeout(type, 500);
            } else {
                setTimeout(type, isDeleting ? 50 : 100);
            }
        }

        // Counter animation
        function animateCounters() {
            const counters = document.querySelectorAll('.stat-value[data-target]');
            
            counters.forEach(counter => {
                const target = parseInt(counter.getAttribute('data-target'));
                const increment = target / 100;
                let current = 0;
                
                const updateCounter = () => {
                    current += increment;
                    if (current < target) {
                        counter.textContent = Math.ceil(current).toLocaleString();
                        requestAnimationFrame(updateCounter);
                    } else {
                        counter.textContent = target.toLocaleString();
                    }
                };
                
                // Start animation when element is in view
                const observer = new IntersectionObserver((entries) => {
                    entries.forEach(entry => {
                        if (entry.isIntersecting) {
                            updateCounter();
                            observer.unobserve(entry.target);
                        }
                    });
                });
                
                observer.observe(counter);
            });
        }

        // Skill bars animation
        function animateSkillBars() {
            const skillBars = document.querySelectorAll('.skill-progress');
            
            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        const progress = entry.target.getAttribute('data-progress');
                        entry.target.style.width = progress + '%';
                    }
                });
            }, { threshold: 0.5 });
            
            skillBars.forEach(bar => observer.observe(bar));
        }

        // Filter skills
        document.querySelectorAll('.filter-btn').forEach(btn => {
            btn.addEventListener('click', () => {
                const filter = btn.getAttribute('data-filter');
                
                // Update active button
                document.querySelectorAll('.filter-btn').forEach(b => b.classList.remove('active'));
                btn.classList.add('active');
                
                // Filter categories
                document.querySelectorAll('.skill-category').forEach(category => {
                    if (filter === 'all') {
                        category.style.display = 'block';
                    } else {
                        const categoryType = category.getAttribute('data-category');
                        category.style.display = categoryType === filter ? 'block' : 'none';
                    }
                });
            });
        });

        // Code tabs
        document.querySelectorAll('.code-tab').forEach(tab => {
            tab.addEventListener('click', () => {
                const lang = tab.getAttribute('data-lang');
                
                // Update active tab
                document.querySelectorAll('.code-tab').forEach(t => t.classList.remove('active'));
                tab.classList.add('active');
                
                // Show corresponding code window
                document.querySelectorAll('.code-window').forEach(window => {
                    window.classList.toggle('active', window.getAttribute('data-lang') === lang);
                });
            });
        });

        // Radar Chart
        document.addEventListener('DOMContentLoaded', () => {
            type();
            animateCounters();
            animateSkillBars();
            
            // Initialize radar chart
            const ctx = document.getElementById('skillsRadar');
            if (ctx) {
                new Chart(ctx, {
                    type: 'radar',
                    data: {
                        labels: ['Frontend', 'Backend', 'Databases', 'DevOps', 'APIs', 'Problem Solving'],
                        datasets: [{
                            label: 'Nivel Actual',
                            data: [90, 92, 85, 80, 90, 95],
                            backgroundColor: 'rgba(102, 126, 234, 0.2)',
                            borderColor: 'rgba(102, 126, 234, 1)',
                            borderWidth: 2,
                            pointBackgroundColor: 'rgba(102, 126, 234, 1)',
                            pointBorderColor: '#fff',
                            pointHoverBackgroundColor: '#fff',
                            pointHoverBorderColor: 'rgba(102, 126, 234, 1)'
                        }, {
                            label: 'Objetivo 2025',
                            data: [95, 95, 90, 90, 95, 98],
                            backgroundColor: 'rgba(245, 158, 11, 0.2)',
                            borderColor: 'rgba(245, 158, 11, 1)',
                            borderWidth: 2,
                            pointBackgroundColor: 'rgba(245, 158, 11, 1)',
                            pointBorderColor: '#fff',
                            pointHoverBackgroundColor: '#fff',
                            pointHoverBorderColor: 'rgba(245, 158, 11, 1)'
                        }]
                    },
                    options: {
                        responsive: true,
                        maintainAspectRatio: true,
                        scales: {
                            r: {
                                beginAtZero: true,
                                max: 100,
                                ticks: {
                                    stepSize: 20
                                }
                            }
                        },
                        plugins: {
                            legend: {
                                display: false
                            }
                        }
                    }
                });
            }
        });
    </script>
@endsection