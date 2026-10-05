<?php

namespace Tests\Feature;

use Tests\TestCase;

class PublicInstructionsTest extends TestCase
{
    public function test_instructions_are_public_without_bitrix24_context(): void
    {
        $this->get('/instructions')->assertOk()->assertSeeText('Инструкции');

        foreach (config('instructions') as $slug => $article) {
            $this->get('/instructions/'.$slug)->assertOk()
                ->assertSeeText($article['title'])
                ->assertDontSeeText('Приложение доступно только внутри Битрикс24')
                ->assertHeader('X-Content-Type-Options', 'nosniff');
        }

        $this->assertFalse(session()->has('bitrix24.context'));
        $this->get('/')->assertSeeText('Приложение доступно только внутри Битрикс24');
    }

    public function test_unknown_instruction_is_not_found(): void
    {
        $this->get('/instructions/nonexistent')->assertNotFound();
    }

    public function test_docx_download_is_present(): void
    {
        $this->get('/instructions/bitrix24')->assertOk()
            ->assertSee('/instructions/bitrix24-local-app-instruction.docx', false)
            ->assertDontSee('delovayasreda.bitrix24.ru');
        $this->assertFileExists(public_path('instructions/bitrix24-local-app-instruction.docx'));
    }
}
