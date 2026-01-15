## Qué cambia
- feat | fix | refactor | ci | docs

- **feat** - Agregado test unitario AuditLoggerTest para validar el sistema de auditoría

<!-- Ejemplo: feat - Agregado módulo de reportes -->

## Evidencia
- [x] CI en verde
- [x] Tests ejecutados localmente

## Riesgo / rollback
- **Riesgo:** Ninguno - Solo agrega tests, no modifica código de producción
- **Rollback:** eliminar archivo tests/Unit/AuditLoggerTest.php
