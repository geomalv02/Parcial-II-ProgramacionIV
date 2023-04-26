Titulo:
<input type="text" name="titulo" id="titulo" value="{{ isset($peliculas)?$peliculas->titulo:'' }}" /><br />
Director:
<input type="text" name="director" id="director" value="{{ isset($peliculas)?$peliculas->director:'' }}" /><br />
Año de lanzamiento:
<input type="number" name="año" id="año" value="{{ isset($peliculas)?$peliculas->año:'' }}" /><br/>
Genero:
<input type="text" name="genero" id="genero" value="{{ isset($peliculas)?$peliculas->genero:'' }}" /><br />

<button type="submit">Guardar</button>