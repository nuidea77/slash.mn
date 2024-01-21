<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use Spatie\Sitemap\Sitemap;
use Spatie\Sitemap\Tags\Url;
use Spatie\Sitemap\Tags\Tag;

class SitemapController extends Controller
{

    public function generate()
    {
        $sitemapIndex = Sitemap::create();

        // Add URL to the index sitemap for posts
        $postsSitemapUrl = url('/posts-sitemap.xml');
        $sitemapIndex->add(Url::create($postsSitemapUrl));

        // Add URL to the index sitemap for services
        $servicesSitemapUrl = url('/services-sitemap.xml');
        $sitemapIndex->add(Url::create($servicesSitemapUrl));

        // Return the index sitemap XML
        return Response::make($sitemapIndex->render(), 200, ['Content-Type' => 'application/xml']);
    }

    public function generatePosts()
    {
        $postsSitemap = Sitemap::create();

        // Add dynamic post URLs to the posts sitemap
        $posts = \App\Models\Post::all(); // Replace with your Post model
        foreach ($posts as $post) {
            $url = url("/blog/{$post->slug}"); // Adjust the URL structure for posts
            $postsSitemap->add(Url::create($url)->setLastModificationDate($post->updated_at)->setChangeFrequency(Url::CHANGE_FREQUENCY_DAILY));
        }

        // Return the posts sitemap XML
        return Response::make($postsSitemap->render(), 200, ['Content-Type' => 'application/xml']);
    }

    public function generateServices()
    {
        $servicesSitemap = Sitemap::create();

        // Add dynamic service URLs to the services sitemap
        $services = \App\Service::all(); // Replace with your Service model
        foreach ($services as $service) {
            $url = url("/service/{$service->slug}"); // Adjust the URL structure for services
            $servicesSitemap->add(Url::create($url)->setLastModificationDate($service->updated_at)->setChangeFrequency(Url::CHANGE_FREQUENCY_DAILY));
        }

        // Return the services sitemap XML
        return Response::make($servicesSitemap->render(), 200, ['Content-Type' => 'application/xml']);
    }
}

