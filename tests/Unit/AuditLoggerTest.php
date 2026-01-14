<?php

namespace Tests\Feature\Services;

use App\Services\AuditLogger;
use Illuminate\Support\Facades\Log;
use Tests\TestCase;

class AuditLoggerTest extends TestCase
{
    public function test_puede_registrar_un_log_basico()
    {
        // Arrange
        Log::shouldReceive('channel')
            ->with('daily')
            ->once()
            ->andReturnSelf();

        Log::shouldReceive('info')
            ->once()
            ->with(\Mockery::on(function ($mensaje) {
                dump($mensaje);
                // Verifica que el mensaje contenga los datos esperados
                $contieneTipo = str_contains($mensaje, 'TIPO: PRUEBA');
                $contieneNivel = str_contains($mensaje, 'NIVEL: info');
                $contieneDescripcion = str_contains($mensaje, 'DESCRIPCIÓN: Descripción de prueba');
                return $contieneTipo && $contieneNivel && $contieneDescripcion;
            }));

        // Act
        AuditLogger::log('PRUEBA', 'info', 'Descripción de prueba');
        // Assert - Si llega aquí, todas las expectativas se cumplieron
        $this->assertTrue(true);
    }
}
