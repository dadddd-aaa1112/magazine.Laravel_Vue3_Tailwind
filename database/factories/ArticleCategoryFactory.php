<?php

namespace Database\Factories;

use App\Models\Article;
use App\Models\ArticleCategory;
use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\articlecategory>
 */
class ArticleCategoryFactory extends Factory
{
    protected $model = ArticleCategory::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'article_id' => Article::get()->random()->id,
            'category_id' => Category::get()->random()->id,
        ];
    }
}
