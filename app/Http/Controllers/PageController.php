<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        $data = $this->getPortfolioData();
        return view('dashboard', $data);
    }

    public function projects()
    {
        $data = $this->getPortfolioData();
        return view('projects.index', $data);
    }

    public function certificates()
    {
        $data = $this->getPortfolioData();
        return view('certificates.index', $data);
    }

    public function filterProjects($category)
    {
        $data = $this->getPortfolioData();
        $projects = $data['projects'];

        if ($category !== 'all') {
            $projects = array_filter($projects, function($p) use ($category) {
                return strtolower($p['category']) === strtolower($category);
            });
        }

        if (request()->ajax()) {
            return view('projects.partials.grid', compact('projects'))->render();
        }

        return view('projects.index', array_merge($data, ['projects' => $projects]));
    }

    public function getPortfolioData()
    {
        $skills = [
            ['name' => 'Laravel / PHP', 'level' => 85, 'icon' => 'https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/laravel/laravel-original.svg'],
            ['name' => 'Python', 'level' => 80, 'icon' => 'https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/python/python-original.svg'],
            ['name' => 'SQL Server', 'level' => 80, 'icon' => 'https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/microsoftsqlserver/microsoftsqlserver-plain.svg'],
            ['name' => 'Machine Learning (CNN/LSTM)', 'level' => 75, 'icon' => 'https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/tensorflow/tensorflow-original.svg'],
            ['name' => 'Data Analysis & NLP', 'level' => 70, 'icon' => 'https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/pandas/pandas-original.svg'],
            ['name' => 'TailwindCSS', 'level' => 65, 'icon' => 'https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/tailwindcss/tailwindcss-original.svg'],
            ['name' => 'Figma / UI/UX Design', 'level' => 60, 'icon' => 'https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/figma/figma-original.svg'],
            ['name' => 'Computer Vision', 'level' => 70, 'icon' => 'https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/opencv/opencv-original.svg'],
        ];

        $experiences = [
            [
                'period' => 'Recent Internship',
                'title' => 'AI Engineer',
                'company' => 'Dicoding DBS Foundation',
                'description' => 'Created and deployed a web application accessible at Dicoding DBS Foundation.'
            ],
            [
                'period' => 'Professional Experience',
                'title' => 'IT Support and System Developer',
                'company' => 'PT Eloda Mitra',
                'description' => 'Developed an integrated web-based "i-Ticket" system for internal reporting utilizing PHP and SQL Server. Handled daily IT support and managed system infrastructure.'
            ],
            [
                'period' => 'Class of 2023 - Present',
                'title' => 'Informatics Engineering Student',
                'company' => 'State University of Surabaya (UNESA)',
                'description' => 'Active student (Class of 2023) focusing on software engineering, algorithm logic, and complex data science implementations.'
            ]
        ];

        $projects = [
            [
                'id' => 1,
                'title' => 'i-Ticket Reporting System',
                'category' => 'Web App',
                'description' => 'A web-based ticketing and reporting system developed during professional placement to streamline internal workflow.',
                'thumbnail' => 'https://placehold.co/800x600/1e293b/06b6d4?text=i-Ticket',
                'status' => 'completed',
                'status_badge' => 'bg-emerald-500/20 text-emerald-400',
                'tech_stack' => ['PHP', 'SQL Server', 'Web'],
                'github_url' => '#',
                'live_url' => null,
                'project_date' => '2024-06-01',
            ],
            [
                'id' => 2,
                'title' => 'Game Review Sentiment Analysis',
                'category' => 'Machine Learning / NLP',
                'description' => 'Scraped and processed a dataset of 3,274 video game reviews to build an NLP model that analyzes and classifies user sentiment.',
                'thumbnail' => 'https://placehold.co/800x600/1e293b/9333ea?text=Sentiment+Analysis',
                'status' => 'completed',
                'status_badge' => 'bg-emerald-500/20 text-emerald-400',
                'tech_stack' => ['Python', 'NLP', 'Data Scraping'],
                'github_url' => 'https://github.com/Benhard121/Game-Review-Sentiment-Analysis',
                'live_url' => null,
                'project_date' => '2023-11-10',
            ],
            [
                'id' => 3,
                'title' => 'Platform Analisis Sentimen Berita Ekonomi',
                'category' => 'AI Engineer & Fullstack',
                'description' => 'A collaborative group project aimed at analyzing sentiment trends in economic news articles. This web application allows users to input news articles and get real-time sentiment analysis results.',
                'thumbnail' => 'https://placehold.co/800x600/1e293b/06b6d4?text=Sentimen+Analisis',
                'status' => 'completed',
                'status_badge' => 'bg-emerald-500/20 text-emerald-400',
                'tech_stack' => ['Laravel', 'Python', 'NLP', 'Machine Learning', 'Fullstack'],
                'github_url' => null,
                'live_url' => 'https://sentimen-news-production.up.railway.app/',
                'project_date' => '2025-01-15',
            ],
            [
                'id' => 4,
                'title' => 'JadiSigma',
                'category' => 'Web App',
                'description' => 'A web-based application built to streamline sigma-related processes with an intuitive interface and efficient workflow management.',
                'thumbnail' => 'https://placehold.co/800x600/1e293b/9333ea?text=JadiSigma',
                'status' => 'completed',
                'status_badge' => 'bg-emerald-500/20 text-emerald-400',
                'tech_stack' => ['Web', 'Fullstack'],
                'github_url' => 'https://github.com/Benhard121/JadiSigma',
                'live_url' => null,
                'project_date' => '2025-06-01',
            ],
            [
                'id' => 5,
                'title' => 'Scientific Computing Python',
                'category' => 'Python',
                'description' => 'A comprehensive collection of scientific computing implementations in Python, covering numerical methods, mathematical modeling, data visualization, and computational algorithms for solving complex scientific problems.',
                'thumbnail' => 'https://placehold.co/800x600/1e293b/06b6d4?text=Scientific+Computing',
                'status' => 'completed',
                'status_badge' => 'bg-emerald-500/20 text-emerald-400',
                'tech_stack' => ['Python', 'NumPy', 'SciPy', 'Matplotlib'],
                'github_url' => 'https://github.com/Benhard121/Scientific-Computing-Python',
                'live_url' => null,
                'project_date' => '2025-01-10',
            ],
            [
                'id' => 6,
                'title' => 'Game Edukasi BrainBoost',
                'category' => 'UI/UX Design',
                'description' => 'An interactive educational game design crafted in Figma, featuring engaging UI/UX for brain-training activities. The prototype includes multiple game mechanics designed to boost cognitive skills through fun and interactive learning experiences.',
                'thumbnail' => 'https://placehold.co/800x600/1e293b/9333ea?text=BrainBoost+Game',
                'status' => 'completed',
                'status_badge' => 'bg-emerald-500/20 text-emerald-400',
                'tech_stack' => ['Figma', 'UI/UX Design', 'Prototyping'],
                'github_url' => null,
                'live_url' => 'https://www.figma.com/proto/Jgjv7dY6BxXNjxDd6K6Z5J/GAME-EDUKASI-BRAINBOOST?node-id=149-192&p=f&t=t44C216Lf3Dv5ujK-0&scaling=scale-down&content-scaling=fixed&page-id=0%3A1&starting-point-node-id=31%3A25',
                'project_date' => '2025-03-15',
            ],
            [
                'id' => 7,
                'title' => 'Traffic Sign Detection Pipeline',
                'category' => 'Machine Learning',
                'description' => 'An end-to-end object detection pipeline for traffic sign recognition, leveraging fine-tuned deep learning models to accurately detect and classify various traffic signs in real-world environments. Built with state-of-the-art computer vision techniques.',
                'thumbnail' => 'https://placehold.co/800x600/1e293b/06b6d4?text=Traffic+Sign+Detection',
                'status' => 'completed',
                'status_badge' => 'bg-emerald-500/20 text-emerald-400',
                'tech_stack' => ['Python', 'Object Detection', 'Deep Learning', 'Computer Vision'],
                'github_url' => 'https://github.com/Benhard121/Fine-Tuning-Object-Detection',
                'live_url' => null,
                'project_date' => '2025-02-20',
            ],
        ];

        $certificates = [
            [
                'id' => 1,
                'title' => '[Coding Camp 2026] Certificate Kelulusan',
                'organization' => 'Dicoding DBS Foundation',
                'description' => 'Certificate of completion for Coding Camp 2026 program.',
                'category' => 'Web Development',
                'thumbnail' => 'https://placehold.co/600x400/1e293b/06b6d4?text=Coding+Camp+2026',
                'issued_at' => '2026-01-15',
                'expires_at' => null,
                'credential_url' => asset('sertif/[Coding Camp 2026] Certificate - CACC284D6Y0956.pdf'),
            ],
            [
                'id' => 2,
                'title' => 'Belajar Dasar AI',
                'organization' => 'Dicoding Indonesia',
                'description' => 'Fundamental course covering artificial intelligence concepts, machine learning basics, and neural networks.',
                'category' => 'Artificial Intelligence',
                'thumbnail' => 'https://placehold.co/600x400/1e293b/9333ea?text=AI+Fundamental',
                'issued_at' => '2024-05-10',
                'expires_at' => null,
                'credential_url' => asset('sertif/sertifikat_course_Belajar Dasar AI.pdf'),
            ],
            [
                'id' => 3,
                'title' => 'Belajar Dasar Git dengan GitHub',
                'organization' => 'Dicoding Indonesia',
                'description' => 'Fundamental course covering version control with Git and collaboration using GitHub.',
                'category' => 'Version Control',
                'thumbnail' => 'https://placehold.co/600x400/1e293b/06b6d4?text=Git+GitHub',
                'issued_at' => '2024-04-15',
                'expires_at' => null,
                'credential_url' => asset('sertif/sertifikat_course_Belajar Dasar Git dengan GitHub.pdf'),
            ],
            [
                'id' => 4,
                'title' => 'Belajar Fundamental Deep Learning',
                'organization' => 'Dicoding Indonesia',
                'description' => 'In-depth course on deep learning fundamentals including neural networks architectures.',
                'category' => 'Deep Learning',
                'thumbnail' => 'https://placehold.co/600x400/1e293b/9333ea?text=Deep+Learning',
                'issued_at' => '2024-03-22',
                'expires_at' => null,
                'credential_url' => asset('sertif/sertifikat_course_Belajar Fundamental Deep Learning.pdf'),
            ],
            [
                'id' => 5,
                'title' => 'Belajar Machine Learning untuk Pemula',
                'organization' => 'Dicoding Indonesia',
                'description' => 'Introduction to machine learning for beginners covering algorithms and data processing.',
                'category' => 'Machine Learning',
                'thumbnail' => 'https://placehold.co/600x400/1e293b/06b6d4?text=ML+Pemula',
                'issued_at' => '2024-02-10',
                'expires_at' => null,
                'credential_url' => asset('sertif/sertifikat_course_Belajar Machine Learning untuk Pemula.pdf'),
            ],
            [
                'id' => 6,
                'title' => 'Introduction to Financial Literacy',
                'organization' => 'Dicoding Indonesia',
                'description' => 'Course covering fundamental financial literacy concepts and personal finance management.',
                'category' => 'Financial Literacy',
                'thumbnail' => 'https://placehold.co/600x400/1e293b/9333ea?text=Financial+Literacy',
                'issued_at' => '2024-01-20',
                'expires_at' => null,
                'credential_url' => asset('sertif/sertifikat_course_Introduction to Financial Literacy.pdf'),
            ],
            [
                'id' => 7,
                'title' => 'Membangun Proyek Deep Learning Tingkat Mahir',
                'organization' => 'Dicoding Indonesia',
                'description' => 'Advanced project-based deep learning course building complex neural network models.',
                'category' => 'Deep Learning',
                'thumbnail' => 'https://placehold.co/600x400/1e293b/06b6d4?text=Deep+Learning+Mahir',
                'issued_at' => '2024-06-15',
                'expires_at' => null,
                'credential_url' => asset('sertif/sertifikat_course_Membangun Proyek Deep Learning Tingkat Mahir.pdf'),
            ],
            [
                'id' => 8,
                'title' => 'Memulai Dasar Pemrograman untuk Menjadi Pengembang',
                'organization' => 'Dicoding Indonesia',
                'description' => 'Foundational programming course for aspiring software developers.',
                'category' => 'Programming',
                'thumbnail' => 'https://placehold.co/600x400/1e293b/9333ea?text=Dasar+Pemrograman',
                'issued_at' => '2023-12-05',
                'expires_at' => null,
                'credential_url' => asset('sertif/sertifikat_course_Memulai Dasar Pemrograman untuk Menjadi Pengembang.pdf'),
            ],
            [
                'id' => 9,
                'title' => 'Memulai Pemrograman dengan Python',
                'organization' => 'Dicoding Indonesia',
                'description' => 'Introduction to Python programming covering basic syntax, data structures, and functions.',
                'category' => 'Python',
                'thumbnail' => 'https://placehold.co/600x400/1e293b/06b6d4?text=Python+Dasar',
                'issued_at' => '2023-11-10',
                'expires_at' => null,
                'credential_url' => asset('sertif/sertifikat_course_Memulai Pemrograman dengan Python.pdf'),
            ],
            [
                'id' => 10,
                'title' => 'Pengenalan ke Logika Pemrograman (Programming Logic 101)',
                'organization' => 'Dicoding Indonesia',
                'description' => 'Fundamental programming logic course covering algorithms, flowcharts, and problem-solving.',
                'category' => 'Programming Logic',
                'thumbnail' => 'https://placehold.co/600x400/1e293b/9333ea?text=Programming+Logic',
                'issued_at' => '2023-10-18',
                'expires_at' => null,
                'credential_url' => asset('sertif/sertifikat_course_Pengenalan ke Logika Pemrograman (Programming Logic 101)pdf.pdf'),
            ],
        ];

        $totalProjects = count($projects);
        $totalCertificates = count($certificates);

        return compact('skills', 'experiences', 'projects', 'totalProjects', 'totalCertificates', 'certificates');
    }
}
