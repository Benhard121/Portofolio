<?php

namespace Database\Seeders;

use App\Models\Project;
use Illuminate\Database\Seeder;

class ProjectSeeder extends Seeder
{
    public function run(): void
    {
        $projects = [
            [
                'title' => 'E-Commerce Platform',
                'slug' => 'e-commerce-platform',
                'description' => 'A full-featured e-commerce platform built with Laravel and Vue.js, featuring real-time inventory management, payment gateway integration, and admin dashboard.',
                'category' => 'web',
                'technologies' => 'Laravel,Vue.js,MySQL,Stripe,Redis',
                'status' => 'completed',
                'thumbnail' => 'https://placehold.co/800x600/1e293b/3b82f6?text=E-Commerce',
                'github_url' => 'https://github.com/username/ecommerce',
                'live_url' => 'https://example.com/ecommerce',
                'featured' => true,
                'project_date' => '2024-10-15',
            ],
            [
                'title' => 'Mobile Banking App',
                'slug' => 'mobile-banking-app',
                'description' => 'A secure and intuitive mobile banking application with biometric authentication, real-time transactions, and spending analytics.',
                'category' => 'mobile',
                'technologies' => 'React Native,Node.js,PostgreSQL,AWS',
                'status' => 'completed',
                'thumbnail' => 'https://placehold.co/800x600/1e293b/10b981?text=Mobile+Banking',
                'github_url' => 'https://github.com/username/banking-app',
                'live_url' => null,
                'featured' => true,
                'project_date' => '2024-08-20',
            ],
            [
                'title' => 'Desktop POS System',
                'slug' => 'desktop-pos-system',
                'description' => 'A comprehensive point-of-sale system for retail businesses with inventory tracking, sales reporting, and multi-user support.',
                'category' => 'desktop',
                'technologies' => 'Electron,React,SQLite,Node.js',
                'status' => 'completed',
                'thumbnail' => 'https://placehold.co/800x600/1e293b/f59e0b?text=POS+System',
                'github_url' => 'https://github.com/username/pos-system',
                'live_url' => null,
                'featured' => false,
                'project_date' => '2024-06-10',
            ],
            [
                'title' => 'AI Image Recognition',
                'slug' => 'ai-image-recognition',
                'description' => 'An AI-powered image recognition system using TensorFlow and Python, capable of identifying objects, faces, and text in images.',
                'category' => 'ai',
                'technologies' => 'Python,TensorFlow,Flask,React,Docker',
                'status' => 'completed',
                'thumbnail' => 'https://placehold.co/800x600/1e293b/8b5cf6?text=AI+Image+Recognition',
                'github_url' => 'https://github.com/username/ai-image-recognition',
                'live_url' => 'https://example.com/ai-demo',
                'featured' => true,
                'project_date' => '2024-04-05',
            ],
            [
                'title' => '3D Adventure Game',
                'slug' => '3d-adventure-game',
                'description' => 'An immersive 3D adventure game built with Unity, featuring procedurally generated worlds, AI enemies, and multiplayer support.',
                'category' => 'game',
                'technologies' => 'Unity,C#,Blender,Photon',
                'status' => 'ongoing',
                'thumbnail' => 'https://placehold.co/800x600/1e293b/ef4444?text=3D+Game',
                'github_url' => 'https://github.com/username/adventure-game',
                'live_url' => null,
                'featured' => false,
                'project_date' => '2024-11-01',
            ],
            [
                'title' => 'Real-Time Chat Application',
                'slug' => 'real-time-chat-application',
                'description' => 'A real-time messaging application with end-to-end encryption, file sharing, and group chat features using WebSockets.',
                'category' => 'web',
                'technologies' => 'Laravel,Reverb,Vue.js,WebSocket,MySQL',
                'status' => 'completed',
                'thumbnail' => 'https://placehold.co/800x600/1e293b/06b6d4?text=Chat+App',
                'github_url' => 'https://github.com/username/chat-app',
                'live_url' => 'https://example.com/chat',
                'featured' => true,
                'project_date' => '2024-02-14',
            ],
            [
                'title' => 'Fitness Tracker Mobile App',
                'slug' => 'fitness-tracker-mobile',
                'description' => 'A cross-platform mobile fitness tracker with workout logging, progress charts, nutrition tracking, and social features.',
                'category' => 'mobile',
                'technologies' => 'Flutter,Dart,Firebase,Google Fit API',
                'status' => 'completed',
                'thumbnail' => 'https://placehold.co/800x600/1e293b/22c55e?text=Fitness+Tracker',
                'github_url' => 'https://github.com/username/fitness-tracker',
                'live_url' => null,
                'featured' => false,
                'project_date' => '2023-12-20',
            ],
            [
                'title' => 'Machine Learning Dashboard',
                'slug' => 'machine-learning-dashboard',
                'description' => 'An interactive dashboard for training and monitoring machine learning models with real-time metrics and visualization.',
                'category' => 'ai',
                'technologies' => 'Python,TensorFlow,Streamlit,Docker,Kubernetes',
                'status' => 'ongoing',
                'thumbnail' => 'https://placehold.co/800x600/1e293b/a855f7?text=ML+Dashboard',
                'github_url' => 'https://github.com/username/ml-dashboard',
                'live_url' => null,
                'featured' => false,
                'project_date' => '2024-09-01',
            ],
            [
                'title' => 'Inventory Management System',
                'slug' => 'inventory-management-system',
                'description' => 'A desktop inventory management system with barcode scanning, stock alerts, purchase orders, and detailed reporting.',
                'category' => 'desktop',
                'technologies' => 'C#,WPF,SQL Server,Entity Framework',
                'status' => 'completed',
                'thumbnail' => 'https://placehold.co/800x600/1e293b/eab308?text=Inventory+Management',
                'github_url' => 'https://github.com/username/inventory-system',
                'live_url' => null,
                'featured' => false,
                'project_date' => '2023-10-15',
            ],
            [
                'title' => 'Multiplayer Quiz Game',
                'slug' => 'multiplayer-quiz-game',
                'description' => 'A real-time multiplayer quiz game with leaderboards, power-ups, and customizable quiz categories.',
                'category' => 'game',
                'technologies' => 'Unity,C#,Node.js,Socket.io,Redis',
                'status' => 'completed',
                'thumbnail' => 'https://placehold.co/800x600/1e293b/f97316?text=Quiz+Game',
                'github_url' => 'https://github.com/username/quiz-game',
                'live_url' => 'https://example.com/quiz',
                'featured' => false,
                'project_date' => '2023-08-25',
            ],
        ];

        foreach ($projects as $project) {
            Project::create($project);
        }
    }
}

