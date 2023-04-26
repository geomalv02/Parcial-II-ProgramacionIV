Titulo de Critica:
<input type="text" name="titulo" id="titulo" value="{{ isset($criticas)?$criticas->titulodecritica:'' }}" /><br />
Critico:
<input type="text" name="director" id="director" value="{{ isset($peliculas)?$criticas->critico:'' }}" /><br />
Fecha de lanzamiento:
<input type="number" name="año" id="año" value="{{ isset($peliculas)?$criticas->fechadelanzamiento:'' }}" /><br/>
Genero:
<input type="text" name="genero" id="genero" value="{{ isset($peliculas)?$criticas->genero:'' }}" /><br />

<button type="submit">Guardar</button>