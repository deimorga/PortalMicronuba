```
trigger: always_on
description: Restaura el contexto del proyecto leyendo la documentación clave.
---

1.  **Leer Reglas:**
    *   Lee `.agent/RULES.md` para entender los límites y la regla de idioma.

2.  **Leer Mapa del Proyecto:**
    *   Lee `doc/estructura_proyecto.md` para entender dónde están los archivos.

3.  **Leer Estado Actual:**
    *   Lee `doc/contexto_gemini_web.md` para saber exactamente en qué quedamos en la última sesión.
    *   Lee `task.md` (buscar en artefactos recientes) para ver los pendientes.

4.  **Verificación de Entorno (Sanity Check):**
    *   Ejecuta `ls -F` en la raíz para confirmar que existe `docker-compose.yml` e `index.php`.

5.  **Regla de Idioma (MANDATORIO):**
    *   **SIEMPRE** responde, planifica y genera artefactos en **ESPAÑOL**.
```