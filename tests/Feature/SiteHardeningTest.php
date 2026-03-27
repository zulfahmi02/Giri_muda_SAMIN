<?php

namespace Tests\Feature;

use Tests\TestCase;

class SiteHardeningTest extends TestCase
{
    public function test_public_pages_send_security_headers(): void
    {
        $this->withoutVite();

        $response = $this->get('/');

        $response->assertOk()
            ->assertHeader('X-Content-Type-Options', 'nosniff')
            ->assertHeader('X-Frame-Options', 'SAMEORIGIN')
            ->assertHeader('Referrer-Policy', 'strict-origin-when-cross-origin');

        $this->assertStringContainsString("default-src 'self'", (string) $response->headers->get('Content-Security-Policy'));
        $this->assertStringContainsString("script-src 'self'", (string) $response->headers->get('Content-Security-Policy'));
    }

    public function test_public_pages_no_longer_reference_legacy_cdns(): void
    {
        $this->withoutVite();

        $galleryHtml = $this->get(route('vr.index'))->assertOk()->getContent();
        $viewerHtml = $this->get(route('vr.view', 'rumah-tradisional'))->assertOk()->getContent();

        $this->assertStringNotContainsString('cdn.jsdelivr.net', $galleryHtml);
        $this->assertStringNotContainsString('cdnjs.cloudflare.com', $galleryHtml);
        $this->assertStringNotContainsString('fonts.googleapis.com', $galleryHtml);
        $this->assertStringNotContainsString('images.unsplash.com', $galleryHtml);

        $this->assertStringNotContainsString('cdn.jsdelivr.net', $viewerHtml);
        $this->assertStringContainsString('data-panorama-base-url=', $viewerHtml);
    }
}
