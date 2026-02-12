# Manual de Uso: Sistema de Gobierno Antigravity

Este documento explica cómo tú (Usuario) y yo (Agente) interactuamos para mantener el proyecto ordenado y sin "amnesia".

## 1. Al Iniciar una Conversación (Start)
**Objetivo:** Que el agente "descargue" todo el conocimiento previo.
**Acción:** Escribe el comando o la instrucción:
> `/restore_context`
> *(O dile: "Restaura el contexto del proyecto")*

**Lo que sucede por detrás:**
1.  Leo `.agent/RULES.md` (Entiendo las prohibiciones y la regla de idioma).
2.  Leo `doc/estructura_proyecto.md` (Entiendo el mapa del código).
3.  Leo `doc/contexto_gemini_web.md` (Recupero la memoria de la última sesión).

## 2. Durante la Conversación (Sync/Checkpoint)
**Objetivo:** Validar que no me he perdido o "alucinado".
**Acción:**
*   **Si dudas de mi rumbo:** Pregunta *"¿En qué tarea del task.md vamos?"*.
*   **Si hicimos muchos cambios:** Pide *"Genera un Checkpoint"* o *"Actualiza el contexto"*.

**Tu garantía:**
Yo mantengo actualizado el archivo `task.md` en tiempo real. Puedes pedir verlo cuando quieras para confirmar el progreso.

## 3. Al Cerrar una Conversación (End)
**Objetivo:** Guardar el estado para el "Yo del futuro".
**Acción:** Antes de irte, di:
> "Cierra la sesión y actualiza el contexto."

**Lo que sucede por detrás:**
1.  Actualizo `doc/contexto_gemini_web.md` con los logros y pendientes.
2.  Actualizo `task.md` con el estado final de las tareas.

---
**Resumen:**
Tu rol es **Gatillar** estos momentos clave. Mi rol es **Obedecer** las reglas definidas en `.agent/RULES.md`.
