<?xml version="1.0" encoding="UTF-8"?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
    <url>
        <loc>http://avtobox.net/</loc>
        <priority>0.9</priority>
    </url>
    <url>
        <loc>http://avtobox.net/home-1</loc>
    </url>
    <url>
        <loc>http://avtobox.net/shop</loc>
    </url>
    <url>
        <loc>http://avtobox.net/shop1/armrests</loc>
    </url>
    <url>
        <loc>http://avtobox.net/shop1/armrests</loc>
    </url>
    <url>
        <loc>http://avtobox.net/contacts</loc>
        <priority>0.8</priority>
    </url>
    <url>
        <loc>http://avtobox.net/contact-3</loc>
        <priority>0.8</priority>
    </url>
    <url>
        <loc>http://avtobox.net/about</loc>
    </url>
    <url>
        <loc>http://avtobox.net//delivery</loc>
    </url>

    @foreach($posts as $post)
        <url>
            <loc>http://avtobox.net/shop1/armrests/all/{{ $post->car_id }}</loc>
        </url>
    @endforeach

</urlset>
