<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    private $workTitle = [
        [
            'Lead',
            'Senior',
            'Direct',
            'Corporate',
            'Dynamic',
            'Future',
            'Product',
            'National',
            'Regional',
            'District',
            'Central',
            'Global',
            'Relational',
            'Customer',
            'Investor',
            'Dynamic',
            'International',
            'Legacy',
            'Forward',
            'Interactive',
            'Internal',
            'Human',
            'Chief',
            'Principal',
        ],
        [
            'Solutions',
            'Program',
            'Brand',
            'Security',
            'Research',
            'Marketing',
            'Directives',
            'Implementation',
            'Integration',
            'Functionality',
            'Response',
            'Paradigm',
            'Tactics',
            'Identity',
            'Markets',
            'Group',
            'Resonance',
            'Applications',
            'Optimization',
            'Operations',
            'Infrastructure',
            'Intranet',
            'Communications',
            'Web',
            'Branding',
            'Quality',
            'Assurance',
            'Impact',
            'Mobility',
            'Ideation',
            'Data',
            'Creative',
            'Configuration',
            'Accountability',
            'Interactions',
            'Factors',
            'Usability',
            'Metrics',
            'Team',
        ],
        [
            'Supervisor',
            'Associate',
            'Executive',
            'Liason',
            'Officer',
            'Manager',
            'Engineer',
            'Specialist',
            'Director',
            'Coordinator',
            'Administrator',
            'Architect',
            'Analyst',
            'Designer',
            'Planner',
            'Synergist',
            'Orchestrator',
            'Technician',
            'Developer',
            'Producer',
            'Consultant',
            'Assistant',
            'Facilitator',
            'Agent',
            'Representative',
            'Strategist',
        ]
    ];

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $firstWord = $this->workTitle[0][random_int(0, count($this->workTitle[0])-1)];
        $secondWord = $this->workTitle[1][random_int(0, count($this->workTitle[1])-1)];
        $thirdWord = $this->workTitle[2][random_int(0, count($this->workTitle[2])-1)];
        $status = ['Active', 'Inactive'];
        $role = ['Admin', 'User'];
        return [
            'name' => $this->faker->name(),
            'email' => $this->faker->unique()->safeEmail(),
            'title' => "$firstWord $secondWord $thirdWord",
            'status' => $status[random_int(0,1)],
            'role' => $role[random_int(0,1)],
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => Str::random(10),
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     *
     * @return static
     */
    public function unverified()
    {
        return $this->state(function (array $attributes) {
            return [
                'email_verified_at' => null,
            ];
        });
    }
}
