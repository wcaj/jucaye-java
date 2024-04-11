package com.jucaye.jucaye.controlles;

import com.jucaye.jucaye.dao.UsuarioDao;
import com.jucaye.jucaye.models.Usuario;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.web.bind.annotation.*;


import java.util.List;


@RestController
public class UsuarioController {

    @Autowired
    private UsuarioDao usuarioDao;



    @RequestMapping(value = "usuarios/{id}", method = RequestMethod.DELETE)
    public void eliminar(@PathVariable long id) {
        usuarioDao.eliminar(id);


    }

    @RequestMapping(value = "usuarios/{id}", method = RequestMethod.GET)
    public List<Usuario> getUsuario(){
       return usuarioDao.getUsuarios();
    }


    @RequestMapping(value = "usuarios")
    public List<Usuario> getUsuarios(){
        return usuarioDao.getUsuarios();
    }


    @RequestMapping(value = "usuarios", method = RequestMethod.POST)
    public void registrarUsuario(@RequestBody Usuario usuario){
        usuarioDao.registrar(usuario);
    }


}
