package com.jucaye.jucaye.controlles;

import com.jucaye.jucaye.dao.UsusarioDao;
import com.jucaye.jucaye.models.Usuario;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.web.bind.annotation.PathVariable;
import org.springframework.web.bind.annotation.RequestMapping;
import org.springframework.web.bind.annotation.RestController;

import java.util.List;


@RestController
public class UsusarioController {

    @Autowired
    private UsusarioDao ususarioDao;


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
    @RequestMapping(value = "usuario")
    public List<Usuario> getUsuario(){
       return ususarioDao.getUsuarios();
    }



}
