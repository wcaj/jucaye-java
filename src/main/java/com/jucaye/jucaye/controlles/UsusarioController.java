package com.jucaye.jucaye.controlles;

import com.jucaye.jucaye.models.Usuario;
import org.springframework.web.bind.annotation.PathVariable;
import org.springframework.web.bind.annotation.RequestMapping;
import org.springframework.web.bind.annotation.RestController;

@RestController
public class UsusarioController {
    @RequestMapping(value = "usuario/{id}")
    public Usuario getUsuario(@PathVariable long id) {
        Usuario usuario = new Usuario();
        usuario.setId(id);
        usuario.setCedula("123456");
        usuario.setNombre("juan");
        usuario.setApellido("niño");
        usuario.setFechaNacimiento("12/15/2014");
        usuario.setDireccion("cucuta");
        usuario.setClave("123475");
        return usuario;
    }
    @RequestMapping(value = "usuario1")
    public Usuario editar(){
        Usuario usuario = new Usuario();

        usuario.setCedula("123456");
        usuario.setNombre("juan");
        usuario.setApellido("niño");
        usuario.setFechaNacimiento("12/15/2014");
        usuario.setDireccion("cucuta");
        usuario.setClave("123475");
        return usuario;
    }
    @RequestMapping(value = "usuario2")
    public Usuario eliminar(){
        Usuario usuario = new Usuario();

        usuario.setCedula("123456");
        usuario.setNombre("juan");
        usuario.setApellido("niño");
        usuario.setFechaNacimiento("12/15/2014");
        usuario.setDireccion("cucuta");
        usuario.setClave("123475");
        return usuario;
    }
    @RequestMapping(value = "usuario3")
    public Usuario buscar(){
        Usuario usuario = new Usuario();

        usuario.setCedula("123456");
        usuario.setNombre("juan");
        usuario.setApellido("niño");
        usuario.setFechaNacimiento("12/15/2014");
        usuario.setDireccion("cucuta");
        usuario.setClave("123475");
        return usuario;
    }



}
