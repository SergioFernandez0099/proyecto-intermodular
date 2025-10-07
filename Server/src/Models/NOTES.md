# Notas de modelos y Eloquent ORM

## $fillable
La propiedad $fillable sirve para proteger los modelos contra asignación masiva (Mass Assignment).
Solo los campos listados pueden ser llenados usando `create()` o `fill()`.
Esto hace que si en una petición llegan campos que no sean los marcados con `$fillable` no se rellenarán.