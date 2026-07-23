<?php

namespace Database\Seeders;

use App\Models\Certificate;
use Illuminate\Database\Seeder;

class CertificateSeeder extends Seeder
{
    public function run(): void
    {
        $certificates = [
            [
                'title' => 'Laravel Certified Developer',
                'organization' => 'Laravel Certification',
                'description' => 'Professional certification for Laravel framework proficiency including advanced features, packages, and best practices.',
                'category' => 'Web Development',
                'thumbnail' => 'https://placehold.co/600x400/1e293b/3b82f6?text=Laravel+Certified',
                'issued_at' => '2024-06-15',
                'expires_at' => null,
                'credential_url' => 'https://example.com/cert/laravel',
            ],
            [
                'title' => 'AWS Solutions Architect',
                'organization' => 'Amazon Web Services',
                'description' => 'AWS Solutions Architect certification demonstrating expertise in designing distributed systems on AWS.',
                'category' => 'Cloud Computing',
                'thumbnail' => 'https://placehold.co/600x400/1e293b/ff9900?text=AWS+Solutions+Architect',
                'issued_at' => '2024-03-20',
                'expires_at' => '2027-03-20',
                'credential_url' => 'https://example.com/cert/aws',
            ],
            [
                'title' => 'Google Machine Learning Certificate',
                'organization' => 'Google',
                'description' => 'Advanced machine learning certificate covering neural networks, TensorFlow, and deep learning techniques.',
                'category' => 'Artificial Intelligence',
                'thumbnail' => 'https://placehold.co/600x400/1e293b/4285f4?text=Google+ML',
                'issued_at' => '2024-01-10',
                'expires_at' => null,
                'credential_url' => 'https://example.com/cert/google-ml',
            ],
            [
                'title' => 'React & Next.js Masterclass',
                'organization' => 'Frontend Masters',
                'description' => 'Comprehensive course covering React hooks, state management, SSR, SSG, and Next.js advanced patterns.',
                'category' => 'Web Development',
                'thumbnail' => 'https://placehold.co/600x400/1e293b/61dafb?text=React+Masterclass',
                'issued_at' => '2024-08-05',
                'expires_at' => null,
                'credential_url' => 'https://example.com/cert/react',
            ],
            [
                'title' => 'Docker & Kubernetes Professional',
                'organization' => 'Cloud Native Computing Foundation',
                'description' => 'Professional certification for containerization with Docker and orchestration with Kubernetes.',
                'category' => 'DevOps',
                'thumbnail' => 'https://placehold.co/600x400/1e293b/2496ed?text=Docker+K8s',
                'issued_at' => '2024-05-12',
                'expires_at' => '2026-05-12',
                'credential_url' => 'https://example.com/cert/docker-k8s',
            ],
            [
                'title' => 'Python for Data Science',
                'organization' => 'DataCamp',
                'description' => 'Data science certification covering Python, pandas, numpy, matplotlib, and machine learning libraries.',
                'category' => 'Data Science',
                'thumbnail' => 'https://placehold.co/600x400/1e293b/306998?text=Python+Data+Science',
                'issued_at' => '2023-11-20',
                'expires_at' => null,
                'credential_url' => 'https://example.com/cert/python-ds',
            ],
            [
                'title' => 'UI/UX Design Professional',
                'organization' => 'Interaction Design Foundation',
                'description' => 'Professional certification in user interface design, user experience research, and design thinking methodologies.',
                'category' => 'Design',
                'thumbnail' => 'https://placehold.co/600x400/1e293b/ff3366?text=UI+UX+Design',
                'issued_at' => '2024-07-01',
                'expires_at' => null,
                'credential_url' => 'https://example.com/cert/ui-ux',
            ],
            [
                'title' => 'GitHub Actions & CI/CD',
                'organization' => 'GitHub',
                'description' => 'Certification for GitHub Actions, continuous integration, deployment pipelines, and automation workflows.',
                'category' => 'DevOps',
                'thumbnail' => 'https://placehold.co/600x400/1e293b/6e40c9?text=GitHub+Actions',
                'issued_at' => '2024-09-10',
                'expires_at' => null,
                'credential_url' => 'https://example.com/cert/github-actions',
            ],
        ];

        foreach ($certificates as $certificate) {
            Certificate::create($certificate);
        }
    }
}

