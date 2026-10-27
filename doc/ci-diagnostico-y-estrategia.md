# CI del Portal — diagnóstico y estrategia

> **Relevado:** 2026-09-20 sobre la API de GitHub · **Workflows:** ninguno
> **Estrategia común de los proyectos:** repositorio de infraestructura, privado
> **Estado al cerrar este documento:** nada corregido todavía
>
> ⚠️ **Este repositorio es público.** Aquí no van direcciones de servidores, rutas de despliegue,
> nombres de ficheros de clave ni referencias a otros proyectos.

## El dato

Cero workflows. Cero ejecuciones de GitHub Actions. Cero correos de fallo.

A diferencia de otros proyectos del inventario, **aquí eso no es alarmante**: este repositorio no
sirve una aplicación con datos de cliente en producción. La ausencia de CI es proporcionada al
riesgo.

Este documento existe para que esa proporción sea una **decisión escrita** y no un olvido, y para
que si el proyecto crece, la decisión se revise.

## Lo que sí conviene activar

Por ser público, este repositorio tiene gratis capacidades que los privados de la misma cuenta no
pueden tener sin pagar:

| Capacidad | Estado hoy | Coste |
|---|---|---|
| *Rulesets* y protección de rama | **0 configurados** | gratis |
| Escaneo de secretos | ✅ activo | gratis |
| Protección de push de secretos | ✅ activo | gratis |
| Minutos de Actions | ilimitados, sin usar | gratis |
| Dependabot | **deshabilitado** | gratis |

Dos de estas cinco están sin aprovechar y no cuestan nada:

- **Un *ruleset* en `main`** que impida el push forzado y el borrado de la rama. Es una casilla y
  protege contra el accidente irreversible.
- **Dependabot**, que avisa de dependencias con vulnerabilidad conocida. En un repositorio público
  esto importa más, no menos: el código es legible por cualquiera, y también lo son sus
  dependencias.

## Cuándo habría que añadir CI

Este documento se revisa si ocurre cualquiera de estas cosas:

- El proyecto empieza a desplegarse automáticamente a un servidor.
- Empieza a manejar datos de personas.
- Trabaja en él más de una persona.
- Adquiere dependencias que se actualicen con frecuencia.

Hasta entonces, un CI aquí sería maquinaria que mantener sin problema que resolver.

> **La regla que se aplica al revés:** en otros proyectos del inventario el problema es CI heredado
> que nadie adaptó y que solo produce ruido. Añadir un pipeline «por completitud» a un repositorio
> que no lo necesita crea exactamente ese problema desde cero.

## Qué se va a hacer

| # | Acción | Estado |
|---|---|---|
| 1 | *Ruleset* en `main`: sin push forzado, sin borrado | pendiente |
| 2 | Habilitar Dependabot | 🟢 **no espera a nada** |
| 3 | Revisar este documento si se cumple alguna condición de la lista anterior | continuo |

## Las reglas que quedan

1. **Lo que es gratuito y protege, se activa.** Los *rulesets* de este repositorio no cuestan nada.
2. **No añadir CI sin un problema que resuelva.** Un pipeline que nadie mira se convierte en ruido, y
   el ruido tapa las señales reales de los otros proyectos.
3. **Este repositorio es público y se trata como público.** Nada de direcciones de servidores, rutas
   de despliegue, nombres de claves ni datos de otros proyectos.
