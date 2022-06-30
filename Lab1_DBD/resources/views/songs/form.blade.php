<h1>{{$modo}} </h1>
<br>
<label for="titulo"> Titulo canción </label>
<input type="text" name="titulo" value="{{ isset($songs->titulo)?$songs->titulo:'' }}"  id="titulo">
<br>

<label for="duracion"> Duración </label>
<input type="text" name="duracion" value="{{ isset($songs->duracion)?$songs->duracion:'hh:mm:ss' }}" id="duracion"> 
<br>

<label for="restriccion_edad"> Restricción de edad </label>
<select type="text" name="restriccion_edad" value="{{ isset($songs->restriccion_edad)?$songs->restriccion_edad:'' }}" id="restriccion_edad">
<option>false</option>
<option>true</option>
</select> <br>

<label for="fecha_creacion"> Fecha de creación </label>
<input type="date" name="fecha_creacion" value="{{ isset($songs->fecha_creacion)?$songs->fecha_creacion:'' }}" id="fecha_creacion">
<br>

<label for="id_genero"> Género </label>
<input type="text" name="id_genero" value="{{ isset($songs->id_genero)?$songs->id_gener:'' }}" id="id_genero">
<br>

<label for="id_pais"> País </label>
<input type="text" name="id_pais" value="{{ isset($songs->id_pais)?$songs->id_pais:'' }}" id="id_pais">
<br>

<label for="id_album"> Albúm </label>
<input type="text" name="id_album" value="{{ isset($songs->id_album)?$songs->id_album:'' }}" id="id_album">
<br>
<label> Imagen: </label> <br>
<label for="foto"> </label>
@if(isset($songs->foto))
<img src="{{ asset('storage'.'/'.$songs->foto) }}" width="100" alt="">
@endif
<br>
<input type="file" name="foto" value="" id="foto">
<br>


<input type="submit" value="{{$modo}} datos">

<a href="{{ url('songs/') }}"  > Volver </a>